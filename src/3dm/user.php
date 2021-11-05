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
                        <h2 class="title"><img src="images/common/svg/i_user.svg" alt="" class="img-fluid" width="25"><span>ユーザー</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link" id="nav-itemlist-tab" data-toggle="tab" href="#nav-itemlist" role="tab" aria-controls="nav-itemlist" aria-selected="true">ユーザー一覧</a>
                                <a class="nav-link active" id="nav-newaddition-tab" data-toggle="tab" href="#nav-newaddition" role="tab" aria-controls="nav-newaddition" aria-selected="false">新規登録</a>
                                <div class="box_display ml-auto">
                                    <p class="mb-0"><b>27</b>アイテム中　<b>1</b> 〜 <b>15</b>を表示</p>
                                    <a class="btn btn_left" href="#"></a>
                                    <a class="btn btn_right" href="#"></a>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="main_body">

                        <div class="box_content p-0 mt-0">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-itemlist" role="tabpanel" aria-labelledby="nav-itemlist-tab">
                                    <div class="box_searchsort bg_lighblue">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <form class="frm_search" action="">
                                                    <div class="form-group mr-3 mb-0">
                                                        <div class="relative">
                                                            <input type="text" class="form-control" placeholder="アイテム名を検索">
                                                            <button type="submit" class="btn btngo"></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-4 text-center text-lg-right align-self-center">
                                                <a href="#" class="btn btn_sort mr-0"><img src="images/common/svg/i_sort.svg" alt="" class="img-fluid mr-2" width="25"> 並べ替え</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="table_list" class="table table_list table_listitem table-hover">
                                            <thead>
                                                <th>選択</th>
                                                <th>メールアドレス <small>▼</small></th>
                                                <th>名前 <small>▼</small></th>
                                                <th>グループ <small>▼</small></th>
                                                <th>制作時間 <small>▼</small></th>
                                                <th width="8%"></th>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>ito-ryusuke@propolife.co.jp</p></td>
                                                <td>
                                                    <p>伊藤 竜介</p>
                                                </td>
                                                <td>
                                                    <p>インテリアコーディネーター</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>kimura-mamoru@propolife.co.jp</p></td>
                                                <td>
                                                    <p>木村 衛</p>
                                                </td>
                                                <td>
                                                    <p>セールス</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>anh-n@propolife.co.jp</p></td>
                                                <td>
                                                    <p>ゴチャン ユイアイン</p>
                                                </td>
                                                <td>
                                                    <p>アドミン</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>arai-yohei@propolife.co.jp</p></td>
                                                <td>
                                                    <p>荒井 洋平</p>
                                                </td>
                                                <td>
                                                    <p>インテリアコーディネーター</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>kashiguchi-makiko@propolife.co.jp</p></td>
                                                <td>
                                                    <p>柏口 真貴子</p>
                                                </td>
                                                <td>
                                                    <p>インテリアコーディネーター</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>ito-ryusuke@propolife.co.jp</p></td>
                                                <td>
                                                    <p>伊藤 竜介</p>
                                                </td>
                                                <td>
                                                    <p>インテリアコーディネーター</p>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="nav-newaddition" role="tabpanel" aria-labelledby="nav-newaddition-tab">
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
                            </div>
                        </div>

                    </div>
                    
                    
                </div>

            </div>

            <div class="modal fade" id="modal_edit" tabindex="-1" aria-labelledby="modaleditLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaleditLabel">編集</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><img src="images/common/svg/i_close.svg" alt="" class="img-fluid" width="30"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="frm_user">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">メールアドレス <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <input type="text" class="form-control" placeholder="xxxxxxx@logrenove.jp">
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
                                                <div class="col-6 col-lg-6">
                                                    <div class="box_sex">
                                                        <label for="">性</label>
                                                        <input type="text" class="form-control" placeholder="伊藤">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-6">
                                                    <div class="box_sex">
                                                        <label for="">名</label>
                                                        <input type="text" class="form-control" placeholder="竜介">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">アバター</label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="box_upload">
                                                <span>伊</span>
                                                <div class="ui fluid segment">
                                                    <input type="file" (change)="fileEvent($event)" class="form-control inputfile" id="upload_img" />
                                                    <label for="upload_img" class="btn btn_label">画像をアップする</label>
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
                                            <input type="text" class="form-control" placeholder="インテリアコーディネーター">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn_keep">保存</a>
                            <a href="#" class="btn btn_cancel" data-dismiss="modal">キャンセル</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('js-footer.php') ?>
        <script>
            $('#modal_edit').modal('show');
        </script>

    </body>
</html>