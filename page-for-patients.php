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
				<div class="d-cover__bg1" style="background-image: url('<?php echo get_field('p-background')['url'];?>')"></div>
				<div class="d-cover__bg2" style="background-image: url('<?php echo get_field('p-background-m')['url'];?>')"></div>
			</div>
			<div class="container">
				<h1 class="d-cover__h1">
					<?php the_field('p-title'); ?>
				</h1>	
				<p class="d-cover__text">
					<?php the_field('p-text');?>
				</p>
			</div>
		</section>
		<?php get_template_part('template-parts/h2-block', '', array(
					'h2' => get_field('p-title-2'),
				));
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="doctors__bl1">
						<div class="doctors__text2">
							<?php the_field('p-text-2');?>
						</div>
					</div>
				</div>
				<div class="col-12 col-l-4">
					<div class="doctors__text10">
						<?php the_field('p-sub-1');?>
					</div>
				</div>
				<div class="col-12 col-l-8">
					<div class="doctors__text9">
						<?php the_field('p-text-3');?>
					</div>
				</div>
				<div class="col-12 col-l-4">
					<div class="doctors__text10">
						<?php the_field('p-sub-2');?>
					</div>
				</div>
				<div class="col-12 col-l-8">
					<div class="doctors__text9">
						<?php the_field('p-text-4');?>
					</div>
					<div class="doctors__bl6">
						<img src="<?php echo get_field('p-img-1')['url']?>" alt="img" class="doctors__img4">
						<div class="doctors__text11">
							<?php the_field('p-text-5');?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/h2-block', '', array(
					'h2' => get_field('p-title-3'),
				));
		?>
		<div class="container doctors__bl7">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="doctors__bl1">
						<div class="doctors__text2">
							<?php the_field('p-text-6');?>
						</div>
					</div>
				</div>
				<?php 
				$index = 0;
				$count = count(get_field('p-items'));
				if(have_rows('p-items')) :?>
					<?php while(have_rows('p-items')) : the_row(); ?>
					<div class="col-12 col-l-4">
						<div class="doctors__text10">
							<?php the_sub_field('title');?>
						</div>	
					</div>
					<div class="col-12 col-l-8">
						<div class="doctors__text12">
							<?php the_sub_field('text');?>
						</div>
						<?php if($count != $index + 1): ?>
							<hr class="doctors__hr6">
						<?php endif; ?>
					</div>
					<?php 
					$index++;
					endwhile?>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="doctors__bl8">
				<div class="doctors__title10">
					<?php the_field('p-title-4');?>
				</div>
				<div class="doctors__text13">
					<?php the_field('p-text-7');?>
				</div>
				<div class="doctors__text14">
					<?php the_field('p-text-8');?>
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
		<section class="adv">
			<?php get_template_part('template-parts/h2-block', '', array(
						'h2' => get_field('adv-title'),
					));
			?>
			<div class="container">
				<div class="row">
					<?php 
						$index = 0;
						if(have_rows('adv-items')) :?>
							<?php while(have_rows('adv-items')) : the_row(); ?>
							<div class="col-12 col-l-3">
								<div class="adv__block">
									<div class="adv__sub">
										<?php the_sub_field('subtitle');?>
									</div>
									<div class="adv__text">
										<?php the_sub_field('text');?>
									</div>
									<hr class="adv__hr <?php 
									if($index > 3){
										echo 'adv__hr2';
									}
									?>">
								</div>
							</div>
							<?php 
							$index++;
							endwhile?>
						<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="">
			<?php get_template_part('template-parts/h2-block', '', array(
						'h2' => 'Before - after results',
					));
			?>
			<div class="result__block1">
				<div class="container">
					<div class="result__buttons">
						<button class="result__button result__button-active" data-v="Face">
							Face
						</button>
						<button class="result__button" data-v="Body">
							Body
						</button>
					</div>
				</div>
				<?php 
				$arr = get_field('rez_slider_1');
				$arr2 = get_field('rez_slider_2');
				?>
				<section class="result slider-bl result__sl1">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="pp-slider__main result__slider">
									<div class="swiper pp-slider-text">
										<div class="swiper-wrapper">
											<?php 
											foreach($arr as $element): ?>
												<div class="swiper-slide pp-slider-text__slide">
													<div class="pp-slider-text__text">
														<?php echo $element['text']; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="pp-slider-text__prev">
										<svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11 1L1 11L11 21" stroke="#65656C" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<div class="pp-slider-text__next">
										<svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 21L11 11L1 0.999999" stroke="#65656C" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<div class="swiper pp-slider">
										<div class="swiper-wrapper">
											<?php 
											foreach($arr as $element): ?>
												<div class="swiper-slide">
													<div class="pp-slider__block">
														<div class="row">
															<div class="col-12 col-l-6 pp-slider__margin">
																<img src="<?php echo $element['image_1']['url']?>" alt="" class="pp-slider__img">
															</div>
															<div class="col-12 col-l-6">
																<img src="<?php echo $element['image_2']['url']?>" alt="" class="pp-slider__img">
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="result slider-bl result__sl2 result__none">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="pp-slider__main result__slider">
									<div class="swiper pp-slider-text">
										<div class="swiper-wrapper">
											<?php 
											foreach($arr2 as $element): ?>
												<div class="swiper-slide pp-slider-text__slide">
													<div class="pp-slider-text__text">
														<?php echo $element['text']; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="pp-slider-text__prev">
										<svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11 1L1 11L11 21" stroke="#65656C" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<div class="pp-slider-text__next">
										<svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 21L11 11L1 0.999999" stroke="#65656C" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<div class="swiper pp-slider">
										<div class="swiper-wrapper">
											<?php 
											foreach($arr2 as $element): ?>
												<div class="swiper-slide">
													<div class="pp-slider__block">
														<div class="row">
															<div class="col-12 col-l-6 pp-slider__margin">
																<img src="<?php echo $element['image_1']['url']?>" alt="" class="pp-slider__img">
															</div>
															<div class="col-12 col-l-6">
																<img src="<?php echo $element['image_2']['url']?>" alt="" class="pp-slider__img">
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
		<section class="brosh">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-4 col-l-8">
						<div class="brosh__text">
							<?php the_field('br-text');?>
						</div>
						<a href="<?php echo get_field('br-file')['url']?>" download class="brosh__download">
							download <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 17H16" stroke="white" stroke-width="2"/>
							<path d="M9 9.5V13L12 9.5H9Z" fill="white"/>
							<path d="M6 9.5L9 13V9.5H6Z" fill="white"/>
							<path d="M9 1V9.5M9 13L12 9.5H9M9 13L6 9.5H9M9 13V9.5" stroke="white" stroke-width="2"/>
							</svg>
						</a>
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