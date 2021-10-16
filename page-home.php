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
		<?php get_template_part('template-parts/home', 'first-screen')?>
		<?php get_template_part('template-parts/home', 'slider')?>
		<?php get_template_part('template-parts/home', 'about-us');?>
		<?php get_template_part('template-parts/home', 'products');?>
		<?php get_template_part('template-parts/home', 'services');?>
		<?php get_template_part('template-parts/home', 'testimonials');?>
		<div class="home-decor">
			<div class="home-decor__content container"></div>
			<?php get_template_part('template-parts/home', 'news');?>
		</div>
		<?php get_template_part('template-parts/home', 'support');?>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>

	</main><!-- #main -->
<?php
get_footer();
