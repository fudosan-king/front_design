if($config{'reqonce.session'}){
	$token = "$config{'reqonce.dir'}$_COOKIE{'SES'}.ses.cgi";
	&_SAVE($token,$null);
}
if($config{'reqonce.email'} && &_EmailCheck($_POST{'email'})){
	$token = "$config{'reqonce.dir'}$_POST{'email'}.email.cgi";
	&_SAVE($token,$null);
}
1;