<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <header class="text-start">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>ブログタイトルが入ります</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main_content template2">

                            <div class="main_left">
                                <div class="box_avatar">
                                    <a class="avatar" href="#"><img src="assets/images/avatar.png" alt="user"></a>
                                    <h2 class="about_me_heading">山田 一郎</h2>
                                    <p>Ichiro Yamada</p>
                                </div>

                                <a href="#" class="btn btn_inquiry btn_inquiry2">お問い合わせ</a>
                                <a href="#" class="btn btn_showdetail">詳細を見る <img class="bounce" src="assets/images/chevrons-down.svg" alt="chevrons down"></a>

                                <div id="box_detail" class="box_detail">
                                    <aside class="box_info">
                                        <p class="box_logo">
                                            <a class="logo" href="#"><img src="assets/images/vision_logo.png" alt="vision_logo"></a>
                                            <a target="_blank" href="https://www.vision-net.co.jp/" class="linkweb">株式会社ビジョン</a>
                                        </p>

                                        <p><span>部署</span> Webプロデュース事業部</p>
                                        <p><span>役職</span> Web Director</p>

                                        <ul class="info">
                                            <li><img src="assets/images/phone.svg" alt="phone"> <a href="tel:0368978580">03-6897-8580</a></li>
                                            <li><img src="assets/images/smartphone.svg" alt="smartphone"> <a href="tel:08046225219">+81 080‐4622‐5219</a></li>
                                            <li><img src="assets/images/mail.svg" alt="mail"> <a href="mailto:saito-masayuki@propolife.co.jp">saito-masayuki@propolife.co.jp</a></li>
                                        </ul>
                                        <a href="#modal_inquiry" class="btn btn_inquiry" data-bs-toggle="modal">お問い合わせ</a>

                                        <div class="box_personal_data mb-4">
                                            <div class="form_group form_group_infomation">
                                                <span class="label_input_profile">出身地</span>
                                                <div class="">
                                                    <p class="profile_content">埼玉県</p>
                                                </div>
                                            </div>
                                            <div class="form_group form_group_infomation">
                                                <span class="label_input_profile">出身校</span>
                                                <div class="">
                                                    <p class="profile_content"> 早稲田大学</p>
                                                </div>
                                            </div>
                                            <div class="form_group form_group_infomation">
                                                <span class="label_input_profile">趣味</span>
                                                <div class="">
                                                    <p class="profile_content">家事、子育て</p>
                                                </div>
                                            </div>
                                            <div class="form_group form_group_infomation personal_data">
                                                <span class="label_input_profile">特技</span>
                                                <div class="">
                                                    <p class="profile_content">ToShi</p>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="about_me_desc">埼玉生まれ埼玉育ち<br>
                                            （志木市出身、中学は浦和、高校は本庄）<br>
                                            休日はもうすぐ9歳になる双子男子の相手に奔走中。<br>
                                            （片方は野球少年に育ち、片方はまさかの超インドア派…）<br>
                                            なんと長女は21歳、イギリスはニューカッスルに留学中。<br>
                                            （羨ましい…）<br>
                                            将来は軽井沢でリスに囲まれて暮らす予定。<br>
                                            <br>
                                            ▼オフィシャルな自己紹介はこちら<br>
                                            2006年、早稲田大学政治経済学部を卒業後、東日本電信電話株式会社（NTT東日本）に入社。在籍13年間でBtoB領域でのサービス開発・営業企画・プロモーション・ビッグデータ分析等の業務を幅広く経験。<br>
                                            2019年7月より株式会社シーズ・リンクに入社。動画×Web×資料のデジタルコンテンツプラットフォーム「riclink」の提供を通じ、企業のあらゆる場面でのデジタル発信・DX推進を支援。2020年9月から現職に就任。
                                        </p>



                                    </aside>

                                    <div class="modal fade modal_inquiry" id="modal_inquiry" tabindex="-1" aria-labelledby="inquiry_label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title" id="inquiry_label">お問合せ</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    <p>ご相談・ご依頼や資料請求について、お問い合わせフォームよりお気軽にお問い合わせください。</p>
                                                    <p><span class="red">※</span> は必須項目です。</p>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form_group">
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-lg-3">
                                                                <label for="お名前">お名前 <span class="red">※</span></label>
                                                            </div>
                                                            <div class="col-12 col-lg-9">
                                                                <input class="form-control" type="text" name="" placeholder="例：山田一郎">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-lg-3">
                                                                <label for="会社名">会社名 <span class="red">※</span></label>
                                                            </div>
                                                            <div class="col-12 col-lg-9">
                                                                <input class="form-control" type="text" name="" placeholder="例：株式会社〇〇〇〇〇〇">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-lg-3">
                                                                <label for="話番号">話番号 <span class="red">※</span></label>
                                                            </div>
                                                            <div class="col-12 col-lg-9">
                                                                <input class="form-control" type="number" name="" placeholder="例：0312341234　(※ハイフンなしでご記入ください)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-lg-3">
                                                                <label for="メールアドレス">メールアドレス <span class="red">※</span></label>
                                                            </div>
                                                            <div class="col-12 col-lg-9">
                                                                <input class="form-control" type="email" name="" placeholder="例：xxxxxxx@logrenove.jp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-3">
                                                                <label for="お問い合わせ内容">お問い合わせ内容 <span class="red">※</span></label>
                                                            </div>
                                                            <div class="col-12 col-lg-9">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="ck_contentinquiry" id="flexCheckDefault1">
                                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                                        資料請求したい
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="ck_contentinquiry" id="flexCheckDefault2">
                                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                                        〇〇〇〇したい
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="ck_contentinquiry" id="flexCheckDefault3">
                                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                                        〇〇〇〇をしたい
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="ck_contentinquiry" id="flexCheckDefault4">
                                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                                        その他お問い合わせ
                                                                    </label>
                                                                </div>
                                                                <textarea class="form-control" rows="" cols="" placeholder="ご質問やご要望をご記入ください。"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <p class="box_agree">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                            個人情報の取扱に関しましては <a target="_blank" href="#">プライバシーポリシー</a> をご覧ください。<br>
                                                            ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                                        <div class="form-check form_check_agree">
                                                            <input class=" form-check-input" type="checkbox" name="cb_agree" id="cb_agree_label" checked>
                                                            <label class="form-check-label" for="cb_agree_label">
                                                                同意する
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn_Submit">上記に同意して確認画面へ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <aside class="box_social">
                                        <a href="#" class="btn_social"><img src="assets/images/X.svg" alt="twitter logo"> Twitter</a>
                                        <a href="#" class="btn_social"><img src="assets/images/instagram.svg" alt="instagram logo"> Instagram</a>
                                    </aside> -->
                                    <a href="#" class="btn btn_close">閉じる <img class="bounce" src="assets/images/chevrons-up.svg" alt="chevrons up"></a>




                                </div>
                            </div>


                            <div class="main_right template2">
                                <article class="standard_article" data-aos="fade-up">
                                    <h2>タイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入ります...</h2>
                                    <p class="entry_date">2023.10.6</p>
                                    <div class="standard_post_img">
                                        <a href="assets/images/img01.jpg" data-fancybox data-caption="img01"><img class="img-fluid" src="assets/images/img01.jpg" alt="img01"></a>
                                    </div>

                                    <div class="box_reverse">
                                        <div class="standard_content">
                                            <p>商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト。</p>
                                        </div>

                                        <div class="standard_download">
                                            <ul>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <ul class="standard_list_video">
                                        <li>
                                            <div class="box_video">
                                                <a href="assets/images/video.jpg" data-fancybox="gallery_video">
                                                    <img class="img-fluid" src=" assets/images/video.jpg" alt="video">
                                                </a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                    </ul>

                                </article>

                                <article class="standard_article" data-aos="fade-up">
                                    <h2>タイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入ります...</h2>
                                    <p class="entry_date">2023.10.6</p>
                                    <div class="standard_post_img">
                                        <a href="assets/images/img01.jpg" data-fancybox data-caption="img01"><img class="img-fluid" src="assets/images/img01.jpg" alt="img01"></a>
                                    </div>

                                    <div class="box_reverse">
                                        <div class="standard_content">
                                            <p>商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト商品説明テキスト。</p>
                                        </div>
                                        <div class="standard_download">
                                            <ul>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                                <li>
                                                    <p>リンク用テキストが入りますリンク用テキストが入りますリンク用テキストが入ります。</p>
                                                    <a class="btn" href="#"><img src="assets/images/download.svg" alt="Download" width="14"> Download</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <ul class="standard_list_video">
                                        <li>
                                            <div class="box_video">
                                                <a href="assets/images/video.jpg" data-fancybox="gallery_video">
                                                    <img class="img-fluid" src=" assets/images/video.jpg" alt="video">
                                                </a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                        <li>
                                            <div class="box_video">
                                                <a href="#" data-fancybox="gallery_video"></a>
                                            </div>
                                            <p>資料テキストが入ります資料テキストが入ります資料テキストが入ります。</p>
                                        </li>
                                    </ul>

                                </article>

                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php require 'footer.php'; ?>
    <?php require 'js-footer.php'; ?>
</body>

</html>