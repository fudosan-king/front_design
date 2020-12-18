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
                                <h2>新規登録</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="メールアドレス">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="パスワード">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        ログリノベのメルマガを受け取る
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mx-auto">
                                        <button type="submit" class="btn btnLogin">仮登録メールを送信する</button>
                                        <p class="register_sns">またはSNSアカウントで登録</p>
                                        <p class="link_page"><a href="#">利用規約</a> ・ <a href="#">プライバシー</a>ポリシー に同意の上<br>
                                        会員登録を行ってください。</p>
                                        <a href="#" class="btn d-block btnfb">フェイスブックで登録する <i class="fab fa-facebook-f fa-lg ml-1"></i></a>
                                        <a href="#" class="btn d-block btntw">ツイッターで登録する <i class="fab fa-twitter fa-lg ml-1"></i></a>
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