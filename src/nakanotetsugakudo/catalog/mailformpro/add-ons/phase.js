var mfpPhase = new Array();
var mfpPhaseLabel = new Array();
var mfpPhaseCurrent = 0;
var mfpPhaseMax = 0;

function mfpPhaseNextButton(){
	var err = "";
	var tObj = mfp.$(mfpPhase[mfpPhaseCurrent]).getElementsByTagName("input");
	for(var i=0;i<tObj.length;i++){
		if(mfp.check(tObj[i]) && !err)
			err = tObj[i];
	}
	var tObj = mfp.$(mfpPhase[mfpPhaseCurrent]).getElementsByTagName("select");
	for(var i=0;i<tObj.length;i++){
		if(mfp.check(tObj[i]) && !err)
			err = tObj[i];
	}
	var tObj = mfp.$(mfpPhase[mfpPhaseCurrent]).getElementsByTagName("textarea");
	for(var i=0;i<tObj.length;i++){
		if(mfp.check(tObj[i]) && !err)
			err = tObj[i];
	}
	
	if(!err){
		mfp.$(mfpPhase[mfpPhaseCurrent]).style.display = "none";
		if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
			document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_inactive_phase';
		mfpPhaseCurrent++;
		
		mfp.$(mfpPhase[mfpPhaseCurrent]).style.display = "block";
		if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
			document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_active_phase';
		//scrollTo(0,mfp.$(mfpPhase[mfpPhaseCurrent]).offsetTop);
		scrollTo(0,mfp.$("mfp_phase_stat").offsetTop);
	}
	else {
		err.focus();
		//scrollTo(0,mfp.$("mfp_phase_stat").offsetTop);
	}
}
function mfpPhasePrevButton(){
	mfp.$(mfpPhase[mfpPhaseCurrent]).style.display = "none";
	if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
		document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_inactive_phase';
	mfpPhaseCurrent--;
	mfp.$(mfpPhase[mfpPhaseCurrent]).style.display = "block";
	if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
		document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_active_phase';
	//scrollTo(0,mfp.$(mfpPhase[mfpPhaseCurrent]).offsetTop);
	scrollTo(0,mfp.$("mfp_phase_stat").offsetTop);
}
mfp.extend.event('confirm',
	function(){
		if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
			document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_inactive_phase';
		if(document.getElementById('mfp_phase_confirm_label'))
			document.getElementById('mfp_phase_confirm_label').className = 'mfp_active_phase';
	}
);
mfp.extend.event('cancel',
	function(){
		if(document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label'))
			document.getElementById(mfpPhase[mfpPhaseCurrent]+'_label').className = 'mfp_active_phase';
		if(document.getElementById('mfp_phase_confirm_label'))
			document.getElementById('mfp_phase_confirm_label').className = 'mfp_inactive_phase';
	}
);


mfp.extend.event('startup',
	function(){
		if(!document.getElementById('mfp_phase_stat')){
			var elm = mfp.d.createElement('ul');
			elm.id = 'mfp_phase_stat';
			mfp.Mfp.parentNode.insertBefore(elm,mfp.$('mfp_phase_confirm'));
		}
	}
);

mfp.extend.event('ready',
	function(){
		var tObj = document.getElementsByTagName("div");
		for(var i=0;i<tObj.length;i++){
			if(tObj[i].className == 'mfp_phase'){
				if(!tObj[i].id)
					tObj[i].id = 'mfp_phase_' + mfpPhase.length;
				tObj[i].style.display = 'none';
				mfpPhase.push(tObj[i].id);
				
				// stat label
				var labelTEXT = tObj[i].getAttribute('summary') || mfpLang['Phase'].replace('$1',mfpPhase.length);
				if(!document.getElementById(tObj[i].id+'_label')){
					var elm = mfp.d.createElement('li');
					elm.id = tObj[i].id+'_label';
					elm.className = 'mfp_inactive_phase';
					elm.innerHTML = labelTEXT;
					mfp.$('mfp_phase_stat').appendChild(elm);
					
					var elm = mfp.d.createElement('li');
					elm.className = 'mfp_phase_arrow';
					elm.innerHTML = '&gt;';
					mfp.$('mfp_phase_stat').appendChild(elm);
				}
				mfpPhaseLabel.push(labelTEXT);
			}
		}
		if(!document.getElementById('mfp_phase_confirm_label')){
			var elm = mfp.d.createElement('li');
			elm.id = 'mfp_phase_confirm_label';
			elm.className = 'mfp_inactive_phase';
			elm.innerHTML = mfpLang['PhaseConfirm'];
			mfp.$('mfp_phase_stat').appendChild(elm);
		}
		mfpPhaseLabel.push(mfpLang['PhaseConfirm']);
		var labelHTML = "";
		mfpPhaseMax = mfpPhase.length-1;
		for(var i=0;i<mfpPhase.length;i++){
			if(i == 0){
				mfp.$(mfpPhase[i]).style.display = 'block';
				if(document.getElementById(mfpPhase[i]+'_label'))
					document.getElementById(mfpPhase[i]+'_label').className = 'mfp_active_phase';
			}
			
			var bObj = mfp.$(mfpPhase[i]).getElementsByTagName("button");
			var bNext = false;
			var bPrev = false;
			for(var ii=0;ii<bObj.length;ii++){
				if(bObj[ii].className.indexOf('mfp_prev') > -1){
					bPrev = true;
					bObj[ii].onclick = function(){
						mfpPhasePrevButton();
					}
				}
				if(bObj[ii].className.indexOf('mfp_next') > -1){
					bNext = true;
					bObj[ii].onclick = function(){
						mfpPhaseNextButton()
					}
				}
			}
			
			if(!bNext && i != (mfpPhase.length-1)){
				var elm = mfp.d.createElement('button');
				elm.className = 'mfp_next';
				elm.innerHTML = mfpLang['ButtonNext'].replace('$1',mfpPhaseLabel[i+1]);
				elm.onclick = function(){
					mfpPhaseNextButton()
				}
				mfp.$(mfpPhase[i]).appendChild(elm);
			}
			if(!bPrev && i != 0){
				var elm = mfp.d.createElement('button');
				elm.className = 'mfp_prev';
				elm.innerHTML = mfpLang['ButtonPrev'].replace('$1',mfpPhaseLabel[i-1]);
				elm.onclick = function(){
					mfpPhasePrevButton();
				}
				mfp.$(mfpPhase[i]).appendChild(elm);
			}
			var elm = mfp.d.createElement('div');
			elm.style.clear = 'both';
			mfp.$(mfpPhase[i]).appendChild(elm);
		}
	}
);
