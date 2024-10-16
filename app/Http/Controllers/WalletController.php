<?php

namespace App\Http\Controllers;

use App\Models\AccountCoin;
use App\Models\Ledger;
use App\Models\Wallet;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class WalletController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $savings = $user->wallet->save;
        $investment = $user->wallet->invest;
        $trading = $user->wallet->trade;
        $wallet = $user->wallet->balance;
        $locked = ($user->wallet->invest + $user->wallet->trade + $user->wallet->save);  // $user->wallet->locked;

        $ledgerBalance = $user->investments()->where('status', 'active')->sum('total_return');
        $transactions = $user->transaction(); 

        // dd($transactions->get());

        $availableCash = ($wallet + ($savings + $investment + $trading));

        // Group transactions by type (save, invest, trade) and by date
        $transact = $user->transaction()
        ->select(
            DB::raw('DATE(created_at) as date'),
            'type',
            DB::raw('SUM(amount) as total_amount')
        )
        ->groupBy('type', DB::raw('DATE(created_at)'))
        ->orderBy(DB::raw('DATE(created_at)'), 'asc')
        ->get();

        // Prepare data for the chart
        $alignedSavings = $transact->where('type', 'save')->pluck('total_amount');
        $alignedInvestments = $transact->where('type', 'invest')->pluck('total_amount');
        $alignedTrading = $transact->where('type', 'trade')->pluck('total_amount');
        $dates = $transact->pluck('date')->unique()->values(); // Get unique dates

        // Pass data to view
        return view('user_.wallet.index', [ 
            'title' => 'Wallets', 
            'setting' => Setting::all()->first(), 
            'transactions' => $transactions->latest()->paginate(10),
            'ledgerBalance' => $ledgerBalance,
            'savings' => $savings,
            'trading' => $trading,
            'investment' => $investment,
            'locked' => $locked,
            'wallet' => $availableCash,
            'cash' => $wallet,
            // Pass aligned data and dates to view
            'dates' => $dates,
            'alignedSavings' => $alignedSavings->values(),
            'alignedInvestments' => $alignedInvestments->values(),
            'alignedTrading' => $alignedTrading->values(),
        ]);
    }

    public function deposit(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric', 'gt:0', 'min:10'],
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }

        if($request->coinvalue) {
            $coin = AccountCoin::find($request->coin);

            if ($coin) {
                $method = 'coin';
                $crypto = $coin->symbol ?? 'null';
                $value = $request->coinvalue;
            } else {
                return back()->withErrors($validator)->withInput()->with('error', 'Invalid Network');
            }
        } else {
            $method = 'bank';
            $crypto = 'USD';
            $value = 0;
        }

        $type = 'credit';
        
        $user = auth()->user();

        $user->wallet->deposit()->create([
            'amount' => $request->amount,
            'type' => $type,
            'method' => $method,
            'currency' => $crypto,
            'value' => $value,
            'status' => 'pending',
        ]);

        $transaction = $user->transaction('invest')->create([
            'amount' => $request->amount,
            'data_id' => 0,
            'type' => 'wallet',
            'status' => 'pending',
            'description' => 'User Deposit',
            'method' => 'credit'
        ]);

        if ($transaction) {
            // NotificationController::sendDepositQueuedNotification($transaction);
            // return redirect()->route('wallet')->with('success', 'Deposit queued successfully');
            return back()->withInput()->with('success', 'Deposit queued successfully');
        }
        return redirect()->route('wallet')->with('error', 'Error processing deposit');
    }

    public function walletSwap(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = auth()->user();

        // Validate request with improved rules
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric', 'gt:0'],
            'from_account' => ['required', 'in:invest,save,trade,wallet'],
            'to_account' => ['required', 'in:invest,save,trade'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'Invalid input data');
        }

        $amount = $request->input('amount');
        $fromAccount = $request->input('from_account');
        $toAccount = $request->input('to_account');

        // Ensure from_account and to_account are different
        if ($fromAccount === $toAccount) {
            return back()->withInput()->with('error', 'Source and destination accounts must be different');
        }

        // Calculate balance from the ledger for the appropriate account
        $fromWalletBalance = $user->wallet->getAccountBalance($user->wallet, $fromAccount);

        // Check if the user has enough balance in the source account
        if ($fromWalletBalance < $amount) {
            return back()->withInput()->with('error', 'Insufficient balance in the source account');
        }

        // Start transaction to ensure atomicity
        DB::beginTransaction();
        try {
            // Debit the source account via ledger
            Ledger::debit($user->wallet, $amount, $fromAccount, null, 'Transfer to ' . $toAccount);

            // Credit the destination account via ledger
            Ledger::credit($user->wallet, $amount, $toAccount, null, 'Transfer from ' . $fromAccount);

            $transaction = $user->transaction('wallet')->create([
                'amount' => $amount,
                'data_id' => 0,
                'type' => 'wallet',
                'status' => 'approved',
                'description' => "Transfer from $fromAccount to $toAccount",
                'method' => 'credit'
            ]);

            // Commit the transaction
            DB::commit();

            return back()->with('success', 'Transfer was made successfully');

        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollBack();

            // Optionally log the error for debugging
            Log::error('Wallet transfer failed: ' . $e->getMessage());

            return back()->withInput()->with('error', 'An error occurred during the transfer');
        }
    }

    public function walletReset()
    {
        $user = auth()->user();
        $wallet = $user->wallet;

        // Helper function to calculate balance for a given account
        $calculateBalance = function ($account) use ($wallet) {
            $credits = $wallet->ledgerEntries()->where('account', $account)->where('type', 'credit')->sum('amount') ?? 0;
            $debits = $wallet->ledgerEntries()->where('account', $account)->where('type', 'debit')->sum('amount') ?? 0;
            return $credits - $debits;
        };

        // Calculate balances for each account
        $updateData = [
            'balance' => $calculateBalance('balance'),
            'invest'  => $calculateBalance('invest'),
            'save'    => $calculateBalance('save'),
            'trade'   => $calculateBalance('trade'),
        ];

        // Update the wallet
        $wallet->update($updateData);

        return response()->json(['wallet' => $wallet]);
    }






















    public function login()
    {
        $API_Key = env('MONNIFY_API_KEY');
        $Secret_Key = env('MONNIFY_SECRET_KEY');
        $ch = curl_init();
        
        $headers = array(
            'Content-Type:application/json',
            'Authorization: Basic '. base64_encode($API_Key . ":" . $Secret_Key)
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, env('MONNIFY_BASE_URL') . "/api/v1/auth/login");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($output, true);

        $token = $json['responseBody']['accessToken'];

        return $token;
    }

    public function reserveAccount() 
    {
        $user = auth()->user();
        $accessToken = $this->login();
        $ref = str_replace([':', '-', ' '], '', now()->timezone('Africa/Lagos')->toDateTimeString());
        
        return Http::withHeaders(['Authorization' => "Bearer $accessToken", 'Content-Type' => 'application/json'])
            ->post(env('MONNIFY_BASE_URL').'/api/v2/bank-transfer/reserved-accounts', [
                'accountReference' => $ref,
                'accountName' => "{$user['name']} - monnify",
                'currencyCode' => 'NGN',
                'contractCode' => env('MONNIFY_CONTRACT_CODE'),
                'restrictPaymentSource' => false,
                'customerEmail' => $user['email'],
                'customerName' => "{$user['name']}",
                'getAllAvailableBanks' => true,
                'preferredBanks' => ['035'],
            ])
            ->json();
    }

    public function generateVirtualAccount()
    {
        $user = auth()->user();
        $account = $this->reserveAccount();
        if (! isset($account['requestSuccessful'])) {
            throw new BadRequestException($account['responseMessage'], 400);
        }
        if (! $account['requestSuccessful']) {
            throw new BadRequestException('Error generating account number. Please login again', 400);
        }
        $bankDetails = $account['responseBody']['accounts'][0];

        $virtualAccount = [
            'bank_name' => $bankDetails['bankName'],
            'account_name' => $bankDetails['accountName'],
            'account_number' => $bankDetails['accountNumber'],
            'bank_code' => $bankDetails['bankCode'],
            'account_reference' => $account['responseBody']['accountReference'],
            'customer_name' => $user['name'],
        ];

        $user->update(['virtual_account' => $virtualAccount]);

        return back()->with('success', 'Virtual Account created successfully');
    }

    

    public function getWalletBalance(Request $request)
    {
        $user = auth()->user();
        $account = $request->query('account');

        $balance = 0;
        if ($account === 'save') {
            $balance = $user->wallet->getAccountBalance($user->wallet, 'save');
        } elseif ($account === 'invest') {
            $balance = $user->wallet->getAccountBalance($user->wallet, 'invest');
        } elseif ($account === 'trade') {
            $balance = $user->wallet->getAccountBalance($user->wallet, 'trade');
        } elseif ($account === 'wallet') {
            $balance = $user->wallet->getAccountBalance($user->wallet, 'wallet');
        }

        // dd($balance);

        return response()->json(['balance' => $balance]);
    }


}
