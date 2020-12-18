<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>

	      	<main>
	      		<section class="section_login">
	      			<div class="container">
	      				<div class="row">
	      					<div class="col col-12 col-sm-12">
  								<form action="" class="frm_login frm_forgotpass">
  									<h2>パスワードを忘れた方はこちら</h2>
  									<div class="form-group">
									    <input type="text" class="form-control" placeholder="Eメール">
									</div>
									<div class="form-group">
										<label for="">秘密の質問</label>
									    <select name="" class="form-control">
									    	<option value="">生まれた町の名前</option>
									    	<option value="">母親の旧姓</option>
									    	<option value="">ペットの名前</option>
									    	<option value="">尊敬する方の名前</option>
									    </select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="回答">
									</div>
									<div class="row no-gutters">
										<div class="col col-12 col-sm-6">
											<a href="#" class="btn btnforgot btn-lg"><i class="fas fa-sign-out-alt"></i> パスワードを忘れた方はこちら</a>
										</div>
										<div class="col col-12 col-sm-6">
											<a href="#" class="btn btnLogin btn-lg"><i class="fas fa-sign-in-alt"></i> ログイン</a>
										</div>
									</div>
  								</form>
	      					</div>
	      				</div>
	      			</div>
	      		</section>

	      		
	      	</main>

	      	<?php require 'footer.php'; ?>
    </div>

    <?php require 'js-footer.php'; ?>
</body>

</html>