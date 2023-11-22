// Slide Show Splide Library
$(function($) {
    $(document).ready(function() {

    	var elms = document.getElementsByClassName( 'splide' );
		for ( var i = 0, len = elms.length; i < len; i++ ) {
			new Splide( elms[ i ],{
                autoplay: true,
				perPage: 1,
				breakpoints: {
					767: {
						arrows:false,
					},
				}
			}).mount();
		}
    });
});

async function getLatestPosts(page){
    $api = '/mokusiru/wp-json/wp/v2';
    $has_page = page >= 0 ? '&per_page=6&page=' + page : '';
    $endpoint =  $api + '/posts?orderby=id&order=desc' + $has_page;
    let res = await axios.get($endpoint);
    return res.data;
}

//Script Blog Template
$(function($) {
    const run_blog = new prosytle_blog($);
    
    $(document).ready(function() {
        run_blog.ready();
    });

    $('#btn-more-sub-cat').click(function(event) {
        $.each($('.row-lists.sub-cat .d-none:lt(6)'), function(index, e) {
            $(e).removeClass('d-none', 300);
        });

        if($('.row-lists.sub-cat .d-none').length <= 0){
            $('#btn-more-sub-cat').remove();
        }
    });

    $('#btn-more-other-tag').click(function(event) {
        $.each($('.row-lists.other-tag .d-none:lt(6)'), function(index, e) {
            $(e).removeClass('d-none', 300);
        });

        if($('.row-lists.other-tag .d-none').length <= 0){
            $('#btn-more-other-tag').remove();
        }
    });

    $('#btn-more-pickup').click(function(event) {
        $.each($('.row-lists.pickup .d-none:lt(6)'), function(index, e) {
            $(e).removeClass('d-none', 300);
        });

        if($('.row-lists.pickup .d-none').length <= 0){
            $('#btn-more-pickup').remove();
        }
    });


    $('#btn-more-latest').click(function(event) {
        $page = $(this).data('page');

        getLatestPosts(++$page).then(function(articles){

            if(articles.length < 6){
                $('#btn-more-latest').remove();
            }

            articles.forEach(function(article){
                let date_modifier = moment(article.modified).format('YYYY.MM.DD');

                cats_html = '';
                if(article.cat_objects.length > 0){
                    article.cat_objects.forEach(function(cat){
                        cats_html += '<li>\
                            <a href="' + cat.link + '">\
                                <span>#' + cat.name + '</span>\
                            </a>\
                        </li>';
                    })
                }

                tags_html = '';
                if(article.tag_objects.length > 0){
                    article.tag_objects.forEach(function(tag){
                        tags_html += '<li>\
                            <a href="' + tag.link + '">\
                                <span>#' + tag.name + '</span>\
                            </a>\
                        </li>';
                    })
                }
                

                html = $('\
                    <div class="col-12 col-md-4 dynamic-' + article.id + '">\
                        <div class="box-items">\
                            <a href="' + article.link + '">\
                                <div class="box-img">\
                                    <img src="' + article.featured_image + '" class="img-fluid">\
                                </div>\
                            </a>\
                            <a href="' + article.link + '"> \
                                <h3 class="box-title">' + article.title.rendered + '</h3>\
                            </a>    \
                            <p class="box-date">' + date_modifier + '</p>\
                            <ul class="navbar list-tags">' + cats_html + tags_html + '</ul>\
                        </div>\
                    </div>\
                ').hide();
                html.appendTo('.news-list .row-lists').show();
            });

            $('#btn-more-latest').data('page', $page);
        })
    
        
    });

    $('#btn-more-video').click(function(event) {
        // $page = $(this).data('page');

        // getLatestPosts(-1).then(function(articles){

        //     console.log(articles);
            
        //     if(articles.length < 6){
        //         $('#btn-more-video').remove();
        //     }

        //     articles.forEach(function(article){
        //         let date_modifier = moment(article.modified).format('YYYY.MM.DD');

        //         tags_html = '';
        //         if(article.tag_objects.length > 0){
        //             tags_html = '<ul class="navbar list-tags">';
        //             article.tag_objects.forEach(function(tag){
        //                 tags_html += '<li>\
        //                     <a href="' + tag.link + '">\
        //                         <span>#' + tag.name + '</span>\
        //                     </a>\
        //                 </li>';
        //             })
        //             tags_html += '<ul>';
        //         }
                

        //         html = $('\
        //             <div class="col-6 col-md-4 dynamic-' + article.id + '">\
        //                 <div class="box-items">\
        //                     <a href="' + article.link + '">\
        //                         <div class="box-img">\
        //                             <img src="' + article.uagb_featured_image_src.full[0] + '" class="img-fluid">\
        //                         </div>\
        //                     </a>\
        //                     <a href="' + article.link + '"> \
        //                         <h3 class="box-title">' + article.title.rendered + '</h3>\
        //                     </a>    \
        //                     <p class="box-date">' + date_modifier + '</p>\
        //                     ' + tags_html + '\
        //                 </div>\
        //             </div>\
        //         ').hide();
        //         html.appendTo('.videos-list .row-lists').show();
        //     });

        //     $('#btn-more-video').data('page', $page);
        // })
        
        $.each($('.row-lists.video .d-none:lt(6)'), function(index, e) {
            $(e).removeClass('d-none', 300);
        });

        if($('.row-lists.video .d-none').length <= 0){
            $('#btn-more-video').remove();
        }
        
    });

    $('.row-lists.sub-cat .article').click(function (event) {
        const href = $(this).data('href');
        window.open(href, "_self");
    });

    $('.slideshow-top_img').click(function (event) {
        let parent = $(this).closest('.slideshow-top_item');
        let href = parent.find('.slideshow-top-box a').attr('href');
        window.open(href, '_self');
    });


    $('.icon-chevron-down').click(function () {
        let navbar = $('.menu-list').find('.navbar-nav');
        let iconUp = $('.menu-list').find('.icon-chevron-up');
        let iconDown = $('.menu-list').find('.icon-chevron-down');
        navbar.addClass('menu-toggle-open');
        navbar.removeClass('menu-toggle-close');

        iconUp.removeClass('d-none');
        iconDown.addClass('d-none');
        iconDown.removeClass('d-block');
    })
    $('.icon-chevron-up').click(function () {
        let navbar = $('.menu-list').find('.navbar-nav');
        let iconUp = $('.menu-list').find('.icon-chevron-up');
        let iconDown = $('.menu-list').find('.icon-chevron-down');
        navbar.addClass('menu-toggle-close');
        navbar.removeClass('menu-toggle-open');
        iconDown.removeClass('d-none');
        iconUp.addClass('d-none');
        iconUp.removeClass('d-block');
    })


});


function prosytle_blog() {

	this.ready = function()
	{
		const _this = this;
		_this.navigation();
		_this.scrollToEle();
        _this.popupFooterVideo();
	}

    this.popupFooterVideo = function ()
    {
        $('#modal_video').on('show.bs.modal', function (event) {
          const srcVideoFooter = $('.js-btn-video').data('src');
          $('#video').attr('src',srcVideoFooter);
        });  

        $('#modal_video').on('hidden.bs.modal', function (event) {
          $('#video').attr('src','');
        });
    }

	//Js Navigation
    this.navigation = function() 
    {
       const _this = this;
       
        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $(window).resize(function(e){
             _this.menu_animation_scroll();
        });

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;
            if( $('.menu-list').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.menu-list').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    $('.menu-sub').fadeIn().removeClass('open');
                    _this.menu_animation_scroll();
                    $(currentTarget).removeClass('open');
                    $(currentTarget).prependTo( $('header .header-top .navbar-expand-lg') );
                },300);  
            } else {
                $(currentTarget).prependTo( $('.menu-list .container') );
                $(currentTarget).addClass('open');
                $('.menu-list').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
        });

        $(window).on('load resize',function(){
            if ( $('body').hasClass('single-post') ){
                if ( $(window).outerWidth() >= 992 ){
                     $('.menu-list').css('display','none');
                    $('header').css({
                        'border': '0.5px solid #E0E0E0',
                        '-webkit-box-shadow': '0px 4px 4px rgb(0,0,0,.05)',
                        'box-shadow': '0px 4px 4px rgba(0,0,0,.05)',
                    });
                } else {
                    $('header').removeAttr('style');
                    $('.menu-list').css('display','block');
                }
            }
        });

        

        // $('.js-collapse').mouseover(function(e){
        //     if( $(window).outerWidth() <= 991 ){
        //         const currentTarget = e.currentTarget;
        //         $(currentTarget).next('.menu-sub').fadeIn().removeClass('open');
        //     } 
        // });   

        // $('body').mouseover(function(e){
        //     if( $(window).outerWidth() <= 991 ){
        //         const currentTarget = e.currentTarget;
        //         const target = e.target;
        //         console.log( target ,!$(target).is('.menu-sub, .menu-sub *') );
        //         if ( !$(target).is('.menu-sub, .menu-sub *,.menu-parent_item,.js-collapse, .js-collapse *') ){
        //             $('.menu-sub').fadeOut().addClass('open');    
        //         }  
        //     } 
        // });
        
    }

    this.menu_animation_scroll = function(){
        const headerHeight = $('header').outerHeight();
        const menuListHeight = $('.menu-list').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        const _menulist = $('.menu-list');
        if( $('body').hasClass('menu-opened') ) return;
        if( win.height() + 2*(headerHeight+menuListHeight) >= doc.height() ) return;
        if( win.scrollTop() > (headerHeight+menuListHeight) ){
            if( win.outerWidth() <= 991 ){
                _header.addClass('menu-animation-scroll');
            } else { 
                _header.addClass('menu-animation-scroll');
                _menulist.addClass('menu-list-scroll'); 
            }
        } else {
            if( win.outerWidth() <= 991 ){
                _header.removeClass('menu-animation-scroll');   
            } else { 
                _header.removeClass('menu-animation-scroll');
                _menulist.removeClass('menu-list-scroll');    
            }
        }
    }

	this.scrollToEle = function() {
        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            const  currentTarget  = e.currentTarget;

            const elem = $(currentTarget).attr("rel");
            const eleID = elem.replace('#', '');
          
            const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0;

            const targetHeight = target.outerHeight();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();
            const navHight = ($('header').outerHeight() != undefined)?$('header').outerHeight():0;
            $('html, body').animate({
                scrollTop: targetToTop - navHight
            }, 1000);
        });
    }

}


