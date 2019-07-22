<?php
/**
 *
 * @package jWhite Bootstrap Theme
 */
?>
<?php
get_header();
?>
	<section id="primary" class="content-area container">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'templates/content' );
			}
		} else {
			get_template_part( 'templates/content', 'none' );
		}
		?>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
<?php
get_footer();