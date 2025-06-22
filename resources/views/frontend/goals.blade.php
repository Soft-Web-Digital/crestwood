@extends('frontend.layouts.sub')

@section('title', ' Goals Investment')

@section('content')

   <main class="content" id="lqd-site-content">
      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-[#1a237e] tw-text-white"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em tw-text-white">
               Your Dreams, Your Goals, Your Success
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               From buying your dream home to planning your next adventure, we help you turn your life goals into achievable financial milestones. Our intelligent goal tracking tools make saving and investing simple, personalized, and effective.
               </p>
               
               <a
               href="{{ route('dashboard') }}"
               class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
               >Get Started</a
               >
            </div>
         </div>
         <div class="">
            <img src="{{ asset('/hs-fs/hubfs/Graphics/webpage-graphics/lisas-college-fund-greece-getaway-6.png?width=917&name=lisas-college-fund-greece-getaway.png') }}" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-32 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="">
            <img src="../images/house-blueprint.png" alt="" />
         </div>
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Define Your Financial Journey
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Your financial goals are as unique as you are. Whether you're
               saving for a major purchase, building wealth for the future,
               or planning for life's special moments, we'll help you create
               a personalized roadmap to success.
               </p>
            </div>
         </div>
         </div>
      </section>
      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-32 md:p-0 tw-bg-gray-200"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Watch Your Goals Come to Life
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Share your target amount and timeline, and we'll craft a
               customized investment strategy using stocks, bonds, or cash.
               Our interactive projection tool lets you visualize how
               different scenarios could impact your goal, helping you make
               informed decisions.
               </p>
            </div>
         </div>
         <div class="">
            <img src="../images/dream-home-on-track.png" alt="" />
         </div>
         </div>
      </section>
      <section
         class="lqd-section lqd-section what-we-do lg:tw-py-32 sm:pb-0"
         id="what-we-do"
      >
         <div class="container">
         <div class="row justify-between tw-items-center">
            <div
               class="col col-lg-6 col-md-10 col-12 offset-lg-0 offset-md-1 offset-0"
            >
               <img
               class="rounded-6"
               width="666"
               height="808"
               src="../images/dream-home-achieved.png"
               alt="What We Do"
               />
            </div>
            <div class="col col-xl-5 col-lg-6 col-12 offset-xl-1">
               <div class="w-full flex flex-col items-start module-content">
               <h2
                  class="ld-fh-element mb-0/5em inline-block relative tw-text-lg"
               >
                  Powerful Tools to Accelerate Your Success
               </h2>

               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container w-25 h-25 inline-flex border-1 border-secondary rounded-full text-14 text-green-700"
                     >
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-checkmark"
                     ></i>
                     </div>
                  </div>
                  <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm"
                  >
                     Comprehensive Financial View: Connect all your accounts
                     for a complete picture of your financial journey.
                  </h3>
               </div>
               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container w-25 h-25 inline-flex border-1 border-secondary rounded-full text-14 text-green-700"
                     >
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-checkmark"
                     ></i>
                     </div>
                  </div>
                  <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm"
                  >
                     Smart Investment Guidance: Get personalized
                     recommendations for stocks, bonds, or cash based on your
                     goals.
                  </h3>
               </div>

               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container w-25 h-25 inline-flex border-1 border-secondary rounded-full text-14 text-green-700"
                     >
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-checkmark"
                     ></i>
                     </div>
                  </div>
                  <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm"
                  >
                     Goal Forecaster: Visualize your path to success with our
                     advanced projection tool.
                  </h3>
               </div>
               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container w-25 h-25 inline-flex border-1 border-secondary rounded-full text-14 text-green-700"
                     >
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-checkmark"
                     ></i>
                     </div>
                  </div>
                  <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm"
                  >
                     Flexible Savings Options: Choose between one-time deposits
                     or automated recurring contributions.
                  </h3>
               </div>
               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container w-25 h-25 inline-flex border-1 border-secondary rounded-full text-14 text-green-700"
                     >
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-checkmark"
                     ></i>
                     </div>
                  </div>
                  <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm"
                  >
                     Real-Time Progress Tracking: Monitor your success and
                     adjust your strategy as needed.
                  </h3>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-white tw-bg-blue-300"
      >
         <div
         class="container tw-flex tw-flex-col tw-gap-3 tw-items-center tw-justify-center"
         >
         <h2 class="ld-fh-element mb-0/5em">
            Start Turning Your Dreams Into Reality Today
         </h2>
         <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-text-white tw-rounded tw-px-6 tw-py-2"
            >Get Started</a
         >
         </div>
      </section>
      <!-- Footer -->
      
   </main>

@endsection