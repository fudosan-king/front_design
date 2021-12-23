<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>

            <section class="section_template">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0">
                                    <li>はがきに記載された番号の登録をお願いします</li>
                                    <li>お申込みいただいたファンドの入金をお願いします（2021/10/14 23:59まで）</li>
                                    <li>〇〇の機能を追加いたしました。</li>
                                </ul>
                            </div>

                            <div class="accordion accordion_investorinfo" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                投資家情報登録
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="box_assets">
                                                <div class="row mb-3">
                                                    <div class="col-12 col-lg-4 align-self-center">
                                                        <h4>資産総額</h4>
                                                    </div>
                                                    <div class="col-12 col-lg-8 align-self-center">
                                                        <h2>125,000,000円 </h2>
                                                        <p>+50,000円 (5.00%)</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 align-self-center">
                                                        <h4>資産総額</h4>
                                                    </div>
                                                    <div class="col-12 col-lg-8 align-self-center">
                                                        <div class="box_totalassets">
                                                            <div class="mr-0 mr-lg-5">
                                                                <h2>125,000,000円 </h2>
                                                                <p>+50,000円 (5.00%)</p>
                                                            </div>
                                                            <a href="#" class="btn btn_payment">入金</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                今後1年の配当予定
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 col-lg-6">
                                                    <p><b>2021年10月</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p class="text-right"><b>10,000円</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p><b>2021年11月</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p class="text-right"><b>10,000円</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p><b>2021年12月</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p class="text-right"><b>10,000円</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p><b>2022年01月</b></p>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <p class="text-right"><b>10,000円</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>