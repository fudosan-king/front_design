<!--
	var dateselect_year_max = 5;
	
	//elements names
	var dateselect_yearElementsId = "年(必須)";
	var dateselect_monthElementsId = "月(必須)";
	var dateselect_dayElementsId = "日(必須)";
	var dateselect_calendars = new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
	var dateselect_monthName = new Array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月');
	var dateselect_weeksName = new Array('日','月','火','水','木','金','土');
	
	function dateselect_getWeek(year,month,day){
		year = parseInt(year);
		month = parseInt(month);
		day = parseInt(day);
		if(month == 1 || month == 2) {
			year--;
			month += 12;
		}
		week = Math.floor(year + Math.floor(year/4) - Math.floor(year/100) + Math.floor(year/400) + Math.floor((13 * month + 8) / 5) + day) % 7;
		return week;
	}
	function dateselect_bissextile(year,month){
		//year = parseInt(year);
		//month = parseInt(month);
		var dateselect_calendars = new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
		var cal_flag = 0;
		if(year % 100 == 0 || year % 4 != 0){
			if(year % 400 != 0){
				cal_flag = 0;
			}
			else{
				cal_flag = 1;
			}
		}
		else if(year % 4 == 0){
			cal_flag = 1;
		}
		else{
			cal_flag = 0;
		}
		dateselect_calendars[2] += cal_flag;
		return dateselect_calendars[month];
	}
	function dateselect_change(formId,yearEle,monthEle,dayEle){
		dateselect_yearElementsId = yearEle;
		dateselect_monthElementsId = monthEle;
		dateselect_dayElementsId = dayEle;
		yearObj = document.forms[formId].elements[dateselect_yearElementsId];
		monthObj = document.forms[formId].elements[dateselect_monthElementsId];
		dayObj = document.forms[formId].elements[dateselect_dayElementsId];
		var dateselect_year = yearObj.value;
		var dateselect_month = monthObj.value;
		var dateselect_day = dayObj.value;
		if(yearObj.value != ""){
			//day
			dateselect_week = dateselect_getWeek(dateselect_year,dateselect_month,1);
			dayObj.length = dateselect_bissextile(dateselect_year,dateselect_month);
			for(i=1;i<dayObj.length + 1;i++){
				var print_day = i;
				if(print_day < 10){
					print_day = "0" + i;
				}
				if(dateselect_week == 0){
					dayObj.options[i-1].style.backgroundColor = "#FFEEEE";
					dayObj.options[i-1].style.color = "#CC0000";
				}
				else if(dateselect_week == 6){
					dayObj.options[i-1].style.backgroundColor = "#EEEEFF";
					dayObj.options[i-1].style.color = "#0000CC";
				}
				else {
					dayObj.options[i-1].style.backgroundColor = "#FFFFFF";
					dayObj.options[i-1].style.color = "#000000";
				}
				dayObj.options[i-1].value = i;
				dayObj.options[i-1].text = print_day + '日('+dateselect_weeksName[dateselect_week]+')';
				dateselect_week++;
				if(dateselect_week > 6){
					dateselect_week = 0;
				}
			}
		}
		else {
			yearObj.value = "";
			monthObj.value = "";
			dayObj.value = "";
		}
	}
	var dateselect_today = new Date();
	var dateselect_year = dateselect_today.getYear();
	var dateselect_month = dateselect_today.getMonth();
	var dateselect_day = dateselect_today.getDate();
	if (dateselect_year < 1900) dateselect_year += 1900;
	
	//year
	document.write('<select id="'+dateselect_yearElementsId+'" name="'+dateselect_yearElementsId+'" onchange="dateselect_change(this.form.id,'+"'"+dateselect_yearElementsId+"',"+"'"+dateselect_monthElementsId+"',"+"'"+dateselect_dayElementsId+"'"+')">');
	document.write('<option value=""></option>');
	for(i=0;i<dateselect_year_max;i++){
		var print_year = dateselect_year + i;
		document.write('<option value="'+print_year+'">'+print_year+'年</option>');
	}
	document.write('</select>');
	document.getElementById(dateselect_yearElementsId).value = dateselect_year;
	
	//month
	document.write('<select id="'+dateselect_monthElementsId+'" name="'+dateselect_monthElementsId+'" onchange="dateselect_change(this.form.id,'+"'"+dateselect_yearElementsId+"',"+"'"+dateselect_monthElementsId+"',"+"'"+dateselect_dayElementsId+"'"+')">');
	document.write('<option value=""></option>');
	for(i=0;i<dateselect_monthName.length;i++){
		var print_month = 1 + i;
		if(i == dateselect_month){
			dateselect_selected = " selected";
		}
		else {
			dateselect_selected = "";
		}
		document.write('<option value="'+print_month+'"'+dateselect_selected+'>'+dateselect_monthName[i]+'</option>');
	}
	document.write('</select>');
	
	//day
	var dateselect_week = dateselect_getWeek(dateselect_year,dateselect_month+1,1);
	document.write('<select id="'+dateselect_dayElementsId+'" name="'+dateselect_dayElementsId+'">');
	document.write('<option value=""></option>');
	for(i=1;i<dateselect_bissextile(dateselect_year,dateselect_month+1)+1;i++){
		if(i == dateselect_day){
			dateselect_selected = " selected";
		}
		else {
			dateselect_selected = "";
		}
		if(dateselect_week == 0){
			dateselect_font_style = ' style="color: #CC0000;background-color: #FFEEEE;"';
		}
		else if(dateselect_week == 6){
			dateselect_font_style = ' style="color: #0000CC;background-color: #EEEEFF;"';
		}
		else {
			dateselect_font_style = "";
		}
		var print_day = i;
		if(print_day < 10){
			print_day = "0" + i;
		}
		document.write('<option value="'+print_day+'"'+dateselect_selected+dateselect_font_style+'>'+print_day+'日('+dateselect_weeksName[dateselect_week]+')</option>');
		dateselect_week++;
		if(dateselect_week > 6){
			dateselect_week = 0;
		}
	}
	document.write('</select>');
//-->