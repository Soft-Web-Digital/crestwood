(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[3933],{22838:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/explore/portfolios/[type]/[portfolio_name]",function(){return r(45649)}])},17494:function(e,t,r){"use strict";var n=r(36690),a=r(93089),o=r(59106),s=r(61250);t.Z=function(e){var t=e.height,r=e.width,i=e.style,l=(0,o.Z)(e,["height","width","style"]),c=(0,a.Z)((0,n.Z)({},i),{paddingTop:"calc(".concat(t," / ").concat(r," * 100%)")});return(0,s.jsx)("div",(0,a.Z)((0,n.Z)({"data-testid":"aspect-ratio-sizer"},l),{style:c}))}},59256:function(e,t,r){"use strict";var n=r(61250),a=r(19691);t.Z=function(){return(0,n.jsxs)(a.Z,{children:[(0,n.jsx)("p",{children:"Pricing data is sourced daily from Bloomberg."}),(0,n.jsx)("p",{children:"Securities labeled \u201cpopular\u201d are based on the number of accounts that own the specific security as well as the average amount invested in that particular security."}),(0,n.jsx)(a.Z.TermsAndConditions,{}),(0,n.jsx)("p",{children:"The information contained in this communication is provided for general informational purposes only, and should not be construed as investment or tax advice. Nothing in this communication should be construed as a solicitation, offer, or recommendation, to buy or sell any security. Any performance shown is for informational purposes only and may differ from actual performance due to several factors. Please refer to your account statement for actual performance. Any links provided to other server sites are offered as a matter of convenience and are not intended to imply that Wealthfront Advisers or its affiliates endorses, sponsors, promotes and/or is affiliated with the owners of or participants in those sites, or endorses any information contained on those sites, unless expressly stated otherwise."}),(0,n.jsxs)("p",{children:["Investment management and advisory services--which are not FDIC insured--are provided by Wealthfront Advisers LLC (\u201cWealthfront Advisers\u201d), an SEC-registered investment adviser, and financial planning tools are provided by Wealthfront Software LLC (\u201cWealthfront\u201d). Brokerage products and services are offered by Wealthfront Brokerage LLC, member ",(0,n.jsx)("a",{href:"https://www.finra.org/",children:"FINRA"})," / ",(0,n.jsx)("a",{href:"https://www.sipc.org/",children:"SIPC"}),". All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Please see our ",(0,n.jsx)("a",{href:"https://www.wealthfront.com/legal/disclosure",children:"Full Disclosure"})," for important details."]})]})}},66392:function(e,t,r){"use strict";r.d(t,{BF:function(){return v},Do:function(){return d},HX:function(){return h},Po:function(){return p},Se:function(){return u},hF:function(){return g},n0:function(){return m}});var n=r(36690),a=r(93089),o=r(8184),s=r.n(o),i=r(64827),l=r(97821),c=r(44481);function d(e){switch(e){case i.kow.CORE:return"classic";case i.kow.CORE_DI:return"direct-indexing";case i.kow.SRI:return"socially-responsible"}return(0,c.UT)(e)}function u(e){switch(e){case"classic":return i.kow.CORE;case"direct-indexing":return i.kow.CORE_DI;case"socially-responsible":return i.kow.SRI;default:throw new Error("No managed portfolio flavor assigned to slug: ".concat(e))}}var f=Object.freeze({"us-stock-etfs":"US stock ETFs","bond-etfs":"Bond ETFs","foreign-emerging-market-etfs":"Foreign / emerging market ETFs","sector-etfs":"Sector ETFs","investing-strategy-etfs":"Investing strategy ETFs","socially-responsible-etfs":"Socially responsible ETFs","wealthfront-exclusive-offerings":"Wealthfront exclusive offerings","commodity-etfs":"Commodity ETFs","tech-innovation-etfs":"Tech / innovation ETFs","global-stock-etfs":"Global stock ETFs","cryptocurrency-trusts":"Cryptocurrency trusts","recently-added":"Recently added"});function p(e){var t=s()(e);if(f[t])return t;throw new Error("Unsupported categoryDisplayName: ".concat(e))}var h=function(e){return"US Direct Indexing"===e};function m(e){return e.filter((function(e){return"ExploreAssetSearchResult"===e.type&&Boolean(e.investmentVehicleId)})).map((function(e){return e.symbol?(0,a.Z)((0,n.Z)({},e),{symbol:e.symbol.toLowerCase()}):(0,a.Z)((0,n.Z)({},e),{symbol:s()(e.displayName)})}))}function v(e){var t=function(e){switch(e){case i.p_x.EGGPLANT:return"sunset-pebble-eggplant-white-eggplant-light";case i.p_x.FOREST:return"sunset-pebble-forest-white-forest-light";case i.p_x.SPACE:return"sunset-pebble-space-white-space-light";default:return"default"}}(e);return(0,l.Ot)(t)}function g(e){switch(e){case i.p_x.EGGPLANT:return"bg-eggplant";case i.p_x.FOREST:return"bg-forest";case i.p_x.SPACE:return"bg-space"}return(0,c.UT)(e)}},56159:function(e,t,r){"use strict";var n=r(36690),a=r(93089),o=r(61250),s=r(51838),i=r.n(s),l=r(47434);t.Z=function(e){var t=e.min,r=e.max,s=e.value,c=e.step,d=e.onChange,u=e.onFinalChange,f=e.ariaLabel,p=e.surface,h=void 0===p?"light":p,m=e.testId,v=e.trackClassName,g=e.trackStyle,x=e.thumbClassName;return(0,o.jsx)(l.Range,{values:[s],step:c,min:t,max:r,onChange:d,onFinalChange:u,renderTrack:function(e){var t=e.props,r=e.children;return(0,o.jsx)("div",(0,a.Z)((0,n.Z)({},t),{"data-testid":m,className:i()("h-1.5 w-full rounded-full",{"bg-gradient-to-r from-ambient-orange to-lavender":"light"===h,"bg-white bg-opacity-30":"dark"===h},v),style:g,children:r}))},renderThumb:function(e){var t=e.props;return(0,o.jsx)("div",(0,a.Z)((0,n.Z)({},t),{"aria-label":f,className:i()("h-6 w-6 rounded-full border-[1px] border-eggplant border-opacity-20 bg-white shadow-lg",x),style:(0,n.Z)({},t.style)}))}})}},87570:function(e,t,r){"use strict";r.d(t,{ZP:function(){return m},sk:function(){return p}});var n=r(83990),a=r.n(n),o=r(64827),s=r(55428),i=r(71982),l=[502,503,504];function c(e,t,r){r.pathname;var n=e.response,a=n.status,o=n.headers,s=n.req,i=n.body,c=(null===s||void 0===s?void 0:s.url)||n.url;c=function(e){e.includes("?")&&(e=e.split("?")[0]);return e}(c);var d=function(e,t,r,n,a){var o={extra:{xServedBy:e,xRequestId:t,url:n}};r&&l.includes(r)&&(o.fingerprint=["HTTP_GATEWAY_ERROR"]);return o}(o["x-served-by"],o["x-request-id"],a,c);return t(function(e){var t=e.statusCode,r=e.url,n=e.body,a=e.sentryContext;return{statusCode:t,url:r,body:n,isHttpClientError:!0,sentryContext:a}}({statusCode:a,url:c,body:i,sentryContext:d}))}var d=function(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},n=e||Promise.reject.bind(Promise),a=t.response,o=t.name,s=t.message,i=t.isFetchNetworkError,l=o&&-1!==o.indexOf("AbortError");return l?n({isHttpClientError:!0,shouldNotReportToSentry:!0,statusCode:null===a||void 0===a?void 0:a.status,message:s}):a?c(t,n,r):n(i?{shouldNotReportToSentry:!0}:t)},u=r(19145),f=r(73656),p=u.Z.isServer(),h=u.Z.isTest();var m=function(){var e={"WF-App-Id":"wf-web","WF-Request-Id":p||h?"nextjs-request-id":s.oX.get("requestId"),"WF-Session-Id":p||h?"nextjs-session-id":i.HM.getOrCreate(),"WF-Guest-Id":p||h?"nextjs-guest-id":i.z8.getOrCreate()};if(!p&&!h){null}var t=f.env.NEXT_PUBLIC_INTEGRATION?"http://localhost:3001":"http://localhost:3000";return t="https://wealthfront.com",f.env.NEXT_PUBLIC_DOCKER_INTEGRATION&&(t="http://".concat(f.env.NEXT_PUBLIC_DOCKER_INTEGRATION,":3001")),p&&f.env.NEXT_PUBLIC_DOCKER_VISUAL_REGRESSION?t="http://localhost:3001":!p&&f.env.NEXT_PUBLIC_DOCKER_VISUAL_REGRESSION&&(t="http://host.docker.internal:3001"),p||(t=window.location.origin),(0,o.RPp)({basePath:"/capitan",headers:e,handleError:d,origin:t},a())}()},97492:function(e,t,r){"use strict";r.d(t,{WE:function(){return c},uC:function(){return u}});var n=r(48908),a=r(64827),o=r(55428),s=r(87570),i=r(55470),l=(0,a.aDH)({wfApi:s.ZP,handleCatchAndAlert:i.Z.handleCatchAndAlert,appType:"logged-out",trackUserEvent:o.UO.trackUserEvent.bind(o.UO)}),c=l.useApiQuery,d=l.useApiQueries,u=(l.useApiInvalidation,l.useApiMutation);l.fetchApiQuery,l.setApiQueryData,l.setApiQueryError,l.fetchApiWithoutCache,(0,n.Z8)({useApiQuery:c}),(0,n.UV)({useApiQueries:d})},45649:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSG:function(){return J},default:function(){return ee}});var n=r(36690),a=r(93089),o=r(11296),s=r(61250),i=r(29901),l=r(24229),c=r(51838),d=r.n(c),u=r(48908),f=r(97821),p=r(55759),h=r(59256),m=r(7386),v=r(8607),g=r(37924),x=r(99366);var y,b=function(e){var t=e.className,r=e.portfolioFlavor,n=new URLSearchParams;n.set("intent","investing"),n.set("initialPortfolioFlavor",r);var a="/start/account-type?".concat(n.toString()),o="Add portfolio",i=(0,m.l)().pathname;return(0,s.jsx)(f.zx,{onClick:function(){v.ZP.trackClick({target_element:"add-portfolio",click_type:"main-cta"}),g.K.trackClickEvent({category:x.WD.MainCta,clickUrl:a,clickText:o,name:"add-portfolio",feature:i},{shouldHandleNavigation:!0})},className:t,as:"a",href:a,variant:"default",icon:"plus",block:!0,children:o})},w=r(37705),j=r(59106),k=r(64827);var N=Object.freeze((y={},(0,w.Z)(y,k.kow.CORE,(function(){return(0,s.jsx)("p",{className:"copy-body",children:"The graph reports cumulative total returns over periods ranging from three months to five years. We calculated daily realized returns for each period as a value-weighted average of actual client portfolio returns, net of all advisory fees (accounting for any waivers) and expenses. Each day\u2019s return includes all accounts with the same risk score, that have existed at any point since the given inception date, have at least $5,000 in assets, and have been managed in accordance with our investment methodology. Returns for each period are obtained by compounding the daily composite returns. All composites exclude client portfolios that have elected to use the following Wealthfront features: US Direct Indexing, Smart Beta and Risk Parity. Past performance does not guarantee future results. Future performance may also deviate from past results due to changes in recommended asset allocations, as well as differences in future market returns."})})),(0,w.Z)(y,k.kow.SRI,(function(){return(0,s.jsx)("p",{className:"copy-body",children:"The SRI portfolio performance chart above is hypothetical in nature and based on back-tested strategies that were neither derived from actual trading nor exposed to actual market risk. The above performance results were created with the benefit of hindsight and it would be difficult, if not impossible, to account for all of the factors that might have affected our investment selection process. The above portfolio was created for the purpose of applying SRI factors to Wealthfront\u2019s implementation of Modern Portfolio Theory. The results assume that the portfolio was rebalanced to its target weights on a daily basis, and the returns are presented pre-tax and net of the fees we would have charged over the relevant time period. Hypothetical performance results can differ sharply from actual performance results, these results are not indicative of present or future market conditions, and past results are not indicative of future performance."})})),(0,w.Z)(y,k.kow.CORE_DI,(function(){return(0,s.jsx)("p",{className:"copy-body",children:"The graph reports cumulative total returns over periods ranging from three months to five years. We calculate daily realized returns as a value-weighted average of actual client portfolio returns, net of all advisory fees (accounting for any waivers) and expenses. Each day\u2019s return includes all accounts with the same risk score, that have existed at any point since the given inception date, have been managed in accordance with our investment methodology, and are invested in the Direct Indexing strategy on that day. Returns for each period are obtained by compounding the daily composite returns. All composites exclude client portfolios that have elected to invest in the Wealthfront Risk Parity fund. Past performance does not guarantee future results. Future performance may also deviate from past results due to changes in recommended asset allocations, as well as differences in future market returns."})})),y)),P=function(e){var t=e.isOpen,r=e.onDismiss,o=e.className,i=e.portfolio,l=(0,j.Z)(e,["isOpen","onDismiss","className","portfolio"]),c=N[i];return(0,s.jsx)(p.Z,(0,a.Z)((0,n.Z)({isOpen:t,ariaLabel:"Historical performance methodology",onDismiss:r,className:d()("max-w-[800px]",o)},l),{children:(0,s.jsxs)("div",{className:"flex flex-col gap-y-4",children:[(0,s.jsx)("h2",{className:"copy-h3",children:"Historical performance methodology"}),(0,s.jsx)(c,{})]})}))},E=r(17494),C=function(e){var t=e.imageUrl,r=e.className,o=(0,j.Z)(e,["imageUrl","className"]);return(0,s.jsxs)("div",(0,a.Z)((0,n.Z)({className:d()("relative w-full overflow-hidden lg:h-[395px] lg:rounded-2xl",r)},o),{children:[(0,s.jsx)(E.Z,{width:375,height:210}),(0,s.jsx)("img",{className:"absolute top-0 left-0 h-full w-full bg-cover bg-center bg-no-repeat object-cover object-top",src:t,alt:""})]}))};function Z(e){var t=e.icon,r=e.title,n=e.subtitle;return(0,s.jsxs)("div",{className:"inline-block max-w-[300px] rounded-2xl border-2 border-white border-opacity-10 p-6",children:[(0,s.jsx)(t,{className:"!h-16 !w-16"}),(0,s.jsx)("div",{className:"mt-3 mb-1",children:(0,s.jsx)(f.xv,{variant:"body-bold",children:r})}),(0,s.jsx)(f.xv,{variant:"subtext",color:"secondary",children:n})]})}var R=function(){var e=(0,i.useRef)(),t=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"0px",r=(0,i.useState)(!1),n=r[0],a=r[1];return(0,i.useEffect)((function(){var r=e.current,n=new IntersectionObserver((function(e){var t=(0,o.Z)(e,1)[0];a(t.isIntersecting)}),{rootMargin:t});return r&&n.observe(r),function(){n.unobserve(r)}}),[e,t]),n}(e);return(0,i.useEffect)((function(){t&&v.ZP.trackImpression("component-impression",{target_element:"explore-portfolio-page-bottom-val-prop"})}),[t]),(0,s.jsxs)("div",{ref:e,className:"flex flex-wrap gap-6",children:[(0,s.jsx)(Z,{icon:u.hg,title:"Curated by experts",subtitle:"This low-cost portfolio is hand-picked by our research team, and is diversified and optimized for the long term."}),(0,s.jsx)(Z,{icon:u.oB,title:"Managed automatically",subtitle:"We buy and sell funds, rebalance your portfolio, and reinvest dividends to keep you diversified and fully invested."}),(0,s.jsx)(Z,{icon:u.rZ,title:"Optimized for tax savings",subtitle:"For taxable accounts, our Tax-Loss Harvesting strategy finds ways to help save on taxes and maximize your returns."}),(0,s.jsx)(Z,{icon:u.Dh,title:"Easy to personalize",subtitle:"Change your risk level, add and remove investments, or edit the investment mix to meet your needs."})]})},_=r(48417),T=r(50104),A=r(10571),F=r(55470),S=function(e){return F.Z.handleCatchAndAlert(e)};function I(e){var t=e.refPerformanceText,r=e.portfolioMetadata,n=e.performanceDataPoints,a=e.periodRange,o=e.yExtrema,i=e.setPeriodRange,l=e.renderRelativePerformance,c=e.renderAbsolutePerformance,d=n.dataPoints,f=n.dateOfFirstAvailableData,p=d.map((function(e,t){return{x:t,y:e.returnPercentage}})),h=[{line:p,isDashed:!1,skipTransition:!1,showArea:!0}],m=r.periodRangeList.map((function(e){return e.code}));return(0,s.jsxs)("div",{className:"space-y-4",children:[(0,s.jsx)(u.LK,{mouseMove:function(e){var r=d[e];if(r)if(T.h.parse(r.timestamp).isBefore(T.h.parse(f)))t.current&&A.render((0,s.jsx)(u.Kw,{variant:"body-bold",percentage:null,isAbsent:!0}),t.current);else{var n=T.h.parse(f).isAfter(T.h.parse(d[0].timestamp))?f:d[0].timestamp,a=T.h.parse(n),o=T.h.parse(r.timestamp);l({percentage:r.returnPercentage,startingDate:a,endingDate:o})}},mouseLeave:function(){d.length&&c({percentage:d[d.length-1].returnPercentage})},handleCatchAndAlert:S,decoratedLines:h,yExtrema:o}),(0,s.jsx)("div",{className:"px-6 lg:px-0",children:(0,s.jsx)(u.jp,{timeRanges:m,timeRange:a,setTimeRange:i})})]})}var D=r(97492);function O(e){var t=e.riskScore,r=e.portfolioFlavor,o=e.portfolioTitle,l=(0,i.useRef)(null),c=(0,i.useState)(k.m7y.THREE_YEARS),d=c[0],p=c[1],h=(0,D.WE)("getPortfolioFlavorPerformanceMetadata",[r,!1]).data,m=(0,D.WE)("redirectsToCdnUrl",[null===h||void 0===h?void 0:h.performanceDataUrl],{enabled:!!h}).data,g=m&&m.performanceDataPointsForEachRiskScoreAndPeriod.find((function(e){return e.riskScore===Number(t)})),x=g&&g.performanceDataPointsForEachPeriod[d],y=(0,i.useMemo)((function(){if((null===h||void 0===h?void 0:h.periodRangeList)&&(null===m||void 0===m?void 0:m.performanceDataPointsForEachRiskScoreAndPeriod)){var e=h.periodRangeList,t=m.performanceDataPointsForEachRiskScoreAndPeriod;return e.reduce((function(e,r){var o,s,i=r.type,l=r.identifier;if("RelativePeriodRange"!==i)return(0,n.Z)({},e);var c=t.map((function(e){var t;return null===(t=e.performanceDataPointsForEachPeriod[l])||void 0===t?void 0:t.dataPoints.map((function(e){return e.returnPercentage}))})).flat();return(0,a.Z)((0,n.Z)({},e),(0,w.Z)({},l,{minY:(o=Math).min.apply(o,(0,_.Z)(c)),maxY:(s=Math).max.apply(s,(0,_.Z)(c))}))}),{})}}),[h,m]),b=(0,i.useCallback)((function(e){var t=e.percentage,r=null===h||void 0===h?void 0:h.periodRangeList.find((function(e){return"RelativePeriodRange"===e.type&&e.code===d}));if(!r)return null;l.current&&A.render((0,s.jsxs)(f.gF,{spacing:"xxsmall",children:[(0,s.jsx)(u.Kw,{variant:"body-bold",percentage:t}),(0,s.jsx)(f.xv,{as:"span",color:"secondary",children:r.displayContent})]}),l.current)}),[d,h]);(0,i.useEffect)((function(){(null===x||void 0===x?void 0:x.dataPoints.length)&&b({percentage:x.dataPoints[x.dataPoints.length-1].returnPercentage})}),[x,b]);return x&&h?(0,s.jsxs)(s.Fragment,{children:[(0,s.jsxs)(L,{children:[(0,s.jsx)("div",{className:"mb-3 lg:hidden",children:(0,s.jsx)(f.X6,{variant:"large-sans",as:"h1",children:o})}),(0,s.jsx)("span",{ref:l,"data-testid":"user-explore-portfolio-relative-performance-text"}),(0,s.jsx)(U,{className:"hidden lg:block"})]}),(0,s.jsx)("div",{className:"my-6 px-6 lg:px-0",children:(0,s.jsx)(I,{refPerformanceText:l,portfolioMetadata:h,performanceDataPoints:x,periodRange:d,yExtrema:y[d],setPeriodRange:function(e){p(e),v.ZP.trackClick({target_element:"portfolio-performance-timeframe",click_type:"interaction-element"},{portfolio_flavor:r,time_frame:e})},renderAbsolutePerformance:b,renderRelativePerformance:function(e){var t=e.percentage,r=e.startingDate,n=e.endingDate;l.current&&A.render((0,s.jsxs)(f.gF,{spacing:"xxsmall",children:[(0,s.jsx)(u.Kw,{variant:"body-bold",percentage:t}),(0,s.jsx)("div",{className:"hidden sm:block",children:(0,s.jsxs)(f.xv,{as:"span",color:"secondary",children:["from ",(0,u.ru)(r)," to ",(0,u.ru)(n)]})}),(0,s.jsx)("div",{className:"sm:hidden",children:(0,s.jsxs)(f.xv,{as:"span",color:"secondary",children:[r.format(T.bg.ofPattern("MM/dd/yyyy"))," -"," ",n.format(T.bg.ofPattern("MM/dd/yyyy"))]})})]}),l.current)}})})]}):(0,s.jsx)("div",{className:"mb-6",children:(0,s.jsx)(f.Od,{height:349})})}function L(e){var t=e.className,r=e.children,o=e.testId,i=(0,j.Z)(e,["className","children","testId"]);return(0,s.jsx)("div",(0,a.Z)((0,n.Z)({className:d()("px-6 lg:px-0",t),"data-testid":o},i),{children:r}))}function U(e){var t=e.className,r=(0,j.Z)(e,["className"]);return(0,s.jsx)("div",(0,n.Z)({className:d()("my-6 w-full border border-white border-opacity-10",t)},r))}var W=r(81974),M=r(13948),B=function(e){var t=e.name,r=e.description,o=e.percent;return(0,s.jsxs)(M.E.div,(0,a.Z)((0,n.Z)({layout:f.F6.getLayoutProp()},f.F6.getHeightFadeProps(f.Nu.duration200,f.Nu.timingUserConsistent)),{children:[(0,s.jsx)(f.xv,{variant:"body-bold",children:t}),(0,s.jsx)(f.xv,{variant:"subtext",color:"secondary",children:r}),(0,s.jsxs)("div",{className:"flex items-center gap-3",children:[(0,s.jsx)("div",{className:"inline-block min-w-[32px] flex-shrink-0 flex-grow-0",children:(0,s.jsxs)(f.xv,{variant:"subtext",color:"secondary",children:[o,"%"]})}),(0,s.jsx)("div",{className:"flex-grow-1 flex-shrink-1 h-1 w-full overflow-hidden rounded-full",children:(0,s.jsx)("div",{className:"h-full bg-white",style:{width:"".concat(o,"%")}})})]})]}))},H=function(e){var t=e.breakdown;return(0,s.jsx)("div",{className:"flex flex-col gap-7 py-5",children:(0,s.jsx)(W.M,{children:t.filter((function(e){return e.percent})).sort((function(e,t){return t.percent-e.percent})).map((function(e){return(0,s.jsx)(B,(0,n.Z)({},e),e.name)}))})})},z=r(56159),G=function(e){var t=e.riskScore,r=e.onChange,o=e.className,l=(0,j.Z)(e,["riskScore","onChange","className"]),c=(0,i.useCallback)((function(e){var t=(0,u.Hz)(e[0]);r(t)}),[r]);return(0,s.jsx)("div",(0,a.Z)((0,n.Z)({className:d()("w-full py-4",o)},l),{children:(0,s.jsx)(z.Z,{value:parseFloat(t),step:.5,min:.5,max:10,onChange:c,ariaLabel:"Drag to select portfolio risk",surface:"dark"})}))},X=r(66392),K=r(24049),q=r(44809),Q=r(66800),Y=r.n(Q),V=r(6160),$=r.n(V),J=!0;function ee(e){var t=(0,l.useRouter)().query.portfolio_name,r=(0,X.Se)(t),c=(0,D.WE)("getRecommendedAssetAllocationPlanForLogoutExperience",[r],{staleTime:0,prefetched:!0}).data,g=c.recommendedRiskScore,x=c.eligiblePortfolioFlavor,y=c.assetAllocations,w=(0,i.useState)((0,u.Hz)(g)),j=w[0],k=w[1],N=(0,i.useCallback)((function(e){v.ZP.trackClick({target_element:"portfolio-performance-risk-level",click_type:"interaction-element"},{portfolio_flavor:null===x||void 0===x?void 0:x.flavor,risk_level:e}),k(e)}),[k,null===x||void 0===x?void 0:x.flavor]),E=(0,o.Z)((0,p.i)(),3),Z=E[0],_=E[1],T=E[2],A=(0,i.useMemo)((function(){var e=Number(j);return y.map((function(t){return{name:t.assetClassInfo.displayName,description:t.displayName+(t.symbol?" (".concat(t.symbol,")"):""),percent:t.allocationPercentages.find((function(t){return t.riskScore===e})).allocationPercentage}}))}),[j,y]);return(0,i.useEffect)((function(){v.ZP.trackPage("logged-out-explore","explore-portfolio-page",{portfolio_flavor:x.flavor,risk_level:j,time_frame:"unknown"})}),[x,j]),(0,s.jsxs)(m.Z,(0,a.Z)((0,n.Z)({},e),{children:[(0,s.jsxs)("div",(0,a.Z)((0,n.Z)({},(0,X.BF)(x.portfolioBackgroundColor)),{className:d()("min-h-screen text-white",$().container),children:[(0,s.jsx)(q.Z,{surface:"dark",mobileSurface:"dark",position:"static"}),(0,s.jsxs)("main",{className:"w-full lg:px-8",children:[(0,s.jsxs)("div",{className:"mx-auto max-w-[1080px]",children:[(0,s.jsx)(C,{className:"mask-reverse-fade lg:mask-none mb-10",style:{"--wf-fade-stop":"0%","--wf-fade-start":"8%"},imageUrl:x.desktopImageUrl}),(0,s.jsxs)("div",{className:"flex gap-12",children:[(0,s.jsx)("div",{className:"hidden w-[360px] flex-shrink-0 flex-grow-0 flex-col items-start justify-items-start gap-4 lg:flex",children:(0,s.jsxs)("div",{className:"sticky top-10 mb-20 w-full",children:[(0,s.jsx)(f.X6,{variant:"large-sans",as:"h1",children:x.title}),(0,s.jsx)(b,{portfolioFlavor:x.managedPortfolioFlavor,className:d()(Y().buttonUsingMouse,"mt-6 hidden lg:block")})]})}),(0,s.jsxs)("div",{className:"flex-grow-1 flex-shrink-1 lg:mb-20",children:[(0,s.jsx)("div",{"data-testid":"portfolio-historical-performance-graph",children:(0,s.jsx)(O,{riskScore:j,portfolioTitle:x.title,portfolioFlavor:x.managedPortfolioFlavor})}),(0,s.jsxs)(L,{children:[(0,s.jsx)(f.xv,{children:x.description}),(0,s.jsx)(f.zx,{type:"button",as:"button",variant:"subtle-small",className:"mt-5",onClick:function(){v.ZP.trackClick({target_element:"see-historical-methodology",click_type:"hyperlink"},{portfolio_flavor:null===x||void 0===x?void 0:x.flavor}),_()},children:"See historical performance methodology"})]}),(0,s.jsx)(U,{}),(0,s.jsxs)(L,{testId:"portfolio-risk-slider-asset-allocations",children:[(0,s.jsx)(f.xv,{variant:"body-bold",children:"Investments"}),(0,s.jsx)("div",{className:"my-3",children:(0,s.jsxs)(f.xv,{as:"span",color:"secondary",children:["Example risk level: ",j," of 10",(0,s.jsx)("br",{}),(0,s.jsx)(f.xv,{as:"span",variant:"subtext",color:"secondary",children:"Your risk level will be determined when you add this portfolio. The investment mix will match your risk level and account type."})]})}),(0,s.jsx)(G,{riskScore:j,onChange:N,className:"lg:max-w-[256px]"}),(0,s.jsx)(H,{breakdown:A})]}),(0,s.jsx)(U,{}),(0,s.jsxs)(L,{children:[(0,s.jsx)(f.xv,{variant:"body-bold",children:"Managed by Wealthfront"}),(0,s.jsx)("div",{className:"mb-7 mt-1",children:(0,s.jsx)(f.xv,{variant:"subtext",color:"secondary",children:"With this portfolio, you get all the benefits of investing with Wealthfront."})}),(0,s.jsx)(R,{})]}),(0,s.jsx)("div",{className:"sticky bottom-0 mt-6 border-t border-white border-opacity-10 bg-white pt-3 lg:hidden",style:{backgroundColor:x.backgroundColor,paddingBottom:"calc(12px + env(safe-area-inset-bottom))"},children:(0,s.jsx)(L,{children:(0,s.jsx)(b,{portfolioFlavor:x.managedPortfolioFlavor})})})]})]})]}),(0,s.jsx)(P,{isOpen:Z,onDismiss:T,portfolio:c.managedPortfolioFlavor})]})]})),(0,s.jsx)(K.ZP,{disclosures:(0,s.jsx)(h.Z,{})})]}))}},6160:function(e){e.exports={container:"portfolio_container__D2gRW"}},66800:function(e){e.exports={buttonUsingMouse:"explore_buttonUsingMouse__ut1Fk"}}},function(e){e.O(0,[5955,7255,1912,4301,9668,736,5408,6203,7434,8184,7923,4809,7821,6554,9691,9774,2888,179],(function(){return t=22838,e(e.s=t);var t}));var t=e.O();_N_E=t}]);
//# 