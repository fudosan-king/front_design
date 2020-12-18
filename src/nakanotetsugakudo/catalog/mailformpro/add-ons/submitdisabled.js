var mfpSubmitDisabledLabels = new Array();
mfp.extend.event('startup',
	function(){
		var tObj = mfp.Mfp.getElementsByTagName('button');
		var buttonCnt = 0;
		for(var i=0;i<tObj.length;i++){
			if(tObj[i].type == "submit" && tObj[i].getAttribute('data-disabled')){
				if(!tObj[i].id)
					tObj[i].id = 'mfp_submit_button_'+buttonCnt;
				mfpSubmitDisabledLabels[tObj[i].id] = tObj[i].innerHTML;
				buttonCnt++;
			}
		}
	}
);
mfp.extend.event('problem',
	function(obj){
		var tObj = mfp.Mfp.getElementsByTagName('button');
		for(var i=0;i<tObj.length;i++){
			if(tObj[i].type == "submit" && tObj[i].getAttribute('data-disabled')){
				tObj[i].innerHTML = tObj[i].getAttribute('data-disabled');
				tObj[i].disabled = true;
			}
		}
	}
);
mfp.extend.event('noproblem',
	function(obj){
		var tObj = mfp.Mfp.getElementsByTagName('button');
		for(var i=0;i<tObj.length;i++){
			if(tObj[i].type == "submit" && tObj[i].getAttribute('data-disabled')){
				tObj[i].innerHTML = mfpSubmitDisabledLabels[tObj[i].id];
				tObj[i].disabled = false;
			}
		}
	}
);