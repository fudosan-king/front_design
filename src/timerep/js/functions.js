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