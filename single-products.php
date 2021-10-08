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

		<?php get_template_part('template-parts/breadcrumbs'); ?>
		<?php get_template_part('template-parts/product', 'cover'); ?>
		<?php get_template_part('template-parts/product', 'menu'); ?>
		<?php get_template_part('template-parts/product', 'content-1'); ?>
		<?php get_template_part('template-parts/product', 'indications'); ?>
		<?php get_template_part('template-parts/product', 'benefits'); ?>
		<?php get_template_part('template-parts/product', 'spec'); ?>
		<?php get_template_part('template-parts/product', 'result'); ?>
		<?php get_template_part('template-parts/product', 'video'); ?>
    <h1><?php the_title()?></h1>
		<?php get_template_part('template-parts/home', 'support');?>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
