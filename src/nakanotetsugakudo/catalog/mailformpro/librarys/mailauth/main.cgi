&_GET;

if(-f "$config{'mailauth.dir'}$_GET{'ses'}.cgi"){
	$currentTime = time;
	if($currentTime < ((stat("$config{'mailauth.dir'}$_GET{'ses'}.cgi"))[9]+$config{'mailauth.expire'})){
		($Serial,$InputTime,$ConfirmTime,$_ENV{'mfp_uniqueuser'}) = split(/\,/,&_LOAD($config{'file.data'}));
		$config{'buffer'} = &_LOAD("$config{'mailauth.dir'}$_GET{'ses'}.cgi");
		if($config{'buffer'} =~ /\[\[(.*?)\]\]/si){
			$config{'buffer'} = $1;
			&_COOKIE;
			&_POST;
			&_MAINPROCESS;
			&_RESULT;
		}
		unlink "$config{'mailauth.dir'}$_GET{'ses'}.cgi";
	}
	else {
		&_Error(11);
	}
}
else {
	&_Error(11);
}
1;