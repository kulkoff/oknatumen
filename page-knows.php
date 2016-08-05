<?php /* Template Name: База знаний */ get_header(); ?>


    <div class="center-wrapper knows">
            <h1><?php  the_title(); ?></h1> 
            <div class="content-knows"><?php  the_post(); ?> <?php  the_content(); ?></div>
        

        <?php $postslist = get_posts('numberposts=6&orderby=title&order=ASC&category=2'); ?>
<? $i=0 ?>
            <ul>
            <?php foreach ($postslist as $post) : setup_postdata($post); ?>
            <li class="knows item<?=++$i ?> clearfix">
                <h3><?php the_title();?></h3>
                
                <div class="knows-content"><?php the_content(); ?></div>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>

<?php
get_footer();