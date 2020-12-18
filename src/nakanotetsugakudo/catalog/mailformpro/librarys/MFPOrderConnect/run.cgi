my @OrderData = ();
flock(FH, LOCK_EX);
	open(FH,$config{'file.order.connect.data'});
		@OrderData = <FH>;
	close(FH);
flock(FH, LOCK_NB);
my $OrderData = join('',@OrderData);
$OrderData =~ s/\r//ig;
@OrderData = split(/\n/,$OrderData);

## Order Data Att
@OrderField = split(/<\|>/,$_TEXT{'MFPOrderConnectArch'});

#$OrderField[15] = ''; #合計金額

#$OrderField[21] = ''; #name
#$OrderField[22] = ''; #qty
#$OrderField[23] = ''; #単位
#$OrderField[24] = ''; #単価
#$OrderField[25] = ''; #金額

@OrderItems = split(/\n/,$_ENV{'mfp_cart'});
$OrderTotalPrice = 0;
for(my $cnt=0;$cnt<@OrderItems;$cnt++){
	($ProductName,$ProductId,$ProductAmt,$ProductQty) = split(/\,/,$OrderItems[$cnt]);
	$OrderField[21+($cnt*5)] = "${ProductName}(${ProductId})"; #name
	$OrderField[22+($cnt*5)] = $ProductQty; #qty
	$OrderField[23+($cnt*5)] = '個'; #単位
	$OrderField[24+($cnt*5)] = $ProductAmt; #単価
	$OrderField[25+($cnt*5)] = ($ProductAmt * $ProductQty); #金額
	$OrderTotalPrice += ($ProductAmt * $ProductQty);
}
$OrderField[15] = $OrderTotalPrice;
$_TEXT{'MFPOrderConnectArch'} = join('<|>',@OrderField);
## /
$_TEXT{'MFPOrderConnectArch'} =~ s/\r//ig;
$_TEXT{'MFPOrderConnectArch'} =~ s/\n//ig;
push @OrderData,$_TEXT{'MFPOrderConnectArch'};
$OrderData = join("\n",@OrderData);

flock(FH, LOCK_EX);
	open(FH,">$config{'file.order.connect.data'}");
		print FH "${OrderData}\n";
	close(FH);
flock(FH, LOCK_NB);

1;