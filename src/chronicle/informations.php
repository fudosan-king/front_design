<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['date'] and $_POST['content']) {
      $content = $_POST['content'];
      $content = preg_replace('~[\r\n]+~', '', $content);
      $fileInformation = fopen("informations.txt", "r") or die("Unable to open file!");
      $inf = fread($fileInformation, filesize('informations.txt'));
      if (! $inf) {
        $data = $_POST['date'] . PHP_EOL . $content;
      }else {
        $data = $inf . PHP_EOL . $_POST['date'] . PHP_EOL . $content;
      }
      fclose($fileInformation);
      $fileInformation = fopen("informations.txt", "w") or die("Unable to open file!");
      fwrite($fileInformation, $data);
      fclose($fileInformation);
    }
  }
?>

<!doctype html>
<html>

<head>
    <meta property="og:title" content="駐在事務所設立＆スタートアップ支援┃ロータスサービス">
    <meta property="og:description" content="ベトナムホーチミン進出ならロータスサービスにお任せ下さい。設立だけでなく、開業までに準備すべきこともサポート。日本人担当者とベトナム人弁護士で安心をご提供しております。">
    <meta name="description" content="ベトナムホーチミン進出ならロータスサービスにお任せ下さい。設立だけでなく、開業までに準備すべきこともサポート。日本人担当者とベトナム人弁護士で安心をご提供しております。">
    <meta name="keywords" content="ベトナム,ホーチミン,駐在員事務所,進出">
    <?php require 'head.php'; ?>
    <style type="text/css">
    .main_content h3 {
      padding-bottom: 0px;
      margin-bottom: 0px;
      font-size: 16px;
      border-bottom: none;
    }
    .informations {
      border: 1px solid #000000;
      border-radius: 5px;
    }
    .informations .form-group {
      margin: 5px 10px 5px 10px;
    }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
      } );
  </script>
<body>
    <div id="page" class="animsition">

      <?php require 'header.php';?>
      <main id="content">
        <section class="main_content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="/informations.php" method="POST" class="informations">

                <div class="form-group">
                  <label for="date">Date:</label>
                  <input class="form-control" type="text" id="datepicker" name="date"></input>
                </div>
                <div class="form-group">
                  <label for="content">Content:</label>
                  <textarea class="form-control" id="content" name="content"></textarea>
                </div>

                <div align="center">
                <button class="btn btn-success" type="Submit" value="Submit" style="color: #ffffff; margin-bottom: 10px;">セーブ</button>
                </div>
                </form>
              </div>
            </div>
          <div>
        </section>

        <section class="main_content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box_aodai">
                    <div class="panel panel-default">

                      <?php
                      $fileInformation = fopen("informations.txt", "r") or die("Unable to open file!");
                      $information = array();
                        $idx = 0;
                        while(!feof($fileInformation)){
                          if ($idx % 2 == 0) {
                            $date = fgets($fileInformation);
                          } else {
                            array_push($information, array($date => fgets($fileInformation)));
                          }
                          $idx += 1;
                        }
                        fclose($fileInformation);

                        $information = array_reverse($information);

                        foreach ($information as $idx => $infor) {
                          foreach ($infor as $date => $content) {
                            echo '<div class="panel-heading"><h3 class="panel-title">' . $date . '</h3></div>';
                            echo '<div class="panel-body"><p>' . $content . '</p></div>';
                          }
                        }
                      ?>
                    </div>
                  </div>
              </div>
            </div>
          <div>
        </section>
      </main>

      <?php require 'footer.php';?>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.matchHeight-min.js"></script>
    <script src="js/jquery.sameify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>
