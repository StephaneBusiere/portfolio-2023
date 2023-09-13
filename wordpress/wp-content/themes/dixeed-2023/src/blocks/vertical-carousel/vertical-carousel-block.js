(function($) {
   // slick pauseOnHover bug with infinite autoplay 
   function initializeBlock($block) {
      $block.slick({
         autoplay: true,
         arrows: false,
         dots: false,
         slidesToShow: 3,
         draggable: false,
         infinite: true,
         pauseOnHover: false,
         vertical: true,
         verticalSwiping: true,
         speed: 5000,
         autoplaySpeed: 0,
         useTransform: true,
         cssEase: 'linear',
         adaptiveHeight: true,
         responsive: [
            {
               breakpoint: 800,
               settings: {
                  slidesToShow: 4,
                  vertical: false,
                  verticalSwiping: false,
                  adaptiveHeight: false,
                  speed: 3500 + Math.floor(Math.random() * 500) + 1,
               }
            },
            {
               breakpoint: 600,
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
 
      $(document).ready(function() {
         $(".vertical-carousel").each(function() {
            initializeBlock($(this));
         });
      });
   
})(jQuery);