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
		<?php get_template_part('template-parts/contact-us-block', '', array('isTitle' => 'no', 'class' => 'js-contact-page-form')); ?>
	</main><!-- #main -->
<?php
get_footer();
