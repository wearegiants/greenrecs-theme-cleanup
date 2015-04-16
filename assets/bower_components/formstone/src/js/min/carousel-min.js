!function($,e,t){"use strict";function i(e){L.iterate.call(j,l)}function n(){j=$(W.base)}function a(t){var i;t.maxWidth=1/0===t.maxWidth?"100000px":t.maxWidth,t.mq="(min-width:"+t.minWidth+") and (max-width:"+t.maxWidth+")",t.mqGuid=M.base+"__"+_++,e.support.transform||(t.useMargin=!0);var a="",s="";if(t.controls&&(a+='<div class="'+M.controls+'">',a+='<button type="button" class="'+[M.control,M.control_previous].join(" ")+'">'+t.labels.previous+"</button>",a+='<button type="button" class="'+[M.control,M.control_next].join(" ")+'">'+t.labels.next+"</button>",a+="</div>"),t.pagination&&(s+='<div class="'+M.pagination+'">',s+="</div>"),this.addClass([M.base,t.customClass].join(" ")).wrapInner('<div class="'+M.container+'"><div class="'+M.canister+'"></div></div>').append(a).wrapInner('<div class="'+M.viewport+'"></div>').append(s),t.$viewport=this.find(W.viewport).eq(0),t.$container=this.find(W.container).eq(0),t.$canister=this.find(W.canister).eq(0),t.$controls=this.find(W.controls).eq(0),t.$pagination=this.find(W.pagination).eq(0),t.$items=t.$canister.children().addClass(M.item),t.$controlItems=t.$controls.find(W.control),t.$paginationItems=t.$pagination.find(W.page),t.$images=t.$canister.find("img"),t.index=0,t.enabled=!1,t.leftPosition=0,t.totalImages=t.$images.length,t.autoTimer=null,"object"===$.type(t.show)){var l=t.show,c=[];for(i in l)l.hasOwnProperty(i)&&c.push(i);c.sort(L.sortAsc),t.show={};for(i in c)c.hasOwnProperty(i)&&(t.show[c[i]]={width:parseInt(c[i]),count:l[c[i]]})}if($.mediaquery("bind",t.mqGuid,t.mq,{enter:function(){r.call(t.$el,t)},leave:function(){o.call(t.$el,t)}}),t.totalImages>0)for(t.loadedImages=0,i=0;i<t.totalImages;i++){var d=t.$images.eq(i);d.one(y.load,t,p),(d[0].complete||d[0].height)&&d.trigger(y.load)}t.autoAdvance&&(t.autoTimer=L.startTimer(t.autoTimer,t.autoTime,function(){g(t)},!0)),n()}function s(e){L.clearTimer(e.autoTimer),o.call(this,e),$.mediaquery("unbind",e.mqGuid,e.mq),e.$items.removeClass([M.item,M.visible].join(" ")).unwrap().unwrap(),e.pagination&&e.$pagination.remove(),e.controls&&e.$controls.remove(),this.removeClass([M.base,M.enabled,M.animated,e.customClass].join(" ")),n()}function o(e){e.enabled&&(L.clearTimer(e.autoTimer),e.enabled=!1,this.removeClass([M.enabled,M.animated].join(" ")).off(y.namespace),e.$canister.touch("destroy").off(y.namespace).attr("style","").css(H,"none"),e.$items.css({width:"",height:""}),e.$controls.removeClass(M.visible),e.$pagination.removeClass(M.visible).html(""),e.useMargin?e.$canister.css({marginLeft:""}):e.$canister.css(X,""),e.index=0)}function r(e){e.enabled||(e.enabled=!0,this.addClass(M.enabled).on(y.clickTouchStart,W.control,e,f).on(y.clickTouchStart,W.page,e,h),e.$canister.touch({axis:"x",pan:!0,swipe:!0}).on(y.panStart,e,x).on(y.pan,e,w).on(y.panEnd,e,P).on(y.swipe,e,I).css(H,""),l.call(this,e))}function l(e){if(e.enabled){var t,i,n,a,s;if(e.count=e.$items.length,e.count<1)return;for(this.removeClass(M.animated),e.containerWidth=e.$container.outerWidth(!1),e.visible=C(e),e.perPage=e.paged?1:e.visible,e.itemMargin=parseInt(e.$items.eq(0).css("marginRight"))+parseInt(e.$items.eq(0).css("marginLeft")),e.itemWidth=(e.containerWidth-e.itemMargin*(e.visible-1))/e.visible,e.itemHeight=0,e.pageWidth=e.paged?e.itemWidth:e.containerWidth,e.pageCount=Math.ceil(e.count/e.perPage),e.$canister.css({width:(e.pageWidth+e.itemMargin)*e.pageCount}),e.$items.css({width:e.itemWidth,height:""}).removeClass(M.visible),e.pages=[],t=0,i=0;t<e.count;t+=e.perPage)n=e.$items.slice(t,t+e.perPage),n.length<e.perPage&&(n=0===t?e.$items:e.$items.slice(e.$items.length-e.perPage)),a=n.eq(0),s=a.outerHeight(),e.pages.push({left:a.position().left,height:s,$items:n}),s>e.itemHeight&&(e.itemHeight=s),i++;e.paged&&(e.pageCount-=e.count%e.visible),e.maxMove=-e.pages[e.pageCount-1].left,e.autoHeight&&e.$items.css({height:e.itemHeight});var o="";for(t=0;t<e.pageCount;t++)o+='<button type="button" class="'+M.page+'">'+(t+1)+"</button>";e.$pagination.html(o),e.pageCount<=1?(e.$controls.removeClass(M.visible),e.$pagination.removeClass(M.visible)):(e.$controls.addClass(M.visible),e.$pagination.addClass(M.visible)),e.$paginationItems=e.$el.find(W.page),v(e,e.index,!1),setTimeout(function(){e.$el.addClass(M.animated)},5)}}function c(e){e.enabled&&(e.$items=e.$canister.children().addClass(M.item),l.call(this,e))}function d(e,t){e.enabled&&(L.clearTimer(e.autoTimer),v(e,t-1))}function u(e){var t=e.index-1;e.infinite&&0>t&&(t=e.pageCount),v(e,t)}function m(e){var t=e.index+1;e.infinite&&t>=e.pageCount&&(t=0),v(e,t)}function p(e){var t=e.data;t.loadedImages++,t.loadedImages===t.totalImages&&l.call(t.$el,t)}function g(e){var t=e.index+1;t>=e.pageCount&&(t=0),v(e,t)}function f(e){L.killEvent(e);var t=e.data,i=t.index+($(e.currentTarget).hasClass(M.control_next)?1:-1);L.clearTimer(t.autoTimer),v(t,i)}function h(e){L.killEvent(e);var t=e.data,i=t.$paginationItems.index($(e.currentTarget));L.clearTimer(t.autoTimer),v(t,i)}function v(e,t,i){0>t&&(t=e.infinite?e.pageCount-1:0),t>=e.pageCount&&(t=e.infinite?0:e.pageCount-1),e.pages[t]&&(e.leftPosition=-e.pages[t].left),e.leftPosition<e.maxMove&&(e.leftPosition=e.maxMove),(e.leftPosition>0||isNaN(e.leftPosition))&&(e.leftPosition=0),e.useMargin?e.$canister.css({marginLeft:e.leftPosition}):i===!1?(e.$canister.css(H,"none").css(X,"translateX("+e.leftPosition+"px)"),setTimeout(function(){e.$canister.css(H,"")},5)):e.$canister.css(X,"translateX("+e.leftPosition+"px)"),e.$items.removeClass(M.visible),e.pages[t].$items.addClass(M.visible),i!==!1&&t!==e.index&&(e.infinite||t>-1&&t<e.pageCount)&&e.$el.trigger(y.update,[t]),e.index=t,b(e)}function b(e){e.$paginationItems.removeClass(M.active).eq(e.index).addClass(M.active),e.infinite?e.$controlItems.addClass(M.visible):e.pageCount<1?e.$controlItems.removeClass(M.visible):(e.$controlItems.addClass(M.visible),e.index<=0?e.$controlItems.filter(W.control_previous).removeClass(M.visible):(e.index>=e.pageCount||e.leftPosition===e.maxMove)&&e.$controlItems.filter(W.control_next).removeClass(M.visible))}function C(t){if("object"===$.type(t.show)){for(var i in t.show)if(t.show.hasOwnProperty(i)&&e.windowWidth>=t.show[i].width)return t.fill&&t.count<t.show[i].count?t.count:t.show[i].count;return 1}return t.fill&&t.count<t.show?t.count:t.show}function x(e){var t=e.data;if(t.useMargin)t.leftPosition=parseInt(t.$canister.css("marginLeft"));else{var i=t.$canister.css(X).split(",");t.leftPosition=parseInt(i[4])}t.$canister.css(H,"none"),w(e),t.isTouching=!0}function w(e){var t=e.data;t.touchLeft=t.leftPosition+e.deltaX,t.touchLeft>0&&(t.touchLeft=0),t.touchLeft<t.maxMove&&(t.touchLeft=t.maxMove),t.useMargin?t.$canister.css({marginLeft:t.touchLeft}):t.$canister.css(X,"translateX("+t.touchLeft+"px)")}function P(e){var t=e.data,i=e.deltaX>-50&&e.deltaX<50?t.index:t.index+("left"===e.directionX?1:-1);T(t,i)}function I(e){var t=e.data,i=t.index+("left"===e.directionX?1:-1);T(t,i)}function T(e,t){e.$canister.css(H,""),v(e,t),e.isTouching=!1}var q=e.Plugin("carousel",{widget:!0,defaults:{autoAdvance:!1,autoHeight:!1,autoTime:8e3,controls:!0,customClass:"",fill:!1,infinite:!1,labels:{next:"Next",previous:"Previous"},maxWidth:1/0,minWidth:"0px",paged:!1,pagination:!0,show:1,sized:!0,useMargin:!1},classes:["viewport","container","canister","item","controls","control","pagination","page","animated","enabled","visible","active","control_previous","control_next"],events:{update:"update",panStart:"panstart",pan:"pan",panEnd:"panend",swipe:"swipe"},methods:{_construct:a,_destruct:s,_resize:i,disable:o,enable:r,jump:d,previous:u,next:m,reset:c,resize:l}}),W=q.classes,M=W.raw,y=q.events,L=q.functions,_=0,j=[],X=e.transform,H=e.transition}(jQuery,Formstone);