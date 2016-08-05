<?php /* Template Name: Где купить? */ get_header(); ?>


    <div class="center-wrapper knows">
            <h1><?php  the_title(); ?></h1> 
            <div class="content-knows"><?php  the_post(); ?> <?php  the_content(); ?></div>
            <?php the_field("map_yandex"); ?>
        </div>

<?php
get_footer();