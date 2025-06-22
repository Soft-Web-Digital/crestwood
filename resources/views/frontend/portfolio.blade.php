@extends('frontend.layouts.sub')

@section('title', ' Porfolio')

@section('content')
   
<div>
   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-[#1a237e] tw-text-white"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em tw-text-white">
            Professionally managed portfolios
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Professional investing made simple. Pick from our portfolios designed for long-term wealth building.
            </p>
            
            <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
            >Get Started</a
            >
         </div>
      </div>
      <div class="">
         <img src="https://cdni.iconscout.com/illustration/premium/thumb/dashboard-illustration-download-in-svg-png-gif-file-formats--analytics-logo-admin-panel-web-website-layout-ui-digital-marketing-pack-people-illustrations-3726403.png" alt="" />
      </div>
      </div>
   </section>

   <section
      class="lqd-section case-studies pt-70 pb-50"
      data-custom-animations="true"
      data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner, .animation-element", "duration" : 750, "startDelay" : 250, "delay" : 55, "ease": "expo.out", "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'
   >
      <div class="container">
      <div class="row">
         <div class="col col-12">
            <div class="lqd-pf-grid animation-element">
            <div class="liquid-filter-items items-center justify-between">
               <div class="liquid-filter-items-inner flex-grow-1">
                  <span class="liquid-filter-items-label">Filter by</span>
                  <div class="flex ml-1/5em md:hidden">
                  <ul
                     class="filter-list-inline reset-ul size-md flex items-center text-15"
                     id="pf-filter-case-studies"
                  >
                     <li
                        class="text-slate-300 cursor-pointer active"
                        data-filter="*"
                     >
                        <span>All</span>
                     </li>
                     <li
                        class="text-slate-300 cursor-pointer"
                        data-filter=".branding"
                     >
                        <span>Stocks and Bonds</span>
                     </li>
                     <li
                        class="text-slate-300 cursor-pointer"
                        data-filter=".custom-print"
                     >
                        <span>Bonds</span>
                     </li>
                     <li
                        class="text-slate-300 cursor-pointer"
                        data-filter=".digital-design"
                     >
                        <span>Cash</span>
                     </li>
                     <li
                        class="text-slate-300 cursor-pointer"
                        data-filter=".ecommerce"
                     >
                        <span>Crypto</span>
                     </li>
                  </ul>
                  </div>
                  <div
                  class="lqd-filter-dropdown hidden md:block"
                  data-form-options='{ "dropdownAppendTo":  "self" }'
                  >
                  <select
                     name="lqd-filter-dropdown-pf-filter-case-studies text-slate-500"
                     id="lqd-filter-dropdown-pf-filter-case-studies"
                  >
                     <option selected data-filter="*" value="*">
                        All
                     </option>
                     <option data-filter=".branding" value=".branding">
                        Branding
                     </option>
                     <option
                        data-filter=".custom-print"
                        value=".custom-print"
                     >
                        Custom Print
                     </option>
                     <option
                        data-filter=".digital-design"
                        value=".digital-design"
                     >
                        Digital Design
                     </option>
                     <option data-filter=".ecommerce" value=".ecommerce">
                        Ecommerce
                     </option>
                  </select>
                  </div>
               </div>
            </div>
            <div
               class="lqd-pf-row row flex flex-wrap -mr-15 -ml-15"
               data-liquid-masonry="true"
               data-masonry-options='{ "filtersID":  "#pf-filter-case-studies" ,  "filtersCounter":  true }'
            >
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item digital-design ecommerce portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3869 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="50"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-core-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           Core
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        Well-diversified, low-cost, and built for
                        long-term investing. Features a broad collection
                        of exchange-traded funds (ETFs) made of thousands
                        of stocks and bonds from around the world.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="{{ route('tradings') }}">Stocks and Bonds</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/frontend/images/demo/start-hub-5/case-study-2.jpg"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item ecommerce masonry portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3355 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="50"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-cash-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           Cash Reserve
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        A 100% cash account that earns 4.50% APY
                        (variable)*, carries no-fee on your balance, and
                        is FDIC-insured up to $2 million at our program
                        banks ($4 million for joint accounts)†.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="#">Cash only</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/hubfs/GBSTB-1.png"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item branding custom-print masonry portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3354 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="50"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-blackrock-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           Goldman Sachs Tax-Smart Bonds
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        Gives higher-income individuals a personalized
                        bond portfolio to generate additional after-tax
                        yield.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="#">Bonds only</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/hubfs/Graphics/webpage-graphics/portfolio-core-4.png"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item branding digital-design masonry portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3353 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="476"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-broad-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           BlackRock Target Income
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        A 100% bond portfolio with different income yields
                        to help protect you against stock market
                        volatility.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="#">Bond only</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/hubfs/Graphics/webpage-graphics/portfolio-climate-1.png"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item custom-print ecommerce masonry portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3351 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="476"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-broad-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           Broad Impact
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        Invests in companies that rank highly on
                        environmental, social, and corporate governance
                        (ESG) criteria without compromising potential
                        long-term performance.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="#">Socially responsible</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/frontend/images/demo/case-study-5.jpg"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
               <div
                  class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item custom-print masonry portfolio-single"
               >
                  <article
                  class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3349 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single"
                  >
                  <div class="lqd-pf-item-inner">
                     <div
                        class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden"
                     >
                        <figure>
                        <figure class="w-full">
                           <img
                              width="50"
                              height="476"
                              src="/hubfs/Graphics/webpage-graphics/portfolio-climate-1.png"
                              alt="case studies"
                           />
                        </figure>
                        </figure>
                        <span
                        class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent"
                        style="
                           background-image: linear-gradient(
                              180deg,
                              #675de100 0%,
                              #675de1 100%
                           );
                        "
                        ></span>
                     </div>
                     <div class="lqd-pf-details">
                        <div class="flex justify-between">
                        <h3 class="lqd-pf-title mt-0 items-center">
                           Climate Impact
                        </h3>
                        </div>
                        <p class="tw-text-xs tw-mt-3">
                        Invests in companies with lower carbon emissions
                        and the funding of green projects while still
                        helping you achieve potential long-term growth.
                        </p>
                        <ul
                        class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2"
                        >
                        <li>
                           <a href="{{ route('tradings') }}">Socially responsible</a>
                        </li>
                        <li>
                           <a href="{{ route('tradings') }}">Stocks and Bonds</a>
                        </li>
                        </ul>
                     </div>
                     <a
                        href="/frontend/images/demo/start-hub-5/case-study-4.jpg"
                        class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco"
                        data-fresco-group="true"
                     ></a>
                  </div>
                  </article>
               </div>
            </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <!-- End Case Studies -->

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-200"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Build your ideal portfolio
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Take control with Flexible portfolios. Adjust individual asset
            weights to match your investment approach.
            </p>
            <a href="{{ route('dashboard') }}">Learn more</a>
         </div>
      </div>
      <div class="">
         <img src="../images/customize-portfolio.png" alt="" />
      </div>
      </div>
   </section>

   <!-- Start Features -->
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
                  Automated tax strategies that keep more of your returns
                  in your pocket.
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

   <!-- Start FAQ -->
   <section
      class="lqd-section faq pt-70 pb-30"
      id="faq"
      style="
      background-image: linear-gradient(
         115deg,
         rgb(243, 248, 248) 0.3184713375796178%,
         rgb(255, 255, 255) 55.4140127388535%
      );
      "
   >
      <div class="container">
      <div class="row">
         <div class="col col-12 col-md-6 text-start">
            <div class="ld-fancy-heading">
            <h2 class="ld-fh-element mb-0/35em leading-1/1em text-46">
               Frequently asked questions
            </h2>
            </div>
         </div>

         <div class="col col-12">
            <div
            class="accordion accordion-lg accordion-title-underlined accordion-expander-lg mt-50 mb-2em"
            id="accordion-faq"
            role="tablist"
            aria-multiselectable="true"
            >
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-1"
                  data-id="lqd-faq-item-1"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-1"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-1"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-1"
                  >
                     <span>What is a portfolio? </span>
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-1"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-1"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        Unlike a traditional retirement plan or options
                        provided by an online brokerage, Crestwood Capital
                        Management doesn’t make you choose your own funds.
                        Instead, we recommend a basket of funds that’s
                        diversified to seek performance without unnecessary
                        risks—that’s a portfolio. For every goal you set a
                        Betterment, we’ll let you choose the kind of
                        portfolio you want and recommend a specific
                        stock-to-bond ratio. For Crestwood Capital
                        Management's Core portfolio strategy and socially
                        responsible investing options, we provide 101
                        possible stock-to-bond allocations, giving you a
                        portfolio tailored to your goal.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-2"
                  data-id="lqd-faq-item-2"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-2"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-2"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-2"
                  >
                     <span>
                        Why does Crestwood Capital Management invest in
                        ETFs?</span
                     >
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-2"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-2"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        An exchange-traded fund (ETF) is a security that
                        tracks an index, a commodity or a basket of assets
                        just like an index fund, but trades like a stock on
                        an exchange. Crestwood Capital Management uses ETFs
                        in both our stock and bond portfolios because of the
                        low management fees and tax-efficiency they offer.
                        Learn more about the advantages of ETF-based
                        portfolios.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-3"
                  data-id="lqd-faq-item-3"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-3"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-3"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-3"
                  >
                     <span>
                        What should I expect in terms of returns for my
                        investments?
                     </span>
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-3"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-3"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        Each of your goals’ portfolios will see different
                        performance, depending on the stock-to-bond
                        allocation you choose, any changes you make over
                        time, your choice of portfolio strategy, and market
                        volatility. We recommend your investment portfolio’s
                        allocation based on the time horizon of your goal
                        and what kind of goal you have. If your goal is
                        short-term, we’ll recommend a more conservative
                        portfolio with lower expected returns with less
                        volatility, and if your goal is longer term, we’ll
                        likely recommend a more aggressive portfolio with
                        higher expected long-term returns with higher
                        volatility.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-4"
                  data-id="lqd-faq-item-4"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-4"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-4"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-4"
                  >
                     <span
                        >Can I use more than one portfolio strategy in my
                        Crestwood Capital Management account?
                     </span>
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-4"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-4"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        Yes, you can have multiple portfolio strategies
                        within your Crestwood Capital Management account
                        because you can set a different portfolio strategy
                        (and a different portfolio allocation) for each of
                        your goals. For example, your retirement goal can
                        use the Crestwood Capital Management Core Portfolio,
                        while your safety net goal could invest with a
                        socially responsible investing strategy.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-5"
                  data-id="lqd-faq-item-5"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-5"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-5"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-5"
                  >
                     <span
                        >Can my Crestwood Capital Management investments
                        decrease in value?</span
                     >
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-5"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-5"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        Yes—far from unusual, downturns are a normal part of
                        even the highest returning investments. Investors
                        often worry and react with panic in response to
                        market drops, even if they are invested properly for
                        their long-term goals, but interim losses are to be
                        expected even during the best investment periods.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item panel mb-20">
               <div
                  class="accordion-heading"
                  role="tab"
                  id="lqd-faq-heading-6"
                  data-id="lqd-faq-item-6"
               >
                  <h4
                  class="accordion-title text-18 text-black"
                  data-bs-controls="lqd-faq-item-6"
                  >
                  <a
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-parent="#accordion-faq"
                     href="#lqd-faq-item-6"
                     aria-expanded="false"
                     aria-controls="lqd-faq-item-6"
                  >
                     <span
                        >Can I see the list of funds in each portfolio
                        strategy?
                     </span>
                     <span class="accordion-expander text-primary text-22">
                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                     </span>
                  </a>
                  </h4>
               </div>
               <div
                  id="lqd-faq-item-6"
                  class="accordion-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="lqd-faq-heading-6"
                  data-bs-parent="#accordion-faq"
               >
                  <div class="accordion-content">
                  <div class="ld-fancy-heading">
                     <p
                        class="ld-fh-element mb-1/5em tracking-0 leading-1/6em text-18 font-medium"
                     >
                        Log in or sign up to set your goals, choose a
                        portfolio strategy, and see the holdings at any
                        stock-to-bond allocation you choose. You can also
                        review the list of funds in the Crestwood Capital
                        Management Core Portfolio strategy or browse our
                        expert commentary on investments.
                     </p>
                  </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <!-- End FAQ -->
   <!-- Footer -->
   @include('frontend.layouts.footer')
</div>

@endsection 