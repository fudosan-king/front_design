<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <main>
            <section class="section_main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center mt-5"><img src="images/1x/online-sales.svg" alt="" class="img-fluid" width="57"></p>
                            <h1 class="text-center">オンライン相談予約</h1>
                            <p class="box_intro">クロニクルでは、ご自宅でもオンラインでスタッフにご相談いただけます。<br>
                            各種オンラインミーティングツール（zoom、calling、Google meet等）を使い、
                            スタッフと対話しながら、物件をご確認いただけます。</p>
                            <div class="box_content">
                                <p class="sub_des">※カメラ機能がついたパソコン、タブレット、スマートフォンのいずれかが必要です。<br>
                                ※お顔が映るのが苦手な方は音声のみで問題ございません。<br>
                                ※ご利用は無料ですが、別途通信料がかかります。データ通信料はお客さまのご負担となります。<br>
                                　従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合はご注意ください。<br>
                                　安定した画質で利用するためにも、Wi-Fi環境下での利用を推奨します。</p>
                                <form action="confirm.php" class="frm_online">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="お名前（必須）">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="メールアドレス（必須）">
                                    </div>
                                    <div class="form-group">
                                        <input id="datepicker" type="text" class="form-control datepicker" placeholder="ご希望日">
                                    </div>
                                    <div class="form-group">
                                        <select name="" id="" class="form-control" placeholder="">
                                            <option value="ご希望時間" selected>ご希望時間</option>
                                            <option value="時間を運択">時間を運択</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                        </select>
                                    </div>
                                    <p class="text-center text_information"><small>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                    個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/">プライバシーポリシー</a>をご覧ください。</small></p>
                                    <p class="mb-0 text-center"><button type="submit" class="btn btn_border">上記に同意して確認画面へ</button></p>
                                </form>
                            </div>
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