@extends('frontend.layouts.sub')

@section('title', ' Porfolio')

@section('content')

   <div class="content" id="lqd-site-content">
      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Crypto investing made easy
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
                  We’re here to help you invest in crypto with a managed portfolio of Bitcoin and Ethereum ETFs.
               </p>
               <a
               href="{{ route('dashboard') }}"
               class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
               >Get Started</a
               >
            </div>
         </div>
         <div class="">
            <img src="https://static.vecteezy.com/system/resources/previews/011/064/663/non_2x/cryptocurrency-3d-illustration-free-png.png" alt="" />
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
         <div class="absolute top-0">
         <div class="ld-particles-container relative w-full">
            <div
               class="ld-particles-inner lqd-overlay flex pointer-events-none"
               id="lqd-particle-design-services"
               data-particles="true"
               data-particles-options='{"particles": {"number": {"value" : 5} , "color": {"value" : ["#604CFD", "#F85976", "#FDA44C", "#A2B2C9"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 2} , "move": {"enable": true, "direction": "right", "random": true, "out_mode": "out"}} , "interactivity": {"detect_on": "window", "events": {"onhover": {"enable": true, "mode" : ["bubble"]}} , "modes": {"bubble": {"size" : 15}}} , "retina_detect": true}'
            ></div>
         </div>
         </div>
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
                  Why
                  <mark class="lqd-highlight">
                     <span class="lqd-highlight-txt">invest in </span>
                     <span
                     class="bottom-0 left-0 lqd-highlight-inner bg-purple-100"
                     ></span>
                  </mark>
                  crypto with us?
               </h2>
               </div>

               <div class="ld-fancy-heading relative mask-text">
               <p
                  class="ld-fh-element relative lqd-split-lines text-17 leading-1/3em"
                  data-split-text="true"
                  data-split-options='{"type": "lines"}'
               >
                  Skip the complexity of crypto exchanges. Invest in Bitcoin
                  and Ethereum through simple, regulated ETFs in your existing
                  portfolio.
               </p>
               </div>
            </div>
            <div class="col col-12 d-xs-none d-sm-none lg:block"></div>
            <div class="col col-12 flex gap-35 sm:flex-wrap module-iconbox">
               <div class="max-w-full animation-element">
               <div
                  class="m-0 py-50 pr-65 pl-45 rounded-20 text-start lqd-iconbox-scale transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover"
                     data-slideelement-onhover="true"
                     data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="w-35 text-36 mb-40 text-36 mb-40 iconbox-icon-container inline-flex text-primary"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           width="34.578"
                           height="34.578"
                           viewBox="0 0 34.578 34.578"
                        >
                           <path
                           d="M1922.288,3873.563a17.289,17.289,0,1,1,17.289-17.289A17.239,17.239,0,0,1,1922.288,3873.563Zm8.415-26.406c-.07,0-.141.071-.211.071l-12.623,4.208a.632.632,0,0,0-.42.421l-4.208,12.622a.258.258,0,0,0-.07.211.662.662,0,0,0,.7.7c.071,0,.14-.07.211-.07l12.623-4.208a.634.634,0,0,0,.421-.421l4.207-12.623a.255.255,0,0,0,.07-.21A.663.663,0,0,0,1930.7,3847.157Zm-8.1,11.317a2.515,2.515,0,1,1,2.515-2.515A2.515,2.515,0,0,1,1922.6,3858.474Z"
                           transform="translate(-1904.999 -3838.985)"
                           ></path>
                        </svg>
                     </div>
                     </div>
                     <h3 class="text-22 mb-0/75em lqd-iconbox-heading">
                     Crypto made convenient.
                     </h3>
                     <div class="contents">
                     <p class="text-13 leading-1/25em">
                        Investing in crypto ETFs lets you tap the market
                        without the hassle of direct ownership or trading.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
               <div class="max-w-full animation-element">
               <div
                  class="m-0 py-50 pr-65 pl-45 rounded-20 text-start lqd-iconbox-scale transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover"
                     data-slideelement-onhover="true"
                     data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="w-35 text-36 mb-40 iconbox-icon-container inline-flex text-primary"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           width="37.171"
                           height="37.172"
                           viewBox="0 0 37.171 37.172"
                        >
                           <path
                           d="M2602.153,3857.568a3.684,3.684,0,0,0-2.223-3.291,3.953,3.953,0,0,1-2.462-5.953,3.552,3.552,0,0,0-4.658-4.658,3.947,3.947,0,0,1-5.948-2.461,3.553,3.553,0,0,0-6.589,0,3.947,3.947,0,0,1-5.948,2.461,3.551,3.551,0,0,0-4.658,4.658,3.957,3.957,0,0,1-2.461,5.953,3.549,3.549,0,0,0,0,6.584,3.951,3.951,0,0,1,2.461,5.948,3.551,3.551,0,0,0,4.658,4.659,3.95,3.95,0,0,1,5.948,2.465,3.554,3.554,0,0,0,6.589,0,3.947,3.947,0,0,1,5.948-2.465,3.552,3.552,0,0,0,4.658-4.659,3.948,3.948,0,0,1,2.462-5.948A3.692,3.692,0,0,0,2602.153,3857.568Zm-18.586,6.82a6.816,6.816,0,1,1,6.812-6.812A6.813,6.813,0,0,1,2583.568,3864.388Z"
                           transform="translate(-2564.982 -3838.982)"
                           ></path>
                        </svg>
                     </div>
                     </div>
                     <h3 class="text-22 mb-0/75em lqd-iconbox-heading">
                     Automated rebalancing.
                     </h3>
                     <div class="contents">
                     <p class="text-13 leading-1/25em">
                        We automatically adjust your portfolio based on your
                        account balance and market movements to help manage
                        risk.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
               <div class="max-w-full animation-element">
               <div
                  class="py-50 pr-65 pl-45 rounded-20 m-0 text-start lqd-iconbox-scale transition-all"
               >
                  <div
                     class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover"
                     data-slideelement-onhover="true"
                     data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'
                  >
                     <div class="iconbox-icon-wrap">
                     <div
                        class="w-35 text-36 mb-40 iconbox-icon-container inline-flex text-primary"
                     >
                        <svg
                           xmlns="http://www.w3.org/2000/svg"
                           width="27.435"
                           height="32.77"
                           viewBox="0 0 27.435 32.77"
                        >
                           <path
                           d="M2264.9,3864.935a1.872,1.872,0,0,1-1.383.969H2239.9a1.869,1.869,0,0,1-1.385-.969c-1.349-2.566.236-3.989,1.087-4.754a3.907,3.907,0,0,0,.838-.915c.015-.023.023-.041.033-.057.608-1,.83-3.413.961-4.856.02-.214.038-.418.057-.611,0-.016,0-.034.006-.052a17.656,17.656,0,0,1,2.864-7.749,9.087,9.087,0,0,1,4.739-3.535,2.616,2.616,0,0,1,5.215,0,9.1,9.1,0,0,1,4.74,3.536,17.631,17.631,0,0,1,2.862,7.741c0,.026.005.044.007.062.019.191.039.4.058.609.133,1.444.353,3.859.958,4.851.015.025.028.047.038.067a3.967,3.967,0,0,0,.838.911C2264.668,3860.946,2266.251,3862.37,2264.9,3864.935Zm-16,3.641h5.515a.691.691,0,0,1,.562.263.927.927,0,0,1,.13.764c0,.013-.005.025-.007.036a3.405,3.405,0,0,1-6.775.124l0-.023a1.173,1.173,0,0,1,.116-.935A.588.588,0,0,1,2248.9,3868.575Z"
                           transform="translate(-2237.991 -3839.995)"
                           ></path>
                        </svg>
                     </div>
                     </div>
                     <h3 class="text-22 mb-0/75em lqd-iconbox-heading">
                     Diversified investing.
                     </h3>
                     <div class="contents">
                     <p class="text-13 leading-1/25em">
                        Crypto can provide diversification as part of your
                        larger investing strategy at Crestwood Capital
                        Management.
                     </p>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Design Servisec -->
      <!-- Footer -->
   </div>

@endsection