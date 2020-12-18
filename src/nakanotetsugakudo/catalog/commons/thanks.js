<!--
	// config.cgiで通し番号を渡す設定になっている場合
	// 変数strに通し番号が入ります。
	// あとは適当に使ってください。
	var str = location.search;
	str = str.substring(1,str.length);
	document.write("<p>お問い合わせ番号 <strong>" + str + "</strong> を受け付けました</p>");
	
	var current_dir = location.pathname;
	var current_dirs = new Array();
	current_dirs = current_dir.split("/");
	if(current_dirs[current_dirs.length-1] != ""){
		current_dirs[current_dirs.length-1] = "";
		current_dir = current_dirs.join("/");
	}
	document.cookie = "mailform=; path=" + current_dir + "; expires=";
	
//-->