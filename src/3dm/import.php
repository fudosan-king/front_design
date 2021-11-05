<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>
            <div class="row" id="body-row">
                <?php require('sidebar.php'); ?>


                <div class="col main_content">
                    <div class="main_header pb-3">
                        <h2 class="title"><img src="images/common/svg/i_import.svg" alt="" class="img-fluid" width="25"><span>インポート</span></h2>
                    </div>

                    <div class="main_body">

                        <div class="box_content bg-transparent p-0 mt-0">
                            <div class="box_import_item">
                                <h2>アイテム取り込み</h2>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="box_upload mb-2 mb-lg-0">
                                            <div class="ui fluid segment">
                                                <input type="file" (change)="fileEvent($event)" class="form-control inputfile" id="upload_img" />
                                                <label for="upload_img" class="btn btn_label">画像をアップする</label>
                                            </div>
                                            <span>test.csv</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-lg-right">
                                        <a href="#" class="btn btn_keep">アイテム取り込み</a>
                                        <a href="#" class="btn btn_cancel">キャンセル</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_import_item">
                                <h2>アイテム取り込み</h2>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="box_upload mb-2 mb-lg-0">
                                            <div class="ui fluid segment">
                                                <input type="file" (change)="fileEvent($event)" class="form-control inputfile" id="upload_img" />
                                                <label for="upload_img" class="btn btn_label">画像をアップする</label>
                                            </div>
                                            <span>test.csv</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-lg-right">
                                        <a href="#" class="btn btn_keep">アイテム取り込み</a>
                                        <a href="#" class="btn btn_cancel">キャンセル</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_import_item">
                                <h2>アイテム取り込み</h2>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="box_upload mb-2 mb-lg-0">
                                            <div class="ui fluid segment">
                                                <input type="file" (change)="fileEvent($event)" class="form-control inputfile" id="upload_img" />
                                                <label for="upload_img" class="btn btn_label">画像をアップする</label>
                                            </div>
                                            <span>test.csv</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-lg-right">
                                        <a href="#" class="btn btn_keep">アイテム取り込み</a>
                                        <a href="#" class="btn btn_cancel">キャンセル</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

            </div>

            
        </main>

        <?php include('js-footer.php') ?>
        

    </body>
</html>