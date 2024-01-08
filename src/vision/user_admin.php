<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <h1>
            <a href="http://18.179.82.28/admin/dashboard" class="logo"><img src="assets/images/logo_white.svg" style="vertical-align:baseline" width="200px" alt="header_logo"></a>
        </h1>
        <div class="header_right">
            <a class="logo"><img src="assets/images/header_logo.png" width="123" alt="header_logo"></a>
            <!-- <div class="header_avatar" style="margin-right:10px;margin-left:10px">
                <a href="#" class="avatar_img"><img src="https://t4.ftcdn.net/jpg/06/74/48/15/240_F_674481592_PgI2NVdHq8LLx2BVSVx2LLDjMddopNEQ.jpg" alt=""></a>
                <div class="avatar_info">
                    <span>管理者</span>
                    <p>administrator</p>
                </div>
            </div> -->

            <div class="header_avatar" style="margin-left:10px">
                <a class="dropdown-toggle btn_dropdown" data-bs-toggle="dropdown">
                    <span class="avatar_img">
                        <img src="http://18.179.82.28/watashiga1/storage/images/BhOut2UzZirBj7FsSzimqOSCdKa6fYjsD9ZoUwrJ.png" alt="avatar">
                    </span>
                    <div class="avatar_info">
                        <span>PCT Test</span>
                    </div>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <form>
                            <input type="hidden" name="_token" value="zMVD1pafLyFM04cTGgxTZa70AGJylmYDT4jVgcqv"> <a class="btn signout" data-toggle="modal" data-target="#changepassword" style=" display: flex;align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>&nbsp;パスワード変更</a>
                        </form>
                    </li>
                    <li>
                        <a class="btn signout" data-bs-toggle="modal" data-bs-target="#signoutuser" style=" display: flex;align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                            </svg>&nbsp;サインアウト
                        </a>
                    </li>
                </ul>
            </div>

            <!-- <div class="dropdown dropdown-rl d-none d-sm-block">
                <button class="btn border rounded" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" style="padding-right: 30px !important;color: white;" aria-expanded="false">
                    シーズ テスト
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <form>
                            <input type="hidden" name="_token" value="1fduttSG4xfoovBPPf1VBZKSl2lV89KIiDXHaTrA"> <a class="dropdown-item" data-toggle="modal" data-target="#changepassword">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>&nbsp;パスワード変更</a>
                        </form>
                    </li>
                </ul>
            </div> -->

            <!-- <a class="btn d-none d-sm-block signout" data-bs-toggle="modal" data-bs-target="#signout">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="28" height="21" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-sign-out-alt fa-w-16 fa-9x" width="512" height="512">
                    <path fill="#B4BEC8" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z" class=""></path>
                </svg>
            </a> -->
        </div>

    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="#" class="nav_link"><img src="assets/images/icons/i_home.svg" alt="Home"></a>

                    <a href="#" class="nav_link"><img src="assets/images/icons/i_call.svg" alt="Call"></a>

                    <a href="#" class="nav_link active"><img src="assets/images/icons/i_users.svg" alt="アカウント管理"></a>

                    <a href="#" class="nav_link"><img src="assets/images/icons/i_treediagram.svg" alt="Tree Diagram"></a>

                </div>
            </div>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main_content">
        <div class="header_toggle"> <i class="bx bx-menu" id="header-toggle"></i> </div>
        <div class="col spacing-with-btn-floating-w bg-content-container">
            <form name="search_form" id="search_form">
                <div class="box_sort_cate">
                    <h2>アカウント⼀覧</h2>
                    <div class="box_affiliation">
                        <label for="所属">所属</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="全て">全て</option>
                            <option value="...">...</option>
                        </select>
                    </div>
                    <a href="#modal_editaccount" class="btn btn_addaccount" data-bs-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                        </svg>
                        アカウント追加
                    </a>
                </div>

                <div id="no-table" class="table_info">
                    <table class="col-12 table table-striped cf">
                        <thead class="cf table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Permision</th>
                                <th>Staff ID</th>
                                <th>Staff Name</th>
                                <th>Category</th>
                                <th>Start Date</th>
                                <th>Email</th>
                                <th>License Start Date</th>
                                <th>License Expire Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="ID">1</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">2</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">3</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">4</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">5</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">6</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">7</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                            <tr>
                                <td data-title="ID">8</td>
                                <td data-title="Permision">管理者</td>
                                <td data-title="Staff ID">A0002</td>
                                <td data-title="Staff Name">佐藤　一郎</td>
                                <td data-title="Category">◯◯事業部</td>
                                <td data-title="Start Date">yyyy年m月d日</td>
                                <td data-title="Email">aaaa@mail.jp</td>
                                <td data-title="License Start Date">yyyy年m月d日</td>
                                <td data-title="License Expire Date">yyyy年m月d日</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <input type="hidden" name="_token" value="1fduttSG4xfoovBPPf1VBZKSl2lV89KIiDXHaTrA">
                <input type="hidden" name="delete_admin_user_id">
                <input type="hidden" name="_method" value="POST">
            </form>
        </div>





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
                                    <span>ライセ</span>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="ンス申">ンス申</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <a href="#" class="btn btn_agree">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </svg>
                                    ⽰⼀する。
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

    <div class="modal fade modal_editaccount" id="modal_editaccount" tabindex="-1" aria-labelledby="editaccount_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="editaccount_label">アカウント編集</h1>
                    <a href="#" class="btn btn_del">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                        </svg> アカウント削除
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="frm_editaccount">
                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">顔写真</label>
                            <div class="col-sm-4">
                                <div class="file-input">
                                    <input type="file" name="file-input" id="file-input" class="file-input__input" />
                                    <label class="file-input__label" for="file-input">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0" />
                                        </svg>
                                        <span>ファイル選択</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">⽒名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">社員番号</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">⼊社年⽉⽇</label>
                            <div class="col-sm-4">
                                <div class="box_datepicker">
                                    <input type="text" class="form-control datepicker" id="" placeholder="----/--/--">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0168B7" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">所属</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">メールアドレス<br>（ログインID）</label>
                            <div class="col-sm-9">
                                <input type="text" name="" value="" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="" class="col-sm-3 col-form-label text-start text-lg-end">企業管理者</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="cb_loginid" checked>
                                </div>
                            </div>
                        </div>

                        <div class="box_license">
                            <h3><span>ライセンス</span></h3>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row align-items-center">
                                        <label for="" class="col-sm-3 col-form-label text-start text-lg-end">開始⽇</label>
                                        <div class="col-sm-9">
                                            <div class="box_datepicker">
                                                <input type="text" class="form-control datepicker" id="" placeholder="----/--/--">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0168B7" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row align-items-center">
                                        <label for="" class="col-sm-3 col-form-label text-start text-lg-end">終了⽇</label>
                                        <div class="col-sm-9">
                                            <div class="box_datepicker">
                                                <input type="text" class="form-control datepicker" id="" placeholder="----/--/--">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0168B7" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn_renew" type="submit">更新</button>

                    </form>
                </div>

            </div>
        </div>
    </div>



    <?php require 'js-footer.php'; ?>
</body>

</html>