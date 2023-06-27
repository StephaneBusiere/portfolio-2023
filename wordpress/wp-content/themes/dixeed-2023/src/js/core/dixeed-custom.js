import LocomotiveScroll from 'locomotive-scroll';

(function ($) {
if ($('#site-container').length) {
   const scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true
   });
   new ResizeObserver(() => scroll.update()).observe(document.querySelector("[data-scroll-container]"))
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


})(jQuery);
