@extends('frontend.layouts.sub')

@section('title', ' Checking')

@section('content')

<div class="content" id="lqd-site-content">
   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-yellow-100"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Banking Made Simple, Rewards Made Real
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Experience the future of banking with our mobile-first
            checking account. Get a Visa® Debit Card that earns rewards,
            zero fees, and complete control over your money – all in one
            powerful app.
            </p>
            <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-text-white tw-rounded tw-px-6 tw-py-2"
            >Get Started</a
            >
         </div>
      </div>
      <div class="">
         <img src="../images/woman-beach-card-6.png" alt="" />
      </div>
      </div>
   </section>
   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
   >
      <section
      class="lqd-section service-plans pt-30 pb-70"
      id="service-plans"
      data-custom-animations="true"
      data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"x" : 35 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 0} , "animations": {"x" : 0 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 1}}'
      >
      <div class="container">
         <div class="row">
            <div class="col col-12 col-lg-3">
            <div
               class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
               data-shape-border="1"
            >
               <div class="contents">
                  <h3 class="text-14 font-bold">
                  Zero Fees, Maximum Freedom
                  </h3>
                  <p>
                  No monthly fees, no ATM fees, no foreign transaction
                  fees, and no overdraft fees. We believe in keeping your
                  money where it belongs – with you.
                  </p>
               </div>
            </div>
            </div>
            <div class="col col-12 col-lg-3">
            <div
               class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
               data-shape-border="1"
            >
               <div class="contents">
                  <h3 class="text-14 font-bold">Bank-Level Security</h3>
                  <p>
                  Your money is protected with FDIC insurance up to $250K
                  through nbkc bank, Member FDIC‡. Plus, instantly lock
                  your card or change your PIN with a single tap in our
                  app.
                  </p>
               </div>
            </div>
            </div>
            <div class="col col-12 col-lg-3">
            <div
               class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
               data-shape-border="1"
            >
               <div class="contents">
                  <h3 class="text-14 font-bold">Pay Anywhere, Any Way</h3>
                  <p>
                  Tap to pay with your Visa® Debit Card, use Apple Pay® or
                  Google Pay™, or write checks. Your money moves with you,
                  wherever you go.
                  </p>
               </div>
            </div>
            </div>
            <div class="col col-12 col-lg-3">
            <div
               class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
               data-shape-border="1"
            >
               <div class="contents">
                  <h3 class="text-14 font-bold">Earn While You Spend</h3>
                  <p>
                  Get automatic cash back at thousands of popular
                  retailers including Costco, adidas, and Aeropostale.
                  Your everyday purchases become rewards.1
                  </p>
               </div>
            </div>
            </div>
         </div>
      </div>
      </section>
      <!-- End Service Plans -->
   </section>

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-gray-200"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">Banking Without the B.S.</h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            We've eliminated all the fees that traditional banks use to
            nickel and dime you. No ATM fees, no foreign transaction fees,
            no overdraft fees, and no minimum balance requirements. Just
            simple, transparent banking.
            </p>
         </div>
      </div>
      <div class="">
         <img src="../images/man-phone-atm-fees-reimbursed-6.png" alt="" />
      </div>
      </div>
   </section>

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="">
         <img src="../images/vault-bushes-6.png" alt="" />
      </div>
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">Your Money, Your Control</h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Your checking account is FDIC-insured up to $250K through nbkc
            bank, Member FDIC‡. Take control of your card security with
            instant card locking, PIN changes, and transaction alerts –
            all from your phone. No branches, no calls, just complete
            control.
            </p>
         </div>
      </div>
      </div>
   </section>

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-gray-200"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Turn Everyday Spending into Rewards
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Earn automatic cash back at thousands of your favorite stores.
            From Costco to adidas, TOMS to Sam's Club, and Aeropostale –
            your regular shopping becomes rewarding.
            </p>
         </div>
      </div>
      <div class="">
         <img src="../images/various-rewards-6.png" alt="" />
      </div>
      </div>
   </section>

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="">
         <img src="../images/joint-checking-cards-6.png" alt="" />
      </div>
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Share the Benefits, Share the Control
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Joint checking accounts are now available. Share all the perks
            of fee-free banking and cash back rewards with your partner,
            while maintaining complete control with individual Visa® Debit
            Cards for each account.
            </p>
         </div>
      </div>
      </div>
   </section>
   <!-- Footer -->
         
</div>

@endsection
