## 予約データファイル
$config{"file.reserve"} = "$config{'data.dir'}dat.reserve.tsv.cgi";

## 日付のエレメント名
$config{"reserve.date.element.name"} = '予約日';

## プラン・部屋などのエレメント名
$config{"reserve.item.element.name"} = '予約部屋';

## 何日後から表示するか
$config{"reserve.dayafter"} = 0;

## 曜日による予約の可否 (日・月・火・水・木・金・土) / 1：可・0：不可
$config{"reserve.active"} = "1,1,1,1,1,1,1";

## 予約アイテム（カンマ区切り）
$config{"reserve.item"} = "部屋A,部屋B,部屋C";

## 予約時間 / 未実装
## $config{"reserve.hour"} = "10:00,10:15,10:30,10:45";

## 在庫基準値
$config{"reserve.qty"} = 5;

## 価格基準値 （価格を設定しない場合は0）
$config{"reserve.price"} = 9800;

## 予約状況管理パスワード
$config{"reserve.password"} = 'xRiD3VNxpjpw0BIAkaqH';

## ホスト名による管理を制限する場合は以下に指定してください。
#$config{'reserve.HostName'} = 'localhost';

## IPアドレスによる管理を制限する場合は以下に指定してください。
#$config{'reserve.IPAddress'} = '127.0.0.1';

## 以下、言語設定
$lang{'reserve.manager'} = '予約状況管理';

## 以下、開発中の設定のため、意味なしです

## 予約数select [ 4.2.2 latter ] ( 1: On / 0: Off)
#$config{'reserve.select'} = 1;

## 予約数select 上限値 [ 4.2.2 latter ]
#$config{'reserve.selectQty'} = 9;

1;