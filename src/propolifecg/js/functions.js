$(function($) {

  $('.owl_topbanner').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      animateOut: 'fadeOut'
  });

  // menu
  var wrapperMenu = document.querySelector('.wrapper-menu');
  wrapperMenu.addEventListener('click', function(){
    wrapperMenu.classList.toggle('open');  
  });
  $( ".wrapper-menu" ).click(function(event) {
    event.preventDefault();
    $( ".menu" ).toggleClass('active');
  });


  $('.owl_work_gallery').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      items: 1
  });

  $.fancybox.defaults.animationEffect = "slide";


});

