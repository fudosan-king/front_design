<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>

        <?php require('header.php'); ?>

        <main>
            <section class="section_search bg-white mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            
                            <h1>ご希望の物件をお探しします</h1>
                            <form class="frm_mansions mt-0" action="search_conditions_confirm.php">
                                <div class="frm_mansions_content">
                                    <div class="form-group">
                                        <table class="table table-condensed table-bordered">
                                            <tr>
                                                <th width="33%">お名前</th>
                                                <td colspan="2">Do Van</td>
                                            </tr>
                                            <tr>
                                                <th>電話番号</th>
                                                <td colspan="2">09012345678</td>
                                            </tr>
                                            <tr>
                                                <th>メールアドレス</th>
                                                <td colspan="2">logrenove@propolife.co.jp</td>
                                            </tr>
                                            <tr>
                                                <th>希望エリア１</th>
                                                <td colspan="2">六本木・赤坂・青山</td>
                                            </tr>
                                            <tr>
                                                <th>希望エリア2</th>
                                                <td colspan="2">表参道・原宿</td>
                                            </tr>
                                            <tr>
                                                <th>希望エリア3</th>
                                                <td colspan="2">麻布・広尾</td>
                                            </tr>
                                            <tr>
                                                <th>希望価格</th>
                                                <td>8000万円</td>
                                                <td>9000万円</td>
                                            </tr>
                                            <tr>
                                                <th>希望面積</th>
                                                <td>70㎡</td>
                                                <td>80㎡</td>
                                            </tr>
                                            <tr>
                                                <th>備考</th>
                                                <td colspan="2">その他物件のご紹介にあたりご要望事項があればご記入ください</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="form-group text-center w_btnAgree">
                                        <div class="row">
                                            <div class="col-6 col-lg-6">
                                                <button type="button" class="btn btnAgree custom w-100" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                                            </div>
                                            <div class="col-6 col-lg-6">
                                                <button type="button" class="btn btnAgree" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
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