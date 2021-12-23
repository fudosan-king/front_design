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
                            <ul class="steps">
                                <li class="actived">
                                    <a href="registration.php">
                                        <span>1</span>
                                        <span>投資家情報登録</span>
                                    </a>
                                </li>
                                <li class="actived">
                                    <a href="identity_verification.php">
                                        <span>2</span>
                                        <span>本人確認書類登録</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="refund.php">
                                        <span>3</span>
                                        <span>払戻し口座情報登録</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="confirmation.php">
                                        <span>4</span>
                                        <span>確認画面</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="completed.php">
                                        <span>5</span>
                                        <span>申請完了</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <h2 class="title">払戻し口座情報登録</h2>
                            <h3 class="title_sub">払い戻し金の振込先をご登録ください。</h3>

                            <form class="frm_investerinfo">

                                <div class="card">
                                    <div class="card-header">
                                        出資者基本情報
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="40%">メールアドレス</th>
                                                <td>◯◯◯◯◯◯@xxxxxxxx.jp</td>
                                            </tr>
                                            <tr>
                                                <th>本名</th>
                                                <td>山田　太郎</td>
                                            </tr>
                                            <tr>
                                                <th>本名（カナ）</th>
                                                <td>ヤマダ　タロウ</td>
                                            </tr>
                                            <tr>
                                                <th>性別</th>
                                                <td>男性</td>
                                            </tr>
                                            <tr>
                                                <th>生年月日</th>
                                                <td>1980年1月31日</td>
                                            </tr>
                                            <tr>
                                                <th>住所</th>
                                                <td>100-0001　東京都港区北青山1-1-1ダイハンビル　101</td>
                                            </tr>
                                            <tr>
                                                <th>電話番号</th>
                                                <td>03-0000-11111</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        払い戻し口座情報の登録
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">金融機関名</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select name="" class="custom-select">
                                                        <option value="">選択してください</option>
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">支店名</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">支店番号</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control" placeholder="00000000000000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">口座種類</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select name="" class="custom-select">
                                                        <option value="">選択してください</option>
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">口座番号</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control" placeholder="0000000000000000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">口座名義</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select name="" class="custom-select">
                                                        <option value="">ヤマダタロウ</option>
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <p class="text-center mb-5">
                                            <a href="identity_verification.php" class="btn btn_gray mr-0 mr-lg-3 mb-2">戻る</a>
                                            <a href="confirmation.php" class="btn btn_green mb-2">確認画面に進む</a>
                                        </p>
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