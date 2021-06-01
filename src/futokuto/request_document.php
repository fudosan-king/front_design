<!doctype html>
<html>
<?php include('head.php'); ?>

<body>
    <?php require('header.php') ?>
    <main>
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">資料請求</li>
                </ol>
            </div>
        </nav>
        <div class="main_content">
            <section class="section-request-doc">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h1 class="title">資料請求</h1>
                            <div class="request-doc">
                                <div class="request-doc_form">
                                    <div class="form-submit">
                                        <form class="frm js-request-doc" method="">
                                            <h3>フォームに必要事項をご入力ください。</h3>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            お名前 <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input name="name_customer" class="form-control required" type="text" value="" placeholder="例：山田　太郎">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            郵便番号 <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-6 col-lg-6">
                                                                <input type="text" class="form-control js_valid-postalcode" name="postal" placeholder="例：1234567" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','city', '')">
                                                            </div>
                                                            <div class="col-6 col-lg-6">
                                                                <a class="" id="" href="javascript:void(0)" onclick="AjaxZip3.zip2addr('postal','','prefecture','city', '')"><img src="./images/svg/i-arrow-r.svg" alt="" class="img-fluid mr-2" width="20"> 郵便番号から住所を自動入力</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            都道府県 <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="prefecture" class="form-control custom-select required" onchange>
                                                            <option value="">
                                                                都道府県を選択してください
                                                            </option>
                                                            <option value="北海道">
                                                                北海道
                                                            </option>
                                                            <option value="青森県">
                                                                青森県
                                                            </option>
                                                            <option value="岩手県">
                                                                岩手県
                                                            </option>
                                                            <option value="宮城県">
                                                                宮城県
                                                            </option>
                                                            <option value="秋田県">
                                                                秋田県
                                                            </option>
                                                            <option value="山形県">
                                                                山形県
                                                            </option>
                                                            <option value="福島県">
                                                                福島県
                                                            </option>
                                                            <option value="茨城県">
                                                                茨城県
                                                            </option>
                                                            <option value="栃木県">
                                                                栃木県
                                                            </option>
                                                            <option value="群馬県">
                                                                群馬県
                                                            </option>
                                                            <option value="埼玉県">
                                                                埼玉県
                                                            </option>
                                                            <option value="千葉県">
                                                                千葉県
                                                            </option>
                                                            <option value="東京都">
                                                                東京都
                                                            </option>
                                                            <option value="神奈川県">
                                                                神奈川県
                                                            </option>
                                                            <option value="新潟県">
                                                                新潟県
                                                            </option>
                                                            <option value="山梨県">
                                                                山梨県
                                                            </option>
                                                            <option value="長野県">
                                                                長野県
                                                            </option>
                                                            <option value="富山県">
                                                                富山県
                                                            </option>
                                                            <option value="石川県">
                                                                石川県
                                                            </option>
                                                            <option value="福井県">
                                                                福井県
                                                            </option>
                                                            <option value="岐阜県">
                                                                岐阜県
                                                            </option>
                                                            <option value="静岡県">
                                                                静岡県
                                                            </option>
                                                            <option value="愛知県">
                                                                愛知県
                                                            </option>
                                                            <option value="三重県">
                                                                三重県
                                                            </option>
                                                            <option value="滋賀県">
                                                                滋賀県
                                                            </option>
                                                            <option value="京都府">
                                                                京都府
                                                            </option>
                                                            <option value="大阪府">
                                                                大阪府
                                                            </option>
                                                            <option value="兵庫県">
                                                                兵庫県
                                                            </option>
                                                            <option value="奈良県">
                                                                奈良県
                                                            </option>
                                                            <option value="和歌山県">
                                                                和歌山県
                                                            </option>
                                                            <option value="鳥取県">
                                                                鳥取県
                                                            </option>
                                                            <option value="島根県">
                                                                島根県
                                                            </option>
                                                            <option value="岡山県">
                                                                岡山県
                                                            </option>
                                                            <option value="広島県">
                                                                広島県
                                                            </option>
                                                            <option value="山口県">
                                                                山口県
                                                            </option>
                                                            <option value="徳島県">
                                                                徳島県
                                                            </option>
                                                            <option value="香川県">
                                                                香川県
                                                            </option>
                                                            <option value="愛媛県">
                                                                愛媛県
                                                            </option>
                                                            <option value="高知県">
                                                                高知県
                                                            </option>
                                                            <option value="福岡県">
                                                                福岡県
                                                            </option>
                                                            <option value="佐賀県">
                                                                佐賀県
                                                            </option>
                                                            <option value="長崎県">
                                                                長崎県
                                                            </option>
                                                            <option value="熊本県">
                                                                熊本県
                                                            </option>
                                                            <option value="大分県">
                                                                大分県
                                                            </option>
                                                            <option value="宮崎県">
                                                                宮崎県
                                                            </option>
                                                            <option value="鹿児島県">
                                                                鹿児島県
                                                            </option>
                                                            <option value="沖縄県">
                                                                沖縄県
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            住所 <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input name="city" class="form-control required" type="text" value="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            建物名・号室
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                       
                                                        <input class="form-control" name="number_room" type="text" value="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            ご連絡先電話番号 <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        
                                                        <input class="form-control js_valid-phonenumber" name="phonenumber" type="text" value="" placeholder="例：080-0000-0000">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            メールアドレス <span class="i-required">必須</span>
                                                        </label>
                                                        <span class="label_required"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control js_valid-email" type="email" name="email" value="" placeholder="例：◯◯◯◯◯◯@xxxxxxxx.jp">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>
                                                            その他お問い合わせ
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea name="inquiry" class="form-control" placeholder="ご質問やご希望があればご記入ください。" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="request-doc_form_footer">
                                                            <p class="text-center">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。
                                                                <br>下記の
                                                                 <a href="/privacy-policy" target="_blank">プライバシーポリシー 
                                                                 </a> を必ずご一読頂き、同意のうえお問い合わせください。
                                                            </p>
                                                            
                                                            <div class="request-doc_custom-checkbox agree-privacy">
                                                                <label class="container" >
                                                                    <input class="required" id="ck_agree" type="checkbox" >
                                                                    <span class="checkmark"></span>
                                                                    同意する
                                                                </label>
                                                                <span class="label_required"></span>
                                                            </div>

                                                            <button type="button" class="btn btn-form-action js-submit-cfr" id="" ><span>上記に同意して確認画面へ</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- 
                                        ******************************
                                            CONFIRM FORM
                                        ******************************
                                        -->
                                        <div class="js-cfr-form" style="display:none;">
                                            <h3></h3>
                                           <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            お名前 <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_name_customer"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            郵便番号 <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_postal"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            都道府県 <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_prefecture"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            住所 <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_city"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            建物名・号室
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_number_room"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            ご連絡先電話番号 <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_number_room"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            メールアドレス <!-- <span class="i-required">必須</span> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="view_email"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>
                                                            その他お問い合わせ
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p class="view_inquiry"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="request-doc_form_footer">
                                                          <!--   <p class="text-center">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。
                                                                <br>下記の
                                                                 <a href="/privacy-policy" target="_blank">プライバシーポリシー 
                                                                 </a> を必ずご一読頂き、同意のうえお問い合わせください。
                                                            </p>
                                                            
                                                            <div class="request-doc_custom-checkbox agree-privacy">
                                                                <label class="container" >
                                                                    <input class="required" id="ck_agree" type="checkbox" checked="checked" disabled >
                                                                    <span class="checkmark"></span>
                                                                    同意する
                                                                </label>
                                                            </div> -->

                                                            <div class="action_back_submit">                                                            
                                                                <button type="button" class="btn btn-form-action" id="action_back" ><span>戻る</span></button>

                                                                <button type="button" class="btn btn-form-action" id="action_submit" ><span>送信</span></button>
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
                </div>
            </section>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <?php include('js_footer.php'); ?>
</body>

</html>