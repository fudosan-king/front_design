function setOpacity(layName,arg) {
	var ua = navigator.userAgent;
	var d = window.document;
	if(d.layers){
		if(arg > 0) d.layers[layName].visibility = "visible";
		else if(arg==0) d.layers[layName].visibility = "hidden";
	}
	else if(d.getElementById(layName).style.opacity)
		d.getElementById(layName).style.opacity = arg;
	else if(navigator.appVersion.indexOf("Safari") > -1 || ua.indexOf("Opera") > -1)
		d.getElementById(layName).style.opacity = arg;
	else if(ua.indexOf('Mac_PowerPC') != -1 && d.all){
		if(arg > 0)
			d.all(layName).style.visibility = "visible";
		else if(arg==0)
			d.all(layName).style.visibility = "hidden";
	}
	else if(d.all){
		if(d.all(layName).style.filter)
			d.all(layName).style.filter = "alpha(opacity=0)";
		if(d.all(layName).filters)
			d.all(layName).filters.alpha.Opacity = (arg * 100);
	}
	else if(ua.indexOf('Gecko') != -1)
		d.getElementById(layName).style.MozOpacity = arg
}
