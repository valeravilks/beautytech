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
		<div class="footer__top footer-top">
			
			<a href="<?php bloginfo('url'); ?>" class="footer-top__logo logo">
				<img src="<?php the_field('logo', 'option'); ?>" srcset="<?php the_field('logo-retina', 'option'); ?> 2x" alt="logo" class="logo__img">	
			</a>
		</div>
		<div class="footer__bottom footer-bottom">

		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
