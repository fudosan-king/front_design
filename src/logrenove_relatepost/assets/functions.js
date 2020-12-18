$(function() {
    if($('.init-overload').hasClass('active')){
        $('.init-overload').removeClass('active');
    }
    isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
        isMobile = true;
    }

    if($('.list_location li').length > 0){

        $('.list_location li a').click(function(event) {
            event.preventDefault();
        });

        $('.list_location li').click(function(event) {
            /* Act on the event */

            $('.list_location li.active').removeClass('active');
            $(this).addClass('active');

            var args = {};
            args['showroom_id'] = $(this).data('showroom-id');

            callback_api_get_showroom(args);
            
        });
    }

    if($('.box_search_serminar .pagination').length > 0){
        $('.box_search_serminar .pagination').on('click', '.page-link', function(event) {
            event.preventDefault();
            
            var args = {};
            args['showroom_id'] = $('.list_location li.active').data('showroom-id');;
            args['paged'] = $(this).data('paged');

            callback_api_get_showroom(args);
        });

        function callback_api_get_showroom(args){
            args['callback'] = 'api';
            args['function'] = 'get_ajax_post_by_showroom_id';

            $.ajax({
                dataType: 'json',
                data: {args: args},
            })
            .done(function(data) {
                
                console.log(data);

                var htmlPost = '';
                if(data.posts){
                    data.posts.forEach(function(post, index){
                        
                        htmlPost += '<div class="box_location_items">\
                                    <div class="row no-gutters">\
                                        <div class="col-5 col-md-3 align-self-center">\
                                            <a href="' + post.customize_permalink + '" class="box_location_items_img"><img class="img-fluid" src="' + post.customize_img + '" alt=""></a>\
                                        </div>\
                                        <div class="col-7 col-md-9 align-self-center">\
                                            <div class="box_location_items_content">\
                                                <p class="badge-secondary badge badge_cate"><i class="fal fa-map-marker-alt"></i> ' + post.customize_are_obj.name + '</p>\
                                                <p class="date">' + post.customize_date + ' <span>' + post.customize_stringTime + '</span></p>\
                                                <h4><a href="' + post.customize_permalink + '">' + post.post_title + '</a></h4>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
                    })
                }
                $('.w_box_location_items').html(htmlPost);

                var htmlPagination = '';
                if(data.posts_max_num_pages > 1){
                    for(var i = 1; i <= data.posts_max_num_pages; i++){
                        if(i == data.posts_paged){
                            htmlPagination += '<li class="page-item active" data-paged="' + i + '"><span aria-current="page" class="page-numbers current">' + i + '</span></li>';
                        }else{
                            htmlPagination += '<li class="page-item"><a class="page-link" href data-paged="' + i + '">' + i + '</a></li>';    
                        }
                    }
                }
                $('.box_search_serminar .pagination').html(htmlPagination);


            })
            .fail(function(e) {
                console.log('Error');
                console.log(e);
            });
        }
    }

    if($('.card-wrapper button').length){
        $.each($('.card-wrapper button'), function(index, el) {
            if(!$(el).hasClass('collapsed') && $(el).data('child')){
                $(el).siblings('a').addClass('selected');
            }else{
                $(el).siblings('a').removeClass('selected');
            }
        });

        $('.card-wrapper button').click(function(event) {
            /* Act on the event */
            if(!$(this).hasClass('collapsed') && $(this).data('child')){
                console.log('A');
                $(this).siblings('a').removeClass('selected');
            }else{
                console.log('B');
                
                $(this).siblings('a').addClass('selected');
            }
        });
    }

    if(!isMobile){

        if($('.owl_banner').length > 0){
            $('.owl_banner').owlCarousel({
                items: 1,
                loop:true,
                margin:0,
                nav: false,
                smartSpeed :900
            });
        }

        var $carousel = $('.carousel.carousel_banner').flickity({"wrapAround": true, "pageDots": false});

        $carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
          // dismiss if cell was not clicked
          if ( !cellElement ) {
            return;
          }

          if(!$(cellElement).hasClass('is-selected')){
            $link = $(cellElement).find('a');
            window.open($link.attr('href'), '_self');
          }
          
        });

        $(window).on('load',function(){
            if($('.js-sidebar-fixed').length > 0){
                var main = $('.main_left');
                var side = $('.main_right');
                // var wrapper = $('.js-sidebar-fixed');
                var wrappers = $('.js-sidebar-fixed');
                var wrapperHeight = 0;
                var wSidebarFixed = $('.js-sidebar-fixed').outerWidth();
                // console.log(wSidebarFixed);
                wrappers.each(function(index,ele){
                    console.log(wrapperHeight)
                    wrapperHeight += parseInt($(ele).height());
                });

                var w = $(window);
                // var wrapperHeight = wrappers.outerHeight();
                var wrapperTop = wrappers.eq(0).offset().top;
                var sideLeft = side.offset().left;


                var sideMargin = {
                    top: side.css('margin-top') ? side.css('margin-top') : 0,
                    right: side.css('margin-right') ? side.css('margin-right') : 0,
                    bottom: side.css('margin-bottom') ? side.css('margin-bottom') : 0,
                    left: side.css('margin-left') ? side.css('margin-left') : 0
                };

                var winLeft;
                var pos;

                var scrollAdjust = function() {
                    sideHeight = side.outerHeight();
                    mainHeight = main.outerHeight();
                    mainAbs = main.offset().top + mainHeight;
                    var winTop = w.scrollTop();
                    winLeft = w.scrollLeft();
                    var winHeight = w.height();
                    var nf = (winTop > wrapperTop) && (mainHeight > sideHeight) ? true : false;
                    
                    pos = !nf ? 'static' : (winTop + wrapperHeight) > mainAbs ? 'absolute' : 'fixed';
                    bottom_count = $('#wpadminbar').length > 0 ? 0 : 26;
                    if (pos === 'fixed') {
                        side.css({
                            width:wSidebarFixed,
                            position: pos,
                            top: '',
                            bottom: winHeight - wrapperHeight + bottom_count,
                            left: sideLeft - winLeft,
                            margin: 0
                        });
                        // $('.sidebar_banner img').removeAttr('style');
                        $('.each_boxright').css
                    } else {
                        side.removeAttr('style');
                        // $('.sidebar_banner img').css({'width':'100%'});
                    }
                };
                w.on('scroll', scrollAdjust);
            }
        });

    }
    $(".btn_close").click(function(event) {
        event.preventDefault();
        $(".section_cookie").toggle('fast');
    });
    
});

jQuery(function($) {
    $('a.goto_frm_services[href*="#"]:not([href="#"], .btn_eventdetail)').click(function() {
      var target = $(this.hash);
        $('html,body').stop().animate({
          scrollTop: target.offset().top - 100
        }, 1100);   
    });    
    if (location.hash){
    var id = $(location.hash);
    }
    $(window).on('load', function() {
        if (location.hash){
            $('html,body').animate({scrollTop: id.offset().top -100}, 600)
        };
     });

    if($('.datepicker').length > 0){
        $('.datepicker').datepicker({
            language: 'ja',
        });
    }

    $('#pardotFormHandler_Contact').on('submit', function(event) {
        // event.preventDefault();
        /* Act on the event */
        $.each($('input, textarea'), function(index, el) {
            $(el).val(sanitizeHtml($(this).val()));
        })
    });
    
});

jQuery(function($) {
    if (isMobile) {
// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
// var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
// var lastScrollBottom = 0;
    var delta = 5;
// var delta2 = 5;
    var navbarHeight = $('header').outerHeight();
// var footerHeight = $('.section_cookie').outerHeight();
    $(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
        window.onscroll = function (e) {
            var scrollY = window.pageYOffset || document.documentElement.scrollTop;
            var footer = document.querySelector('.section_cookie');
            scrollY <= this.lastScroll
                ? footer.style.visibility = 'hidden'
                : footer.style.visibility = 'visible';
            this.lastScroll = scrollY;
        }
    }
    }
})