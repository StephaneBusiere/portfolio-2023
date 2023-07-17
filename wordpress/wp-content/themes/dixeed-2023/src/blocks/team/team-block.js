(function ($) {
   function initializeBlock() {
      if ($('.team-block').length) {
         // https://greensock.com/forums/topic/29015-setting-same-animation-for-multiple-elements-to-get-triggered-individually-gsap-scrolltrigger/
         const list = $(".team-block ul");
         const tm = gsap.timeline({
            scrollTrigger: {
               trigger: ".team-block",
               start: "center center",
               // end: "+=" + list.height() * 2,
               end: window.innerHeight * 4,
               scrub: 1,
               pin: '.team-wrapper',
               immediateRender: false,
               // markers: true,
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
               },
            })

         // .from(".team-block li:nth-child(1)", {
         //    y: window.innerHeight,
         //    rotate: '0deg',
         //    opacity: 1,
         //    // stagger: {
         //    //    amount: 0.25,
         //    // },
         // })
         // .from(".team-block li:nth-child(4)", {
         //    y: window.innerHeight,
         //    rotate: '0deg',
         //    opacity: 1,
         //    // stagger: {
         //    //    amount: 0.25,
         //    // },
         // })
      }
   }
   // Initialize each block on page load (front end).
   $(document).ready(function () {
      initializeBlock();
      // $(window).on("resize", function () {
      //    initializeBlock();
      // });
   });
})(jQuery);