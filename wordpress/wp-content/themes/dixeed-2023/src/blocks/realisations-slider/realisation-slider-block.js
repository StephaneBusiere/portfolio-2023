(function($) {
   function initializeBlock($block) {
      $block.slick({
         autoplay : false,
         autoplaySpeed: 8000,
         arrows: false,
         dots: false,
         slidesToShow: 4,
         draggable: true,
         infinite: true,
         swipe: true,
         // touchMove: false,
         useTransform: true,
         cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
         // fade: true,
         speed: 900,
         // adaptiveHeight: true,
         responsive: [{
            breakpoint: 768,
            settings: {
               slidesToShow: 1,
               vertical: false,
               verticalSwiping: false,
               adaptiveHeight: false,
            }
         }]
      });
    
   }
   // if (window.acf) {
   //    // Initialize dynamic block preview (editor).
   //    window.acf.addAction("render_block_preview", function($el, attributes) {
   //       var $block = $el;

   //       console.log($block);
   //       if ($block.length) {
   //          initializeBlock($block);
   //       }
   //    });
   // } else {
   // Initialize each block on page load (front end).
   $(document).ready(function() {
      $(".realisation-slider").each(function() {
         initializeBlock($(this));
      });
   });
   // }
})(jQuery);