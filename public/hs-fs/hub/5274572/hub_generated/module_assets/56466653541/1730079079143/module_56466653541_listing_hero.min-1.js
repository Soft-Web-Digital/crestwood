var module_56466653541=void(()=>{"use strict";var e=function(e){var t,o,c="",a=e,s=e.querySelector(".hs-search-field__input"),i=e.querySelector(".hs-search-field__suggestions"),u=function(){i.innerHTML="",s.focus(),a.classList.remove("hs-search-field--open")},f=function(){var e=[];e.push(s);for(var t=i.getElementsByTagName("A"),n=0;n<t.length;n++)e.push(t[n]);var r=e[0],o=e[e.length-1];a.addEventListener("keydown",(function(t){switch(t.which){case 9:!function(e){e.target!=o||e.shiftKey?e.target==r&&e.shiftKey&&(e.preventDefault(),o.focus()):(e.preventDefault(),r.focus())}(t);break;case 27:u();break;case 38:!function(t){t.preventDefault(),t.target==r?o.focus():e.forEach((function(n){n==t.target&&e[e.indexOf(n)-1].focus()}))}(t);break;case 40:!function(t){t.preventDefault(),t.target==o?r.focus():e.forEach((function(n){n==t.target&&e[e.indexOf(n)+1].focus()}))}(t)}}))},h=(t=function(){(c=s.value).length>2?function(){var t=new XMLHttpRequest,n="/_hcms/search?&term="+encodeURIComponent(c)+"&limit="+encodeURIComponent(6)+"&autocomplete=true&analytics=true&"+function(){for(var t=[],n=e.querySelector("form"),r=0;r<n.querySelectorAll("input[type=hidden]").length;r++){var o=n.querySelectorAll("input[type=hidden]")[r];"limit"!==o.name&&t.push(encodeURIComponent(o.name)+"="+encodeURIComponent(o.value))}return t.join("&")}();t.open("GET",n,!0),t.onload=function(){if(t.status>=200&&t.status<400){var e=JSON.parse(t.responseText);e.total>0?((r=[]).push("<li id='results-for'>Results for \""+(n=e).searchTerm+'"</li>'),n.results.forEach((function(e,t){r.push("<li id='result"+t+"'><a href='"+e.url+"'>"+e.title+"</a></li>")})),u(),i.innerHTML=r.join(""),a.classList.add("hs-search-field--open"),f()):u()}else console.error("Server reached, error retrieving results.");var n,r},t.onerror=function(){console.error("Could not reach the server.")},t.send()}():0==c.length&&u()},function(){var e=this,c=arguments;clearTimeout(o),o=setTimeout((function(){o=null,t.apply(e,c)}),250)});s.addEventListener("input",(function(e){9!=e.which&&40!=e.which&&38!=e.which&&27!=e.which&&c!=s.value&&h()}))};if(document.attachEvent?"complete"===document.readyState:"loading"!==document.readyState){var t=document.querySelectorAll(".hs-search-field");Array.prototype.forEach.call(t,(function(t){e(t)}))}else document.addEventListener("DOMContentLoaded",(function(){var t=document.querySelectorAll(".hs-search-field");Array.prototype.forEach.call(t,(function(t){e(t)}))}));$(document).ready((function(){$("body").on("click",(function(){$(".hs-search-field").find(".hs-search-field__suggestions").children().remove(),$(".hs-search-field.hs-search-field--open").removeClass("hs-search-field--open")})),$(".hs-search-field").on("click",(function(e){e.stopPropagation()}))}))})();