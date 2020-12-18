//
// pricefactor.js 1.0.0 / 2015-04-23
//

mfpConfigs['priceFactor'] = 'priceFactor';
function mfp_priceFactor(){
	if(mfp.$(mfpConfigs['priceFactor'])){
		var fact = parseInt(mfp.$(mfpConfigs['priceFactor']).value);
		mfp.Price *= fact;
	};
};

mfp.extend.event('calc',
	function(){
		mfp_priceFactor();
	}
);
mfp.extend.event('startup',
	function(){
		mfp_priceFactor();
	}
);
