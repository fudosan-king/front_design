//Pagetop
    var showFlag = false;
    var topBtn = $('#page-top');
    topBtn.css('bottom', '-100px');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '50px'}, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200);
            }
        }
    });
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

//scroll fade in
$(function () {
  var effect_btm = 300; 
  var effect_move = 50;
  var effect_time = 800; 

  //親要素と子要素のcssを定義
  $('.scroll-fade-row').css({
    opacity: 0
  });
  $('.scroll-fade-row').children().each(function () {
    $(this).css({
      opacity: 0,
      transform: 'translateY(' + effect_move + 'px)',
      transition: effect_time + 'ms'
    });
  });

  $(window).on('scroll load', function () {
    var scroll_top = $(this).scrollTop();
    var scroll_btm = scroll_top + $(this).height();
    var effect_pos = scroll_btm - effect_btm;

    $('.scroll-fade-row').each(function () {
      var this_pos = $(this).offset().top;
      if (effect_pos > this_pos) {
        $(this).fadeIn(5000)
        $(this).css({
          opacity: 1,
          transform: 'translateY(0)'
        });
        $(this).children().each(function (i) {
          $(this).delay(100 + i * 200).queue(function () {
            $(this).css({
              opacity: 1,
              transform: 'translateY(0)'
            }).dequeue();
          });
        });
      }
    });
  });
});


//smoth scroll
$(function () {
  $('a[href^="#"]').click(function () {
    var adjust = -90;
    var speed = 500; 
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});


// pc or sp 
var windowWidth = $(window).width();
var windowSm = 1000;
if (windowWidth <= windowSm) {
  //sp処理
  //sp menu
  (function ($) {
    $(function () {
      $('#nav-toggle').on('click', function () {
        $('#nav-toggle').toggleClass('open');
        $('nav').toggleClass('open');

        $('#global-nav nav ul li').toggleClass('open');
      });
    });
  })(jQuery);
	
	//click close
$('header .block nav ul li a').on('click',function() {
         $('nav').removeClass('open');   
	$('#nav-toggle').removeClass('open');
     } );
	
		//scroll event
$(window).scroll(function () {
  if($(window).scrollTop() > 70) {
    $('header .block nav').css('background-color','#f0e9d9');
    $('header .block nav ul.mega_menu li.menu ul.child_menu').css('background-color','#f0e9d9');
	$('header').css('background-color','#fff');
  } else {
    
    $('header .block nav').css('background-color','#fff');
	$('header .block nav ul.mega_menu li.menu ul.child_menu').css('background-color','#fff');
	$('header').css('background-color','#f0e9d9');

  }
});
	
} else {
  //tablet pc処理
	
	//scroll event
$(window).scroll(function () {
  if($(window).scrollTop() > 125) {
    $('header').addClass('fixed');
	$('header').css('background-color','#fff');
	$('header .block nav ul.mega_menu li.menu a').hover(
    function() {
		$('header').css('background-color','#fff' );  }, 
	function() {
 
   $('header').css('background-color','#fff');
 
    }
);
  } else {
    $('header').removeClass('fixed');
	$('header').css('background-color','#f0e9d9');
	$('header .block nav ul.mega_menu li.menu a').hover(
    function() {
		$('header').css('background-color','#fff' );  }, 
	function() {
 
   $('header').css('background-color','#f0e9d9');
 
    }
);
  }
});
		$('header .block nav ul.mega_menu li.menu a').hover(
    function() {
		$('header').css('background-color','#fff' );  }, 
	function() {
 
   $('header').css('background-color','#f0e9d9');
 
    }
);
}
//fadein
$(window).on("load", function() {
$('.kv__message img').delay(600).fadeIn(2000);
});

$(function ($) {
  $.ajax({
    url: '/wp-content/themes/chinokanri2022/assets/data/jp_national_holidays_min.json',
    dataType: 'json',
  })
    .always(function (data) {
      var holidays = data[(new Date()).getFullYear()];
      $('.datepicker').datepicker({
        language: 'ja',
        disableTouchKeyboard: true,
        autoclose: true,
        todayHighlight: true,
        ignoreReadonly: true,
        beforeShowDay: function (date) {

          if (date.getTime() <= (new Date()).getTime())
            return false;

          if (date.getDay() == 3 || date.getDay() == 0)
            return false;

          if (data && data[date.getFullYear()][(date.getMonth() + 1)]) {
            if (data[date.getFullYear()][(date.getMonth() + 1)].indexOf(date.getDate()) != -1)
              return false;
          }

          return true;
        },
      });
    })
    .fail(function (e) {
      console.log(e);
    })

  var availableDay = $('.visit_datetime').val();
  $('.visit_datetime').datepicker({
    container: '.box_datetime',
    format: 'yyyy/mm/dd',
    language: 'ja',
    autoclose: true,
    disableTouchKeyboard: true,
    // todayHighlight: true,
    // ignoreReadonly: true,
    // beforeShowDay: function (date) {

    //     if(date.getTime() <= (new Date()).getTime() )
    //         return false;

    //     return true;
    // },
    beforeShowDay: function (date) {

      if (date.getTime() < (new Date(availableDay)).getTime())
        return false;

      return true;
    },
  });

});



