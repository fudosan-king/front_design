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
                <a id="btn-collapse" class="btn_open btn_open_sm" href="#"></a>
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
                            <!-- <div class="setting_services_content">
                                <div class="setting_services_item" draggable="true">
                                    <form class="frm_setting_services_item" action="">
                                        <div class="setting_services_header">
                                            <img src="images/svg/i_line.svg" alt="" class="img-fluid" width="25">
                                            <h3>テキスト</h3>
                                        </div>
                                        <div class="setting_services_title">
                                            <h4>フリーメモ</h4>
                                            <label>お知らせ機能として利用する 
                                                <input type="checkbox" class="ios-switch blue  bigswitch" checked>
                                                <div><div></div></div>
                                            </label>
                                        </div>
                                        <textarea rows="7" cols="1" placeholder="ここにテキストを入力"></textarea>
                                        <ul class="setting_services_footer">
                                            <li><a href="#"><img src="images/svg/i_edit.svg" alt="" class="img-fluid" width="27"> </a></li>
                                            <li><a href="#"><img src="images/svg/i_trash.svg" alt="" class="img-fluid" width="24"></a></li>
                                            <li><a href="#"><img src="images/svg/i_save.svg" alt="" class="img-fluid" width="32"></a></li>
                                        </ul>
                                    </form>
                                </div>

                                <div class="setting_services_item" draggable="true">
                                    <form class="frm_setting_services_item" action="">
                                        <div class="setting_services_header">
                                            <img src="images/svg/i_line.svg" alt="" class="img-fluid" width="25">
                                            <h3>プルダウン</h3>
                                        </div>
                                        <div class="setting_services_title">
                                            <h4>性別</h4>
                                        </div>
                                        <select>
                                            <option value="男性">男性</option>
                                            <option value="女性">女性</option>
                                            <option value="その他">その他</option>
                                        </select>
                                        <ul class="setting_services_footer">
                                            <li><a href="#"><img src="images/svg/i_edit.svg" alt="" class="img-fluid" width="27"> </a></li>
                                            <li><a href="#"><img src="images/svg/i_trash.svg" alt="" class="img-fluid" width="24"></a></li>
                                            <li><a href="#"><img src="images/svg/i_save2.svg" alt="" class="img-fluid" width="30"></a></li>
                                        </ul>
                                    </form>
                                </div>

                                <div class="setting_services_item" draggable="true">
                                    <form class="frm_setting_services_item" action="">
                                        <div class="setting_services_header">
                                            <img src="images/svg/i_line.svg" alt="" class="img-fluid" width="25">
                                            <h3>プルダウン</h3>
                                        </div>
                                        <div class="setting_services_title">
                                            <h4>年代</h4>
                                        </div>
                                        <select>
                                            <option value="10代未満">10代未満</option>
                                            <option value="10代: 10~19">10代: 10~19</option>
                                            <option value="20代:20~29">20代:20~29</option>
                                            <option value="30代:30~39">30代:30~39</option>
                                            <option value="40代:40~49">40代:40~49</option>
                                            <option value="50代:50~59">50代:50~59</option>
                                            <option value="60代:60~69">60代:60~69</option>
                                            <option value="70代以上: over 70">70代以上: over 70</option>
                                        </select>
                                        <ul class="setting_services_footer">
                                            <li><a href="#"><img src="images/svg/i_edit.svg" alt="" class="img-fluid" width="27"> </a></li>
                                            <li><a href="#"><img src="images/svg/i_trash.svg" alt="" class="img-fluid" width="24"></a></li>
                                            <li><a href="#"><img src="images/svg/i_storage.svg" alt="" class="img-fluid" width="30"></a></li>
                                        </ul>
                                    </form>
                                </div>

                                <div class="setting_services_item" draggable="true">
                                    <form class="frm_setting_services_item" action="">
                                        <div class="setting_services_header">
                                            <img src="images/svg/i_line.svg" alt="" class="img-fluid" width="25">
                                            <h3>プルダウン</h3>
                                        </div>
                                        <div class="setting_services_title">
                                            <h4>接客成果</h4>
                                        </div>
                                        <select>
                                            <option value="購入意向示す">購入意向示す</option>
                                            <option value="...">...</option>
                                        </select>
                                        <ul class="setting_services_footer">
                                            <li><a href="#"><img src="images/svg/i_edit.svg" alt="" class="img-fluid" width="27"> </a></li>
                                            <li><a href="#"><img src="images/svg/i_trash.svg" alt="" class="img-fluid" width="24"></a></li>
                                            <li><a href="#"><img src="images/svg/i_storage.svg" alt="" class="img-fluid" width="30"></a></li>
                                        </ul>
                                    </form>
                                </div>

                                <div class="w_newconditions">
                                    <a href="#" class="btn_newconditions"><img src="images/svg/i_add2.svg" alt="" class="img-fluid" width="30"> 新規追加</a>
                                </div>
                            </div> -->

                            <div class="memo-corp__content">
                                <div>

                                    <div class="memo-corp__section mt--30 mx--30" draggable="true">
                                        <div class="memo-corp__section__header py--5 handle">
                                            <div class="d--flex justify__content--center">
                                                <i class="icon icon--drag_icon" style="visibility: visible;"></i>
                                            </div>
                                            <p class="memo-corp__section__header--type mr--15 mt--5">テキスト</p>
                                        </div>
                                        <div class="memo-corp__section__form--title d--flex my--20 ml--30">
                                            <p>フリーメモ</p>
                                            <label>
                                                <input type="checkbox" class="ios-switch blue bigswitch" checked>
                                                <div><div></div></div>
                                            </label>
                                        </div>
                                        <div class="mx--30">
                                            <textarea type="text" class="memo-corp__section__form--input" rows="5" maxlength="10000" placeholder="ここにテキストを入力" readonly=""></textarea>
                                        </div>
                                        <div class="memo-corp__section__action my--20 mx--20" style="visibility: visible;">
                                            <i class="icon btn icon--memo_pen"></i>
                                            <i class="icon btn icon--memo_bin ml--30"></i>
                                            <i class="icon icon_save ml--30 mr--10"></i>
                                        </div>
                                    </div>

                                    <div class="memo-corp__section mt--30 mx--30" draggable="true">
                                        <div class="memo-corp__section__header py--5 handle">
                                            <div class="d--flex justify__content--center">
                                                <i class="icon icon--drag_icon" style="visibility: visible;"></i>
                                            </div>
                                            <p class="memo-corp__section__header--type mr--15 mt--5">プルダウン</p>
                                        </div>
                                        <div class="memo-corp__section__form--title my--20 ml--30">
                                            <p>性別</p>
                                        </div>
                                        <div class="mx--20 memo-corp__section__form--select">
                                            <select>
                                                <option value="男性">男性</option>
                                                <option value="女性">女性</option>
                                                <option value="その他">その他</option>
                                            </select>
                                        </div>
                                        <div class="memo-corp__section__action my--20 mx--20" style="visibility: visible;">
                                            <i class="icon btn icon--memo_pen"></i>
                                            <i class="icon btn icon--memo_bin ml--30"></i>
                                            <i class="icon icon_save2 ml--30 mr--10"></i>
                                        </div>
                                    </div>

                                    <div class="memo-corp__section mt--30 mx--30" draggable="true">
                                        <div class="memo-corp__section__header py--5 handle">
                                            <div class="d--flex justify__content--center">
                                                <i class="icon icon--drag_icon" style="visibility: visible;"></i>
                                            </div>
                                            <p class="memo-corp__section__header--type mr--15 mt--5">プルダウン</p>
                                        </div>
                                        <div class="memo-corp__section__form--title my--20 ml--30">
                                            <p>年代</p>
                                        </div>
                                        <div class="mx--20 memo-corp__section__form--select">
                                            <select>
                                                <option value="10代未満: under 10">10代未満</option>
                                                <option value="10代: 10~19">10代: 10~19</option>
                                                <option value="20代:20~29">20代:20~29</option>
                                                <option value="30代:30~39">30代:30~39</option>
                                                <option value="40代:40~49">40代:40~49</option>
                                                <option value="50代:50~59">50代:50~59</option>
                                                <option value="60代:60~69">60代:60~69</option>
                                                <option value="70代以上: over 70">70代以上: over 70</option>
                                            </select>
                                        </div>
                                        <div class="memo-corp__section__action my--20 mx--20" style="visibility: visible;">
                                            <i class="icon btn icon--memo_pen"></i>
                                            <i class="icon btn icon--memo_bin ml--30"></i>
                                            <i class="icon icon--memo_save_disable ml--30 mr--10"></i>
                                        </div>
                                    </div>

                                    <div class="memo-corp__section mt--30 mx--30">
                                        <div class="memo-corp__section__header py--5 handle">
                                            <div class="d--flex justify__content--center">
                                                <i class="icon icon--drag_icon" style="visibility: visible;"></i>
                                            </div><p class="memo-corp__section__header--type mr--15 mt--5">テキスト</p></div>
                                            <div class="memo-corp__section__form--title my--20 ml--30">
                                                <p>接客成果</p>
                                            </div>
                                            <div class="mx--20 memo-corp__section__form--select">
                                                <select>
                                                    <option value="男性">購入意向示す</option>
                                                    <option value="女性">...</option>
                                                    <option value="その他">...</option>
                                                </select>
                                            </div>

                                            <div class="memo-corp__section__action my--20 mx--20" style="visibility: visible;">
                                                <i class="icon btn icon--memo_pen"></i><i class="icon btn icon--memo_bin ml--30"></i>
                                                <i class="icon icon--memo_save_disable ml--30 mr--10"></i></div>
                                            </div>
                                        </div>
                                        <div class="memo-corp__btn-plus d--flex justify__content--center my--30">
                                            <button class="btn--lg btn--action d--flex flex--row justify__content--center align__items--center ">
                                            <i class="icon icon--memo-corp_plus"></i>
                                            <p>新規追加</p></button>
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