(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2170],{8462:function(t,n,e){"use strict";var i=e(61250),r=e(51838),a=e.n(r),s=e(79849),o=e.n(s),u=function(t){var n=t.heading,e=t.description,r=t.children;return(0,i.jsxs)("div",{className:"flex flex-col border-inherit py-16 lg:py-24",children:[(0,i.jsxs)("div",{className:"flex flex-col space-y-4 border-b border-inherit pb-8 md:flex-row md:items-center md:justify-between md:gap-x-4 md:space-y-0",children:[(0,i.jsx)("div",{className:"copy-h1-alt lg:w-1/2",children:n}),(0,i.jsx)("div",{className:"copy-h3-alt",children:e})]}),(0,i.jsx)("div",{className:a()(o().layout,"py-8 lg:gap-x-16 xl:gap-x-24"),children:r})]})};u.FAQItem=function(t){var n=t.question,e=t.children,r=t.testId;return(0,i.jsxs)("div",{className:"mt-8 flex flex-col space-y-4 first:mt-0",style:{breakInside:"avoid-column"},"data-testid":r||"faq-item",children:[(0,i.jsx)("h3",{className:"copy-h3-alt",children:n}),(0,i.jsx)("div",{className:"copy-body",children:(0,i.jsx)("div",{className:"space-y-4",children:(0,i.jsx)("div",{className:"flex flex-col items-start",children:e})})})]})},n.Z=u},94749:function(t,n,e){"use strict";e.d(n,{Z:function(){return L}});var i=e(61250),r=e(29901),a=e(48358);function s(t,n,e){e.set(t&&n?t/n:0)}var o,u=e(59658),c=e(61194);function l(){return{xOffset:window.pageXOffset,yOffset:window.pageYOffset,xMaxOffset:document.body.clientWidth-window.innerWidth,yMaxOffset:document.body.clientHeight-window.innerHeight}}var d=!1;function f(){if(d=!0,"undefined"!==typeof window){var t=function(t,n){var e=function(){var e=n(),i=e.xOffset,r=e.yOffset,a=e.xMaxOffset,o=e.yMaxOffset;t.scrollX.set(i),t.scrollY.set(r),s(i,a,t.scrollXProgress),s(r,o,t.scrollYProgress)};return e(),e}(o,l);(0,u.E)(window,"scroll",t,{passive:!0}),(0,u.E)(window,"resize",t)}}function p(){return o||(o={scrollX:(0,a.B)(0),scrollY:(0,a.B)(0),scrollXProgress:(0,a.B)(0),scrollYProgress:(0,a.B)(0)}),(0,c.L)((function(){!d&&f()}),[]),o}var y=e(16898),x=e(89487),v=function(t){return function(t){return"object"===typeof t&&t.mix}(t)?t.mix:void 0};var h=e(98116),m=e(10784);function g(t){var n=(0,m.h)((function(){return(0,a.B)(t)}));if((0,r.useContext)(h._).isStatic){var e=(0,y.__read)((0,r.useState)(t),2)[1];(0,r.useEffect)((function(){return n.onChange(e)}),[])}return n}var w=e(55474),N=e(3962);function _(t,n,e,i){var r="function"===typeof n?n:function(){for(var t=[],n=0;n<arguments.length;n++)t[n]=arguments[n];var e=!Array.isArray(t[0]),i=e?0:-1,r=t[0+i],a=t[1+i],s=t[2+i],o=t[3+i],u=(0,x.s)(a,s,(0,y.__assign)({mixer:v(s[0])},o));return e?u(r):u}(n,e,i);return Array.isArray(t)?j(t,r):j([t],(function(t){var n=(0,y.__read)(t,1)[0];return r(n)}))}function j(t,n){var e=(0,m.h)((function(){return[]}));return function(t,n){var e=g(n()),i=function(){return e.set(n())};return i(),(0,w.f)(t,(function(){return N.ZP.update(i,!1,!0)})),e}(t,(function(){e.length=0;for(var i=t.length,r=0;r<i;r++)e[r]=t[r].get();return n(e)}))}var b=e(150),O=e(55549);var C=e(13948),E=e(57792),L=function(t){var n=t.children,e=t.testId,a=t.offset,s=void 0===a?50:a,o=t.className,u=(0,E.ac)(),c=(0,r.useState)(0),l=c[0],d=c[1],f=(0,r.useState)(0),x=f[0],v=f[1],m=(0,r.useRef)(null),N=p().scrollY,j=l-x,L=l+Math.abs(s),Y=function(t,n){void 0===n&&(n={});var e=(0,r.useContext)(h._).isStatic,i=(0,r.useRef)(null),a=g((0,O.i)(t)?t.get():t);return(0,r.useMemo)((function(){return a.attach((function(t,r){return e?r(t):(i.current&&i.current.stop(),i.current=(0,b.j)((0,y.__assign)((0,y.__assign)({from:a.get(),to:t,velocity:a.getVelocity()},n),{onUpdate:r})),a.get())}))}),Object.values(n)),(0,w.p)(t,(function(t){return a.set(parseFloat(t))})),a}(_(N,[j,L],[s,-s]),{stiffness:400,damping:90});return(0,r.useEffect)((function(){var t=function(){var t=m.current;t&&(d(t.getBoundingClientRect().top+window.scrollY||window.pageYOffset),v(window.innerHeight))};return t(),window.addEventListener("resize",t),function(){return window.removeEventListener("resize",t)}}),[m]),u?(0,i.jsx)("div",{className:o,"data-testid":e,style:{transform:"translateX(".concat(L+Math.abs(s),")")},children:n}):(0,i.jsx)(C.E.div,{ref:m,style:{x:Y},className:o,children:n})}},86181:function(t,n,e){"use strict";var i=e(61250),r=e(51838),a=e.n(r);n.Z=function(t){var n=t.textBlockClassName,e=void 0===n?"space-y-8 lg:space-y-10 2xl:space-y-12 3xl:space-y-16":n,r=t.ctaClassName,s=void 0===r?"lg:space-x-8":r,o=t.caption,u=t.title,c=t.tagline,l=t.body,d=t.primaryCta,f=t.secondaryCta;return(0,i.jsxs)("div",{className:e,children:[(0,i.jsxs)("div",{className:"space-y-4",children:[u,o]}),(0,i.jsxs)("div",{className:"space-y-4",children:[c,l]}),(0,i.jsxs)("div",{className:a()("flex flex-row md:items-center",s),children:[d,f]})]})}},37633:function(t,n,e){"use strict";e.d(n,{$A:function(){return c},GK:function(){return y},KQ:function(){return d},Kl:function(){return x},Pz:function(){return s},Vd:function(){return p},Vx:function(){return l},W_:function(){return a},Zb:function(){return f},ac:function(){return o},pg:function(){return u},qx:function(){return r}});var i=e(44481),r={initial:{opacity:0,y:50},animate:function(t){return{y:0,opacity:1,transition:(0,i.us)({delay:.3+.5*(t-1),duration:.4})}}},a={initial:function(t){return{opacity:0,y:-25,transition:(0,i.us)({delay:.3+.5*(t-1),duration:.6})}},animate:function(t){return{y:0,opacity:1,transition:(0,i.us)({delay:.3+.5*(t-1),duration:.6})}}},s={initial:{opacity:0,x:-30,transition:(0,i.us)({duration:.2})},animate:{x:0,opacity:1,transition:(0,i.us)({duration:.2})},exit:{opacity:0,x:30,transition:(0,i.us)({duration:.2})}},o={initial:{opacity:0,x:-30,transition:(0,i.us)({duration:.2})},animate:function(t){return{x:0,opacity:1,transition:(0,i.us)({duration:.2,delay:.3+.5*(t-1)})}}},u={initial:{opacity:0,y:-30},animate:function(t){return{y:0,opacity:1,transition:(0,i.us)({delay:.3+.5*(t-1),duration:.4})}}},c={initial:{pathLength:1,pathOffset:1},animate:function(t){return{pathLength:1,pathOffset:0,transition:(0,i.us)({duration:2,delay:.3+.5*(t-1)})}}},l={initial:{pathLength:0,opacity:0},animate:function(t){var n=.3+.5*(t-1);return{pathLength:1,opacity:1,transition:(0,i.us)({pathLength:{delay:n,duration:1,ease:"easeInOut"},opacity:{delay:n,duration:.4}})}}},d={initial:{opacity:0},animate:function(t){var n=.3+.5*(t-1);return{rotate:360,opacity:1,transition:(0,i.us)({opacity:{delay:n,duration:.4},rotate:{delay:n,duration:1}})}}},f={initial:{x:-15,opacity:0,transition:(0,i.us)({duration:.2})},animate:{x:0,opacity:1,transition:(0,i.us)({duration:.2})},exit:{x:-10,opacity:0,transition:(0,i.us)({duration:.2})}},p={initial:{x:15,opacity:0,transition:(0,i.us)({duration:.2})},animate:{x:0,opacity:1,transition:(0,i.us)({duration:.2})},exit:{x:-10,opacity:0,transition:(0,i.us)({duration:.2})}},y={initial:{x:"0px"},animate:function(t){for(var n=t.numberOfCards,e=t.cardWidth,r=t.cardGap,a=[],s=0;s<n;s++){var o="-".concat(s*e+s*r,"px");0===s?a.push("0px","0px"):s===n-1?a.push(o,o):a.push(o,o,o)}return{x:a,transition:(0,i.us)({repeat:1/0,repeatType:"reverse",duration:4*n})}}},x={initial:{y:0},animate:function(t){var n=t.order,e=t.y,r=t.duration;return{y:e,transition:(0,i.us)({repeat:1/0,repeatType:"reverse",delay:.3+.5*(n-1),duration:r})}}}},79849:function(t){t.exports={layout:"faq_module_layout__1TEm7"}}}]);
//# 