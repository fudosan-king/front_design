<?php include 'header.php'; ?>
<div class="navigation nav-form nav-white">
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
		    				<form action="" class="frm_inquiry js_frm_inquiry">
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="label_required">お名前 <span>必須</span></label>
		    							</div>
		    							<div class="col-6 col-lg-4 align-self-center">
		    								<input name="inquiry_first_name" data-valid="required" type="text" class="form-control mb-2 mb-lg-0" placeholder="姓">
		    							</div>
		    							<div class="col-6 col-lg-4 align-self-center">
		    								<input name="inquiry_last_name" type="text" data-valid="required" class="form-control mb-2 mb-lg-0" placeholder="名">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="label_required">メールアドレス<span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_email" type="text" data-valid="email" class="form-control" placeholder="◯◯◯◯◯◯@xxxxxxxx.jp">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="label_required">会社・組織名 <span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_company_name" data-valid="required" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">担当部署</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_department" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">役職</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_position" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="label_required">電話番号</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_telephone" data-valid="telephone" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="label_required">郵便番号</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<div class="row">
		    									<div class="col-7 col-lg-6 align-self-center">
		    										<input name="inquiry_postcode" onkeyup="AjaxZip3.zip2addr(this,'','inquiry_prefectures','inquiry_city_name')" data-valid="postalcode" type="text" class="form-control">
		    									</div>
		    									<div class="col-5 col-lg-6 align-self-center">
		    										<a href="#" id="btn_autozipcode" class="btn btn_zipcode"onclick="AjaxZip3.zip2addr('inquiry_postcode','','inquiry_prefectures','inquiry_city_name')" href="javascript:void(0)"><img src="images/icons/arrow_right.svg" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
		    									</div>
		    								</div>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="" class="">都道府県</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<select name="inquiry_prefectures" class="form-control custom-select" onchange>
                                                <option value="">
                                                    都道府県を選択してください
                                                </option>
                                                <option value="北海道">
                                                    北海道
                                                </option>
                                                <option value="青森県">
                                                    青森県
                                                </option>
                                                <option value="岩手県">
                                                    岩手県
                                                </option>
                                                <option value="宮城県">
                                                    宮城県
                                                </option>
                                                <option value="秋田県">
                                                    秋田県
                                                </option>
                                                <option value="山形県">
                                                    山形県
                                                </option>
                                                <option value="福島県">
                                                    福島県
                                                </option>
                                                <option value="茨城県">
                                                    茨城県
                                                </option>
                                                <option value="栃木県">
                                                    栃木県
                                                </option>
                                                <option value="群馬県">
                                                    群馬県
                                                </option>
                                                <option value="埼玉県">
                                                    埼玉県
                                                </option>
                                                <option value="千葉県">
                                                    千葉県
                                                </option>
                                                <option value="東京都">
                                                    東京都
                                                </option>
                                                <option value="神奈川県">
                                                    神奈川
                                                </option>
                                                <option value="新潟県">
                                                    新潟県
                                                </option>
                                                <option value="山梨県">
                                                    山梨県
                                                </option>
                                                <option value="長野県">
                                                    長野県
                                                </option>
                                                <option value="富山県">
                                                    富山県
                                                </option>
                                                <option value="石川県">
                                                    石川県
                                                </option>
                                                <option value="福井県">
                                                    福井県
                                                </option>
                                                <option value="岐阜県">
                                                    岐阜県
                                                </option>
                                                <option value="静岡県">
                                                    静岡県
                                                </option>
                                                <option value="愛知県">
                                                    愛知県
                                                </option>
                                                <option value="三重県">
                                                    三重県
                                                </option>
                                                <option value="滋賀県">
                                                    滋賀県
                                                </option>
                                                <option value="京都府">
                                                    京都府
                                                </option>
                                                <option value="大阪府">
                                                    大阪府
                                                </option>
                                                <option value="兵庫県">
                                                    兵庫県
                                                </option>
                                                <option value="奈良県">
                                                    奈良県
                                                </option>
                                                <option value="和歌山県">
                                                    和歌山
                                                </option>
                                                <option value="鳥取県">
                                                    鳥取県
                                                </option>
                                                <option value="島根県">
                                                    島根県
                                                </option>
                                                <option value="岡山県">
                                                    岡山県
                                                </option>
                                                <option value="広島県">
                                                    広島県
                                                </option>
                                                <option value="山口県">
                                                    山口県
                                                </option>
                                                <option value="徳島県">
                                                    徳島県
                                                </option>
                                                <option value="香川県">
                                                    香川県
                                                </option>
                                                <option value="愛媛県">
                                                    愛媛県
                                                </option>
                                                <option value="高知県">
                                                    高知県
                                                </option>
                                                <option value="福岡県">
                                                    福岡県
                                                </option>
                                                <option value="佐賀県">
                                                    佐賀県
                                                </option>
                                                <option value="長崎県">
                                                    長崎県
                                                </option>
                                                <option value="熊本県">
                                                    熊本県
                                                </option>
                                                <option value="大分県">
                                                    大分県
                                                </option>
                                                <option value="宮崎県">
                                                    宮崎県
                                                </option>
                                                <option value="鹿児島県">
                                                    鹿児島
                                                </option>
                                                <option value="沖縄県">
                                                    沖縄県
                                                </option>
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
		    								<input name="inquiry_city_name" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">丁目番地</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_address" type="text" class="form-control">
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">ビル・建物</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<input name="inquiry_building_name" type="text" class="form-control">
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
											  	<input name="inquiry_content_1" value="商品について" type="checkbox" class="custom-control-input" id="cb01">
											  	<label class="custom-control-label" for="cb01">商品について</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_2" value="セキュリティ(偽造防止)印刷・加工" type="checkbox" class="custom-control-input" id="cb02">
											  	<label class="custom-control-label" for="cb02"> セキュリティ(偽造防止)印刷・加工</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_3" value="特殊印刷・加工" type="checkbox" class="custom-control-input" id="cb03">
											  	<label class="custom-control-label" for="cb03">特殊印刷・加工</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_4" type="checkbox" value="デジタル印刷" class="custom-control-input" id="cb04">
											  	<label class="custom-control-label" for="cb04">デジタル印刷</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_5" type="checkbox" value="フォーム印刷" class="custom-control-input" id="cb05">
											  	<label class="custom-control-label" for="cb05">フォーム印刷</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_6" type="checkbox" value="ピュアWプリント" class="custom-control-input" id="cb06">
											  	<label class="custom-control-label" for="cb06">ピュアWプリント</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_7" type="checkbox" value="その他" class="custom-control-input" id="cb07">
											  	<label class="custom-control-label" for="cb07">その他</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_8" type="checkbox" value="昇寿堂について" class="custom-control-input" id="cb08">
											  	<label class="custom-control-label" for="cb08">昇寿堂について</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_9" type="checkbox" value="昇寿堂ウェブサイトについて" class="custom-control-input" id="cb09">
											  	<label class="custom-control-label" for="cb09">昇寿堂ウェブサイトについて</label>
											</div>
											<div class="custom-control custom-checkbox mb-2">
											  	<input name="inquiry_content_10" type="checkbox" value="採用について" class="custom-control-input" id="cb010">
											  	<label class="custom-control-label" for="cb010">採用について</label>
											</div>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group mb-5">
		    						<label for="" class="mb-2">お問い合わせ詳細</label>
		    						<textarea name="inquiry_orther" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください"></textarea>
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
										<a id="inquiry_clean" class="btn btn_blue">リセット</a>
										<button type="button" class="btn btn_blue mr-0 js_frm_inquiry_to_confirm">上記に同意して確認</button>
									</p>
		    					</div>
		    				</form>
		    				<!--------------
		    					*						*
		    					*	Confirmation Page 	*
								*    					*
		    					-------------------------->
		    				<section class="form_info frm_confirm js_frm_confirm" style="display:none;">
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">お名前 <span>必須</span></label>
		    							</div>
		    							<div class="col-6 col-lg-4 align-self-center">
		    								<span class="view_inquiry_first_name"></span>
		    								<span class="view_inquiry_last_name"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">メールアドレス（確認用）<span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_email"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">会社・組織名 <span>必須</span></label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_company_name"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">担当部署</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_department"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">役職</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_position"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">電話番号</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_telephone"></span>
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
		    										<span class="view_inquiry_postcode"></span>
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
		    								<span class="view_inquiry_prefectures"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">市区町村</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_city_name"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">丁目番地</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_address"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4 align-self-center">
		    								<label for="">ビル・建物</label>
		    							</div>
		    							<div class="col-12 col-lg-8 align-self-center">
		    								<span class="view_inquiry_building_name"></span>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<div class="row">
		    							<div class="col-12 col-lg-4">
		    								<label for="">お問い合わせ内容</label>
		    							</div>
		    							<div class="col-12 col-lg-8">
		    								<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_1"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_2"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_3"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_4"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_5"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_6"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_7"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_8"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_9"></span>
											</div>
											<div class="custom-control custom-checkbox pl-0 mb-2">
											  	<span class="view_inquiry_content_10"></span>
											</div>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="form-group mb-5">
		    						<label for="" class="mb-2">お問い合わせ詳細</label>
		    						<span class="d-block view_inquiry_orther"></span>
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
									  	<input type="checkbox" data-valid="required" class="custom-control-input" id="cb_agree" checked>
									  	<label class="custom-control-label text-left text-lg-center label_agree label_required" for="cb_agree">個人情報の取り扱いに同意する場合はチェックを入れてください</label>
									</div>
									<p class="mt-3 d-flex justify-content-center">
										<a id="inquiry_back" class="btn btn_blue">戻る</a>
										<a id="inquiry_submit" class="btn btn_blue mr-0">上記に同意して送信</a>
									</p>
		    					</div>
		    				</section>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</section>


<?php include 'footer-content.php'; ?>
<?php include 'footer.php'; ?>