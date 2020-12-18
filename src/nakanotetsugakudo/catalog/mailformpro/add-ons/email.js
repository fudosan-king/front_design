mfp.extend.event('check',
	function(obj){
		if(obj.name != ""){
			if(mfp.Elements[obj.name].type == "email" && obj.value != "" && obj.value != obj.defaultValue){
				if(!obj.value.match(/^[A-Za-z0-9]+[\w-]+@[\w\.-]+\.\w{2,}$/))
					mfp.ExtendErrorMsg = '$name の形式が正しくありません。';
			}
		}
	}
);
