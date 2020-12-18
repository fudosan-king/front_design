<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <main>
            <section class="section_consult pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 mx-auto">
                            <form action="http://go.pardot.com/l/185822/2020-01-20/nk1dkv" method="POST" role="form" class="frm_consult_shoroom">
                            <!-- <form action="http://html-static/lp01/lp_cost.php" method="POST" role="form" class="frm_consult_shoroom"> -->
                                <h3>ショールームで相談する</h3>
                                <p class="text_notify">お近くのショールームで<b>リノベーションの詳細や費用、物件の探し方</b>など<br>
                                住まいに関することは何でもご相談ください。</p>

                                <section class="data-input">
                                    <div class="box_consult_row mb-3">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">気になること(複数選択可) <span class="note_red require-flag">必須</span></label>
                                            </div>
                                            <div class="col-12 col-md-8 checkbox_wrapper">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="ローン、資金計画など" name="category_contact[]" id="defaultCheck1" onchange checked>
                                                    <label class="form-check-label label category_contact[]" for="defaultCheck1">
                                                        ローン、資金計画など
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="内装、施工について" name="category_contact[]" id="defaultCheck2" onchange>
                                                    <label class="form-check-label label category_contact[]" for="defaultCheck2">
                                                        内装、施工について
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="リノベ向け物件の探し方" name="category_contact[]" id="defaultCheck3" onchange>
                                                    <label class="form-check-label label category_contact[]" for="defaultCheck3">
                                                        リノベ向け物件の探し方
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">お名前 <span class="note_red require-flag last_name first_name">必須</span></label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="last_name" id="ilast_name" placeholder="姓">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="first_name" id="ifirst_name" placeholder="名">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">メールアドレス <span class="note_red require-flag email">必須</span></label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="form-group">
                                                    <input name="email" id="iemail" type="text" class="form-control" placeholder="" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row mb-3">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">電話番号 <span class="note_red require-flag phone_number">必須</span></label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number" id="iphone_number" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">ご来店希望日</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <select name="show_room" id="ishow_room" class="form-control" onchange="">
                                                                <option value="">ショールームを選択</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group visit_date_wrapper">
                                                            <input type="text" name="visit_date" id="ivisit_date" class="form-control" placeholder="日付を選択">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            
                                                            <select name="visit_hour" id="ivisit_hour" class="form-control" onchange="">
                                                                <option value="">時間を選択</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="free_detail_contact" class="form-control" cols="30" rows="3" placeholder="その他質問事項などご記入ください"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row box_registered_information">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="mb-0">ご登録いただいた情報は今回のご相談に関するやり取りのみに使用させていただきます。<br>
                                                弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。<br>
                                                上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                                <p><a class="text_red" target="_blank" href="https://www.propolife.co.jp/privacypolicy/">▶「プライバシーポリシー」を開く（株式会社プロポライフグループ）</a></p>
                                                <div class="form-check checkbox_wrapper text-center">
                                                    <input class="form-check-input" type="checkbox" value="同意する" name="secret_info" id="iagree" onchange="" checked>
                                                    <label class="form-check-label" for="iagree">
                                                        同意する
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="button" id="ibtnConfirm" class="btn btnSubmit" value="入力内容を確認する">
                                    </div>
                                </section>

                                <!-- DATA CONFIRM HTML -->
                                <section class="data-confirm" style="display: none;">
                                    <div class="box_consult_row mb-3">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">気になること(複数選択可)</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="cfr cfrm_category_contact">None</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">お名前</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="cfr cfrm_name">None</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">メールアドレス</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="cfr cfrm_email">None</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row mb-3">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">電話番号</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="cfr cfrm_phonenumber">None</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">ご来店希望日</label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="cfr cfrm_location">None</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box_consult_row">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <label for="">問い合わせ内容</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="cfr cfrm_comments"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="button" id="goBack" class="btn btnSubmit ml-2 mr-2" value="戻る">
                                        <input type="button" id="goSubmit" class="btn btnSubmit ml-2 mr-2" value="送信する">
                                    </div>
                                </section>
                                <div class="text-center">
                                    <div class="box_inquiries">
                                        <p>お電話でのお問い合わせは</p>
                                        <p><a href="tel:0120-991-658">0120-991-658</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>