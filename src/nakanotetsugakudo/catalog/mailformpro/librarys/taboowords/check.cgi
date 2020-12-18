foreach my $key(keys(%_GET)){
	for(my $cnt=0;$cnt<@TabooWords;$cnt++){
		if($_GET{$key} =~ /$TabooWords[$cnt]/si){
			$Error = $config{'taboowords.err'};
		}
	}
}
1;