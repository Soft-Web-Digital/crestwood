@extends('frontend.layouts.sub')

@section('title', ' Porfolio')

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
            Earn While You Spend, Save While You Live
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Transform your everyday purchases into meaningful rewards with
            our exclusive cash back program. Shop at thousands of your
            favorite brands and watch your savings grow automatically with
            every swipe of your Crestwood Visa® Debit Card.1
            </p>
            <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-text-white tw-rounded tw-px-6 tw-py-2"
            >Get Started</a
            >
         </div>
      </div>
      <div class="">
         <img src="../images/rewards.png" alt="" />
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
                  <h3 class="text-14 font-bold">Effortless Rewards</h3>
                  <p>
                  No sign-ups, no categories to track, no points to
                  manage. Just automatic cash back on every purchase at
                  participating retailers.
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
                  <h3 class="text-14 font-bold">Instant Gratification</h3>
                  <p>
                  See your rewards accumulate in real-time. No waiting
                  periods, no minimum thresholds – your cash back is ready
                  when you are.
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
                  <h3 class="text-14 font-bold">Shop Your Way</h3>
                  <p>
                  Whether you're shopping in-store or online, your rewards
                  stack up automatically. Use your Visa® Debit Card, Apple
                  Pay®, or Google Pay™ – the rewards keep coming.
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
                  <h3 class="text-14 font-bold">Premium Partners</h3>
                  <p>
                  Earn cash back at premium retailers like Costco, adidas,
                  TOMS, and more. Your favorite brands, now with extra
                  rewards.1
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
            <h2 class="ld-fh-element mb-0/5em">
            Rewards That Work For You
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            We've eliminated the complexity of traditional rewards
            programs. No points to track, no categories to remember, and
            no expiration dates. Just straightforward cash back that grows
            with every purchase.
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
            <h2 class="ld-fh-element mb-0/5em">
            Your Rewards, Your Control
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Track your rewards in real-time through our mobile app. Set up
            automatic transfers to your savings or investment accounts, or
            redeem instantly for statement credits. Your rewards, your
            way.
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
            Premium Shopping, Premium Rewards
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Shop at premium retailers like Costco, adidas, TOMS, Sam's
            Club, and Aeropostale while earning automatic cash back. Your
            everyday shopping just got more rewarding.
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
            Share the Rewards, Multiply the Benefits
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Joint account holders can now share in the rewards while
            maintaining individual control. Each card earns its own
            rewards, making every purchase count for everyone.
            </p>
         </div>
      </div>
      </div>
   </section>
   <!-- Footer -->
      
</div>

@endsection