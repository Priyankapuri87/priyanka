<?php get_header(); ?>

    <section class="main-content-wrap">

		<?php
		if ( have_posts() ) {

			while ( have_posts() ) : the_post();
				get_template_part( 'loop', 'single' );
			endwhile;

		} else {

			echo '<h3>' . __( 'No post found', 'maksimer_lang' ) . '</h3>';

		}
		?>

		<?php get_template_part( 'nav', 'post-pag' ); ?>

    </section> <?php // .main-content-wrap ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>