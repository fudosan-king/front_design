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
                    <nav class="nav_top">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link flex-fill active" id="nav-previewrequest-tab" href="index.php" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-previewrequest" role="tabpanel" aria-labelledby="nav-previewrequest-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>業者様内見依頼に関するお問い合わせ</h1>

                                            <ul class="steps d-flex">
                                                <li class="flex-fill active"><a href="#">入力</a></li>
                                                <li class="flex-fill"><a href="#">確認</a></li>
                                                <li class="flex-fill"><a href="#">完了</a></li>
                                            </ul>

                                            <ul class="list">
                                                <!-- <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li> -->
                                                <li>当社営業時間外にいただいたご依頼は翌営業日以降に回答いたします。</li>
                                                <li>下記フォーム入力後にお手数ですが、<a href="tel:045-581-9556">045-581-9556</a>までお電話お願い致します。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            

                            <section class="section_content_body bg_bluelight">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="thanks_page_naiken.php" class="frm_general">
                                                <div class="frm_general_content">
                                                    <div class="form-group">
                                                        <label for="">物件名</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
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
                                                                <input type="text" class="form-control" placeholder="部屋番号">
                                                            </div>
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span>号室</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">内覧希望日時</label>
                                                        <!-- <p>第1希望日時</p> -->
                                                        <div class="row mb-3">
                                                            <div class="col-12 col-lg-1 align-self-center">
                                                                <span class="label_sub mb-2 mb-lg-0">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="box_datetime">
                                                                            <input type="text" class="form-control datepicker" placeholder="日付を選択">
                                                                            <i class="i_datetime"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <select name="" id="" class="form-control custom-select">
                                                                            <option value="">時間を選択</option>
                                                                            <option value="">...</option>
                                                                            <option value="">...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <p class="mb-1 mb-lg-3">第2希望日時</p>
                                                        <div class="row mb-3">
                                                            <div class="col-12 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="box_datetime">
                                                                            <input type="text" class="form-control datepicker" placeholder="日付を選択">
                                                                            <i class="i_datetime"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <select name="" id="" class="form-control custom-select">
                                                                            <option value="">時間を選択</option>
                                                                            <option value="">...</option>
                                                                            <option value="">...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <p class="mb-1 mb-lg-3">第3希望日時</p>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="box_datetime">
                                                                            <input type="text" class="form-control datepicker" placeholder="日付を選択">
                                                                            <i class="i_datetime"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <select name="" id="" class="form-control custom-select">
                                                                            <option value="">時間を選択</option>
                                                                            <option value="">...</option>
                                                                            <option value="">...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">会社名</label>
                                                        <div class="row mb-lg-3">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <input type="text" class="form-control mb-3" placeholder="会社名">
                                                                <input type="text" class="form-control" placeholder="支店名">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">住所</label>
                                                        <p>郵便番号</p>
                                                        <div class="row mb-lg-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6 align-self-center">
                                                                        <input type="text" class="form-control" placeholder="例：1234567">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6 align-self-center">
                                                                        <a class="btnAuto btn mt-2 mt-lg-0" href="#"><img src="images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>都道府県</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <select name="" id="" class="form-control custom-select">
                                                                    <option value="">都道府県を選択してください</option>
                                                                    <option value="">...</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <p>市区町村・番地</p>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">会社電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：0312341234">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">担当者携帯電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：0312341234">
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
                                                                <input type="text" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">備考</label>
                                                        <textarea name="" id="" class="form-control" cols="30" rows="7" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                                    </div>

                                                    <div class="box_content_footer">
                                                        <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                        個人情報の取扱に関しましては <a class="btn-link" href="#"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                                        ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                                                        <div class="form-group text-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="ck_agree">
                                                                <label class="custom-control-label" for="ck_agree">同意する</label>
                                                            </div>

                                                            <button type="submit" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
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

        <?php require 'footer.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>