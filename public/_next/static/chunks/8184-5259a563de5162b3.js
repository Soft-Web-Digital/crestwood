(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[8184],{89514:function(t){!function(){var r={675:function(t,r){"use strict";r.byteLength=function(t){var r=f(t),e=r[0],n=r[1];return 3*(e+n)/4-n},r.toByteArray=function(t){var r,e,i=f(t),a=i[0],u=i[1],s=new o(function(t,r,e){return 3*(r+e)/4-e}(0,a,u)),h=0,c=u>0?a-4:a;for(e=0;e<c;e+=4)r=n[t.charCodeAt(e)]<<18|n[t.charCodeAt(e+1)]<<12|n[t.charCodeAt(e+2)]<<6|n[t.charCodeAt(e+3)],s[h++]=r>>16&255,s[h++]=r>>8&255,s[h++]=255&r;2===u&&(r=n[t.charCodeAt(e)]<<2|n[t.charCodeAt(e+1)]>>4,s[h++]=255&r);1===u&&(r=n[t.charCodeAt(e)]<<10|n[t.charCodeAt(e+1)]<<4|n[t.charCodeAt(e+2)]>>2,s[h++]=r>>8&255,s[h++]=255&r);return s},r.fromByteArray=function(t){for(var r,n=t.length,o=n%3,i=[],a=16383,u=0,f=n-o;u<f;u+=a)i.push(h(t,u,u+a>f?f:u+a));1===o?(r=t[n-1],i.push(e[r>>2]+e[r<<4&63]+"==")):2===o&&(r=(t[n-2]<<8)+t[n-1],i.push(e[r>>10]+e[r>>4&63]+e[r<<2&63]+"="));return i.join("")};for(var e=[],n=[],o="undefined"!==typeof Uint8Array?Uint8Array:Array,i="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",a=0,u=i.length;a<u;++a)e[a]=i[a],n[i.charCodeAt(a)]=a;function f(t){var r=t.length;if(r%4>0)throw new Error("Invalid string. Length must be a multiple of 4");var e=t.indexOf("=");return-1===e&&(e=r),[e,e===r?0:4-e%4]}function s(t){return e[t>>18&63]+e[t>>12&63]+e[t>>6&63]+e[63&t]}function h(t,r,e){for(var n,o=[],i=r;i<e;i+=3)n=(t[i]<<16&16711680)+(t[i+1]<<8&65280)+(255&t[i+2]),o.push(s(n));return o.join("")}n["-".charCodeAt(0)]=62,n["_".charCodeAt(0)]=63},72:function(t,r,e){"use strict";var n=e(675),o=e(783),i="function"===typeof Symbol&&"function"===typeof Symbol.for?Symbol.for("nodejs.util.inspect.custom"):null;r.Buffer=f,r.SlowBuffer=function(t){+t!=t&&(t=0);return f.alloc(+t)},r.INSPECT_MAX_BYTES=50;var a=2147483647;function u(t){if(t>a)throw new RangeError('The value "'+t+'" is invalid for option "size"');var r=new Uint8Array(t);return Object.setPrototypeOf(r,f.prototype),r}function f(t,r,e){if("number"===typeof t){if("string"===typeof r)throw new TypeError('The "string" argument must be of type string. Received type number');return c(t)}return s(t,r,e)}function s(t,r,e){if("string"===typeof t)return function(t,r){"string"===typeof r&&""!==r||(r="utf8");if(!f.isEncoding(r))throw new TypeError("Unknown encoding: "+r);var e=0|g(t,r),n=u(e),o=n.write(t,r);o!==e&&(n=n.slice(0,o));return n}(t,r);if(ArrayBuffer.isView(t))return p(t);if(null==t)throw new TypeError("The first argument must be one of type string, Buffer, ArrayBuffer, Array, or Array-like Object. Received type "+typeof t);if(G(t,ArrayBuffer)||t&&G(t.buffer,ArrayBuffer))return l(t,r,e);if("undefined"!==typeof SharedArrayBuffer&&(G(t,SharedArrayBuffer)||t&&G(t.buffer,SharedArrayBuffer)))return l(t,r,e);if("number"===typeof t)throw new TypeError('The "value" argument must not be of type number. Received type number');var n=t.valueOf&&t.valueOf();if(null!=n&&n!==t)return f.from(n,r,e);var o=function(t){if(f.isBuffer(t)){var r=0|y(t.length),e=u(r);return 0===e.length||t.copy(e,0,0,r),e}if(void 0!==t.length)return"number"!==typeof t.length||F(t.length)?u(0):p(t);if("Buffer"===t.type&&Array.isArray(t.data))return p(t.data)}(t);if(o)return o;if("undefined"!==typeof Symbol&&null!=Symbol.toPrimitive&&"function"===typeof t[Symbol.toPrimitive])return f.from(t[Symbol.toPrimitive]("string"),r,e);throw new TypeError("The first argument must be one of type string, Buffer, ArrayBuffer, Array, or Array-like Object. Received type "+typeof t)}function h(t){if("number"!==typeof t)throw new TypeError('"size" argument must be of type number');if(t<0)throw new RangeError('The value "'+t+'" is invalid for option "size"')}function c(t){return h(t),u(t<0?0:0|y(t))}function p(t){for(var r=t.length<0?0:0|y(t.length),e=u(r),n=0;n<r;n+=1)e[n]=255&t[n];return e}function l(t,r,e){if(r<0||t.byteLength<r)throw new RangeError('"offset" is outside of buffer bounds');if(t.byteLength<r+(e||0))throw new RangeError('"length" is outside of buffer bounds');var n;return n=void 0===r&&void 0===e?new Uint8Array(t):void 0===e?new Uint8Array(t,r):new Uint8Array(t,r,e),Object.setPrototypeOf(n,f.prototype),n}function y(t){if(t>=a)throw new RangeError("Attempt to allocate Buffer larger than maximum size: 0x"+a.toString(16)+" bytes");return 0|t}function g(t,r){if(f.isBuffer(t))return t.length;if(ArrayBuffer.isView(t)||G(t,ArrayBuffer))return t.byteLength;if("string"!==typeof t)throw new TypeError('The "string" argument must be one of type string, Buffer, or ArrayBuffer. Received type '+typeof t);var e=t.length,n=arguments.length>2&&!0===arguments[2];if(!n&&0===e)return 0;for(var o=!1;;)switch(r){case"ascii":case"latin1":case"binary":return e;case"utf8":case"utf-8":return z(t).length;case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return 2*e;case"hex":return e>>>1;case"base64":return D(t).length;default:if(o)return n?-1:z(t).length;r=(""+r).toLowerCase(),o=!0}}function d(t,r,e){var n=!1;if((void 0===r||r<0)&&(r=0),r>this.length)return"";if((void 0===e||e>this.length)&&(e=this.length),e<=0)return"";if((e>>>=0)<=(r>>>=0))return"";for(t||(t="utf8");;)switch(t){case"hex":return R(this,r,e);case"utf8":case"utf-8":return T(this,r,e);case"ascii":return C(this,r,e);case"latin1":case"binary":return L(this,r,e);case"base64":return I(this,r,e);case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return j(this,r,e);default:if(n)throw new TypeError("Unknown encoding: "+t);t=(t+"").toLowerCase(),n=!0}}function m(t,r,e){var n=t[r];t[r]=t[e],t[e]=n}function w(t,r,e,n,o){if(0===t.length)return-1;if("string"===typeof e?(n=e,e=0):e>2147483647?e=2147483647:e<-2147483648&&(e=-2147483648),F(e=+e)&&(e=o?0:t.length-1),e<0&&(e=t.length+e),e>=t.length){if(o)return-1;e=t.length-1}else if(e<0){if(!o)return-1;e=0}if("string"===typeof r&&(r=f.from(r,n)),f.isBuffer(r))return 0===r.length?-1:b(t,r,e,n,o);if("number"===typeof r)return r&=255,"function"===typeof Uint8Array.prototype.indexOf?o?Uint8Array.prototype.indexOf.call(t,r,e):Uint8Array.prototype.lastIndexOf.call(t,r,e):b(t,[r],e,n,o);throw new TypeError("val must be string, number or Buffer")}function b(t,r,e,n,o){var i,a=1,u=t.length,f=r.length;if(void 0!==n&&("ucs2"===(n=String(n).toLowerCase())||"ucs-2"===n||"utf16le"===n||"utf-16le"===n)){if(t.length<2||r.length<2)return-1;a=2,u/=2,f/=2,e/=2}function s(t,r){return 1===a?t[r]:t.readUInt16BE(r*a)}if(o){var h=-1;for(i=e;i<u;i++)if(s(t,i)===s(r,-1===h?0:i-h)){if(-1===h&&(h=i),i-h+1===f)return h*a}else-1!==h&&(i-=i-h),h=-1}else for(e+f>u&&(e=u-f),i=e;i>=0;i--){for(var c=!0,p=0;p<f;p++)if(s(t,i+p)!==s(r,p)){c=!1;break}if(c)return i}return-1}function v(t,r,e,n){e=Number(e)||0;var o=t.length-e;n?(n=Number(n))>o&&(n=o):n=o;var i=r.length;n>i/2&&(n=i/2);for(var a=0;a<n;++a){var u=parseInt(r.substr(2*a,2),16);if(F(u))return a;t[e+a]=u}return a}function E(t,r,e,n){return _(z(r,t.length-e),t,e,n)}function A(t,r,e,n){return _(function(t){for(var r=[],e=0;e<t.length;++e)r.push(255&t.charCodeAt(e));return r}(r),t,e,n)}function B(t,r,e,n){return A(t,r,e,n)}function O(t,r,e,n){return _(D(r),t,e,n)}function U(t,r,e,n){return _(function(t,r){for(var e,n,o,i=[],a=0;a<t.length&&!((r-=2)<0);++a)n=(e=t.charCodeAt(a))>>8,o=e%256,i.push(o),i.push(n);return i}(r,t.length-e),t,e,n)}function I(t,r,e){return 0===r&&e===t.length?n.fromByteArray(t):n.fromByteArray(t.slice(r,e))}function T(t,r,e){e=Math.min(t.length,e);for(var n=[],o=r;o<e;){var i,a,u,f,s=t[o],h=null,c=s>239?4:s>223?3:s>191?2:1;if(o+c<=e)switch(c){case 1:s<128&&(h=s);break;case 2:128===(192&(i=t[o+1]))&&(f=(31&s)<<6|63&i)>127&&(h=f);break;case 3:i=t[o+1],a=t[o+2],128===(192&i)&&128===(192&a)&&(f=(15&s)<<12|(63&i)<<6|63&a)>2047&&(f<55296||f>57343)&&(h=f);break;case 4:i=t[o+1],a=t[o+2],u=t[o+3],128===(192&i)&&128===(192&a)&&128===(192&u)&&(f=(15&s)<<18|(63&i)<<12|(63&a)<<6|63&u)>65535&&f<1114112&&(h=f)}null===h?(h=65533,c=1):h>65535&&(h-=65536,n.push(h>>>10&1023|55296),h=56320|1023&h),n.push(h),o+=c}return S(n)}r.kMaxLength=a,f.TYPED_ARRAY_SUPPORT=function(){try{var t=new Uint8Array(1),r={foo:function(){return 42}};return Object.setPrototypeOf(r,Uint8Array.prototype),Object.setPrototypeOf(t,r),42===t.foo()}catch(t){return!1}}(),f.TYPED_ARRAY_SUPPORT||"undefined"===typeof console||"function"!==typeof console.error||console.error("This browser lacks typed array (Uint8Array) support which is required by `buffer` v5.x. Use `buffer` v4.x if you require old browser support."),Object.defineProperty(f.prototype,"parent",{enumerable:!0,get:function(){if(f.isBuffer(this))return this.buffer}}),Object.defineProperty(f.prototype,"offset",{enumerable:!0,get:function(){if(f.isBuffer(this))return this.byteOffset}}),f.poolSize=8192,f.from=function(t,r,e){return s(t,r,e)},Object.setPrototypeOf(f.prototype,Uint8Array.prototype),Object.setPrototypeOf(f,Uint8Array),f.alloc=function(t,r,e){return function(t,r,e){return h(t),t<=0?u(t):void 0!==r?"string"===typeof e?u(t).fill(r,e):u(t).fill(r):u(t)}(t,r,e)},f.allocUnsafe=function(t){return c(t)},f.allocUnsafeSlow=function(t){return c(t)},f.isBuffer=function(t){return null!=t&&!0===t._isBuffer&&t!==f.prototype},f.compare=function(t,r){if(G(t,Uint8Array)&&(t=f.from(t,t.offset,t.byteLength)),G(r,Uint8Array)&&(r=f.from(r,r.offset,r.byteLength)),!f.isBuffer(t)||!f.isBuffer(r))throw new TypeError('The "buf1", "buf2" arguments must be one of type Buffer or Uint8Array');if(t===r)return 0;for(var e=t.length,n=r.length,o=0,i=Math.min(e,n);o<i;++o)if(t[o]!==r[o]){e=t[o],n=r[o];break}return e<n?-1:n<e?1:0},f.isEncoding=function(t){switch(String(t).toLowerCase()){case"hex":case"utf8":case"utf-8":case"ascii":case"latin1":case"binary":case"base64":case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return!0;default:return!1}},f.concat=function(t,r){if(!Array.isArray(t))throw new TypeError('"list" argument must be an Array of Buffers');if(0===t.length)return f.alloc(0);var e;if(void 0===r)for(r=0,e=0;e<t.length;++e)r+=t[e].length;var n=f.allocUnsafe(r),o=0;for(e=0;e<t.length;++e){var i=t[e];if(G(i,Uint8Array)&&(i=f.from(i)),!f.isBuffer(i))throw new TypeError('"list" argument must be an Array of Buffers');i.copy(n,o),o+=i.length}return n},f.byteLength=g,f.prototype._isBuffer=!0,f.prototype.swap16=function(){var t=this.length;if(t%2!==0)throw new RangeError("Buffer size must be a multiple of 16-bits");for(var r=0;r<t;r+=2)m(this,r,r+1);return this},f.prototype.swap32=function(){var t=this.length;if(t%4!==0)throw new RangeError("Buffer size must be a multiple of 32-bits");for(var r=0;r<t;r+=4)m(this,r,r+3),m(this,r+1,r+2);return this},f.prototype.swap64=function(){var t=this.length;if(t%8!==0)throw new RangeError("Buffer size must be a multiple of 64-bits");for(var r=0;r<t;r+=8)m(this,r,r+7),m(this,r+1,r+6),m(this,r+2,r+5),m(this,r+3,r+4);return this},f.prototype.toString=function(){var t=this.length;return 0===t?"":0===arguments.length?T(this,0,t):d.apply(this,arguments)},f.prototype.toLocaleString=f.prototype.toString,f.prototype.equals=function(t){if(!f.isBuffer(t))throw new TypeError("Argument must be a Buffer");return this===t||0===f.compare(this,t)},f.prototype.inspect=function(){var t="",e=r.INSPECT_MAX_BYTES;return t=this.toString("hex",0,e).replace(/(.{2})/g,"$1 ").trim(),this.length>e&&(t+=" ... "),"<Buffer "+t+">"},i&&(f.prototype[i]=f.prototype.inspect),f.prototype.compare=function(t,r,e,n,o){if(G(t,Uint8Array)&&(t=f.from(t,t.offset,t.byteLength)),!f.isBuffer(t))throw new TypeError('The "target" argument must be one of type Buffer or Uint8Array. Received type '+typeof t);if(void 0===r&&(r=0),void 0===e&&(e=t?t.length:0),void 0===n&&(n=0),void 0===o&&(o=this.length),r<0||e>t.length||n<0||o>this.length)throw new RangeError("out of range index");if(n>=o&&r>=e)return 0;if(n>=o)return-1;if(r>=e)return 1;if(this===t)return 0;for(var i=(o>>>=0)-(n>>>=0),a=(e>>>=0)-(r>>>=0),u=Math.min(i,a),s=this.slice(n,o),h=t.slice(r,e),c=0;c<u;++c)if(s[c]!==h[c]){i=s[c],a=h[c];break}return i<a?-1:a<i?1:0},f.prototype.includes=function(t,r,e){return-1!==this.indexOf(t,r,e)},f.prototype.indexOf=function(t,r,e){return w(this,t,r,e,!0)},f.prototype.lastIndexOf=function(t,r,e){return w(this,t,r,e,!1)},f.prototype.write=function(t,r,e,n){if(void 0===r)n="utf8",e=this.length,r=0;else if(void 0===e&&"string"===typeof r)n=r,e=this.length,r=0;else{if(!isFinite(r))throw new Error("Buffer.write(string, encoding, offset[, length]) is no longer supported");r>>>=0,isFinite(e)?(e>>>=0,void 0===n&&(n="utf8")):(n=e,e=void 0)}var o=this.length-r;if((void 0===e||e>o)&&(e=o),t.length>0&&(e<0||r<0)||r>this.length)throw new RangeError("Attempt to write outside buffer bounds");n||(n="utf8");for(var i=!1;;)switch(n){case"hex":return v(this,t,r,e);case"utf8":case"utf-8":return E(this,t,r,e);case"ascii":return A(this,t,r,e);case"latin1":case"binary":return B(this,t,r,e);case"base64":return O(this,t,r,e);case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return U(this,t,r,e);default:if(i)throw new TypeError("Unknown encoding: "+n);n=(""+n).toLowerCase(),i=!0}},f.prototype.toJSON=function(){return{type:"Buffer",data:Array.prototype.slice.call(this._arr||this,0)}};function S(t){var r=t.length;if(r<=4096)return String.fromCharCode.apply(String,t);for(var e="",n=0;n<r;)e+=String.fromCharCode.apply(String,t.slice(n,n+=4096));return e}function C(t,r,e){var n="";e=Math.min(t.length,e);for(var o=r;o<e;++o)n+=String.fromCharCode(127&t[o]);return n}function L(t,r,e){var n="";e=Math.min(t.length,e);for(var o=r;o<e;++o)n+=String.fromCharCode(t[o]);return n}function R(t,r,e){var n=t.length;(!r||r<0)&&(r=0),(!e||e<0||e>n)&&(e=n);for(var o="",i=r;i<e;++i)o+=H[t[i]];return o}function j(t,r,e){for(var n=t.slice(r,e),o="",i=0;i<n.length;i+=2)o+=String.fromCharCode(n[i]+256*n[i+1]);return o}function k(t,r,e){if(t%1!==0||t<0)throw new RangeError("offset is not uint");if(t+r>e)throw new RangeError("Trying to access beyond buffer length")}function x(t,r,e,n,o,i){if(!f.isBuffer(t))throw new TypeError('"buffer" argument must be a Buffer instance');if(r>o||r<i)throw new RangeError('"value" argument is out of bounds');if(e+n>t.length)throw new RangeError("Index out of range")}function N(t,r,e,n,o,i){if(e+n>t.length)throw new RangeError("Index out of range");if(e<0)throw new RangeError("Index out of range")}function M(t,r,e,n,i){return r=+r,e>>>=0,i||N(t,0,e,4),o.write(t,r,e,n,23,4),e+4}function P(t,r,e,n,i){return r=+r,e>>>=0,i||N(t,0,e,8),o.write(t,r,e,n,52,8),e+8}f.prototype.slice=function(t,r){var e=this.length;(t=~~t)<0?(t+=e)<0&&(t=0):t>e&&(t=e),(r=void 0===r?e:~~r)<0?(r+=e)<0&&(r=0):r>e&&(r=e),r<t&&(r=t);var n=this.subarray(t,r);return Object.setPrototypeOf(n,f.prototype),n},f.prototype.readUIntLE=function(t,r,e){t>>>=0,r>>>=0,e||k(t,r,this.length);for(var n=this[t],o=1,i=0;++i<r&&(o*=256);)n+=this[t+i]*o;return n},f.prototype.readUIntBE=function(t,r,e){t>>>=0,r>>>=0,e||k(t,r,this.length);for(var n=this[t+--r],o=1;r>0&&(o*=256);)n+=this[t+--r]*o;return n},f.prototype.readUInt8=function(t,r){return t>>>=0,r||k(t,1,this.length),this[t]},f.prototype.readUInt16LE=function(t,r){return t>>>=0,r||k(t,2,this.length),this[t]|this[t+1]<<8},f.prototype.readUInt16BE=function(t,r){return t>>>=0,r||k(t,2,this.length),this[t]<<8|this[t+1]},f.prototype.readUInt32LE=function(t,r){return t>>>=0,r||k(t,4,this.length),(this[t]|this[t+1]<<8|this[t+2]<<16)+16777216*this[t+3]},f.prototype.readUInt32BE=function(t,r){return t>>>=0,r||k(t,4,this.length),16777216*this[t]+(this[t+1]<<16|this[t+2]<<8|this[t+3])},f.prototype.readIntLE=function(t,r,e){t>>>=0,r>>>=0,e||k(t,r,this.length);for(var n=this[t],o=1,i=0;++i<r&&(o*=256);)n+=this[t+i]*o;return n>=(o*=128)&&(n-=Math.pow(2,8*r)),n},f.prototype.readIntBE=function(t,r,e){t>>>=0,r>>>=0,e||k(t,r,this.length);for(var n=r,o=1,i=this[t+--n];n>0&&(o*=256);)i+=this[t+--n]*o;return i>=(o*=128)&&(i-=Math.pow(2,8*r)),i},f.prototype.readInt8=function(t,r){return t>>>=0,r||k(t,1,this.length),128&this[t]?-1*(255-this[t]+1):this[t]},f.prototype.readInt16LE=function(t,r){t>>>=0,r||k(t,2,this.length);var e=this[t]|this[t+1]<<8;return 32768&e?4294901760|e:e},f.prototype.readInt16BE=function(t,r){t>>>=0,r||k(t,2,this.length);var e=this[t+1]|this[t]<<8;return 32768&e?4294901760|e:e},f.prototype.readInt32LE=function(t,r){return t>>>=0,r||k(t,4,this.length),this[t]|this[t+1]<<8|this[t+2]<<16|this[t+3]<<24},f.prototype.readInt32BE=function(t,r){return t>>>=0,r||k(t,4,this.length),this[t]<<24|this[t+1]<<16|this[t+2]<<8|this[t+3]},f.prototype.readFloatLE=function(t,r){return t>>>=0,r||k(t,4,this.length),o.read(this,t,!0,23,4)},f.prototype.readFloatBE=function(t,r){return t>>>=0,r||k(t,4,this.length),o.read(this,t,!1,23,4)},f.prototype.readDoubleLE=function(t,r){return t>>>=0,r||k(t,8,this.length),o.read(this,t,!0,52,8)},f.prototype.readDoubleBE=function(t,r){return t>>>=0,r||k(t,8,this.length),o.read(this,t,!1,52,8)},f.prototype.writeUIntLE=function(t,r,e,n){(t=+t,r>>>=0,e>>>=0,n)||x(this,t,r,e,Math.pow(2,8*e)-1,0);var o=1,i=0;for(this[r]=255&t;++i<e&&(o*=256);)this[r+i]=t/o&255;return r+e},f.prototype.writeUIntBE=function(t,r,e,n){(t=+t,r>>>=0,e>>>=0,n)||x(this,t,r,e,Math.pow(2,8*e)-1,0);var o=e-1,i=1;for(this[r+o]=255&t;--o>=0&&(i*=256);)this[r+o]=t/i&255;return r+e},f.prototype.writeUInt8=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,1,255,0),this[r]=255&t,r+1},f.prototype.writeUInt16LE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,2,65535,0),this[r]=255&t,this[r+1]=t>>>8,r+2},f.prototype.writeUInt16BE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,2,65535,0),this[r]=t>>>8,this[r+1]=255&t,r+2},f.prototype.writeUInt32LE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,4,4294967295,0),this[r+3]=t>>>24,this[r+2]=t>>>16,this[r+1]=t>>>8,this[r]=255&t,r+4},f.prototype.writeUInt32BE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,4,4294967295,0),this[r]=t>>>24,this[r+1]=t>>>16,this[r+2]=t>>>8,this[r+3]=255&t,r+4},f.prototype.writeIntLE=function(t,r,e,n){if(t=+t,r>>>=0,!n){var o=Math.pow(2,8*e-1);x(this,t,r,e,o-1,-o)}var i=0,a=1,u=0;for(this[r]=255&t;++i<e&&(a*=256);)t<0&&0===u&&0!==this[r+i-1]&&(u=1),this[r+i]=(t/a>>0)-u&255;return r+e},f.prototype.writeIntBE=function(t,r,e,n){if(t=+t,r>>>=0,!n){var o=Math.pow(2,8*e-1);x(this,t,r,e,o-1,-o)}var i=e-1,a=1,u=0;for(this[r+i]=255&t;--i>=0&&(a*=256);)t<0&&0===u&&0!==this[r+i+1]&&(u=1),this[r+i]=(t/a>>0)-u&255;return r+e},f.prototype.writeInt8=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,1,127,-128),t<0&&(t=255+t+1),this[r]=255&t,r+1},f.prototype.writeInt16LE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,2,32767,-32768),this[r]=255&t,this[r+1]=t>>>8,r+2},f.prototype.writeInt16BE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,2,32767,-32768),this[r]=t>>>8,this[r+1]=255&t,r+2},f.prototype.writeInt32LE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,4,2147483647,-2147483648),this[r]=255&t,this[r+1]=t>>>8,this[r+2]=t>>>16,this[r+3]=t>>>24,r+4},f.prototype.writeInt32BE=function(t,r,e){return t=+t,r>>>=0,e||x(this,t,r,4,2147483647,-2147483648),t<0&&(t=4294967295+t+1),this[r]=t>>>24,this[r+1]=t>>>16,this[r+2]=t>>>8,this[r+3]=255&t,r+4},f.prototype.writeFloatLE=function(t,r,e){return M(this,t,r,!0,e)},f.prototype.writeFloatBE=function(t,r,e){return M(this,t,r,!1,e)},f.prototype.writeDoubleLE=function(t,r,e){return P(this,t,r,!0,e)},f.prototype.writeDoubleBE=function(t,r,e){return P(this,t,r,!1,e)},f.prototype.copy=function(t,r,e,n){if(!f.isBuffer(t))throw new TypeError("argument should be a Buffer");if(e||(e=0),n||0===n||(n=this.length),r>=t.length&&(r=t.length),r||(r=0),n>0&&n<e&&(n=e),n===e)return 0;if(0===t.length||0===this.length)return 0;if(r<0)throw new RangeError("targetStart out of bounds");if(e<0||e>=this.length)throw new RangeError("Index out of range");if(n<0)throw new RangeError("sourceEnd out of bounds");n>this.length&&(n=this.length),t.length-r<n-e&&(n=t.length-r+e);var o=n-e;if(this===t&&"function"===typeof Uint8Array.prototype.copyWithin)this.copyWithin(r,e,n);else if(this===t&&e<r&&r<n)for(var i=o-1;i>=0;--i)t[i+r]=this[i+e];else Uint8Array.prototype.set.call(t,this.subarray(e,n),r);return o},f.prototype.fill=function(t,r,e,n){if("string"===typeof t){if("string"===typeof r?(n=r,r=0,e=this.length):"string"===typeof e&&(n=e,e=this.length),void 0!==n&&"string"!==typeof n)throw new TypeError("encoding must be a string");if("string"===typeof n&&!f.isEncoding(n))throw new TypeError("Unknown encoding: "+n);if(1===t.length){var o=t.charCodeAt(0);("utf8"===n&&o<128||"latin1"===n)&&(t=o)}}else"number"===typeof t?t&=255:"boolean"===typeof t&&(t=Number(t));if(r<0||this.length<r||this.length<e)throw new RangeError("Out of range index");if(e<=r)return this;var i;if(r>>>=0,e=void 0===e?this.length:e>>>0,t||(t=0),"number"===typeof t)for(i=r;i<e;++i)this[i]=t;else{var a=f.isBuffer(t)?t:f.from(t,n),u=a.length;if(0===u)throw new TypeError('The value "'+t+'" is invalid for argument "value"');for(i=0;i<e-r;++i)this[i+r]=a[i%u]}return this};var Y=/[^+/0-9A-Za-z-_]/g;function z(t,r){var e;r=r||1/0;for(var n=t.length,o=null,i=[],a=0;a<n;++a){if((e=t.charCodeAt(a))>55295&&e<57344){if(!o){if(e>56319){(r-=3)>-1&&i.push(239,191,189);continue}if(a+1===n){(r-=3)>-1&&i.push(239,191,189);continue}o=e;continue}if(e<56320){(r-=3)>-1&&i.push(239,191,189),o=e;continue}e=65536+(o-55296<<10|e-56320)}else o&&(r-=3)>-1&&i.push(239,191,189);if(o=null,e<128){if((r-=1)<0)break;i.push(e)}else if(e<2048){if((r-=2)<0)break;i.push(e>>6|192,63&e|128)}else if(e<65536){if((r-=3)<0)break;i.push(e>>12|224,e>>6&63|128,63&e|128)}else{if(!(e<1114112))throw new Error("Invalid code point");if((r-=4)<0)break;i.push(e>>18|240,e>>12&63|128,e>>6&63|128,63&e|128)}}return i}function D(t){return n.toByteArray(function(t){if((t=(t=t.split("=")[0]).trim().replace(Y,"")).length<2)return"";for(;t.length%4!==0;)t+="=";return t}(t))}function _(t,r,e,n){for(var o=0;o<n&&!(o+e>=r.length||o>=t.length);++o)r[o+e]=t[o];return o}function G(t,r){return t instanceof r||null!=t&&null!=t.constructor&&null!=t.constructor.name&&t.constructor.name===r.name}function F(t){return t!==t}var H=function(){for(var t="0123456789abcdef",r=new Array(256),e=0;e<16;++e)for(var n=16*e,o=0;o<16;++o)r[n+o]=t[e]+t[o];return r}()},783:function(t,r){r.read=function(t,r,e,n,o){var i,a,u=8*o-n-1,f=(1<<u)-1,s=f>>1,h=-7,c=e?o-1:0,p=e?-1:1,l=t[r+c];for(c+=p,i=l&(1<<-h)-1,l>>=-h,h+=u;h>0;i=256*i+t[r+c],c+=p,h-=8);for(a=i&(1<<-h)-1,i>>=-h,h+=n;h>0;a=256*a+t[r+c],c+=p,h-=8);if(0===i)i=1-s;else{if(i===f)return a?NaN:1/0*(l?-1:1);a+=Math.pow(2,n),i-=s}return(l?-1:1)*a*Math.pow(2,i-n)},r.write=function(t,r,e,n,o,i){var a,u,f,s=8*i-o-1,h=(1<<s)-1,c=h>>1,p=23===o?Math.pow(2,-24)-Math.pow(2,-77):0,l=n?0:i-1,y=n?1:-1,g=r<0||0===r&&1/r<0?1:0;for(r=Math.abs(r),isNaN(r)||r===1/0?(u=isNaN(r)?1:0,a=h):(a=Math.floor(Math.log(r)/Math.LN2),r*(f=Math.pow(2,-a))<1&&(a--,f*=2),(r+=a+c>=1?p/f:p*Math.pow(2,1-c))*f>=2&&(a++,f/=2),a+c>=h?(u=0,a=h):a+c>=1?(u=(r*f-1)*Math.pow(2,o),a+=c):(u=r*Math.pow(2,c-1)*Math.pow(2,o),a=0));o>=8;t[e+l]=255&u,l+=y,u/=256,o-=8);for(a=a<<o|u,s+=o;s>0;t[e+l]=255&a,l+=y,a/=256,s-=8);t[e+l-y]|=128*g}}},e={};function n(t){var o=e[t];if(void 0!==o)return o.exports;var i=e[t]={exports:{}},a=!0;try{r[t](i,i.exports,n),a=!1}finally{a&&delete e[t]}return i.exports}n.ab="//";var o=n(72);t.exports=o}()},8184:function(t,r,e){var n,o=e(89514).Buffer;!function(e){let i;function a(t,r){const e=t.charCodeAt(r);if(isNaN(e))throw new RangeError("Index "+r+' out of range for string "'+t+'"; please open an issue at https://github.com/Trott/slug/issues/new');if(e<55296||e>57343)return[t.charAt(r),r];if(e>=55296&&e<=56319){if(t.length<=r+1)return[" ",r];const e=t.charCodeAt(r+1);return e<56320||e>57343?[" ",r]:[t.charAt(r)+t.charAt(r+1),r+1]}if(0===r)return[" ",r];const n=t.charCodeAt(r-1);if(n<55296||n>56319)return[" ",r];throw new Error('String "'+t+'" reaches code believed to be unreachable; please open an issue at https://github.com/Trott/slug/issues/new')}function u(t,r){let e=s(t,r);if(""===e){let n="";for(let r=0;r<t.length;r++){const e=a(t,r);r=e[1],n+=e[0]}e=s(i(n),r)}return e}i="undefined"!==typeof window?window.btoa?function(t){return btoa(unescape(encodeURIComponent(t)))}:function(t){const r=unescape(encodeURIComponent(t+""));let e="";for(let n,o,i=0,a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";r.charAt(0|i)||(a="=",i%1);e+=a.charAt(63&n>>8-i%1*8)){if(o=r.charCodeAt(i+=3/4),o>255)throw new Error("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");n=n<<8|o}return e}:function(t){return o.from(t).toString("base64")},"function"!==typeof Object.assign&&Object.defineProperty(Object,"assign",{value:function(t,r){"use strict";if(null===t||void 0===t)throw new TypeError("Cannot convert undefined or null to object");const e=Object(t);for(let o=1;o<arguments.length;o++){const t=arguments[o];if(null!==t&&void 0!==t)for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])}return e},writable:!0,configurable:!0});const f={bg:{"\u0419":"Y","\u0439":"y",X:"H",x:"h","\u0426":"Ts","\u0446":"ts","\u0429":"Sht","\u0449":"sht","\u042a":"A","\u044a":"a","\u042c":"Y","\u044c":"y"},de:{"\xc4":"AE","\xe4":"ae","\xd6":"OE","\xf6":"oe","\xdc":"UE","\xfc":"ue"},sr:{"\u0111":"dj","\u0110":"DJ"},uk:{"\u0418":"Y","\u0438":"y","\u0419":"Y","\u0439":"y","\u0426":"Ts","\u0446":"ts","\u0425":"Kh","\u0445":"kh","\u0429":"Shch","\u0449":"shch","\u0413":"H","\u0433":"h"}};function s(t,r){if("string"!==typeof t)throw new Error("slug() requires a string argument, received "+typeof t);"string"===typeof r&&(r={replacement:r}),(r=r?Object.assign({},r):{}).mode=r.mode||u.defaults.mode;const e=u.defaults.modes[r.mode],n=["replacement","multicharmap","charmap","remove","lower","trim"];for(let u,f=0,h=n.length;f<h;f++)u=n[f],r[u]=u in r?r[u]:e[u];const o=f[r.locale]||{};let i=[];for(let u in r.multicharmap){if(!Object.prototype.hasOwnProperty.call(r.multicharmap,u))continue;const t=u.length;-1===i.indexOf(t)&&i.push(t)}i=i.sort((function(t,r){return r-t}));const a="rfc3986"===r.mode?/[^\w\s\-.~]/:/[^A-Za-z0-9\s]/;let s="";for(let u,f=0,h=t.length;f<h;f++){u=t[f];let e=!1;for(let n=0;n<i.length;n++){const o=i[n],a=t.substr(f,o);if(r.multicharmap[a]){f+=o-1,u=r.multicharmap[a],e=!0;break}}e||(u=o[u]?o[u]:r.charmap[u]?r.charmap[u].replace(r.replacement," "):u.includes(r.replacement)?u.replace(r.replacement," "):u.replace(a,"")),s+=u}return r.remove&&(s=s.replace(r.remove,"")),r.trim&&(s=s.trim()),s=s.replace(/\s+/g,r.replacement),r.lower&&(s=s.toLowerCase()),s}const h={"\u092b\u093c":"Fi","\u0917\u093c":"Ghi","\u0916\u093c":"Khi","\u0915\u093c":"Qi","\u0921\u093c":"ugDha","\u0922\u093c":"ugDhha","\u092f\u093c":"Yi","\u091c\u093c":"Za","\u05d1\u05b4\u05d9":"i","\u05d1\u05b5":"e","\u05d1\u05b5\u05d9":"e","\u05d1\u05b6":"e","\u05d1\u05b7":"a","\u05d1\u05b8":"a","\u05d1\u05b9":"o","\u05d5\u05b9":"o","\u05d1\u05bb":"u","\u05d5\u05bc":"u","\u05d1\u05bc":"b","\u05db\u05bc":"k","\u05da\u05bc":"k","\u05e4\u05bc":"p","\u05e9\u05c1":"sh","\u05e9\u05c2":"s","\u05d1\u05b0":"e","\u05d7\u05b1":"e","\u05d7\u05b2":"a","\u05d7\u05b3":"o","\u05d1\u05b4":"i"},c={"\xc0":"A","\xc1":"A","\xc2":"A","\xc3":"A","\xc4":"A","\xc5":"A","\xc6":"AE","\xc7":"C","\xc8":"E","\xc9":"E","\xca":"E","\xcb":"E","\xcc":"I","\xcd":"I","\xce":"I","\xcf":"I","\xd0":"D","\xd1":"N","\xd2":"O","\xd3":"O","\xd4":"O","\xd5":"O","\xd6":"O","\u0150":"O","\xd8":"O","\u014c":"O","\xd9":"U","\xda":"U","\xdb":"U","\xdc":"U","\u0170":"U","\xdd":"Y","\xde":"TH","\xdf":"ss","\xe0":"a","\xe1":"a","\xe2":"a","\xe3":"a","\xe4":"a","\xe5":"a","\xe6":"ae","\xe7":"c","\xe8":"e","\xe9":"e","\xea":"e","\xeb":"e","\xec":"i","\xed":"i","\xee":"i","\xef":"i","\xf0":"d","\xf1":"n","\xf2":"o","\xf3":"o","\xf4":"o","\xf5":"o","\xf6":"o","\u0151":"o","\xf8":"o","\u014d":"o","\u0152":"OE","\u0153":"oe","\xf9":"u","\xfa":"u","\xfb":"u","\xfc":"u","\u0171":"u","\xfd":"y","\xfe":"th","\xff":"y","\u1e9e":"SS","\u03b1":"a","\u03b2":"b","\u03b3":"g","\u03b4":"d","\u03b5":"e","\u03b6":"z","\u03b7":"h","\u03b8":"8","\u03b9":"i","\u03ba":"k","\u03bb":"l","\u03bc":"m","\u03bd":"n","\u03be":"3","\u03bf":"o","\u03c0":"p","\u03c1":"r","\u03c3":"s","\u03c4":"t","\u03c5":"y","\u03c6":"f","\u03c7":"x","\u03c8":"ps","\u03c9":"w","\u03ac":"a","\u03ad":"e","\u03af":"i","\u03cc":"o","\u03cd":"y","\u03ae":"h","\u03ce":"w","\u03c2":"s","\u03ca":"i","\u03b0":"y","\u03cb":"y","\u0390":"i","\u0391":"A","\u0392":"B","\u0393":"G","\u0394":"D","\u0395":"E","\u0396":"Z","\u0397":"H","\u0398":"8","\u0399":"I","\u039a":"K","\u039b":"L","\u039c":"M","\u039d":"N","\u039e":"3","\u039f":"O","\u03a0":"P","\u03a1":"R","\u03a3":"S","\u03a4":"T","\u03a5":"Y","\u03a6":"F","\u03a7":"X","\u03a8":"PS","\u03a9":"W","\u0386":"A","\u0388":"E","\u038a":"I","\u038c":"O","\u038e":"Y","\u0389":"H","\u038f":"W","\u03aa":"I","\u03ab":"Y","\u015f":"s","\u015e":"S","\u0131":"i","\u0130":"I","\u011f":"g","\u011e":"G","\u0430":"a","\u0431":"b","\u0432":"v","\u0433":"g","\u0434":"d","\u0435":"e","\u0451":"yo","\u0436":"zh","\u0437":"z","\u0438":"i","\u0439":"j","\u043a":"k","\u043b":"l","\u043c":"m","\u043d":"n","\u043e":"o","\u043f":"p","\u0440":"r","\u0441":"s","\u0442":"t","\u0443":"u","\u0444":"f","\u0445":"h","\u0446":"c","\u0447":"ch","\u0448":"sh","\u0449":"sh","\u044a":"u","\u044b":"y","\u044c":"","\u044d":"e","\u044e":"yu","\u044f":"ya","\u0410":"A","\u0411":"B","\u0412":"V","\u0413":"G","\u0414":"D","\u0415":"E","\u0401":"Yo","\u0416":"Zh","\u0417":"Z","\u0418":"I","\u0419":"J","\u041a":"K","\u041b":"L","\u041c":"M","\u041d":"N","\u041e":"O","\u041f":"P","\u0420":"R","\u0421":"S","\u0422":"T","\u0423":"U","\u0424":"F","\u0425":"H","\u0426":"C","\u0427":"Ch","\u0428":"Sh","\u0429":"Sh","\u042a":"U","\u042b":"Y","\u042c":"","\u042d":"E","\u042e":"Yu","\u042f":"Ya","\u0404":"Ye","\u0406":"I","\u0407":"Yi","\u0490":"G","\u0454":"ye","\u0456":"i","\u0457":"yi","\u0491":"g","\u010d":"c","\u010f":"d","\u011b":"e","\u0148":"n","\u0159":"r","\u0161":"s","\u0165":"t","\u016f":"u","\u017e":"z","\u010c":"C","\u010e":"D","\u011a":"E","\u0147":"N","\u0158":"R","\u0160":"S","\u0164":"T","\u016e":"U","\u017d":"Z","\u013e":"l","\u013a":"l","\u0155":"r","\u013d":"L","\u0139":"L","\u0154":"R","\u0105":"a","\u0107":"c","\u0119":"e","\u0142":"l","\u0144":"n","\u015b":"s","\u017a":"z","\u017c":"z","\u0104":"A","\u0106":"C","\u0118":"E","\u0141":"L","\u0143":"N","\u015a":"S","\u0179":"Z","\u017b":"Z","\u0101":"a","\u0113":"e","\u0123":"g","\u012b":"i","\u0137":"k","\u013c":"l","\u0146":"n","\u016b":"u","\u0100":"A","\u0112":"E","\u0122":"G","\u012a":"I","\u0136":"K","\u013b":"L","\u0145":"N","\u016a":"U","\u0623":"a","\u0625":"i","\u0628":"b","\u062a":"t","\u062b":"th","\u062c":"g","\u062d":"h","\u062e":"kh","\u062f":"d","\u0630":"th","\u0631":"r","\u0632":"z","\u0633":"s","\u0634":"sh","\u0635":"s","\u0636":"d","\u0637":"t","\u0638":"th","\u0639":"aa","\u063a":"gh","\u0641":"f","\u0642":"k","\u0643":"k","\u0644":"l","\u0645":"m","\u0646":"n","\u0647":"h","\u0648":"o","\u064a":"y","\u0621":"aa","\u0629":"a","\u0622":"a","\u0627":"a","\u067e":"p","\u0698":"zh","\u06af":"g","\u0686":"ch","\u06a9":"k","\u06cc":"i","\u0117":"e","\u012f":"i","\u0173":"u","\u0116":"E","\u012e":"I","\u0172":"U","\u021b":"t","\u021a":"T","\u0163":"t","\u0162":"T","\u0219":"s","\u0218":"S","\u0103":"a","\u0102":"A","\u1ea0":"A","\u1ea2":"A","\u1ea6":"A","\u1ea4":"A","\u1eac":"A","\u1ea8":"A","\u1eaa":"A","\u1eb0":"A","\u1eae":"A","\u1eb6":"A","\u1eb2":"A","\u1eb4":"A","\u1eb8":"E","\u1eba":"E","\u1ebc":"E","\u1ec0":"E","\u1ebe":"E","\u1ec6":"E","\u1ec2":"E","\u1ec4":"E","\u1eca":"I","\u1ec8":"I","\u0128":"I","\u1ecc":"O","\u1ece":"O","\u1ed2":"O","\u1ed0":"O","\u1ed8":"O","\u1ed4":"O","\u1ed6":"O","\u01a0":"O","\u1edc":"O","\u1eda":"O","\u1ee2":"O","\u1ede":"O","\u1ee0":"O","\u1ee4":"U","\u1ee6":"U","\u0168":"U","\u01af":"U","\u1eea":"U","\u1ee8":"U","\u1ef0":"U","\u1eec":"U","\u1eee":"U","\u1ef2":"Y","\u1ef4":"Y","\u1ef6":"Y","\u1ef8":"Y","\u0110":"D","\u1ea1":"a","\u1ea3":"a","\u1ea7":"a","\u1ea5":"a","\u1ead":"a","\u1ea9":"a","\u1eab":"a","\u1eb1":"a","\u1eaf":"a","\u1eb7":"a","\u1eb3":"a","\u1eb5":"a","\u1eb9":"e","\u1ebb":"e","\u1ebd":"e","\u1ec1":"e","\u1ebf":"e","\u1ec7":"e","\u1ec3":"e","\u1ec5":"e","\u1ecb":"i","\u1ec9":"i","\u0129":"i","\u1ecd":"o","\u1ecf":"o","\u1ed3":"o","\u1ed1":"o","\u1ed9":"o","\u1ed5":"o","\u1ed7":"o","\u01a1":"o","\u1edd":"o","\u1edb":"o","\u1ee3":"o","\u1edf":"o","\u1ee1":"o","\u1ee5":"u","\u1ee7":"u","\u0169":"u","\u01b0":"u","\u1eeb":"u","\u1ee9":"u","\u1ef1":"u","\u1eed":"u","\u1eef":"u","\u1ef3":"y","\u1ef5":"y","\u1ef7":"y","\u1ef9":"y","\u0111":"d","\u04d8":"AE","\u04d9":"ae","\u0492":"GH","\u0493":"gh","\u049a":"KH","\u049b":"kh","\u04a2":"NG","\u04a3":"ng","\u04ae":"UE","\u04af":"ue","\u04b0":"U","\u04b1":"u","\u04ba":"H","\u04bb":"h","\u04e8":"OE","\u04e9":"oe","\u0452":"dj","\u0458":"j","\u0459":"lj","\u045a":"nj","\u045b":"c","\u045f":"dz","\u0402":"Dj","\u0408":"j","\u0409":"Lj","\u040a":"Nj","\u040b":"C","\u040f":"Dz","\u01cc":"nj","\u01c9":"lj","\u01cb":"NJ","\u01c8":"LJ","\u0905":"a","\u0906":"aa","\u090f":"e","\u0908":"ii","\u090d":"ei","\u090e":"ae","\u0910":"ai","\u0907":"i","\u0913":"o","\u0911":"oi","\u0912":"oii","\u090a":"uu","\u0914":"ou","\u0909":"u","\u092c":"B","\u092d":"Bha","\u091a":"Ca","\u091b":"Chha","\u0921":"Da","\u0922":"Dha","\u092b":"Fa","\u0917":"Ga","\u0918":"Gha","\u0917\u093c":"Ghi","\u0939":"Ha","\u091c":"Ja","\u091d":"Jha","\u0915":"Ka","\u0916":"Kha","\u0916\u093c":"Khi","\u0932":"L","\u0933":"Li","\u090c":"Li","\u0934":"Lii","\u0961":"Lii","\u092e":"Ma","\u0928":"Na","\u0919":"Na","\u091e":"Nia","\u0923":"Nae","\u0929":"Ni","\u0950":"oms","\u092a":"Pa","\u0915\u093c":"Qi","\u0930":"Ra","\u090b":"Ri","\u0960":"Ri","\u0931":"Ri","\u0938":"Sa","\u0936":"Sha","\u0937":"Shha","\u091f":"Ta","\u0924":"Ta","\u0920":"Tha","\u0926":"Tha","\u0925":"Tha","\u0927":"Thha","\u0921\u093c":"ugDha","\u0922\u093c":"ugDhha","\u0935":"Va","\u092f":"Ya","\u092f\u093c":"Yi","\u091c\u093c":"Za","\u0259":"e","\u018f":"E","\u10d0":"a","\u10d1":"b","\u10d2":"g","\u10d3":"d","\u10d4":"e","\u10d5":"v","\u10d6":"z","\u10d7":"t","\u10d8":"i","\u10d9":"k","\u10da":"l","\u10db":"m","\u10dc":"n","\u10dd":"o","\u10de":"p","\u10df":"zh","\u10e0":"r","\u10e1":"s","\u10e2":"t","\u10e3":"u","\u10e4":"p","\u10e5":"k","\u10e6":"gh","\u10e7":"q","\u10e8":"sh","\u10e9":"ch","\u10ea":"ts","\u10eb":"dz","\u10ec":"ts","\u10ed":"ch","\u10ee":"kh","\u10ef":"j","\u10f0":"h","\u05d1":"v","\u05d2\u05bc":"g","\u05d2":"g","\u05d3":"d","\u05d3\u05bc":"d","\u05d4":"h","\u05d5":"v","\u05d6":"z","\u05d7":"h","\u05d8":"t","\u05d9":"y","\u05db":"kh","\u05da":"kh","\u05dc":"l","\u05de":"m","\u05dd":"m","\u05e0":"n","\u05df":"n","\u05e1":"s","\u05e4":"f","\u05e3":"f","\u05e5":"ts","\u05e6":"ts","\u05e7":"k","\u05e8":"r","\u05ea\u05bc":"t","\u05ea":"t"};u.charmap=Object.assign({},c),u.multicharmap=Object.assign({},h),u.defaults={charmap:u.charmap,mode:"pretty",modes:{rfc3986:{replacement:"-",remove:null,lower:!0,charmap:u.charmap,multicharmap:u.multicharmap,trim:!0},pretty:{replacement:"-",remove:null,lower:!0,charmap:u.charmap,multicharmap:u.multicharmap,trim:!0}},multicharmap:u.multicharmap},u.reset=function(){u.defaults.modes.rfc3986.charmap=u.defaults.modes.pretty.charmap=u.charmap=u.defaults.charmap=Object.assign({},c),u.defaults.modes.rfc3986.multicharmap=u.defaults.modes.pretty.multicharmap=u.multicharmap=u.defaults.multicharmap=Object.assign({},h)},u.extend=function(t){const r=Object.keys(t),e={},n={};for(let o=0;o<r.length;o++)r[o].length>1?e[r[o]]=t[r[o]]:n[r[o]]=t[r[o]];Object.assign(u.charmap,n),Object.assign(u.multicharmap,e)},void 0===(n=function(){return u}.apply(r,[]))||(t.exports=n)}()}}]);
//# 