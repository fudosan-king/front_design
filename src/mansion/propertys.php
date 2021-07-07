<!doctype html>
<html lang="en">
<?php include('head.php') ?>
<body>
<?php include('header2.php') ?>

<main>
    <div class="box_template">
        <section class="section_near_property pt-0">
            <div class="box_top">
                <div class="container">
                    <h2 class="title mb-3">港区エリア</h2>
                    <p class="subtitle">リノベーション・中古マンション物件一覧</p>
                    <ul class="box_sort">
                        <li><a href="#">価格 指定なし</a></li>
                        <li><a href="#">広さ 指定なし</a></li>
                        <li><a href="#"><img src="images/svg/i_sort.svg" alt="" class="img-fluid" width="15">
                                条件を変更する</a></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="list_property">
                            <div class="col-md-6 bg-white">
                                <div class="carousel property_img"
                                     data-flickity='{ "fullscreen": true, "lazyLoad": 1 }'>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="propertys_detail.php">
                                            <img class="carousel-cell-image"
                                                 data-flickity-lazyload="images/img.png"/>
                                        </a>
                                    </div>
                                </div>


                                <div class="property_box">
                                    <h3 class="property_name mt-2">D'クラディア神宮外苑ハイヴァリー</h3>
                                    <div class="description">
                                        <div class="address font-12 d-flex">
                                            <img src="images/svg/i_address.svg" alt="" class="img-fluid ">
                                            <p class="my-auto pl-2">東京都渋谷区神宮前3丁目36-14</p>
                                        </div>
                                        <div class="station font-12 d-flex">
                                            <img src="images/svg/i_station.svg" alt="" class="img-fluid h-100 pt-2">
                                            <p class="my-auto pl-2">
                                                東京メトロ銀座線 / 外苑前駅 徒歩8分 <br>
                                                東京メトロ半蔵門線 / 表参道駅 徒歩9分 <br>
                                                JR山手線 / 原宿駅 徒歩13分
                                            </p>
                                        </div>
                                        <div class="room font-12 d-flex">
                                            <img src="images/svg/i_building.svg" alt="" class="img-fluid h-100 pt-2">
                                            <p class="my-auto pl-2">
                                                5階地下1階建／RC(鉄筋コンクリート) <br>
                                                総戸数：49戸
                                            </p>
                                        </div>
                                        <div class="p-0 section_carousel">
                                            <div class="box_list_property">
                                                <div class="carousel carousel-nav"
                                                     data-flickity='{"asNavFor": ".carousel-main", "contain": true, "prevNextButtons": false, "pageDots": false }'>
                                                    <div class="carousel-cell">
                                                        <div class="property_img">
                                                            <a href="propertys_detail.php"><img src="images/KV.jpg" alt="" class="img-fluid"></a>
                                                            <p class="total_price">11,470<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                            <p class="label_custom">カスタム<br>可能物件</p>
                                                        </div>
                                                        <div class="property_head">
                                                            <p class="property_square">2階／48.24m²／1LDK</p>
                                                        </div>

                                                    </div>
                                                    <div class="carousel-cell">
                                                        <img src="images/img.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="carousel-cell">
                                                        <img src="images/kv03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="carousel-cell">
                                                        <img src="images/kv03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

<?php include('footer.php') ?>

<?php include('js-footer.php') ?>
</body>
</html>