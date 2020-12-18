
function mfpProgressBar(){
	if(!mfp.CurrentElement)
		mfp.CurrentElement = 1;
	var width = Math.floor(((mfp.CurrentElement) / (mfp.Index.length-1)) * 100);
	var step = (mfp.CurrentElement) + '/' + (mfp.Index.length-1) + ' ( ' + width + ' % )';
	mfp.$('mfp_progress_text').innerHTML = step;
	mfp.$('mfp_progress_bar').style.width = width + '%';
}

mfp.extend.event('ready',
	function(){
		var elm = mfp.d.createElement('div');
		elm.id = 'mfp_progress';
		mfp.Mfp.parentNode.insertBefore(elm,mfp.$('mfp_warning'));
		
		elm = mfp.d.createElement('div');
		elm.id = 'mfp_progress_bar';
		mfp.$('mfp_progress').appendChild(elm);
		elm = mfp.d.createElement('div');
		elm.id = 'mfp_progress_text';
		mfp.$('mfp_progress').appendChild(elm);
		
		mfp.css(mfp.$('mfp_progress'),{
			"position": "relative",
			"height": "20px",
			"borderRadius": "5px",
			"margin": "5px auto",
			"backgroundColor": '#999'
		});
		
		mfp.css(mfp.$('mfp_progress_bar'),{
			"position": "absolute",
			"top": "0px",
			"left": "0px",
			"width": "0px",
			"borderRadius": "5px",
			"height": "20px",
			"color": "#FFF",
			"textAlign": "center",
			"backgroundColor": '#090'
		});
		mfp.css(mfp.$('mfp_progress_text'),{
			"position": "absolute",
			"top": "3px",
			"left": "0px",
			"zIndex": "10",
			"width": "100%",
			"fontSize": "12px",
			"color": "#FFF",
			"textAlign": "center"
		});
		setTimeout(function(){
			mfpProgressBar();
		},1000);
	}
);

mfp.extend.event('blur',
	function(){
		mfpProgressBar();
	}
);
mfp.extend.event('focus',
	function(){
		mfpProgressBar();
	}
);