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
                                        <a class="nav-item nav-link flex-fill active" id="nav-previewrequest-tab" data-toggle="tab" href="#nav-previewrequest" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" data-toggle="tab" href="#nav-rentalproperty" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" data-toggle="tab" href="#nav-propertysale" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" data-toggle="tab" href="#nav-cancellation" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-management-tab" data-toggle="tab" href="#nav-management" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
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
                                            <h1>内見依頼に関するお問合せ</h1>
                                            
                                            <ul class="steps">
                                                <li class="active"><a href="#">入力</a></li>
                                                <li><a href="#">確認</a></li>
                                                <li><a href="#">完了</a></li>
                                            </ul>
                                            <ul class="list">
                                                <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li>
                                                <li>夜間、土日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
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
                                            <form action="" class="frm_general">
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
                                                        <p>第1希望日時</p>
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
                                                        <p class="mb-1 mb-lg-3">第2希望日時</p>
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
                                                        <label for="">お問い合わせ内容</label>
                                                        <textarea name="" id="" class="form-control" cols="30" rows="7" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                                    </div>

                                                    <?php require 'box_content_footer.php'; ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="nav-rentalproperty" role="tabpanel" aria-labelledby="nav-rentalproperty-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>当社管理賃貸物件に関するお問合せ</h1>
                                            <ul class="steps">
                                                <li class="active"><a href="#">入力</a></li>
                                                <li><a href="#">確認</a></li>
                                                <li><a href="#">完了</a></li>
                                            </ul>
                                            <ul class="list">
                                                <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li>
                                                <li>夜間、土日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
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
                                            <form action="" class="frm_general">
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
                                                                                <p class="mb-0">性</p>
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

                        <div class="tab-pane fade" id="nav-propertysale" role="tabpanel" aria-labelledby="nav-propertysale-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>当社管理分譲物件に関するお問合せ</h1>
                                            <ul class="steps">
                                                <li class="active"><a href="#">入力</a></li>
                                                <li><a href="#">確認</a></li>
                                                <li><a href="#">完了</a></li>
                                            </ul>
                                            <ul class="list">
                                                <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li>
                                                <li>夜間、土日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
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
                                            <form action="" class="frm_general">
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
                                                                                <p class="mb-0">性</p>
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
                                                                    <input type="radio" id="rdo_phone1" name="rdo_phone" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_phone1">電話</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="rdo_email2" name="rdo_phone" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_email2">E-mail</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問合せ分類</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadioInline3">当社管理賃貸物件に住んでいる</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadioInline4">当社管理賃貸物件に住んでいない</label>
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
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio5">マンション管理について</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio6">賃貸・売買のご相談</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio7">建物・設備について</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio8">リフォームの相談</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio9" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio9">ご意見・ご要望</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="customRadio10" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio10">その他</label>
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

                        <div class="tab-pane fade" id="nav-cancellation" role="tabpanel" aria-labelledby="nav-cancellation-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>当社管理分譲物件に関するお問合せ</h1>
                                            <ul class="steps">
                                                <li class="active"><a href="#">入力</a></li>
                                                <li><a href="#">確認</a></li>
                                                <li><a href="#">完了</a></li>
                                            </ul>
                                            <ul class="list">
                                                <li>弊社管理物件お住まいの方専用となります。管理会社が不明な場合は、弊社までご連絡下さい。</li>
                                                <li><span class="red">退去の連絡は、解約する日まで１ヶ月以上前に連絡しないといけない場合が多いのでご注意下さい。<br>お部屋によっては２ヶ月などある場合もございます。お手持ちの契約書類のご確認をお願いします。</span></li>
                                            </ul>
                                            <h2>解約通知届</h2>
                                            <p class="text-center">下記物件の賃貸借契約を賃貸借契約書の条項に基づき解約することを通知いたします。</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <form action="" class="frm_general">
                                <section class="section_content_body bg_bluelight">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>契約物件情報</h2>
                                                    <div class="form-group">
                                                        <label for="">物件名</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <input type="text" class="form-control mb-2">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="rdo_check" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_check"><span class="red">一戸建てを契約されているお客様はこちらにチェックを入れて下さい。物件名は省略頂けます。</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">号室</label>
                                                        <div class="row mb-3">
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

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>ご契約者様の情報</h2>

                                                    <div class="form-group">
                                                        <label for="">ご契約者様の氏名</label>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row mb-2 mb-lg-0">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">性</p>
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
                                                        <label for="">入居者様の氏名（ふりがな）</label>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11">
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row mb-2 mb-lg-0">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">せい</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：ちの">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">めい</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：たろう">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="rdo_same" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_same">ご契約者様と入居者様が同じ場合は、こちらにチェックを入れて下さい。<br>
                                                                    <span class="red">※ご契約者様と入居者様が異なる場合は、入居者様の氏名もご入力下さい。</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">入居者の氏名</label>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row mb-2 mb-lg-0">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">性</p>
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
                                                        <label for="">入居者様の氏名</label>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11">
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row mb-2 mb-lg-0">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">せい</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：ちの">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 align-self-center">
                                                                                <p class="mb-0">めい</p>
                                                                            </div>
                                                                            <div class="col-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：たろう">
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
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="mb-2 mb-lg-0">
                                                                            <input type="text" class="form-control" placeholder="例：0312341234">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">メールアドレス（半角英数字）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="row mb-2">
                                                                    <div class="col-12 col-lg-6">
                                                                        <div class="mb-2 mb-lg-0">
                                                                            <input type="text" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0"><span class="red">※上記、ご入力いただきました電話番号およびメールアドレスへ連絡させていただきます。</span></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body bg_bluelight">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>転居先情報</h2>

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

                                                    <div class="form-group mb-0">
                                                        <label for="">号室</label>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-8 col-lg-10 align-self-center">
                                                                <input type="text" class="form-control" placeholder="部屋番号">
                                                            </div>
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <p class="mb-0">号室</p>
                                                            </div>
                                                        </div>

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

                                                        <p class="mb-1">市区町村・番地</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control mb-2">
                                                                <p class="mb-0"><span class="red">※解約後の書類送付先となります。</span></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>敷金・日割賃料返金先口座</h2>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 align-self-center">
                                                                <label for="">物件名</label>
                                                                <div class="row">
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <span class="label_sub">必須</span>
                                                                    </div>
                                                                    <div class="col-10 col-lg-10 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 align-self-center">
                                                                <label for="">支店名</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">口座の種類</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="ordinarydeposit" name="about_payment" class="custom-control-input">
                                                                    <label class="custom-control-label" for="ordinarydeposit">普通預金</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="current_account" name="about_payment" class="custom-control-input">
                                                                    <label class="custom-control-label" for="current_account">当座預金</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">口座番　<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：123456789">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">口座名義人（カタカナ）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                 <section class="section_content_body bg_bluelight">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2 class="mb-2">緊急連絡先</h2>
                                                    <p class="text-center">（ご本人様以外の情報をご入力下さい）</p>

                                                    <div class="form-group">
                                                        <label for="">指名</label>
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
                                                        <label for="">続柄</label>
                                                        <div class="row mb-4">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>

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

                                                        <p class="mb-1">丁目・番地</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：0312341234">
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>解約日・立会希望日</h2>

                                                    <div class="form-group">
                                                        <label for="">解約通知日</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="box_datetime">
                                                                    <input type="text" class="form-control datepicker" placeholder="2020/06/26">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">解約日</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="box_datetime mb-3">
                                                                    <input type="text" class="form-control datepicker" placeholder="2020/06/26">
                                                                    <i class="i_datetime"></i>
                                                                </div>
                                                                <p class="mb-0 red">※　解約日までの賃料が発生いたします。解約日当月の賃料は通常月と同じよう全額お振込みお願いいたしま 
                                                                す。敷金精算時に精算いたします。<br>※　解約日までに室内お荷物をすべて移動をお願いいたします。ライフラインの解約手続きもお願いいたします。<br>
                                                                ※　例：1ヶ月前予告の場合、通知日が1月1日なら解約日は最短で2月1日となります。</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">立会希望</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="rdo_question1" name="rdo_question" class="custom-control-input" checked>
                                                                    <label class="custom-control-label" for="rdo_question1">なし</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="rdo_question2" name="rdo_question" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_question2">あり</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mt-3">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                                    <label class="custom-control-label" for="customCheck1">明渡時に立会いをしませんので、原状回復費用の精算については全て委任いたします。</label>
                                                                </div>
                                                                <p class="mb-2 red">※　立会希望無しの場合はチェックを入れてください。</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">お問い合わせ内容</label>
                                                        <textarea name="" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                                        <p class="mb-0 mt-2 red">※　解約通知受理後、弊社よりお電話またはメールにてご連絡させていただきます。<br>
                                                        連絡が1週間経っても来ない場合はお手数ですが <a class="red btn-link" href="tel:045-581-9556">045-581-9556</a> までご連絡下さい。</p>
                                                    </div>

                                                    <?php require 'box_content_footer.php'; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-management" role="tabpanel" aria-labelledby="nav-management-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>管理に係る 重要事項調査報告書 作成の依頼</h1>
                                            <ul class="steps">
                                                <li class="active"><a href="#">入力</a></li>
                                                <li><a href="#">確認</a></li>
                                                <li><a href="#">完了</a></li>
                                            </ul>
                                            <ul class="list">
                                                <li>調査報告書完成日の目安は調査依頼受付日の翌々営業日以降です。</li>
                                                <li>休業日及び営業日の15：00以降に受付したものは、翌営業日の対応とさせて頂きます。<br>
                                                尚、当社休業日は日曜日、土曜日、祝日、振替休日、夏季休業、年末年始となります。</li>
                                                <li>夏季休業及び年末年始休業は弊社ＨＰにてご案内致します。</li>
                                                <li>総会資料（総会議案書、議事録）や長期修繕計画書等の組合資料は売主様から引継ぎをお願い致します。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <form action="" class="frm_general">
                                <section class="section_content_body bg_bluelight">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>宅地建物取引業者情報</h2>
                                                    <p>※区分所有者の方は、調査報告書の送付先情報をご入力下さい。<br>
                                                    ※媒介契約書等の送付がない場合は、調査報告書の発行は出来ません。予めご了承ください。<br>（所有者ご本人様からのご依頼の場合は不要です。）</p>

                                                    <div class="form-group">
                                                        <label for="">会社名</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <select name="" id="" class="form-control custom-select mb-3">
                                                                    <option value="">都道府県を選択してください</option>
                                                                    <option value="">...</option>
                                                                </select>
                                                                <p class="mb-2">※貴社名をご入力ください。（区分所有者の方は、区分所有者とご入力下さい。）</p>
                                                                <input type="text" class="form-control" placeholder="選択してください">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">所在地（送付先）</label>
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
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">立会希望</label>
                                                        <div class="row no-gutters">
                                                            <div class="col-12 col-lg-1">
                                                                <span class="label_sub mb-2 mb-lg-0">必須</span>
                                                            </div>
                                                            <div class="col-12 col-lg-11">
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_minister" name="rdo_governor" class="custom-control-input" checked>
                                                                    <label class="custom-control-label" for="rdo_minister">国土交通大臣</label>
                                                                </div>
                                                                <div class="row no-gutters mb-3 mb-lg-4">
                                                                    <div class="col-1 col-lg-1 align-self-center">
                                                                        <p class="mb-0 text-right mr-1">（</p>
                                                                    </div>
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-1 col-lg-1 align-self-center">
                                                                        <p class="mb-0 mx-2 text-center">第</p>
                                                                    </div>
                                                                    <div class="col-6 col-lg-6 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <p class="mb-0 text-left ml-1">号　）</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row no-gutters mb-3 mb-lg-4">
                                                                    <div class="col-1 col-lg-1 align-self-center">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="rdo_governor" name="rdo_governor" class="custom-control-input">
                                                                            <label class="custom-control-label" for="rdo_governor">&nbsp;</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-9 col-lg-9 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <p class="mb-0 ml-2">知事</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row no-gutters mb-3 mb-lg-4">
                                                                    <div class="col-1 col-lg-1 align-self-center">
                                                                        <p class="mb-0 text-right mr-1">（</p>
                                                                    </div>
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-1 col-lg-1 align-self-center">
                                                                        <p class="mb-0 mx-2 text-center">第</p>
                                                                    </div>
                                                                    <div class="col-6 col-lg-6 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-2 col-lg-2 align-self-center">
                                                                        <p class="mb-0 text-left ml-1">号　）</p>
                                                                    </div>
                                                                </div>

                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_other" name="rdo_governor" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_other">その他</label>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="例：設計事務所、宅建業者でない区分所有者">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">氏名</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-6 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 col-lg-2 align-self-center">
                                                                                <p class="mb-0">性</p>
                                                                            </div>
                                                                            <div class="col-10 col-lg-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：千野">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-2 col-lg-2 align-self-center">
                                                                                <p class="mb-0">名</p>
                                                                            </div>
                                                                            <div class="col-10 col-lg-10 align-self-center">
                                                                                <input type="text" class="form-control" placeholder="例：太郎">
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
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：0312341234">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">FAX番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：0312341234">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">FAX番号・確認用（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-6 align-self-center">
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
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="">メールアドレス・確認用（半角英数字）</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-6 align-self-center">
                                                                <input type="text" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>調査対象マンション情報</h2>

                                                    <div class="form-group">
                                                        <label for="">名称</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub mt-2">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <input type="text" class="form-control">
                                                                <p class="mb-0 mt-2">※当社管理受託マンションであることを今一度ご確認下さい。</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">所在地（送付先）</label>
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
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">売却依頼主</label>
                                                        <p class="mb-1">住戸番号</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <p class="mb-1">氏名</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">依頼窓口</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <p class="mb-0">依頼窓口</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body bg_bluelight">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <h2>依頼書類・使用目的</h2>

                                                    <div class="form-group">
                                                        <label for="">依頼書類</label>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="custom-control custom-checkbox mb-3">
                                                                    <input type="checkbox" class="custom-control-input" id="cb_surveyreport">
                                                                    <label class="custom-control-label" for="cb_surveyreport">調査報告書</label>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-4 align-self-center">
                                                                        <p class="mb-0">調査報告書 (11,000円/1戸)</p>
                                                                    </div>
                                                                    <div class="col-10 col-lg-6 align-self-center">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="col-2 col-lg-1 align-self-center">
                                                                        <p class="mb-0">戸</p>
                                                                    </div>
                                                                </div>
                                                                <div class="custom-control custom-checkbox mb-3">
                                                                    <input type="checkbox" class="custom-control-input" id="cb_managementagreement">
                                                                    <label class="custom-control-label" for="cb_managementagreement">管理規約（コピー）<br>管理規約（コピー） (3,300円)</label>
                                                                </div>
                                                                <p>※税込表記になります。<br>
                                                                ※振込手数料はご負担下さい。<br>
                                                                ※依頼戸数をご入力下さい。<br>
                                                                ※総会議案書・議事録等は、売主の方から引き継ぎをお願い致します。</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">使用目的</label>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_brokerage" name="rdo_purpose" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_brokerage">売買仲介</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_rentalagency" name="rdo_purpose" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_rentalagency">賃貸仲介</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_other2" name="rdo_purpose" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_other2">その他</label>
                                                                </div>
                                                                <input type="text" class="form-control ml-0 ml-lg-4">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="">受取方法</label>
                                                        <div class="row">
                                                            <div class="col-2 col-lg-1">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11">
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_pdf" name="rdo_receivingmethod" class="custom-control-input" checked>
                                                                    <label class="custom-control-label" for="rdo_pdf">メールデータ受取り（PDF）</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_mail" name="rdo_receivingmethod" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_mail">郵送</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-2">
                                                                    <input type="radio" id="rdo_sendmail" name="rdo_receivingmethod" class="custom-control-input">
                                                                    <label class="custom-control-label" for="rdo_sendmail">メールでのデータ受取及び郵送にて作成</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="section_content_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="frm_general_content">
                                                    <?php require 'box_content_footer.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </form>

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