<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>

			<div class="pt100"></div>
    		<section class="section_propertySearch">
      			<div class="container">
      				<div class="row">
      					<div class="col-12 col-sm-12">
							<div class="label_propertySearch mx-auto d-none d-md-block">
								<h2><i class="i_search"></i> <span>お気に入り物件</span></h2>
								<p>FAVORITES</p>
							</div>
      					</div>
      				</div>
      			</div>
      		</section>
	      	
      		<section class="section_result">
      			<div class="container">
      				<div class="row">

      					<div class="col-12">
      						<div class="box_favoriteproperty">
      							<div class="row">
      								<div class="col-12 col-md-6 align-self-center">
      									<div class="row">
      										<div class="col-12 col-md-6">
      											<h3>お気に入り物件 <span>50</span> 件</h3>
      										</div>
      										<div class="col-12 col-md-6">
      											<div class="form-inline">
												  	<label class="my-1 mr-2" for="label_sortorder">並び順：</label>
												  	<select class="custom-select my-1 mr-sm-2" id="label_sortorder">
													    <option selected>新着順</option>
													    <option value="1">価格低い順</option>
													    <option value="2">価格高い順</option>
													    <option value="3">築年古い順</option>
													    <option value="4">面積が小さい順</option>
													    <option value="5">面積が大きい順</option>
												  	</select>
												</div>
      										</div>
      									</div>
      								</div>
      								<div class="col-12 col-md-6 align-self-center">
      									<p class="text_favoriteproperty">お気に入り物件が50件を超えると登録日が古い物件から削除されます。 また、成約した物件はリストから削除される場合があります。</p>
      								</div>
      							</div>
      						</div>
      					</div>

      					<div class="col-12">
      						<div class="top_sort">
      							<div class="row">
      								<div class="col-12 col-md-9">
      									<div class="box_top_sort_left">
	      									<div class="form-inline">
		      									<div class="form-check box_selectall">
												  	<input class="form-check-input" type="checkbox" value="" id="defaultCheck0">
												  	<label class="form-check-label" for="defaultCheck0">
												    	<span class="text_label">すべて選択</span>
												  	</label>
												</div>
												<label class="mx-2" for="">チェックした物件を</label>
												<a href="#" class="btn btn_box_checkproperties ml-0">資料請求・お問合せ <small>(無料)</small></a>
												<a href="#" class="btn btn_box_tourreservation">見学予約 <small>(無料)</small></a>
											</div>
										</div>
      								</div>
      								<div class="col-12 col-md-3">
      									<div class="box_heartmark">ハートマークをクリックすると お気に入りから削除</div>
      								</div>
      							</div>
      						</div>
      					</div>

      					<div class="col col-12 col-sm-12">
							<div class="estates_item">

								<div class="box_estates_item_title active">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="defaultCheck4">
												  	<label class="custom-control-label" for="defaultCheck4">
												    	<span class="text_label">ル・サンク世田谷松原 - 1階</span>
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
												<p>都営大江戸線「本郷三丁目」徒歩４分</p>
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											
											<div class="d-flex w_button w_button_md">
												<a href="#" class="btn btn_request flex-fill">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation flex-fill">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view flex-fill"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>

										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>

											<div class="w_button">
												<a href="#" class="btn btn_request">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="estates_item">
								<div class="box_estates_item_title active">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="defaultCheck4">
												  	<label class="custom-control-label" for="defaultCheck4">
												    	<span class="text_label">ル・サンク世田谷松原 - 1階</span>
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
												<p>都営大江戸線「本郷三丁目」徒歩４分</p>
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<div class="d-flex w_button w_button_md">
												<a href="#" class="btn btn_request flex-fill">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation flex-fill">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view flex-fill"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="w_button">
												<a href="#" class="btn btn_request">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="estates_item">
								<div class="box_estates_item_title active">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="defaultCheck4">
												  	<label class="custom-control-label" for="defaultCheck4">
												    	<span class="text_label">ル・サンク世田谷松原 - 1階</span>
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
												<p>都営大江戸線「本郷三丁目」徒歩４分</p>
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<div class="d-flex w_button w_button_md">
												<a href="#" class="btn btn_request flex-fill">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation flex-fill">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view flex-fill"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="w_button">
												<a href="#" class="btn btn_request">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="estates_item">
								<div class="box_estates_item_title active">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="defaultCheck4">
												  	<label class="custom-control-label" for="defaultCheck4">
												    	<span class="text_label">ル・サンク世田谷松原 - 1階</span>
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
												<p>都営大江戸線「本郷三丁目」徒歩４分</p>
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<div class="d-flex w_button w_button_md">
												<a href="#" class="btn btn_request flex-fill">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation flex-fill">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view flex-fill"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="w_button">
												<a href="#" class="btn btn_request">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="estates_item">
								<div class="box_estates_item_title active">
									<div class="row">
										<div class="col-8 col-md-6 align-self-center">
											<div class="form-check">
												<div class="custom-control custom-checkbox">
												  	<input class="custom-control-input" type="checkbox" value="" id="defaultCheck4">
												  	<label class="custom-control-label" for="defaultCheck4">
												    	<span class="text_label">ル・サンク世田谷松原 - 1階</span>
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
												<p>都営大江戸線「本郷三丁目」徒歩４分</p>
												<p class="prices"><span>4,980万円</span> 1LDK</p>
												<p>専有面積 45.01 ㎡</p>
												<p>東京都品川区大崎２丁目</p>
											</div>
											<div class="d-flex w_button w_button_md">
												<a href="#" class="btn btn_request flex-fill">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation flex-fill">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view flex-fill"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
										<div class="col col-12 d-block d-lg-none mt-2">
											<p>大森駅から徒歩5分の好立地 新規内装リノベーション実施三面採光、陽当り・風通し良好</p>
											<div class="w_button">
												<a href="#" class="btn btn_request">資料請求・お問合せ <span>(無料)</span></a>
												<a href="#" class="btn btn_tourreservation">見学予約 <span>(無料)</span></a>
												<a href="result_detail.php" class="btn btn_view"><i class="i_searchcondition"></i> 詳細を見る</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
      					</div>
      				</div>
      			</div>
      		</section>	      	

	      	<div class="bottom_searchCondition">
				<div class="container">
					<div class="row">
						<div class="col col-12 col-sm-12">
							<a href="#" class="btn btnOrange"><i class="i_searchcondition"></i> <span>この条件で検索</span></a>
							<a href="#wrap_detailCondition" class="btn btnBlue btn_specifyConditions"><i class="i_specifyConditions"></i> <span>詳細条件を検索する</span></a>
						</div>
					</div>
				</div>
			</div>

	      	<?php require 'footer.php'; ?>
    </div>

    <?php require 'js-footer.php'; ?>
    <script type="text/javascript">
            var galleryTop = [];
            var galleryThumbs = [];

            $(".gallery-top").each(function(index, element){
                var $this = $(this);
                galleryTop.push(new Swiper(this, {
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 10,
                    loop: true,
                    loopedSlides: 3                 
                }));
            });

            $(".gallery-thumbs").each(function(index, element){
                var $this = $(this);
                galleryThumbs.push(new Swiper(this, {
                    spaceBetween: 10,
                    slidesPerView: 3,
                    centeredSlides: true,
                    touchRatio: 0.2,
                    loop: true,
                    loopedSlides: 3,
                    slideToClickedSlide: true                    
                }));
            });

            for (var i = 0; i < galleryTop.length; i++) {
              galleryTop[i].params.control = galleryThumbs[i];
              galleryThumbs[i].params.control = galleryTop[i];
            }

        </script>
</body>

</html>