//
// SYNCK GRAPHICA
// mailformpro config file
// _%%Version%%_
//
var mfpConfigs = {
	'Time': '_%%Time%%_',
	'PageView': '_%%PageView%%_',
	'InputTimeAVG': '_%%InputTimeAVG%%_',
	'LimitOver': '_%%LimitOver%%_',
	'Acceptable': '_%%Acceptable%%_',
	'OpenDate': '_%%OpenDate%%_',
	'CloseDate': '_%%CloseDate%%_',
	'DisableURI': '_%%DisableURI%%_',
	'ConfirmationMode': '_%%ConfirmationMode%%_',
	'ResumeExpire': '',
	'OverlayOpacity': 0.8,
	'NoClassChange': false,
	'LoadingScreen': true,
	'LoadingImage': {
		'width': 40,
		'height': 40
	},
	'SizeAjustPx': 6,
	'Stripe': ['dt','dd','tr'],
	'SoundEffect': false,
	'SoundEffectDir': 'mfp.statics/audios/',
	'SoundEffectPreset': ['click'],
	'SoundEffectVolume': 0.3,
	'mfpButton': '<div class="mfp_buttons"><button id="mfp_button_send" class="mfp_element_button" onclick="mfp.sendmail()">'+mfpLang['ButtonSend']+'</button>&nbsp;<button id="mfp_button_cancel" class="mfp_element_button" onclick="mfp.cancel()">'+mfpLang['ButtonCancel']+'</button></div>'
};
