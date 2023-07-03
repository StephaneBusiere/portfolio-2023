(function ($) {
   function initializeBlock($block) {
      $block.find(".accordion-content").each(function () {
         var container = $(this).find(".accordion-text-container");
         var button_open = $(this).find(".accordion-button-container");
         var button_close = $(this).find(".accordion-button-close-container");
         var text = $(this).find(".accordion-text");
         var icon = $(this).find(".accordion-icon");
         var image = $(this).find(".accordion-image");
         var wrapper = $(this);

         $(button_open).on("click", function (event) {
            if (event.target !== this) {
               return;
            }

            container.addClass("open");
            button_open.addClass("active");
            button_close.addClass("active");
            text.addClass("open");
            icon.addClass("open");
            image.addClass("open");
         });

         $(button_close).on("click", function (event) {
            if (event.target !== this) {
               return;
            }
            container.removeClass("open");
            button_open.removeClass("active");
            button_close.removeClass("active");
            text.removeClass("open");
            icon.removeClass("open");
            image.removeClass("open");
         });

         $(document).on("click", function (e) {
            if (!wrapper.is(e.target) && wrapper.has(e.target).length === 0) {
               container.removeClass("open");
               text.removeClass("open");
               image.removeClass("open");
               icon.removeClass("open");
               button_open.removeClass("active");
               button_close.removeClass("active");
            }
         });
      });
   }

   if (window.acf) {
      // Initialize dynamic block preview (editor).
      window.acf.addAction("render_block_preview", function ($el, attributes) {
         var $block = $el.find(".accordion-block-wrapper");

         if ($block.length) {
            initializeBlock($block);
         }
      });
   } else {
      // Initialize each block on page load (front end).
      $(document).ready(function () {
         $(".accordion-block-wrapper").each(function () {
            initializeBlock($(this));
         });
      });
   }
})(jQuery);
