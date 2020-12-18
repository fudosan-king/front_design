
## Item Secure Match
## 商品価格の不正POSTを防ぐためのマッチング処理を行う場合
## 以下のパスにtsv形式で価格表をアップロードしてください。
## 書式は [0] 商品ID [1] 価格 [2] 商品名(UTF-8)
#$config{'file.PayPalItemSecureMatch'} = './configs/Items.tsv';

## PayPal Token Dir
$config{'dir.paypal'} = "$config{'data.dir'}PayPal/";

## Paypal Express Checkout Init
$_PAYPAL{'SCRIPT'} = $ENV{'SERVER_NAME'} . $ENV{'SCRIPT_NAME'};
$_PAYPAL{'HOST'} = 'https://api-3t.sandbox.paypal.com/nvp';
$_PAYPAL{'API_USER'} = '********************';
$_PAYPAL{'API_PWD'} = '****************';
$_PAYPAL{'API_SIGNATURE'} = '********************************************************';
$_PAYPAL{'RETURNURL'} = 'http://' . $_PAYPAL{'SCRIPT'} . '?module=PayPal&callback=thanks';
$_PAYPAL{'CANCELURL'} = 'http://' . $_PAYPAL{'SCRIPT'} . '?module=PayPal&callback=cancel';
$_PAYPAL{'REDIRECTURI'} = 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=';

## PayPal Custom Header Image 750px * 90px
#$_PAYPAL{'HDRIMG'} = 'https://cgi.synck.com/mailform/pro3.0.0/images/mfp_paypal_header.gif';
#$_PAYPAL{'BRANDNAME'} = 'SYNCKGRAPHICA STORE';

$_PAYPAL{'ResultStatCancel'} = '【支払いはキャンセルされました】';
$_PAYPAL{'ResultStatSuccess'} = '【支払いが完了しました】';
$_PAYPAL{'ResultStatBreak'} = '【決済処理に失敗した可能性があります】';

$_PAYPAL{"result_subject"} = '[ %s ] PayPaly決済通知';

$_PAYPAL{'result_body'} = <<'__return_body__';
受付番号：<_mfp_serial_>
<_姓_> 様 のPayPal決済の結果の通知です。

<_paypal_result_>

<_paypal_response_>

━━━━━━━━━━━━━━━━━━━━━━━━━━
__return_body__

1;