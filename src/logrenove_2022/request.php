<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>

        <?php require('header.php'); ?>

        <main>
            <div class="wrapper">

                <section class="section_search bg-white mt-lg-5 mt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <h1>ご希望の物件をお探しします</h1>
                                <p class="text-center mb-4 mb-lg-5">弊社では、WEBサイト未公開の「シークレット物件」も多数取り揃えております。ご希望の条件に合わせて、弊社コンシェルジュがご提案いたします。お気軽にお問合せください。</p>

                                <form id="frm_services" class="frm_mansions frm_services property mt-0" data-form-type="search" action="" method="POST" accept-charset="utf-8">

                                    <div class="frm_mansions_content data-input" id="input-form">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label class="mb-lg-0 mb-2" for="">お名前 <span> (必須)</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="row mb-2 mb-lg-0">
                                                                <div class="col-2 col-lg-2 align-self-center">
                                                                    <p class="sub_lable">姓</p>
                                                                </div>
                                                                <div class="col-10 col-lg-10 align-self-center">
                                                                    <input type="text" name="last_name" class="form-control required" placeholder="例：山田" maxlength="20" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="row">
                                                                <div class="col-2 align-self-center">
                                                                    <p class="sub_lable">名</p>
                                                                </div>
                                                                <div class="col-10 align-self-center">
                                                                    <input type="text" name="first_name" class="form-control required" placeholder="例：太郎" maxlength="20" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label class="mb-lg-0 mb-2" for="">電話番号 <span>(必須)</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <p class="mb-1 note">※ハイフンなしの半角数字でご記入ください</p>
                                                    <input type="text" name="phone" class="form-control required" placeholder="09012345678" maxlength="11">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">メールアドレス <span> (必須)</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <input type="text" name="email" class="form-control required" placeholder="logrenove@propolife.co.jp" maxlength="200">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">希望エリア１ <span>（必須）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <select name="state" class="form-control form-select required">
                                                        <option value="" selected="">選択してください</option>
                                                        <option value="六本木・赤坂・青山">六本木・赤坂・青山</option>
                                                        <option value="表参道・原宿">表参道・原宿</option>
                                                        <option value="麻布・広尾">麻布・広尾</option>
                                                        <option value="恵比寿・目黒・白金">恵比寿・目黒・白金</option>
                                                        <option value="高輪・五反田・御殿山">高輪・五反田・御殿山</option>
                                                        <option value="渋谷・松濤・南平台">渋谷・松濤・南平台</option>
                                                        <option value="代官山・青葉台・中目黒">代官山・青葉台・中目黒</option>
                                                        <option value="代々木上原・代々木公園">代々木上原・代々木公園</option>
                                                        <option value="駒場・代沢・下北沢">駒場・代沢・下北沢</option>
                                                        <option value="池尻・三宿・三軒茶屋">池尻・三宿・三軒茶屋</option>
                                                        <option value="新宿・代々木・千駄ヶ谷">新宿・代々木・千駄ヶ谷</option>
                                                        <option value="飯田橋・九段下・番町">飯田橋・九段下・番町</option>
                                                        <option value="四谷・市ヶ谷・神楽坂">四谷・市ヶ谷・神楽坂</option>
                                                        <option value="目白・池袋・護国寺">目白・池袋・護国寺</option>
                                                        <option value="小石川・本郷・小日向">小石川・本郷・小日向</option>
                                                        <option value="本駒込・白山・千石">本駒込・白山・千石</option>
                                                        <option value="自由が丘・田園調布">自由が丘・田園調布</option>
                                                        <option value="碑文谷・八雲・柿の木坂 ">碑文谷・八雲・柿の木坂 </option>
                                                        <option value="二子玉川・上野毛">二子玉川・上野毛</option>
                                                        <option value="深沢・駒沢">深沢・駒沢</option>
                                                        <option value="用賀・桜新町・弦巻">用賀・桜新町・弦巻</option>
                                                        <option value="武蔵小杉">武蔵小杉</option>
                                                        <option value="銀座・汐留">銀座・汐留</option>
                                                        <option value="新橋・浜松町">新橋・浜松町</option>
                                                        <option value="芝・芝公園">芝・芝公園</option>
                                                        <option value="日本橋・人形町・八丁堀">日本橋・人形町・八丁堀</option>
                                                        <option value="秋葉原・上野・お茶の水">秋葉原・上野・お茶の水</option>
                                                        <option value="浅草・錦糸町・門前仲町">浅草・錦糸町・門前仲町</option>
                                                        <option value="勝どき・月島・佃・晴海">勝どき・月島・佃・晴海</option>
                                                        <option value="豊洲・東雲・有明">豊洲・東雲・有明</option>
                                                        <option value="天王洲・大井町">天王洲・大井町</option>
                                                        <option value="芝浦・海岸・港南">芝浦・海岸・港南</option>
                                                        <option value="吉祥寺・荻窪">吉祥寺・荻窪</option>
                                                        <option value="浜田山・永福・桜上水">浜田山・永福・桜上水</option>
                                                        <option value="成城・経堂">成城・経堂</option>
                                                        <option value="国立・三鷹">国立・三鷹</option>
                                                        <option value="中野">中野</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">希望エリア2</label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <select name="2_state" class="form-control form-select">
                                                        <option value="" selected="">選択してください</option>
                                                        <option value="六本木・赤坂・青山">六本木・赤坂・青山</option>
                                                        <option value="表参道・原宿">表参道・原宿</option>
                                                        <option value="麻布・広尾">麻布・広尾</option>
                                                        <option value="恵比寿・目黒・白金">恵比寿・目黒・白金</option>
                                                        <option value="高輪・五反田・御殿山">高輪・五反田・御殿山</option>
                                                        <option value="渋谷・松濤・南平台">渋谷・松濤・南平台</option>
                                                        <option value="代官山・青葉台・中目黒">代官山・青葉台・中目黒</option>
                                                        <option value="代々木上原・代々木公園">代々木上原・代々木公園</option>
                                                        <option value="駒場・代沢・下北沢">駒場・代沢・下北沢</option>
                                                        <option value="池尻・三宿・三軒茶屋">池尻・三宿・三軒茶屋</option>
                                                        <option value="新宿・代々木・千駄ヶ谷">新宿・代々木・千駄ヶ谷</option>
                                                        <option value="飯田橋・九段下・番町">飯田橋・九段下・番町</option>
                                                        <option value="四谷・市ヶ谷・神楽坂">四谷・市ヶ谷・神楽坂</option>
                                                        <option value="目白・池袋・護国寺">目白・池袋・護国寺</option>
                                                        <option value="小石川・本郷・小日向">小石川・本郷・小日向</option>
                                                        <option value="本駒込・白山・千石">本駒込・白山・千石</option>
                                                        <option value="自由が丘・田園調布">自由が丘・田園調布</option>
                                                        <option value="碑文谷・八雲・柿の木坂 ">碑文谷・八雲・柿の木坂 </option>
                                                        <option value="二子玉川・上野毛">二子玉川・上野毛</option>
                                                        <option value="深沢・駒沢">深沢・駒沢</option>
                                                        <option value="用賀・桜新町・弦巻">用賀・桜新町・弦巻</option>
                                                        <option value="武蔵小杉">武蔵小杉</option>
                                                        <option value="銀座・汐留">銀座・汐留</option>
                                                        <option value="新橋・浜松町">新橋・浜松町</option>
                                                        <option value="芝・芝公園">芝・芝公園</option>
                                                        <option value="日本橋・人形町・八丁堀">日本橋・人形町・八丁堀</option>
                                                        <option value="秋葉原・上野・お茶の水">秋葉原・上野・お茶の水</option>
                                                        <option value="浅草・錦糸町・門前仲町">浅草・錦糸町・門前仲町</option>
                                                        <option value="勝どき・月島・佃・晴海">勝どき・月島・佃・晴海</option>
                                                        <option value="豊洲・東雲・有明">豊洲・東雲・有明</option>
                                                        <option value="天王洲・大井町">天王洲・大井町</option>
                                                        <option value="芝浦・海岸・港南">芝浦・海岸・港南</option>
                                                        <option value="吉祥寺・荻窪">吉祥寺・荻窪</option>
                                                        <option value="浜田山・永福・桜上水">浜田山・永福・桜上水</option>
                                                        <option value="成城・経堂">成城・経堂</option>
                                                        <option value="国立・三鷹">国立・三鷹</option>
                                                        <option value="中野">中野</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">希望エリア3</label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <select name="3_state" class="form-control form-select">
                                                        <option value="" selected="">選択してください</option>
                                                        <option value="六本木・赤坂・青山">六本木・赤坂・青山</option>
                                                        <option value="表参道・原宿">表参道・原宿</option>
                                                        <option value="麻布・広尾">麻布・広尾</option>
                                                        <option value="恵比寿・目黒・白金">恵比寿・目黒・白金</option>
                                                        <option value="高輪・五反田・御殿山">高輪・五反田・御殿山</option>
                                                        <option value="渋谷・松濤・南平台">渋谷・松濤・南平台</option>
                                                        <option value="代官山・青葉台・中目黒">代官山・青葉台・中目黒</option>
                                                        <option value="代々木上原・代々木公園">代々木上原・代々木公園</option>
                                                        <option value="駒場・代沢・下北沢">駒場・代沢・下北沢</option>
                                                        <option value="池尻・三宿・三軒茶屋">池尻・三宿・三軒茶屋</option>
                                                        <option value="新宿・代々木・千駄ヶ谷">新宿・代々木・千駄ヶ谷</option>
                                                        <option value="飯田橋・九段下・番町">飯田橋・九段下・番町</option>
                                                        <option value="四谷・市ヶ谷・神楽坂">四谷・市ヶ谷・神楽坂</option>
                                                        <option value="目白・池袋・護国寺">目白・池袋・護国寺</option>
                                                        <option value="小石川・本郷・小日向">小石川・本郷・小日向</option>
                                                        <option value="本駒込・白山・千石">本駒込・白山・千石</option>
                                                        <option value="自由が丘・田園調布">自由が丘・田園調布</option>
                                                        <option value="碑文谷・八雲・柿の木坂 ">碑文谷・八雲・柿の木坂 </option>
                                                        <option value="二子玉川・上野毛">二子玉川・上野毛</option>
                                                        <option value="深沢・駒沢">深沢・駒沢</option>
                                                        <option value="用賀・桜新町・弦巻">用賀・桜新町・弦巻</option>
                                                        <option value="武蔵小杉">武蔵小杉</option>
                                                        <option value="銀座・汐留">銀座・汐留</option>
                                                        <option value="新橋・浜松町">新橋・浜松町</option>
                                                        <option value="芝・芝公園">芝・芝公園</option>
                                                        <option value="日本橋・人形町・八丁堀">日本橋・人形町・八丁堀</option>
                                                        <option value="秋葉原・上野・お茶の水">秋葉原・上野・お茶の水</option>
                                                        <option value="浅草・錦糸町・門前仲町">浅草・錦糸町・門前仲町</option>
                                                        <option value="勝どき・月島・佃・晴海">勝どき・月島・佃・晴海</option>
                                                        <option value="豊洲・東雲・有明">豊洲・東雲・有明</option>
                                                        <option value="天王洲・大井町">天王洲・大井町</option>
                                                        <option value="芝浦・海岸・港南">芝浦・海岸・港南</option>
                                                        <option value="吉祥寺・荻窪">吉祥寺・荻窪</option>
                                                        <option value="浜田山・永福・桜上水">浜田山・永福・桜上水</option>
                                                        <option value="成城・経堂">成城・経堂</option>
                                                        <option value="国立・三鷹">国立・三鷹</option>
                                                        <option value="中野">中野</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">希望価格<span>（必須）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row">
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <select name="price_from" data-related-name="price_to" data-type="compare" class="form-control form-select required">
                                                                <option value="8000万円">8000万円</option>
                                                                <option value="5000万円">5000万円</option>
                                                                <option value="6000万円">6000万円</option>
                                                                <option value="7000万円">7000万円</option>
                                                                <option value="8000万円">8000万円</option>
                                                                <option value="9000万円">9000万円</option>
                                                                <option value="10000万円">10000万円</option>
                                                                <option value="12000万円">12000万円</option>
                                                                <option value="15000万円">15000万円</option>
                                                                <option value="20000万円">20000万円</option>
                                                                <option value="25000万円">25000万円</option>
                                                                <option value="30000万円">30000万円</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-2 col-lg-2 align-self-center">
                                                            <p class="mb-0 text-center">～</p>
                                                        </div>
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <select name="price_to" class="form-control form-select required" data-type="compare">
                                                                <option value="9000万円">9000万円</option>
                                                                <option value="6000万円">6000万円</option>
                                                                <option value="7000万円">7000万円</option>
                                                                <option value="8000万円">8000万円</option>
                                                                <option value="9000万円">9000万円</option>
                                                                <option value="10000万円">10000万円</option>
                                                                <option value="12000万円">12000万円</option>
                                                                <option value="15000万円">15000万円</option>
                                                                <option value="20000万円">20000万円</option>
                                                                <option value="25000万円">25000万円</option>
                                                                <option value="30000万円">30000万円</option>
                                                                <option value="上限なし" selected="">上限なし </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">希望面積<span>（必須）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row">
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <select name="area_from" class="form-control form-select required" data-related-name="area_to" data-type="compare">
                                                                <option value="70㎡">70㎡</option>
                                                                <option value="50㎡">50㎡</option>
                                                                <option value="60㎡">60㎡</option>
                                                                <option value="70㎡">70㎡</option>
                                                                <option value="80㎡">80㎡</option>
                                                                <option value="90㎡">90㎡</option>
                                                                <option value="100㎡">100㎡</option>
                                                                <option value="120㎡">120㎡</option>
                                                                <option value="150㎡">150㎡</option>
                                                                <option value="200㎡">200㎡</option>
                                                                <option value="250㎡">250㎡</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-2 col-lg-2 align-self-center">
                                                            <p class="mb-0 text-center">～</p>
                                                        </div>
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <select name="area_to" class="form-control form-select required" data-type="compare">
                                                                <option value="80㎡">80㎡</option>
                                                                <option value="60㎡">60㎡</option>
                                                                <option value="70㎡">70㎡</option>
                                                                <option value="80㎡">80㎡</option>
                                                                <option value="90㎡">90㎡</option>
                                                                <option value="100㎡">100㎡</option>
                                                                <option value="120㎡">120㎡</option>
                                                                <option value="150㎡">150㎡</option>
                                                                <option value="200㎡">200㎡</option>
                                                                <option value="250㎡">250㎡</option>
                                                                <option value="上限なし" selected="">上限なし </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-2" for="">備考</label>
                                            <textarea name="request_content" class="form-control" cols="30" rows="8" placeholder="その他物件のご紹介にあたりご要望事項があればご記入ください" maxlength="1000"></textarea>
                                        </div>

                                        <div class="box_content_footer">
                                            <p class="primary_policy text-center">ご登録情報は当社の<a class="btn-link" href="https://www.propolife.co.jp/privacypolicy/" target="_blank"><b>プライバシーポリシー</b></a>に従い厳重に管理いたします。<br>
                                                また、物件に関する情報は株式会社LogSuiteの担当者よりご連絡いたします。</p>
                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox w_checkbox">
                                                    <input type="checkbox" name="agree_terms" class="custom-control-input required" id="agree_terms" value="agree">
                                                    <label class="custom-control-label agree_terms" for="ck_agree"> 同意する</label>
                                                </div>
                                            </div>

                                            <div class="form-group text-center mb-0">
                                                <button type="button" class="btn btnAgree" id="btnAgree">確認画面へ <i class="i_rightwhite"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <section class="data-confirm" style="display: none;">

                                        <table class="table table-bordered table-condensed">
                                            <tbody>
                                            <tr>
                                                <th width="33%">お名前</th>
                                                <td colspan="2" class="confirm-text">
                                                    <span class="cfr" data-name="last_name"></span> <span class="cfr" data-name="first_name"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>電話番号</th>
                                                <td colspan="2" class="confirm-text">
                                                    <span class="cfr" data-name="phone"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>メールアドレス</th>
                                                <td colspan="2" class="confirm-text">
                                                    <span class="cfr" data-name="email"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>希望エリア１</th>
                                                <td colspan="2">
                                                    <span class="cfr" data-name="state"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>希望エリア2</th>
                                                <td colspan="2">
                                                    <span class="cfr" data-name="2_state"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>希望エリア3</th>
                                                <td colspan="2">
                                                    <span class="cfr" data-name="3_state"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>希望価格</th>
                                                <td><span class="cfr" data-name="price_from"></span></td>
                                                <td><span class="cfr" data-name="price_to"></span></td>
                                            </tr>
                                            <tr>
                                                <th>希望面積</th>
                                                <td><span class="cfr" data-name="area_from"></span></td>
                                                <td><span class="cfr" data-name="area_to"></span></td>
                                            </tr>

                                            <tr>
                                                <th>その他のお問合わせ</th>
                                                <td colspan="2" class="confirm-text">
                                                    <span class="cfr" data-name="request_content"></span>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>

                                        <div class="box_content_footer mt-3">
                                            <div class="form-group mt-5 mb-2 text-center">
                                                <div id="reCAPTCHAv2" class="g-recaptcha" style="display: inline-block;"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfB6I0aAAAAAElo0TdPW-66NuzIB5QXc7YNIOvl&amp;co=aHR0cHM6Ly93d3cubG9ncmVub3ZlLmpwOjQ0Mw..&amp;hl=ja&amp;v=PRMRaAwB3KlylGQR57Dyk-pF&amp;size=normal&amp;cb=xgf194qfqy6r" width="304" height="78" role="presentation" name="a-ehyf8v4gmg0g" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                                <input type="hidden" id="token-recaptcha" name="validate-recaptcha" value="">
                                            </div>

                                            <div class="form-group text-center w_btnAgree">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <button type="button" class="btn btnAgree custom" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <button type="button" class="btn btnAgree" id="btnSubmit" disabled="">送信する <i class="i_rightwhite"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>
        
        <?php include('footer.php') ?>

        <div class="box_bottom fixed-bottom">
            <div class="container">
                <div class="wrapper">
                    <button input="button" class="btn reservation d-flex d-md-none" data-form="#frm_services" data-inquiry="来場予約" onclick="goToForm(this)"><span class="i-home-w">お問い合わせ</span></button>
                </div>
                <div class="wrapper">
                    <a href="https://www.logrenove.jp/mailmagazine/" class="btn material" data-inquiry="資料請求" onclick="goToForm(this)"><span class="i-email-w">新着物件情報</span></a>
                    <a href="#frm_mansions" data-scroll input="button" class="btn reservation d-none d-md-flex" data-form="#frm_mansions" data-inquiry="来場予約" onclick="goToForm(this)"><span class="i-home-w">お問い合わせ</span></a>
                    <a href="tel:0120991657" class="btn phone_call"><img src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" alt="i_phone" class="img-fluid lazyloaded" width="20" data-src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" decoding="async"><noscript><img src="https://www.logrenove.jp/wp-content/themes/logrenove2022/assets/images/icons/i_phone.svg" alt="i_phone" class="img-fluid" width="20" data-eio="l"></noscript> 0120-991-657</a>
                </div>
            </div>
        </div>

        <?php include('js-footer.php') ?>
    </body>
</html>