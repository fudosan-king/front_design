<?php 
/*
    Template Name: plan
*/
?>


<?php get_header(); ?>

<main>
    
    <section class="section_subbanner">
        <img src="<?php bloginfo('template_directory');?>/assets/images/main/bg_plan.jpg" alt="bg_plan" class="img-fluid">
    </section>

    <section class="section_plan">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <ul class="nav nav-tabs" id="tab_plan" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="plandesign" data-bs-toggle="tab" data-bs-target="#plandesign_pane" type="button" role="tab" aria-controls="plandesign_pane" aria-selected="false"><span>プランデザイン</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="view" data-bs-toggle="tab" data-bs-target="#view_pane" type="button" role="tab" aria-controls="view_pane" aria-selected="false"><span>眺望</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="modelroom" data-bs-toggle="tab" data-bs-target="#modelroom_pane" type="button" role="tab" aria-controls="modelroom_pane" aria-selected="true"><span>モデルルーム</span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="tab_plancontent">
            <div class="tab-pane fade show active" id="plandesign_pane" role="tabpanel" aria-labelledby="plandesign" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title">タイトルコピーが入りますタイトルコピーが入ります<br>
                            タイトルコピーが入ります</h2>
                            <div class="box_vr">
                                <div class="vr_item">
                                    <div class="vr_video">
                                        <a class="vr_img" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/VR_video.jpg" alt="VR_video" class="img-fluid w-100"></a>
                                        <a class="vr_view" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/i_view.svg" alt="VR_video" class="img-fluid" width="55"></a>
                                    </div>
                                    <div class="vr_content">
                                        <h3>Overall Image</h3>
                                        <p>全体イメージ</p>
                                        <a href="#" class="btn btn_checkit">Check it!</a>
                                    </div>
                                </div>
                                <div class="vr_item">
                                    <div class="vr_video">
                                        <a class="vr_img" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/VR_video2.jpg" alt="VR_video" class="img-fluid  w-100"></a>
                                        <a class="vr_view" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/i_view.svg" alt="VR_video" class="img-fluid" width="55"></a>
                                    </div>
                                    <div class="vr_content">
                                        <h3>Appearance Image</h3>
                                        <p>VRで外観イメージを確認できます</p>
                                        <a href="#" class="btn btn_checkit">Check it!</a>
                                    </div>
                                </div>
                            </div>

                            <div class="box_model">
                                <div class="model_item">
                                    <div class="new"><span>New</span></div>
                                    <ul>
                                        <li><a href="#">眺望</a></li>
                                        <li><a href="#">３Dモデルルーム画像</a></li>
                                    </ul>
                                    <h4>S301<span>/3LDK</span></h4>
                                    <h5><span>専有面積</span> 176.<span>65㎡</span></h5>
                                    <div class="model_img">
                                        <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/drawing.png" alt="drawing" class="img-fluid"></a>
                                        <div class="box_plannote mt-3 mb-0">
                                            <ul>
                                                <li>［凡 例］</li>
                                                <li>…収納 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_storage.svg" alt="i_storage" class="img-fluid" width="40"></span></li>
                                                <li>…通風 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_ventilation.svg" alt="i_ventilation" class="img-fluid" width="60"></span></li>
                                                <li>…採光 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_lighting.svg" alt="i_lighting" class="img-fluid" width="50"></span></li>
                                            </ul>
                                            <p>WIC＝ウォークインクローゼット、SIC＝シューズインクローゼット、<br>
                                            MB＝メーターボックス、PS＝パイプスペース<br>
                                            ※掲載の間取りは設計段階のもので、今後変更になる場合がございます。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="model_item">
                                    <div class="new"><span>New</span></div>
                                    <ul>
                                        <li><a href="#">眺望</a></li>
                                        <li><a href="#">３Dモデルルーム画像</a></li>
                                    </ul>
                                    <h4>S301<span>/3LDK</span></h4>
                                    <h5><span>専有面積</span> 176.<span>65㎡</span></h5>
                                    <div class="model_img">
                                        <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/drawing.png" alt="drawing" class="img-fluid"></a>
                                        <div class="box_plannote mt-3 mb-0">
                                            <ul>
                                                <li>［凡 例］</li>
                                                <li>…収納 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_storage.svg" alt="i_storage" class="img-fluid" width="40"></span></li>
                                                <li>…通風 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_ventilation.svg" alt="i_ventilation" class="img-fluid" width="60"></span></li>
                                                <li>…採光 <span><img src="<?php bloginfo('template_directory');?>/assets/images/i_lighting.svg" alt="i_lighting" class="img-fluid" width="50"></span></li>
                                            </ul>
                                            <p>WIC＝ウォークインクローゼット、SIC＝シューズインクローゼット、<br>
                                            MB＝メーターボックス、PS＝パイプスペース<br>
                                            ※掲載の間取りは設計段階のもので、今後変更になる場合がございます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="tab-pane fade" id="view_pane" role="tabpanel" aria-labelledby="view" tabindex="0">
                <h2>視界を遮るもののない開放感溢れる眺望</h2>
                <p class="text-center">30F VIEW30階相当の眺望</p>

                <div class="carousel carousel_view" data-flickity>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                </div>
            </div>

            <div class="tab-pane fade" id="modelroom_pane" role="tabpanel" aria-labelledby="modelroom" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <section class="section_modelroom pt-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="modelroom_content aos-init aos-animate" data-aos="fade-down" data-aos-duration="3000">
                                                <ul class="list_global">
                                                    <li><span>PROSTYLE</span></li>
                                                    <li><span>MIYANOMORI</span></li>
                                                    <li><span>INTERVEW</span></li>
                                                    <li class="active"><span>KENGO KUMA</span></li>
                                                </ul>
                                                <h2>『home』としての実感を得られる<br>
                                                木と寄り添う上質な暮らし</h2>
                                                <p>「プロスタイル宮の森」の設計を手がけたのは、世界中で活躍する建築家・隈研吾氏。<br>
                                                日本の繊細な木工技術を生かしながら、現代的なデザインの木造建築を取り入れるスタイルが特徴的だ。<br>
                                                近年日本では、新国立競技場（2019）やJR東日本高輪ゲートウェイ駅（2020）の建築が大きく話題に。</p>
                                                <p>「プロスタイル宮の森」の設計の背景や、宮の森の地で味わえるような「上質な暮らし」について話を聞いた。</p>
                                            </div>
                                            <div class="img_modelroom">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section_modelroom">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-lg-5">
                                            <div class="img_modelroom left"></div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="modelroom_content ps-0 ps-lg-5 aos-init aos-animate" data-aos="fade-down" data-aos-duration="3000">
                                                <h2>宮の森の丘だから生まれた<br>ここだけの建築</h2>
                                                <p class="orange">―「プロスタイル宮の森」のどんなことに魅力を感じてプロジェクトに参加されたのでしょうか？ </p>
                                                <p>僕らは、建築物を建てる、となるとまず敷地をしっかりリサーチします。敷地の状態や仕様はもちろん、そこにある文化や人の営みは大事な情報です。今回僕自身も現地に足を運びましたが、非常に魅力的な敷地だと感じました。札幌の街が一望でき、一方で背後に山がある、というのは日本ではなかなか得難い条件だと思い、敷地のもつポテンシャルに魅力を感じたのです。当初は、何かが突出するようなものではなく、斜面に沿うような、丘を生かした建築を構想していました。それを実際に成立させるためにはかなり時間をかけており、難易度の高いプロジェクトでしたね。また、企画元のプロスタイル社は、天然無垢材を必ず採用するというこだわりがあり、そこに共鳴したこともあります。宮の森のあの敷地で木を使った建築なんて、絶対に他にないものができるな、と思いプロジェクトに臨みました。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>

                <div class="img_modelroom">

                </div>

                <section class="section_modelroom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="modelroom_content ps-0 ps-lg-5 aos-init aos-animate" data-aos="fade-down" data-aos-duration="3000">
                                    <h2 class="mb-3">我が“家”の<br>実感を得られる集合邸宅</h2>
                                    <p class="orange">―パースを拝見し、集合邸宅然としたものではなく、<br>ひとつ一つの住まいが積み上がっている印象を受けました。 </p>
                                    <p>一般的なマンションは“大きな箱”のようで、住まい手は建築そのものに自分の住居であることを感じにくいと思います。しかしここでは、「私の家はここにある」と感じられるのではないでしょうか。小さな家の集積によって一つの大きな家を構成するという、個々人を尺度として捉えたヒューマンスケールとしての「単位」が見えることを重視しました。また、木の質感から得られるあたたかみによっても、“home”としての実感を得られるかと思います。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_modelroom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="modelroom_content ps-0 ps-lg-5 aos-init aos-animate" data-aos="fade-down" data-aos-duration="3000">
                                    <h2 class="mb-3">上質な、よりよく<br>生きるための暮らし</h2>
                                    <p class="orange">―「いい暮らし」とはどういうことと捉えていますか?</p>
                                    <p>新型コロナウイルスの影響で家で過ごす時間が増え、尚更感じますが、家にいながら自然と一体にいる感覚をもてることは大事だと思います(※)。<br>
                                    万が一ロックダウンされて家にずっと篭ることになっても、その感覚と安らぎがあれば生きていけるかもしれないと。日本には、家の中で盆栽を並べたり、庭に四季を感じる草木を植える文化がありますね。そうした営みがあるだけで、家の中でも癒されることは十分にあると思います。五感で得られる自然の質感といったものが、今後何かもっと重要になってくるとのではないでしょうか。<br>
                                    「プロスタイル宮の森」ではコンクリート工事でも木をふんだんに使用しています。コンクリートを流す枠に無垢の丸太を使うことは大変稀で、技術としても非常に難しいものです。木を自然な形で使用できるこの丸太の残存型枠は、一般的な都会型のマンションではできない、今回ならではの挑戦でした。宮の森の自然に囲まれ、住戸のなかでも視界に常に木があるような、贅沢な木の住まいをお愉しみいただければと思います。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

    <?php 
        get_template_part('template-parts/section_tel'); 
    ?>
</main>


<?php get_footer(); ?>
    