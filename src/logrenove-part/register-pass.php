<?php include 'common/header.php'; ?>
<div id="page">
    <div class="login_page register-pass">
        <div class="login_header">
            <a href="index.html" class=""><img src="assets/logo_.svg" alt="" class="img-fluid" width="250"></a>
        </div>
        <div class="login_body">
            <form action="" class="frm_main_login">
                <div class="login_body_top">
                	<p class="text">新しいパスワードを入力してください。</p>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="パスワード（半角英数6文字以上）">
                    </div>

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="パスワード確認（半角英数6文字以上）">
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn_login">設定する</button>
                    </div>

                </div>

         		<div class="login_body_bottom">
	         		<div class="form-group">
	                    <a href="#" class="btn btn_social btn_member mb-0">ログリノベTOPへ戻る</a>
	                </div>
            	</div>
         	</form>
        </div>
        <div class="login_footer text-center">
            <p>
                <a class="btn" href="#">プライバシーポリシー</a>
                <a class="btn" href="#">ログリノベ利用規約</a>
            </p>
            <p><a href="index.html" class=""><img src="assets/logo_gray.svg" alt="" class="img-fluid" width="163"></a></p>
            <p class="copyright">Copyright © <a href="#">LogKnot, inc.</a>All Rights Reserved.</p>
        </div>
    </div>
</div><!-- End page -->
<?php include 'common/footer.php'; ?>
