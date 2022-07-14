<?php 
/*
    Template Name: Top
*/
?>


<?php get_header(); ?>

<main>
    <section class="slide-main before-login">
        <div class="slides">
            <div class="slideContent">
                <div class="slide slide-init js-slide"></div>
            </div>
        </div>

        
        <div class="scroll_down">
            <a href="#section_reservation" data-scroll class="scroll_title">Scroll</a>
        </div>
        <div class="news news_afterlogin">
            <div class="row">
                <div class="col-12 col-lg-2 align-self-center">
                    <h2>新着情報</h2>
                </div>
                <div class="col-12 col-lg-10 align-self-center">
                    <div class="carousel carousel_news" data-flickity='{"pageDots": false, "contain": true, "autoPlay": 3500 }'>
                        <div class="carousel-cell">
                            <p><a href="whatsnews.php">物件エントリー者様限定サイトに、間取りを追加いたしました。</a></p>
                        </div>
                        <div class="carousel-cell">
                            <p><a href="whatsnews.php">物件エントリー者様限定サイトに、間取りを追加いたしました。</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_reservation" class="section_reservation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/common/reservation_text.svg" alt="" class="img-fluid d-none d-md-block d-lg-block" width="1245">
                    <ul class="d-block d-md-none d-lg-none">
                        <li>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/common/reservation_text_01.svg" alt="" class="img-fluid">
                        </li>
                        <li><img src="<?php bloginfo('template_directory');?>/assets/images/common/reservation_text_02.svg" alt="" class="img-fluid"></li>
                        <li><img src="<?php bloginfo('template_directory');?>/assets/images/common/reservation_text_03.svg" alt="" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section_reservation_brown">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <p>9月下旬 事前案内会開催(予定) <span class="d-block d-lg-inline"></span>【資料請求受付中】</p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section_specialmovie">
        <h2 class="title">SPECIAL MOVIE</h2>
        <p>●●●●●●●●で暮らし始めた2人の物語をスペシャルムービーで公開中。<br>
        Jazztronikが書き下ろした楽曲にもご注目ください。</p>
        <div class="box_movie">
            <div class="box_movie_content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/common/video.jpg" alt="" class="img-fluid">
                            <p>※注釈がある場合はここに入ります。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section_story">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-lg-6">
                    <div class="story_content" data-aos="fade-down" data-aos-duration="3000">
                        <ul class="list_global">
                            <li><span>PROSTYLE</span></li>
                            <li><span>KURAMAE</span></li>
                            <li class="active"><span>STORY</span></li>
                        </ul>
                        <h2 class="title">KURAMAE Luxury Arena</h2>
                        <p class="subtitle">Living in the KURAMAE.</p>
                        <p class="mb-0">江戸のころから栄え、人々を惹きつけてきた「蔵前」。<br>
                        雄大な都市に位置しながらも、昔ながらの情緒が残るこの場所に無垢材の心地よさに深みのある暮らしを送りながらもアクティブな暮らしが愉しめるレジデンスが誕生します。</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="living_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/map_kuramae.png" data-aos="fade-up" data-aos-duration="3000" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_design">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-lg-5">
                    <div class="design_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/artisanshipdesign.jpg" data-aos="fade-up" data-aos-duration="3000" alt="" class="img-fluid">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/artisanshipdesign02.jpg" data-aos="fade-up" data-aos-duration="3000" alt="" class="img-fluid img02">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="design_content" data-aos="fade-down" data-aos-duration="3000">
                        <span class="img_artisanshipdesign"><img data-aos="fade-up-right" data-aos-duration="3000" src="<?php bloginfo('template_directory');?>/assets/images/common/artisanshipdesign.svg" alt="" class="img-fluid" width="360"></span>
                        <span class="img_building"><img data-aos="fade-up" data-aos-duration="3000" src="<?php bloginfo('template_directory');?>/assets/images/common/building.png" alt="" class="img-fluid"></span>
                        <ul class="list_global">
                            <li><span>PROSTYLE</span></li>
                            <li><span>KURAMAE</span></li>
                            <li class="active"><span>STORY</span></li>
                        </ul>
                        <h2 class="title">KURAMAE<br>Artisanship Design</h2>
                        <p class="subtitle">Discerning design</p>
                        <p class="mb-0">都市と自然が心地よく響きあうこの場所で抱く上質なリラックス。<br>
                        東と西に配された２つのバルコニーがもたらす開放感は、アクティブに愉しんだ心をゆるやかに解きほぐし、特別なプライベートと優雅な日常を与えてくれます。「ものづくり」の街に生きづく‘’職人気質‘’を継承しながら新しい文化を発信し続ける街「蔵前」。<br>
                        都内にあって下町と呼ばれる特異な存在感を持つこの場所にこの街ならではの個性、こだわりを表現する意匠を纏わせました。</p>
                        
                        <img src="<?php bloginfo('template_directory');?>/assets/images/common/kachikura_area06.jpg" data-aos="fade-left" data-aos-duration="3000" alt="" class="img-fluid img03">
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <p class="mb-0"><span class="design_text">※1: 都営浅草線「蔵前」駅（A0出入口）徒歩5分、都営大江戸線「蔵前」駅（A6出入口）徒歩7分、都営大江戸線・つくばエクスプレス「新御徒町」駅（A4出入口）徒歩8分、東京メトロ銀座線「田原町」駅（エレベーター出入口）徒歩10分、都営浅草線「浅草橋」駅（A4出入口）徒歩11分、JR中央・総武線各駅停車「浅草橋」駅（東口）徒歩12分、都営浅草線「浅草」駅（A1出入口）徒歩14分、東京メトロ銀座線「稲荷町」駅（4出入口）徒歩14分</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section_vrtours">
        <h2 class="title">VR TOURS</h2>
        <p>最先端の3Dカメラを使用した360度体験</p>
        <div class="w_boxvideo">
            <div class="boxvideo">
                <iframe width="415" height="235" src="https://my.matterport.com/show/?m=1HPbtLDTsdC&title=0&f=0&mls=1&play=1&qs=0&brand=0&dh=1&gt=0&hr=0&vr=0&pin=0" title="VR Tours" allowfullscreen data-aos="fade-right" data-aos-duration="3000"></iframe>
                <p>※注釈がある場合はここに入ります。</p>
            </div>
            <div class="boxvideo">
                <iframe width="415" height="235" src="https://my.matterport.com/show/?m=1HPbtLDTsdC&title=0&f=0&mls=1&play=1&qs=0&brand=0&dh=1&gt=0&hr=0&vr=0&pin=0" title="VR Tours" allowfullscreen data-aos="fade-left" data-aos-duration="3000"></iframe>
            </div>
        </div>
    </section> -->

    <!-- <section class="section_location">
        <h2 class="title">LOCATION</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4146.140179329061!2d139.78210049743035!3d35.704836103574614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188eba5218f147%3A0x246d9895d75b24b4!2s111-0055%2C%20Japan!5e0!3m2!1sen!2s!4v1656311130898!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  data-aos="zoom-in" data-aos-duration="3000"></iframe>
        <div class="box_contact">
            <div class="box_contact_img">
                <img src="<?php bloginfo('template_directory');?>/assets/images/common/img_contact.jpg" alt="" class="img-fluid">
            </div>
            <div class="box_contact_content">
                <h3>プロスタイル蔵前</h3>
                <p><img src="<?php bloginfo('template_directory');?>/assets/images/common/i_location.svg" alt="" class="img-fluid" width="20"> 〒000-0000　東京都台東区三筋一丁目（地番）　　営業時間 10:00~19:00（⽕・⽔曜⽇定休 祝⽇を除く）</p>
                <p><img src="<?php bloginfo('template_directory');?>/assets/images/common/i_tel.svg" alt="" class="img-fluid" width="20"> TEL : <a href="tel:03-6897-8570">03-6897-8570</a> 　FAX : <a href="tel:03-6897-8571">03-6897-8571</a></p>
            </div>
        </div>
    </section> -->

    <section class="section_contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="title">CONTACT</h2>
                    <p>資料請求・オンライン説明会</p>
                    <div class="box_contact">
                        <div class="box_contact_img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/common/img_contact2.png" alt="" class="img-fluid">
                        </div>
                        <div class="box_contact_content">
                            <h3>●●●●●●●パンフレット進呈</h3>
                            <p>プロスタイル蔵前 の魅力がつまったパンフレットを無料で進呈いたします。以下のフォームからご請求ください。</p>
                            <a href="<?php echo home_url('/inquiry/'); ?>" class="btn btn_inquiry btn--animated">お問い合わせ</a>
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
    