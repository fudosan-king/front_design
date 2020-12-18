// 郵便番号からの住所入力機能
// prefcode.js 1.0.0 / 2013-01-21
var postcodeAdvancedToken = null;
var postcodeAdvancedBefoeToken = null;
var postcodeAdvancedJson = null;
var postcodeAdvancedPage = 10;
var postcodeAdvancedCurrentPage = 0;
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-address')){
			var elm = mfp.d.createElement('div');
			elm.className = 'prefcodeWrapper';
			var elmChild = mfp.d.createElement('div');
			elmChild.className = 'prefcodeResult';
			elmChild.id = obj.id + '_result';
			elm.appendChild(elmChild);
			obj.parentNode.appendChild(elm);
			mfp.add(obj,"keyup",function(){
				clearTimeout(postcodeAdvancedToken);
				if(obj.value != "" && obj.value != postcodeAdvancedBefoeToken){
					//postcodeAdvancedBefoeToken = obj.value;
					postcodeAdvancedToken = setTimeout(function(){
						var CallBackElements = obj.getAttribute('data-address').split(',');
						var s = document.createElement("script");
						var u = '?';
						if(mfp.$('mfpjs').src.indexOf('?') > -1) u = '&';
						if(!CallBackElements[3]){
							CallBackElements[3] = obj.name;
						}
						s.src = mfp.$('mfpjs').src + u + 'addon=prefcodeadv/prefcode.js&q=' + encodeURIComponent(obj.value)
																+ '&a1=' + encodeURI(CallBackElements[0])
																+ '&a2=' + encodeURI(CallBackElements[1])
																+ '&a3=' + encodeURI(CallBackElements[2])
																+ '&id=' + obj.id
																+ '&postcode='+encodeURI(CallBackElements[3]);
						postcodeAdvancedBefoeToken = obj.value;
						document.body.appendChild(s);
						mfp.$(obj.id+'_result').innerHTML = '<div class="prefLoading"></div>';
						mfp.$(obj.id+'_result').style.display = 'block';
					},500);
				}
			});
		}
	}
);
function prefcodeCallback(json){
	postcodeAdvancedJson = json;
	var obj = document.getElementById(json["id"]+'_result');
	if(json["result"].length > 0){
		obj.innerHTML = "";
		var i = 0;
		postcodeAdvancedCurrentPage = 0;
		for(i=0;i<json["result"].length && i < postcodeAdvancedPage;i++){
			var elm = mfp.d.createElement('div');
			var code1 = json["result"][i][0].substring(0,3);
			var code2 = json["result"][i][0].substring(3,7);
			elm.innerHTML = code1+'-'+code2+' '+ json["result"][i][1] + json["result"][i][2] + json["result"][i][3];
			var postcode = json["result"][i];
			var postcodejson = json;
			var resultObj = obj;
			elm.setAttribute("data-num",i);
			elm.onclick = function(){
				mfp.$(postcodeAdvancedJson["id"]).value = postcodeAdvancedJson["result"][this.getAttribute("data-num")][0];
				callbackMFPZip(this.getAttribute("data-num"));
				resultObj.style.display = "none";
			}
			obj.appendChild(elm);
		}
		if(i < json["result"].length){
			var elm = mfp.d.createElement('div');
			elm.innerHTML = '次の候補を見る';
			elm.className = 'prefcodeNext';
			elm.onclick = prefcodeNextPage;
			obj.appendChild(elm);
		}
		obj.style.display = "block";
	}
	else {
		obj.innerHTML = "候補が見つかりませんでした";
		obj.style.display = "block";
	}
}
function prefcodeNextPage(){
	postcodeAdvancedCurrentPage++;
	var obj = document.getElementById(postcodeAdvancedJson["id"]+'_result');
	obj.innerHTML = "";
	var i = 0;
	for(i=0;(i+(postcodeAdvancedCurrentPage*postcodeAdvancedPage))<postcodeAdvancedJson["result"].length && i < postcodeAdvancedPage;i++){
		var n = i+(postcodeAdvancedCurrentPage*postcodeAdvancedPage);
		var elm = mfp.d.createElement('div');
		elm.innerHTML = postcodeAdvancedJson["result"][n][0] +' '+ postcodeAdvancedJson["result"][n][1] + postcodeAdvancedJson["result"][n][2] + postcodeAdvancedJson["result"][n][3];
		var resultObj = obj;
		elm.setAttribute("data-num",n);
		elm.onclick = function(){
			mfp.$(postcodeAdvancedJson["id"]).value = postcodeAdvancedJson["result"][this.getAttribute("data-num")][0];
			callbackMFPZip(this.getAttribute("data-num"));
			resultObj.style.display = "none";
		}
		obj.appendChild(elm);
	}
	if((n+postcodeAdvancedPage) < postcodeAdvancedJson["result"].length){
		var elm = mfp.d.createElement('div');
		elm.innerHTML = '次の候補を見る';
		elm.className = 'prefcodeNext';
		elm.onclick = prefcodeNextPage;
		obj.appendChild(elm);
	}
}
function callbackMFPZip(num){
	var a1,a2,a3,b1,b2,b3,zip;
	a1 = postcodeAdvancedJson["add1"];
	a2 = postcodeAdvancedJson["add2"];
	a3 = postcodeAdvancedJson["add3"];
	zip = postcodeAdvancedJson["zip"];
	b1 = postcodeAdvancedJson["result"][num][1];
	b2 = postcodeAdvancedJson["result"][num][2];
	b3 = postcodeAdvancedJson["result"][num][3];
	//postcodeAdvancedJson["result"][num]
	mfp.$(mfp.Elements[zip].group[0]).value = postcodeAdvancedJson["result"][num][0];
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
	mfp.check(mfp.$(mfp.Elements[zip].group[0]));
	mfp.check(mfp.$(mfp.Elements[a1].group[0]));
	mfp.check(mfp.$(mfp.Elements[a2].group[0]));
	mfp.check(mfp.$(mfp.Elements[a3].group[0]));
}
