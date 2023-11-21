<!DOCTYPE html>
<html class="no-js" lang="ja">

<head>
    <?php include 'head.php'; ?>
</head>

<body class="home blog">
    <?php include 'header.php'; ?>

    <?php include 'menu_sub.php'; ?>

    <section class="section_contactus">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contactus_top request_assessment_top">
                        <h2 class="title_sub">無料査定依頼</h2>
                    </div>
                    <div class="contactus_content">
                        <form method="POST" role="form" class="formrun frm_contactus">
                            <div class="contact_tel">
                                <p><b>＜お電話でのお問い合わせについて＞</b><br>
                                    お電話でのお問い合わせは次の番号までお願いいたします。<br>
                                    電話番号：<a href="tel:0800-111-1678" target="_blank" rel="noopener noreferrer">0800-111-1678</a> <br>
                                    受付時間／10:00〜19:00 定休日／火・水曜日※祝日を除く <br>
                                    携帯電話・PHSからもご利用いただけます。</p>
                            </div>
                            <p class="text-center">
                                必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                                <span class="red">＊</span>がついている項目はご記入必須項目になります。
                            </p>

                            <div class="card assessmentmethod">
                                <div class="card-header">■査定方法・ご相談内容の種別</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <p><strong>ご希望の査定方法 <span class="red">＊</span></strong></p>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label class="check-radio">訪問査定
                                                        <input type="radio" checked="checked" name="contact_method[]" value="訪問査定" data-value="訪問査定">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <p class="describe">実際に査定をご希望される物件の現地を訪問し、実際の物件の状況等を確認の上、具体的な査定を行うことができます。</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <div class="radio">
                                                        <label class="check-radio">簡易査定
                                                            <input type="radio" name="contact_method[]" value="簡易査定" data-value="簡易査定">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <p class="describe mb-0">お客様よりお伝えいただいた物件に関する情報と、周辺の売出事例、成約事例等から概算の査定を行います。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card assessmentmethod">
                                <div class="card-header">■査定対象物件の情報をご入力ください。</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">物件の内容</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <p class="mb-0">Auto get [Estate Name] Value</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">間取り <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <select class="form-control custom-select">
                                                    <option value="部屋数">部屋数</option>
                                                    <option value="1">1</option>
                                                    <option value="2">3</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">専有面積 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="number" name="" value="" class="form-control">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label class="check-radio d-inline-block mt-3 mt-lg-0">m2
                                                            <input type="radio" checked="checked" name="exclusive_area" value="m2" data-value="m2">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="check-radio d-inline-block ml-3">坪
                                                            <input type="radio" checked="checked" name="exclusive_area" value="坪" data-value="坪">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <p class="mb-0">（※）おおよそで結構です。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">築年 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <select class="form-control custom-select">
                                                    <option value="--- 選択してください --- ">--- 選択してください --- </option>
                                                    <option value="1925年（大正14年）以前">1925年（大正14年）以前</option>
                                                    <option value="1926年（昭和元年">1926年（昭和元年</option>
                                                    <option value="1927年（昭和2年）">1927年（昭和2年）</option>
                                                    <option value="1928年（昭和3年）">1928年（昭和3年）</option>
                                                    <option value="1929年（昭和4年）">1929年（昭和4年）</option>
                                                    <option value="....">....</option>
                                                    <option value="1988年（昭和63年）">1988年（昭和63年）</option>
                                                    <option value="1989年（平成元年">1989年（平成元年</option>
                                                    <option value="1990年（平成2年）">1990年（平成2年）</option>
                                                    <option value="....">....</option>
                                                    <option value="2019年（平成31年）">2019年（平成31年）</option>
                                                    <option value="正確に覚えていない">正確に覚えていない</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <p>物件所在地 <span class="red">（※）</span></p>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">郵便番号 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" name="zip_code" class="form-control" placeholder="例：1234567" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
                                                    </div>
                                                    <div class="col-12 col-lg-6 align-self-center">
                                                        <a class="btn_autofill_prefectureaddress" id="btn_autofill_prefectureaddress" href="javascript:void(0)" onclick="AjaxZip3.zip2addr('postal','','prefecture','address', '')"><img src="assets/images/i_right.svg" alt="i_right" class="img-fluid mr-2" width="20">郵便番号から住所を自動入力</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">都道府県 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <select class="form-control custom-select">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">住所 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">建物名・号室</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">ご質問、ご要望等</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card assessmentmethod">
                                <div class="card-header">■連絡先をご入力ください</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">お名前 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row mb-2 mb-lg-0">
                                                            <div class="col-3 col-lg-3 align-self-center">
                                                                <label for="">姓</label>
                                                            </div>
                                                            <div class="col-9 col-lg-9 align-self-center">
                                                                <input type="text" name="last_name" class="form-control required" placeholder="山田" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-3 align-self-center">
                                                                <label for="">名</label>
                                                            </div>
                                                            <div class="col-9 align-self-center">
                                                                <input type="text" name="first_name" class="form-control required" placeholder="太郎" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">お名前（フリガナ）<span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row mb-2 mb-lg-0">
                                                            <div class="col-3 col-lg-3 align-self-center">
                                                                <label for="">セイ</label>
                                                            </div>
                                                            <div class="col-9 col-lg-9 align-self-center">
                                                                <input type="text" name="last_name" class="form-control required" placeholder="山田" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-3 align-self-center">
                                                                <label for="">メイ</label>
                                                            </div>
                                                            <div class="col-9 align-self-center">
                                                                <input type="text" name="first_name" class="form-control required" placeholder="太郎" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">郵便番号 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" name="zip_code" class="form-control" placeholder="例：1234567" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
                                                    </div>
                                                    <div class="col-12 col-lg-6 align-self-center">
                                                        <a class="btn_autofill_prefectureaddress" id="btn_autofill_prefectureaddress" href="javascript:void(0)" onclick="AjaxZip3.zip2addr('postal','','prefecture','address', '')"><img src="assets/images/i_right.svg" alt="i_right" class="img-fluid mr-2" width="20">郵便番号から住所を自動入力</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">都道府県 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <select class="form-control custom-select">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">住所 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">建物名・号室</label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">ご連絡先電話番号 <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <input type="number" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0 mb-2" for="">メールアドレス <span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <input type="email" name="" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="contactus_footer">
                                <div class="custom-control custom-checkbox">
                                    <p class="text-center">
                                        ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                        個人情報の取扱に関しましては <a href="/policy-sell" target="_blank">個人情報の取扱いについて</a>をご覧ください。<br>
                                        ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
                                    </p>
                                    <input type="checkbox" class="custom-control-input required" id="ck_agree" name="ck_agree">
                                    <label class="custom-control-label" for="ck_agree">個人情報の取扱いについてに同意する</label>
                                </div>
                                <button type="button" class="btn btnsubmit" id="btnAgree">入力内容を確認する<i class="i_rightwhite"></i></button>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>


    <!-- Scripts -->
    <?php include 'js-footer.php'; ?>
</body>

</html>