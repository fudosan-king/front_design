@CountElements = split(/\,/,$config{'count.element.name'});
@CountData = &_DB($config{'file.count'});
for(my($c)=0;$c<@CountElements;$c++){
	if($_POST{$CountElements[$c]} ne $null){
		my($CountElementName,$CountValue,$CountQty) = split(/\t/,(grep(/^${CountElements[$c]}\t$_POST{$CountElements[$c]}\t/,@CountData))[0]);
		@CountData = grep(!/^${CountElements[$c]}\t$_POST{$CountElements[$c]}\t/,@CountData);
		$CountQty++;
		my @log = ($CountElements[$c],$_POST{$CountElements[$c]},$CountQty);
		push @CountData,join("\t",@log);
	}
}
&_SAVE($config{'file.count'},join("\n",@CountData));
1;