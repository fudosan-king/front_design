<!DOCTYPE html>
<!--header.php #Header HTML part-->
<html lang="ja">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFVKSR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <?php
          switch (true):
              case is_page('company'): ?> 
                  <meta name="description" content="千野建物管理株式会社の企業をご紹介するページです。千野建物管理は、マンション管理から賃貸管理・不動産仲介業まで、「住」をテーマにさまざまなサービスを手掛ける会社です。分譲マンション管理事業・賃貸物件管理事業だけでなく、ビル管理事業・建物清掃事業、賃貸物件のサブリース及び管理運営事業、土地、建物等の資産コンサルティング事業、不動産の売買、賃貸借、交換、管理等の不動産業務全般を行います。">
                  <title>企業情報 ｜ 千野建物管理株式会社</title>
                <?php break; ?>

                <?php case is_page('access'): ?>
                  <meta name="keywords" content="アクセス,交通,プロスタイル蔵前,蔵前,新築分譲マンション,居住用,ラグジュアリー,大江戸線,浅草線,都営地下鉄,都心生活">
                  <meta name="description" content="...">
                  <title>アクセス |【公式】プロスタイル蔵前｜新築分譲マンション</title>
                <?php break; ?>

                <?php case is_page('map'): ?>
                  <meta name="keywords" content="マップ,プロスタイル蔵前,蔵前,新築分譲マンション,居住用,ラグジュアリー,大江戸線,浅草線,都営地下鉄,都心生活">
                  <meta name="description" content="...">
                  <title>マップ |【公式】プロスタイル蔵前｜新築分譲マンション</title>
                <?php break; ?>

                

          

                <?php default: ?>
                  <meta name="keywords" content="プロスタイル蔵前,蔵前,新築分譲マンション,居住用,ラグジュアリー,大江戸線,浅草線,都営地下鉄,都心生活">
                  <meta name="description" content="...">
                  <meta property="og:site_name" content="【公式】プロスタイル蔵前｜新築分譲マンション">
                  <meta property="og:url" content="">
                  <title>【公式】プロスタイル蔵前｜新築分譲マンション｜〇〇〇　→〇〇〇部分はキャッチコピーが入る予定</title>
          <?php endswitch; ?>


        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/img/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/scss/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/scss/bsnav.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/scss/styles.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/scss/mobile.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/scss/custom.css">
    </head>

  
  <body>

    <?php 
      if(is_page_template('template-page/top.php')) {
        require 'template-page/common/header2.php';
      } elseif (is_page_template('template-page/outline.php')) {
        require 'template-page/common/header3.php';
      } elseif (is_page_template('template-page/locations.php')) {
        require 'template-page/common/header2.php';
      } elseif (is_page_template('template-page/inquiry.php')) {
        require 'template-page/common/header3.php';
      } elseif (is_page_template('template-page/access.php')) {
        require 'template-page/common/header2.php';
      } elseif (is_page_template('template-page/map.php')) {
        require 'template-page/common/header3.php';
      }
       else {
        require 'template-page/common/header.php';
      }

    ?>

       