## Taboo Words config

## エラー時のエラー番号
$config{'taboowords.err'} = 13;

## Javascriptのエラーメッセージ
$_ERRMSG[$config{'taboowords.err'}-1] = '利用できない文字列が含まれています。';

## 禁止文字列
@TabooWords = ('%0D','%0A','うんこ');

1;