

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
      // const list = document.querySelector(".team-block ul");
      const items = document.querySelectorAll(".team-block li");

      gsap.timeline({
         scrollTrigger: {
            trigger: ".team-block",
            start: "center center",
            // end: " bottom",

            // start: "bottom bottom ",
            // end: "top top",
            end: "+=" + window.innerHeight * 3,
            scrub: 1,
            pin: '.team-wrapper',
            // pin: true
         },
         // onEnter: () => {
         //    gsap.to(".targets", { ..., overwrite: true });
         // },
         // onLeave: () => {
         //    gsap.to(".targets", { ..., overwrite: true });
         // },
      })
         .from(".team-block li", {
            y: window.innerHeight,
            rotate: '0deg',
            opacity: 1,
            stagger: {
               amount: 0.25,
            }
         })
   });
})(jQuery);