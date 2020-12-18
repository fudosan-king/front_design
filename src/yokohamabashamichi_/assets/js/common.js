/*global window,$*/
if (document.uniqueID && window.matchMedia && document.documentMode >= 11) {
	$('html').addClass('isIE11');
}
$(function () {
	'use strict';
	var isFlag = {};

	//fancybox Hide browser vertical scrollbars
	if ($.fancybox !== undefined) {
		$.fancybox.defaults.hideScrollbar = false;
	}

	//Stickyfill Run
	if (document.uniqueID && window.matchMedia && document.documentMode >= 11 && typeof Stickyfill !== 'undefined') {
		Stickyfill.add($('#js-gNav'));
	}

	//scrollEvent
	isFlag.scroll = false;

	function eventScroll($window) {

		if (isFlag.scroll) {
			return false;
		}

		isFlag.scroll = true;

		window.requestAnimationFrame(function () {

			//pageTop Show
			if ($window.scrollTop() > 100) {
				$('#js-gPageTop,#js-gHeaderWrap').addClass('isFixed');
			} else {
				$('#js-gPageTop,#js-gHeaderWrap').removeClass('isFixed');
			}

			//scrollAnimation
			$('[data-animation="before"]').each(function () {
				if ($window.scrollTop() + $window.height() > $(this).offset().top) {
					$(this).attr('data-animation', 'after');
				}
			});

			isFlag.scroll = false;
		});
	}

	$(window).scroll(function () {
		eventScroll($(this));
	});

	eventScroll($(window));


	//resizeイベント
	isFlag.resize = true; //run false

	function eventResize($window) {

		if (isFlag.resize) {
			return false;
		}

		isFlag.resize = true;

		window.requestAnimationFrame(function () {
			isFlag.resize = false;
		});
	}

	$(window).resize(function () {
		eventResize($(this));
	});

	eventResize($(window));

	//SmartPhoneNavi menu clickEvent
	$('#js-gMenuBtn').click(function () {
		$(this).toggleClass('isShow');
		$('#js-gNav').toggleClass('isShow');
		return false;
	});

	//pageTopButton clickEvent
	$('#js-gPageTop_button').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 700);

		return false;
	});

	//link within a page clickEvent
	$('a[href*="#"]').click(function () {
		var $obj = $($(this).prop('hash'));
		if (window.location.pathname === $(this).prop('pathname')) {
			if ($obj.length > 0) {
				$('#js-gMenuBtn').removeClass('isShow');
				$('#js-gNav').removeClass('isShow');

				$('body,html').animate({
					scrollTop: $obj.offset().top
				}, 700);
				return false;
			}
		}
	});
});
