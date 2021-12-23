<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>

            <section class="section_template">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="steps">
                                <li class="actived">
                                    <a href="registration.php">
                                        <span>1</span>
                                        <span>投資家情報登録</span>
                                    </a>
                                </li>
                                <li class="actived">
                                    <a href="identity_verification.php">
                                        <span>2</span>
                                        <span>本人確認書類登録</span>
                                    </a>
                                </li>
                                <li class="actived">
                                    <a href="refund.php">
                                        <span>3</span>
                                        <span>払戻し口座情報登録</span>
                                    </a>
                                </li>
                                <li class="actived">
                                    <a href="confirmation.php">
                                        <span>4</span>
                                        <span>確認画面</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="completed.php">
                                        <span>5</span>
                                        <span>申請完了</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <h2 class="title">投資家情報の申請完了</h2>

                            <div class="box_content px-lg-4">
                                <div class="box_send_completely text-center">
                                    <h3>投資家情報の申請受付を完了いたしました</h3>
                                    <p>ご登録いただいた情報の審査に数日かかる場合がございます。<br>
                                    審査が完了のご連絡はご登録のメールアドレス宛にお送りいたします。</p>
                                    <p>ご登録いただいた住所宛にはがきが届きます。</p>
                                    <p>審査通過後、入金と投資申込機能がご利用いただけます。</p>
                                    <p class="text-center mt-5"><a href="#" class="btn btn_green">マイページTOPへ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>