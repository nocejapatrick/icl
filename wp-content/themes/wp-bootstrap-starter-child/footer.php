<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')) :

		get_template_part('template-parts/custom-footer');


?>
	<!-- </div>.row
		</div> .container -->

	</div><!-- #content -->
	<?php get_template_part('footer-widget'); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container pt-3 pb-3">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="site-info">
						© Copyright Informatics Holdings Philippines, Inc. <a href="#" class="font-weight-bold">Privacy Policy</a> | <a href="#" class="font-weight-bold">Terms of Use</a>
					</div>
				</div>
				<div class="col-12 col-md-6 d-flex socials">
					<div class="social-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="">
					</div>
					<div class="social-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="">
					</div>
					<div class="social-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube.svg" alt="">
					</div>
				</div>
			</div>
		
		</div>
	</footer>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>