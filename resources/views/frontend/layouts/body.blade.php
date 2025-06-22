<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content="Crestwood is designed to build wealth over time. Earn 5.00% APY on your uninvested cash, invest in a ladder of US Treasuries, and diversify for the long term with automated investing."/>
      <meta property="og:url" content="index.html"/>
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="Give all your money a place to grow | Crestwood"/>
      <meta property="og:image" content="next/contenthash/next/og/home.contenthash.aa52f2366b0184f673148cdbc3c82e400087ee2e.png"/>
      <meta property="og:image:width" content="1200"/>
      <meta property="og:image:height" content="627"/>
      <meta property="og:description" content="Crestwood is designed to build wealth over time. Earn 5.00% APY on your uninvested cash, invest in a ladder of US Treasuries, and diversify for the long term with automated investing."/>
      <meta name="twitter:card" content="summary"/>
      <meta name="twitter:site" content="@Crestwood"/>
      <meta name="twitter:image" content="next/contenthash/next/og/home.contenthash.aa52f2366b0184f673148cdbc3c82e400087ee2e.png"/>
      <link rel="icon" href="{{ asset('asset/images/brand-logos/favicon.png') }}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="{{ asset("frontend/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css") }}"
    />
    <link rel="stylesheet" href="{{ asset("frontend/css/theme.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend/css/utility.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend/css/demo/digital-hub/base.css") }}" />
    <link
      rel="stylesheet"
      href="{{ asset("frontend/css/demo/digital-hub/digital-hub.css") }}"
    />
    <!-- Add Tailwind CSS after the original styles -->
    <link rel="stylesheet" href="{{ asset("frontend/css/output.css") }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/TYPEKIT_ID.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700&display=swap"
      rel="stylesheet"
    />

    <title>{{ env('APP_NAME') }} | @yield('title') </title>
  </head>

  <body
    data-localscroll-offset="80"
    data-mobile-nav-breakpoint="1199"
    data-localscroll-offset="60"
    data-mobile-nav-style="minimal"
    data-mobile-nav-scheme="dark"
    data-mobile-nav-trigger-alignment="right"
    data-mobile-header-scheme="gray"
    data-mobile-logo-alignment="default"
    data-overlay-onmobile="false"
  >
    <div id="wrap">
      <div class="lqd-sticky-placeholder hidden"></div>

      <header
        class="main-header main-header-overlay"
        data-sticky-header="true"
        data-sticky-values-measured="false"
        data-sticky-options='{ "disableOnMobile" :true, "stickyTrigger" :"first-section" }'
      >
         <section
            class="lqd-section border-bottom px-25 md:hidden module-header" style="background:rgba(0, 0, 0, 0.33);"
         >
            <div class="lqd-head-sec container-fluid flex items-stretch px-0">
               <div class="col lqd-head-col justify-start px-15">
               <div
                  class="header-module module-logo no-rotate navbar-brand-plain py-30"
               >
                  <a class="navbar-brand" href="{{ route("home") }}" rel="home">
                     <span class="navbar-brand-inner">
                     <img
                        class="logo-sticky h-30"
                        src="{{ asset("frontend/images/logo/logo-light.png") }}"
                        alt="Crestwood"
                     />
                     <img
                        class="logo-default h-30"
                        src="{{ asset("frontend/images/logo/logo-light.png") }}"
                        alt="Crestwood"
                     />
                     </span>
                  </a>
               </div>
               </div>
               <div class="col lqd-head-col justify-center px-15">
               <div class="header-module module-primary-nav pos-stc">
                  <div
                     class="navbar-collapse lqd-submenu-default-style h-full inline-flex flex-col items-stretch"
                     id="main-header-collapse"
                     aria-expanded="false"
                     role="navigation"
                  >
                     <ul
                     class="reset-ul main-nav lqd-menu-counter-right main-nav-hover-fade-inactive nav flex items-stretch link-14 link-medium link-white"
                     data-submenu-options='{ "toggleType" :"fade", "handler" :"mouse-in-out" }'
                     data-localscroll="true"
                     data-localscroll-options='{ "itemsSelector" : "> li > a", "trackWindowScroll" : true}'
                     >
                     <li class="is-active">
                        <a href="{{ route("home") }}">Home</a>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url("#practice-areas") }}">
                           Investing
                           <span class="submenu-expander absolute"></span>
                           <span class="link-icon right-icon">
                           <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                           </span>
                        </a>
                        <ul class="nav-item-children">
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('bonds') }}"
                              >Bonds investing</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('ira') }}"
                              >IRAs and 401(k) rollovers</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('portfolio') }}"
                              >Portfolio options</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('socially') }}"
                              >Socially responsible investing</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('cryptoinvest') }}"
                              >Crypto investing</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('performance') }}"
                              >Historical performance tool</a
                           >
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url("#practice-areas") }}">
                           Cash
                           <span class="submenu-expander absolute"></span>
                           <span class="link-icon right-icon">
                           <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                           </span>
                        </a>
                        <ul class="nav-item-children">
                           <li>
                           <a class="text-black-60" href="{{ route('reserve') }}"
                              >High-yield cash account</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('checking') }}"
                              >Checking account</a
                           >
                           </li>
                           <li>
                           <a class="text-black-60" href="{{ route('rewards') }}"
                              >Rewards</a
                           >
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url("#practice-areas") }}">
                           Planning
                           <span class="submenu-expander absolute"></span>
                           <span class="link-icon right-icon">
                           <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                           </span>
                        </a>
                        <ul class="nav-item-children">
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('expert') }}"
                              >Talk to an advisor</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('retirement') }}"
                              >Retirement planning</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('goals') }}"
                              >Track your goals</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('dash') }}"
                              >All-in-one dashboard</a
                           >
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url("#practice-areas") }}">
                           About
                           <span class="submenu-expander absolute"></span>
                           <span class="link-icon right-icon">
                           <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                           </span>
                        </a>
                        <ul class="nav-item-children">
                           <li>
                           <a class="text-black-60" href="{{ route('about') }}"
                              >Who we are</a
                           >
                           </li>
                           <li>
                           <a class="text-black-60" href="{{ route('review') }}"
                              >Reviews</a
                           >
                           </li>
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('philosophy') }}"
                              >Investment philosophy</a
                           >
                           </li>
                           <li>
                           <a class="text-black-60" href="{{ route('pricing') }}"
                              >Pricing</a
                           >
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url("#practice-areas") }}">
                           Education
                           <span class="submenu-expander absolute"></span>
                           <span class="link-icon right-icon">
                           <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                           </span>
                        </a>
                        <ul class="nav-item-children">
                           <li>
                           <a
                              class="text-black-60"
                              href="{{ route('contact') }}"
                              >Help center</a
                           >
                           </li>
                           <li>
                           <a class="text-black-60" href="{{ route('faq') }}"
                              >FAQ</a
                           >
                           </li>
                        </ul>
                     </li>
                     </ul>
                  </div>
               </div>
               </div>
               <div class="col lqd-head-col justify-end px-15 lg:hidden">
               <div class="ld-fancy-heading flex flex-col justify-center">
                  <a
                     href="{{ route('login') }}"
                     class="ld-fh-element mb-0 mr-20 text-14 font-bold text-white module-number"
                  >
                     Get Started
                  </a>
               </div>
               </div>
            </div>
         </section>
         <section
            class="lqd-section lqd-stickybar-wrap lqd-stickybar-right lqd-show-onstuck items-end pointer-events-none pb-40"
         >
            <div class="lqd-stickybar">
               <div class="col lqd-head-col justify-end px-15">
               <div class="header-module module-button py-10">
                  <a
                     href="{{ url("#contact-modal") }}"
                     class="btn btn-naked btn-icon-custom-size btn-icon-circle btn-icon-solid btn-no-label pointer-events-auto font-family-inherit text-12 uppercase font-bold leading-1/5em tracking-0/1em text-slate-700"
                     data-lity="#contact-modal"
                  >
                     <span
                     class="btn-icon w-55 h-55 bg-green-600 text-20 text-white"
                     >
                     <i class="lqd-icn-ess icon-speech-bubble"></i>
                     </span>
                  </a>
               </div>
               </div>
            </div>
         </section>
         <div class="lqd-mobile-sec relative bg-dark">
            <div class="lqd-mobile-sec-inner navbar-header flex items-stretch">
               <div class="lqd-mobile-modules-container"></div>
               <button
               type="button"
               class="navbar-toggle collapsed nav-trigger style-mobile flex items-center"
               data-ld-toggle="true"
               data-bs-toggle="collapse"
               data-bs-target="#lqd-mobile-sec-nav"
               aria-expanded="false"
               data-toggle-options='{ "changeClassnames" : { "html" : "mobile-nav-activated" } }'
               >
               <span class="sr-only">Toggle navigation</span>
               <span class="bars">
                  <span class="bars-inner w-full h-full flex flex-col">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                  </span>
               </span>
               </button>
               <a class="navbar-brand flex justify-start" href="{{ route("home") }}">
               <span class="navbar-brand-inner">
                  <img
                     class="logo-default h-40"
                     src="{{ asset("frontend/images/logo/logo-dark.png") }}"
                     alt="Lawyer"
                  />
               </span>
               </a>
            </div>
            <div class="lqd-mobile-sec-nav">
               <div
               class="mobile-navbar-collapse navbar-collapse collapse w-full"
               id="lqd-mobile-sec-nav"
               aria-expanded="false"
               role="navigation"
               >
               <ul
                  class="reset-ul lqd-mobile-main-nav main-nav text-white"
                  data-localscroll="true"
                  data-localscroll-options='{"itemsSelector":"> li > a"}'
                  style="color: white !important;"
               >
                  <li>
                     <a href="{{ url("#banner") }}">Home</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ url("#practice-areas") }}">
                     Investing
                     <span class="submenu-expander absolute"></span>
                     </a>
                     <ul class="nav-item-children">
                     <li>
                        <a href="{{ route('bonds') }}"
                           >Bonds investing</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('ira') }}"
                           >IRAs and 401(k) rollovers</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('portfolio') }}"
                           >Portfolio options</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('socially') }}"
                           >Socially responsible investing</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('cryptoinvest') }}"
                           >Crypto investing</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('performance') }}"
                           >Historical performance tool</a
                        >
                     </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ url("#practice-areas") }}">
                     Cash
                     <span class="submenu-expander absolute"></span>
                     </a>
                     <ul class="nav-item-children">
                     <li>
                        <a href="{{ route('reserve') }}"
                           >High-yield cash account</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('checking') }}">Checking account</a>
                     </li>
                     <li><a href="{{ route('rewards') }}">Rewards</a></li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ url("#practice-areas") }}">
                     Planning
                     <span class="submenu-expander absolute"></span>
                     </a>
                     <ul class="nav-item-children">
                     <li>
                        <a href="{{ route('expert') }}"
                           >Talk to an advisor</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('retirement') }}"
                           >Retirement planning</a
                        >
                     </li>
                     <li>
                        <a href="{{ route('goals') }}">Track your goals</a>
                     </li>
                     <li>
                        <a href="{{ route('dash') }}"
                           >All-in-one dashboard</a
                        >
                     </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ url("#practice-areas") }}">
                     About
                     <span class="submenu-expander absolute"></span>
                     </a>
                     <ul class="nav-item-children">
                     <li><a href="{{ route('about') }}">Who we are</a></li>
                     <li><a href="{{ route('review') }}">Reviews</a></li>
                     <li>
                        <a href="{{ route('philosophy') }}"
                           >Investment philosophy</a
                        >
                     </li>
                     <li><a href="{{ route('pricing') }}">Pricing</a></li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ url("#practice-areas") }}">
                     Education
                     <span class="submenu-expander absolute"></span>
                     </a>
                     <ul class="nav-item-children">
                     <li>
                        <a href="{{ route('contact') }}">Help center</a>
                     </li>
                     <li><a href="{{ route('faq') }}">FAQ</a></li>
                     </ul>
                  </li>
               </ul>
               </div>
            </div>
         </div>
      </header>

      @yield('content')

      </div>
  </body>
</html>