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
                        <h2 class="title"><img src="images/common/svg/i_setting.svg" alt="" class="img-fluid" width="25"><span>図面</span></h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-drawinglist-tab" data-toggle="tab" href="#nav-drawinglist" role="tab" aria-controls="nav-drawinglist" aria-selected="true">図面一覧</a>
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
                        <div class="box_searchsort">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <form class="frm_search" action="">
                                        <input type="text" class="form-control" placeholder="アイテム名を検索">
                                        <button type="submit" class="btn btngo"></button>
                                    </form>
                                </div>
                                <div class="col-12 col-lg-8 text-center text-lg-right">
                                    <a href="#" class="btn btn_sort"><img src="images/common/svg/i_sort.svg" alt="" class="img-fluid mr-2" width="25"> 並べ替え</a>
                                    <a href="#" class="btn btn_list"></a>
                                    <a href="#" class="btn btn_grid active"></a>
                                </div>
                            </div>
                        </div>

                        <div class="box_content box_grid">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-drawinglist" role="tabpanel" aria-labelledby="nav-drawinglist-tab">
                                    <ul class="list_drawing">
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-newaddition" role="tabpanel" aria-labelledby="nav-newaddition-tab">
                                    <ul class="list_drawing">
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="box_img">
                                                <a href="#"><img src="images/products/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <h3>トーカン湯島キャステール</h3>
                                            <p>東京都中央区築地３丁目</p>
                                            <p>43.87m²（13.27坪）（壁芯）</p>
                                            <p>1階/RC7階建</p>
                                            <p class="list_drawing_footer">
                                                <span class="datetimes">2021-07-20 08:37:34</span>
                                                <span>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="box_content box_list p-0">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-drawinglist" role="tabpanel" aria-labelledby="nav-drawinglist-tab">
                                    <div class="table-responsive">
                                        <table id="table_list" class="table table_list table-hover">
                                            <thead>
                                                <th>選択</th>
                                                <th>ファイル名</th>
                                                <th>イメージ</th>
                                                <th>制作時間</th>
                                                <th>情報</th>
                                                <th></th>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td><p>トーカン湯島キャステール</p></td>
                                                <td>
                                                    <div class="box_img">
                                                        <img src="images/products/img01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <p>東京都中央区築地３丁目<br>
                                                    43.87m²（13.27坪）（壁芯）<br>
                                                    1階/RC7階建</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit"></a>
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
                                                <td><p>トーカン湯島キャステール</p></td>
                                                <td>
                                                    <div class="box_img">
                                                        <img src="images/products/img01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <p>東京都中央区築地３丁目<br>
                                                    43.87m²（13.27坪）（壁芯）<br>
                                                    1階/RC7階建</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit"></a>
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
                                                <td><p>トーカン湯島キャステール</p></td>
                                                <td>
                                                    <div class="box_img">
                                                        <img src="images/products/img01.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>2021-07-20 08:37:34</p>
                                                </td>
                                                <td>
                                                    <p>東京都中央区築地３丁目<br>
                                                    43.87m²（13.27坪）（壁芯）<br>
                                                    1階/RC7階建</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn_edit"></a>
                                                    <a href="#" class="btn btn_del"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-newaddition" role="tabpanel" aria-labelledby="nav-newaddition-tab">
                                    
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