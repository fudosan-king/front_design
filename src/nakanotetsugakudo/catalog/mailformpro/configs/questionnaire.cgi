## Questionnaire config

## アンケート集計用ファイル
$config{'questionnaire.file'} = "$config{'data.dir'}dat.questionnaire.cgi";

## アンケート集計の表示を許可する
$config{'questionnaire.result'} = 1;

## アンケート集計のjsonアクセスを許可する
$config{'questionnaire.json'} = 1;

## 集計対象の設問接頭辞
$config{'questionnaire.prefix'} = 'Q';

1;