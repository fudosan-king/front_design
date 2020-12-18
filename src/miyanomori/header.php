<header>
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand" href="index.php">
            <img src="images/SVG/logo.svg" alt="" class="img-fluid logo_white" width="246">
            <img src="images/SVG/logo_black.svg" alt="" class="img-fluid logo_black" width="246">
        </a>
        <button class="navbar-toggler toggler-spring menu">
            <span class="menuLine"></span>
            <span class="menuLine"></span>
            <span class="menuLine"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="#modal_login" data-toggle="modal">ログイン</a></li>
                <li class="nav-item js-menuAnimation dropdown dropdown-right">
                    <a class="nav-link carets" href="index.php">JP</a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">JP</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">EN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">CH</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="bsnav-mobile d-block d-xl-none">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
</div>

<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  <div class="modal-dialog modal-md modal-dialog-centered">

    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">物件エントリー者様限定サイト ログイン</h5>
        </div>
        <div class="modal-body">
            <form action="" class="frm_login">
                <div class="frm_login_top">
                    <h4>メールアドレスでログイン</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="メールアドレス">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="パスワード">
                    </div>
                    <div class="form-group mb-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <a href="index2.php" class="btn btn_brown">ログインする</a>
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <a href="#" class="btn btn-link btn_forgotpass">パスワードをお忘れの方はこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frm_login_bottom">
                    <h4>まだ物件エントリーされていない方は下記よりエントリーください。<br>
                    限定サイトへのログインパスワードをお送りします。</h4>
                    <div class="frm_login_bottom_content">
                        <p>物件エントリー者様限定サイトでは、<br>
                        未公開プランなど物件エントリー者様だけの「限定情報」を公開中です。</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="メールアドレス">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="パスワード">
                        </div>
                        <a class="btn btn_brown d-block" href="index2.php">物件エントリーする</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>