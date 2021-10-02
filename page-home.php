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
		<div class="home-main">
			<div class="container">
				<h1 class="home-main__title">
					<span class="home-main__color">Beauty tech</span>
					<span class="home-main__text">supports and supplies customers worldwide</span>
				</h1>
				<hr class="home-main__hr">
				<a href="#" class="home-main__link link link-primary">products</a>
			</div>
		</div>
		<div class="swiper home-slider">
			<div class="home-slider__nav-button">
				<div class="container">
					<div class="home-slider__prev">
						<img class="home-slider__prev-90" src="<?php echo get_template_directory_uri();?>/img/svg/icon-arrow-slider.svg" alt="">
					</div>
					<div class="home-slider__next">
						<img src="<?php echo get_template_directory_uri();?>/img/svg/icon-arrow-slider.svg" alt="">
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
				<div class="home-slider__slide swiper-slide" style="background-image: url('https://beautytech.com/wp-content/uploads/2021/10/Liner.jpg')">
					<div class="home-slider__gradient">
						<div class="container home-slider__container">
							<div class="row g-0">
								<div class="col-12 col-l-6 home-slider__btn">
									<a href="#" class="home-slider__link link link-outline link-fill">
										Learn more
									</a>	
								</div>
								<div class="col-12 col-l-6 home-slider__t-o">
									<div class="home-slider__header">
										tri-beam premium
									</div>
									<div class="home-slider__text">
										An effective technology that allows you to treat age spots and small wrinkles. With three wavelengths, you can do most types and process pigments in tattoos effectively.
									</div>
								</div>
							</div>
						</div>
						<div class="home-slider__element sl__element">
									<hr class="sl__hr-1">
									<hr class="sl__hr-2">
								</div>
								<div class="home-slider__element sl__element-2">
									<div class="sl__container container">
										<div class="sl__row row">
											<div class="col-3">
												<div class="sl__dot sl__dot-none"></div>	
											</div>
											<div class="col-3">
												<div class="sl__dot sl__dot-none"></div>	
											</div>
											<div class="col-3">
												<div class="sl__dot"></div>	
											</div>
											<div class="col-3">
												<div class="sl__dot"></div>	
											</div>
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
