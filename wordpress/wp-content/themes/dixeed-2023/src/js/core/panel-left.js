document.addEventListener("DOMContentLoaded", function () {
   //app-menu ability for the top menu
   let body = document.body;
   let menuToggle = document.querySelector(".panel-left-toggle");
   let topNav = document.querySelector(".site-top");
   let page = document.querySelector("#page");

   //first move the button into site-top if app-menu is being used cause we dont want it on the outside
   if (body.classList.contains("app-menu")) {
      topNav.append(menuToggle);
   }

   function closeAppMenu(e) {
      e.preventDefault();
      menuToggle.click();
   }

   //when button is opened we will lock the body so there is no scrolling and then open the page
   if (menuToggle) {
      menuToggle.addEventListener("afterToggle", (e) => {
         //if button has been toggled on
         if (menuToggle.classList.contains("toggled-on")) {
            if (body.classList.contains("app-menu")) {
               body.classList.add("mobile-menu-body-lock");
            }

            //clicking anywhere outside the menu will close it
            document.querySelector(".site-content").addEventListener("click", closeAppMenu, { once: true });
         } else {
            document.querySelector(".site-content").removeEventListener("click", closeAppMenu);

            if (body.classList.contains("app-menu")) {
               page.addEventListener(
                  "transitionend",
                  function () {
                     body.classList.remove("mobile-menu-body-lock"); //only remove toggle and hide menu once page holder finishes its transition to cover it.
                  },
                  { once: true }
               );
            } else {
               //body.classList.remove('mobile-menu-body-lock');
            }
         }
      });
   }
});


   $(document).ready(function () {
      function layerInit(){
         var diameterValue = (Math.sqrt( Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2))*2);
         overlayNav.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0,
         }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px',
         }, 0);
   
         overlayContent.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0,
         }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px',
         }, 0);
      }

      var overlayNav = $('.cd-overlay-nav'),
		overlayContent = $('.cd-overlay-content'),
		navigation = $('.menu'),
		toggleNav = $('.cd-nav-trigger');

      layerInit();

      $(window).on("resize", function () {
         window.requestAnimationFrame(layerInit);
      });

      toggleNav.on("click", function () {
         console.log(overlayNav.children("span"));
         if (!toggleNav.hasClass("close-nav")) {
            toggleNav.addClass("close-nav");
           
            overlayNav.children("span").velocity(
               {
                  translateZ: 0,
                  scaleX: 1,
                  scaleY: 1,
               },
               500,
               "easeInCubic",
               function () {
                  //show navigation
                  navigation.addClass("fade-in");
               }
            );
         } else {
            //animate cross icon into a menu icon
            toggleNav.removeClass("close-nav");
            //animate the content layer
            overlayContent.children("span").velocity(
               {
                  translateZ: 0,
                  scaleX: 1,
                  scaleY: 1,
               },
               500,
               "easeInCubic",
               function () {
                  //hide navigation
                  navigation.removeClass("fade-in");
                  //scale to zero the navigation layer
                  overlayNav.children("span").velocity(
                     {
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0,
                     },
                     0
                  );
                  //reduce to opacity of the content layer with the is-hidden class
                  overlayContent
                     .addClass("is-hidden")
                     .one(
                        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                        function () {
                           //wait for the end of the transition and scale to zero the content layer
                           overlayContent.children("span").velocity(
                              {
                                 translateZ: 0,
                                 scaleX: 0,
                                 scaleY: 0,
                              },
                              0,
                              function () {
                                 overlayContent.removeClass("is-hidden");
                              }
                           );
                        }
                     );
               }
            );
         }
      });
      
   });

