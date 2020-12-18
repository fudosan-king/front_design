## Mail auth config

## 認証トークンの有効期限（秒数）
$config{'mailauth.expire'} = 3600;

## 認証トークン有効期限切れ時のエラーメッセージ
$lang{'ErrorCode11'} = '認証トークンの有効期限が切れています。';

## 認証トークンの保存ディレクトリ
$config{'mailauth.dir'} = "$config{'data.dir'}mailauth/";

## 認証用URL
$config{'mailauth.uri'} = "http://$ENV{'HTTP_HOST'}$ENV{'REQUEST_URI'}";

## 認証前のサンクスページURL
$config{'mailauth.thanks'} = '../thanks.html';

## メールアドレス確認メールの件名
$config{'mailauth.subject'} = 'お問い合わせありがとうございました';

## メールアドレス確認メールの本文
$config{'mailauth.body'} = <<'__return_body__';
お問い合わせありがとうございました。
メールアドレス確認のため、以下のURLにアクセスしてください。
<_mailauth_uri_>

URLへアクセス後に正式な送信となります。
お手数をお掛けしますが、よろしくお願い致します。
━━━━━━━━━━━━━━━━━━━━━━━━━━
__return_body__

1;