<?php 
/*
    Template Name: inquiry
*/
?>


<?php get_header(); ?>

<main>
    <div class="template">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="header_inquiry">
                        <h2>プロスタイル蔵前</h2>
                        <h3>お問い合わせフォーム</h3>
                        <ul class="steps">
                            <li id="input" class="active"><span>入力</span></li>
                            <li id="confirm" class=""><span>確認</span></li>
                            <li id="finish" class=""><span>完了</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="section_inquiry">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <form class="frm_general" id="form-bunjyo" method="POST">
                            <div class="frm_general_content" id="input-form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label class="mb-lg-0 mb-2" for="">氏名 <span>（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="sub_lable">姓</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="kanji_familyname" class="form-control required" placeholder="例：蔵前">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="sub_lable">名</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="kanji_name" class="form-control required" placeholder="例：太郎">
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
                                            <label class="mb-lg-0 mb-2" for="">氏名（フリガナ）<span>（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="sub_lable">セイ</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="kata_familyname" class="form-control required" placeholder="例：クラマエ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="sub_lable">メイ</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="kata_name" class="form-control required" placeholder="例：タロウ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">電話番号 <span>（※）</span></label>
                                        </div>
                                        <div class="col-2 align-self-center d-lg-none d-block"></div>
                                        <div class="col-10 col-lg-9 align-self-center">
                                            <input type="text" name="postal_code" class="form-control required numbersOnly" placeholder="例：0312341234　(※ハイフンなしでご記入ください)" maxlength="7" onkeyup="AjaxZip3.zip2addr(this,'','prefecture','city', 'chome_address')">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">メールアドレス <span>（※）</span></label>
                                        </div>
                                        <div class="col-2 align-self-center d-lg-none d-block"></div>
                                        <div class="col-10 col-lg-9 align-self-center">
                                            <input type="email" name="email" placeholder="例：xxxxxxx@logrenove.jp" class="form-control required">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">住所 <span>（※）</span></label>
                                        </div>
                                        <div class="col-2 align-self-center d-lg-none d-block"></div>
                                        <div class="col-10 col-lg-9">
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">郵便番号 <span>（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-5">
                                                    <input type="text" name="phone" placeholder="例：1234567" class="form-control required">
                                                </div>
                                                <div class="col-12 col-lg-5">
                                                    <a href="#" class="btn btn_auto"><img src="<?php bloginfo('template_directory');?>/assets/images/common/i_right.svg" alt="i_right" class="img-fluid" width="20"> 郵便番号から住所を自動的入力</a>
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">都道府県 <span>（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <select name="" id="" class="form-control custom-select required">
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">住所 <span>（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <input type="text" name="" placeholder="" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">建物</label>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <input type="text" name="" placeholder="" class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-3 align-self-center">
                                            <label for="予算">予算</label>
                                        </div>
                                        <div class="col-10 col-lg-9 align-self-center">
                                            <select name="budget" id="" class="form-control custom-select required">
                                                <option value="">予算を選択ください</option>
                                                <option value="～3000万円">～3000万円</option>
                                                <option value="～3500万円">～3500万円</option>
                                                <option value="～4000万円">～4000万円</option>
                                                <option value="～4500万円">～4500万円</option>
                                                <option value="～5000万円">～5000万円</option>
                                                <option value="～5500万円">～5500万円</option>
                                                <option value="～6000万円">～6000万円</option>
                                                <option value="～6500万円">～6500万円</option>
                                                <option value="～7000万円以上">～7000万円以上</option>
                                                <option value="～7500万円以上">～7500万円以上</option>
                                                <option value="～8000万円以上">～8000万円以上</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">資料請求 <span>（※）</span></label>
                                        </div>
                                        <div class="col-2 align-self-center d-lg-none d-block"></div>
                                        <div class="col-10 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">する</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">しない</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">希望日時 <span>（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <label for="第1希望日時">第1希望日時</label>
                                                </div>
                                                <div class="col-12 col-lg-5 align-self-center">
                                                    <div class="box_datetime">
                                                        <input type="" name="" value="" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-5 align-self-center">
                                                    <select class="form-control custom-select required">
                                                        <option value="時間を選択">時間を選択</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <label for="第2希望日時">第2希望日時</label>
                                                </div>
                                                <div class="col-12 col-lg-5 align-self-center">
                                                    <div class="box_datetime">
                                                        <input type="" name="" value="" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-5 align-self-center">
                                                    <select name="time" id="" class="form-control custom-select" data-require="true">
                                                        <option value="時間を選択">時間を選択</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <p>スタッフから折り返し連絡させていただく場合がございます。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">ご質問・ご要望など <span>（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <textarea name="contact_content" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご要望があればご記入ください。"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box_content_footer">
                                    <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                    個人情報の取扱に関しましては <a class="btn-link" href="https://www.prostyle-residence.com/privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox w_checkbox">
                                            <input type="checkbox" class="form-check-input required" id="ck_agree" name="ck_agree">
                                            <label class="custom-control-label" for="ck_agree">同意する</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btnAgree d-inline-block" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </section>

        <?php 
            get_template_part('template-parts/section_tel'); 
        ?>
    </div>
</main>


<?php get_footer(); ?>
    