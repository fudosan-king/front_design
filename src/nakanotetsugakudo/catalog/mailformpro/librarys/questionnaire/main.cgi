&_GET;

if($config{'questionnaire.json'} || $config{'questionnaire.result'}){
	##
	my(@log) = &_DB($config{'questionnaire.file'});
	while(@log > 0){
		my($q,$a,$qty) = split(/\t/,$log[0]);
		@q = grep(/^${q}\t/,@log);
		shift @log;
		@log = grep(!/^${q}\t/,@log);
		if(@q > 0){
			@json = ();
			push @title,"'${q}'";
			for(my($cnt)=0;$cnt<@q;$cnt++){
				my($q,$a,$qty) = split(/\t/,$q[$cnt]);
				if($qty > 0){
					push @json,"\['${a}', ${qty}\]";
				}
			}
			if(@json > 0){
				$json = join(",\n",@json);
				push @jsons,"\[${json}\]";
			}
		}
	}
	$json = join(",\n",@jsons);
	$title = join(",\n",@title);
	##
}

if($config{'questionnaire.json'} && $_GET{'mode'} eq 'json'){
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/html; charset=UTF-8\n\n";
	print "$_GET{'callback'}(\[${title}\],${json})";
}
elsif($config{'questionnaire.result'}){
	$html = &_LOAD("./librarys/$_GET{'module'}/template.tpl");
	$html =~ s/_%%json%%_/$json/ig;
	$html =~ s/_%%titles%%_/$title/ig;
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/html; charset=UTF-8\n\n";
	print $html;
}
else {
	&_Error(0);
}
1;