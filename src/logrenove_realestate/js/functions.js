jQuery(document).ready(function($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top - 0
    }, 500);
  }

  $('[data-scroll]').on('click', scrollToSection);

  $( "#features01 .btndetail" ).click(function(event) {
    event.preventDefault();
    $(this).toggle();
    $('#features01 .box_features_item_more').toggle();
  });
  $('#features01 .btn_up').click(function(event) {
    event.preventDefault();
    $('#features01 .btndetail').toggle();
    $('#features01 .box_features_item_more').toggle();
  });

  $( "#features02 .btndetail" ).click(function(event) {
    event.preventDefault();
    $(this).toggle();
    $('#features02 .box_features_item_more').toggle();
  });
  $('#features02 .btn_up').click(function(event) {
    event.preventDefault();
    $('#features02 .btndetail').toggle();
    $('#features02 .box_features_item_more').toggle();
  });

  $( "#features03 .btndetail" ).click(function(event) {
    event.preventDefault();
    $(this).toggle();
    $('#features03 .box_features_item_more').toggle();
  });
  $('#features03 .btn_up').click(function(event) {
    event.preventDefault();
    $('#features03 .btndetail').toggle();
    $('#features03 .box_features_item_more').toggle();
  });

}(jQuery));