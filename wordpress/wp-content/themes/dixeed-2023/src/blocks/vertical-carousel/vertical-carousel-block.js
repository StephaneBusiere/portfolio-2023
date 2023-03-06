(function($) {
   // slick oauseOnHover does not work with infinite autoplay 
   // todo : made custom gsap slider : https://codepen.io/akapowl/pen/RwjGVWq
   function initializeBlock($block) {
      $block.slick({
         autoplay: true,
         arrows: false,
         dots: false,
         // slidesToShow: 3,
         draggable: false,
         infinite: true,
         pauseOnHover: false,
         // swipe: false,
         // touchMove: false,
         vertical: true,
         verticalSwiping: true,
         speed: 5000,
         autoplaySpeed: 0,
         useTransform: true,
         cssEase: 'linear',
         adaptiveHeight: true,
         responsive: [{
               breakpoint: 768,
               settings: {
                  slidesToShow: 3,
                  vertical: false,
                  verticalSwiping: false,
                  adaptiveHeight: false,
                  speed: 3500 + Math.floor(Math.random() * 500) + 1,
               }
            }
         ]
      });
   }
   if (window.acf) {
      // Initialize dynamic block preview (editor).
      window.acf.addAction("render_block_preview", function($el, attributes) {
         var $block = $el;
         if ($block.length) {
            initializeBlock($block);
         }
      });
   } else {
      // Initialize each block on page load (front end).
      $(document).ready(function() {
         $(".vertical-carousel").each(function() {
            initializeBlock($(this));
         });
      });
   }
})(jQuery);