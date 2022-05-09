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
                        <section class="section_breadcrumb">
                            <ul>
                                <li><a href="#"><img src="images/svg/i_back_purple.svg" alt="" class="img-fluid" width="12"> 戻る</a></li>
                                <li><a href="#">シナリオ管理</a></li>
                                <li><a href="#">シナリオタイトル</a></li>
                                <li><a href="#">通話終了画面の作成</a></li>
                            </ul>
                        </section>

                        <section class="section_editpage">
                            <form action="" class="frm_editpage">
                                <div class="custom-radios">
                                    <div>
                                        <input type="radio" id="color-1" name="color" value="color-1" checked>
                                        <label for="color-1">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-2" name="color" value="color-2">
                                        <label for="color-2">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-3" name="color" value="color-3">
                                        <label for="color-3">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="color-4" name="color" value="color-4">
                                        <label for="color-4">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="color-5" name="color" value="color-5">
                                        <label for="color-5">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-6" name="color" value="color-6">
                                        <label for="color-6">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-7" name="color" value="color-7">
                                        <label for="color-7">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="color-9" name="color" value="color-9">
                                        <label for="color-9">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="color-10" name="color" value="color-10">
                                        <label for="color-10">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="color-11" name="color" value="color-11">
                                        <label for="color-11">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="color-12" name="color" value="color-12">
                                        <label for="color-12">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="color-13" name="color" value="color-13">
                                        <label for="color-13">
                                            <span><img src="images/svg/i_check_white.svg" alt="Checked Icon" width="12"></span>
                                        </label>
                                    </div>

                                </div>
                            </form>
                        </section>

                    </div>
                </main>

            </div>
        </div>

        <?php include('js-footer.php') ?>
        
    </body>
</html>