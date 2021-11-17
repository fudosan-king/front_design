$(function($) {
	$(window).on("scroll", function() {
	    if ($(window).scrollTop() >= 20) {
	      	$("header").addClass("compressed");
	    } else {
	      	$("header").removeClass("compressed");
	    }
	});

	jQuery(document).ready(function($) {
	  	function scrollToSection(event) {
		    event.preventDefault();
		    var $section = $($(this).attr('href')); 
		    $('html, body').animate({
		      scrollTop: $section.offset().top 
		    }, 500);
	  	}

	  	$('[data-scroll]').on('click', scrollToSection);

      

	}(jQuery));
});

jQuery(function($) {
  $('a.nav_link[href*="#"]:not([href="#"])').click(function() {
    var target = $(this.hash);
    $('html,body').stop().animate({
      scrollTop: target.offset().top - 76
    }, 1450, 'easeInOutExpo');

  });

  // $('.navbar-collapse ul li a').click(function() {
  //   $('.navbar-toggle:visible').click();
  // });

	if (location.hash){
    var id = $(location.hash);
	}
	$(window).on('load', function() {
  	if (location.hash){
    	$('html,body').animate({scrollTop: id.offset().top -78}, 600)
  	};
	});

	$('.navbar-toggler').click(function(){
    $('.nav_link').on('click', function() {
		if(!$('.navbar-toggler').hasClass('collapsed'))
      $('.navbar-toggler').click();
    });
	});

  $('.btn_list').click(function() {
    $(this).addClass ('active');
    $('.btn_grid').removeClass ('active');
    $('.box_list').show();
    $('.box_grid').hide();
  });

  $('.btn_grid').click(function() {
    $(this).addClass ('active');
    $('.btn_list').removeClass ('active');
    $('.box_grid').show();
    $('.box_list').hide();
  });
	
    
  


});

$('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
 	let dropdown=$(e.target).closest('.dropdown-hover');
  	dropdown.addClass('show');
  
	setTimeout(function(){
      	dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
  	},300);
});


$(function () {
  $(document).ready(function () {
    return $(window).scroll(function () {
      return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
    }), $("#back-to-top").click(function () {
      return $("html,body").animate({
        scrollTop: "0"
      })
    })
  })
});


// Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
  $('.menu-collapsed').toggleClass('d-none');
  $('.sidebar-submenu').toggleClass('d-none');
  $('.submenu-icon').toggleClass('d-none');
  $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
  
  // Treating d-flex/d-none on separators with title
  var SeparatorTitle = $('.sidebar-separator-title');
  if ( SeparatorTitle.hasClass('d-flex') ) {
      SeparatorTitle.removeClass('d-flex');
  } else {
      SeparatorTitle.addClass('d-flex');
  }
  
  // Collapse/Expand icon
  $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}

$(document).ready( function () {
  // $("#table_list").DataTable();
});




$(".js-range-slider").ionRangeSlider({
  min: 0,
  max: 100,
  from: 80,
  postfix: "%"
});

$(".js-range-slider2").ionRangeSlider({
  min: 1,
  max: 100,
  from: 45,
  postfix: "角度"
});

$(".js-range-slider3").ionRangeSlider({
  min: 1,
  max: 100,
  from: 45,
  postfix: "角度"
});
$(".js-range-slider4").ionRangeSlider({
  min: 0,
  max: 100,
  from: 80,
  postfix: "%"
});


