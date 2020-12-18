//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
// 
//  common.js
//
//------------------------------------------------------------------------------------------

var GL_Propolife = {};
GL_Propolife.val = {};
GL_Propolife.func = {};

/*
    GLOBAL
    GL_Propolife.val
        -> GL_Propolife.val.isWinSizeSmallW768 // common.js
        -> GL_Propolife.val.isWinSizeSmallW480 // common.js
        -> GL_Propolife.val.isSP // common.js
        -> GL_Propolife.val.isOS // common.js
*/

(function($){
    $(function(){
        var winSize = {w: $(window).width(), h: $(window).height() }
        var scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }

        var isWinSizeSmallW768 = false;
        var isWinSizeSmallW480 = false;
        var isSP = false;
        var isIE = false;
        var underIE8 = false;

        // --------------------------------------------------
        //
        //  msie / Device Type
        //
        // --------------------------------------------------
        var ua = window.navigator.userAgent.toLowerCase();
        var msie=navigator.appVersion.toLowerCase();
        var os = (msie.indexOf('win', 0) != -1)? 'win' : 'mac';
        if( msie.match(/(msie|MSIE)/) || msie.match(/(T|t)rident/) ) {
            isIE = true;
            var ieVersion = msie.match(/((msie|MSIE)\s|rv:)([\d\.]+)/)[3];
            ieVersion = parseInt(ieVersion);
        }

        function getDeviceType(){
            var r=new Array(3);
            if(ua.search(/iphone/i)>-1){ r=['smart','iphone','ios'];}
            else if(ua.search(/ipod/i)>-1){r=['smart','ipod','ios'];    }
            else if(ua.search(/ipad/i)>-1){r=['tablet','ipad','ios'];   }
            else if(ua.search(/android/i)>-1&&ua.search(/webkit/i)>-1){if(ua.search(/mobile/i)>-1){r=['smart','androidmobile','android'];}
                                                                       else{r=['tablet','androidtablet','android'];}
                                                                      }
            else if(ua.search(/blackberry/i)>-1&&ua.search(/webkit/i)>-1&&ua.search(/mobile/i)>-1){r=['smart','blackberry','ohter'];}
            else if(ua.search(/windows phone/i)>-1&&ua.search(/msie/i)>-1){r=['other','windowsphone','other'];}
            else if(ua.search(/^docomo/i)>-1){r=['mobile','imode','other'];}
            else if(ua.search(/^kddi/i)>-1||ua.search(/^up\.browser/i)>-1){r=['mobile','ezweb','other'];}
            else if(ua.search(/^softbank/i)>-1||ua.search(/^vodafone/i)>-1||ua.search(/^mot/i)>-1){r=['mobile','sb','other'];}
            else{r=['other','other','other'];   }
            return r;
        }

        if(ua.indexOf('safari') > -1 && !(ua.indexOf('chrome') > -1)){ $('body').addClass('safari'); }
        if(getDeviceType()[0] == 'smart'){ $('body').addClass('sp'); isSP = true; }
        if(getDeviceType()[0] == 'tablet'){ $('body').addClass('tablet'); isSP = true; }
        if(ieVersion == 6 || ieVersion == 7 || ieVersion == 8){ $('body').addClass('ie8'); underIE8 = true; }
        if(isIE){ $('body').addClass('for_ie'); }

        GL_Propolife.val.isSP = isSP;
        GL_Propolife.val.isOS = os;


        //--------------------------------------------------
        //
        //  SwitchContentSize
        //
        //--------------------------------------------------

        var SwitchContentSize = (function(){

            return {
                SwitchClass: function(){
                    isWinSizeSmallW768 = (($('body').css('zIndex')) == 10)? true: false;
                    isWinSizeSmallW480 = (($('#wrap').css('zIndex')) == 2)? true: false;
                    var _hasClass768 = $('body').hasClass('w768');

                    if(isWinSizeSmallW768){
                        if(!_hasClass768){
                            $('body').addClass('w768');
                            SmartphoneGlobalNavigation.ResizeSwitchNav('sp');
                            SmartphoneSubGlobalNavigation.SwitchNav('sp');
                            if(GL_Propolife.func.ModalWindow){ GL_Propolife.func.ModalWindow.Close();}
                        }
                    }else if(!isWinSizeSmallW768){
                        if(_hasClass768){
                            $('body').removeClass('w768');
                            SmartphoneGlobalNavigation.ResizeSwitchNav('pc');
                            SmartphoneSubGlobalNavigation.SwitchNav('pc');
                            if(GL_Propolife.func.ModalWindow){ GL_Propolife.func.ModalWindow.Close();}
                        }
                    }

                    GL_Propolife.val.isWinSizeSmallW768 = isWinSizeSmallW768;
                    GL_Propolife.val.isWinSizeSmallW480 = isWinSizeSmallW480;
                }
            }
        })();


        //--------------------------------------------------
        //
        //  PcHeaderGlobalNavigation();
        //
        //--------------------------------------------------
        var PcHeaderGlobalNavigation = (function(){

            var $globalNav = $('#gnav');
            var showSpeed = 250;
            var showEasing = 'easeOutSine';

            var isShow = false;
            return{
                Init: function(){
                    $globalNav.find('li').on('mouseenter', function(){
                        if(!isWinSizeSmallW768){
                            isShow = true;
                            $(this).addClass('on');
                            var $subMenu = $(this).find('ul');
                            var subMenuLength = $subMenu.find('li').length;
                            var subMenuH = $subMenu.find('li').height() * subMenuLength;
                            $subMenu.show().css({opacity: 0, height: 0}).stop().transition({opacity: 1, height: subMenuH}, showSpeed, showEasing);
                        }
                    });

                    $globalNav.find('li').on('mouseleave', function(){
                        if(!isWinSizeSmallW768){
                            isShow = false;
                            $(this).removeClass('on');
                            var $subMenu = $(this).find('ul');
                            $subMenu.stop().transition({opacity: 0}, showSpeed, showEasing, function(){ if(!isShow){ $(this).hide(); }});
                        }
                    });
                }
            }

        })();


        //--------------------------------------------------
        //
        //  PcHeaderSubNavigation();
        //
        //--------------------------------------------------
        var PcHeaderSubNavigation = (function(){

            var $contents = $('#contents');
            var $subGnav = $('#sub_gnav');
            var $subGnavIco = $subGnav.find('.sub_gnav_ico');

            return{
                Init: function(){
                    var _this = this;
                    $subGnavIco.on('smarttouch', function(){
                        var isOpen = ($subGnav.hasClass('on'))? true: false;
                        if(!isOpen){ $subGnav.addClass('on'); }
                        else{ $subGnav.removeClass('on'); }
                    });

                    $(window).on('resize orientationchange', function(){
                        _this.SetSize();
                    });

                    _this.SetSize();
                },

                SetSize: function(){
                    var _contentH = $contents.outerHeight(true);
                    $subGnav.css({height: _contentH});
                }
            }

        })();

        //--------------------------------------------------
        //
        //  SmartphoneGlobalNavigation();
        //
        //--------------------------------------------------
        var SmartphoneGlobalNavigation = (function(){

            var $header = $('#header');
            var $gnav = $('#gnav');
            var $gnavInner = $gnav.find('#gnav_list');
            var $ico = $header.find('.gnav_ico');

            var headerH = $header.height();
            var showSpeed = 250;
            var showEasing = 'easeOutSine';

            var isMenuOpen = false;
            var isAnimate = false;
            var openSpeed = 400;
            var openDelay = 15;
            var openEase = 'easeInSine';
            var openInnerEase = 'easeOutSine';

            return {
                Init: function(){
                    var _this = this;
                    $ico.append('<span class="top"></span><span class="mid"></span><span class="btm"></span>');
                    $ico.on('smarttouch', function(){
                        _this.SwitchClass();
                        _this.SwitchNav();
                        return false;
                    });

                    $gnav.find('.parents').on('smarttouch', function(){
                        _this.OpenNavigation($(this));
                    });

                    $(window).on('resize orientationchange', function(){
                        _this.ResizeSwitchNav();
                    });
                },

                SwitchClass: function(){
                    if(!isMenuOpen && !isAnimate){ $ico.addClass('on');}
                    else if(isMenuOpen && !isAnimate){ $ico.removeClass('on');}
                },

                SetHeight: function(){
                    if(GL_Propolife.val.isWinSizeSmallW768){
                        $gnav.css({height: winSize.h + 100});
                    }
                },

                SwitchNav: function(isSwitch){
                    var openSpeed = (!isSwitch)? 400: 0;

                    if(!isMenuOpen && !isAnimate){
                        isMenuOpen = true;
                        isAnimate = true;

                        var _num = 0;

                        $gnav.css({overflowY: 'hidden'});
                        $gnav.css({height: 0, visibility: 'visible'}).stop().transition({height: winSize.h + 100, opacity: 1}, openSpeed, openEase);
                        $gnavInner.find('li').css({opacity: 0}).each(function(i){    
                            $(this).transition({x: -5}, 0).stop().transition({x: 0, opacity: 1, delay: (openSpeed/1.3) + (openDelay * i)}, openSpeed, openInnerEase, function(){
                                $(this).find('a').css({width: '100%'});
                                _num += 1;
                                if(_num == $gnavInner.find('li').length){
                                    $gnav.css({overflowY: 'auto'});
                                    isAnimate = false;
                                }
                            });
                        });

                    }else if(isMenuOpen && !isAnimate){
                        isAnimate = true;
                        $gnav.css({overflowY: 'hidden'});
                        $gnav.stop().transition({height: 0}, openSpeed/2, openInnerEase, function(){
                            $(this).css({visibility: 'hidden'});
                            $gnav.find('.parents').removeClass('on');
                            $gnavInner.find('ul').hide();
                            isMenuOpen = false;
                            isAnimate = false;
                        });
                    }
                },

                OpenNavigation: function(_elm){
                    var _isOpen = _elm.hasClass('on');
                    var $subMenu = _elm.next('ul');

                    var subMenuLength = ($subMenu.find('.access').length == 0)? $subMenu.find('li').length: $subMenu.find('li').length - 1;
                    var subMenuH = $subMenu.find('li').height() * subMenuLength;

                    if(isWinSizeSmallW768 && !_isOpen){
                        _elm.addClass('on');
                        $subMenu.show().css({opacity: 1, height: 0, visibility: 'visible'}).stop().transition({height: subMenuH}, showSpeed, showEasing);
                    }else if(isWinSizeSmallW768 && _isOpen){
                        _elm.removeClass('on');
                        $subMenu.stop().transition({height: 0}, showSpeed, showEasing, function(){ $(this).hide(); });
                    }
                },

                ResizeSwitchNav: function(device){
                    var _this = this;
                    if(!isWinSizeSmallW768){
                        $gnav.find('.parents').each(function(){
                            var _isOpen = $(this).hasClass('on');
                            if(_isOpen){
                                $(this).removeClass('on');
                                $gnav.find('li').find('ul').hide().css({opacity: 0});
                            }
                        });
                    }

                    if(device == 'pc'){
                        isMenuOpen = false;
                        isAnimate = false;
                        _this.SwitchNav();
                        $ico.removeClass('on');
                        $gnav.css({height: headerH});
                    }

                    if(device == 'sp'){
                        isMenuOpen = true;
                        isAnimate = false;
                        _this.SwitchNav(true);
                    }


                }
            }


        })();


        //--------------------------------------------------
        //
        //  SmartphoneBtmGlobalNavigation();
        //
        //--------------------------------------------------
        var SmartphoneBtmGlobalNavigation = (function(){

            var $btmNav = $('#sitemap');
            var showSpeed = 250;
            var showEasing = 'easeOutSine';

            return{
                Init: function(){
                    var _this = this;
                    $btmNav.find('.parents').on('smarttouch', function(){
                        var $subNav = $(this).next('.sub');
                        _this.SwitchNav($subNav);
                    });

                    $(window).on('resize orientationchange', function(){
                        _this.ResizeSwitchNav();
                    });
                },

                SwitchNav: function(elm){
                    var _display = (elm.prev('.parents').hasClass('on'))? true: false;
                    var _subNavH = elm.find('ul').height();

                    if(!_display){
                        elm.prev('.parents').addClass('on');
                        elm.stop().transition({height: _subNavH}, showSpeed, showEasing);
                    }else{
                        elm.prev('.parents').removeClass('on');
                        elm.stop().transition({height: 0}, showSpeed, showEasing);
                    }
                },

                ResizeSwitchNav: function(){
                    var _this = this;
                    if(!isWinSizeSmallW768){
                        $btmNav.find('.sub').css({height: 'auto'});
                        $btmNav.find('.sub').each(function(){
                            var _isOpen = ($(this).prev('.parents').hasClass('on'))? true: false;
                            if(_isOpen){
                                $(this).removeClass('on');
                                _this.SwitchNav($(this));
                            }
                        });
                    }else{
                        $btmNav.find('.sub').each(function(){
                            var _isOpen = ($(this).prev('.parents').hasClass('on'))? true: false;
                            if(!_isOpen){ $(this).css({height: 0}); }
                        });
                    }
                }
            }
        })();


        //--------------------------------------------------
        //
        //  SmartphoneSubGlobalNavigation();
        //
        //--------------------------------------------------
        var SmartphoneSubGlobalNavigation = (function(){

            var $subGlobal = $('#sub_global_nav');
            var $subGlobalList = $subGlobal.find('#sub_global_nav_list');
            var $btnOpen = $subGlobal.find('h2');
            var $overlay;

            var INIT_HEIGHT = 55;
            var openSpeed = 300;

            return{
                Init: function(){
                    $('#wrap').append('<p class="sub_global_overlay switch_sp"></p>');
                    $overlay = $('.sub_global_overlay');
                    this.AddEvent();
                },

                AddEvent: function(){
                    var _this = this;
                    $btnOpen.on('smarttouch', function(){
                        if(GL_Propolife.val.isWinSizeSmallW768){
                            var _hasOn = $(this).hasClass('on');
                            if(!_hasOn){
                                $(this).addClass('on');
                                _this.Open();
                            }else{
                                $(this).removeClass('on');
                                _this.Close();
                            }
                        }
                    });

                    $overlay.on('smarttouch', function(){
                        if(GL_Propolife.val.isWinSizeSmallW768){
                            $btnOpen.removeClass('on');
                            _this.Close();
                        }
                    });
                },

                Open: function(){
                    $overlay.css({opacity: 0}).show().stop().transition({opacity: 1, height: '100%'}, openSpeed, function(){
                        $(this).show();
                    });
                    $subGlobal.css({height: 'inherit', visibility: 'hidden'});
                    var _setH = $subGlobal.height();

                    $subGlobal.css({visibility: 'visible', height: INIT_HEIGHT}).stop().transition({height: _setH}, openSpeed, function(){
                        $(this).css({height: 'auto'});
                        $('#wrap').css({height: _setH});
                    });

                    $('body').css({overflowY: 'scroll', backgroundColor: '#c5b79d'});
                    $('.img_btm_animal').hide();
                    $('#wrap').css({height: winSize.h - INIT_HEIGHT});
                    $('#footer').hide();
                },

                Close: function(){
                    $overlay.stop().transition({opacity: 0}, openSpeed/2, function(){ $(this).hide(); });
                    $subGlobal.stop().animate({height: INIT_HEIGHT}, openSpeed/2);

                    $('body').css({overflowY: 'auto', backgroundColor: '#fff'});
                    $('.img_btm_animal').show();
                    $('#wrap').css({height: 'auto'});
                    $('#footer').show();
                },

                SwitchNav: function(_device){
                    $btnOpen.removeClass('on');
                    $overlay.hide();
                    $('body').css({overflowY: 'auto', backgroundColor: '#fff'});
                    $('#wrap').css({height: 'auto'});
                    $('.img_btm_animal').show();
                    $('#footer').show();

                    if(_device == 'pc'){
                        var _size = ($('body').attr('id') == 'home')? '100%': 'auto';
                        $subGlobal.css({height: _size});
                    }else{
                        $subGlobal.css({height: INIT_HEIGHT});
                    }
                }
            }

        })();

        //--------------------------------------------------
        //
        //  OrientationAlert()
        //
        //--------------------------------------------------
        function OrientationAlert(){
            var orientationAlert = setTimeout(function(){
                var _isPortrait = $('body').hasClass('portrait');
                if(winSize.w > winSize.h){
                    if(_isPortrait){
                        $('body').addClass('landscape').removeClass('portrait');
                    }
                }else{
                    if(!_isPortrait){
                        $('body').addClass('portrait').removeClass('landscape');
                    }
                }
                orientationAlert = false;
                clearTimeout(orientationAlert);
            }, 1000);
        }

        //--------------------------------------------------
        //
        //  ScrollPageTop()
        //
        //--------------------------------------------------
        function ScrollPageTop(){
            var $btnPagetop = $('.btn_pagetop');
            var moveSpeed = 300;

            $btnPagetop.on('smarttouch', function(){
                $('body, html').stop().animate({ scrollTop: 0}, moveSpeed);
            });
        }

        //--------------------------------------------------
        //
        //  DisabledClick()
        //
        //--------------------------------------------------
        function DisabledClick(){
            $('#sitemap, #gnav').on('mousedown', function(){
                return false;
            });
        }

        //--------------------------------------------------
        //
        //  Common Function
        //
        //--------------------------------------------------
        function Update(){
            winSize = {w: $(window).width(), h: $(window).height() }
            SwitchContentSize.SwitchClass();
            SmartphoneGlobalNavigation.SetHeight();
        }

        function Run(){
            $('#header').css({left: -scrollPos.left});

            PcHeaderGlobalNavigation.Init();
            PcHeaderSubNavigation.Init();
            SmartphoneGlobalNavigation.Init();
            SmartphoneBtmGlobalNavigation.Init();
            SmartphoneSubGlobalNavigation.Init();
            ScrollPageTop();
            DisabledClick();
            if($('body').hasClass('sp')){ OrientationAlert(); }
            Update();
        }

        //--------------------------------------------------
        //
        //  Add Event
        //
        //--------------------------------------------------
        $(window).on('resize orientationchange', function(){
            if($('body').hasClass('sp')){ OrientationAlert(); }
            Update();
        });

        $(window).on('scroll', function(){
            scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }
            $('#header').css({left: -scrollPos.left});
        });

        $(window).on('load', function(){
            Update();
        });

        Run();

    });
    
})(jQuery);