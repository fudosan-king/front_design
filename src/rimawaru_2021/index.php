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
                            <h2 class="title">出資者基本情報登録</h2>
                            <h3 class="title_sub">フォームに必要事項をご入力ください。</h3>
                            <div class="box_content">
                                <form class="frm_investerinfo">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">メールアドレス</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" placeholder="◯◯◯◯◯◯@xxxxxxxx.jp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">本名</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <input type="text" class="form-control mr-2" placeholder="山田">
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <input type="text" class="form-control" placeholder="太郎">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">本名（カナ）</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row">
                                                    <div class="col-6 col-lg-6">
                                                        <input type="text" class="form-control" placeholder="ヤマダ">
                                                    </div>
                                                    <div class="col-6 col-lg-6">
                                                        <input type="text" class="form-control" placeholder="タロウ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">性別</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1">男性</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">女性</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">生年月日</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" placeholder="数字8桁で入力（例：19800511）">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">生年月日</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row">
                                                    <div class="col-7 col-lg-6 align-self-center">
                                                        <input type="text" class="form-control" placeholder="1234567">
                                                    </div>
                                                    <div class="col-5 col-lg-6 align-self-center">
                                                        <a class="zipcode_auto font-weight-bold" href="#"><img src="images/svg/arrow_right.svg" alt="" class="img-fluid mr-2" width="20"> 郵便番号から住所を自動的入力</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">都道府県</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <select name="" class="custom-select">
                                                    <option value="">都道府県を選択してください</option>
                                                    <option value="">...</option>
                                                    <option value="">...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">市区町村</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">番地</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">建物名・号室</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" placeholder="00000000000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label for="">電話番号</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" placeholder="◯◯◯◯◯◯@xxxxxxxx.jp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 align-self-center">
                                                <label for="">確認書面</label>
                                            </div>
                                            <div class="col-12 col-lg-9 align-self-center">
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">電子交付に関する同意</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">反社勢力でない事の表明・確約に関する同意</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">個人情報の取扱いに関する同意</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <button type="submit" class="btn btn_confirm">確認画面へ</button>
                                            </div>
                                        </div>
                                    </div>



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