
mfpConfigs['SoundEffectPreset'].push('demo_wellcome');
mfpConfigs['SoundEffectPreset'].push('demo_error');
mfpConfigs['SoundEffectPreset'].push('demo_select');
mfpConfigs['SoundEffectPreset'].push('demo_text');
mfpConfigs['SoundEffectPreset'].push('demo_send');
mfpConfigs['SoundEffectPreset'].push('demo_confirm');
mfpConfigs['SoundEffectPreset'].push('demo_email');
mfpConfigs['SoundEffectPreset'].push('demo_cancel');

mfp.extend.event('ready',
	function(){
		setTimeout(function(){
			mfp.play('demo_wellcome');
		},1000);
	}
);

mfp.extend.event('focus',
	function(obj){
		if((obj.type == "text" || obj.type == "textarea") && obj.value == obj.defaultValue)
			mfp.play('demo_text');
		else if(obj.type == "select-one")
			mfp.play('demo_select');
		else if(obj.type == "email" && obj.value == obj.defaultValue)
			mfp.play('demo_email');
	}
);
mfp.extend.event('error',
	function(obj){
		mfp.play('demo_error');
	}
);
mfp.extend.event('confirm',
	function(obj){
		mfp.play('demo_confirm');
	}
);
mfp.extend.event('send',
	function(obj){
		mfp.play('demo_send');
	}
);
mfp.extend.event('cancel',
	function(obj){
		mfp.play('demo_cancel');
	}
);
