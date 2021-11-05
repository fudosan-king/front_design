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
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">一人称視点</label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="form-group">
                                                        <div class="box_height">
                                                            <span>身長</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">照明色を設定</label>
                                                    </div>

                                                </div>
                                            </div>
                                            

                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-corporate_settings" role="tabpanel" aria-labelledby="nav-corporate_settings-tab">
                                    <form action="" class="frm_newaddition">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">メールアドレス <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：xxxxxxx@logrenove.jp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">お名前 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="box_sex">
                                                                <label for="">性</label>
                                                                <input type="text" class="form-control" placeholder="例：宮の森">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="box_sex">
                                                                <label for="">名</label>
                                                                <input type="text" class="form-control" placeholder="例：太郎">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label for="">ステータス</label>
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
                                                    <label for="">グループ</label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：Logknot株式会社">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    
                                                </div>
                                                <div class="col-12 col-lg-9 text-center">
                                                    <a href="#" class="btn btn_keep">新規登録</a>
                                                    <a href="#" class="btn btn_cancel">キャンセル</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade show active" id="nav-value_setting" role="tabpanel" aria-labelledby="nav-value_setting-tab">
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

            </div>
        </main>

        <?php include('js-footer.php') ?>
        <script>
            
        </script>

    </body>
</html>