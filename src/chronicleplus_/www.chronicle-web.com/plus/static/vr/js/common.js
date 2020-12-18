$( document ).ready(function( $ ) {
	$( '#slider' ).sliderPro({
		width: 1000,
		height: 343,
		fade: true,
		arrows: true,
		buttons: false,
		fullScreen: true,
		shuffle: false,
		smallSize: 500,
		mediumSize: 1000,
		largeSize: 3000,
		thumbnailArrows: true,
		autoplay: true,
		thumbnailWidth: 322,
		thumbnailHeight: 95,
		breakpoints: {
			640: {
				thumbnailWidth: 150
			}
		}
	});
	$("#to_top").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "300");
		return false;
	});
});

$(function(){
   $('a[href^=#]').click(function() {

   		if($(this).prop('className') != 'dropdown-toggle'){
   //$('a[href="#pagetop"]').click(function() {
	      var speed = 400; // ミリ秒
	      var href= $(this).attr("href");
	      var target = $(href == "#" || href == "" ? 'html' : href);
	      var position = target.offset().top;
	      $('body,html').animate({scrollTop:position}, speed, 'swing');
	      return false;
	    }
   });
});

//jQery ui
      $(function() {
        $("#datepicker").datepicker();
        $("#datepicker").datepicker("option", "showOn", 'both');
        $("#datepicker").datepicker("option", "buttonImageOnly", true);
        $("#datepicker").datepicker("option", "buttonImage", '../static/vr/img/ico_calendar.png');
      });



var scrolltotop={
	//startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
	//scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
	setting: {startline:100, scrollto: 0, scrollduration:300, fadeduration:[500, 100]},
	controlHTML: '<img src="../static/vr/img/footer_arrow.png" style="width:48px; height:48px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
	controlattrs: {offsetx:25, offsety:50}, //offset of control relative to right/ bottom of window corner
	anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

	state: {isvisible:false, shouldvisible:false},

	scrollup:function(){
		if (!this.cssfixedsupport) //if control is positioned using JavaScript
			this.$control.css({opacity:0}) //hide control immediately after clicking it
		var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
		if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
			dest=jQuery('#'+dest).offset().top
		else
			dest=0
		this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
	},

	keepfixed:function(){
		var $window=jQuery(window)
		var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
		var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
		this.$control.css({left:controlx+'px', top:controly+'px'})
	},

	togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop()
		if (!this.cssfixedsupport)
			this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
		if (this.state.shouldvisible && !this.state.isvisible){
			this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
			this.state.isvisible=true
		}
		else if (this.state.shouldvisible==false && this.state.isvisible){
			this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
			this.state.isvisible=false
		}
	},

	init:function(){
		jQuery(document).ready(function($){
			var mainobj=scrolltotop
			var iebrws=document.all
			mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
			mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
			mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
				.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
				.attr({title:'Scroll Back to Top'})
				.click(function(){mainobj.scrollup(); return false})
				.appendTo('body')
			if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
				mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
			mainobj.togglecontrol()
			$('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
				mainobj.scrollup()
				return false
			})
			$(window).bind('scroll resize', function(e){
				mainobj.togglecontrol()
			})
		})
	}
}

// scrolltotop.init()



