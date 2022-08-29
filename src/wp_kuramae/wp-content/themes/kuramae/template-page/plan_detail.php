<?php 
/*
    Template Name: plan detail
*/
?>


<?php get_header(); ?>

<main>
    
    <section class="section_plan bg_brown">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">

                <div class="plan_header">
                    <h1>A<span>type</span></h1>
                    <h2><span>3LDK</span>＋3WIC＋SIC</h2>
                    <div class="plan_header_content">
                        <h3>コピーが入ります</h3>
                        <p>コピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入りますコピーが入ります。</p>
                    </div>
                </div>

                <div class="plan_body">
                    <div class="plan_body_top">
                        <h2>専有面積 <span>56</span><span>.63㎡</span>［約17.13坪］バルコニー面積 ：0.00㎡（約0.00坪）</h2>
                        <div class="box_indoorvr">
                            <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/IndoorVR.png" alt="IndoorVR" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal_indoorvr"></a>
                        </div>
                    </div>

                    <div class="modal fade" id="modal_indoorvr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/video_modal.jpg" alt="video_modal" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" id="tab_plan" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="drawing" data-bs-toggle="tab" data-bs-target="#drawing_pane" type="button" role="tab" aria-controls="drawing_pane" aria-selected="true"><span>図面</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="furniturearrangement" data-bs-toggle="tab" data-bs-target="#furniturearrangement_pane" type="button" role="tab" aria-controls="furniturearrangement_pane" aria-selected="false"><span>家具の配置イメージ</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="view" data-bs-toggle="tab" data-bs-target="#view_pane" type="button" role="tab" aria-controls="view_pane" aria-selected="false"><span>眺望</span></button>
                        </li>
                    </ul>

                    <div class="tab-content" id="tab_plancontent">
                        <div class="tab-pane fade show active" id="drawing_pane" role="tabpanel" aria-labelledby="drawing" tabindex="0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="model_img">
                                            <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/drawing.png" alt="drawing" class="img-fluid"></a>
                                        </div>
                                        <p class="mb-0 text-center">
                                            <a href="#" class="btn bnt_enlargedrawing"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_search.svg" alt="i_search" class="img-fluid" width="24"> 図面を拡大する</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="tab-pane fade" id="furniturearrangement_pane" role="tabpanel" aria-labelledby="furniturearrangement" tabindex="0">
                            <div class="model_img">
                                <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/drawing02.png" alt="drawing" class="img-fluid"></a>
                            </div>
                            <p class="mb-0 text-center">
                                <a href="#" class="btn bnt_enlargedrawing"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_search.svg" alt="i_search" class="img-fluid" width="24"> 図面を拡大する</a>
                                <img src="<?php bloginfo('template_directory');?>/assets/images/i_direction.svg" alt="i_direction" class="img-fluid i_direction" width="50">
                            </p>
                            <ul class="list_products">
                                <li>
                                    <h3>ダイニングテーブル</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro01.jpg" alt="drawing" class="img-fluid"></a>
                                    <p>飛騨産業</p>
                                    <p>クマヒダ　ダイニングテーブル</p>
                                    <p>W2400 × D900 × H700</p>
                                    <p>ウォルナット　WA</p>
                                    <p>¥660,000（税別）</p>
                                </li>
                                <li>
                                    <h3>ダイニングチェア</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro02.jpg" alt="drawing" class="img-fluid"></a>
                                    <p>飛騨産業</p>
                                    <p>クマヒダ　アームチェア張り座</p>
                                    <p>W590 × D540 × H720</p>
                                    <p>SH410　AH630</p>
                                    <p>ウォルナット　WA</p>
                                    <p>¥261,000（税別）</p>
                                </li>
                                <li>
                                    <h3>ペンダントライト</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro03.png" alt="drawing" class="img-fluid"></a>
                                    <p>LASVIT( 日本代理店YAMAGIWA)</p>
                                    <p>AKISUGI LARGE</p>
                                    <p>W120 × H500　12kg</p>
                                    <p>手吹きガラス</p>
                                    <p>¥572,000（税込）</p>
                                </li>

                                <li>
                                    <h3>ソファ</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro04.png" alt="drawing" class="img-fluid"></a>
                                    <p>Time & Style</p>
                                    <p>MA Sofa</p>
                                    <p>W2400 × D1024 × H727　SH380</p>
                                    <p>背/座：ファブリック張り</p>
                                    <p>脚：ステンレスバイブレーション仕上</p>
                                    <p>オープン価格</p>
                                </li>
                                <li>
                                    <h3>ローテーブル</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro05.png" alt="drawing" class="img-fluid"></a>
                                    <p>Time & Style</p>
                                    <p>FL Low Table</p>
                                    <p>W1800 × D700 × H300</p>
                                    <p>天板：タモスノーホワイト</p>
                                    <p>脚：ステンレスバイブレーション仕上</p>
                                    <p>オープン価格</p>
                                </li>
                                <li>
                                    <h3>TV台</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro06.png" alt="drawing" class="img-fluid"></a>
                                    <p>Time & Style</p>
                                    <p>特注</p>
                                    <p>W2400 × D500 × H300</p>
                                    <p>天板：タモスノーホワイト</p>
                                    <p>脚：ステンレスバイブレーション仕上</p>
                                    <p>オープン価格</p>
                                </li>

                                <li>
                                    <h3>ペンダントライト</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro07.png" alt="drawing" class="img-fluid"></a>
                                    <p>Herman Miller</p>
                                    <p>NELSON CIGAR LOTUS FLOOR LAMP</p>
                                    <p>H1460　φ330</p>
                                    <p>鋼ニッケルメッキ</p>
                                    <p>¥147,400（税込）</p>
                                </li>
                                <li>
                                    <h3>ラグ</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro08.png" alt="drawing" class="img-fluid"></a>
                                    <p>山形緞通</p>
                                    <p>KOKE</p>
                                    <p>1400 × 2000</p>
                                    <p>¥715,000( 税込)</p>
                                </li>
                                <li>
                                    <h3>ベッド</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro09.png" alt="drawing" class="img-fluid"></a>
                                    <p>Time & Style</p>
                                    <p>FU Bed</p>
                                    <p>背/座：ファブリック張り</p>
                                    <p>脚：ステンレスバイブレーション仕上</p>
                                    <p>オープン価格</p>
                                </li>

                                <li>
                                    <h3>サイドテーブル</h3>
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/pro10.png" alt="drawing" class="img-fluid"></a>
                                    <p>Time & Style</p>
                                    <p>PE</p>
                                    <p>φ450 × H420</p>
                                    <p>ステンレスバイブレーション仕上</p>
                                    <p>オープン価格</p>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="view_pane" role="tabpanel" aria-labelledby="view" tabindex="0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <h2>視界を遮るもののない開放感溢れる眺望</h2>
                                        <p class="text-center">30F VIEW30階相当の眺望</p>

                                        <div class="carousel carousel_view" data-flickity>
                                            <div class="carousel-cell"></div>
                                            <div class="carousel-cell"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
</section>

    <?php 
        get_template_part('template-parts/section_tel'); 
    ?>
</main>


<?php get_footer(); ?>
    