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
  								<form action="" class="frm_login">
  									<h2>ログイン</h2>
  									<div class="form-group">
									    <input type="text" class="form-control" placeholder="Eメール">
									</div>
									<div class="form-group">
									    <input type="text" class="form-control" placeholder="パスワード">
									</div>
									<div class="row no-gutters">
										<div class="col col-12 col-sm-6">
											<a href="#" class="btn btnSignup"><i class="i_register"></i> <span>新規会員登録</span></a>
										</div>
										<div class="col col-12 col-sm-6">
											<a href="#" class="btn btnLogin"><i class="i_login"></i> <span>ログイン</span></a>
										</div>
									</div>
									<a href="forgotpass.php" class="btn btnForgotpass"><i class="fas fa-lock-open fa-2x"></i> パスワードを忘れた方はこちら</a>
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