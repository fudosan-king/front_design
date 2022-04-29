<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>

        <header class="header header_sub">
            <a href="index.php" class="logo"><img src="images/svg/logo.svg" alt="" class="img-fluid" width="125"></a>
            <div class="box_header_right">
                <a href="#" class="btn btn_username">
                    <div class="username_img">
                        <img src="images/avatar/username.png" alt="" class="img-fluid" width="32">
                    </div>
                    <span>ユーザーの名前</span>
                </a>
                <form class="frm_company" action="">
                    <select>
                        <option value="会社名">会社名</option>
                        <option value="会社名">...</option>
                    </select>
                </form>
                <a href="index.php" class="btn btn_logout">ログアウト</a>
            </div>
        </header>

        <div class="layout has-sidebar fixed-sidebar fixed-header">
            <aside id="sidebar" class="sidebar break-point-lg has-bg-image sidebar_sub">
                <div class="sidebar-layout">
                    <div class="sidebar-content">
                        <ul class="menu_left">
                            <li>
                                <a href="#">メニュー</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_dashboard.svg" alt="" class="img-fluid" width="18">
                                    <span>ダッシュボード</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_man.svg" alt="" class="img-fluid" width="18">
                                    <span>オペレーター管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_store.svg" alt="" class="img-fluid" width="18">
                                    <span>カスタマー管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_grid.svg" alt="" class="img-fluid" width="18">
                                    <span>グループ管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_photo.svg" alt="i_photo" class="img-fluid" width="18">
                                    <span>アバター管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_history.svg" alt="i_history" class="img-fluid" width="18">
                                    <span>通話履歴</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_history.svg" alt="" class="img-fluid" width="18">
                                    <span>シナリオ履歴</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_settings.svg" alt="i_settings" class="img-fluid" width="18">
                                    <span>アカウント設定</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_profile_settings.svg" alt="i_profile_settings" class="img-fluid" width="18">
                                    <span>プロフィール設定</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_folder.svg" alt="i_folder" class="img-fluid" width="18">
                                    <span>データ管理者管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_cam.svg" alt="i_cam" class="img-fluid" width="18">
                                    <span>モニタリング</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_management.svg" alt="i_management" class="img-fluid" width="18">
                                    <span>シナリオ管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/svg/i_recordsettings.svg" alt="i_recordsettings" class="img-fluid" width="20">
                                    <span>接客記録の設定</span>
                                </a>
                            </li>
                        </ul>
                        <div class="menu_left_footer">
                            <a id="btn-collapse" class="btn_open" href="#"></a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="layout">

                <main class="content">
                    <div class="template">
                        <div class="setting_services">
                            <h2>接客記録の設定</h2>
                            <div class="setting_services_content">
                                <div class="setting_services_item">
                                    <form class="frm_setting_services_item" action="">
                                        <div class="setting_services_header">
                                            <img src="images/svg/i_line.svg" alt="" class="img-fluid" width="25">
                                            <h3>テキスト</h3>
                                        </div>
                                        <div class="setting_services_title">
                                            <h4>フリーメモ</h4>
                                            <label>お知らせ機能として利用する
                                                <input type="checkbox" class="ios-switch green  bigswitch" checked>
                                                <div><div></div></div>
                                            </label>
                                            <label>
                                                <input type="checkbox" class="ios-switch bigswitch" checked>
                                                <div><div></div></div>
                                            </label>
                                        </div>
                                        <textarea rows="7" cols="1" placeholder="ここにテキストを入力"></textarea>
                                        <ul class="setting_services_footer">
                                            <li><a href="#"><img src="images/svg/i_edit.svg" alt="" class="img-fluid" width="27"> </a></li>
                                            <li><a href="#"><img src="images/svg/i_trash.svg" alt="" class="img-fluid" width="24"></a></li>
                                            <li><a href="#"><img src="images/svg/i_storage.svg" alt="" class="img-fluid" width="36"></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <?php include('js-footer.php') ?>
        
    </body>
</html>