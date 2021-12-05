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
	<main id="primary" class="site-main single-event">
		<div class="container">
			<div class="single-event__title">
				Events
			</div>
		</div>
		<div class="single-event__cover" style="background-image: url('<?php echo get_field('e-image')['url'];?>')">
			<div class="single-event__container container">
				<div class="single-event__date">
					<?php $dateString = get_field('e-date');
					$date = explode(';', $dateString);
					?>
					<div class="single-event__num">
						<?php echo $date[0]; ?>
					</div>
					<div class="single-event__mounth">
						<?php echo $date[1]; ?>
					</div>
				</div>
				<div class="single-event__header">
					<?php the_title();?>
				</div>
			</div>
		</div>
		<div class="container single-event__bl2">
			<div class="row">
				<div class="col-12 offset-l-2 col-l-10">
					<div class="single-event__content">
						<?php the_content();?>
					</div>
					<hr class="single-event__hr">
					<div class="single-event__place">
						<?php the_field('e-location');?>
					</div>
					<div class="single-event__time">
						<?php the_field('e-time');?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
