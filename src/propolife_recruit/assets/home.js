//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  home.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){
var winSize = {w: $(window).width(), h: $(window).height() }

/* -----------------------------------------------------------------
*
    FrameAnimation
*
----------------------------------------------------------------- */

var FrameAnimation = (function(){
    
    // SELECTOR
    var $animObject = $('.f_anim');
    
    // VARIABLE
    var animObjLength = $animObject.length;
    var animObjStartInterval = 100;
    var animObjInterval = 60;
    var animObjFrames = [];
    var animObjCurrentFrames = [];
    var animObjTimeout = [];

    return{
        Init: function(){
            // SetAnimPosition
            for(var i = 0; i < animObjLength; i++){
                var _this = $animObject.eq(i);
                var _img = _this.find('img').attr('src');
                var _frame = _this.data('anim');
                var _isLoop = _this.data('loop');
                var _extension = _img.slice(_img.lastIndexOf('.'));
                animObjFrames[i] = _frame;
                animObjTimeout[i] = false;
                for(var j = 2; j <= _frame; j++){
                    if(j < 10){ var _imgPath = _img.replace('f01' + _extension, 'f0' + j + _extension); }
                    else{ var _imgPath = _img.replace('f01' + _extension, 'f' + j + _extension); }
                    var _imgSrc = '<img src="' + _imgPath + '" alt="">';
                    _this.append(_imgSrc);
                }
                
                if(_isLoop == 1){
                    for(var j = _this.find('img').length - 1; j > 0; j--){
                        if(j < 10){ var _imgPath = _img.replace('f01' + _extension, 'f0' + j + _extension); }
                        else{ var _imgPath = _img.replace('f01' + _extension, 'f' + j + _extension); }
                        var _imgSrc = '<img src="' + _imgPath + '" alt="">';
                        _this.append(_imgSrc);
                    }
                    animObjFrames[i] = animObjFrames[i] * 2 - 1;
                }
                
                _this.find('img').each(function(i){
                    if(i != 0){ $(this).css({opacity: 0}); }
                });
            }
            
            this.SetAnimation();
            ContentsLoader.Init();
        },
        
        SetAnimation: function(){
            var _this = this;
            
            $animObject.each(function(i){
                var _thisImg = $(this).find('img');
                _thisImg.eq(0).show();
                animObjCurrentFrames[i] = 0;
                setTimeout(function(){
                    _this.Play(_thisImg, i, 0);
                }, animObjInterval * (Math.floor(Math.random() * 3)));
            });
        },
        
        Play: function(_img, _index, _interval){
            
            animObjTimeout[_index] = setTimeout(function(){
                _img.eq(animObjCurrentFrames[_index]).css({opacity: 0, visibility: 'hidden'}).hide();
                animObjCurrentFrames[_index] += 1;
                if(animObjCurrentFrames[_index] == animObjFrames[_index]){
                    animObjCurrentFrames[_index] = 0;
                }else{
                    var _interval = animObjInterval * (Math.floor(Math.random() * 2) + 1);
                }
                
                _img.eq(animObjCurrentFrames[_index]).css({opacity: 1, visibility: 'visible'}).show();
                
                FrameAnimation.Play(_img, _index, _interval);
            }, _interval);
        }
    }
})();


/* -----------------------------------------------------------------
*
    HomeGlobalSubNavigation
*
----------------------------------------------------------------- */
var HomeGlobalSubNavigation = (function(){
    
    var $subNav = $('#sub_global_nav');
    var $btnSubNav = $('.btn_home_sub_ico');
    
    var INIT_POS = 280;
    var openSpeed =  200;
    
    return{
        Init: function(){
            this.AddEvent();
        },
        
        AddEvent: function(){
            var _this = this;
            $btnSubNav.on('click', function(){
                var _isOn = $(this).hasClass('on');
                if(!_isOn){
                    $(this).addClass('on');
                    _this.Open();
                }else{
                    $(this).removeClass('on');
                    _this.Close();
                }
            });
        },
        
        Open: function(){
            $subNav.stop().animate({right: 0}, openSpeed);
        },
        
        Close: function(){
            $subNav.stop().animate({right: -INIT_POS}, openSpeed/1.5);
        },
        
        SwitchNav: function(){
            
        }
    }
})();

/* -----------------------------------------------------------------
*
    ModalWindow
*
----------------------------------------------------------------- */
var ModalWindow = (function(){
    
    var $modalWindow, $modalInner;
    var $trigger = $('#btn_list').find('');
    
    var MODAL_PATH = '';
    var openSpeed = 300;
    
    var _isOpen = false;
    
    return{
        Init: function(){
            var _modalHtml = '<div id="modal_window">';
            _modalHtml += '<div id="modal_inner">';
            _modalHtml += '</div>';
            _modalHtml += '<p class="modal_overlay"></p>';
            _modalHtml += '</div>';
            
            $('#wrap').append(_modalHtml);
            
            $modalWindow = $('#modal_window');
            $modalInner = $('#modal_inner');
            
            this.AddEvent();
        },
        
        AddEvent: function(){
            var _this = this;
            $trigger.on('click', function(){
                var _href = $(this).attr('href');
                _href = _href.slice(_href.indexOf('#') + 1);
                if(!_isOpen){ _this.Open(_href);}
            });
            
            $('.modal_overlay').on('click', function(){ _this.Close();});
        },
        
        Open: function(_href){
            $modalWindow.css({opacity: 1, visibility: 'visible'});
            
            $.ajax({
                type: 'get',
                url: MODAL_PATH + _href + '.php',
                dataType: 'html',
                cache: false,
                success: function(data){
                    _isOpen = true;
                    $modalInner.html(data);
                    $modalInner.transition({y: -10, opacity: 0}, 0).stop().transition({y: 0, opacity: 1}, openSpeed);
                    $('.modal_close').on('click', function(){ ModalWindow.Close();});
                }
            });
            
            return false;
        },
        
        Close: function(){
            if(_isOpen){
                $modalWindow.stop().transition({opacity: 0}, openSpeed/2, function(){
                    _isOpen = false;
                    $(this).css({visibility: 'hidden'});
                    $modalInner.css({opacity: 0}).html('');
                });
            }
        }
    }
})();

GL_Propolife.func.ModalWindow = ModalWindow;

/* -----------------------------------------------------------------
*
    HomeSpGlobalNavigation
*
----------------------------------------------------------------- */
var HomeSpGlobalNavigation = (function(){
    
    var $spNav = $('#sp_global_nav');
    var $parents = $spNav.find('.parents');
    
    var openSpeed = 200;
    
    return{
        Init: function(){
            this.AddEvent();
        },
        
        AddEvent: function(){
            var _this = this;
            $parents.on('smarttouch', function(){
                var _hasOn = $(this).hasClass('on');
                var _elm = $(this).next('ul');
                
                if(!_hasOn){
                    $(this).addClass('on');
                    _this.Open(_elm);
                }else{
                    $(this).removeClass('on');
                    _this.Close(_elm);
                }
            });
        },
        
        Open: function(_elm){
            _elm.css({height: 'auto', visibility: 'hidden'});
            var _setH = _elm.height();
            
            _elm.css({height: 0, visibility: 'visible'}).stop().transition({height: _setH}, openSpeed, function(){
                $(this).css({height: 'auto'});
            });
        },
        
        Close: function(_elm){
            _elm.stop().animate({height: 0}, openSpeed);
        }
    }
    
})();

//--------------------------------------------------
//
//  NewsList
//
//--------------------------------------------------
var NewsList = (function(){
    
    var $news = $('.news_area');
    
    var minWidth = 1130;
    var padding = 195;
    
    return{
        SetWidth: function(){
            var _setW = (!GL_Propolife.val.isWinSizeSmallW768)? (winSize.w < minWidth)? minWidth - padding: winSize.w - padding: 'auto';
            $news.css({maxWidth: _setW});
        }
    }
    
})();

//--------------------------------------------------
//
//  ContentsLoader
//
//--------------------------------------------------
var ContentsLoader = (function(){
    
    var imgLength = 0;
    var imgLoadNum = 0;
    
    return{
        Init: function(){
            var _this = this;
            
            if(!GL_Propolife.val.isSP){
                $('#wrap').append('<p class="loading"></p>');
                $('img').each(function(){
                    var _path = $(this).attr('src');
                    imgLength ++;
                    _this.ImgLoader(_path);
                });
            }else{
                OnLoadFunction();
            }
        },
        
        ImgLoader: function(_path){
            var _img = new Image();
            _img.src = _path;
            _img.onload = function(){
                imgLoadNum ++;
                if(imgLoadNum == imgLength){
                    OnLoadFunction();
                }
            }
        }
    }
})();

//--------------------------------------------------
//
//  DisabledClick
//
//--------------------------------------------------
function DisabledClick(){
    $('#main_visual').on('contextmenu', function(){ return false;});
    $('#main_visual').on('mousedown', function(){ return false;});
}


//--------------------------------------------------
//
//  OnLoadFunction
//
//--------------------------------------------------
function OnLoadFunction(){
    $('#page_home').css({visibility: 'visible'}).transition({opacity: 1, delay: 100}, 1000, function(){
        var _menuLength = $('#btn_list').find('p').length;
        var _menuLenArray = [];
        for(var i = 0; i < _menuLength; i ++){ _menuLenArray[i] = i;}
        Shuffle(_menuLenArray);
        
        for(var i = 0; i < _menuLength; i ++){
            ShowBtnAnimation(_menuLenArray[i], i);
        }
    });
    
    $('.loading').transition({opacity: 0, scale: .9}, 200, function(){
        $(this).hide();
    });
    
    function ShowBtnAnimation(_index, _i){
        $('#btn_list').find('p').eq(_index).transition({y: 30, scale: .6}, 0).stop().transition({y: 0, scale: 1, opacity: 1, delay: 30 * _i}, 600, 'easeOutBack');
    }
}

//--------------------------------------------------
//
//  Shuffle
//
//--------------------------------------------------
function Shuffle(array) {
  var n = array.length, t, i;

  while (n) {
    i = Math.floor(Math.random() * n--);
    t = array[n];
    array[n] = array[i];
    array[i] = t;
  }

  return array;
}


function Update(){
    NewsList.SetWidth();
}

function Run(){
    DisabledClick();
    HomeGlobalSubNavigation.Init();
    // FrameAnimation.Init();
    ModalWindow.Init();
    HomeSpGlobalNavigation.Init();
    ContentsLoader.Init();
    NewsList.SetWidth();
}

//--------------------------------------------------
//
//  Add Event
//
//--------------------------------------------------
$(window).on('resize orientationchange', function(){
    winSize = {w: $(window).width(), h: $(window).height() }
    Update();
});

$(window).on('scroll', function(){
});

$(window).on('load', function(){
    Update();
});

Run();


});
})(jQuery);