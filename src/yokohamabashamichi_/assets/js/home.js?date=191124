function spritStr(str, random) {
	'use strict';

	if (random === undefined) {
		random = false;
	}

	var i = 0,
		html = '',
		$obj,
		duration = 1 / str.length;

	for (i = 0; i < str.length; i++) {
		$obj = $('<span data-char="init">' + str.substr(i, 1) + '</span>');

		if (random) {
			$obj.css({
				'transition-delay': (Math.random() * (1.4 - 0.4) + 0.4) + 's'
			});
		} else {

			$obj.css({
				'transition-delay': i * duration + 0.4 + 's'
			});
		}

		html += $obj.prop('outerHTML');
	}

	return html;
}

function initMap() {
	'use strict';
	var latlng = {
			lat: 36.673812,
			lng: 136.861522
		},
		map = new google.maps.Map(document.getElementById('js-map'), {
			center: latlng,
			zoom: 15,
			disableDefaultUI: true,
			styles: [{
				featureType: 'all',
				elementType: 'all',
				stylers: [{
					saturation: -100
				}, {
					lightness: 0
				}, {
					gamma: 1

				}]
			}]
		}),
		icon = {
			url: '/assets/img/home/icn-marker@2x.png',
			scaledSize: new google.maps.Size(50, 50),
			origin: new google.maps.Point(0, 0),
			size: new google.maps.Size(50, 50),
			anchor: new google.maps.Point(25, 50)
		},
		marker1 = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: icon
		});
}

$(function () {

	$('.vis,.vis_image').height($(window).outerHeight());

	$('.intro_title > b,.intro_headline > b').each(function () {
		$(this).html(spritStr($(this).text(), true));
	});

	$('#js-visual_catch > b').html(spritStr($('#js-visual_catch > b').text()));

	$('#js-about_bg').ripples();

	$('#js-opening_bg').ripples({
		'interactive': false
	});

	$('#js-vis_slide').on('init', function (event, slick) {
		$('[data-slick-index="0"]').addClass('isCurrent');
	});

	$('#js-vis_slide').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

		setTimeout(function () {
			$('[data-slick-index="' + currentSlide + '"]').removeClass('isCurrent');
		}, 500);

		$('[data-slick-index="' + nextSlide + '"]').addClass('isCurrent');
	});


	setTimeout(function () {
		$('.opening_carp').addClass('isShow');
	}, 500);

	setTimeout(function () {
		$('#js-opening_bg').ripples('drop', $('#js-opening_bg').width() / 2, $('#js-opening_bg').height() / 2, 20, 0.1);
	}, 1000);

	setTimeout(function () {
		$('.opening_logo').addClass('isShow');
	}, 2000);


	setTimeout(function () {
		$('.opening').addClass('isFadeOut');


	}, 3700);


	setTimeout(function () {


		$('#js-vis_slide').slick({
			pauseOnFocus: false,
			pauseOnHover: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 4000,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows: false
		});

		$('.vis').addClass('isShow');

	}, 0);

	setTimeout(function () {
		$('.gHeader,.gMenuBtn').addClass('isFadeIn');


	}, 500);

	$('.u-ttl01 > b').each(function () {
		$(this).html(spritStr($(this).text(), false));
	});


	$('#js-room_slide').slick({
		pauseOnFocus: false,
		pauseOnHover: false,
		dots: true,
		infinite: true,
		centerMode: true,
		speed: 1000,
		slidesToShow: 1,
		variableWidth: true,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		nextArrow: '<button class="room_button room_button-next" type="button" aria-label="Next"><i class="icon icon-arrowRight"></i></button>',
		prevArrow: '<button class="room_button room_button-prev" type="button" aria-label="Previous"><i class="icon icon-arrowRight"></i></button>'
	});

	$(window).on("scroll", function() {
	    if($(window).scrollTop() > 10) {
	        $(".gHeader_cols").addClass("active");
	    } else {
	        //remove the background property so it comes transparent again (defined in your css)
	       $(".gHeader_cols").removeClass("active");
	    }
	});
});
