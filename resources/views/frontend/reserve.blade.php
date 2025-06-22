@extends('frontend.layouts.sub')

@section('title', ' Porfolio')

@section('content')


<div class="content" id="lqd-site-content">
   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-[#1a237e] tw-text-white"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em tw-text-white">
            Earn 4.50% APY on Your Cash
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Get 10x the national average interest rate with Cash Reserve. Your money stays safe and grows steadily, even during market volatility. Start earning more on your cash today.
            </p>
            
            <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
            >Get Started</a
            >
         </div>
      </div>
      <div class="">
         <img src="{{ asset('/imgs/reserve.png') }}" alt="" />
      </div>
      </div>
   </section>

   <!-- Start Design Servisec -->
   <section
      class="lqd-section design-services pt-100 pb-40"
      id="services"
      data-custom-animations="true"
      data-ca-options='{"animationTarget": ".animation-element, figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 1100 , "startDelay" : 200 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "80px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
   >
      <div class="container">
      <div class="row">
         <div
            class="w-450 flex flex-col relative items-center max-w-full text-center mx-auto"
         >
            <div class="ld-fancy-heading relative mask-text">
            <h2
               class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-bottom lqd-highlight-reset-onhover lqd-split-lines mb-0/5em mt-0/25em"
               data-inview="true"
               data-transition-delay="true"
               data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
               data-split-text="true"
               data-split-options='{"type": "lines"}'
            >
               Why Crestwood's
               <mark class="lqd-highlight">
                  <span class="lqd-highlight-txt">Cash Reserve</span>
                  <span
                  class="bottom-0 left-0 lqd-highlight-inner bg-purple-100"
                  ></span>
               </mark>
               Stands Out
            </h2>
            </div>
         </div>
         <div class="col col-12 d-xs-none d-sm-none lg:block"></div>

         <div class="">
            <div class="row">
               <div class="col col-12 col-lg-3">
               <div
                  class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
                  data-shape-border="1"
               >
                  <div class="contents">
                     <img class="mb-40" src="../images/coin-slot-green-12.png" alt="" />
                     <h3 class="text-22 font-bold ">
                     Zero Fees, Pure Growth
                     </h3>
                     <p >
                     No monthly fees, no maintenance charges, no hidden costs. Every penny you earn stays in your pocket.
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
                     <img class="mb-40" src="./images/check-mark-shield-6.png" alt="" />
                     <h3 class="text-14 font-bold">Maximum Protection</h3>
                     <p>
                     Your money is protected with up to $2 million in FDIC insurance ($4 million for joint accounts) across our network of program banks. That's 8x the standard coverage.
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
                     <img class="mb-40" src="./images/hand-cash-pile-6.png" alt="" />
                     <h3 class="text-14 font-bold">Instant Access</h3>
                     <p>
                     Access your money anytime, anywhere. No withdrawal limits or waiting periods – your cash is always available when you need it.
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
                     <img class="mb-40" src="../images/flower-cash-butterflies-6.png" alt="" />
                     <h3 class="text-14 font-bold">Start Small, Grow Big</h3>
                     <p>
                     Begin with just $10 and watch your money grow. No minimum balance requirements or tiered rates – everyone gets our best rate.
                     </p>
                  </div>
               </div>
               </div>
            </div>
         </div>
      <!-- End Service Plans -->
   </section>
   <section>
      </div>
      </div>
   </section>
   <!-- End Design Servisec -->

   <!-- Start Accordion -->
   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-100"
   >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Smart Savings, Smarter Future
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Set up multiple savings goals and let our automated tools help
            you reach them faster. Whether you're saving for a dream
            vacation, emergency fund, or future investment, we make it
            effortless.
            </p>
            <a
            href="{{ route('dashboard') }}"
            class="btn btn-plain btn-hover-txt-liquid-y round border-none btn-has-label rounded-4 font-bold leading-1/1em text-12 overflow-hidden text-secondary tracking-0/1em uppercase hover:text-primary"
            >
            <span>
               <span
                  class="btn-txt"
                  data-text="━ Start investing"
                  data-transition-delay="true"
                  data-delay-options='{"elements":".lqd-chars","delayType":"animation","startDelay": 0,"delayBetween": 32.5}'
                  data-split-text="true"
                  data-split-options='{"type":"chars, words"}'
               >
                  Get Started
               </span>
            </span>
            </a>
         </div>
      </div>
      <div class="">
         <img src="../images/goals-recurring-deposit-2.png" alt="" />
      </div>
      </div>
   </section>

   <!-- End Accordion -->

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
   >
      <div
      class="container tw-grid tw-gap-6 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="">
         <img src="../images/vault-shield-check-mark-6.png" alt="" />
      </div>
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">Security Meets Growth</h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Your money earns competitive interest while staying protected.
            With FDIC insurance up to $2 million ($4 million for joint
            accounts), you can grow your savings without compromising on
            security.
            </p>
         </div>
      </div>
      </div>
   </section>
   <!-- Footer -->

</div>


@endsection