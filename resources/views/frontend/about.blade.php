@extends('frontend.layouts.sub')

@section('title', 'About')

@section('content')

   <main class="content" id="lqd-site-content">
      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-100 tw-text-dark"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em tw-text-dark">
               Making people's lives better
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               We're here to help people turn everyday investments, no matter how small, into their dreams, no matter how big.
               </p>
               
               <!-- <a
               href="{{ route('dashboard') }}"
               class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
               >Get Started</a
               > -->
            </div>
         </div>
         <div class="">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/dashboard-illustration-download-in-svg-png-gif-file-formats--analytics-logo-admin-panel-web-website-layout-ui-digital-marketing-pack-people-illustrations-3726403.png" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">Your Goals, Your Way</h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Whether you're dreaming of early retirement, passionate about
               sustainable investing, or simply want to automate your
               savings, we make it effortless. Your financial journey is
               unique, and we're here to support every step.
               </p>
            </div>
         </div>
         <div class="">
            <img src="/images/woman-on-phone.png" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="">
            <img src="/images/who-we-are-2.png" alt="" />
         </div>
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Financial Confidence, Delivered
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               We cut through the complexity of finance. Our platform helps
               you set clear goals, understand your investments, and build
               lasting wealth. Your financial peace of mind is our priority.
               </p>
            </div>
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em">
               Technology Meets Expertise
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Experience the perfect blend of cutting-edge technology and
               expert guidance. Our automated investing platform, combined
               with personalized advice, puts you in control of your
               financial future.
               </p>
            </div>
         </div>
         <div class="">
            <img src="../images/who-we-are-3.png" alt="" />
         </div>
         </div>
      </section>

      <section
         class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-gray-200"
      >
         <div
         class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
         >
         <div class="">
            <img src="../images/sarah-levy-ceo.png" alt="" />
         </div>
         <div class="row justify-between">
            <div class="flex flex-col items-start module-content">
               <h2 class="ld-fh-element mb-0/5em tw-text-lg">
               We're not just changing the game – we're rewriting the rules
               of financial services. Every innovation, every feature, every
               decision is made with one goal: to create a better financial
               future for our clients.
               </h2>
               <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
               Sarah Levy, CEO
               </p>
            </div>
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
            Ready to Transform Your Financial Future?
         </h2>
         <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-text-white tw-rounded tw-px-6 tw-py-2"
            >Start Your Journey</a
         >
         </div>
      </section>
      <!-- Footer -->
      
   </main>

@endsection