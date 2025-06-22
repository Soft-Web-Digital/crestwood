@extends('frontend.layouts.sub')

@section('title', ' Bonds Investment')

@section('content')

   <div class="content" id="lqd-site-content">
      <section
         class="tw-bg-[#1a237e] tw-flex tw-justify-center tw-items-center tw-pt-32"
      >
         <div
         class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-h-full tw-gap-2 lg:tw-w-3/4"
         >
         <h1
            class="tw-text-white tw-text-xl tw-mt-12 tw-font-light md:tw-text-3xl lg:tw-text-4xl xl:tw-text-5xl"
         >
            Your Complete Financial Command Center
         </h1>
         <img src="../images/dashboard.png" alt="" />
         </div>
         <div class="hero-curve"></div>
      </section>

      <!-- Start Icon Box -->
      <section
         class="lqd-section icon-box pt-30 pb-70 bg-center bg-no-repeat"
         id="help-center"
         style="
         background-image: url(./assets/images/demo/start-hub-6/bg/bg-4.svg);
         "
         data-custom-animations="true"
         data-ca-options='{"animationTarget": "figure, h2, p, .lqd-iconbox-scale", "duration" : 750, "delay" : 75, "ease": "expo.out", "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'
      >
         <div class="container-fluid">
         <div class="row justify-center">
            <div class="col col-12">
               <div
               class="module-container flex flex-wrap justify-between mx-auto w-950 md:w-full"
               >
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="40"
                           height="35"
                           viewBox="0 0 40 35"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-1"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Net Worth Eye Icon -->
                           <circle
                           cx="20"
                           cy="17.5"
                           r="12"
                           fill="url(#icn-grad-1)"
                           opacity="0.624"
                           />
                           <circle cx="20" cy="17.5" r="8" fill="white" />
                           <circle
                           cx="20"
                           cy="17.5"
                           r="4"
                           fill="url(#icn-grad-1)"
                           />
                           <path
                           d="M8 17.5C8 17.5 14 8 20 8s12 9.5 12 9.5S26 27 20 27 8 17.5 8 17.5z"
                           fill="none"
                           stroke="url(#icn-grad-1)"
                           stroke-width="2"
                           opacity="0.8"
                           />
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Track Your Total Wealth</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Get a comprehensive view of your entire financial
                        portfolio in one place.
                     </p>
                     </div>
                  </div>
               </div>
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="38"
                           height="31"
                           viewBox="0 0 38 31"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-2"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Connect Accounts - Link Chain Icon -->
                           <rect
                           x="5"
                           y="8"
                           width="12"
                           height="8"
                           rx="4"
                           fill="url(#icn-grad-2)"
                           opacity="0.624"
                           />
                           <rect
                           x="21"
                           y="15"
                           width="12"
                           height="8"
                           rx="4"
                           fill="url(#icn-grad-2)"
                           opacity="0.624"
                           />
                           <rect
                           x="13"
                           y="11.5"
                           width="8"
                           height="5"
                           rx="2.5"
                           fill="url(#icn-grad-2)"
                           />
                           <circle cx="8" cy="5" r="3" fill="white" />
                           <circle cx="30" cy="26" r="3" fill="white" />
                           <path
                           d="M11 8L27 20"
                           stroke="url(#icn-grad-2)"
                           stroke-width="2"
                           opacity="0.8"
                           />
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Unified Account Management</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Seamlessly integrate all your financial accounts for a
                        complete picture of your wealth.
                     </p>
                     </div>
                  </div>
               </div>
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="46"
                           height="30"
                           viewBox="0 0 46 30"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-3"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Shared Accounts - People Connected Icon -->
                           <circle
                           cx="15"
                           cy="10"
                           r="6"
                           fill="url(#icn-grad-3)"
                           opacity="0.624"
                           />
                           <circle
                           cx="31"
                           cy="10"
                           r="6"
                           fill="url(#icn-grad-3)"
                           opacity="0.624"
                           />
                           <path
                           d="M8 24c0-4 3-6 7-6s7 2 7 6"
                           fill="white"
                           stroke="url(#icn-grad-3)"
                           stroke-width="1.5"
                           />
                           <path
                           d="M24 24c0-4 3-6 7-6s7 2 7 6"
                           fill="white"
                           stroke="url(#icn-grad-3)"
                           stroke-width="1.5"
                           />
                           <ellipse
                           cx="23"
                           cy="22"
                           rx="8"
                           ry="3"
                           fill="url(#icn-grad-3)"
                           opacity="0.8"
                           />
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Collaborative Financial Planning</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Manage shared finances with ease, perfect for couples
                        and families planning together.
                     </p>
                     </div>
                  </div>
               </div>
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="39"
                           height="31"
                           viewBox="0 0 39 31"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-4"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Performance Chart Icon -->
                           <rect
                           x="5"
                           y="20"
                           width="4"
                           height="8"
                           fill="url(#icn-grad-4)"
                           opacity="0.624"
                           />
                           <rect
                           x="12"
                           y="15"
                           width="4"
                           height="13"
                           fill="url(#icn-grad-4)"
                           opacity="0.8"
                           />
                           <rect
                           x="19"
                           y="10"
                           width="4"
                           height="18"
                           fill="url(#icn-grad-4)"
                           />
                           <rect
                           x="26"
                           y="12"
                           width="4"
                           height="16"
                           fill="url(#icn-grad-4)"
                           opacity="0.8"
                           />
                           <rect
                           x="33"
                           y="8"
                           width="4"
                           height="20"
                           fill="url(#icn-grad-4)"
                           />
                           <path
                           d="M7 18L14 13L21 8L28 10L35 6"
                           stroke="white"
                           stroke-width="2"
                           fill="none"
                           />
                           <circle cx="7" cy="18" r="2" fill="white" />
                           <circle cx="14" cy="13" r="2" fill="white" />
                           <circle cx="21" cy="8" r="2" fill="white" />
                           <circle cx="28" cy="10" r="2" fill="white" />
                           <circle cx="35" cy="6" r="2" fill="white" />
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Real-Time Performance Analytics</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Monitor your investment returns, tax savings, and
                        portfolio growth with detailed analytics.
                     </p>
                     </div>
                  </div>
               </div>
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="38"
                           height="37"
                           viewBox="0 0 38 37"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-5"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Savings Goal Target Icon -->
                           <circle
                           cx="19"
                           cy="18.5"
                           r="15"
                           fill="none"
                           stroke="url(#icn-grad-5)"
                           stroke-width="3"
                           opacity="0.624"
                           />
                           <circle
                           cx="19"
                           cy="18.5"
                           r="10"
                           fill="none"
                           stroke="url(#icn-grad-5)"
                           stroke-width="2"
                           opacity="0.8"
                           />
                           <circle
                           cx="19"
                           cy="18.5"
                           r="5"
                           fill="url(#icn-grad-5)"
                           />
                           <circle cx="19" cy="18.5" r="2" fill="white" />
                           <path
                           d="M19 3.5L21 8L26 8.5L22 12.5L23 17.5L19 15L15 17.5L16 12.5L12 8.5L17 8Z"
                           fill="white"
                           opacity="0.9"
                           />
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Smart Goal Tracking</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Stay on track with your financial goals and adjust
                        your strategy in real-time.
                     </p>
                     </div>
                  </div>
               </div>
               <div
                  class="lqd-iconbox-scale w-45percent mb-65 transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative iconbox-side iconbox-square iconbox-heading-arrow-onhover text-start"
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="iconbox-icon-container inline-flex relative z-1 w-80 h-80 text-30 rounded-20 bg-white items-center justify-center"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink"
                           width="43"
                           height="33"
                           viewBox="0 0 43 33"
                        >
                           <defs>
                           <linearGradient
                              id="icn-grad-6"
                              x1="0.5"
                              x2="0.5"
                              y2="1"
                              gradientUnits="objectBoundingBox"
                           >
                              <stop offset="0" stop-color="#483dd3"></stop>
                              <stop offset="1" stop-color="#60a3e6"></stop>
                           </linearGradient>
                           </defs>
                           <!-- Money Movement Flow Icon -->
                           <path
                           d="M5 16.5L15 16.5"
                           stroke="url(#icn-grad-6)"
                           stroke-width="3"
                           opacity="0.624"
                           marker-end="url(#arrowhead)"
                           />
                           <path
                           d="M20 10L30 10"
                           stroke="url(#icn-grad-6)"
                           stroke-width="3"
                           opacity="0.8"
                           marker-end="url(#arrowhead)"
                           />
                           <path
                           d="M15 23L25 23"
                           stroke="url(#icn-grad-6)"
                           stroke-width="3"
                           marker-end="url(#arrowhead)"
                           />
                           <circle
                           cx="8"
                           cy="16.5"
                           r="4"
                           fill="url(#icn-grad-6)"
                           opacity="0.624"
                           />
                           <circle
                           cx="33"
                           cy="10"
                           r="4"
                           fill="url(#icn-grad-6)"
                           opacity="0.8"
                           />
                           <circle
                           cx="38"
                           cy="23"
                           r="4"
                           fill="url(#icn-grad-6)"
                           />
                           <text
                           x="8"
                           y="19"
                           text-anchor="middle"
                           fill="white"
                           font-size="8"
                           >
                           $
                           </text>
                           <text
                           x="33"
                           y="13"
                           text-anchor="middle"
                           fill="white"
                           font-size="8"
                           >
                           $
                           </text>
                           <text
                           x="38"
                           y="26"
                           text-anchor="middle"
                           fill="white"
                           font-size="8"
                           >
                           $
                           </text>
                           <defs>
                           <marker
                              id="arrowhead"
                              markerWidth="10"
                              markerHeight="7"
                              refX="9"
                              refY="3.5"
                              orient="auto"
                           >
                              <polygon
                                 points="0 0, 10 3.5, 0 7"
                                 fill="url(#icn-grad-6)"
                              />
                           </marker>
                           </defs>
                        </svg>
                     </div>
                     </div>
                     <div class="contents">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/85em">
                        <span>Intelligent Money Flow Insights</span>
                        <svg
                           class="inline-block"
                           xmlns="http://www.w3.org/2000/svg"
                           width="12"
                           height="32"
                           viewBox="0 0 12 32"
                        >
                           <path
                           fill="currentColor"
                           d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z"
                           ></path>
                        </svg>
                     </h3>
                     <p>
                        Gain valuable insights into your spending patterns and
                        investment movements.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Icon Box -->

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-gray-200"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="">
            <img src="../images/earnings.png" alt="" />
         </div>
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Unlock Your Investment Potential
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Discover how our advanced technology optimizes your portfolio
               performance and maximizes your returns. Get detailed insights
               into your investment strategy and tax-saving opportunities.
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
               Effortless Wealth Building
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Set up automated deposits and watch your wealth grow. Our
               intelligent dashboard gives you complete control over your
               money movement and investment strategy.
               </p>
            </div>
         </div>
         <div class="">
            <img src="../images/goals-recurring-deposit-2.png" alt="" />
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
            Experience Financial Clarity Like Never Before
         </h2>
         <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-text-white tw-rounded tw-px-6 tw-py-2"
            >Get Started</a
         >
         </div>
      </section>
      <!-- Footer -->
      
   </div>

@endsection