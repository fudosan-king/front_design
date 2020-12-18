## Request Once config

## 投稿禁止期限（秒数） / 0の場合は無期限
$config{'reqonce.expire'} = 0;

## エラー時のエラー番号
$config{'reqonce.err'} = 12;

## Javascriptのエラーメッセージ
$_ERRMSG[$config{'reqonce.err'}-1] = 'お一人様、1度のみの投稿になります';

## 制御トークンの保存ディレクトリ
$config{'reqonce.dir'} = "$config{'data.dir'}reqonce/";

## セッションによる制御 （1：有効 / 0：無効）
$config{'reqonce.session'} = 1;

## メールアドレスによる制御 （1：有効 / 0：無効）
$config{'reqonce.email'} = 1;

1;