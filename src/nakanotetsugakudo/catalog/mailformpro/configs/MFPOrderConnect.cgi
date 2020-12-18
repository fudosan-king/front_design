## MFP Data
$config{'file.order.connect.data'} = "$config{'data.dir'}mfp.order.connect.db.cgi";

## Auth Key
$config{'mfp.order.connect.auth.key'} = 'YszxOf15kv6MJhvE5xEw';

## URI Key
$config{'mfp.order.connect.uri.key'} = 'OR0PLSCzYdRqcuMbeXRh';

($sec,$min,$hour,$day,$mon,$year) = localtime(time);
my $date = sprintf("%04d-%02d-%02d",$year+1900,$mon+1,$day);

## Data Arch
my @OrderField = ();
$OrderField[0] = '<_mfp_serial_>'; ## ID
$OrderField[2] = '[[enabled]]';
$OrderField[3] = 'インターネットからのご注文'; #案件名
$OrderField[4] = '<_姓_> <_名_>'; #クライアント名
$OrderField[5] = '[[stat1]]'; #ステータスコード
$OrderField[7] = "${date}"; #見積書発行日
$OrderField[12] = ''; #納期
$OrderField[13] = ''; #支払い条件
$OrderField[14] = ''; #担当者
$OrderField[16] = ''; #備考欄
$OrderField[18] = '<_mfp_date_>'; #最終更新日
$OrderField[19] = ''; #区分

#$OrderField[15] = ''; #合計金額
#$OrderField[21] = ''; #name
#$OrderField[22] = ''; #qty
#$OrderField[23] = ''; #単位
#$OrderField[24] = ''; #単価
#$OrderField[25] = ''; #金額

## Data Arch
$_TEXT{'MFPOrderConnectArch'} = join('<|>',@OrderField);

1;