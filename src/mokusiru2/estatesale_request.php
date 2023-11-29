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
                    <div class="contactus_top mb-0">
                        <h2 class="title_sub mb-0">[Estate Name]<br>お問い合わせ・資料請求<br><span>このフォームよりお願い致します</span></h2>
                        <p><small><span class="red">※</span> は必須項目です。</small></p>
                    </div>
                    <div class="contactus_content">
                        <form class="frm_contactus formrun" method="POST">
                            <input type="hidden" id="formLang" class="form-control" value="jp">
                            <input type="hidden" name="postal_code" id="inputPostal_code" class="form-control">
                            <input type="hidden" name="phone_number" id="inputPhone_number" class="form-control">


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="" class="label_required">お問い合わせ事項（複数選択可）<span class="red">（※）</span></label>
                                        <input type="hidden" name="contact_item_text" value="">
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_document formrun-has-success" id="customCheck1" name="contact_item[]" value="資料請求" data-value="資料請求">
                                            <label class="custom-control-label" for="customCheck1"><span>資料請求</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_staff formrun-has-success" id="customCheck3_" name="contact_item[]" value="お問合せ・ご質問など" data-value="お問合せ・ご質問など">
                                            <label class="custom-control-label" for="customCheck3_"><span>お問合せ・ご質問など</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">メールアドレス <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="例：aaaa1234@bbb.cccc" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">お名前 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mb-2 mb-lg-0">
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <label for="">姓</label>
                                                    </div>
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <input type="text" name="last_name" class="form-control required" placeholder="例：山田" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="row">
                                                    <div class="col-2 align-self-center">
                                                        <label for="">名</label>
                                                    </div>
                                                    <div class="col-10 align-self-center">
                                                        <input type="text" name="first_name" class="form-control required" placeholder="例：太郎" required="">
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
                                        <label class="mb-lg-0 mb-2" for="">お名前（フリガナ）<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mb-2 mb-lg-0">
                                                    <div class="col-2 col-lg-2 align-self-center">
                                                        <label for="">セイ</label>
                                                    </div>
                                                    <div class="col-10 col-lg-10 align-self-center">
                                                        <input type="text" name="last_name" class="form-control required" placeholder="例：ヤマダ" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="row">
                                                    <div class="col-2 align-self-center">
                                                        <label for="">メイ</label>
                                                    </div>
                                                    <div class="col-10 align-self-center">
                                                        <input type="text" name="first_name" class="form-control required" placeholder="例：タロウ" required="">
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
                                        <label for="" class="label_required">お電話番号 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="number" class="form-control required" placeholder="例：08000000000" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">郵便番号 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <input type="number" class="form-control required" placeholder="例：1234567" name="">
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
                                        <label for="" class="label_required">都道府県 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <select class="form-control custom-select">
                                            <option value="▼選択してください">▼選択してください</option>
                                            <option value="...">...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">住所 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">建物名・号室 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">ご質問内容 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <textarea class="form-control" rows="5" cols="30"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">ご予算 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <select class="form-control custom-select">
                                            <option value="～15,000万円">～15,000万円</option>
                                            <option value="～20,000万円">～20,000万円</option>
                                            <option value="～25,000万円">～25,000万円</option>
                                            <option value="～30,000万円">～30,000万円</option>
                                            <option value="～35,000万円">～35,000万円</option>
                                            <option value="～40,000万円">～40,000万円</option>
                                            <option value="～45,000万円">～45,000万円</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="contactus_footer">
                                <p class="primary_policy">
                                    ご入力いただいた情報は、当社の
                                    <a target="_blank" class="btn-link" href="https://www.logprostyle.co.jp/privacypolicy/" rel="noopener noreferrer"><b>プライバシーポリシー</b></a>
                                    に従って厳重に管理いたします。<br>
                                    個人情報の取扱に関しましては プライバシーポリシー をご覧ください。<br>
                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
                                </p>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox w_checkbox">
                                        <input type="checkbox" name="agree_terms" class="custom-control-input required" id="agree_terms" value="agree">
                                        <label class="custom-control-label agree_terms" for="agree_terms">同意する</label>
                                    </div>
                                </div>
                                <div class="form-group text-center mb-0">
                                    <button type="button" class="btn btnsubmit" id="btnAgree">確認画面へ<i class="i_rightwhite"></i></button>
                                </div>
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