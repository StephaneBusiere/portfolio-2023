import LocomotiveScroll from 'locomotive-scroll';


// if ($('#site-content').length) {
//    const scroll = new LocomotiveScroll({
//       el: document.querySelector('[data-scroll-container]'),
//       smooth: true
//    });
//    new ResizeObserver(() => scroll.update()).observe(document.querySelector("[data-scroll-container]"))
// }


window.addEventListener("load", () => {
   const scroll = new LocomotiveScroll({
     el: document.querySelector("[data-scroll-container]"),
     smooth: true,
     multiplier: 0.75,
     scrollFromAnywhere: true,
   });
 });
 setTimeout(() => {
   scroll.update();
 }, 5000);