// ---------- CONTACT CONFIGURATIONS ----------

var validateRecaptcha = function(token) {
	if(token.length != 0){
        $('#token-recaptcha').val(token);
        $("#goSubmit").prop("disabled", false)
    }
};

var expiredRecaptcha = function() {
	$('#token-recaptcha').val('');
    $("#goSubmit").prop("disabled", true)
    grecaptcha.reset();
}

var onloadCallback = function() {
	grecaptcha.render('grecaptchaV2', {
		'sitekey' : '6LdPxMoZAAAAAC3loiP1zl9r44blp-QySkmbiLoG',
		'callback': validateRecaptcha,
		'expired-callback': expiredRecaptcha
	});
};

// ---------- SELL CONTACT CONFIGURATIONS ----------

var sellValidateRecaptcha = function(token) {
	if(token.length != 0){
        $('#token-recaptcha').val(token);
        $("#goSubmit").prop("disabled", false)
    }
};

var sellExpiredRecaptcha = function() {
	$('#token-recaptcha').val('');
    $("#goSubmit").prop("disabled", true)
    grecaptcha.reset();
}

var sellOnloadCallback = function() {
	grecaptcha.render('grecaptchaV2', {
		'sitekey' : '6LdPxMoZAAAAAC3loiP1zl9r44blp-QySkmbiLoG',
		'callback': sellValidateRecaptcha,
		'expired-callback': sellExpiredRecaptcha
	});
};