<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">

        <?php include 'header2.php'; ?>

        <main id="main">
            <section class="section_login">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 m-auto">
                            <h2>ログイン</h2>
                            <form action="index.php" class="frm_login">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <label class="font-weight-bold" for="">メールアドレス（※）</label>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <input type="text" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <label class="font-weight-bold" for="">パスワード（※）</label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <input type="text" class="form-control">
                                            <div class="custom-control custom-checkbox mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">入力した情報を保存する</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btnlogin">ログイン</button>
                                    <p class="text-center">
                                        <a href="#">パスワードを忘れた場合</a><br>
                                        <a href="#">確認メールが届いてない場合</a><br>
                                        <a href="#">新規会員登録</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <?php include 'footer.php'; ?>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>