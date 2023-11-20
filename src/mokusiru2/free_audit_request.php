<!DOCTYPE html>
<html class="no-js" lang="ja">

<head>
    <?php include 'head.php'; ?>
</head>

<body class="home blog">
    <?php include 'header.php'; ?>

    <?php include 'menu_sub.php'; ?>

    <section class="section_contactus">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contactus_top request_assessment_top">
                        <h2 class="title_sub">無料査定依頼</h2>
                    </div>
                    <div class="contactus_content">
                        <form method="POST" role="form" class="formrun frm_contactus">
                            <div class="contact_tel">
                                <p><b>＜お電話でのお問い合わせについて＞</b><br>
                                    お電話でのお問い合わせは次の番号までお願いいたします。<br>
                                    電話番号：<a href="tel:0800-111-1678" target="_blank" rel="noopener noreferrer">0800-111-1678</a> <br>
                                    受付時間／10:00〜19:00 定休日／火・水曜日※祝日を除く <br>
                                    携帯電話・PHSからもご利用いただけます。</p>
                            </div>
                            <p class="text-center">
                                必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                                <span class="red">＊</span>がついている項目はご記入必須項目になります。
                            </p>

                            <div class="card assessmentmethod">
                                <div class="card-header">■査定方法・ご相談内容の種別</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <p><strong>ご希望の査定方法 <span class="red">＊</span></strong></p>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label class="check-radio">訪問査定
                                                        <input type="radio" checked="checked" name="contact_method[]" value="訪問査定" data-value="訪問査定">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <p class="describe">実際に査定をご希望される物件の現地を訪問し、実際の物件の状況等を確認の上、具体的な査定を行うことができます。</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <div class="radio">
                                                        <label class="check-radio">簡易査定
                                                            <input type="radio" name="contact_method[]" value="簡易査定" data-value="簡易査定">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <p class="describe mb-0">お客様よりお伝えいただいた物件に関する情報と、周辺の売出事例、成約事例等から概算の査定を行います。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>


    <!-- Scripts -->
    <?php include 'js-footer.php'; ?>
</body>

</html>