<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>
        <div class="spacing"></div>

        <main>
            <section class="section_room">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box_main_photos carousel_photos">
                                <div class="label_main_photos">
                                    <h2>Suite</h2>
                                    <h3>Premium</h3>
                                </div>
                                <div class="carousel carousel-main" data-flickity='{ "prevNextButtons": false, "pageDots": false}'>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/01.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/02.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/03.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/04.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/05.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/06.jpg" alt="" class="img-fluid">
                                  </div>
                                </div>

                                <div class="carousel carousel-nav"
                                  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/01.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/02.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/03.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/04.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/05.jpg" alt="" class="img-fluid">
                                  </div>
                                  <div class="carousel-cell">
                                    <img src="images/1x/premium/suite/06.jpg" alt="" class="img-fluid">
                                  </div>
                                </div>
                            </div>

                            <div class="box_detail_room">
                                <div class="row">
                                    <div class="col-12 col-md-8 mx-auto">
                                        <table class="table">
                                            <tr>
                                                <th>フロア</th>
                                                <td>10F</td>
                                                <th>ベッドタイプ</th>
                                                <td>ダブルダブル 140cm幅のベッドが2台</td>
                                            </tr>
                                            <tr>
                                                <th>広さ</th>
                                                <td>55㎡</td>
                                                <th>定員</th>
                                                <td>4名</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <h4>設備・備品</h4>
                                                    <p>テレビ（ミラーリング機能、300を超えるプログラム放送有）、エアコン（個別空調）、冷蔵庫、電気ポット、コーヒーメーカー、グラス・湯呑・ティーカップ、加湿空気清浄器、ドライヤー、セーフティーボックス、handy（館外持出可能なスマートフォン）、Bluetoothスピーカー、アラーム時計</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <h4>アメニティ</h4>
                                                    <p>カプセルコーヒー、ティーバッグ、歯磨きセット、シャンプー・リンス・ボディーソープ、石鹸、洗顔ソープ、かみそり、ブラシ、綿棒、部屋着（パジャマ）、コットンスリッパ、草履</p>
                                                </td>
                                            </tr>
                                        </table>
                                        <a class="btnMore btn_viewplan" href="#">
                                            <span class="more">
                                                <p class="more_text">View plans<span class="line more_loop no_width"></span></p>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php require 'section_socail.php'; ?>

        </main>

        <?php require 'footer.php'; ?>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>