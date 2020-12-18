if(-f $config{"file.iplogs"}){
	push @_ENV,'IPLogs';
	@iplogs = &_DB($config{"file.iplogs"});
	@iplogs = grep(/\t$ENV{'REMOTE_ADDR'}\t/,@iplogs);
	for(my($cnt)=0;$cnt<@iplogs;$cnt++){
		($iptime,$ip,$pages) = split(/\t/,$iplogs[$cnt]);
		if(index($pages,"q=") > -1 || index($pages,"p=") > -1){
			$pages = &decodeURI($pages);
		}
		$_ENV{'IPLogs'} .= "${iptime} : ${pages}\n";
	}
}
1;