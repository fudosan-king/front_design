<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header2.php') ?>

        <main>
            <div class="box_template">
                <section class="p-0">
                    <div class="box_top mb-0">
                        <div class="container">
                            <h2 class="title mb-3">連絡先</h2>
                        </div>
                    </div>
                </section>

                <section class="section_contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                
                                <form class="frm_contact" action="confirm.php" method="post">
                                    <input type="hidden" name="logrenove_customer_id">
                                    <input type="hidden" name="origin_url" value="#">
                                    <div class="frm-input">

                                    <!-- <div class="form-group">
                                        <div class="row mb-3">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">第1希望日時<span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <div class="box_datetime mb-2 mb-lg-0">
                                                            <select name="date" class="form-control custom-select required">
                                                                <option value="6月26日 (土)">6月26日 (土)</option>
                                                                <option value="6月27日 (日)">6月27日 (日)</option>
                                                                <option value="6月28日 (月)">6月28日 (月)</option>
                                                                <option value="7月1日 (木)">7月1日 (木)</option>
                                                                <option value="7月2日 (金)">7月2日 (金)</option>
                                                                <option value="7月3日 (土)">7月3日 (土)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <select name="time" class="form-control custom-select required">
                                                            <option value="10:00">10:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="16:00">16:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group">
                                        <div class="row mb-3">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">第2希望日時</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <div class="box_datetime mb-2 mb-lg-0">
                                                            <select name="date_2" class="form-control custom-select">
                                                                <option value="6月26日 (土)">6月26日 (土)</option>
                                                                <option value="6月27日 (日)">6月27日 (日)</option>
                                                                <option value="6月28日 (月)">6月28日 (月)</option>
                                                                <option value="7月1日 (木)">7月1日 (木)</option>
                                                                <option value="7月2日 (金)">7月2日 (金)</option>
                                                                <option value="7月3日 (土)">7月3日 (土)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <select name="time_2" class="form-control custom-select">
                                                            <option value="10:00">10:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="16:00">16:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group">
                                        <div class="row mb-3">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">第3希望日時</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <div class="box_datetime mb-2 mb-lg-0">
                                                            <select name="date_3" class="form-control custom-select">
                                                                <option value="6月26日 (土)">6月26日 (土)</option>
                                                                <option value="6月27日 (日)">6月27日 (日)</option>
                                                                <option value="6月28日 (月)">6月28日 (月)</option>
                                                                <option value="7月1日 (木)">7月1日 (木)</option>
                                                                <option value="7月2日 (金)">7月2日 (金)</option>
                                                                <option value="7月3日 (土)">7月3日 (土)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <select name="time_3" class="form-control custom-select">
                                                            <option value="10:00">10:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="16:00">16:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

        
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">物件名</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <p class="mb-0"><span>Lorem, ipsum.</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">第1希望日時<span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <select name="" class="custom-select">
                                                            <option value="">7月1日 (木)</option>
                                                            <option value="">7月2日 (金)</option>
                                                            <option value="">7月3日 (土)</option>
                                                            <option value="">7月4日 (日)</option>
                                                            <option value="">7月5日 (月)</option>
                                                            <option value="">7月8日 (木)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <select name="" class="custom-select">
                                                            <option value="">10:00</option>
                                                            <option value="">12:00</option>
                                                            <option value="">14:00</option>
                                                            <option value="">16:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">お名前<span class="red">（※）</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <input type="text" name="full_name" class="form-control required" placeholder="例：山田 太郎">
                                            </div>
                                        </div>
                                    </div>
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
                                                <input type="checkbox" class="custom-control-input required" name="ck_agree" id="ck_agree" checked="">
                                                <label class="custom-control-label font-weight-normal ck_agree" for="ck_agree">同意する</label>
                                            </div>
                                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center mt-3" style="border-bottom: none;">
                                                <div id="recaptcha" class="g-recaptcha" data-sitekey="6LfB6I0aAAAAAElo0TdPW-66NuzIB5QXc7YNIOvl" align="center"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfB6I0aAAAAAElo0TdPW-66NuzIB5QXc7YNIOvl&amp;co=aHR0cHM6Ly93d3cubG9ncmVub3ZlLmpwOjQ0Mw..&amp;hl=vi&amp;v=eKRIyK-9MtX6JxeZcNZIkfUq&amp;size=normal&amp;cb=6e2nqc604ul9" width="304" height="78" role="presentation" name="a-d13ytabvu8lx" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                            </dd>
                                            <button type="submit" class="btn btnsave">上記に同意して確認画面へ <img src="images/svg/i_right_white.svg" alt="" class="img-fluid" width="10"></button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>