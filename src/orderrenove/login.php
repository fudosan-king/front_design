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
                            <h2 class="title mb-3 text-center">ログイン</h2>
                        </div>
                    </div>
                </section>

                <section class="section_pass">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="box_toplogin">
                                    <ul>
                                        <li>
                                            <a class="btn" href="#"><img src="images/svg/i_fb.svg" alt="" class="img-fluid" width="24">Facebookでログイン</a>
                                        </li>
                                        <li><a class="btn" href="#"><img src="images/svg/i_google.svg" alt="" class="img-fluid" width="24"> Googleでログイン</a></li>
                                    </ul>
                                    <p class="or"><span>または</span></p>
                                </div>
                                
                                <form action="" class="frm_settingpass">
                                    <div class="form-group">
                                        <label for="">メールアドレス <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="orderrenove@propolife.co.jp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">パスワード  <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="英数字８文字以上">
                                    </div>
                                    <!-- <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">入力した情報を保存する</label>
                                    </div> -->
                                    <button type="submit" class="btn btnsave mb-3">ログイン</button>
                                    <p class="text-center red">
                                        <a class="d-block" href="forgotpassword.php">パスワードを忘れた場合</a>
                                        <a class="d-block" href="resendreconfirmed.php">確認メールが届いてない場合</a>
                                        <a class="d-block" href="new_registration.php">新規会員登録</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>

        <?php require('footer2.php'); ?>

        <?php include('js-footer.php') ?>
    </body>
</html>