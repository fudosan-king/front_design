<?php get_header(); ?>

        <main>
            <section class="slide-main before-login">
                <div class="slides">
                    <div class="slideContent">
                        <div class="slide slide-init js-slide" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main/KV01.jpg)"></div>
                        <div class="slide js-slide" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main/KV02.jpg)"></div>
                    </div>
                </div>

                <div class="slides_footer">
                    <div class="scroll_down">
                        <a href="#section_living" data-scroll class="scroll_title">Scroll</a>
                    </div>
                    <div class="slides_text">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/text_slide01.png" alt="text_slide01" class="img-fluid">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/text_slide02.png" alt="text_slide02" class="img-fluid">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/text_slide03.png" alt="text_slide03" class="img-fluid">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/text_slide04.png" alt="text_slide04" class="img-fluid">
                    </div>
                    <p class="slides_highline"><span>ディライトテラス建物内新モデルルームオープン【完全予約制】</span></p>
                    <p class="slides_firstservices">
                        先着順申込受付中
                        <span>角住戸・65m2超・2LDK・全戸ﾄﾗﾝｸﾙｰﾑ付・5,488万円～</span>
                    </p>
                    <div class="news notlogin">
                        <a href="<?php echo home_url('/top/'); ?>">
                            <div class="row">
                                <div class="col-12 col-lg-2 align-self-center">
                                    <h2>新着情報</h2>
                                </div>
                                <div class="col-12 col-lg-10 align-self-center">
                                    <p>「●●●●●●●●●レジデンス」、10月0日（土）より事前案内会を開始</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <div class="intro js-intro intro-1">
            <div class="introIcon js-introIcon"></div>
        </div>

        <?php 
            require 'template-page/js-footer.php';
        ?>
