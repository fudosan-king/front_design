if(-d $config{'dir.cart'}){
	$cartpath = "$config{'dir.cart'}$_COOKIE{'SES'}.cgi";
	if(-f $cartpath){
		unlink $cartpath;
	}
}
1;