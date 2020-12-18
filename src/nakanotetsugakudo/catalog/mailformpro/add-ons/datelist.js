// datelist.js 1.0.1
// 2014-11-13

mfpLang['week'] = new Array('日','月','火','水','木','金','土');
mfpLang['dayOptgroup'] = '$y年$m月';
mfpLang['dayText'] = '$y年$m月$d日($w)';
//mfpLang['dayText'] = '$d日($w)';
mfpLang['dayValue'] = '$y-$m-$d';
mfpConfigs['weekColors'] = new Array('#FEE','#FFF','#FFF','#FFF','#FFF','#FFF','#EEF');

// data-daystart="5"
// 5日後から表示

// data-daymax="60"
// 60日間分表示

// data-dayexc="2014-12-24,2015-01-01"
// 2014年12月24日と2015年01月01日は非表示

// data-dayexcon="2014-12-25,2015-01-02"
// 2014年12月25日と2015年01月02日は表示

// data-weekexc="1,0,0,0,0,0,0"
// 日・月・火・水・木・金・土 で非表示は1
// 上記の例では日曜日は非表示

function mfpDayFormat(y,m,d,w,str){
	str = str.replace('$y',y);
	str = str.replace('$m',m);
	str = str.replace('$d',d);
	str = str.replace('$w',w);
	return str;
}
mfp.extend.event('init',
	function(obj){
		if(obj.getAttribute('data-daystart') && obj.getAttribute('data-daymax')){
			var daymax = Number(obj.getAttribute('data-daymax'));
			var daystart = Number(obj.getAttribute('data-daystart'));
			var excweek = new Array();
			var excdates = new Array();
			var excday = "";
			var excdayon = "";
			if(obj.getAttribute('data-weekexc'))
				excweek = obj.getAttribute('data-weekexc').split(',');
			if(obj.getAttribute('data-dayexc'))
				excday = obj.getAttribute('data-dayexc');
			if(obj.getAttribute('data-dayexcon'))
				excdayon = obj.getAttribute('data-dayexcon');
			var daycount = 0;
			var optgroup = "";
			while(daycount < daymax){
				var t = (Number(mfpConfigs['Time']) + ((daystart + daycount) * 86400))  * 1000;
				var dayDate = new Date(t);
				var num = obj.length;
				var y = dayDate.getFullYear();
				var m = dayDate.getMonth() + 1;
				var d = dayDate.getDate();
				var w = dayDate.getDay();
				if(m < 10) m = '0'+m;
				if(d < 10) d = '0'+d;
				var daystr = y+"-"+m+"-"+d;
				if(excweek[dayDate.getDay()] == undefined || excweek[dayDate.getDay()] == 0 || excdayon.indexOf(daystr) > -1){
					if(excday.indexOf(daystr) == -1){
						if(navigator.userAgent.indexOf("MSIE") == -1) {
							if(optgroup != (obj.id+'-'+y+'-'+m)){
								var elm = mfp.d.createElement('optgroup');
								elm.label = mfpDayFormat(y,m,d,w,mfpLang['dayOptgroup']);
								elm.id = (obj.id+'-'+y+'-'+m);
								obj.appendChild(elm);
								optgroup = (obj.id+'-'+y+'-'+m);
							}
							var elm = mfp.d.createElement('option');
							elm.text = mfpDayFormat(y,m,d,mfpLang['week'][w],mfpLang['dayText']);
							elm.value = mfpDayFormat(y,m,d,w,mfpLang['dayValue']);
							elm.style.backgroundColor = mfpConfigs['weekColors'][w];
							mfp.$(optgroup).appendChild(elm);
						}
						else {
							obj.length++;
							obj.options[num].text = mfpDayFormat(y,m,d,mfpLang['week'][w],mfpLang['dayText']);
							obj.options[num].value = mfpDayFormat(y,m,d,w,mfpLang['dayValue']);
							obj.options[num].style.backgroundColor = mfpConfigs['weekColors'][w];
						}
					}
				}
				daycount++;
			}
		}
	}
);
