$currentTime = time;
if($config{'reqonce.session'}){
	$token = "$config{'reqonce.dir'}$_COOKIE{'SES'}.ses.cgi";
	if(-f $token){
		if($config{'reqonce.expire'} == 0){
			$Error = $config{'reqonce.err'};
		}
		elsif($currentTime > ((stat($token))[9]+$config{'reqonce.expire'})){
			$Error = $config{'reqonce.err'};
		}
	}
}
if($config{'reqonce.email'} && &_EmailCheck($_POST{'email'})){
	$token = "$config{'reqonce.dir'}$_POST{'email'}.email.cgi";
	if(-f $token){
		if($config{'reqonce.expire'} == 0){
			$Error = $config{'reqonce.err'};
		}
		elsif($currentTime > ((stat($token))[9]+$config{'reqonce.expire'})){
			$Error = $config{'reqonce.err'};
		}
	}
}
1;