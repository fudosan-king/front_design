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
                        <h2 class="title"><img src="images/common/svg/i_item.svg" alt="" class="img-fluid" width="25"><span>アイテム</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link" id="nav-itemlist-tab" data-toggle="tab" href="#nav-itemlist" role="tab" aria-controls="nav-itemlist" aria-selected="true">アイテム一覧</a>
                                <a class="nav-link active" id="nav-newaddition-tab" data-toggle="tab" href="#nav-newaddition" role="tab" aria-controls="nav-newaddition" aria-selected="false">新規追加</a>
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
                                                    <div class="form-group mr-3">
                                                        <div class="relative">
                                                            <input type="text" class="form-control" placeholder="アイテム名を検索">
                                                            <button type="submit" class="btn btngo"></button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mr-3">
                                                        <select name="" class="form-control">
                                                            <option value="">テクスチャ名</option>
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
                                                <th>ID</th>
                                                <th>イメージ</th>
                                                <th>名称</th>
                                                <th width="10%">価格</th>
                                                <th width="10%">テクスチャ</th>
                                                <th width="8%">カテゴリ</th>
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
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>レンジフード (L) 側面</p>
                                                </td>
                                                <td>
                                                    <p>100,000円～200,000円</p>
                                                </td>
                                                <td>
                                                    <p>シルバー<br>
                                                    ホワイト<br>
                                                    ブラック</p>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <p><span>サイズ：外寸 - W900×D650mm </span>
                                                    <span>全高 - H700〜900mm（付属ダクトカバーで調整可能）</span>
                                                    <span>素材：本体 - ステンレス</span></p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                <td><p>KB-PT003-02-G234</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>ラウンドライン浴槽 1600</p>
                                                </td>
                                                <td>
                                                    <p>250,000円</p>
                                                </td>
                                                <td>
                                                    <p>ホワイト<br>
                                                    アイボリー</p>
                                                </td>
                                                <td><p>浴室</p></td>
                                                <td>
                                                    <p>足を伸ばした姿勢にフィットするデザインです。取り外せるのでお掃除もカンタン。<br>※ヘッドレストは1600 ロング浴槽専用です</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3"></label>
                                                    </div>
                                                </td>
                                                <td><p>4813833G00P4Z</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img04.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>ミラー付きロアレッグホルダー</p>
                                                </td>
                                                <td>
                                                    <p>40,000円</p>
                                                </td>
                                                <td>
                                                    <p>オーク<br>
                                                    ウォルナット</p>
                                                </td>
                                                <td><p>寝室</p></td>
                                                <td>
                                                    <p>■商品サイズ：幅約41.5×奥行約29×高さ約88cm<br>
                                                    ■主要材質：棚・プリント紙化粧パーティクルボード<br>
                                                    ■背板：MDF<br>
                                                    ■商品1棚内</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                        <label class="custom-control-label" for="customCheck4"></label>
                                                    </div>
                                                </td>
                                                <td><p>110175532664</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img02.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>レンジフード (L) 側面</p>
                                                </td>
                                                <td>
                                                    <p>100,000円～200,000円</p>
                                                </td>
                                                <td>
                                                    <p>シルバー<br>
                                                    ホワイト<br>
                                                    ブラック</p>
                                                </td>
                                                <td><p>キッチン</p></td>
                                                <td>
                                                    <p><span>サイズ：外寸 - W900×D650mm </span>
                                                    <span>全高 - H700〜900mm（付属ダクトカバーで調整可能）</span>
                                                    <span>素材：本体 - ステンレス</span></p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit mr-1"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5"></label>
                                                    </div>
                                                </td>
                                                <td><p>KB-PT003-02-G234</p></td>
                                                <td>
                                                    <div class="box_img_itemlist">
                                                        <img src="images/products/img03.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>ラウンドライン浴槽 1600</p>
                                                </td>
                                                <td>
                                                    <p>250,000円</p>
                                                </td>
                                                <td>
                                                    <p>ホワイト<br>
                                                    アイボリー</p>
                                                </td>
                                                <td><p>浴室</p></td>
                                                <td>
                                                    <p>足を伸ばした姿勢にフィットするデザインです。取り外せるのでお掃除もカンタン。<br>※ヘッドレストは1600 ロング浴槽専用です</p>
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
                                                <div class="col-12 col-lg-3">
                                                    <label for="">ID <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
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
                                                    <label for="">価格帯 <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="box_unit and">
                                                                <input type="text" class="form-control">
                                                                <span>円</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="box_unit">
                                                                <input type="text" class="form-control">
                                                                <span>円</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">サイズ <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">

                                                    <div class="row mb-2">
                                                        <div class="col-1 col-lg-1 align-self-center">
                                                            <label>W</label>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit and">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cb_fixedsize">
                                                                <label class="custom-control-label" for="cb_fixedsize">サイズ固定</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-1 col-lg-1 align-self-center">
                                                            <label>D</label>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit and">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cb_fixedsize2">
                                                                <label class="custom-control-label" for="cb_fixedsize2">サイズ固定</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-1 col-lg-1 align-self-center">
                                                            <label>H</label>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit and">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-lg-3 align-self-center">
                                                            <div class="box_unit">
                                                                <input type="text" class="form-control">
                                                                <span>mm</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 col-lg-5 align-self-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cb_fixedsize3">
                                                                <label class="custom-control-label" for="cb_fixedsize3">サイズ固定</label>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <label for="">情報</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <textarea class="form-control" name="" cols="30" rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="">カテゴリ <span class="red">（※）</span></label>
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
                                                    <label for="">リンク <span class="red">（※）</span></label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <input type="text" class="form-control">
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

                                    <div class="box_option">
                                        <h2>オプション</h2>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/products/img02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンジフード (L) 側面</p>
                                                    <p>100,000円</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="box_option box_texture_color">
                                        <h2>テクスチャ・カラー</h2>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture01.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>ウォルナット</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture02.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>レンが</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="box_img">
                                                        <img src="images/texture/texture03.jpg" alt="" class="box_img">
                                                    </span>
                                                    <p>オーク</p>
                                                </a>
                                            </li>
                                        </ul>
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