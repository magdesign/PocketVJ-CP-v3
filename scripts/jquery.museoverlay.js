/*
 ADOBE CONFIDENTIAL
 ___________________

 Copyright 2011 Adobe Systems Incorporated
 All Rights Reserved.

 NOTICE:  All information contained herein is, and remains
 the property of Adobe Systems Incorporated and its suppliers,
 if any.  The intellectual and technical concepts contained
 herein are proprietary to Adobe Systems Incorporated and its
 suppliers and may be covered by U.S. and Foreign Patents,
 patents in process, and are protected by trade secret or copyright law.
 Dissemination of this information or reproduction of this material
 is strictly forbidden unless prior written permission is obtained
 from Adobe Systems Incorporated.
*/
(function(a){a.fn.museOverlay=function(b){var c=a.extend({autoOpen:!0,offsetLeft:0,offsetTop:0,$overlaySlice:a(),$overlayWedge:a(),duration:300,overlayExtraWidth:0,overlayExtraHeight:0,$elasticContent:a()},b);return this.each(function(){var d=a(this).data("museOverlay");if(d&&d[b]!==void 0)return d[b].apply(this,Array.prototype.slice.call(arguments,1));var f=a("<div></div>").appendTo("body").css({position:"absolute",top:0,left:0,zIndex:100001}).hide(),g=a("<div></div>").append(c.$overlaySlice).appendTo(f).css({position:"absolute",
top:0,left:0}),j=a(this).css({position:"absolute",left:0,top:0}).appendTo(f),h=a(window),l=h.data("scrollWrapper"),k,i,n=null,o=c.$elasticContent,p=o.length?parseInt(o.css("padding-left"))+parseInt(o.css("padding-right"))+parseInt(o.css("border-left-width"))+parseInt(o.css("border-right-width")):0,q=o.length?parseInt(o.css("padding-top"))+parseInt(o.css("padding-bottom"))+parseInt(o.css("border-top-width"))+parseInt(o.css("border-bottom-width")):0,m={isOpen:!1,open:function(){if(!m.isOpen)k=h.width(),
i=h.height(),m.positionContent(k,i),f.show(),g.bind("click",m.close),g.css({opacity:0}).stop(!0),j.css({opacity:0}).stop(!0),g.bind("click",m.close).animate({opacity:0.99},{queue:!1,duration:c.duration,complete:function(){g.css({opacity:""});j.animate({opacity:1},{queue:!1,duration:c.duration,complete:function(){j.css({opacity:""});m.applyPageDimensions()}})}}),a(document).bind("keydown",m.onKeyDown),m.doLayout(k,i),m.isOpen=!0,h.bind("resize",m.onWindowResize)},close:function(){g.unbind("click",
m.close);h.unbind("resize",m.onWindowResize);a(document).unbind("keydown",m.onKeyDown);if(c.onClose)c.onClose();g.css({opacity:0.99}).stop(!0);j.css({opacity:0.99}).stop(!0);j.animate({opacity:0},{queue:!1,duration:c.duration,complete:function(){g.animate({opacity:0},{queue:!1,duration:c.duration,complete:function(){f.hide();j.css({opacity:""});g.css({opacity:""})}})}});m.isOpen=!1},onKeyDown:function(a){a.keyCode===27&&m.close()},onWindowResize:function(){var a=h.width(),b=h.height();(k!=a||i!=b)&&
n==null&&(n=setTimeout(function(){m.doLayout(h.width(),h.height());m.positionContent(h.width(),h.height());n=null},10))},doLayout:function(a,b){f.css({width:0,height:0});c.$overlayWedge.css({width:0,height:0});var d=a-p,g=b-q;o.length&&o.hasClass("fullwidth")&&(o.width(d),c.resizeSlidesFn&&c.resizeSlidesFn(d,g));m.applyPageDimensions()},applyPageDimensions:function(){var b=a(document),d=b.width(),b=b.height(),g=document.documentElement||document.body;g.clientWidth!=g.offsetWidth&&(d=g.scrollWidth-
1);g.clientHeight!=g.offsetHeight&&b<g.scrollHeight&&(b=g.scrollHeight-1);f.css({width:d,height:b});c.$overlayWedge.css({width:d-c.overlayExtraWidth,height:b-c.overlayExtraHeight})},positionContent:function(a,b){var d=(l||h).scrollLeft()+Math.max(0,a/2+c.offsetLeft),g=(l||h).scrollTop()+Math.max(0,b/2+c.offsetTop);j.css({top:g,left:d});o.length&&o.hasClass("fullwidth")&&o.css("left",-d);d=a-p;g=b-q;o.length&&(o.width(d),o.hasClass("fullscreen")&&o.height(g),c.resizeSlidesFn&&c.resizeSlidesFn(d,g))}};
j.data("museOverlay",m);c.autoShow&&m.open()})}})(jQuery);
;(function(){if(!("undefined"==typeof Muse||"undefined"==typeof Muse.assets)){var a=function(a,b){for(var c=0,d=a.length;c<d;c++)if(a[c]==b)return c;return-1}(Muse.assets.required,"jquery.museoverlay.js");if(-1!=a){Muse.assets.required.splice(a,1);for(var a=document.getElementsByTagName("meta"),b=0,c=a.length;b<c;b++){var d=a[b];if("generator"==d.getAttribute("name")){"2014.3.2.295"!=d.getAttribute("content")&&Muse.assets.outOfDate.push("jquery.museoverlay.js");break}}}}})();
