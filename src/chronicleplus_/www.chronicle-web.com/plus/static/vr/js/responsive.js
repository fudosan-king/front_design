var actionPcEveryTime 		= new ActionDevice();
var actionTbEveryTime 		= new ActionDevice();
var actionSpEveryTime 		= new ActionDevice();
var actionPcEveryOnceTime 	= new ActionDevice();
var actionTbEveryOnceTime 	= new ActionDevice();
var actionSpEveryOnceTime 	= new ActionDevice();
var actionPcOnlyOnceTime 	= new ActionDevice();
var actionTbOnlyOnceTime 	= new ActionDevice();
var actionSpOnlyOnceTime 	= new ActionDevice();

var now = null;

actionSpOnlyOnceTime.init = function() {
	window.addEventListener('load', function(){ setTimeout(doScroll, 100); },false);
	setTimeout(doScroll, 100);
}

$(function(){
	setting();
});

function setting(){
	var _flgPc = false;
	var _flgTab = false;
	var _flgSp = false;

	var _flgPcOnce = false;
	var _flgTabOnce = false;
	var _flgSpOnce = false;

	deviceSet();

	now = $('body').attr('data-device');

	if(now == 'pc') {
		actionPcEveryTime.actionAll();
		actionPcEveryOnceTime.actionAll();
		actionPcOnlyOnceTime.actionAll();
		_flgPcOnce = true;
		_flgPc = true;
	}
	else if(now == 'tab') {
		actionTbEveryTime.actionAll();
		actionTbEveryOnceTime.actionAll();
		actionTbOnlyOnceTime.actionAll();
		_flgTabOnce = true;
		_flgTab = true;
	}
	else if(now == 'sp') {
		actionSpEveryTime.actionAll();
		actionSpEveryOnceTime.actionAll();
		actionSpOnlyOnceTime.actionAll();
		_flgSpOnce = true;
		_flgSp = true;
	}

	$(window).resize(function() {
		deviceSet();
		now = $('body').attr('data-device');

		if(now == 'pc') {
			actionPcEveryTime.actionAll();
		}
		else if(now == 'tab') {
			actionTbEveryTime.actionAll();
		}
		else if(now == 'sp') {
			actionSpEveryTime.actionAll();
		}

		//リサイズ1回のみ処理
		if(!_flgPc && now == 'pc') {
			actionPcEveryOnceTime.actionAll();
			_flgPc = true;
			_flgSp = false;
			_flgTab = false;
		}
		else if(!_flgTab && now == 'tab') {
			actionTbEveryOnceTime.actionAll();
			_flgTab = true;
			_flgSp = false;
			_flgPc = false;
		}
		else if(!_flgSp && now == 'sp') {
			actionSpEveryOnceTime.actionAll();
			_flgSp = true;
			_flgPc = false;
			_flgTab = false;
		}

		//1回のみ処理
		if(!_flgPcOnce && !_flgPc && now == 'pc') {
			actionPcOnlyOnceTime.actionAll();
			_flgPcOnce = true;
		}
		else if(!_flgTabOnce && !_flgTab && now == 'tab') {
			actionTbOnlyOnceTime.actionAll();
			_flgTabOnce = true;
		}
		else if(!_flgSpOnce && !_flgSp && now == 'sp') {
			actionSpOnlyOnceTime.actionAll();
			_flgSpOnce = true;
		}
	});
}

function ActionSingle(prop) {
	if(now == 'pc') {
		if(actionPcEveryTime[prop] != undefined) actionPcEveryTime[prop]();
		if(actionPcEveryOnceTime[prop] != undefined) actionPcEveryOnceTime[prop]();
		if(actionPcOnlyOnceTime[prop] != undefined) actionPcOnlyOnceTime[prop]();
	}
	else if(now == 'tab') {
		if(actionTbEveryTime[prop] != undefined) actionTbEveryTime[prop]();
		if(actionTbEveryOnceTime[prop] != undefined) actionTbEveryOnceTime[prop]();
		if(actionTbOnlyOnceTime[prop] != undefined) actionTbOnlyOnceTime[prop]();
	}
	else if(now == 'sp') {
		if(actionSpEveryTime[prop] != undefined) actionSpEveryTime[prop]();
		if(actionSpEveryOnceTime[prop] != undefined) actionSpEveryOnceTime[prop]();
		if(actionSpOnlyOnceTime[prop] != undefined) actionSpOnlyOnceTime[prop]();
	}
}

function ActionDevice() {
	this.actionAll = function() {
		for(var prop in this) {
			if(prop == 'actionAll') continue;
			this[prop]();
		}
	}
}

function doScroll() {
	if (window.pageYOffset === 0) { window.scrollTo(0,1); }
}

function deviceSet() {
	var _w = viewport().width;
	var $body = $('body');
	if(_w > 1024) $body.attr('data-device', 'pc');
	else if(_w > 640) $body.attr('data-device', 'tab');
	else $body.attr('data-device', 'sp');
}

function viewport() {
	var e = window, a = 'inner';
	if (!('innerWidth' in window )) {
		 a = 'client';
		 e = document.documentElement || document.body;
		}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}
