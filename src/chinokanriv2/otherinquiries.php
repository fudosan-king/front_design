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
                                        <!-- <a class="nav-item nav-link flex-fill" id="nav-previewrequest-tab" href="index.php" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問合せ</span></a> -->
                                        <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                        <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                        <a class="nav-item nav-link flex-fill active" id="nav-otherinquiries-tab" href="otherinquiries.php" role="tab" aria-controls="nav-otherinquiries" aria-selected="false"><span>その他のお問い合わせ</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-management" role="tabpanel" aria-labelledby="nav-management-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>その他のお問い合わせ</h1>
                                            <ul class="steps d-flex">
                                                 <li class="active input flex-fill"><span >入力</span></li>
                                                 <li class="confirm flex-fill"><span>確認</span></li>
                                                 <li class="finish flex-fill"><span>完了</span></li>
                                              </ul>
                                            <ul class="list">
                                                <li>調査報告書完成日の目安は調査依頼受付日の翌々営業日以降です。</li>
                                                <li>休業日及び営業日の15：00以降に受付したものは、翌営業日の対応とさせて頂きます。<br>
                                                尚、当社休業日は日曜日、水曜日、祝日、振替休日、夏季休業、年末年始となります。</li>
                                                <li>夏季休業及び年末年始休業は弊社ＨＰにてご案内致します。</li>
                                                <li>総会資料（総会議案書、議事録）や長期修繕計画書等の組合資料は売主様から引継ぎをお願い致します。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <form action="thanks_page_important.php" class="frm_general">
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
                                                                <input type="text" class="form-control">
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
                                                        <!-- <label for="">立会希望</label> -->
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
                                                        <label for="">担当者</label>
                                                        <p class="mb-1">所属部課（支店名）</p>
                                                        <div class="row">
                                                            <div class="col col-lg-1 align-self-center">
                                                            </div>
                                                            <div class="col-12 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
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
                                                                                <p class="mb-0">姓</p>
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
                                                        <label for="">所在地</label>
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
                                                        <p class="mb-1">建物名</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">
                                                                <span class="label_sub">必須</span>
                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <p class="mb-1">号室</p>
                                                        <div class="row mb-3">
                                                            <div class="col-2 col-lg-1 align-self-center">

                                                            </div>
                                                            <div class="col-10 col-lg-11 align-self-center">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group mb-0">
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
                                                                    <label class="custom-control-label" for="rdo_sendmail">メールでのデータ受取及び郵送</label>
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

        <?php require 'footer2.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>