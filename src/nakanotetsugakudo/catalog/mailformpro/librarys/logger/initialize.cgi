if($_ENV{'mode'}){
	unshift @_ENV,'logger';
	
	@_Logger = &_DB("$config{'data.dir'}dat.logger.cgi");
	($sec,$min,$hour,$day,$mon,$year) = localtime(time);
	
	$_Logger_currentTime = time + (24*60*60);
	
	my($tId,$_Logger_started) = split(/\t/,(grep(/^Logger_started\t/,@_Logger))[0]);
	@_Logger = grep(!/^Logger_started\t/,@_Logger);
	if(!$_Logger_started){
		$_Logger_started = time;
	}
	push @_Logger,"Logger_started\t${_Logger_started}";
	
	my($tId,$_Logger_total) = split(/\t/,(grep(/^Logger_total\t/,@_Logger))[0]);
	@_Logger = grep(!/^Logger_total\t/,@_Logger);
	$_Logger_total++;
	push @_Logger,"Logger_total\t${_Logger_total}";
	
	$_Logger_timegoseby = int(($_Logger_currentTime - $_Logger_started) / (60*60*24));
	$_Logger_average = sprintf("%.2f",($_Logger_total / $_Logger_timegoseby));
	
	$_ENV{'logger'} = "[ 設置からの経過日数 ] ${_Logger_timegoseby}日間\n";
	$_ENV{'logger'} .= "[ 累積件数 ] ${_Logger_total}件\n";
	$_ENV{'logger'} .= "[ 1日平均 ] ${_Logger_average}件\n";
	
	$_Logger_flag = 1;
	@_Logger_browser = ();
	@_Logger_bw_name = ('Chrome','Firefox','IE6','IE7','IE8','IE9','IE10','IE11','Safari','Unknown Browser','Edge');
	@_Logger_bw_type = ('chrome','firefox','msie 6','msie 7','msie 8','msie 9','msie 10','Trident','safari','browser unknown','edge');
	for(my $cnt=0;$cnt<@_Logger_bw_type;$cnt++){
		($tId,$lqty) = split(/\t/,(grep(/^${_Logger_bw_name[$cnt]}\t/,@_Logger))[0]);
		$tId = $_Logger_bw_name[$cnt];
		if($_Logger_flag && $ENV{'HTTP_USER_AGENT'} =~ /$_Logger_bw_type[$cnt]/si){
			$lqty++;
			$_Logger_flag = 0;
		}
		if($lqty < 1){
			$lqty = 0;
		}
		else {
			my $par = sprintf("%.2f",$lqty / $_Logger_total * 100) . '%';
			push @_Logger_browser,"${tId}:${par} (${lqty})";
		}
		@_Logger = grep(!/^${_Logger_bw_name[$cnt]}\t/,@_Logger);
		push @_Logger,"${tId}\t${lqty}";
	}
	if($_Logger_flag){
		@_Logger = grep(!/^Unknown Browser\t/,@_Logger);
		$lqty++;
		push @_Logger,"Unknown Browser\t${lqty}";
	}
	
	$_Logger_Browser = join("／",@_Logger_browser);
	$_ENV{'logger'} .= "[ ブラウザ比 ] ${_Logger_Browser}\n";
	
	$_Logger_flag = 1;
	@_Logger_os = ();
	@_Logger_os_name = ('iPad','iPhone','Android','Windows Phone','Windows','OS X','Linux','Unknown OS');
	@_Logger_os_type = ('ipad','iphone','android','windows phone','windows','os x','linux','OS unknown');
	for(my $cnt=0;$cnt<@_Logger_os_type;$cnt++){
		($tId,$lqty) = split(/\t/,(grep(/^${_Logger_os_name[$cnt]}\t/,@_Logger))[0]);
		$tId = $_Logger_os_name[$cnt];
		if($_Logger_flag && $ENV{'HTTP_USER_AGENT'} =~ /$_Logger_os_type[$cnt]/si){
			$lqty++;
			$_Logger_flag = 0;
		}
		if($lqty < 1){
			$lqty = 0;
		}
		else {
			my $par = sprintf("%.2f",$lqty / $_Logger_total * 100) . '%';
			push @_Logger_os,"${tId}:${par} (${lqty})";
		}
		@_Logger = grep(!/^${_Logger_os_name[$cnt]}\t/,@_Logger);
		push @_Logger,"${tId}\t${lqty}";
	}
	if($_Logger_flag){
		@_Logger = grep(!/^Unknown OS\t/,@_Logger);
		$lqty++;
		push @_Logger,"Unknown OS\t${lqty}";
	}
	
	$_Logger_OS = join("／",@_Logger_os);
	$_ENV{'logger'} .= "[ OS比 ] ${_Logger_OS}\n";
	
	
	## 前年
	my $logId = sprintf("%04d",$year+1899);
	my($tId,$prevYearCount) = split(/\t/,(grep(/^${logId}\t/,@_Logger))[0]);
	
	## 前月
	$prevYear = $year;
	$prevMonth = $mon - 1;
	if($prevMonth < 0){
		$prevYear--;
		$prevMonth = 11;
	}
	my $logId = sprintf("%04d-%02d",$prevYear+1900,$prevMonth+1);
	my($tId,$prevMonCount) = split(/\t/,(grep(/^${logId}\t/,@_Logger))[0]);
	
	## year
	my $logId = sprintf("%04d",$year+1900);
	my($tId,$_Logger_CurrentYear) = split(/\t/,(grep(/^${logId}\t/,@_Logger))[0]);
	@_Logger = grep(!/^${logId}\t/,@_Logger);
	$_Logger_CurrentYear++;
	push @_Logger,"${logId}\t${_Logger_CurrentYear}";
	
	## month
	my $logId = sprintf("%04d-%02d",$year+1900,$mon+1);
	my($tId,$_Logger_CurrentMon) = split(/\t/,(grep(/^${logId}\t/,@_Logger))[0]);
	@_Logger = grep(!/^${logId}\t/,@_Logger);
	$_Logger_CurrentMon++;
	push @_Logger,"${logId}\t${_Logger_CurrentMon}";
	
	## daily
	my $logId = sprintf("%04d-%02d-%02d",$year+1900,$mon+1,$day);
	my($tId,$convQty) = split(/\t/,(grep(/^${logId}\t/,@_Logger))[0]);
	@_Logger = grep(!/^${logId}\t/,@_Logger);
	$convQty++;
	push @_Logger,"${logId}\t${convQty}";
	
	&_SAVE("$config{'data.dir'}dat.logger.cgi",join("\n",@_Logger));
	
	$_ENV{'logger'} .= "[ 今月 ] ${_Logger_CurrentMon}\n";
	if($prevMonCount > 0){
		my $par = sprintf("%.2f",$_Logger_CurrentMon / $prevMonCount * 100) . '%';
		$_ENV{'logger'} .= "[ 前月比 ] ${par}\n";
	}
	$_ENV{'logger'} .= "[ 今年 ] ${_Logger_CurrentYear}\n";
	if($prevYearCount > 0){
		my $par = sprintf("%.2f",$_Logger_CurrentYear / $prevYearCount * 100) . '%';
		$_ENV{'logger'} .= "[ 前年比 ] ${par}\n";
	}
}
1;