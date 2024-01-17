<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <h1>
            <a href="index.php" class="logo"><img src="assets/images/header_logo.png" width="123" alt="header_logo"></a>
        </h1>
        <div class="header_right">
            <div class="header_avatar">
                <a href="#" class="avatar_img"><img src="assets/images/avatar.png" alt=""></a>
                <div class="avatar_info">
                    <span>管理者</span>
                    <p>山田 一郎</p>
                </div>
            </div>
            <a href="#" class="btn_enterprisesettings">企業設定 <span>+</span></a>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="#" class="nav_link"><img src="assets/images/icons/i_home.svg" alt="Home"></a>

                    <a href="#" class="nav_link"><img src="assets/images/icons/i_call.svg" alt="Call"></a>

                    <div data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseExample" data-bs-target="#collapseExample">
                        <a href="#collapseExample">
                            <img src="assets/images/icons/i_users.svg" alt="Users">
                            <ul class="collapse show" id="collapseExample">
                                <li>
                                    <a class="dropdown-item active" href="#" title="アカウント管理">
                                        <img src="assets/images/icons/i_accountmanagement.svg" alt="アカウント管理" width="18">
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" title="アクセスログ">
                                        <img src="assets/images/icons/i_accesslog.svg" alt="アクセスログ" width="18">
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" title="視聴ログ通知">
                                        <img src="assets/images/icons/i_viewing.svg" alt="視聴ログ通知" width="18">
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" title="アラート通知">
                                        <img src="assets/images/icons/i_alert.svg" alt="アラート通知" width="18">
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </div>

                    <a href="#" class="nav_link"><img src="assets/images/icons/i_treediagram.svg" alt="Tree Diagram"></a>

                </div>
            </div>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main_content">
        <section class="section_usagesummary">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <h2>利用状況サマリ</h2>
            <ul class="list_usagesummary">
                <li>
                    <a href="#">
                        <span class="i_con"><img src="assets/images/icons/i_group.svg" width="28" alt="Group"></span>
                        <div class="info">
                            <h3>公開中ユーザー</h3>
                            <p><span class="number_big">5</span> <span class="text_total">公開ページ総数</span> <span class="number_medium">7</span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="i_con"><img src="assets/images/icons/i_card.svg" width="28" alt="Card"></span>
                        <div class="info">
                            <h3>ライセンスユーザー</h3>
                            <p><span class="number_big">6</span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="info">
                            <h3>利用申請ユーザー</h3>
                            <p><span class="number_big">2</span> <span class="btn_license">ライセンスを付与 +</span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="i_con"><img src="assets/images/icons/i_logout.svg" width="28" alt="Logout"></span>
                        <div class="info">
                            <h3>月内終了予定ユーザー</h3>
                            <p><span class="number_big">1</span></p>
                        </div>
                    </a>
                </li>
            </ul>
        </section>


        <section class="section_userlist">
            <form class="frm_userlist">
                <div class="userlist_header">
                    <h2>ユーザー一覧</h2>
                    <div class="userlist_search">
                        <div class="row align-items-center">
                            <div class="col-3 col-lg-auto">
                                <label for="inputPassword6" class="col-form-label">所属：</label>
                            </div>
                            <div class="col-9 col-lg-auto mb-2 mb-lg-0">
                                <select class="form-select" aria-label="営業部 第1課 〇〇チーム">
                                    <option selected>営業部 第1課 〇〇チーム</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-3 col-lg-auto">
                                <label for="inputPassword6" class="col-form-label">並べ替え：</label>
                            </div>
                            <div class="col-9 col-lg-auto">
                                <select class="form-select" aria-label="アクセスが多い順">
                                    <option selected>アクセスが多い順</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="listuser">
                    <li>
                        <a href="#" data-bs-target="#modal_userdetails" data-bs-toggle="modal">
                            <div class="listuser_header">
                                <div class="avatar" href="#"><img src="assets/images/user01.png" alt="user01"></div>
                                <div class="avatar_info">
                                    <h4>山田 太郎</h4>
                                    <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                                </div>
                            </div>
                            <ul class="listuser_info">
                                <li>
                                    <p>公開中</p>
                                    <p>2</p>
                                </li>
                                <li>
                                    <p>当月アクセス</p>
                                    <p>50</p>
                                </li>
                                <li>
                                    <p>最終更新日</p>
                                    <p>2023/10/11</p>
                                </li>
                            </ul>
                            <div class="listuser_img">
                                <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="listuser_header">
                            <a class="avatar" href="#"><img src="assets/images/user02.png" alt="user02"></a>
                            <div class="avatar_info">
                                <h4>山田 太郎</h4>
                                <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                            </div>
                        </div>
                        <h5 class="red_text">公開されているページがありません</h5>
                        <div class="listuser_img">
                            <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                <div class="carousel-cell">
                                    <a href="assets/images/no_img.png" data-fancybox="gallery">
                                        <img src="assets/images/no_img.png" alt="No image">
                                    </a>
                                </div>
                                <div class="carousel-cell">
                                    <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="listuser_header">
                            <a class="avatar" href="#"><img src="assets/images/user03.png" alt="user03"></a>
                            <div class="avatar_info">
                                <h4>山田 太郎</h4>
                                <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn_grantlicense">ライセンスを付与する</a>
                    </li>

                    <li>
                        <a href="#" data-bs-target="#modal_userdetails" data-bs-toggle="modal">
                            <div class="listuser_header">
                                <div class="avatar"><img src="assets/images/user04.png" alt="user04"></div>
                                <div class="avatar_info">
                                    <h4>山田 太郎</h4>
                                    <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                                </div>
                            </div>
                            <ul class="listuser_info">
                                <li>
                                    <p>公開中</p>
                                    <p>2</p>
                                </li>
                                <li>
                                    <p>当月アクセス</p>
                                    <p>50</p>
                                </li>
                                <li>
                                    <p>最終更新日</p>
                                    <p>2023/10/11</p>
                                </li>
                            </ul>
                            <div class="listuser_img">
                                <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-target="#modal_userdetails" data-bs-toggle="modal">
                            <div class="listuser_header">
                                <div class="avatar"><img src="assets/images/user05.png" alt="user05"></div>
                                <div class="avatar_info">
                                    <h4>山田 太郎</h4>
                                    <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                                </div>
                            </div>
                            <ul class="listuser_info">
                                <li>
                                    <p>公開中</p>
                                    <p>2</p>
                                </li>
                                <li>
                                    <p>当月アクセス</p>
                                    <p>50</p>
                                </li>
                                <li>
                                    <p>最終更新日</p>
                                    <p>2023/10/11</p>
                                </li>
                            </ul>
                            <div class="listuser_img">
                                <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-target="#modal_userdetails" data-bs-toggle="modal">
                            <div class="listuser_header">
                                <div class="avatar"><img src="assets/images/user06.png" alt="user06"></div>
                                <div class="avatar_info">
                                    <h4>山田 太郎</h4>
                                    <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                                </div>
                            </div>
                            <ul class="listuser_info">
                                <li>
                                    <p>公開中</p>
                                    <p>2</p>
                                </li>
                                <li>
                                    <p>当月アクセス</p>
                                    <p>50</p>
                                </li>
                                <li>
                                    <p>最終更新日</p>
                                    <p>2023/10/11</p>
                                </li>
                            </ul>
                            <div class="listuser_img">
                                <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-bs-target="#modal_userdetails" data-bs-toggle="modal">
                            <div class="listuser_header">
                                <div class="avatar"><img src="assets/images/user01.png" alt="user01"></div>
                                <div class="avatar_info">
                                    <h4>山田 太郎</h4>
                                    <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                                </div>
                            </div>
                            <ul class="listuser_info">
                                <li>
                                    <p>公開中</p>
                                    <p>2</p>
                                </li>
                                <li>
                                    <p>当月アクセス</p>
                                    <p>50</p>
                                </li>
                                <li>
                                    <p>最終更新日</p>
                                    <p>2023/10/11</p>
                                </li>
                            </ul>
                            <div class="listuser_img">
                                <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                    <div class="carousel-cell">
                                        <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="listuser_header">
                            <a class="avatar" href="#"><img src="assets/images/user02.png" alt="user02"></a>
                            <div class="avatar_info">
                                <h4>山田 太郎</h4>
                                <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                            </div>
                        </div>
                        <h5 class="red_text">公開されているページがありません</h5>
                        <div class="listuser_img">
                            <div class="carousel js-flickity" data-flickity-options='{ "prevNextButtons": false }'>
                                <div class="carousel-cell">
                                    <a href="assets/images/no_img.png" data-fancybox="gallery">
                                        <img src="assets/images/no_img.png" alt="No image">
                                    </a>
                                </div>
                                <div class="carousel-cell">
                                    <a href="assets/images/01.png" data-fancybox="gallery"><img src="assets/images/01.png" alt="01"></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="listuser_header">
                            <a class="avatar" href="#"><img src="assets/images/user03.png" alt="user03"></a>
                            <div class="avatar_info">
                                <h4>山田 太郎</h4>
                                <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn_grantlicense">ライセンスを付与する</a>
                    </li>
                </ul>

                <div class="userlist_footer">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <p class="totalpieces">全 <span>27</span> 件</p>
                        </div>
                        <div class="col-12 col-lg-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <img src="assets/images/icons/chevron_left.svg" alt="chevron left" width="15">
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item"><a class="page-link" href="#">11</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <img src="assets/images/icons/chevron_right.svg" alt="chevron right" width="15">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="box_indicates">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-auto">
                                        <label for="表示数">表示数：</label>
                                        <input type="number" name="" value="9">
                                        <label for="名／ページ">名／ページ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
        </section>

        <section class="section_datasummary">
            <div class="box_datasummary">
                <form class="frm_datasummary">
                    <div class="datasummary_header">
                        <h2>データサマリ</h2>
                        <div class="search_department">
                            <div class="row align-items-center">
                                <div class="col-2 col-lg-auto">
                                    <label for="" class="col-form-label">部門:</label>
                                </div>
                                <div class="col-10 col-lg-auto">
                                    <select class="form-select" aria-label="営業部 第1課 〇〇チーム">
                                        <option selected>全て</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box_chart">
                        <div class="box_chart_head">
                            <h3>ページアクセス推移（所属）</h3>
                            <div class="box_chart_head_right">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">月別</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-day-tab" data-bs-toggle="pill" data-bs-target="#pills-day" type="button" role="tab" aria-controls="pills-day" aria-selected="false">日別</button>
                                    </li>
                                </ul>
                                <div class="box_switch">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="viewbydepartment" checked>
                                        <label class="form-check-label" for="viewbydepartment">部署別で表示</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_chart_main">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab" tabindex="0">
                                    <canvas id="myMultiAxisChart_month" class="main_charts" style="height: 252px;"></canvas>
                                </div>
                                <div class="tab-pane fade" id="pills-day" role="tabpanel" aria-labelledby="pills-day-tab" tabindex="0">
                                    <canvas id="myMultiAxisChart_day" class="main_charts" style="height: 252px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box_chart">
                        <div class="box_chart_head">
                            <h3>当月ページアクセス数（個人ランキング）</h3>
                        </div>
                        <div class="box_chart_main">
                            <canvas id="myHorizontalBarChart" class="main_charts" style="height: 252px;"></canvas>
                        </div>
                    </div>

                    <div class="box_chart">
                        <div class="box_chart_head">
                            <h3>ページアクセス推移（個人）</h3>
                            <div class="box_chart_head_right">
                                <div class="select_user">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-auto">
                                            <select class="form-select" aria-label="ユーザーを選択">
                                                <option value="ユーザーを選択">ユーザーを選択</option>
                                                <option value="山田 太郎さん">山田 太郎さん</option>
                                                <option value="山田 太郎さん">山田 太郎さん</option>
                                                <option value="山田 太郎さん">山田 太郎さん</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_chart_main">
                            <canvas id="myMultiAxisChart2" class="main_charts" style="height: 252px;"></canvas>
                        </div>
                    </div>

                </form>
            </div>
        </section>





    </div>

    <!--Container Main end-->

    <?php require 'footer.php'; ?>

    <!-- Modal -->
    <div class="modal fade modal_userdetails" id="modal_userdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">ユーザー詳細</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="listuser_header">
                        <a class="avatar" href="#"><img src="assets/images/user01.png" alt="user01"></a>
                        <div class="avatar_info">
                            <h4>山田 太郎</h4>
                            <p>営業部 第1課 〇〇 〇〇 〇〇チーム</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ページタイトル</th>
                                    <th scope="col">当月アクセス</th>
                                    <th scope="col">最終更新日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">ページタイトルが入りますページタイトルが入ります</a></td>
                                    <td>50</td>
                                    <td>2023.11.01</td>
                                </tr>
                                <tr>
                                    <td><a href="#">ページタイトルが入りますページタイトルが入ります</a></td>
                                    <td>24</td>
                                    <td>2023.10.31</td>
                                </tr>
                                <tr>
                                    <td><a href="#">ページタイトルが入りますページタイトルが入ります</a></td>
                                    <td>35</td>
                                    <td>2023.10.12</td>
                                </tr>
                                <tr>
                                    <td><a href="#">ページタイトルが入りますページタイトルが入ります</a></td>
                                    <td>10</td>
                                    <td>2023.10.01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require 'js-footer.php'; ?>
</body>

</html>