import LocomotiveScroll from "locomotive-scroll";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";

(function ($) {
   var windowWidth = $(window).width();
   if(windowWidth > 800) {
      if ($("#site-container").length) {
         const locoScroll = new LocomotiveScroll({
            el: document.querySelector("[data-scroll-container]"),
            smooth: true,
            getDirection: true,
            smoothMobile: true,
         });
         locoScroll.on("scroll", (instance) => {
            document.documentElement.setAttribute("data-direction", instance.direction);
         });
         const wrapElements = (elems, wrapType, wrapClass) => {
            elems.forEach((char) => {
               const wrapEl = document.createElement(wrapType);
               wrapEl.classList = wrapClass;
               char.parentNode.appendChild(wrapEl);
               wrapEl.appendChild(char);
            });
         };

         Splitting();

         const fx1Titles = [...document.querySelectorAll(".intro-1-title[data-splitting][data-effect1]")];
         const fx2Titles = [...document.querySelectorAll(".block-text-container[data-splitting][data-effect2]")];
         const fx3Titles = [...document.querySelectorAll(".maison-title-container[data-splitting][data-effect3]")];
         const fx4Titles = [...document.querySelectorAll(".maison-sub-title-container[data-splitting][data-effect4]")];
         const fx5Titles = [...document.querySelectorAll(".realisation-title[data-splitting][data-effect5]")];
         const fx6Titles = [...document.querySelectorAll(".rich-text-container[data-splitting][data-effect6]")];
         const fx7Titles = [...document.querySelectorAll(".block-text-container-circle[data-splitting][data-effect7]")];
         const fx8Titles = [...document.querySelectorAll(".maison-description-text[data-splitting][data-effect8]")];
         const line1      = [...document.querySelectorAll('.line-text-svg-1')];
         const line2      = [...document.querySelectorAll('.line-text-svg-2')];
      
         locoScroll.on("scroll", ScrollTrigger.update);
         ScrollTrigger.scrollerProxy("[data-scroll-container]", {
            scrollTop(value) {
               return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
            },
            getBoundingClientRect() {
               return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
            },
            pinType: document.querySelector("[data-scroll-container]").style.transform ? "transform" : "fixed",
         });

         


         
         
         const scroll = () => {

         gsap.fromTo(
            line1,
            {
               "will-change": "opacity, transform",
               xPercent: 300,
            },
            {
               ease: "power4",
               xPercent: 0,
               scrollTrigger: {
                  trigger: line1,
                  start: 'top +=70%',
                  end:'+=500',
                  scrub:0.2,
                  scroller: "[data-scroll-container]",
               },
            }
         );

         gsap.fromTo(
            line2,
            {
               "will-change": "opacity, transform",
               xPercent: -300,
            },
            {
               ease: "power4",
               xPercent: 0,
               scrollTrigger: {
                  trigger: line2,
                  start: 'top +=70%',
                  end:'+=500',
                  scrub:0.2,
                  scroller: "[data-scroll-container]",
               },
            }
         );

         $(document).ready(function() {
            $('.intro-1-title').addClass('active');
            fx1Titles.forEach((title) => {
            const chars = title.querySelectorAll(".char");

            gsap.fromTo(
               chars,
               {
                  "will-change": "opacity, transform",
                  opacity: 0,
                  xPercent: () => gsap.utils.random(-200, 200),
                  yPercent: () => gsap.utils.random(-150, 150),
               },
               {
                  duration: 1.2,
                  delay:1,
                  ease: "power3",
                  opacity: 1,
                  xPercent: 0,
                  yPercent: 0,
                  stagger: { each: 0.05, grid: "auto", from: "random" },
               }
            );
         });
         });
            fx2Titles.forEach((title) => {
               const chars = title.querySelectorAll(".char");

               gsap.fromTo(
                  chars,
                  {
                     "will-change": "opacity, transform",
                     opacity: 0,
                     scale: 0.6,
                     rotationZ: () => gsap.utils.random(-20, 20),
                  },
                  {
                     ease: "power4",
                     opacity: 1,
                     scale: 1,
                     rotation: 0,
                     stagger: 0.4,
                     scrollTrigger: {
                        trigger: title,
                        start: "top +=70%",
                        end: "+=60%",
                        scrub: true,
                        scroller: "[data-scroll-container]",
                     },
                  }
               );
            });

            fx6Titles.forEach((title) => {
               const chars = title.querySelectorAll(".char");

               gsap.fromTo(
                  chars,
                  {
                     "will-change": "opacity, transform",
                     opacity: 0,
                     scale: 0.6,
                     rotationZ: () => gsap.utils.random(-20, 20),
                  },
                  {
                     ease: "power4",
                     opacity: 1,
                     scale: 1,
                     rotation: 0,
                     stagger: 0.4,
                     scrollTrigger: {
                        trigger: title,
                        start: "top +=70%",
                        end: "+=60%",
                        scrub: 1,
                        scroller: "[data-scroll-container]",
                     },
                  }
               );
            });

            fx3Titles.forEach((title) => {
               const words = title.querySelectorAll(".word");

               for (const word of words) {
                  const chars = word.querySelectorAll(".char");

                  chars.forEach((char) => gsap.set(char.parentNode, { perspective: 2000 }));

                  gsap.fromTo(
                     chars,
                     {
                        "will-change": "opacity, transform",
                        opacity: 0,
                        rotationX: -90,
                        yPercent: 50,
                     },
                     {
                        ease: "power1.inOut",
                        opacity: 1,
                        rotationX: 0,
                        yPercent: 0,
                        stagger: {
                           each: 0.03,
                           from: 0,
                        },
                        scrollTrigger: {
                           trigger: word,
                           start: "center bottom+=25%",
                           end: "bottom center-=30%",
                           scrub: 0.9,
                           scroller: "[data-scroll-container]",
                        },
                     }
                  );
               }
            });
            $(document).ready(function() {

            fx7Titles.forEach((title) => {
            $('.block-text-container-circle').addClass('active');
               const words = title.querySelectorAll(".word");

               for (const word of words) {
                  const chars = word.querySelectorAll(".char");

                  chars.forEach((char) => gsap.set(char.parentNode, { perspective: 2000 }));

                  gsap.fromTo(
                     chars,
                     {
                        "will-change": "opacity, transform",
                        opacity: 0,
                        rotationX: -90,
                        yPercent: 50,
                     },
                     {
                        ease: "power1.inOut",
                        opacity: 1,
                        rotationX: 0,
                        yPercent: 0,
                        delay:2,
                        duration:2,
                        stagger: {
                           each: 0.03,
                           from: 0,
                        },
                     
                     }
                  );
               }
            });
         });

            fx8Titles.forEach((title) => {
               const words = title.querySelectorAll(".word");

               for (const word of words) {
                  const chars = word.querySelectorAll(".char");

                  chars.forEach((char) => gsap.set(char.parentNode, { perspective: 2000 }));

                  gsap.fromTo(
                     chars,
                     {
                        "will-change": "opacity, transform",
                        opacity: 0,
                        rotationX: -90,
                        yPercent: 50,
                     },
                     {
                        ease: "power1.inOut",
                        opacity: 1,
                        rotationX: 0,
                        yPercent: 0,
                        stagger: {
                           each: 0.03,
                           from: 0,
                        },
                        scrollTrigger: {
                           trigger: word,
                           start: "center bottom+=10%",
                           end: "bottom center-=10%",
                           scrub: 0.9,
                           scroller: "[data-scroll-container]",
                        },
                     }
                  );
               }
            });

            fx4Titles.forEach((title) => {
               const words = title.querySelectorAll(".word");

               for (const word of words) {
                  const chars = word.querySelectorAll(".char");

                  chars.forEach((char) => gsap.set(char.parentNode, { perspective: 2000 }));

                  gsap.fromTo(
                     chars,
                     {
                        "will-change": "opacity, transform",
                        opacity: 0,
                        rotationX: -90,
                        yPercent: 50,
                     },
                     {
                        ease: "power1.inOut",
                        opacity: 1,
                        rotationX: 0,
                        yPercent: 0,
                        stagger: {
                           each: 0.03,
                           from: 0,
                        },
                        scrollTrigger: {
                           trigger: word,
                           start: "center bottom+=45%",
                           end: "bottom center-=30%",
                           scrub: 0.9,
                           scroller: "[data-scroll-container]",
                        },
                     }
                  );
               }
            });
            fx5Titles.forEach((title) => {
               const chars = title.querySelectorAll(".char");

               gsap.fromTo(
                  chars,
                  {
                     "will-change": "opacity, transform",
                     opacity: 0,
                     yPercent: 120,
                     scaleY: 2.3,
                     scaleX: 0.7,
                     transformOrigin: "50% 0%",
                  },
                  {
                     duration: 1,
                     ease: "back.inOut(2)",
                     opacity: 1,
                     yPercent: 0,
                     scaleY: 1,
                     scaleX: 1,
                     stagger: 0.03,
                     scrollTrigger: {
                        trigger: title,
                        start: "center bottom+=50%",
                        end: "bottom top+=40%",
                        scrub: true,
                        scroller: "[data-scroll-container]",
                     },
                  }
               );
            });

         };
         scroll();

         ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
         ScrollTrigger.refresh();
      }
      
      var top_menu = $("#top-menu");
      var menu_item = $(".menu-item");
      var menu_overlay = $(".header-overlay");

      top_menu.find(menu_item).each(function () {
         var menu_item_link = $(this).find(".menu-item-link > a");
         var menu_content = menu_item_link.text();

         menu_item_link.on({
            mouseenter: function () {
               menu_overlay.addClass("active");
               $(".menu-overlay-item").text(menu_content);
               $(".menu-overlay-item").addClass("active");
               menu_item_link.addClass("active");
               menu_item.addClass("active");
            },
            mouseleave: function () {
               menu_overlay.removeClass("active");
               menu_item_link.removeClass("active");
               $(".menu-overlay-item").removeClass("active");
               menu_item.removeClass("active");
            },
         });
      });
      

            setTimeout(function() { 
               $('body').addClass('loaded');
         }, 1000);
}

})(jQuery);
