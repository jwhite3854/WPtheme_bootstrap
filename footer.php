<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</main><!-- #content -->
	<?php jwhite_before_footer() ?>
	<footer class="footer py-3">
		<div class="container">
		<?php do_action( 'jwhite_footer' ); ?>
		<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a>
			<?php endif; ?>
			<?php if ( function_exists( 'the_privacy_policy_link' ) ): 
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			endif; ?>
			<span class="text-muted"> | <?php echo date('Y') ?> Copyright Cheezoid.</span>
		</div>
	</footer>
	<?php jwhite_after_footer() ?>
</div><!-- #page -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
