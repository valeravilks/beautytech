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

	<main id="primary" class="site-main contact-page">
  <?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php get_template_part('template-parts/page-title', '', array('title' => 'Contact')); ?>
		<?php get_template_part('template-parts/contact-us-block', '', array('isTitle' => 'no', 'class' => 'js-contact-page-form')); ?>
		<div class="content-page__maps">
			<div 
				id="map-contact" 
				data-coor-1="<?php the_field('contact_coordinate_1'); ?>"
				data-coor-2="<?php the_field('contact_coordinate_2'); ?>"
			></div>
		</div>
		<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
