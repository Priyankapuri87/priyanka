<?php
/*
 * Template name: kunnskap template
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

	<section class="main-content-wrap full-width">

		<article id="post-id-<?php the_id(); ?>" <?php post_class( 'clearfix' ); ?>>

			<?php the_content(); ?>

		</article>

	</section> <?php // .main-content-wrap ?>

<?php get_footer(); ?>