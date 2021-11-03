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
                        <h2 class="title"><img src="images/common/svg/i_texture.svg" alt="" class="img-fluid" width="25"><span>テクスチャ</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-basictexture-tab" data-toggle="tab" href="#nav-basictexture" role="tab" aria-controls="nav-basictexture" aria-selected="true">ベーシックテクスチャ</a>
                                <a class="nav-link" id="nav-option-tab" data-toggle="tab" href="#nav-option" role="tab" aria-controls="nav-option" aria-selected="false">オプション</a>
                                <a class="nav-link" id="nav-newaddition-tab" data-toggle="tab" href="#nav-newaddition" role="tab" aria-controls="nav-newaddition" aria-selected="false">新規追加</a>
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
                                <div class="tab-pane fade show active" id="nav-basictexture" role="tabpanel" aria-labelledby="nav-basictexture-tab">
                                    <div class="box_searchsort bg_lighblue">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <form class="frm_search" action="">
                                                    <div class="form-group mr-3">
                                                        <div class="relative">
                                                            <input type="text" class="form-control" placeholder="アイテム名を検索">
                                                            <button type="submit" class="btn btngo"></button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">アイテム名</option>
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">カテゴリ名</option>
                                                            <option value="">...</option>
                                                        </select>
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
                                                <th>ID <small>▼</small></th>
                                                <th>イメージ</th>
                                                <th width="12%">テクスチャ名 <small>▼</small></th>
                                                <th width="10%">価格 <small>▼</small></th>
                                                <th width="10%">分類 <small>▼</small></th>
                                                <th>情報</th>
                                                <th width="8%"></th>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            
                                            
                                            
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-option" role="tabpanel" aria-labelledby="nav-option-tab">
                                    <div class="box_searchsort bg_lighblue">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <form class="frm_search" action="">
                                                    <div class="form-group mr-3">
                                                        <div class="relative">
                                                            <input type="text" class="form-control" placeholder="アイテム名を検索">
                                                            <button type="submit" class="btn btngo"></button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">アイテム名</option>
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">分類</option>
                                                            <option value="">...</option>
                                                        </select>
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
                                                <th>ID <small>▼</small></th>
                                                <th>イメージ</th>
                                                <th width="12%">テクスチャ名 <small>▼</small></th>
                                                <th width="10%">価格 <small>▼</small></th>
                                                <th width="10%">分類 <small>▼</small></th>
                                                <th>情報</th>
                                                <th width="8%"></th>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
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
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/texture/texture01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>オーク</p>
                                                </td>
                                                <td>
                                                    <p>1,200円</p>
                                                </td>
                                                <td>
                                                    <p>無垢材</p>
                                                </td>
                                                <td>
                                                    <p>「オーク」とは、「ブナ科コナラ属の落葉性の樹種」を総称した言葉です。 ... カシワ、カシ、ナラ、ミズナラなどの樹木がこれにあたります。 北半球の温帯地方に広く分布しており…</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            
                                            
                                            
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-newaddition" role="tabpanel" aria-labelledby="nav-newaddition-tab">
                                    <form action="" class="frm_newaddition">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">アイテム名 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">情報 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <textarea class="form-control" name="" cols="30" rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">ステータス</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select name="" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">アイテムリスト <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-3">
                                                            <p class="mb-0 items">アイテムA<br>
                                                            アイテムB<br>
                                                            アイテムC</p>
                                                        </div>
                                                        <div class="col-3 col-lg-9">
                                                            <a href="#" class="btn btn_choose">選択</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
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
                        </div>

                    </div>
                    
                    
                </div>

            </div>

        </main>

        <?php include('js-footer.php') ?>
        

    </body>
</html>