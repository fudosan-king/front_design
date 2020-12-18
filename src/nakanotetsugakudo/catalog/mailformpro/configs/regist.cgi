$config{'about'} = 'E-Mail Registration';

## ログファイル(TSV)のパス
$config{"file.regist.db"} = "$config{'data.dir'}dat.regist.tsv.cgi";

## ログファイル(TSV)のフィールド
$_TEXT{"regist.field"} = "<_email_>\t<_性別_>\t<_mfp_date_>\t<_mfp_serial_>";

## フラグエレメント名
$config{"regist.element"} = "区分";

## 登録値
$config{"regist.element.join"} = "登録";

## 解除値
$config{"regist.element.unjoin"} = "解除";

1;