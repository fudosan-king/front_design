<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>

        <?php require('header.php'); ?>

        <main>
            <section class="section_searchconditions bg-white mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h1>ご希望の物件をお探しします</h1>
                            <form class="frm_mansions mt-0" action="search_conditions_confirm.php">
                                <div class="frm_mansions_content">
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
                                                                <input type="text" name="" class="form-control required" placeholder="山田" maxlength="20">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-2 align-self-center">
                                                                <p class="sub_lable">名</p>
                                                            </div>
                                                            <div class="col-10 align-self-center">
                                                                <input type="text" name="" class="form-control required" placeholder="花子" maxlength="20">
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
                                                <p class="mt-2 mb-1 note">※ハイフンなしの半角数字でご記入ください</p>
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
                                                <select name="" id="" class="form-control form-select required">
                                                    <option value="してください">してください</option>
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
                                                <select name="" id="" class="form-control form-select required">
                                                    <option value="してください">してください</option>
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
                                                <select name="" id="" class="form-control form-select required">
                                                    <option value="してください">してください</option>
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
                                                        <select class="form-control form-select required">
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
                                                        <select class="form-control form-select required">
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
                                                        <select class="form-control form-select required">
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
                                                        <select class="form-control form-select required">
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
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-2" for="">備考</label>
                                        <textarea name="" id="" class="form-control" cols="30" rows="8" placeholder="その他物件のご紹介にあたりご要望事項があればご記入ください" maxlength="1000"></textarea>
                                    </div>
                                    
                                    <div class="box_content_footer">
                                        <p class="primary_policy text-center">ご登録情報は当社の<a class="btn-link" href="https://www.prostyle-residence.com/privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a>に従い厳重に管理いたします。<br>
                                        また、物件に関する情報は株式会社LogSuiteの担当者よりご連絡いたします。</p>
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox w_checkbox">
                                                <input type="checkbox" class="form-check-input required me-1" id="ck_agree" name="ck_agree">
                                                <label class="custom-control-label" for="ck_agree"> 同意する</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group text-center mb-0">
                                            <button type="button" class="btn btnAgree" id="btnAgree">確認画面へ <i class="i_rightwhite"></i></button>
                                        </div>
                                    </div>
                                                    
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>