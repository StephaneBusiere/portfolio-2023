

(function ($) {
   function initializeBlock($block) {

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
   $(document).ready(function () {
      // $(".horizontal-slider").each(function() {
      //    initializeBlock($(this));
      // });

      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: '.team-block',
            start: "top top",
            end: window.innerHeight * 6,
            pin: '.team-wrapper',
            anticipatePin: 1,
            // pinSpacing: false,
            invalidateOnRefresh: true,
            markers: true,
            scrub: true
         }
      });
      const items = document.querySelectorAll(".team-block li");
      tl.add('sceneOne')
         .call(function () {
            // document.querySelectorAll(".shape-1")[0].style.zIndex = "1";
         })
         .to(items, {
            y: - window.innerHeight,
            stagger: .025,
            // opacity: 1,
            // css: {
            //    width: 300,
            //    height: 300
            // },
            // duration: 3
         })
         .to(items, {
            opacity: 1,
            // stagger: .025,
            // css: {
            //    width: 300,
            //    height: 300
            // },
            // duration: 1
         }, 0)
   });
})(jQuery);