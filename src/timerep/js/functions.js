$(function() {
  // setTimeout(function() { $("footer").fadeOut(1500); }, 3000);

  $( ".btn_notice" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });

  $( ".btn_edit" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });
  $( ".btn_chat" ).click(function() {
    $( "#box_chat" ).toggle( "fast", function() {});
  });

  $( "#box_notice .btn_close" ).click(function() {
    $( "#box_notice" ).toggle( "fast", function() {});
  });
  $( "#box_chat .btn_close" ).click(function() {
    $( "#box_chat" ).toggle( "fast", function() {});
  });

  $( ".btn_emotion" ).click(function() {
    $( ".w_box_emotion" ).toggle( "fast", function() {});
  });

})

jQuery(document).ready(function ($) {
  //open popup
  $('.cd-popup-trigger').on('click', function (event) {
    event.preventDefault();
    $('.cd-popup').addClass('is-visible');
  });

  //close popup
  $('.cd-popup').on('click', function (event) {
    if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == '27') {
      $('.cd-popup').removeClass('is-visible');
    }
  });
});