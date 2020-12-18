<header>
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-4 align-self-center">
                    <a href="index.php" class="logo logo_md"><img src="images/1x/logo.svg" alt="" class="img-fluid" width="257"></a>
                </div>
                <div class="col-8 col-md-4 align-self-center">
                    <a href="index.php" class="logo logo_sm"><img src="images/1x/logo.svg" alt="" class="img-fluid" width="257"></a>
                    <form action="search_result.php" class="frm_search">
                        <input type="text" class="form-control" placeholder="検索">
                        <button class="btn btnGo" type="submit"><i class="fal fa-search"></i></button>
                    </form>
                </div>
                <div class="col-2 col-md-4 align-self-center text-right">
                    <div class="box_top_user_md">
                        <a href="login.php" class="btn btnSignup float-right ml-2"><i class="fas fa-sign-in-alt"></i> <span>ログイン</span></a>
                        <a href="signin.php" class="btn btnSignup float-right"><i class="fas fa-user"></i> <span>新規登録</span></a>
                    </div>
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="box_top_user_sm d-flex">
                <a href="signin.php" class="btn btnSignup flex-fill"><i class="fas fa-user"></i> <span>新規登録</span></a>
                <a href="login.php" class="btn btnSignup flex-fill"><i class="fas fa-sign-in-alt"></i> <span>ログイン</span></a>
            </div>
            <form action="search_result.php" class="frm_search frm_search_sm">
                <input type="text" class="form-control" placeholder="検索">
                <button class="btn btnGo" type="submit"><i class="fal fa-search"></i></button>
            </form>
            <div class="accordion accordionNav" id="accordionNav">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ヴィンテージマンション図鑑 <i class="fal fa-chevron-right"></i>
                        </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionNav">
                        <div class="card-body">
                            <ul>
                                <li><a href="">東京編</a></li>
                                <li><a href="">神奈川編</a></li>
                                <li><a href="">埼玉編</a></li>
                                <li><a href="">愛知編</a></li>
                                <li><a href="">京都編</a></li>
                                <li><a href="">大阪編</a></li>
                                <li><a href="">兵庫編</a></li>
                                <li><a href="">福岡編</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                リノベーション基礎知識 <i class="fal fa-chevron-right"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionNav">
                        <div class="card-body">
                            <ul>
                                <li><a href="#">リノベーションとは</a></li>
                                <li><a href="#">リフォームとは</a></li>
                                <li><a href="#">費用・ローン</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#" aria-expanded="false" aria-controls="collapseThree">
                                リノベーション事例
                            </button>
                        </h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                リノベーションライフスタイル <i class="fal fa-chevron-right"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionNav">
                        <div class="card-body">
                            <ul>
                                <li><a href="#">インテリア</a></li>
                                <li><a href="#">収納</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </nav>

</header>