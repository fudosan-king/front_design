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
                            <h2 class="title mb-3">パスワード設定</h2>
                        </div>
                    </div>
                </section>

                <section class="section_pass">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <form action="" class="frm_settingpass">
                                    <div class="form-group">
                                        <label for="">パスワード（英数字８文字以上）</label>
                                        <input type="text" class="form-control" placeholder="anh-n@propolife.co.jp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">パスワード（再入力）</label>
                                        <input type="text" class="form-control" placeholder="anh-n@propolife.co.jp">
                                    </div>
                                    <button type="submit" class="btn btnsave">保存</button>
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