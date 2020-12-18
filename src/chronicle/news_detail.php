<?php
  $fileInformation = fopen("informations.txt", "r") or die("Unable to open file!");
?>

<!doctype html>
<html>

<head>
    <meta name="og:title" content="ニュース | Propolife VietNam">
    <meta name="description" content="ホーチミンのオフィスの内装工事、オフショアのパース作成はクロニクルリフォームにお任せください。日本人常駐で全てのサービスを日本語で対応させて頂いております。">
    <meta name="og:description" content="ホーチミンのオフィスの内装工事、オフショアのパース作成はクロニクルリフォームにお任せください。日本人常駐で全てのサービスを日本語で対応させて頂いております。">
    <meta name="keywords" content="ホーチミン内装工事,ホーチミン内装,ホーチミンオフィス,ベトナムパース,ベトナムCAD,ベトナムオフショア">
    <title>ニュース | Propolife VietNam</title>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
      <!-- <div class="se-pre-con"></div> -->

      <?php require 'header.php';?>

      <main id="content">
        <section class="banner_sub">
          <div class="swiper-container">
              <div class="parallax-bg" style="background-image:url('http://www.propolifevietnam.com/wp-content/themes/themes/images/slides/office/1.jpg')" data-swiper-parallax="-23%"></div>
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="title" data-swiper-parallax="-300">ニュース</div>
                  </div>
              </div>
          </div>
      </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="box_left">
                  <h2 class="title">ニュース</h2>
                  <div class="box_newsDetail">
                    <h3>ホーチミンでオフィスの内装工事なら</h3>
                    <p>ホーチミンでのオフィスの内装工事ならお任せ下さい。<br>
                    ご相談、現場調査、レイアウト提案、お見積もり無料です。<br>
                    オフィス探しからのお手伝いも可能です。</p>
                    <p><img src="http://www.propolifevietnam.com/wp-content/uploads/2017/08/o3264244814012085962.jpg"></p>
                    <p><img src="http://www.propolifevietnam.com/wp-content/uploads/2016/01/image-from-2-2.jpg"></p>
                    <p><img src="http://www.propolifevietnam.com/wp-content/uploads/2016/01/63-6.jpg"></p>
                    <p><img src="http://www.propolifevietnam.com/wp-content/uploads/2016/01/photron-1.jpg"></p>
                    <p><img src="http://www.propolifevietnam.com/wp-content/uploads/2016/04/sam1.jpg"></p>
                    <p>お問い合わせは渡邉まで</p>
                    <p>＜お問い合わせはこちら↓＞<br> 渡邊宛てまで<br> クロニクルリフォーム<br> Unit1904 19Floor CJ BUILDING, 6 Le Thanh Ton, District1,HCMC, Vietnam<br> +84-(0)28-3824-1578（日本語）<br> +84-91-663-1088（渡邊直通）<br> E-mail:info@chronicle.com<br> WEB:<a href="http://chronicle.propolifevietnam.com/index.php" target="_blank" rel="noopener nofollow" data-ft="{&quot;tn&quot;:&quot;-U&quot;}" data-lynx-mode="asynclazy" data-lynx-uri="https://l.facebook.com/l.php?u=http%3A%2F%2Fchronicle.propolifevietnam.com%2Findex.php&amp;h=ATNPgKhV7i6EULDWw4cFXYdR2rWCnkdz8YsBlWT-m90PodaGqxxah81-iXYbFR3rUmlVclslEnQPYnJXEIfllLBDm5rgykqe_m6yfZjUoQuaiuVrE6R2dbkzzKIlCG9yf6XhiPZi">http://chronicle.propolifevietnam.com/index.php</a><br> ご予約の上レタントン通り本社にもお越し下さい。<br> クロニクルリフォームでは、社員の定着率や新規採用力の向上など、働く方にも喜ばれるオフィス空間をご提供と品質を落とさずのコストダウンを実現するパース制作サービスのご提供を行っております。</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="box_right">
                  <h3 class="title_small">FACE BOOKで最新情報を確認</h3>
                  <div id="fb-root"></div>
                  <div class="fb-page"
                    data-tabs="timeline,events,messages"
                    data-href="https://www.facebook.com/chronicle.vn/"
                    data-width="380"
                    data-hide-cover="false"
                    data-show-facepile="false">
                  </div>
                  <h3 class="title_small text-uppercase">Informations</h3>
                  <div class="box_aodai">
                    <div class="panel panel-default">

                      <?php
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
                          if ($idx < 3) {
                            foreach ($infor as $date => $content) {
                              echo '<div class="panel-heading"><h3 class="panel-title">' . $date . '</h3></div>';
                              echo '<div class="panel-body"><p>' . $content . '</p></div>';
                            }
                          }
                        }
                      ?>
                    </div>
                  </div>
                  <a target="_blank" href="https://ameblo.jp/chronicle-reform-vn/"><img src="images/1x/blog_chornicle.png" alt="" class="img-responsive"></a>
                  <a target="_blank" href="https://ameblo.jp/aozaihousing/"><img src="images/img_blog.png" alt="" class="img-responsive"></a>
                  <a target="_blank" href="https://aodaihousing.com/"><img src="images/img_aodaihousing.png" alt="" class="img-responsive"></a>
                  <a target="_blank" href="http://www.lotusservice-vn.com/"><img src="http://www.propolifevietnam.com/wp-content/themes/themes/images/banner_lotus.png" alt="" class="img-responsive"></a>
                  <a target="_blank" href="http://www.propolifevietnam.com/web%E3%82%B5%E3%82%A4%E3%83%88%E5%88%B6%E4%BD%9C.html"><img src="images/img_web.png" alt="" class="img-responsive"></a>
                  <a target="_blank" href="http://www.propolifevietnam.com/"><img src="images/img_propolifevn.png" alt="" class="img-responsive"></a>
                </div>
              </div>
            </div>

          </div>
        </section>


      </main>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <?php require 'footer.php';?>
    </div>
    <?php require 'js_footer.php';?>
</body>

</html>
