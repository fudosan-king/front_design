<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <section class="section_subbanner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>オンライン相談ご予約フォーム</h1>
                        <ul class="breadcrumb_reservation d-flex">
                          <li class="flex-fill active"><a href="#">入力</a></li>
                          <li class="flex-fill"><a href="#">確認</a></li>
                          <li class="flex-fill"><a href="#">完了</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <main>
            <section class="section_reservation">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="frm_reservation">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 align-self-center">
                                             <label for="">物件名<span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-10 col-lg-10 align-self-center">
                                            <select name="" id="" class="form-control custom-select">
                                                <option value="">物件を選択</option>
                                                <option value="">...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">氏名<span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">姓</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：山田">
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
                                    <div class="row">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">氏名（ふりがな）<span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">せい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：やまだ">
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
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">住所 <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">郵便番号</p>
                                                </div>
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：1234567">
                                                </div>
                                                <div class="col-12 col-lg-4 align-self-center">
                                                    <a class="btnAuto btn mt-2 mt-lg-0" href="#"><img src="images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
                                                </div>
                                            </div>

                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">都道府県</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <select name="" id="" class="form-control custom-select">
                                                        <option value="">都道府県を選択してください</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">市区町村</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">丁目番地</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">建物名</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 align-self-center">
                                             <label for="">予算</label>
                                        </div>
                                        <div class="col-10 col-lg-10 align-self-center">
                                            <select name="" id="" class="form-control custom-select">
                                                <option value="">予算を選択</option>
                                                <option value="">...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">希望ツール <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio1" name="rdo_desiredtool" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">zoom</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio2" name="rdo_desiredtool" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Googlemeet</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio3" name="rdo_desiredtool" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Calling</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio4" name="rdo_desiredtool" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">どれでも可</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">資料請求 <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="rdo_documentrequest_do" name="rdo_documentrequest" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="rdo_documentrequest_do">する</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="rdo_documentrequest_not" name="rdo_documentrequest" class="custom-control-input">
                                                <label class="custom-control-label" for="rdo_documentrequest_not">しない</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">希望日時 <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_datetime mb-2 mb-lg-0">
                                                        <input type="text" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
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
                                     <div class="row mb-3">
                                        <div class="col-12 col-lg-2">
                                            <label for="">ご質問・ご要望など</label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <textarea name="" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="box_content_footer">
                                    <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                    個人情報の取扱に関しましては <a target="_blank" class="btn-link" href="https://www.prostyle-residence.com/privacy-policy/"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck_agree">
                                            <label class="custom-control-label" for="ck_agree">同意する</label>
                                        </div>

                                        <button type="submit" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>

                                <div class="box_precautions">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <h5>注意事項</h5>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <p>※各種オンラインミーティングツール(zoom、calling、Google meet)で対応いたします。<br>
                                            ※カメラ機能がついたパソコン、タブレット、スマートフォンのいずれかが必要です。<br>
                                            ※お顔が映るのが苦手な方は音声のみで問題ございません。<br>
                                            ※ご利用は無料ですが、別途通信料がかかります。データ通信料はお客さまのご負担となります。<br>
                                            従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合はご注意ください。<br>
                                            安定した画質で利用するためにも、Wi-Fi環境下での利用を推奨します。</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require 'footer.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>