@extends('frontend.layouts.sub')

@section('title', 'About')

@section('content')

<main class="content" id="lqd-site-content">
   <section class="lqd-section faq bg-white transition-all pt-50 pb-90">
      <div class="container">
         <div class="col col-12 p-0">
         <section class="lqd-section mt-60">
            <div class="container">
               <h2 class="tw-text-2xl">Company Information</h2>
               <div class="row">
               <div class="col col-12 p-30 md:pl-0 md:pr-0">
                  <div
                     class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill"
                     id="accordion-question-parent-1"
                     role="tablist"
                     aria-multiselectable="true"
                  >
                     <div class="accordion-item panel mb-20 active">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-1"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-1"
                           aria-expanded="true"
                           aria-controls="collapse-question-tab-1"
                           >
                           <span class="accordion-title-txt"
                              >How does Crestwood Capital Management compare
                              to other financial companies?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-1"
                        class="accordion-collapse collapse show"
                        role="tabpanel"
                        aria-labelledby="heading-tab-1"
                        data-bs-parent="#accordion-question-parent-1"
                     >
                        <div class="text-15 accordion-content tw-space-y-2">
                           <p>
                           We like to point to three major ways we're
                           focused on the customer:
                           </p>

                           <ul class="tw-space-y-2">
                           <li>
                              We're a fiduciary — We are required to act in
                              your best interest and disclose any potential
                              conflict of interest. For instance, Crestwood
                              Capital Management does not have or recommend
                              any Crestwood Capital Management-created funds
                              for its client portfolios.
                           </li>
                           <li>
                              Our platform combines powerful technology with
                              personalized advice — Developed by our
                              passionate team of experts. When you have
                              questions, our Customer Support team is ready
                              to help you with account questions and
                              troubleshooting.
                           </li>
                           <li>
                              We give you the opportunity to connect your
                              external accounts — See a fuller financial
                              picture in one place as part of Crestwood
                              Capital Management's low cost.
                           </li>
                           </ul>
                        </div>
                     </div>
                     </div>
                     <div class="accordion-item panel mb-20">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-2"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-2"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-2"
                           >
                           <span class="accordion-title-txt"
                              >Who are the experts behind Crestwood Capital
                              Management?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-2"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-2"
                        data-bs-parent="#accordion-question-parent-1"
                     >
                        <div class="text-15 accordion-content">
                           <p>
                           Our team of investing experts make decisions
                           about our portfolio strategies and fund
                           selection with the help of an external committee
                           of economists, PhDs, and industry experts.
                           </p>
                           <p>
                           More than just a portfolio management team, our
                           experts work to develop improvements to our Tax
                           Smart technology and other advanced strategies.
                           </p>
                        </div>
                     </div>
                     </div>
                     <div class="accordion-item panel mb-20">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-3"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-3"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-3"
                           >
                           <span class="accordion-title-txt"
                              >Is Crestwood Capital Management a regulated
                              financial institution?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-3"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-3"
                        data-bs-parent="#accordion-question-parent-1"
                     >
                        <div class="text-15 accordion-content">
                           Crestwood Capital Management LLC is an
                           SEC-registered Investment Advisor, and brokerage
                           services provided to clients of Crestwood Capital
                           Management LLC is done by Crestwood Capital
                           Management Securities, an SEC-registered
                           broker-dealer and member of FINRA /SIPC.
                        </div>
                     </div>
                     </div>
                     <div class="accordion-item panel">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-4"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-4"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-4"
                           >
                           <span class="accordion-title-txt"
                              >What is your Mission Statement?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-4"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-4"
                        data-bs-parent="#accordion-question-parent-1"
                     >
                        <div class="text-15 accordion-content">
                           <p>
                           We are here to empower people to do what's best
                           for their money so they can live better.
                           </p>
                           <p>
                           We’re building smarter, more efficient money
                           management for everyone. By pushing the bounds
                           of what technology can do, by bringing together
                           some of the best software and analytic thinking
                           of diverse, cutting edge industries, we’re able
                           to ensure that more people get the advice that
                           they deserve. We have the ability to help free
                           our customers to pursue what is most meaningful
                           to them, to spend their time doing what makes
                           them happy.
                           </p>
                           <p>
                           Our promise is to manage your money in a way
                           that works to give you a better outcome. We
                           advise you on what to do with your money based
                           on your personal financial situation and the
                           goals you’re looking to achieve—we recommend how
                           much to invest each month, how much risk to take
                           on in your portfolio, and what type of accounts
                           you should have.
                           </p>
                           <p>
                           Then, we do it all for you. And by doing that,
                           we have the rare opportunity to help you find
                           something positive and intangible that can’t be
                           bought: peace of mind.
                           </p>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="col col-12 p-30 md:pl-0 md:pr-0">
                  <h2 class="tw-text-2xl tw-mb-12">Financial Security</h2>
                  <div
                     class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill"
                     id="accordion-question-parent-2"
                     role="tablist"
                     aria-multiselectable="true"
                  >
                     <!-- <div class="accordion-item panel mb-20">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-5"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-5"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-5"
                           >
                           <span class="accordion-title-txt"
                              >How is Crestwood Capital Management
                              different?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-5"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-5"
                        data-bs-parent="#accordion-question-parent-2"
                     >
                        <div class="text-15 accordion-content">
                           <p>
                           Traditionally, people have manually managed
                           their money and investments, which can be a very
                           time-consuming and painful process, or they've
                           paid very costly fees to have access to
                           financial advisors and advanced investment
                           strategies.
                           </p>
                           <p>
                           You may be a first-time investor just starting
                           out, a seasoned investor wondering if you could
                           be doing better, or a retiree thinking about
                           ways to make your nest egg last. For those
                           seeking an alternative to expensive advisor fees
                           or the labor-intensive process of managing one's
                           own investments, Crestwood Capital Management
                           offers an alternative.
                           </p>
                           <ul>
                           <li>
                              Crestwood Capital Management's portfolio is
                              designed to help customers achieve optimal
                              returns at each level of risk from their
                              investments.
                           </li>
                           <li>
                              We use a variety of strategies, using
                              technology, to help investors keep as much of
                              those returns as possible.
                           </li>
                           </ul>
                           <p>
                           We strive to offer a great user experience and
                           design our technology to be friendly and
                           accessible. Everyone has questions regarding
                           financial services, but a lot of people are
                           embarrassed to ask those questions. Through
                           Crestwood Capital Management, you can ask
                           questions and receive help from our customer
                           support team. You can also access financial
                           experts and receive advice by upgrading to our
                           Premium plan or scheduling a call with our
                           Licensed Concierge team.
                           </p>
                        </div>
                     </div>
                     </div> -->
                     <div class="accordion-item panel mb-20">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-6"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-6"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-6"
                           >
                           <span class="accordion-title-txt"
                              >What happens to my money if Crestwood Capital
                              Management goes public, is acquired, or
                              closes?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-6"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-6"
                        data-bs-parent="#accordion-question-parent-2"
                     >
                        <div class="text-15 accordion-content">
                           <p>
                           What happens to my money if Crestwood Capital
                           Management goes public, is acquired, or closes?
                           </p>
                           <p>
                           Crestwood Capital Management Securities is a
                           member of the Securities Investor Protection
                           Corporation (SIPC), which protects securities
                           customers of its members up to $500,000
                           (including $250,000 for claims for cash).
                           Explanatory brochure available upon request or
                           at www.sipc.org. At a high level, you can think
                           of SIPC as providing protection for funds held
                           in a brokerage account in the event that the
                           brokerage fails.
                           </p>
                           <p>
                           The Securities Investor Protection Corporation
                           (SIPC) provides insurance that protects your
                           investments, including those held by our broker,
                           Crestwood Capital Management Securities. It
                           covers up to $500,000 of missing assets,
                           including a maximum of $250,000 for cash claims.
                           </p>
                           <p>
                           The limit applies only to the value of missing
                           securities, not losses due to market volatility.
                           If there are securities identified as belonging
                           to the customer, these (or their equivalent
                           value) will be returned regardless of account
                           size, and the $500,000 limit will apply only to
                           the difference.
                           </p>
                           <p>
                           Types of accounts and investments generally
                           protected by SIPC include:
                           </p>
                           <ul>
                           <li>Stocks</li>
                           <li>Bonds</li>
                           <li>Mutual funds</li>
                           <li>Money market mutual funds (MMMFs)</li>
                           <li>Certificates of deposit (CDs)</li>
                           <li>Annuities</li>
                           <li>Government securities</li>
                           <li>Municipal securities</li>
                           <li>U.S. Treasury securities (Treasuries)</li>
                           <li>
                              Read more in-depth about the safety and
                              security of your account here.
                           </li>
                           </ul>

                           <h3>Cash Reserve</h3>

                           <p>
                           Deposits into Crestwood Capital Management’s
                           cash account, Cash Reserve, are covered by
                           Federal Deposit Insurance Corporation (FDIC)
                           insurance up to $2 million per individual
                           account and $4 million per joint account, once
                           deposited into interest-bearing deposit accounts
                           at one or more program banks†.
                           </p>

                           <p>
                           Each interest-bearing deposit account will be
                           eligible for FDIC insurance up to $250,000 for
                           each insurable account type (e.g., individual,
                           joint, etc.), including principal and accrued
                           interest.
                           </p>

                           <h3>Checking</h3>

                           <p>
                           For deposits into Crestwood Capital Management
                           Checking—a checking account and Visa debit card
                           provided by nbkc bank, Member FDIC—each account
                           will be eligible for FDIC insurance up to
                           $250,000 for each insurable account type (e.g.,
                           individual, joint, etc.), when combined with all
                           other deposits held in the same insurable
                           capacity at nbkc.
                           </p>

                           <p>
                           In the unlikely event of a bank failure, and
                           FDIC deposit insurance payments become
                           necessary, there is no specific time period
                           during which the FDIC must make insurance
                           payments available, and you may not earn
                           interest on your deposits from the time a
                           program bank is closed. You may also be required
                           to provide certain documentation to the FDIC
                           before insurance payments are made.
                           </p>
                        </div>
                     </div>
                     </div>
                     <div class="accordion-item panel">
                     <div
                        class="accordion-heading"
                        role="tab"
                        id="heading-tab-7"
                     >
                        <h4 class="accordion-title">
                           <a
                           class="collapsed text-16 leading-2em bg-gray-100"
                           role="button"
                           data-bs-toggle="collapse"
                           href="#collapse-question-tab-7"
                           aria-expanded="false"
                           aria-controls="collapse-question-tab-7"
                           >
                           <span class="accordion-title-txt"
                              >How do you keep my money safe?</span
                           >
                           <span
                              class="text-22 text-brown-500 accordion-expander"
                           >
                              <i class="lqd-icn-ess icon-ion-ios-add"></i>
                              <i
                                 class="lqd-icn-ess icon-ion-ios-remove"
                              ></i>
                           </span>
                           </a>
                        </h4>
                     </div>
                     <div
                        id="collapse-question-tab-7"
                        class="accordion-collapse collapse"
                        role="tabpanel"
                        aria-labelledby="heading-tab-7"
                        data-bs-parent="#accordion-question-parent-2"
                     >
                        <div class="text-15 accordion-content">
                           <p>
                           Crestwood Capital Management Securities is a
                           member of the Securities Investor Protection
                           Corporation (SIPC), which protects securities
                           customers of its members up to $500,000
                           (including $250,000 for claims for cash).
                           Explanatory brochure available upon request or
                           at www.sipc.org. What you should remember is
                           that the SIPC does not protect against market
                           changes in your account. The risks inherent in
                           investing are tradeoffs you make to pursue
                           investment returns. We design our portfolio to
                           aim for the highest projected returns given your
                           risk level.
                           </p>
                           <p>
                           With our cash management products, your money is
                           insured by the FDIC.
                           </p>

                           <h3>Cash Reserve</h3>
                           <p>
                           Individual Cash Reserve accounts have insurance
                           up to $2 million† and joint Cash Reserve
                           accounts offer up to $4 million† in FDIC
                           insurance once funds are deposited into our
                           program banks. Cash Reserve is available to
                           clients of Crestwood Capital Management LLC,
                           which is not a bank, and cash transfers to
                           program banks are facilitated by Crestwood
                           Capital Management Securities.
                           </p>

                           <h3>Checking</h3>
                           <p>
                           Checking is insured up to $250,000 through nbkc
                           bank and is provided by Crestwood Capital
                           Management Financial LLC‡. Explore further
                           details about FDIC insurance.
                           </p>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </section>
         </div>
      </div>
   </section>
</main>

@endsection