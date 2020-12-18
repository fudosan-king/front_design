//
// reserve.js 1.0.0
// 2014-10-26
//

var mfpReserveData = [];
mfpReserveData["json"] = null;
mfpReserveData["week"] = new Array('日','月','火','水','木','金','土');
mfpReserveData["warning"] = 3; // 3未満の場合△表示
mfpReserveData["current"] = null;
mfpReserveData["currentObject"] = [];
mfpReserveData["selected"] = [];
mfpReserveData["className"] = null;
mfpReserveData["price"] = 0;
function mfpReserveSelected(){
	if(mfpReserveData["current"])
		mfp.$(mfpReserveData["current"]).className = mfpReserveData["className"];
	mfpReserveData["className"] = this.className;
	var arr = [];
	arr = this.id.split('-');
	mfpReserveData["selected"]["item"] = arr[1];
	mfpReserveData["selected"]["date"] = arr[2];
	mfpReserveData["currentObject"]["item"] = mfpReserveData["json"]["item"][arr[1]];
	mfpReserveData["currentObject"]["date"] = mfpReserveData["json"]["date"][arr[2]];
	if(mfpReserveData["json"]["stock"][arr[1]][arr[2]]["price"])
		mfpReserveData["currentObject"]["price"] = mfpReserveData["json"]["stock"][arr[1]][arr[2]]["price"];
	
	mfp.$('mfp_reserve_date').value = mfpReserveData["json"]["date"][arr[2]];
	mfp.$('mfp_reserve_item').value = mfpReserveData["json"]["item"][arr[1]];
	mfp.check(mfp.$('mfp_reserve_date'));
	mfp.check(mfp.$('mfp_reserve_item'));
	this.className = 'mfp_reserve_current';
	mfpReserveData["current"] = this.id;
	mfp.calc();
}
function mfpReserveDataReady(json){
	mfpReserveData["json"] = json;
	var div = document.createElement('div');
	div.id = 'mfp_reserve_inner';
	var tableTH = document.createElement('table');
	tableTH.className = 'mfp_reserve_table_label';
	for(var i=0;i<3;i++){
		var tr = document.createElement('tr');
		var th = document.createElement('th');
		th.innerHTML = '&nbsp;';
		tr.appendChild(th);
		tableTH.appendChild(tr);
	}
	
	var tableTD = document.createElement('table');
	tableTD.className = 'mfp_reserve_table_value';
	var tr = document.createElement('tr');
	for(var i=0;i<json["month"].length;i++){
		var th = document.createElement('td');
		th.colSpan = json["month"][i]["qty"];
		th.innerHTML = json["month"][i]["label"];
		tr.appendChild(th);
	}
	tableTD.appendChild(tr);
	
	for(var i=0;i<json["item"].length;i++){
		var tr = document.createElement('tr');
		var trDate = document.createElement('tr');
		var trWeek = document.createElement('tr');
		var th = document.createElement('th');
		th.innerHTML = json["item"][i];
		tr.appendChild(th);
		tableTH.appendChild(tr);
		var tr = document.createElement('tr');
		for(var ii=0;ii<json["date"].length;ii++){
			var td = document.createElement('td');
			td.style.textAlign = 'center';
			if(json["select"]){
				var select = document.createElement('select');
				select.id = 'mfp_reserve_item-'+i+'-'+ii;
				select.name = json["item"][i]+'_'+json["date"][ii];
				select.onchange = function(){
					mfp.calc();
					mfp.extend.run('change',this);
				}
				mfp.Names.unshift(select.name);
				mfp.Elements[select.name] = new Object();
				mfp.Elements[select.name].group = new Array(select.id);
				mfp.Elements[select.name].type = 'select-one';
				
				var option = document.createElement('option');
				option.value = "";
				var label = '○';
				var max = 0;
				if(json["stock"][i][ii]){
					if(json["stock"][i][ii]["qty"] == 0 || json["stock"][i][ii]["qty"] == null){
						label = '×';
						td.className = 'mfp_reserve_disabled';
					}
					else if(json["stock"][i][ii]["qty"] < mfpReserveData["warning"]){
						label = '△';
						td.className = 'mfp_reserve_warning';
						max = json["stock"][i][ii]["qty"];
						mfp.Items[select.id] = new Object();
						mfp.Items[select.id].price = json["stock"][i][ii]["price"];
					}
					else {
						td.className = 'mfp_reserve_active';
						max = json["stock"][i][ii]["qty"];
						mfp.Items[select.id] = new Object();
						mfp.Items[select.id].price = json["stock"][i][ii]["price"];
					}
				}
				else {
					label = '×';
					td.className = 'mfp_reserve_disabled';
				}
				option.text = label;
				select.appendChild(option);
				for(var iii=1;iii<=max && iii<json["selectQty"];iii++){
					var option = document.createElement('option');
					option.value = iii;
					option.text = iii;
					select.appendChild(option);
				}
				
				td.appendChild(select);
			}
			else {
				var label = '○';
				if(json["stock"][i][ii]){
					if(json["stock"][i][ii]["qty"] == 0 || json["stock"][i][ii]["qty"] == null){
						label = '×';
						td.className = 'mfp_reserve_disabled';
					}
					else if(json["stock"][i][ii]["qty"] < mfpReserveData["warning"]){
						label = '△';
						td.className = 'mfp_reserve_warning';
						td.id = 'mfp_reserve_item-'+i+'-'+ii;
						td.onclick = mfpReserveSelected;
					}
					else {
						td.className = 'mfp_reserve_active';
						td.id = 'mfp_reserve_item-'+i+'-'+ii;
						td.onclick = mfpReserveSelected;
					}
				}
				else {
					label = '×';
					td.className = 'mfp_reserve_disabled';
				}
				td.innerHTML = label;
			}
			tr.appendChild(td);
			if(i == 0){
				td = document.createElement('td');
				var d = [];
				d = json["date"][ii].split('-');
				var w = new Date(d[0]+'/'+d[1]+'/'+d[2]);
				td.innerHTML = d[2];
				td.className = "mfp_reserve_week_"+w.getDay();
				trDate.appendChild(td);
				
				td = document.createElement('td');
				td.style.textAlign = 'center';
				td.innerHTML = mfpReserveData["week"][w.getDay()];
				td.className = "mfp_reserve_week_"+w.getDay();
				trWeek.appendChild(td);
			}
		}
		if(i == 0){
			tableTD.appendChild(trDate);
			tableTD.appendChild(trWeek);
		}
		tableTD.appendChild(tr);
	}
	mfp.$('mfp_reserve_wrapper').appendChild(tableTH);
	div.appendChild(tableTD);
	mfp.$('mfp_reserve_wrapper').appendChild(div);
}

mfp.extend.event('calc',
	function(){
		if(mfpReserveData["currentObject"]["price"]){
			mfp.addcart(mfpReserveData["currentObject"]["item"]+'('+mfpReserveData["currentObject"]["date"]+')','reserve_item',mfpReserveData["currentObject"]["price"],1);
			mfp.Price += mfpReserveData["currentObject"]["price"];
		}
	}
);
mfp.extend.event('startup',
	function(){
		if(mfp.$('mfp_reserve_wrapper'))
			mfp.call(mfp.$('mfpjs').src,'module=reserve&type=json&callback=mfpReserveDataReady');
	}
);
