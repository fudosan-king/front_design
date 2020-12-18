mfp.extend.event('blur',
	function(obj){
		if(obj.value == obj.defaultValue || obj.value == "" && (obj.type == "email" || obj.type == "text" || obj.type == "textarea")){
			obj.value = obj.defaultValue;
			obj.style.color = '#CCC';
		}
	}
);
mfp.extend.event('focus',
	function(obj){
		if(obj.value == obj.defaultValue && (obj.type == "email" || obj.type == "text" || obj.type == "textarea")){
			obj.value = "";
			obj.style.color = '#000';
		}
	}
);

mfp.extend.event('send',
	function(){
		for(var i=0;i<mfp.Mfp.length;i++){
			var elm = mfp.Mfp.elements[i];
			if((elm.type == 'text' || elm.type == 'textarea' || elm.type == 'email' || elm.type == 'number' || elm.type == 'tel') && elm.value == elm.defaultValue){
				elm.value = '';
			};
		};
	}
);
