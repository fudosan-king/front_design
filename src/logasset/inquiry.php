<?php include 'header.php'; ?>
<?php include 'navigation-no-fixed.php'; ?>
<section>
    <div class="inquiry">
    	<div class="container">
	        <div class="contact_top">
	            <h1 class="title text-center">
	                お問い合わせ
	            </h1>
	            <p class="text-center">フォームに必要事項をご入力ください。</p>
	        </div>
	        <div class="contact_content">
	            <form action="" class="frm formrun js_frm-inquiry" method="POST">
	                <div class="form-group">
	                    <div class="row align-items-center">
	                        <div class="col-12 col-md align-self-center">
	                            <label for="" class="label label_required">
	                                お名前<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12 col-md align-self-center">
	                            <input type="text" class="form-control required" maxlength="50" placeholder="例：山田　太郎" name="ct_fullname">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row align-items-center">
	                        <div class="col-12 col-md">
	                            <label for="" class="label">貴社名（※法人様の場合</label>
	                        </div>
	                        <div class="col-12 col-md">
	                            <div class="box_datetime">
	                                <input type="text" class="form-control" placeholder="" name="ct_company">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row align-items-center">
	                        <div class="col-12 col-md align-self-center">
	                            <label for="" class="label label_required">メールアドレス<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12 col-md align-self-center">
	                            <input type="email" class="form-control js_valid-email" maxlength="200" placeholder="例：◯◯◯◯◯◯@xxxxxxxx.jp" name="ct_email">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-6">
	                            <label class="label_required" for="">お問い合わせ内容<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12">
	                            <div class="placeholder">
	                                ご質問やご希望があればご記入ください。
	                            </div>
	                            <textarea name="ct_inquiry" class="form-control" cols="30" rows="5"></textarea>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-12">
	                            <div class="frm_contactus_footer">
	                                <p class="text-center">
	                                    弊社の個人情報に関する取り扱いについては<a href="https://www.propolife.co.jp/privacypolicy" target="_blank"> プライバシーポリシー </a>をご一読ください。
	                                    <br>
	                                    上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
	                                </p>
	                                <div class="custom-control custom-checkbox text-center">
	                                    <input type="checkbox" class="custom-control-input required" id="ck_agree">
	                                    <label class="custom-control-label label_required" for="ck_agree">同意する
	                                    </label>
	                                </div>
	                                <button type="button" class="btn btn-submit js_submit-ct-inquiry"><span>上記に同意して確認画面へ</span></button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </form>
	            <!-- Confirm -->
	            <section class="frm js_contact-buyer-confirm" style="display: none; max-width: 600px; margin:0 auto;">
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-5 align-self-center">
	                            <label for="" class="label_required">お名前<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12 col-lg-7 align-self-center">
	                            <span class="view_ct_fullname"></span>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-5 align-self-center">
	                            <label for="" class="">貴社名（※法人様の場合</label>
	                        </div>
	                        <div class="col-12 col-lg-7 align-self-center">
	                            <span class="view_ct_company"></span>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-5">
	                            <label for="label_required">
	                                メールアドレス<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12 col-lg-7">
	                            <span class="view_ct_email"></span>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-5">
	                            <label for="label_required">
	                                お問い合わせ内容<span class="red">必須</span></label>
	                        </div>
	                        <div class="col-12 col-lg-7">
	                            <span class="view_ct_inquiry"></span>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="row">
	                        <div class="col-12 col-lg-12">
	                            <div class="frm_contactus_footer">
	                                <p class="text-center">
	                                    弊社の個人情報に関する取り扱いについては<a href="https://www.propolife.co.jp/privacypolicy" target="_blank"> プライバシーポリシー </a>をご一読ください。
	                                    <br>
	                                    上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。
	                                </p>
	                                <div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input required" id="ck_agree" checked>
	                                    <label class="custom-control-label label_required" for="ck_agree">同意する
	                                    </label>
	                                </div>
	                                <div class="row" style="margin-top: 30px">
	                                    <div class="col-6 col-md-6">
	                                        <div class="end-form" style="width: 100%;">
	                                            <button type="button" class="btn w-100 btn_brown " id="buyerBack" value="戻る">
	                                                戻る</button>
	                                        </div>
	                                    </div>
	                                    <div class="col-6 col-md-6">
	                                        <div class="end-form" style="width: 100%;">
	                                            <button type="button" class="btn w-100 btn_brown " id="buyerSubmit" value="送信する">
	                                                送信する</button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</section>
			</div>
		</div>
	</div>
</section>
<?php include 'footer-content.php'; ?>
<?php include 'footer.php'; ?>