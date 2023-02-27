import LocomotiveScroll from 'locomotive-scroll';
import gsap from "gsap";


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