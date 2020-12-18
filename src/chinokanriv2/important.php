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
                                    <a class="nav-item nav-link flex-fill" id="nav-rentalproperty-tab" href="chintai.php" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="kaiyaku.php" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="bunjyo.php" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
                                    <a class="nav-item nav-link flex-fill active" id="nav-management-tab" href="important.php" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
                                    <a class="nav-item nav-link flex-fill" id="nav-otherinquiries-tab" href="otherinquiries.php" role="tab" aria-controls="nav-otherinquiries" aria-selected="false"><span>その他のお問い合わせ</span></a>
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
                                            <h1>管理に関わる重要事項調査報告書作成の依頼</h1>
                                            <ul class="steps d-flex">
                                                <li class="input active flex-fill"><span>入力</span></li>
                                                <li class="confirm flex-fill"><span>確認</span></li>
                                                <li class="finish flex-fill"><span>完了</span></li>
                                            </ul>
                                            <ul class="list">
                                                <li>調査報告書完成日の目安は調査依頼受付日の翌々営業日以降です。</li>
                                                <li>休業日及び営業日の15：00以降に受付したものは、翌営業日の対応とさせて頂きます。<br>
                                                    尚、当社休業日は日曜日、水曜日、祝日、振替休日、夏季休業、年末年始となります。
                                                </li>
                                                <li>夏季休業及び年末年始休業は弊社ＨＰにてご案内致します。</li>
                                                <li>総会資料（総会議案書、議事録）や長期修繕計画書等の組合資料は売主様から引継ぎをお願い致します。</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <form action="https://go.pardot.com/l/185822/2020-07-20/qb451p" name="pardotForm" id="pardotForm" class="frm_general" method="POST">
                                <div class="data-input">
                                    <section class="section_content_body bg_bluelight">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="frm_general_content">
                                                        <h2>宅地建物取引業者情報</h2>
                                                        <p>※区分所有者の方は、調査報告書の送付先情報をご入力下さい。<br>
                                                            ※媒介契約書等の送付がない場合は、調査報告書の発行は出来ません。予めご了承ください。<br>（所有者ご本人様からのご依頼の場合は不要です。）
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="">会社名</label>
                                                            <div class="row mb-lg-3">
                                                                <div class="col-2 col-lg-1">
                                                                    <span class="label_sub mt-2">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-11">
                                                                    <input type="text" name="company_name" class="form-control mb-3" placeholder="会社名" data-require="true">
                                                                    <input type="text" name="branch_name" class="form-control" placeholder="支店名">
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
                                                                            <input type="text" name="building_post" class="form-control numbersOnly" data-require="true" placeholder="例：1234567" maxlength="7" onkeyup="AjaxZip3.zip2addr(this, '', 'building_pref','building_city','building_aza');">
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 align-self-center">
                                                                            <a class="btnAuto btn mt-2 mt-lg-0" onclick="AjaxZip3.zip2addr('building_post', '', 'building_pref','building_city','building_aza');"><img src="https://www.chinokanri.co.jp//assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
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
                                                                    <select name="building_pref" id="" class="form-control custom-select" data-require="true">
                                                                        <option value="null">▼ 選択してください </option>
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
                                                                    <input type="text" name="building_city" class="form-control" data-require="true">
                                                                </div>
                                                            </div>
                                                            <p class="mb-1">丁目番地</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                    <span class="label_sub">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="building_aza" class="form-control" data-require="true">
                                                                </div>
                                                            </div>
                                                            <p class="mb-1">建物名・号室</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="building_room_name" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">免許番号</label>
                                                            <div class="row no-gutters">
                                                                <div class="col-12 col-lg-1">
                                                                    <span class="label_sub mb-2 mb-lg-0">必須</span>
                                                                </div>
                                                                <div class="col-12 col-lg-11">
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="building_license_minister" name="building_license[]" class="custom-control-input" value="国土交通大臣" checked>
                                                                        <label class="custom-control-label" for="building_license_minister">国土交通大臣</label>
                                                                    </div>
                                                                    <div class="row no-gutters mb-3 mb-lg-4">
                                                                        <div class="col-1 col-lg-1 align-self-center">
                                                                            <p class="mb-0 text-right mr-1">（</p>
                                                                        </div>
                                                                        <div class="col-2 col-lg-2 align-self-center">
                                                                            <input type="text" name="governor_opt1_first" class="form-control" data-group="building_license_minister" data-require="true">
                                                                        </div>
                                                                        <div class="col-1 col-lg-1 align-self-center">
                                                                            <p class="mb-0 mx-2 text-left">）第</p>
                                                                        </div>
                                                                        <div class="col-6 col-lg-6 align-self-center">
                                                                            <input type="text" name="governor_opt1_number" class="form-control" data-group="building_license_minister" data-require="true">
                                                                        </div>
                                                                        <div class="col-2 col-lg-2 align-self-center">
                                                                            <p class="mb-0 text-left ml-1">号</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row no-gutters mb-3 mb-lg-4">
                                                                        <div class="col-1 col-lg-1 align-self-center">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" id="building_license_governor" name="building_license[]" class="custom-control-input" value="知事">
                                                                                <label class="custom-control-label" for="building_license_governor">&nbsp;</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-9 col-lg-9 align-self-center" >
                                                                            <input type="text" name="governor_custom_text" class="form-control" readonly="" data-group="building_license_governor" data-require="false">
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
                                                                            <input type="text" name="governor_opt2_first" class="form-control" data-group="building_license_governor" readonly="" data-require="false">
                                                                        </div>
                                                                        <div class="col-1 col-lg-1 align-self-center">
                                                                            <p class="mb-0 mx-2 text-left">）第</p>
                                                                        </div>
                                                                        <div class="col-6 col-lg-6 align-self-center">
                                                                            <input type="text" name="governor_opt2_number" class="form-control" data-group="building_license_governor" readonly="" data-require="false">
                                                                        </div>
                                                                        <div class="col-2 col-lg-2 align-self-center">
                                                                            <p class="mb-0 text-left ml-1">号</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="building_license_other" name="building_license[]" class="custom-control-input" value="その他">
                                                                        <label class="custom-control-label" for="building_license_other">その他</label>
                                                                    </div>
                                                                    <input type="text" class="form-control"  name="governor_other_text"  data-group="building_license_other" placeholder="例：設計事務所、宅建業者でない区分所有者" readonly="" data-require="false">
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
                                                                    <input type="text" name="representative_office" class="form-control">
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
                                                                                    <input type="text" name="last_name" class="form-control" placeholder="例：千野" data-require="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 col-lg-6">
                                                                            <div class="row">
                                                                                <div class="col-2 col-lg-2 align-self-center">
                                                                                    <p class="mb-0">名</p>
                                                                                </div>
                                                                                <div class="col-10 col-lg-10 align-self-center">
                                                                                    <input type="text" name="first_name" class="form-control" placeholder="例：太郎" data-require="true">
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
                                                                    <input type="text" name="phone" class="form-control" placeholder="例：0312341234" data-require="true" data-phone="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">電話番号・確認用（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                            <div class="row">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                    <span class="label_sub">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-6 align-self-center">
                                                                    <input type="text" name="phone_confirm" class="form-control" placeholder="例：0312341234" data-require="true"  data-phone="true" data-confirm="true" data-confirm-name="phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">FAX番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                            <div class="row">
                                                                <div class="col-2 col-lg-1 align-self-center">

                                                                </div>
                                                                <div class="col-10 col-lg-6 align-self-center">
                                                                    <input type="text" name="fax" class="form-control" placeholder="例：0312341234" data-fax="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">FAX番号・確認用（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                                            <div class="row">
                                                                <div class="col-2 col-lg-1 align-self-center">

                                                                </div>
                                                                <div class="col-10 col-lg-6 align-self-center">
                                                                    <input type="text" name="fax_confirm" class="form-control" placeholder="例：0312341234" data-confirm="true" data-confirm-name="fax"  data-fax="true">
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
                                                                    <input type="email" name="email" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp" data-require="true">
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
                                                                    <input type="email" name="email_confirm" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp" data-require="true"  data-confirm="true" data-confirm-name="email">
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
                                                                    <input type="text" name="kondo_name" class="form-control" data-require="true">
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
                                                                            <input type="text" name="kondo_post" class="form-control numbersOnly" data-require="true" placeholder="例：1234567" maxlength="7" onkeyup="AjaxZip3.zip2addr(this, '', 'kondo_pref','kondo_city','kondo_aza');">
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 align-self-center">
                                                                            <a class="btnAuto btn mt-2 mt-lg-0" onclick="AjaxZip3.zip2addr('kondo_post', '', 'kondo_pref','kondo_city','kondo_aza');"><img src="https://www.chinokanri.co.jp//assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
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
                                                                    <select name="kondo_pref" id="" class="form-control custom-select" data-require="true">
                                                                        <option value="null">▼ 選択してください </option>
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
                                                                    <input type="text" name="kondo_city" class="form-control" data-require="true">
                                                                </div>
                                                            </div>
                                                            <p class="mb-1">丁目番地</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                    <span class="label_sub">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="kondo_aza" class="form-control" data-require="true">
                                                                </div>
                                                            </div>
                                                            <p class="mb-1">建物名</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                    <span class="label_sub">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="kondo_building_name" class="form-control" data-require="true">
                                                                </div>
                                                            </div>
                                                            <p class="mb-1">号室</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="kondo_building_room" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="">売却依頼主</label>
                                                            <p class="mb-1">氏名</p>
                                                            <div class="row mb-3">
                                                                <div class="col-2 col-lg-1 align-self-center">
                                                                    <span class="label_sub">必須</span>
                                                                </div>
                                                                <div class="col-10 col-lg-11 align-self-center">
                                                                    <input type="text" name="unit_name_sale" class="form-control" data-require="true">
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
                                                                    <div class="custom-control custom-checkbox mb-1">
                                                                        <input type="checkbox" name="request_document[]" class="custom-control-input" value="調査報告書" id="cb_surveyreport" data-require="true">
                                                                        <label class="custom-control-label" for="cb_surveyreport">調査報告書 (11,000円/1戸)</label>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-10 col-lg-6 align-self-center">
                                                                            <input type="number" min="1" max="20" name="request_unit" class="form-control" readonly="">
                                                                        </div>
                                                                        <div class="col-2 col-lg-1 align-self-center">
                                                                            <p class="mb-0">戸</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" name="request_document[]" class="custom-control-input" value="管理規約（コピー）" id="cb_managementagreement" data-require="true">
                                                                        <label class="custom-control-label" for="cb_managementagreement">管理規約（コピー） (3,300円)</label>
                                                                    </div>

                                                                    <p>※税込表記になります。<br>
                                                                        ※振込手数料はご負担下さい。<br>
                                                                        ※依頼戸数をご入力下さい。<br>
                                                                        ※総会議案書・議事録等は、売主の方から引き継ぎをお願い致します。
                                                                    </p>
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
                                                                        <input type="radio" id="rdo_brokerage" name="purpose_of_use[]" class="custom-control-input" value="売買仲介" checked="">
                                                                        <label class="custom-control-label" for="rdo_brokerage">売買仲介</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="rdo_rentalagency" name="purpose_of_use[]" class="custom-control-input" value="賃貸仲介">
                                                                        <label class="custom-control-label" for="rdo_rentalagency">賃貸仲介</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="rdo_other2" name="purpose_of_use[]" class="custom-control-input" value="その他">
                                                                        <label class="custom-control-label" for="rdo_other2">その他</label>
                                                                    </div>
                                                                    <input type="text" name="purpose_of_text" class="form-control ml-0 ml-lg-4" readonly="">
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
                                                                        <input type="radio" id="rdo_pdf" name="receive_method[]" class="custom-control-input" value="メールデータ受取り（PDF）" checked>
                                                                        <label class="custom-control-label" for="rdo_pdf">メールデータ受取り（PDF）</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="rdo_mail" name="receive_method[]" class="custom-control-input" value="郵送">
                                                                        <label class="custom-control-label" for="rdo_mail">郵送</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" id="rdo_sendmail" name="receive_method[]" class="custom-control-input" value="メールでのデータ受取及び郵送">
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
                                                                個人情報の取扱に関しましては <a class="btn-link" href="https://www.chinokanri.co.jp/privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                                                ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
                                                            </p>
                                                            <div class="form-group text-center">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agree"  class="custom-control-input" id="ck_agree" value="同意する" data-require="true" checked>
                                                                    <label class="custom-control-label" for="ck_agree">同意する</label>
                                                                </div>
                                                                <button type="button" id="btn_confirm" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <input type="hidden" name="license" id="input" class="form-control" value="">
                                    <input type="hidden" name="request_document" id="input" class="form-control" value="">
                                    <input type="hidden" name="purpose_of_use" id="input" class="form-control" value="">
                                    <input type="hidden" name="receive_method" id="input" class="form-control" value="">
                                </div>

                                <!-- CONFIRM DATA -->
                                <div class="data-confirm" style="display: none;">
                                <!-- <div class="data-confirm"> -->
                                    <section class="section_content_body bg_bluelight">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="frm_general_content">
                                                        <h2>宅地建物取引業者情報</h2>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                     <label for="">会社名</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr company_name"></div>
                                                                    <div class="cfr branch_name"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">


                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">所在地（送付先）</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr building_address"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">


                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">免許番号</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr building_license"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">


                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">担当者</label><p class="mb-1">所属部課（支店名）</p>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr representative_office"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">氏名</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr name"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">電話番号（半角数字)</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr phone"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">FAX番号（半角数字)</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                     <div class="cfr fax"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">メールアドレス（半角英数字）</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                     <div class="cfr email"></div>
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

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">名称</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                     <div class="cfr kondo_name"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                     <label for="">所在地</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr kondo_address"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">売却依頼主</label>
                                                                    <p class="mb-1">氏名</p>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <label for="">&nbsp;</label>
                                                                    <p class="cfr unit_number_sale mb-1"></p>
                                                                    <p class="cfr unit_name_sale mb-1"></p>
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

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">依頼書類</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr request_document"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">使用目的</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr purpose_of_use"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">

                                                            <div class="row">
                                                                <div class="col col-3 col-lg-5">
                                                                    <label for="">受取方法</label>
                                                                </div>
                                                                <div class="col col-9 col-lg-7">
                                                                    <!-- cfr -->
                                                                    <div class="cfr receive_method"></div>
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
                                                            <div class="form-inline justify-content-center">
                                                                <button type="button" id="btn_return" class="btn btnAgree cfr"><i class="i_rightwhite rotate"></i> 戻る</button>
                                                                <button type="button" id="btn_send" class="btn btnAgree cfr">送信する <i class="i_rightwhite"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
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