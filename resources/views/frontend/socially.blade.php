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
                     Invested with benefits.
                  </h2>
               </div>
               </div>
               <div class="col col-12"></div>
               <div class="col col-12 col-md-6 col-lg-4 flex">
               <div
                  class="module-icon-box-1 w-full flex px-5 pt-30 pb-5 bg-gray-800"
               >
                  <div
                     class="iconbox text-left iconbox-xl iconbox-heading-xs iconbox-filled relative flex flex-col items-start justify-center bg-gray-800 mb-5 py-25 px-10percent"
                  >
                     <div class="iconbox-icon-wrap">
                     <span
                        class="iconbox-icon-container flex justify-center leading-1em text-50 mb-30"
                     >
                        <svg
                           class="w-35"
                           xmlns="http://www.w3.org/2000/svg"
                           width="28"
                           height="28"
                           viewbox="0 0 28 28"
                        >
                           <path
                           d="M26.5,12.25H1.5A1.5,1.5,0,0,1,0,10.75V1.5A1.5,1.5,0,0,1,1.5,0h25A1.5,1.5,0,0,1,28,1.5V10.75A1.5,1.5,0,0,1,26.5,12.25ZM12,3.5A1.5,1.5,0,0,0,10.5,5v.5A1.5,1.5,0,0,0,12,7h4a1.5,1.5,0,0,0,1.5-1.5V5A1.5,1.5,0,0,0,16,3.5Z"
                           transform="translate(0 0)"
                           fill="#fff"
                           opacity="0.202"
                           ></path>
                           <path
                           d="M26.5,12.25H1.5A1.5,1.5,0,0,1,0,10.75V1.5A1.5,1.5,0,0,1,1.5,0h25A1.5,1.5,0,0,1,28,1.5V10.75A1.5,1.5,0,0,1,26.5,12.25ZM12,3.5A1.5,1.5,0,0,0,10.5,5v.5A1.5,1.5,0,0,0,12,7h4a1.5,1.5,0,0,0,1.5-1.5V5A1.5,1.5,0,0,0,16,3.5Z"
                           transform="translate(0 15.75)"
                           fill="#fff"
                           ></path>
                        </svg>
                     </span>
                     </div>
                     <div class="contents">
                     <h3 class="text-18 mb-0/7em leading-1/5em">
                        Minimize your tax bill
                     </h3>
                     <p>
                        Automated tax strategies that keep more of your
                        returns in your pocket.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
               <div class="col col-12 col-md-6 col-lg-4 flex">
               <div
                  class="module-icon-box-1 w-full flex px-5 pt-30 pb-5 bg-gray-800 animation-element"
               >
                  <div
                     class="iconbox text-left iconbox-xl iconbox-heading-xs iconbox-filled relative flex flex-col items-start justify-center bg-gray-800 mb-5 py-25 px-10percent"
                  >
                     <div class="iconbox-icon-wrap">
                     <span
                        class="iconbox-icon-container flex justify-center leading-1em text-50 mb-30"
                     >
                        <svg
                           class="w-40"
                           xmlns="http://www.w3.org/2000/svg"
                           width="38.949"
                           height="27.265"
                           viewbox="0 0 38.949 27.265"
                        >
                           <g transform="translate(-1.895 -2.592)">
                           <g transform="translate(-2 -7.146)">
                              <rect
                                 width="38.949"
                                 height="27.265"
                                 rx="2"
                                 transform="translate(3.895 9.737)"
                                 fill="#fff"
                                 opacity="0.3"
                              ></rect>
                              <rect
                                 width="38.949"
                                 height="5.842"
                                 transform="translate(3.895 15.58)"
                                 fill="#fff"
                              ></rect>
                              <rect
                                 width="7.79"
                                 height="3.895"
                                 rx="1"
                                 transform="translate(31.16 27.265)"
                                 fill="#fff"
                                 opacity="0.3"
                              ></rect>
                           </g>
                           </g>
                        </svg>
                     </span>
                     </div>
                     <div class="contents">
                     <h3 class="text-18 mb-0/7em leading-1/5em">
                        Lower costs.
                     </h3>
                     <p>
                        Low-cost ETFs and transparent pricing mean fewer fees
                        eating into your returns.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
               <div class="col col-12 col-md-6 col-lg-4 flex">
               <div
                  class="module-icon-box-1 w-full flex px-5 pt-30 pb-5 bg-gray-800 animation-element"
               >
                  <div
                     class="iconbox text-left iconbox-xl iconbox-heading-xs iconbox-filled relative flex flex-col items-start justify-center bg-gray-800 mb-5 py-25 px-10percent"
                  >
                     <div class="iconbox-icon-wrap">
                     <span
                        class="iconbox-icon-container flex justify-center leading-1em text-50 mb-30"
                     >
                        <svg
                           class="w-40"
                           xmlns="http://www.w3.org/2000/svg"
                           width="40.841"
                           height="34.715"
                           viewbox="0 0 40.841 34.715"
                        >
                           <g transform="translate(-4.084 -8.168)">
                           <path
                              d="M7.063,42.715H41.778a3.063,3.063,0,0,0,3.063-3.063V17.189a3.063,3.063,0,0,0-3.063-3.063H20.336L15.107,8.9A3.063,3.063,0,0,0,12.941,8H7.063A3.063,3.063,0,0,0,4,11.063V39.652A3.063,3.063,0,0,0,7.063,42.715Z"
                              transform="translate(0.084 0.168)"
                              fill="#fff"
                              fill-rule="evenodd"
                              opacity="0.178"
                           ></path>
                           <path
                              d="M23.161,24.323a3.161,3.161,0,1,1,3.161-3.161A3.161,3.161,0,0,1,23.161,24.323Z"
                              transform="translate(1.036 2.991)"
                              fill="#fff"
                              fill-rule="evenodd"
                           ></path>
                           <path
                              d="M14,35.112C14.341,30.4,17.743,28,21.889,28c4.2,0,7.659,2.266,7.916,7.113a.659.659,0,0,1-.66.79H14.639C14.419,35.9,13.982,35.369,14,35.112Z"
                              transform="translate(2.295 0.895)"
                              fill="#fff"
                              fill-rule="evenodd"
                           ></path>
                           </g>
                        </svg>
                     </span>
                     </div>
                     <div class="contents">
                     <h3 class="text-18 mb-0/7em leading-1/5em">
                        Hands-off portfolio management
                     </h3>
                     <p>
                        We automatically rebalance your investments as markets
                        move and reinvest all dividends.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </section>
         <!-- End Features -->
      </div>
      <!-- Footer -->

   </div>

@endsection 