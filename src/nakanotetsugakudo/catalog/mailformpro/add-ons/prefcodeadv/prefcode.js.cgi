
if($_GET{'q'} ne $null){
	@db = &_DB("$config{'dir.AddOns'}/prefcodeadv/postcode.db.cgi");
	$_GET{'q'} =~ s/\-//ig;
	$_GET{'q'} =~ s/　/ /ig;
	@z = ('０','１','２','３','４','５','６','７','８','９');
	@h = ('0','1','2','3','4','5','6','7','8','9');
	for(my $i=0;$i<@z;$i++){
		$_GET{'q'} =~ s/${z[$i]}/${h[$i]}/ig;
	}
	@q = split(/ /,$_GET{'q'});
	for(my $cnt=0;$cnt<@q;$cnt++){
		if($q[$cnt] =~ /[0-9]/si){
			@db = grep(/^$q[$cnt]/,@db);
		}
		else {
			@db = grep(/$q[$cnt]/,@db);
		}
	}
	for(my $cnt=0;$cnt<@db;$cnt++){
		($zip,$address,$a1,$a2,$a3) = split(/\,/,$db[$cnt]);
		$r[0] = $zip;
		$r[1] = substr($address,0,$a1);
		$r[2] = substr($address,$a1,$a2);
		$r[3] = substr($address,$a1+$a2,$a3);
		push @json,"\['${r[0]}','${r[1]}','${r[2]}','${r[3]}'\]";
	}
	$json = join("\,",@json);
	$js = <<"	__HTML__";
		prefcodeCallback(\{
			id: "$_GET{'id'}",
			add1: "$_GET{'a1'}",
			add2: "$_GET{'a2'}",
			add3: "$_GET{'a3'}",
			zip: "$_GET{'postcode'}",
			result: \[${json}\]
		\});
	__HTML__
	#$js = "prefcodeCallback(\{\[${json}\]\});";
}
else {
	$js = <<"	__HTML__";
		prefcodeCallback(\{
			id: "$_GET{'id'}",
			add1: "$_GET{'a1'}",
			add2: "$_GET{'a2'}",
			add3: "$_GET{'a3'}",
			zip: "$_GET{'postcode'}",
			result: \[\]
		\});
	__HTML__
}
1;