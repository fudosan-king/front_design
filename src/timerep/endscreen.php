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
                                <a href="#0" class="cd-popup-trigger">メニュー</a>
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

                        <section class="section_endscreen">
                            <div class="header_endscreen">
                                <div class="col">
                                    <h1>通話終了画面の作成</h1>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn">プレビュー</a>
                                    <a href="#" class="btn">保存</a>
                                </div>
                            </div>
                            
                            <form class="frm_endscreen" action="">
                                <div class="form-group">
                                    <div class="col">
                                        <label for="見出し">見出し</label>
                                        <span>必須</span>
                                    </div>
                                    <div class="col">
                                        <textarea rows="4" cols="1" placeholder="見出しを入力してください"></textarea>
                                        <p>20字以内</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col">
                                        <label for="見出し">説明文</label>
                                    </div>
                                    <div class="col">
                                        <textarea rows="6" cols="1" placeholder="説明文を入力してください"></textarea>
                                        <p>130字以内</p>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <section class="section_pagelist">
                            <h2>ページ一覧</h2>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>+ ページの作成</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="template_img" href="#">
                                        <img src="images/templates/template01.svg" alt="" class="img-fluid">
                                    </a>
                                    <div class="pagelist_footer">
                                        <h3>シナリオトップ シナリオト</h3>
                                        <div class="pagelist_info">
                                            <p class="date">2022/02/23 <span>19:43更新</span></p>
                                            <a href="#"><img src="images/svg/i_del.svg" alt="" class="img-fluid" width="20"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="template_img" href="#">
                                        <img src="images/templates/template02.svg" alt="" class="img-fluid">
                                    </a>
                                    <div class="pagelist_footer">
                                        <h3>TimeRep LP</h3>
                                        <div class="pagelist_info">
                                            <p class="date">2022/02/23 <span>19:43更新</span></p>
                                            <a href="#"><img src="images/svg/i_del.svg" alt="" class="img-fluid" width="20"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="template_img" href="#">
                                        <img src="images/templates/template03.svg" alt="" class="img-fluid">
                                    </a>
                                    <div class="pagelist_footer">
                                        <h3>logknot corporate</h3>
                                        <div class="pagelist_info">
                                            <p class="date">2022/02/23 <span>19:43更新</span></p>
                                            <a href="#"><img src="images/svg/i_del.svg" alt="" class="img-fluid" width="20"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </main>

            </div>
        </div>

        <?php include('js-footer.php') ?>
    </body>
</html>