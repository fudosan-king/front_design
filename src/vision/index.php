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
            <a href="#modal_corporatesettings" class="btn_enterprisesettings" data-bs-toggle="modal">企業設定 <span>+</span></a>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="#" class="nav_link"><img src="assets/images/icons/i_home.svg" alt="Home"></a>

                    <a href="#" class="nav_link"><img src="assets/images/icons/i_call.svg" alt="Call"></a>

                    <div data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" data-bs-target="#collapseExample">
                        <a href="#collapseExample">
                            <img src="assets/images/icons/i_users.svg" alt="Users">
                            <ul class="collapse" id="collapseExample">
                                <li>
                                    <a class="dropdown-item" href="#" title="アカウント管理">
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
                    <a href="#modal_licenseapp" data-bs-toggle="modal">
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
                                    <div class="col-4 col-lg-auto">
                                        <label for="表示数">表示数：</label>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control number">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
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

    <div class="modal fade modal_corporatesettings" id="modal_corporatesettings" tabindex="-1" aria-labelledby="corporatesettings_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="corporatesettings_label">企業設定</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="frm_corporatesettings">
                        <div class="mb-3">
                            <label for="">会社名</label>
                            <input type="text" class="form-control" id="">
                        </div>

                        <div class="mb-3">
                            <label for="">会社ロゴ</label>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label for="fileField" class="attachment">
                                        <div class="row btn-file">
                                            <div class="btn-file__preview"></div>
                                            <div class="btn-file__actions">
                                                <div class="btn-file__actions__item col-xs-12 text-center">
                                                    <div class="btn-file__actions__item--shadow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
                                                            <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0zm2.292 0h-.917v1h.917zm1.833 0h-.917v1h.917zm1.833 0h-.916v1h.916zm1.834 0h-.917v1h.917zm1.833 0h-.917v1h.917zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0m2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917zm16 .917v-.917h-1v.917zM0 5.708v.917h1v-.917zm16 .917v-.917h-1v.917zM0 7.542v.916h1v-.916zm15 .916h1v-.916h-1zM0 9.375v.917h1v-.917zm16 .917v-.917h-1v.917zm-16 .916v.917h1v-.917zm16 .917v-.917h-1v.917zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487M.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1zm-9.625 0h.917v-1h-.917zm1.833 0h.917v-1h-.917zm1.834-1v1h.916v-1zm1.833 1h.917v-1h-.917zm1.833 0h.917v-1h-.917zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                                        </svg>
                                                        <div class="visible-xs-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="file" type="file" id="fileField">
                                    </label>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <a href="#" class="btn btn_del">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                        </svg> 削除
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">個⼈情報の取扱いについて</label>
                            <div class="label_url">
                                <span>URL</span> <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">プライバシーポリシー</label>
                            <div class="label_url">
                                <span>URL</span> <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <button class="btn btn_renew" type="submit">更新</button>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal_licenseapp" id="modal_licenseapp" tabindex="-1" aria-labelledby="licenseapp_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="licenseapp_label">ライセンス申請ユーザー</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <div class="mb-4">
                            <div class="box_header">
                                <div class="box_lyse">
                                    <span>所属</span>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="ンス申">ス申</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <a href="#" class="btn btn_agree">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </svg>
                                    一括付与
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ライセンス申請者</th>
                                        <th colspan="2" scope="col">所属</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>佐藤 ⼀郎</td>
                                        <td>営業部 ⼀課</td>
                                        <td><a href="#" class="btn btn_licensing">ライセンス付与</a></td>
                                    </tr>
                                    <tr>
                                        <td>鈴⽊ ⼆郎</td>
                                        <td>営業部 ⼆課</td>
                                        <td><a href="#" class="btn btn_licensing">ライセンス付与</a></td>
                                    </tr>
                                    <tr>
                                        <td>⼭⽥ 三郎</td>
                                        <td>カスタマーサクセス部</td>
                                        <td><a href="#" class="btn btn_licensing">ライセンス付与</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php require 'js-footer.php'; ?>
</body>

</html>