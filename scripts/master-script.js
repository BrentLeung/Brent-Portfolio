// Navigation menu 
jQuery(document).ready(function(a){if(1170<a(window).width()){var c=a(".cd-header").height();a(window).on("scroll",{previousTop:0},function(){var b=a(window).scrollTop();b<this.previousTop?0<b&&a(".cd-header").hasClass("is-fixed")?a(".cd-header").addClass("is-visible"):a(".cd-header").removeClass("is-visible is-fixed"):(a(".cd-header").removeClass("is-visible"),b>c&&!a(".cd-header").hasClass("is-fixed")&&a(".cd-header").addClass("is-fixed"));this.previousTop=b})}a(".cd-primary-nav li").on("click",
function(){a(".cd-menu-icon").removeClass("is-clicked");a(".cd-header").removeClass("menu-is-open");a(".cd-primary-nav").removeClass("is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){a("body").removeClass("overflow-hidden")})});a(".cd-primary-nav-trigger").on("click",function(){a(".cd-menu-icon").toggleClass("is-clicked");a(".cd-header").toggleClass("menu-is-open");if(a(".cd-primary-nav").hasClass("is-visible"))a(".cd-primary-nav").removeClass("is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
function(){a("body").removeClass("overflow-hidden")});else a(".cd-primary-nav").addClass("is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){a("body").addClass("overflow-hidden")})})});
//Match div height
(function(c){var n=-1,f=-1,g=function(a){return parseFloat(a)||0},r=function(a){var b=null,d=[];c(a).each(function(){var a=c(this),k=a.offset().top-g(a.css("margin-top")),l=0<d.length?d[d.length-1]:null;null===l?d.push(a):1>=Math.floor(Math.abs(b-k))?d[d.length-1]=l.add(a):d.push(a);b=k});return d},p=function(a){var b={byRow:!0,property:"height",target:null,remove:!1};if("object"===typeof a)return c.extend(b,a);"boolean"===typeof a?b.byRow=a:"remove"===a&&(b.remove=!0);return b},b=c.fn.matchHeight=
function(a){a=p(a);if(a.remove){var e=this;this.css(a.property,"");c.each(b._groups,function(a,b){b.elements=b.elements.not(e)});return this}if(1>=this.length&&!a.target)return this;b._groups.push({elements:this,options:a});b._apply(this,a);return this};b._groups=[];b._throttle=80;b._maintainScroll=!1;b._beforeUpdate=null;b._afterUpdate=null;b._apply=function(a,e){var d=p(e),h=c(a),k=[h],l=c(window).scrollTop(),f=c("html").outerHeight(!0),m=h.parents().filter(":hidden");m.each(function(){var a=c(this);
a.data("style-cache",a.attr("style"))});m.css("display","block");d.byRow&&!d.target&&(h.each(function(){var a=c(this),b="inline-block"===a.css("display")?"inline-block":"block";a.data("style-cache",a.attr("style"));a.css({display:b,"padding-top":"0","padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px"})}),k=r(h),h.each(function(){var a=c(this);a.attr("style",a.data("style-cache")||"")}));c.each(k,function(a,b){var e=c(b),f=0;if(d.target)f=
d.target.outerHeight(!1);else{if(d.byRow&&1>=e.length){e.css(d.property,"");return}e.each(function(){var a=c(this),b={display:"inline-block"===a.css("display")?"inline-block":"block"};b[d.property]="";a.css(b);a.outerHeight(!1)>f&&(f=a.outerHeight(!1));a.css("display","")})}e.each(function(){var a=c(this),b=0;d.target&&a.is(d.target)||("border-box"!==a.css("box-sizing")&&(b+=g(a.css("border-top-width"))+g(a.css("border-bottom-width")),b+=g(a.css("padding-top"))+g(a.css("padding-bottom"))),a.css(d.property,
f-b))})});m.each(function(){var a=c(this);a.attr("style",a.data("style-cache")||null)});b._maintainScroll&&c(window).scrollTop(l/f*c("html").outerHeight(!0));return this};b._applyDataApi=function(){var a={};c("[data-match-height], [data-mh]").each(function(){var b=c(this),d=b.attr("data-mh")||b.attr("data-match-height");a[d]=d in a?a[d].add(b):b});c.each(a,function(){this.matchHeight(!0)})};var q=function(a){b._beforeUpdate&&b._beforeUpdate(a,b._groups);c.each(b._groups,function(){b._apply(this.elements,
this.options)});b._afterUpdate&&b._afterUpdate(a,b._groups)};b._update=function(a,e){if(e&&"resize"===e.type){var d=c(window).width();if(d===n)return;n=d}a?-1===f&&(f=setTimeout(function(){q(e);f=-1},b._throttle)):q(e)};c(b._applyDataApi);c(window).bind("load",function(a){b._update(!1,a)});c(window).bind("resize orientationchange",function(a){b._update(!0,a)})})(jQuery);
//Back to top arrow
jQuery(document).ready(function(o){var l=2e3,s=1200,c=900,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});
//Individual-item animations
(function(a){function c(){d=!1;for(var b=0;b<e.length;b++){var f=a(e[b]).filter(function(){return a(this).is(":appeared")});f.trigger("appear",[f]);if(l){var c=l.not(f);c.trigger("disappear",[c])}l=f}}var e=[],b=!1,d=!1,m={interval:250,force_process:!1},g=a(window),l;a.expr[":"].appeared=function(b){b=a(b);if(!b.is(":visible"))return!1;var d=g.scrollLeft(),c=g.scrollTop(),e=b.offset(),m=e.left,e=e.top;return e+b.height()>=c&&e-(b.data("appear-top-offset")||0)<=c+g.height()&&m+b.width()>=d&&m-(b.data("appear-left-offset")||
0)<=d+g.width()?!0:!1};a.fn.extend({appear:function(h){var f=a.extend({},m,h||{});h=this.selector||this;if(!b){var g=function(){d||(d=!0,setTimeout(c,f.interval))};a(window).scroll(g).resize(g);b=!0}f.force_process&&setTimeout(c,f.interval);e.push(h);return a(h)}});a.extend({force_appear:function(){return b?(c(),!0):!1}})})(jQuery);
(function(a){function c(d){function c(){d?h.removeData(d):k&&delete e[k]}function g(){f.id=setTimeout(function(){f.fn()},q)}var l=this,h,f={},t=d?a.fn:a,n=arguments,r=4,k=n[1],q=n[2],p=n[3];"string"!==typeof k&&(r--,k=d=0,q=n[1],p=n[2]);d?(h=l.eq(0),h.data(d,f=h.data(d)||{})):k&&(f=e[k]||(e[k]={}));f.id&&clearTimeout(f.id);delete f.id;if(p)f.fn=function(a){"string"===typeof p&&(p=t[p]);!0!==p.apply(l,b.call(n,r))||a?c():g()},g();else{if(f.fn)return fined,whatever,void 0===q?c():f.fn(!1===q),!0;c()}}
"$:nomunge";var e={},b=Array.prototype.slice;a.doTimeout=function(){return c.apply(window,[0].concat(b.call(arguments)))};a.fn.doTimeout=function(){var a=b.call(arguments),e=c.apply(this,["doTimeout"+a[0]].concat(a));return"number"===typeof a[0]||"number"===typeof a[1]?this:e}})(jQuery);$(".animatedParent").appear();
$(".animatedClick").click(function(){var a=$(this).attr("data-target");if(void 0!=$(this).attr("data-sequence")){var c=$("."+a+":first").attr("data-id"),e=$("."+a+":last").attr("data-id"),b=c;$("."+a+"[data-id="+b+"]").hasClass("go")?($("."+a+"[data-id="+b+"]").addClass("goAway"),$("."+a+"[data-id="+b+"]").removeClass("go")):($("."+a+"[data-id="+b+"]").addClass("go"),$("."+a+"[data-id="+b+"]").removeClass("goAway"));b++;delay=Number($(this).attr("data-sequence"));$.doTimeout(delay,function(){console.log(e);
$("."+a+"[data-id="+b+"]").hasClass("go")?($("."+a+"[data-id="+b+"]").addClass("goAway"),$("."+a+"[data-id="+b+"]").removeClass("go")):($("."+a+"[data-id="+b+"]").addClass("go"),$("."+a+"[data-id="+b+"]").removeClass("goAway"));++b;if(b<=e)return!0})}else $("."+a).hasClass("go")?($("."+a).addClass("goAway"),$("."+a).removeClass("go")):($("."+a).addClass("go"),$("."+a).removeClass("goAway"))});
$(document.body).on("appear",".animatedParent",function(a,c){var e=$(this).find(".animated"),b=$(this);if(void 0!=b.attr("data-sequence")){var d=$(this).find(".animated:first").attr("data-id"),m=$(this).find(".animated:last").attr("data-id");$(b).find(".animated[data-id="+d+"]").addClass("go");d++;delay=Number(b.attr("data-sequence"));$.doTimeout(delay,function(){$(b).find(".animated[data-id="+d+"]").addClass("go");++d;if(d<=m)return!0})}else e.addClass("go")});
$(document.body).on("disappear",".animatedParent",function(a,c){$(this).hasClass("animateOnce")||$(this).find(".animated").removeClass("go")});$(window).load(function(){$.force_appear()});
//Full-page animations
!function(a){"use strict";var b="animsition",c={init:function(d){d=a.extend({inClass:"fade-in",outClass:"fade-out",inDuration:1000,outDuration:800,linkElement:".animsition-link",loading:!0,loadingParentElement:"body",loadingClass:"animsition-loading",unSupportCss:["animation-duration","-webkit-animation-duration","-o-animation-duration"],overlay:!1,overlayClass:"animsition-overlay-slide",overlayParentElement:"body"},d);var e=c.supportCheck.call(this,d);if(!e)return"console"in window||(window.console={},window.console.log=function(a){return a}),console.log("Animsition does not support this browser."),c.destroy.call(this);var f=c.optionCheck.call(this,d);return f&&c.addOverlay.call(this,d),d.loading&&c.addLoading.call(this,d),this.each(function(){var e=this,f=a(this),g=a(window),h=f.data(b);h||(d=a.extend({},d),f.data(b,{options:d}),g.on("load."+b+" pageshow."+b,function(){c.pageIn.call(e)}),g.on("unload."+b,function(){}),a(d.linkElement).on("click."+b,function(b){b.preventDefault();var d=a(this),f=d.attr("href");2===b.which||b.metaKey||b.shiftKey||-1!==navigator.platform.toUpperCase().indexOf("WIN")&&b.ctrlKey?window.open(f,"_blank"):c.pageOut.call(e,d,f)}))})},addOverlay:function(b){a(b.overlayParentElement).prepend('<div class="'+b.overlayClass+'"></div>')},addLoading:function(b){a(b.loadingParentElement).append('<div class="'+b.loadingClass+'"></div>')},removeLoading:function(){var c=a(this),d=c.data(b).options,e=a(d.loadingParentElement).children("."+d.loadingClass);e.fadeOut().remove()},supportCheck:function(b){var c=a(this),d=b.unSupportCss,e=d.length,f=!1;0===e&&(f=!0);for(var g=0;e>g;g++)if("string"==typeof c.css(d[g])){f=!0;break}return f},optionCheck:function(b){var c,d=a(this);return c=b.overlay||d.data("animsition-overlay")?!0:!1},animationCheck:function(c,d,e){var f=a(this),g=f.data(b).options,h=typeof c,i=!d&&"number"===h,j=d&&"string"===h&&c.length>0;return i||j?c=c:d&&e?c=g.inClass:!d&&e?c=g.inDuration:d&&!e?c=g.outClass:d||e||(c=g.outDuration),c},pageIn:function(){var d=this,e=a(this),f=e.data(b).options,g=e.data("animsition-in-duration"),h=e.data("animsition-in"),i=c.animationCheck.call(d,g,!1,!0),j=c.animationCheck.call(d,h,!0,!0),k=c.optionCheck.call(d,f);f.loading&&c.removeLoading.call(d),k?c.pageInOverlay.call(d,j,i):c.pageInBasic.call(d,j,i)},pageInBasic:function(b,c){var d=a(this);d.trigger("animsition.start").css({"animation-duration":c/1e3+"s"}).addClass(b).animateCallback(function(){d.removeClass(b).css({opacity:1}).trigger("animsition.end")})},pageInOverlay:function(c,d){var e=a(this),f=e.data(b).options;e.trigger("animsition.start").css({opacity:1}),a(f.overlayParentElement).children("."+f.overlayClass).css({"animation-duration":d/1e3+"s"}).addClass(c).animateCallback(function(){e.trigger("animsition.end")})},pageOut:function(d,e){var f=this,g=a(this),h=g.data(b).options,i=d.data("animsition-out"),j=g.data("animsition-out"),k=d.data("animsition-out-duration"),l=g.data("animsition-out-duration"),m=i?i:j,n=k?k:l,o=c.animationCheck.call(f,m,!0,!1),p=c.animationCheck.call(f,n,!1,!1),q=c.optionCheck.call(f,h);q?c.pageOutOverlay.call(f,o,p,e):c.pageOutBasic.call(f,o,p,e)},pageOutBasic:function(b,c,d){var e=a(this);e.css({"animation-duration":c/1e3+"s"}).addClass(b).animateCallback(function(){location.href=d})},pageOutOverlay:function(d,e,f){var g=this,h=a(this),i=h.data(b).options,j=h.data("animsition-in"),k=c.animationCheck.call(g,j,!0,!0);a(i.overlayParentElement).children("."+i.overlayClass).css({"animation-duration":e/1e3+"s"}).removeClass(k).addClass(d).animateCallback(function(){location.href=f})},destroy:function(){return this.each(function(){var c=a(this);a(window).unbind("."+b),c.css({opacity:1}).removeData(b)})}};a.fn.animateCallback=function(b){var c="animationend webkitAnimationEnd mozAnimationEnd oAnimationEnd MSAnimationEnd";return this.each(function(){a(this).bind(c,function(){return a(this).unbind(c),b.call(this)})})},a.fn.animsition=function(d){return c[d]?c[d].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof d&&d?void a.error("Method "+d+" does not exist on jQuery."+b):c.init.apply(this,arguments)}}(jQuery);
//Custom JS Settings
    $(document).ready(function(){$(".divHeight").matchHeight()}),$(".animsition").animsition({inClass:"fade-in",outClass:"fade-out",inDuration:100,outDuration:500,linkElement:".animsition-link",loading:!0,loadingParentElement:"body",loadingClass:"animsition-loading",unSupportCss:["animation-duration","-webkit-animation-duration","-o-animation-duration"],overlay:!1,overlayClass:"animsition-overlay-slide",overlayParentElement:"body"});
