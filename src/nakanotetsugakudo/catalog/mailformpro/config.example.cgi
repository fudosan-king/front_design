## MultiConfigs機能で設定ファイルを分岐させる場合のサンプルファイルです
## config.example.cgi の場合、formタグとscriptタグに以下のようなクエリを付けます。
## <form id="mailformpro" action="mailformpro/mailformpro.cgi?type=example" method="POST">
## <script type="text/javascript" id="mfpjs" src="mailformpro/mailformpro.cgi?type=example" charset="UTF-8"></script>

## 以下のように分岐させる内容を設定します。
## 宛先などを分岐させたい場合はconfig.cgiからコピペしてきてください。

## 通し番号の書式
$config{'SerialFormat'} = 'EXAMPLE<date>%04d';

## サンクスページのURL(URLかsend.cgiから見た相対パス)
$config{'ThanksPage'} = '../thanks.html?no=%s';

## 設置者に届くメールの件名
$config{'subject'} = '[ %s ] お問い合せフォームから';

## 設置者に届くメールの本文整形
$_TEXT{'posted'} = <<'__posted_body__';
<_mfp_jssemantics_>
<_mfp_date_>
お問い合せフォームより以下のメールを受付ました。
──────────────────────────
受付番号：<_mfp_serial_>
入力時間：<_mfp_input_time_>
確認時間：<_mfp_confirm_time_>
　送信元：<_mfp_referrer_>
支払金額：<_mfp_cartprice_>

<_resbody_>
──────────────────────────

<_mfp_env_>

━━━━━━━━━━━━━━━━━━━━━━━━━━
　※この署名はサンプルです。必ず変更してください※　
　シンクグラフィカ / SYNCKGRAPHICA
　〒005-0007 札幌市南区澄川2条2丁目4番1号
　TEL / 050-3390-0450　FAX / 011-887-0450
　http://www.synck.com
━━━━━━━━━━━━━━━━━━━━━━━━━━
__posted_body__


## 自動返信メールの件名
$config{"ReturnSubject"} = '[ %s ] お問い合せありがとうございました';

## 自動返信メールの本文
$_TEXT{'responder'} = <<'__return_body__';
<_姓_> 様
──────────────────────────

この度はお問い合せ頂き誠にありがとうございました。
改めて担当者よりご連絡をさせていただきます。

─ご送信内容の確認─────────────────
受付番号：<_mfp_serial_>
<_resbody_>
──────────────────────────

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。

この度はお問い合わせ重ねてお礼申し上げます。

━━━━━━━━━━━━━━━━━━━━━━━━━━
　※この署名はサンプルです。必ず変更してください※　
　シンクグラフィカ / SYNCKGRAPHICA
　〒005-0007 札幌市南区澄川2条2丁目4番1号
　TEL / 050-3390-0450　FAX / 011-887-0450
　http://www.synck.com
━━━━━━━━━━━━━━━━━━━━━━━━━━
__return_body__


####################################################
## アドオン(Javascriptの追加機能)
####################################################

@AddOns = ();


####################################################
## モジュール(CGIの追加機能)
####################################################

@Modules = ();



## 各種データを格納しているファイル
## 分岐させる設定ファイルは別フォルダを指定したほうがよいでしょうな。
$config{'data.dir'} = './data.example/';

## [0] Serial, [1] InputTime, [2] ConfirmTime, [3] UniqueUser
$config{'file.data'} = "$config{'data.dir'}dat.mailformpro.cgi";

## ドロップ検知
$config{'file.drop'} = "$config{'data.dir'}dat.drop.cgi";

## jsキャッシュ
$config{'file.cache'} = "$config{'data.dir'}mfp.cache.js";

## 言語設定ファイル
$config{'lang'} = 'lang.ja';
#$config{'lang'} = 'lang.en';

## スクリプトのURL / ※基本的にここは変更しなくてOKです
$config{'uri'} = 'http://' . $ENV{'SERVER_NAME'} . $ENV{'SCRIPT_NAME'};

## Cookieの識別子は別な何かを指定したほうがよいでしょうな。
## Prefix
$config{'prefix'} = '_MFP2';

1;