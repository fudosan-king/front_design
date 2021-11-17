<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>
            <div class="row" id="body-row">
                <?php require('sidebar.php'); ?>


                <div class="col main_content">
                    <div class="main_header">
                        <h2 class="title"><img src="images/common/svg/i_setting.svg" alt="" class="img-fluid" width="25"><span>設定</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-basic_configuration-tab" data-toggle="tab" href="#nav-basic_configuration" role="tab" aria-controls="nav-basic_configuration" aria-selected="true">基本設定</a>
                                <a class="nav-link" id="nav-corporate_settings-tab" data-toggle="tab" href="#nav-corporate_settings" role="tab" aria-controls="nav-corporate_settings" aria-selected="false">企業設定</a>
                                <a class="nav-link" id="nav-value_setting-tab" data-toggle="tab" href="#nav-value_setting" role="tab" aria-controls="nav-value_setting" aria-selected="false">値設定</a>
                            </div>
                        </nav>
                    </div>

                    <div class="main_body">

                        <div class="box_content p-0 mt-0">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-basic_configuration" role="tabpanel" aria-labelledby="nav-basic_configuration-tab">
                                    <div class="box_content">
                                        <form action="" class="frm_basic_configuration">
                                            <div class="frm_basic_configuration_content">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">言語</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <select name="" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">単位</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadioInline1">ミリメートル</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline2">センチメートル</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline3">メートル</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">面積</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadioInline4">平米</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline5">畳</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">グリッド３D</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline6" name="customRadioInline3" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadioInline6">表示</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline7" name="customRadioInline3" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline7">非表示</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        <label for="">一人称視点</label>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="form-group">
                                                            <div class="box_height">
                                                                <span>身長</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">照明色を設定</label>
                                                            <span class="color-picker">
                                                                <label for="colorPicker">
                                                                    <input type="color" value="#C4C4C4" id="colorPicker">
                                                                </label>
                                                            </span>
                                                            <input type="text" class="js-range-slider" name="my_range" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Set angle camera first person</label>
                                                            <input type="text" class="js-range-slider2" name="my_range" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">#Dカメラ角度</label>
                                                            <input type="text" class="js-range-slider3" name="my_range" value="">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">サイズ表示</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline8" name="customRadioInline4" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadioInline8">表示</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline9" name="customRadioInline4" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline9">非表示</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 align-self-center">
                                                            <label for="">Directional Light</label>
                                                        </div>
                                                        <div class="col-12 col-lg-9 align-self-center">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline10" name="customRadioInline5" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadioInline10">表示</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline11" name="customRadioInline5" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline11">非表示</label>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label class="d-block" for="">Set directional light color </label>
                                                                <span class="color-picker">
                                                                    <label for="colorPicker">
                                                                        <input type="color" value="#C4C4C4" id="colorPicker">
                                                                    </label>
                                                                </span>
                                                                <input type="text" class="js-range-slider4" name="my_range" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mt-5">
                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        
                                                    </div>
                                                    <div class="col-12 col-lg-9 text-center">
                                                        <a href="#" class="btn btn_keep">保存</a>
                                                        <a href="#" class="btn btn_cancel">キャンセル</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-corporate_settings" role="tabpanel" aria-labelledby="nav-corporate_settings-tab">
                                    <form action="" class="frm_newaddition px-0 pt-0">
                                        <div class="enterprisesetting_top">
                                            <h2>ロゴ</h2>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_upload mb-2 mb-lg-0">
                                                        <div class="ui fluid segment">
                                                            <input type="file" (change)="fileEvent($event)" class="form-control inputfile" id="upload_img" />
                                                            <label for="upload_img" class="btn btn_label mb-0">ファイル選択へ</label>
                                                        </div>
                                                        <span>LogKnot_logo.svg</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 text-lg-right">
                                                    <a href="#" class="btn btn_keep">インポート</a>
                                                    <a href="#" class="btn btn_cancel">キャンセル</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="enterprisesetting_body">
                                            <h2>会社情報</h2>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">会社名</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <input type="text" class="form-control" placeholder="LogKnot株式会社">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">電話番号</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5">
                                                                <input type="text" class="form-control" placeholder="080-5567-1234">
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="email_address" for="">メールアドレス</label>
                                                                    <input type="text" class="form-control" placeholder="xxxxxxx@logrenove.jp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">住所</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <input type="text" class="form-control" placeholder="東京都港区北青山3-6-23ダイハツビル9F">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">代表者名</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5">
                                                                <textarea class="form-control" rows="4" placeholder="代表取締役社長　伊藤 竜介
                                            取締役会長　　　野澤 泰之
                                            取締役　　　　　荒井 洋平　"></textarea>
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="email_address" for="">ウェブサイト</label>
                                                                    <input type="text" class="form-control" placeholder="https://www.logknot.co.jp/">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">Facebook</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5">
                                                                <input type="text" class="form-control" placeholder="https://www.logknot.co.jp/">
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="email_address" for="">Twitter</label>
                                                                    <input type="text" class="form-control" placeholder="https://www.logknot.co.jp/">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">Instaglam</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5">
                                                                <input type="text" class="form-control" placeholder="https://www.logknot.co.jp/">
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="email_address" for="">お問い合わせ</label>
                                                                    <input type="text" class="form-control" placeholder="https://www.logknot.co.jp/contact/">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 text-center">
                                                        <a href="#" class="btn btn_keep">保存</a>
                                                        <a href="#" class="btn btn_cancel">キャンセル</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="nav-value_setting" role="tabpanel" aria-labelledby="nav-value_setting-tab">
                                     <form action="" class="frm_newaddition p-0">
                                        <div class="box_items">
                                            <h2>アイテム</h2>
                                            <div class="row">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">パッケージ</label>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3">
                                                            <label for="">インアクティブ</label>
                                                            <textarea rows="3" name="" class="form-control" placeholder="基本ソファーセット　
                                                            スタンドキッチン
                                                            安ベッド　"></textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-1 align-self-center">
                                                            <img src="images/common/svg/i_reverse.svg" alt="" class="img-fluid mt-4" width="32">
                                                        </div>
                                                        <div class="col-12 col-lg-4 align-self-center">
                                                            <label for="">インアクティブ</label>
                                                            <textarea rows="3" name="" class="form-control" placeholder="Suiteソファーセット　
                                                            プレミアムキッチン
                                                            Luxuryベッド"></textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-4 align-self-center">
                                                            <div class="d-flex align-items-center mt-4">
                                                                <a href="#" class="btn_newaddition">新規追加</a>
                                                                <a href="#" class="btn btn_edit mr-1"></a>
                                                                <a href="#" class="btn btn_del"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box_items">
                                            <h2>テクスチャ</h2>
                                            <div class="row">
                                                <div class="col-12 col-lg-2">
                                                    <label for="">マテリアル</label>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3">
                                                            <label for="">インアクティブ</label>
                                                            <textarea rows="3" name="" class="form-control" placeholder="コットン
                                                            メタル"></textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-1 align-self-center">
                                                            <img src="images/common/svg/i_reverse.svg" alt="" class="img-fluid mt-4" width="32">
                                                        </div>
                                                        <div class="col-12 col-lg-4 align-self-center">
                                                            <label for="">アクティブ</label>
                                                            <textarea rows="3" name="" class="form-control" placeholder="無垢材
                                                            ファブリック　　　
                                                            タイル　"></textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-4 align-self-center">
                                                            <div class="d-flex align-items-center mt-4">
                                                                <a href="#" class="btn_newaddition">新規追加</a>
                                                                <a href="#" class="btn btn_edit mr-1"></a>
                                                                <a href="#" class="btn btn_del"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="addition_footer">
                                            <a href="#" class="btn btn_keep">アイテム取り込み</a>
                                            <a href="#" class="btn btn_cancel">キャンセル</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

            </div>
        </main>

        <?php include('js-footer.php') ?>
        <script>
            document.querySelectorAll('input[type=color]').forEach(function(picker) {

              var targetLabel = document.querySelector('label[for="' + picker.id + '"]'),
                codeArea = document.createElement('span');

              codeArea.innerHTML = picker.value;
              targetLabel.appendChild(codeArea);

              picker.addEventListener('change', function() {
                codeArea.innerHTML = picker.value;
                targetLabel.appendChild(codeArea);
              });
            });
        </script>

    </body>
</html>