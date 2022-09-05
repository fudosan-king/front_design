<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">

        <?php include 'header3.php'; ?>

        <main>
            <div class="template">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="header_inquiry header_login">
                                <h2>プロスタイル蔵前</h2>
                                <h3>資料請求者様限定ログインページ</h3>
                                <p>WEB資料請求頂いた方にお送りしたパスワードを入力の上、ログインしてください。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section_login">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <form class="frm_login" method="POST">
                                    <p class="red">パスワードが正しくありません</p>
                                    <label for="">パスワード</label>
                                    <div class="form_group">
                                        <input type="password" placeholder="＊＊＊＊" value="" class="form-control">
                                        <button type="submit" class="btn">ログイン</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include('section_tel.php'); ?>
            </div>
        </main>

        <?php require 'footer.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>