<!DOCTYPE html>
<html lang="ja">

<head>
    <?php require 'head.php'; ?>
</head>

<body class="p-home">

    <?php require 'header2.php'; ?>

    <main class="gBody">

    	<?php require 'section_logo_underpage.php'; ?>

		<section class="section_contact">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="title">お問い合わせ</h2>
						<p class="text-center">必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
						<span class="red">＊</span>がついている項目はご記入必須項目になります。</p>
						<form class="frm_contactus" action="">
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">お名前 <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-4">
										<input type="text" class="form-control" placeholder="姓">
									</div>
									<div class="col-12 col-md-4">
										<input type="text" class="form-control" placeholder="名">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">フリガナ <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-4">
										<input type="text" class="form-control" placeholder="セイ">
									</div>
									<div class="col-12 col-md-4">
										<input type="text" class="form-control" placeholder="メイ">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">ご連絡先電話番号 <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-8">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">メールアドレス <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-8">
										<input type="text" class="form-control">
										<p>（確認用）</p>
										<input type="text" class="form-control">
										<p>（半角英数）</p>
									</div>
								</div>
							</div>
							<div class="form-group p-0">
								<div class="row">
									<div class="col-12 col-md-4">
										<label class="pt-4" for="">ご住所 <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-8">
										<div class="form-group">
											<div class="row">
												<div class="col-12 col-md-3">
													<label for="">郵便番号</label>
												</div>
												<div class="col-12 col-md-3">
													<input type="text" class="form-control">
												</div>
												<div class="col-12 col-md-3">
													<a href="#" class="btn btn-sm btn-danger btn_address_search">住所検索</a>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-12 col-md-3">
													<label for="">都道府県</label>
												</div>
												<div class="col-12 col-md-9">
													<select class="form-control" name="" id="">
														<option value="">▼ 選択してください </option>
														<option value="">北海道</option>
														<option value="">...</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-12 col-md-3">
													<label for="">市区町村</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-12 col-md-3">
													<label for="">丁目番地</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group border-bottom-0">
											<div class="row">
												<div class="col-12 col-md-3">
													<label for="">建物・部屋番号</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">お問い合わせ内容 <span class="red">＊</span><br>
										（全角2000字まで）</label>
									</div>
									<div class="col-12 col-md-8">
										<textarea name="" id="" cols="30" rows="8"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-12 col-md-4">
										<label for="">個人情報の取扱について <span class="red">＊</span></label>
									</div>
									<div class="col-12 col-md-8">
										<div class="box_note">
											<p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
											<p><a href="https://www.propolife.co.jp/privacypolicy/" class="btn btn-link">▶「プライバシーポリシー」を開く</a></p>
											<div class="form-check">
											  	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
											  	<label class="form-check-label" for="defaultCheck1">
											    	<span class="text_checkbox">同意する</span>
											  	</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<p class="text-center mt-4"><button type="submit" class="btn btn-lg btn_checkentries">入力内容を確認する</button></p>

						</form>
					</div>
				</div>
			</div>
		</section>

		

    </main>

    <?php require 'footer.php'; ?>

    <?php require 'js_footer.php'; ?>
</body>

</html>