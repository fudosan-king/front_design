<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>

    <?php require('header.php'); ?>
    <body>

        <div class="modal fade modal_search" id="modal_search" tabindex="-1" aria-labelledby="modal_search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_search">検索条件変更</h5>
                        <a href="#" class="btn btn_searhconditions d-block d-lg-none">
                        <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
                        <span>この条件で検索</span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="modal_frmsearch">
                            <table class="table table-condensed">
                                <tr>
                                <th>エリア <span class="btn_showhide_accordion"></span></th>
                                <td class="w_accordion_search">
                                    <div class="accordion accordion-flush accordion_search" id="accordion_search">

                                    <div class="accordion-item">
                                        <!-- <h2 class="accordion-header" id="search-headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseSeven" aria-expanded="false" aria-controls="search-collapseSeven">
                                        東京23区内
                                        </button>
                                        </h2> -->
                                        <div id="search-collapseSeven" class="accordion-collapse" aria-labelledby="search-headingSeven" data-bs-parent="#accordion_search">
                                        <div class="accordion-body">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Kichijoji_Ogikubo">
                                            <label class="form-check-label" for="Kichijoji_Ogikubo">港区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="MtHamada_Eifuku_SakuraAqueduct">
                                            <label class="form-check-label" for="MtHamada_Eifuku_SakuraAqueduct">千代田区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Seijo_Kyodo">
                                            <label class="form-check-label" for="Seijo_Kyodo">中央区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Kunitachi_Mitaka">
                                            <label class="form-check-label" for="Kunitachi_Mitaka">新宿区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">文京区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">渋谷区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">世田谷区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">目黒区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">江東区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">品川区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">大田区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">台東区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">中野区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">杉並区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">豊島区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">北区</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Nakano">
                                            <label class="form-check-label" for="Nakano">墨田区</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <th>価格</th>
                                <td>
                                    <div class="box_select w-50">
                                    <div class="box_select_item">
                                        <select class="form-select" aria-label="Default select example">
                                        <option selected>下限なし</option>
                                        <option value="5000">5,000万円</option>
                                        <option value="6000">6,000万円</option>
                                        <option value="7000">7,000万円</option>
                                        <option value="8000">8,000万円</option>
                                        <option value="9000">9,000万円</option>
                                        <option value="10000">10,000万円</option>
                                        <option value="12000">12,000万円</option>
                                        <option value="15000">15,000万円</option>
                                        <option value="18000">18,000万円</option>
                                        <option value="20000">20,000万円</option>
                                        <option value="25000">25,000万円</option>
                                        <option value="30000">30,000万円</option>
                                        </select>
                                    </div>
                                    <span>〜</span>
                                    <div class="box_select_item">
                                        <select class="form-select" aria-label="Default select example">
                                        <option selected>上限なし</option>
                                        <option value="6000">6,000万円</option>
                                        <option value="7000">7,000万円</option>
                                        <option value="8000">8,000万円</option>
                                        <option value="9000">9,000万円</option>
                                        <option value="10000">10,000万円</option>
                                        <option value="12000">12,000万円</option>
                                        <option value="15000">15,000万円</option>
                                        <option value="18000">18,000万円</option>
                                        <option value="20000">20,000万円</option>
                                        <option value="25000">25,000万円</option>
                                        <option value="30000">30,000万円</option>
                                        </select>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <th>専有面積</th>
                                <td>
                                    <div class="box_select w-50">
                                    <div class="box_select_item">
                                        <select class="form-select" aria-label="Default select example">
                                        <option selected>下限なし</option>
                                        <option value="60">60㎡</option>
                                        <option value="70">70㎡</option>
                                        <option value="80">80㎡</option>
                                        <option value="90">90㎡</option>
                                        <option value="100">100㎡</option>
                                        <option value="120">120㎡</option>
                                        <option value="150">150㎡</option>
                                        <option value="180">180㎡</option>
                                        <option value="200">200㎡</option>
                                        <option value="250">250㎡</option>
                                        <option value="300">300㎡</option>
                                        </select>
                                    </div>
                                    <span>〜</span>
                                    <div class="box_select_item">
                                        <select class="form-select" aria-label="Default select example">
                                        <option selected>上限なし</option>
                                        <option value="70">70㎡</option>
                                        <option value="80">80㎡</option>
                                        <option value="90">90㎡</option>
                                        <option value="100">100㎡</option>
                                        <option value="120">120㎡</option>
                                        <option value="150">150㎡</option>
                                        <option value="180">180㎡</option>
                                        <option value="200">200㎡</option>
                                        <option value="250">250㎡</option>
                                        <option value="300">300㎡</option>
                                        </select>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <!-- <tr>
                                <th>間取り</th>
                                <td class="td_list">
                                    <div class="box_select list">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">1R ～ 1K </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">1DK ～ 1LDK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">2K ～ 2LDK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">3DK ～ 3LDK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                        <label class="form-check-label" for="inlineCheckbox5">4DK ～ 4LDK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                        <label class="form-check-label" for="inlineCheckbox6">5LDK以上</label>
                                    </div>
                                    </div>
                                </td>
                                </tr> -->
                                <tr>
                                <th>駅距離</th>
                                <td>
                                    <div class="box_select">
                                    <div class="box_select_item ">
                                        <select class="form-select not_specified" aria-label="Default select example">
                                        <option value="1">5分以内</option>
                                        <option value="2">10分以内</option>
                                        <option value="3">15分以内</option>
                                        <option selected>指定しない</option>
                                        </select>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <th>こだわり</th>
                                <td class="td_custom">
                                    <div class="box_select custom">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="parking" value="option7">
                                        <label class="form-check-label" for="parking">駐車場相談</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="petsallowed" value="option8">
                                        <label class="form-check-label" for="petsallowed">ペット相談</label>
                                    </div>
                                    <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="deliverybox" value="option9">
                                        <label class="form-check-label" for="deliverybox">宅配ボックス</label>
                                    </div> -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="cornerroom" value="option9_01">
                                        <label class="form-check-label" for="cornerroom">角部屋</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="terrace_roofbalcony" value="option9_02">
                                        <label class="form-check-label" for="terrace_roofbalcony">テラス・ルーフバルコニー</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="terrace_roofbalcony" value="option9_02">
                                        <label class="form-check-label" for="terrace_roofbalcony">メゾネット</label>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <th>表示条件</th>
                                <td>
                                    <div class="box_select">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="show_sold_properties" value="option10">
                                        <label class="form-check-label" for="show_sold_properties">販売済の物件も表示</label>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                            </table>
                            <p class="mb-0 text-center">
                                <button type="submit" class="btn btn_searhconditions">
                                <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
                                <span>この条件で検索</span>
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <section class="section_list_templates">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title">販売中のリノベーションマンション</h2>
                            <p class="subtitle">販売中の中古マンションのなかから、LogRenoveが上質な物件だけをセレクト。都心部で駅に近く、なおかつ専有面積が広い――そんな希少物件を豊富な写真とともに、わかりやすく解説していきます。</p>
                            <!-- <div class="box_searchcondition_top">
                                <h3>検索条件</h3>
                                <p><span>エリア：</span>千代田区, 中央区, 港区, 新宿区, 文京区渋谷区, 台東区, 墨田区, 江東区, 荒川区, 足立区, 葛飾区</p>
                                <p><span>価格：</span>上限なし～下限なし</p>
                                <p><span>広さ：</span>上限なし～下限なし</p>
                                <p><span>こだわり：</span>ペット飼育可,WIC有り</p>
                            </div> -->
                            <section class="search-engine mb-4">
                                <p class="internal-search">
                                    <a href="#modal_search" class="btn_search" data-bs-toggle="modal"><img src="assets/images/icons/i_conditions.svg" alt="" class="img-fluid" width="15">条件を変更する</a>
                                </p>
                            </section>

                            <p class="totalprocess mt-3">全 <span>11</span> 件</p>
                            <ul class="list_content">
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/15111938/IV1651132321_16-800x533-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>神宮前コーポラス 310号室 神宮前コーポラス 310号室</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都渋谷区神宮前 6-25-8</h4>
                                            <p class="address">東京メトロ千代田線・副都心線「明治神宮前」駅徒歩3分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/21074553/IV1648788112_2-1.jpg" alt="img07">
                                            <span class="label_violet">100㎡以上</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>オープンレジデンス御殿山</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都品川区北品川 5-11-20</h4>
                                            <p class="address">JR山手線・埼京線・湘南新宿ライン「大崎」駅徒歩12分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/14104000/w1334_aa364bcc5c4bae371aa3c920e4d3154d-1.jpg" alt="img07">
                                            <span class="label_green">ルーフバルコニー</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>クレヴィア中目黒｜「中目黒」駅徒歩4分。12階角部屋、陽当たり＆眺望良好</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/12180136/%E5%86%99%E7%9C%9F-2022-05-10-17-04-11.jpg" alt="img07">
                                            <span class="label_blue">駅徒歩5分</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>日商岩井代官山マンション｜「代官山」駅徒歩1分のヴィンテージマンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/15111938/IV1651132321_16-800x533-1.jpg" alt="img07">
                                            <span class="label_yellow">価格改定</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>コスモ小石川｜「春日」駅徒歩5分、「後楽園」駅徒歩6分。4路線利用可能な都市型マンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都文京区小石川 3-27-6</h4>
                                            <p class="address">都営大江戸線・都営三田線「春日」駅徒歩5分東京メトロ丸の内線・東京メトロ南北線「後楽園」駅徒歩6分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/21074553/IV1648788112_2-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>デュオヒルズ御殿山｜御殿山に抱かれた瀟洒な低層マンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都品川区北品川 5-11-20</h4>
                                            <p class="address">JR山手線・埼京線・湘南新宿ライン「大崎」駅徒歩12分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/14104000/w1334_aa364bcc5c4bae371aa3c920e4d3154d-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>クレヴィア中目黒｜「中目黒」駅徒歩4分。12階角部屋、陽当たり＆眺望良好</h3>
                                            <div class="statistical">25階建/1894戸/1999年竣工</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/12180136/%E5%86%99%E7%9C%9F-2022-05-10-17-04-11.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>日商岩井代官山マンション｜「代官山」駅徒歩1分のヴィンテージマンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/15111938/IV1651132321_16-800x533-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>コスモ小石川｜「春日」駅徒歩5分、「後楽園」駅徒歩6分。4路線利用可能な都市型マンション</h3>
                                            <div class="statistical">25階建/1894戸/1999年竣工</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都文京区小石川 3-27-6</h4>
                                            <p class="address">都営大江戸線・都営三田線「春日」駅徒歩5分東京メトロ丸の内線・東京メトロ南北線「後楽園」駅徒歩6分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/21074553/IV1648788112_2-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>デュオヒルズ御殿山｜御殿山に抱かれた瀟洒な低層マンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都品川区北品川 5-11-20</h4>
                                            <p class="address">JR山手線・埼京線・湘南新宿ライン「大崎」駅徒歩12分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/06/14104000/w1334_aa364bcc5c4bae371aa3c920e4d3154d-1.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>クレヴィア中目黒｜「中目黒」駅徒歩4分。12階角部屋、陽当たり＆眺望良好</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="estates_detail.php">
                                        <div class="box_img">
                                            <img class="img-fluid" src="https://cdn.logknot.co.jp/logrenove/wp-content/uploads/2022/05/12180136/%E5%86%99%E7%9C%9F-2022-05-10-17-04-11.jpg" alt="img07">
                                            <span class="label_black">リノベ済</span>
                                        </div>
                                        <div class="box_body">
                                            <h3>日商岩井代官山マンション｜「代官山」駅徒歩1分のヴィンテージマンション</h3>
                                            <div class="statistical">2階/48.24㎡/1LDK</div>
                                            <p class="prices">12,000万円</p>
                                            <h4>東京都目黒区青葉台 1-22-10</h4>
                                            <p class="address">東京メトロ日比谷線・東急東横線「中目黒」駅徒歩4分東急東横線「代官山」駅徒歩10分</p>
                                        </div>
                                    </a>
                                </li>

                                
                            </ul>
                            <p class="text-center d-block d-lg-none mb-4">
                                <a href="#"><img class="img-fluid" src="images/icons/i_dot.svg" alt="i_dot" width="6"></a>
                            </p>
                            <!-- <p class="d-flex justify-content-center justify-content-lg-end"><a href="#" class="btn btn_condition"><img src="images/icons/i_sort.svg" alt="i_sort" width="15"> 条件を変更する</a></p> -->

                            <!-- <nav class="d-none d-lg-block" aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link"><img class="img-fluid" src="images/icons/i_left.svg" alt="i_left" width="8"></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><img class="img-fluid" src="images/icons/i_right2.svg" alt="i_right" width="8"></a>
                                    </li>
                                </ul>
                            </nav> -->

                        </div>
                    </div>
                </div>
            </section>

            <section class="section_searchconditions">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="box_conditions">
                                <h4>人気のエリアから探す</h4>
                                <p>表参道･青山　麻布･広尾　渋谷･恵比寿･中目黒　目黒･白金高輪　下北沢･三軒茶屋　東横線･目黒線　駒沢･二子玉川　代々木公園　井の頭線　神楽坂　品川・田町　銀座・築地　豊洲清澄・門前仲町　皇居西側　中央線　千駄ヶ谷･四ッ谷　西新宿　東新宿･早稲田　その他</p>
                            </div>

                            <div class="box_conditions">
                                <h4>人気の駅から探す</h4>
                                <p>表参道駅　乃木坂駅　目黒駅　中目黒駅　代官山駅　恵比寿駅　渋谷駅　三軒茶屋駅　広尾駅　麻布十番駅　六本木駅　品川駅　田町駅　五反田駅　大崎駅</p>
                            </div>

                            <div class="box_conditions">
                                <h4>こだわりから探す</h4>
                                <ul>
                                    <li><a href="#">リノベ済物件</a></li>
                                    <li><a href="#">カスタム可能物件</a></li>
                                    <li><a href="#">ペット飼育可</a></li>
                                    <li><a href="#">ウォークインクローゼット</a></li>
                                    <li><a href="#">角部屋　眺望・夜景</a></li>
                                    <li><a href="#">セキュリティ充実</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>
        
        <?php include('footer.php') ?>
        <div class="box_bottom fixed-bottom search">
    <div class="container">
        <!-- <div class="wrapper">
            <a href="#modal_search" data-bs-toggle="modal" input="button" class="btn d-flex d-md-none">
                <span class="i-home-w">条件を変える</span>
            </a>
        </div> -->
        <div class="wrapper">
                    <a href="https://www.logrenove.jp/request" class="btn material btn-property-request">
            <span class="i-user-w">物件探しを依頼</span>
        </a>
        <a href="#modal_search" data-bs-toggle="modal" input="button" class="btn btn-otherproperty-search d-flex">
            <span class="i-search-w">他の物件を検索</span>
        </a>
                <a href="tel:0120991657" class="btn phone_call d-none d-md-flex">
                <img src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" alt="i_phone" class="img-fluid lazyloaded" width="20" data-src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" decoding="async">
                <noscript><img src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" alt="i_phone" class="img-fluid" width="20" data-eio="l"></noscript> 0120-991-657
            </a>
        </div>
    </div>
</div>

        <?php include('js-footer.php') ?>
    </body>
</html>