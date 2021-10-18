<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>

            <section class="section_banner" style="background-image: url('images/takayamatei-800x534.jpg');">
                <div class="caption">
                    <img src="images/svg/label.svg" alt="" class="img-fluid" width="430">
                    <p></p>
                </div>
                <ul>
                    <li>
                        <a class="btn_map" href="#">
                        <img src="images/svg/i_map.svg" alt="" class="img-fluid d-none d-lg-inline-block" width="18">
                        <img src="images/svg/i_map_black.svg" alt="" class="img-fluid d-inline-block d-lg-none" width="18"> 
                        エリアから探す</a>
                    </li>
                    <li>
                        <a class="btn_stations" href="#">
                        <img src="images/svg/i_stations.svg" alt="" class="img-fluid d-none d-lg-inline-block" width="13">
                        <img src="images/svg/i_stations_black.svg" alt="" class="img-fluid d-inline-block d-lg-none" width="13">
                        沿線から探す</a>
                    </li>
                </ul>
            </section>


            <section class="section_searh">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="box_searchby area">
                                <h3><a class="btn" data-toggle="collapse" href="#box_byarea" role="button" aria-expanded="false" aria-controls="box_byarea">エリアから探す</a></h3>
                                <ul id="box_byarea" class="collapse">
                                    <li><a href="#">足立区</a></li>
                                    <li><a href="">荒川区</a></li>
                                    <li><a href="">板橋区</a></li>
                                    <li><a href="">江戸川区</a></li>
                                    <li><a href="">大田区</a></li>
                                    <li><a href="">葛飾区</a></li>
                                    <li><a href="">北区</a></li>
                                    <li><a href="">江東区</a></li>
                                    <li><a href="">品川区</a></li>
                                    <li><a href="">渋谷区</a></li>
                                    <li><a href="">新宿区</a></li>
                                    <li><a href="">杉並区</a></li>
                                    <li><a href="">墨田区</a></li>
                                    <li><a href="">世田谷区</a></li>
                                    <li><a href="">台東区</a></li>
                                    <li><a href="">千代田区</a></li>
                                    <li><a href="">中央区</a></li>
                                    <li><a href="">豊島区</a></li>
                                    <li><a href="">中野区</a></li>
                                    <li><a href="">練馬区</a></li>
                                    <li><a href="">文京区</a></li>
                                    <li><a href="">港区</a></li>
                                    <li><a href="">目黒区</a></li>
                                </ul>
                            </div>

                            <div class="box_searchby line">
                                <h3><a class="btn" data-toggle="collapse"  href="#box_byline" aria-expanded="false" aria-controls="box_byline">沿線から探す</a></h3>
                                <ul id="box_byline" class="collapse">
                                    <li><a href="#">足立区</a></li>
                                    <li><a href="">荒川区</a></li>
                                    <li><a href="">板橋区</a></li>
                                    <li><a href="">江戸川区</a></li>
                                    <li><a href="">大田区</a></li>
                                    <li><a href="">葛飾区</a></li>
                                    <li><a href="">北区</a></li>
                                    <li><a href="">江東区</a></li>
                                    <li><a href="">品川区</a></li>
                                    <li><a href="">渋谷区</a></li>
                                    <li><a href="">新宿区</a></li>
                                    <li><a href="">杉並区</a></li>
                                    <li><a href="">墨田区</a></li>
                                    <li><a href="">世田谷区</a></li>
                                    <li><a href="">台東区</a></li>
                                    <li><a href="">千代田区</a></li>
                                    <li><a href="">中央区</a></li>
                                    <li><a href="">豊島区</a></li>
                                    <li><a href="">中野区</a></li>
                                    <li><a href="">練馬区</a></li>
                                    <li><a href="">文京区</a></li>
                                    <li><a href="">港区</a></li>
                                    <li><a href="">目黒区</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="section_near_property">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title"><b>新着物件</b></h2>
                            <!-- <ul class="list_property">
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php"><img src="images/img.jpg" alt="" class="img-fluid"></a>
                                        <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                        <p class="label_custom">カスタム<br>可能物件</p>
                                    </div>
                                    <div class="property_head">
                                        <div class="row">
                                            <div class="col-10 col-lg-10">
                                                <p class="property_name">麻布狸穴ナショナルコート</p>
                                                <p class="mb-0">
                                                    <span class="property_address">港区西麻布2丁目</span>
                                                    <span class="property_square">50.4m²</span>
                                                </p>
                                            </div>
                                            <div class="col-2 col-lg-2">
                                                <a href="#" class="btn_wishlist"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php"><img src="images/img.jpg" alt="" class="img-fluid"></a>
                                        <p class="total_price">5400<span>万円</span></p>
                                        <p class="label_custom renovated">リノベ済<br>物件</p>
                                    </div>
                                    <div class="property_head">
                                        <div class="row">
                                            <div class="col-10 col-lg-10">
                                                <p class="property_name">麻布狸穴ナショナルコート</p>
                                                <p class="mb-0">
                                                    <span class="property_address">港区西麻布2丁目</span>
                                                    <span class="property_square">50.4m²</span>
                                                </p>
                                            </div>
                                            <div class="col-2 col-lg-2">
                                                <a href="#" class="btn_wishlist on"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php"><img src="images/img.jpg" alt="" class="img-fluid"></a>
                                        <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                        <p class="label_custom">カスタム<br>可能物件</p>
                                    </div>
                                    <div class="property_head">
                                        <div class="row">
                                            <div class="col-10 col-lg-10">
                                                <p class="property_name">麻布狸穴ナショナルコート</p>
                                                <p class="mb-0">
                                                    <span class="property_address">港区西麻布2丁目</span>
                                                    <span class="property_square">50.4m²</span>
                                                </p>
                                            </div>
                                            <div class="col-2 col-lg-2">
                                                <a href="#" class="btn_wishlist"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php"><img src="images/img.jpg" alt="" class="img-fluid"></a>
                                        <p class="total_price">5400<span>万円</span></p>
                                        <p class="label_custom renovated">リノベ済<br>物件</p>
                                    </div>
                                    <div class="property_head">
                                        <div class="row">
                                            <div class="col-10 col-lg-10">
                                                <p class="property_name">麻布狸穴ナショナルコート</p>
                                                <p class="mb-0">
                                                    <span class="property_address">港区西麻布2丁目</span>
                                                    <span class="property_square">50.4m²</span>
                                                </p>
                                            </div>
                                            <div class="col-2 col-lg-2">
                                                <a href="#" class="btn_wishlist"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->

                            <ul class="list_property">
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom">カスタム<br>可能物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom">カスタム<br>可能物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section_near_property bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title"><b>表参道エリアの物件</b></h2>
                            <ul class="list_property">
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom">カスタム<br>可能物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom">カスタム<br>可能物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property_img">
                                        <a href="propertys_detail.php">
                                            <img src="images/img.jpg" alt="" class="img-fluid">
                                            <p class="label_custom renovated">リノベ済<br>物件</p>
                                        </a>
                                        <div class="w_property_head">
                                            <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                            <div class="property_head">
                                                <div class="row">
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <p class="property_name">麻布狸穴ナショナルコート 麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">
                                                            <span>港区西麻布2丁目</span>
                                                            <span>50.4m²</span>
                                                            <span>/ 1LDK</span>
                                                        </p>
                                                        <!-- <p class="property_square"></p> -->
                                                    </div>
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <a class="btn_wishlist" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="text-center mt-3"><a href="#" class="btn btnSeemore">もっと見る</a></p>
                        </div>
                    </div>
                </div>
            </section>



        </main>

        <footer>
            <div class="footer_top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <p class="text-center mb-4"><a class="logo_footer" href="index.php"><img src="images/svg/logo_orderrenove_white.svg" alt="" class="img-fluid" width="224"></a></p>
                            <ul class="d-none d-lg-flex">
                                <li><a target="_blank" href="https://www.logrenove.jp/contact/">お問い合わせ</a></li>
                                <li><a target="_blank" href="https://www.propolife.co.jp/privacypolicy">プライバシーポリシー</a></li>
                                <li><a target="_blank" href="https://www.propolife.co.jp/socialpolicy">ソーシャルメディアポリシー</a></li>
                                <li><a target="_blank" href="https://www.propolife.co.jp/terms"> 利用規約</a></li>
                                <li><a target="_blank" href="https://www.propolife.co.jp">運営会社（企業情報）</a></li>
                                <li><a target="_blank" href="https://www.propolife.co.jp/antisocial">反社会的勢力排除に関する基本方針</a></li>
                            </ul>
                            <div class="d-flex">
                                <ul class="d-block d-lg-none mr-5">
                                    <li><a target="_blank" href="https://www.logrenove.jp/contact/">お問い合わせ</a></li>
                                    <li><a target="_blank" href="https://www.propolife.co.jp/privacypolicy">プライバシーポリシー</a></li>
                                    <li><a target="_blank" href="https://www.propolife.co.jp/socialpolicy">ソーシャルメディアポリシー</a></li>
                                </ul>
                                <ul class="d-block d-lg-none">
                                    <li><a target="_blank" href="https://www.propolife.co.jp/terms"> 利用規約</a></li>
                                    <li><a target="_blank" href="https://www.propolife.co.jp">運営会社（企業情報）</a></li>
                                    <li><a target="_blank" href="https://www.propolife.co.jp/antisocial">反社会的勢力排除に関する基本方針</a></li>
                                </ul>
                            </div>
                            <hr>
                            
                            <p class="text-center"><a target="_blank" href="https://www.logrenove.jp"><img src="images/svg/logrenove_logo.svg" alt="" class="img-fluid" width="108"></a></p>
                            <ul class="footer_logo">
                                <li><a target="_blank" href="https://www.logsuite.co.jp"><img src="images/svg/logSuite2_white.svg" alt="" class="img-fluid" width="88"></a></li>
                                <li><a target="_blank" href="https://www.logarchitects.co.jp"><img src="images/svg/logArch2_white.svg" alt="" class="img-fluid" width="120"></a></li>
                                <li><a target="_blank" href="https://www.logknot.co.jp"><img src="images/svg/logKnot2_white.svg" alt="" class="img-fluid" width="84"></a></li>
                            </ul>
                            <p class="text-center"><small>Copyright © <a target="_blank" href="https://www.logsuite.co.jp">LogSuite.</a> All Rights Reserved.</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom fixed-bottom">
                <a class="btn" href="#"><img src="images/svg/i_mail.svg" alt="" class="img-fluid" width="18">メルマガ骨盟 </a>
                <a class="btn btn_conditions" target="_blank" href="https://www.logrenove.jp/contact">希望条件を入力</a>
            </div>
        </footer>

        <?php include('js-footer.php') ?>
    </body>
</html>