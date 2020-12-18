<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>

    		<section class="section_searchresult">
				<div class="top_displayresult">
					<div class="container">
						<div class="row">
	      					<div class="col col-4 col-sm-6 box_summary">
	      						<p class="d-inline-block mr-3">
	      							<span class="summary">12件</span>
	      						</p>
      							<nav class="nav_pagination nav_pagination_lg" aria-label="...">
								  	<ul class="pagination pagination-sm mb-0">
								  		<li class="page-item">
									      <a class="page-link" href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li class="page-item active" aria-current="page">
									      <span class="page-link">
									        1
									        <span class="sr-only">(current)</span>
									      </span>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">2</a></li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">4</a></li>
									    <li class="page-item"><a class="page-link" href="#">5</a></li>
									    <li class="page-item">
									      	<a class="page-link" href="#" aria-label="Next">
									        	<span aria-hidden="true">&raquo;</span>
									      	</a>
									    </li>
								 	</ul>
								</nav>
	      						
	      					</div>
	      					<div class="col col-8 col-sm-6">
	      						<div class="form-inline box_displayresult">
								  	<div class="form-group mb-2">
									    <label for="">表示件数：</label>
									    <select class="form-control" name="">
									    	<option value="">10</option>
									    	<option value="">20</option>
									    	<option value="">30</option>
									    	<option value="">50</option>
									    	<option value="">100</option>
									    </select>
									    <span> 件</span>
								  	</div>
								  	<a href="#" class="btn btn_favorites d-none d-lg-block"><i class="far fa-heart fa-lg"></i> お気に入り0件</a>
								</div>
	      					</div>
	      				</div>
					</div>
				</div>
      				

  				<div class="box_sorter">
  					<div class="container">
      					<div class="row ">
      						<div class="col col-12 col-sm-12">
      							<nav class="nav_pagination d-block d-lg-none" aria-label="...">
								  	<ul class="pagination pagination-sm">
								  		<li class="page-item">
									      <a class="page-link" href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li class="page-item active" aria-current="page">
									      <span class="page-link">
									        1
									        <span class="sr-only">(current)</span>
									      </span>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">2</a></li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">4</a></li>
									    <li class="page-item"><a class="page-link" href="#">5</a></li>
									    <li class="page-item">
									      	<a class="page-link" href="#" aria-label="Next">
									        	<span aria-hidden="true">&raquo;</span>
									      	</a>
									    </li>
								 	</ul>
								</nav>
      						</div>
	      					<div class="col col-12 col-sm-12">
	      						<div class="row">
	      							<div class="col-12 col-md-9">
	      								<div class="form-inline mb-2">
										  	<label class="my-1 mr-2" for="label_sortorder">並び順：</label>
										  	<select class="custom-select my-1 mr-sm-2 w-25" id="label_sortorder">
											    <option selected>新着順</option>
											    <option value="1">価格低い順</option>
											    <option value="2">価格高い順</option>
											    <option value="3">築年古い順</option>
											    <option value="4">面積が小さい順</option>
											    <option value="5">面積が大きい順</option>
										  	</select>
										</div>
										<p class="current_condition pl-0">
			      							<span class="title">現在の検索条件</span>
			      							<span class="right_content">地域：さいたま市中央区,さいたま市北区,さいたま市南区,さいたま市大宮区,さいたま市桜区,川越市,児玉郡,児玉郡神泉村,入間郡,入間郡名栗村、物件種別:マンション</span>
			      						</p>
	      							</div>
	      							<div class="col-12 col-md-3">
			      						<a href="#" class="btn btn_searchcondition d-none d-lg-block"><i class="i_arrow_left_white"></i> 検索条件を変更する</a>
	      							</div>
	      						</div>
	      					</div>

	      				</div>
	      			</div>
  				</div>
      				

    		</section>
	      	
      		<section class="section_result">
      			<div class="container">
      				<div class="row">

      					<div class="col-12">
      						<div class="top_sort">
      							<div class="row">
      								<div class="col-12 col-md-9">
      									<div class="box_top_sort_left">
	      									<div class="form-inline">
		      									<div class="form-check box_selectall">
												  	<input class="form-check-input" type="checkbox" value="" id="some1" data-check-pattern="[name^='some-key']">
												  	<label class="form-check-label" for="some1">
												    	<span class="text_label">すべて選択</span>
												  	</label>
												</div>
												<label class="mx-2" for="">チェックした物件を</label>
												<a href="#" class="btn btn_box_checkproperties ml-0">資料請求・お問合せ <small>(無料)</small></a>
												<a href="#" class="btn btn_box_tourreservation">見学予約 <small>(無料)</small></a>
												<a href="#" class="btn btn_addfavories"> <i class="far fa-heart"></i> お気に入りに登録</a>
											</div>
										</div>
      								</div>
      								<div class="col-12 col-md-3">
      									<div class="box_heartmark">ハートマークをクリックすると お気に入りに追加 (50件まで)</div>
      								</div>
      							</div>
      						</div>
      					</div>

      					<div class="col col-12 col-sm-12">
							<div class="estates_item">
								<div class="box_estates_item_title">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="some2" name="some-key2">
												  	<label class="custom-control-label" for="some2">
												    	<span class="text_label">ビューパレー和光 - 305号室</span>
												  	</label>
											  	</div>
											</div>
										</div>
										<div class="col-4 col-md-6 align-self-center">
											<a class="btn_like" href="#"></a>
										</div>
									</div>
								</div>

								<div class="estates_item_main">
									<div class="row no-gutters">
										<div class="col col-12 d-block d-lg-none">
											<p>都営大江戸線「本郷三丁目」徒歩４分</p>
										</div>
										<div class="col col-4 col-sm-4 col-md-4">
											<div class="gallerys d-none d-lg-block">
												<div class="slider-for">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01_2.jpg" alt="" class="img-fluid">
													</div>
												</div>

												<div class="slider-nav">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>
											</div>
											<div class="gallerys_sp d-block d-lg-none">
                                            	<a href="#"><img src="images/1x/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            
										</div>
										<div class="col col-8 col-sm-8 col-md-8">
											<div class="table_estates_item d-none d-lg-block">
												<div class="row no-gutters">
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head">販売価格</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price d-none d-md-block">2,790万円</span>
														<span class="head d-block d-md-none">間取り</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head d-none d-md-block">間取り</span>
														<span class="price d-block d-md-none">2,790万円</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price">2LDK</span>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">専有面積</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>68.76m²</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">所在地</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>埼玉県和光市白子１丁目</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">交通</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>東京メトロ有楽町線「地下鉄成増」バスで7分 徒歩1分</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head mx_head">本物件のポイント</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>【天然無垢材を使用した新規内装スケルトンフルリノベーション物件】 ・大切なペットとも一緒に暮らせます。 ・約20帖のワイドリビングが魅力 ・西、東向きの2面バルコニーに付き、陽当り通風良好です。</p>
													</div>
												</div>
											</div>
											<div class="table_estates_item_sp d-block d-lg-none">
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<a href="result_detail.php" class="btn btn_detail d-none d-lg-block"><i class="i_searchcondition"></i> 詳細を見る</a>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="text-center">
												<a href="result_detail.php" class="btn btn_detail"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end estates_item -->

							<div class="estates_item">
								<div class="box_estates_item_title">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="some3" name="some-key3">
												  	<label class="custom-control-label" for="some3">
												    	<span class="text_label">ビューパレー和光 - 305号室</span>
												  	</label>
											  	</div>
											</div>
										</div>
										<div class="col-4 col-md-6 align-self-center">
											<a class="btn_like" href="#"></a>
										</div>
									</div>
								</div>
								<div class="estates_item_main">
									<div class="row no-gutters">
										<div class="col col-12 d-block d-lg-none">
											<p>都営大江戸線「本郷三丁目」徒歩４分</p>
										</div>
										<div class="col col-4 col-sm-4 col-md-4">
											<div class="gallerys d-none d-lg-block">
                                                <div class="slider-for">
													<div class="item">
														<img src="https://drscdn.500px.org/photo/290807165/q%3D80_m%3D1000/v2?user_id=4537986&webp=true&sig=c764138569dc338ac63330b7dd1489a2c9b01fd7a40a89fcde1e1f2809f18b58" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>

												<div class="slider-nav">
													<div class="item">
														<img src="https://drscdn.500px.org/photo/290807165/q%3D80_m%3D1000/v2?user_id=4537986&webp=true&sig=c764138569dc338ac63330b7dd1489a2c9b01fd7a40a89fcde1e1f2809f18b58" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>
                                            </div>
                                            <div class="gallerys_sp d-block d-lg-none">
                                            	<a href="#"><img src="images/1x/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
										</div>
										<div class="col col-8 col-sm-8 col-md-8">
											<div class="table_estates_item d-none d-lg-block">
												<div class="row no-gutters">
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head">販売価格</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price d-none d-md-block">2,790万円</span>
														<span class="head d-block d-md-none">間取り</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head d-none d-md-block">間取り</span>
														<span class="price d-block d-md-none">2,790万円</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price">2LDK</span>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">専有面積</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>68.76m²</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">所在地</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>埼玉県和光市白子１丁目</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">交通</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>東京メトロ有楽町線「地下鉄成増」バスで7分 徒歩1分</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head mx_head">本物件のポイント</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>【天然無垢材を使用した新規内装スケルトンフルリノベーション物件】 ・大切なペットとも一緒に暮らせます。 ・約20帖のワイドリビングが魅力 ・西、東向きの2面バルコニーに付き、陽当り通風良好です。</p>
													</div>
												</div>
											</div>
											<div class="table_estates_item_sp d-block d-lg-none">
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<a href="result_detail.php" class="btn btn_detail d-none d-lg-block"><i class="i_searchcondition"></i> 詳細を見る</a>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="text-center">
												<a href="result_detail.php" class="btn btn_detail"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end estates_item -->

							<div class="estates_item">
								<div class="box_estates_item_title">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="some4" name="some-key4">
												  	<label class="custom-control-label" for="some4">
												    	<span class="text_label">ビューパレー和光 - 305号室</span>
												  	</label>
											  	</div>
											</div>
										</div>
										<div class="col-4 col-md-6 align-self-center">
											<a class="btn_like" href="#"></a>
										</div>
									</div>
								</div>
								<div class="estates_item_main">
									<div class="row no-gutters">
										<div class="col col-12 d-block d-lg-none">
											<p>都営大江戸線「本郷三丁目」徒歩４分</p>
										</div>
										<div class="col col-4 col-sm-4 col-md-4">
											<div class="gallerys d-none d-lg-block">
												<div class="slider-for">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01_2.jpg" alt="" class="img-fluid">
													</div>
												</div>

												<div class="slider-nav">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>
											</div>
                                            <div class="gallerys_sp d-block d-lg-none">
                                            	<a href="#"><img src="images/1x/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
										</div>
										<div class="col col-8 col-sm-8 col-md-8">
											<div class="table_estates_item d-none d-lg-block">
												<div class="row no-gutters">
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head">販売価格</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price d-none d-md-block">2,790万円</span>
														<span class="head d-block d-md-none">間取り</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head d-none d-md-block">間取り</span>
														<span class="price d-block d-md-none">2,790万円</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price">2LDK</span>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">専有面積</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>68.76m²</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">所在地</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>埼玉県和光市白子１丁目</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">交通</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>東京メトロ有楽町線「地下鉄成増」バスで7分 徒歩1分</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head mx_head">本物件のポイント</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>【天然無垢材を使用した新規内装スケルトンフルリノベーション物件】 ・大切なペットとも一緒に暮らせます。 ・約20帖のワイドリビングが魅力 ・西、東向きの2面バルコニーに付き、陽当り通風良好です。</p>
													</div>
												</div>
											</div>
											<div class="table_estates_item_sp d-block d-lg-none">
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<a href="result_detail.php" class="btn btn_detail d-none d-lg-block"><i class="i_searchcondition"></i> 詳細を見る</a>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="text-center">
												<a href="result_detail.php" class="btn btn_detail"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end estates_item -->

							<div class="estates_item">
								<div class="box_estates_item_title">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="some5" name="some-key5">
												  	<label class="custom-control-label" for="some5">
												    	<span class="text_label">ビューパレー和光 - 305号室</span>
												  	</label>
											  	</div>
											</div>
										</div>
										<div class="col-4 col-md-6 align-self-center">
											<a class="btn_like" href="#"></a>
										</div>
									</div>
								</div>
								<div class="estates_item_main">
									<div class="row no-gutters">
										<div class="col col-12 d-block d-lg-none">
											<p>都営大江戸線「本郷三丁目」徒歩４分</p>
										</div>
										<div class="col col-4 col-sm-4 col-md-4">
											<div class="gallerys d-none d-lg-block">
												<div class="slider-for">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01_2.jpg" alt="" class="img-fluid">
													</div>
												</div>

												<div class="slider-nav">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>
											</div>
                                            <div class="gallerys_sp d-block d-lg-none">
                                            	<a href="#"><img src="images/1x/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
										</div>
										<div class="col col-8 col-sm-8 col-md-8">
											<div class="table_estates_item d-none d-lg-block">
												<div class="row no-gutters">
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head">販売価格</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price d-none d-md-block">2,790万円</span>
														<span class="head d-block d-md-none">間取り</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head d-none d-md-block">間取り</span>
														<span class="price d-block d-md-none">2,790万円</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price">2LDK</span>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">専有面積</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>68.76m²</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">所在地</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>埼玉県和光市白子１丁目</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">交通</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>東京メトロ有楽町線「地下鉄成増」バスで7分 徒歩1分</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head mx_head">本物件のポイント</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>【天然無垢材を使用した新規内装スケルトンフルリノベーション物件】 ・大切なペットとも一緒に暮らせます。 ・約20帖のワイドリビングが魅力 ・西、東向きの2面バルコニーに付き、陽当り通風良好です。</p>
													</div>
												</div>
											</div>
											<div class="table_estates_item_sp d-block d-lg-none">
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<a href="result_detail.php" class="btn btn_detail d-none d-lg-block"><i class="i_searchcondition"></i> 詳細を見る</a>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="text-center">
												<a href="result_detail.php" class="btn btn_detail"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end estates_item -->

							<div class="estates_item">
								<div class="box_estates_item_title">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="some6" name="some-key6">
												  	<label class="custom-control-label" for="some6">
												    	<span class="text_label">ビューパレー和光 - 305号室</span>
												  	</label>
											  	</div>
											</div>
										</div>
										<div class="col-4 col-md-6 align-self-center">
											<a class="btn_like" href="#"></a>
										</div>
									</div>
								</div>
								<div class="estates_item_main">
									<div class="row no-gutters">
										<div class="col col-12 d-block d-lg-none">
											<p>都営大江戸線「本郷三丁目」徒歩４分</p>
										</div>
										<div class="col col-4 col-sm-4 col-md-4">
											<div class="gallerys d-none d-lg-block">
												<div class="slider-for">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01_2.jpg" alt="" class="img-fluid">
													</div>
												</div>

												<div class="slider-nav">
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img02.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img03.jpg" alt="" class="img-fluid">
													</div>
													<div class="item">
														<img src="images/1x/img01.jpg" alt="" class="img-fluid">
													</div>
												</div>
											</div>
                                            <div class="gallerys_sp d-block d-lg-none">
                                            	<a href="#"><img src="images/1x/img01.jpg" alt="" class="img-fluid"></a>
                                            </div>
										</div>
										<div class="col col-8 col-sm-8 col-md-8">
											<div class="table_estates_item d-none d-lg-block">
												<div class="row no-gutters">
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head">販売価格</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price d-none d-md-block">2,790万円</span>
														<span class="head d-block d-md-none">間取り</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="head d-none d-md-block">間取り</span>
														<span class="price d-block d-md-none">2,790万円</span>
													</div>
													<div class="col col-6 col-sm-6 col-md-3">
														<span class="price">2LDK</span>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">専有面積</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>68.76m²</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">所在地</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>埼玉県和光市白子１丁目</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head">交通</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>東京メトロ有楽町線「地下鉄成増」バスで7分 徒歩1分</p>
													</div>
												</div>
												<div class="row no-gutters">
													<div class="col col-4 col-sm-3">
														<span class="head mx_head">本物件のポイント</span>
													</div>
													<div class="col col-8 col-sm-9">
														<p>【天然無垢材を使用した新規内装スケルトンフルリノベーション物件】 ・大切なペットとも一緒に暮らせます。 ・約20帖のワイドリビングが魅力 ・西、東向きの2面バルコニーに付き、陽当り通風良好です。</p>
													</div>
												</div>
											</div>
											<div class="table_estates_item_sp d-block d-lg-none">
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<a href="result_detail.php" class="btn btn_detail d-none d-lg-block"><i class="i_searchcondition"></i> 詳細を見る</a>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="text-center">
												<a href="result_detail.php" class="btn btn_detail"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- end estates_item -->							

      					</div>
      				</div>
      			</div>
      		</section>

	      	<?php require 'footer.php'; ?>
    </div>

    <?php require 'js-footer.php'; ?>
    
</body>

</html>