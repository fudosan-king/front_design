<!doctype html>
<html>
<?php include('head.php'); ?>

<body>
    <?php require('header.php') ?>
    <main>
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">資料請求</li>
                </ol>
            </div>
        </nav>
        <div class="main_content">
            <section class="section-request-doc">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h1 class="title">資料請求</h1>
                            <div class="request-doc thank-you">
                                <h3>送信完了</h3>
                                <p>
                                    お問い合わせありがとうございます。送信内容を受け付けました。<br>
                                    追って担当者よりご連絡させていただきます。<br>連絡がない場合はメールが届いていない可能性がありますので、お手数ですが再度お問合わせください。
                                </p>
                                <p>※当社指定日を挟んだ場合や、お見積り内容により、回答が数日かかる場合があります。予めご了承ください。</p>
                                <a href="#" class="btn btn-form-action">トップに戻る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include('footer.php'); ?>
    <?php include('js_footer.php'); ?>

</body>
</html>