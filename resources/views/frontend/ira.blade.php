@extends('frontend.layouts.sub')

@section('title', ' Bonds Investment')

@section('content')

   <div>
        <section
            class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-800"
        >
            <div
            class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
            >
            <div class="row justify-between">
              <div class="flex flex-col items-start module-content">
                  <h2 class="ld-fh-element mb-0/5em">
                  Boost your IRA with 1% matching
                  </h2>
                  <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
                    Start your retirement savings with an IRA. We'll match 1% of your
                    contributions through December 30, 2025.

                    You must click below to be enrolled in this promotion.
                  </p>
                  
                  <a
                  href="{{ route('dashboard') }}"
                  class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
                  >Claim your Offer</a
                  >
              </div>
            </div>
            <div class="">
              <img src="/hs-fs/hubfs/1percentmatch-1-6.png?width=602&name=1percentmatch-1.png" alt="" />
            </div>
            </div>
        </section>
        <section
          class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
        >
          <section
            class="lqd-section service-plans pt-30 pb-70"
            id="service-plans"
            data-custom-animations="true"
            data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"x" : 35 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 0} , "animations": {"x" : 0 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 1}}'
          >
            <div class="container">
              <div class="row">
                <div class="col col-12 col-lg-4">
                  <div
                    class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
                    data-shape-border="1"
                  >
                    <div class="contents">
                      <h3
                        class="tw-text-base md:tw-text-lg lg:tw-text-xl font-bold"
                      >
                        Keep more of your gains
                      </h3>
                      <p>
                        IRAs offer tax breaks that help your investments grow
                        and compound without the drag of annual taxes.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-lg-4">
                  <div
                    class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
                    data-shape-border="1"
                  >
                    <div class="contents">
                      <h3
                        class="tw-text-base md:tw-text-lg lg:tw-text-xl font-bold"
                      >
                        Hands-off investing
                      </h3>
                      <p>
                        Our technology automatically trades, rebalances, and
                        reinvests dividends while you focus on life.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col col-12 col-lg-4">
                  <div
                    class="iconbox relative flex-row items-stretch justify-start text-start mb-2em hover:inner-text-white hover:inner-opacity-100 animation-element"
                    data-shape-border="1"
                  >
                    <div class="contents">
                      <h3
                        class="tw-text-base md:tw-text-lg lg:tw-text-xl font-bold"
                      >
                        Retirement tools.
                      </h3>
                      <p>
                        We create your personalized retirement plan and keep it
                        updated as your life evolves.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Service Plans -->
        </section>

        <section
          class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
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
                    How your IRA match works:
                  </h2>
                  <p
                    class="ld-fh-element mb-1/5em inline-block relative leading-1/4em tw-text-base"
                  >
                    An IRA is one of the best ways to save for retirement—here’s
                    how we can make it even better for you.
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
                      Sign up and open a new Roth or traditional IRA, no
                      rollovers
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
                      Contribute to your IRA throughout 2024
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
                      Receive a 1% match on eligible contributions (up to the
                      annual limit) at the end of the year!
                    </h3>
                  </div>

                  <div
                    class="w-full flex items-center pt-30 gap-40 tw-items-center sm:items-start"
                  >
                    <a
                      href="{{ route('dashboard') }}"
                      class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-1em text-white bg-secondary rounded-4 hover:bg-primary hover:text-white"
                      data-localscroll="true"
                      data-localscroll-options='{"scrollBelowSection":true}'
                    >
                      <span class="btn-txt" data-text="Get a quote"
                        >Claim your offer</span
                      >
                      <span class="btn-icon text-1/15em">
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-md-arrow-round-forward"
                        ></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <img src="../images/1percentwateringplant-6.png" alt="" />
            </div>
          </div>
        </section>

        <section
          class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-yellow-200"
        >
          <div
            class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
          >
            <div class="row justify-between">
              <div class="flex flex-col items-start module-content">
                <h2 class="ld-fh-element mb-0/5em">
                  Get 3% IRA matching with Crestwood Premium
                </h2>
                <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
                  Get your own team of CFP® professionals with Premium. Enjoy
                  personalized planning, a 0.25% Cash Reserve rate boost, and 3%
                  IRA matching (limited time offer).
                </p>
                <a
                  href="{{ route('dashboard') }}"
                  class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
                  >Learn about premium</a
                >
                <p class="tw-text-sm tw-mt-3">
                  Premium requires a minimum of $100,000 in assets with
                  Crestwood Capital Management to upgrade and maintain
                  eligibility in the plan. Assets can be in your IRA, HSA and
                  Investing accounts (Taxable and Crypto).
                </p>
              </div>
            </div>
            <div class="">
              <img src="../images/3percent.png" alt="" />
            </div>
          </div>
        </section>
        <!-- Start Case Studies -->
        <section
          class="lqd-section case-studies pt-60 pb-30 tw-text-black"
          id="case-studies"
          data-custom-animations="true"
          data-ca-options='{"triggerHandler" : "inview" , "animationTarget" : ".col" , "duration" : "1800" , "delay" : "180" , "ease" : "power4.out" , "direction" : "forward" , "initValues" : {"y" :30, "scaleY" :1.05, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ" : "0px" , "opacity" :0}, "animations" : {"y" :0, "scaleY" :1, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ" : "0px" , "opacity" :1}}'
          data-section-luminosity="dark"
        >
          <div class="container">
            <div class="row items-center">
              <div class="col col-12 col-md-6">
                <h2 class="ld-fh-element mb-0/5em text-62">
                  Different IRAs, different tax advantages
                </h2>
              </div>
              <div class="col col-12 col-md-5 offset-md-1">
                <div class="ld-fancy-heading pl-10percent lg:pl-0">
                  <p class="ld-fh-element mb-0/5em text-15 leading-1/3em">
                    Choose the IRA that fits your tax situation
                  </p>
                </div>
              </div>
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
                        Traditional IRA
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >Get your tax break up front and pay no taxes until
                          you withdraw.</span
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
                      >
                        Roth IRA
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >Money goes in already taxed so growth and withdrawals
                          are tax-free.</span
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
                        SEP IRA
                      </h3>
                      <p>
                        <span class="text-16 leading-20 text-gray-400"
                          >A traditional IRA for self-employed people and
                          small-business owners.</span
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Case Studies -->
        <!-- Footer -->
   </div>

@endsection
