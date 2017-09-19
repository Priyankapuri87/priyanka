<?php
/*
 * Template name: sidebar template
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

	<section class="main-content-wrap full-width">

		<article id="post-id-<?php the_id(); ?>" <?php post_class( 'clearfix' ); ?>>

			<?php the_content(); ?>

		</article>

	</section> <?php // .main-content-wrap ?>

<?php get_footer(); ?><?php
/**
 * Created by PhpStorm.
 * User: maksimer
 * Date: 01.09.2017
 * Time: 13.36
 */