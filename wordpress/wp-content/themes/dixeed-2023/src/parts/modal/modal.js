// modal
$( document ).ready(function() {
  // Handler for .ready() called.
      var body = $('body');
      var modal = $('.modal-container');
      var modal_video = $('#modal-video');
      var scroll_position = 0;
      var modalbox = {
         show: function(type) {
            console.log(modal)
            scroll_position = $(window).scrollTop();
            $('body').css({ 'overflow': 'hidden' });
            if (type == 'video') {
               modal_video.addClass('active');
               $('.modal-video.active video')[0].load()
               $('.modal-video.active video')[0].currentTime = 0;
               $('.modal-video.active video')[0].play();
            }
         },
         hide: function() {
            $(window).scrollTop(scroll_position);
            $("video").each(function() {
               if ($(this).parent().parent().parent().hasClass('modal-wrapper')) {
                  this.pause()
               }
            });
            $('body').css({ 'overflow': 'auto' });
            $('.chat-bot-avatar-launcher').show();
            if (modal_video.hasClass('active')) {
               modal_video.removeClass('active');
            }
         },
      };

      ////////////////////

      // events 

      ////////////////////

      // open modal
      body.on('click touch', '.play', function(e) {
         e.preventDefault();
         var poster_url = $(this).attr('data-poster-url');
         var mp4_url = $(this).attr('data-mp4-url');
         var webm_url = $(this).attr('data-webm-url');
         modal_video.find('video').attr('poster',poster_url);
         modal_video.find('video source:nth-child(1)').attr('src',mp4_url);
         modal_video.find('video source:nth-child(2)').attr('src',webm_url);
         modalbox.show('video');
      });
      // close modal if cliked
      modal.on('click touch', function(e) {
         e.preventDefault();
         modalbox.hide();
      });
      // do not close modal if click is inside content
      modal.find('.content').on('click touch', function(e) {
         e.preventDefault();
         e.stopPropagation();
      });
      // close modal btn
      modal.on('click touch', '.modal-close', function(e) {
         e.preventDefault();
         modalbox.hide();
      });

      window.closeModal = function() {
         modalbox.hide();
      }

      $('.confirm-modal-close').on('click', function(e) {
         e.preventDefault();
         window.parent.closeModal();
         window.parent.location.reload();
      });
});

