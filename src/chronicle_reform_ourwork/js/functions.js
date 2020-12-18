$(function($) {
  $('.btnContact').click(function() {
        var target = $(this.hash);
          $('html,body').stop().animate({
            scrollTop: target.offset().top - 50
          }, 'linear');   
    });   
    if (location.hash){
      var id = $(location.hash);
    }
    $(window).on('load', function() {
      if (location.hash){
        $('html,body').animate({scrollTop: id.offset().top-50}, 'linear')
      };
    });
});