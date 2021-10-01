<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyTech
 */

?>

	<footer id="colophon" class="site-footer footer">
		<h2 class="h2">asdasdd</h2>
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-6">
					sdf
				</div>
				<div class="col-12 col-l-6">
					sdf
				</div>
			</div>
		</div>
		<div class="footer__top footer-top">
			<div class="footer-top__row">
				<div class="footer-top__col-1">
					<a href="<?php bloginfo('url'); ?>" class="footer-top__logo logo">
						<img src="<?php the_field('logo', 'option'); ?>" srcset="<?php the_field('logo-retina', 'option'); ?> 2x" alt="logo" class="logo__img">	
					</a>
				</div>
				<div class="footer-top__col-2">
					ss
				</div>
				<div class="footer-top__col-3">
					ss
				</div>
				<div class="footer-top__col-4">
					ss
				</div>
			</div>
			
		</div>
		<div class="footer__bottom footer-bottom">

		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
