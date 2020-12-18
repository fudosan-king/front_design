<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
      <div class="sub_page">
        
        <?php require 'header.php'; ?>
        <a href="index.php" class="logo"><img src="images/1x/logo_darkgreen.svg" alt="" class="img-fluid" width="150"></a>

        <section class="section_accomodation_detail">
          <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="swiper_accomodation">
                    <div class="box_label">
                      <h2>スタンダードダブル</h2>
                      <h3>Standard Double Room</h3>
                    </div>
                    <div class="swiper-container swiper_accomodation">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_11_20AsianRubyHotel2746-Edit.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_11_20AsianRubyHotel2730.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_12_23HotelCharme5094.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_12_23HotelCharme5062.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_11_20AsianRubyHotel2734-Edit.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="#"><img src="images/1x/standard/2018_12_23HotelCharme5028.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                      <!-- Add Arrows -->
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                      <!-- Add Pagination -->
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>

                </div>
              </div>
          </div>

          <div class="head_suiteSpecification">
            <div class="container">
              <div class="row">
                <div class="col col-12 text-center">
                  
                </div>
              </div>
            </div>
          </div>

          <div class="detail_suiteSpecification">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-8 offset-md-2">
                  <div class="box_detail_suiteSpecification">
                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <dl class="row mr-0">
                          <dt class="col-4 col-sm-4 col-md-4">フロア</dt>
                          <dd class="col-8 col-sm-8 col-md-8"><p class="box_detail_content">1F~10F</p></dd>
                          <dt class="col-4 col-sm-4 col-md-4">広さ</dt>
                          <dd class="col-8 col-sm-8 col-md-8"><p class="box_detail_content">22㎡</p></dd>
                        </dl>
                      </div>
                      <div class="col-12 col-sm-6">
                        <dl class="row">
                          <dt class="col-4 col-sm-4 col-md-4">ベッドタイプ</dt>
                          <dd class="col-8 col-sm-8 col-md-8"><p class="box_detail_content">160㎝×200㎝ ベット1台。</p></dd>
                          <dt class="col-4 col-sm-4 col-md-4">定員</dt>
                          <dd class="col-8 col-sm-8 col-md-8"><p class="box_detail_content">2名様</p></dd>
                        </dl>
                      </div>
                      <div class="col-12">
                        <dl class="row">
                          <dt class="col-12 border-bottom-0 pb-0">設備・備品</dt>
                          <dd class="col-12">テレビ、エアコン（個別空調）、冷蔵庫、電気ポット、グラス・ティーカップ、ドライヤー、セーフティーボックス</dd>
                        </dl>
                        <dl class="row">
                          <dt class="col-12 border-bottom-0 pb-0">アメニティ</dt>
                          <dd class="col-12 col-md-12">カプセルコーヒー、ティーバッグ、歯磨きセット、シャンプー・リンス・ボディーソープ、石鹸、ブラシ、綿棒、部屋着、コットンスリッパ</dd>
                          <dd class="col-12">別途5%のサービスチャージ、10%のVATがかかります。</dd>
                        </dl>
                      </div>
                    </div>
                  </div><!-- box_detail_suiteSpecification -->

                  <!-- <div class="w_more_container">
                    <a href="#" class="more_container">
                     <div class="more">
                        <p class="more_text">View plans<span class="line more_loop no_width"></span></p>
                     </div>
                    </a>
                  </div> -->

                </div>
              </div>

              
            </div>
          </div>
        </section>

        <section class="section_advisor">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <a href="#" class="btn btn_larn"><img src="images/1x/fb.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </section>

      </div>

        <?php require 'footer.php'; ?>
    </div>
    <?php require 'js-footer.php'; ?>

    <script>
    var swiper3 = new Swiper('.swiper_accomodation', {
      cssMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>

</body>

</html>