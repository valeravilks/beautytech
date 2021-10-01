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
		<hr class="footer__hr">
		<div class="footer__top footer-top">
			<div class="row">
				<div class="col-12 col-l-3">
					<?php get_template_part('template-parts/logo', '', array('class' => 'footer-top__logo'))?>
					<?php get_template_part('template-parts/soc-link', '', array('class' => 'footer-top__soc')); ?>
				</div>
				<div class="col-12 col-l-4">
					ss
				</div>
				<div class="col-12 col-l-2">
					ss
				</div>
				<div class="col-12 col-l-3">
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
