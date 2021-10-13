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

	<main id="primary" class="site-main page-services">
		<?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php get_template_part('template-parts/page-title', '', array('title' => get_field('services_title'), 'class' => 'page-services__title')); ?>
		<?php get_template_part('template-parts/h2-block', '', array(
					'description' => get_field('services_desc'),
					'h2' => get_field('services_title_2'),
					'linkText' => get_field('services_link_1')['title'],
					'link' => get_field('services_link_1')['url'],
				));
		?>
		<div class="page-services__box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-l-5">
						<div class="page-services__text">
							<?php the_field('services_text'); ?>
						</div>
					</div>
					<div class="col-12 offset-l-1 col-l-6">
						<div class="row">
							<div class="col-12 col-l-6">
								<div class="page-services__item">
									<div class="page-services__text3">
										<?php the_field('services_item_1'); ?>
									</div>
								</div>
							</div>
							<div class="col-12 col-l-6">
								<div class="page-services__item">
									<div class="page-services__text3">
										<?php the_field('services_item_2'); ?>
									</div>
								</div>
							</div>
							<div class="col-12 col-l-6">
								<div class="page-services__item">
									<div class="page-services__text3">
										<?php the_field('services_item_3'); ?>
									</div>
								</div>
							</div>
							<div class="col-12 col-l-6">
								<div class="page-services__item">
									<div class="page-services__text3">
										<?php the_field('services_item_3'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="page-services__text4">
							<?php the_field('services_text_2'); ?>
						</div>
					</div>
				</div>
				<div class="page-services__mlink">
					<a href="<?php echo get_field('services_link_1')['url']; ?>" class="link link-plus"><?php echo get_field('services_link_1')['title']?></a>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/h2-block', '', array(
					// 'description' => get_field('services_desc'),
					'h2' => get_field('services_title_copy'),
					'linkText' => get_field('services_link_3')['title'],
					'link' => get_field('services_link_3')['url'],
				));
		?>
		<div class="page-services__box1">
			<div class="container">
				<div class="row">
					<div class="col-12 col-l-6">
						<div class="page-services__text5">
							<?php the_field('services_text_3'); ?>
						</div>
					</div>
					<div class="col-12 col-l-6">
						<div class="page-services__text5">
							<?php the_field('services_text_4'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-services__box2">
				<div class="container">
					<img src="<?php echo get_field('services_image'); ?>" alt="map" class="page-services__map">
					<div class="page-services__text6">
						<?php the_field('services_text_5'); ?>
					</div>
				</div>
				<div class="page-services__bl">
					<div class="container">
						<div class="page-services__text7">
							<?php the_field('services_text_5'); ?>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="page-services__mlink">
						<a href="<?php echo get_field('services_link_3')['url']; ?>" class="link link-plus"><?php echo get_field('services_link_3')['title']?></a>
					</div>
				</div>
		</div>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
