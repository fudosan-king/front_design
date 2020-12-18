<?php
    if (isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $datepicker = $_POST['datepicker'];
        $time = $_POST['time'];
    }
    else 
    {
        header('Location: ../', true, 301);
    }
?>
<!doctype html>
<html class="no-js">

<head>
    <meta name="viewport" content="width = device-width, init-scale = 1.0, minim-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>株式会社クロニクル　オンライン相談予約</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon_package_v0.16/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700,900&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/mobile.css" type="text/css">
    <script type="text/javascript" src="https://typesquare.com/3/tsst/script/ja/typesquare.js?5e72c6a675bc4b9598da5036e90393a3" charset="utf-8"></script>
</head>

<body>
    <div id="page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="index.php" class="logo">
                            <img src="../assets/images/1x/logo.png" alt="" class="img-fluid" width="270">
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
                            <p class="text-center mt-5"><img src="../assets/images/1x/online-sales.svg" alt="" class="img-fluid" width="57"></p>
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
                                <form action="https://go.pardot.com/l/185822/2020-05-06/pxcq1j" method="POST" class="frm_online">
                                    <div class="box_entry">
                                        <h2 class="text-center">入力内容をご確認ください</h2>
                                        <div class="row">
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">お名前</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $name; ?></p>
                                                <input hidden type="text" name="pd_name" value="<?php echo $name; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">メールアドレス</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $email; ?></p>
                                                <input hidden type="text" name="pd_email" value="<?php echo $email; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for=""> ご希望日</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $datepicker; ?></p>
                                                <input hidden type="text" name="pd_appointment_date" value="<?php echo $datepicker; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">ご希望時間</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $time; ?></p>
                                                <input hidden type="text" name="pd_appointment_hour" value="<?php echo $time; ?>">
                                            </div>
                                        </div>
                                        <p class="text-center text_information"><small>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                        個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/">プライバシーポリシー</a>をご覧ください。</small></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-6">
                                            <a href="javascript:history.back();" class="btn btn_border btnreturn_send w-100">入力画面に戻る</a>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <button type="submit" name="submit" class="btn btn_border btnreturn_send w-100">送信する</button>
                                        </div>
                                    </div>
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
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ja-jp.js" type="text/javascript"></script>
    <script src="../assets/js/functions.js"></script>
</body>

</html>