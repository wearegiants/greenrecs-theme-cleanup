/*! Formstone v0.4.3 [pagination.js] 2015-04-04 | MIT License | formstone.it */

!function(a,b,c){"use strict";function d(b){b.mq="(max-width:"+(b.maxWidth===1/0?"100000px":b.maxWidth)+")",b.mqGuid=n.base+"__"+q++;var c="";c+='<button type="button" class="'+[n.control,n.control_previous].join(" ")+'">'+b.labels.previous+"</button>",c+='<button type="button" class="'+[n.control,n.control_next].join(" ")+'">'+b.labels.next+"</button>",c+='<div class="'+n.position+'">',c+='<span class="'+n.current+'">0</span>',c+=" "+b.labels.count+" ",c+='<span class="'+n.total+'">0</span>',c+="</div>",c+='<select class="'+n.select+'" tab-index="-1"></select>',this.addClass(n.base).wrapInner('<div class="'+n.pages+'"></div>').prepend(c),b.$controls=this.find(m.control),b.$pages=this.find(m.pages),b.$items=b.$pages.children().addClass(n.page),b.$position=this.find(m.position),b.$select=this.find(m.select),b.index=-1,b.total=b.$items.length-1;var d=b.$items.index(b.$items.filter(m.active));b.$items.eq(0).addClass(n.first).after('<span class="'+n.ellipsis+'">&hellip;</span>').end().eq(b.total).addClass(n.last).before('<span class="'+n.ellipsis+'">&hellip;</span>'),b.$ellipsis=b.$pages.find(m.ellipsis),k(b),this.on(o.clickTouchStart,m.page,b,h).on(o.clickTouchStart,m.control,b,f).on(o.clickTouchStart,m.position,b,i).on(o.change,m.select,g),a.mediaquery("bind",b.mqGuid,b.mq,{enter:function(){b.$el.addClass(n.mobile)},leave:function(){b.$el.removeClass(n.mobile)}}),j(b,d)}function e(b){a.mediaquery("unbind",b.mqGuid,b.mq),b.$controls.remove(),b.$ellipsis.remove(),b.$select.remove(),b.$position.remove(),b.$items.removeClass([n.page,n.active,n.visible,n.first,n.last].join(" ")).unwrap(),this.removeClass(n.base).off(o.namespace)}function f(b){p.killEvent(b);var c=b.data,d=c.index+(a(b.currentTarget).hasClass(n.control_previous)?-1:1);d>=0&&c.$items.eq(d).trigger(o.raw.click)}function g(b){p.killEvent(b);var c=b.data,d=a(b.currentTarget),e=parseInt(d.val(),10);c.$items.eq(e).trigger(o.raw.click)}function h(b){p.killEvent(b);var c=b.data,d=c.$items.index(a(b.currentTarget));j(c,d)}function i(a){p.killEvent(a);var c=a.data;if(b.isMobile&&!b.isFirefoxMobile){var d=c.$select[0];if(window.document.createEvent){var e=window.document.createEvent("MouseEvents");e.initMouseEvent("mousedown",!1,!0,window,0,0,0,0,0,!1,!1,!1,!1,0,null),d.dispatchEvent(e)}else d.fireEvent&&d.fireEvent("onmousedown")}}function j(a,b){if(0>b&&(b=0),b>a.total&&(b=a.total),b!==a.index){a.index=b;var c=a.index-a.visible,d=a.index+(a.visible+1);0>c&&(c=0),d>a.total&&(d=a.total),a.$items.removeClass(n.visible).filter(m.active).removeClass(n.active).end().eq(a.index).addClass(n.active).end().slice(c,d).addClass(n.visible),a.$position.find(m.current).text(a.index+1).end().find(m.total).text(a.total+1),a.$select.val(a.index),a.$controls.removeClass(m.disabled),0===b&&a.$controls.filter(m.control_previous).addClass(n.disabled),b===a.total&&a.$controls.filter(m.control_next).addClass(n.disabled),a.$ellipsis.removeClass(n.visible),b>a.visible+1&&a.$ellipsis.eq(0).addClass(n.visible),b<a.total-a.visible-1&&a.$ellipsis.eq(1).addClass(n.visible),a.$el.trigger(o.update,[a.index])}}function k(a){for(var b="",c=0;c<=a.total;c++)b+='<option value="'+c+'"',c===a.index&&(b+='selected="selected"'),b+=">Page "+(c+1)+"</option>";a.$select.html(b)}var l=b.Plugin("pagination",{widget:!0,defaults:{ajax:!1,customClass:"",labels:{count:"of",next:"Next",previous:"Previous"},maxWidth:"740px",visible:2},classes:["pages","page","active","first","last","visible","ellipsis","control","control_previous","control_next","position","select","mobile","current","total"],events:{update:"update"},methods:{_construct:d,_destruct:e}}),m=l.classes,n=m.raw,o=l.events,p=l.functions,q=0}(jQuery,Formstone);