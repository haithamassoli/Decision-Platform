"use strict";define("composer/resize",["taskbar"],function(t){var e={};var o=0;var i=.3;var n=.05;var a=992;var r=$("body");var u=$(window);var m=$('[component="navbar"]');var s=document.body;var d=m[0];function v(){return localStorage.getItem("composer:resizeRatio")||.5}function c(t){localStorage.setItem("composer:resizeRatio",Math.min(t,1))}function f(){var t;if(d){t=d.getBoundingClientRect()}else{t={bottom:0}}var e=Math.max(t.bottom,0);var o={top:0,left:0,right:window.innerWidth,bottom:window.innerHeight};o.width=o.right;o.height=o.bottom;o.boundedTop=e;o.boundedHeight=o.bottom-e;return o}function h(e,o){var n=f();var r=e[0];var u=window.getComputedStyle(r);var m=parseInt(u.getPropertyValue("min-height"),10);var d=Math.max(m/window.innerHeight,i);if(n.width>=a){const t=(n.height-n.boundedHeight)/n.height;o=Math.min(Math.max(o,d+t),1);var v=o*n.boundedHeight/n.height;r.style.top=((1-v)*100).toString()+"%";var c=r.getBoundingClientRect();s.style.paddingBottom=(c.bottom-c.top).toString()+"px"}else{e.removeAttr("style");s.style.paddingBottom=0}e.ratio=o;r.style.visibility="visible";t.updateActive(e.attr("data-uuid"))}var l=h;var g=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame;if(g){l=function(t,e){g(function(){h(t,e);setTimeout(function(){u.trigger("action:composer.resize");t.trigger("action:composer.resize")},0)})}}e.reposition=function(t){var e=v();if(e>=1-n){e=1;t.addClass("maximized")}l(t,e)};e.maximize=function(t,o){if(o){l(t,1)}else{e.reposition(t)}};e.handleResize=function(t){var e=0;var i=0;var a=0;var m=t.find(".resizer");var s=m[0];function d(t){var o=s.getBoundingClientRect();var n=(o.top+o.bottom)/2;e=(n-t.clientY)/2;i=t.clientY;u.on("mousemove",v);u.on("mouseup",h);r.on("touchmove",g)}function v(o){var i=o.clientY-e;var n=f();var a=(n.height-i)/n.boundedHeight;l(t,a)}function h(m){m.preventDefault();a=m.clientY;t.find("textarea").focus();u.off("mousemove",v);u.off("mouseup",h);r.off("touchmove",g);var s=a-e;var d=f();var p=(d.height-s)/d.boundedHeight;if(a-i===0&&t.hasClass("maximized")){t.removeClass("maximized");p=!o||o>=1-n?.5:o;l(t,p)}else if(a-i===0||p>=1-n){l(t,1);t.addClass("maximized");o=p}else{t.removeClass("maximized")}c(p)}function g(t){t.preventDefault();v(t.touches[0])}m.on("mousedown",function(t){t.preventDefault();d(t)}).on("touchstart",function(t){t.preventDefault();d(t.touches[0])}).on("touchend",h)};return e});
//# sourceMappingURL=resize.js.map