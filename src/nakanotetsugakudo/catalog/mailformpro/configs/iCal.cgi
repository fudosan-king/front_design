$config{'about'} = 'iCal Module';

## カレンダー名
$config{'iCal.Name'} = '予約';

## サマリー(追加される予定の標題的なもの)
$_HTML{'iCal.Summary'} = '<_姓_> <_名_>';

## ディスクリプション(予定の説明文の部分に入るやつ)
$_HTML{'iCal.Description'} = '電話番号：<_電話番号_>\n<_ご用件_>';

## 予定の日時 書式：YYYYMMDDTHHMMSS
$_HTML{'iCal.Date'} = '<_ご予約日_>T<_ご予約時間_>';

## iCalendar データパス
$config{'file.iCal.path'} = "$config{'data.dir'}dat.iCal.cgi";

## iCalendar 出力するicsファイルのデータパス
## スケジューラで読み込む場合は以下のパスをURLにして読み込む
## 以下のファイルはベーシック認証などで保護してください。
$config{'file.iCal.ics.path'} = "$config{'data.dir'}dat.iCal.ics";

## iCalendar 背景色
$config{'iCal.BgColor'} = '#999';

## iCalendar タイムゾーン
$config{'iCal.TimeZone'} = 'Asia/Tokyo';

## iCalendar グリニッジ標準時
$config{'iCal.GMT'} = '+0900';

1;