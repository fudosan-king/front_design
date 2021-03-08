<?php include 'header.php'; ?>
<?php include 'navigation.php'; ?>

<!-- Slide Show  -->
<section class="section-slideshow">
    <div class="g-slideshow">
        <div class="g-slideshow_content">
            <div class="none_splide">
            	<img src="images/2x/bg_contact.jpg" alt="" class="img-fluid d-none d-lg-block">
            	<img src="images/2x/bg_contact_sp.jpg" alt="" class="img-fluid d-block d-lg-none">
            </div>
            <div class="slideshow-text">
                <div class="img-txt">
                    <img class="d-none d-lg-block" src="images/1x/txt_contact.png" alt="" tilte="" />
                    <img class="d-block d-lg-none" src="images/2x/text_contact_sp.png" alt="" tilte="" />
                </div>
            </div>
        </div>
        <div class="sm-title">
            <div class="container">
                <h3>お問合わせ</h3>
            </div>
        </div>
    </div>
</section>

<!-- Top Page Content  -->
<section class="section_contact_page">
    <div class="container">
    	<div class="row">
    		<div class="col-12 col-lg-12">
    			<div class="box_contact">
    				<div class="box_contact_top d-none d-lg-block">
    					<div class="row no-gutters">
	    					<div class="col-12 col-lg-3">
	    						<div class="top_contact_img">
	    							<img src="images/1x/top_contact.png" alt="" class="img-fluid">
	    						</div>
	    					</div>
	    					<div class="col-12 col-lg-9">
	    						<div class="box_top_contact_content">
	    							<h3>西新宿ハイホーム - 501</h3>
	    							<table class="table">
	    								<tr>
	    									<th>所在地</th>
	    									<td>東京都新宿区西新宿４丁目</td>
	    									<th>専有面積</th>
	    									<td>91.3m²</td>
	    								</tr>
	    								<tr>
	    									<th>沿線・駅</th>
	    									<td>都営大江戸線 西新宿五丁目駅 徒歩5分</td>
	    									<th>間取り</th>
	    									<td>3LDK+S</td>
	    								</tr>
	    								<tr>
	    									<th></th>
	    									<td>東京メトロ丸ノ内線 西新宿駅 徒歩11分</td>
	    									<th>バルコニー</th>
	    									<td>7.41m²</td>
	    								</tr>
	    								<tr>
	    									<th></th>
	    									<td>京王新線 初台駅 徒歩13分</td>
	    									<th>築年月</th>
	    									<td>1977年05月</td>
	    								</tr>
	    							</table>
	    						</div>
	    					</div>
	    				</div>
	    				<p>7,690.0 <span>万円</span></p>
    				</div>

    				<div class="box_body_contact">
						<p class="title">フォームに必要事項をご入力ください。</p>
						<form action="comfirmation.php" class="frm_contact">
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">お問合わせ内容 <span class="mustbe bg-gradient-green-turquoise d-inline-block d-lg-none">必須</span></label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
												<span class="mustbe bg-gradient-green-turquoise d-none d-lg-inline-block">必須</span>
											</div>
											<div class="col-6 col-lg-5">
												<div class="custom-control custom-radio">
												  	<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
												  	<label class="custom-control-label" for="customRadio1">来場予約</label>
												</div>

											</div>
											<div class="col-6 col-lg-5">
												<div class="custom-control custom-radio">
												  	<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio2">資料請求</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">お名前 <span class="mustbe bg-gradient-green-turquoise d-inline-block d-lg-none">必須</span></label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2 align-self-center">
												<span class="mustbe bg-gradient-green-turquoise d-none d-lg-inline-block">必須</span>
											</div>
											<div class="col-12 col-lg-5 align-self-center">
												<div class="row mb-2 mb-lg-0">
													<div class="col-2 col-lg-2 align-self-center">
														<label for="">性</label>
													</div>
													<div class="col-10 col-lg-10 align-self-center">
														<input type="text" class="form-control" placeholder="例：山田">
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-5 align-self-center">
												<div class="row">
													<div class="col-2 col-lg-2 align-self-center">
														<label for="">名</label>
													</div>
													<div class="col-10 col-lg-10 align-self-center">
														<input type="text" class="form-control" placeholder="例：太郎">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3 align-self-center">
										<label for="">メールアドレス <span class="mustbe bg-gradient-green-turquoise d-inline-block d-lg-none">必須</span></label>
									</div>
									<div class="col-12 col-lg-9 align-self-center">
										<div class="row">
											<div class="col-12 col-lg-2 align-self-center">
												<span class="mustbe bg-gradient-green-turquoise d-none d-lg-inline-block">必須</span>
											</div>
											<div class="col-12 col-lg-10 align-self-center">
												<input type="text" class="form-control" placeholder="例：◯◯◯◯◯◯@xxxxxxxx.jp">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">ご連絡先電話番号</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-10">
												<input type="text" class="form-control" placeholder="例：080-0000-0000">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">郵便番号</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-5">
												<input type="text" class="form-control" placeholder="例：1234567">
											</div>
											<div class="col-12 col-lg-5">
												<a href="#" class="btn btnzipcode disabled"><i><img src="images/1x/i_right_green.svg" alt="" class="img-fluid" width="20"></i> 郵便番号から住所を自動的入力</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">都道府県</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-10">
												<select name="" class="form-control custom-select">
													<option value="">都道府県を選択してください</option>
													<option value="">物件の詳しい情報を知りたい</option>
													<option value="">ローン・購入に関して相談したい</option>
													<option value="">最寄りのショールームに行って相談したい</option>
													<option value="">条件に合う物件情報も紹介して欲しい</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">住所</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">建物名・号室</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-12 col-lg-3">
										<label for="">お問い合わせ項目<span class="d-inline-block d-lg-block"></span>（複数選択可）</label>
									</div>
									<div class="col-12 col-lg-9">
										<div class="row">
											<div class="col-12 col-lg-2">
											</div>
											<div class="col-12 col-lg-10">
												<div class="custom-control custom-radio mb-2">
												  	<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio3">物件を実際に見てみたい</label>
												</div>
												<div class="custom-control custom-radio mb-2">
												  	<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio4">物件の詳しい情報を知りたい</label>
												</div>
												<div class="custom-control custom-radio mb-2">
												  	<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio5">ローン・購入に関して相談したい</label>
												</div>
												<div class="custom-control custom-radio mb-2">
												  	<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio6">最寄りのショールームに行って相談したい</label>
												</div>
												<div class="custom-control custom-radio">
												  	<input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
												  	<label class="custom-control-label" for="customRadio7">条件に合う物件情報も紹介して欲しい</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group mb-0">
								<label for="">その他お問い合わせ</label>
								<textarea name="" class="form-control" cols="30" rows="10" placeholder="ご質問やご希望があればご記入ください。"></textarea>
								<p class="text-center">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
								下記の <a href="#" class="link_policy">プライバシーポリシー</a>  を必ずご一読頂き、同意のうえお問い合わせください。</p>
							</div>

							<div class="form-group text-center mb-3">
								<div class="custom-control custom-checkbox">
								  	<input type="checkbox" class="custom-control-input" id="customCheck1">
								  	<label class="custom-control-label" for="customCheck1">同意する</label>
								</div>
							</div>

							<button class="btn btn_confirm btn-mansion btn-black btn-lg-mansion">上記に同意して確認画面へ<span class="btn-line"></span></button>

						</form>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
</section>
<?php include 'footer-content.php'; ?>
<?php include 'footer.php'; ?>