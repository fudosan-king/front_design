
$.fn.form_num_remaining_items = function() {
	var target = this;
	var num = target.length;


	target.each(function() {

		if($(this).hasClass('postalcode')) {
			if('' !== $('.postalcode').val()) {
				$('.postalcode').addClass('on-select');
				check_items();
			} else {
				$('.postalcode').removeClass('on-select');
				check_items();
			}
			$(this).on({
				keyup: function() {
					if(5 === $(this).val().length) {
						setTimeout(function() {
							if('' !== $('.postalcode').val()) {
								$('.postalcode').addClass('on-select');
								check_items();
							} else {
								$('.postalcode').removeClass('on-select');
								check_items();
							}
							if('' !== $('.pref').val()) {
								$('.pref').addClass('on-select');
								$('.pref').each(function() {
									var option = $(this).find('option:selected');
							  	$(this).prev('.select-label').text(option.text());
							  	$(this).blur();
								});
								check_items();
							} else {
								$('.pref').removeClass('on-select');
								check_items();
							}
							if('' !== $('.address1').val()) {
								$('.address1').addClass('on-select');
								check_items();
							} else {
								$('.address1').removeClass('on-select');
								check_items();
							}
							if('' !== $('.address2').val()) {
								$('.address2').addClass('on-select');
								check_items();
							} else {
								$('.address2').removeClass('on-select');
								check_items();
							}

						}, 800);
					}
				}
			});
		} else if($(this).hasClass('name')) {
			if('' !== $('.name').val()) {
				$('.name').addClass('on-select');
				check_items();
			} else {
				$('.name').removeClass('on-select');
				check_items();
			}
			$(this).on({
				keyup: function() {
					setTimeout(function(){
						if('' !== $('.name').val()) {
							$('.name').addClass('on-select');
							check_items();
						} else {
							$('.name').removeClass('on-select');
							check_items();
						}
						if('' !== $('.name-kana').val()) {
							$('.name-kana').addClass('on-select');
							check_items();
						} else {
							$('.name-kana').removeClass('on-select');
							check_items();
						}
					}, 800);
				}
			});
		} else {
			if($(this).is(':checkbox') || $(this).is(':radio')) {
				if($(this).prop('checked')) {
					$(this).addClass('on-select');
				} else {
					$(this).removeClass('on-select');
				}
				check_items();
				$(this).on({
					change: function() {
						if($(this).prop('checked')) {
							$(this).addClass('on-select');
						} else {
							$(this).removeClass('on-select');
						}
						check_items();
					}
				});
			} else if($(this).is('select')) {
				if('' !== $(this).val()) {
					$(this).addClass('on-select');
				} else {
					$(this).removeClass('on-select');
				}
				check_items();
				$(this).on({
					change: function() {
						if('' !== $(this).val()) {
							$(this).addClass('on-select');
						} else {
							$(this).removeClass('on-select');
						}
						check_items();
					}
				});
			} else {
				if('' !== $(this).val()) {
					$(this).addClass('on-select');
				} else {
					$(this).removeClass('on-select');
				}
				check_items();
				$(this).on({
					keyup: function() {
						if('' !== $(this).val()) {
							$(this).addClass('on-select');
						} else {
							$(this).removeClass('on-select');
						}
						check_items();
					}
				});
			}
		}

	});

	function check_items() {
		var len = $('.on-select').length;

		$('#result span').html(num - len);
	}

	return this;
};

$(function() {
	$('.required').form_num_remaining_items();

	$('#button_mfp_goconfirm').on({
		click: function() {
			$('#result').hide();
			$('#mfp_button_cancel').on({
				click: function() {
					$('#result').show();
				}
			});
		}
	});
	
	$(window).on({
		load: function() {
			$('.select-field').each(function() {
				var option = $(this).find('option:selected');
		  	$(this).prev('.select-label').text(option.text());
		  	$(this).blur();
			});
		},
		resize: function() {
			$('.select-field').each(function() {
				var option = $(this).find('option:selected');
		  	$(this).prev('.select-label').text(option.text());
		  	$(this).blur();
			});
		}
	});

	$('.select-field').on({
		change: function() {
  		var option = $(this).find('option:selected');
  		$(this).prev('.select-label').text(option.text());
  		$(this).blur();
  	}
	});
	
});