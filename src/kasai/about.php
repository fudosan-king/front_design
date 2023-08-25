<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>プレシスとは | 【公式】プレシス葛西プロスタイル | 新築分譲マンション</title>
	<meta name="description" content="プレシス葛西プロスタイル【公式サイト】。東京都江戸川区に誕生する新築分譲マンション。東京メトロ東西線「葛西」駅徒歩9分。">
	<meta name="keywords" content="プレシス葛西プロスタイル,東京都,江戸川区,東京メトロ東西線,葛西駅,新築分譲マンション,一建設 ">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes">
	<meta property="og:title" content="プレシスとは | 【公式】プレシス葛西プロスタイル | 新築分譲マンション">
	<meta property="og:type" content="article">
	<meta property="og:url" content="/about.html">
	<meta property="og:site_name" content="新築分譲マンション">
	<meta property="og:image" content="images/ogp.png ">
	<meta property="og:description" content="プレシス葛西プロスタイル【公式サイト】。東京都江戸川区に誕生する新築分譲マンション。東京メトロ東西線「葛西」駅徒歩9分。">
	<link rel="shortcut icon" href="https://www.hajime-kensetsu.co.jp/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.hajime-kensetsu.co.jp/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="https://www.hajime-kensetsu.co.jp/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="https://www.hajime-kensetsu.co.jp/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="https://www.hajime-kensetsu.co.jp/manifest.json">
	<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/slick.css">
	<link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./assets/css/styles_new.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-colorbox@1.6.4/jquery.colorbox.min.js"></script>
	<script>
		// Picture element HTML5 shiv
		document.createElement("picture");
	</script>
	<style type="text/css">
		.content {
			width: 100% !important;
		}

		iframe {
			width: 100%;
			overflow: hidden;
		}

		.col02 {
			padding-top: 20px;
		}
	</style>
	<script>
		$(window).on('message', function(e) {
			var height = e.originalEvent.data;
			console.log(height);
			console.log(e);
			$('iframe').css({
				'height': height + 'px'
			});
		});
	</script>
	<script>
		$(function() {
			$('li.disable a').click(function() {
				return false;
			})
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-ND8CLF9');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body id="top" class="reserv mincho">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ND8CLF9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php require 'header.php'; ?>

	<section class="about">
		<iframe width="100%" height="100%" id="newsframe" onload="iframeLoad()" src="https://www.presis.com/common/about/about.html" frameborder="0"></iframe>
	</section>
	<script>
		function iframeLoad() {
			console.log('iframe loaded');
			var pageData = [];
			pageData.iFrame = document.getElementById('newsframe').contentWindow;
			pageData.targetOrigin = 'https://www.presis.com/common/about/about.html';
			var sendData = [];
			sendData.msg = "datasent";
			sendData.headH = $('header').height();
			sendData.headInnerH = $('header .inner').height();
			pageData.iFrame.postMessage(sendData, '*');
		}
	</script>

	<div class="c_link">
		<p class="next">NEXT</p>
		<p class="title">インテリア・設備</p>
		<p class="arrow"><i class="fas fa-chevron-circle-right"></i></p>
		<a class="Link" href="interior.php"></a>
	</div>

	<?php require 'footer.php'; ?>
</body>

</html>