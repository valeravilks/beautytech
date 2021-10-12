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
$categoryList = get_the_terms($post->ID, 'events-categories');
get_header();
?>
	<main id="primary" class="site-main single-event">
			<?php get_template_part('template-parts/breadcrumbs'); ?>
			<?php get_template_part('template-parts/page-title', '', array('title' => 'Events')); ?>
		  <?php get_template_part('template-parts/cat-menu', '', array(
      'taxonomy' => 'events-categories',
      'type' => 'events',
      'active' => 'all'
      )); ?>

			<div class="container">
			<div class="single-event__header">
				<?php if($categoryList) :
						foreach($categoryList as $category) :?> 
						<div class="single-event__tag">
							<?php echo $category->name; ?>
						</div>
						<?php endforeach; 
					endif; ?>
				</div>
				<h2 class="single-event__title">
					<?php the_title();?>
				</h2>
				<div class="row">
					<div class="col-12 col-l-4">
						<div class="single-event__box">
							<div class="single-event__item">
								<div class="single-event__sub">
									Date:
								</div>
								<div class="single-event__value">
									<?php the_field('e-date'); ?>
								</div>
								<hr class="single-event__hr">
							</div>
							<div class="single-event__item">
								<div class="single-event__sub">
									Location:
								</div>
								<div class="single-event__value">
									<?php the_field('e-location'); ?>
								</div>
								<hr class="single-event__hr">
							</div>
							<div class="single-event__item">
								<div class="single-event__sub">
									Stand:
								</div>
								<div class="single-event__value">
									<?php the_field('e-stand'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-l-8">
						<img src="<?php echo get_field('e-image')['url']; ?>" alt="image" class="single-event__img">
						<div class="single-event__content single-content">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part('template-parts/contact-us-block'); ?>
	</main><!-- #main -->
<?php
get_footer();
