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
                                        <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill active" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-cancellation" role="tabpanel" aria-labelledby="nav-cancellation-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>解約に関するお問合せ</h1>
                                            <ul class="steps d-flex">
                                                <li class="flex-fill active"><a href="#">入力</a></li>
                                                <li class="flex-fill"><a href="#">確認</a></li>
                                                <li class="flex-fill"><a href="#">完了</a></li>
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

                            <form action="finish.php" class="frm_general">
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
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1"><span class="red">一戸建てを契約されているお客様はこちらにチェックを入れて下さい。物件名は省略頂けます。</span></label>
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
                                                        <label for="">ご契約者様</label>
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
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">ご契約者様と入居者様が同じ場合は、こちらにチェックを入れて下さい。<br>
                                                                    <span class="red">※ご契約者様と入居者様が異なる場合は、入居者様の氏名もご入力下さい。</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">入居者様の氏名</label>
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
                                                                <label for="">【銀行名】</label>
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
                                                        <label for="">口座番号  <span class="ml-1">※ハイフンなしでご記入ください。</span></label>
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
                                                        <label for="">氏名</label>
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
                    </div>

                </section>

                

                

            </div>

        </main>

        <?php require 'footer.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>