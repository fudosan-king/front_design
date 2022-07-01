<header class="header_sub clearfix">
    <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand" href="<?php echo home_url('/top/'); ?>">
            <h1>
                <img src="<?php bloginfo('template_directory');?>/assets/images/common/SVG/logo_black.svg" alt="" class="img-fluid logo_black d-block" width="246">
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
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/objectsummary/'); ?>">物件概要</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/inquiry/'); ?>">資料請求</a></li>
            </ul>
        </div>
    </div>
</header>