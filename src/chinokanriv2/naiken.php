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

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-previewrequest" role="tabpanel" aria-labelledby="nav-previewrequest-tab">
                            <section class="section_content_top">
                                <div class="container">
                                    <div class="row">
                                       <div class="col-12">
                                            <h1>内見依頼に関するお問い合わせ</h1>
                                            <ul class="steps d-flex">
                                                <li class="active input flex-fill"><span>入力</span></li>
                                                <li class="confirm flex-fill"><span>確認</span></li>
                                                <li class="finish flex-fill"><span>完了</span></li>
                                            </ul>
                                            <ul class="list">
                                                <!-- <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li> -->
                                                <li>当社営業時間外にいただいたご依頼は翌営業日以降に回答いたします。</li>
                                                <li>下記フォーム入力後にお手数ですが、<a href="tel:045-581-9556">045-581-9556</a>までお電話お願いいたします。</li>
                                             </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                           <section class="section_content_body bg_bluelight">
                                <div class="container">
                                   <div class="row">
                                      <div class="col-12">
                                         <form action="https://go.pardot.com/l/185822/2020-07-16/q9wfsc" class="frm_general" method="post">
                                            <!-- input data -->
                                            <div class="frm_general_content frm-input">
                                               <div class="form-group">
                                                  <label for="">物件名</label>
                                                  <div class="row">
                                                     <div class="col-2 col-lg-1 align-self-center">
                                                        <span class="label_sub">必須</span>
                                                     </div>
                                                     <div class="col-10 col-lg-11 align-self-center">
                                                        <input type="text" name="property-name" class="form-control required">
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
                                                        <input type="text" name="room-number" class="form-control required" placeholder="部屋番号">
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
                                                                 <input type="text" name="visit-date" class="form-control datepicker required" autocomplete="off" placeholder="日付を選択">
                                                                 <i class="i_datetime"></i>
                                                              </div>
                                                           </div>
                                                           <div class="col-6">
                                                              <select name="visit-hour" id="" class="form-control custom-select required">
                                                                 <option value="">時間を選択</option>
                                                                 <option value="10:00">10:00</option>
                                                                 <option value="11:00">11:00</option>
                                                                 <option value="12:00">12:00</option>
                                                                 <option value="13:00">13:00</option>
                                                                 <option value="14:00">14:00</option>
                                                                 <option value="15:00">15:00</option>
                                                                 <option value="16:00">16:00</option>
                                                                 <option value="17:00">17:00</option>
                                                                 <option value="18:00">18:00</option>
                                                                 <option value="19:00">19:00</option>
                                                                 <option value="20:00">20:00</option>
                                                              </select>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="">会社名</label>
                                                  <div class="row mb-lg-3">
                                                     <div class="col-2 col-lg-1">
                                                        <span class="label_sub">必須</span>
                                                     </div>
                                                     <div class="col-10 col-lg-11">
                                                        <input type="text" name="company-name" class="form-control mb-3 required" placeholder="会社名">
                                                        <input type="text" name="branch-name" class="form-control" placeholder="支店名">
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
                                                              <input type="text" name="postal-code" class="form-control required numbersOnly" placeholder="例：1234567" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','pref','city')">
                                                           </div>
                                                           <div class="col-12 col-lg-6 align-self-center">
                                                              <a class="btnAuto btn mt-2 mt-lg-0" style="cursor: pointer;" onclick="AjaxZip3.zip2addr('postal-code','','pref','city')"><img src="https://www.chinokanri.co.jp/assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
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
                                                        <select name="pref" id="" class="form-control custom-select required">
                                                           <option value="">都道府県を選択してください</option>
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
                                                  <p>市区町村・番地</p>
                                                  <div class="row">
                                                     <div class="col-2 col-lg-1 align-self-center">
                                                        <span class="label_sub">必須</span>
                                                     </div>
                                                     <div class="col-10 col-lg-11 align-self-center">
                                                        <input type="text" name="city" class="form-control required">
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
                                                        <input type="text" name="phone-number" class="form-control required" placeholder="例：0312341234">
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
                                                        <input type="text" name="mobile-number" class="form-control required" placeholder="例：0312341234">
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
                                                            <input type="email" name="email" class="form-control required" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                                        </div>
                                                     </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="">お問い合わせ内容</label>
                                                  <textarea name="note" id="" class="form-control" cols="30" rows="7" placeholder="お問合せ事項やご意見・ご要望等はこちらにご記入ください"></textarea>
                                               </div>
                                               <div class="box_content_footer">
                                                  <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                     個人情報の取扱に関しましては <a class="btn-link" href="https://www.chinokanri.co.jp/privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                                     ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
                                                  </p>
                                                  <div class="form-group text-center">
                                                     <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="agree" class="custom-control-input required" id="ck_agree" value="1" checked>
                                                        <label class="custom-control-label" for="ck_agree">同意する</label>
                                                     </div>
                                                     <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                                  </div>
                                               </div>
                                            </div>
                                            <!-- confirm -->
                                            <div class="frm_general_content frm_confirm" style="display: none">
                                               <table class="table table-bordered">
                                                  <tr>
                                                     <td>
                                                        <label>物件名</label>
                                                     </td>
                                                     <td id="property-name" class="confirm-text"></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>号室</label>
                                                     </td>
                                                     <td id="room-number" class="confirm-text"></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>内覧希望日時</label>
                                                     </td>
                                                     <td>
                                                        <span id="visit-date" class="confirm-text"></span>
                                                        <span id="visit-hour" class="confirm-text"></span>
                                                     </td>
                                                  </tr>
                                               <tr>
                                                     <td>
                                                        <label>会社名</label>
                                                     </td>
                                                     <td>
                                                        <span id="company-name" class="confirm-text"></span> <br>
                                                        <span id="branch-name" class="confirm-text"></span>
                                                     </td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>住所</label>
                                                     </td>
                                                     <td>
                                                         <span id="postal-code" class="confirm-text"></span> <br>
                                                         <span id="pref" class="confirm-text"></span> <br>
                                                         <span id="city" class="confirm-text"></span> <br>
                                                     </td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>会社電話番号</label>
                                                     </td>
                                                     <td id="phone-number" class="confirm-text"></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>担当者携帯電話番号</label>
                                                     </td>
                                                     <td id="mobile-number" class="confirm-text"></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>メールアドレス</label>
                                                     </td>
                                                     <td id="email" class="confirm-text"></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>お問い合わせ内容</label>
                                                     </td>
                                                     <td id="note" class="confirm-text"></td>
                                                  </tr>
                                               </table>
                                               <div class="box_content_footer mt-4">
                                                   <div class="form-group text-center">
                                                       <div class="row">
                                                           <div class="col-12 col-lg-6">
                                                               <button type="button" class="btn btnAgree" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                                                           </div>
                                                           <div class="col-12 col-lg-6">
                                                               <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
                                                           </div>
                                                       </div>
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

        <?php require 'footer2.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>