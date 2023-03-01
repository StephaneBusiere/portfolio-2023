(function($) {
  function initializeBlock($block) {
     $block.slick({
        autoplay: true,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        // centerPadding: "10px",
        // draggable: true,
        infinite: true,
        pauseOnHover: false,
        // swipe: false,
        // touchMove: false,
        vertical: true,
        verticalScrolling: true,
        verticalSwiping : true,
        speed: 5000,
        autoplaySpeed: 5000,
        useTransform: true,
        cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
        adaptiveHeight: true,
        // responsive: [{
        //       breakpoint: 750,
        //       settings: {
        //          slidesToShow: 3,
        //       }
        //    },
        //    {
        //       breakpoint: 480,
        //       settings: {
        //          slidesToShow: 2,
        //       }
        //    }
        // ]
     });
   }
   if (window.acf) {
      // Initialize dynamic block preview (editor).
      window.acf.addAction("render_block_preview", function ($el, attributes) {
         var $block = $el;
         if ($block.length) {
            initializeBlock($block);
         }
      });
   } else {
      // Initialize each block on page load (front end).
      $(document).ready(function () {
         $(".vertical-carousel").each(function () {
            initializeBlock($(this));
         });
      });
   }
   // https://codepen.io/LinhNN/pen/VWEoqW
})(jQuery);