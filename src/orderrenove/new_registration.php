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
                            <h2 class="title text-center mb-3">新規会員登録</h2>
                            <p class="subtitle text-center mb-2">ようこそOrder-Renoveへ！<br>
                            あなただけの新しい住まい探しはここから</p>
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
                                            <a class="btn" href="#"><img src="images/svg/i_fb.svg" alt="" class="img-fluid" width="24">Facebookで登録</a>
                                        </li>
                                        <li><a class="btn" href="#"><img src="images/svg/i_google.svg" alt="" class="img-fluid" width="24"> Googleで登録</a></li>
                                    </ul>
                                    <p class="or"><span>または</span></p>
                                </div>
                                
                                <form action="" class="frm_settingpass">
                                    <div class="form-group">
                                        <label for="">名前 <span class="red">必須</span></label> 
                                        <div class="row">
                                            <div class="col-6 col-lg-6 align-self-center">
                                                <input type="text" placeholder="例：山田" class="form-control">
                                            </div>
                                            <div class="col-6 col-lg-6 align-self-center">
                                                <input type="text" placeholder="例：太郎" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">メールアドレス <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="orderrenove@propolife.co.jp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">パスワード  <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="英数字８文字以上">
                                    </div>
                                    <div class="form-group">
                                        <label for="">パスワード（再入力） <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="パスワードを再入力する">
                                    </div>
                                    <p>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                    下記の <a href="#">プライバシーポリシー</a>  を必ずご一読頂き、同意のうえお問い合わせください。</p>
                                    <div class="custom-control custom-checkbox text-center mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">同意する</label>
                                    </div>
                                    <button type="submit" class="btn btnsave">新規会員登録する</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>

        <?php include('footer2.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>