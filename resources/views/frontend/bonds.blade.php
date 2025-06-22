@extends('frontend.layouts.sub')

@section('title', ' Bonds Investment')

@section('content')
   
<div>
   <!-- <section class="hero-section">
      <div class="hero-content">
      <h1 class="hero-title">Where will your money work best?</h1>
      <p class="hero-description">
         Get personalized investment strategies that fit your life. Whether
         you prioritize security or growth, we'll build a portfolio around
         your goals and comfort zone.
      </p>
      <a href="{{ route('dashboard') }}" class="cta-button">Start Your Journey</a>
      </div>
      <div class="hero-curve"></div>
   </section> -->

   <section
      class="lqd-section accordion tw-px-4 md:tw-px-8 lg:tw-px-20 tw-py-12 md:tw-py-20 lg:tw-py-50 md:p-0 tw-bg-blue-200"
   >
      <div
      class="container tw-grid tw-gap-6 lg:tw-gap-12 md:tw-items-center tw-grid-cols-1 md:tw-grid-cols-2"
      >
      <div class="row justify-between">
         <div class="flex flex-col items-start module-content">
            <h2 class="ld-fh-element mb-0/5em">
            Where will your money work best?
            </h2>
            <p class="ld-fh-element mb-1/5em text-18 leading-1/5em">
            Get personalized investment strategies that fit your life. Whether
            you prioritize security or growth, we'll build a portfolio around
            your goals and comfort zone.
            </p>
            <a
            href="{{ route('dashboard') }}"
            class="tw-bg-blue-500 tw-px-6 tw-py-2 tw-rounded tw-text-white"
            >Start Your Journey</a
            >
         </div>
      </div>
      <div class="">
         <img src="https://content.schwab.com/media/video/brand-journalism/investing-basics-bonds/investing-basics-bonds.jpg" alt="" />
      </div>
      </div>
   </section>

   <section class="investment-options">
      <div class="container">
      <h2 class="section-title">Find Your Ideal Investment Strategy</h2>

      <div class="risk-spectrum">
         <div class="risk-labels">
            <span class="risk-label-left">Conservative Growth</span>
            <span class="risk-label-right">Aggressive Growth</span>
         </div>
         <div class="risk-bar">
            <div class="risk-gradient"></div>
         </div>
      </div>

      <div class="investment-cards">
         <div class="investment-card">
            <div class="card-header">
            <span class="card-category">Cash Management</span>
            <div class="card-icon cash-icon">
               <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
               >
                  <rect
                  x="2"
                  y="6"
                  width="20"
                  height="12"
                  rx="2"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <rect
                  x="6"
                  y="10"
                  width="4"
                  height="4"
                  rx="1"
                  fill="currentColor"
                  />
                  <path
                  d="M14 10h4M14 14h4"
                  stroke="currentColor"
                  stroke-width="2"
                  />
               </svg>
            </div>
            </div>
            <h3 class="card-title">High-Yield Cash Account</h3>
            <p class="card-description">
            Maximize your savings with competitive interest rates while
            maintaining full access to your funds. Perfect for emergency
            funds and short-term goals.
            </p>

            <div class="card-details">
            <div class="detail-item">
               <span class="detail-label">Current Yield</span>
               <span class="detail-value">4.50% APY** (variable)</span>
            </div>
            <div class="detail-item">
               <span class="detail-label">Security</span>
               <span class="detail-value"
                  >FDIC insurance up to $2M through program banks<sup
                  >1</sup
                  ></span
               >
            </div>
            </div>

            <a hraf="" class="card-button primary">Open Cash Account</a>
            <a hraf="" class="card-button secondary">Explore Details</a>
         </div>

         <div class="investment-card">
            <div class="card-header">
            <span class="card-category">Tax-Efficient</span>
            <div class="card-icon bonds-icon">
               <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                  d="M3 3v18h18"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <path
                  d="M7 16l4-4 4 4 4-8"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <circle cx="7" cy="16" r="2" fill="currentColor" />
                  <circle cx="11" cy="12" r="2" fill="currentColor" />
                  <circle cx="15" cy="16" r="2" fill="currentColor" />
               </svg>
            </div>
            </div>
            <h3 class="card-title">Goldman Sachs Tax-Smart Bonds</h3>
            <p class="card-description">
            Optimize your after-tax returns with a personalized bond
            portfolio designed for high-income individuals seeking
            tax-efficient income generation.
            </p>

            <div class="card-details">
            <div class="detail-item">
               <span class="detail-label">Target Yield</span>
               <span class="detail-value">4.04%**</span>
            </div>
            <div class="detail-item">
               <span class="detail-label">Risk Profile</span>
               <span class="detail-value">Conservative</span>
            </div>
            </div>

            <a hraf="" class="card-button primary">Start with Bonds</a>
            <a hraf="" class="card-button secondary">Learn More</a>
         </div>

         <div class="investment-card">
            <div class="card-header">
            <span class="card-category">Income Focus</span>
            <div class="card-icon bonds-icon">
               <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                  d="M3 12l6-6 4 4 8-8"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <circle
                  cx="9"
                  cy="6"
                  r="2"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <circle
                  cx="13"
                  cy="10"
                  r="2"
                  stroke="currentColor"
                  stroke-width="2"
                  />
               </svg>
            </div>
            </div>
            <h3 class="card-title">BlackRock Target Income</h3>
            <p class="card-description">
            Generate consistent income while managing market volatility.
            Choose from four risk levels to match your comfort zone and
            income needs.
            </p>

            <div class="card-details">
            <div class="detail-item">
               <span class="detail-label">Yield Range</span>
               <span class="detail-value">4.40% - 5.70%**</span>
            </div>
            <div class="detail-item">
               <span class="detail-label">Risk Profile</span>
               <span class="detail-value">Conservative to Moderate</span>
            </div>
            </div>

            <a hraf="" class="card-button primary">Start with Bonds</a>
            <a hraf="" class="card-button secondary">Learn More</a>
         </div>

         <div class="investment-card">
            <div class="card-header">
            <span class="card-category">Growth Focus</span>
            <div class="card-icon stocks-icon">
               <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                  d="M3 3v18h18"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <path
                  d="M7 12l3-3 4 4 5-5"
                  stroke="currentColor"
                  stroke-width="2"
                  />
                  <path
                  d="M17 8h4v4"
                  stroke="currentColor"
                  stroke-width="2"
                  />
               </svg>
            </div>
            </div>
            <h3 class="card-title">Diversified Investment Portfolios</h3>
            <p class="card-description">
            Build long-term wealth through carefully balanced portfolios
            of stocks and bonds, professionally managed to align with your
            investment goals.
            </p>

            <div class="card-details">
            <div class="detail-item">
               <span class="detail-label">Performance</span>
               <span class="detail-value link"
                  >View Historical Returns</span
               >
            </div>
            <div class="detail-item">
               <span class="detail-label">Risk Profile</span>
               <span class="detail-value">Moderate to Aggressive</span>
            </div>
            </div>

            <a hraf="" class="card-button primary">Start Investing</a>
            <a hraf="" class="card-button secondary">Learn More</a>
         </div>
      </div>

      <div class="disclaimer">
         **Annualized blended 30-day SEC yield as of 10-27-2024. Yield for
         Goldman Sachs Tax-Smart Bonds assumes an individual filing single
         who resides in California with a 35% federal tax rate and $260K
         income. Past performance is not indicative of future results.
         Investment returns and principal value will fluctuate.
      </div>
      </div>
   </section>

   <section class="resources-section">
      <div class="container">
      <h2 class="resources-title">Expert Insights & Resources</h2>

      <div class="resources-grid">
         <div class="resource-card">
            <div class="resource-image">
            <div class="mountain-scene">
               <div class="sky-gradient"></div>
               <div class="mountains">
                  <div class="mountain mountain1"></div>
                  <div class="mountain mountain2"></div>
                  <div class="mountain mountain3"></div>
               </div>
               <div class="hiker">
                  <div class="hiker-body"></div>
                  <div class="hiker-head"></div>
                  <div class="hiker-backpack"></div>
                  <div class="hiker-arm"></div>
               </div>
               <div class="dip-sign">
                  <div class="sign-post"></div>
                  <div class="sign-board">
                  <span>DIP</span>
                  <span class="ahead">AHEAD?</span>
                  </div>
               </div>
            </div>
            </div>
            <h3 class="resource-title">
            Interest Rate Outlook: What's Next?
            </h3>
            <p class="resource-description">
            Our investment team analyzes 40 years of interest rate trends
            to help you navigate the current market environment and make
            informed decisions.
            </p>
         </div>

         <div class="resource-card">
            <div class="resource-image">
            <div class="qa-scene">
               <div class="qa-background"></div>
               <div class="clouds">
                  <div class="cloud cloud1"></div>
                  <div class="cloud cloud2"></div>
                  <div class="cloud cloud3"></div>
               </div>
               <div class="qa-person">
                  <div class="person-body"></div>
                  <div class="person-head"></div>
                  <div class="person-hair"></div>
               </div>
               <div class="qa-bubbles">
                  <div class="q-bubble">Q</div>
                  <div class="a-bubble">A</div>
               </div>
               <div class="qa-circle"></div>
            </div>
            </div>
            <h3 class="resource-title">Bonds: Your Questions Answered</h3>
            <p class="resource-description">
            Join our Director of Investing, Mindy Yu, as she breaks down
            bond investing fundamentals and helps you determine if bonds
            align with your financial goals.
            </p>
         </div>

         <div class="resource-card">
            <div class="resource-image">
            <div class="blackrock-scene">
               <div class="blackrock-card">
                  <div class="blackrock-header">
                  <div class="blackrock-logo">
                     <div class="logo-circle">
                        <div class="logo-star">★</div>
                     </div>
                  </div>
                  <span class="blackrock-title"
                     >BlackRock Target Income</span
                  >
                  </div>
                  <div class="risk-info">
                  <div class="risk-label">Overall risk</div>
                  <div class="risk-value">Conservative</div>
                  </div>
               </div>
            </div>
            </div>
            <h3 class="resource-title">Bond Investing Made Simple</h3>
            <p class="resource-description">
            Demystify bond investing with our comprehensive guide. Learn
            how bonds can enhance your portfolio and generate consistent
            income.
            </p>
         </div>

         <div class="resource-card">
            <div class="resource-image">
            <div class="cash-scene">
               <div class="cash-background"></div>
               <div class="hand">
                  <div class="hand-palm"></div>
                  <div class="hand-thumb"></div>
                  <div class="hand-fingers"></div>
               </div>
               <div class="coin">
                  <div class="coin-face">$</div>
               </div>
               <div class="cash-layers">
                  <div class="cash-layer layer1"></div>
                  <div class="cash-layer layer2"></div>
                  <div class="cash-layer layer3"></div>
               </div>
            </div>
            </div>
            <h3 class="resource-title">Smart Cash Management Strategies</h3>
            <p class="resource-description">
            Discover the optimal amount of cash to keep in savings and
            learn strategies to make your cash work harder while
            maintaining liquidity.
            </p>
         </div>
      </div>
      </div>
   </section>

   <section class="risk-return-section">
      <div class="container">
      <div class="risk-return-content">
         <div class="risk-return-text">
            <h2 class="risk-return-title">
            Maximize Returns, Minimize Worry
            </h2>
            <p class="risk-return-description">
            Smart investing means matching your goals, timeline, and
            comfort with risk. Our advisors create investment strategies
            built specifically for your situation.
            </p>
            <a hraf="" class="risk-return-button">
            Start Your Investment Journey
            </a>
         </div>
         <div class="risk-return-visual">
            <div class="balance-illustration">
            <div class="balance-base"></div>
            <div class="balance-bar"></div>
            <div class="balance-left">
               <div class="warning-icon">
                  <span>!</span>
               </div>
            </div>
            <div class="balance-right">
               <div class="growth-plant">
                  <div class="plant-stem"></div>
                  <div class="plant-leaf leaf1"></div>
                  <div class="plant-leaf leaf2"></div>
               </div>
            </div>
            <div class="decorative-elements">
               <div class="star star1">✦</div>
               <div class="star star2">✦</div>
               <div class="dot dot1"></div>
               <div class="dot dot2"></div>
            </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <!-- Footer -->
    
</div>

@endsection