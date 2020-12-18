var SpeechObj = new Object();
SpeechObj.disabled = false;
SpeechObj.current = null;
try {
	var recognition = new webkitSpeechRecognition();
	recognition.lang = 'ja-JP';
	//recognition.continuous = true;
	recognition.onresult = function(event) {
		if(event.results.length > 0 && mfp.$(SpeechObj.current))
			mfp.$(SpeechObj.current).value += event.results[event.results.length-1][event.results[event.results.length-1].length-1].transcript;
	}
	mfp.extend.event('focus',
		function(obj){
			SpeechObj.current = obj.id;
			recognition.stop();
			if(obj.type == "textarea")
				recognition.continuous = true;
			else
				recognition.continuous = false;
			recognition.start();
		}
	);
	mfp.extend.event('blur',
		function(obj){
			if(!SpeechObj.disabled)
				recognition.stop();
		}
	);
}
catch(e){
	SpeechObj.disabled = true;
}