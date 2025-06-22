@extends('frontend.layouts.sub')

@section('title', 'About')

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
               Our customers love how we make investing better
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Thousands of people trust Crestwood Capital Management to put their money to work. Here’s what they have to say about us.
               </p>
               
               <!-- <a
               href="{{ route('dashboard') }}"
               class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
               >Get Started</a
               > -->
            </div>
         </div>
         <div class="">
            <img src="{{ asset('/hs-fs/hubfs/herotestiomnial updated-6.png?width=1204&name=herotestiomnial updated.png') }}" alt="" />
         </div>
         </div>
      </section>
      <!-- Start testi-pricing -->
      <section class="lqd-section testi-pricing pt-90 pb-200">
         <div class="absolute max-w-full top-145 module-shape-1">
         <figure
            id="lqd-draw-shape-8a1e8a2"
            class="lqd-draw-shape"
            data-lqd-draw-shape="true"
            data-draw-shape-options='{"ease": "linear", "start": "top bottom", "end": "bottom top"}'
         >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="124"
               height="70"
               viewBox="0 0 124 70"
               fill="none"
            >
               <path
               d="M3 24.5L22 4.5L27.5 28L57.5 3L59 44.5L86.5 7C90.5 27.3333 98.5 67.9 98.5 67.5C98.5 67.1 113.5 29.3333 121 10.5"
               stroke="url(#paint0_linear_9_4)"
               stroke-width="5"
               stroke-linecap="round"
               stroke-linejoin="round"
               ></path>
               <defs>
               <linearGradient
                  id="paint0_linear_9_4"
                  x1="3.27765e-07"
                  y1="23.5"
                  x2="123.5"
                  y2="15.5"
                  gradientUnits="userSpaceOnUse"
               >
                  <stop offset="0" stop-color="#FFBC5C"></stop>
                  <stop offset="1" stop-color="#DF2EAC"></stop>
               </linearGradient>
               </defs>
            </svg>
         </figure>
         </div>
         <div class="absolute max-w-full top-210 module-shape-2">
         <figure
            id="lqd-draw-shape-0edcc08"
            class="lqd-draw-shape"
            data-lqd-draw-shape="true"
            data-draw-shape-options='{"ease": "linear", "start": "top bottom", "end": "bottom top"}'
         >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="130"
               viewBox="0 0 273 59"
               fill="none"
            >
               <path
               d="M9.07199 47.295C9.07199 47.295 28.196 9 55.436 9C82.676 9 78.603 45.336 107.331 45.336C136.059 45.336 143.537 14.3454 171.031 12.909C198 11.5 192.661 49.287 222.631 49.287C246.364 49.287 263.718 15.108 263.718 15.108"
               stroke="url(#paint0_linear_22_3)"
               stroke-width="18"
               stroke-linecap="round"
               ></path>
               <defs>
               <linearGradient
                  id="paint0_linear_22_3"
                  x1="136.395"
                  y1="9"
                  x2="136.395"
                  y2="49.287"
                  gradientUnits="userSpaceOnUse"
               >
                  <stop offset="0" stop-color="#FFED00"></stop>
                  <stop offset="1" stop-color="#FF00FF"></stop>
               </linearGradient>
               </defs>
            </svg>
         </figure>
         </div>
         <div class="container-fluid">
         <div class="row justify-center">
            <div
               class="col col-12 col-md-8 mb-60 p-0 text-center"
               data-custom-animations="true"
               data-ca-options='{"animationTarget": ".animation-element, figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "60px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
            >
               <div class="flex flex-col items-center">
               <div class="ld-fancy-heading relative mask-text">
                  <p
                     class="ld-fh-element relative lqd-split-lines text-18 mb-1/5em text-slate-400"
                     data-split-text="true"
                     data-split-options='{"type": "lines"}'
                  >
                     Trusted by these amazing companies
                  </p>
               </div>
               <div class="ld-fancy-heading relative mask-text">
                  <h2
                     class="mb-0 ld-fh-element relative lqd-split-lines"
                     data-split-text="true"
                     data-split-options='{"type": "lines"}'
                  >
                     Testimonials
                  </h2>
               </div>
               <div class="ld-fancy-heading relative mask-text">
                  <h2
                     class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines h2 mb-0/75em"
                     data-split-text="true"
                     data-split-options='{"type": "lines"}'
                  >
                     <span class="lqd-adv-txt-item">People</span>
                     <span class="relative z-3 lqd-adv-txt-item">
                     <span
                        class="relative inline-flex rounded-full vertical-top -mr-30"
                     >
                        <img
                           class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                           decoding="async"
                           width="58"
                           height="58"
                           src="/frontend/images/demo/start-hub-8/Shape-avatar-1.jpg"
                           alt="testimonials avatar"
                        />
                     </span>
                     </span>
                     <span class="relative z-2 lqd-adv-txt-item">
                     <span
                        class="relative inline-flex rounded-full vertical-top -mr-35"
                     >
                        <img
                           class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                           decoding="async"
                           width="58"
                           height="58"
                           src="/frontend/images/demo/start-hub-8/Shape-avatar-2.jpg"
                           alt="testimonials avatar"
                        />
                     </span>
                     </span>
                     <span class="relative z-1 lqd-adv-txt-item">
                     <span
                        class="relative inline-flex rounded-full vertical-top"
                     >
                        <img
                           class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                           decoding="async"
                           width="58"
                           height="58"
                           src="/frontend/images/demo/start-hub-8/Shape-avatar-1.jpg"
                           alt="testimonials avatar"
                        />
                     </span>
                     </span>
                     <span class="lqd-adv-txt-item">are talking.</span>
                  </h2>
               </div>
               <div
                  class="flex py-10 pr-15 pl-25 items-center bg-gray-100 rounded-6 animation-element"
               >
                  <div
                     class="max-w-full w-30 lqd-imggrp-single block relative"
                  >
                     <div
                     class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
                     >
                     <figure class="w-full relative">
                        <img
                           width="30"
                           height="30"
                           src="/frontend/images/demo/start-hub-8/g2.png"
                           alt="g2 shape"
                        />
                     </figure>
                     </div>
                  </div>
                  <div
                     class="ml-10 ld-fancy-heading relative animation-element"
                  >
                     <p
                     class="ld-fh-element relative text-14 font-medium m-0 text-slate-600"
                     >
                     Trustpilot reviews
                     </p>
                  </div>
                  <div
                     class="star-rating pl-10 text-slate-600 animation-element"
                     title="5/5"
                  >
                     <i class="star-full">&#9733;</i>
                     <i class="star-full">&#9733;</i>
                     <i class="star-full">&#9733;</i>
                     <i class="star-full">&#9733;</i>
                     <i class="star-full">&#9733;</i>
                     <span class="sr-only">5/5</span>
                  </div>
               </div>
               </div>
            </div>
            <div
               class="col col-12"
               data-custom-animations="true"
               data-ca-options='{"animationTarget": ".carousel-container .carousel-item-inner", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"x": "30px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'
            >
               <div
               class="carousel-container carousel-dots-style4 carousel-dots-mobile-outside carousel-dots-mobile-center"
               id="ld-testimonial-carousel"
               >
               <div
                  class="carousel-items relative"
                  data-lqd-flickity='{"cellAlign": "center", "groupCells": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "dotsIndicator": "dots", "dotsAppendTo": "self"}'
               >
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-green-100"
                        >
                           <div class="lqd-testi-quote text-green-600">
                           <blockquote>
                              <p class="text-18">
                                 Bring your ideas to life an intuitive visual
                                 editor. Create, edit, and customize your site
                                 visually and see the changes instantly.
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-1.png"
                                 alt="Daniel Sans"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-green-600 text-18">
                                 Daniel Sans,
                                 </h3>
                                 <h4
                                 class="font-weight-light text-green-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-orange-100"
                        >
                           <div class="lqd-testi-quote text-orange-600">
                           <blockquote>
                              <p class="text-18">
                                 Incredible theme and fantastic support! Every
                                 time I had a question, they got back to you so
                                 quickly and fixed your problem! Im so
                                 impressed! Thank you guys again for your
                                 precious help! Your customer support is
                                 amazing!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-2.png"
                                 alt="ritamjahed"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-orange-600 text-18">
                                 ritamjahed
                                 </h3>
                                 <h4
                                 class="font-weight-light text-orange-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-blue-100"
                        >
                           <div class="lqd-testi-quote text-blue-600">
                           <blockquote>
                              <p class="text-18">
                                 I'm early on in the process of building my
                                 website; however, I'm already impressed by
                                 customer support's response time. Great
                                 customer support ratings is something I
                                 consider before purchasing a theme.
                                 <br />
                                 Thank you LiquidThemes!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-3.png"
                                 alt="myadesigns"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-blue-600 text-18">
                                 myadesigns
                                 </h3>
                                 <h4
                                 class="font-weight-light text-blue-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-yellow-100"
                        >
                           <div class="lqd-testi-quote text-yellow-600">
                           <blockquote>
                              <p class="text-18">
                                 Simply perfect! Theme and support are amazing!
                                 Frank thanks for the help, always fast and
                                 efficient! The best theme and support I've
                                 had!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-4.png"
                                 alt="leandroMariotto"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-yellow-600 text-18">
                                 leandroMariotto
                                 </h3>
                                 <h4
                                 class="font-weight-light text-yellow-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-green-100"
                        >
                           <div class="lqd-testi-quote text-green-600">
                           <blockquote>
                              <p class="text-18">
                                 Bring your ideas to life an intuitive visual
                                 editor. Create, edit, and customize your site
                                 visually and see the changes instantly.
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-1.png"
                                 alt="Daniel Sans"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-green-600 text-18">
                                 Daniel Sans,
                                 </h3>
                                 <h4
                                 class="font-weight-light text-green-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-orange-100"
                        >
                           <div class="lqd-testi-quote text-orange-600">
                           <blockquote>
                              <p class="text-18">
                                 Incredible theme and fantastic support! Every
                                 time I had a question, they got back to you so
                                 quickly and fixed your problem! Im so
                                 impressed! Thank you guys again for your
                                 precious help! Your customer support is
                                 amazing!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-2.png"
                                 alt="ritamjahed"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-orange-600 text-18">
                                 ritamjahed
                                 </h3>
                                 <h4
                                 class="font-weight-light text-orange-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-blue-100"
                        >
                           <div class="lqd-testi-quote text-blue-600">
                           <blockquote>
                              <p class="text-18">
                                 I' m early on in the process of building my
                                 website; however, I'm already impressed by
                                 customer support's response time. Great
                                 customer support ratings is something I
                                 consider before purchasing a theme.
                                 <br />
                                 Thank you LiquidThemes!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-3.png"
                                 alt="myadesigns"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-blue-600 text-18">
                                 myadesigns
                                 </h3>
                                 <h4
                                 class="font-weight-light text-blue-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div
                     class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <div
                           class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-yellow-100"
                        >
                           <div class="lqd-testi-quote text-yellow-600">
                           <blockquote>
                              <p class="text-18">
                                 Simply perfect! Theme and support are amazing!
                                 Frank thanks for the help, always fast and
                                 efficient! The best theme and support I've
                                 had!
                              </p>
                           </blockquote>
                           </div>
                           <div
                           class="lqd-testi-info flex flex-wrap justify-between mb-1em"
                           >
                           <div class="lqd-testi-details flex items-center">
                              <figure
                                 class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em"
                              >
                                 <img
                                 decoding="async"
                                 class="rounded-full"
                                 src="/frontend/images/demo/start-hub-8/testi-avatar-4.png"
                                 alt="leandroMariotto"
                                 />
                              </figure>
                              <div class="pl-1/5">
                                 <h3 class="text-yellow-600 text-18">
                                 leandroMariotto
                                 </h3>
                                 <h4
                                 class="font-weight-light text-yellow-600 text-16"
                                 >
                                 Envato CEO
                                 </h4>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End testi-pricing -->
       
   </div>

@endsection