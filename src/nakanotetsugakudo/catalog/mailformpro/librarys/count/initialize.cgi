if(-f $config{'file.count'}){
	unshift @_ENV,'count.Manager';
	$_ENV{'count.Manager'} = $config{'uri'} . "?module=count&key=$config{'count.DownloadURIPassCode'}";
}
1;