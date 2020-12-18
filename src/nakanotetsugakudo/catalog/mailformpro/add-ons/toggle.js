var mfpToggleObjects = [];
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-toggle')){
			mfpToggleObjects.push(obj.id);
		}
	}
);
function mfpToggle(){
	for(var i=mfpToggleObjects.length-1;i>=0;i--){
		var obj = mfp.$(mfpToggleObjects[i]);
		var target = mfp.$(obj.getAttribute('data-toggle'));
		var hide = true;
		var value = obj.getAttribute('data-toggle-value');
		if(obj.getAttribute('data-toggle-hide')){
			hide = false;
		};
		var block = 'block';
		if(target.tagName == 'SPAN'){
			block = 'inline-block';
		};
		if(obj.type == 'checkbox' || obj.type == 'radio'){
			if(obj.checked){
				mfp.sw(false,obj.getAttribute('data-toggle'),hide,block);
			}
			else {
				mfp.sw(true,obj.getAttribute('data-toggle'),hide,block);
			};
		}
		else {
			if(obj.value == value){
				mfp.sw(false,obj.getAttribute('data-toggle'),hide,block);
			}
			else if(obj.value != obj.defaultValue && !value){
				mfp.sw(false,obj.getAttribute('data-toggle'),hide,block);
			}
			else {
				mfp.sw(true,obj.getAttribute('data-toggle'),hide,block);
			};
		};
	};
};
mfp.extend.event('ready',
	function(obj){
		mfpToggle();
	}
);

mfp.extend.event('blur',
	function(obj){
		mfpToggle();
	}
);

mfp.extend.event('change',
	function(obj){
		mfpToggle();
	}
);
