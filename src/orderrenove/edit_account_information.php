<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header2.php') ?>

        <main>
            <div class="box_template">
                <section class="p-0">
                    <div class="box_top mb-0">
                        <div class="container">
                            <h2 class="title mb-0">会員登録情報の変更</h2>
                        </div>
                    </div>
                </section>

                <section class="section_accinfo bg-white pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <form class="frm_accinfo">
                                    <h4>名前 <span>必須</span></h4>
                                    <div class="row">
                                        <div class="col-6 col-lg-6 align-self-center">
                                            <input type="text" class="form-control" placeholder="ゴチャンユイ">
                                        </div>
                                        <div class="col-6 col-lg-6 align-self-center">
                                            <input type="text" class="form-control" placeholder="アイン">
                                        </div>
                                    </div>
                                    <h4>メールアドレス <span>必須</span></h4>
                                    <input type="text" class="form-control" placeholder="anh-n@propolife.co.jp">
                                    <h4>電話番号</h4>
                                    <input type="text" class="form-control" placeholder="080-3179-2609">
                                    <h4>携帯番号</h4>
                                    <input type="text" class="form-control" placeholder="080-3179-2609">
                                    <h4>生年月日</h4>
                                    <div class="row">
                                        <div class="col-4 col-lg-4">
                                            <div class="box_date">
                                                <input type="text" class="form-control datepicker_year" placeholder="2000">
                                                <span>年</span>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <div class="box_date">
                                                <input type="text" class="form-control datepicker_month" placeholder="11">
                                                <span>年</span>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <div class="box_date">
                                                <input type="text" class="form-control datepicker_day" placeholder="01">
                                                <span>日</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>メルマガ配信希望条件</h4>
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-4 align-self-center">
                                            <p class="head">エリア：</p>
                                        </div>
                                        <div class="col-4 col-lg-4 align-self-center">
                                            <p>設定無し</p>
                                        </div>
                                        <div class="col-4 col-lg-4 align-self-center">
                                            <a href="edit_account_information.php" class="btn btnedit">設定</a>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <p class="head">広さ：</p>
                                        </div>
                                        <div class="col-8 col-lg-8">
                                            <p>設定無し</p>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <p class="head">価格：</p>
                                        </div>
                                        <div class="col-8 col-lg-8">
                                            <p>設定無し</p>
                                        </div>
                                    </div>
                                    <h4>パスワード</h4>
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-4 align-self-center">
                                            <p class="head">未設定</p>
                                        </div>
                                        <div class="col-8 col-lg-8 align-self-center">
                                            <a href="edit_account_information.php" class="btn btnedit">設定</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btnsave my-5">保存</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>