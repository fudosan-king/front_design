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
                            <h2 class="title mb-3">パスワード再設定</h2>
                            <p class="subtitle mb-2">
                                <small>下記に登録したメールアドレスを入力してください。パスワード再設定のご案内をメールでお送りします。</small>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="section_pass">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <form action="" class="frm_settingpass">
                                    <div class="form-group">
                                        <label for="">メールアドレス <span class="red">必須</span></label>
                                        <input type="text" class="form-control" placeholder="orderrenove@propolife.co.jp">
                                    </div>
                                    <button type="submit" class="btn btnsave mb-3">メールを送信する</button>
                                    <p class="text-center red"><a href="login.php" class="text-decoration-none">ログインに戻る</a></p>
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