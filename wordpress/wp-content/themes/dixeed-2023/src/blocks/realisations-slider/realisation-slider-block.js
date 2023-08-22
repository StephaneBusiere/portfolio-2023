(function($) {
   function initializeBlock($block) {
      $block.slick({
         arrows: false,
         dots: false,
         slidesToShow: 4,
         slidesToScroll: 1,
         draggable: true,
         swipe: true,
         variableWidth: true,
         variableHeight: true,
         infinite: true,
         responsive: [{
            breakpoint: 768,
            settings: {
               centerMode:true,
               slidesToShow: 2,
               slidesToScroll: 2,
               dots: false,
               infinite: true,
               variableWidth: true,
               variableHeight: true
               
            },
         }, {
            breakpoint: 550,
            settings: {
               centerMode:true,
               slidesToShow: 1,
               slidesToScroll: 1,
               dots: false,
               infinite: true,
               variableWidth: true,
               variableHeight: true
               
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