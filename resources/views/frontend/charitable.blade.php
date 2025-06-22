@extends('frontend.layouts.sub')

@section('title', ' Porfolio')

@section('content')

   <div class="content" id="lqd-site-content">
      <section
         class="tw-bg-blue-100 tw-flex tw-justify-center tw-items-center"
      >
         <div
         class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-h-full tw-gap-2 lg:tw-w-3/4"
         >
         <img src="../images/broad-impact.png" alt="" />
         </div>
         <div class="hero-curve"></div>
      </section>
      <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-gray-200"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">Invest and grow your money for a year.</h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Donating shares held for more than a year can boost your charitable giving and offer a tax benefit, so get started now.
            </p>
         </div>
      </div>
      <div class="">
         <img src="../hs-fs/hubfs/Graphics/webpage-graphics/chart-flowers-watering-can-6.png?width=1008&amp;name=chart-flowers-watering-can.png" alt="" />
      </div>
      </div>
   </section>
      <div
         class="container tw-flex tw-flex-col tw-items-center tw-justify-center"
      >
         <div class="tw-py-20 tw-space-y-6 lg:tw-space-y-12 tw-max-w-4xl">
         <h1
            class="tw-text-4xl tw-lg:tw-text-5xl tw-font-bold tw-text-gray-900"
         >
            Broad Impact
         </h1>
         <p class="tw-text-lg tw-text-gray-700 tw-leading-relaxed">
            nvest in companies doing good. This portfolio targets businesses
            with lower carbon footprints, fair labor practices, and diverse
            boards - helping you grow wealth while supporting positive change.
         </p>
         <div>
            <div class="tw-flex tw-flex-col tw-gap-6 tw-items-start">
               <div>
               <span
                  class="tw-bg-teal-300 tw-text-teal-700 tw-rounded tw-px-4 tw-py-2"
                  >Who it's for</span
               >
               </div>
               <p class="tw-text-lg tw-text-gray-700 tw-leading-relaxed">
               Investors looking to make an impact
               </p>
            </div>
         </div>
         <div>
            <h2 class="tw-text-3xl tw-font-bold tw-text-gray-900">
               Performance
            </h2>
            <hr class="tw-border-gray-300" />
         </div>
         <p class="tw-text-gray-600 tw-text-lg">
            It looks like we may be having technical issues with loading the
            performance graphs.<br />
            Please try again another time.
         </p>

         <div>
            <div
               class="tw-flex tw-flex-col lg:tw-flex-row tw-justify-between tw-items-start"
            >
               <h2
               class="tw-text-3xl tw-font-bold tw-text-gray-900 tw-lg:tw-mb-0"
               >
               Holdings
               </h2>
               <p class="tw-text-gray-400 text-xs">
               Based on an allocation of 90% stocks, 10% bonds
               </p>
            </div>
            <hr class="tw-border-gray-300" />
         </div>
         <div>
            <div class="tw-flex tw-justify-between tw-items-center">
               <div class="text-base tw-text-gray-500">
               <p>U.S. Socially Responsible Stocks <br />Large Cap</p>
               </div>
               <p>46.0%</p>
            </div>
            <hr class="tw-border-gray-300 tw-my-3" />
            <div class="tw-flex tw-justify-between tw-items-center">
               <div class="text-base tw-text-gray-500">
               <p>U.S. Socially Responsible Stocks <br />Small Cap</p>
               </div>
               <p>4.5%</p>
            </div>
         </div>
         <!-- Disclaimer -->
         <div class="tw-mt-16 tw-bg-gray-50 tw-rounded-lg tw-p-8">
            <p class="tw-text-sm tw-text-gray-600 tw-mb-4 tw-font-semibold">
               Allocations as of Jun. 15, 2025
            </p>
            <p class="tw-text-sm tw-text-gray-600 tw-leading-relaxed">
               As the bond exposure increases relative to stocks within this
               portfolio, the exposure to SRI focused ETFs will decline. This
               portfolio strategy has 101 different allocation options, from 0%
               bonds to 100% stocks. The 90% stock, 10% bond portfolio has been
               selected to display holdings. Different allocations will have
               different weights of each asset class. Crestwood Capital
               Management may recommend a different allocation based on various
               goal inputs tailored to each client, including the time horizon
               for your goal with the longest period starting at 90% stocks.
               The holdings shown reflect the portfolio model for tax-deferred
               accounts, like IRAs or 401(k)s. Expect differences in taxable
               accounts.
            </p>
         </div>
         </div>
         <section
         class="lqd-section features py-60"
         id="features"
         data-custom-animations="true"
         data-ca-options='{" triggerHandler": "inview", "animationTarget": ".animation-element", "duration": "1000", "delay": "90", "ease": "power4.out", "direction": "forward", "initValues": {"transformOriginX" :50, "transformOriginY" :50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"transformOriginX" :50, "transformOriginY" :50, "transformOriginZ": "0px", "opacity" : 1}}'
         >
         <div class="container">
            <div class="row justify-center items-stretch">
               <div
               class="col col-12 col-lg-8 col-xl-6 text-center animation-element"
               >
               <div class="ld-fancy-heading">
                  <h2 class="ld-fh-element mb-0/25em leading-1em text-30">
                     Expand on your impact—and your benefits.
                  </h2>
               </div>
               </div>
               <div class="col col-12"></div>
               <div class="col col-12">
                <div class="w-full h-45 relative"></div>
              </div>
              <div class="col col-12 col-lg-4">
                <div
                  class="w-full relative flex flex-col justify-center border-1 border-white-20 pt-65 pb-50 px-55 mb-30 module-icon-box"
                >
                  <div
                    class="iconbox relative flex-col items-start justify-center text-start"
                    data-animate-icon="true"
                    data-plugin-options='{"color" : "rgb(255, 255, 255)"}'
                  >
                    <div class="iconbox-icon-wrap">
                      <img src="../images/tree-taxed-later.png" alt="" />
                      <!-- <span
                        class="iconbox-icon-container mb-55 text-52 text-black"
                      >
                        <i class="lqd-icn-ess icon-lqd-path"></i>
                      </span> -->
                    </div>
                    <div class="contents">
                      <h3
                        class="font-semibold uppercase mb-10 text-14 text-black"
                      >
                        Help minimize tax impact from your investments.
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >Support charities you care about and enjoy eligible tax benefits at the same time.</span
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-lg-4">
                <div
                  class="w-full relative flex flex-col justify-center border-1 border-white-20 pt-65 pb-50 px-55 mb-30 module-icon-box module-icon-box-2"
                >
                  <div
                    class="iconbox relative flex-col items-start justify-center text-start"
                    data-animate-icon="true"
                    data-plugin-options='{"color" : "rgb(255, 255, 255)"}'
                  >
                    <div class="iconbox-icon-wrap">
                      <img src="../images/tree-taxed-now.png" alt="" />
                      <!-- <span
                        class="iconbox-icon-container mb-55 text-52 text-black"
                      >
                        <i class="lqd-icn-ess icon-lqd-mobile"></i>
                      </span> -->
                    </div>
                    <div class="contents">
                      <h3
                        class="font-semibold uppercase mb-10 text-14 text-black"
                      >Easily access your donation receipts.
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >Tax receipts for your donation are emailed directly to you and available through your Crestwood Capital Management account. Plus, charities don't have to fill them out and send them to you.</span
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-lg-4">
                <div
                  class="w-full relative flex flex-col justify-center border-1 border-white-20 pt-65 pb-50 px-55 mb-30 module-icon-box module-icon-box-3"
                >
                  <div
                    class="iconbox relative flex-col items-start justify-center text-start"
                    data-animate-icon="true"
                    data-plugin-options='{"color" : "rgb(255, 255, 255)"}'
                  >
                    <div class="iconbox-icon-wrap">
                      <img src="../images/sep-ira.png" alt="" />
                      <!-- <span
                        class="iconbox-icon-container mb-55 text-52 text-black"
                      >
                        <i class="lqd-icn-ess icon-lqd-cogs"></i>
                      </span> -->
                    </div>
                    <div class="contents">
                      <h3
                        class="font-semibold uppercase mb-10 text-14 text-black"
                      >
                      Keep your information secure.
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >When you donate directly through our platform, you won't have to enter additional financial information on third-party sites.</span
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col col-12 col-md-6 col-lg-4 flex">
               <div
                  class="module-icon-box-1 w-full flex px-5 pt-30 pb-5 bg-gray-800"
               >
                  
               </div>
               <div class="col col-12 col-md-6 col-lg-4 flex">
               
               </div>
            </div>
         </div>
         </section>
         <!-- End Features -->
      </div>
      <!-- Footer -->

   </div>

@endsection 
