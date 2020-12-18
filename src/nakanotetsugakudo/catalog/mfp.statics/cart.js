// cart.js
var mfpFormObj = null;
function mfpCartAdd(obj){
	mfpFormObj = obj;
	var arr = new Array();
	for(var i=0;i<obj.length;i++){
		if(obj.elements[i].name != ""){
			if((obj.elements[i].type == 'checkbox' || obj.elements[i].type == 'radio') && obj.elements[i].checked){
				arr.push(obj.elements[i].name+'='+obj.elements[i].value);
			}
			else if(obj.elements[i].type != 'checkbox' && obj.elements[i].type != 'radio'){
				arr.push(obj.elements[i].name+'='+obj.elements[i].value);
			};
		};
		if(obj.elements[i].type == "submit"){
			obj.elements[i].disabled = true;
			obj.elements[i].className = "disabled";
			obj.elements[i].innerHTML = '<span>'+mfpCartAtt(obj.elements[i],'data-text')+'</span>';
		};
	};
	var pram = arr.join('&');
	mfpCartJson(obj.action+'&'+pram+'&callback=mfpCartGet');
	return false;
};
function mfpCartJson(src){
	var script = document.createElement('script');
	script.async = false;
	script.type = 'text/javascript';
	script.src = src;
	script.charset = 'UTF-8';
	document.body.appendChild(script);
};
function mfpCartGet(json){
	var elm = document.createElement('a');
	elm.className = 'gocart';
	elm.innerHTML = '<span>'+mfpCartAtt(mfpFormObj,'data-text')+'</span>';
	elm.href = mfpCartAtt(mfpFormObj,'data-href');
	mfpFormObj.appendChild(elm);
};
function mfpCartAtt(obj,att){
	if(obj.getAttribute(att) != undefined)
		return obj.getAttribute(att);
	else
		return null;
};
