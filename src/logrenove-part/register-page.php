<?php include 'common/header.php'; ?>
    <div id="page">
        <div class="login_page register-page">
            <div class="login_header">
                <a href="index.html" class=""><img src="assets/logo_.svg" alt="" class="img-fluid" width="250"></a>
            </div>
            <div class="login_body">
                <form action="logined.php" class="frm_main_login">
                    <div class="login_body_top">

                        <h3>新規会員登録</h3>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="メールアドレス">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="パスワード（半角英数6文字以上）">
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="パスワード確認（半角英数6文字以上）">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="keeplogin">
                            <label class="custom-control-label" for="keeplogin">メールマガジンを受け取る</label>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn_login">入力を確認</button>
                        </div>
                         <p class="mb-0 note">登録することで、<a class="btn_forgotpass" href="#">利用規約</a>と<a class="btn_forgotpass" href="#">プライバシーポリシー</a><br>に同意したものとみなされます。</p>
                    </div>
                    <div class="login_body_bottom">
                        <p class="text-center mb-2">登録済みの方はこちら</p>
                        <a href="new_member.php" class="btn btn_login">ログイン</a>
                    </div>
                </form>
            </div>
            <div class="login_footer text-center">
                <p>
                    <a class="btn" href="#">プライバシーポリシー</a>
                    <a class="btn" href="#">ログリノベ利用規約</a>
                </p>
                <p class="mt-4"><a href="index.html" class=""><img src="assets/logo_gray.svg" alt="" class="img-fluid" width="163"></a></p>
                <p class="copyright">Copyright © <a href="#">PROPOLIFE GROUP INC.</a> All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- End page -->

<?php include 'common/footer.php'; ?>