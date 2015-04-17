!function($,e,i){"use strict";function o(e){T.iterate.call(C,f)}function t(){C=$(b.base)}function a(e){e.guid="__"+I++,e.youTubeGuid=0,e.eventGuid=P.namespace+e.guid,e.rawGuid=w.base+e.guid,e.classGuid="."+e.rawGuid,e.$container=$('<div class="'+w.container+'"></div>').appendTo(this),this.addClass([w.base,e.customClass].join(" "));var i=e.source;e.source=null,n(e,i,!0),t()}function r(e){e.$container.remove(),this.removeClass([w.base,e.customClass].join(" ")).off(P.namespace),t()}function n(e,i,o){if(i!==e.source){if(e.source=i,e.responsive=!1,e.isYouTube=!1,"object"===$.type(i)&&"string"===$.type(i.video)){var t=i.video.match(/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i);t&&t.length>=1&&(e.isYouTube=!0,e.videoId=t[1])}if(e.isYouTube)e.playing=!1,e.playerReady=!1,e.posterLoaded=!1,c(e,i,o);else if("object"===$.type(i)&&i.hasOwnProperty("poster"))u(e,i,o);else{var a=i;if("object"===$.type(i)){var r={},n=[],l;for(l in i)i.hasOwnProperty(l)&&n.push(l);n.sort(T.sortAsc);for(l in n)n.hasOwnProperty(l)&&(r[n[l]]={width:parseInt(n[l]),url:i[n[l]]});e.responsive=!0,e.sources=r,a=s(e)}d(e,a,!1,o)}}else e.$el.trigger(P.loaded)}function s(i){if(i.responsive)for(var o in i.sources)if(i.sources.hasOwnProperty(o)&&e.windowWidth>=i.sources[o].width)return i.sources[o].url;return i.source}function d(e,i,o,t){var a=[w.media,w.image,t!==!0?w.animated:""].join(" "),r=$('<div class="'+a+'"><img></div>'),n=r.find("img"),s=i;n.one(P.load,function(){j&&r.addClass(w["native"]).css({backgroundImage:"url('"+s+"')"}),r.transition({property:"opacity"},function(){o||l(e)}).css({opacity:1}),v(e),(!o||t)&&e.$el.trigger(P.loaded)}).attr("src",s),e.responsive&&r.addClass(w.responsive),e.$container.append(r),(n[0].complete||4===n[0].readyState)&&n.trigger(P.load),e.currentSource=s}function u(i,o,t){if(i.source&&i.source.poster&&(d(i,i.source.poster,!0,!0),t=!1),!e.isMobile){var a=[w.media,w.video,t!==!0?w.animated:""].join(" "),r='<div class="'+a+'">';r+="<video",i.loop&&(r+=" loop"),i.mute&&(r+=" muted"),r+=">",i.source.webm&&(r+='<source src="'+i.source.webm+'" type="video/webm" />'),i.source.mp4&&(r+='<source src="'+i.source.mp4+'" type="video/mp4" />'),i.source.ogg&&(r+='<source src="'+i.source.ogg+'" type="video/ogg" />'),r+="</video>",r+="</div>";var n=$(r),s=n.find("video");s.one(P.loadedMetaData,function(e){n.transition({property:"opacity"},function(){l(i)}).css({opacity:1}),v(i),i.$el.trigger(P.loaded),i.autoPlay&&this.play()}),i.$container.append(n)}}function c(i,o,t){if(!i.videoId){var a=o.match(/^.*(?:youtu.be\/|v\/|e\/|u\/\w+\/|embed\/|v=)([^#\&\?]*).*/);i.videoId=a[1]}if(i.posterLoaded||(i.source.poster||(i.source.poster="http://img.youtube.com/vi/"+i.videoId+"/0.jpg"),i.posterLoaded=!0,d(i,i.source.poster,!0,t),t=!1),!e.isMobile)if($("script[src*='youtube.com/iframe_api']").length||$("head").append('<script src="//www.youtube.com/iframe_api"></script>'),R){var r=i.guid+"_"+i.youTubeGuid++,n=[w.media,w.embed,t!==!0?w.animated:""].join(" "),s='<div class="'+n+'">';s+='<div id="'+r+'"></div>',s+="</div>";var u=$(s);i.$container.append(u),i.player&&(i.oldPlayer=i.player,i.player=null),i.player=new Y.YT.Player(r,{videoId:i.videoId,playerVars:{controls:0,rel:0,showinfo:0,wmode:"transparent",enablejsapi:1,version:3,playerapiid:r,loop:i.loop?1:0,autoplay:1,origin:Y.location.protocol+"//"+Y.location.host},events:{onReady:function(e){i.playerReady=!0,i.mute&&i.player.mute(),i.autoPlay&&i.player.playVideo()},onStateChange:function(e){i.playing||e.data!==Y.YT.PlayerState.PLAYING?i.loop&&i.playing&&e.data===Y.YT.PlayerState.ENDED&&i.player.playVideo():(i.playing=!0,i.autoPlay||i.player.pauseVideo(),u.transition({property:"opacity"},function(){l(i)}).css({opacity:1}),v(i),i.$el.trigger(P.loaded)),i.$el.find(b.embed).addClass(w.ready)},onPlaybackQualityChange:function(e){},onPlaybackRateChange:function(e){},onError:function(e){},onApiChange:function(e){}}}),v(i)}else _.push({data:i,source:o})}function l(e){var i=e.$container.find(b.media);i.length>=1&&(i.not(":last").remove(),e.oldPlayer=null)}function p(e){var i=e.$container.find(b.media);i.length>=1&&i.transition({property:"opacity"},function(){i.remove(),delete e.source}).css({opacity:0})}function y(e){if(e.isYouTube&&e.playerReady)e.player.pauseVideo();else{var i=e.$container.find("video");i.length&&i[0].pause()}}function h(e){if(e.isYouTube&&e.playerReady)e.player.playVideo();else{var i=e.$container.find("video");i.length&&i[0].play()}}function f(e){if(e.responsive){var i=s(e);i!==e.currentSource?d(e,i,!1,!0):v(e)}else v(e)}function v(e){for(var i=e.$container.find(b.media),o=0,t=i.length;t>o;o++){var a=i.eq(o),r=e.isYouTube?"iframe":a.find("video").length?"video":"img",n=a.find(r);if(n.length&&("img"!==r||!j)){var s=e.$el.outerWidth(),d=e.$el.outerHeight(),u=s/d,c=g(e,n);e.width=c.width,e.height=c.height,e.left=0,e.top=0;var l=e.isYouTube?e.embedRatio:e.width/e.height;e.height=d,e.width=e.height*l,e.width<s&&(e.width=s,e.height=e.width/l),e.left=-(e.width-s)/2,e.top=-(e.height-d)/2,a.css({height:e.height,width:e.width,left:e.left,top:e.top})}}}function g(e,i){if(e.isYouTube)return{height:500,width:500/e.embedRatio};if(i.is("img")){var o=i[0];if("undefined"!==$.type(o.naturalHeight))return{height:o.naturalHeight,width:o.naturalWidth};var t=new Image;return t.src=o.src,{height:t.height,width:t.width}}return{height:i[0].videoHeight,width:i[0].videoWidth};return!1}var m=e.Plugin("background",{widget:!0,defaults:{autoPlay:!0,customClass:"",embedRatio:1.777777,loop:!0,mute:!0,source:null},classes:["container","media","animated","responsive","native","fixed","ready"],events:{loaded:"loaded",ready:"ready",loadedMetaData:"loadedmetadata"},methods:{_construct:a,_destruct:r,_resize:o,play:h,pause:y,resize:v,load:n,unload:p}}),b=m.classes,w=b.raw,P=m.events,T=m.functions,Y=e.window,C=[],I=0,j="backgroundSize"in e.document.documentElement.style,R=!1,_=[];Y.onYouTubeIframeAPIReady=function(){R=!0;for(var e in _)_.hasOwnProperty(e)&&c(_[e].data,_[e].source);_=[]}}(jQuery,Formstone);