import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
(function ($) {
if ($('#site-container').length) {
   const scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      getDirection: true,
   });
   new ResizeObserver(() => scroll.update()).observe(document.querySelector("[data-scroll-container]"));
   scroll.on('scroll', (instance) => {
      document.documentElement.setAttribute('data-direction', instance.direction)
  });
}

var top_menu      = $('#top-menu');
var menu_item     = $('.menu-item');
var menu_overlay  = $('.header-overlay');


top_menu.find(menu_item).each(function () {
   var menu_item_link = $(this).find('.menu-item-link > a');
   var menu_content = menu_item_link.text();

   menu_item_link.on({
      mouseenter: function () {
         menu_overlay.addClass('active');
         $('.menu-overlay-item').text(menu_content);
         $('.menu-overlay-item').addClass('active');
         menu_item_link.addClass('active');
         menu_item.addClass('active');
      },
      mouseleave: function () {
         menu_overlay.removeClass('active');
         menu_item_link.removeClass('active');
         $('.menu-overlay-item').removeClass('active');
         menu_item.removeClass('active');
      }
   });
})


//   $('.intro-1-title').each(function (index) {
//    var characters = $(this).text().split("");
//      var span = $(this);
//      span.empty();
//      $.each(characters, function (i, el) {
//        span.append('<span class="letter" data-scroll data-scroll-speed="'+ i +'" data-scroll-delay="'+ i +'">' + el + '</span>');
//      });
//  });


})(jQuery);
// gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray("[data-splitting]").forEach(el => {
//   gsap.from(el.querySelectorAll(".char"), { 
//     duration: .5, 
//     ease: "power2", 
//     opacity: 0, 
//     yPercent: 50, 
//     stagger: .05,
//     scrollTrigger: {
//       trigger: el,
//       start: "top 90%",
//       toggleActions: "play none none none"
//     }
//   }); 
// });

Splitting();