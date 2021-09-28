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
	})



	// $('a.nav_link').bind('click', function(event) {
 //      var $ele = $(this);
 //      $('html, body').stop().animate({
 //          scrollTop: ($($ele.attr('href')).offset().top - 60)
 //      }, 1450, 'easeInOutExpo');
 //      event.preventDefault();
 //  });
  
 //  $('.navbar-collapse ul li a').click(function() {
 //    $('.navbar-toggle:visible').click();
 //  });


	
    
  


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


