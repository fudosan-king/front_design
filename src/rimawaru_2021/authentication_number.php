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
                            <h2 class="title">認証番号の照会</h2>
                            <h3 class="title_sub">はがきに記載の〇桁の数字を入力ください</h3>

                            <div class="box_content">
                                <form action="" class="frm_authenticationnumber">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <label class="mb-lg-0" for="">認証番号</label>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <input type="text" class="form-control" placeholder="◯◯◯◯◯◯">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-5 text-center"><button type="submit" class="btn btn_green">照合する</button></p>
                                </form>
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