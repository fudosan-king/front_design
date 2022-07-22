document.addEventListener('click',function(e){
  // Hamburger menu
  if(e.target.classList.contains('hamburger-toggle')){
    e.target.children[0].classList.toggle('active');
  }
})

function scrollToSection(event) {
  event.preventDefault();
  var $section = $($(this).attr('href')); 
  $('html, body').animate({
    scrollTop: $section.offset().top - 120
  }, 500);
}

$('[data-scroll]').on('click', scrollToSection);

$('.box_clinical_pictures').isotope({
  itemSelector: '.box_item',
  masonry: {
    columnWidth: 300
  }
});


var options = {
  pageDots: false
};

// enable prev/next buttons at 768px
if (matchMedia('(max-width: 768px)').matches) {
  options.pageDots = true;
  options.wrapAround = false;
  options.freeScroll = true;
}

$('.carousel').flickity(options);
  var $carousel = $('.carousel').flickity({
  contain: true,
  // pageDots: false,
  // wrapAround: true,
  freeScroll: false
});

$('.carousel.carousel_conditions').flickity(options);
var $carousel = $('.carousel').flickity({
  contain: true,
  pageDots: false,
  // wrapAround: true,
  freeScroll: false
});

$('#search-button').on('click', function (e) {
  if ($('#search-input-container').hasClass('hdn')) {
    e.preventDefault();
    $('#search-input-container').removeClass('hdn')
    return false;
  }
});

$('#hide-search-input-container').on('click', function (e) {
  e.preventDefault();
  $('#search-input-container').addClass('hdn')
  return false;
});