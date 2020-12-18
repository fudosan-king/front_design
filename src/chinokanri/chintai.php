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
                                        <a class="nav-item nav-link flex-fill" id="nav-previewrequest-tab" href="index.php" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill active" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-rentalproperty" role="tabpanel" aria-labelledby="nav-rentalproperty-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>当社管理賃貸物件に関するお問合せ</h1>
                                           <ul class="steps d-flex">
                                                <li class="flex-fill active"><a href="#">入力</a></li>
                                                <li class="flex-fill"><a href="#">確認</a></li>
                                                <li class="flex-fill"><a href="#">完了</a></li>
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
                                            <form action="finish.php" class="frm_general">
                                                <div class="frm_general_content">
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
                                                                                <input type="text" class="form-control" placeholder="例：千野">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">名</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：太郎">
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
                                                                                <input type="text" class="form-control" placeholder="例：チノ">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">メイ</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：タロウ">
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
                                                                        <input type="text" class="form-control" placeholder="例：1234567">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6 align-self-center">
                                                                        <a class="btnAuto btn mt-2 mt-lg-0" href="#"><img src="images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
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
                                                                <select name="" id="" class="form-control custom-select">
                                                                    <option value="">都道府県を選択してください</option>
                                                                    <option value="">...</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <p class="mb-1">市区町村</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>


                                                        <p class="mb-1">丁目番地</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <p class="mb-1">建物名・号室</p>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
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
                                                                <input type="text" placeholder="例：0312341234" class="form-control">
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
                                                                <input type="text" placeholder="例：xxxxxxx@hchinokanri.co.jp" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">ご連絡方法（ご希望がある場合はご指定ください）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="rdo_phone" name="rdo_phone" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_phone">電話</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="rdo_email" name="rdo_phone" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_email">E-mail</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問合せ分類</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadioInline1">当社管理賃貸物件に住んでいる</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadioInline2">当社管理賃貸物件に住んでいない</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ項目（複数選択可）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">建物設備故障について</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">引越しを検討中、新しい物件を探してる</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio3">ご意見・ご要望</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio4">その他</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ内容</label>
                                                        <textarea name="" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                                    </div>

                                                    <?php require 'box_content_footer.php'; ?>
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