<!DOCTYPE html>
<!--header.php #Header HTML part-->
<html lang="ja">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Prostyle - KURAMAE</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>

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
      } elseif (is_page_template('template-page/objectsummary.php')) {
        require 'template-page/common/header3.php';
      } elseif (is_page_template('template-page/locations.php')) {
        require 'template-page/common/header2.php';
      } elseif (is_page_template('template-page/inquiry.php')) {
        require 'template-page/common/header3.php';
      } elseif (is_page_template('template-page/access.php')) {
        require 'template-page/common/header2.php';
      }
       else {
        require 'template-page/common/header.php';
      }

    ?>

       