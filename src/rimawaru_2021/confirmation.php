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
                                <li class="actived">
                                    <a href="refund.php">
                                        <span>3</span>
                                        <span>払戻し口座情報登録</span>
                                    </a>
                                </li>
                                <li class="active">
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
                            
                            <h2 class="title">確認画面</h2>
                            <h3 class="title_sub">まだ申請は完了しておりません。<br>
                            ご記入内容に問題がないかご確認の上、申請するボタンをクリックしてください　</h3>

                            <form class="frm_investerinfo">

                                <div class="card mb-0">
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
                                <div class="card mb-0">
                                    <div class="card-header">
                                        出資者情報
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="40%">職業</th>
                                                <td>会社役員</td>
                                            </tr>
                                            <tr>
                                                <th>勤務先</th>
                                                <td>株式会社プロスタイル</td>
                                            </tr>
                                            <tr>
                                                <th>年収</th>
                                                <td>1500万円</td>
                                            </tr>
                                            <tr>
                                                <th>投資目的</th>
                                                <td>老後の資金として</td>
                                            </tr>
                                            <tr>
                                                <th>投資方針</th>
                                                <td>ハイリスクハイリターン</td>
                                            </tr>
                                            <tr>
                                                <th>投資経験</th>
                                                <td>株式投資を10年以上</td>
                                            </tr>
                                            <tr>
                                                <th>投資資金の種類</th>
                                                <td>現金</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header">
                                        本人確認書類の登録
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="40%">書類タイプ</th>
                                                <td>運転免許証</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header">
                                        払い戻し口座情報の登録
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="40%">金融機関名</th>
                                                <td>みずほ銀行</td>
                                            </tr>
                                            <tr>
                                                <th width="40%">支店情報</th>
                                                <td>001　表参道支店</td>
                                            </tr>
                                            <tr>
                                                <th width="40%">口座情報</th>
                                                <td>普通　1111111</td>
                                            </tr>
                                            <tr>
                                                <th width="40%">口座名義人</th>
                                                <td>ヤマダ　タロウ</td>
                                            </tr>
                                        </table>
                                        <div class="custom-control custom-checkbox text-center mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">上記の内容は私の投資家情報として相違ありません</label>
                                        </div>

                                        <p class="text-center mb-5">
                                            <a href="refund.php" class="btn btn_gray mr-0 mr-lg-3 mb-2">戻る</a>
                                            <a href="completed.php" class="btn btn_green mb-2">この内容で申請する</a>
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