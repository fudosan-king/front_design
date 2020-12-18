<!doctype html>
<html class="no-js">

<head>
    <meta name="viewport" content="width = device-width, init-scale = 1.0, minim-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>株式会社クロニクル　オンライン相談予約</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon_package_v0.16/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700,900&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/mobile.css" type="text/css">
    <script type="text/javascript" src="https://typesquare.com/3/tsst/script/ja/typesquare.js?5e72c6a675bc4b9598da5036e90393a3" charset="utf-8"></script>
</head>

<body>
    <div id="page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="index.php" class="logo">
                            <img src="./assets/images/1x/logo.png" alt="" class="img-fluid" width="270">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="section_main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center mt-5">
                                <img src="./assets/images/1x/online-sales.svg" alt="" class="img-fluid" width="57">
                            </p>
                            <h1 class="text-center">オンライン相談予約</h1>
                            <p class="box_intro">クロニクルでは、ご自宅でもオンラインでスタッフにご相談いただけます。
                                <br>各種オンラインミーティングツール（zoom、calling、Google meet等）を使い、 スタッフと対話しながら、物件をご確認いただけます。</p>
                            <div class="box_content">
                                <p class="sub_des">※カメラ機能がついたパソコン、タブレット、スマートフォンのいずれかが必要です。
                                    <br>※お顔が映るのが苦手な方は音声のみで問題ございません。
                                    <br>※ご利用は無料ですが、別途通信料がかかります。データ通信料はお客さまのご負担となります。
                                    <br>従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合はご注意ください。
                                    <br>安定した画質で利用するためにも、Wi-Fi環境下での利用を推奨します。</p>
                                <form action="./confirm/" method="POST" class="frm_online">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" required placeholder="お名前（必須）">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" required placeholder="メールアドレス（必須）">
                                    </div>
                                    <div class="form-group">
                                        <input id="datepicker" type="text" name="datepicker" class="form-control datepicker" placeholder="ご希望日">
                                    </div>
                                    <div class="form-group">
                                        <select name="time" class="form-control" placeholder="">
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
                                            個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/">プライバシーポリシー</a>をご覧ください。</small>
                                    </p>
                                    <p class="mb-0 text-center">
                                        <button type="submit" name="submit" class="btn btn_border">上記に同意して確認画面へ</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <p class="mb-0">Copyright © <a target="_blank" href="https://www.chronicle-web.com/">CHRONICLE INC.</a> All Rights Reserved.</p>
        </footer>
    </div>
    <!-- End page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/moment.min.js"></script>
    <script src="./assets/js/functions.js"></script>
</body>

</html>