// ****** scroll functionality **************
var scroll = new SmoothScroll('a[href*="#"]');

// ************* video-modal *******************
$(document).ready(function() {
  // Gets the video src from the data-src on each button

  var $videoSrc;
  $('.avss-how__playbtn').click(function() {
    $videoSrc = $(this).data('src');
  });
  console.log($videoSrc);

  // when the modal is opened autoplay it
  $('#videomodal').on('shown.bs.modal', function(e) {
    $('#video').attr(
      'src',
      $videoSrc + '?autoplay=1&amp;modestbranding=1&amp;showinfo=0&amp;rel=0'
    );
  });

  // stop playing the youtube video when I close the modal
  $('#videomodal').on('hide.bs.modal', function(e) {
    $('#video').attr('src', $videoSrc);
  });

  // document ready
});
