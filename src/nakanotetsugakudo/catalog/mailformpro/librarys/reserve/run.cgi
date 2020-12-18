my(@reservedata) = &_DB($config{"file.reserve"});
if($_POST{$config{"reserve.date.element.name"}} && $_POST{$config{"reserve.item.element.name"}}){
	my $item = $_POST{$config{"reserve.item.element.name"}};
	my $date = $_POST{$config{"reserve.date.element.name"}};
	my $id = "${date}\t${item}\t";
	my($date,$item,$qty,$price) = split(/\t/,(grep(/^${id}/,@reservedata))[0]);
	if($date ne $null && $item ne $null && $qty ne $null){
		@reservedata = grep(!/^${id}/,@reservedata);
		$qty--;
		if($qty < 0){
			$qty = 0;
		}
		my @day = ($date,$item,$qty,$price);
		push @reservedata,join("\t",@day);
		@reservedata = sort { (split(/\t/,$a))[0] cmp (split(/\t/,$b))[0]} @reservedata;
		&_SAVE($config{"file.reserve"},join("\n",@reservedata));
	}
}
1;