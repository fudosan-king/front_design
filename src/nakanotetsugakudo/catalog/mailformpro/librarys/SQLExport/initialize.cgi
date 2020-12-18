if($config{'SQLserver'} ne $null && -f $config{'file.sql'}){
	$_HTML{'SQL'} = &_LOAD($config{'file.sql'});
}
1;