

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



      // https://greensock.com/forums/topic/29346-animated-text-elements-inside-pinned-section-scroll-trigger/

      // let items = gsap.utils.toArray('.team-block li')
      // items.forEach((item, index) => {
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
            // onEnter: () => {
            //    gsap.to(items, {
            //       opacity: 1,
            //       duration: 1,
            //       overwrite: true
            //    });
            // },
            // css: {
            //    width: 300,
            //    height: 300
            // },
            // duration: 3
         })
      // .to('.team-block li span', {
      //    opacity: 1,
      //    duration: 0.5,
      // }, 0)
      // });
   });
})(jQuery);