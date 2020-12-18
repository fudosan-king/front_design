<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <section class="section_top">
            <?php require 'header.php'; ?>
            <div class="jarallax bg_top" style="background: #a6bcd4;">
                 <img class="jarallax-img bg-scale" src="images/1x/img02.jpg" alt="">
                <a href="index.php" class="logo"><img src="images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
                <div class="accomodation_content">
                  <span class="box_line">
                    <svg width="200" height="200" viewBox="0 0 100 100">
                      <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
                    </svg>
                  </span>
                  <span class="box_line box_line_step">
                    <svg width="200" height="200" viewBox="0 0 100 100">
                      <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
                      <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
                    </svg>
                  </span>
                  <div class="box_line_content bg_black">
                    <h2>Premium<br>Floor</h2>
                    <h4>Accomodations</h4>
                  </div>
                </div>

                <div id="scroll_down" class="scroll_down_sub">
                  <div class="vertical_elem">
                      <div class="line white only vertical t_b hidden scroll_loop"></div>
                      <div class="start_square has_transition_600"></div>
                  </div>
                </div>
                
                <span class="line_yellow"><img class="img-fluid" src="images/1x/line_yellow.svg" alt=""></span>
                <div class="text_footer">                  
                  <p>夜に咲き、暗闇の中で香りを放つ6種類の花</p>
                </div>

            </div>
        </section>

        <section class="section_subAccomodation">
          <div class="container">
            <span class="line_yellow line_yellow_reverse"><img class="img-fluid" src="images/1x/line_yellow_reverse.svg" alt=""></span>
            <div class="box_horizontal mt-5">
              <div class="row">
                <div class="col col-12 col-sm-12 col-md-5">
                  <div class="box_content_left clearfix" data-jarallax-element="-50 0">
                    <h3>月下美人</h3>
                    <p>PROSTYLE旅舘 横濱馬車道を象徴するシグネチャールーム。ベッドルームとリビングに分かれたスイート仕様。</p>
                    <p><span>広さ：55㎡</span>
                    <span>ベッドタイプ：ダブルダブル（140cm幅のベッドが2台）</span>
                    <span>定員：4名＋添い寝のお子様2名</span></p>
                    <a href="accomodation_detail.php" class="more_container">
                     <div class="more">
                        <p class="more_text">more<span class="line more_loop no_width"></span></p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-7">
                  <img src="images/1x/img02.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="box_horizontal box_horizontal_2">
              <div class="row">
                <div class="col col-12 col-sm-12 col-md-5">
                  <div class="box_content_left clearfix" data-jarallax-element="-50">
                    <h3>月下香</h3>
                    <p>ダブルベーシンを備えたコーナールーム。<br>
                    ご家族やご友人とのご旅行に。</p>
                    <p><span>広さ：36㎡</span>
                    <span>ベッドタイプ：ツイン （110cm幅のベッドが2台。3名さまでご利用の場合は布団をご用意）</span>
                    <span>定員：3名＋添い寝のお子様1名</span></p>
                    <a href="accomodation_detail.php" class="more_container">
                     <div class="more">
                        <p class="more_text">more<span class="line more_loop no_width"></span></p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-7">
                  <img src="images/1x/img02.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col text-center">
                <a href="#" title=""><img src="images/1x/trip.jpg" alt="" class="img-fluid"></a>
              </div>
            </div>

            
          </div>
        </section>

        <?php require 'footer.php'; ?>
    </div>
    <?php require 'js-footer.php'; ?>
</body>

</html>