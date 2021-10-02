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

	<main id="primary" class="site-main">
		<div class="home-main">
			<div class="container">
				<h1 class="home-main__title">
					<span class="home-main__color">Beauty tech</span>
					<span class="home-main__text">supports and supplies customers worldwide</span>
				</h1>
				<hr class="home-main__hr">
				<a href="#" class="home-main__link link link-primary">products</a>
			</div>
		</div>
		<div 
			class="home-image"
			style="background-image: url('https://beautytech.com/wp-content/uploads/2021/10/Liner.jpg')"
		>
			<div class="container">
				<div class="row no-gutters">
					<div class="col-12 col-l-6">
						<a href="#" class="home-image__link link link-outline link-fill">
							Learn more
						</a>	
					</div>
					<div class="col-12 col-l-6">
						asd
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
