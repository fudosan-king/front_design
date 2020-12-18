## MFP Data
$config{'file.address.connect.data'} = "$config{'data.dir'}mfp.address.connect.db.cgi";

## Auth Key
$config{'mfp.address.connect.auth.key'} = 'YszxOf15kv6MJhvE5xEw';

## URI Key
$config{'mfp.address.connect.uri.key'} = 'OR0PLSCzYdRqcuMbeXRh';

($sec,$min,$hour,$day,$mon,$year) = localtime(time);
my $date = sprintf("%04d-%02d-%02d",$year+1900,$mon+1,$day);

## Data Arch
my @AddressField = ();
$AddressField[0] = '<_姓_><_名_>'; #ID
$AddressField[2] = '[[enabled]]'; #
$AddressField[3] = '<_姓_><_名_>'; #会社名
$AddressField[4] = ''; #部署名
$AddressField[5] = '<_姓_><_名_>'; #担当者名
$AddressField[6] = '<_email_>'; #メールアドレス
$AddressField[7] = '<_郵便番号_>'; #郵便番号
$AddressField[8] = '<_都道府県_>'; #都道府県
$AddressField[9] = '<_市区町村_><_丁目番地_>'; #ご住所
$AddressField[11] = '<_電話番号_>'; #電話番号
$AddressField[12] = ''; #FAX番号
$AddressField[13] = 'インターネットからのご注文'; #備考欄

## Data Arch
$_TEXT{'MFPAddressConnectArch'} = join('<|>',@AddressField);

1;