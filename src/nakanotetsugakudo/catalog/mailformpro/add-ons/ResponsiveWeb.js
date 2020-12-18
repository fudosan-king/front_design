// Responsive Web add-on
// ver1.0.0 - 2013/01/22

mfp.extend.event('startup',
	function(){
		var ua = navigator.userAgent;
		if(ua.indexOf('Mobile') > -1 && ua.indexOf('iPad') == -1){
			mfpConfigs['ConfirmationMode'] = 1;
			mfpConfigs['SizeAjustPx'] = 3;
			mfpConfigs['LoadingScreen'] = false;
		}
	}
);
