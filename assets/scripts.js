(()=>{var e={218:()=>{jQuery.ajax({type:"POST",url:"/wordpress/wp-admin/admin-ajax.php",data:{action:"get_posts_data"},success:function(e){console.log(e)},error:function(e,t,r){console.log("Error:",r,t,e)}})},8:()=>{document.addEventListener("DOMContentLoaded",(function(){function e(e){e.preventDefault(),e.target.classList.toggle("active")}document.querySelectorAll(".card-list__link").forEach((t=>{t.addEventListener("click",e)}))}))}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var a=t[o]={exports:{}};return e[o](a,a.exports,r),a.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";r(8),r(218)})()})();