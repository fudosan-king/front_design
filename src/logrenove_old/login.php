<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">

        <main>
            <section class="section_login">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9 mx-auto">
                            <h1><a href="index.php"><img src="images/1x/logo.svg" alt="" class="img-fluid" width="257"></a></h1>
                            <form action="index.php" class="frm_login">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h2>ログイン</h2>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="メールアドレス">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="パスワード">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                次回から自動的にログインする
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btnLogin">ログイン</button>
                                        <p class="my-4 text-center text_forgotpass"><a href="#">パスワードをお忘れの方</a></p>
                                        <p>初めてご利用になるかたはこちらから新規登録をお願いいたします。</p>
                                        <a href="signin.php" class="btn btnSignin d-block">新規登録</a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h2 class="mb-1">SNSを使用してログイン</h2>
                                        <p>SNSアカウントを使って会員登録をされた方はこちらからログインしていただけます。</p>
                                        <a href="#" class="btn d-block btnfb">フェイスブックでログイン <i class="fab fa-facebook-f fa-lg ml-1"></i></a>
                                        <a href="#" class="btn d-block btntw">ツイッターでログイン <i class="fab fa-twitter fa-lg ml-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php require 'footer.php'; ?>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>