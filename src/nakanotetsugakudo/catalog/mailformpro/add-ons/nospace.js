mfp.extend.event('check',
	function(obj){
		if(obj.name != ""){
			if((mfp.Elements[obj.name].type == "text" || mfp.Elements[obj.name].type == "textarea") && obj.value != "" && obj.value != obj.defaultValue && !obj.value.match(/[^ 　]/)){
				mfp.ExtendErrorMsg = '$name にスペースしか含まれていません。';
			}
		}
	}
);
