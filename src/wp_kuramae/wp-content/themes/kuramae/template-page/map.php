<?php 
/*
    Template Name: map
*/
?>


<?php get_header(); ?>

<main>
    <div class="template">
        <section class="section_map">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h2 class="title">現地案内図</h2>
                        <div class="box_map">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/map.svg" alt="map" class="img-fluid">
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
    