// setValue.js 1.0.0
// 2015-03-05

mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-value')){
			obj.value = obj.getAttribute('data-value');
		}
	}
);
