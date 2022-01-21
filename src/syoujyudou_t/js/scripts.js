$(function($) {
    const run_syoujyudou = new syoujyudou($);
    $(document).ready(function() {
        run_syoujyudou.ready();
    });
});


function syoujyudou() {

    this.ready = function() {
        const _this = this;
        _this.navigation();
        _this._CSSJS();
    }  

    this._CSSJS = function()
    {
        $(window).on('load resize',function(){
            const height = $('.home_top_info').outerHeight();
            const heightTop = $('.home_top').outerHeight();
            const heightCus = heightTop - (height + 80 + 120);
            $('.home_ct_block').css('top', '-'+heightCus+'px');
        });
        
    }


    //Js Navigation
    this.navigation = function() {
       const _this = this;
       
        _this.menu_animation_scroll();

        $(window).scroll(function(e){
            _this.menu_animation_scroll();
        });

        $('.js-menu').on('click',function(e){
            const currentTarget = e.currentTarget;

            if( $('.nav_menu-list').hasClass('show') ){
                $('body').removeClass('menu-opening');
                $('body').addClass('menu-closing');
                setTimeout(function(){
                    $('.nav_menu-list').removeClass('show');
                    $('body').removeClass('menu-opened');
                    $('body').removeClass('menu-closing');
                    _this.menu_animation_scroll();
                    $(currentTarget).removeClass('open');
                },300);  

            } else {
                $(currentTarget).addClass('open');
                $('.nav_menu-list').addClass('show'); 
                $('body').addClass('menu-opened menu-opening');
            }  
            
        });

    }

    this.menu_animation_scroll = function(){
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        let winHeight;
        const _header = $('header');
        if( $('body').hasClass('menu-opened') ) return;
        if( win.height() + 2*headerHeight >= doc.height() ) return;
        if( win.scrollTop() > headerHeight ){
            _header.addClass('menu-animation-scroll');    
        } else {
            _header.removeClass('menu-animation-scroll');    
        }
    }

}