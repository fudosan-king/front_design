$config{'about'} = 'ReplyTime Export Module';

## 未応答ログファイルパス
$config{"file.ReplyTime"} = "$config{'data.dir'}dat.ReplyTime.tsv.cgi";

## 応答完了ログファイルパス
$config{"file.ReplyTime.complete"} = "$config{'data.dir'}dat.ReplyTime.complete.tsv.cgi";

## 以下、言語設定
$lang{'ReplyTime'} = '応答確認URL';

1;