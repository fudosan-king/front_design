$config{'about'} = 'CSV Export Module';

## ログファイル(CSV)のパス
$config{"file.csv"} = "$config{'data.dir'}dat.postlog.csv.cgi";

## ログファイル(CSV)のダウンロードパスワード
## ブラウザ経由でのダウンロードを許可する場合は以下のパスワードを設定してください。
#$config{"password"} = 'sYRs46nE8Nhr7dFD5yJi';

## ログファイルのダウンロードURLをわかりづらくするためのパスコード
#$config{'CSVDownloadURIPassCode'} = 'rfJrPmtKdRoseFXuabEH';

## ホスト名によるダウンロード制限をする場合は以下に指定してください。
#$config{'CSVDownloadHostName'} = 'localhost';

## IPアドレスによるダウンロード制限をする場合は以下に指定してください。
#$config{'CSVDownloadIPAddress'} = '127.0.0.1';

## 簡易暗号化（ベータ版）
## 以下を並び替えてキーを作ってください。
#$config{'CryptKey'} = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

## ログファイル(CSV)の自由整形
#$config{'CSVexport'} = './configs/CSVExportTemplate.csv.cgi';

## 以下、言語設定
$lang{'CSVManager'} = 'CSV管理';

1;