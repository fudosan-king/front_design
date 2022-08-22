<?php 
/*
    Template Name: limited
*/
?>


<?php get_header(); ?>

<main>
    <div class="template limited">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="header_inquiry">
                        <h2>プロスタイル蔵前</h2>
                        <h3>資料請求者様限定サイト</h3>
                        <p>この度はエントリー頂き、誠にありがとうございます。<br>
                        資料請求者様対象に、公式サイト未掲載情報をご案内致します。<br>
                        引き続き、どうぞよろしくお願い申し上げます。</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section_specialmovie">
            <h2>SPECIAL MOVIE</h2>
            <p>●●●●●●●●で暮らし始めた2人の物語をスペシャルムービーで公開中。<br>
            Jazztronikが書き下ろした楽曲にもご注目ください。</p>
            <div class="box_movie">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/video.jpg" alt="" class="img-fluid w-100">
                            <p class="des_movie">※注釈がある場合はここに入ります。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_specialmovie">
            <h2>PROSTYLE蔵前カタログ</h2>
            <p>プロジェクトストーリーや物件のデザインインタビュー、<br>
            共用施設の紹介などをご覧いただけます。</p>
            <div class="box_movie">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list_catalog">
                                <li>
                                    <a href="#">
                                        
                                    </a>
                                    <p>カタログのタイトルが入ります</p>
                                </li>
                                <li>
                                    <a href="#">
                                        
                                    </a>
                                    <p>カタログのタイトルが入ります</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php 
            get_template_part('template-parts/section_tel'); 
        ?>
    </div>
</main>


<?php get_footer(); ?>
    