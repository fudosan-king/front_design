<!doctype html>
<html lang="en">
<?php include('head.php'); ?>

<body>

    <?php require('header.php'); ?>

    <main class="bg-white mail-magazine">
        <section class="section_banner banner_mailmagazine">
            <img src="images/bg_mailmagazine.jpg" alt="bg_mailmagazine" class="img-fluid">
        </section>

        <section class="section_mailmagazine pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top_form col-12">
                            <div class="top_form_left col-12 col-md-6">
                                <img src="images/mailmagazine_1.png" alt="mailmagazine_1" class="img-fluid">
                                <img src="images/mailmagazine_2.png" alt="mailmagazine_2" class="img-fluid">
                                <img src="images/mailmagazine_3.png" alt="mailmagazine_3" class="img-fluid">
                                <img src="images/mailmagazine_4.png" alt="mailmagazine_4" class="img-fluid">
                            </div>
                            <div class="top_form_right col-12 col-md-6">
                                <h2 class="text-left">そんなあなたのための<br />メールマガジンです</h2>
                                <p class="text-left">新着の物件情報をいち早くお届け！<br />
                                    <span class="d-block d-lg-inline-block">最新の情報を見逃しません。</span>
                                </p>
                            </div>
                        </div>
                        <form action="https://form.run/api/v1/r/kpkk8dkqhsanp9zljwumqyp3" class="frm_registration"
                            method="post">
                            <div class="frm-input input-email">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <label for="">メールアドレス（半角英数字）</label>
                                        </div>
                                        <div class="col-3 col-lg-1 align-self-center text-right text-lg-left">
                                            <span class="label_sub mb-3 mb-lg-0">必須</span>
                                        </div>
                                        <div class="col-9 col-lg-11 align-self-center">
                                            <input type="text" name="email" placeholder="例：xxxxxxx@logrenove.jp"
                                                class="form-control required">
                                        </div>

                                    </div>
                                </div>
                                <div class="box_content_footer">
                                    <p class="primary_policy text-center"><span
                                            class="d-lg-block">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。</span>
                                        <span class="d-lg-block">個人情報の取扱に関しましては <a class="btn-link"
                                                href="https://www.propolife.co.jp/privacypolicy/" target="_blank"
                                                rel="noopener noreferrer"><b>プライバシーポリシー</b></a> をご覧ください。</span>
                                        <span
                                            class="d-block d-lg-inline-block">ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</span>
                                    </p>

                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="ck_agree" class="custom-control-input required"
                                                id="ck_agree">
                                            <label class="custom-control-label font-weight-normal ck_agree"
                                                for="ck_agree">同意する</label>
                                        </div>
                                        <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center"
                                            style="border-bottom: none;">
                                            <div id="recaptcha" class="g-recaptcha"
                                                data-sitekey="6LewgIcaAAAAAGzDtm7uDXKs0OLDlHAOIa6_ybfT" align="center">
                                                <div style="width: 304px; height: 78px;">
                                                    <div><iframe title="reCAPTCHA"
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LewgIcaAAAAAGzDtm7uDXKs0OLDlHAOIa6_ybfT&amp;co=aHR0cHM6Ly93d3cubG9ncmVub3ZlLmpwOjQ0Mw..&amp;hl=ja&amp;v=6MY32oPwFCn9SUKWt8czDsDw&amp;size=normal&amp;cb=lle894tht9cq"
                                                            width="304" height="78" role="presentation"
                                                            name="a-yft30rsynjyi" frameborder="0" scrolling="no"
                                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div><textarea id="g-recaptcha-response"
                                                        name="g-recaptcha-response" class="g-recaptcha-response"
                                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                </div><iframe style="display: none;"></iframe>
                                            </div>
                                        </dd>

                                        <!-- ボット投稿をブロックするためのタグ -->
                                        <div class="_formrun_gotcha">
                                            <style media="screen">
                                            ._formrun_gotcha {
                                                position: absolute !important;
                                                height: 1px;
                                                width: 1px;
                                                overflow: hidden;
                                            }
                                            </style>
                                            <label for="_formrun_gotcha">If you are a human, ignore this field</label>
                                            <input type="text" name="_formrun_gotcha" id="_formrun_gotcha"
                                                tabindex="-1">
                                        </div>

                                        <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して登録する <i
                                                class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- confirm -->
                            <div class="frm_general_content frm_confirm" style="display: none">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>メールアドレス</label>
                                            </td>
                                            <td id="email" class="confirm-text"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>興味のあるサービス</label>
                                            </td>
                                            <td id="service" class="confirm-text"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="box_content_footer mt-4">
                                    <div class="form-group text-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <button type="submit" class="btn btnAgree" id="btnBack"><i
                                                        class="i_rightwhite rotate"></i> 戻る</button>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i
                                                        class="i_rightwhite"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_carefully pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 carefully_top">
                            <div class="col-12 col-md-6 carefully_top_title">
                                <h2 class="text-left">最新物件の中から<br class="d-none d-md-block" />リノベ専門スタッフが厳選して<br class="d-none d-md-block" />お送りします。</h2>
                                <span class="d-block d-lg-inline-block">毎日サイトを確認することなく、素敵な物件と出会うことができます。</span>
                            </div>
                            <img src="images/mailmagazine_5.png" alt="mailmagazine_5" class="img-fluid col-12 col-sm-6">
                        </div>
                        <div class="col-12 carefully_content">
                            <div class="content_top_des">
                                <span>あなたが理想の物件に出会えるようにこれまで</span>
                                <span class="top_des_highlight">15年以上、のべ2,000以上のリノベーション物件を手掛けてきた専門スタッフ</span>
                                <span>が厳選して物件をお選びます。</span>
                            </div>
                            <div class="content_list_selection">
                                <span>具体的にどんな基準で厳選しているかというと…</span>
                                <ul>
                                    <li>エリア相場に対して、お求めやすい価格の物件情報</li>
                                    <li>ファミリーにオススメの広さ、防音性に特化した物件情報 </li>
                                    <li>テラスやルームバルコニーといった生活が豊かになる物件情報　etc… </li>
                                </ul>
                            </div>
                            <div class="content_bottom_des">
                                <span class="top_des_highlight">不動産会社独自の目線から</span>
                                <span>配信するので、あなたはホームページを長い時間かけてみることはなく、より好みの物件に出会うことができるでしょう。</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section_mailmagazine pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top_form col-12">
                            <div class="top_form_right col-12 text-center">
                                <h2>メルマガに登録して<br />今すぐ厳選物件情報を確認する！
                                    <img src="images/mailmagazine_6.png" alt="mailmagazine_6" class="img-fluid">
                                </h2>
                            </div>
                        </div>
                        <form action="https://form.run/api/v1/r/kpkk8dkqhsanp9zljwumqyp3" class="frm_registration"
                            method="post">
                            <div class="frm-input input-email">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <label for="">メールアドレス（半角英数字）</label>
                                        </div>
                                        <div class="col-3 col-lg-1 align-self-center text-right text-lg-left">
                                            <span class="label_sub mb-3 mb-lg-0">必須</span>
                                        </div>
                                        <div class="col-9 col-lg-11 align-self-center">
                                            <input type="text" name="email" placeholder="例：xxxxxxx@logrenove.jp"
                                                class="form-control required">
                                        </div>

                                    </div>
                                </div>
                                <div class="box_content_footer">
                                    <p class="primary_policy text-center"><span
                                            class="d-lg-block">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。</span>
                                        <span class="d-lg-block">個人情報の取扱に関しましては <a class="btn-link"
                                                href="https://www.propolife.co.jp/privacypolicy/" target="_blank"
                                                rel="noopener noreferrer"><b>プライバシーポリシー</b></a> をご覧ください。</span>
                                        <span
                                            class="d-block d-lg-inline-block">ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</span>
                                    </p>

                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="ck_agree" class="custom-control-input required"
                                                id="ck_agree">
                                            <label class="custom-control-label font-weight-normal ck_agree"
                                                for="ck_agree">同意する</label>
                                        </div>
                                        <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center"
                                            style="border-bottom: none;">
                                            <div id="recaptcha" class="g-recaptcha"
                                                data-sitekey="6LewgIcaAAAAAGzDtm7uDXKs0OLDlHAOIa6_ybfT" align="center">
                                                <div style="width: 304px; height: 78px;">
                                                    <div><iframe title="reCAPTCHA"
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LewgIcaAAAAAGzDtm7uDXKs0OLDlHAOIa6_ybfT&amp;co=aHR0cHM6Ly93d3cubG9ncmVub3ZlLmpwOjQ0Mw..&amp;hl=ja&amp;v=6MY32oPwFCn9SUKWt8czDsDw&amp;size=normal&amp;cb=lle894tht9cq"
                                                            width="304" height="78" role="presentation"
                                                            name="a-yft30rsynjyi" frameborder="0" scrolling="no"
                                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div><textarea id="g-recaptcha-response"
                                                        name="g-recaptcha-response" class="g-recaptcha-response"
                                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                </div><iframe style="display: none;"></iframe>
                                            </div>
                                        </dd>

                                        <!-- ボット投稿をブロックするためのタグ -->
                                        <div class="_formrun_gotcha">
                                            <style media="screen">
                                            ._formrun_gotcha {
                                                position: absolute !important;
                                                height: 1px;
                                                width: 1px;
                                                overflow: hidden;
                                            }
                                            </style>
                                            <label for="_formrun_gotcha">If you are a human, ignore this field</label>
                                            <input type="text" name="_formrun_gotcha" id="_formrun_gotcha"
                                                tabindex="-1">
                                        </div>

                                        <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して登録する <i
                                                class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- confirm -->
                            <div class="frm_general_content frm_confirm" style="display: none">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>メールアドレス</label>
                                            </td>
                                            <td id="email" class="confirm-text"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>興味のあるサービス</label>
                                            </td>
                                            <td id="service" class="confirm-text"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="box_content_footer mt-4">
                                    <div class="form-group text-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <button type="submit" class="btn btnAgree" id="btnBack"><i
                                                        class="i_rightwhite rotate"></i> 戻る</button>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i
                                                        class="i_rightwhite"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('footer.php') ?>

    <?php include('js-footer.php') ?>
</body>

</html>