@extends('frontend.layouts.sub')

@section('title', ' Bonds Investment')

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
               Turn Your Retirement Dreams Into Reality
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Stop guessing about your retirement income. Our intelligent retirement planning tools and expert guidance help you build a sustainable income stream that lasts as long as you need it to.
               </p>
               
               <!-- <a
               href="{{ route('dashboard') }}"
               class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
               >Get Started</a
               > -->
            </div>
         </div>
         <div class="">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/old-man-making-retirement-plan-illustration-download-in-svg-png-gif-file-formats--planning-financial-independence-savings-banking-pack-business-illustrations-9167652.png" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Your Retirement, Our Expertise
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Say goodbye to retirement uncertainty. Our advanced portfolio
               management and personalized withdrawal strategies help you
               maintain a steady income while protecting your nest egg from
               market volatility and inflation.
               </p>
            </div>
         </div>
         <div class="">
            <img src="../images/man-looking.jpeg" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section lqd-section what-we-do tw-py-40 sm:pb-0 tw-bg-yellow-200"
         id="what-we-do"
      >
         <div class="container">
         <h2 class="ld-fh-element mb-0/5em tw-mb-12">
            Three Simple Steps to a Secure Retirement
         </h2>
         <div class="row justify-between tw-items-center">
            <div
               class="col col-lg-6 col-md-10 col-12 offset-lg-0 offset-md-1 offset-0"
            >
               <img
               class="rounded-6"
               width="666"
               height="808"
               src="../images/man_phone_woman_couch.jpeg"
               alt="What We Do"
               />
            </div>
            <div class="col col-xl-5 col-lg-6 col-12 offset-xl-1">
               <div class="w-full flex flex-col items-start module-content">
               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-start iconbox-side"
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
                  <div class="-tw-space-y-2">
                     <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-base"
                     >
                     Share Your Vision
                     </h3>
                     <p class="tw-text-sm tw-text-black">
                     Tell us about your retirement goals, timeline, and
                     lifestyle aspirations. We'll help you determine how much
                     you'll need and how long your savings should last.
                     </p>
                  </div>
               </div>

               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-start iconbox-side"
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
                  <div class="-tw-space-y-2">
                     <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-base"
                     >
                     Get Personalized Guidance
                     </h3>
                     <p class="tw-text-sm tw-text-black">
                     Our experts analyze your situation and create a
                     customized retirement strategy. We'll recommend an
                     optimal portfolio allocation and a sustainable
                     withdrawal rate that adapts to market conditions and
                     inflation.
                     </p>
                  </div>
               </div>
               <div
                  class="mb-20 iconbox flex flex-grow-1 relative items-start iconbox-side"
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
                  <div class="-tw-space-y-2">
                     <h3
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-base"
                     >
                     Enjoy Steady Income
                     </h3>
                     <p class="tw-text-sm tw-text-black">
                     Set up automatic monthly withdrawals that feel like a
                     regular paycheck. Our system continuously monitors and
                     adjusts your strategy to ensure your retirement income
                     remains stable and sustainable.
                     </p>
                  </div>
               </div>
               </div>
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
               Your Retirement Security is Our Priority
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Our investment experts continuously optimize your portfolio
               for maximum security and growth. With Crestwood Capital
               Management, your retirement savings remain fully liquid and
               accessible whenever you need them, backed by our commitment to
               your financial well-being.
               </p>
            </div>
         </div>
         <div class="">
            <img src="../images/man_with_dog.jpeg" alt="" />
         </div>
         </div>
      </section>
      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-white"
      >
         <div
         class="container tw-flex tw-flex-col tw-gap-3 tw-items-center tw-justify-center"
         >
         <h2 class="ld-fh-element mb-0/5em">
            Start Building Your Dream Retirement Today
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