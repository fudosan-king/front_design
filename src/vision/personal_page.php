<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body id="body-pd">
    <!-- <header class="header header_personal" id="header">
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
    </header> -->

    <header class="header" id="header">
        <h1>
            <a href="http://18.179.82.28/watashiga2/admin/dashboard" class="logo"><img src="assets/images/logo_white.svg" style="vertical-align:baseline" width="200px" alt="header_logo"></a>
        </h1>
        <div class="header_right">
            <a href="http://18.179.82.28/watashiga2/admin/dashboard" class="logo"><img src="assets/images/50yLR36v5uZ9WiRUmgJgPZIrNOPhi32tMeuwxrFp.png" width="123" alt="header_logo"></a>


            <div class="header_avatar" style="position: relative; margin-right: 0;">
                <div class="avatar_info avatar_name">
                    <p>VISION11</p>
                </div>
                <a class="dropdown-toggle btn_dropdown dropdown-companies" data-bs-toggle="dropdown" id="dropdownMenuButtonCompnay" aria-expanded="false">
                    <div class="avatar_info">
                        <p>LOGKNOT LOGKNOT</p>
                    </div>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <form>
                            <input type="hidden" name="_token" value="TJDNtbapbesAjKbMpS1NDzZZcaJgXwhpNtlwbi6R"> <a class="dropdown-item" href="http://18.179.82.28/watashiga2/admin/companies/1/selected">VISION</a>
                            <a class="dropdown-item" href="http://18.179.82.28/watashiga2/admin/companies/2/selected">LOGKNOT</a>
                            <a class="dropdown-item" href="http://18.179.82.28/watashiga2/admin/companies/4/selected">ACD</a>
                            <a class="dropdown-item" href="http://18.179.82.28/watashiga2/admin/companies/5/selected">PHONG TEST COMPANY</a>
                            <a class="dropdown-item" href="http://18.179.82.28/watashiga2/admin/companies/6/selected">ASD</a>
                        </form>
                    </li>
                </ul>



            </div>


            <div class="header_avatar header_avatar_right">


                <a class="dropdown-toggle btn_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="avatar_img">
                        <img src="assets/images/qq1DPIKMiWn0e156lsxV74RkOFV3Xqb6IUU8bita.jpg" alt="avatar">
                    </span>

                    <div class="avatar_info avatar_name">
                        <span>管理者</span>
                        <p>administrator</p>
                    </div>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <form>
                            <input type="hidden" name="_token" value="TJDNtbapbesAjKbMpS1NDzZZcaJgXwhpNtlwbi6R">
                            <a class="dropdown-item" data-toggle="modal" data-target="#changepassword">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>&nbsp;
                                パスワード変更</a>
                        </form>
                    </li>
                    <li>
                        <input type="file" name="file-input" id="file-input" class="file-input__input">



                        <label class="file-input__label" for="file-input">
                            <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                            </svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>&nbsp;
                            <span>アカウント画像変更</span>
                        </label>
                    </li>

                    <li>
                        <a class="btn d-none d-sm-block signout dropdown-item" data-bs-toggle="modal" data-bs-target="#signout" style="display: flex;align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                            </svg>&nbsp;サインアウト
                        </a>
                    </li>

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
                <table class="table">
                    <thead>
                        <tr>
                            <th>ブログタイトル</th>
                            <th></th>
                            <th>アクセス数<br>
                                (過去30日)</th>
                            <th>月間アクセス</th>
                            <th>最終更新日</th>
                            <th>公開設定</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. <a href="#">Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch, Check icon password bị lệch</a></td>
                            <td>
                                <a href="#"><img src="assets/images/icons/i_lock.svg" alt="i_edit" width="19"></a>
                                <a class="btn_printer" href="#">
                                    <img class="img-fluid" src="assets/images/icons/i_printer.svg" alt="i_printer" width="24">
                                </a>
                            </td>
                            <td>50</td>
                            <td><a href="#modal_accessdetail" class="btn btn_refer" data-bs-toggle="modal">参照する</a></td>
                            <td>2023.11.01</td>
                            <td><a href="#" class="btn btn_public">公開する</a></td>
                            <td>
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copy link" width="24"></a></li>
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
                                    <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                                    <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                                    <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                        <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                        <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                        <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copylink" width="24"></a></li>
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
                        <li><a href="#"><img src="assets/images/icons/copy.svg" alt="copy" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/i_edit.svg" alt="i_edit" width="24"></a></li>
                        <li><a href="#"><img src="assets/images/icons/copylink.svg" alt="copy link" width="24"></a></li>
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
            <div class="frm_userlist">

                <div class="userlist_header">
                    <h2 class="mb-0">メンバー一覧</h2>
                    <div class="userlist_search">
                        <div class="row align-items-center">
                            <div class="col-3 col-lg-auto">
                                <label for="inputPassword6" class="col-form-label">所属：</label>
                            </div>
                            <div class="col-9 col-lg-auto mb-2 mb-lg-0">
                                <select class="form-select form-select-category" aria-label="全て">
                                    <option value="0">全て</option>
                                    <option value="1">Department 1</option>
                                    <option value="5">Department 1 ＞Divison 1</option>
                                    <option value="2">Department 1 ＞Divison 1 ＞Team 1</option>
                                    <option value="4">Department 1 ＞Divison 1 ＞Team 1 ＞Area 1</option>
                                    <option value="6">Department 1 ＞Divison 1 ＞Team 1 ＞Area 1 ＞District 1</option>
                                    <option value="8">Department 1 ＞Divison 1 ＞Team 3</option>
                                    <option value="7">Department 1 ＞District 2</option>
                                    <option value="11">Department 1 ＞Test Category</option>
                                    <option value="12">Department 2</option>
                                    <option value="13">Department 2 ＞QC Team A1</option>
                                    <option value="37">Department 2 ＞QC Team A2</option>
                                    <option value="39">Department 2 ＞QC Team A2 ＞QC Team HCM</option>
                                    <option value="41">Department 2 ＞QC Team A2 ＞QC Team HCM ＞QC Logknot</option>
                                    <option value="40">Department 2 ＞QC Team A2 ＞QC Team HN</option>
                                    <option value="38">Department 2 ＞QC Team A3</option>
                                    <option value="14">Department 3</option>
                                    <option value="23">Department 4</option>
                                    <option value="87">部署テスト</option>
                                    <option value="88">部署テスト２</option>
                                </select>
                            </div>
                            <div class="col-3 col-lg-auto">
                                <label for="inputPassword6" class="col-form-label">並べ替え：</label>
                            </div>
                            <div class="col-9 col-lg-auto">
                                <select class="form-select form-select-sort" aria-label="アクセスが多い順">
                                    <option value="update_desc">ページ更新が新しい順</option>
                                    <option value="update_asc">ページ更新が古い順</option>
                                    <option value="most_views">アクセスが多い順</option>
                                    <option value="least_views">アクセスが少ない順</option>
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

                <div class="userlist_footer mb-5">
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