import LocomotiveScroll from 'locomotive-scroll';
import gsap from "gsap";

// init locmotiv scroll
if ($('#site-container').length) {
   const scroll = new LocomotiveScroll({
      el: document.querySelector('#site-container'),
      smooth: true
   });
   // scroll.destroy();
   document.addEventListener("DOMContentLoaded", function(event) {
      scroll.update();
   });
}