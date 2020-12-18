&_GET;
&_COOKIE;

if(-f "$config{'data.dir'}json/$_COOKIE{'SES'}.cgi" && $_GET{'callback'}){
	## secure
	$secure = 1;
	if(!($ENV{'HTTP_REFERER'} =~ /$config{'thanks.domain'}/si)){
		$secure = 0;
	}
	$currentTime = time;
	if($currentTime > ((stat("$config{'data.dir'}json/$_COOKIE{'SES'}.cgi"))[9]+$config{'thanks.expire'})){
		$secure = 0;
		unlink "$config{'data.dir'}json/$_COOKIE{'SES'}.cgi";
	}
	##
	if($secure) {
		$json = &_LOAD("$config{'data.dir'}json/$_COOKIE{'SES'}.cgi");
		print "Pragma: no-cache\n";
		print "Cache-Control: no-cache\n";
		print "Content-type: text/javascript; charset=UTF-8\n\n";
		print "$_GET{'callback'}($json);";
	}
	else {
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/javascript; charset=UTF-8\n\n";
	print "$_GET{'callback'}(null);";
	}
}
else {
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/javascript; charset=UTF-8\n\n";
	print "$_GET{'callback'}(null);";
}
exit;