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

	<main id="primary" class="site-main contact-page for-">
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
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="doctors__bl1">
						<div class="doctors__text1">
							<?php the_field('d-text-2');?>
						</div>
						<div class="doctors__text2">
							<?php the_field('d-text-3');?>
						</div>
						<div class="doctors__bl2">
							<img src="<?php echo get_field('d-img')['url'];?>" alt="img" class="doctors__img1">	
							<div class="doctors__bl3">
								<div class="doctors__text3">
									<?php the_field('d-text-33');?>
								</div>
								<hr class="doctors__hr1">
							</div>
							<div class="doctors__bl3">
								<div class="doctors__text3">
									<?php the_field('d-text-4');?>
								</div>
								<hr class="doctors__hr2">
							</div>
							<div class="doctors__bl3">
								<div class="doctors__text3">
									<?php the_field('d-text-5');?>
								</div>
								<hr class="doctors__hr3">
							</div>
							<div class="doctors__bl3">
								<div class="doctors__text3">
									<?php the_field('d-text-6');?>
								</div>
								<hr class="doctors__hr4">
							</div>
							<div class="doctors__bl3">
								<div class="doctors__text3">
									<?php the_field('d-text-7');?>
								</div>
								<hr class="doctors__hr5">
							</div>
						</div>
						<div class="doctors__text4">
							<?php the_field('d-text-8');?>
						</div>
					</div>
				</div>
				<div class="col-12 col-l-4">
					<div class="doctors__text5">
						<?php the_field('d-subtitle-1');?>
					</div>
				</div>
				<div class="col-12 col-l-8">
					<div class="doctors__text6">
						<?php the_field('d-text-9');?>
					</div>
					<div class="row doctors__bl5">
						<div class="col-12 col-l-6">
							<div class="doctors__bl4">
								<img src="<?php echo get_field('d-img-2')['url'];?>" alt="img" class="doctors__img2">
								<div class="doctors__cap">
									<?php the_field('d-caption-1');?>
								</div>
							</div>
						</div>
						<div class="col-12 col-l-6">
							<div class="doctors__bl4">
								<img src="<?php echo get_field('d-img-3')['url'];?>" alt="img" class="doctors__img2">
								<div class="doctors__cap">
									<?php the_field('d-caption-2');?>
								</div>
							</div>
						</div>
					</div>
					<div class="doctors__text7">
						<?php the_field('d-text-10');?>
					</div>
				</div>
				<div class="col-12 col-l-3">
					<div class="doctors__text5">
						<?php the_field('d-subtitle-2');?>
					</div>
				</div>
				<div class="col-12 offset-l-1 col-l-8">
					<div class="doctors__text8">
						<?php the_field('d-text-11');?>
					</div>
				</div>
				<div class="col-12 offset-l-4 col-l-5">
					<img src="<?php echo get_field('d-img-4')['url'];?>" alt="img" class="doctors__img3">
				</div>
			</div>
		</div>
		<?php echo get_template_part('template-parts/product-video');?>
		<section class="areas-use">
			<div class="areas-use__block2">
				<img src="<?php echo get_field('area-use-image')['url'];?>" alt="img" class="areas-use__image">
			</div>
			<div class="areas-use__block">
				<div class="container">
					<div class="areas-use__title">
						<?php the_field('area-use-title');?>
					</div>
					<div class="areas-use__scroll">
						Skroll
						<svg width="50" height="6" viewBox="0 0 50 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M50 3L45 0.113249V5.88675L50 3ZM0 3.5H45.5V2.5H0V3.5Z" fill="white"/>
						</svg>
					</div>
				</div>
			</div>
		</section>
		
	</main><!-- #main -->
<?php
get_footer();

// Subtitle
// d-subtitle-2Text
// 23
// Text
// d-text-11Text Area
// 24
// Image
// d-img-4