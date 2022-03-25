<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <main>
            <section class="section_main" style="height: 100vh;">
                    <div class="box_main_left">
                        <div class="box_cam_content">
                            <img src="images/avatar/img_men.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="box_main_right">
                        <div class="box_right_top">
                            <img src="images/avatar/img_woman.jpg" alt="" class="img-fluid w-100">
                        </div>
                        <a href="#box_notice" class="btn btn_notice" data-bs-toggle="collapse">
                            <img src="images/svg/i_chat.svg" alt="" class="img-fluid" width="28">
                            <span>お知らせ</span>
                        </a>
                    </div>
                    <div id="box_notice" class="box_notice collapse multi-collapse mt-2">
                        <div class="card mb-3" style="max-width: 18rem; height:98vh;">
                            <div class="card-header">お知らせ <a href="#box_notice" class="btn_close"  data-bs-toggle="collapse"><img src="images/svg/i_close.svg" alt="" class="img-fluid" width="15"></a></div>
                            <div class="card-body text-secondary">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include('js-footer.php') ?>
    </body>
</html>