@extends('frontend.layouts.body')

@section('title', ' Home')

@section('content')

   <main class="content" id="lqd-site-content">
      <div id="lqd-contents-wrap">
         <!-- Start Banner -->
         <section
         class="lqd-section banner pt-140 pb-200 transition-all bg-transparent text-white-50 relative"
         id="banner"
         style="
            background-image: linear-gradient(
               120deg,
               #353a5f 0%,
               #191c33 100%
            );
         "
         >
         <div class="lqd-shape lqd-shape-bottom" data-negative="false">
            <svg
               class="lqd-custom-shape"
               fill="none"
               height="461"
               viewbox="0 0 1440 461"
               width="1440"
               xmlns="http://www.w3.org/2000/svg"
               preserveaspectratio="none"
            >
               <path
               class="lqd-shape-fill"
               fill="#54598B"
               d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z"
               fill-opacity=".09"
               >
               <animate
                  repeatcount="indefinite"
                  fill="freeze"
                  attributename="d"
                  dur="10s"
                  values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z"
               ></animate>
               </path>
               <path
               class="lqd-shape-fill"
               fill="#3B437059"
               fill-opacity="1"
               d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"
               >
               <animate
                  repeatcount="indefinite"
                  fill="freeze"
                  attributename="d"
                  dur="8s"
                  values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"
               ></animate>
               </path>
               <path
               class="lqd-shape-fill"
               fill="#36407E"
               fill-opacity="1"
               d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"
               >
               <animate
                  repeatcount="indefinite"
                  fill="freeze"
                  attributename="d"
                  dur="6.5s"
                  values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"
               ></animate>
               </path>
               <path
               class="lqd-shape-fill"
               fill="#fff"
               fill-opacity="1"
               d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"
               >
               <animate
                  repeatcount="indefinite"
                  fill="freeze"
                  attributename="d"
                  dur="5.5s"
                  values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"
               ></animate>
               </path>
            </svg>
         </div>
         <div class="container">
            <div class="row">
               <div
               class="col col-12 text-center"
               data-custom-animations="true"
               data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "30px", "rotationY" : 40, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'
               >
               <div class="relative flex flex-col text-center">
                  <div
                     class="w-auto absolute module-shape-1 -top-5percent -left-10percent sm:hidden"
                     data-parallax="true"
                     data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                     data-parallax-from='{"x": "100px", "y": "175px", "rotationZ" : -50}'
                     data-parallax-to='{"x": "15px", "y": "-60px", "rotationZ" : 20}'
                  >
                     <img
                     class="animation-element"
                     width="79"
                     height="120"
                     src="{{ asset("frontend/images/demo/start-hub-2/3D/Image-752.png") }}"
                     alt="3D comment"
                     />
                  </div>
                  <div
                     class="w-auto z-1 absolute module-shape-2 top-25percent"
                     data-parallax="true"
                     data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                     data-parallax-from='{"y": "-114px", "scaleX" : 0.8, "scaleY" : 0.8}'
                     data-parallax-to='{"y": "115px", "scaleX" : 1.3, "scaleY" : 1.3}'
                  >
                     <img
                     class="animation-element"
                     width="110"
                     height="290"
                     src="{{ asset("frontend/images/demo/start-hub-2/3D/3.png") }}"
                     alt="3D person"
                     />
                  </div>
                  <div
                     class="w-auto absolute module-shape-3 top-10percent sm:hidden"
                     data-parallax="true"
                     data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                     data-parallax-from='{"y": "245px", "scaleX" : 1, "scaleY" : 1, "rotationZ" : -70}'
                     data-parallax-to='{"y": "-65px", "scaleX" : 1.1, "scaleY" : 1.1, "rotationZ" : 25}'
                  >
                     <img
                     class="animation-element"
                     width="87"
                     height="196"
                     src="{{ asset("frontend/images/demo/start-hub-2/3D/1.png") }}"
                     alt="3D cloud"
                     />
                  </div>
                  <div
                     class="w-auto z-1 absolute module-shape-4 top-45percent"
                     data-parallax="true"
                     data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                     data-parallax-from='{"y": "-50px", "scaleX" : 1, "scaleY" : 1, "rotationZ" : 78}'
                     data-parallax-to='{"y": "120px", "scaleX" : 1.1, "scaleY" : 1.1, "rotationZ" : -39}'
                  >
                     <!-- <img
                     class="animation-element"
                     width="80"
                     height="164"
                     src="{{ asset("images/logo.png") }}"
                     alt="3D hand"
                     /> -->
                  </div>
                  <div class="relative z-2">
                     <div class="ld-fancy-heading relative animation-element">
                     <h1
                        class="ld-fh-element relative lqd-highlight-custom lqd-highlight-custom-2 mb-0/35em text-white tw-text-4xl md:tw-text-4xl lg:tw-text-7xl"
                        data-text-rotator="true"
                        data-inview="true"
                        data-transition-delay="true"
                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                     >
                        <span>Grow</span>
                        <mark class="lqd-highlight">
                           <span class="lqd-highlight-txt"> your money,</span>
                           <span
                           class="lqd-highlight-inner -bottom-0/1em left-0"
                           >
                           <svg
                              class="lqd-highlight-pen"
                              width="51"
                              height="51"
                              viewbox="0 0 51 51"
                              xmlns="http://www.w3.org/2000/svg"
                           >
                              <path
                                 d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z"
                              ></path>
                           </svg>
                           <svg
                              class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                              width="233"
                              height="13"
                              viewbox="0 0 233 13"
                              xmlns="http://www.w3.org/2000/svg"
                              aria-hidden="true"
                              preserveaspectratio="none"
                           >
                              <path
                                 d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                              ></path>
                           </svg>
                           </span>
                        </mark>
                        <span class="txt-rotate-keywords">
                           <span class="txt-rotate-keyword active">
                           <span>The Simple Way.</span>
                           </span>
                           <span class="txt-rotate-keyword">
                           <span>Build your future.</span>
                           </span>
                           <span class="txt-rotate-keyword">
                           <span>Start Investing.</span>
                           </span>
                        </span>
                     </h1>
                     </div>
                     <div
                     class="ld-fancy-heading relative mx-25percent sm:m-0 animation-element"
                     >
                     <p
                        class="ld-fh-element relative text-20 mb-1/65em leading-1/25em font-medium"
                     >
                        Build wealth effortlessly with automated investing,
                        boost your cash with a competitive variable 4.50% APY,
                        and secure your future with tax-advantaged IRAs.
                     </p>
                     </div>
                     <div class="mb-10">
                     <a
                        href="{{ route("login") }}"
                        class="btn font-bold text-13 btn-solid text-white bg-primary uppercase border-thin btn-hover-swp leading-1/5em px-0/6em tracking-0/1em rounded-4 hover:bg-black hover:text-white"
                        data-localscroll="true"
                     >
                        <span
                           class="inline-flex py-1/15em px-2/1em items-center"
                        >
                           <span class="btn-txt" data-text="Get started"
                           >Get started</span
                           >
                           <span class="btn-icon">
                           <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                           </span>
                           <span class="btn-icon">
                           <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                           </span>
                        </span>
                     </a>
                     </div>
                  </div>
                  <div class="w-full mt-20 flex flex-wrap">
                     <div
                     class="w-20percent sm:w-50percent p-10 module-client animation-element"
                     >
                     <!-- <img
                        class="opacity-40 hover:opacity-100 transition-all"
                        width="111"
                        height="33"
                        src="{{ asset("frontend/images/demo/start-hub-2/client/spotify-1.svg") }}"
                        alt="spotify"
                     /> -->
                     </div>
                     <div
                     class="w-20percent sm:w-50percent p-10 module-client animation-element"
                     >
                     <!-- <img
                        class="opacity-40 hover:opacity-100 transition-all"
                        width="65"
                        height="23"
                        src="{{ asset("frontend/images/demo/start-hub-2/client/nike.svg") }}"
                        alt="nike"
                     /> -->
                     </div>
                     <div
                     class="w-20percent sm:w-50percent p-10 module-client animation-element"
                     >
                     <!-- <img
                        class="opacity-40 hover:opacity-100 transition-all"
                        width="75"
                        height="17"
                        src="{{ asset("frontend/images/demo/start-hub-2/client/amd-logo-1.svg") }}"
                        alt="amd"
                     /> -->
                     </div>
                     <div
                     class="w-20percent sm:w-50percent p-10 module-client animation-element"
                     >
                     <!-- <img
                        class="opacity-40 hover:opacity-100 transition-all"
                        width="73"
                        height="19"
                        src="{{ asset("frontend/images/demo/start-hub-2/client/Path-43399.svg") }}"
                        alt="apper"
                     /> -->
                     </div>
                     <div class="w-20percent sm:w-full p-10 animation-element">
                     <!-- <img
                        class="opacity-40 hover:opacity-100 transition-all"
                        width="85"
                        height="25"
                        src="{{ asset("frontend/images/demo/start-hub-2/client/logitech-2-1.svg") }}"
                        alt="logitech"
                     /> -->
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         <div
            class="lqd-sticky-sentinel invisible absolute pointer-events-none"
         ></div>
         </section>
      </div>
      <!-- End Banner -->
      <!-- <section
         class="lqd-section tab-items"
         style="
         background-image: linear-gradient(
            180deg,
            rgba(236, 243, 255, 0.45) 0%,
            rgba(255, 255, 255, 0.45) 54.77707006369427%
         );
         "
      > -->
      <div class="container">
         <div class="row">
         <div class="col col-12">
            <div
               class="lqd-pb-nums lqd-pb-icon-between-middle w-full flex flex-col items-center justify-center mt-25 py-35 px-65 border-1 border-black-10 rounded-full module-steps md:border-0 md:m-0 md:py-0"
            >
               <div class="container-fluid p-0">
               <div class="row">
                  <div class="lqd-pb-column col-12 col-lg-4 relative">
                     <div
                     class="lqd-pb-style-5 lqd-pb-shaped lqd-pb-circle flex items-center justify-center md:justify-start"
                     >
                     <!-- <div
                        class="lqd-pb-num-container mr-1/5rem text-65 leading-1em text-green-900"
                     >
                        <div
                           class="lqd-pb-num lqd-pb-active-shape relative w-45percent h-45 text-18 rounded-full"
                        ></div>
                     </div> -->
                     <div class="lqd-pb-content">
                        <h6 class="my-0 text-blue-900 leading-1/5em">
                           Automated Investing
                        </h6>
                     </div>
                     </div>
                  </div>
                  <div class="lqd-pb-column col-12 col-lg-4 relative">
                     <div
                     class="lqd-pb-style-5 lqd-pb-shaped lqd-pb-circle flex items-center justify-center md:justify-start"
                     >
                     <!-- <div
                        class="lqd-pb-num-container mr-1/5rem text-65 leading-1em text-green-900"
                     >
                        <div
                           class="lqd-pb-num lqd-pb-active-shape relative w-45percent h-45 text-18 rounded-full"
                        ></div>
                     </div> -->
                     <div class="lqd-pb-content">
                        <h6 class="my-0 text-blue-900 leading-1/5em">
                           High Returns
                        </h6>
                     </div>
                     </div>
                  </div>
                  <div class="lqd-pb-column col-12 col-lg-4 relative">
                     <div
                     class="lqd-pb-style-5 lqd-pb-shaped lqd-pb-circle flex items-center justify-center md:justify-start"
                     >
                     <!-- <div
                        class="lqd-pb-num-container mr-1/5rem text-65 leading-1em text-green-900"
                     >
                        <div
                           class="lqd-pb-num lqd-pb-active-shape relative w-45percent h-45 text-18 rounded-full"
                        ></div>
                     </div> -->
                     <div class="lqd-pb-content">
                        <h6 class="my-0 text-blue-900 leading-1/5em">
                           Tax Optimization
                        </h6>
                     </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </div>
      <!-- </section> -->

      <!-- Start Services -->
      <section
         class="lqd-section services pt-45 pb-55 bg-transparent"
         id="services"
         style="
         background-image: linear-gradient(180deg, #fff 47%, #f0eefd 47%);
         "
         data-custom-animations="true"
         data-ca-options='{"animationTarget": "h6, h2, .iconbox", "ease": "power4.out", "initValues": {"y": "45px", "scaleX" : 1.2, "scaleY" : 1.2, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
      >
         <div
         class="background-overlay bg-transparent transition-all opacity-100"
         style="
            background-image: linear-gradient(
               0deg,
               rgb(255, 255, 255) 0,
               rgba(255, 255, 255, 0) 55%
            );
         "
         ></div>
         <div class="container">
         <div class="row justify-center">
            <div
               class="col col-12 col-md-10 col-lg-9 col-xl-7 mb-25 text-center px-70 sm:px-0"
            >
               <div class="ld-fancy-heading relative">
               <h2 class="ld-fh-element mb-0/5em inline-block relative">
                  Smart Investment Solutions
               </h2>
               </div>
            </div>
            <div class="col col-12 p-0"></div>
            <div class="col col-12 col-md-6 p-15">
               <div
               class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 mr-10 lg:m-0"
               >
               <div class="iconbox-icon-wrap mr-35">
                  <div class="text-34 iconbox-icon-container inline-flex">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="35"
                     height="35"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="#41b79d"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >
                     <path d="M12 2v4" />
                     <path d="m16.2 7.8 2.9-2.9" />
                     <path d="M18 12h4" />
                     <path d="m16.2 16.2 2.9 2.9" />
                     <path d="M12 18v4" />
                     <path d="m4.9 19.1 2.9-2.9" />
                     <path d="M2 12h4" />
                     <path d="m4.9 4.9 2.9 2.9" />
                     <circle cx="12" cy="12" r="3" fill="#6dd8c0" />
                     </svg>
                  </div>
               </div>
               <div class="contents">
                  <h3 class="text-20 lqd-iconbox-heading">
                     <span> Auto-Investing </span>
                     <svg
                     class="inline-block arrow-icon"
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
                     Set it and forget it. Automated investing strategies that
                     work while you sleep.
                  </p>
               </div>
               </div>
            </div>
            <div class="col col-12 col-md-6 p-15">
               <div
               class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 ml-10 lg:m-0"
               >
               <div class="iconbox-icon-wrap mr-35">
                  <div class="text-34 iconbox-icon-container inline-flex">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="35"
                     height="35"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="#41b79d"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >
                     <path d="M3 3v18h18" />
                     <path d="m19 9-5 5-4-4-3 3" />
                     <circle cx="12" cy="12" r="2" fill="#6dd8c0" />
                     <circle cx="19" cy="9" r="2" fill="#00cb99" />
                     </svg>
                  </div>
               </div>
               <div class="contents">
                  <h3 class="text-20 lqd-iconbox-heading">
                     <span> High Returns </span>
                     <svg
                     class="inline-block arrow-icon"
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
                     Maximize your wealth with competitive returns and compound
                     growth strategies.
                  </p>
               </div>
               </div>
            </div>
            <div class="col col-12 col-md-6 p-15">
               <div
               class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 mr-10 lg:m-0"
               >
               <div class="iconbox-icon-wrap mr-35">
                  <div class="text-34 iconbox-icon-container inline-flex">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="35"
                     height="35"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="#41b79d"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >
                     <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                     <circle cx="9" cy="7" r="4" />
                     <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                     <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                     <rect
                        x="2"
                        y="2"
                        width="20"
                        height="14"
                        rx="2"
                        ry="2"
                        fill="#6dd8c0"
                        opacity="0.3"
                     />
                     <path d="M2 12h20" />
                     </svg>
                  </div>
               </div>
               <div class="contents">
                  <h3 class="text-20 lqd-iconbox-heading">
                     <span> Tax Optimization </span>
                     <svg
                     class="inline-block arrow-icon"
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
                     Smart tax strategies including IRAs and 401(k)s to keep
                     more of your returns.
                  </p>
               </div>
               </div>
            </div>
            <div class="col col-12 col-md-6 p-15">
               <div
               class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover box-shadow-bottom relative bg-white rounded-16 pt-35 pr-65 pb-40 pl-50 mb-15 ml-10 lg:m-0"
               >
               <div class="ld-fancy-heading absolute top-0 z-1">
                  <h6
                     class="ld-fh-element relative m-0 leading-1em uppercase px-10 py-5 rounded-4 text-13 bg-yellow-200"
                  >
                     PRO
                  </h6>
               </div>
               <div class="iconbox-icon-wrap mr-35">
                  <div class="text-34 iconbox-icon-container inline-flex">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="35"
                     height="35"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="#41b79d"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >
                     <path d="M12 2L2 7l10 5 10-5-10-5z" />
                     <path d="M2 17l10 5 10-5" />
                     <path d="M2 12l10 5 10-5" />
                     <circle
                        cx="12"
                        cy="12"
                        r="3"
                        fill="#6dd8c0"
                        opacity="0.5"
                     />
                     </svg>
                  </div>
               </div>
               <div class="contents">
                  <h3 class="text-20 lqd-iconbox-heading">
                     <span> Portfolio Diversification </span>
                     <svg
                     class="inline-block arrow-icon"
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
                     Professional portfolio management across multiple asset
                     classes to minimize risk and maximize growth.
                  </p>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Services -->

      <!-- Start Accordion -->
      <section class="lqd-section accordion py-50 md:p-0">
         <div class="container">
         <div class="row justify-between">
            <div
               class="col col-lg-5 col-12 flex flex-col items-start module-content"
            >
               <h6 class="ld-fh-element mb-1em">Automated Investing</h6>
               <h2 class="ld-fh-element mb-0/5em">
               Take the stress out of investing with automation.
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Get a diversified, expert-built portfolio to help you invest
               like a pro. We manage your money for you—helping minimize
               taxes and maximize returns—while you focus on living your
               life.
               </p>
               <a
               href="{{ route("investments") }}"
               class="btn btn-plain btn-hover-txt-liquid-y round border-none btn-has-label rounded-4 font-bold leading-1/1em text-12 overflow-hidden text-secondary tracking-0/1em uppercase hover:text-primary"
               >
               <span>
                  <span
                     class="btn-txt"
                     data-text="━ Start investing"
                     data-transition-delay="true"
                     data-delay-options='{"elements":".lqd-chars","delayType":"animation","startDelay": 0,"delayBetween": 32.5}'
                     data-split-text="true"
                     data-split-options='{"type":"chars, words"}'
                  >
                     ━ Start investing
                  </span>
               </span>
               </a>
            </div>
            <div class="col col-lg-5 col-12">
               <div
               class="accordion accordion-lg accordion-title-underlined accordion-expander-lg mb-2em"
               id="accordion-items"
               role="tablist"
               aria-multiselectable="true"
               >
               <div class="accordion-item panel active">
                  <div
                     class="accordion-heading"
                     role="tab"
                     id="heading-accordion-1"
                     data-id="accordion-items-1"
                  >
                     <h4
                     class="accordion-title text-17 leading-1/7em"
                     data-bs-controls="accordion-items-1"
                     >
                     <a
                        data-bs-toggle="collapse"
                        data-parent="#accordion-items"
                        href="{{ url("#accordion-items-1") }}"
                        aria-expanded="true"
                        aria-controls="accordion-items-1"
                     >
                        Curated portfolios for every goal
                        <span class="accordion-expander">
                           <i class="lqd-icn-ess icon-ion-ios-add"></i>
                           <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                        </span>
                     </a>
                     </h4>
                  </div>
                  <div
                     id="accordion-items-1"
                     class="accordion-collapse collapse show"
                     role="tabpanel"
                     aria-labelledby="heading-accordion-1"
                     data-bs-parent="#accordion-items"
                  >
                     <div class="accordion-content">
                     <div class="ld-fancy-heading">
                        <p class="ld-fh-element mb-0 text-16 leading-1/5em">
                           Choose from expertly designed portfolios including
                           sustainability-focused ESG funds, cutting-edge tech
                           innovations, and crypto diversification options to
                           match your values and investment goals.
                        </p>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item panel">
                  <div
                     class="accordion-heading"
                     role="tab"
                     id="heading-accordion-2"
                     data-id="accordion-items-2"
                  >
                     <h4
                     class="accordion-title text-17 leading-1/7em"
                     data-bs-controls="accordion-items-2"
                     >
                     <a
                        class="collapsed"
                        data-bs-toggle="collapse"
                        data-parent="#accordion-items"
                        href="{{ url("#accordion-items-2") }}"
                        aria-expanded="false"
                        aria-controls="accordion-items-2"
                     >
                        Automated rebalancing & reinvestment
                        <span class="accordion-expander">
                           <i class="lqd-icn-ess icon-ion-ios-add"></i>
                           <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                        </span>
                     </a>
                     </h4>
                  </div>
                  <div
                     id="accordion-items-2"
                     class="accordion-collapse collapse"
                     role="tabpanel"
                     aria-labelledby="heading-accordion-2"
                     data-bs-parent="#accordion-items"
                  >
                     <div class="accordion-content">
                     <div class="ld-fancy-heading">
                        <p class="ld-fh-element mb-0 text-16 leading-1/5em">
                           Your portfolio stays optimized with
                           <strong>automatic rebalancing</strong> and dividend
                           reinvestment, ensuring your investments maintain
                           their target allocation without any effort from you.
                        </p>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item panel">
                  <div
                     class="accordion-heading"
                     role="tab"
                     id="heading-accordion-3"
                     data-id="accordion-items-3"
                  >
                     <h4
                     class="accordion-title text-17 leading-1/7em"
                     data-bs-controls="accordion-items-3"
                     >
                     <a
                        class="collapsed"
                        data-bs-toggle="collapse"
                        data-parent="#accordion-items"
                        href="{{ url("#accordion-items-3") }}"
                        aria-expanded="false"
                        aria-controls="accordion-items-3"
                     >
                        Tax-efficient wealth building
                        <span class="accordion-expander">
                           <i class="lqd-icn-ess icon-ion-ios-add"></i>
                           <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                        </span>
                     </a>
                     </h4>
                  </div>
                  <div
                     id="accordion-items-3"
                     class="accordion-collapse collapse"
                     role="tabpanel"
                     aria-labelledby="heading-accordion-3"
                     data-bs-parent="#accordion-items"
                  >
                     <div class="accordion-content">
                     <div class="ld-fancy-heading">
                        <p class="ld-fh-element mb-0 text-16 leading-1/5em">
                           Advanced tax-loss harvesting and
                           <strong>recurring deposit automation</strong> help
                           boost your after-tax returns while keeping your
                           investment strategy consistently on track.
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

      <!-- End Accordion -->

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-48 md:p-0 tw-bg-blue-100"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="w-full">
               <div class="w-full flex flex-col items-start module-content">
               <h2
                  class="ld-fh-element mb-0/5em inline-block relative tw-text-lg lg:tw-text-2xl"
               >
                  Maximize your money: Get a high-impact 4.50% variable APY.*
               </h2>
               <p
                  class="ld-fh-element mb-1/5em inline-block relative leading-1/4em tw-text-base"
               >
                  Don’t let traditional savings accounts keep your money from
                  growing. Our high-yield cash account earns interest at
                  nearly 10x the national average.**
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
                     No fees or minimum balance, just $10 to get started
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
                     Up to $2M FDIC insurance with our program banks
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
                     Unlimited withdrawals
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
                     Transfer cash to investing accounts seamlessly
                  </h3>
               </div>

               <div
                  class="w-full flex items-center pt-30 gap-40 tw-items-center sm:items-start"
               >
                  <a
                     href="{{ route("savings") }}"
                     class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-1em text-white bg-secondary rounded-4 hover:bg-primary hover:text-white"
                     data-localscroll="true"
                     data-localscroll-options='{"scrollBelowSection":true}'
                  >
                     <span class="btn-txt" data-text="Get a quote"
                     >Start Saving</span
                     >
                     <span class="btn-icon text-1/15em">
                     <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-md-arrow-round-forward"
                     ></i>
                     </span>
                  </a>
                  <a href="{{ route("savings") }}" class="ld-fh-element m-0 module-text"
                     >Learn more</a
                  >
               </div>
               </div>
            </div>
         </div>
         <div class="">
            <svg
               xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 646 498"
               width="646"
               height="498"
               style="
               width: 100%;
               height: 100%;
               transform: translate3d(0px, 0px, 0px);
               content-visibility: visible;
               "
               preserveAspectRatio="xMidYMid meet"
               aria-hidden="true"
            >
               <defs>
               <clipPath id="__lottie_element_2">
                  <rect width="646" height="498" x="0" y="0"></rect>
               </clipPath>
               </defs>
               <g clip-path="url(#__lottie_element_2_6)">
               <g
                  style="display: block"
                  transform="matrix(1,0,0,1,0,0)"
                  opacity="1"
               >
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,303,352.04998779296875)"
                  >
                     <path
                     fill="rgb(255,255,255)"
                     fill-opacity="1"
                     d=" M-191,-44.54999923706055 C-191,-44.54999923706055 191,-44.54999923706055 191,-44.54999923706055 C191,-44.54999923706055 191,44.54999923706055 191,44.54999923706055 C191,44.54999923706055 -191,44.54999923706055 -191,44.54999923706055 C-191,44.54999923706055 -191,-44.54999923706055 -191,-44.54999923706055z"
                     ></path>
                  </g>
                  <g opacity="1" transform="matrix(1,0,0,1,303,295.5)">
                     <path
                     fill="rgb(199,199,199)"
                     fill-opacity="1"
                     d=" M-187.10000610351562,-170 C-187.10000610351562,-170 187.10000610351562,-170 187.10000610351562,-170 C189,-170 190.5,-168.5 190.5,-166.60000610351562 C190.5,-166.60000610351562 190.5,166.60000610351562 190.5,166.60000610351562 C190.5,168.5 189,170 187.10000610351562,170 C187.10000610351562,170 -187.10000610351562,170 -187.10000610351562,170 C-189,170 -190.5,168.5 -190.5,166.60000610351562 C-190.5,166.60000610351562 -190.5,-166.60000610351562 -190.5,-166.60000610351562 C-190.5,-168.5 -189,-170 -187.10000610351562,-170z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,303,294.1000061035156)"
                  >
                     <path
                     fill="rgb(255,255,255)"
                     fill-opacity="1"
                     d=" M-187.10000610351562,-168.60000610351562 C-187.10000610351562,-168.60000610351562 187.10000610351562,-168.60000610351562 187.10000610351562,-168.60000610351562 C189,-168.60000610351562 190.5,-167.10000610351562 190.5,-165.1999969482422 C190.5,-165.1999969482422 190.5,165.1999969482422 190.5,165.1999969482422 C190.5,167.10000610351562 189,168.60000610351562 187.10000610351562,168.60000610351562 C187.10000610351562,168.60000610351562 -187.10000610351562,168.60000610351562 -187.10000610351562,168.60000610351562 C-189,168.60000610351562 -190.5,167.10000610351562 -190.5,165.1999969482422 C-190.5,165.1999969482422 -190.5,-165.1999969482422 -190.5,-165.1999969482422 C-190.5,-167.10000610351562 -189,-168.60000610351562 -187.10000610351562,-168.60000610351562z"
                     ></path>
                     <path
                     stroke-linecap="butt"
                     stroke-linejoin="miter"
                     fill-opacity="0"
                     stroke-miterlimit="4"
                     stroke="rgb(199,199,199)"
                     stroke-opacity="1"
                     stroke-width="1"
                     d=" M-187.10000610351562,-168.60000610351562 C-187.10000610351562,-168.60000610351562 187.10000610351562,-168.60000610351562 187.10000610351562,-168.60000610351562 C189,-168.60000610351562 190.5,-167.10000610351562 190.5,-165.1999969482422 C190.5,-165.1999969482422 190.5,165.1999969482422 190.5,165.1999969482422 C190.5,167.10000610351562 189,168.60000610351562 187.10000610351562,168.60000610351562 C187.10000610351562,168.60000610351562 -187.10000610351562,168.60000610351562 -187.10000610351562,168.60000610351562 C-189,168.60000610351562 -190.5,167.10000610351562 -190.5,165.1999969482422 C-190.5,165.1999969482422 -190.5,-165.1999969482422 -190.5,-165.1999969482422 C-190.5,-167.10000610351562 -189,-168.60000610351562 -187.10000610351562,-168.60000610351562z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,303.04998779296875,307.1000061035156)"
                  >
                     <path
                     fill="rgb(199,199,199)"
                     fill-opacity="1"
                     d=" M-175.35000610351562,-0.20000000298023224 C-175.35000610351562,-0.20000000298023224 175.35000610351562,-0.20000000298023224 175.35000610351562,-0.20000000298023224 C175.35000610351562,-0.20000000298023224 175.35000610351562,0.20000000298023224 175.35000610351562,0.20000000298023224 C175.35000610351562,0.20000000298023224 -175.35000610351562,0.20000000298023224 -175.35000610351562,0.20000000298023224 C-175.35000610351562,0.20000000298023224 -175.35000610351562,-0.20000000298023224 -175.35000610351562,-0.20000000298023224z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,185.10000610351562,336.3999938964844)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-49,-4.099999904632568 C-49,-4.099999904632568 -54.400001525878906,-4.099999904632568 -54.400001525878906,-4.099999904632568 C-54.400001525878906,-4.099999904632568 -54.400001525878906,-0.6000000238418579 -54.400001525878906,-0.6000000238418579 C-54.400001525878906,-0.6000000238418579 -49.29999923706055,-0.6000000238418579 -49.29999923706055,-0.6000000238418579 C-49.29999923706055,-0.6000000238418579 -49.29999923706055,0.699999988079071 -49.29999923706055,0.699999988079071 C-49.29999923706055,0.699999988079071 -54.400001525878906,0.699999988079071 -54.400001525878906,0.699999988079071 C-54.400001525878906,0.699999988079071 -54.400001525878906,5.800000190734863 -54.400001525878906,5.800000190734863 C-54.400001525878906,5.800000190734863 -55.900001525878906,5.800000190734863 -55.900001525878906,5.800000190734863 C-55.900001525878906,5.800000190734863 -55.900001525878906,-5.300000190734863 -55.900001525878906,-5.300000190734863 C-55.900001525878906,-5.300000190734863 -49,-5.300000190734863 -49,-5.300000190734863 C-49,-5.300000190734863 -49,-4.099999904632568 -49,-4.099999904632568z M-46.79999923706055,-5.300000190734863 C-46.79999923706055,-5.300000190734863 -43.099998474121094,-5.300000190734863 -43.099998474121094,-5.300000190734863 C-42,-5.300000190734863 -41.099998474121094,-5.099999904632568 -40.29999923706055,-4.599999904632568 C-39.5,-4.099999904632568 -38.900001525878906,-3.5 -38.5,-2.700000047683716 C-38.099998474121094,-1.899999976158142 -37.79999923706055,-0.8999999761581421 -37.79999923706055,0.20000000298023224 C-37.79999923706055,1.2999999523162842 -38,2.200000047683716 -38.5,3.0999999046325684 C-38.900001525878906,3.9000000953674316 -39.599998474121094,4.599999904632568 -40.400001525878906,5.099999904632568 C-41.20000076293945,5.599999904632568 -42.099998474121094,5.800000190734863 -43.20000076293945,5.800000190734863 C-43.20000076293945,5.800000190734863 -46.79999923706055,5.800000190734863 -46.79999923706055,5.800000190734863 C-46.79999923706055,5.800000190734863 -46.79999923706055,-5.300000190734863 -46.79999923706055,-5.300000190734863z M-43.20000076293945,4.5 C-42.400001525878906,4.5 -41.79999923706055,4.300000190734863 -41.20000076293945,3.9000000953674316 C-40.599998474121094,3.5 -40.20000076293945,3 -39.900001525878906,2.299999952316284 C-39.599998474121094,1.600000023841858 -39.400001525878906,0.8999999761581421 -39.400001525878906,0.10000000149011612 C-39.400001525878906,-0.699999988079071 -39.5,-1.5 -39.79999923706055,-2.0999999046325684 C-40.099998474121094,-2.700000047683716 -40.5,-3.299999952316284 -41.099998474121094,-3.5999999046325684 C-41.70000076293945,-4 -42.29999923706055,-4.099999904632568 -43.099998474121094,-4.099999904632568 C-43.099998474121094,-4.099999904632568 -45.20000076293945,-4.099999904632568 -45.20000076293945,-4.099999904632568 C-45.20000076293945,-4.099999904632568 -45.20000076293945,4.5 -45.20000076293945,4.5 C-45.20000076293945,4.5 -43.20000076293945,4.5 -43.20000076293945,4.5z M-34.099998474121094,5.800000190734863 C-34.099998474121094,5.800000190734863 -35.599998474121094,5.800000190734863 -35.599998474121094,5.800000190734863 C-35.599998474121094,5.800000190734863 -35.599998474121094,-5.300000190734863 -35.599998474121094,-5.300000190734863 C-35.599998474121094,-5.300000190734863 -34.099998474121094,-5.300000190734863 -34.099998474121094,-5.300000190734863 C-34.099998474121094,-5.300000190734863 -34.099998474121094,5.800000190734863 -34.099998474121094,5.800000190734863z M-26.799999237060547,6.099999904632568 C-27.899999618530273,6.099999904632568 -28.799999237060547,5.800000190734863 -29.600000381469727,5.300000190734863 C-30.399999618530273,4.800000190734863 -30.899999618530273,4.099999904632568 -31.299999237060547,3.200000047683716 C-31.700000762939453,2.299999952316284 -31.799999237060547,1.2999999523162842 -31.799999237060547,0.20000000298023224 C-31.799999237060547,-0.8999999761581421 -31.600000381469727,-2 -31.200000762939453,-2.799999952316284 C-30.799999237060547,-3.700000047683716 -30.200000762939453,-4.400000095367432 -29.5,-4.800000190734863 C-28.700000762939453,-5.300000190734863 -27.799999237060547,-5.5 -26.700000762939453,-5.5 C-25.399999618530273,-5.5 -24.399999618530273,-5.099999904632568 -23.600000381469727,-4.400000095367432 C-22.899999618530273,-3.700000047683716 -22.399999618530273,-2.700000047683716 -22.299999237060547,-1.5 C-22.299999237060547,-1.5 -23.799999237060547,-1.2999999523162842 -23.799999237060547,-1.2999999523162842 C-23.899999618530273,-2.200000047683716 -24.200000762939453,-2.799999952316284 -24.700000762939453,-3.299999952316284 C-25.200000762939453,-3.799999952316284 -25.899999618530273,-4.099999904632568 -26.700000762939453,-4.099999904632568 C-27.799999237060547,-4.099999904632568 -28.600000381469727,-3.700000047683716 -29.200000762939453,-2.9000000953674316 C-29.799999237060547,-2.0999999046325684 -30.100000381469727,-1 -30.100000381469727,0.4000000059604645 C-30.100000381469727,1.2999999523162842 -30,2.0999999046325684 -29.700000762939453,2.799999952316284 C-29.399999618530273,3.5 -29.100000381469727,4 -28.5,4.400000095367432 C-28,4.800000190734863 -27.299999237060547,5 -26.600000381469727,5 C-25.799999237060547,5 -25.200000762939453,4.800000190734863 -24.600000381469727,4.300000190734863 C-24.100000381469727,3.799999952316284 -23.700000762939453,3.0999999046325684 -23.600000381469727,2.299999952316284 C-23.600000381469727,2.299999952316284 -22.200000762939453,2.5999999046325684 -22.200000762939453,2.5999999046325684 C-22.399999618530273,3.700000047683716 -22.899999618530273,4.599999904632568 -23.700000762939453,5.300000190734863 C-24.5,5.699999809265137 -25.5,6.099999904632568 -26.799999237060547,6.099999904632568z M-16.100000381469727,5.800000190734863 M-16.100000381469727,-2 C-16.100000381469727,-2 -14.800000190734863,-2 -14.800000190734863,-2 C-14.800000190734863,-2 -14.800000190734863,5.800000190734863 -14.800000190734863,5.800000190734863 C-14.800000190734863,5.800000190734863 -16.100000381469727,5.800000190734863 -16.100000381469727,5.800000190734863 C-16.100000381469727,5.800000190734863 -16.100000381469727,-2 -16.100000381469727,-2z M-16.200000762939453,-3.5 M-16.200000762939453,-5.199999809265137 C-16.200000762939453,-5.199999809265137 -14.699999809265137,-5.199999809265137 -14.699999809265137,-5.199999809265137 C-14.699999809265137,-5.199999809265137 -14.699999809265137,-3.5 -14.699999809265137,-3.5 C-14.699999809265137,-3.5 -16.200000762939453,-3.5 -16.200000762939453,-3.5 C-16.200000762939453,-3.5 -16.200000762939453,-5.199999809265137 -16.200000762939453,-5.199999809265137z M-12,-2 C-12,-2 -10.699999809265137,-2 -10.699999809265137,-2 C-10.699999809265137,-2 -10.699999809265137,-0.4000000059604645 -10.699999809265137,-0.4000000059604645 C-10.199999809265137,-1.600000023841858 -9.300000190734863,-2.200000047683716 -8.100000381469727,-2.200000047683716 C-7.199999809265137,-2.200000047683716 -6.599999904632568,-1.899999976158142 -6.099999904632568,-1.399999976158142 C-5.699999809265137,-0.8999999761581421 -5.400000095367432,-0.10000000149011612 -5.400000095367432,1 C-5.400000095367432,1 -5.400000095367432,5.900000095367432 -5.400000095367432,5.900000095367432 C-5.400000095367432,5.900000095367432 -6.699999809265137,5.900000095367432 -6.699999809265137,5.900000095367432 C-6.699999809265137,5.900000095367432 -6.699999809265137,1.100000023841858 -6.699999809265137,1.100000023841858 C-6.699999809265137,-0.30000001192092896 -7.300000190734863,-1 -8.399999618530273,-1 C-9,-1 -9.600000381469727,-0.699999988079071 -9.899999618530273,-0.20000000298023224 C-10.300000190734863,0.30000001192092896 -10.5,1 -10.5,1.7999999523162842 C-10.5,1.7999999523162842 -10.5,5.900000095367432 -10.5,5.900000095367432 C-10.5,5.900000095367432 -11.800000190734863,5.900000095367432 -11.800000190734863,5.900000095367432 C-11.800000190734863,5.900000095367432 -11.800000190734863,-2 -11.800000190734863,-2 C-11.800000190734863,-2 -12,-2 -12,-2z M-0.30000001192092896,6 C-1.2000000476837158,6 -2,5.800000190734863 -2.5999999046325684,5.300000190734863 C-3.200000047683716,4.900000095367432 -3.5,4.199999809265137 -3.700000047683716,3.4000000953674316 C-3.700000047683716,3.4000000953674316 -2.4000000953674316,3.200000047683716 -2.4000000953674316,3.200000047683716 C-2.299999952316284,3.799999952316284 -2.0999999046325684,4.199999809265137 -1.7000000476837158,4.5 C-1.2999999523162842,4.800000190734863 -0.8999999761581421,4.900000095367432 -0.30000001192092896,4.900000095367432 C0.20000000298023224,4.900000095367432 0.6000000238418579,4.800000190734863 0.8999999761581421,4.599999904632568 C1.2000000476837158,4.400000095367432 1.2999999523162842,4.099999904632568 1.2999999523162842,3.700000047683716 C1.2999999523162842,3.299999952316284 1.2000000476837158,3 1,2.799999952316284 C0.800000011920929,2.5999999046325684 0.5,2.5 0.10000000149011612,2.4000000953674316 C0.10000000149011612,2.4000000953674316 -1.2000000476837158,2.299999952316284 -1.2000000476837158,2.299999952316284 C-2,2.200000047683716 -2.5,2 -2.9000000953674316,1.600000023841858 C-3.299999952316284,1.2000000476837158 -3.5,0.699999988079071 -3.5,0.10000000149011612 C-3.5,-0.6000000238418579 -3.200000047683716,-1.2000000476837158 -2.700000047683716,-1.600000023841858 C-2.200000047683716,-2 -1.399999976158142,-2.200000047683716 -0.5,-2.200000047683716 C0.4000000059604645,-2.200000047683716 1.100000023841858,-2 1.7000000476837158,-1.5 C2.299999952316284,-1.100000023841858 2.5999999046325684,-0.5 2.700000047683716,0.20000000298023224 C2.700000047683716,0.20000000298023224 1.399999976158142,0.5 1.399999976158142,0.5 C1.2999999523162842,0 1.100000023841858,-0.4000000059604645 0.800000011920929,-0.699999988079071 C0.5,-1 0.10000000149011612,-1.100000023841858 -0.5,-1.100000023841858 C-1,-1.100000023841858 -1.399999976158142,-1 -1.7000000476837158,-0.800000011920929 C-2,-0.6000000238418579 -2.0999999046325684,-0.30000001192092896 -2.0999999046325684,0.10000000149011612 C-2.0999999046325684,0.800000011920929 -1.600000023841858,1.2000000476837158 -0.699999988079071,1.2999999523162842 C-0.699999988079071,1.2999999523162842 0.6000000238418579,1.399999976158142 0.6000000238418579,1.399999976158142 C2,1.600000023841858 2.799999952316284,2.299999952316284 2.799999952316284,3.5999999046325684 C2.799999952316284,4.400000095367432 2.5,4.900000095367432 2,5.400000095367432 C1.399999976158142,5.800000190734863 0.6000000238418579,6 -0.30000001192092896,6z M7.300000190734863,6 C6.400000095367432,6 5.699999809265137,5.699999809265137 5.199999809265137,5.199999809265137 C4.800000190734863,4.699999809265137 4.599999904632568,3.9000000953674316 4.599999904632568,3 C4.599999904632568,3 4.599999904632568,-2 4.599999904632568,-2 C4.599999904632568,-2 5.900000095367432,-2 5.900000095367432,-2 C5.900000095367432,-2 5.900000095367432,2.799999952316284 5.900000095367432,2.799999952316284 C5.900000095367432,3.5 6,4 6.300000190734863,4.300000190734863 C6.599999904632568,4.599999904632568 7,4.800000190734863 7.5,4.800000190734863 C8.100000381469727,4.800000190734863 8.600000381469727,4.599999904632568 9,4.099999904632568 C9.399999618530273,3.5999999046325684 9.600000381469727,3 9.600000381469727,2.200000047683716 C9.600000381469727,2.200000047683716 9.600000381469727,-2 9.600000381469727,-2 C9.600000381469727,-2 10.899999618530273,-2 10.899999618530273,-2 C10.899999618530273,-2 10.899999618530273,5.800000190734863 10.899999618530273,5.800000190734863 C10.899999618530273,5.800000190734863 9.600000381469727,5.800000190734863 9.600000381469727,5.800000190734863 C9.600000381469727,5.800000190734863 9.600000381469727,4.300000190734863 9.600000381469727,4.300000190734863 C9.399999618530273,4.800000190734863 9.100000381469727,5.199999809265137 8.699999809265137,5.5 C8.300000190734863,5.800000190734863 7.800000190734863,6 7.300000190734863,6z M15,-0.30000001192092896 C15.199999809265137,-0.8999999761581421 15.5,-1.399999976158142 15.899999618530273,-1.7000000476837158 C16.299999237060547,-2.0999999046325684 16.799999237060547,-2.200000047683716 17.399999618530273,-2.200000047683716 C17.399999618530273,-2.200000047683716 17.700000762939453,-2.200000047683716 17.700000762939453,-2.200000047683716 C17.700000762939453,-2.200000047683716 17.700000762939453,-0.8999999761581421 17.700000762939453,-0.8999999761581421 C17.700000762939453,-0.8999999761581421 17.600000381469727,-0.8999999761581421 17.600000381469727,-0.8999999761581421 C16.899999618530273,-0.8999999761581421 16.299999237060547,-0.699999988079071 15.899999618530273,-0.30000001192092896 C15.600000381469727,0 15.399999618530273,0.4000000059604645 15.300000190734863,0.8999999761581421 C15.199999809265137,1.2999999523162842 15.199999809265137,1.899999976158142 15.199999809265137,2.5 C15.199999809265137,2.5 15.199999809265137,5.900000095367432 15.199999809265137,5.900000095367432 C15.199999809265137,5.900000095367432 13.899999618530273,5.900000095367432 13.899999618530273,5.900000095367432 C13.899999618530273,5.900000095367432 13.899999618530273,-1.899999976158142 13.899999618530273,-1.899999976158142 C13.899999618530273,-1.899999976158142 15.100000381469727,-1.899999976158142 15.100000381469727,-1.899999976158142 C15.100000381469727,-1.899999976158142 15.100000381469727,-0.30000001192092896 15.100000381469727,-0.30000001192092896 C15.100000381469727,-0.30000001192092896 15,-0.30000001192092896 15,-0.30000001192092896z M21.200000762939453,6 C20.399999618530273,6 19.799999237060547,5.800000190734863 19.299999237060547,5.400000095367432 C18.799999237060547,5 18.600000381469727,4.400000095367432 18.600000381469727,3.700000047683716 C18.600000381469727,3.299999952316284 18.700000762939453,2.9000000953674316 18.899999618530273,2.5999999046325684 C19.100000381469727,2.299999952316284 19.399999618530273,2 19.700000762939453,1.7999999523162842 C20,1.7000000476837158 20.399999618530273,1.5 20.799999237060547,1.399999976158142 C21.200000762939453,1.2999999523162842 21.700000762939453,1.2000000476837158 22.399999618530273,1.100000023841858 C22.399999618530273,1.100000023841858 23.899999618530273,0.8999999761581421 23.899999618530273,0.8999999761581421 C23.899999618530273,0.8999999761581421 23.899999618530273,0.800000011920929 23.899999618530273,0.800000011920929 C23.899999618530273,0.10000000149011612 23.799999237060547,-0.4000000059604645 23.5,-0.800000011920929 C23.200000762939453,-1.100000023841858 22.799999237060547,-1.2999999523162842 22.200000762939453,-1.2999999523162842 C21.700000762939453,-1.2999999523162842 21.200000762939453,-1.2000000476837158 20.899999618530273,-0.8999999761581421 C20.600000381469727,-0.6000000238418579 20.399999618530273,-0.20000000298023224 20.399999618530273,0.20000000298023224 C20.399999618530273,0.20000000298023224 19,0.20000000298023224 19,0.20000000298023224 C19.100000381469727,-0.6000000238418579 19.399999618530273,-1.2000000476837158 19.899999618530273,-1.7000000476837158 C20.5,-2.200000047683716 21.200000762939453,-2.4000000953674316 22.200000762939453,-2.4000000953674316 C23.299999237060547,-2.4000000953674316 24.100000381469727,-2.0999999046325684 24.600000381469727,-1.600000023841858 C25.100000381469727,-1.100000023841858 25.299999237060547,-0.30000001192092896 25.299999237060547,0.8999999761581421 C25.299999237060547,0.8999999761581421 25.299999237060547,3 25.299999237060547,3 C25.299999237060547,4.199999809265137 25.399999618530273,5.099999904632568 25.600000381469727,5.599999904632568 C25.600000381469727,5.599999904632568 24.200000762939453,5.599999904632568 24.200000762939453,5.599999904632568 C24.100000381469727,5.199999809265137 24.100000381469727,4.699999809265137 24.100000381469727,4.199999809265137 C23.899999618530273,4.699999809265137 23.600000381469727,5.099999904632568 23.100000381469727,5.400000095367432 C22.399999618530273,5.800000190734863 21.799999237060547,6 21.200000762939453,6z M21.5,4.900000095367432 C22.200000762939453,4.900000095367432 22.700000762939453,4.699999809265137 23.100000381469727,4.199999809265137 C23.5,3.700000047683716 23.700000762939453,3.0999999046325684 23.700000762939453,2.4000000953674316 C23.700000762939453,2.4000000953674316 23.700000762939453,2 23.700000762939453,2 C23.700000762939453,2 21.600000381469727,2.299999952316284 21.600000381469727,2.299999952316284 C21,2.4000000953674316 20.600000381469727,2.5 20.299999237060547,2.799999952316284 C20,3 19.899999618530273,3.299999952316284 19.899999618530273,3.700000047683716 C19.899999618530273,4.099999904632568 20,4.400000095367432 20.299999237060547,4.599999904632568 C20.600000381469727,4.800000190734863 21,4.900000095367432 21.5,4.900000095367432z M27.700000762939453,-2 C27.700000762939453,-2 29,-2 29,-2 C29,-2 29,-0.4000000059604645 29,-0.4000000059604645 C29.5,-1.600000023841858 30.399999618530273,-2.200000047683716 31.600000381469727,-2.200000047683716 C32.5,-2.200000047683716 33.099998474121094,-1.899999976158142 33.599998474121094,-1.399999976158142 C34,-0.8999999761581421 34.29999923706055,-0.10000000149011612 34.29999923706055,1 C34.29999923706055,1 34.29999923706055,5.900000095367432 34.29999923706055,5.900000095367432 C34.29999923706055,5.900000095367432 32.900001525878906,5.900000095367432 32.900001525878906,5.900000095367432 C32.900001525878906,5.900000095367432 32.900001525878906,1.100000023841858 32.900001525878906,1.100000023841858 C32.900001525878906,-0.30000001192092896 32.29999923706055,-1 31.200000762939453,-1 C30.600000381469727,-1 30,-0.699999988079071 29.700000762939453,-0.20000000298023224 C29.299999237060547,0.30000001192092896 29.100000381469727,1 29.100000381469727,1.7999999523162842 C29.100000381469727,1.7999999523162842 29.100000381469727,5.900000095367432 29.100000381469727,5.900000095367432 C29.100000381469727,5.900000095367432 27.799999237060547,5.900000095367432 27.799999237060547,5.900000095367432 C27.799999237060547,5.900000095367432 27.799999237060547,-2 27.799999237060547,-2 C27.799999237060547,-2 27.700000762939453,-2 27.700000762939453,-2z M39.70000076293945,6 C39,6 38.29999923706055,5.800000190734863 37.79999923706055,5.5 C37.29999923706055,5.199999809265137 36.79999923706055,4.699999809265137 36.5,4.099999904632568 C36.20000076293945,3.5 36.099998474121094,2.700000047683716 36.099998474121094,1.899999976158142 C36.099998474121094,0.6000000238418579 36.400001525878906,-0.4000000059604645 37.099998474121094,-1.100000023841858 C37.70000076293945,-1.7999999523162842 38.599998474121094,-2.200000047683716 39.70000076293945,-2.200000047683716 C40.599998474121094,-2.200000047683716 41.400001525878906,-1.899999976158142 41.900001525878906,-1.399999976158142 C42.5,-0.8999999761581421 42.79999923706055,-0.20000000298023224 42.900001525878906,0.699999988079071 C42.900001525878906,0.699999988079071 41.5,0.8999999761581421 41.5,0.8999999761581421 C41.400001525878906,0.30000001192092896 41.20000076293945,-0.10000000149011612 40.900001525878906,-0.5 C40.599998474121094,-0.800000011920929 40.099998474121094,-1 39.599998474121094,-1 C38.900001525878906,-1 38.400001525878906,-0.699999988079071 38,-0.20000000298023224 C37.599998474121094,0.30000001192092896 37.400001525878906,1 37.400001525878906,1.899999976158142 C37.400001525878906,2.799999952316284 37.599998474121094,3.5999999046325684 38,4.099999904632568 C38.400001525878906,4.599999904632568 38.900001525878906,4.900000095367432 39.599998474121094,4.900000095367432 C40.099998474121094,4.900000095367432 40.599998474121094,4.699999809265137 40.900001525878906,4.400000095367432 C41.20000076293945,4.099999904632568 41.400001525878906,3.5999999046325684 41.5,3 C41.5,3 42.79999923706055,3.200000047683716 42.79999923706055,3.200000047683716 C42.70000076293945,4.099999904632568 42.29999923706055,4.800000190734863 41.70000076293945,5.300000190734863 C41.29999923706055,5.699999809265137 40.5,6 39.70000076293945,6z M51.20000076293945,2.299999952316284 C51.20000076293945,2.299999952316284 45.599998474121094,2.299999952316284 45.599998474121094,2.299999952316284 C45.599998474121094,3.0999999046325684 45.79999923706055,3.700000047683716 46.20000076293945,4.099999904632568 C46.599998474121094,4.599999904632568 47.20000076293945,4.800000190734863 47.900001525878906,4.800000190734863 C48.400001525878906,4.800000190734863 48.79999923706055,4.699999809265137 49.20000076293945,4.400000095367432 C49.599998474121094,4.099999904632568 49.79999923706055,3.799999952316284 50,3.299999952316284 C50,3.299999952316284 51.099998474121094,3.799999952316284 51.099998474121094,3.799999952316284 C50.79999923706055,4.5 50.400001525878906,5.099999904632568 49.79999923706055,5.400000095367432 C49.20000076293945,5.800000190734863 48.599998474121094,5.900000095367432 47.79999923706055,5.900000095367432 C46.70000076293945,5.900000095367432 45.79999923706055,5.599999904632568 45.20000076293945,4.900000095367432 C44.599998474121094,4.199999809265137 44.29999923706055,3.200000047683716 44.29999923706055,1.899999976158142 C44.29999923706055,0.6000000238418579 44.599998474121094,-0.4000000059604645 45.20000076293945,-1.2000000476837158 C45.79999923706055,-1.899999976158142 46.70000076293945,-2.299999952316284 47.79999923706055,-2.299999952316284 C48.900001525878906,-2.299999952316284 49.70000076293945,-2 50.29999923706055,-1.399999976158142 C50.900001525878906,-0.800000011920929 51.20000076293945,0.10000000149011612 51.20000076293945,1.2000000476837158 C51.20000076293945,1.2000000476837158 51.20000076293945,2.299999952316284 51.20000076293945,2.299999952316284z M49.900001525878906,1 C49.900001525878906,0.30000001192092896 49.70000076293945,-0.30000001192092896 49.400001525878906,-0.6000000238418579 C49.099998474121094,-1 48.599998474121094,-1.2000000476837158 47.900001525878906,-1.2000000476837158 C47.20000076293945,-1.2000000476837158 46.70000076293945,-1 46.29999923706055,-0.6000000238418579 C45.900001525878906,-0.20000000298023224 45.70000076293945,0.4000000059604645 45.70000076293945,1.100000023841858 C45.70000076293945,1.100000023841858 49.900001525878906,1.100000023841858 49.900001525878906,1.100000023841858 C49.900001525878906,1.100000023841858 49.900001525878906,1 49.900001525878906,1z M54.70000076293945,-3.299999952316284 C54.70000076293945,-3.299999952316284 54.70000076293945,1.7000000476837158 54.70000076293945,1.7000000476837158 C54.70000076293945,1.7000000476837158 53.900001525878906,1.7000000476837158 53.900001525878906,1.7000000476837158 C53.900001525878906,1.7000000476837158 53.900001525878906,-3.299999952316284 53.900001525878906,-3.299999952316284 C53.900001525878906,-3.299999952316284 52.70000076293945,-3.299999952316284 52.70000076293945,-3.299999952316284 C52.70000076293945,-3.299999952316284 52.70000076293945,-4 52.70000076293945,-4 C52.70000076293945,-4 53.900001525878906,-4 53.900001525878906,-4 C53.900001525878906,-4 53.900001525878906,-6.099999904632568 53.900001525878906,-6.099999904632568 C53.900001525878906,-6.099999904632568 54.70000076293945,-6.099999904632568 54.70000076293945,-6.099999904632568 C54.70000076293945,-6.099999904632568 54.70000076293945,-4 54.70000076293945,-4 C54.70000076293945,-4 55.900001525878906,-4 55.900001525878906,-4 C55.900001525878906,-4 55.900001525878906,-3.299999952316284 55.900001525878906,-3.299999952316284 C55.900001525878906,-3.299999952316284 54.70000076293945,-3.299999952316284 54.70000076293945,-3.299999952316284z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,190.39999389648438,369.8500061035156)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-54.099998474121094,-6.949999809265137 C-54.099998474121094,-6.949999809265137 -54.099998474121094,-5.650000095367432 -54.099998474121094,-5.650000095367432 C-54.099998474121094,-5.650000095367432 -57.599998474121094,-5.650000095367432 -57.599998474121094,-5.650000095367432 C-57.599998474121094,-5.650000095367432 -57.599998474121094,4.25 -57.599998474121094,4.25 C-57.599998474121094,4.25 -59.099998474121094,4.25 -59.099998474121094,4.25 C-59.099998474121094,4.25 -59.099998474121094,-5.650000095367432 -59.099998474121094,-5.650000095367432 C-59.099998474121094,-5.650000095367432 -62.599998474121094,-5.650000095367432 -62.599998474121094,-5.650000095367432 C-62.599998474121094,-5.650000095367432 -62.599998474121094,-6.949999809265137 -62.599998474121094,-6.949999809265137 C-62.599998474121094,-6.949999809265137 -54.099998474121094,-6.949999809265137 -54.099998474121094,-6.949999809265137z M-50.70000076293945,4.349999904632568 C-51.400001525878906,4.349999904632568 -52.099998474121094,4.150000095367432 -52.599998474121094,3.8499999046325684 C-53.20000076293945,3.549999952316284 -53.599998474121094,3.049999952316284 -53.900001525878906,2.450000047683716 C-54.20000076293945,1.850000023841858 -54.29999923706055,1.149999976158142 -54.29999923706055,0.25 C-54.29999923706055,-0.550000011920929 -54.20000076293945,-1.350000023841858 -53.900001525878906,-1.9500000476837158 C-53.599998474121094,-2.549999952316284 -53.20000076293945,-3.049999952316284 -52.599998474121094,-3.3499999046325684 C-52,-3.6500000953674316 -51.400001525878906,-3.8499999046325684 -50.70000076293945,-3.8499999046325684 C-50,-3.8499999046325684 -49.29999923706055,-3.6500000953674316 -48.79999923706055,-3.3499999046325684 C-48.20000076293945,-3.049999952316284 -47.79999923706055,-2.549999952316284 -47.5,-1.9500000476837158 C-47.20000076293945,-1.350000023841858 -47,-0.6499999761581421 -47,0.25 C-47,1.0499999523162842 -47.20000076293945,1.850000023841858 -47.5,2.450000047683716 C-47.79999923706055,3.049999952316284 -48.20000076293945,3.549999952316284 -48.79999923706055,3.8499999046325684 C-49.29999923706055,4.25 -50,4.349999904632568 -50.70000076293945,4.349999904632568z M-50.70000076293945,3.25 C-50,3.25 -49.400001525878906,2.950000047683716 -49.099998474121094,2.450000047683716 C-48.70000076293945,1.9500000476837158 -48.5,1.25 -48.5,0.25 C-48.5,-0.75 -48.70000076293945,-1.4500000476837158 -49.099998474121094,-1.9500000476837158 C-49.5,-2.450000047683716 -50,-2.75 -50.70000076293945,-2.75 C-51.400001525878906,-2.75 -52,-2.450000047683716 -52.400001525878906,-1.9500000476837158 C-52.79999923706055,-1.4500000476837158 -53,-0.75 -53,0.25 C-53,1.25 -52.79999923706055,1.9500000476837158 -52.400001525878906,2.450000047683716 C-52,2.950000047683716 -51.400001525878906,3.25 -50.70000076293945,3.25z M-46.29999923706055,-3.6500000953674316 C-46.29999923706055,-3.6500000953674316 -44.79999923706055,-3.6500000953674316 -44.79999923706055,-3.6500000953674316 C-44.79999923706055,-3.6500000953674316 -44.79999923706055,-5.75 -44.79999923706055,-5.75 C-44.79999923706055,-5.75 -43.5,-6.349999904632568 -43.5,-6.349999904632568 C-43.5,-6.349999904632568 -43.5,-3.75 -43.5,-3.75 C-43.5,-3.75 -41.5,-3.75 -41.5,-3.75 C-41.5,-3.75 -41.5,-2.6500000953674316 -41.5,-2.6500000953674316 C-41.5,-2.6500000953674316 -43.5,-2.6500000953674316 -43.5,-2.6500000953674316 C-43.5,-2.6500000953674316 -43.5,1.649999976158142 -43.5,1.649999976158142 C-43.5,2.049999952316284 -43.400001525878906,2.450000047683716 -43.20000076293945,2.6500000953674316 C-43,2.8499999046325684 -42.70000076293945,2.950000047683716 -42.29999923706055,2.950000047683716 C-42.099998474121094,2.950000047683716 -41.79999923706055,2.950000047683716 -41.5,2.8499999046325684 C-41.5,2.8499999046325684 -41.5,4.050000190734863 -41.5,4.050000190734863 C-41.79999923706055,4.150000095367432 -42.20000076293945,4.150000095367432 -42.70000076293945,4.150000095367432 C-43.5,4.150000095367432 -44,3.950000047683716 -44.400001525878906,3.549999952316284 C-44.70000076293945,3.1500000953674316 -44.900001525878906,2.549999952316284 -44.900001525878906,1.75 C-44.900001525878906,1.75 -44.900001525878906,-2.6500000953674316 -44.900001525878906,-2.6500000953674316 C-44.900001525878906,-2.6500000953674316 -46.400001525878906,-2.6500000953674316 -46.400001525878906,-2.6500000953674316 C-46.400001525878906,-2.6500000953674316 -46.400001525878906,-3.6500000953674316 -46.400001525878906,-3.6500000953674316 C-46.400001525878906,-3.6500000953674316 -46.29999923706055,-3.6500000953674316 -46.29999923706055,-3.6500000953674316z M-37.79999923706055,4.349999904632568 C-38.599998474121094,4.349999904632568 -39.20000076293945,4.150000095367432 -39.70000076293945,3.75 C-40.20000076293945,3.3499999046325684 -40.400001525878906,2.75 -40.400001525878906,2.049999952316284 C-40.400001525878906,1.649999976158142 -40.29999923706055,1.25 -40.099998474121094,0.949999988079071 C-39.900001525878906,0.6499999761581421 -39.599998474121094,0.3499999940395355 -39.29999923706055,0.15000000596046448 C-39,0.05000000074505806 -38.599998474121094,-0.15000000596046448 -38.20000076293945,-0.25 C-37.79999923706055,-0.3499999940395355 -37.29999923706055,-0.44999998807907104 -36.599998474121094,-0.550000011920929 C-36.599998474121094,-0.550000011920929 -35.099998474121094,-0.75 -35.099998474121094,-0.75 C-35.099998474121094,-0.75 -35.099998474121094,-0.8500000238418579 -35.099998474121094,-0.8500000238418579 C-35.099998474121094,-1.5499999523162842 -35.20000076293945,-2.049999952316284 -35.5,-2.450000047683716 C-35.79999923706055,-2.75 -36.20000076293945,-2.950000047683716 -36.79999923706055,-2.950000047683716 C-37.29999923706055,-2.950000047683716 -37.79999923706055,-2.8499999046325684 -38.099998474121094,-2.549999952316284 C-38.400001525878906,-2.25 -38.599998474121094,-1.850000023841858 -38.599998474121094,-1.4500000476837158 C-38.599998474121094,-1.4500000476837158 -40,-1.4500000476837158 -40,-1.4500000476837158 C-39.900001525878906,-2.25 -39.599998474121094,-2.8499999046325684 -39.099998474121094,-3.3499999046325684 C-38.5,-3.8499999046325684 -37.79999923706055,-4.050000190734863 -36.79999923706055,-4.050000190734863 C-35.70000076293945,-4.050000190734863 -34.900001525878906,-3.75 -34.400001525878906,-3.25 C-33.900001525878906,-2.75 -33.70000076293945,-1.9500000476837158 -33.70000076293945,-0.75 C-33.70000076293945,-0.75 -33.70000076293945,1.350000023841858 -33.70000076293945,1.350000023841858 C-33.70000076293945,2.549999952316284 -33.599998474121094,3.450000047683716 -33.400001525878906,3.950000047683716 C-33.400001525878906,3.950000047683716 -34.79999923706055,3.950000047683716 -34.79999923706055,3.950000047683716 C-34.900001525878906,3.549999952316284 -34.900001525878906,3.049999952316284 -34.900001525878906,2.549999952316284 C-35.099998474121094,3.049999952316284 -35.400001525878906,3.450000047683716 -35.900001525878906,3.75 C-36.599998474121094,4.25 -37.20000076293945,4.349999904632568 -37.79999923706055,4.349999904632568z M-37.5,3.25 C-36.79999923706055,3.25 -36.29999923706055,3.049999952316284 -35.900001525878906,2.549999952316284 C-35.5,2.049999952316284 -35.29999923706055,1.4500000476837158 -35.29999923706055,0.75 C-35.29999923706055,0.75 -35.29999923706055,0.3499999940395355 -35.29999923706055,0.3499999940395355 C-35.29999923706055,0.3499999940395355 -37.400001525878906,0.6499999761581421 -37.400001525878906,0.6499999761581421 C-38,0.75 -38.400001525878906,0.8500000238418579 -38.70000076293945,1.149999976158142 C-39,1.350000023841858 -39.099998474121094,1.649999976158142 -39.099998474121094,2.049999952316284 C-39.099998474121094,2.450000047683716 -39,2.75 -38.70000076293945,2.950000047683716 C-38.400001525878906,3.1500000953674316 -38,3.25 -37.5,3.25z M-29.899999618530273,-7.150000095367432 C-29.899999618530273,-7.150000095367432 -29.899999618530273,4.150000095367432 -29.899999618530273,4.150000095367432 C-29.899999618530273,4.150000095367432 -31.200000762939453,4.150000095367432 -31.200000762939453,4.150000095367432 C-31.200000762939453,4.150000095367432 -31.200000762939453,-7.25 -31.200000762939453,-7.25 C-31.200000762939453,-7.25 -29.899999618530273,-7.25 -29.899999618530273,-7.25 C-29.899999618530273,-7.25 -29.899999618530273,-7.150000095367432 -29.899999618530273,-7.150000095367432z M-22.899999618530273,4.150000095367432 M-22.899999618530273,-3.6500000953674316 C-22.899999618530273,-3.6500000953674316 -21.600000381469727,-3.6500000953674316 -21.600000381469727,-3.6500000953674316 C-21.600000381469727,-3.6500000953674316 -21.600000381469727,4.150000095367432 -21.600000381469727,4.150000095367432 C-21.600000381469727,4.150000095367432 -22.899999618530273,4.150000095367432 -22.899999618530273,4.150000095367432 C-22.899999618530273,4.150000095367432 -22.899999618530273,-3.6500000953674316 -22.899999618530273,-3.6500000953674316z M-23,-5.150000095367432 M-23,-6.849999904632568 C-23,-6.849999904632568 -21.5,-6.849999904632568 -21.5,-6.849999904632568 C-21.5,-6.849999904632568 -21.5,-5.150000095367432 -21.5,-5.150000095367432 C-21.5,-5.150000095367432 -23,-5.150000095367432 -23,-5.150000095367432 C-23,-5.150000095367432 -23,-6.849999904632568 -23,-6.849999904632568z M-18.799999237060547,-3.6500000953674316 C-18.799999237060547,-3.6500000953674316 -17.5,-3.6500000953674316 -17.5,-3.6500000953674316 C-17.5,-3.6500000953674316 -17.5,-2.049999952316284 -17.5,-2.049999952316284 C-17,-3.25 -16.100000381469727,-3.8499999046325684 -14.899999618530273,-3.8499999046325684 C-14,-3.8499999046325684 -13.399999618530273,-3.549999952316284 -12.899999618530273,-3.049999952316284 C-12.5,-2.549999952316284 -12.199999809265137,-1.75 -12.199999809265137,-0.6499999761581421 C-12.199999809265137,-0.6499999761581421 -12.199999809265137,4.25 -12.199999809265137,4.25 C-12.199999809265137,4.25 -13.5,4.25 -13.5,4.25 C-13.5,4.25 -13.5,-0.550000011920929 -13.5,-0.550000011920929 C-13.5,-1.9500000476837158 -14.100000381469727,-2.6500000953674316 -15.199999809265137,-2.6500000953674316 C-15.800000190734863,-2.6500000953674316 -16.399999618530273,-2.450000047683716 -16.700000762939453,-1.850000023841858 C-17.100000381469727,-1.350000023841858 -17.299999237060547,-0.6499999761581421 -17.299999237060547,0.15000000596046448 C-17.299999237060547,0.15000000596046448 -17.299999237060547,4.25 -17.299999237060547,4.25 C-17.299999237060547,4.25 -18.600000381469727,4.25 -18.600000381469727,4.25 C-18.600000381469727,4.25 -18.600000381469727,-3.6500000953674316 -18.600000381469727,-3.6500000953674316 C-18.600000381469727,-3.6500000953674316 -18.799999237060547,-3.6500000953674316 -18.799999237060547,-3.6500000953674316z M-11.100000381469727,-3.6500000953674316 C-11.100000381469727,-3.6500000953674316 -9.600000381469727,-3.6500000953674316 -9.600000381469727,-3.6500000953674316 C-9.600000381469727,-3.6500000953674316 -9.600000381469727,-5.75 -9.600000381469727,-5.75 C-9.600000381469727,-5.75 -8.300000190734863,-6.349999904632568 -8.300000190734863,-6.349999904632568 C-8.300000190734863,-6.349999904632568 -8.300000190734863,-3.75 -8.300000190734863,-3.75 C-8.300000190734863,-3.75 -6.300000190734863,-3.75 -6.300000190734863,-3.75 C-6.300000190734863,-3.75 -6.300000190734863,-2.6500000953674316 -6.300000190734863,-2.6500000953674316 C-6.300000190734863,-2.6500000953674316 -8.300000190734863,-2.6500000953674316 -8.300000190734863,-2.6500000953674316 C-8.300000190734863,-2.6500000953674316 -8.300000190734863,1.649999976158142 -8.300000190734863,1.649999976158142 C-8.300000190734863,2.049999952316284 -8.199999809265137,2.450000047683716 -8,2.6500000953674316 C-7.800000190734863,2.8499999046325684 -7.5,2.950000047683716 -7.099999904632568,2.950000047683716 C-6.900000095367432,2.950000047683716 -6.599999904632568,2.950000047683716 -6.300000190734863,2.8499999046325684 C-6.300000190734863,2.8499999046325684 -6.300000190734863,4.050000190734863 -6.300000190734863,4.050000190734863 C-6.599999904632568,4.150000095367432 -7,4.150000095367432 -7.5,4.150000095367432 C-8.300000190734863,4.150000095367432 -8.800000190734863,3.950000047683716 -9.199999809265137,3.549999952316284 C-9.5,3.1500000953674316 -9.699999809265137,2.549999952316284 -9.699999809265137,1.75 C-9.699999809265137,1.75 -9.699999809265137,-2.6500000953674316 -9.699999809265137,-2.6500000953674316 C-9.699999809265137,-2.6500000953674316 -11.199999809265137,-2.6500000953674316 -11.199999809265137,-2.6500000953674316 C-11.199999809265137,-2.6500000953674316 -11.199999809265137,-3.6500000953674316 -11.199999809265137,-3.6500000953674316 C-11.199999809265137,-3.6500000953674316 -11.100000381469727,-3.6500000953674316 -11.100000381469727,-3.6500000953674316z M1.5,0.6499999761581421 C1.5,0.6499999761581421 -4.099999904632568,0.6499999761581421 -4.099999904632568,0.6499999761581421 C-4.099999904632568,1.4500000476837158 -3.9000000953674316,2.049999952316284 -3.5,2.549999952316284 C-3.0999999046325684,3.049999952316284 -2.5,3.25 -1.7999999523162842,3.25 C-1.2999999523162842,3.25 -0.8999999761581421,3.1500000953674316 -0.5,2.8499999046325684 C-0.10000000149011612,2.549999952316284 0.10000000149011612,2.25 0.30000001192092896,1.75 C0.30000001192092896,1.75 1.399999976158142,2.25 1.399999976158142,2.25 C1.100000023841858,2.950000047683716 0.699999988079071,3.549999952316284 0.10000000149011612,3.8499999046325684 C-0.5,4.25 -1.100000023841858,4.349999904632568 -1.899999976158142,4.349999904632568 C-3,4.349999904632568 -3.9000000953674316,4.050000190734863 -4.5,3.3499999046325684 C-5.099999904632568,2.6500000953674316 -5.400000095367432,1.649999976158142 -5.400000095367432,0.3499999940395355 C-5.400000095367432,-0.949999988079071 -5.099999904632568,-1.9500000476837158 -4.5,-2.75 C-3.9000000953674316,-3.450000047683716 -3,-3.8499999046325684 -1.899999976158142,-3.8499999046325684 C-0.800000011920929,-3.8499999046325684 0,-3.549999952316284 0.6000000238418579,-2.950000047683716 C1.2000000476837158,-2.3499999046325684 1.5,-1.4500000476837158 1.5,-0.3499999940395355 C1.5,-0.3499999940395355 1.5,0.6499999761581421 1.5,0.6499999761581421z M0.20000000298023224,-0.6499999761581421 C0.20000000298023224,-1.350000023841858 0,-1.9500000476837158 -0.30000001192092896,-2.25 C-0.6000000238418579,-2.6500000953674316 -1.100000023841858,-2.8499999046325684 -1.7999999523162842,-2.8499999046325684 C-2.5,-2.8499999046325684 -3,-2.6500000953674316 -3.4000000953674316,-2.25 C-3.799999952316284,-1.850000023841858 -4,-1.25 -4,-0.550000011920929 C-4,-0.550000011920929 0.20000000298023224,-0.550000011920929 0.20000000298023224,-0.550000011920929 C0.20000000298023224,-0.550000011920929 0.20000000298023224,-0.6499999761581421 0.20000000298023224,-0.6499999761581421z M5,-1.850000023841858 C5.199999809265137,-2.450000047683716 5.5,-2.950000047683716 5.900000095367432,-3.25 C6.300000190734863,-3.6500000953674316 6.800000190734863,-3.75 7.400000095367432,-3.75 C7.400000095367432,-3.75 7.699999809265137,-3.75 7.699999809265137,-3.75 C7.699999809265137,-3.75 7.699999809265137,-2.450000047683716 7.699999809265137,-2.450000047683716 C7.699999809265137,-2.450000047683716 7.599999904632568,-2.450000047683716 7.599999904632568,-2.450000047683716 C6.900000095367432,-2.450000047683716 6.300000190734863,-2.25 5.900000095367432,-1.850000023841858 C5.599999904632568,-1.5499999523162842 5.400000095367432,-1.149999976158142 5.300000190734863,-0.6499999761581421 C5.199999809265137,-0.25 5.199999809265137,0.3499999940395355 5.199999809265137,0.949999988079071 C5.199999809265137,0.949999988079071 5.199999809265137,4.349999904632568 5.199999809265137,4.349999904632568 C5.199999809265137,4.349999904632568 3.9000000953674316,4.349999904632568 3.9000000953674316,4.349999904632568 C3.9000000953674316,4.349999904632568 3.9000000953674316,-3.450000047683716 3.9000000953674316,-3.450000047683716 C3.9000000953674316,-3.450000047683716 5.099999904632568,-3.450000047683716 5.099999904632568,-3.450000047683716 C5.099999904632568,-3.450000047683716 5.099999904632568,-1.850000023841858 5.099999904632568,-1.850000023841858 C5.099999904632568,-1.850000023841858 5,-1.850000023841858 5,-1.850000023841858z M15.300000190734863,0.6499999761581421 C15.300000190734863,0.6499999761581421 9.699999809265137,0.6499999761581421 9.699999809265137,0.6499999761581421 C9.699999809265137,1.4500000476837158 9.899999618530273,2.049999952316284 10.300000190734863,2.549999952316284 C10.699999809265137,3.049999952316284 11.300000190734863,3.25 12,3.25 C12.5,3.25 12.899999618530273,3.1500000953674316 13.300000190734863,2.8499999046325684 C13.699999809265137,2.549999952316284 13.899999618530273,2.25 14.100000381469727,1.75 C14.100000381469727,1.75 15.199999809265137,2.25 15.199999809265137,2.25 C14.899999618530273,2.950000047683716 14.5,3.549999952316284 13.899999618530273,3.8499999046325684 C13.300000190734863,4.25 12.699999809265137,4.349999904632568 11.899999618530273,4.349999904632568 C10.800000190734863,4.349999904632568 9.899999618530273,4.050000190734863 9.300000190734863,3.3499999046325684 C8.699999809265137,2.6500000953674316 8.399999618530273,1.649999976158142 8.399999618530273,0.3499999940395355 C8.399999618530273,-0.949999988079071 8.699999809265137,-1.9500000476837158 9.300000190734863,-2.75 C9.899999618530273,-3.450000047683716 10.800000190734863,-3.8499999046325684 11.899999618530273,-3.8499999046325684 C13,-3.8499999046325684 13.800000190734863,-3.549999952316284 14.399999618530273,-2.950000047683716 C15,-2.3499999046325684 15.300000190734863,-1.4500000476837158 15.300000190734863,-0.3499999940395355 C15.300000190734863,-0.3499999940395355 15.300000190734863,0.6499999761581421 15.300000190734863,0.6499999761581421z M14,-0.6499999761581421 C14,-1.350000023841858 13.800000190734863,-1.9500000476837158 13.5,-2.25 C13.199999809265137,-2.6500000953674316 12.699999809265137,-2.8499999046325684 12,-2.8499999046325684 C11.300000190734863,-2.8499999046325684 10.800000190734863,-2.6500000953674316 10.399999618530273,-2.25 C10,-1.850000023841858 9.800000190734863,-1.25 9.800000190734863,-0.550000011920929 C9.800000190734863,-0.550000011920929 14,-0.550000011920929 14,-0.550000011920929 C14,-0.550000011920929 14,-0.6499999761581421 14,-0.6499999761581421z M20.100000381469727,4.349999904632568 C19.200000762939453,4.349999904632568 18.399999618530273,4.150000095367432 17.799999237060547,3.6500000953674316 C17.200000762939453,3.25 16.899999618530273,2.549999952316284 16.700000762939453,1.75 C16.700000762939453,1.75 18,1.5499999523162842 18,1.5499999523162842 C18.100000381469727,2.1500000953674316 18.299999237060547,2.549999952316284 18.700000762939453,2.8499999046325684 C19.100000381469727,3.1500000953674316 19.5,3.25 20.100000381469727,3.25 C20.600000381469727,3.25 21,3.1500000953674316 21.299999237060547,2.950000047683716 C21.600000381469727,2.75 21.700000762939453,2.450000047683716 21.700000762939453,2.049999952316284 C21.700000762939453,1.649999976158142 21.600000381469727,1.350000023841858 21.399999618530273,1.149999976158142 C21.200000762939453,0.949999988079071 20.899999618530273,0.8500000238418579 20.5,0.75 C20.5,0.75 19.200000762939453,0.6499999761581421 19.200000762939453,0.6499999761581421 C18.399999618530273,0.550000011920929 17.899999618530273,0.3499999940395355 17.5,-0.05000000074505806 C17.100000381469727,-0.44999998807907104 16.899999618530273,-0.949999988079071 16.899999618530273,-1.5499999523162842 C16.899999618530273,-2.25 17.200000762939453,-2.8499999046325684 17.700000762939453,-3.25 C18.200000762939453,-3.6500000953674316 19,-3.8499999046325684 19.899999618530273,-3.8499999046325684 C20.799999237060547,-3.8499999046325684 21.5,-3.6500000953674316 22.100000381469727,-3.1500000953674316 C22.700000762939453,-2.75 23,-2.1500000953674316 23.100000381469727,-1.4500000476837158 C23.100000381469727,-1.4500000476837158 21.799999237060547,-1.149999976158142 21.799999237060547,-1.149999976158142 C21.700000762939453,-1.649999976158142 21.5,-2.049999952316284 21.200000762939453,-2.3499999046325684 C20.899999618530273,-2.6500000953674316 20.5,-2.75 19.899999618530273,-2.75 C19.399999618530273,-2.75 19,-2.6500000953674316 18.700000762939453,-2.450000047683716 C18.399999618530273,-2.25 18.299999237060547,-1.9500000476837158 18.299999237060547,-1.5499999523162842 C18.299999237060547,-0.8500000238418579 18.799999237060547,-0.44999998807907104 19.700000762939453,-0.3499999940395355 C19.700000762939453,-0.3499999940395355 21,-0.25 21,-0.25 C22.399999618530273,-0.05000000074505806 23.200000762939453,0.6499999761581421 23.200000762939453,1.9500000476837158 C23.200000762939453,2.75 22.899999618530273,3.25 22.399999618530273,3.75 C21.799999237060547,4.150000095367432 21.100000381469727,4.349999904632568 20.100000381469727,4.349999904632568z M24,-3.6500000953674316 C24,-3.6500000953674316 25.5,-3.6500000953674316 25.5,-3.6500000953674316 C25.5,-3.6500000953674316 25.5,-5.75 25.5,-5.75 C25.5,-5.75 26.799999237060547,-6.349999904632568 26.799999237060547,-6.349999904632568 C26.799999237060547,-6.349999904632568 26.799999237060547,-3.75 26.799999237060547,-3.75 C26.799999237060547,-3.75 28.799999237060547,-3.75 28.799999237060547,-3.75 C28.799999237060547,-3.75 28.799999237060547,-2.6500000953674316 28.799999237060547,-2.6500000953674316 C28.799999237060547,-2.6500000953674316 26.799999237060547,-2.6500000953674316 26.799999237060547,-2.6500000953674316 C26.799999237060547,-2.6500000953674316 26.799999237060547,1.649999976158142 26.799999237060547,1.649999976158142 C26.799999237060547,2.049999952316284 26.899999618530273,2.450000047683716 27.100000381469727,2.6500000953674316 C27.299999237060547,2.8499999046325684 27.600000381469727,2.950000047683716 28,2.950000047683716 C28.200000762939453,2.950000047683716 28.5,2.950000047683716 28.799999237060547,2.8499999046325684 C28.799999237060547,2.8499999046325684 28.799999237060547,4.050000190734863 28.799999237060547,4.050000190734863 C28.5,4.150000095367432 28.100000381469727,4.150000095367432 27.600000381469727,4.150000095367432 C26.799999237060547,4.150000095367432 26.299999237060547,3.950000047683716 25.899999618530273,3.549999952316284 C25.600000381469727,3.1500000953674316 25.399999618530273,2.549999952316284 25.399999618530273,1.75 C25.399999618530273,1.75 25.399999618530273,-2.6500000953674316 25.399999618530273,-2.6500000953674316 C25.399999618530273,-2.6500000953674316 23.899999618530273,-2.6500000953674316 23.899999618530273,-2.6500000953674316 C23.899999618530273,-2.6500000953674316 23.899999618530273,-3.6500000953674316 23.899999618530273,-3.6500000953674316 C23.899999618530273,-3.6500000953674316 24,-3.6500000953674316 24,-3.6500000953674316z M34.79999923706055,-3.6500000953674316 C34.79999923706055,-3.6500000953674316 36.099998474121094,-3.6500000953674316 36.099998474121094,-3.6500000953674316 C36.099998474121094,-3.6500000953674316 36.099998474121094,-2.1500000953674316 36.099998474121094,-2.1500000953674316 C36.400001525878906,-2.6500000953674316 36.70000076293945,-3.049999952316284 37.099998474121094,-3.3499999046325684 C37.5,-3.6500000953674316 38,-3.75 38.599998474121094,-3.75 C39.20000076293945,-3.75 39.79999923706055,-3.549999952316284 40.29999923706055,-3.25 C40.79999923706055,-2.950000047683716 41.20000076293945,-2.450000047683716 41.400001525878906,-1.850000023841858 C41.70000076293945,-1.25 41.79999923706055,-0.550000011920929 41.79999923706055,0.25 C41.79999923706055,1.0499999523162842 41.70000076293945,1.75 41.400001525878906,2.450000047683716 C41.099998474121094,3.049999952316284 40.70000076293945,3.549999952316284 40.29999923706055,3.8499999046325684 C39.79999923706055,4.150000095367432 39.20000076293945,4.349999904632568 38.599998474121094,4.349999904632568 C38,4.349999904632568 37.5,4.25 37.099998474121094,3.950000047683716 C36.70000076293945,3.6500000953674316 36.400001525878906,3.3499999046325684 36.20000076293945,2.950000047683716 C36.20000076293945,2.950000047683716 36.20000076293945,7.25 36.20000076293945,7.25 C36.20000076293945,7.25 34.900001525878906,7.25 34.900001525878906,7.25 C34.900001525878906,7.25 34.900001525878906,-3.6500000953674316 34.900001525878906,-3.6500000953674316 C34.900001525878906,-3.6500000953674316 34.79999923706055,-3.6500000953674316 34.79999923706055,-3.6500000953674316z M38.20000076293945,3.1500000953674316 C38.900001525878906,3.1500000953674316 39.400001525878906,2.8499999046325684 39.79999923706055,2.3499999046325684 C40.20000076293945,1.850000023841858 40.400001525878906,1.149999976158142 40.400001525878906,0.15000000596046448 C40.400001525878906,-0.75 40.20000076293945,-1.4500000476837158 39.79999923706055,-1.9500000476837158 C39.400001525878906,-2.450000047683716 38.900001525878906,-2.75 38.29999923706055,-2.75 C37.599998474121094,-2.75 37.099998474121094,-2.549999952316284 36.70000076293945,-2.049999952316284 C36.29999923706055,-1.5499999523162842 36.099998474121094,-0.949999988079071 36.099998474121094,-0.05000000074505806 C36.099998474121094,-0.05000000074505806 36.099998474121094,0.3499999940395355 36.099998474121094,0.3499999940395355 C36.099998474121094,1.149999976158142 36.29999923706055,1.850000023841858 36.70000076293945,2.3499999046325684 C37,2.950000047683716 37.5,3.1500000953674316 38.20000076293945,3.1500000953674316z M45.70000076293945,4.349999904632568 C44.900001525878906,4.349999904632568 44.29999923706055,4.150000095367432 43.79999923706055,3.75 C43.29999923706055,3.3499999046325684 43.099998474121094,2.75 43.099998474121094,2.049999952316284 C43.099998474121094,1.649999976158142 43.20000076293945,1.25 43.400001525878906,0.949999988079071 C43.599998474121094,0.6499999761581421 43.900001525878906,0.3499999940395355 44.20000076293945,0.15000000596046448 C44.5,0.05000000074505806 44.900001525878906,-0.15000000596046448 45.29999923706055,-0.25 C45.70000076293945,-0.3499999940395355 46.20000076293945,-0.44999998807907104 46.900001525878906,-0.550000011920929 C46.900001525878906,-0.550000011920929 48.400001525878906,-0.75 48.400001525878906,-0.75 C48.400001525878906,-0.75 48.400001525878906,-0.8500000238418579 48.400001525878906,-0.8500000238418579 C48.400001525878906,-1.5499999523162842 48.29999923706055,-2.049999952316284 48,-2.450000047683716 C47.70000076293945,-2.75 47.29999923706055,-2.950000047683716 46.70000076293945,-2.950000047683716 C46.20000076293945,-2.950000047683716 45.70000076293945,-2.8499999046325684 45.400001525878906,-2.549999952316284 C45.099998474121094,-2.25 44.900001525878906,-1.850000023841858 44.900001525878906,-1.4500000476837158 C44.900001525878906,-1.4500000476837158 43.5,-1.4500000476837158 43.5,-1.4500000476837158 C43.599998474121094,-2.25 43.900001525878906,-2.8499999046325684 44.400001525878906,-3.3499999046325684 C45,-3.8499999046325684 45.70000076293945,-4.050000190734863 46.70000076293945,-4.050000190734863 C47.79999923706055,-4.050000190734863 48.599998474121094,-3.75 49.099998474121094,-3.25 C49.599998474121094,-2.75 49.79999923706055,-1.9500000476837158 49.79999923706055,-0.75 C49.79999923706055,-0.75 49.79999923706055,1.350000023841858 49.79999923706055,1.350000023841858 C49.79999923706055,2.549999952316284 49.900001525878906,3.450000047683716 50.099998474121094,3.950000047683716 C50.099998474121094,3.950000047683716 48.70000076293945,3.950000047683716 48.70000076293945,3.950000047683716 C48.599998474121094,3.549999952316284 48.599998474121094,3.049999952316284 48.599998474121094,2.549999952316284 C48.400001525878906,3.049999952316284 48.099998474121094,3.450000047683716 47.599998474121094,3.75 C46.900001525878906,4.25 46.400001525878906,4.349999904632568 45.70000076293945,4.349999904632568z M46,3.25 C46.70000076293945,3.25 47.20000076293945,3.049999952316284 47.599998474121094,2.549999952316284 C48,2.049999952316284 48.20000076293945,1.4500000476837158 48.20000076293945,0.75 C48.20000076293945,0.75 48.20000076293945,0.3499999940395355 48.20000076293945,0.3499999940395355 C48.20000076293945,0.3499999940395355 46.099998474121094,0.6499999761581421 46.099998474121094,0.6499999761581421 C45.5,0.75 45.099998474121094,0.8500000238418579 44.79999923706055,1.149999976158142 C44.5,1.350000023841858 44.400001525878906,1.649999976158142 44.400001525878906,2.049999952316284 C44.400001525878906,2.450000047683716 44.5,2.75 44.79999923706055,2.950000047683716 C45.20000076293945,3.1500000953674316 45.599998474121094,3.25 46,3.25z M52.20000076293945,4.150000095367432 M52.20000076293945,-3.6500000953674316 C52.20000076293945,-3.6500000953674316 53.5,-3.6500000953674316 53.5,-3.6500000953674316 C53.5,-3.6500000953674316 53.5,4.150000095367432 53.5,4.150000095367432 C53.5,4.150000095367432 52.20000076293945,4.150000095367432 52.20000076293945,4.150000095367432 C52.20000076293945,4.150000095367432 52.20000076293945,-3.6500000953674316 52.20000076293945,-3.6500000953674316z M52.099998474121094,-5.150000095367432 M52.099998474121094,-6.849999904632568 C52.099998474121094,-6.849999904632568 53.599998474121094,-6.849999904632568 53.599998474121094,-6.849999904632568 C53.599998474121094,-6.849999904632568 53.599998474121094,-5.150000095367432 53.599998474121094,-5.150000095367432 C53.599998474121094,-5.150000095367432 52.099998474121094,-5.150000095367432 52.099998474121094,-5.150000095367432 C52.099998474121094,-5.150000095367432 52.099998474121094,-6.849999904632568 52.099998474121094,-6.849999904632568z M58.900001525878906,4.349999904632568 C58.29999923706055,4.349999904632568 57.70000076293945,4.150000095367432 57.20000076293945,3.8499999046325684 C56.70000076293945,3.549999952316284 56.29999923706055,3.049999952316284 56.099998474121094,2.450000047683716 C55.79999923706055,1.850000023841858 55.70000076293945,1.149999976158142 55.70000076293945,0.25 C55.70000076293945,-0.550000011920929 55.79999923706055,-1.25 56.099998474121094,-1.850000023841858 C56.400001525878906,-2.450000047683716 56.79999923706055,-2.950000047683716 57.29999923706055,-3.3499999046325684 C57.79999923706055,-3.75 58.400001525878906,-3.8499999046325684 59,-3.8499999046325684 C60,-3.8499999046325684 60.79999923706055,-3.450000047683716 61.29999923706055,-2.549999952316284 C61.29999923706055,-2.549999952316284 61.29999923706055,-7.25 61.29999923706055,-7.25 C61.29999923706055,-7.25 62.599998474121094,-7.25 62.599998474121094,-7.25 C62.599998474121094,-7.25 62.599998474121094,4.150000095367432 62.599998474121094,4.150000095367432 C62.599998474121094,4.150000095367432 61.29999923706055,4.150000095367432 61.29999923706055,4.150000095367432 C61.29999923706055,4.150000095367432 61.29999923706055,2.6500000953674316 61.29999923706055,2.6500000953674316 C61.099998474121094,3.1500000953674316 60.70000076293945,3.549999952316284 60.29999923706055,3.8499999046325684 C60,4.25 59.5,4.349999904632568 58.900001525878906,4.349999904632568z M59.20000076293945,3.1500000953674316 C59.79999923706055,3.1500000953674316 60.400001525878906,2.950000047683716 60.79999923706055,2.450000047683716 C61.20000076293945,1.9500000476837158 61.400001525878906,1.25 61.400001525878906,0.44999998807907104 C61.400001525878906,0.44999998807907104 61.400001525878906,0.05000000074505806 61.400001525878906,0.05000000074505806 C61.400001525878906,-0.8500000238418579 61.20000076293945,-1.4500000476837158 60.79999923706055,-1.9500000476837158 C60.400001525878906,-2.450000047683716 59.900001525878906,-2.6500000953674316 59.20000076293945,-2.6500000953674316 C58.5,-2.6500000953674316 58,-2.3499999046325684 57.599998474121094,-1.850000023841858 C57.20000076293945,-1.350000023841858 57,-0.6499999761581421 57,0.25 C57,1.149999976158142 57.20000076293945,1.850000023841858 57.599998474121094,2.450000047683716 C58,2.950000047683716 58.599998474121094,3.1500000953674316 59.20000076293945,3.1500000953674316z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,440.1499938964844,368.6499938964844)"
                  >
                     <path
                     fill="rgb(55,121,130)"
                     fill-opacity="1"
                     d=" M-29.149999618530273,2.549999952316284 C-29.149999618530273,3.450000047683716 -29.450000762939453,4.25 -30.049999237060547,4.75 C-30.649999618530273,5.25 -31.450000762939453,5.550000190734863 -32.54999923706055,5.550000190734863 C-32.54999923706055,5.550000190734863 -32.54999923706055,6.949999809265137 -32.54999923706055,6.949999809265137 C-32.54999923706055,6.949999809265137 -33.25,6.949999809265137 -33.25,6.949999809265137 C-33.25,6.949999809265137 -33.25,5.449999809265137 -33.25,5.449999809265137 C-34.25,5.349999904632568 -35.150001525878906,5.050000190734863 -35.75,4.449999809265137 C-36.349998474121094,3.8499999046325684 -36.75,3.049999952316284 -36.95000076293945,2.049999952316284 C-36.95000076293945,2.049999952316284 -35.54999923706055,1.75 -35.54999923706055,1.75 C-35.45000076293945,2.549999952316284 -35.150001525878906,3.049999952316284 -34.75,3.450000047683716 C-34.349998474121094,3.8499999046325684 -33.849998474121094,4.050000190734863 -33.25,4.150000095367432 C-33.25,4.150000095367432 -33.25,0.15000000596046448 -33.25,0.15000000596046448 C-33.25,0.15000000596046448 -33.75,0.05000000074505806 -33.75,0.05000000074505806 C-34.650001525878906,-0.15000000596046448 -35.349998474121094,-0.550000011920929 -35.849998474121094,-1.0499999523162842 C-36.349998474121094,-1.5499999523162842 -36.54999923706055,-2.25 -36.54999923706055,-3.049999952316284 C-36.54999923706055,-3.950000047683716 -36.25,-4.650000095367432 -35.650001525878906,-5.150000095367432 C-35.04999923706055,-5.650000095367432 -34.25,-5.949999809265137 -33.25,-6.050000190734863 C-33.25,-6.050000190734863 -33.25,-7.449999809265137 -33.25,-7.449999809265137 C-33.25,-7.449999809265137 -32.54999923706055,-7.449999809265137 -32.54999923706055,-7.449999809265137 C-32.54999923706055,-7.449999809265137 -32.54999923706055,-6.050000190734863 -32.54999923706055,-6.050000190734863 C-31.549999237060547,-5.949999809265137 -30.850000381469727,-5.650000095367432 -30.25,-5.150000095367432 C-29.649999618530273,-4.650000095367432 -29.350000381469727,-3.8499999046325684 -29.25,-2.950000047683716 C-29.25,-2.950000047683716 -30.649999618530273,-2.549999952316284 -30.649999618530273,-2.549999952316284 C-30.75,-3.950000047683716 -31.450000762939453,-4.75 -32.54999923706055,-4.849999904632568 C-32.54999923706055,-4.849999904632568 -32.54999923706055,-1.0499999523162842 -32.54999923706055,-1.0499999523162842 C-32.54999923706055,-1.0499999523162842 -32.04999923706055,-0.949999988079071 -32.04999923706055,-0.949999988079071 C-31.049999237060547,-0.6499999761581421 -30.350000381469727,-0.3499999940395355 -29.850000381469727,0.15000000596046448 C-29.350000381469727,0.949999988079071 -29.149999618530273,1.649999976158142 -29.149999618530273,2.549999952316284z M-33.25,-0.949999988079071 C-33.25,-0.949999988079071 -33.25,-4.650000095367432 -33.25,-4.650000095367432 C-33.849998474121094,-4.650000095367432 -34.349998474121094,-4.449999809265137 -34.650001525878906,-4.150000095367432 C-35.04999923706055,-3.8499999046325684 -35.150001525878906,-3.450000047683716 -35.150001525878906,-2.8499999046325684 C-35.150001525878906,-2.3499999046325684 -34.95000076293945,-1.9500000476837158 -34.650001525878906,-1.5499999523162842 C-34.45000076293945,-1.350000023841858 -33.95000076293945,-1.0499999523162842 -33.25,-0.949999988079071z M-32.54999923706055,4.449999809265137 C-31.850000381469727,4.449999809265137 -31.350000381469727,4.25 -31.049999237060547,3.950000047683716 C-30.649999618530273,3.6500000953674316 -30.549999237060547,3.25 -30.549999237060547,2.6500000953674316 C-30.549999237060547,2.1500000953674316 -30.75,1.649999976158142 -31.049999237060547,1.350000023841858 C-31.350000381469727,1.0499999523162842 -31.850000381469727,0.8500000238418579 -32.54999923706055,0.6499999761581421 C-32.54999923706055,0.6499999761581421 -32.650001525878906,0.6499999761581421 -32.650001525878906,0.6499999761581421 C-32.650001525878906,0.6499999761581421 -32.650001525878906,4.449999809265137 -32.650001525878906,4.449999809265137 C-32.650001525878906,4.449999809265137 -32.54999923706055,4.449999809265137 -32.54999923706055,4.449999809265137z M-19.649999618530273,4.150000095367432 C-19.649999618530273,4.150000095367432 -19.649999618530273,5.449999809265137 -19.649999618530273,5.449999809265137 C-19.649999618530273,5.449999809265137 -26.75,5.449999809265137 -26.75,5.449999809265137 C-26.75,5.449999809265137 -26.75,4.150000095367432 -26.75,4.150000095367432 C-26.75,4.150000095367432 -23.75,4.150000095367432 -23.75,4.150000095367432 C-23.75,4.150000095367432 -23.75,-3.25 -23.75,-3.25 C-24.25,-2.75 -24.950000762939453,-2.450000047683716 -26.149999618530273,-2.450000047683716 C-26.149999618530273,-2.450000047683716 -26.649999618530273,-2.450000047683716 -26.649999618530273,-2.450000047683716 C-26.649999618530273,-2.450000047683716 -26.649999618530273,-3.75 -26.649999618530273,-3.75 C-26.649999618530273,-3.75 -26.149999618530273,-3.75 -26.149999618530273,-3.75 C-25.350000381469727,-3.75 -24.850000381469727,-3.950000047683716 -24.350000381469727,-4.25 C-23.950000762939453,-4.550000190734863 -23.649999618530273,-5.050000190734863 -23.450000762939453,-5.550000190734863 C-23.450000762939453,-5.550000190734863 -22.25,-5.550000190734863 -22.25,-5.550000190734863 C-22.25,-5.550000190734863 -22.25,4.050000190734863 -22.25,4.050000190734863 C-22.25,4.050000190734863 -19.649999618530273,4.050000190734863 -19.649999618530273,4.050000190734863 C-19.649999618530273,4.050000190734863 -19.649999618530273,4.150000095367432 -19.649999618530273,4.150000095367432z M-17.350000381469727,6.849999904632568 C-16.950000762939453,6.650000095367432 -16.75,6.449999809265137 -16.549999237060547,6.25 C-16.450000762939453,6.050000190734863 -16.350000381469727,5.75 -16.350000381469727,5.349999904632568 C-16.350000381469727,5.349999904632568 -17.350000381469727,5.349999904632568 -17.350000381469727,5.349999904632568 C-17.350000381469727,5.349999904632568 -17.350000381469727,3.450000047683716 -17.350000381469727,3.450000047683716 C-17.350000381469727,3.450000047683716 -15.550000190734863,3.450000047683716 -15.550000190734863,3.450000047683716 C-15.550000190734863,3.450000047683716 -15.550000190734863,5.150000095367432 -15.550000190734863,5.150000095367432 C-15.550000190734863,5.75 -15.649999618530273,6.25 -15.850000381469727,6.650000095367432 C-16.049999237060547,6.949999809265137 -16.450000762939453,7.25 -16.950000762939453,7.449999809265137 C-16.950000762939453,7.449999809265137 -17.350000381469727,6.849999904632568 -17.350000381469727,6.849999904632568z M-9.25,-1.850000023841858 C-8.550000190734863,-1.850000023841858 -7.949999809265137,-1.649999976158142 -7.449999809265137,-1.350000023841858 C-6.949999809265137,-1.0499999523162842 -6.550000190734863,-0.6499999761581421 -6.25,-0.05000000074505806 C-5.949999809265137,0.550000011920929 -5.849999904632568,1.149999976158142 -5.849999904632568,1.850000023841858 C-5.849999904632568,2.6500000953674316 -6.050000190734863,3.25 -6.349999904632568,3.8499999046325684 C-6.650000095367432,4.449999809265137 -7.050000190734863,4.849999904632568 -7.650000095367432,5.150000095367432 C-8.149999618530273,5.449999809265137 -8.850000381469727,5.650000095367432 -9.550000190734863,5.650000095367432 C-10.850000381469727,5.650000095367432 -11.850000381469727,5.150000095367432 -12.449999809265137,4.25 C-13.149999618530273,3.3499999046325684 -13.449999809265137,1.9500000476837158 -13.449999809265137,0.15000000596046448 C-13.449999809265137,-1.75 -13.050000190734863,-3.25 -12.449999809265137,-4.25 C-11.75,-5.25 -10.75,-5.75 -9.449999809265137,-5.75 C-8.550000190734863,-5.75 -7.849999904632568,-5.550000190734863 -7.25,-5.050000190734863 C-6.650000095367432,-4.550000190734863 -6.349999904632568,-3.950000047683716 -6.150000095367432,-3.049999952316284 C-6.150000095367432,-3.049999952316284 -7.550000190734863,-2.75 -7.550000190734863,-2.75 C-7.75,-3.950000047683716 -8.449999809265137,-4.550000190734863 -9.449999809265137,-4.550000190734863 C-10.350000381469727,-4.550000190734863 -10.949999809265137,-4.150000095367432 -11.449999809265137,-3.450000047683716 C-11.850000381469727,-2.75 -12.149999618530273,-1.649999976158142 -12.149999618530273,-0.25 C-11.850000381469727,-0.75 -11.550000190734863,-1.149999976158142 -11.050000190734863,-1.350000023841858 C-10.449999809265137,-1.75 -9.850000381469727,-1.850000023841858 -9.25,-1.850000023841858z M-9.449999809265137,4.449999809265137 C-8.75,4.449999809265137 -8.25,4.25 -7.849999904632568,3.75 C-7.449999809265137,3.25 -7.25,2.6500000953674316 -7.25,1.850000023841858 C-7.25,1.0499999523162842 -7.449999809265137,0.44999998807907104 -7.849999904632568,-0.05000000074505806 C-8.25,-0.550000011920929 -8.75,-0.75 -9.449999809265137,-0.75 C-10.050000190734863,-0.75 -10.550000190734863,-0.550000011920929 -10.949999809265137,-0.15000000596046448 C-11.350000381469727,0.25 -11.649999618530273,0.75 -11.850000381469727,1.4500000476837158 C-11.75,2.3499999046325684 -11.550000190734863,3.049999952316284 -11.050000190734863,3.549999952316284 C-10.75,4.150000095367432 -10.149999618530273,4.449999809265137 -9.449999809265137,4.449999809265137z M0.44999998807907104,-1.850000023841858 C1.149999976158142,-1.850000023841858 1.75,-1.649999976158142 2.25,-1.350000023841858 C2.75,-1.0499999523162842 3.1500000953674316,-0.6499999761581421 3.450000047683716,-0.05000000074505806 C3.75,0.550000011920929 3.8499999046325684,1.149999976158142 3.8499999046325684,1.850000023841858 C3.8499999046325684,2.6500000953674316 3.6500000953674316,3.25 3.3499999046325684,3.8499999046325684 C3.049999952316284,4.449999809265137 2.6500000953674316,4.849999904632568 2.049999952316284,5.150000095367432 C1.5499999523162842,5.449999809265137 0.8500000238418579,5.650000095367432 0.15000000596046448,5.650000095367432 C-1.149999976158142,5.650000095367432 -2.1500000953674316,5.150000095367432 -2.75,4.25 C-3.450000047683716,3.3499999046325684 -3.75,1.9500000476837158 -3.75,0.15000000596046448 C-3.75,-1.75 -3.3499999046325684,-3.25 -2.6500000953674316,-4.25 C-1.9500000476837158,-5.25 -0.949999988079071,-5.75 0.3499999940395355,-5.75 C1.25,-5.75 1.9500000476837158,-5.550000190734863 2.549999952316284,-5.050000190734863 C3.1500000953674316,-4.550000190734863 3.450000047683716,-3.950000047683716 3.6500000953674316,-3.049999952316284 C3.6500000953674316,-3.049999952316284 2.25,-2.75 2.25,-2.75 C2.049999952316284,-3.950000047683716 1.350000023841858,-4.550000190734863 0.3499999940395355,-4.550000190734863 C-0.550000011920929,-4.550000190734863 -1.149999976158142,-4.150000095367432 -1.649999976158142,-3.450000047683716 C-2.049999952316284,-2.75 -2.3499999046325684,-1.649999976158142 -2.3499999046325684,-0.25 C-2.049999952316284,-0.75 -1.75,-1.149999976158142 -1.25,-1.350000023841858 C-0.6499999761581421,-1.75 -0.15000000596046448,-1.850000023841858 0.44999998807907104,-1.850000023841858z M0.25,4.449999809265137 C0.949999988079071,4.449999809265137 1.4500000476837158,4.25 1.850000023841858,3.75 C2.25,3.25 2.450000047683716,2.6500000953674316 2.450000047683716,1.850000023841858 C2.450000047683716,1.0499999523162842 2.25,0.44999998807907104 1.850000023841858,-0.05000000074505806 C1.4500000476837158,-0.550000011920929 0.949999988079071,-0.75 0.25,-0.75 C-0.3499999940395355,-0.75 -0.8500000238418579,-0.550000011920929 -1.25,-0.15000000596046448 C-1.649999976158142,0.25 -1.9500000476837158,0.75 -2.1500000953674316,1.4500000476837158 C-2.049999952316284,2.3499999046325684 -1.850000023841858,3.049999952316284 -1.350000023841858,3.549999952316284 C-0.949999988079071,4.150000095367432 -0.44999998807907104,4.449999809265137 0.25,4.449999809265137z M6.25,4.25 C7.550000190734863,3.3499999046325684 8.75,2.25 9.949999809265137,1.149999976158142 C10.649999618530273,0.44999998807907104 11.149999618530273,-0.15000000596046448 11.350000381469727,-0.6499999761581421 C11.649999618530273,-1.149999976158142 11.75,-1.75 11.75,-2.450000047683716 C11.75,-3.1500000953674316 11.550000190734863,-3.6500000953674316 11.25,-3.950000047683716 C10.949999809265137,-4.349999904632568 10.449999809265137,-4.449999809265137 9.75,-4.449999809265137 C9.149999618530273,-4.449999809265137 8.649999618530273,-4.25 8.25,-3.950000047683716 C7.849999904632568,-3.549999952316284 7.75,-3.1500000953674316 7.75,-2.549999952316284 C7.75,-2.25 7.75,-1.9500000476837158 7.849999904632568,-1.5499999523162842 C7.849999904632568,-1.5499999523162842 6.449999809265137,-1.649999976158142 6.449999809265137,-1.649999976158142 C6.349999904632568,-1.9500000476837158 6.349999904632568,-2.25 6.349999904632568,-2.549999952316284 C6.349999904632568,-3.549999952316284 6.650000095367432,-4.25 7.25,-4.849999904632568 C7.849999904632568,-5.449999809265137 8.75,-5.75 9.850000381469727,-5.75 C10.949999809265137,-5.75 11.75,-5.449999809265137 12.350000381469727,-4.849999904632568 C12.949999809265137,-4.25 13.25,-3.450000047683716 13.25,-2.450000047683716 C13.25,-1.649999976158142 13.050000190734863,-0.949999988079071 12.649999618530273,-0.25 C12.25,0.44999998807907104 11.649999618530273,1.149999976158142 10.850000381469727,1.9500000476837158 C10.050000190734863,2.75 9.149999618530273,3.450000047683716 8.149999618530273,4.050000190734863 C8.149999618530273,4.050000190734863 13.350000381469727,4.050000190734863 13.350000381469727,4.050000190734863 C13.350000381469727,4.050000190734863 13.350000381469727,5.349999904632568 13.350000381469727,5.349999904632568 C13.350000381469727,5.349999904632568 6.25,5.349999904632568 6.25,5.349999904632568 C6.25,5.349999904632568 6.25,4.25 6.25,4.25z M17.649999618530273,3.549999952316284 M17.649999618530273,5.449999809265137 C17.649999618530273,5.449999809265137 15.850000381469727,5.449999809265137 15.850000381469727,5.449999809265137 C15.850000381469727,5.449999809265137 15.850000381469727,3.549999952316284 15.850000381469727,3.549999952316284 C15.850000381469727,3.549999952316284 17.649999618530273,3.549999952316284 17.649999618530273,3.549999952316284 C17.649999618530273,3.549999952316284 17.649999618530273,5.449999809265137 17.649999618530273,5.449999809265137z M19.950000762939453,4.25 C21.25,3.3499999046325684 22.450000762939453,2.25 23.649999618530273,1.149999976158142 C24.350000381469727,0.44999998807907104 24.850000381469727,-0.15000000596046448 25.049999237060547,-0.6499999761581421 C25.350000381469727,-1.149999976158142 25.450000762939453,-1.75 25.450000762939453,-2.450000047683716 C25.450000762939453,-3.1500000953674316 25.25,-3.6500000953674316 24.950000762939453,-3.950000047683716 C24.649999618530273,-4.349999904632568 24.149999618530273,-4.449999809265137 23.450000762939453,-4.449999809265137 C22.850000381469727,-4.449999809265137 22.350000381469727,-4.25 21.950000762939453,-3.950000047683716 C21.549999237060547,-3.549999952316284 21.450000762939453,-3.1500000953674316 21.450000762939453,-2.549999952316284 C21.450000762939453,-2.25 21.450000762939453,-1.9500000476837158 21.549999237060547,-1.5499999523162842 C21.549999237060547,-1.5499999523162842 20.149999618530273,-1.649999976158142 20.149999618530273,-1.649999976158142 C20.049999237060547,-1.9500000476837158 20.049999237060547,-2.25 20.049999237060547,-2.549999952316284 C20.049999237060547,-3.549999952316284 20.350000381469727,-4.25 20.950000762939453,-4.849999904632568 C21.549999237060547,-5.449999809265137 22.450000762939453,-5.75 23.549999237060547,-5.75 C24.649999618530273,-5.75 25.450000762939453,-5.449999809265137 26.049999237060547,-4.849999904632568 C26.649999618530273,-4.25 26.950000762939453,-3.450000047683716 26.950000762939453,-2.450000047683716 C26.950000762939453,-1.649999976158142 26.75,-0.949999988079071 26.350000381469727,-0.25 C25.950000762939453,0.44999998807907104 25.350000381469727,1.149999976158142 24.549999237060547,1.9500000476837158 C23.75,2.75 22.850000381469727,3.450000047683716 21.850000381469727,4.050000190734863 C21.850000381469727,4.050000190734863 27.049999237060547,4.050000190734863 27.049999237060547,4.050000190734863 C27.049999237060547,4.050000190734863 27.049999237060547,5.349999904632568 27.049999237060547,5.349999904632568 C27.049999237060547,5.349999904632568 19.950000762939453,5.349999904632568 19.950000762939453,5.349999904632568 C19.950000762939453,5.349999904632568 19.950000762939453,4.25 19.950000762939453,4.25z M36.95000076293945,4.150000095367432 C36.95000076293945,4.150000095367432 36.95000076293945,5.449999809265137 36.95000076293945,5.449999809265137 C36.95000076293945,5.449999809265137 29.850000381469727,5.449999809265137 29.850000381469727,5.449999809265137 C29.850000381469727,5.449999809265137 29.850000381469727,4.150000095367432 29.850000381469727,4.150000095367432 C29.850000381469727,4.150000095367432 32.849998474121094,4.150000095367432 32.849998474121094,4.150000095367432 C32.849998474121094,4.150000095367432 32.849998474121094,-3.25 32.849998474121094,-3.25 C32.349998474121094,-2.75 31.649999618530273,-2.450000047683716 30.450000762939453,-2.450000047683716 C30.450000762939453,-2.450000047683716 29.950000762939453,-2.450000047683716 29.950000762939453,-2.450000047683716 C29.950000762939453,-2.450000047683716 29.950000762939453,-3.75 29.950000762939453,-3.75 C29.950000762939453,-3.75 30.450000762939453,-3.75 30.450000762939453,-3.75 C31.25,-3.75 31.75,-3.950000047683716 32.25,-4.25 C32.650001525878906,-4.550000190734863 32.95000076293945,-5.050000190734863 33.150001525878906,-5.550000190734863 C33.150001525878906,-5.550000190734863 34.349998474121094,-5.550000190734863 34.349998474121094,-5.550000190734863 C34.349998474121094,-5.550000190734863 34.349998474121094,4.050000190734863 34.349998474121094,4.050000190734863 C34.349998474121094,4.050000190734863 36.95000076293945,4.050000190734863 36.95000076293945,4.050000190734863 C36.95000076293945,4.050000190734863 36.95000076293945,4.150000095367432 36.95000076293945,4.150000095367432z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,303.04998779296875,395.20001220703125)"
                  >
                     <path
                     fill="rgb(199,199,199)"
                     fill-opacity="1"
                     d=" M-175.35000610351562,-0.20000000298023224 C-175.35000610351562,-0.20000000298023224 175.35000610351562,-0.20000000298023224 175.35000610351562,-0.20000000298023224 C175.35000610351562,-0.20000000298023224 175.35000610351562,0.20000000298023224 175.35000610351562,0.20000000298023224 C175.35000610351562,0.20000000298023224 -175.35000610351562,0.20000000298023224 -175.35000610351562,0.20000000298023224 C-175.35000610351562,0.20000000298023224 -175.35000610351562,-0.20000000298023224 -175.35000610351562,-0.20000000298023224z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,213.35000610351562,429.8999938964844)"
                  >
                     <path
                     fill="rgb(29,106,229)"
                     fill-opacity="1"
                     d=" M-82.75,-17.600000381469727 C-82.75,-17.600000381469727 82.75,-17.600000381469727 82.75,-17.600000381469727 C84.3499984741211,-17.600000381469727 85.6500015258789,-16.299999237060547 85.6500015258789,-14.699999809265137 C85.6500015258789,-14.699999809265137 85.6500015258789,14.699999809265137 85.6500015258789,14.699999809265137 C85.6500015258789,16.299999237060547 84.3499984741211,17.600000381469727 82.75,17.600000381469727 C82.75,17.600000381469727 -82.75,17.600000381469727 -82.75,17.600000381469727 C-84.3499984741211,17.600000381469727 -85.6500015258789,16.299999237060547 -85.6500015258789,14.699999809265137 C-85.6500015258789,14.699999809265137 -85.6500015258789,-14.699999809265137 -85.6500015258789,-14.699999809265137 C-85.6500015258789,-16.200000762939453 -84.3499984741211,-17.600000381469727 -82.75,-17.600000381469727z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,213.75,432.3999938964844)"
                  >
                     <path
                     fill="rgb(255,255,255)"
                     fill-opacity="1"
                     d=" M-23.75,-6.199999809265137 C-23.75,-6.199999809265137 -20.25,-6.199999809265137 -20.25,-6.199999809265137 C-19.350000381469727,-6.199999809265137 -18.450000762939453,-6 -17.75,-5.599999904632568 C-17.049999237060547,-5.199999809265137 -16.450000762939453,-4.599999904632568 -16.149999618530273,-3.9000000953674316 C-15.75,-3.200000047683716 -15.550000190734863,-2.299999952316284 -15.550000190734863,-1.399999976158142 C-15.550000190734863,-0.4000000059604645 -15.75,0.4000000059604645 -16.149999618530273,1.100000023841858 C-16.549999237060547,1.7999999523162842 -17.049999237060547,2.4000000953674316 -17.850000381469727,2.799999952316284 C-18.549999237060547,3.200000047683716 -19.350000381469727,3.4000000953674316 -20.350000381469727,3.4000000953674316 C-20.350000381469727,3.4000000953674316 -23.75,3.4000000953674316 -23.75,3.4000000953674316 C-23.75,3.4000000953674316 -23.75,-6.199999809265137 -23.75,-6.199999809265137z M-20.350000381469727,2.200000047683716 C-19.75,2.200000047683716 -19.25,2 -18.75,1.7000000476837158 C-18.350000381469727,1.399999976158142 -17.950000762939453,1 -17.75,0.4000000059604645 C-17.549999237060547,-0.10000000149011612 -17.350000381469727,-0.699999988079071 -17.350000381469727,-1.399999976158142 C-17.350000381469727,-2.4000000953674316 -17.649999618530273,-3.299999952316284 -18.149999618530273,-3.9000000953674316 C-18.649999618530273,-4.5 -19.350000381469727,-4.900000095367432 -20.350000381469727,-4.900000095367432 C-20.350000381469727,-4.900000095367432 -22.049999237060547,-4.900000095367432 -22.049999237060547,-4.900000095367432 C-22.049999237060547,-4.900000095367432 -22.049999237060547,2.0999999046325684 -22.049999237060547,2.0999999046325684 C-22.049999237060547,2.0999999046325684 -20.350000381469727,2.0999999046325684 -20.350000381469727,2.0999999046325684 C-20.350000381469727,2.0999999046325684 -20.350000381469727,2.200000047683716 -20.350000381469727,2.200000047683716z M-8.050000190734863,0.6000000238418579 C-8.050000190734863,0.6000000238418579 -12.850000381469727,0.6000000238418579 -12.850000381469727,0.6000000238418579 C-12.850000381469727,1.2000000476837158 -12.649999618530273,1.600000023841858 -12.350000381469727,2 C-12.050000190734863,2.299999952316284 -11.550000190734863,2.5 -11.050000190734863,2.5 C-10.649999618530273,2.5 -10.350000381469727,2.4000000953674316 -10.050000190734863,2.200000047683716 C-9.75,2 -9.550000190734863,1.7000000476837158 -9.350000381469727,1.399999976158142 C-9.350000381469727,1.399999976158142 -8.050000190734863,2 -8.050000190734863,2 C-8.350000381469727,2.5999999046325684 -8.649999618530273,3.0999999046325684 -9.25,3.4000000953674316 C-9.75,3.700000047683716 -10.350000381469727,3.9000000953674316 -11.050000190734863,3.9000000953674316 C-12.149999618530273,3.9000000953674316 -12.949999809265137,3.5999999046325684 -13.550000190734863,3 C-14.149999618530273,2.4000000953674316 -14.449999809265137,1.5 -14.449999809265137,0.4000000059604645 C-14.449999809265137,-0.699999988079071 -14.149999618530273,-1.600000023841858 -13.550000190734863,-2.299999952316284 C-12.949999809265137,-3 -12.149999618530273,-3.299999952316284 -11.149999618530273,-3.299999952316284 C-10.149999618530273,-3.299999952316284 -9.350000381469727,-3 -8.850000381469727,-2.5 C-8.350000381469727,-1.899999976158142 -8.050000190734863,-1.100000023841858 -8.050000190734863,-0.10000000149011612 C-8.050000190734863,-0.10000000149011612 -8.050000190734863,0.6000000238418579 -8.050000190734863,0.6000000238418579z M-9.649999618530273,-0.6000000238418579 C-9.649999618530273,-1.2000000476837158 -9.75,-1.600000023841858 -10.050000190734863,-1.899999976158142 C-10.350000381469727,-2.200000047683716 -10.649999618530273,-2.299999952316284 -11.149999618530273,-2.299999952316284 C-11.649999618530273,-2.299999952316284 -12.050000190734863,-2.0999999046325684 -12.350000381469727,-1.7999999523162842 C-12.649999618530273,-1.5 -12.75,-1 -12.850000381469727,-0.5 C-12.850000381469727,-0.5 -9.649999618530273,-0.5 -9.649999618530273,-0.5 C-9.649999618530273,-0.5 -9.649999618530273,-0.6000000238418579 -9.649999618530273,-0.6000000238418579z M-6.349999904632568,-3.299999952316284 C-6.349999904632568,-3.299999952316284 -4.75,-3.299999952316284 -4.75,-3.299999952316284 C-4.75,-3.299999952316284 -4.75,-2.0999999046325684 -4.75,-2.0999999046325684 C-4.550000190734863,-2.5 -4.25,-2.9000000953674316 -3.8499999046325684,-3.0999999046325684 C-3.450000047683716,-3.299999952316284 -3.049999952316284,-3.5 -2.549999952316284,-3.5 C-2.049999952316284,-3.5 -1.5499999523162842,-3.299999952316284 -1.149999976158142,-3 C-0.75,-2.700000047683716 -0.44999998807907104,-2.299999952316284 -0.15000000596046448,-1.7999999523162842 C0.05000000074505806,-1.2999999523162842 0.15000000596046448,-0.6000000238418579 0.15000000596046448,0.10000000149011612 C0.15000000596046448,0.800000011920929 0.05000000074505806,1.5 -0.25,2 C-0.44999998807907104,2.5 -0.8500000238418579,3 -1.25,3.299999952316284 C-1.649999976158142,3.5999999046325684 -2.1500000953674316,3.700000047683716 -2.75,3.700000047683716 C-3.25,3.700000047683716 -3.6500000953674316,3.5999999046325684 -3.950000047683716,3.4000000953674316 C-4.25,3.200000047683716 -4.550000190734863,2.9000000953674316 -4.75,2.5 C-4.75,2.5 -4.75,6.199999809265137 -4.75,6.199999809265137 C-4.75,6.199999809265137 -6.349999904632568,6.199999809265137 -6.349999904632568,6.199999809265137 C-6.349999904632568,6.199999809265137 -6.349999904632568,-3.299999952316284 -6.349999904632568,-3.299999952316284z M-3.1500000953674316,2.5 C-2.6500000953674316,2.5 -2.25,2.299999952316284 -1.9500000476837158,1.899999976158142 C-1.649999976158142,1.5 -1.5499999523162842,0.8999999761581421 -1.5499999523162842,0.20000000298023224 C-1.5499999523162842,-0.5 -1.649999976158142,-1.100000023841858 -1.9500000476837158,-1.5 C-2.25,-1.899999976158142 -2.6500000953674316,-2.0999999046325684 -3.1500000953674316,-2.0999999046325684 C-3.6500000953674316,-2.0999999046325684 -4.050000190734863,-1.899999976158142 -4.349999904632568,-1.5 C-4.650000095367432,-1.100000023841858 -4.75,-0.6000000238418579 -4.75,0.10000000149011612 C-4.75,0.10000000149011612 -4.75,0.4000000059604645 -4.75,0.4000000059604645 C-4.75,1.100000023841858 -4.650000095367432,1.600000023841858 -4.349999904632568,2 C-4.050000190734863,2.299999952316284 -3.6500000953674316,2.5 -3.1500000953674316,2.5z M4.550000190734863,3.700000047683716 C3.8499999046325684,3.700000047683716 3.3499999046325684,3.5999999046325684 2.75,3.299999952316284 C2.25,3 1.850000023841858,2.5999999046325684 1.5499999523162842,2.0999999046325684 C1.25,1.600000023841858 1.149999976158142,0.8999999761581421 1.149999976158142,0.20000000298023224 C1.149999976158142,-0.6000000238418579 1.25,-1.2000000476837158 1.5499999523162842,-1.7000000476837158 C1.850000023841858,-2.200000047683716 2.25,-2.5999999046325684 2.75,-2.9000000953674316 C3.25,-3.200000047683716 3.8499999046325684,-3.299999952316284 4.550000190734863,-3.299999952316284 C5.25,-3.299999952316284 5.75,-3.200000047683716 6.25,-2.9000000953674316 C6.75,-2.5999999046325684 7.150000095367432,-2.200000047683716 7.449999809265137,-1.7000000476837158 C7.75,-1.2000000476837158 7.849999904632568,-0.5 7.849999904632568,0.20000000298023224 C7.849999904632568,0.8999999761581421 7.75,1.600000023841858 7.449999809265137,2.0999999046325684 C7.150000095367432,2.5999999046325684 6.75,3.0999999046325684 6.25,3.299999952316284 C5.849999904632568,3.5999999046325684 5.25,3.700000047683716 4.550000190734863,3.700000047683716z M4.550000190734863,2.5 C5.050000190734863,2.5 5.449999809265137,2.299999952316284 5.75,1.899999976158142 C6.050000190734863,1.5 6.150000095367432,0.8999999761581421 6.150000095367432,0.10000000149011612 C6.150000095367432,-0.699999988079071 6.050000190734863,-1.2000000476837158 5.75,-1.600000023841858 C5.449999809265137,-2 5.050000190734863,-2.200000047683716 4.550000190734863,-2.200000047683716 C4.050000190734863,-2.200000047683716 3.549999952316284,-2 3.3499999046325684,-1.600000023841858 C3.049999952316284,-1.2000000476837158 2.950000047683716,-0.6000000238418579 2.950000047683716,0.10000000149011612 C2.950000047683716,0.800000011920929 3.049999952316284,1.5 3.3499999046325684,1.899999976158142 C3.6500000953674316,2.299999952316284 4.050000190734863,2.5 4.550000190734863,2.5z M11.949999809265137,3.700000047683716 C11.149999618530273,3.700000047683716 10.449999809265137,3.5 9.949999809265137,3.200000047683716 C9.449999809265137,2.9000000953674316 9.050000190734863,2.4000000953674316 8.75,1.7000000476837158 C8.75,1.7000000476837158 9.949999809265137,1.2000000476837158 9.949999809265137,1.2000000476837158 C10.149999618530273,1.600000023841858 10.350000381469727,2 10.75,2.200000047683716 C11.050000190734863,2.4000000953674316 11.550000190734863,2.5 11.949999809265137,2.5 C12.350000381469727,2.5 12.649999618530273,2.4000000953674316 12.850000381469727,2.299999952316284 C13.050000190734863,2.200000047683716 13.149999618530273,1.899999976158142 13.149999618530273,1.7000000476837158 C13.149999618530273,1.399999976158142 13.050000190734863,1.2000000476837158 12.949999809265137,1.100000023841858 C12.75,1 12.550000190734863,0.8999999761581421 12.149999618530273,0.800000011920929 C12.149999618530273,0.800000011920929 11.149999618530273,0.699999988079071 11.149999618530273,0.699999988079071 C10.449999809265137,0.6000000238418579 9.949999809265137,0.4000000059604645 9.550000190734863,0 C9.25,-0.4000000059604645 9.050000190734863,-0.800000011920929 9.050000190734863,-1.399999976158142 C9.050000190734863,-2 9.25,-2.5 9.75,-2.9000000953674316 C10.25,-3.299999952316284 10.949999809265137,-3.5 11.75,-3.5 C12.449999809265137,-3.5 13.149999618530273,-3.299999952316284 13.649999618530273,-3 C14.149999618530273,-2.700000047683716 14.550000190734863,-2.299999952316284 14.649999618530273,-1.7000000476837158 C14.649999618530273,-1.7000000476837158 13.550000190734863,-1.100000023841858 13.550000190734863,-1.100000023841858 C13.350000381469727,-1.5 13.149999618530273,-1.7000000476837158 12.850000381469727,-1.899999976158142 C12.550000190734863,-2.0999999046325684 12.149999618530273,-2.200000047683716 11.75,-2.200000047683716 C11.350000381469727,-2.200000047683716 11.050000190734863,-2.0999999046325684 10.850000381469727,-2 C10.649999618530273,-1.899999976158142 10.550000190734863,-1.7000000476837158 10.550000190734863,-1.399999976158142 C10.550000190734863,-1.2000000476837158 10.649999618530273,-1 10.75,-0.800000011920929 C10.949999809265137,-0.699999988079071 11.149999618530273,-0.6000000238418579 11.550000190734863,-0.5 C11.550000190734863,-0.5 12.75,-0.30000001192092896 12.75,-0.30000001192092896 C13.449999809265137,-0.20000000298023224 13.949999809265137,0 14.25,0.30000001192092896 C14.550000190734863,0.6000000238418579 14.75,1.100000023841858 14.75,1.7000000476837158 C14.75,2.4000000953674316 14.449999809265137,2.9000000953674316 13.949999809265137,3.299999952316284 C13.550000190734863,3.5999999046325684 12.850000381469727,3.700000047683716 11.949999809265137,3.700000047683716z M16.350000381469727,3.5999999046325684 M16.350000381469727,-3.299999952316284 C16.350000381469727,-3.299999952316284 17.950000762939453,-3.299999952316284 17.950000762939453,-3.299999952316284 C17.950000762939453,-3.299999952316284 17.950000762939453,3.5999999046325684 17.950000762939453,3.5999999046325684 C17.950000762939453,3.5999999046325684 16.350000381469727,3.5999999046325684 16.350000381469727,3.5999999046325684 C16.350000381469727,3.5999999046325684 16.350000381469727,-3.299999952316284 16.350000381469727,-3.299999952316284z M16.350000381469727,-4.400000095367432 M16.350000381469727,-6.099999904632568 C16.350000381469727,-6.099999904632568 18.149999618530273,-6.099999904632568 18.149999618530273,-6.099999904632568 C18.149999618530273,-6.099999904632568 18.149999618530273,-4.400000095367432 18.149999618530273,-4.400000095367432 C18.149999618530273,-4.400000095367432 16.350000381469727,-4.400000095367432 16.350000381469727,-4.400000095367432 C16.350000381469727,-4.400000095367432 16.350000381469727,-6.099999904632568 16.350000381469727,-6.099999904632568z M19.25,-3.299999952316284 C19.25,-3.299999952316284 20.450000762939453,-3.299999952316284 20.450000762939453,-3.299999952316284 C20.450000762939453,-3.299999952316284 20.450000762939453,-5 20.450000762939453,-5 C20.450000762939453,-5 22.049999237060547,-5.699999809265137 22.049999237060547,-5.699999809265137 C22.049999237060547,-5.699999809265137 22.049999237060547,-3.299999952316284 22.049999237060547,-3.299999952316284 C22.049999237060547,-3.299999952316284 23.75,-3.299999952316284 23.75,-3.299999952316284 C23.75,-3.299999952316284 23.75,-2.0999999046325684 23.75,-2.0999999046325684 C23.75,-2.0999999046325684 22.049999237060547,-2.0999999046325684 22.049999237060547,-2.0999999046325684 C22.049999237060547,-2.0999999046325684 22.049999237060547,1.2000000476837158 22.049999237060547,1.2000000476837158 C22.049999237060547,1.600000023841858 22.149999618530273,1.7999999523162842 22.25,2 C22.450000762939453,2.200000047683716 22.649999618530273,2.299999952316284 23.049999237060547,2.299999952316284 C23.25,2.299999952316284 23.549999237060547,2.299999952316284 23.75,2.200000047683716 C23.75,2.200000047683716 23.75,3.5999999046325684 23.75,3.5999999046325684 C23.350000381469727,3.700000047683716 22.950000762939453,3.700000047683716 22.649999618530273,3.700000047683716 C21.850000381469727,3.700000047683716 21.350000381469727,3.5 20.950000762939453,3.0999999046325684 C20.649999618530273,2.700000047683716 20.450000762939453,2.200000047683716 20.450000762939453,1.399999976158142 C20.450000762939453,1.399999976158142 20.450000762939453,-2.0999999046325684 20.450000762939453,-2.0999999046325684 C20.450000762939453,-2.0999999046325684 19.25,-2.0999999046325684 19.25,-2.0999999046325684 C19.25,-2.0999999046325684 19.25,-3.299999952316284 19.25,-3.299999952316284z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,392.6000061035156,429.8999938964844)"
                  >
                     <path
                     fill="rgb(255,255,255)"
                     fill-opacity="1"
                     d=" M-82.69999694824219,-17.100000381469727 C-82.69999694824219,-17.100000381469727 82.80000305175781,-17.100000381469727 82.80000305175781,-17.100000381469727 C84.19999694824219,-17.100000381469727 85.19999694824219,-16 85.19999694824219,-14.699999809265137 C85.19999694824219,-14.699999809265137 85.19999694824219,14.699999809265137 85.19999694824219,14.699999809265137 C85.19999694824219,16.100000381469727 84.0999984741211,17.100000381469727 82.80000305175781,17.100000381469727 C82.80000305175781,17.100000381469727 -82.69999694824219,17.100000381469727 -82.69999694824219,17.100000381469727 C-84.0999984741211,17.100000381469727 -85.0999984741211,16 -85.0999984741211,14.699999809265137 C-85.0999984741211,14.699999809265137 -85.0999984741211,-14.699999809265137 -85.0999984741211,-14.699999809265137 C-85.19999694824219,-16 -84.0999984741211,-17.100000381469727 -82.69999694824219,-17.100000381469727z"
                     ></path>
                     <path
                     stroke-linecap="butt"
                     stroke-linejoin="miter"
                     fill-opacity="0"
                     stroke-miterlimit="4"
                     stroke="rgb(143,143,143)"
                     stroke-opacity="1"
                     stroke-width="0.98"
                     d=" M-82.69999694824219,-17.100000381469727 C-82.69999694824219,-17.100000381469727 82.80000305175781,-17.100000381469727 82.80000305175781,-17.100000381469727 C84.19999694824219,-17.100000381469727 85.19999694824219,-16 85.19999694824219,-14.699999809265137 C85.19999694824219,-14.699999809265137 85.19999694824219,14.699999809265137 85.19999694824219,14.699999809265137 C85.19999694824219,16.100000381469727 84.0999984741211,17.100000381469727 82.80000305175781,17.100000381469727 C82.80000305175781,17.100000381469727 -82.69999694824219,17.100000381469727 -82.69999694824219,17.100000381469727 C-84.0999984741211,17.100000381469727 -85.0999984741211,16 -85.0999984741211,14.699999809265137 C-85.0999984741211,14.699999809265137 -85.0999984741211,-14.699999809265137 -85.0999984741211,-14.699999809265137 C-85.19999694824219,-16 -84.0999984741211,-17.100000381469727 -82.69999694824219,-17.100000381469727z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,392.6000061035156,431.1000061035156)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-18.399999618530273,-4.900000095367432 C-18.399999618530273,-4.900000095367432 -18.399999618530273,-3.5 -18.399999618530273,-3.5 C-18.399999618530273,-3.5 -21.299999237060547,-3.5 -21.299999237060547,-3.5 C-21.299999237060547,-3.5 -21.299999237060547,4.800000190734863 -21.299999237060547,4.800000190734863 C-21.299999237060547,4.800000190734863 -23.100000381469727,4.800000190734863 -23.100000381469727,4.800000190734863 C-23.100000381469727,4.800000190734863 -23.100000381469727,-3.5 -23.100000381469727,-3.5 C-23.100000381469727,-3.5 -26,-3.5 -26,-3.5 C-26,-3.5 -26,-4.900000095367432 -26,-4.900000095367432 C-26,-4.900000095367432 -18.399999618530273,-4.900000095367432 -18.399999618530273,-4.900000095367432z M-16.399999618530273,-0.30000001192092896 C-16.200000762939453,-0.8999999761581421 -15.899999618530273,-1.2999999523162842 -15.600000381469727,-1.600000023841858 C-15.199999809265137,-1.899999976158142 -14.800000190734863,-2.0999999046325684 -14.199999809265137,-2.0999999046325684 C-14.199999809265137,-2.0999999046325684 -14,-2.0999999046325684 -14,-2.0999999046325684 C-14,-2.0999999046325684 -14,-0.5 -14,-0.5 C-14,-0.5 -14.199999809265137,-0.5 -14.199999809265137,-0.5 C-14.800000190734863,-0.5 -15.300000190734863,-0.30000001192092896 -15.600000381469727,0 C-15.800000190734863,0.20000000298023224 -16,0.5 -16.100000381469727,0.8999999761581421 C-16.200000762939453,1.2000000476837158 -16.200000762939453,1.600000023841858 -16.200000762939453,2.0999999046325684 C-16.200000762939453,2.0999999046325684 -16.200000762939453,5 -16.200000762939453,5 C-16.200000762939453,5 -17.799999237060547,5 -17.799999237060547,5 C-17.799999237060547,5 -17.799999237060547,-1.899999976158142 -17.799999237060547,-1.899999976158142 C-17.799999237060547,-1.899999976158142 -16.299999237060547,-1.899999976158142 -16.299999237060547,-1.899999976158142 C-16.299999237060547,-1.899999976158142 -16.299999237060547,-0.30000001192092896 -16.299999237060547,-0.30000001192092896 C-16.299999237060547,-0.30000001192092896 -16.399999618530273,-0.30000001192092896 -16.399999618530273,-0.30000001192092896z M-11.100000381469727,5 C-11.800000190734863,5 -12.399999618530273,4.800000190734863 -12.800000190734863,4.5 C-13.199999809265137,4.099999904632568 -13.399999618530273,3.5999999046325684 -13.399999618530273,3 C-13.399999618530273,2.700000047683716 -13.300000190734863,2.4000000953674316 -13.199999809265137,2.0999999046325684 C-13.100000381469727,1.7999999523162842 -12.800000190734863,1.600000023841858 -12.600000381469727,1.399999976158142 C-12.399999618530273,1.2999999523162842 -12.100000381469727,1.100000023841858 -11.699999809265137,1 C-11.399999618530273,0.8999999761581421 -10.899999618530273,0.800000011920929 -10.399999618530273,0.699999988079071 C-10.399999618530273,0.699999988079071 -8.899999618530273,0.5 -8.899999618530273,0.5 C-8.899999618530273,0.5 -8.899999618530273,0.30000001192092896 -8.899999618530273,0.30000001192092896 C-8.899999618530273,-0.20000000298023224 -9,-0.6000000238418579 -9.199999809265137,-0.800000011920929 C-9.399999618530273,-1 -9.699999809265137,-1.2000000476837158 -10.199999809265137,-1.2000000476837158 C-10.600000381469727,-1.2000000476837158 -10.899999618530273,-1.100000023841858 -11.199999809265137,-0.8999999761581421 C-11.399999618530273,-0.699999988079071 -11.600000381469727,-0.4000000059604645 -11.600000381469727,0 C-11.600000381469727,0 -13.300000190734863,0 -13.300000190734863,0 C-13.199999809265137,-0.699999988079071 -12.899999618530273,-1.2999999523162842 -12.399999618530273,-1.7000000476837158 C-11.899999618530273,-2.0999999046325684 -11.100000381469727,-2.299999952316284 -10.300000190734863,-2.299999952316284 C-9.300000190734863,-2.299999952316284 -8.5,-2.0999999046325684 -8.100000381469727,-1.600000023841858 C-7.599999904632568,-1.2000000476837158 -7.400000095367432,-0.4000000059604645 -7.400000095367432,0.6000000238418579 C-7.400000095367432,0.6000000238418579 -7.400000095367432,2.5999999046325684 -7.400000095367432,2.5999999046325684 C-7.400000095367432,3.5 -7.300000190734863,4.199999809265137 -7.199999809265137,4.699999809265137 C-7.199999809265137,4.699999809265137 -8.800000190734863,4.699999809265137 -8.800000190734863,4.699999809265137 C-8.899999618530273,4.300000190734863 -8.899999618530273,3.9000000953674316 -8.899999618530273,3.5 C-9.100000381469727,3.9000000953674316 -9.399999618530273,4.300000190734863 -9.800000190734863,4.5 C-10.100000381469727,4.900000095367432 -10.5,5 -11.100000381469727,5z M-10.600000381469727,3.9000000953674316 C-10.100000381469727,3.9000000953674316 -9.699999809265137,3.700000047683716 -9.399999618530273,3.4000000953674316 C-9.100000381469727,3.0999999046325684 -8.899999618530273,2.5999999046325684 -8.899999618530273,2.0999999046325684 C-8.899999618530273,2.0999999046325684 -8.899999618530273,1.7000000476837158 -8.899999618530273,1.7000000476837158 C-8.899999618530273,1.7000000476837158 -10.399999618530273,1.899999976158142 -10.399999618530273,1.899999976158142 C-10.899999618530273,2 -11.199999809265137,2.0999999046325684 -11.399999618530273,2.299999952316284 C-11.600000381469727,2.5 -11.699999809265137,2.700000047683716 -11.699999809265137,3 C-11.699999809265137,3.299999952316284 -11.600000381469727,3.5 -11.399999618530273,3.700000047683716 C-11.199999809265137,3.799999952316284 -10.899999618530273,3.9000000953674316 -10.600000381469727,3.9000000953674316z M-5.199999809265137,-2 C-5.199999809265137,-2 -3.5999999046325684,-2 -3.5999999046325684,-2 C-3.5999999046325684,-2 -3.5999999046325684,-0.699999988079071 -3.5999999046325684,-0.699999988079071 C-3.0999999046325684,-1.7000000476837158 -2.4000000953674316,-2.200000047683716 -1.2999999523162842,-2.200000047683716 C-0.6000000238418579,-2.200000047683716 0,-2 0.4000000059604645,-1.5 C0.800000011920929,-1 1,-0.30000001192092896 1,0.6000000238418579 C1,0.6000000238418579 1,4.900000095367432 1,4.900000095367432 C1,4.900000095367432 -0.699999988079071,4.900000095367432 -0.699999988079071,4.900000095367432 C-0.699999988079071,4.900000095367432 -0.699999988079071,0.800000011920929 -0.699999988079071,0.800000011920929 C-0.699999988079071,-0.30000001192092896 -1.100000023841858,-0.800000011920929 -2,-0.800000011920929 C-2.5,-0.800000011920929 -2.9000000953674316,-0.6000000238418579 -3.0999999046325684,-0.30000001192092896 C-3.4000000953674316,0.10000000149011612 -3.5,0.6000000238418579 -3.5,1.2000000476837158 C-3.5,1.2000000476837158 -3.5,4.800000190734863 -3.5,4.800000190734863 C-3.5,4.800000190734863 -5.099999904632568,4.800000190734863 -5.099999904632568,4.800000190734863 C-5.099999904632568,4.800000190734863 -5.099999904632568,-2 -5.099999904632568,-2 C-5.099999904632568,-2 -5.199999809265137,-2 -5.199999809265137,-2z M5.400000095367432,5 C4.599999904632568,5 3.9000000953674316,4.800000190734863 3.4000000953674316,4.5 C2.9000000953674316,4.199999809265137 2.5,3.700000047683716 2.200000047683716,3 C2.200000047683716,3 3.4000000953674316,2.5 3.4000000953674316,2.5 C3.5999999046325684,2.9000000953674316 3.799999952316284,3.299999952316284 4.199999809265137,3.5 C4.5,3.700000047683716 5,3.799999952316284 5.400000095367432,3.799999952316284 C5.800000190734863,3.799999952316284 6.099999904632568,3.700000047683716 6.300000190734863,3.5999999046325684 C6.5,3.5 6.599999904632568,3.200000047683716 6.599999904632568,3 C6.599999904632568,2.700000047683716 6.5,2.5 6.400000095367432,2.4000000953674316 C6.199999809265137,2.299999952316284 6,2.200000047683716 5.599999904632568,2.0999999046325684 C5.599999904632568,2.0999999046325684 4.599999904632568,2 4.599999904632568,2 C3.9000000953674316,1.899999976158142 3.4000000953674316,1.7000000476837158 3,1.2999999523162842 C2.700000047683716,0.8999999761581421 2.5,0.5 2.5,-0.10000000149011612 C2.5,-0.699999988079071 2.700000047683716,-1.2000000476837158 3.200000047683716,-1.600000023841858 C3.700000047683716,-2 4.400000095367432,-2.200000047683716 5.199999809265137,-2.200000047683716 C5.900000095367432,-2.200000047683716 6.599999904632568,-2 7.099999904632568,-1.7000000476837158 C7.599999904632568,-1.399999976158142 8,-1 8.100000381469727,-0.4000000059604645 C8.100000381469727,-0.4000000059604645 7,0.20000000298023224 7,0.20000000298023224 C6.800000190734863,-0.20000000298023224 6.599999904632568,-0.4000000059604645 6.300000190734863,-0.6000000238418579 C6,-0.800000011920929 5.599999904632568,-0.8999999761581421 5.199999809265137,-0.8999999761581421 C4.800000190734863,-0.8999999761581421 4.5,-0.800000011920929 4.300000190734863,-0.699999988079071 C4.099999904632568,-0.6000000238418579 4,-0.4000000059604645 4,-0.10000000149011612 C4,0.10000000149011612 4.099999904632568,0.30000001192092896 4.199999809265137,0.5 C4.400000095367432,0.6000000238418579 4.599999904632568,0.699999988079071 5,0.800000011920929 C5,0.800000011920929 6.199999809265137,1 6.199999809265137,1 C6.900000095367432,1.100000023841858 7.400000095367432,1.2999999523162842 7.699999809265137,1.600000023841858 C8,1.899999976158142 8.199999809265137,2.4000000953674316 8.199999809265137,3 C8.199999809265137,3.700000047683716 7.900000095367432,4.199999809265137 7.400000095367432,4.599999904632568 C6.900000095367432,4.900000095367432 6.300000190734863,5 5.400000095367432,5z M13.399999618530273,-0.800000011920929 C13.399999618530273,-0.800000011920929 11.699999809265137,-0.800000011920929 11.699999809265137,-0.800000011920929 C11.699999809265137,-0.800000011920929 11.699999809265137,4.900000095367432 11.699999809265137,4.900000095367432 C11.699999809265137,4.900000095367432 10.100000381469727,4.900000095367432 10.100000381469727,4.900000095367432 C10.100000381469727,4.900000095367432 10.100000381469727,-0.800000011920929 10.100000381469727,-0.800000011920929 C10.100000381469727,-0.800000011920929 8.899999618530273,-0.800000011920929 8.899999618530273,-0.800000011920929 C8.899999618530273,-0.800000011920929 8.899999618530273,-2 8.899999618530273,-2 C8.899999618530273,-2 10.100000381469727,-2 10.100000381469727,-2 C10.100000381469727,-2 10.100000381469727,-2.9000000953674316 10.100000381469727,-2.9000000953674316 C10.100000381469727,-3.5999999046325684 10.300000190734863,-4.199999809265137 10.699999809265137,-4.599999904632568 C11.100000381469727,-5 11.699999809265137,-5.199999809265137 12.399999618530273,-5.199999809265137 C12.699999809265137,-5.199999809265137 13.100000381469727,-5.199999809265137 13.399999618530273,-5.099999904632568 C13.399999618530273,-5.099999904632568 13.399999618530273,-3.799999952316284 13.399999618530273,-3.799999952316284 C13.100000381469727,-3.799999952316284 12.899999618530273,-3.9000000953674316 12.699999809265137,-3.9000000953674316 C12.399999618530273,-3.9000000953674316 12.100000381469727,-3.799999952316284 12,-3.5999999046325684 C11.800000190734863,-3.4000000953674316 11.800000190734863,-3.200000047683716 11.800000190734863,-2.799999952316284 C11.800000190734863,-2.799999952316284 11.800000190734863,-2 11.800000190734863,-2 C11.800000190734863,-2 13.5,-2 13.5,-2 C13.5,-2 13.5,-0.800000011920929 13.5,-0.800000011920929 C13.5,-0.800000011920929 13.399999618530273,-0.800000011920929 13.399999618530273,-0.800000011920929z M20.299999237060547,1.899999976158142 C20.299999237060547,1.899999976158142 15.5,1.899999976158142 15.5,1.899999976158142 C15.5,2.5 15.699999809265137,2.9000000953674316 16,3.299999952316284 C16.299999237060547,3.5999999046325684 16.799999237060547,3.799999952316284 17.299999237060547,3.799999952316284 C17.700000762939453,3.799999952316284 18,3.700000047683716 18.299999237060547,3.5 C18.600000381469727,3.299999952316284 18.799999237060547,3 19,2.700000047683716 C19,2.700000047683716 20.299999237060547,3.299999952316284 20.299999237060547,3.299999952316284 C20,3.9000000953674316 19.700000762939453,4.400000095367432 19.100000381469727,4.699999809265137 C18.600000381469727,5 18,5.199999809265137 17.299999237060547,5.199999809265137 C16.200000762939453,5.199999809265137 15.399999618530273,4.900000095367432 14.800000190734863,4.300000190734863 C14.199999809265137,3.700000047683716 13.899999618530273,2.799999952316284 13.899999618530273,1.7000000476837158 C13.899999618530273,0.6000000238418579 14.199999809265137,-0.30000001192092896 14.800000190734863,-1 C15.399999618530273,-1.7000000476837158 16.200000762939453,-2 17.200000762939453,-2 C18.200000762939453,-2 19,-1.7000000476837158 19.5,-1.2000000476837158 C20,-0.6000000238418579 20.299999237060547,0.20000000298023224 20.299999237060547,1.2000000476837158 C20.299999237060547,1.2000000476837158 20.299999237060547,1.899999976158142 20.299999237060547,1.899999976158142z M18.700000762939453,0.699999988079071 C18.700000762939453,0.10000000149011612 18.600000381469727,-0.30000001192092896 18.299999237060547,-0.6000000238418579 C18,-0.8999999761581421 17.700000762939453,-1 17.200000762939453,-1 C16.700000762939453,-1 16.299999237060547,-0.800000011920929 16,-0.5 C15.699999809265137,-0.20000000298023224 15.600000381469727,0.30000001192092896 15.5,0.800000011920929 C15.5,0.800000011920929 18.700000762939453,0.800000011920929 18.700000762939453,0.800000011920929 C18.700000762939453,0.800000011920929 18.700000762939453,0.699999988079071 18.700000762939453,0.699999988079071z M23.600000381469727,-0.30000001192092896 C23.799999237060547,-0.8999999761581421 24.100000381469727,-1.2999999523162842 24.399999618530273,-1.600000023841858 C24.799999237060547,-1.899999976158142 25.200000762939453,-2.0999999046325684 25.799999237060547,-2.0999999046325684 C25.799999237060547,-2.0999999046325684 26,-2.0999999046325684 26,-2.0999999046325684 C26,-2.0999999046325684 26,-0.5 26,-0.5 C26,-0.5 25.799999237060547,-0.5 25.799999237060547,-0.5 C25.200000762939453,-0.5 24.700000762939453,-0.30000001192092896 24.399999618530273,0 C24.200000762939453,0.20000000298023224 24,0.5 23.899999618530273,0.8999999761581421 C23.799999237060547,1.2000000476837158 23.799999237060547,1.600000023841858 23.799999237060547,2.0999999046325684 C23.799999237060547,2.0999999046325684 23.799999237060547,5 23.799999237060547,5 C23.799999237060547,5 22.200000762939453,5 22.200000762939453,5 C22.200000762939453,5 22.200000762939453,-1.899999976158142 22.200000762939453,-1.899999976158142 C22.200000762939453,-1.899999976158142 23.700000762939453,-1.899999976158142 23.700000762939453,-1.899999976158142 C23.700000762939453,-1.899999976158142 23.700000762939453,-0.30000001192092896 23.700000762939453,-0.30000001192092896 C23.700000762939453,-0.30000001192092896 23.600000381469727,-0.30000001192092896 23.600000381469727,-0.30000001192092896z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,162.9499969482422,175.9499969482422)"
                  >
                     <path
                     fill="rgb(245,245,245)"
                     fill-opacity="1"
                     d=" M-27.450000762939453,-35.25 C-27.450000762939453,-35.25 27.450000762939453,-35.25 27.450000762939453,-35.25 C31.75,-35.25 35.25,-31.75 35.25,-27.450000762939453 C35.25,-27.450000762939453 35.25,27.450000762939453 35.25,27.450000762939453 C35.25,31.75 31.75,35.25 27.450000762939453,35.25 C27.450000762939453,35.25 -27.450000762939453,35.25 -27.450000762939453,35.25 C-31.75,35.25 -35.25,31.75 -35.25,27.450000762939453 C-35.25,27.450000762939453 -35.25,-27.450000762939453 -35.25,-27.450000762939453 C-35.25,-31.75 -31.75,-35.25 -27.450000762939453,-35.25z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,162.9499969482422,175.89999389648438)"
                  >
                     <path
                     fill="rgb(33,73,78)"
                     fill-opacity="1"
                     d=" M-21.549999237060547,-13.699999809265137 C-21.549999237060547,-13.699999809265137 21.549999237060547,-13.699999809265137 21.549999237060547,-13.699999809265137 C21.549999237060547,-13.699999809265137 21.549999237060547,13.699999809265137 21.549999237060547,13.699999809265137 C21.549999237060547,13.699999809265137 -21.549999237060547,13.699999809265137 -21.549999237060547,13.699999809265137 C-21.549999237060547,13.699999809265137 -21.549999237060547,-13.699999809265137 -21.549999237060547,-13.699999809265137z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,162.9499969482422,172.9499969482422)"
                  >
                     <path
                     fill="rgb(102,194,204)"
                     fill-opacity="1"
                     d=" M-21.549999237060547,-10.75 C-21.549999237060547,-10.75 21.549999237060547,-10.75 21.549999237060547,-10.75 C21.549999237060547,-10.75 21.549999237060547,10.75 21.549999237060547,10.75 C21.549999237060547,10.75 -21.549999237060547,10.75 -21.549999237060547,10.75 C-21.549999237060547,10.75 -21.549999237060547,-10.75 -21.549999237060547,-10.75z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,162.89999389648438,173)"
                  >
                     <path
                     fill="rgb(55,121,130)"
                     fill-opacity="1"
                     d=" M0,-5.900000095367432 C3.257999897003174,-5.900000095367432 5.900000095367432,-3.257999897003174 5.900000095367432,0 C5.900000095367432,3.257999897003174 3.257999897003174,5.900000095367432 0,5.900000095367432 C-3.257999897003174,5.900000095367432 -5.900000095367432,3.257999897003174 -5.900000095367432,0 C-5.900000095367432,-3.257999897003174 -3.257999897003174,-5.900000095367432 0,-5.900000095367432z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,183.3000030517578,240.64999389648438)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-49.099998474121094,6.550000190734863 C-50.400001525878906,6.550000190734863 -51.400001525878906,6.25 -52.29999923706055,5.75 C-53.20000076293945,5.150000095367432 -53.79999923706055,4.449999809265137 -54.29999923706055,3.450000047683716 C-54.70000076293945,2.450000047683716 -55,1.350000023841858 -55,0.05000000074505806 C-55,-1.25 -54.79999923706055,-2.3499999046325684 -54.29999923706055,-3.3499999046325684 C-53.79999923706055,-4.349999904632568 -53.20000076293945,-5.150000095367432 -52.29999923706055,-5.650000095367432 C-51.400001525878906,-6.25 -50.400001525878906,-6.449999809265137 -49.099998474121094,-6.449999809265137 C-47.599998474121094,-6.449999809265137 -46.400001525878906,-6.050000190734863 -45.5,-5.25 C-44.599998474121094,-4.449999809265137 -44.099998474121094,-3.3499999046325684 -43.900001525878906,-2.049999952316284 C-43.900001525878906,-2.049999952316284 -46.20000076293945,-1.75 -46.20000076293945,-1.75 C-46.29999923706055,-2.6500000953674316 -46.599998474121094,-3.3499999046325684 -47.099998474121094,-3.8499999046325684 C-47.599998474121094,-4.349999904632568 -48.29999923706055,-4.650000095367432 -49.099998474121094,-4.650000095367432 C-50.20000076293945,-4.650000095367432 -51,-4.25 -51.70000076293945,-3.3499999046325684 C-52.29999923706055,-2.549999952316284 -52.599998474121094,-1.350000023841858 -52.599998474121094,0.05000000074505806 C-52.599998474121094,1.4500000476837158 -52.29999923706055,2.549999952316284 -51.70000076293945,3.450000047683716 C-51.099998474121094,4.349999904632568 -50.20000076293945,4.75 -49.099998474121094,4.75 C-48.29999923706055,4.75 -47.599998474121094,4.550000190734863 -47.099998474121094,4.050000190734863 C-46.599998474121094,3.549999952316284 -46.20000076293945,2.8499999046325684 -46.099998474121094,1.9500000476837158 C-46.099998474121094,1.9500000476837158 -43.79999923706055,2.450000047683716 -43.79999923706055,2.450000047683716 C-44.099998474121094,3.75 -44.70000076293945,4.849999904632568 -45.599998474121094,5.550000190734863 C-46.5,6.150000095367432 -47.599998474121094,6.550000190734863 -49.099998474121094,6.550000190734863z M-39.5,6.449999809265137 C-40.400001525878906,6.449999809265137 -41.099998474121094,6.25 -41.70000076293945,5.75 C-42.20000076293945,5.25 -42.5,4.650000095367432 -42.5,3.8499999046325684 C-42.5,3.450000047683716 -42.400001525878906,3.049999952316284 -42.20000076293945,2.75 C-42,2.450000047683716 -41.70000076293945,2.1500000953674316 -41.400001525878906,1.9500000476837158 C-41.099998474121094,1.75 -40.70000076293945,1.649999976158142 -40.29999923706055,1.4500000476837158 C-39.900001525878906,1.350000023841858 -39.29999923706055,1.25 -38.599998474121094,1.149999976158142 C-38.599998474121094,1.149999976158142 -36.70000076293945,0.949999988079071 -36.70000076293945,0.949999988079071 C-36.70000076293945,0.949999988079071 -36.70000076293945,0.75 -36.70000076293945,0.75 C-36.70000076293945,0.05000000074505806 -36.79999923706055,-0.3499999940395355 -37.099998474121094,-0.6499999761581421 C-37.400001525878906,-0.949999988079071 -37.79999923706055,-1.149999976158142 -38.29999923706055,-1.149999976158142 C-38.79999923706055,-1.149999976158142 -39.20000076293945,-1.0499999523162842 -39.5,-0.75 C-39.79999923706055,-0.44999998807907104 -40,-0.15000000596046448 -40,0.3499999940395355 C-40,0.3499999940395355 -42.20000076293945,0.3499999940395355 -42.20000076293945,0.3499999940395355 C-42.099998474121094,-0.550000011920929 -41.70000076293945,-1.350000023841858 -41.099998474121094,-1.850000023841858 C-40.400001525878906,-2.450000047683716 -39.5,-2.6500000953674316 -38.29999923706055,-2.6500000953674316 C-37,-2.6500000953674316 -36,-2.3499999046325684 -35.400001525878906,-1.75 C-34.79999923706055,-1.149999976158142 -34.5,-0.25 -34.5,1.0499999523162842 C-34.5,1.0499999523162842 -34.5,3.6500000953674316 -34.5,3.6500000953674316 C-34.5,4.849999904632568 -34.400001525878906,5.75 -34.20000076293945,6.349999904632568 C-34.20000076293945,6.349999904632568 -36.29999923706055,6.349999904632568 -36.29999923706055,6.349999904632568 C-36.400001525878906,5.849999904632568 -36.400001525878906,5.349999904632568 -36.400001525878906,4.849999904632568 C-36.599998474121094,5.349999904632568 -37,5.849999904632568 -37.5,6.150000095367432 C-38.099998474121094,6.25 -38.79999923706055,6.449999809265137 -39.5,6.449999809265137z M-38.79999923706055,4.949999809265137 C-38.099998474121094,4.949999809265137 -37.599998474121094,4.75 -37.20000076293945,4.349999904632568 C-36.79999923706055,3.950000047683716 -36.599998474121094,3.3499999046325684 -36.599998474121094,2.6500000953674316 C-36.599998474121094,2.6500000953674316 -36.599998474121094,2.049999952316284 -36.599998474121094,2.049999952316284 C-36.599998474121094,2.049999952316284 -38.599998474121094,2.3499999046325684 -38.599998474121094,2.3499999046325684 C-39.20000076293945,2.450000047683716 -39.599998474121094,2.6500000953674316 -39.900001525878906,2.8499999046325684 C-40.20000076293945,3.049999952316284 -40.29999923706055,3.3499999046325684 -40.29999923706055,3.75 C-40.29999923706055,4.150000095367432 -40.20000076293945,4.449999809265137 -39.900001525878906,4.650000095367432 C-39.599998474121094,4.849999904632568 -39.29999923706055,4.949999809265137 -38.79999923706055,4.949999809265137z M-28.799999237060547,6.449999809265137 C-29.799999237060547,6.449999809265137 -30.700000762939453,6.25 -31.399999618530273,5.75 C-32.099998474121094,5.349999904632568 -32.599998474121094,4.650000095367432 -32.900001525878906,3.8499999046325684 C-32.900001525878906,3.8499999046325684 -31.299999237060547,3.1500000953674316 -31.299999237060547,3.1500000953674316 C-31.100000381469727,3.75 -30.799999237060547,4.150000095367432 -30.299999237060547,4.449999809265137 C-29.899999618530273,4.75 -29.299999237060547,4.849999904632568 -28.700000762939453,4.849999904632568 C-28.200000762939453,4.849999904632568 -27.799999237060547,4.75 -27.5,4.550000190734863 C-27.200000762939453,4.349999904632568 -27.100000381469727,4.050000190734863 -27.100000381469727,3.75 C-27.100000381469727,3.3499999046325684 -27.200000762939453,3.1500000953674316 -27.399999618530273,2.950000047683716 C-27.600000381469727,2.75 -27.899999618530273,2.6500000953674316 -28.399999618530273,2.549999952316284 C-28.399999618530273,2.549999952316284 -29.700000762939453,2.3499999046325684 -29.700000762939453,2.3499999046325684 C-30.600000381469727,2.25 -31.299999237060547,1.9500000476837158 -31.700000762939453,1.5499999523162842 C-32.099998474121094,1.0499999523162842 -32.400001525878906,0.44999998807907104 -32.400001525878906,-0.25 C-32.400001525878906,-1.0499999523162842 -32.099998474121094,-1.75 -31.399999618530273,-2.25 C-30.799999237060547,-2.75 -29.899999618530273,-2.950000047683716 -28.799999237060547,-2.950000047683716 C-27.799999237060547,-2.950000047683716 -27,-2.75 -26.399999618530273,-2.3499999046325684 C-25.700000762939453,-1.9500000476837158 -25.299999237060547,-1.4500000476837158 -25.100000381469727,-0.75 C-25.100000381469727,-0.75 -26.600000381469727,0.05000000074505806 -26.600000381469727,0.05000000074505806 C-26.799999237060547,-0.44999998807907104 -27.100000381469727,-0.75 -27.5,-1.0499999523162842 C-27.899999618530273,-1.350000023841858 -28.399999618530273,-1.4500000476837158 -28.899999618530273,-1.4500000476837158 C-29.399999618530273,-1.4500000476837158 -29.799999237060547,-1.350000023841858 -30.100000381469727,-1.149999976158142 C-30.399999618530273,-0.949999988079071 -30.5,-0.75 -30.5,-0.3499999940395355 C-30.5,-0.05000000074505806 -30.399999618530273,0.15000000596046448 -30.200000762939453,0.3499999940395355 C-30,0.550000011920929 -29.600000381469727,0.6499999761581421 -29.200000762939453,0.6499999761581421 C-29.200000762939453,0.6499999761581421 -27.700000762939453,0.8500000238418579 -27.700000762939453,0.8500000238418579 C-26.799999237060547,0.949999988079071 -26.200000762939453,1.25 -25.799999237060547,1.649999976158142 C-25.399999618530273,2.049999952316284 -25.200000762939453,2.6500000953674316 -25.200000762939453,3.450000047683716 C-25.200000762939453,4.349999904632568 -25.5,5.050000190734863 -26.200000762939453,5.449999809265137 C-26.700000762939453,6.150000095367432 -27.600000381469727,6.449999809265137 -28.799999237060547,6.449999809265137z M-23,-6.550000190734863 C-23,-6.550000190734863 -20.899999618530273,-6.550000190734863 -20.899999618530273,-6.550000190734863 C-20.899999618530273,-6.550000190734863 -20.899999618530273,-0.949999988079071 -20.899999618530273,-0.949999988079071 C-20.399999618530273,-2.1500000953674316 -19.399999618530273,-2.8499999046325684 -18.100000381469727,-2.8499999046325684 C-17.100000381469727,-2.8499999046325684 -16.399999618530273,-2.549999952316284 -15.899999618530273,-1.9500000476837158 C-15.399999618530273,-1.350000023841858 -15.199999809265137,-0.44999998807907104 -15.199999809265137,0.75 C-15.199999809265137,0.75 -15.199999809265137,6.25 -15.199999809265137,6.25 C-15.199999809265137,6.25 -17.299999237060547,6.25 -17.299999237060547,6.25 C-17.299999237060547,6.25 -17.299999237060547,0.949999988079071 -17.299999237060547,0.949999988079071 C-17.299999237060547,0.25 -17.399999618530273,-0.25 -17.700000762939453,-0.550000011920929 C-18,-0.949999988079071 -18.399999618530273,-1.0499999523162842 -18.899999618530273,-1.0499999523162842 C-19.5,-1.0499999523162842 -20,-0.8500000238418579 -20.399999618530273,-0.3499999940395355 C-20.700000762939453,0.15000000596046448 -20.899999618530273,0.75 -20.899999618530273,1.649999976158142 C-20.899999618530273,1.649999976158142 -20.899999618530273,6.349999904632568 -20.899999618530273,6.349999904632568 C-20.899999618530273,6.349999904632568 -23,6.349999904632568 -23,6.349999904632568 C-23,6.349999904632568 -23,-6.550000190734863 -23,-6.550000190734863z M-3.5,1.149999976158142 C-3.5,1.149999976158142 -5.699999809265137,1.149999976158142 -5.699999809265137,1.149999976158142 C-5.699999809265137,1.149999976158142 -5.699999809265137,6.150000095367432 -5.699999809265137,6.150000095367432 C-5.699999809265137,6.150000095367432 -8,6.150000095367432 -8,6.150000095367432 C-8,6.150000095367432 -8,-6.349999904632568 -8,-6.349999904632568 C-8,-6.349999904632568 -3,-6.349999904632568 -3,-6.349999904632568 C-1.5,-6.349999904632568 -0.4000000059604645,-6.050000190734863 0.30000001192092896,-5.349999904632568 C1,-4.650000095367432 1.2999999523162842,-3.75 1.2999999523162842,-2.6500000953674316 C1.2999999523162842,-1.850000023841858 1.100000023841858,-1.149999976158142 0.6000000238418579,-0.550000011920929 C0.20000000298023224,0.05000000074505806 -0.5,0.550000011920929 -1.399999976158142,0.75 C-1.399999976158142,0.75 1.600000023841858,6.050000190734863 1.600000023841858,6.050000190734863 C1.600000023841858,6.050000190734863 -0.8999999761581421,6.050000190734863 -0.8999999761581421,6.050000190734863 C-0.8999999761581421,6.050000190734863 -3.5,1.149999976158142 -3.5,1.149999976158142z M-5.699999809265137,-0.550000011920929 C-5.699999809265137,-0.550000011920929 -3.299999952316284,-0.550000011920929 -3.299999952316284,-0.550000011920929 C-2.5,-0.550000011920929 -1.899999976158142,-0.75 -1.5,-1.0499999523162842 C-1.100000023841858,-1.4500000476837158 -0.8999999761581421,-1.9500000476837158 -0.8999999761581421,-2.549999952316284 C-0.8999999761581421,-3.950000047683716 -1.7000000476837158,-4.550000190734863 -3.200000047683716,-4.550000190734863 C-3.200000047683716,-4.550000190734863 -5.599999904632568,-4.550000190734863 -5.599999904632568,-4.550000190734863 C-5.599999904632568,-4.550000190734863 -5.599999904632568,-0.550000011920929 -5.599999904632568,-0.550000011920929 C-5.599999904632568,-0.550000011920929 -5.699999809265137,-0.550000011920929 -5.699999809265137,-0.550000011920929z M11,2.3499999046325684 C11,2.3499999046325684 4.800000190734863,2.3499999046325684 4.800000190734863,2.3499999046325684 C4.800000190734863,3.049999952316284 5,3.6500000953674316 5.5,4.150000095367432 C5.900000095367432,4.550000190734863 6.5,4.849999904632568 7.199999809265137,4.849999904632568 C7.699999809265137,4.849999904632568 8.100000381469727,4.75 8.5,4.449999809265137 C8.899999618530273,4.25 9.100000381469727,3.8499999046325684 9.300000190734863,3.3499999046325684 C9.300000190734863,3.3499999046325684 10.899999618530273,4.050000190734863 10.899999618530273,4.050000190734863 C10.600000381469727,4.849999904632568 10.100000381469727,5.449999809265137 9.399999618530273,5.849999904632568 C8.699999809265137,6.25 8,6.449999809265137 7.099999904632568,6.449999809265137 C5.699999809265137,6.449999809265137 4.699999809265137,6.050000190734863 3.9000000953674316,5.25 C3.0999999046325684,4.449999809265137 2.799999952316284,3.3499999046325684 2.799999952316284,1.850000023841858 C2.799999952316284,0.3499999940395355 3.200000047683716,-0.75 3.9000000953674316,-1.5499999523162842 C4.699999809265137,-2.3499999046325684 5.699999809265137,-2.8499999046325684 7,-2.8499999046325684 C8.300000190734863,-2.8499999046325684 9.300000190734863,-2.450000047683716 10,-1.75 C10.699999809265137,-1.0499999523162842 11.100000381469727,-0.05000000074505806 11.100000381469727,1.350000023841858 C11.100000381469727,1.350000023841858 11.100000381469727,2.3499999046325684 11.100000381469727,2.3499999046325684 C11.100000381469727,2.3499999046325684 11,2.3499999046325684 11,2.3499999046325684z M8.899999618530273,0.8500000238418579 C8.899999618530273,0.15000000596046448 8.699999809265137,-0.44999998807907104 8.399999618530273,-0.75 C8.100000381469727,-1.149999976158142 7.599999904632568,-1.350000023841858 6.900000095367432,-1.350000023841858 C6.199999809265137,-1.350000023841858 5.699999809265137,-1.149999976158142 5.300000190734863,-0.75 C4.900000095367432,-0.3499999940395355 4.699999809265137,0.25 4.699999809265137,0.949999988079071 C4.699999809265137,0.949999988079071 8.800000190734863,0.949999988079071 8.800000190734863,0.949999988079071 C8.800000190734863,0.949999988079071 8.800000190734863,0.8500000238418579 8.800000190734863,0.8500000238418579 C8.800000190734863,0.8500000238418579 8.899999618530273,0.8500000238418579 8.899999618530273,0.8500000238418579z M16.200000762939453,6.449999809265137 C15.199999809265137,6.449999809265137 14.300000190734863,6.25 13.600000381469727,5.75 C12.899999618530273,5.349999904632568 12.399999618530273,4.650000095367432 12.100000381469727,3.8499999046325684 C12.100000381469727,3.8499999046325684 13.699999809265137,3.1500000953674316 13.699999809265137,3.1500000953674316 C13.899999618530273,3.75 14.199999809265137,4.150000095367432 14.699999809265137,4.449999809265137 C15.100000381469727,4.75 15.699999809265137,4.849999904632568 16.299999237060547,4.849999904632568 C16.799999237060547,4.849999904632568 17.200000762939453,4.75 17.5,4.550000190734863 C17.799999237060547,4.349999904632568 17.899999618530273,4.050000190734863 17.899999618530273,3.75 C17.899999618530273,3.3499999046325684 17.799999237060547,3.1500000953674316 17.600000381469727,2.950000047683716 C17.399999618530273,2.75 17.100000381469727,2.6500000953674316 16.600000381469727,2.549999952316284 C16.600000381469727,2.549999952316284 15.300000190734863,2.3499999046325684 15.300000190734863,2.3499999046325684 C14.399999618530273,2.25 13.699999809265137,1.9500000476837158 13.300000190734863,1.5499999523162842 C12.899999618530273,1.0499999523162842 12.600000381469727,0.44999998807907104 12.600000381469727,-0.25 C12.600000381469727,-1.0499999523162842 12.899999618530273,-1.75 13.600000381469727,-2.25 C14.199999809265137,-2.75 15.100000381469727,-2.950000047683716 16.200000762939453,-2.950000047683716 C17.200000762939453,-2.950000047683716 18,-2.75 18.600000381469727,-2.3499999046325684 C19.299999237060547,-1.9500000476837158 19.700000762939453,-1.4500000476837158 19.899999618530273,-0.75 C19.899999618530273,-0.75 18.399999618530273,0.05000000074505806 18.399999618530273,0.05000000074505806 C18.200000762939453,-0.44999998807907104 17.899999618530273,-0.75 17.5,-1.0499999523162842 C17.100000381469727,-1.350000023841858 16.600000381469727,-1.4500000476837158 16.100000381469727,-1.4500000476837158 C15.600000381469727,-1.4500000476837158 15.199999809265137,-1.350000023841858 14.899999618530273,-1.149999976158142 C14.600000381469727,-0.949999988079071 14.5,-0.75 14.5,-0.3499999940395355 C14.5,-0.05000000074505806 14.600000381469727,0.15000000596046448 14.800000190734863,0.3499999940395355 C15,0.550000011920929 15.399999618530273,0.6499999761581421 15.800000190734863,0.6499999761581421 C15.800000190734863,0.6499999761581421 17.299999237060547,0.8500000238418579 17.299999237060547,0.8500000238418579 C18.200000762939453,0.949999988079071 18.799999237060547,1.25 19.200000762939453,1.649999976158142 C19.600000381469727,2.049999952316284 19.799999237060547,2.6500000953674316 19.799999237060547,3.450000047683716 C19.799999237060547,4.349999904632568 19.5,5.050000190734863 18.799999237060547,5.449999809265137 C18.299999237060547,6.150000095367432 17.399999618530273,6.449999809265137 16.200000762939453,6.449999809265137z M29.399999618530273,2.3499999046325684 C29.399999618530273,2.3499999046325684 23.200000762939453,2.3499999046325684 23.200000762939453,2.3499999046325684 C23.200000762939453,3.049999952316284 23.399999618530273,3.6500000953674316 23.899999618530273,4.150000095367432 C24.299999237060547,4.550000190734863 24.899999618530273,4.849999904632568 25.600000381469727,4.849999904632568 C26.100000381469727,4.849999904632568 26.5,4.75 26.899999618530273,4.449999809265137 C27.299999237060547,4.25 27.5,3.8499999046325684 27.700000762939453,3.3499999046325684 C27.700000762939453,3.3499999046325684 29.299999237060547,4.050000190734863 29.299999237060547,4.050000190734863 C29,4.849999904632568 28.5,5.449999809265137 27.799999237060547,5.849999904632568 C27.100000381469727,6.25 26.399999618530273,6.449999809265137 25.5,6.449999809265137 C24.100000381469727,6.449999809265137 23.100000381469727,6.050000190734863 22.299999237060547,5.25 C21.5,4.449999809265137 21.200000762939453,3.3499999046325684 21.200000762939453,1.850000023841858 C21.200000762939453,0.3499999940395355 21.600000381469727,-0.75 22.299999237060547,-1.5499999523162842 C23.100000381469727,-2.3499999046325684 24.100000381469727,-2.8499999046325684 25.399999618530273,-2.8499999046325684 C26.700000762939453,-2.8499999046325684 27.700000762939453,-2.450000047683716 28.399999618530273,-1.75 C29.100000381469727,-1.0499999523162842 29.5,-0.05000000074505806 29.5,1.350000023841858 C29.5,1.350000023841858 29.5,2.3499999046325684 29.5,2.3499999046325684 C29.5,2.3499999046325684 29.399999618530273,2.3499999046325684 29.399999618530273,2.3499999046325684z M27.399999618530273,0.8500000238418579 C27.399999618530273,0.15000000596046448 27.200000762939453,-0.44999998807907104 26.899999618530273,-0.75 C26.600000381469727,-1.149999976158142 26.100000381469727,-1.350000023841858 25.399999618530273,-1.350000023841858 C24.700000762939453,-1.350000023841858 24.200000762939453,-1.149999976158142 23.799999237060547,-0.75 C23.399999618530273,-0.3499999940395355 23.200000762939453,0.25 23.200000762939453,0.949999988079071 C23.200000762939453,0.949999988079071 27.299999237060547,0.949999988079071 27.299999237060547,0.949999988079071 C27.299999237060547,0.949999988079071 27.299999237060547,0.8500000238418579 27.299999237060547,0.8500000238418579 C27.299999237060547,0.8500000238418579 27.399999618530273,0.8500000238418579 27.399999618530273,0.8500000238418579z M33.599998474121094,-0.44999998807907104 C33.79999923706055,-1.149999976158142 34.20000076293945,-1.75 34.70000076293945,-2.1500000953674316 C35.20000076293945,-2.549999952316284 35.79999923706055,-2.75 36.400001525878906,-2.75 C36.400001525878906,-2.75 36.599998474121094,-2.75 36.599998474121094,-2.75 C36.599998474121094,-2.75 36.599998474121094,-0.75 36.599998474121094,-0.75 C36.599998474121094,-0.75 36.29999923706055,-0.75 36.29999923706055,-0.75 C35.5,-0.75 34.900001525878906,-0.550000011920929 34.5,-0.15000000596046448 C34.20000076293945,0.15000000596046448 34,0.550000011920929 33.900001525878906,0.949999988079071 C33.79999923706055,1.350000023841858 33.70000076293945,1.9500000476837158 33.70000076293945,2.549999952316284 C33.70000076293945,2.549999952316284 33.70000076293945,6.25 33.70000076293945,6.25 C33.70000076293945,6.25 31.600000381469727,6.25 31.600000381469727,6.25 C31.600000381469727,6.25 31.600000381469727,-2.549999952316284 31.600000381469727,-2.549999952316284 C31.600000381469727,-2.549999952316284 33.599998474121094,-2.549999952316284 33.599998474121094,-2.549999952316284 C33.599998474121094,-2.549999952316284 33.599998474121094,-0.44999998807907104 33.599998474121094,-0.44999998807907104z M37.599998474121094,-2.549999952316284 C37.599998474121094,-2.549999952316284 39.79999923706055,-2.549999952316284 39.79999923706055,-2.549999952316284 C39.79999923706055,-2.549999952316284 41.5,3.049999952316284 41.5,3.049999952316284 C41.599998474121094,3.3499999046325684 41.70000076293945,3.8499999046325684 41.79999923706055,4.349999904632568 C41.79999923706055,4.349999904632568 41.900001525878906,4.349999904632568 41.900001525878906,4.349999904632568 C42,3.8499999046325684 42.099998474121094,3.450000047683716 42.20000076293945,3.049999952316284 C42.20000076293945,3.049999952316284 43.900001525878906,-2.549999952316284 43.900001525878906,-2.549999952316284 C43.900001525878906,-2.549999952316284 46.099998474121094,-2.549999952316284 46.099998474121094,-2.549999952316284 C46.099998474121094,-2.549999952316284 43,6.25 43,6.25 C43,6.25 40.70000076293945,6.25 40.70000076293945,6.25 C40.70000076293945,6.25 37.599998474121094,-2.549999952316284 37.599998474121094,-2.549999952316284z M54.900001525878906,2.3499999046325684 C54.900001525878906,2.3499999046325684 48.70000076293945,2.3499999046325684 48.70000076293945,2.3499999046325684 C48.70000076293945,3.049999952316284 48.900001525878906,3.6500000953674316 49.400001525878906,4.150000095367432 C49.79999923706055,4.550000190734863 50.400001525878906,4.849999904632568 51.099998474121094,4.849999904632568 C51.599998474121094,4.849999904632568 52,4.75 52.400001525878906,4.449999809265137 C52.79999923706055,4.25 53,3.8499999046325684 53.20000076293945,3.3499999046325684 C53.20000076293945,3.3499999046325684 54.79999923706055,4.050000190734863 54.79999923706055,4.050000190734863 C54.5,4.849999904632568 54,5.449999809265137 53.29999923706055,5.849999904632568 C52.599998474121094,6.25 51.900001525878906,6.449999809265137 51,6.449999809265137 C49.599998474121094,6.449999809265137 48.599998474121094,6.050000190734863 47.79999923706055,5.25 C47,4.449999809265137 46.70000076293945,3.3499999046325684 46.70000076293945,1.850000023841858 C46.70000076293945,0.3499999940395355 47.099998474121094,-0.75 47.79999923706055,-1.5499999523162842 C48.599998474121094,-2.3499999046325684 49.599998474121094,-2.8499999046325684 50.900001525878906,-2.8499999046325684 C52.20000076293945,-2.8499999046325684 53.20000076293945,-2.450000047683716 53.900001525878906,-1.75 C54.599998474121094,-1.0499999523162842 55,-0.05000000074505806 55,1.350000023841858 C55,1.350000023841858 55,2.3499999046325684 55,2.3499999046325684 C55,2.3499999046325684 54.900001525878906,2.3499999046325684 54.900001525878906,2.3499999046325684z M52.79999923706055,0.8500000238418579 C52.79999923706055,0.15000000596046448 52.599998474121094,-0.44999998807907104 52.29999923706055,-0.75 C52,-1.149999976158142 51.5,-1.350000023841858 50.79999923706055,-1.350000023841858 C50.099998474121094,-1.350000023841858 49.599998474121094,-1.149999976158142 49.20000076293945,-0.75 C48.79999923706055,-0.3499999940395355 48.599998474121094,0.25 48.599998474121094,0.949999988079071 C48.599998474121094,0.949999988079071 52.70000076293945,0.949999988079071 52.70000076293945,0.949999988079071 C52.70000076293945,0.949999988079071 52.70000076293945,0.8500000238418579 52.70000076293945,0.8500000238418579 C52.70000076293945,0.8500000238418579 52.79999923706055,0.8500000238418579 52.79999923706055,0.8500000238418579z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,213.1999969482422,274.54998779296875)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-68,4.650000095367432 C-68,6.550000190734863 -68.5999984741211,8.050000190734863 -69.9000015258789,9.050000190734863 C-71.0999984741211,10.050000190734863 -72.80000305175781,10.649999618530273 -74.9000015258789,10.75 C-74.9000015258789,10.75 -74.9000015258789,13.649999618530273 -74.9000015258789,13.649999618530273 C-74.9000015258789,13.649999618530273 -76.30000305175781,13.649999618530273 -76.30000305175781,13.649999618530273 C-76.30000305175781,13.649999618530273 -76.30000305175781,10.75 -76.30000305175781,10.75 C-78.30000305175781,10.649999618530273 -80,9.949999809265137 -81.30000305175781,8.75 C-82.5999984741211,7.550000190734863 -83.4000015258789,5.949999809265137 -83.69999694824219,3.950000047683716 C-83.69999694824219,3.950000047683716 -80.9000015258789,3.3499999046325684 -80.9000015258789,3.3499999046325684 C-80.5999984741211,4.849999904632568 -80.0999984741211,6.050000190734863 -79.4000015258789,6.849999904632568 C-78.5999984741211,7.650000095367432 -77.69999694824219,8.149999618530273 -76.4000015258789,8.350000381469727 C-76.4000015258789,8.350000381469727 -76.4000015258789,0.44999998807907104 -76.4000015258789,0.44999998807907104 C-76.4000015258789,0.44999998807907104 -77.5,0.25 -77.5,0.25 C-79.30000305175781,-0.25 -80.69999694824219,-0.949999988079071 -81.5999984741211,-2.049999952316284 C-82.5,-3.1500000953674316 -83,-4.449999809265137 -83,-5.949999809265137 C-83,-7.75 -82.4000015258789,-9.149999618530273 -81.19999694824219,-10.149999618530273 C-80,-11.25 -78.4000015258789,-11.850000381469727 -76.4000015258789,-11.949999809265137 C-76.4000015258789,-11.949999809265137 -76.4000015258789,-14.75 -76.4000015258789,-14.75 C-76.4000015258789,-14.75 -75,-14.75 -75,-14.75 C-75,-14.75 -75,-11.850000381469727 -75,-11.850000381469727 C-73.0999984741211,-11.75 -71.5999984741211,-11.149999618530273 -70.4000015258789,-10.050000190734863 C-69.19999694824219,-9.050000190734863 -68.5999984741211,-7.550000190734863 -68.4000015258789,-5.650000095367432 C-68.4000015258789,-5.650000095367432 -71.19999694824219,-4.849999904632568 -71.19999694824219,-4.849999904632568 C-71.5,-7.650000095367432 -72.69999694824219,-9.25 -75.0999984741211,-9.550000190734863 C-75.0999984741211,-9.550000190734863 -75.0999984741211,-1.850000023841858 -75.0999984741211,-1.850000023841858 C-75.0999984741211,-1.850000023841858 -74,-1.5499999523162842 -74,-1.5499999523162842 C-72,-1.0499999523162842 -70.5,-0.25 -69.5999984741211,0.75 C-68.5,1.5499999523162842 -68,2.8499999046325684 -68,4.650000095367432z M-76.30000305175781,-2.25 C-76.30000305175781,-2.25 -76.30000305175781,-9.649999618530273 -76.30000305175781,-9.649999618530273 C-77.5,-9.550000190734863 -78.5,-9.25 -79.19999694824219,-8.649999618530273 C-79.9000015258789,-8.050000190734863 -80.30000305175781,-7.25 -80.30000305175781,-6.150000095367432 C-80.30000305175781,-5.150000095367432 -80,-4.25 -79.30000305175781,-3.6500000953674316 C-78.5999984741211,-3.049999952316284 -77.69999694824219,-2.549999952316284 -76.5,-2.3499999046325684 C-76.5,-2.3499999046325684 -76.30000305175781,-2.25 -76.30000305175781,-2.25z M-74.9000015258789,8.449999809265137 C-73.5999984741211,8.449999809265137 -72.5999984741211,8.050000190734863 -71.80000305175781,7.449999809265137 C-71.0999984741211,6.849999904632568 -70.69999694824219,5.949999809265137 -70.69999694824219,4.75 C-70.69999694824219,3.6500000953674316 -71,2.8499999046325684 -71.5999984741211,2.25 C-72.19999694824219,1.649999976158142 -73.19999694824219,1.149999976158142 -74.5,0.8500000238418579 C-74.5,0.8500000238418579 -74.80000305175781,0.75 -74.80000305175781,0.75 C-74.80000305175781,0.75 -74.80000305175781,8.449999809265137 -74.80000305175781,8.449999809265137 C-74.80000305175781,8.449999809265137 -74.9000015258789,8.449999809265137 -74.9000015258789,8.449999809265137z M-49.099998474121094,7.75 C-49.099998474121094,7.75 -49.099998474121094,10.25 -49.099998474121094,10.25 C-49.099998474121094,10.25 -63.20000076293945,10.25 -63.20000076293945,10.25 C-63.20000076293945,10.25 -63.20000076293945,7.75 -63.20000076293945,7.75 C-63.20000076293945,7.75 -57.099998474121094,7.75 -57.099998474121094,7.75 C-57.099998474121094,7.75 -57.099998474121094,-7.050000190734863 -57.099998474121094,-7.050000190734863 C-58,-5.949999809265137 -59.599998474121094,-5.449999809265137 -61.79999923706055,-5.449999809265137 C-61.79999923706055,-5.449999809265137 -62.900001525878906,-5.449999809265137 -62.900001525878906,-5.449999809265137 C-62.900001525878906,-5.449999809265137 -62.900001525878906,-7.949999809265137 -62.900001525878906,-7.949999809265137 C-62.900001525878906,-7.949999809265137 -62,-7.949999809265137 -62,-7.949999809265137 C-60.5,-7.949999809265137 -59.29999923706055,-8.25 -58.5,-8.949999809265137 C-57.599998474121094,-9.550000190734863 -57,-10.449999809265137 -56.70000076293945,-11.550000190734863 C-56.70000076293945,-11.550000190734863 -54.29999923706055,-11.550000190734863 -54.29999923706055,-11.550000190734863 C-54.29999923706055,-11.550000190734863 -54.29999923706055,7.650000095367432 -54.29999923706055,7.650000095367432 C-54.29999923706055,7.650000095367432 -49.099998474121094,7.650000095367432 -49.099998474121094,7.650000095367432 C-49.099998474121094,7.650000095367432 -49.099998474121094,7.75 -49.099998474121094,7.75z M-44.20000076293945,7.949999809265137 C-41.70000076293945,6.050000190734863 -39.20000076293945,4.050000190734863 -36.79999923706055,1.75 C-35.400001525878906,0.44999998807907104 -34.5,-0.75 -33.900001525878906,-1.850000023841858 C-33.400001525878906,-2.8499999046325684 -33.099998474121094,-4.050000190734863 -33.099998474121094,-5.349999904632568 C-33.099998474121094,-6.650000095367432 -33.5,-7.75 -34.20000076293945,-8.449999809265137 C-34.900001525878906,-9.149999618530273 -35.900001525878906,-9.550000190734863 -37.099998474121094,-9.550000190734863 C-38.400001525878906,-9.550000190734863 -39.29999923706055,-9.149999618530273 -40.099998474121094,-8.449999809265137 C-40.79999923706055,-7.75 -41.20000076293945,-6.75 -41.20000076293945,-5.550000190734863 C-41.20000076293945,-5.050000190734863 -41.099998474121094,-4.349999904632568 -40.900001525878906,-3.549999952316284 C-40.900001525878906,-3.549999952316284 -43.70000076293945,-3.8499999046325684 -43.70000076293945,-3.8499999046325684 C-43.79999923706055,-4.449999809265137 -43.900001525878906,-5.050000190734863 -43.900001525878906,-5.650000095367432 C-43.900001525878906,-7.550000190734863 -43.29999923706055,-9.149999618530273 -42,-10.25 C-40.70000076293945,-11.350000381469727 -39,-11.949999809265137 -36.900001525878906,-11.949999809265137 C-34.79999923706055,-11.949999809265137 -33.099998474121094,-11.350000381469727 -31.899999618530273,-10.25 C-30.700000762939453,-9.149999618530273 -30.100000381469727,-7.550000190734863 -30.100000381469727,-5.349999904632568 C-30.100000381469727,-3.8499999046325684 -30.5,-2.3499999046325684 -31.299999237060547,-0.949999988079071 C-32.099998474121094,0.44999998807907104 -33.29999923706055,1.9500000476837158 -35,3.549999952316284 C-36.70000076293945,5.050000190734863 -38.5,6.550000190734863 -40.400001525878906,7.849999904632568 C-40.400001525878906,7.849999904632568 -29.899999618530273,7.849999904632568 -29.899999618530273,7.849999904632568 C-29.899999618530273,7.849999904632568 -29.899999618530273,10.350000381469727 -29.899999618530273,10.350000381469727 C-29.899999618530273,10.350000381469727 -44.20000076293945,10.350000381469727 -44.20000076293945,10.350000381469727 C-44.20000076293945,10.350000381469727 -44.20000076293945,7.949999809265137 -44.20000076293945,7.949999809265137z M-24.899999618530273,13.350000381469727 C-24.100000381469727,13.050000190734863 -23.600000381469727,12.649999618530273 -23.399999618530273,12.25 C-23.100000381469727,11.850000381469727 -23,11.25 -23,10.449999809265137 C-23,10.449999809265137 -23,10.350000381469727 -23,10.350000381469727 C-23,10.350000381469727 -25,10.350000381469727 -25,10.350000381469727 C-25,10.350000381469727 -25,6.650000095367432 -25,6.650000095367432 C-25,6.650000095367432 -21.299999237060547,6.650000095367432 -21.299999237060547,6.650000095367432 C-21.299999237060547,6.650000095367432 -21.299999237060547,10.149999618530273 -21.299999237060547,10.149999618530273 C-21.299999237060547,11.449999809265137 -21.5,12.350000381469727 -21.899999618530273,13.050000190734863 C-22.299999237060547,13.75 -23,14.350000381469727 -24.100000381469727,14.75 C-24.100000381469727,14.75 -24.899999618530273,13.350000381469727 -24.899999618530273,13.350000381469727z M-2.0999999046325684,7.75 C-2.0999999046325684,7.75 -2.0999999046325684,10.25 -2.0999999046325684,10.25 C-2.0999999046325684,10.25 -16.200000762939453,10.25 -16.200000762939453,10.25 C-16.200000762939453,10.25 -16.200000762939453,7.75 -16.200000762939453,7.75 C-16.200000762939453,7.75 -10.100000381469727,7.75 -10.100000381469727,7.75 C-10.100000381469727,7.75 -10.100000381469727,-7.050000190734863 -10.100000381469727,-7.050000190734863 C-11,-5.949999809265137 -12.600000381469727,-5.449999809265137 -14.800000190734863,-5.449999809265137 C-14.800000190734863,-5.449999809265137 -15.899999618530273,-5.449999809265137 -15.899999618530273,-5.449999809265137 C-15.899999618530273,-5.449999809265137 -15.899999618530273,-7.949999809265137 -15.899999618530273,-7.949999809265137 C-15.899999618530273,-7.949999809265137 -15,-7.949999809265137 -15,-7.949999809265137 C-13.5,-7.949999809265137 -12.300000190734863,-8.25 -11.5,-8.949999809265137 C-10.600000381469727,-9.550000190734863 -10,-10.449999809265137 -9.699999809265137,-11.550000190734863 C-9.699999809265137,-11.550000190734863 -7.300000190734863,-11.550000190734863 -7.300000190734863,-11.550000190734863 C-7.300000190734863,-11.550000190734863 -7.300000190734863,7.650000095367432 -7.300000190734863,7.650000095367432 C-7.300000190734863,7.650000095367432 -2.0999999046325684,7.650000095367432 -2.0999999046325684,7.650000095367432 C-2.0999999046325684,7.650000095367432 -2.0999999046325684,7.75 -2.0999999046325684,7.75z M11.600000381469727,10.350000381469727 C11.600000381469727,10.350000381469727 11.600000381469727,4.849999904632568 11.600000381469727,4.849999904632568 C11.600000381469727,4.849999904632568 1.7000000476837158,4.849999904632568 1.7000000476837158,4.849999904632568 C1.7000000476837158,4.849999904632568 1.7000000476837158,2.950000047683716 1.7000000476837158,2.950000047683716 C1.7000000476837158,2.950000047683716 11.199999809265137,-11.449999809265137 11.199999809265137,-11.449999809265137 C11.199999809265137,-11.449999809265137 14.199999809265137,-11.449999809265137 14.199999809265137,-11.449999809265137 C14.199999809265137,-11.449999809265137 14.199999809265137,2.6500000953674316 14.199999809265137,2.6500000953674316 C14.199999809265137,2.6500000953674316 17.799999237060547,2.6500000953674316 17.799999237060547,2.6500000953674316 C17.799999237060547,2.6500000953674316 17.799999237060547,4.849999904632568 17.799999237060547,4.849999904632568 C17.799999237060547,4.849999904632568 14.199999809265137,4.849999904632568 14.199999809265137,4.849999904632568 C14.199999809265137,4.849999904632568 14.199999809265137,10.350000381469727 14.199999809265137,10.350000381469727 C14.199999809265137,10.350000381469727 11.600000381469727,10.350000381469727 11.600000381469727,10.350000381469727z M11.600000381469727,2.6500000953674316 C11.600000381469727,2.6500000953674316 11.600000381469727,-5.349999904632568 11.600000381469727,-5.349999904632568 C11.600000381469727,-6.349999904632568 11.600000381469727,-7.449999809265137 11.699999809265137,-8.550000190734863 C11.5,-8.050000190734863 11.300000190734863,-7.550000190734863 11.100000381469727,-7.25 C10.899999618530273,-6.849999904632568 10.5,-6.349999904632568 10.100000381469727,-5.550000190734863 C10.100000381469727,-5.550000190734863 6,0.550000011920929 6,0.550000011920929 C5.900000095367432,0.6499999761581421 5.699999809265137,0.949999988079071 5.400000095367432,1.4500000476837158 C5.099999904632568,1.850000023841858 4.800000190734863,2.25 4.5,2.6500000953674316 C4.5,2.6500000953674316 11.600000381469727,2.6500000953674316 11.600000381469727,2.6500000953674316z M31.100000381469727,10.350000381469727 C31.100000381469727,10.350000381469727 31.100000381469727,4.849999904632568 31.100000381469727,4.849999904632568 C31.100000381469727,4.849999904632568 21.200000762939453,4.849999904632568 21.200000762939453,4.849999904632568 C21.200000762939453,4.849999904632568 21.200000762939453,2.950000047683716 21.200000762939453,2.950000047683716 C21.200000762939453,2.950000047683716 30.700000762939453,-11.449999809265137 30.700000762939453,-11.449999809265137 C30.700000762939453,-11.449999809265137 33.70000076293945,-11.449999809265137 33.70000076293945,-11.449999809265137 C33.70000076293945,-11.449999809265137 33.70000076293945,2.6500000953674316 33.70000076293945,2.6500000953674316 C33.70000076293945,2.6500000953674316 37.29999923706055,2.6500000953674316 37.29999923706055,2.6500000953674316 C37.29999923706055,2.6500000953674316 37.29999923706055,4.849999904632568 37.29999923706055,4.849999904632568 C37.29999923706055,4.849999904632568 33.70000076293945,4.849999904632568 33.70000076293945,4.849999904632568 C33.70000076293945,4.849999904632568 33.70000076293945,10.350000381469727 33.70000076293945,10.350000381469727 C33.70000076293945,10.350000381469727 31.100000381469727,10.350000381469727 31.100000381469727,10.350000381469727z M31.100000381469727,2.6500000953674316 C31.100000381469727,2.6500000953674316 31.100000381469727,-5.349999904632568 31.100000381469727,-5.349999904632568 C31.100000381469727,-6.349999904632568 31.100000381469727,-7.449999809265137 31.200000762939453,-8.550000190734863 C31,-8.050000190734863 30.799999237060547,-7.550000190734863 30.600000381469727,-7.25 C30.399999618530273,-6.849999904632568 30,-6.349999904632568 29.600000381469727,-5.550000190734863 C29.600000381469727,-5.550000190734863 25.5,0.550000011920929 25.5,0.550000011920929 C25.399999618530273,0.6499999761581421 25.200000762939453,0.949999988079071 24.899999618530273,1.4500000476837158 C24.600000381469727,1.850000023841858 24.299999237060547,2.25 24,2.6500000953674316 C24,2.6500000953674316 31.100000381469727,2.6500000953674316 31.100000381469727,2.6500000953674316z M45,6.650000095367432 M45,10.350000381469727 C45,10.350000381469727 41.29999923706055,10.350000381469727 41.29999923706055,10.350000381469727 C41.29999923706055,10.350000381469727 41.29999923706055,6.650000095367432 41.29999923706055,6.650000095367432 C41.29999923706055,6.650000095367432 45,6.650000095367432 45,6.650000095367432 C45,6.650000095367432 45,10.350000381469727 45,10.350000381469727z M56.29999923706055,-11.949999809265137 C61.599998474121094,-11.949999809265137 64.19999694824219,-8.350000381469727 64.19999694824219,-1.0499999523162842 C64.19999694824219,2.549999952316284 63.599998474121094,5.349999904632568 62.29999923706055,7.550000190734863 C61,9.649999618530273 59.099998474121094,10.75 56.400001525878906,10.75 C54.400001525878906,10.75 52.79999923706055,10.25 51.599998474121094,9.25 C50.400001525878906,8.25 49.599998474121094,6.849999904632568 49.29999923706055,5.050000190734863 C49.29999923706055,5.050000190734863 52.099998474121094,4.449999809265137 52.099998474121094,4.449999809265137 C52.29999923706055,5.75 52.79999923706055,6.75 53.400001525878906,7.349999904632568 C54.099998474121094,8.050000190734863 55.099998474121094,8.350000381469727 56.29999923706055,8.350000381469727 C58,8.350000381469727 59.20000076293945,7.550000190734863 60,5.949999809265137 C60.79999923706055,4.349999904632568 61.20000076293945,2.1500000953674316 61.20000076293945,-0.75 C60.70000076293945,0.15000000596046448 59.900001525878906,0.8500000238418579 59,1.350000023841858 C58.099998474121094,1.850000023841858 57.099998474121094,2.049999952316284 55.900001525878906,2.049999952316284 C54.599998474121094,2.049999952316284 53.400001525878906,1.75 52.29999923706055,1.25 C51.29999923706055,0.75 50.400001525878906,-0.05000000074505806 49.79999923706055,-1.149999976158142 C49.20000076293945,-2.25 48.900001525878906,-3.450000047683716 48.900001525878906,-4.949999809265137 C48.900001525878906,-6.349999904632568 49.20000076293945,-7.550000190734863 49.79999923706055,-8.649999618530273 C50.400001525878906,-9.75 51.29999923706055,-10.550000190734863 52.29999923706055,-11.149999618530273 C53.70000076293945,-11.649999618530273 54.900001525878906,-11.949999809265137 56.29999923706055,-11.949999809265137z M56.400001525878906,-0.15000000596046448 C57.599998474121094,-0.15000000596046448 58.599998474121094,-0.550000011920929 59.5,-1.350000023841858 C60.400001525878906,-2.1500000953674316 61,-3.1500000953674316 61.29999923706055,-4.25 C61.099998474121094,-5.75 60.599998474121094,-7.050000190734863 59.79999923706055,-8.050000190734863 C59,-9.050000190734863 57.79999923706055,-9.550000190734863 56.20000076293945,-9.550000190734863 C54.900001525878906,-9.550000190734863 53.900001525878906,-9.149999618530273 53.099998474121094,-8.25 C52.29999923706055,-7.349999904632568 51.900001525878906,-6.25 51.900001525878906,-4.849999904632568 C51.900001525878906,-3.450000047683716 52.29999923706055,-2.25 53.099998474121094,-1.4500000476837158 C54,-0.550000011920929 55.099998474121094,-0.15000000596046448 56.400001525878906,-0.15000000596046448z M77,-4.25 C78.4000015258789,-4.25 79.5,-3.950000047683716 80.5,-3.3499999046325684 C81.5,-2.75 82.30000305175781,-1.850000023841858 82.9000015258789,-0.75 C83.5,0.3499999940395355 83.69999694824219,1.649999976158142 83.69999694824219,3.1500000953674316 C83.69999694824219,4.650000095367432 83.4000015258789,5.949999809265137 82.80000305175781,7.150000095367432 C82.19999694824219,8.25 81.30000305175781,9.149999618530273 80.30000305175781,9.850000381469727 C79.19999694824219,10.449999809265137 78,10.75 76.5999984741211,10.75 C74,10.75 72.0999984741211,9.850000381469727 70.69999694824219,7.949999809265137 C69.4000015258789,6.150000095367432 68.69999694824219,3.450000047683716 68.69999694824219,-0.15000000596046448 C68.69999694824219,-3.950000047683716 69.4000015258789,-6.849999904632568 70.80000305175781,-8.949999809265137 C72.19999694824219,-10.949999809265137 74.19999694824219,-12.050000190734863 76.80000305175781,-12.050000190734863 C78.5999984741211,-12.050000190734863 80.0999984741211,-11.550000190734863 81.19999694824219,-10.649999618530273 C82.30000305175781,-9.75 83.0999984741211,-8.350000381469727 83.4000015258789,-6.650000095367432 C83.4000015258789,-6.650000095367432 80.5999984741211,-6.050000190734863 80.5999984741211,-6.050000190734863 C80.0999984741211,-8.449999809265137 78.80000305175781,-9.75 76.69999694824219,-9.75 C75,-9.75 73.69999694824219,-9.050000190734863 72.80000305175781,-7.550000190734863 C71.9000015258789,-6.150000095367432 71.5,-4.050000190734863 71.4000015258789,-1.25 C71.9000015258789,-2.25 72.5999984741211,-2.950000047683716 73.5999984741211,-3.549999952316284 C74.69999694824219,-3.950000047683716 75.80000305175781,-4.25 77,-4.25z M76.5999984741211,8.449999809265137 C77.9000015258789,8.449999809265137 79,7.949999809265137 79.69999694824219,7.050000190734863 C80.5,6.150000095367432 80.9000015258789,4.849999904632568 80.9000015258789,3.25 C80.9000015258789,1.649999976158142 80.5,0.44999998807907104 79.69999694824219,-0.44999998807907104 C78.9000015258789,-1.350000023841858 77.80000305175781,-1.850000023841858 76.4000015258789,-1.850000023841858 C75.19999694824219,-1.850000023841858 74.19999694824219,-1.4500000476837158 73.30000305175781,-0.75 C72.5,0.05000000074505806 71.9000015258789,1.149999976158142 71.5,2.549999952316284 C71.69999694824219,4.349999904632568 72.19999694824219,5.75 73.0999984741211,6.849999904632568 C74.0999984741211,7.949999809265137 75.19999694824219,8.449999809265137 76.5999984741211,8.449999809265137z"
                     ></path>
                  </g>
                  <g opacity="1" transform="matrix(1,0,0,1,303,295.5)">
                     <path
                     stroke-linecap="butt"
                     stroke-linejoin="miter"
                     fill-opacity="0"
                     stroke-miterlimit="4"
                     stroke="rgb(199,199,199)"
                     stroke-opacity="1"
                     stroke-width="1"
                     d=" M-187.10000610351562,-170 C-187.10000610351562,-170 187.10000610351562,-170 187.10000610351562,-170 C189,-170 190.5,-168.5 190.5,-166.60000610351562 C190.5,-166.60000610351562 190.5,166.60000610351562 190.5,166.60000610351562 C190.5,168.5 189,170 187.10000610351562,170 C187.10000610351562,170 -187.10000610351562,170 -187.10000610351562,170 C-189,170 -190.5,168.5 -190.5,166.60000610351562 C-190.5,166.60000610351562 -190.5,-166.60000610351562 -190.5,-166.60000610351562 C-190.5,-168.5 -189,-170 -187.10000610351562,-170z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,438.5350036621094,337.4490051269531)"
                  >
                     <path
                     fill="rgb(33,33,33)"
                     fill-opacity="1"
                     d=" M-37.643001556396484,-6.386000156402588 C-37.643001556396484,-6.386000156402588 -37.643001556396484,0.7599999904632568 -37.643001556396484,0.7599999904632568 C-37.643001556396484,1.6690000295639038 -37.402000427246094,2.384999990463257 -36.922000885009766,2.9070000648498535 C-36.430999755859375,3.430000066757202 -35.74100112915039,3.690999984741211 -34.85300064086914,3.690999984741211 C-33.96500015258789,3.690999984741211 -33.28099822998047,3.430000066757202 -32.79999923706055,2.9070000648498535 C-32.308998107910156,2.384999990463257 -32.06399917602539,1.6690000295639038 -32.06399917602539,0.7599999904632568 C-32.06399917602539,0.7599999904632568 -32.06399917602539,-6.386000156402588 -32.06399917602539,-6.386000156402588 C-32.06399917602539,-6.386000156402588 -30.575000762939453,-6.386000156402588 -30.575000762939453,-6.386000156402588 C-30.575000762939453,-6.386000156402588 -30.575000762939453,0.8539999723434448 -30.575000762939453,0.8539999723434448 C-30.575000762939453,1.6799999475479126 -30.742000579833984,2.4059998989105225 -31.076000213623047,3.0329999923706055 C-31.410999298095703,3.6589999198913574 -31.902000427246094,4.144999980926514 -32.54899978637695,4.489999771118164 C-33.1870002746582,4.835000038146973 -33.95500183105469,5.006999969482422 -34.85300064086914,5.006999969482422 C-35.75199890136719,5.006999969482422 -36.525001525878906,4.835000038146973 -37.17300033569336,4.489999771118164 C-37.810001373291016,4.144999980926514 -38.29600143432617,3.6589999198913574 -38.630001068115234,3.0329999923706055 C-38.9640007019043,2.4059998989105225 -39.13199996948242,1.6799999475479126 -39.13199996948242,0.8539999723434448 C-39.13199996948242,0.8539999723434448 -39.13199996948242,-6.386000156402588 -39.13199996948242,-6.386000156402588 C-39.13199996948242,-6.386000156402588 -37.643001556396484,-6.386000156402588 -37.643001556396484,-6.386000156402588z M-27.834999084472656,-3.0950000286102295 C-27.834999084472656,-3.0950000286102295 -26.58099937438965,-3.0950000286102295 -26.58099937438965,-3.0950000286102295 C-26.58099937438965,-3.0950000286102295 -26.58099937438965,-1.6380000114440918 -26.58099937438965,-1.6380000114440918 C-26.329999923706055,-2.1700000762939453 -25.986000061035156,-2.578000068664551 -25.547000885009766,-2.859999895095825 C-25.107999801635742,-3.1419999599456787 -24.60099983215332,-3.2829999923706055 -24.027000427246094,-3.2829999923706055 C-23.399999618530273,-3.2829999923706055 -22.84600067138672,-3.1110000610351562 -22.364999771118164,-2.7660000324249268 C-21.885000228881836,-2.431999921798706 -21.513999938964844,-1.9509999752044678 -21.253000259399414,-1.3240000009536743 C-20.992000579833984,-0.7080000042915344 -20.861000061035156,0.00800000037997961 -20.861000061035156,0.8230000138282776 C-20.861000061035156,1.6480000019073486 -21.00200080871582,2.36899995803833 -21.284000396728516,2.9860000610351562 C-21.555999755859375,3.6019999980926514 -21.937000274658203,4.083000183105469 -22.42799949645996,4.427000045776367 C-22.91900062561035,4.76200008392334 -23.47800064086914,4.928999900817871 -24.104999542236328,4.928999900817871 C-24.68000030517578,4.928999900817871 -25.176000595092773,4.793000221252441 -25.5939998626709,4.520999908447266 C-26.011999130249023,4.25 -26.315000534057617,3.9100000858306885 -26.503000259399414,3.503000020980835 C-26.503000259399414,3.503000020980835 -26.503000259399414,7.796999931335449 -26.503000259399414,7.796999931335449 C-26.503000259399414,7.796999931335449 -27.834999084472656,7.796999931335449 -27.834999084472656,7.796999931335449 C-27.834999084472656,7.796999931335449 -27.834999084472656,-3.0950000286102295 -27.834999084472656,-3.0950000286102295z M-24.41900062561035,3.753000020980835 C-23.75,3.753000020980835 -23.226999282836914,3.497999906539917 -22.85099983215332,2.9860000610351562 C-22.46500015258789,2.4630000591278076 -22.270999908447266,1.7419999837875366 -22.270999908447266,0.8230000138282776 C-22.270999908447266,-0.09700000286102295 -22.459999084472656,-0.8119999766349792 -22.836000442504883,-1.3240000009536743 C-23.201000213623047,-1.847000002861023 -23.71299934387207,-2.1080000400543213 -24.371000289916992,-2.1080000400543213 C-25.030000686645508,-2.1080000400543213 -25.55699920654297,-1.8619999885559082 -25.95400047302246,-1.371000051498413 C-26.340999603271484,-0.890999972820282 -26.534000396728516,-0.22699999809265137 -26.534000396728516,0.6190000176429749 C-26.534000396728516,0.6190000176429749 -26.534000396728516,0.9950000047683716 -26.534000396728516,0.9950000047683716 C-26.534000396728516,1.8420000076293945 -26.34600067138672,2.515000104904175 -25.969999313354492,3.0169999599456787 C-25.58300018310547,3.507999897003174 -25.06599998474121,3.753000020980835 -24.41900062561035,3.753000020980835z M-15.847999572753906,-3.0950000286102295 C-15.847999572753906,-3.0950000286102295 -14.390999794006348,-3.0950000286102295 -14.390999794006348,-3.0950000286102295 C-14.390999794006348,-3.0950000286102295 -14.390999794006348,-5.1479997634887695 -14.390999794006348,-5.1479997634887695 C-14.390999794006348,-5.1479997634887695 -13.059000015258789,-5.711999893188477 -13.059000015258789,-5.711999893188477 C-13.059000015258789,-5.711999893188477 -13.059000015258789,-3.0950000286102295 -13.059000015258789,-3.0950000286102295 C-13.059000015258789,-3.0950000286102295 -11.100000381469727,-3.0950000286102295 -11.100000381469727,-3.0950000286102295 C-11.100000381469727,-3.0950000286102295 -11.100000381469727,-1.9980000257492065 -11.100000381469727,-1.9980000257492065 C-11.100000381469727,-1.9980000257492065 -13.059000015258789,-1.9980000257492065 -13.059000015258789,-1.9980000257492065 C-13.059000015258789,-1.9980000257492065 -13.059000015258789,2.3429999351501465 -13.059000015258789,2.3429999351501465 C-13.059000015258789,2.7920000553131104 -12.970000267028809,3.121000051498413 -12.791999816894531,3.3299999237060547 C-12.604000091552734,3.5290000438690186 -12.312000274658203,3.628000020980835 -11.914999961853027,3.628000020980835 C-11.6850004196167,3.628000020980835 -11.413000106811523,3.5920000076293945 -11.100000381469727,3.5179998874664307 C-11.100000381469727,3.5179998874664307 -11.100000381469727,4.741000175476074 -11.100000381469727,4.741000175476074 C-11.444999694824219,4.835000038146973 -11.831000328063965,4.881999969482422 -12.260000228881836,4.881999969482422 C-13.053999900817871,4.881999969482422 -13.607000350952148,4.668000221252441 -13.920999526977539,4.238999843597412 C-14.234000205993652,3.811000108718872 -14.390999794006348,3.194999933242798 -14.390999794006348,2.390000104904175 C-14.390999794006348,2.390000104904175 -14.390999794006348,-1.9980000257492065 -14.390999794006348,-1.9980000257492065 C-14.390999794006348,-1.9980000257492065 -15.847999572753906,-1.9980000257492065 -15.847999572753906,-1.9980000257492065 C-15.847999572753906,-1.9980000257492065 -15.847999572753906,-3.0950000286102295 -15.847999572753906,-3.0950000286102295z M-6.507999897003174,4.928999900817871 C-7.238999843597412,4.928999900817871 -7.881999969482422,4.767000198364258 -8.435999870300293,4.442999839782715 C-8.98900032043457,4.109000205993652 -9.418000221252441,3.632999897003174 -9.720999717712402,3.0169999599456787 C-10.012999534606934,2.4000000953674316 -10.159000396728516,1.6690000295639038 -10.159000396728516,0.8230000138282776 C-10.159000396728516,-0.023000000044703484 -10.012999534606934,-0.7549999952316284 -9.720999717712402,-1.371000051498413 C-9.418000221252441,-1.9880000352859497 -8.98900032043457,-2.4579999446868896 -8.435999870300293,-2.7820000648498535 C-7.881999969482422,-3.115999937057495 -7.238999843597412,-3.2829999923706055 -6.507999897003174,-3.2829999923706055 C-5.7769999504089355,-3.2829999923706055 -5.133999824523926,-3.115999937057495 -4.579999923706055,-2.7820000648498535 C-4.0269999504089355,-2.4579999446868896 -3.6029999256134033,-1.9880000352859497 -3.311000108718872,-1.371000051498413 C-3.007999897003174,-0.7549999952316284 -2.8559999465942383,-0.023000000044703484 -2.8559999465942383,0.8230000138282776 C-2.8559999465942383,1.6690000295639038 -3.007999897003174,2.4000000953674316 -3.311000108718872,3.0169999599456787 C-3.6029999256134033,3.632999897003174 -4.0269999504089355,4.109000205993652 -4.579999923706055,4.442999839782715 C-5.133999824523926,4.767000198364258 -5.7769999504089355,4.928999900817871 -6.507999897003174,4.928999900817871z M-6.507999897003174,3.7690000534057617 C-5.797999858856201,3.7690000534057617 -5.249000072479248,3.5179998874664307 -4.861999988555908,3.0169999599456787 C-4.465000152587891,2.515000104904175 -4.267000198364258,1.784000039100647 -4.267000198364258,0.8230000138282776 C-4.267000198364258,-0.1379999965429306 -4.465000152587891,-0.8700000047683716 -4.861999988555908,-1.371000051498413 C-5.249000072479248,-1.8730000257492065 -5.797999858856201,-2.122999906539917 -6.507999897003174,-2.122999906539917 C-7.2179999351501465,-2.122999906539917 -7.771999835968018,-1.8730000257492065 -8.168999671936035,-1.371000051498413 C-8.555999755859375,-0.8700000047683716 -8.74899959564209,-0.1379999965429306 -8.74899959564209,0.8230000138282776 C-8.74899959564209,1.784000039100647 -8.555999755859375,2.515000104904175 -8.168999671936035,3.0169999599456787 C-7.771999835968018,3.5179998874664307 -7.2179999351501465,3.7690000534057617 -6.507999897003174,3.7690000534057617z M10.659000396728516,1.9199999570846558 C10.659000396728516,2.859999895095825 10.35099983215332,3.5969998836517334 9.734999656677246,4.130000114440918 C9.128999710083008,4.6519999504089355 8.29800033569336,4.934000015258789 7.243000030517578,4.97599983215332 C7.243000030517578,4.97599983215332 7.243000030517578,6.418000221252441 7.243000030517578,6.418000221252441 C7.243000030517578,6.418000221252441 6.538000106811523,6.418000221252441 6.538000106811523,6.418000221252441 C6.538000106811523,6.418000221252441 6.538000106811523,4.960000038146973 6.538000106811523,4.960000038146973 C5.513999938964844,4.88700008392334 4.683000087738037,4.558000087738037 4.046000003814697,3.9730000495910645 C3.4089999198913574,3.377000093460083 3.0169999599456787,2.578000068664551 2.869999885559082,1.5750000476837158 C2.869999885559082,1.5750000476837158 4.281000137329102,1.2929999828338623 4.281000137329102,1.2929999828338623 C4.427000045776367,2.0450000762939453 4.683000087738037,2.625 5.048999786376953,3.0329999923706055 C5.425000190734863,3.430000066757202 5.921000003814697,3.674999952316284 6.538000106811523,3.7690000534057617 C6.538000106811523,3.7690000534057617 6.538000106811523,-0.19599999487400055 6.538000106811523,-0.19599999487400055 C6.538000106811523,-0.19599999487400055 6.005000114440918,-0.32100000977516174 6.005000114440918,-0.32100000977516174 C5.105999946594238,-0.5509999990463257 4.416999816894531,-0.9269999861717224 3.936000108718872,-1.4500000476837158 C3.4660000801086426,-1.9819999933242798 3.2309999465942383,-2.634999990463257 3.2309999465942383,-3.4089999198913574 C3.2309999465942383,-4.285999774932861 3.5290000438690186,-4.986000061035156 4.124000072479248,-5.508999824523926 C4.71999979019165,-6.040999889373779 5.52400016784668,-6.334000110626221 6.538000106811523,-6.386000156402588 C6.538000106811523,-6.386000156402588 6.538000106811523,-7.796999931335449 6.538000106811523,-7.796999931335449 C6.538000106811523,-7.796999931335449 7.243000030517578,-7.796999931335449 7.243000030517578,-7.796999931335449 C7.243000030517578,-7.796999931335449 7.243000030517578,-6.369999885559082 7.243000030517578,-6.369999885559082 C8.194000244140625,-6.308000087738037 8.961999893188477,-6.014999866485596 9.54699993133545,-5.493000030517578 C10.131999969482422,-4.96999979019165 10.470999717712402,-4.238999843597412 10.5649995803833,-3.2990000247955322 C10.5649995803833,-3.2990000247955322 9.170999526977539,-2.8910000324249268 9.170999526977539,-2.8910000324249268 C9.045000076293945,-4.290999889373779 8.402999877929688,-5.070000171661377 7.243000030517578,-5.22599983215332 C7.243000030517578,-5.22599983215332 7.243000030517578,-1.3869999647140503 7.243000030517578,-1.3869999647140503 C7.243000030517578,-1.3869999647140503 7.776000022888184,-1.246000051498413 7.776000022888184,-1.246000051498413 C8.779000282287598,-0.9739999771118164 9.510000228881836,-0.5979999899864197 9.970000267028809,-0.11699999868869781 C10.430000305175781,0.3529999852180481 10.659000396728516,1.031999945640564 10.659000396728516,1.9199999570846558z M6.538000106811523,-1.559000015258789 C6.538000106811523,-1.559000015258789 6.538000106811523,-5.257999897003174 6.538000106811523,-5.257999897003174 C5.932000160217285,-5.22599983215332 5.451000213623047,-5.059000015258789 5.0960001945495605,-4.75600004196167 C4.741000175476074,-4.464000225067139 4.563000202178955,-4.046000003814697 4.563000202178955,-3.503000020980835 C4.563000202178955,-2.9800000190734863 4.724999904632568,-2.562000036239624 5.048999786376953,-2.249000072479248 C5.382999897003174,-1.9459999799728394 5.853000164031982,-1.7209999561309814 6.459000110626221,-1.5750000476837158 C6.459000110626221,-1.5750000476837158 6.538000106811523,-1.559000015258789 6.538000106811523,-1.559000015258789z M7.243000030517578,3.8010001182556152 C7.901000022888184,3.7799999713897705 8.413000106811523,3.618000030517578 8.779000282287598,3.315000057220459 C9.144000053405762,3.01200008392334 9.32699966430664,2.568000078201294 9.32699966430664,1.9830000400543213 C9.32699966430664,1.4500000476837158 9.170999526977539,1.031999945640564 8.857000350952148,0.7289999723434448 C8.543999671936035,0.4259999990463257 8.053000450134277,0.19099999964237213 7.383999824523926,0.024000000208616257 C7.383999824523926,0.024000000208616257 7.243000030517578,-0.00800000037997961 7.243000030517578,-0.00800000037997961 C7.243000030517578,-0.00800000037997961 7.243000030517578,3.8010001182556152 7.243000030517578,3.8010001182556152z M12.84000015258789,3.5810000896453857 C14.104000091552734,2.6510000228881836 15.336999893188477,1.6119999885559082 16.538000106811523,0.4620000123977661 C17.22800064086914,-0.20600000023841858 17.70800018310547,-0.8019999861717224 17.979999542236328,-1.3240000009536743 C18.25200080871582,-1.847000002861023 18.386999130249023,-2.431999921798706 18.386999130249023,-3.0789999961853027 C18.386999130249023,-3.747999906539917 18.209999084472656,-4.260000228881836 17.854999542236328,-4.614999771118164 C17.510000228881836,-4.980999946594238 17.02400016784668,-5.164000034332275 16.39699935913086,-5.164000034332275 C15.770000457763672,-5.164000034332275 15.27400016784668,-4.986000061035156 14.907999992370605,-4.63100004196167 C14.543000221252441,-4.276000022888184 14.359999656677246,-3.799999952316284 14.359999656677246,-3.2049999237060547 C14.359999656677246,-2.9539999961853027 14.402000427246094,-2.619999885559082 14.484999656677246,-2.2019999027252197 C14.484999656677246,-2.2019999027252197 13.074999809265137,-2.3429999351501465 13.074999809265137,-2.3429999351501465 C13.001999855041504,-2.634999990463257 12.96500015258789,-2.927999973297119 12.96500015258789,-3.2200000286102295 C12.96500015258789,-4.191999912261963 13.277999877929688,-4.960000038146973 13.904999732971191,-5.52400016784668 C14.531999588012695,-6.098999977111816 15.388999938964844,-6.386000156402588 16.475000381469727,-6.386000156402588 C17.541000366210938,-6.386000156402588 18.371999740600586,-6.098999977111816 18.966999053955078,-5.52400016784668 C19.562999725341797,-4.960000038146973 19.861000061035156,-4.150000095367432 19.861000061035156,-3.0950000286102295 C19.861000061035156,-2.3320000171661377 19.66200065612793,-1.6009999513626099 19.264999389648438,-0.9010000228881836 C18.878000259399414,-0.20100000500679016 18.261999130249023,0.5410000085830688 17.416000366210938,1.3240000009536743 C16.579999923706055,2.0980000495910645 15.687000274658203,2.812999963760376 14.736000061035156,3.4709999561309814 C14.736000061035156,3.4709999561309814 19.986000061035156,3.4709999561309814 19.986000061035156,3.4709999561309814 C19.986000061035156,3.4709999561309814 19.986000061035156,4.741000175476074 19.986000061035156,4.741000175476074 C19.986000061035156,4.741000175476074 12.84000015258789,4.741000175476074 12.84000015258789,4.741000175476074 C12.84000015258789,4.741000175476074 12.84000015258789,3.5810000896453857 12.84000015258789,3.5810000896453857z M22.917999267578125,-6.386000156402588 C22.917999267578125,-6.386000156402588 25.034000396728516,-6.386000156402588 25.034000396728516,-6.386000156402588 C25.034000396728516,-6.386000156402588 27.979999542236328,2.1710000038146973 27.979999542236328,2.1710000038146973 C28.06399917602539,2.390000104904175 28.121000289916992,2.572999954223633 28.152999877929688,2.7190001010894775 C28.19499969482422,2.8550000190734863 28.231000900268555,3.0220000743865967 28.261999130249023,3.2209999561309814 C28.261999130249023,3.2209999561309814 28.29400062561035,3.2209999561309814 28.29400062561035,3.2209999561309814 C28.325000762939453,3.0220000743865967 28.35700035095215,2.8550000190734863 28.38800048828125,2.7190001010894775 C28.43000030517578,2.572999954223633 28.492000579833984,2.390000104904175 28.576000213623047,2.1710000038146973 C28.576000213623047,2.1710000038146973 31.52199935913086,-6.386000156402588 31.52199935913086,-6.386000156402588 C31.52199935913086,-6.386000156402588 33.63800048828125,-6.386000156402588 33.63800048828125,-6.386000156402588 C33.63800048828125,-6.386000156402588 33.63800048828125,4.741000175476074 33.63800048828125,4.741000175476074 C33.63800048828125,4.741000175476074 32.27399826049805,4.741000175476074 32.27399826049805,4.741000175476074 C32.27399826049805,4.741000175476074 32.27399826049805,-3.8469998836517334 32.27399826049805,-3.8469998836517334 C32.27399826049805,-4.316999912261963 32.29499816894531,-4.714000225067139 32.33700180053711,-5.038000106811523 C32.33700180053711,-5.038000106811523 32.27399826049805,-5.038000106811523 32.27399826049805,-5.038000106811523 C32.25400161743164,-4.881999969482422 32.207000732421875,-4.672999858856201 32.132999420166016,-4.4120001792907715 C32.07099914550781,-4.150000095367432 32.007999420166016,-3.936000108718872 31.94499969482422,-3.7690000534057617 C31.94499969482422,-3.7690000534057617 28.999000549316406,4.741000175476074 28.999000549316406,4.741000175476074 C28.999000549316406,4.741000175476074 27.55699920654297,4.741000175476074 27.55699920654297,4.741000175476074 C27.55699920654297,4.741000175476074 24.611000061035156,-3.7690000534057617 24.611000061035156,-3.7690000534057617 C24.54800033569336,-3.936000108718872 24.479999542236328,-4.150000095367432 24.406999588012695,-4.4120001792907715 C24.344999313354492,-4.672999858856201 24.30299949645996,-4.881999969482422 24.281999588012695,-5.038000106811523 C24.281999588012695,-5.038000106811523 24.2189998626709,-5.038000106811523 24.2189998626709,-5.038000106811523 C24.26099967956543,-4.714000225067139 24.281999588012695,-4.316999912261963 24.281999588012695,-3.8469998836517334 C24.281999588012695,-3.8469998836517334 24.281999588012695,4.741000175476074 24.281999588012695,4.741000175476074 C24.281999588012695,4.741000175476074 22.917999267578125,4.741000175476074 22.917999267578125,4.741000175476074 C22.917999267578125,4.741000175476074 22.917999267578125,-6.386000156402588 22.917999267578125,-6.386000156402588z M37.89099884033203,-4.302999973297119 C37.89099884033203,-4.302999973297119 37.89099884033203,0.6809999942779541 37.89099884033203,0.6809999942779541 C37.89099884033203,0.6809999942779541 37.09199905395508,0.6809999942779541 37.09199905395508,0.6809999942779541 C37.09199905395508,0.6809999942779541 37.09199905395508,-4.302999973297119 37.09199905395508,-4.302999973297119 C37.09199905395508,-4.302999973297119 35.86000061035156,-4.302999973297119 35.86000061035156,-4.302999973297119 C35.86000061035156,-4.302999973297119 35.86000061035156,-4.960999965667725 35.86000061035156,-4.960999965667725 C35.86000061035156,-4.960999965667725 37.09199905395508,-4.960999965667725 37.09199905395508,-4.960999965667725 C37.09199905395508,-4.960999965667725 37.09199905395508,-7.0289998054504395 37.09199905395508,-7.0289998054504395 C37.09199905395508,-7.0289998054504395 37.89099884033203,-7.0289998054504395 37.89099884033203,-7.0289998054504395 C37.89099884033203,-7.0289998054504395 37.89099884033203,-4.960999965667725 37.89099884033203,-4.960999965667725 C37.89099884033203,-4.960999965667725 39.13199996948242,-4.960999965667725 39.13199996948242,-4.960999965667725 C39.13199996948242,-4.960999965667725 39.13199996948242,-4.302999973297119 39.13199996948242,-4.302999973297119 C39.13199996948242,-4.302999973297119 37.89099884033203,-4.302999973297119 37.89099884033203,-4.302999973297119z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,171.9040069580078,173.0500030517578)"
                  >
                     <path
                     fill="rgb(55,121,130)"
                     fill-opacity="1"
                     d=" M9.595999717712402,-10.75 C9.595999717712402,-10.75 -12.496000289916992,-10.75 -12.496000289916992,-10.75 C-12.496000289916992,-10.75 -12.496000289916992,-7.849999904632568 -12.496000289916992,-7.849999904632568 C-12.496000289916992,-7.849999904632568 5.196000099182129,-7.849999904632568 5.196000099182129,-7.849999904632568 C5.196000099182129,-5.449999809265137 7.196000099182129,-3.450000047683716 9.595999717712402,-3.450000047683716 C9.595999717712402,-3.450000047683716 9.595999717712402,3.450000047683716 9.595999717712402,3.450000047683716 C7.196000099182129,3.450000047683716 5.196000099182129,5.449999809265137 5.196000099182129,7.849999904632568 C5.196000099182129,7.849999904632568 -12.019000053405762,7.849999904632568 -12.019000053405762,7.849999904632568 C-12.019000053405762,7.849999904632568 -12.019000053405762,10.75 -12.019000053405762,10.75 C-12.019000053405762,10.75 6.296000003814697,10.75 6.296000003814697,10.75 C6.296000003814697,10.75 12.496000289916992,10.75 12.496000289916992,10.75 C12.496000289916992,10.75 12.496000289916992,4.550000190734863 12.496000289916992,4.550000190734863 C12.496000289916992,4.550000190734863 12.496000289916992,-4.550000190734863 12.496000289916992,-4.550000190734863 C12.496000289916992,-4.550000190734863 12.496000289916992,-10.75 12.496000289916992,-10.75 C12.496000289916992,-10.75 9.595999717712402,-10.75 9.595999717712402,-10.75z"
                     ></path>
                  </g>
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,152.1750030517578,173.0500030517578)"
                  >
                     <path
                     fill="rgb(55,121,130)"
                     fill-opacity="1"
                     d=" M-3.4749999046325684,7.849999904632568 C-3.4749999046325684,5.449999809265137 -5.474999904632568,3.450000047683716 -7.875,3.450000047683716 C-7.875,3.450000047683716 -7.875,-3.450000047683716 -7.875,-3.450000047683716 C-5.375,-3.450000047683716 -3.4749999046325684,-5.449999809265137 -3.4749999046325684,-7.849999904632568 C-3.4749999046325684,-7.849999904632568 10.774999618530273,-7.849999904632568 10.774999618530273,-7.849999904632568 C10.774999618530273,-7.849999904632568 10.774999618530273,-10.75 10.774999618530273,-10.75 C10.774999618530273,-10.75 -7.875,-10.75 -7.875,-10.75 C-7.875,-10.75 -10.774999618530273,-10.75 -10.774999618530273,-10.75 C-10.774999618530273,-10.75 -10.774999618530273,-7.849999904632568 -10.774999618530273,-7.849999904632568 C-10.774999618530273,-7.849999904632568 -10.774999618530273,7.849999904632568 -10.774999618530273,7.849999904632568 C-10.774999618530273,7.849999904632568 -10.774999618530273,10.75 -10.774999618530273,10.75 C-10.774999618530273,10.75 -4.574999809265137,10.75 -4.574999809265137,10.75 C-4.574999809265137,10.75 10.774999618530273,10.75 10.774999618530273,10.75 C10.774999618530273,10.75 10.774999618530273,7.849999904632568 10.774999618530273,7.849999904632568 C10.774999618530273,7.849999904632568 -3.4749999046325684,7.849999904632568 -3.4749999046325684,7.849999904632568z"
                     ></path>
                  </g>
               </g>
               <g
                  style="display: block"
                  fill="rgb(0,0,0)"
                  font-size="11"
                  font-family="GT America"
                  font-style="normal"
                  font-weight="400"
                  aria-label="Image is hypothetical."
                  transform="matrix(1,0,0,1,308.125,493.625)"
                  opacity="1"
               >
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-57.875,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M2.16,0 C2.16,0 2.16,-7.87 2.16,-7.87 C2.16,-7.87 1.11,-7.87 1.11,-7.87 C1.11,-7.87 1.11,0 1.11,0 C1.11,0 2.16,0 2.16,0z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-54.77299880981445,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1,-5.54 C1,-5.54 1,0 1,0 C1,0 1.94,0 1.94,0 C1.94,0 1.94,-3.23 1.94,-3.23 C1.94,-4.24 2.41,-4.86 3.19,-4.86 C3.86,-4.86 4.23,-4.41 4.23,-3.6 C4.23,-3.6 4.23,0 4.23,0 C4.23,0 5.17,0 5.17,0 C5.17,0 5.17,-3.28 5.17,-3.28 C5.17,-4.29 5.63,-4.86 6.41,-4.86 C7.11,-4.86 7.47,-4.42 7.47,-3.56 C7.47,-3.56 7.47,0 7.47,0 C7.47,0 8.41,0 8.41,0 C8.41,0 8.41,-3.63 8.41,-3.63 C8.41,-4.93 7.79,-5.69 6.72,-5.69 C5.97,-5.69 5.41,-5.32 5.04,-4.56 C4.79,-5.3 4.23,-5.69 3.47,-5.69 C2.73,-5.69 2.19,-5.32 1.88,-4.58 C1.88,-4.58 1.88,-5.54 1.88,-5.54 C1.88,-5.54 1,-5.54 1,-5.54z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-45.742000579833984,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M2.58,-0.64 C1.91,-0.64 1.5,-0.97 1.5,-1.52 C1.5,-2.06 1.85,-2.35 2.67,-2.47 C2.67,-2.47 4.18,-2.69 4.18,-2.69 C4.18,-2.69 4.18,-2.41 4.18,-2.41 C4.18,-1.34 3.54,-0.64 2.58,-0.64z M2.37,0.13 C3.28,0.13 3.98,-0.3 4.23,-1.01 C4.24,-0.65 4.28,-0.29 4.32,0 C4.32,0 5.31,0 5.31,0 C5.17,-0.43 5.12,-1.02 5.12,-1.87 C5.12,-1.87 5.12,-3.37 5.12,-3.37 C5.12,-4.98 4.45,-5.67 2.94,-5.67 C1.64,-5.67 0.75,-4.93 0.68,-3.8 C0.68,-3.8 1.68,-3.8 1.68,-3.8 C1.73,-4.5 2.19,-4.9 2.95,-4.9 C3.8,-4.9 4.17,-4.49 4.17,-3.47 C4.17,-3.47 4.17,-3.38 4.17,-3.38 C4.17,-3.38 3.13,-3.26 3.13,-3.26 C2.23,-3.15 1.69,-3.01 1.27,-2.8 C0.78,-2.53 0.5,-2.05 0.5,-1.5 C0.5,-0.51 1.24,0.13 2.37,0.13z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-39.955997467041016,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M3.48,-0.2 C4.24,-0.2 4.63,0.08 4.63,0.6 C4.63,1.1 4.29,1.52 2.94,1.52 C1.94,1.52 1.25,1.3 1.25,0.61 C1.25,0.28 1.44,-0.04 1.84,-0.22 C1.98,-0.21 2.14,-0.2 2.3,-0.2 C2.3,-0.2 3.48,-0.2 3.48,-0.2z M2.88,-2.63 C2.17,-2.63 1.72,-3.12 1.72,-3.8 C1.72,-4.48 2.17,-4.95 2.88,-4.95 C3.59,-4.95 4.04,-4.46 4.04,-3.79 C4.04,-3.11 3.59,-2.63 2.88,-2.63z M5.25,-5.63 C5.41,-5.63 5.54,-5.61 5.65,-5.58 C5.65,-5.58 5.65,-6.4 5.65,-6.4 C5.53,-6.44 5.41,-6.45 5.28,-6.45 C4.54,-6.45 4.13,-6 3.97,-5.44 C3.66,-5.58 3.3,-5.67 2.88,-5.67 C1.6,-5.67 0.83,-4.87 0.83,-3.8 C0.83,-3.26 1.02,-2.79 1.37,-2.45 C0.91,-2.27 0.59,-1.89 0.59,-1.34 C0.59,-0.94 0.76,-0.59 1.23,-0.38 C0.64,-0.19 0.33,0.25 0.33,0.78 C0.33,1.56 0.88,2.29 2.82,2.29 C4.75,2.29 5.57,1.57 5.57,0.53 C5.57,-0.47 4.94,-1.03 3.69,-1.03 C3.69,-1.03 2.34,-1.03 2.34,-1.03 C1.65,-1.03 1.42,-1.29 1.42,-1.6 C1.42,-1.85 1.58,-2.04 1.82,-2.14 C2.12,-1.99 2.47,-1.91 2.88,-1.91 C4.17,-1.91 4.93,-2.73 4.93,-3.8 C4.93,-4.32 4.75,-4.77 4.42,-5.11 C4.55,-5.46 4.83,-5.63 5.25,-5.63z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-34.2140007019043,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M4.42,-3.26 C4.42,-3.26 1.44,-3.26 1.44,-3.26 C1.46,-4.3 2.02,-4.93 2.99,-4.93 C3.9,-4.93 4.42,-4.4 4.42,-3.38 C4.42,-3.38 4.42,-3.26 4.42,-3.26z M5.37,-3.16 C5.37,-4.82 4.51,-5.67 3.01,-5.67 C1.43,-5.67 0.5,-4.55 0.5,-2.7 C0.5,-0.88 1.44,0.13 3.02,0.13 C4.14,0.13 4.95,-0.4 5.34,-1.41 C5.34,-1.41 4.56,-1.75 4.56,-1.75 C4.32,-1.07 3.8,-0.7 3.09,-0.7 C2.1,-0.7 1.45,-1.41 1.44,-2.49 C1.44,-2.49 5.37,-2.49 5.37,-2.49 C5.37,-2.49 5.37,-3.16 5.37,-3.16z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-28.472000122070312,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g style="display: none"></g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-25.7549991607666,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1,0 C1,0 1.94,0 1.94,0 C1.94,0 1.94,-5.54 1.94,-5.54 C1.94,-5.54 1,-5.54 1,-5.54 C1,-5.54 1,0 1,0z M0.93,-6.57 C0.93,-6.57 2.01,-6.57 2.01,-6.57 C2.01,-6.57 2.01,-7.75 2.01,-7.75 C2.01,-7.75 0.93,-7.75 0.93,-7.75 C0.93,-7.75 0.93,-6.57 0.93,-6.57z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-22.982999801635742,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M2.84,0.13 C4.19,0.13 4.96,-0.51 4.96,-1.56 C4.96,-2.44 4.53,-3.01 3.43,-3.13 C3.43,-3.13 2.55,-3.23 2.55,-3.23 C1.86,-3.31 1.55,-3.6 1.55,-4.08 C1.55,-4.61 1.98,-4.91 2.71,-4.91 C3.47,-4.91 3.92,-4.44 4.04,-3.78 C4.04,-3.78 4.97,-3.99 4.97,-3.99 C4.85,-5.01 4,-5.67 2.74,-5.67 C1.43,-5.67 0.63,-5.04 0.63,-4.03 C0.63,-3.18 1.15,-2.56 2.25,-2.44 C2.25,-2.44 3.15,-2.34 3.15,-2.34 C3.74,-2.27 4.03,-2.03 4.03,-1.47 C4.03,-0.95 3.62,-0.64 2.88,-0.64 C2.06,-0.64 1.54,-1.06 1.4,-1.87 C1.4,-1.87 0.44,-1.71 0.44,-1.71 C0.64,-0.52 1.52,0.13 2.84,0.13z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-17.801998138427734,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g style="display: none"></g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-15.085000991821289,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1.05,0 C1.05,0 1.99,0 1.99,0 C1.99,0 1.99,-2.89 1.99,-2.89 C1.99,-4.14 2.54,-4.86 3.49,-4.86 C4.29,-4.86 4.7,-4.35 4.7,-3.38 C4.7,-3.38 4.7,0 4.7,0 C4.7,0 5.64,0 5.64,0 C5.64,0 5.64,-3.45 5.64,-3.45 C5.64,-4.92 5.01,-5.69 3.81,-5.69 C2.95,-5.69 2.33,-5.28 1.99,-4.5 C1.99,-4.5 1.99,-8.03 1.99,-8.03 C1.99,-8.03 1.05,-8.03 1.05,-8.03 C1.05,-8.03 1.05,0 1.05,0z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-8.803998947143555,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1.02,2.23 C1.95,2.23 2.61,1.76 3.12,0.35 C3.12,0.35 5.28,-5.54 5.28,-5.54 C5.28,-5.54 4.27,-5.54 4.27,-5.54 C4.27,-5.54 2.98,-1.68 2.98,-1.68 C2.89,-1.41 2.82,-1.19 2.79,-1.03 C2.79,-1.03 2.77,-1.03 2.77,-1.03 C2.74,-1.19 2.68,-1.41 2.58,-1.68 C2.58,-1.68 1.16,-5.54 1.16,-5.54 C1.16,-5.54 0.11,-5.54 0.11,-5.54 C0.11,-5.54 2.32,-0.07 2.32,-0.07 C2.32,-0.07 2.17,0.34 2.17,0.34 C1.92,1.07 1.57,1.37 0.91,1.37 C0.79,1.37 0.65,1.36 0.51,1.35 C0.51,1.35 0.51,2.18 0.51,2.18 C0.69,2.22 0.85,2.23 1.02,2.23z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-3.260000705718994,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M3.41,-0.7 C2.49,-0.7 1.92,-1.45 1.92,-2.65 C1.92,-2.65 1.92,-2.91 1.92,-2.91 C1.92,-4.11 2.51,-4.84 3.45,-4.84 C4.38,-4.84 4.93,-4.08 4.93,-2.77 C4.93,-1.47 4.35,-0.7 3.41,-0.7z M1,2.16 C1,2.16 1.94,2.16 1.94,2.16 C1.94,2.16 1.94,-0.88 1.94,-0.88 C2.18,-0.33 2.78,0.13 3.63,0.13 C4.97,0.13 5.93,-1 5.93,-2.77 C5.93,-4.52 5.03,-5.67 3.69,-5.67 C2.88,-5.67 2.24,-5.27 1.88,-4.51 C1.88,-4.51 1.88,-5.54 1.88,-5.54 C1.88,-5.54 1,-5.54 1,-5.54 C1,-5.54 1,2.16 1,2.16z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,2.976998805999756,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M3.08,-0.69 C2.08,-0.69 1.5,-1.4 1.5,-2.77 C1.5,-4.14 2.08,-4.85 3.08,-4.85 C4.08,-4.85 4.66,-4.14 4.66,-2.77 C4.66,-1.4 4.08,-0.69 3.08,-0.69z M3.08,0.13 C4.64,0.13 5.66,-0.96 5.66,-2.77 C5.66,-4.58 4.64,-5.67 3.08,-5.67 C1.52,-5.67 0.5,-4.58 0.5,-2.77 C0.5,-0.96 1.52,0.13 3.08,0.13z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,8.94999885559082,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M0.17,-4.76 C0.17,-4.76 1.2,-4.76 1.2,-4.76 C1.2,-4.76 1.2,-1.66 1.2,-1.66 C1.2,-0.63 1.51,0.1 2.7,0.1 C3.06,0.1 3.28,0.07 3.52,0 C3.52,0 3.52,-0.86 3.52,-0.86 C3.33,-0.82 3.19,-0.79 2.95,-0.79 C2.38,-0.79 2.14,-1.06 2.14,-1.69 C2.14,-1.69 2.14,-4.76 2.14,-4.76 C2.14,-4.76 3.52,-4.76 3.52,-4.76 C3.52,-4.76 3.52,-5.54 3.52,-5.54 C3.52,-5.54 2.14,-5.54 2.14,-5.54 C2.14,-5.54 2.14,-7.39 2.14,-7.39 C2.14,-7.39 1.2,-6.99 1.2,-6.99 C1.2,-6.99 1.2,-5.54 1.2,-5.54 C1.2,-5.54 0.17,-5.54 0.17,-5.54 C0.17,-5.54 0.17,-4.76 0.17,-4.76z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,12.909997940063477,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1.05,0 C1.05,0 1.99,0 1.99,0 C1.99,0 1.99,-2.89 1.99,-2.89 C1.99,-4.14 2.54,-4.86 3.49,-4.86 C4.29,-4.86 4.7,-4.35 4.7,-3.38 C4.7,-3.38 4.7,0 4.7,0 C4.7,0 5.64,0 5.64,0 C5.64,0 5.64,-3.45 5.64,-3.45 C5.64,-4.92 5.01,-5.69 3.81,-5.69 C2.95,-5.69 2.33,-5.28 1.99,-4.5 C1.99,-4.5 1.99,-8.03 1.99,-8.03 C1.99,-8.03 1.05,-8.03 1.05,-8.03 C1.05,-8.03 1.05,0 1.05,0z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,19.190996170043945,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M4.42,-3.26 C4.42,-3.26 1.44,-3.26 1.44,-3.26 C1.46,-4.3 2.02,-4.93 2.99,-4.93 C3.9,-4.93 4.42,-4.4 4.42,-3.38 C4.42,-3.38 4.42,-3.26 4.42,-3.26z M5.37,-3.16 C5.37,-4.82 4.51,-5.67 3.01,-5.67 C1.43,-5.67 0.5,-4.55 0.5,-2.7 C0.5,-0.88 1.44,0.13 3.02,0.13 C4.14,0.13 4.95,-0.4 5.34,-1.41 C5.34,-1.41 4.56,-1.75 4.56,-1.75 C4.32,-1.07 3.8,-0.7 3.09,-0.7 C2.1,-0.7 1.45,-1.41 1.44,-2.49 C1.44,-2.49 5.37,-2.49 5.37,-2.49 C5.37,-2.49 5.37,-3.16 5.37,-3.16z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,24.933000564575195,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M0.17,-4.76 C0.17,-4.76 1.2,-4.76 1.2,-4.76 C1.2,-4.76 1.2,-1.66 1.2,-1.66 C1.2,-0.63 1.51,0.1 2.7,0.1 C3.06,0.1 3.28,0.07 3.52,0 C3.52,0 3.52,-0.86 3.52,-0.86 C3.33,-0.82 3.19,-0.79 2.95,-0.79 C2.38,-0.79 2.14,-1.06 2.14,-1.69 C2.14,-1.69 2.14,-4.76 2.14,-4.76 C2.14,-4.76 3.52,-4.76 3.52,-4.76 C3.52,-4.76 3.52,-5.54 3.52,-5.54 C3.52,-5.54 2.14,-5.54 2.14,-5.54 C2.14,-5.54 2.14,-7.39 2.14,-7.39 C2.14,-7.39 1.2,-6.99 1.2,-6.99 C1.2,-6.99 1.2,-5.54 1.2,-5.54 C1.2,-5.54 0.17,-5.54 0.17,-5.54 C0.17,-5.54 0.17,-4.76 0.17,-4.76z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,28.893001556396484,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1,0 C1,0 1.94,0 1.94,0 C1.94,0 1.94,-5.54 1.94,-5.54 C1.94,-5.54 1,-5.54 1,-5.54 C1,-5.54 1,0 1,0z M0.93,-6.57 C0.93,-6.57 2.01,-6.57 2.01,-6.57 C2.01,-6.57 2.01,-7.75 2.01,-7.75 C2.01,-7.75 0.93,-7.75 0.93,-7.75 C0.93,-7.75 0.93,-6.57 0.93,-6.57z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,31.665002822875977,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M3.05,0.13 C4.29,0.13 5.12,-0.6 5.32,-1.86 C5.32,-1.86 4.42,-2.01 4.42,-2.01 C4.28,-1.14 3.81,-0.69 3.06,-0.69 C2.07,-0.69 1.5,-1.45 1.5,-2.78 C1.5,-4.08 2.07,-4.85 3.02,-4.85 C3.78,-4.85 4.27,-4.39 4.36,-3.54 C4.36,-3.54 5.33,-3.66 5.33,-3.66 C5.18,-4.93 4.34,-5.67 3.05,-5.67 C1.47,-5.67 0.5,-4.58 0.5,-2.77 C0.5,-1 1.5,0.13 3.05,0.13z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,37.30799865722656,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M2.58,-0.64 C1.91,-0.64 1.5,-0.97 1.5,-1.52 C1.5,-2.06 1.85,-2.35 2.67,-2.47 C2.67,-2.47 4.18,-2.69 4.18,-2.69 C4.18,-2.69 4.18,-2.41 4.18,-2.41 C4.18,-1.34 3.54,-0.64 2.58,-0.64z M2.37,0.13 C3.28,0.13 3.98,-0.3 4.23,-1.01 C4.24,-0.65 4.28,-0.29 4.32,0 C4.32,0 5.31,0 5.31,0 C5.17,-0.43 5.12,-1.02 5.12,-1.87 C5.12,-1.87 5.12,-3.37 5.12,-3.37 C5.12,-4.98 4.45,-5.67 2.94,-5.67 C1.64,-5.67 0.75,-4.93 0.68,-3.8 C0.68,-3.8 1.68,-3.8 1.68,-3.8 C1.73,-4.5 2.19,-4.9 2.95,-4.9 C3.8,-4.9 4.17,-4.49 4.17,-3.47 C4.17,-3.47 4.17,-3.38 4.17,-3.38 C4.17,-3.38 3.13,-3.26 3.13,-3.26 C2.23,-3.15 1.69,-3.01 1.27,-2.8 C0.78,-2.53 0.5,-2.05 0.5,-1.5 C0.5,-0.51 1.24,0.13 2.37,0.13z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,43.093997955322266,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M1.99,-8.03 C1.99,-8.03 1.05,-8.03 1.05,-8.03 C1.05,-8.03 1.05,0 1.05,0 C1.05,0 1.99,0 1.99,0 C1.99,0 1.99,-8.03 1.99,-8.03z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,45.97600173950195,0.8498992919921875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M2.07,-1.31 C2.07,-1.31 0.78,-1.31 0.78,-1.31 C0.78,-1.31 0.78,0 0.78,0 C0.78,0 2.07,0 2.07,0 C2.07,0 2.07,-1.31 2.07,-1.31z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.10999999940395355,0,0,0.10999999940395355,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
               </g>
               <g
                  style="display: block"
                  transform="matrix(1,0,0,1,362.5,16.5)"
                  opacity="1"
               >
                  <g
                     opacity="1"
                     transform="matrix(1,0,0,1,107.28600311279297,107.28600311279297)"
                  >
                     <path
                     fill="rgb(30,97,107)"
                     fill-opacity="1"
                     d=" M-35.06700134277344,-102.14299774169922 C-33.94200134277344,-105.51399993896484 -29.816999435424805,-106.75299835205078 -27.020999908447266,-104.55899810791016 C-27.020999908447266,-104.55899810791016 -5.934000015258789,-88.01399993896484 -5.934000015258789,-88.01399993896484 C-3.9809999465942383,-86.48100280761719 -1.2120000123977661,-86.56500244140625 0.6460000276565552,-88.21199798583984 C0.6460000276565552,-88.21199798583984 20.702999114990234,-105.99199676513672 20.702999114990234,-105.99199676513672 C23.36199951171875,-108.3499984741211 27.554000854492188,-107.35900115966797 28.878999710083008,-104.06099700927734 C28.878999710083008,-104.06099700927734 38.86800003051758,-79.18900299072266 38.86800003051758,-79.18900299072266 C39.792999267578125,-76.88600158691406 42.233001708984375,-75.572998046875 44.665000915527344,-76.06999969482422 C44.665000915527344,-76.06999969482422 70.92500305175781,-81.44000244140625 70.92500305175781,-81.44000244140625 C74.40699768066406,-82.1520004272461 77.54299926757812,-79.1989974975586 77.04100036621094,-75.68000030517578 C77.04100036621094,-75.68000030517578 73.25599670410156,-49.145999908447266 73.25599670410156,-49.145999908447266 C72.90499877929688,-46.6879997253418 74.36199951171875,-44.332000732421875 76.71700286865234,-43.54600143432617 C76.71700286865234,-43.54600143432617 102.14299774169922,-35.06800079345703 102.14299774169922,-35.06800079345703 C105.51399993896484,-33.94300079345703 106.75399780273438,-29.816999435424805 104.55999755859375,-27.020999908447266 C104.55999755859375,-27.020999908447266 88.01499938964844,-5.934999942779541 88.01499938964844,-5.934999942779541 C86.48200225830078,-3.9820001125335693 86.56500244140625,-1.2130000591278076 88.21199798583984,0.6449999809265137 C88.21199798583984,0.6449999809265137 105.99199676513672,20.70199966430664 105.99199676513672,20.70199966430664 C108.3499984741211,23.36199951171875 107.36000061035156,27.55299949645996 104.06199645996094,28.878000259399414 C104.06199645996094,28.878000259399414 79.19000244140625,38.867000579833984 79.19000244140625,38.867000579833984 C76.88700103759766,39.79199981689453 75.5739974975586,42.233001708984375 76.07099914550781,44.665000915527344 C76.07099914550781,44.665000915527344 81.44100189208984,70.92400360107422 81.44100189208984,70.92400360107422 C82.15299987792969,74.40599822998047 79.19999694824219,77.54100036621094 75.68099975585938,77.04000091552734 C75.68099975585938,77.04000091552734 49.14699935913086,73.25499725341797 49.14699935913086,73.25499725341797 C46.68899917602539,72.90399932861328 44.33300018310547,74.36100006103516 43.547000885009766,76.71600341796875 C43.547000885009766,76.71600341796875 35.06800079345703,102.14299774169922 35.06800079345703,102.14299774169922 C33.94300079345703,105.51399993896484 29.81800079345703,106.75199890136719 27.02199935913086,104.55899810791016 C27.02199935913086,104.55899810791016 5.934999942779541,88.01399993896484 5.934999942779541,88.01399993896484 C3.9820001125335693,86.48200225830078 1.2130000591278076,86.56500244140625 -0.6449999809265137,88.21199798583984 C-0.6449999809265137,88.21199798583984 -20.70199966430664,105.99199676513672 -20.70199966430664,105.99199676513672 C-23.361000061035156,108.3489990234375 -27.55299949645996,107.35900115966797 -28.878000259399414,104.06099700927734 C-28.878000259399414,104.06099700927734 -38.867000579833984,79.18900299072266 -38.867000579833984,79.18900299072266 C-39.79199981689453,76.88500213623047 -42.231998443603516,75.572998046875 -44.66400146484375,76.06999969482422 C-44.66400146484375,76.06999969482422 -70.92400360107422,81.44000244140625 -70.92400360107422,81.44000244140625 C-74.40599822998047,82.1520004272461 -77.54199981689453,79.197998046875 -77.04000091552734,75.68000030517578 C-77.04000091552734,75.68000030517578 -73.25499725341797,49.145999908447266 -73.25499725341797,49.145999908447266 C-72.90399932861328,46.6879997253418 -74.36100006103516,44.33100128173828 -76.71600341796875,43.54600143432617 C-76.71600341796875,43.54600143432617 -102.14199829101562,35.066001892089844 -102.14199829101562,35.066001892089844 C-105.51300048828125,33.94200134277344 -106.75299835205078,29.816999435424805 -104.55899810791016,27.020999908447266 C-104.55899810791016,27.020999908447266 -88.01399993896484,5.934999942779541 -88.01399993896484,5.934999942779541 C-86.48100280761719,3.9820001125335693 -86.56400299072266,1.2109999656677246 -88.21099853515625,-0.6460000276565552 C-88.21099853515625,-0.6460000276565552 -105.99099731445312,-20.70199966430664 -105.99099731445312,-20.70199966430664 C-108.3489990234375,-23.361000061035156 -107.35900115966797,-27.55299949645996 -104.06099700927734,-28.878000259399414 C-104.06099700927734,-28.878000259399414 -79.18900299072266,-38.867000579833984 -79.18900299072266,-38.867000579833984 C-76.88600158691406,-39.79199981689453 -75.572998046875,-42.231998443603516 -76.06999969482422,-44.66400146484375 C-76.06999969482422,-44.66400146484375 -81.44000244140625,-70.92400360107422 -81.44000244140625,-70.92400360107422 C-82.1520004272461,-74.40599822998047 -79.1989974975586,-77.54199981689453 -75.68000030517578,-77.04000091552734 C-75.68000030517578,-77.04000091552734 -49.145999908447266,-73.25499725341797 -49.145999908447266,-73.25499725341797 C-46.68899917602539,-72.90399932861328 -44.332000732421875,-74.36100006103516 -43.54600143432617,-76.71600341796875 C-43.54600143432617,-76.71600341796875 -35.06700134277344,-102.14299774169922 -35.06700134277344,-102.14299774169922z"
                     ></path>
                  </g>
               </g>
               <g
                  style="display: block"
                  fill="rgb(255,255,255)"
                  font-size="46"
                  font-family="GT America"
                  font-style="normal"
                  font-weight="700"
                  aria-label="4.50"
                  transform="matrix(1,0,0,1,477,166)"
                  opacity="1"
               >
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-84.03400421142578,-38.650421142578125)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M18.99,-21.91 C18.99,-21.91 18.99,-12.69 18.99,-12.69 C18.99,-12.69 8.06,-12.69 8.06,-12.69 C8.94,-13.43 9.59,-14.13 10.75,-15.47 C10.75,-15.47 16.54,-22.28 16.54,-22.28 C17.88,-23.81 18.53,-24.74 18.99,-25.71 C18.99,-25.71 19.13,-25.71 19.13,-25.71 C18.99,-24.69 18.99,-23.9 18.99,-21.91z M32.43,-7.04 C32.43,-7.04 32.43,-12.69 32.43,-12.69 C32.43,-12.69 26.68,-12.69 26.68,-12.69 C26.68,-12.69 26.68,-32.2 26.68,-32.2 C26.68,-32.2 17.79,-32.2 17.79,-32.2 C17.79,-32.2 0.51,-12.28 0.51,-12.28 C0.51,-12.28 0.51,-7.04 0.51,-7.04 C0.51,-7.04 18.76,-7.04 18.76,-7.04 C18.76,-7.04 18.76,0 18.76,0 C18.76,0 26.68,0 26.68,0 C26.68,0 26.68,-7.04 26.68,-7.04 C26.68,-7.04 32.43,-7.04 32.43,-7.04z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.46000000834465027,0,0,0.46000000834465027,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-50.08599853515625,-38.650421142578125)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M11.44,-7.55 C11.44,-7.55 2.87,-7.55 2.87,-7.55 C2.87,-7.55 2.87,0 2.87,0 C2.87,0 11.44,0 11.44,0 C11.44,0 11.44,-7.55 11.44,-7.55z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.46000000834465027,0,0,0.46000000834465027,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-36.470001220703125,-38.650421142578125)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M15.84,0.88 C24.83,0.88 30.39,-3.66 30.39,-11.03 C30.39,-18.02 25.94,-22.19 18.53,-22.19 C14.45,-22.19 11.26,-20.89 9.64,-18.62 C9.64,-18.62 10.61,-26.13 10.61,-26.13 C10.61,-26.13 28.4,-26.13 28.4,-26.13 C28.4,-26.13 28.4,-32.2 28.4,-32.2 C28.4,-32.2 4.59,-32.2 4.59,-32.2 C4.59,-32.2 2.5,-13.3 2.5,-13.3 C2.5,-13.3 9.68,-12.65 9.68,-12.65 C10.75,-15.24 12.83,-16.63 16.12,-16.63 C19.97,-16.63 22.28,-14.45 22.28,-10.84 C22.28,-7.23 19.92,-5.1 15.84,-5.1 C12.37,-5.1 10.01,-6.86 9.4,-9.68 C9.4,-9.68 1.53,-8.52 1.53,-8.52 C2.59,-2.69 8.01,0.88 15.84,0.88z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.46000000834465027,0,0,0.46000000834465027,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-5.32800817489624,-38.650421142578125)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M17.65,-5.14 C12.97,-5.14 9.96,-8.85 9.96,-16.08 C9.96,-23.35 12.97,-27.05 17.65,-27.05 C22.38,-27.05 25.39,-23.35 25.39,-16.08 C25.39,-8.85 22.38,-5.14 17.65,-5.14z M17.65,0.88 C27.38,0.88 33.63,-5.47 33.63,-16.08 C33.63,-26.73 27.38,-33.08 17.65,-33.08 C7.92,-33.08 1.71,-26.73 1.71,-16.08 C1.71,-5.47 7.92,0.88 17.65,0.88z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.46000000834465027,0,0,0.46000000834465027,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
               </g>
               <g
                  style="display: block"
                  fill="rgb(255,255,255)"
                  font-size="28"
                  font-family="GT America"
                  font-style="normal"
                  font-weight="700"
                  aria-label="%"
                  transform="matrix(1,0,0,1,710,166)"
                  opacity="1"
               >
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-201,-39.70025634765625)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M21.52,-2.2 C19.88,-2.2 18.81,-3.13 18.81,-4.99 C18.81,-6.8 19.88,-7.73 21.49,-7.73 C23.09,-7.73 24.14,-6.8 24.14,-4.93 C24.14,-3.13 23.09,-2.2 21.52,-2.2z M21.52,0.42 C25.21,0.42 27.78,-1.69 27.75,-4.93 C27.78,-8.21 25.21,-10.35 21.49,-10.35 C17.71,-10.35 15.2,-8.23 15.23,-4.99 C15.2,-1.69 17.71,0.42 21.52,0.42z M6.71,-12.15 C5.08,-12.15 4,-13.08 4,-14.95 C4,-16.75 5.08,-17.68 6.68,-17.68 C8.29,-17.68 9.33,-16.75 9.33,-14.89 C9.33,-13.08 8.29,-12.15 6.71,-12.15z M6.71,-9.53 C10.41,-9.53 12.97,-11.65 12.94,-14.89 C12.97,-18.16 10.41,-20.3 6.68,-20.3 C2.9,-20.3 0.39,-18.19 0.42,-14.95 C0.39,-11.65 2.9,-9.53 6.71,-9.53z M4.29,0.45 C4.29,0.45 7.7,0.45 7.7,0.45 C7.7,0.45 23.94,-20.42 23.94,-20.42 C23.94,-20.42 20.53,-20.42 20.53,-20.42 C20.53,-20.42 4.29,0.45 4.29,0.45z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.2800000011920929,0,0,0.2800000011920929,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
               </g>
               <g
                  style="display: block"
                  fill="rgb(255,255,255)"
                  font-size="20"
                  font-family="GT America"
                  font-style="normal"
                  font-weight="700"
                  aria-label="APY*"
                  transform="matrix(1,0,0,1,645.5,204.5)"
                  opacity="1"
               >
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-201,-45.50018310546875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M6.14,-5.58 C6.14,-5.58 7.51,-9.16 7.51,-9.16 C7.96,-10.19 8.24,-10.86 8.44,-11.82 C8.44,-11.82 8.48,-11.82 8.48,-11.82 C8.7,-10.86 8.98,-10.19 9.43,-9.16 C9.43,-9.16 10.8,-5.58 10.8,-5.58 C10.8,-5.58 6.14,-5.58 6.14,-5.58z M12.93,0 C12.93,0 16.68,0 16.68,0 C16.68,0 10.61,-14.3 10.61,-14.3 C10.61,-14.3 6.32,-14.3 6.32,-14.3 C6.32,-14.3 0.24,0 0.24,0 C0.24,0 3.99,0 3.99,0 C3.99,0 5.2,-3.12 5.2,-3.12 C5.2,-3.12 11.74,-3.12 11.74,-3.12 C11.74,-3.12 12.93,0 12.93,0z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.20000000298023224,0,0,0.20000000298023224,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-183.9199981689453,-45.50018310546875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M8.56,-7.43 C8.56,-7.43 5.26,-7.43 5.26,-7.43 C5.26,-7.43 5.26,-11.76 5.26,-11.76 C5.26,-11.76 8.56,-11.76 8.56,-11.76 C10.19,-11.76 11.1,-10.98 11.1,-9.61 C11.1,-8.22 10.17,-7.43 8.56,-7.43z M9.45,-14.3 C9.45,-14.3 1.65,-14.3 1.65,-14.3 C1.65,-14.3 1.65,0 1.65,0 C1.65,0 5.26,0 5.26,0 C5.26,0 5.26,-4.93 5.26,-4.93 C5.26,-4.93 9.33,-4.93 9.33,-4.93 C12.75,-4.93 14.9,-6.77 14.9,-9.71 C14.9,-12.53 12.79,-14.3 9.45,-14.3z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.20000000298023224,0,0,0.20000000298023224,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-169.0800018310547,-45.50018310546875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M5.68,0 C5.68,0 9.31,0 9.31,0 C9.31,0 9.31,-5.02 9.31,-5.02 C9.31,-5.02 15.11,-14.3 15.11,-14.3 C15.11,-14.3 11.24,-14.3 11.24,-14.3 C11.24,-14.3 7.92,-8.76 7.92,-8.76 C7.71,-8.4 7.59,-8.12 7.53,-7.82 C7.53,-7.82 7.49,-7.82 7.49,-7.82 C7.43,-8.12 7.31,-8.4 7.11,-8.76 C7.11,-8.76 3.87,-14.3 3.87,-14.3 C3.87,-14.3 -0.1,-14.3 -0.1,-14.3 C-0.1,-14.3 5.68,-5.02 5.68,-5.02 C5.68,-5.02 5.68,0 5.68,0z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.20000000298023224,0,0,0.20000000298023224,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
                  <g
                     stroke-linecap="butt"
                     stroke-linejoin="round"
                     stroke-miterlimit="4"
                     style="display: inherit"
                     transform="matrix(1,0,0,1,-153.47999572753906,-45.50018310546875)"
                     opacity="1"
                  >
                     <g>
                     <g
                        style="display: block"
                        transform="matrix(1,0,0,1,0,0)"
                        opacity="1"
                     >
                        <path
                           d=" M7.98,-10.92 C7.98,-10.92 7.19,-13.27 7.19,-13.27 C7.19,-13.27 4.75,-11.82 4.75,-11.82 C4.75,-11.82 5.36,-14.54 5.36,-14.54 C5.36,-14.54 2.82,-14.54 2.82,-14.54 C2.82,-14.54 3.42,-11.82 3.42,-11.82 C3.42,-11.82 0.97,-13.27 0.97,-13.27 C0.97,-13.27 0.2,-10.92 0.2,-10.92 C0.2,-10.92 3.02,-10.59 3.02,-10.59 C3.02,-10.59 0.85,-8.68 0.85,-8.68 C0.85,-8.68 2.86,-7.23 2.86,-7.23 C2.86,-7.23 4.09,-9.85 4.09,-9.85 C4.09,-9.85 5.3,-7.23 5.3,-7.23 C5.3,-7.23 7.33,-8.68 7.33,-8.68 C7.33,-8.68 5.16,-10.59 5.16,-10.59 C5.16,-10.59 7.98,-10.92 7.98,-10.92z"
                        ></path>
                        <g
                           opacity="1"
                           transform="matrix(0.20000000298023224,0,0,0.20000000298023224,0,0)"
                        ></g>
                     </g>
                     </g>
                  </g>
               </g>
               </g>
            </svg>
            <!-- <img
               src="./images/c.png"
               alt=""
            /> -->
         </div>
         </div>
      </section>

      <!-- Start About -->
      <section class="lqd-section about pt-100 pb-100" id="about">
         <div class="container">
         <div class="row items-center">
            <div class="col col-12 col-lg-6 offset-xl-1">
               <div
               class="lqd-imggrp-container relative mb-2em transition-all"
               data-parallax="true"
               data-parallax-from='{"y" : 90}'
               data-parallax-to='{"y" : -80}'
               data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
               >
               <div class="lqd-imggrp-single flex relative">
                  <div
                     class="lqd-imggrp-img-container w-full relative inline-flex items-center justify-start"
                  >
                     <figure class="w-full">
                     <img
                        src="{{ asset("images/ira-retirement.png") }}"
                        alt="retirement planning"
                     />
                     </figure>
                  </div>
               </div>
               </div>
            </div>
            <div
               class="col col-12 col-lg-6 col-xl-5"
               data-custom-animations="true"
               data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"x" : 35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"x" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
            >
               <div class="ld-fancy-heading ld-fh-has-fill uppercase">
               <h6
                  class="ld-fh-element rounded-full py-10 px-20 mb-2em bg-purple-50 text-13 uppercase tracking-0/05em font-bold"
               >
                  RETIREMENT PLANNING
               </h6>
               </div>
               <div class="ld-fancy-heading">
               <h2 class="ld-fh-element mb-0/5em">
                  Retire with confidence using our IRAs.
               </h2>
               </div>
               <div class="ld-fancy-heading">
               <p class="ld-fh-element mb-1/75em leading-1/3em text-18">
                  <strong
                     >Tax advantages, automated investing, and expert
                     guidance</strong
                  >
                  to help you build wealth for retirement.
               </p>
               </div>
               <div class="ld-fancy-heading">
               <ul class="ld-fh-element mb-1/75em leading-1/3em text-16">
                  <li class="mb-0/5em">
                     Traditional, Roth, and SEP IRAs available
                  </li>
                  <li class="mb-0/5em">Easy rollovers from old 401(k)s</li>
                  <li class="mb-0/5em">Smart tools to track your progress</li>
               </ul>
               </div>
               <div class="ld-fancy-heading">
               <div
                  class="ld-fh-element mb-1/75em p-20 bg-blue-50 rounded-10"
               >
                  <h4 class="mb-0/5em text-16 font-bold">
                     Limited time: Get 1% match
                  </h4>
                  <p class="mb-0/75em text-14 leading-1/3em">
                     We'll match 1% of your IRA contributions through December
                     30, 2024.
                  </p>
                  <!-- <p class="text-12 text-gray-600">
                     <a href="{{ url("#") }}" class="text-blue-600">Learn how to claim →</a>
                  </p> -->
               </div>
               </div>
               <a
               href="{{ url("investments") }}"
               class="btn btn-solid rounded-full border-none btn-hover-swp py-1/15em px-2/1em text-white bg-primary text-16 leading-1/3em hover:bg-primary-dark"
               data-lity="#contact-modal"
               >
               <span class="btn-txt" data-text="Open an IRA"
                  >Open an IRA</span
               >
               <span class="btn-icon ml-20">
                  <i class="lqd-icn-ess icon-md-arrow-forward"></i>
               </span>
               <span class="btn-icon ml-20">
                  <i class="lqd-icn-ess icon-md-arrow-forward"></i>
               </span>
               </a>
               <!-- <div class="mt-1em">
               <a href="{{ url("#") }}" class="text-blue-600 text-14 font-medium"
                  >Learn more ➔</a
               >
               </div> -->
            </div>
         </div>
         </div>
      </section>
      <!-- End About -->

      <!-- Start Case Study -->
      <section
         class="lqd-section case-study pt-30 pb-50"
         data-custom-animations="true"
         data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 45, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'
      >
         <div class="container">
         <div class="row justify-center">
            <div class="col col-12 col-xl-6 text-center p-0 mb-30">
               <div class="title-module">
               <div class="ld-fancy-heading relative animation-element">
                  <h2 class="ld-fh-element inline-block relative mb-0/5em">
                     Investment Services
                  </h2>
               </div>
               <div class="ld-fancy-heading relative animation-element">
                  <p
                     class="ld-fh-element inline-block relative mb-0/5em text-20 leading-1/7em"
                  >
                     Ready to get started? Check out our most popular accounts.
                  </p>
               </div>
               </div>
            </div>
            <div class="col col-12 p-0"></div>
            <div
               class="col col-12 col-md-6 col-xl-3 p-20 module-content module-1"
            >
               <div
               class="icon-box-module py-45 px-30 bg-white rounded-10 mb-30 sm:m-0 animation-element"
               >
               <div
                  class="iconbox text-start mb-0 items-start flex flex-grow-1 relative flex-col iconbox-default"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container inline-flex relative z-1 rounded-full mb-25 w-55 h-55 text-26 bg-green-100"
                     >
                     <svg width="27" height="27" viewBox="0 0 24 24">
                        <path
                           fill="#50CF80"
                           d="M7 10l5 5 5-5M12 3v12M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7"
                        ></path>
                     </svg>
                     </div>
                  </div>
                  <div class="contents text-start">
                     <span
                     class="iconbox-label inline-block absolute rounded-100 font-bold uppercase tracking-0/1em top-0 right-0 bg-green-100"
                     >
                     INVEST
                     </span>
                     <h3 class="lqd-iconbox-heading text-20 mb-0/75em">
                     Automated Investing
                     </h3>
                     <div class="text-14 mb-2/5rem">
                     Build wealth with diversified, expert-built portfolios.
                     </div>
                     <a
                     href="{{ route("investments") }}"
                     class="btn btn-naked btn-icon-right btn-hover-reveal mt-1/5em mb-0 tracking-1/5 leading-1/4em text-13 uppercase font-bold text-blue-600"
                     >
                     <span class="btn-txt" data-text="― Start Investment">
                        ― Start Investment
                     </span>
                     <span class="btn-icon text-18">
                        <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                     </span>
                     </a>
                  </div>
               </div>
               </div>
            </div>
            <div
               class="col col-12 col-md-6 col-xl-3 p-20 module-content module-2"
            >
               <div
               class="icon-box-module py-45 px-30 bg-white rounded-10 mt-60 mb-30 lg:mt-0 sm:m-0 animation-element"
               >
               <div
                  class="iconbox text-start mb-0 items-start flex flex-grow-1 relative flex-col iconbox-default"
               >
                  <span
                     class="iconbox-label inline-block absolute rounded-100 font-bold uppercase tracking-0/1em top-0 right-0 bg-gray-100"
                  >
                     Popular
                  </span>
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container inline-flex relative z-1 rounded-full mb-25 w-55 h-55 text-26 bg-blue-100"
                     >
                     <svg width="27" height="27" viewBox="0 0 24 24">
                        <path
                           fill="#67C8D8"
                           d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"
                        ></path>
                     </svg>
                     </div>
                  </div>
                  <div class="contents text-start">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/75em">
                     High-yield Cash
                     </h3>
                     <div class="text-14 mb-2/5rem">
                     Earn more interest on your savings with 4.50% variable
                     APY.*
                     </div>
                     <a
                     href="{{ route("savings") }}"
                     class="btn btn-naked btn-icon-right btn-hover-reveal mt-1/5em mb-0 tracking-1/5 leading-1/4em text-13 uppercase font-bold text-blue-600"
                     >
                     <span class="btn-txt" data-text="― Start Saving">
                        ― Start Saving
                     </span>
                     <span class="btn-icon text-18">
                        <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                     </span>
                     </a>
                  </div>
               </div>
               </div>
            </div>
            <div
               class="col col-12 col-md-6 col-xl-3 p-20 module-content module-3"
            >
               <div
               class="icon-box-module py-45 px-30 bg-white rounded-10 mb-30 sm:m-0 animation-element"
               >
               <div
                  class="iconbox text-start mb-0 items-start flex flex-grow-1 relative flex-col iconbox-default"
               >
                  <div class="iconbox-icon-wrap">
                     <div
                     class="iconbox-icon-container inline-flex relative z-1 rounded-full mb-25 w-55 h-55 text-26 bg-purple-100"
                     >
                     <svg width="27" height="27" viewBox="0 0 24 24">
                        <path
                           fill="#DD74C3"
                           d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm1 15h-2v-6h2zm0-8h-2V7h2z"
                        ></path>
                     </svg>
                     </div>
                  </div>
                  <div class="contents text-start">
                     <h3 class="lqd-iconbox-heading text-20 mb-0/75em">
                     IRAs
                     </h3>
                     <div class="text-14 mb-2/5rem">
                     Grow your retirement savings with a tax-advantaged IRA.
                     </div>
                     <a
                     href="{{ route("dashboard") }}"
                     class="btn btn-naked btn-icon-right btn-hover-reveal mt-1/5em mb-0 tracking-1/5 leading-1/4em text-13 uppercase font-bold text-blue-600"
                     >
                     <span class="btn-txt" data-text="― Open an IRA">
                        ― Open an IRA
                     </span>
                     <span class="btn-icon text-18">
                        <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                     </span>
                     </a>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Case Study -->

      <!-- Start Testimonial -->
      <section
         class="lqd-section testimonial pt-170 pb-85 bg-slate-100 transition-all"
         id="testimonial"
      >
         <div class="lqd-shape lqd-shape-top" data-negative="false">
         <svg
            class="lqd-custom-shape left-0 rotate-180"
            preserveaspectratio="none"
            viewbox="0 0 1440 150"
         >
            <path
               class="lqd-shape-fill"
               d="M 0 26.1978 C 275.76 83.8152 430.707 65.0509 716.279 25.6386 C 930.422 -3.86123 1210.32 -3.98357 1439 9.18045 C 2072.34 45.9691 2201.93 62.4429 2560 26.198 V 172.199 L 0 172.199 V 26.1978 Z"
               fill="#fff"
            >
               <animate
               repeatCount="indefinite"
               fill="freeze"
               attributeName="d"
               dur="10s"
               values="M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z; M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z; M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z; M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z"
               ></animate>
            </path>
         </svg>
         </div>
         <div class="container">
         <div class="row items-center content-center">
            <div class="col col-12 col-xl-6 p-15">
               <div class="image-container flex justify-center items-center">
               <div
                  class="lqd-imggrp-single text-center block relative perspective m-auto w-65percent lg:w-full"
                  data-hover3d="true"
               >
                  <div
                     class="lqd-imggrp-img-container inline-flex relative transform-style-3d"
                  >
                     <figure class="w-full relative" data-stacking-factor="1">
                     <img
                        width="750"
                        height="750"
                        src="{{ asset("frontend/images/demo/digital-hub/avatar-testimonial.png") }}"
                        alt="Testimonial"
                     />
                     </figure>
                  </div>
               </div>
               </div>
            </div>
            <div class="col col-12 col-xl-6 p-15">
               <div class="title-container">
               <div class="ld-fancy-heading relative">
                  <h6
                     class="ld-fh-element mb-0/5em inline-block relative text-15 uppercase font-bold tracking-2/5 text-green-900"
                  >
                     Testimonials
                  </h6>
               </div>
               </div>
               <div
               class="carousel-container relative carousel-nav-left carousel-nav-lg carousel-nav-shaped carousel-nav-solid carousel-nav-circle carousel-nav-left carousel-dots-mobile-outside carousel-dots-mobile-left"
               >
               <div
                  class="carousel-items relative -mx-30 lg:mx-0"
                  data-lqd-flickity='{"prevNextButtons": true, "groupCells": true, "navArrow": "6", "cellAlign": "left", "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "pageDots": false}'
               >
                  <div
                     class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <h5 class="mt-1em">
                           <span
                           class="text-22 font-normal text-nightblue leading-35"
                           >
                           "I like the different types of accounts offered,
                           the high APY, and how easy it is to check my
                           accounts on mobile."
                           </span>
                        </h5>
                        <h3 class="mb-0 mt-1em">
                           <span class="text-14 text-nightblue">
                           Karen G.
                           </span>
                        </h3>
                        <!-- <h6 class="mt-1em">
                           <span class="text-12 text-blue-200 m-0">
                           TWITTER CEO
                           </span>
                        </h6> -->
                     </div>
                     </div>
                  </div>
                  <div
                     class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <h5 class="mt-1em">
                           <span
                           class="text-22 font-normal text-nightblue leading-35"
                           >
                           "Saves the stress and hassle of handling
                           retirement savings myself."
                           </span>
                        </h5>
                        <h3 class="mb-0 mt-1em">
                           <span class="text-14 text-nightblue">
                           David S.
                           </span>
                        </h3>
                        <!-- <h6 class="mt-1em">
                           <span class="text-12 text-blue-200 m-0">
                           TWITTER CEO
                           </span>
                        </h6> -->
                     </div>
                     </div>
                  </div>
                  <div
                     class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0"
                  >
                     <div class="carousel-item-inner relative w-full">
                     <div class="carousel-item-content relative w-full">
                        <h5 class="mt-1em">
                           <span
                           class="text-22 font-normal text-nightblue leading-35"
                           >
                           "It's a good "set-it-and-forget-it" investing tool
                           for my family."
                           </span>
                        </h5>
                        <h3 class="mb-0 mt-1em">
                           <span class="text-14 text-nightblue">
                           Casey M.
                           </span>
                        </h3>
                        <!-- <h6 class="mt-1em">
                           <span class="text-12 text-blue-200 m-0">
                           TWITTER CEO
                           </span>
                        </h6> -->
                     </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Testimonial -->

      <!-- Start Contact -->
      <section
         class="lqd-section contact pt-75 pb-100 bg-slate-100 transition-all"
         id="contact"
      >
         <div class="lqd-shape lqd-shape-bottom" data-negative="true">
         <svg
            class="h-80 left-0"
            viewbox="0 0 1000 100"
            preserveaspectratio="none"
         >
            <path
               class="lqd-shape-fill"
               d="M790.5, 93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2, 1.1-22.6, 1.4-50.1, 7.4c-27.2, 6.3-58.2, 16.6-79.4, 24.7c-41.3, 15.9-94.9, 21.9-134, 22.6C72, 58.2, 0, 25.8, 0, 25.8V100h1000V65.3 c0, 0-51.5, 19.4-106.2, 25.7C839.5, 97, 814.1, 95.2, 790.5, 93.1z"
               fill="#fff"
            ></path>
         </svg>
         </div>
         <div class="container">
         <div class="row items-center">
            <div
               class="col col-12 col-xl-6 p-0"
               data-custom-animations="true"
               data-ca-options='{"animationTarget": ".animation-element,  .animation-element .split-inner", "ease": "power4.out", "initValues": {"y": "50px"} , "animations": {"y": "0px"}}'
            >
               <div class="w-full flex items-center">
               <div
                  class="w-70percent flex flex-col items-start p-10 lg:w-full lg:text-center"
               >
                  <div
                     class="ld-fancy-heading relative mask-text lg:w-full animation-element"
                  >
                     <h2
                     class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-46"
                     data-inview="true"
                     data-transition-delay="true"
                     data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                     data-split-text="false"
                     data-split-options='{"type": "lines"}'
                     >
                     <mark class="lqd-highlight">
                        <span class="lqd-highlight-txt"> Have any </span>
                        <span
                           class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"
                        ></span>
                     </mark>
                     <mark class="lqd-highlight">
                        <span class="lqd-highlight-txt"> Questions? </span>
                        <span
                           class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"
                        ></span>
                     </mark>
                     </h2>
                  </div>
                  <div
                     class="ld-fancy-heading relative mask-text lg:w-full animation-element"
                  >
                     <p
                     class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-blue-700"
                     data-split-text="true"
                     data-split-options='{"type": "lines"}'
                     >
                     You can contact us via email or phone
                     </p>
                  </div>
               </div>
               <div
                  class="w-30percent flex items-center p-10 lg:hidden"
                  data-custom-animations="true"
                  data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 350, "ease": "power4.out", "initValues": {"x": "-30px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'
               >
                  <div
                     class="-mr-15percent -mb-40percent -ml-15percent animation-element"
                  >
                     <div
                     class="lqd-imggrp-single block relative perspective"
                     data-hover3d="true"
                     data-float="ease"
                     >
                     <div
                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d"
                     >
                        <figure
                           class="w-full relative"
                           data-stacking-factor="1"
                        >
                           <img
                           width="308"
                           height="552"
                           src="{{ asset("frontend/images/demo/digital-hub/shape-person.png") }}"
                           alt="consultaition"
                           />
                        </figure>
                     </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
            <div
               class="col col-12 col-xl-6 p-10"
               data-custom-animations="true"
               data-ca-options='{"animationTarget": ".animation-element,  p,  h4", "startDelay" : 700, "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
            >
               <div
               class="w-full flex flex-wrap bg-white shadow-md transition-all"
               >
               <div
                  class="w-50percent flex flex-col border-right border-black-10 py-30 pr-30 pl-60 sm:w-full module-white animation-element"
               >
                  <div class="ld-fancy-heading relative">
                     <p
                     class="ld-fh-element inline-block relative m-0 text-blue-200"
                     >
                     Email
                     </p>
                  </div>
                  <div class="ld-fancy-heading relative">
                     <h4
                     class="ld-fh-element inline-block relative m-0 text-20 text-blue-700"
                     >
                     info@crestwood.com
                     </h4>
                  </div>
               </div>
               <div
                  class="w-50percent flex flex-col py-30 pr-30 pl-60 sm:w-full module-white animation-element"
               >
                  <div class="ld-fancy-heading relative">
                     <p
                     class="ld-fh-element inline-block relative m-0 text-blue-200"
                     >
                     Phone
                     </p>
                  </div>
                  <div class="ld-fancy-heading relative">
                     <h4
                     class="ld-fh-element inline-block relative m-0 text-20 text-blue-700"
                     >
                     + 1 223 38 87 XXX
                     </h4>
                  </div>
               </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- End Contact -->

      <!-- Footer -->

      @include('frontend.layouts.footer')
      
   </main>

@endsection