(function($) {
   function initializeBlock($block) {
      $block.slick({
         autoplay : true,
         autoplaySpeed: 8000,
         arrows: false,
         dots: false,
         slidesToShow: 1,
         draggable: false,
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
               // slidesToShow: 3,
               // vertical: false,
               // verticalSwiping: false,
               // adaptiveHeight: false,
            }
         }]
      });
      $(".cta-arrow-prev").click(function(e) {
         e.preventDefault();
         $block.slick("slickPrev");
      });

      $(".cta-arrow-next").click(function(e) {
         e.preventDefault();
         $block.slick("slickNext");
      });

      // todo : update title index + graphics animation
      $block.on('beforeChange', function(event, slick, currentSlide, nextSlide){
          var CurrentSlideDom=$(slick.$slides.get(currentSlide));
          var NextSlideDom=$(slick.$slides.get(nextSlide));
      });
      $block.on('afterChange', function(event, slick, currentSlide, nextSlide) {
          var dataId = $('.slick-current').attr("data-slick-index");    
          console.log(dataId);
        //   console.log($('.pt-slick-carousel__slides .slick-active').attr('data-slick-index'));
        // console.log($('.pt-slick-carousel__slides .slick-active').attr('id'));

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