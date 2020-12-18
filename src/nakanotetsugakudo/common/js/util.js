/**
 * @name util.js
 * @fileOverview
 * @version 1.0
 * @author <a href="mailto:imai@4digit.jp">Kotaro Imai</a> @ <a href="http://hokypoky.info">HOKYPOKY.</a>
 * @description
 * <p>JavaScript Utility Library</p>
 * <p>(c) FOURDIGIT Inc. Licensed <a href="http://ja.wikipedia.org/wiki/GNU_General_Public_License">GNU General Public License</a>.</p>
 */
if(!Fourdigit) {
	/**
	 * @namespace Fourdigit
	 * @description
	 * <p>namespace:Fourdigit</p>
	 * <p>これは他のクラスなどと名前がかぶらないようにするためのものです。</p>
	 */
	var Fourdigit = {}
}
(function($) {
	/**
	 * @class Utility Core Class
	 * @description
	 * <p>FOURDIGIT Inc jQuery Plugins Core Class</p>
	 * <p>ここは内部的に利用する関数が主です。</p>
	 */
	Fourdigit.core = $.extend(
	/** @lends Fourdigit.core */
	{
		/**
		 * 対象のリンクをポップアップする
		 * @function
		 * @param {String}	src ポップアップ先のURL
		 * @param {String}	windowName ウィンドウ名
		 * @param {Boolean}	status メニューバーの有無
		 */
		popWindow: function(src,windowName,status) {
			var _href		= (src ? src : "");
			var _isPop		= (status != null);
			var _windowName = (windowName ? windowName : "");
			if(_isPop){
				var _features = "";
				status.width?		_features += ",width="+Math.min(status.width, screen.availWidth):"";
				status.height?		_features += ",height="+Math.min(status.height, screen.availHeight-50):"";
				status.left?		_features += ",left="+status.left:"";
				status.top?			_features += ",top="+status.top:"";
				status.menubar?		_features += ",menubar="+status.menubar:
									_features += ",menubar=no";
				status.toolbar?		_features += ",toolbar="+status.toolbar:
									_features += ",toolbar=no";
				status.location?	_features += ",location="+status.location:
									_features += ",location=no";
				status.status?		_features += ",status="+status.status:
									_features += ",location=no";
				status.resizable?	_features += ",resizable="+status.resizable:
									_features += ",resizable=yes";
				status.scrollbars?	_features += ",scrollbars="+status.scrollbars:
									_features += ",scrollbars=yes";
				_features = _features.replace(/^,/,"");
				void(window.open(_href, _windowName, _features));
			} else {
				void(window.open(_href, _windowName, null));
			}
		},
		/**
		 * ExternalInterface用
		 * @return {DOMObject}
		 */
		AS: function(str) { return ($.browser.msie? window[str]: document[str]); },
		/**
		 * 対象の要素を含んでいるかどうかを判別
		 * @function
		 * @param {String}	expr CSS形式での対象要素
		 * @return {Boolean}
		 * @example
		 * if(jQuery.hasElem("#index")){
		 *	alert("#indexがあります。");
		 * }else{
		 *	alert("#indexがありません。");
		 * }
		 */
		hasElem: function (expr) { return $(expr)[0]; },
		/**
		 * easyOver用イベントハンドラクラス
		 * @class
		 */
		easyOver: {
			/**
			 * mouseover時のハンドラ
			 * @function
			 * @param {Event}	マウスオーバーイベント
			 */
			mouseoverHandler: function (e) {
				this.src = $(this).attr('hsrc');
			},
			/**
			 * mouseout時のハンドラ
			 * @function
			 * @param {Event}	マウスオーバーイベント
			 */
			mouseoutHandler: function (e) {
				this.src = $(this).attr('dsrc');
			}
		}
	});
	/**
	 * @class Utility Utility Class
	 * @description
	 * <p>FOURDIGIT Inc jQuery Plugins Utility Class</p>
	 * <p>ここはjQueryオブジェクトに対して機能追加されるプラグイン関数部分です。</p>
	 */
	Fourdigit.util = $.fn.extend(
	/** @lends Fourdigit.util */
	{
		/**
		 * IE6/5+ winXP SP2 KB912945の修正による白枠対策
		 * @function
		 * @return {jQuery}
		 * @example	
		 * jQuery("object, embed").enableFlash();
		 */
		enableFlash: function(){
			if($.browser.msie){
				this.each(function () {
					this.removeAttribute('data');
					this.outerHTML += "";
				});
			}
			return this;
		},
		/**
		 * 対象要素のイメージをオーバーした際に画像のパスをfname.extからfname_ov.extにする
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("img.ahover, .ahoverArea img").easyOver();
		 */
		//easyOver: function(){
//			var preImgArr = new Array();
//			this.each(function(){
//				var src = this.src;
//				var isov = src.substring(0,src.lastIndexOf('.'));
//				if( !/_(ov|on|off)$/.test(isov) ) {
//					var ftype = src.substring(src.lastIndexOf('.'), src.length);
//					var hsrc = src.replace(ftype, '_ov'+ftype);
//					var dsrc = src;
//					preImgArr.push(new Image());
//					preImgArr[preImgArr.length-1].src = hsrc;
//					$(this)
//						.attr('hsrc', hsrc)
//						.attr('dsrc', dsrc)
//						.bind("mouseover",$.easyOver.mouseoverHandler)
//						.bind("mouseout",$.easyOver.mouseoutHandler)
//					.end();
//				}
//			});
//			return this;
//		},
		/**
		 * 対象要素のイメージのeasyOverを削除
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("#trigger").click(function(){
		 * 	jQuery(this).find("img.ahover").removeEasyOver()
		 * });
		 */
		removeEasyOver: function (){
			this.each(function(){
				$(this)
					.unbind("mouseover",$.easyOver.mouseoverHandler)
					.unbind("mouseout",$.easyOver.mouseoutHandler)
				.end();
			});
			return this;
		},
		/**
		 * 対象要素のリンクをポップアップにする
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("a.commonPop").easyPop();
		 * <strong>HTML</strong>
		 * きちんとした定義
		 * &lt;a href="someLink" class="commonPop" target="_blank" rel="width:500,height:300"%gt;SOME LINK%lt;a%gt;
		 * 略 - widthとheightしか指定できません
		 * &lt;a href="someLink" class="commonPop" target="_blank" rel="500,300"%gt;SOME LINK%lt;a%gt;
		 */
		easyPop: function(){
			this.each(function(){
				this.target = "";
				var rel = {};
				if(!/:/.test(this.rel)){
					var relArr = this.rel.split(",");
					if(relArr[1]){
						rel["width"] = relArr[0];
						rel["height"] = relArr[1];
					}else{
						rel["width"] = relArr[0];
						rel["height"] = relArr[0];					
					}
				}else{
					if(!this.rel) {
						rel = { width : "750", height : "800" }
					}else{
						var relArr = this.rel.split(",");
						if(this.rel.split(":")){
							for (var i = 0; i < relArr.length; i++) {
								var _key = relArr[i].split(":")[0];
								var _val = relArr[i].split(":")[1];
								rel[_key] = _val;
							}
						}
					}				
				}
				$(this).click(function(){
					var wname = (rel["wname"]? rel["wname"]: "");
					$.popWindow(this.href,wname,rel);
					return false;
				});
			})
			return this;
		},
		/**
		 * 対象要素のリンクもGoogleAnalyticsに情報を送る
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("a").blankLogToGoogle();
		 * jQuery("a['target'='_blank']").blankLogToGoogle();
		 */
		blankLogToGoogle: function() {
			this.each(function(){
				var expr = new RegExp("(.*)://(/?)(.*?)/");
				var h = this.href;
				var hArr = h.match(expr);
				var l = location.href;
				var lArr = l.match(expr);
				if(hArr[0] != lArr[0]) {
					var str = h.replace(/\?/g, "%3F");
					$(this).click(
						function(){
							pageTracker._trackPageview('/blank/?'+str);
						}
					);
				}
			});
			return this;
		},
		/**
		 * 対象要素がページ内リンクだった場合、イージングでスクロールするようにする
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("a[href*=#]").smoothScroll();
		 */
		smoothScroll: function (speed) {
			var pagePath = /\?/.test(location.href)? location.href.split('?')[0]:
			               /#/.test(location.href)? location.href.split('#')[0]:
			               location.href;
			var scrollInt;
			this.each(function(){
				var actX, actY, tarY = 0, tarX = 0;
				speed = (!speed? 6: speed == "fast"? 3:	speed == "normal"? 6: speed == "slow"? 12: speed);
				var setScroll = function (tarX,tarY) {
					actX += (tarX - actX) / parseInt(speed);
					actY += (tarY - actY) / parseInt(speed);
					if(Math.abs(tarX - actX) < 1 && Math.abs(tarY - actY) < 1){
						clearInterval(scrollInt);
						scrollTo(Math.round(tarX),Math.round(tarY));
					}else {
						scrollTo( Math.round(actX), Math.round(actY));
					}
				}
				var anc = this.href.split('#')[1];
				if(!anc) return;
				if( /#/.test(this.href)  && this.href.match(pagePath) && $('#'+anc)[0] ){
					$(this).click(function (){
						var tarObj = $('#'+anc);
						tarX = ($(document).width() > tarObj.position().left + $(window).width())
							? tarObj.position().left
							: $(document).width() - $(window).width();
						tarY = ($(document).height() > tarObj.position().top + $(window).height())
							? tarObj.position().top
							: $(document).height() - $(window).height();
						actX = $(document).scrollLeft();
					 	actY = $(document).scrollTop();
						clearInterval(scrollInt);
						scrollInt = setInterval(function(){setScroll(tarX,tarY)}, 20);
						return false;
					});
				}
			});
			//stop when mousewheel
			var wheel = function () {clearInterval(scrollInt);}
			if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
			window.onmousewheel = document.onmousewheel = wheel;
			return this;
		},
		/**
		 * 対象要素をスクロールに追従するようにする(CSSでabsoluteにしている必要あり)
		 * @function
		 * @param {String}	stopper	スクロールを止める要素のid名
		 * @param {Number|String}	speed	スクロールのスピード。
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("#fix").fixPosition();	// normalと同じ
		 * jQuery("#fix").fixPosition("slow");
		 * jQuery("#fix").fixPosition("normal");
		 * jQuery("#fix").fixPosition("fast");
		 * jQuery("#fix").fixPosition(12);	// slowと同じ
		 * jQuery("#fix").fixPosition(6);	// normalと同じ
		 * jQuery("#fix").fixPosition(3);	// fastと同じ
		 * jQuery("#fix").fixPosition(100);	// すごく遅いのでオススメしない
		 */
		fixPosition: function (stopper,speed) {
			speed = (!speed? 6: speed == "fast"? 3:	speed == "normal"? 6: speed == "slow"? 12: speed);
			var fixScrollTop     = function () { return $(document).scrollTop()};
			var fixScrollBottom  = function () { return $(document).scrollTop()+$(document).height()};
			this.each(function(){
				var obj = this;
				var offsetY		= function(){ return $(obj).offset().top };
				var posY		= function(){ return $(obj).position().top };
				var boxHeight	= $(obj).height();
				var topLimit	= posY();
				var bottomLimit;
				var fix_idle	= 10;
				var intervalID;
				var easeScroll = function (stopper) {
					if (fix_idle <= 0) {
						var bottom = offsetY() + boxHeight;
						var tar = Math.max(fixScrollTop(), topLimit);
						if ( stopper && ( tar + boxHeight ) > bottomLimit ) {
							tar =  bottomLimit -　boxHeight;
						}
						var nPos = (tar - offsetY()) / speed + posY();
						obj.style.top = nPos + 'px';
					} else {fix_idle--; }
				};
				if(document.getElementById(stopper)){
					var stopObj = document.getElementById(stopper);
					bottomLimit = $(stopObj).position().top;
					intervalID = setInterval(function(){easeScroll("stopper")}, 20);
				}else {
					intervalID = setInterval(function(){easeScroll()}, 20);
				}
				/**
				 * @function
				 * @ignore
				 */
				document.onscroll = function() { fix_idle = 10; }
			});
			return this;
		},
		/**
		 * openerが存在したらopenerのURLを、存在しなかったら自身のURLを対象要素のhref変える。
		 * @function
		 * @return {jQuery}	jQueryオブジェクトを返すのでそのままチェーンします。
		 * @example
		 * jQuery("a.moveOpener").moveOpener();
		 */
		moveOpener: function(pFile){
			this.each(function(){
				$.moveOpener(this.href);
			});
			return this;
		}
	});
})(jQuery)

