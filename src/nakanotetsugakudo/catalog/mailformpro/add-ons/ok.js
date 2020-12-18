// ok.js 1.0.0
// 2014-11-14

mfp.extend.event('init',
	function(obj){
		var ok = 'okmsg_' + obj.name;
		if(!mfp.$(ok) && obj.type != 'hidden'){
			var elm = mfp.d.createElement('div');
			elm.className = "mfp_ok";
			elm.id = ok;
			elm.innerHTML = "OK";
			obj.parentNode.insertBefore(elm, obj.nextSibling);
			//obj.parentNode.appendChild(elm);
		}
	}
);
mfp.extend.event('noproblem',
	function(obj){
		var okObj = 'okmsg_' + obj.name;
		if(mfp.$(okObj) && obj.value != obj.defaultValue && obj.value != "" && mfp.Elements[obj.name].required){
			mfp.$(okObj).style.display = 'inline-block';
		}
	}
);
mfp.extend.event('problem',
	function(obj){
		var okObj = 'okmsg_' + obj.name;
		if(mfp.$(okObj)){
			mfp.$(okObj).style.display = 'none';
		}
	}
);
