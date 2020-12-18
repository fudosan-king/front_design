<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>

	      	<main>
	      		<div class="main_templates">
		      		<section class="section_contact">
		      			<div class="container">
		      				<div class="row">
		      					<div class="col-12 col-md-8 offset-md-2">
		      						<h4 class="text-center"><span class="red">＊</span> マークの項目は必ずご記入ください。</h4>
		      						<form action="finished.php" class="frm_contact">
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4 align-self-center">
		      										<label for="">お問い合わせ物件</label>
		      									</div>
		      									<div class="col-12 col-sm-8 align-self-center">
		      										<h3>Vinpearl Masteri Thaodien</h3>
		      									</div>
		      								</div>
		      							</div>
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4 align-self-center">
		      										<label for="">お名前 <span class="red">＊</span></label>
		      									</div>
		      									<div class="col-12 col-sm-8">
		      										<input type="text" class="form-control">
		      									</div>
		      								</div>
		      							</div>
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4 align-self-center">
		      										<label for="">住所 <span class="red">＊</span></label>
		      									</div>
		      									<div class="col-12 col-sm-8 align-self-center">
		      										<input type="text" class="form-control">
		      									</div>
		      								</div>
		      							</div>
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4">
		      										<label for="">電話番号 <span class="red">＊</span></label>
		      									</div>
		      									<div class="col-12 col-sm-8">
		      										<input type="text" class="form-control" placeholder="＋81 90 1234 5678">
		      									</div>
		      								</div>
		      							</div>
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4">
		      										<label for="">不動産ご購入の目的 <span class="red">＊</span></label>
		      									</div>
		      									<div class="col-12 col-sm-8">
		      										<div class="form-check form-check-inline">
													  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
													  	<label class="form-check-label" for="inlineCheckbox1">投資</label>
													</div>
													<div class="form-check form-check-inline">
													  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
													  	<label class="form-check-label" for="inlineCheckbox2">実住</label>
													</div>
		      									</div>
		      								</div>
		      							</div>
		      							<div class="form-group">
		      								<div class="row">
		      									<div class="col-12 col-sm-4">
		      										<label for="">お問い合わせ内容 <br>
		      										（ご自由にお書きください）</label>
		      									</div>
		      									<div class="col-12 col-sm-8">
		      										<textarea class="form-control" name="" cols="30" rows="8" placeholder="例）1区の不動産購入を検討しているがオススメはどれにな りますか など、ご自由にお書きください。"></textarea>
		      										<button type="submit" class="btn btn-dark btnSend mt-sm-5 mt-3">お問い合わせを送信する</button>
		      									</div>
		      								</div>
		      							</div>
		      							
		      						</form>
		      					</div>
		      				</div>
		      			</div>
		      		</section>

	      		</div>
	      	</main>

	      	<?php require 'footer.php'; ?>
	      	<a href="contact.php" class="btn btn_Contactus d-none d-sm-block"><span>お問い合わせ</span> <i class="fas fa-envelope fa-2x"></i></a>
    </div>

    <?php require 'js-footer.php'; ?>
</body>

</html>