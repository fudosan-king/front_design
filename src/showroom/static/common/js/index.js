$(function(){
	// 物件検索
	$('[data-action=search]').on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		var $form = $('<form action="/search_result" method="POST" style="display: none;" />').appendTo($('body'));
		var areas = $(this).data('area');
		if(typeof areas == 'number') {
			areas = [areas];
		} else {
			areas = areas.split(',');
		}
		for(var i = 0; i < areas.length; i++) {
			$form.append($('<input name="areas">').val(areas[i]));
		}
		$form.submit();
	});
});
