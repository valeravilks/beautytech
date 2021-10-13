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
	<main id="primary" class="site-main about-page">
  <?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php get_template_part('template-parts/page-title', '', array('title' => get_field('about_title'))); ?>
		<div class="about-page__box1">
			<div class="container">
				<div class="row g-0">
					<div class="col-12 col-l-6">
						<div class="about-page__subtitle">
							<?php echo get_field('beauty_tech_is')['title']; ?>
						</div>
					</div>
					<div class="col-12 col-l-6">
						<div class="about-page__text">
							<?php echo get_field('beauty_tech_is')['text']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-page__box2">
			<div class="container">
				<img src="<?php echo get_field('beauty_tech_is')['logo']['url']; ?>" alt="image" class="about-page__img">
			</div>
		</div>
		<div class="about-page__box3">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-6 col-l-6">
						<div class="about-page__text2">
							<?php echo get_field('beauty_tech_is')['text_2']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/h2-block', '', array(
					'h2' => get_field('what_we_do')['title'],
				));
		?>
		<div class="about-page__box4">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-4 col-l-4">
						<div class="about-page__text3">
							<?php echo get_field('what_we_do')['text']; ?>
						</div>
					</div>
					<div class="col-12 col-l-4">
						<div class="about-page__text4">
							<?php echo get_field('what_we_do')['text_2']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-page__box5">
			<div class="container">
				<div class="row g-0">
					<div class="col-12 col-l-3">
						<div class="about-page__bl">
							<div class="about-page__title2">
								<?php echo get_field('what_we_do')['subtitle']; ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-l-9">
						<div class="row g-0">
							<?php 
							$content = get_field('what_we_do')['logos']; 
							if($content) :
								foreach($content as $item):?>
							<div class="col-6 col-l-3">
								<div class="about-page__bl2">
									<img src="<?php echo $item['item']['url']; ?>" alt="logo" class="about-page__logo">
								</div>
							</div>

							<?php endforeach; endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/h2-block', '', array(
					'h2' => get_field('intensive_development')['title'],
					'link' => get_field('intensive_development')['link']['url'],
				));
		?>

		<div class="about-page__box6">
			<div class="container">
				<div class="row">
					<div class="col-12 col-l-6">
						<div class="about-page__text5">
							<?php echo get_field('intensive_development')['text']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-page__box7">
			<div class="container">
				<div class="row">
					<?php	$posts = get_posts( array(
						'numberposts' => 3,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );
					
						$index = 1;

					foreach( $posts as $post ) :
						setup_postdata($post);
							if($index == 1):?>
								<div class="col-12 col-l-6">
									<div class="about-page__card" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
										<div class="about-page__gradient">
											<div class="about-text__cdate">
												<?php the_date(); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

					<div class="col-12 col-l-6">
						<?php 
						$index++;
						endforeach;

						$index = 1;

						foreach( $posts as $post ) :
							setup_postdata($post);
								if($index == 2 || $index == 3):?>
									<div class="col-12">
										<?php echo $index;?>
									</div>
								<?php endif; ?>
							<?php 
							$index++;
							endforeach;
							wp_reset_postdata(); // сброс
						?>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php get_template_part('template-parts/about-us-block', '', array('isTitle' => 'no')); ?>
		<?php get_template_part('template-parts/home', 'support');?>
		<?php get_template_part('template-parts/about-us-block'); ?>
	</main><!-- #main -->
<?php
get_footer();
