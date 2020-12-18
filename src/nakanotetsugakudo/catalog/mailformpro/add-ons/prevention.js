mfp.extend.event('check',
	function(obj){
		if(obj.name){
			if(mfp.Elements[obj.name].type == "email"){
				if(obj.value.match(/example/i))
					mfp.ExtendErrorMsg = "exampleという文字を含める事はできません。";
				else if(obj.value.match(/aaa/i))
					mfp.ExtendErrorMsg = "aaaという文字を含める事はできません。";
				else if(obj.value.match(/abc/i))
					mfp.ExtendErrorMsg = "abcという文字を含める事はできません。";
				else if(obj.value.match(/test/i))
					mfp.ExtendErrorMsg = "testという文字を含める事はできません。";
				else if(obj.value.match(/^a\@/i))
					mfp.ExtendErrorMsg = "a@という文字を含める事はできません。";
				else if(obj.value.match(/^aa\@/i))
					mfp.ExtendErrorMsg = "aa@という文字を含める事はできません。";
			}
		}
	}
);
