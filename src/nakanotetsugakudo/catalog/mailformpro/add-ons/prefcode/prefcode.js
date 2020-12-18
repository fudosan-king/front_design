// 郵便番号からの住所入力機能
// prefcode.js 1.0.0 / 2013-01-21
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-address')){
			mfp.add(obj,"keyup",function(){
				var CallBackElements = obj.getAttribute('data-address').split(',');
				if(obj.value.length > 6){
					obj.value = obj.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
						return String.fromCharCode(s.charCodeAt(0) - 65248);
					});
					var val = obj.value;
					var border = new Array("-", "－", "ー", "―", "ｰ", "‐");
					for(var i=0;i<border.length;i++)
						val = val.replace(border[i], "");
					if(!(val.match(/[^0-9]+/)) && val.length > 6){
						var s = document.createElement("script");
						var u = '?';
						if(mfp.$('mfpjs').src.indexOf('?') > -1) u = '&';
						s.src = mfp.$('mfpjs').src + u + 'addon=prefcode/prefcode.js&zip=' + val
																+ '&a1=' + encodeURI(CallBackElements[0])
																+ '&a2=' + encodeURI(CallBackElements[1])
																+ '&a3=' + encodeURI(CallBackElements[2]);
						document.body.appendChild(s);
					};
				};
			});
		}
	}
);
mfp.extend.event('blur',
	function(obj){
		if(obj.name){
			if(obj.getAttribute('data-address') && obj.value != ""){
				var CallBackElements = obj.getAttribute('data-address').split(',');
				obj.value = obj.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
					return String.fromCharCode(s.charCodeAt(0) - 65248);
				});
				var val = obj.value;
				var border = new Array("-", "－", "ー", "―", "ｰ", "‐");
				for(var i=0;i<border.length;i++)
					val = val.replace(border[i], "");
				if(!(val.match(/[^0-9]+/)) && val.length > 6){
					var s = document.createElement("script");
					var u = '?';
					if(mfp.$('mfpjs').src.indexOf('?') > -1) u = '&';
					s.src = mfp.$('mfpjs').src + u + 'addon=prefcode/prefcode.js&zip=' + val
															+ '&a1=' + encodeURI(CallBackElements[0])
															+ '&a2=' + encodeURI(CallBackElements[1])
															+ '&a3=' + encodeURI(CallBackElements[2]);
					document.body.appendChild(s);
				}
			}
		}
	}
);

function callbackMFPZip(stat,a1,a2,a3,b1,b2,b3){
	if(stat){
		if(a1 == a2 && a2 == a3)
			mfp.$(mfp.Elements[a1].group[0]).value = b1 + b2 + b3
		else if(a1 == a2){
			mfp.$(mfp.Elements[a1].group[0]).value = b1 + b2;
			mfp.$(mfp.Elements[a2].group[0]).value = b3;
		}
		else if(a2 == a3){
			mfp.$(mfp.Elements[a1].group[0]).value = b1;
			mfp.$(mfp.Elements[a2].group[0]).value = b2 + b3;
		}
		else {
			mfp.$(mfp.Elements[a1].group[0]).value = b1; //都道府県 b1;
			mfp.$(mfp.Elements[a2].group[0]).value = b2; //市区町村 b2;
			mfp.$(mfp.Elements[a3].group[0]).value = b3; //丁目番地 b3;
		}
		mfp.check(mfp.$(mfp.Elements[a1].group[0]));
		mfp.check(mfp.$(mfp.Elements[a2].group[0]));
		mfp.check(mfp.$(mfp.Elements[a3].group[0]));
	}
}
