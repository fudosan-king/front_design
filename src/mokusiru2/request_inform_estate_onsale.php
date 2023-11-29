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
                        <h2 class="title_sub">この物件が売り出されたら教えてほしい</h2>
                    </div>
                    <div class="contactus_content">
                        <div class="data-input frm_mansions_content" id="input-form">
                            <div class="form-group" style="display:none;">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">お問合わせ内容 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-6 col-lg-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="request_item2" name="request_item[]" class="custom-control-input" value="資料請求">
                                                    <label class="custom-control-label" for="request_item2">資料請求</label>
                                                </div>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="request_item1" name="request_item[]" class="custom-control-input" value="来店予約" checked="">
                                                    <label class="custom-control-label" for="request_item1">来店予約</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="request_item" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="box_estates_info_top">
                                <div class="box_estates_info_top_img">
                                    <img src="assets/images/products/img01.png" alt="img01">
                                </div>
                                <div class="box_estates_info_top_content">
                                    <h4>アルソスコート</h4>
                                    <table class="table table-sm">
                                        <tr>
                                            <th>所在地</th>
                                            <td colspan="3">東京都品川区大井4</td>
                                        </tr>
                                        <tr>
                                            <th>交通</th>
                                            <td colspan="3">半蔵門線　青山一丁目駅　徒歩5分</td>
                                        </tr>
                                        <tr>
                                            <th>築年月</th>
                                            <td>2017年3月</td>
                                            <th>総戸数</th>
                                            <td>30戸</td>
                                        </tr>
                                    </table>
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
                                        <label class="mb-lg-0 mb-2" for="">お電話番号 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="number" name="email" class="form-control required" placeholder="例：08000000000" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">ご希望連絡時間帯 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <select class="form-control custom-select">
                                            <option value=" 選択してください">選択してください</option>
                                            <option value="午前を希望">午前を希望</option>
                                            <option value="午後を希望">午後を希望</option>
                                            <option value="午前・午後どちらでも可">午前・午後どちらでも可</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">メールアドレス <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="email" name="email" class="form-control required" placeholder="例：aaaa1234@bbb.cccc" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">郵便番号 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <input type="text" name="zip_code" class="form-control" placeholder="例：1234567" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
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
                                        <label class="mb-lg-0 mb-2" for="">都道府県 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <select name="pref" class="form-control custom-select">
                                            <option value="--">▼ 選択してください </option>
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
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">住所 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label class="mb-lg-0 mb-2" for="">建物名・号室 </label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" name="building_room_name" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="mb-2" for="">ご質問、ご要望等</label>
                                <textarea name="request_content" id="" class="form-control" cols="30" rows="8" placeholder="間取り、ご予算などのご希望やご相談事項など"></textarea>
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

                        </div>
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