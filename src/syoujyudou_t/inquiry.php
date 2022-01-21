<?php include 'header.php'; ?>

<div class="navigation sp-fixed nav-fixed nav-white">
<?php include 'navigation.php'; ?>
</div>

<!-- Top Page Content  -->
<section class="home_top">
	<div class="home_top_info px-0">
		<div class="box_inquiry">
			<div class="container">
		    	<div class="row">
		    		<div class="col-12 col-lg-12">
		    			<div class="box_inquiry_content">
		    				<h2>お問い合わせ</h2>
		    				<form action="" class="frm_inquiry">
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">お名前 <span>必須</span></label>
		    							</div>
		    							<div class="col-6 col-lg-4 align-self-center">
		    								<input type="text" class="form-control mb-2 mb-lg-0" placeholder="姓">
		    							</div>
		    							<div class="col-6 col-lg-4 align-self-center">
		    								<input type="text" class="form-control mb-2 mb-lg-0" placeholder="名">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">メールアドレス（確認用）<span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control" placeholder="◯◯◯◯◯◯@xxxxxxxx.jp">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">会社・組織名 <span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">担当部署</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">役職</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">電話番号</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">郵便番号</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<div class="row">
		    									<div class="col-7 col-lg-6 align-self-center">
		    										<input type="text" class="form-control">
		    									</div>
		    									<div class="col-5 col-lg-6 align-self-center">
		    										<a href="#" class="btn btn_zipcode"><img src="images/icons/arrow_right.svg" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
		    									</div>
		    								</div>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">都道府県</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<select name="" class="custom-select">
		    									<option value="">都道府県を選択してください</option>
		    									<option value="">....</option>
		    								</select>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">市区町村</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">丁目番地</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">ビル・建物</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4">
		    								<label for="">お問い合わせ内容</label>
		    							</div>
		    							<div class="col-12 col-lg-8">
		    								<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb01">
											  	<label class="custom-control-label" for="cb01">商品について</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb02">
											  	<label class="custom-control-label" for="cb02"> セキュリティ(偽造防止)印刷・加工</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb03">
											  	<label class="custom-control-label" for="cb03">特殊印刷・加工</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb04">
											  	<label class="custom-control-label" for="cb04">デジタル印刷</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb05">
											  	<label class="custom-control-label" for="cb05">フォーム印刷</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb06">
											  	<label class="custom-control-label" for="cb06">ピュアWプリント</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb07">
											  	<label class="custom-control-label" for="cb07">その他</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb08">
											  	<label class="custom-control-label" for="cb08">昇寿堂について</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb09">
											  	<label class="custom-control-label" for="cb09">昇寿堂ウェブサイトについて</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input type="checkbox" class="custom-control-input" id="cb010">
											  	<label class="custom-control-label" for="cb010">採用について</label>
											</div>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group mb-5">
		    						<label for="" class="mb-2">お問い合わせ詳細</label>
		    						<textarea name="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください"></textarea>
		    					</div>
		    					<div class="form-group">
									<label for="" class="mb-2">必ずお読みください <span>必須</span></label>
									<div class="box_moreinfo">
										<p>・お客様から収集する個人情報の取り扱いについて<br>
										お客様が株式会社昇寿堂（以下「弊社」）の製品、サービスまたはWebページをご利用いただくにあたり、弊社ではお客様から収集する個人情報を以下のように取り扱います。</p>
										<p>１．上記フォームで取得したお客様の個人情報は、お問い合わせ、またはお見積もりの回答に関してのみ使用し、それ以外の目的で使用することはございません。</p>
										<p>２．上記フォームのすべての項目にご記入ください。ご記入いただけない項目があった場合には、お問い合わせに対して適切に対応できない場合があります。</p>
										<p>３．ご記入いただいた個人情報は、他社に提供することはありません。</p>
										<p>４．お客様は弊社に対して、いつでも弊社が有しているお客様の個人情報をお客様に開示するよう求めることができます。また、開示の結果、該当個人情報に誤りがある場合は、お客様は弊社に対して当該個人情報の訂正または削除を要求することができます。</p>
										<p>５．当サイトでは、Cookie（クッキー）による個人情報の収集は行っておりません。</p>
										<p>６．当サイトは弊社が委託するホスティングサービス会社の共用ホスティングサーバを使用しております。</p>
										<p>７．上記フォームに入力された情報は暗号化されて弊社の委託するメールサーバに保存されますが、メールサーバから弊社が情報を受け取る際は暗号化されておりません。</p>
										<p>上記個人情報についての問い合わせ先<br>
									　　株式会社昇寿堂<br>
									　　個人情報保護方針管理者　新保朝男<br>
									　　TEL:03-3642-4591</p>
									</div>
		    					</div>
		    					<div class="form-group text-center">
		    						<div class="custom-control custom-checkbox">
									  	<input type="checkbox" class="custom-control-input" id="cb_agree">
									  	<label class="custom-control-label text-left text-lg-center label_agree" for="cb_agree">個人情報の取り扱いに同意する場合はチェックを入れてください</label>
									</div>
									<p class="mt-3 d-flex justify-content-center">
										<a href="#" class="btn btn_blue">リセット</a>
										<a href="#" class="btn btn_blue mr-0">上記に同意して送信</a>
									</p>
		    					</div>
		    				</form>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</section>


<?php include 'footer-content.php'; ?>
<?php include 'footer.php'; ?>