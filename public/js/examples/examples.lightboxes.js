(function($){'use strict';$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({type:'iframe',callbacks:{open:function(){$('html').addClass('lightbox-open');},close:function(){$('html').removeClass('lightbox-open');}}});$('.popup-with-zoom-anim').magnificPopup({type:'inline',callbacks:{open:function(){$('html').addClass('lightbox-open');},close:function(){$('html').removeClass('lightbox-open');}},mainClass:'my-mfp-zoom-in'});$('.popup-with-move-anim').magnificPopup({type:'inline',callbacks:{open:function(){$('html').addClass('lightbox-open');},close:function(){$('html').removeClass('lightbox-open');}},mainClass:'my-mfp-slide-bottom'});$('.popup-with-form').magnificPopup({type:'inline',callbacks:{open:function(){$('html').addClass('lightbox-open');},close:function(){$('html').removeClass('lightbox-open');}}});$('.simple-ajax-popup').magnificPopup({type:'ajax',callbacks:{open:function(){$('html').addClass('lightbox-open');},close:function(){$('html').removeClass('lightbox-open');}}});}).apply(this,[jQuery]);