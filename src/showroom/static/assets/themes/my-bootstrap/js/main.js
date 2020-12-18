$(document).ready(function() {
    // Top
    $('.gallery a').on('mouseover', function(){
        var gallery = $(this).parents('.gallery');
        var target_img = $('.preview img', gallery);
        var img_path = $(this).attr('data-over');
        target_img.attr('src', img_path);
    });

	//Top SP List

	/*$('.box_link').bind('touchend', function() {
		var links = $(this).attr('title');
		 location.href = links;
	});*/

    // Service
    // Head click
    $('.head').on('click', function(){
        $('.toggle span', $(this)).click();
        return false;
    });

    // Service
    // Add toggle button
    $('.toggle span').on('click', function(){
        var body = $('.body', $(this).parents('li'));
        if(body.is(':visible')){
            $(this).addClass('plus');
            $(this).removeClass('minus');
            body.hide();
        }else{
            $(this).addClass('minus');
            $(this).removeClass('plus');
            body.show();
        }
        return false;
    });

    // Switch active area for mobile
    $('.switch li').on('click', function(){
        $('.active').removeClass('active');
        var changeto = $(this).attr('class');
        $(this).addClass('active');
        $('.compare > div').filter('.' + changeto).addClass('active');
    });


	$(window).on('load resize', function(){
		var topH = $('#block_link').height();
		var wH = $(window).height();
		var centers = (parseInt(wH) - parseInt(topH))/2;
		$('#block_link').css('padding-top',centers);
	});

	$('#block_link li a, .area_search a, .price_search a, #gnavi a').on('mouseover', function(){
        $(this).stop(true, false).fadeTo(100,0.6);
    }).mouseout(function(){
		$(this).stop(true, false).fadeTo(100,1);
	});

    $apartment = window.location.hash.substr(1);
    if ($apartment == 'myTabContent_chubu'){
        $('.tab-chubu a[href="#myTabContent_chubu"]').tab('show');
    } else if ($apartment == 'myTabContent_osaka') {
        $('.tab-osaka a[href="#myTabContent_osaka"]').tab('show');
    } else if ($apartment == 'myTabContent_fukuoka') {
        $('.tab-fukuoka a[href="#myTabContent_fukuoka"]').tab('show');
    } else {
        $('.tab-kantou a[href="#myTabContent_kanto"]').tab('show');
    }

	$('#myTabContent_kanto .price_search_tab li').on('click', function(){
        $('#myTabContent_kanto .price_search_active').removeClass('price_search_active');
        $(this).addClass('price_search_active');
		var num = $("#myTabContent_kanto .price_search_tab li").index(this);
		$('#myTabContent_kanto .price_search_group > div').removeClass('price_search_arctive_div');
        $('#myTabContent_kanto .price_search_group > div').eq(num).addClass('price_search_arctive_div');
    });

	$('#myTabContent_chubu .price_search_tab li').on('click', function(){
        $('#myTabContent_chubu .price_search_active').removeClass('price_search_active');
        $(this).addClass('price_search_active');
		var num = $("#myTabContent_chubu .price_search_tab li").index(this);
		$('#myTabContent_chubu .price_search_group > div').removeClass('price_search_arctive_div');
        $('#myTabContent_chubu .price_search_group > div').eq(num).addClass('price_search_arctive_div');
    });

	$('#myTabContent_osaka .price_search_tab li').on('click', function(){
        $('#myTabContent_osaka .price_search_active').removeClass('price_search_active');
        $(this).addClass('price_search_active');
		var num = $("#myTabContent_osaka .price_search_tab li").index(this);
		$('#myTabContent_osaka .price_search_group > div').removeClass('price_search_arctive_div');
        $('#myTabContent_osaka .price_search_group > div').eq(num).addClass('price_search_arctive_div');
    });

	$('#myTabContent_fukuoka .price_search_tab li').on('click', function(){
        $('#myTabContent_fukuoka .price_search_active').removeClass('price_search_active');
        $(this).addClass('price_search_active');
		var num = $("#myTabContent_fukuoka .price_search_tab li").index(this);
		$('#myTabContent_fukuoka .price_search_group > div').removeClass('price_search_arctive_div');
        $('#myTabContent_fukuoka .price_search_group > div').eq(num).addClass('price_search_arctive_div');
    });

	$('#gnavi007').on('mouseover', function(){
        $(this).next().slideToggle(0);
    }).mouseout(function(){
		 $(this).next().slideToggle(0);
	});

	$('#gnavi006_2').on('mouseover', function(){
        $(this).css('display','block');
    }).mouseout(function(){
		 $(this).slideToggle(0);
	});

	$('.map_area ul a img').on('mouseover', function(){
         $(this).attr('src', $(this).attr('src').replace('_off', '_over'));
    }).mouseout(function(){
		 $(this).attr('src', $(this).attr('src').replace('_over', '_off'));
	});

	jQuery.preloadImages = function(){
		for(var i = 0; i<arguments.length; i++){
        jQuery("<img>").attr("src", arguments[i]);
	}
	};
	$.preloadImages(
		'/static/img/2015/search/bg_saitama.png',
		'/static/img/2015/search/bg_chiba.png',
		'/static/img/2015/search/bg_tokyo.png',
		'/static/img/2015/search/bg_tokyotoka.png',
		'/static/img/2015/search/bg_yokohama.png',
		'/static/img/2015/search/bg_kanagawasonota.png',
		'/static/img/2015/search/bg_nagoya.png',
		'/static/img/2015/search/bg_nagoyashigai.png'
	);

	/*$('.mapkantou .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		var kantou = $('.mapkantou .map_area');
		if(thisLi == 'saitama'){
			kantou.css('background-image','url(img/2015/search/bg_saitama.png)');
		} else if (thisLi == 'chiba') {
			kantou.css('background-image','url(img/2015/search/bg_chiba.png)');
		}
		 else if (thisLi == 'tokyo23') {
			 kantou.css('background-image','url(img/2015/search/bg_tokyo.png)');
		}
		 else if (thisLi == 'tokyotoka') {
			 kantou.css('background-image','url(img/2015/search/bg_tokyotoka.png)');
		}
		 else if (thisLi == 'yokohama') {
			 kantou.css('background-image','url(img/2015/search/bg_yokohama.png)');
		}
		 else if (thisLi == 'kanagawasonota') {
			 kantou.css('background-image','url(img/2015/search/bg_kanagawasonota.png)');
		}
    }).mouseout(function(){
		 $('.mapkantou .map_area').css('background-image','none');
	});

	$('.map02_2 .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		var chuubu = $('.map02_2 .map_area');
		if(thisLi == 'nagoya'){
			 chuubu.css('background-image','url(img/2015/search/bg_nagoya.png)');
		} else if (thisLi == 'nagoyashigai') {
			 chuubu.css('background-image','url(img/2015/search/bg_nagoyashigai.png)');
		}
    }).mouseout(function(){
		  $('.mapchuubu .map_area').css('background-image','none');
	});
	*/
	$('.mapkantou .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		var kantou = $('.mapkantou .map_area');
		if(thisLi == 'saitama'){
			$('#map_saitama').fadeIn();
		} else if (thisLi == 'chiba') {
			$('#map_chiba').fadeIn();
		}
		else if (thisLi == 'tokyo23') {
			$('#map_tokyo').fadeIn();
		}
		else if (thisLi == 'tokyotoka') {
			$('#map_tokyotoka').fadeIn();
		}
		else if (thisLi == 'yokohama') {
			$('#map_yokohama').fadeIn();
		}
		else if (thisLi == 'kanagawasonota') {
			$('#map_kanagawasonota').fadeIn();
		}
	}).mouseout(function(){
		$('.map_bg').fadeOut(200);
	});
	$('.map02_2 .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		var chuubu = $('.map02_2 .map_area');
		if(thisLi == 'saitama'){
			$('#map_saitama').fadeIn();
		}
		else if (thisLi == 'nagoya') {
			$('#map_nagoya').fadeIn();
		}
		else if (thisLi == 'nagoyashigai') {
			$('#map_nagoyashigai').fadeIn();
		}
	}).mouseout(function(){
		$('.map_bg').fadeOut(200);
	});

		$('.maposaka .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		var chuubu = $('.maposaka .map_area');
		if(thisLi == 'hyogo'){
			$('#map_hyogo').fadeIn();
		}

		else if (thisLi == 'kobeshi') {
			$('#map_kobeshi').fadeIn();
		}

		else if (thisLi == 'osaka') {
			$('#map_osaka').fadeIn();
		}

		else if (thisLi == 'keihan') {
			$('#map_keihan').fadeIn();
		}

		else if (thisLi == 'kawachi') {
			$('#map_kawachi').fadeIn();
		}

		else if (thisLi == 'sakaishi') {
			$('#map_sakaishi').fadeIn();
		}

		else if (thisLi == 'hokusetsu') {
			$('#map_hokusetsu').fadeIn();
		}

		else if (thisLi == 'hanshin_kan') {
			$('#map_hanshin_kan').fadeIn();
		}

    }).mouseout(function(){
		  $('.map_bg').fadeOut(200);
	});

	$('.mapfukuoka .map_area ul li').on('mouseover', function(){
		var thisLi = $(this).attr('id');
		if(thisLi == 'fukuoka'){
			$('#map_fukuoka').fadeIn();
		}
		else if (thisLi == 'except_fukuoka') {
			$('#map_except_fukuoka').fadeIn();
		}
	}).mouseout(function(){
		$('.map_bg').fadeOut(200);
	});

});
