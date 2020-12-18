<!--
	//mailform pro include javascript ver2.1.3
	var mfp_onload_mode = "jquery";
	var mfpObj = document.forms["mailform"];
	var mfp_emailaddress;
	var mailformObj = new Object();
	var getQueryObj = new Object();
	var imagetag_confirm = '<img src="images/mfp_confirm.png" width="300" height="40" alt="CONFIRM" />';
	var imagepath_send = 'images/mfp_send.gif';
	var imagepath_cancel = 'images/mfp_cancel.gif';
	var confirm_time_val = 0;
	var mfp_phase_input_step = null;
	var mfp_phase_input_currentId = null;
	
	// color setting
	var mfp_tr_color = '#E8EEF9';
	var mfp_tr_color_over = '#FFEEEE';
	var mfp_input_text_color_default = '#000000';
	var mfp_input_text_color_error = '#FF0000';
	var mfp_input_background_color_default = '#FFFFFF';
	var mfp_input_background_color_error = '#FFEEEE';
	var mfp_input_background_color_active = '#FFF5D6';
	var mfp_input_border_color_active = '#FF9900';
	//
	
	var mfpWidth, mfpHeight, mfpTop, mfpLeft;
	var alert_display = false;
	var price_name = mfp_langObj[mfp_lang][10];
	mailformObj.imageTH = true;
	mailformObj = "";
	var focuselements;
	function mfp_calc(){
		var obj = document.forms["mailform"];
		var addcost = 0;
		var addcost_spliter = new Array();
		var mfp_product_id = null;
		var paypalArrs = new Array();
		for(i=0;i<obj.length;i++){
			if(obj.elements[i].id.indexOf('price_') > -1){
				addcost_spliter = obj.elements[i].id.split('_');
				mfp_product_id = addcost_spliter[1];
				mfp_product_price = addcost_spliter[2];
				mfp_product_qty = 0;
				if(addcost_spliter[2] != undefined){
					if(obj.elements[i].type == "text" && !(obj.elements[i].value.match(/[^0-9]+/)) && obj.elements[i].value != ""){
						addcost += parseInt(addcost_spliter[2]) * parseInt(obj.elements[i].value);
						mfp_product_qty = parseInt(obj.elements[i].value);
					}
					else if((obj.elements[i].type == "checkbox" || obj.elements[i].type == "radio") && obj.elements[i].checked){
						addcost += parseInt(addcost_spliter[2]);
						mfp_product_qty = 1;
					}
					else if(obj.elements[i].type == "select-one" && obj.elements[i].value != ""){
						addcost += parseInt(addcost_spliter[2]) * parseInt(obj.elements[i].value);
						mfp_product_qty = parseInt(obj.elements[i].value);
					}
					var paypalArr = new Array(obj.elements[i].name,mfp_product_id,mfp_product_price,mfp_product_qty);
					paypalArrs.push(paypalArr.join('<>'));
				}
			}
		}
		
		// PayPal flow
		if(document.getElementById('payment_paypal')){
			if(document.getElementById('payment_paypal').checked)
				document.getElementById('paypal_cart').value = paypalArrs.join('<->');
			else
				document.getElementById('paypal_cart').value = "";
			//alert(document.getElementById('paypal_cart').value);
		}
		
		if(obj.elements["price"])
			obj.elements["price"].value = addcost + mfp_langObj[mfp_lang][11];
		if(document.getElementById("mfp_price"))
			document.getElementById("mfp_price").innerHTML = addcost + mfp_langObj[mfp_lang][11];
	}
	function mfp_disp(objId,dispMsg){
		if(document.getElementById(objId)){
			document.getElementById(objId).innerHTML = dispMsg;
			document.getElementById(objId).style.display = "block";
		}
	}
	function mfp_hide(){
		document.getElementById("mailform").style.display = "none";
		if(document.getElementById("mfp_closed"))
			document.getElementById("mfp_closed").style.display = "block";
	}
	function mfp_SEPlay(sename){
		var url = 'commons/se.swf?filename='+sename;
		var width = 1;
		var height = 1;
		str = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="'+width+'" height="'+height+'">';
		str += '<param name="movie" value="'+url+'">';
		str += '<param name="quality" value="high">';
		str += '<embed src="'+url+'" quality="high" pluginspage="http://www.macromedia.com/jp/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'">';
		str += '</embed>';
		str += '</object>';
		if(document.getElementById("mfp_se"))
			document.getElementById("mfp_se").innerHTML = str;
	}
	function mfpb(obj) {
		if((obj.value == obj.defaultValue || obj.value == "") && (obj.type == "text" || obj.type == "textarea")){
			obj.value = obj.defaultValue;
		}
		keepField(obj.form.id);
		lostfocus(obj);
		mfp_checkelement(obj);
		mfp_calc();
	}
	function mfpf(obj) {
		if(obj.value == obj.defaultValue && (obj.type == "text" || obj.type == "textarea")){
			obj.value = "";
			obj.style.color = mfp_input_text_color_default;
		}
		activefocus(obj);
		elements_set(obj);
		mfp_calc();
	}
	function mfpclick(obj) {
		if(obj.type == "radio" || obj.type == "checkbox") {
			keepField(obj.form.id);
			lostfocus(obj);
			mfp_checkelement(obj);
		}
		mfp_calc();
	}
	function elements_set(obj){
		focuselements = obj;
	}
	function falsesubmit(obj){
		var flag;
		var movefocus = null;
		for(i=0;i<obj.length;i++){
			if(flag && obj.elements[i].type != "hidden"){
				movefocus = obj.elements[i];
				flag = 0;
			}
			if(obj.elements[i] == focuselements){
				flag = 1;
			}
		}
		if(movefocus != null)
			movefocus.focus();
		return false;
	}
	function errorElementsStyle(obj){
		if(obj.type != "button" && obj.type != "checkbox" && obj.type != "radio"){
			obj.style.backgroundColor = mfp_input_background_color_error;
			obj.style.color = mfp_input_text_color_error;
		}
	}
	function greenElementsStyle(obj){
		if(obj.type != "button" && obj.type != "checkbox" && obj.type != "radio"){
			obj.style.backgroundColor = mfp_input_background_color_default;
			obj.style.color = mfp_input_text_color_default;
		}
	}
	function mfp_checkelement(obj){
		var elementType = obj.type;
		var elements_infos = obj.name.split(document.forms["mailform"].elements["must_id"].value);
		var errortext = elements_infos[0];
		var must_maxed = elements_infos[1];
		var must_flag = obj.name.indexOf(document.forms["mailform"].elements["must_id"].value,0);
		if(obj.disabled)
			must_flag = -1;
		var error_message = "";
		mfp_errmsg_reset(errortext);
		if(errortext == "email" || errortext == "confirm_email"){
			email_address = obj.value;
			chkMail = obj.value;
			check = /.+@.+\..+/;
			if(errortext == "email")
				mfp_emailaddress = obj.value
			if(mfp_emailaddress != obj.value && errortext == "confirm_email")
				error_message = mfp_langObj[mfp_lang][0];
			else if(must_flag > -1 && obj.value == obj.defaultValue && errortext == "confirm_email")
				error_message = mfp_langObj[mfp_lang][1];
			else if(must_flag > -1 && obj.value == obj.defaultValue)
				error_message = mfp_langObj[mfp_lang][2];
			else if(!chkMail.match(check) && obj.value != obj.defaultValue)
				error_message = mfp_langObj[mfp_lang][3];
		}
		else if(elementType == "file"){
			if(obj.value == "" && must_flag > -1){
				error_message = errortext + mfp_langObj[mfp_lang][7];
			}
			else if(obj.value != ""){
				var mfp_fileTypes = new Array();
				mfp_fileTypes = obj.value.split(".");
				var mfp_fileType = mfp_fileTypes[mfp_fileTypes.length - 1].toLowerCase();
				var mfp_obverseTypes = new Array();
				mfp_obverseTypes = obj.name.split("/");
				mfp_obverseTypes = mfp_obverseTypes[1].split(",");
				var mfp_fileFlag = 0;
				for(fi=0;fi<mfp_obverseTypes.length;fi++){
					if(mfp_obverseTypes[fi] == mfp_fileType){
						mfp_fileFlag = 1;
					}
				}
				if(!mfp_fileFlag){
					if(must_flag > -1){
						error_message = errortext + mfp_langObj[mfp_lang][14];
					}
					else {
						var file_element_name = new Array();
						file_element_name = obj.name.split('(file)');
						errortext = file_element_name[0];
						error_message = errortext + mfp_langObj[mfp_lang][14];
					}
				}
				else {
					var file_element_name = new Array();
					file_element_name = obj.name.split('(file)');
					errortext = file_element_name[0];
					mfp_errmsg_reset(errortext);
				}
			}
		}
		else if(must_flag > -1){
			if((elementType == "text" || elementType == "textarea") && (obj.value == "" || obj.value == obj.defaultValue))
				error_message = errortext + mfp_langObj[mfp_lang][4];
			else if(elementType == "checkbox"){
				if(document.forms["mailform"].elements[obj.name].length > 0){
					var checkbox_checked_count = 0;
					for(ii=0;ii<document.forms["mailform"].elements[obj.name].length;ii++){
						if(document.forms["mailform"].elements[obj.name][ii].checked)
							checkbox_checked_count++;
					}
					if(checkbox_checked_count < must_maxed)
						error_message = errortext + mfp_langObj[mfp_lang][5].replace('<CNT>',must_maxed);
				}
				else if(!document.forms["mailform"].elements[obj.name].checked)
					error_message = errortext + mfp_langObj[mfp_lang][6];
			}
			else if(elementType == "radio"){
				if(document.forms["mailform"].elements[obj.name].length > 0){
					var checkbox_checked_count = 0;
					for(ii=0;ii<document.forms["mailform"].elements[obj.name].length;ii++){
						if(document.forms["mailform"].elements[obj.name][ii].checked)
							checkbox_checked_count++;
					}
					if(checkbox_checked_count < 1)
						error_message = errortext + mfp_langObj[mfp_lang][6];
				}
			}
			else if(elementType == "select-multiple" || elementType == "select-one"){
				if(obj.selectedIndex > -1){
					var selectCnt = obj.selectedIndex;
					if(obj.options[selectCnt].value == "")
						error_message = errortext + mfp_langObj[mfp_lang][7];
				}
				else
					error_message = errortext + mfp_langObj[mfp_lang][7];
			}
		}
		var ex_error_message = MFP_EX_ELEMENT_CHECK(obj);
		if(ex_error_message != undefined)
			error_message = ex_error_message;
		if(error_message != ""){
			errorElementsStyle(obj);
			mfp_errmsg(errortext,error_message);
		}
		else {
			greenElementsStyle(obj);
		}
		return error_message;
	}
	function sendMail(obj){
		//obj.encoding = "multipart/form-data";
		var caution = "";
		var errorflag = 0;
		var must = obj.elements["must_id"].defaultValue;
		if(obj.elements["mailform_confirm_mode"]){
			if(obj.elements["mailform_confirm_mode"].type == "checkbox" && obj.elements["mailform_confirm_mode"].checked)
				var mailform_confirm_mode = true;
			else if(obj.elements["mailform_confirm_mode"].type == "hidden" && obj.elements["mailform_confirm_mode"].value == 1)
				var mailform_confirm_mode = true;
			else
				var mailform_confirm_mode = false;
		}
		else{
			var mailform_confirm_mode = true;
		}
		var error_element_number = new Array();
		var email_address = "";
		var check_flag = new Object;
		for(i=0;i<obj.length;i++){
			var error_message = "";
			if(!(check_flag[obj.elements[i].name]))
				error_message = mfp_checkelement(obj.elements[i]);
			check_flag[obj.elements[i].name] = 1;
			if(error_message != ""){
				errorElementsStyle(obj.elements[i]);
				error_element_number.push(i);
				caution = caution + error_message + "\n";
			}
			else {
				greenElementsStyle(obj.elements[i]);
			}
		}
		
		if(caution == "" && (mailform_confirm_mode)){
			if(mailformObj != ""){
				mfp_submit(obj);
			}
			else {
				var confirmTime = new Date();
				confirm_time_val = confirmTime.getTime() / 1000;
				var check_flag = new Object;
				var joinObj = new Array();
				var joinElm = new Array();
				selectedHidden(obj);
				var confirmMSG = "";
				var mfp_color = "";
				for(i=0;i<obj.length ;i++){
					var elements_infos = obj.elements[i].name.split(must);
					var elementsName = elements_infos[0];
					var printval = "";
					var all_noinput_flag = null;
					if(!(check_flag[obj.elements[i].name])){
						if((obj.elements[i].type == "text" || obj.elements[i].type == "textarea") && obj.elements[i].value != obj.elements[i].defaultValue && elementsName != "confirm_email"){
							elementsName = elementsName.replace("email",mfp_langObj[mfp_lang][12]);
							printval = tagEscape(obj.elements[i].value);
						}
						else if(obj.elements[i].type == "select-one" && obj.elements[i].value != obj.elements[i].defaultValue && obj.elements[i].value != ""){
							printval = tagEscape(obj.elements[i].options[obj.elements[i].selectedIndex].text);
						}
						else if(obj.elements[i].type == "radio" || obj.elements[i].type == "checkbox"){
							if(obj.elements[obj.elements[i].name].length != undefined){
								for(ii=0;ii<obj.elements[obj.elements[i].name].length;ii++){
									if(obj.elements[obj.elements[i].name][ii].checked){
										printval += tagEscape(obj.elements[obj.elements[i].name][ii].value) + "<br />";
									}
								}
							}
							else if(obj.elements[i].checked && obj.elements[i].name != "mailform_confirm_mode"){
								printval += tagEscape(obj.elements[i].value) + "<br />";
							}
						}
						else if(obj.elements[i].type == "file" && obj.elements[i].value != ""){
							var file_element_name = new Array();
							file_element_name = elements_infos[0].split('(file)');
							elementsName = file_element_name[0];
							var file_element_value = new Array();
							var mfp_user_agent = navigator.userAgent.toUpperCase();
							if(mfp_user_agent.indexOf("WIN") > -1)
								file_element_value = obj.elements[i].value.split("\\");
							else
								file_element_value = obj.elements[i].value.split("\/");
							printval = file_element_value[file_element_value.length-1];
						}
						else if(obj.elements[i].name.indexOf('[join]') > -1 || obj.elements[i].name.indexOf('[unjoin]') > -1){
							if(obj.elements[i].name.indexOf('[join]') > -1) joinObj = obj.elements[i].name.split('[join]');
							else if(obj.elements[i].name.indexOf('[unjoin]') > -1) joinObj = obj.elements[i].name.split('[unjoin]');
							elementsName = joinObj[0];
							joinElm = joinObj[1].split('+');
							all_noinput_flag = true;
							for(eli=0;eli < joinElm.length;eli++){
								if(obj.elements[joinElm[eli]]){
									printval += tagEscape(obj.elements[joinElm[eli]].value);
									check_flag[joinElm[eli]] = 1;
									if(obj.elements[joinElm[eli]].value != "")
										all_noinput_flag = false;
								}
								else {
									printval += tagEscape(joinElm[eli]);
								}
							}
						}
						else if(obj.elements[i].name == "price"){
							elementsName = mfp_langObj[mfp_lang][10];
							printval = obj.elements[i].value;
						}
						if(printval != "" && (all_noinput_flag == null || !(all_noinput_flag))){
							if(mfp_color == "")
								mfp_color = " class='mfp_color'";
							else
								mfp_color = "";
							if(document.getElementById('mfp_td_'+elementsName))
								printval += document.getElementById('mfp_td_'+elementsName).innerHTML;
							if(document.getElementById('mfp_th_'+elementsName))
								elementsName = document.getElementById('mfp_th_'+elementsName).innerHTML;
							confirmMSG += "<tr><th width='100' nowrap"+mfp_color+">" + elementsName + "</th><td"+mfp_color+"><p>" + printval + "</p></td></tr>";
						}
					}
					check_flag[obj.elements[i].name] = 1;
				}
				
				var confirm_disp = "<div class='mfp_title'>"+imagetag_confirm+"</div>";
				confirm_disp += "<ul class='confirm_layer'><li class='confirm_top'></li><li class='confirm_middle'>";
				confirm_disp += "<table class='infield' cellspacing='0' cellpadding='0'>" + confirmMSG + "</table>";
				confirm_disp += "</li><li class='confirm_bottom'></li></ul>";
				confirm_disp += "<div class='buttons'><input type='image' value='CANCEL' src='"+imagepath_cancel+"' onclick='sendCancel()'> <input type='image' value='SEND' src='"+imagepath_send+"' onclick='sending();'></div>"
				confirmMSG = confirm_disp;
				mfp_sizeset();
				document.getElementById("confirmBody").innerHTML = confirmMSG;
				document.getElementById("confirmWindow").style.visibility = "inherit";
				document.getElementById("confirmBody").style.visibility = "inherit";
				fadeOpacity('confirmWindow',1,0.8);
				mfp_SEPlay("confirm");
				mailformObj = obj;
				return false;
			}
		}
		else if(caution == "" && !(mailform_confirm_mode)){
			if(confirm(mfp_langObj[mfp_lang][8])){
				mfp_submit(obj);
			}
		}
		else{
			mfp_SEPlay("error");
			mfp_phase_fullopen();
			caution = mfp_langObj[mfp_lang][9]+"\n"+caution;
			if(alert_display)
				alert(caution);
			obj.elements[error_element_number[0]].focus();
			return false;
		}
	}
	function mfp_submit(obj){
		var must = obj.elements["must_id"].defaultValue;
		var check_flag = new Object;
		if(document.getElementById('confirm_time')){
			var confirmTime = new Date();
			document.getElementById('confirm_time').value = Math.floor((confirmTime.getTime() / 1000) - confirm_time_val) + " sec";
		}
		for(i=0;i<obj.length;i++){
			var elements_name_original = obj.elements[i].name;
			var elements_infos = obj.elements[i].name.split(must);
			var elementsName = elements_infos[0];
			obj.elements[i].name = elementsName;
			if(obj.elements[i].type == "file")
				obj.elements[i].name += '(file)';
			if(obj.elements[i].name == "price")
				obj.elements[i].name = price_name;
			if(check_flag[elements_name_original]){
				obj.elements[i].name = "";
				obj.elements[i].value = "";
			}
			if(obj.elements[i].value == obj.elements[i].defaultValue && obj.elements[i].type != "hidden"){
				if(obj.elements[i].type == "text" || obj.elements[i].type == "textarea"){
					obj.elements[i].value = "";
				}
			}
			if(obj.elements[i].name.indexOf('[join]') > -1){
				joinObj = elements_name_original.split('[join]');
				var printval = "";
				joinElm = joinObj[1].split('+');
				for(eli=0;eli < joinElm.length;eli++){
					if(obj.elements[joinElm[eli]]){
						printval += obj.elements[joinElm[eli]].value;
						check_flag[joinElm[eli]] = 1;
					}
					else {
						printval += joinElm[eli];
					}
				}
				obj.elements[i].name = joinObj[0];
				obj.elements[i].value = printval;
			}
			if(obj.elements[i].type == "submit"){
				obj.elements[i].disabled = true;
			}
		}
		document.charset='UTF-8';
		obj.submit();
	}
	function mfp_errmsg(objId,msg){
		if(document.getElementById("errormsg_"+objId)){
			document.getElementById("errormsg_"+objId).innerHTML = msg;
			document.getElementById("errormsg_"+objId).style.display = "block";
		}
	}
	function mfp_errmsg_reset(objId){
		if(document.getElementById("errormsg_"+objId)){
			document.getElementById("errormsg_"+objId).innerHTML = "";
			document.getElementById("errormsg_"+objId).style.display = "none";
		}
	}
	function tagEscape(getval){
		var befor = new Array("<",">","\n","\t","\\n");
		var after = new Array("&lt;","&gt;","<br />"," ","<br />");
		if(getval){
		for(ei=0;ei<befor.length;ei++){
			var temp = new Array();
			temp = getval.split(befor[ei]);
			getval = temp.join(after[ei]);
		}
		}
		return getval;
	}
	function sending(){
		twex_fullscreenObject();
		sendMail(mailformObj);
	}
	function sendCancel(){
		mailformObj = "";
		if(document.all){
			document.all("confirmBody").style.visibility = "hidden";
			document.all("confirmWindow").style.visibility = "hidden";
			document.all("confirmBody").style.width = "1px";
			document.all("confirmBody").style.height = "1px";
		}
		else if(document.getElementById){
			document.getElementById("confirmBody").style.visibility = "hidden";
			document.getElementById("confirmWindow").style.visibility = "hidden";
			document.getElementById("confirmBody").style.width = "1px";
			document.getElementById("confirmBody").style.height = "1px";
		}
		selectedVisible();
	}
	var conservationKey = "[resume]";
	function keepField(formId){
		var setValue = "";
		var obj = document.forms[formId];
		var elementsList = new Array();
		for(i=0;i<obj.length;i++){
			if(obj.elements[i].type == "checkbox" || obj.elements[i].type == "radio"){
				if(obj.elements[i].id){
					var labelObj = document.getElementById(obj.elements[i].id+"_label");
					labelclick(labelObj);
				}
				if(obj.elements[i].checked)
					setValue += "1" + "&";
				else
					setValue += "0" + "&";
			}
			else if(obj.elements[i].type == "text" || obj.elements[i].type == "textarea"){
				setValue += escape(obj.elements[i].value) + "&";
			}
			else if(obj.elements[i].type == "select-multiple"){
				var selected_multiple = new Array();
				for(multiplect=0;multiplect<obj.elements[i].length;multiplect++){
					if(obj.elements[i].options[multiplect].selected)
						selected_multiple.push(multiplect);
				}
				setValue += selected_multiple.join(",") + "&";
			}
			else if(obj.elements[i].type == "select-one"){
				setValue += obj.elements[i].selectedIndex + "&";
			}
		}
		setValue = conservationKey + setValue + conservationKey;
		mfp_setCookie("mailform",setValue)
	}
	function mfp_setCookie(name,val){
		var current_dir = location.pathname;
		var current_dirs = new Array();
		current_dirs = current_dir.split("/");
		if(current_dirs[current_dirs.length-1] != ""){
			current_dirs[current_dirs.length-1] = "";
			current_dir = current_dirs.join("/");
		}
		document.cookie = name + "=" + val + "; path=" + current_dir + "; expires=";
	}
	function fadeOpacity(layName,swt,stopOpacity){
		if(!window.fadeOpacity[layName])
			fadeOpacity[layName] =0 
		if(!arguments[1]) swt = -1
		if(swt==-1) var f = "9876543210"
		else if(swt==1) var f = "0123456789"
		else var f = "9876543210"
		if(!arguments[2] && swt==-1)		 stopOpacity = 0
		else if(!arguments[2] && swt==1) stopOpacity = 10
		if( fadeOpacity[layName] < f.length-1 ){
			var opa = f.charAt(fadeOpacity[layName])/10
			if( opa == stopOpacity ){
				setOpacity(layName,stopOpacity)
				fadeOpacity[layName] = 0
				return
			}
			setOpacity(layName,opa)
			fadeOpacity[layName]++
			setTimeout('fadeOpacity("'+layName+'","'+swt+'","'+stopOpacity+'")',10)
		} else {
			setOpacity(layName,stopOpacity)
			fadeOpacity[layName] = 0
			if(document.all){
				document.all(layName).style.visibility = "hidden";
				document.all(layName).style.width = "1px";
				document.all(layName).style.height = "1px";
			}
			else if(document.getElementById){
				document.getElementById(layName).style.visibility = "hidden";
				document.getElementById(layName).style.width = "1px";
				document.getElementById(layName).style.height = "1px";
			}
		}
	}
	function setOpacity(layName,arg) {
		var ua = navigator.userAgent
		if( document.layers ) {
			if(arg > 0) document.layers[layName].visibility='visible'
			else if(arg==0) document.layers[layName].visibility='hidden'
		}
		else if(navigator.appVersion.indexOf("Safari") > -1 || ua.indexOf("Opera") > -1){
			document.getElementById(layName).style.opacity = arg;
		}
		else if( ua.indexOf('Mac_PowerPC') !=-1 && document.all ) {
			if(arg > 0)		 document.all(layName).style.visibility='visible'
			else if(arg==0) document.all(layName).style.visibility='hidden'
		}
		else if(document.all) {
			document.all(layName).style.filter="alpha(opacity=0)"
			document.all(layName).filters.alpha.Opacity	= (arg * 100)
		}
		else if(ua.indexOf('Gecko')!=-1)
				document.getElementById(layName).style.MozOpacity = arg
		
	}
	var focusBackgroundColor = "";
	var focusBorderColor = "";
	function activefocus(obj){
		if(obj.type != "checkbox" && obj.type != "radio"){
			focusBackgroundColor = obj.style.backgroundColor;
			focusBorderColor = obj.style.borderColor;
			obj.style.backgroundColor = mfp_input_background_color_active;
			obj.style.borderColor = mfp_input_border_color_active;
		}
	}
	function lostfocus(obj){
		if(obj.type != "checkbox" && obj.type != "radio"){
			obj.style.backgroundColor = focusBackgroundColor;
			obj.style.borderColor = focusBorderColor;
			if(obj.type == "text" || obj.type == "textarea")
				formatCharset(obj);
		}
	}
	var hiddenObject = "";
	function selectedHidden(obj){
		hiddenObject = obj
		for(i=0;i<obj.length;i++){
			if(obj.elements[i].type == "select-multiple" || obj.elements[i].type == "select-one"){
				if(document.all){
					obj.elements[i].style.visibility = "hidden";
				}
				else if(document.getElementById){
					obj.elements[i].style.visibility = "hidden";
				}
			}
		}
	}
	function selectedVisible(){
		var obj = hiddenObject;
		for(i=0;i<obj.length;i++){
			if(obj.elements[i].type == "select-multiple" || obj.elements[i].type == "select-one"){
				if(document.all){
					obj.elements[i].style.visibility = "visible";
				}
				else if(document.getElementById){
					obj.elements[i].style.visibility = "visible";
				}
			}
		}
	}
	function timer(){
		document.forms["mailform"].elements["input_time"].value = parseInt(document.forms["mailform"].elements["input_time"].value) + 1;
	}
	function formatCharset(obj){
		var befor = new Array("ｶﾞ","ｷﾞ","ｸﾞ","ｹﾞ","ｺﾞ","ｻﾞ","ｼﾞ","ｽﾞ","ｾﾞ","ｿﾞ","ﾀﾞ","ﾁﾞ",
			"ﾂﾞ","ﾃﾞ","ﾄﾞ","ﾊﾞ","ﾋﾞ","ﾌﾞ","ﾍﾞ","ﾎﾞ","ﾊﾟ","ﾋﾟ","ﾌﾟ","ﾍﾟ","ﾎﾟ","ｦ","ｧ",
			"ｨ","ｩ","ｪ","ｫ","ｬ","ｭ","ｮ","ｯ","ｰ","ｱ","ｲ","ｳ","ｴ","ｵ","ｶ","ｷ","ｸ","ｹ",
			"ｺ","ｻ","ｼ","ｽ","ｾ","ｿ","ﾀ","ﾁ","ﾂ","ﾃ","ﾄ","ﾅ","ﾆ","ﾇ","ﾈ","ﾉ","ﾊ","ﾋ",
			"ﾌ","ﾍ","ﾎ","ﾏ","ﾐ","ﾑ","ﾒ","ﾓ","ﾔ","ﾕ","ﾖ","ﾗ","ﾘ","ﾙ","ﾚ","ﾛ","ﾜ","ﾝ",
			'Ａ','Ｂ','Ｃ','Ｄ','Ｅ','Ｆ','Ｇ','Ｈ','Ｉ','Ｊ','Ｋ','Ｌ','Ｍ','Ｎ','Ｏ','Ｐ','Ｑ','Ｒ','Ｓ','Ｔ','Ｕ','Ｖ','Ｗ','Ｘ','Ｙ','Ｚ','ａ','ｂ','ｃ','ｄ','ｅ','ｆ','ｇ','ｈ','ｉ','ｊ','ｋ','ｌ','ｍ','ｎ','ｏ','ｐ','ｑ','ｒ','ｓ','ｔ','ｕ','ｖ','ｗ','ｘ','ｙ','ｚ','＠','０','１','２','３','４','５','６','７','８','９','．',
			'①','②','③','④','⑤','⑥','⑦','⑧','⑨','⑩','Ⅰ','Ⅱ','Ⅲ','Ⅳ','Ⅴ','Ⅵ','Ⅶ','Ⅷ','Ⅸ','Ⅹ','㈱','㈲');
		var after = new Array("ガ","ギ","グ","ゲ","ゴ","ザ","ジ","ズ","ゼ","ゾ","ダ","ヂ",
			"ヅ","デ","ド","バ","ビ","ブ","ベ","ボ","パ","ピ","プ","ペ","ポ","ヲ","ァ",
			"ィ","ゥ","ェ","ォ","ャ","ュ","ョ","ッ","ー","ア","イ","ウ","エ","オ","カ",
			"キ","ク","ケ","コ","サ","シ","ス","セ","ソ","タ","チ","ツ","テ","ト","ナ",
			"ニ","ヌ","ネ","ノ","ハ","ヒ","フ","ヘ","ホ","マ","ミ","ム","メ","モ","ヤ",
			"ユ","ヨ","ラ","リ","ル","レ","ロ","ワ","ン",
			'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','@','0','1','2','3','4','5','6','7','8','9','.',
			'(1)','(2)','(3)','(4)','(5)','(6)','(7)','(8)','(9)','(10)','(1)','(2)','(3)','(4)','(5)','(6)','(7)','(8)','(9)','(10)','(株)','(有)');
		for(i=0;i<befor.length;i++){
			var temp = new Array();
			temp = obj.value.split(befor[i]);
			obj.value = temp.join(after[i]);
		}
		var temp = new Array();
		temp = obj.value.split("\n");
		for(i=0;i<temp.length;i++){
			if(temp[i].length > 64){
				var chars = new Array();
				chars = temp[i].split("");
				for(ii=63;ii<chars.length;ii+=63){
					chars[ii] += "\n";
				}
				temp[i] = chars.join("");
			}
		}
		obj.value = temp.join("\n");
	}
	function figureChecked(figure){
		var single_char = new Array('0','1','2','3','4','5','6','7','8','9','-');
		var double_char = new Array('０','１','２','３','４','５','６','７','８','９','－');
		for(i=0;i<single_char.length;i++){
			var temp = new Array();
			temp = figure.split(double_char[i]);
			figure = temp.join(single_char[i]);
		}
		var figureMatch = figure.match(/[^0-9]/g);
		if(figureMatch){
			return false;
		}
		else{
			return figure;
		}
	}
	function mfp_sizeset(){
		var ua = navigator.userAgent;
		var nHit = ua.indexOf("MSIE");
		var bIE = (nHit >=  0);
		var bVer6 = (bIE && ua.substr(nHit+5, 1) == "6");
		var bStd = (document.compatMode && document.compatMode=="CSS1Compat");
		if (bIE) {
			if (bVer6 && bStd) {
				mfpWidth = document.documentElement.clientWidth;
				mfpHeight = document.documentElement.clientHeight;
				mfpTop = document.documentElement.scrollTop;
				mfpLeft = document.documentElement.scrollLeft;
				
			}
			else if(!bStd){
				mfpWidth = document.body.clientWidth;
				mfpHeight = document.body.clientHeight;
				mfpTop = document.body.scrollTop;
				mfpLeft = document.body.scrollLeft;
			}
			else {
				if (typeof document.body.style.maxHeight != "undefined") {
					mfpWidth = document.documentElement.clientWidth;
					mfpHeight = document.documentElement.clientHeight;
					mfpTop = document.documentElement.scrollTop;
					mfpLeft = document.documentElement.scrollLeft;
				}
				else {
					mfpWidth = document.body.clientWidth;
					mfpHeight = document.body.clientHeight;
					mfpTop = document.body.scrollTop;
					mfpLeft = document.body.scrollLeft;
				}
			}
		}
		else {
			mfpWidth = window.innerWidth;
			mfpHeight = window.innerHeight;
			mfpTop = document.body.scrollTop  || document.documentElement.scrollTop;
			mfpLeft = document.body.scrollLeft || document.documentElement.scrollLeft;
		}
		leftp = (mfpWidth - 720) / 2;
		document.getElementById("confirmBody").style.top = mfpTop + "px";
		document.getElementById("confirmBody").style.left = leftp + "px";
		document.getElementById("confirmBody").style.width = "720px";
		document.getElementById("confirmBody").style.height = mfpHeight + "px";
		document.getElementById("confirmWindow").style.width = mfpWidth + "px";
		document.getElementById("confirmWindow").style.height = mfpHeight + "px";
	}
	function labelclick(obj){
		if(obj){
			var elementId = obj.id.replace( /_label/g, "" );
			if(document.getElementById(elementId)){
				if(document.getElementById(elementId).checked)
					obj.className = "label_true";
				else
					obj.className = "label_false";
			}
		}
	}
	// phase Input Functions
	function mfp_phase_change(crrId,chgId){
		var d = window.document;
		if(d.getElementById('mfp_phase_'+crrId+'_label'))
			d.getElementById('mfp_phase_'+crrId+'_label').className = 'mfp_phase_disabled';
		if(d.getElementById('mfp_phase_'+chgId+'_label'))
			d.getElementById('mfp_phase_'+chgId+'_label').className = 'mfp_phase_current';
		mfp_phase_input_currentId = chgId;
		d.getElementById('mfp_phase_'+crrId).style.display = "none";
		d.getElementById('mfp_phase_'+chgId).style.display = "block";
		location.hash = 'phase_'+chgId;
	}
	function mfp_phase_fullopen(){
		var d = window.document;
		mfp_phase_input_currentId = null;
		if(mfp_phase_input_step != null){
			for(i=1;i<mfp_phase_input_step;i++){
				d.getElementById('mfp_phase_'+i).style.display = "block";
			}
		}
		$(".mfp_phase_ui").css('display','none');
		$(".mfp_phase_buttons").css('display','none');
	}
	//
	function startupMailform(){
		var d = window.document;
		var formId = 'mailform';
		var obj = document.forms[formId];
		var valueList = new Array();
		var selectedLinks = new Array();
		var elcount = 0;
		
		// phase Input startup
		if(d.getElementById('mfp_phase_1')){
			if(location.hash && location.hash.indexOf('phase_') > -1)
				mfp_phase_input_currentId = location.hash.replace( /#phase_/g, "" );
			else
				mfp_phase_input_currentId = 1;
			d.getElementById('mfp_phase_'+mfp_phase_input_currentId).style.display = "block";
			if(d.getElementById('mfp_phase_'+mfp_phase_input_currentId+'_label'))
				d.getElementById('mfp_phase_'+mfp_phase_input_currentId+'_label').className = 'mfp_phase_current';
			
			var pi = 1;
			while(d.getElementById('mfp_phase_'+pi)){
				mfp_phase_input_step = pi;
				pi++;
			}
		}
		//
		
		if(document.cookie && document.cookie.indexOf(conservationKey) > -1){
			valueList = document.cookie.split(conservationKey);
			valueList = valueList[1].split("&");
			var checked_count = 0;
			for(i=0;i<obj.length;i++){
				if(obj.elements[i].type != "hidden" && obj.elements[i].type != "file" && obj.elements[i].type != "button" && obj.elements[i].type != "submit" && obj.elements[i].type != "image"){
					checked_count++;
				}
			}
			if(valueList.length == (checked_count+1)){
				for(i=0;i<obj.length;i++){
					if(obj.elements[i].type == "checkbox" || obj.elements[i].type == "radio"){
						if(valueList[elcount] == 1){
							obj.elements[i].checked = true;
						}
						else{
							obj.elements[i].checked = false;
						}
						elcount++;
					}
					else if(obj.elements[i].type == "text" || obj.elements[i].type == "textarea"){
						obj.elements[i].value = unescape(valueList[elcount]);
						elcount++;
					}
					else if(obj.elements[i].type == "select-multiple"){
						var selected_multiple = new Array();
						selected_multiple = valueList[elcount].split(",");
						for(multiplect=0;multiplect<selected_multiple.length;multiplect++){
							if(selected_multiple[multiplect] != ""){
								obj.elements[i].options[selected_multiple[multiplect]].selected = true;
							}
						}
						elcount++;
					}
					else if(obj.elements[i].type == "select-one"){
						if(obj.elements[i].options[valueList[elcount]])
							obj.elements[i].options[valueList[elcount]].selected = true;
						elcount++;
					}
				}
			}
		}
		
		var getCookies = new Object();
		if(document.cookie.indexOf("mfp_referrer") > -1){
			var cookies = new Array();
			cookies = document.cookie.split(';');
			for(i=0;i<cookies.length;i++){
				var ses = new Array();
				var vals = new Array();
				ses = cookies[i].split('=');
				vals = ses[0].split(' ');
				ses[0] = vals.join('');
				getCookies[ses[0]] = ses[1];
			}
		}
		if(getCookies["mfp_referrer"] != undefined){
			if(obj.elements["sitein_referrer"])
				obj.elements["sitein_referrer"].value = decodeURI(unescape(getCookies["mfp_referrer"]));
		}
		var tagObjects = document.getElementsByTagName("tr");
		for(i=0;i < tagObjects.length;i++) {
			if(i % 2 == 1 && tagObjects[i].className == "mfptr"){
				tagObjects[i].style.backgroundColor = mfp_tr_color;
			}
		}
		var tagObjects = document.getElementsByTagName("dd");
		for(i=0;i < tagObjects.length;i++) {
			if(i % 2 == 1 && tagObjects[i].className == "mfptr"){
				tagObjects[i].style.backgroundColor = mfp_tr_color;
			}
		}
		timer_handle = setInterval("timer()",1000);
		if(document.getElementsByTagName('BODY').length == 0)
			document.write('<body>');
		var element = document.createElement('div');
		element.id = "confirmWindow";
		var objBody = document.getElementsByTagName("body").item(0);
		objBody.appendChild(element);
		var element = document.createElement('div');
		element.id = "confirmBody";
		var objBody = document.getElementsByTagName("body").item(0);
		objBody.appendChild(element);
		mfp_sizeset();
		$("input.mfp").focus(function(){
			mfpf(this);
		});
		$("input.mfp").blur(function(){
			mfpb(this);
		});
		$("input.mfp").change(function(){
			mfpb(this);
		});
		$("input.mfp").click(function(){
			mfpclick(this);
		});
		$("textarea.mfp").focus(function(){
			mfpf(this);
		});
		$("textarea.mfp").blur(function(){
			mfpb(this);
		});
		$("select.mfp").change(function(){
			mfpb(this);
		});
		$("tr.mfptr").mouseover(function(){
			trover(this);
		});
		$("tr.mfptr").mouseout(function(){
			trout(this);
		});
		$("dd.mfptr").mouseover(function(){
			trover(this);
		});
		$("dd.mfptr").mouseout(function(){
			trout(this);
		});
		$("label.mfp").click(function(){
			labelclick(this);
		});
		var first_flag = true;
		if(obj){
			// query set
			var querys = new Array();
			var query = new Array();
			var str = location.search;
			str = str.substring(1,str.length);
			querys = str.split("&");
			for(i=0;i<querys.length;i++){
				query = querys[i].split("=");
				if(obj.elements[decodeURI(query[0])]){
					if(obj.elements[decodeURI(query[0])].type == "text" || obj.elements[decodeURI(query[0])].type == "textarea" || obj.elements[decodeURI(query[0])].type == "select-one"){
						obj.elements[decodeURI(query[0])].value = decodeURI(query[1]);
					}
					else {
						if(obj.elements[decodeURI(query[0])].length > 1){
							if(obj.elements[decodeURI(query[0])][0].type == "checkbox" || obj.elements[decodeURI(query[0])][0].type == "radio"){
								for(cnt=0;cnt<obj.elements[decodeURI(query[0])].length;cnt++){
									if(obj.elements[decodeURI(query[0])][cnt].value == decodeURI(query[1]))
										obj.elements[decodeURI(query[0])][cnt].checked = true;
								}
							}
						}
						else if(obj.elements[decodeURI(query[0])].type == "checkbox" || obj.elements[decodeURI(query[0])].type == "radio"){
							obj.elements[decodeURI(query[0])].checked = true;
						}
					}
				}
				getQueryObj[decodeURI(query[0])] = decodeURI(query[1]);
			}
			mfp_calc();
			for(i=0;i<obj.length;i++){
				if(obj.elements[i].type != "hidden" && obj.elements[i].type != "submit" && first_flag){
					first_flag = false;
				}
				if(obj.elements[i].size){
					if(obj.elements[i].type == "text")
						obj.elements[i].style.width = (obj.elements[i].size * 6) + "px";
				}
				if(obj.elements[i].rows)
					obj.elements[i].style.height = (obj.elements[i].rows * 12) + "px";
				if(obj.elements[i].cols)
					obj.elements[i].style.width = (obj.elements[i].cols * 6) + "px";
			}
			keepField(obj.id);
		}
		MFP_EX_ONLOAD(document.forms[formId]);
	}
	var classname_cache;
	function trover(obj){
		if(navigator.userAgent.indexOf("Firefox") == -1){
			classname_cache = obj.style.backgroundColor;
			obj.style.backgroundColor = mfp_tr_color_over;
		}
	}
	function trout(obj){
		if(navigator.userAgent.indexOf("Firefox") == -1)
			obj.style.backgroundColor = classname_cache;
	}
	function inputTyping(formNames,kanaElements,keyCode,thisObj){
		var alphabet = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
		var kana = new Array(	"ア","イ","ウ","エ","オ",
					"カ","キ","ク","ケ","コ",
					"サ","シ","ス","セ","ソ",
					"タ","チ","ツ","テ","ト",
					"ナ","ニ","ヌ","ネ","ノ",
					"ハ","ヒ","フ","フ","ヘ",
					"マ","ミ","ム","メ","モ",
					"ヤ","ユ","ヨ",
					"ラ","リ","ル","レ","ロ",
					"ワ","ヰ","ヱ","ヲ",
					"ン",
					"イェ",
					"シ","チ","ツ",
					"ファ","フィ","フェ","フォ",
					"ァ","ィ","ゥ","ェ","ォ",
					"ヴァ","ヴィ","ヴ","ヴェ","ヴォ",
					"クァ","クィ","クェ","クォ",
					"ガ","ギ","グ","ゲ","ゴ",
					"ザ","ジ","ジ","ズ","ゼ","ゾ",
					"ダ","ヂ","ヅ","デ","ド",
					"ホ","バ","ビ","ブ","ベ","ボ",
					"パ","ピ","プ","ペ","ポ",
					"ジャ","ジュ","ジョ",
					"キャ","キュ","キョ",
					"ギャ","ギュ","ギョ",
					"シャ","シュ","ショ",
					"シャ","シュ","ショ",
					"ジャ","ジュ","ジョ",
					"チャ","チュ","チョ",
					"ヂャ","ヂュ","ヂョ",
					"チャ","チュ","チョ",
					"ニャ","ニュ","ニョ",
					"ヒャ","ヒュ","ヒョ",
					"ビャ","ビュ","ビョ",
					"ピャ","ピュ","ピョ",
					"ミャ","ミュ","ミョ",
					"リャ","リュ","リョ",
					"シェ","ジェ","シェ","ジェ",
					"チェ","チェ",
					"ツァ","ツェ","ツォ",
					"ティ","ディ","デュ",
					"ヵ","ヶ","ッ",
					"ャ","ュ","ョ","ヮ",
					"ウィ","ウィ","ウェ","ウェ","ウォ",
					"ヴュ","ツィ",
					"クァ","クィ","クェ","クォ","グァ",
					"ジャ","ジュ","ジョ",
					"チャ","チュ","チョ",
					"ティ","ディ","テュ",
					"トゥ","ドゥ",
					"ファ","フィ","フェ","フォ",
					"フュ","フュ",
					"ンb","ンc","ンd","ンf","ンg","ンh","ンj","ンk","ンl","ンm","ンp","ンq","ンr","ンs","ンt","ンv","ンw","ンx","ンz",
					"ッb","ッc","ッd","ッf","ッg","ッh","ッj","ッk","ッl","ッm","ッp","ッq","ッr","ッs","ッt","ッv","ッw","ッx","ッy","ッz");
		var roma = new Array(	"a","i","u","e","o",
					"ka","ki","ku","ke","ko",
					"sa","si","su","se","so",
					"ta","ti","tu","te","to",
					"na","ni","nu","ne","no",
					"ha","hi","hu","fu","he",
					"ma","mi","mu","me","mo",
					"ya","yu","yo",
					"ra","ri","ru","re","ro",
					"wa","wyi","wye","wo",
					"nn",
					"ye",
					"shi","chi","tsu",
					"fa","fi","fe","fo",
					"xa","xi","xu","xe","xo",
					"va","vi","vu","ve","vo",
					"qa","qi","qe","qo",
					"ga","gi","gu","ge","go",
					"za","zi","ji","zu","ze","zo",
					"da","di","du","de","do",
					"ho","ba","bi","bu","be","bo",
					"pa","pi","pu","pe","po",
					"ja","ju","jo",
					"kya","kyu","kyo",
					"gya","gyu","gyo",
					"sya","syu","syo",
					"sha","shu","sho",
					"zya","zyu","zyo",
					"tya","tyu","tyo",
					"dya","dyu","dyo",
					"cha","chu","cho",
					"nya","nyu","nyo",
					"hya","hyu","hyo",
					"bya","byu","byo",
					"pya","pyu","pyo",
					"mya","myu","myo",
					"rya","ryu","ryo",
					"sye","she","zye","je",
					"tye","che",
					"tsa","tse","tso",
					"thi","dhi","dhu",
					"xka","xke","xtu",
					"xya","xyu","xyo","xwa",
					"whi","wi","whe","we","who",
					"vyu","tsi",
					"kwa","kwi","kwe","kwo","gwa",
					"jya","jyu","jyo",
					"cya","cyu","cyo",
					"thi","dhi","thu",
					"twu","dwu",
					"hwa","hwi","hwe","hwo",
					"fyu","hwyu",
					"nb","nc","nd","nf","ng","nh","nj","nk","nl","nm","np","nq","nr","ns","nt","nv","nw","nx","nz",
					"bb","cc","dd","ff","gg","hh","jj","kk","ll","mm","pp","qq","rr","ss","tt","vv","ww","xx","yy","zz");
		if(document.forms[formNames].elements[kanaElements].value == document.forms[formNames].elements[kanaElements].defaultValue){
			document.forms[formNames].elements[kanaElements].value = "";
		}
		if(keyCode > 64 && keyCode < 91){
			window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value + alphabet[keyCode - 65];
			for(i=roma.length;i > -1;i--){
				window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value.replace(roma[i],kana[i]);
			}
		}
		else if(keyCode == 8){
			kanavalue = window.document.forms[formNames].elements[kanaElements].value;
			window.document.forms[formNames].elements[kanaElements].value = kanavalue.substring(0,kanavalue.length - 1);
		}
		else if(keyCode == 32){
			//window.document.forms[formNames].elements[kanaElements].value += " ";
		}
		else if(keyCode == 45){
			window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value + "-";
			for(i=roma.length;i > -1;i--){
				window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value.replace(roma[i],kana[i]);
			}
		}
		else if(keyCode == 109 || keyCode == 189){
			window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value + "-";
			for(i=roma.length;i > -1;i--){
				window.document.forms[formNames].elements[kanaElements].value = window.document.forms[formNames].elements[kanaElements].value.replace(roma[i],kana[i]);
			}
		}
		if(thisObj.value == "")
			window.document.forms[formNames].elements[kanaElements].value = "";
		return false;
	}
	
	function mfp_reset(obj){
		if(confirm(mfp_langObj[mfp_lang][13])){
			for(i=0;i<obj.length;i++){
				if(obj.elements[i].type == "radio" || obj.elements[i].type == "checkbox"){
					obj.elements[i].checked = obj.elements[i].defaultChecked;
					if(document.getElementById(obj.elements[i].id+'_label') && !(obj.elements[i].checked))
						document.getElementById(obj.elements[i].id+'_label').className = "label_false";
				}
				else if(obj.elements[i].type == "select-one"){
					for(ii=0;ii<obj.elements[i].length;ii++){
						if(obj.elements[i].options[ii].defaultSelected)
							obj.elements[i].options[ii].selected = true;
					}
				}
				else
					obj.elements[i].value = obj.elements[i].defaultValue;
			}
			var divObjects = document.getElementsByTagName("div");
			for (i=0;i<divObjects.length;i++) {
				if(divObjects[i].className == "mfp_err")
					divObjects[i].style.display = "none";
			}
			mfp_setCookie('mailform',"");
		}
	}
	var loading_image = '<img src="images/mfp_loading.gif" id="loading_proccess_image" width="40" height="40" />';
	var twex_body = document['CSS1Compat' == document.compatMode ? 'documentElement' : 'body'];
	var twex_flag = 1;
	if(document.getElementsByTagName('BODY').length==0)
		document.write('<body>');
	var element = document.createElement('div');
	element.id = "twex";
	var objBody = document.getElementsByTagName("body").item(0);
	objBody.appendChild(element);
	document.getElementById('twex').innerHTML = loading_image;
	
	function twex_fullscreenObject(){
		twex_hideObject();
		twex_resize();
		if(document.all)
			document.all('twex').style.display = "block";
		else if(document.getElementById)
			document.getElementById('twex').style.display = "block";
	}
	function twex_resize(){
		var ua = navigator.userAgent;
		var nWidth, nHeight, nTop, nLeft;
		var nHit = ua.indexOf("MSIE");
		var bIE = (nHit >=  0);
		var bVer6 = (bIE && ua.substr(nHit+5, 1) == "6");
		var bStd = (document.compatMode && document.compatMode=="CSS1Compat");
		if (bIE) {
			if (bVer6 && bStd) {
				nWidth = document.documentElement.clientWidth;
				nHeight = document.documentElement.clientHeight;
				nTop = document.documentElement.scrollTop;
				nLeft = document.documentElement.scrollLeft;
			}
			else if(!bStd){
				nWidth = document.body.clientWidth;
				nHeight = document.body.clientHeight;
				nTop = document.body.scrollTop;
				nLeft = document.body.scrollLeft;
			}
			else {
				if (typeof document.body.style.maxHeight != "undefined") {
					nWidth = document.documentElement.clientWidth;
					nHeight = document.documentElement.clientHeight;
					nTop = document.documentElement.scrollTop;
					nLeft = document.documentElement.scrollLeft;
				}
				else {
					
					nWidth = document.body.clientWidth;
					nHeight = document.body.clientHeight;
					nTop = document.body.scrollTop;
					nLeft = document.body.scrollLeft;
				}
			}
		}
		else {
			nWidth = window.innerWidth;
			nHeight = window.innerHeight;
			nTop = document.body.scrollTop  || document.documentElement.scrollTop;
			nLeft = document.body.scrollLeft || document.documentElement.scrollLeft;
		}
		
		var lTop = (nHeight - 40) / 2;
		var lLeft = (nWidth - 40) / 2;
		
		if(document.all){
			document.all('twex').style.width = nWidth + "px";
			document.all('twex').style.height = nHeight + "px";
			document.all('twex').style.top = nTop + "px";
			document.all('twex').style.left = nLeft + "px";
			document.all('loading_proccess_image').style.top = lTop + "px";
			document.all('loading_proccess_image').style.left = lLeft + "px";
		}
		else if(document.getElementById){
			document.getElementById('twex').style.width = nWidth + "px";
			document.getElementById('twex').style.height = nHeight + "px";
			document.getElementById('twex').style.top = nTop + "px";
			document.getElementById('twex').style.left = nLeft + "px";
			document.getElementById('loading_proccess_image').style.top = lTop + "px";
			document.getElementById('loading_proccess_image').style.left = lLeft + "px";
		}
	}
	// ---------------------------------------------------
	function twex_closefullscreenObject(){
		if(document.all){
			document.all('twex').style.visibility = "hidden";
			document.all('twex').style.width = "1px";
			document.all('twex').style.display = "none";
		}
		else if(document.getElementById){
			document.getElementById('twex').style.visibility = "hidden";
			document.getElementById('twex').style.width = "1px";
			document.getElementById('twex').style.display = "none";
		}
		twex_showObject();
	}

	// ---------------------------------------------------
	function twex_showObject(){
		var flashObjects = document.getElementsByTagName("object");
		for (i = 0; i < flashObjects.length; i++) {
			flashObjects[i].style.visibility = "visible";
		}
		var flashEmbeds = document.getElementsByTagName("embed");
		for (i = 0; i < flashEmbeds.length; i++) {
			flashEmbeds[i].style.visibility = "visible";
		}
		var flashSelect = document.getElementsByTagName("select");
		for (i = 0; i < flashSelect.length; i++) {
			flashSelect[i].style.visibility = "visible";
		}
	}
	
	// ---------------------------------------------------
	function twex_hideObject(){
		var flashObjects = document.getElementsByTagName("object");
		for (i = 0; i < flashObjects.length; i++) {
			flashObjects[i].style.visibility = "hidden";
		}
		var flashEmbeds = document.getElementsByTagName("embed");
		for (i = 0; i < flashEmbeds.length; i++) {
			flashEmbeds[i].style.visibility = "hidden";
		}
		var flashSelect = document.getElementsByTagName("select");
		for (i = 0; i < flashSelect.length; i++) {
			flashSelect[i].style.visibility = "hidden";
		}
	}
	function addEventSet(elm,listener,fn){
		try{
			elm.addEventListener(listener,fn,false);
		}
		catch(e){
			elm.attachEvent("on"+listener,fn);
		}
	}
	function mfp_bt(obj,method) {
		if(method)
			obj.style.backgroundPosition = '0px -60px';
		else
			obj.style.backgroundPosition = '0px 0px';
	}
	if(mfp_onload_mode == "jquery"){
		$(document).ready(startupMailform);
		$(window).resize(mfp_sizeset);
	}
	else {
		addEventSet(window,"load",function(){startupMailform();});
		addEventSet(window,"resize",function(){mfp_sizeset();});
	}
//-->