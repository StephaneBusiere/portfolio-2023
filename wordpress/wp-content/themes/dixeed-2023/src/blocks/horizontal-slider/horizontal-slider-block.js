(function($) {
   function initializeBlock($block) {
      $block.slick({
         arrows: false,
         dots: false,
         slidesToShow: 1,
         draggable: false,
         infinite: true,
         swipe: true,
         // touchMove: false,
         useTransform: true,
         // cssEase: 'linear',
         adaptiveHeight: true,
         responsive: [{
               breakpoint: 768,
               settings: {
                  slidesToShow: 3,
                  vertical: false,
                  verticalSwiping: false,
                  adaptiveHeight: false,
               }
            }
         ]
      });
         $(".cta-arrow-prev").click(function(e) {
            e.preventDefault();
            $block.slick("slickPrev");
         });

         $(".cta-arrow-next").click(function(e) {
            e.preventDefault();
            $block.slick("slickNext");
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
         $(".horizontal-slider").each(function() {
            initializeBlock($(this));
         });
      });
   // }
})(jQuery);