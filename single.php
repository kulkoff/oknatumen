<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oknatumen
 */

?>

	<div id="primary" class="content-area">
		<h1><?php  the_title(); ?></h1> 
            <div class="knows-content"><?php  the_post(); ?> <?php  the_content(); ?></div>
        </div>
	</div><!-- #primary -->


