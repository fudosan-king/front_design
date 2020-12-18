<!--
	// 郵便番号から住所を求めるjs
	
	//以下がフォームのHTMLから見たCGIまでのパス
	var getpostcode_cgi = "<this_url>";
	
	var postcode_form_Id = "";
	var postcode_ELM = "";
	var feedback_govm = "";
	var feedback_city = "";
	var feedback_town = "";
	function postcode_getQuery(){
		if ((httpObj.readyState == 4) && (httpObj.status == 200)) {
			var obj = document.forms[postcode_form_Id];
			var getAddress = decodeURI(httpObj.responseText);
			var getAddressGroup = new Array();
			getAddressGroup = getAddress.split(",");
			if(getAddressGroup.length == 3){
				//都道府県 getAddressGroup[0];
				//市区町村 getAddressGroup[1];
				//丁目番地 getAddressGroup[2];
				obj.elements[feedback_govm].value = getAddressGroup[0];
				obj.elements[feedback_city].value = getAddressGroup[1];
				obj.elements[feedback_town].value = getAddressGroup[2];
				mfpb(obj.elements[feedback_govm]);
				mfpb(obj.elements[feedback_city]);
				mfpb(obj.elements[feedback_town]);
			}
		}
	}
	function mfpc(formId,postcodeELM,fb_govm,fb_city,fb_town){
		var obj = document.forms[formId];
		postcode_form_Id = formId;
		postcode_ELM = postcodeELM;
		feedback_govm = fb_govm;
		feedback_city = fb_city;
		feedback_town = fb_town;
		var border = new Array("-", "－", "ー", "―", "ｰ", "‐");
		for(var i = 0; i < border.length; i++){
			obj.elements[postcodeELM].value = obj.elements[postcodeELM].value.replace(border[i], "");
		}
		if(obj.elements[postcodeELM].value == "" || !(figureChecked(obj.elements[postcodeELM].value))){
			
		}
		else{
			obj.elements[postcodeELM].value = figureChecked(obj.elements[postcodeELM].value);
			var query = obj.elements[postcodeELM].value;
			httpObj = createXMLHttpRequest();
			httpObj.onreadystatechange = postcode_getQuery;
			httpObj.open("GET",getpostcode_cgi+encodeURI(query),true);
			httpObj.send(null);
		}
		return false;
	}
	function createXMLHttp() {
		try {
			return new ActiveXObject ("Microsoft.XMLHTTP");
		}catch(e){
			try {
				return new XMLHttpRequest();
			}catch(e) {
				return null;
			}
		}
		return null;
	}
	function createXMLHttpRequest(){
		var XMLhttpObject = null;
		try{
			XMLhttpObject = new XMLHttpRequest();
		}
		catch(e){
			try{
				XMLhttpObject = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e){
				try{
					XMLhttpObject = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e){
					return null;
				}
			}
		}
		return XMLhttpObject;
	}
//-->