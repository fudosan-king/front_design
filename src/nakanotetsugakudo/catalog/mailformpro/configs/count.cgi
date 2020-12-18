## count config

## 集計用ファイル
$config{'file.count'} = "$config{'data.dir'}dat.count.cgi";

## 集計対象のエレメント名（カンマ区切り）
$config{'count.element.name'} = '姓,性別,都道府県,アンケート';

## ファイル(CSV)のダウンロードパスワード
## ブラウザ経由でのダウンロードを許可する場合は以下のパスワードを設定してください。
#$config{"count.password"} = 'sYRs46nE8Nhr7dFD5yJi';

## ログファイルのダウンロードURLをわかりづらくするためのパスコード
#$config{'count.DownloadURIPassCode'} = 'rfJrPmtKdRoseFXuabEH';

## ホスト名によるダウンロード制限をする場合は以下に指定してください。
#$config{'count.DownloadHostName'} = 'localhost';

## IPアドレスによるダウンロード制限をする場合は以下に指定してください。
#$config{'count.DownloadIPAddress'} = '127.0.0.1';

## 以下、言語設定
$lang{'count.Manager'} = '集計ファイル';

1;