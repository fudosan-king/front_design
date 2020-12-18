my @json = ();
foreach $key ( keys( %_POST ) ) {
	my($val) = &_SANITIZING($_POST{$key});
	if(index($key,'mfp_') == -1 && $key ne 'resbody'){
		push @json,"\'${key}\': \'${val}\'\n";
	}
}
my($json) = '{' . join(',',@json) . '}';
&_SAVE($config{'data.dir'} . "json/$_COOKIE{'SES'}.cgi",$json);

1;