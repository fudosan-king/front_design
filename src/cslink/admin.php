<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <form action="" class="frm_admin">
            <header class="text-start">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container_custom">
                                <input type="text" class="form-control" placeholder="メインタイトル">
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main_content template2">

                                <div class="main_left admin">
                                    <aside class="box_avatar">
                                        <a class="avatar" href="#"><img src="assets/images/avatar.png" alt="user"></a>
                                        <h2 class="about_me_heading">
                                            <input class="form-control" type="text" name="" value="" placeholder="例) 山本 太郎">
                                        </h2>
                                        <p><input class="form-control" type="text" name="" value="" placeholder="例) Yamamoto Taro"></p>
                                    </aside>

                                    <a href="#" class="btn btn_inquiry btn_inquiry2">お問い合わせ</a>
                                    <a href="#" class="btn btn_showdetail">詳細を見る <img class="bounce" src="assets/images/chevrons-down.svg" alt="chevrons down"></a>

                                    <div id="box_detail" class="box_detail">
                                        <aside class="box_info">
                                            <p class="box_logo">
                                                <a class="logo" href="#"><img src="assets/images/vision_logo.png" alt="vision_logo"></a>
                                            </p>

                                            <div class="form_group"><span>部署</span> <input type="text" name="" value="" placeholder="例) 営業部"></div>
                                            <div class="form_group"><span>役職</span> <input type="text" name="" value="" placeholder="例) 課長"></div>
                                            <ul class="info">
                                                <li>
                                                    <img src="assets/images/phone.svg" alt="phone">
                                                    <input type="text" name="" value="" placeholder="例) 03-xxxx-xxxx">
                                                </li>
                                                <li>
                                                    <img src="assets/images/smartphone.svg" alt="smartphone">
                                                    <input type="text" name="" value="" placeholder="例) 090-xxxx-xxxx">
                                                </li>
                                                <li>
                                                    <img src="assets/images/mail.svg" alt="mail">
                                                    <input type="text" name="" value="" placeholder="例) xxxx@mail.com">
                                                </li>
                                            </ul>
                                            <a href="#" class="btn btn_inquiry mb-0">お問い合わせ</a>

                                            <div class="box_indicate">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">表示する</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">表示しない</label>
                                                </div>
                                            </div>

                                            <div class="form_group"><span>生年月日</span> <input type="text" name="" value="" placeholder="例) 1990年4月1日"></div>
                                            <div class="form_group"><span>出身地</span> <input type="text" name="" value="" placeholder="例) 神奈川県"></div>
                                            <div class="form_group"><span>出身校</span> <input type="text" name="" value="" placeholder="例) ○○大学"></div>
                                            <div class="form_group"><span>趣味</span> <input type="text" name="" value="" placeholder="例) 読書、映画"></div>
                                            <div class="form_group"><span>特技</span> <input type="text" name="" value="" placeholder="例) テニス"></div>

                                            <p class="about_me_desc mb-0">
                                                <textarea rows="" cols="" class="form-control" placeholder="自由テキスト欄"></textarea>
                                            </p>

                                        </aside>

                                        <a href="#" class="btn btn_close">閉じる <img class="bounce" src="assets/images/chevrons-up.svg" alt="chevrons up"></a>

                                    </div>


                                </div>

                                <div class="main_right template2 admin">
                                    <article class="standard_article" data-aos="fade-up">
                                        <h2>
                                            <input type="text" class="form-control" placeholder="見出し">
                                        </h2>

                                        <div class="standard_post_main_img">
                                            <h3><img src="assets/images/i_collection.svg" alt="collection icon" width="31"> メインイメージ</h3>
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/01.jpg" alt="01"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/02.jpg" alt="02"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/03.jpg" alt="03"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/04.jpg" alt="04"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/05.jpg" alt="05"></a>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>ファイルを選択</span>
                                                        </p>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="box_reverse">
                                            <textarea class="form-control" rows="" cols="" placeholder="例）製品・サービスなどについての説明。"></textarea>
                                            <div class="text_link">
                                                <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                                                <div class="box_link">
                                                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                                </div>
                                            </div>
                                            <button class="btn btn_addlink" type=""><img src="assets/images/i_plus_circle.svg" alt="plus circle" width="20"> リンクを追加する</button>
                                        </div>

                                        <div class="box_material_content">
                                            <ul>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                            </ul>
                                            <button class="btn btn_addlink" type=""><img src="assets/images/i_plus_circle.svg" alt="plus circle" width="20"> 動画・資料を追加する</button>
                                            <hr>
                                            <button class="btn btn_addlink active" type=""><img src="assets/images/i_plus_circle_white.svg" alt="plus circle" width="20"> ブロックを追加する</button>
                                        </div>

                                    </article>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

    <?php require 'footer.php'; ?>
    <?php require 'js-footer.php'; ?>
</body>

</html>