<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header2.php') ?>

        <main>
            <div class="box_template">
                <section class="section_subbanner pb-0">
                    <div class="container">
                        <div class="pro_main_img">
                            <img src="images/KV.jpg" alt="" class="img-fluid w-100">
                            <a href="#" class="btn_wishlist custom d-block d-lg-none"></a>
                        </div>
                    </div>
                </section>

                <section class="p-0">
                    <div class="box_top mb-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-10 align-self-center">
                                    <p class="subtitle mb-2">
                                        <small>東京都港区西麻布2丁目24-25<br>
                                        50.4m²（15.24坪）（壁芯）<br>
                                        1階/RC7階建</small>
                                    </p>
                                </div>
                                <div class="col-12 col-lg-2 align-self-center">
                                    <a href="#" class="btn btn_wishlist2 d-none d-lg-block"><i></i> <span>保存する</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="p-0 section_carousel">
                    <div class="container">
                        <div class="carousel_property">
                            <div class="carousel carousel-main"
                            data-flickity='{"contain": true, "pageDots": false, "initialIndex": 1 }'>
                                <div class="carousel-cell">
                                    <img src="images/KV.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-cell">
                                    <img src="images/img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-cell">
                                    <img src="images/kv03.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel carousel-nav"
                                data-flickity='{"asNavFor": ".carousel-main", "contain": true, "prevNextButtons": false, "pageDots": false }'>
                                <div class="carousel-cell">
                                    <img src="images/KV.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-cell">
                                    <img src="images/img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-cell">
                                    <img src="images/kv03.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_property_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                

                                <div class="box_renovation_specifications">
                                    <h2 class="title">リノベーション仕様</h2>
                                    <div class="specifications_pic">
                                        <img src="images/img02.jpg" alt="" class="img-fluid">
                                        <p class="describe">廊下のフローリングは勿論、天井も天然無垢材を使用。こだわりのエントランスを演出します。</p>
                                    </div>
                                    <div class="specifications_pic">
                                        <img src="images/img03.jpg" alt="" class="img-fluid">
                                        <p class="describe">キッチンはオリジナルデザイン。ペニンシュラスタイルやアイランドスタイルを選択した場合は背面も床と同じ天然無垢材で一体感を演出します。</p>
                                    </div>
                                    <div class="specifications_pic">
                                        <img src="images/img04.jpg" alt="" class="img-fluid">
                                        <p class="describe">バスルームは1.5坪のゆったり仕様。ユニットバスのカラーは豊富な種類からお選びいただけます。洗面台はおしゃれなボウル型。防水加工された天板でお掃除も楽に行えます。</p>
                                    </div>

                                    <div class="box_calcu mt-5">
                                        <h1>
                                            リノベ＋物件価格 　<span>6,000</span><i>万円</i>
                                            <p class="mb-0 mt-2 fee">物件価格：○○○○万円／リノベ費用：○○○○万円</p>
                                        </h1>

                                        <form action="" class="frm_calcu">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <p class="text-center d-none d-lg-block">
                                                        <span class="title_simulation_result">毎月のローンお支払列</span>
                                                    </p>

                                                    <div class="box_simulation_result">
                                                        <p class="text-center d-block d-lg-none btn_simulation_result mb-3">毎月のお支払例</p>
                                                        <h2>201,089<span>円</span></h2>
                                                        <!-- <p class="text-center">ボーナス月　＋<span>０</span>円</p> -->
                                                        <p class="text-center mt-3">管理費：20,000円／修繕積立金：20,000円 含む／リノ<br>ベーション費用：20,000円 含む</p>
                                                    </div>

                                                    <p class="text-center box_showmore">
                                                        <a class="btn btnshowhide d-block d-lg-none" href="#"></a>
                                                    </p>

                                                    <div class="w_box_simulation_result">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-6 col-lg-12">
                                                                        <div class="form-group mb-0 mb-lg-3">
                                                                            <label for="">毎月のローン返済額</label>
                                                                            <p class="label_repayment_amount">155,089<span>円</span></p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">ボーナス分返済金額（年2回）</label>
                                                                            <div class="d-flex align-items-center">
                                                                                <input type="text" class="form-control" placeholder="0">
                                                                                <span class="ml-2 sub">円/回</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 col-lg-12 align-self-end">
                                                                        <div class="form-group">
                                                                            <label class="mb-0" for="">管理費</label>
                                                                            <h5>200,000<span>万／月</span></h5>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="mb-0" for="">修繕積立金</label>
                                                                            <h5>26,000<span>万／月</span></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-6">
                                                                <canvas id="pie-canvas1"></canvas>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>
                                                    

                                                </div>

                                                <div class="col-12 col-lg-6">
                                                    <div class="w_box_simulation_result">
                                                        <div class="form-group mb-1">
                                                            <div class="row">
                                                                <div class="col-6 col-lg-6">
                                                                    <label for="">自己資金（頭金）</label>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="text" class="form-control"  maxlength="4" placeholder="1,000">
                                                                        <span class="ml-2 sub">万円</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-lg-6">
                                                                    <label for="">借入れ額（ローン）</label>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="text" class="form-control" maxlength="4" placeholder="5,000">
                                                                        <span class="ml-2 sub">万円</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <input type="text" class="js-range-slider" name="my_range" value="">
                                                        </div>
                                                        <hr class="mt-5">
                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="">返済期間</label>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="text" class="form-control repayment" placeholder="35">
                                                                        <span class="ml-2 sub">年</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <input type="text" class="js-range-slider1" name="my_range" value="">
                                                        </div>
                                                        <hr class="mt-5">
                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class="col-6 col-lg-6">
                                                                    <label for="">金利（元利均等）</label>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="text" class="form-control" placeholder="0.475">
                                                                        <span class="ml-2 sub">%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="js-range-slider2" name="my_range" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="renovation_specifications_table">
                                        <table class="table">
                                            <tr>
                                                <th width="45%">マンション名</th>
                                                <td>秀和麻布笄町レジデンス</td>
                                            </tr>
                                            <tr>
                                                <th>管理費・修繕積立金</th>
                                                <td>管理費：13,000円<br>
                                                修繕積立金：21,400円</td>
                                            </tr>
                                            <tr>
                                                <th>諸費用・その他制限事項</th>
                                                <td>-/-</td>
                                            </tr>
                                            <tr>
                                                <th>入居時期</th>
                                                <td>相談</td>
                                            </tr>
                                            <tr>
                                                <th>構造・階段・所在階・方角</th>
                                                <td>RC7階建／1階／南</td>
                                            </tr>
                                            <tr>
                                                <th>総戸数</th>
                                                <td>57戸</td>
                                            </tr>
                                            <tr>
                                                <th>築年月</th>
                                                <td>1970年10月</td>
                                            </tr>
                                            <tr>
                                                <th>竣工時売主</th>
                                                <td>秀和株式会社</td>
                                            </tr>
                                            <tr>
                                                <th>施工会社</th>
                                                <td>住友建設株式会社</td>
                                            </tr>
                                            <tr>
                                                <th>設計会社</th>
                                                <td>−</td>
                                            </tr>
                                            <tr>
                                                <th>管理会社・管理形態</th>
                                                <td>レジデンス・ビルディングマネジメント／委託（常駐）</td>
                                            </tr>
                                            <tr>
                                                <th>土地権利</th>
                                                <td>所有権</td>
                                            </tr>
                                            <tr>
                                                <th>用途地域</th>
                                                <td>1種中高</td>
                                            </tr>
                                            <tr>
                                                <th>小学校区域・中学校区域</th>
                                                <td>笄小学校／高陵中学校</td>
                                            </tr>
                                        </table>

                                        <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.674775952875!2d139.71907221539578!3d35.66038363872215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b6530fa5ef5%3A0x2c0355e32dbc3abf!2s2-ch%C5%8Dme-24-25%20Nishiazabu%2C%20Minato%20City%2C%20Tokyo%20106-0031%2C%20Nh%E1%BA%ADt%20B%E1%BA%A3n!5e0!3m2!1svi!2s!4v1623202644543!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            <div class="row">
                                                <div class="col-8 col-lg-8">
                                                    <p>東京都港区西麻布2丁目24-25</p>
                                                </div>
                                                <div class="col-4 col-lg-4">
                                                    <p class="text-right"><a target="_blank" class="btn_viewmap" href="#">マップで見る</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_near_property">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <h2 class="title">表参道エリアの物件</h2>
                                <ul class="list_property">
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom renovated">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">カスタム<br>可能物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span><span class="sub">（物件＋リノベーション）</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property_img">
                                            <a href="propertys_detail.php">
                                                <img src="images/img.jpg" alt="" class="img-fluid">
                                                <p class="label_custom">リノベ済<br>物件</p>
                                                <div class="w_property_head">
                                                    <p class="total_price">5400<span>万円</span></p>
                                                    <div class="property_head">
                                                        <p class="property_name">麻布狸穴ナショナルコート</p>
                                                        <p class="property_address">港区西麻布2丁目</p>
                                                        <p class="property_square">50.4m²</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <p class="text-center mt-3"><a href="#" class="btn btnSeemore">もっと見る</a></p>
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