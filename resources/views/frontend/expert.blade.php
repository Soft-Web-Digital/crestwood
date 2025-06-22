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
            Your Financial Future, Guided by Experts
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Get personalized financial guidance from our team of CERTIFIED FINANCIAL PLANNER™ professionals. We combine cutting-edge technology with human expertise to help you build wealth, plan for retirement, and achieve your financial goals with confidence.
            </p>
            
            <!-- <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
            >Get Started</a
            > -->
         </div>
      </div>
      <div class="">
         <img src="https://cdni.iconscout.com/illustration/premium/thumb/customer-support-executive-illustration-download-in-svg-png-gif-file-formats--online-call-center-employee-hotline-operator-response-pack-business-illustrations-3831045.png" alt="" />
      </div>
      </div>
   </section>

      <!-- Start What We Do -->
      <section
         class="lqd-section lqd-section what-we-do py-30 sm:pb-0"
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
               src="../images/cfp-advice-customer-chair-laptop-6.png"
               alt="What We Do"
               />
            </div>
            <div class="col col-xl-5 col-lg-6 col-12 offset-xl-1">
               <div class="w-full flex flex-col items-start module-content">
               <h2
                  class="ld-fh-element mb-0/5em inline-block relative tw-text-lg"
               >
                  Premium Financial Planning: Your Path to Financial Freedom
               </h2>
               <p
                  class="ld-fh-element mb-1/5em inline-block relative leading-1/4em tw-text-base"
               >
                  0.65% annual fee | $100,000 minimum investment
               </p>
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
                     Dedicated CFP® professional providing unlimited guidance
                     and support for your financial journey
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
                     Comprehensive financial plan tailored to your unique
                     goals, covering investments, tax optimization, retirement
                     planning, and wealth building
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
                     Access to our full team of financial experts ready to
                     answer your questions and provide strategic insights
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
                     Exclusive benefits including enhanced Cash Reserve rates,
                     discounted estate planning services, and priority support
                  </h3>
               </div>
               <div
                  class="w-full flex items-center pt-30 gap-40 tw-items-center sm:items-start"
               >
                  <a
                     href="#"
                     class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-1em text-white bg-secondary rounded-4 hover:bg-primary hover:text-white"
                     data-localscroll="true"
                     data-localscroll-options='{"scrollBelowSection":true}'
                  >
                     <span class="btn-txt" data-text="Get a quote"
                     >Schedule a call</span
                     >
                     <span class="btn-icon text-1/15em">
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-md-arrow-round-forward"
                     ></i>
                     </span>
                  </a>
                  <p class="ld-fh-element m-0 module-text">Pricing</p>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End What We Do -->

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-200"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="w-full">
               <div class="w-full flex flex-col items-start module-content">
               <h2
                  class="ld-fh-element mb-0/5em inline-block relative tw-text-lg"
               >
                  Start Your Journey with a Free Consultation
               </h2>
               <p
                  class="ld-fh-element mb-1/5em inline-block relative leading-1/4em tw-text-base"
               >
                  No fee | $20,000 minimum transfer amount
               </p>
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
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm tw-text-black"
                  >
                     Personalized session with a dedicated financial advisor to
                     understand your goals and determine if our services align
                     with your needs
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
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm tw-text-black"
                  >
                     Expert guidance in setting up your account and creating a
                     roadmap to achieve your financial objectives
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
                     class="lqd-iconbox-heading leading-1/5em tw-font-light tw-text-sm tw-text-black"
                  >
                     Seamless assistance with transferring your assets to
                     Crestwood, ensuring a smooth transition to your new
                     financial future
                  </h3>
               </div>

               <div
                  class="w-full flex items-center pt-30 gap-40 tw-items-center sm:items-start"
               >
                  <a
                     href="#"
                     class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-1em text-white bg-secondary rounded-4 hover:bg-primary hover:text-white"
                     data-localscroll="true"
                     data-localscroll-options='{"scrollBelowSection":true}'
                  >
                     <span class="btn-txt" data-text="Get a quote"
                     >Schedule a call</span
                     >
                     <span class="btn-icon text-1/15em">
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-md-arrow-round-forward"
                     ></i>
                     </span>
                  </a>
                  <p class="ld-fh-element m-0 module-text">Pricing</p>
               </div>
               </div>
            </div>
            <!-- <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Rewards and benefits when you spend.
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Get fast, automatic cash back rewards at thousands of your
               favorite brands, like Costco, adidas, TOMS, Sam's Club,
               Aeropostale, and more.
               </p>
            </div> -->
         </div>
         <div class="">
            <img
               src="../images/laptop-dashboard-concierge-setup-6.png"
               alt=""
            />
         </div>
         </div>
         <div class="container">
         <hr class="tw-mb-6 tw-border-gray-300 tw-mt-12" />
         <p class="tw-text-sm tw-text-black">
            *Crestwood Capital Management's Licensed Concierge Team offers
            support for individuals transferring assets to Crestwood Capital
            Management of $20,000 or more, and receives incentive compensation
            based on assets brought to or invested with Crestwood Capital
            Management. Crestwood Capital Management's revenue varies for
            different offerings (e.g., Crestwood Capital Management Digital
            and Premium, Cash Reserve) and consequently Team members have an
            incentive to recommend the offering which results in the greatest
            revenue for Crestwood Capital Management. The marketing and
            solicitation activities of these individuals are supervised by
            Crestwood Capital Management to help ensure that these individuals
            act in the client's best interest.
         </p>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="">
            <img src="../images/shield-logo-blue-bubble-6.png" alt="" />
         </div>
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Your Success is Our Priority
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               As a fiduciary, we're legally obligated to act in your best
               interest. Our financial advisors are committed to providing
               transparent, unbiased guidance to help you make informed
               decisions about your money and build a secure financial
               future.
               </p>
            </div>
         </div>
         </div>
      </section>
      <!-- Footer -->
       
   </div>

@endsection