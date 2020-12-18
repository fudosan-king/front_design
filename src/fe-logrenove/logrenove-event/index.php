<?php include './header.php'; ?>
<form id="frm_services" class="frm_services" action="https://go.pardot.com/l/185822/2020-09-01/qh62y3" method="post" accept-charset="utf-8">
    <div class="frm-input">
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-12 col-lg-3 align-self-center">
                    <label for="">開始日時<span class="red">（※）</span></label>
                </div>
                <div class="col-12 col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <div class="box_datetime mb-2 mb-lg-0">
                                <select name="date" class="form-control custom-select required">
                                    <option value="12月7 (月)">12月7 (月)</option>
                                    <option value="12月10 (木)">12月10 (木)</option>
                                    <option value="12月11 (金)">12月11 (金)</option>
                                    <option value="12月14 (月)">12月14 (月)</option>
                                    <option value="12月17 (木)">12月17 (木)</option>
                                    <option value="12月18 (金)">12月18 (金)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <select name="time" class="form-control custom-select required">
                                <option value="10:00">10:00</option>
                                <option value="14:00">14:00</option>
                                <option value="17:00">17:00</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- THÊM CHECKBOX -->
        <div class="form-group">
          <div class="row mb-3">
             <div class="col-12 col-lg-3 align-self-center">
                  <label for="">参加方法<span class="red">（※）</span></label>
              </div>
              <div class="col-12 col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <label class="check-radio">オンライン
                            <input type="radio" checked="checked" name="radio" value="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="check-radio">表参道ショールーム
                            <input type="radio" value="" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-12 col-lg-5">
                        <label class="check-radio">バーチャルプランナー
                            <input type="radio" value="" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- END -->
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-3 align-self-center">
                    <label for="">メールアドレス<span class="red">（※）</span></label>
                </div>
                <div class="col-12 col-lg-9 align-self-center">
                    <input type="text" name="email" class="form-control required" placeholder="例：xxxxxxx@logrenove.jp">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-3 align-self-center">
                    <label for="">電話番号<span class="red">（※）</span></label>
                </div>
                <div class="col-12 col-lg-9 align-self-center">
                    <input type="text" name="phone-number" class="form-control required" placeholder="例：0312341234">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <label for="">気になるご質問</label>
                </div>
                <div class="col-12 col-lg-9">
                    <textarea name="inquiry_content" class="form-control" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                </div>
            </div>
        </div>
        <div class="box_content_footer">
            <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。
                個人情報の取扱に関しましては <a target="_blank" class="btn-link" href="https://www.propolife.co.jp/privacypolicy/" rel="noopener noreferrer"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
            <div class="form-group text-center mb-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input required" name="ck_agree" id="ck_agree" checked>
                    <label class="custom-control-label font-weight-normal ck_agree" for="ck_agree">同意する</label>
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
                    <label>開始日時</label>
                </td>
                <td class="confirm-text">
                    <span id="date"></span> <span id="time"></span>
                </td>
            </tr>
            <!-- THÊM CHECKBOX -->
            <tr>
                <td>
                    <label>参加方法</label>
                </td>
                <td id="" class="confirm-text"></td>
            </tr>
            <!-- END -->
            <tr>
                <td>
                    <label>お名前</label>
                </td>
                <td id="name" class="confirm-text"></td>
            </tr>
            <tr>
                <td>
                    <label>メールアドレス</label>
                </td>
                <td id="email" class="confirm-text"></td>
            </tr>
            <tr>
                <td>
                    <label>電話番号</label>
                </td>
                <td id="phone-number" class="confirm-text"></td>
            </tr>
            <tr>
                <td>
                    <label>気になるご質問</label>
                </td>
                <td id="inquiry_content" class="confirm-text"></td>
            </tr>
        </table>
        <div class="box_content_footer mt-4">
            <div class="form-group text-center">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <button type="submit" class="btn btnAgree" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                    </div>
                    <div class="col-12 col-lg-6">
                        <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include './footer.php'; ?>