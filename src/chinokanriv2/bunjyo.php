<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <main>
            <div class="main_content">
                <section class="section_top">
                    <style type="text/css">
                       .frm-confirm {
                          font-size: 0.875rem
                       }
                       .frm-confirm .table-bordered td {
                          border: 1px solid #555;
                       }
                       .frm-confirm .table-bordered td:first-child{
                            width: 30%
                       }
                    </style>
                    <nav class="nav_top">
                       <div class="container">
                          <div class="row">
                             <div class="col-12">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill active" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-otherinquiries-tab" href="otherinquiries.php" role="tab" aria-controls="nav-otherinquiries" aria-selected="false"><span>その他のお問い合わせ</span></a>
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
                                            <h1 id="form-title">当社管理マンションに関するお問い合わせ</h1>
                                            <ul class="steps d-flex">
                                                <li id="input" class="active flex-fill"><span>入力</span></li>
                                                <li id="confirm" class="flex-fill"><span>確認</span></li>
                                                <li id="finish" class="flex-fill"><span>完了</span></li>
                                            </ul>
                                            <ul class="list">
                                                <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li>
                                                <li>夜間、水、日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
                                                <li>お客様あてにお送りした電子メールの一部または全体を、当社の許可なく、転用、二次使用することは、固くお断りいたします。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section_content_body bg_bluelight">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="https://go.pardot.com/l/185822/2020-07-19/qb1ql7" data-action-url="http://go.pardot.com/l/185822/2020-07-19/qb1ql7" class="frm_general" id="form-bunjyo" method="POST">
                                                <div class="frm_general_content" id="input-form">
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
                                                                                <input type="text" name="kanji_familyname" class="form-control required" placeholder="例：千野">
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
                                                                                <input type="text" name="kata_familyname" class="form-control required" placeholder="例：チノ">
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
                                                        <label for="">住所</label>
                                                        <p class="mb-1">郵便番号</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6 align-self-center">
                                                                        <input type="text" name="postal_code" class="form-control required numbersOnly" placeholder="例：1234567" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','city', 'chome_address')">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6 align-self-center">
                                                                        <a class="btnAuto btn mt-2 mt-lg-0 btn-link" onClick="AjaxZip3.zip2addr('postal_code','','prefecture','city', 'chome_address')"><img src="https://www.chinokanri.co.jp//assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1">都道府県</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <select name="prefecture" id="" class="form-control custom-select required">
                                                                    <option value="">▼ 選択してください </option>
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
                                                            </div>
                                                        </div>

                                                        <p class="mb-1">市区町村</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" name="city" class="form-control required">
                                                            </div>
                                                        </div>


                                                        <p class="mb-1">丁目番地</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" name="chome_address" class="form-control required">
                                                            </div>
                                                        </div>

                                                        <p class="mb-1">建物名・号室</p>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" name="building_name" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-6 align-self-center">
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
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="email" name="email" placeholder="例：xxxxxxx@hchinokanri.co.jp" class="form-control required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">ご連絡方法（ご希望がある場合はご指定ください）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" id="contact_way_phone" name="contact_ways[]" class="custom-control-input" value="電話">
                                                                    <label class="custom-control-label" for="contact_way_phone">電話</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" id="contact_way_email" name="contact_ways[]" class="custom-control-input" value="email">
                                                                    <label class="custom-control-label" for="contact_way_email">E-mail</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ分類</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline3" name="contact_classification" class="custom-control-input required" value="当社管理マンションに住んでいる">
                                                                    <label class="custom-control-label" for="customRadioInline3">当社管理マンションに住んでいる</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline4" name="contact_classification" class="custom-control-input required" value="当社管理マンションに住んでいない">
                                                                    <label class="custom-control-label" for="customRadioInline4">当社管理マンションに住んでいない</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ項目（複数選択可）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox5" name="contact_item[]" class="custom-control-input required" value="マンション管理について">
                                                                    <label class="custom-control-label" for="customCheckbox5">マンション管理について</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox6" name="contact_item[]" class="custom-control-input required" value="賃貸・売買のご相談">
                                                                    <label class="custom-control-label" for="customCheckbox6">賃貸・売買のご相談</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox7" name="contact_item[]" class="custom-control-input required" value="建物・設備について">
                                                                    <label class="custom-control-label" for="customCheckbox7">建物・設備について</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox8" name="contact_item[]" class="custom-control-input required" value="リフォームの相談">
                                                                    <label class="custom-control-label" for="customCheckbox8">リフォームの相談</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox9" name="contact_item[]" class="custom-control-input required" value="ご意見・ご要望">
                                                                    <label class="custom-control-label" for="customCheckbox9">ご意見・ご要望</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-2">
                                                                    <input type="checkbox" id="customCheckbox10" name="contact_item[]" class="custom-control-input required" value="その他">
                                                                    <label class="custom-control-label" for="customCheckbox10">その他</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ内容</label>
                                                        <textarea name="contact_content" id="" class="form-control" cols="30" rows="8" placeholder="お問合せ事項やご意見・ご要望等はこちらにご記入ください"></textarea>
                                                    </div>               
                                                    <div class="box_content_footer">
                                                        <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                        個人情報の取扱に関しましては <a class="btn-link" href="https://www.chinokanri.co.jp/privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                                        ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                                        <div class="form-group text-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input required" id="ck_agree" name="ck_agree" checked>
                                                                <label class="custom-control-label" for="ck_agree">同意する</label>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="form-group text-center">
                                                            <button type="button" class="btn btnAgree d-inline-block" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                                        </div>
                                                    </div>
                                                                    
                                                </div>
                                                <div class="frm_general frm-confirm" id="confirm-form" style="display: none">
                                                    <div class="form-group">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>お名前</td>
                                                                <td>
                                                                    <div class="confirm-text" id="kanji_familyname"></div>
                                                                    <div id="kanji_name"></div>
                                                                </td>       
                                                            </tr>
                                                            <tr>
                                                                <td>お名前（フリガナ）</td>
                                                                <td>
                                                                    <div id="kata_familyname"></div>
                                                                    <div id="kata_name"></div>
                                                                </td>       
                                                            </tr>
                                                            <tr>
                                                                <td>郵便番号</td>
                                                                <td id="postal_code"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>都道府県</td>
                                                                <td id="prefecture"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>市区町村</td>
                                                                <td id="city"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>丁目番地</td>
                                                                <td id="chome_address"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>建物名・号室</td>
                                                                <td id="building_name"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></td>
                                                                <td id="phone_number"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>メールアドレス（半角英数字）</td>
                                                                <td id="email"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ご連絡方法（ご希望がある場合はご指定ください）</td>
                                                                <td id="contact_ways"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>お問合せ分類</td>
                                                                <td id="contact_classification"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>お問い合わせ項目（複数選択可）</td>
                                                                <td id="contact_item"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>お問い合わせ内容</td>
                                                                <td id="contact_content"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="form-group text-center pt-5">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">
                                                                <button type="button" class="btn" id="btnBack">戻る <i class="i_rightwhite rotate"></i></button>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <button type="button" class="btn mt-4 mt-lg-0" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <?php require 'footer2.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>