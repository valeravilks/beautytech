<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeautyTech
 */

get_header();


?>

	<main id="primary" class="site-main page-home">
		<div class="ph-cover">
			<div class="container ph-cover__block2">
				<div class="row">
					<div class="col-12 col-l-5 ph-cover__block">
						<div class="ph-cover__text1">
							<?php the_field('h-titile');?>
						</div>
						<div class="ph-cover__text2">
							<?php the_field('h-text');?>
						</div>
						<a href="<?php echo get_field('h-link')['url']?>" class="ph-cover__link">
							<?php echo get_field('h-link')['title']; ?>
						</a>
					</div>
					<div class="col-12 offset-l-1 col-l-6 ph-cover__block3">
						<img src="<?php echo get_field('h-image')['url'];?>" alt="img" class="ph-cover__img">
						<svg class="ph-cover__c" width="801" height="454" viewBox="0 0 801 454" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M795.36 411.817C786.978 429.746 768.024 441.788 740.757 448.132C713.497 454.475 678.016 455.1 636.743 450.27C554.201 440.61 448.606 409.145 339.536 358.153C230.465 307.161 138.608 246.313 78.2644 189.172C48.0906 160.599 25.8176 132.973 13.2038 107.989C0.586658 82.9979 -2.3282 60.7327 6.05405 42.8034C14.4363 24.8741 33.39 12.8328 60.6568 6.48846C87.9165 0.145761 123.397 -0.479364 164.671 4.35089C247.213 14.0108 352.808 45.4751 461.878 96.4673C570.949 147.46 662.806 208.307 723.149 265.449C753.323 294.022 775.596 321.648 788.21 346.632C800.827 371.623 803.742 393.888 795.36 411.817Z" stroke="#64A9C6"/>
						</svg>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->
<?php
get_footer();
