<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV45WXH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page">
        <?php require 'header.php'; ?>

        <main>
            <div class="box_underpage">
                <section class="section_contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">CONTACT</h2>
                                <p class="sub_title">お問い合わせ</p>
                                <form action="thanks.php" class="frm_contact">
                                    <div class="form-group">
                                        <label for="">お名前　[必須]</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">貴社名（※法人様の場合）</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ご連絡先電話番号　[必須]</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">お問い合わせ内容　[必須]</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <p class="text-center">弊社の個人情報に関する取り扱いについては <a href="#" class="blue font-weight-bold">プライバシーポリシー</a> をご一読ください。<br>
                                    上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label font-weight-normal" for="customCheck1">同意する</label>
                                    </div>
                                    <div class="form-group mt-5 text-center">
                                        <button type="submit" class="btn btnSend">上記に同意して送信</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </main>

        <?php require 'footer.php'; ?>


    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>

</body>

</html>