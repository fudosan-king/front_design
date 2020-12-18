my @log = &_DB($config{'questionnaire.file'});
foreach $key (keys(%_POST)){
	if($key =~ /^$config{'questionnaire.prefix'}/si){
		my @a = split(/\n/,$_POST{$key});
		for(my $cnt=0;$cnt<@a;$cnt++){
			my $hash = "${key}\t${a[$cnt]}";
			my($q,$a,$qty) = split(/\t/,(grep(/^${hash}\t/,@log))[0]);
			@log = grep(!/^${hash}\t/,@log);
			$qty++;
			push @log,"${key}\t${a[$cnt]}\t${qty}";
		}
	}
}
@log = sort { (split(/\t/,$a))[0] cmp (split(/\t/,$b))[0]} @log;
&_SAVE($config{'questionnaire.file'},join("\n",@log));
1;