$(function($) {

  $('.owl_topbanner').owlCarousel({
      loop: false,
      margin: 10,
      nav: false,
      dots: false,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      animateOut: 'fadeOut'
  });

	AOS.init();

  $('#myModal').modal('show');





});

// $(function() {
//   $('.navbar-nav .nav-item a[href*="#"]').on('click', function(e) {
//     e.preventDefault();
//     $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 150}, 500, 'linear');
//   });
// });

$(function($) {
  $('.navbar-nav .nav-item a[href*="#"]:not([href="#"])').click(function() {
      var target = $(this.hash);
        $('html,body').stop().animate({
          scrollTop: target.offset().top - 150
        }, 'linear');   
  });    
  if (location.hash){
    var id = $(location.hash);
  }
  $(window).on('load', function() {
    if (location.hash){
      $('html,body').animate({scrollTop: id.offset().top -150}, 'linear')
    };
  });
});