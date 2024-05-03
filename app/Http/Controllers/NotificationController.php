<?php

namespace App\Http\Controllers;

use App\Notifications\CustomNotification;
use App\Notifications\CustomNotificationByEmail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index()
    {
        return view('user.notification.index', ['title' => 'Notifications', 'notifications' => auth()->user()->notifications()->paginate(50)]);
    }

    public function show($notification)
    {
        DB::table('notifications')->where('id', $notification)->update(['read_at' => now()]);
        $notification = DB::table('notifications')->where('id', $notification)->first();
        return view('user.notification.show', ['title' => 'Notification', 'notification' => $notification]);
    }

    public function read(): \Illuminate\Http\RedirectResponse
    {
        foreach (auth()->user()->unreadNotifications()->get() as $notification) {
            $notification->markAsRead();
        }
        return redirect()->route('notifications')->with('success', 'Notifications marked as read');
    }

    public static function sendWelcomeEmailNotification($user)
    {
        $msg = 'Welcome to '.env('APP_NAME').'.<br>
                Your profile has been completed successfully and your account is active.<br>
                You can proceed to making savings and also investing in our packages to earn amazing rewards.';
        try {
            $user->notify(new CustomNotificationByEmail('Welcome to '.env('APP_NAME'), $msg, 'Login to Dashboard', route('login')));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendSavingsCreatedNotification($savings)
    {
        $savingsDate = \Carbon\Carbon::parse($savings->savings_date);
        $returnDate = \Carbon\Carbon::parse($savings->return_date);
        $description = 'Your Savings of <b>₦ '.number_format($savings->amount).'</b> in our <b>'.$savings->package["name"].'</b> package was successful.';
        $msg = 'Your savings of <b>₦ '.number_format($savings->amount).'</b> in our <b>'.$savings->package["name"].'</b> package was successful.<br><br>
                <b><u>Savings details:</u></b><br>
                Savings package: <b>'.$savings->package["name"].'</b><br>
                Total amount invested: <b>₦ '.number_format($savings->amount).'</b><br>
                ROI amount: <b>₦ '.number_format($savings['amount'] / $savings->package['roi'] * $savings->package['milestone']).'</b><br>
                Expected returns: <b>₦ '.number_format($savings->total_return).'</b><br>
                Savings date: <b>'.$savingsDate->format('M d, Y \a\t h:i A').'</b><br>
                Return date: <b>'.$returnDate->format('M d, Y \a\t h:i A').'</b><br>
                <b><u>Wallet details:</u></b><br>
                Amount debited: <b>₦ '.number_format($savings->amount, 2).'</b><br>
                Wallet balance: <b>₦ '.number_format($savings->user->nairaWallet['balance'], 2).'</b><br>
                ';
        try {
            $savings->user->notify(new CustomNotification('savings', 'Savings Created', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendInvestmentCreatedNotification($investment)
    {
        $pdf = PDF::loadView('pdf.certificate', ['investment' => $investment]);
        $description = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package was successful.';
        $msg = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package was successful.<br><br>
                <b><u>Investment details:</u></b><br>
                Investment package: <b>'.$investment->package["name"].'</b><br>
                Total amount invested: <b>₦ '.number_format($investment->amount).'</b><br>
                ROI amount: <b>₦ '.number_format($investment->total_return - $investment->amount).'</b><br>
                Expected returns: <b>₦ '.number_format($investment->total_return).'</b><br>
                Investment duration: <b>'.$investment['return_date']->diff($investment['investment_date'])->m.' month(s)</b><br>
                Investment date: <b>'.$investment->investment_date->format('M d, Y \a\t h:i A').'</b><br>
                Return date: <b>'.$investment->return_date->format('M d, Y \a\t h:i A').'</b><br>
                Investment method: <b>'.$investment->transaction["method"].'</b><br><br>
                <b><u>Wallet details:</u></b><br>
                Amount debited: <b>₦ '.number_format($investment->amount, 2).'</b><br>
                Wallet balance: <b>₦ '.number_format($investment->user->nairaWallet['balance'], 2).'</b><br>
                ';
        try {
            $investment->user->notify(new CustomNotification('investment', 'Investment Created', $msg, $description, $pdf->output()));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendInvestmentQueuedNotification($investment)
    {
        $description = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been queued.';
        $msg = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been queued.<br>
                Your investment will be automatically created once you payment has been approved.';
        try {
            $investment->user->notify(new CustomNotification('pending', 'Investment Queued', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendInvestmentCancelledNotification($investment)
    {
        $description = 'Your queued investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been cancelled.';
        $msg = 'Your queued investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been cancelled.<br>
                Contact administrator <a href="mailto:'.env('SUPPORT_EMAIL').'">'.env('SUPPORT_EMAIL').'</a> for further complaints.';
        try {
            $investment->user->notify(new CustomNotification('cancelled', 'Investment Cancelled', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendTradeSuccessfulNotification($trade)
    {
        $type = $trade["type"] == "buy" ? "debited" : "credited";
        $description = 'Your trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> was successful.';
        $msg = 'Your trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> was successful.<br><br>
                <b><u>Trade details:</u></b><br>
                Trade Product: <b>'.$trade["product"].'</b><br>
                Trade type: <b>'.$trade["type"].'</b><br>
                Grams traded: <b>'.$trade["grams"].'</b><br>
                Amount traded: <b>₦ '.number_format($trade["amount"]).'</b><br>
                Trade method: <b>'.$trade->transaction["method"].'</b><br><br>
                <b><u>Wallet details:</u></b><br>
                Amount '.$type.': <b>₦ '.number_format($trade->amount, 2).'</b><br>
                Naira Wallet balance: <b>₦ '.number_format($trade->user->nairaWallet['balance'], 2).'</b><br>
                Gold Wallet balance: <b>'.round($trade->user->goldWallet['balance'], 3).' Grams</b><br>
                Silver Wallet balance: <b>'.round($trade->user->silverWallet['balance'], 3).' Grams</b><br>';
        try {
            $trade->user->notify(new CustomNotification('trade', 'Trade Successful', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendTradeQueuedNotification($trade)
    {
        $description = 'Your trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> has been queued.';
        $msg = 'Your trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> has been queued.<br>
                Your <b>'.$trade["product"].'</b> wallet will be automatically credited once you payment has been approved.';
        try {
            $trade->user->notify(new CustomNotification('pending', 'Trade Queued', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendTradeCancelledNotification($trade)
    {
        $description = 'Your queued trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> has been cancelled.';
        $msg = 'Your queued trade of <b>'.$trade->grams.'</b> grams of <b>'.$trade["product"].'</b> has been cancelled.<br>
                Contact administrator <a href="mailto:'.env('SUPPORT_EMAIL').'">'.env('SUPPORT_EMAIL').'</a> for further complaints.';
        try {
            $trade->user->notify(new CustomNotification('cancelled', 'Trade Cancelled', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendDepositSuccessfulNotification($transaction)
    {
        $method = $transaction["method"] == 'deposit' ? 'deposit / bank transfer' : $transaction["method"];
        $description = 'Your deposit of <b>₦ '.number_format($transaction['amount']).'</b> was successful.';
        $msg = 'Your deposit of <b>₦ '.number_format($transaction['amount']).'</b> was successful.<br><br>
                <b><u>Deposit details:</u></b><br>
                Amount: <b>₦ '.number_format($transaction['amount']).'</b><br>
                Deposit method: <b>'.$method.'</b><br><br>
                <b><u>Wallet details:</u></b><br>
                Amount credited: <b>₦ '.number_format($transaction->amount, 2).'</b><br>
                Wallet balance: <b>₦ '.number_format($transaction->user->nairaWallet['balance'], 2).'</b><br>';
        try {
            $transaction->user->notify(new CustomNotification('deposit', 'Deposit Successful', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendDepositQueuedNotification($transaction)
    {
        $description = 'Your deposit of <b>₦ '.number_format($transaction['amount']).'</b> has been queued.';
        $msg = 'Your deposit of <b>₦ '.number_format($transaction['amount']).'</b> has been queued.<br>
                Your wallet will be automatically credited once you payment has been approved.';
        try {
            $transaction->user->notify(new CustomNotification('pending', 'Deposit Queued', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendDepositCancelledNotification($transaction)
    {
        $description = 'Your queued deposit of <b>₦ '.number_format($transaction['amount']).'</b> has been declined.';
        $msg = 'Your queued deposit of <b>₦ '.number_format($transaction['amount']).'</b> has been declined.<br>
                Contact administrator <a href="mailto:'.env('SUPPORT_EMAIL').'">'.env('SUPPORT_EMAIL').'</a> for further complaints.';
        try {
            $transaction->user->notify(new CustomNotification('cancelled', 'Deposit Declined', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendWithdrawalSuccessfulNotification($transaction)
    {
        $description = 'Your withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> was successful.';
        $msg = 'Your withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> was successful.<br><br>
                <b><u>Withdrawal details:</u></b><br>
                Amount: <b>₦ '.number_format($transaction['amount']).'</b><br>
                Withdrawal method: <b>'.$transaction["method"].'</b><br><br>
                <b><u>Wallet details:</u></b><br>
                Amount debited: <b>₦ '.number_format($transaction->amount).'</b><br>
                Wallet balance: <b>₦ '.number_format($transaction->user->nairaWallet['balance']).'</b><br>';
        try {
            $transaction->user->notify(new CustomNotification('withdrawal', 'Withdrawal Successful', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendWithdrawalQueuedNotification($transaction)
    {
        $description = 'Your withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> has been queued.';
        $msg = 'Your withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> has been queued.<br>
                Your bank account will be credited after administrator approval.';
        try {
            $transaction->user->notify(new CustomNotification('pending', 'Withdrawal Queued', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendWithdrawalCancelledNotification($transaction)
    {
        $description = 'Your queued withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> has been declined.';
        $msg = 'Your queued withdrawal of <b>₦ '.number_format($transaction['amount']).'</b> has been declined.<br>
                Your wallet has been refunded, contact administrator <a href="mailto:'.env('SUPPORT_EMAIL').'">'.env('SUPPORT_EMAIL').'</a> for further complaints.';
        try {
            $transaction->user->notify(new CustomNotification('cancelled', 'Withdrawal Declined', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendRolloverSuccessfulNotification($rollover)
    {
        $description = 'Your rollover of <b>'.number_format($rollover['slots']).'</b> slots in <b>'.$rollover->package['name'].'</b> package has been queued.';
        $msg = 'Your rollover of <b>'.number_format($rollover['slots']).'</b> slots in <b>'.$rollover->package['name'].'</b> package has been queued.<br>
                A new investment will be created when your current investment is settled.';
        try {
            $rollover->investment->user->notify(new CustomNotification('pending', 'Rollover Queued', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendRolloverInvestmentCreatedNotification($investment)
    {
        $description = 'Your rollover investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package was successful.';
        $msg = 'Your rollover investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package was successful.<br><br>
                <b><u>Investment details:</u></b><br>
                Investment package: <b>'.$investment->package["name"].'</b><br>
                Total amount invested: <b>₦ '.number_format($investment->amount).'</b><br>
                ROI amount: <b>₦ '.number_format($investment->total_return - $investment->amount).'</b><br>
                Expected returns: <b>₦ '.number_format($investment->total_return).'</b><br>
                Investment duration: <b>'.$investment['return_date']->diff($investment['investment_date'])->m.' month(s)</b><br>
                Investment date: <b>'.$investment->investment_date->format('M d, Y \a\t h:i A').'</b><br>
                Return date: <b>'.$investment->return_date->format('M d, Y \a\t h:i A').'</b><br>
                Investment method: <b>'.$investment->transaction["method"].'</b><br><br>
                <b><u>Wallet details:</u></b><br>
                Amount debited: <b>₦ '.number_format($investment->amount, 2).'</b><br>
                Wallet balance: <b>₦ '.number_format($investment->user->nairaWallet['balance'], 2).'</b><br>
                ';
        try {
            $investment->user->notify(new CustomNotification('investment', 'Rollover Investment Created', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendInvestmentSettledNotification($investment)
    {
        $description = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been settled.';
        $msg = 'Your investment of <b>₦ '.number_format($investment->amount).'</b> in our <b>'.$investment->package["name"].'</b> package has been settled.<br><br>
                <b><u>Wallet details:</u></b><br>
                Amount credited: <b>₦ '.number_format($investment->total_return, 2).'</b><br>
                Wallet balance: <b>₦ '.number_format($investment->user->nairaWallet['balance'], 2).'</b><br>
                ';
        try {
            $investment->user->notify(new CustomNotification('investment', 'Investment Settled', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }

    public static function sendInvestmentAlmostMaturedNotification($user)
    {
        $description = 'This is to notify you that your investment will mature within the next thirty (30) days.<br>';
        $msg = 'This is to notify you that your investment will mature within the next thirty (30) days.<br><br>
                Remember, you have the option to request for a full withdrawal of invested sum plus returns or simply rollover your investment. You can login to your account at any time after the maturity date of your investment to process this.<br><br>
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing: border-box; margin: auto; text-align: center; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;">
                <tr>
                <td style="box-sizing: border-box; margin: auto; text-align: center; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;">
                <a href="'.route('login').'" class="button button-primary" target="_blank" rel="noopener" style="box-sizing: border-box; margin: auto; text-align: center; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -webkit-text-size-adjust: none; border-radius: 4px; color: #fff; display: inline-block; overflow: hidden; text-decoration: none; background-color: #2d3748; border-bottom: 8px solid #2d3748; border-left: 18px solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #2d3748;">Click here to login</a>
                </td>
                </tr>
                </table><br>
                We are available for any further enquiries or assistance. You can email us at support@sandboxnextin.net<br><br>
                Thank you for choosing us as your preferred partner in growing your wealth.<br><br>
                ';
        try {
            $user->notify(new CustomNotification('investment', 'Investment Maturity - 30days Notice', $msg, $description));
        }catch (\Exception) {
            logger('There was an error sending the email');
        }
    }
}
