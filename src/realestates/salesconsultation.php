<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php include 'header.php'; ?>

        <div class="salesconsultation_page">

            <?php 
                $query = array();
                parse_str($_SERVER['QUERY_STRING'], $query);
                // // print_r($query['aza']);
                // echo $query['aza'] ?? "";
                // exit();
            ?>

            <section class="section_subbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <?php if(!isset($_GET['finish']) || $_GET['finish'] != 1): ?>
                                <h2>無料査定依頼・売却相談</h2>
                                <p>必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。</p>
                            <?php else: ?>
                                <h2>お問い合わせが完了しました</h2>
                                <p>
                                    お問い合わせありがとうございます。<br>
                                    後ほど、担当者からご連絡させて頂きます。<br>
                                    今しばらくお待ち下さい。</div>
                                    <p>※休業日などでご返信が遅くなる場合がございます。<br>
                                    お急ぎの場合はお電話でご確認お願いいたします。
                                </p><br><br><br>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </section>

            <?php if(!isset($_GET['finish']) || $_GET['finish'] != 1): ?>
            <section class="section_salesconsultation">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <form method="POST" role="form" class="formrun frm_contact" novalidate>
                                <input type="hidden" name="madori" id="madori" value="">
                                <input type="hidden" name="shiire_exclusive_area" id="shiire_exclusive_area" value="㎡">

                                <section class="defaultForm">
                                    <div class="request_content">
                                        <div class="block_content">
                                            <h2>査定方法・ご相談内容の種別</h2>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus mt-lg-3">ご希望の査定方法 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-4 col-lg-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="satei_type[]" id="satei_type_1" value="訪問査定" <?= isset($query['assessment']) && $query['assessment'] == 'visit' ? 'checked' : '' ?>>
                                                                <label class="form-check-label ms-2" for="satei_type_1">訪問査定</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-lg-9">
                                                            <p class="box_text_sm">実際に査定をご希望される物件の現地を訪問し、実際の物件の状況等を確認の上、具体的な査定を行うことができます。</p>
                                                        </div>
                                                        <div class="col-4 col-lg-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="satei_type[]" id="satei_type_2" value="簡易査定" <?= isset($query['assessment']) && $query['assessment'] == 'simple' ? 'checked' : '' ?>>
                                                                <label class="form-check-label ms-2" for="satei_type_2">簡易査定</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-lg-9">
                                                            <p class="box_text_sm mb-0">お客様よりお伝えいただいた物件に関する情報と、周辺の売出事例、成約事例等から概算の査定を行います。</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="block_content">
                                            <h2>査定対象物件の情報をご入力ください。</h2>

                                            <div class="block_content_highline">
                                                <div class="row g-3 mb-3">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">間取り</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                                                <select class="form-select" name="number_of_room">
                                                                    <option selected disabled value="">部屋数</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <select class="form-select" name="room_type">
                                                                    <option selected disabled value="">タイプ</option>
                                                                    <option value="ワンルーム">ワンルーム</option>
                                                                    <option value="K">K</option>
                                                                    <option value="DK">DK</option>
                                                                    <option value="LK">LK</option>
                                                                    <option value="LDK">LDK</option>
                                                                    <option value="SK">SK</option>
                                                                    <option value="SDK">SDK</option>
                                                                    <option value="SLK">SLK</option>
                                                                    <option value="SLDK">SLDK</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row g-3 mb-3">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">専有面積</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-lg-9">
                                                                <input class="form-control" type="text" name="occupied_area_text" value="" placeholder="おおよその面積で結構です">
                                                            </div>
                                                            <div class="col-12 col-lg-3">
                                                                <div class="box_radiocus">
                                                                    <div class="form-check form-check-inline mt-2">
                                                                        <input class="form-check-input" type="radio" name="occupied_area_unit[]" id="occupied_area_unit_1" value="㎡" checked>
                                                                        <label class="form-check-label" for="occupied_area_unit_1">㎡</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline mt-2">
                                                                        <input class="form-check-input" type="radio" name="occupied_area_unit[]" id="occupied_area_unit_2" value="坪">
                                                                        <label class="form-check-label" for="occupied_area_unit_2">坪</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">築年</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <select class="form-select" name="birthyear" id="birthyear">
                                                            <option value="1925年（大正14年）以前">1925年（大正14年）以前</option>
                                                            <option value="1926年（昭和元年）">1926年（昭和元年）</option>
                                                            <option value="1927年（昭和2年）">1927年（昭和2年）</option>
                                                            <option value="1928年（昭和3年）">1928年（昭和3年）</option>
                                                            <option value="1929年（昭和4年）">1929年（昭和4年）</option>
                                                            <option value="1930年（昭和5年）">1930年（昭和5年）</option>
                                                            <option value="1931年（昭和6年）">1931年（昭和6年）</option>
                                                            <option value="1932年（昭和7年）">1932年（昭和7年）</option>
                                                            <option value="1933年（昭和8年）">1933年（昭和8年）</option>
                                                            <option value="1934年（昭和9年）">1934年（昭和9年）</option>
                                                            <option value="1935年（昭和10年）">1935年（昭和10年）</option>
                                                            <option value="1936年（昭和11年）">1936年（昭和11年）</option>
                                                            <option value="1937年（昭和12年）">1937年（昭和12年）</option>
                                                            <option value="1938年（昭和13年）">1938年（昭和13年）</option>
                                                            <option value="1939年（昭和14年）">1939年（昭和14年）</option>
                                                            <option value="1940年（昭和15年）">1940年（昭和15年）</option>
                                                            <option value="1941年（昭和16年）">1941年（昭和16年）</option>
                                                            <option value="1942年（昭和17年）">1942年（昭和17年）</option>
                                                            <option value="1943年（昭和18年）">1943年（昭和18年）</option>
                                                            <option value="1944年（昭和19年）">1944年（昭和19年）</option>
                                                            <option value="1945年（昭和20年）">1945年（昭和20年）</option>
                                                            <option value="1946年（昭和21年）">1946年（昭和21年）</option>
                                                            <option value="1947年（昭和22年）">1947年（昭和22年）</option>
                                                            <option value="1948年（昭和23年）">1948年（昭和23年）</option>
                                                            <option value="1949年（昭和24年）">1949年（昭和24年）</option>
                                                            <option value="1950年（昭和25年）">1950年（昭和25年）</option>
                                                            <option value="1951年（昭和26年）">1951年（昭和26年）</option>
                                                            <option value="1952年（昭和27年）">1952年（昭和27年）</option>
                                                            <option value="1953年（昭和28年）">1953年（昭和28年）</option>
                                                            <option value="1954年（昭和29年）">1954年（昭和29年）</option>
                                                            <option value="1955年（昭和30年）">1955年（昭和30年）</option>
                                                            <option value="1956年（昭和31年）">1956年（昭和31年）</option>
                                                            <option value="1957年（昭和32年）">1957年（昭和32年）</option>
                                                            <option value="1958年（昭和33年）">1958年（昭和33年）</option>
                                                            <option value="1959年（昭和34年）">1959年（昭和34年）</option>
                                                            <option value="1960年（昭和35年）">1960年（昭和35年）</option>
                                                            <option value="1961年（昭和36年）">1961年（昭和36年）</option>
                                                            <option value="1962年（昭和37年）">1962年（昭和37年）</option>
                                                            <option value="1963年（昭和38年）">1963年（昭和38年）</option>
                                                            <option value="1964年（昭和39年）">1964年（昭和39年）</option>
                                                            <option value="1965年（昭和40年）">1965年（昭和40年）</option>
                                                            <option value="1966年（昭和41年）">1966年（昭和41年）</option>
                                                            <option value="1967年（昭和42年）">1967年（昭和42年）</option>
                                                            <option value="1968年（昭和43年）">1968年（昭和43年）</option>
                                                            <option value="1969年（昭和44年）">1969年（昭和44年）</option>
                                                            <option value="1970年（昭和45年）">1970年（昭和45年）</option>
                                                            <option value="1971年（昭和46年）">1971年（昭和46年）</option>
                                                            <option value="1972年（昭和47年）">1972年（昭和47年）</option>
                                                            <option value="1973年（昭和48年）">1973年（昭和48年）</option>
                                                            <option value="1974年（昭和49年）">1974年（昭和49年）</option>
                                                            <option value="1975年（昭和50年）">1975年（昭和50年）</option>
                                                            <option value="1976年（昭和51年）">1976年（昭和51年）</option>
                                                            <option value="1977年（昭和52年）">1977年（昭和52年）</option>
                                                            <option value="1978年（昭和53年）">1978年（昭和53年）</option>
                                                            <option value="1979年（昭和54年）">1979年（昭和54年）</option>
                                                            <option value="1980年（昭和55年）">1980年（昭和55年）</option>
                                                            <option value="1981年（昭和56年）">1981年（昭和56年）</option>
                                                            <option value="1982年（昭和57年）">1982年（昭和57年）</option>
                                                            <option value="1983年（昭和58年）">1983年（昭和58年）</option>
                                                            <option value="1984年（昭和59年）">1984年（昭和59年）</option>
                                                            <option value="1985年（昭和60年）">1985年（昭和60年）</option>
                                                            <option value="1986年（昭和61年）">1986年（昭和61年）</option>
                                                            <option value="1987年（昭和62年）">1987年（昭和62年）</option>
                                                            <option value="1988年（昭和63年）">1988年（昭和63年）</option>
                                                            <option value="1989年（平成元年）">1989年（平成元年）</option>
                                                            <option value="1990年（平成2年）">1990年（平成2年）</option>
                                                            <option value="1991年（平成3年）">1991年（平成3年）</option>
                                                            <option value="1992年（平成4年）">1992年（平成4年）</option>
                                                            <option value="1993年（平成5年）">1993年（平成5年）</option>
                                                            <option value="1994年（平成6年）">1994年（平成6年）</option>
                                                            <option value="1995年（平成7年）">1995年（平成7年）</option>
                                                            <option value="1996年（平成8年）">1996年（平成8年）</option>
                                                            <option value="1997年（平成9年）">1997年（平成9年）</option>
                                                            <option value="1998年（平成10年）">1998年（平成10年）</option>
                                                            <option value="1999年（平成11年）">1999年（平成11年）</option>
                                                            <option value="正確に覚えていない">正確に覚えていない</option>
                                                            <option selected disabled value="">--- 選択してください ---</option>
                                                            <option value="2000年（平成12年）">2000年（平成12年）</option>
                                                            <option value="2001年（平成13年）">2001年（平成13年）</option>
                                                            <option value="2002年（平成14年）">2002年（平成14年）</option>
                                                            <option value="2003年（平成15年）">2003年（平成15年）</option>
                                                            <option value="2004年（平成16年）">2004年（平成16年）</option>
                                                            <option value="2005年（平成17年）">2005年（平成17年）</option>
                                                            <option value="2006年（平成18年）">2006年（平成18年）</option>
                                                            <option value="2007年（平成19年）">2007年（平成19年）</option>
                                                            <option value="2008年（平成20年）">2008年（平成20年）</option>
                                                            <option value="2009年（平成21年）">2009年（平成21年）</option>
                                                            <option value="2010年（平成22年）">2010年（平成22年）</option>
                                                            <option value="2011年（平成23年）">2011年（平成23年）</option>
                                                            <option value="2012年（平成24年）">2012年（平成24年）</option>
                                                            <option value="2013年（平成25年）">2013年（平成25年）</option>
                                                            <option value="2014年（平成26年）">2014年（平成26年）</option>
                                                            <option value="2015年（平成27年）">2015年（平成27年）</option>
                                                            <option value="2016年（平成28年）">2016年（平成28年）</option>
                                                            <option value="2017年（平成29年）">2017年（平成29年）</option>
                                                            <option value="2018年（平成30年）">2018年（平成30年）</option>
                                                            <option value="2019年（平成31年）">2019年（平成31年）</option>
                                                            <option value="2020年（平成32年）">2020年（平成32年）</option>
                                                            <option value="2021年（平成33年）">2021年（平成33年）</option>
                                                            <option value="2022年（平成34年）">2022年（平成34年）</option>
                                                            <option value="2023年（平成35年）">2023年（平成35年）</option>
                                                            <option value="2024年（平成36年）">2024年（平成36年）</option>
                                                            <option value="2025年（平成37年）">2025年（平成37年）</option>
                                                            <option value="2026年（平成38年）">2026年（平成38年）</option>
                                                            <option value="2027年（平成39年）">2027年（平成39年）</option>
                                                            <option value="2028年（平成40年）">2028年（平成40年）</option>
                                                            <option value="2029年（平成41年）">2029年（平成41年）</option>
                                                            <option value="正確に覚えていない">正確に覚えていない</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >郵便番号</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="w_addresssearch position-relative">
                                                                <input class="form-control" type="text" name="shiire_post" value="<?=$query['post'] ?? ''?>" placeholder="1234567" onkeyup="AjaxZip3.zip2addr(this,'','shiire_pref','shiire_city', 'shiire_aza');" required>
                                                                <button type="button" class="btn btn_addresssearch" onclick="AjaxZip3.zip2addr('shiire_post','','shiire_pref','shiire_city', 'shiire_aza');"><i></i> 住所検索</button>
                                                                <div class="invalid-tooltip">
                                                                    値を入力してください
                                                                </div>
                                                            </div>
                                                            <div class="invalid-tooltip">
                                                              値を入力してください
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >都道府県</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10 position-relative">
                                                            <select class="form-select" name="shiire_pref" required>
                                                                <option selected disabled value="">都道府県を選択してください</option>
                                                                <option value="北海道">北海道</option>
                                                                <option value="青森県">青森県</option>
                                                                <option value="岩手県">岩手県</option>
                                                                <option value="宮城県">宮城県</option>
                                                                <option value="秋田県">秋田県</option>
                                                                <option value="山形県">山形県</option>
                                                                <option value="福島県">福島県</option>
                                                                <option value="茨城県">茨城県</option>
                                                                <option value="栃木県">栃木県</option>
                                                                <option value="群馬県">群馬県</option>
                                                                <option value="埼玉県">埼玉県</option>
                                                                <option value="千葉県">千葉県</option>
                                                                <option value="東京都">東京都</option>
                                                                <option value="神奈川県">神奈川県</option>
                                                                <option value="新潟県">新潟県</option>
                                                                <option value="山梨県">山梨県</option>
                                                                <option value="長野県">長野県</option>
                                                                <option value="富山県">富山県</option>
                                                                <option value="石川県">石川県</option>
                                                                <option value="福井県">福井県</option>
                                                                <option value="岐阜県">岐阜県</option>
                                                                <option value="静岡県">静岡県</option>
                                                                <option value="愛知県">愛知県</option>
                                                                <option value="三重県">三重県</option>
                                                                <option value="滋賀県">滋賀県</option>
                                                                <option value="京都府">京都府</option>
                                                                <option value="大阪府">大阪府</option>
                                                                <option value="兵庫県">兵庫県</option>
                                                                <option value="奈良県">奈良県</option>
                                                                <option value="和歌山県">和歌山県</option>
                                                                <option value="鳥取県">鳥取県</option>
                                                                <option value="島根県">島根県</option>
                                                                <option value="岡山県">岡山県</option>
                                                                <option value="広島県">広島県</option>
                                                                <option value="山口県">山口県</option>
                                                                <option value="徳島県">徳島県</option>
                                                                <option value="香川県">香川県</option>
                                                                <option value="愛媛県">愛媛県</option>
                                                                <option value="高知県">高知県</option>
                                                                <option value="福岡県">福岡県</option>
                                                                <option value="佐賀県">佐賀県</option>
                                                                <option value="長崎県">長崎県</option>
                                                                <option value="熊本県">熊本県</option>
                                                                <option value="大分県">大分県</option>
                                                                <option value="宮崎県">宮崎県</option>
                                                                <option value="鹿児島県">鹿児島県</option>
                                                                <option value="沖縄県">沖縄県</option>
                                                            </select>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >市区町村</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="shiire_city" value="<?=$query['city'] ?? ''?>">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >丁目番地</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="shiire_aza" value="<?=$query['aza'] ?? ''?>">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center align-items-lg-center g-2 g-lg-4 ">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" ><i class="label_name">建物・部屋番号</i></label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="shiire_building_roomnumber" value="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label">その他お問い合わせ</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <textarea name="free_detail_contact" rows="" cols="" class="form-control" placeholder="ご希望・ご質問・物件に関しての追加情報等ございましたらご記入ください。"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="block_content">
                                            <h2>連絡先をご入力ください</h2>
                                            <div class="row g-3 mb-4">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">お名前 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-lg-6 position-relative">
                                                            <input type="text" name="last-name" id="last-name" class="form-control mb-3 mb-lg-0" placeholder="姓" required>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 position-relative">
                                                            <input type="text" name="first-name" id="first-name" class="form-control" placeholder="名" required>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">フリガナ <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-lg-6 position-relative">
                                                            <input type="text" name="myouji" id="myouji" class="form-control mb-3 mb-lg-0" placeholder="セイ" required>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 position-relative">
                                                            <input type="text" name="namae" id="namae" class="form-control" placeholder="メイ" required>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label  class="text-lg-end d-block">郵便番号</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="w_addresssearch position-relative">
                                                                <input class="form-control" type="text" name="post" value="" placeholder="1234567" onkeyup="AjaxZip3.zip2addr(this,'','pref','city', 'aza');" required>
                                                                <button type="button" class="btn btn_addresssearch" onclick="AjaxZip3.zip2addr('post','','pref','city', 'aza');"><i></i> 住所検索</button>
                                                                <div class="invalid-tooltip">
                                                                    値を入力してください
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label  class="text-lg-end d-block">都道府県</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10 position-relative">
                                                            <select class="form-select" name="pref" required>
                                                                <option selected disabled value="">都道府県を選択してください</option>
                                                                <option value="北海道">北海道</option>
                                                                <option value="青森県">青森県</option>
                                                                <option value="岩手県">岩手県</option>
                                                                <option value="宮城県">宮城県</option>
                                                                <option value="秋田県">秋田県</option>
                                                                <option value="山形県">山形県</option>
                                                                <option value="福島県">福島県</option>
                                                                <option value="茨城県">茨城県</option>
                                                                <option value="栃木県">栃木県</option>
                                                                <option value="群馬県">群馬県</option>
                                                                <option value="埼玉県">埼玉県</option>
                                                                <option value="千葉県">千葉県</option>
                                                                <option value="東京都">東京都</option>
                                                                <option value="神奈川県">神奈川県</option>
                                                                <option value="新潟県">新潟県</option>
                                                                <option value="山梨県">山梨県</option>
                                                                <option value="長野県">長野県</option>
                                                                <option value="富山県">富山県</option>
                                                                <option value="石川県">石川県</option>
                                                                <option value="福井県">福井県</option>
                                                                <option value="岐阜県">岐阜県</option>
                                                                <option value="静岡県">静岡県</option>
                                                                <option value="愛知県">愛知県</option>
                                                                <option value="三重県">三重県</option>
                                                                <option value="滋賀県">滋賀県</option>
                                                                <option value="京都府">京都府</option>
                                                                <option value="大阪府">大阪府</option>
                                                                <option value="兵庫県">兵庫県</option>
                                                                <option value="奈良県">奈良県</option>
                                                                <option value="和歌山県">和歌山県</option>
                                                                <option value="鳥取県">鳥取県</option>
                                                                <option value="島根県">島根県</option>
                                                                <option value="岡山県">岡山県</option>
                                                                <option value="広島県">広島県</option>
                                                                <option value="山口県">山口県</option>
                                                                <option value="徳島県">徳島県</option>
                                                                <option value="香川県">香川県</option>
                                                                <option value="愛媛県">愛媛県</option>
                                                                <option value="高知県">高知県</option>
                                                                <option value="福岡県">福岡県</option>
                                                                <option value="佐賀県">佐賀県</option>
                                                                <option value="長崎県">長崎県</option>
                                                                <option value="熊本県">熊本県</option>
                                                                <option value="大分県">大分県</option>
                                                                <option value="宮崎県">宮崎県</option>
                                                                <option value="鹿児島県">鹿児島県</option>
                                                                <option value="沖縄県">沖縄県</option>
                                                            </select>
                                                            <div class="invalid-tooltip">
                                                                値を入力してください
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label  class="text-lg-end d-block">市区町村</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="city" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label  class="text-lg-end d-block">丁目番地</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="aza" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-lg-2">
                                                            <label  class="text-lg-end d-block"><i class="label_name">建物・部屋番号</i></label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <input class="form-control" type="text" name="building_roomnumber" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3 mb-4">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">ご連絡先電話番号 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 position-relative">
                                                    <input type="tel" name="phone-number" class="form-control" required>
                                                    <div class="invalid-tooltip">
                                                        <span class="error_phone-number">値を入力してください</spa>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mb-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">メールアドレス <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="position-relative">
                                                        <input type="email" name="email" id="email" class="form-control mb-3" placeholder="半角英数" required>
                                                        <div class="invalid-tooltip">
                                                            <span class="error_email">値を入力してください</spa>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative">
                                                        <input type="email" name="email-confirm"  class="form-control" placeholder="確認用" required>
                                                        <div class="invalid-tooltip">
                                                            <span class="error_email-confirm">値を入力してください</spa>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="box_privacypolicy">
                                                <p class="privacypolicy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                    個人情報の取扱に関しましては <a target="_blank" href="https://www.logknot.co.jp/privacypolicy/">個人情報の取扱いについて</a> をご覧ください。<br>
                                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                                <div class="form-check position-relative">
                                                    <input class="form-check-input" type="checkbox" value="" name="ck_agree" id="ck_agree" required>
                                                    <label class="form-check-label fw-normal" for="ck_agree">個人情報の取扱いについてに同意する</label>
                                                </div>
                                                <button type="button" class="btn btn_checkentries btnForm" id="goConfirm">入力内容を確認する</button>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                                <!-- confirm -->
                                <section class="confirmForm">
                                    <div class="request_content">
                                        <div class="block_content">
                                            <h2>査定方法・ご相談内容の種別</h2>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus mt-lg-3">ご希望の査定方法 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="cfrm_satei_type"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="block_content">
                                            <h2>査定対象物件の情報をご入力ください。</h2>

                                            <div class="block_content_highline">
                                                <div class="row g-3 mb-3">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">間取り</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                                                <div class="cfrm_madori"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row g-3 mb-3">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">専有面積</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="row align-items-center">
                                                            <div class="cfrm_shiire_exclusive_area"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        <label  class="col-form-label">築年</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="row align-items-center">
                                                            <div class="cfrm_birthyear"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >郵便番号</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_shiire_post"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >都道府県</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_shiire_pref"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >市区町村</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_shiire_city"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >丁目番地</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_shiire_aza"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" ><i class="label_name">建物・部屋番号</i></label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_shiire_building_roomnumber"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label">その他お問い合わせ</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center">
                                                        <div class="cfrm_comments"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="block_content">
                                            <h2>連絡先をご入力ください</h2>
                                            <div class="row g-3 mb-4">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">お名前 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row align-items-center">
                                                        <div class="cfrm_name"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">フリガナ <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row align-items-center">
                                                        <div class="cfrm_name_kana"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >郵便番号</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_post"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >都道府県</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_pref"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >市区町村</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_city"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" >丁目番地</label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_aza"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-lg-2">
                                                            <label class="text-lg-end d-block" ><i class="label_name">建物・部屋番号</i></label>
                                                        </div>
                                                        <div class="col-9 col-lg-10">
                                                            <div class="cfrm_building_roomnumber"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row g-3 mb-4">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">ご連絡先電話番号 <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row align-items-center">
                                                        <div class="cfrm_phonenumber"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mb-3">
                                                <div class="col-12 col-lg-3">
                                                    <label  class="col-form-label require_cus">メールアドレス <span>必須</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row align-items-center">
                                                        <div class="cfrm_email"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                              <!-- "Tags for blocking bot submissions" -->
                                              <div class="_formrun_gotcha">
                                                <style media="screen">._formrun_gotcha {position:absolute!important;height:1px;width:1px;overflow:hidden;}</style>
                                                <label for="_formrun_gotcha">If you are a human, ignore this field</label>
                                                <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
                                              </div>

                                            <div align="center">
                                                <div id="grecaptchaV2" style="display:inline-block; margin-bottom: 30px"></div>
                                                <input type="hidden" id="token-recaptcha" value="">
                                            </div>

                                            <div class="box_privacypolicy d-flex">
                                                <button type="button" class="btn btn_checkentries btnForm" id="goBack" style="width: 100%;">戻る</button> &nbsp;
                                                <button type="button" class="btn btn_checkentries btnForm" id="goSubmit" style="width: 100%;" disabled="true">送信する</button>
                                            </div>

                                        </div>

                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
        </div>


    </div>


    <?php require 'footer.php'; ?>
    <?php require 'js-footer.php'; ?>

    <?php 
        if(isset($query['post']) && !empty($query['post'])) {
            ?>
            <script>
                AjaxZip3.zip2addr('shiire_post','','shiire_pref','shiire_city', 'shiire_aza');
            </script>
            <?php
        }
    ?>
</body>

</html>