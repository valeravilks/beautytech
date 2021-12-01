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
		<section class="d-cover">
			<div class="d-cover__back">
				<div class="d-cover__bg1" style="background-image: url('<?php echo get_field('d-background')['url'];?>')"></div>
				<div class="d-cover__bg2" style="background-image: url('<?php echo get_field('d-background-m')['url'];?>')"></div>
			</div>
			<div class="container">
				<h1 class="d-cover__h1">
					<?php the_field('d-title'); ?>
				</h1>	
				<p class="d-cover__text">
					<?php the_field('d-text');?>
				</p>
			</div>
		</section>
		<?php get_template_part('template-parts/h2-block', '', array(
					'h2' => get_field('d-how_it_works'),
				));
		?>
	</main><!-- #main -->
<?php
get_footer();
