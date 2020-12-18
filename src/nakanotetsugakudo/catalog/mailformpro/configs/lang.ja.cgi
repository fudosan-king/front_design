## 言語ファイル

#@_ENV = grep(!/^mfp_cart$/,@_ENV);
#@_ENV = grep(!/^mfp_cartprice/,@_ENV);

$lang{'email'} = 'メールアドレス';
$lang{'confirm_email'} = 'メールアドレス(確認用)';
$lang{'keep_resume'} = '入力内容の保持';
$lang{'mfp_uniqueuser'} = 'ユニークユーザ';
$lang{'mfp_date'} = '送信日時';
$lang{'mfp_hostname'} = 'ホスト名';
$lang{'mfp_ipaddress'} = 'IPアドレス';
$lang{'mfp_useragent'} = 'ブラウザ';
$lang{'mfp_pageview'} = 'ページビュー';
$lang{'mfp_serial'} = '通し番号';
$lang{'mfp_formreferrer'} = '送信元(リファラ)';
$lang{'mfp_input_time'} = '入力時間';
$lang{'mfp_input_time_avg'} = '平均入力時間';
$lang{'mfp_confirm_time'} = '確認時間';
$lang{'mfp_confirm_time_avg'} = '平均確認時間';
$lang{'mfp_referrer'} = 'フォームに付く前のURL';
$lang{'mfp_errorlog'} = 'エラーの発生した項目';
$lang{'mfp_cvr'} = 'コンバージョンレート';
$lang{'mfp_droprate'} = 'ドロップ率';
$lang{'mfp_dropcount'} = 'ドロップ数';
$lang{'mfp_timeline'} = 'タイムライン';
$lang{'mfp_domain'} = '送信ドメイン';
$lang{'mfp_uri'} = '送信元(フォーム)';
$lang{'mfp_jssemantics'} = 'Javascriptの挙動';
$lang{'mfp_cartprice'} = '代金';
$lang{'mfp_cart'} = '商品カート';
$lang{'mfp_script'} = '実行スクリプト';
$lang{'mfp_testmode'} = '動作テストモード'; # v4.2
$lang{'mfp_elementsQty'} = 'エレメント数';
$lang{'mfp_requiredElementsQty'} = '必須エレメント数';
$lang{'mfp_elementsArch'} = 'エレメントタイプ構成';


$lang{'js_mode'} = '【 ○ Javascriptは正常に動作しました】';
$lang{'plain_mode'} = '【 × Javascriptが動作してない状態で送信されました】';
$lang{'jslibrary'} = '// Mailform Pro Javascript Libraryは正常に動作しています。';

$value{'mfp_uniqueuser'} = '%s User';
$value{'mfp_pageview'} = '%s Page View';
$value{'mfp_cartprice'} = '%s 円';

$lang{'ErrorCode0'} = 'モジュールの実行に失敗しました。<br />Failed to run the module.';
$lang{'ErrorCode1'} = 'Javascriptが有効ではありません。<br />Javascript isn&rsquo;t enabled.';
$lang{'ErrorCode2'} = '日本語が含まれない送信は許可されていません。<br />You cannot send only English.';
$lang{'ErrorCode3'} = '送信内容に[url]や[link]といった文字を含める事はできません。<br />Contains an invalid character.';
$lang{'ErrorCode4'} = 'URLの送信は許可されていません。<br />URL submission is not allowed.';
$lang{'ErrorCode5'} = '許可されていないドメインからの送信はできません。<br />Sending domain is not allowed.';
$lang{'ErrorCode6'} = '送信数の制限を超えたため、送信できません。<br />Exceeds the limit.';
$lang{'ErrorCode7'} = '受付期間外のため、送信できません。<br />Is outside the booking period.';
$lang{'ErrorCode10'} = '設定ファイルが正しく設定されていません。<br />設定が間違っています。';
$lang{'ErrorCode500'} = 'メールの送信に失敗しました。<br>It failed to send mail.';
$lang{'Return'} = '<a href="%s">&lt;&lt; Return</a>';
