if($_POST{'mfp_script'} && &_EmailCheck($_POST{'email'})){
	$config{'disabled'} = 1;
	$_RESULT{'uri'} = $config{'mailauth.thanks'};
	$token = &_HASH(time . "." . $ENV{'REMOTE_ADDR'});
	&_SAVE("$config{'mailauth.dir'}${token}.cgi","\[\[${buffer}\]\]");
	
	## mail
	$config{'mailauth.uri'} = &_URI2PRAM($config{'mailauth.uri'},"module=mailauth&ses=${token}");
	$config{'mailauth.body'} =~ s/<_mailauth_uri_>/$config{'mailauth.uri'}/ig;
	&_SENDMAIL($_POST{'email'},$config{'mailfrom'},$config{'fromname'},$config{'mailauth.subject'},$config{'mailauth.body'},join('',@ResAttachedFiles),$_HTML{'HTMLMail'});
	##
}
else {
	$Error = 1;
}
1;