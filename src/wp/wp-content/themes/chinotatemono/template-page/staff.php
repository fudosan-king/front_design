<?php 
/*
    Template Name: Staff
*/
?>


        <?php get_header(); ?>

        <main> 

            <div id="kv-lower" class="recruit">
                <div class="container">
                <div class="ttl">
                    <!-- <h2>Recruit</h2> -->
                </div>
                </div>
            </div>
            
            <div class="recruit-psr_top">
                <section class="section_recruit-psr section_recruitmenttype section-staff">
                <div class="container">
                    <div class="row">
                    <div class="col-12 col-lg-12">
                        <h2 class="title_sub"><span>社員紹介</span></h2>
                        <ul class="staff-archive">
                        <li>
                            <a href="<?php echo home_url('/staff-detail/'); ?>">
                            <div class="staff-item">
                                <div class="staff_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/common/PRS4471-21-e1654147205256.jpeg" alt="e1654147205256" class="img-fluid">
                                </div>
                                <p class="title">望月 聖矢</p>
                                <p class="since">2019年中途入社／営業職</p>
                                <p>販売だけでなく、不動産の多岐にわたる業務に挑戦できる環境</p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/staff-detail/'); ?>">
                            <div class="staff-item">
                                <div class="staff_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/common/PRS4536-11-e1654753569774.jpeg" alt="e1654753569774" class="img-fluid">
                                </div>
                                <p class="title">佐藤 伶威</p>
                                <p class="since">2019年新卒入社／営業職</p>
                                <p>同世代より圧倒的なスピード感で成長を</p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/staff-detail/'); ?>">
                            <div class="staff-item">
                                <div class="staff_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/common/PRS4719-11-e1657695675110.jpeg" alt="e1657695675110" class="img-fluid">
                                </div>
                                <p class="title">石川 真吾</p>
                                <p class="since">2015年中途入社／設計士</p>
                                <p>設計事務所での経験を活かし、住空間設計の専門家へキャリアアップ</p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/staff-detail/'); ?>">
                            <div class="staff-item">
                                <div class="staff_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/common/PRS4643-21-e1658981064678.jpeg" alt="e1658981064678" class="img-fluid">
                                </div>
                                <p class="title">武田 めぐみ</p>
                                <p class="since">2012年中途入社／契約管理</p>
                                <p>宅建士資格の取得をきっかけに不動産契約のエキスパートへ</p>
                            </div>
                            </a>
                        </li>
                        </ul>
                        <div class="d-flex justify-content-center"></div>
                    </div>
                    </div>
                </div>
                </section>
            </div>

            <section class="section_career">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                    <a href="<?php echo home_url('/new-graduate/'); ?>" target="" class="box_career">
                
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/bg_newgraduate.jpg" alt="新卒下段バナー" class="img-fluid">
                        <span>
                        <h3>新卒採用</h3>
                        <p>NEW GRADUATE</p>
                        </span> </a>
                    </div>
                    <div class="col-12 col-lg-6">
                    <a href="<?php echo home_url('/career/'); ?>" target="" class="box_career">
                
                
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/bg_career.jpg" alt="中途バナー小" class="img-fluid">
                
                        <span>
                        <h3>中途採用</h3>
                        <p>MID CAREER</p>
                        </span> </a>
                    </div>
                </div>
                </section>
            
        </main>

        <?php get_footer(); ?>
    