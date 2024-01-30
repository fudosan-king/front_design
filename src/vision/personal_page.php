<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body id="body-pd">
    <header class="header header_personal" id="header">
        <h1>個人ページ</h1>
        <div class="header_right">
            <p class="logo_company">ロゴ・社名が入ります</p>
            <div class="header_avatar">
                <a href="#" class="dropdown-toggle btn_dropdown" data-bs-toggle="dropdown">
                    <span class="avatar_img">
                        <img src="assets/images/avatar.png" alt="avatar">
                    </span>
                    <div class="avatar_info">
                        <span>山田 一郎</span>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <!-- <a href="#" class="nav_link"><img src="assets/images/icons/i_home.svg" alt="Home"></a> -->
                    <a href="#" class="nav_link"><img src="assets/images/icons/i_call.svg" alt="Call"></a>
                    <!-- <a href="#" class="nav_link"><img src="assets/images/icons/i_users.svg" alt="Users"></a>
                    <a href="#" class="nav_link"><img src="assets/images/icons/i_treediagram.svg" alt="Tree Diagram"></a> -->
                </div>
            </div>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main_content">
        <div class="header_toggle"><i class="bx bx-menu" id="header-toggle"></i></div>
        <section class="seciton_pagelist">
            <div class="pagelist_header">
                <h2>ページ一覧</h2>
                <div class="header_right">
                    <a href="#modal_editaccount" data-bs-toggle="modal" class="btn btn_pagecreation"><img src="assets/images/icons/i_add.svg" alt="i_add" width="16"> ページ作成</a>
                    <a href="#modal_inquirysettings" data-bs-toggle="modal" class="btn btn_inquirysettings"><img src="assets/images/icons/i_settings.svg" alt="i_settings" width="16"> 問い合わせフォーム設定</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-responsive-stack">
                    <thead>
                        <tr>
                            <th>ブログタイトル</th>
                            <th></th>
                            <th>当月アクセス</th>
                            <th>月間アクセス</th>
                            <th>最終更新日</th>
                            <th>公開設定</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. <a href="#">ページタイトルが入ります</a></td>
                            <td>
                                <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                                <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                            </td>
                            <td>50</td>
                            <td><a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></td>
                            <td>2023.11.01</td>
                            <td><a href="#" class="btn btn_public">公開する</a></td>
                            <td>
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                                    <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>2. <a href="#">ページページタイトルが入ります</a></td>
                            <td></td>
                            <td>24</td>
                            <td><a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></td>
                            <td>2023.10.31</td>
                            <td><a href="#" class="btn btn_opennow">公開中</a></td>
                            <td>
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                                    <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>3. <a href="#">ページタイトルが入ります</a></td>
                            <td></td>
                            <td>35</td>
                            <td><a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></td>
                            <td>2023.10.12</td>
                            <td><a href="#" class="btn btn_opennow">公開中</a></td>
                            <td>
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                                    <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>4. <a href="#">ページタイトルが入りますページタイトルが入ります</a></td>
                            <td>
                                <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                                <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                            </td>
                            <td>35</td>
                            <td><a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></td>
                            <td>2023.10.1</td>
                            <td><a href="#" class="btn btn_opennow">公開中</a></td>
                            <td>
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                                    <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table_sp">
                <div class="box_item">
                    <div class="each_row">
                        <p>1. <a href="#">ページタイトルが入ります</a></p>
                        <div class="box_edit">
                            <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                            <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                        </div>
                    </div>
                    <div class="each_row">
                        <p><span>当月アクセス</span> 50</p>
                    </div>
                    <div class="each_row">
                        <p><span>月間アクセス</span> <a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></p>
                    </div>
                    <div class="each_row">
                        <p><span>公開設定</span> <a href="#" class="btn btn_public">公開する</a></p>
                    </div>
                    <ul>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                        <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                    </ul>
                </div>
                <div class="box_item">
                    <div class="each_row">
                        <p>2. <a href="#">ページページタイトルが入ります</a></p>
                        <div class="box_edit">
                            <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                            <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                        </div>
                    </div>
                    <div class="each_row">
                        <p><span>当月アクセス</span> 24</p>
                    </div>
                    <div class="each_row">
                        <p><span>月間アクセス</span> <a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></p>
                    </div>
                    <div class="each_row">
                        <p><span>公開設定</span> <a href="#" class="btn btn_opennow">公開中</a></p>
                    </div>
                    <ul>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                        <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                    </ul>
                </div>
                <div class="box_item">
                    <div class="each_row">
                        <p>3. <a href="#">ページタイトルが入ります</a></p>
                        <div class="box_edit">
                            <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                            <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                        </div>
                    </div>
                    <div class="each_row">
                        <p><span>当月アクセス</span> 35</p>
                    </div>
                    <div class="each_row">
                        <p><span>月間アクセス</span> <a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></p>
                    </div>
                    <div class="each_row">
                        <p><span>公開設定</span> <a href="#" class="btn btn_opennow">公開中</a></p>
                    </div>
                    <ul>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                        <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                    </ul>
                </div>
                <div class="box_item">
                    <div class="each_row">
                        <p>4. <a href="#"> ページタイトルが入りますページタイトルが入ります</a></p>
                        <div class="box_edit">
                            <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                            <a class="btn_printer" href="#"><img src="assets/images/icons/i_printer.svg" alt="i_printer" width="24"></a>
                        </div>
                    </div>
                    <div class="each_row">
                        <p><span>当月アクセス</span> 35</p>
                    </div>
                    <div class="each_row">
                        <p><span>月間アクセス</span> <a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></p>
                    </div>
                    <div class="each_row">
                        <p><span>公開設定</span> <a href="#" class="btn btn_opennow">公開中</a></p>
                    </div>
                    <ul>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_copy.svg" alt="i_copy" width="24"></a></li>
                        <li><a href="#modal_barcodes" data-bs-toggle="modal"><img src="assets/images/icons/i_qa.svg" alt="i_qa" width="22"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_del.svg" alt="i_del" width="24"></a></li>
                    </ul>
                </div>
            </div>

            <a href="#" class="load-more">Load more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                </svg></a>

        </section>

        <section class="section_userlist">
            <form class="frm_userlist">
                <div class="userlist_header">
                    <h2>メンバー一覧</h2>
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
                                        <label for="件／ページ">件／ページ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
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

    <div class="modal fade modal_inquirysettings" id="modal_inquirysettings" tabindex="-1" aria-labelledby="inquirysettingsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="inquirysettingsLabel">お問合せフォーム設定</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="frm_inquirysettings" action="">
                        <p><b>固定項目</b> <span>※以下の項目はフォームに固定で表示されます。</span></p>
                        <div class="box">
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3">
                                        <label for="ご担当者名">ご担当者名</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <p class="red">※必須項目です</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3">
                                        <label for="会社名">会社名</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <p class="red">※必須項目です</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3">
                                        <label for="電話番号">電話番号</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ck_mandatory" checked>
                                            <label class="form-check-label" for="ck_mandatory">必須にする</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3">
                                        <label for="メールアドレス">メールアドレス</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ck_mandatory2">
                                            <label class="form-check-label" for="ck_mandatory2">必須にする</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><b>自由項目</b></p>
                        <div class="box">
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3">
                                        <label for="お問合せ選択項目">お問合せ選択項目</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <p class="red">※必須項目です</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3 text-start text-lg-end">
                                        <label for="項目名">項目名</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <input class="form-control" type="text" name="" value="" placeholder="例：お問合せ内容A">
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3 text-start text-lg-end">
                                        <label for="複数選択を許可する">複数選択を許可する</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ck_license" checked>
                                            <label class="form-check-label" for="ck_license">許可</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3 text-start text-lg-end">
                                        <label for="選択項目">選択項目</label>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <input type="text" class="form-control" name="" value="" placeholder="選択肢テキストを入力してください">
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="btn_file">
                                            <input type="file" class="form-control">
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form_group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="ご連絡事項">ご連絡事項</label>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ck_mandatory3" checked>
                                            <label class="form-check-label" for="ck_mandatory3">必須にする</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><b>通知先</b></p>
                        <div class="box">
                            <div class="form_group">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-4">
                                        <label for="メールアドレス">メールアドレス</label>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <input class="form-control" type="text" name="" value="" placeholder="例：xxxxxxx@logrenove.jp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn_update">更新する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal_accessdetail" id="modal_accessdetail" tabindex="-1" aria-labelledby="accessdetail_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <h1>アクセス詳細</h1>
                    <h2>アクセス数</h2>
                    <div class="accessdetail_content">
                        <table class="table table-hover table-borderless">
                            <tbody>
                                <tr>
                                    <td>2023年10⽉(当⽉)</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td>2023年9⽉</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <td>2023年8⽉</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>2023年7⽉</td>
                                    <td>36</td>
                                </tr>
                                <tr>
                                    <td>2023年6⽉</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>2023年5⽉</td>
                                    <td>64</td>
                                </tr>
                                <tr>
                                    <td>2023年4⽉</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>2023年3⽉</td>
                                    <td>79</td>
                                </tr>
                                <tr>
                                    <td>2023年2⽉</td>
                                    <td>106</td>
                                </tr>
                                <tr>
                                    <td>2023年1⽉</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>2022年12⽉</td>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <td>2022年11⽉</td>
                                    <td>46</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal_barcodes" id="modal_barcodes" tabindex="-1" aria-labelledby="barcodes_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="assets/images/barcode.png" alt="barcode">
                </div>
            </div>
        </div>
    </div>




    <?php require 'js-footer.php'; ?>
</body>

</html>