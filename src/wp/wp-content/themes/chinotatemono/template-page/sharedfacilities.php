<?php 
/*
    Template Name: Sharedfacilities
*/
?>


<?php get_header(); ?>

<main>
    <nav class="nav_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link flex-fill " id="nav-brokers-tab" href="https://www.chinokanri.co.jp/contact/naiken/"
                        role="tab" aria-controls="nav-brokers" aria-selected="false"><span>仲介業者様専<br>用内見依頼フォーム</span></a>
                        <a class="nav-item nav-link flex-fill " id="nav-rentalproperty-tab"
                        href="https://www.chinokanri.co.jp/contact/chintai/" role="tab" aria-controls="nav-rentalproperty"
                        aria-selected="false"><span>当社管理賃貸物件に<br>関するお問い合わせ</span></a>
                        <a class="nav-item nav-link flex-fill " id="nav-cancellation-tab"
                        href="https://www.chinokanri.co.jp/contact/kaiyaku/" role="tab" aria-controls="nav-cancellation"
                        aria-selected="false"><span>解約に関する<br>お問い合わせ</span></a>
                        <a class="nav-item nav-link flex-fill " id="nav-propertysale-tab"
                        href="https://www.chinokanri.co.jp/contact/bunjyo/" role="tab" aria-controls="nav-propertysale"
                        aria-selected="false"><span>当社管理マンションに<br>関するお問い合わせ</span></a>
                        <a class="nav-item nav-link flex-fill " id="nav-management-tab"
                        href="https://www.chinokanri.co.jp/contact/important/" role="tab" aria-controls="nav-management"
                        aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                        <!-- <a class="nav-item nav-link flex-fill " id="nav-naiken-tab" href="" role="tab" aria-controls="nav-naiken" aria-selected="false"><span>仲介業者様専用<br>内見依頼フォーム</span></a> -->
                        <a class="nav-item nav-link flex-fill active" id="nav-shared-facilities-tab"
                        href="https://www.chinokanri.co.jp/contact/shared-facilities/" role="tab"
                        aria-controls="nav-shared-facilities" aria-selected="false"><span>共用施設使用<br>申込フォーム</span></a>
                        <a class="nav-item nav-link flex-fill " id="nav-others-tab"
                        href="https://www.chinokanri.co.jp/contact/others/" role="tab" aria-controls="nav-others"
                        aria-selected="false"><span>その他のお問い合わせ</span></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-propertysale" role="tabpanel" aria-labelledby="nav-propertysale-tab">
            <section class="section_content_top">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                    <h1 id="form-title">共用施設使用申込フォーム</h1>
                    <ul class="steps d-flex">
                        <li id="input" class="active flex-fill"><span>入力</span></li>
                        <li id="confirm" class="flex-fill"><span>確認</span></li>
                        <li id="finish" class="flex-fill"><span>完了</span></li>
                    </ul>
                    <ul class="list">
                        <li>弊社管理物件お住まいの方専用となります。管理会社が不明な場合は、弊社までご連絡下さい。</li>
                        <li>解約の際は1か月前予告となりますので、本書面ご提出から1か月後が解約日となります。</li>
                        <li>夜間、水、日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
                        <li>お問い合わせ・・・・　0120-99-7950　受付時間10：00～19：00（日曜日・祝日、年末年始を除く）<br>
                        緊急連絡先（夜間等、マンション共用部分に異常等が発生した場合） 03-5422-6389 上記受付時間外対応</li>
                    </ul>
                    </div>
                </div>
                </div>
            </section>
            <section class="section_content_body bg_bluelight">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                    <form class="frm_general" id="form-bunjyo" method="POST">
                        <div class="frm_general_content" id="input-form">
        
                        <h2>次のとおり、駐車場・駐輪場・バイク置場等　の使用を申し込みます。</h2>
        
                        <div class="form-group">
                            <label for="" class="mb-2">マンション名</label>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="_union_name" class="form-control mb-3" placeholder="">
                                    <input type="hidden" name="union_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">号室</label>
                            <div class="row">
                            <div class="col-2 col-lg-1 align-self-center">
                                <span class="label_sub">必須</span>
                            </div>
                            <div class="col-8 col-lg-10 align-self-center">
                                <input type="text" name="room-number" class="form-control required" placeholder="301">
                            </div>
                            <div class="col-2 col-lg-1 align-self-center">
                                <span>号室</span>
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">お名前</label>
                            <div class="row">
                            <div class="col-12 col-lg-1 align-self-center">
                                <span class="label_sub">必須</span>
                            </div>
                            <div class="col-12 col-lg-11 align-self-center">
                                <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row mb-2 mb-lg-0">
                                    <div class="col-2 align-self-center">
                                        <p class="mb-0">姓</p>
                                    </div>
                                    <div class="col-10 align-self-center">
                                        <input type="text" name="kanji_familyname" class="form-control required"
                                        placeholder="例：千野">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                    <div class="col-2 align-self-center">
                                        <p class="mb-0">名</p>
                                    </div>
                                    <div class="col-10 align-self-center">
                                        <input type="text" name="kanji_name" class="form-control required" placeholder="例：太郎">
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="">お名前（フリガナ）</label>
                            <div class="row">
                            <div class="col-12 col-lg-1 align-self-center">
                                <span class="label_sub">必須</span>
                            </div>
                            <div class="col-12 col-lg-11 align-self-center">
                                <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row mb-2 mb-lg-0">
                                    <div class="col-2 align-self-center">
                                        <p class="mb-0">セイ</p>
                                    </div>
                                    <div class="col-10 align-self-center">
                                        <input type="text" name="kata_familyname" class="form-control required"
                                        placeholder="例：チノ">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                    <div class="col-2 align-self-center">
                                        <p class="mb-0">メイ</p>
                                    </div>
                                    <div class="col-10 align-self-center">
                                        <input type="text" name="kata_name" class="form-control required" placeholder="例：タロウ">
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                            <div class="row">
                            <div class="col-2 col-lg-1 align-self-center">
                                <span class="label_sub">必須</span>
                            </div>
                            <div class="col-10 col-lg-11 align-self-center">
                                <input type="text" name="phone_number" placeholder="例：0312341234" class="form-control required">
                            </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="">メールアドレス（半角英数字）</label>
                            <div class="row">
                            <div class="col-2 col-lg-1 align-self-center">
                                <span class="label_sub">必須</span>
                            </div>
                            <div class="col-10 col-lg-11 align-self-center">
                                <input type="email" name="email" placeholder="例：xxxxxxx@hchinokanri.co.jp"
                                class="form-control required">
                            </div>
                            </div>
                        </div>
        
                        <div class="table-responsive mt-4 mb-5">
                            <table class="table remove-border">
                            <tbody>
                                <tr>
                                <td>
                                    <label for="">申込施設</label> <br>
                                    <span class="label_sub">必須</span>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" id="facilities_1" name="facilities" class="form-check-input required"
                                        value="駐車場">
                                    <label class="custom-control-label" for="facilities_1">駐車場</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" id="facilities_2" name="facilities" class="form-check-input required"
                                        value="駐輪場">
                                    <label class="custom-control-label" for="facilities_2">駐輪場</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" id="facilities_3" name="facilities" class="form-check-input required"
                                        value="バイク置場">
                                    <label class="custom-control-label" for="facilities_3">バイク置場</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" id="facilities_4" name="facilities" class="form-check-input required"
                                        value="トランクルーム">
                                    <label class="custom-control-label" for="facilities_4">トランクルーム</label>
                                    </div>
                                    <input type="hidden" name="app_facilities" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <label for="">申込区分</label> <br>
                                    <span class="label_sub">必須</span>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="app_categories_1" name="app_categories"
                                        class="form-check-input required" value="新規" checked="">
                                    <label class="custom-control-label" for="app_categories_1">新規</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="app_categories_2" name="app_categories"
                                        class="form-check-input required" value="変更">
                                    <label class="custom-control-label" for="app_categories_2">変更</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="app_categories_3" name="app_categories"
                                        class="form-check-input required" value="解約">
                                    <label class="custom-control-label" for="app_categories_3">解約</label>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <label for="">申込区画</label>
                                </td>
                                <td>
                                    <input type="text" name="_app_area" class="form-control" placeholder="No.">
                                    <input type="hidden" name="app_area" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <label for="">希望日</label>
                                </td>
                                <td width="88%">
                                    <span>申込区分に応じて、新規の場合はご希望の開始日、変更の場合は変更開始日、解約の場合は解約希望日をご指定下さい</span>
                                    <div class="box_datetime opt1">
                                    <input type="text" id="isetup_date" name="setup_date" class="form-control datepicker"
                                        autocomplete="off" placeholder="使用開始日" value="2022/08/03" readonly="">
                                    <i class="i_datetime"></i>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <label for="">使用者</label> <br>
                                    <span class="label_sub">必須</span>
                                </td>
                                <td>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="user_1" name="user" class="form-check-input required"
                                        value="区分所有者またはその同居者" checked="">
                                    <label class="custom-control-label" for="user_1">区分所有者またはその同居者</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="user_2" name="user" class="form-check-input required" value="賃借人">
                                    <label class="custom-control-label" for="user_2">賃借人</label>
                                    </div>
                                    <div class="custom-control custom-control-inline mt-1">
                                    <input type="text" name="user_detail" class="form-control" placeholder="氏名をご記入ください"
                                        readonly="">
                                    </div>
                                    <input type="hidden" name="app_user" class="form-control" value="区分所有者またはその同居者">
                                </td>
                                </tr>
                                <tr>
                                <td><label for="">備考</label></td>
                                <td>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="4"></textarea>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
        
                        <h2>駐車場をお申し込みの方は以下の内容についてもご記入ください <br>購入予定の方は予定のメーカー・車種をご記入ください。</h2>
                        <div class="table-responsive mt-4 mb-5">
                            <table class="table remove-border">
                            <tbody>
                                <tr>
                                <td class="align-middle">
                                    <label for="">車両登録番号</label>
                                </td>
                                <td>
                                    <input type="text" name="vehicle_registration_number" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <label for="">メーカー・車種</label>
                                </td>
                                <td>
                                    <input type="text" name="vehicle_manufacturer_model" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <label for="">全長</label>
                                </td>
                                <td>
                                    <input type="text" name="_vehicle_length" class="form-control" placeholder="単位：mm">
                                    <input type="hidden" name="vehicle_length" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <label for="">全幅</label>
                                </td>
                                <td>
                                    <input type="text" name="_vehicle_width" class="form-control" placeholder="単位：mm">
                                    <input type="hidden" name="vehicle_width" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <label for="">全高</label>
                                </td>
                                <td>
                                    <input type="text" name="_vehicle_overall_height" class="form-control" placeholder="単位：mm">
                                    <input type="hidden" name="vehicle_overall_height" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <label for="">重量</label>
                                </td>
                                <td>
                                    <input type="text" name="_vehicle_weight" class="form-control" placeholder="単位：Kg">
                                    <input type="hidden" name="vehicle_weight" class="form-control">
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
        
                        <div class="box_content_footer">
                            <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                            個人情報の取扱に関しましては <a class="btn-link" href="https://www.chinokanri.co.jp/privacy-policy/"
                                target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                            ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                            <div class="form-group text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input required" id="ck_agree" name="ck_agree">
                                <label class="custom-control-label" for="ck_agree">同意する</label>
                            </div>
                            </div>
        
                            <div class="form-group text-center">
                            <button type="button" class="btn btnAgree d-inline-block" id="btnAgree">上記に同意して確認画面へ <i
                                class="i_rightwhite"></i></button>
                            </div>
                        </div>
                        </div>
        
                        <!-- Confirm data display -->
        
                        <div class="frm_general frm-confirm" id="confirm-form" style="display: none">
                        <h2>次のとおり、駐車場・駐輪場・バイク置場　の使用を申し込みます。</h2>
                        <div class="form-group">
                            <table class="table remove-border mt-4">
                            <tbody>
                                <tr>
                                <td>組合名</td>
                                <td>
                                    <div id="union_name"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>お名前</td>
                                <td>
                                    <span id="kanji_familyname"></span> <span id="kanji_name"></span>
                                </td>
                                </tr>
                                <tr>
                                <td>お名前（フリガナ）</td>
                                <td>
                                    <span id="kata_familyname"></span> <span id="kata_name"></span>
                                </td>
                                </tr>
                                <tr>
                                <td>電話番号</td>
                                <td id="phone_number"></td>
                                </tr>
                                <tr>
                                <td>メールアドレス</td>
                                <td id="email"></td>
                                </tr>
                            </tbody>
                            </table>
        
        
        
                            <table class="table remove-border mt-4 mb-5">
                            <tbody>
                                <tr>
                                <td>申込施設</td>
                                <td>
                                    <div id="app_facilities"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>申込区分</td>
                                <td>
                                    <div id="app_categories"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>申込区画</td>
                                <td>
                                    <div id="app_area"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>希望日</td>
                                <td id="setup_date"></td>
                                </tr>
        
                                <tr>
                                <td>使用者</td>
                                <td id="app_user"></td>
                                </tr>
                                <tr>
                                <td>備考</td>
                                <td id="description"></td>
                                </tr>
                            </tbody>
                            </table>
        
                            <table class="table remove-border mt-4 mb-5">
                            <tbody>
                                <tr>
                                <td>車両登録番号</td>
                                <td>
                                    <div id="vehicle_registration_number"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>メーカー・車種</td>
                                <td>
                                    <div id="vehicle_manufacturer_model"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>全長</td>
                                <td>
                                    <div id="vehicle_length"></div>
                                </td>
                                </tr>
                                <tr>
                                <td>全幅</td>
                                <td id="vehicle_width"></td>
                                </tr>
                                <tr>
                                <td>全高</td>
                                <td id="vehicle_overall_height"></td>
                                </tr>
        
                                <tr>
                                <td>重量</td>
                                <td id="vehicle_weight"></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="form-group text-center pt-5">
                            <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                                <div id="reCAPTCHAv2" style="display: inline-block;">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lee1VwaAAAAAPlVxw7qZ3OyDoCvwhDyUOduB9Sh&amp;co=aHR0cHM6Ly93d3cuY2hpbm9rYW5yaS5jby5qcDo0NDM.&amp;hl=vi&amp;v=5JGZgxkKwe0uOXDdUvSaNtk_&amp;size=normal&amp;cb=dfmbzrcr43wj"
                                        width="304" height="78" role="presentation" name="a-snht14csq2kb" frameborder="0"
                                        scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                    class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                                </div>
                                <input type="hidden" id="token-recaptcha" name="validate-recaptcha" value="">
                            </div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-6">
                                <button type="button" class="btn" id="btnBack">戻る <i class="i_rightwhite rotate"></i></button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn" id="btnSubmit" disabled="">送信する <i
                                    class="i_rightwhite"></i></button>
                            </div>
                            </div>
                        </div>
                        </div>
        
                        <input type="hidden" name="form_type" value="shared-facilities">
                    </form>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
    