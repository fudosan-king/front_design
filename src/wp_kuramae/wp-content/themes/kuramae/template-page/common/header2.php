<header class="header_afterlogin clearfix">
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand" href="<?php echo home_url('/top/'); ?>">
            <h1>
                <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="プロスタイル蔵前" class="img-fluid logo_white" width="246">
                <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_black.svg" alt="プロスタイル蔵前" class="img-fluid logo_black" width="246">
            </h1>
        </a>
        <button class="navbar-toggler toggler-spring menu">
            <span class="menuLine"></span>
            <span class="menuLine"></span>
            <span class="menuLine"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/location/'); ?>">ロケーション</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="#">天然無垢のマンション</a></li>
                <li class="nav-item js-menuAnimation dropdown">
                    <a class="nav-link" href="<?php echo home_url('/plan/'); ?>">間取り </a>
                    <button type="button" class="dropdown-toggle dropdown-toggle-split btn_down" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu fade-down">
                        <li><a class="dropdown-item" href="<?php echo home_url('/plan-detail/'); ?>">プラン詳細</a></li>
                    </ul>
                </li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/equipment/'); ?>">設備・仕様</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/outline/'); ?>">物件概要</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/map/'); ?>">現地案内図</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/inquiry/'); ?>">資料請求</a></li>
            </ul>
        </div>

    </div>
</header>