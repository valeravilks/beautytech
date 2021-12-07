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

$bl1 = get_field('pr-block1');
$bl2 = get_field('pr-block2');
$bl3 = get_field('pr-block3');
$bl4 = get_field('pr-block4');
$bl5 = get_field('pr-block5');
$bl6 = get_field('pr-block6');
$bl7 = get_field('pr-block7');
$bl8 = get_field('pr-block8');
$bl9 = get_field('pr-block9');
$bl10 = get_field('pr-block10');
$bl11 = get_field('pr-block11');
$bl12 = get_field('pr-block12');
$bl13 = get_field('pr-block13');
$bl14 = get_field('pr-block14');
$bl15 = get_field('pr-block15');
$bl16 = get_field('pr-block16');
$bl17 = get_field('pr-block17');
$bl18 = get_field('pr-block18');
$bl19 = get_field('pr-block19');
$bl20 = get_field('pr-block20');

?>

<main id="primary" class="site-main page-product pp">
	<?php if ($bl1) ?>
	<section class="pp-b1">
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-5 col-l-6">
					<img src="<?php echo $bl1['logo']['url']; ?>" class="pp-b1-1">
				</div>
			</div>
			<div class="pp-b1-2">
				<div class="row pp-b1-9">
					<div class="col-12 offset-l-6 col-l-6 pp-b1-7">
						<div class="pp-b1-3">
							<?php echo $bl1['title']; ?>
						</div>
						<div class="pp-b1-4">
							<?php echo $bl1['text']; ?>
						</div>
						<a href="#" class="pp-b1-5 js-consultation">
							<?php echo $bl1['button']; ?>
						</a>
						<img src="<?php echo $bl1['image']['url'] ?>" alt="img" class="pp-b1-6">
						<div class="pp-b1-8">
							<?php echo $bl1['name']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b2">
		<div class="container">
			<div class="row g-0">
				<div class="col-12 col-l-6 pp-b2-5">
					<div class="pp-b2-1">
						<?php echo $bl2['name']; ?>
					</div>
					<img src="<?php echo $bl2['image']['url']; ?>" class="pp-b2-2">
				</div>
				<div class="col-12 col-l-6">
					<div class="pp-b2-3">
						<?php echo $bl2['title']; ?>
					</div>
					<div class="pp-b2-4">
						<?php echo $bl2['text']; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b3">
		<?php get_template_part('template-parts/h2-block', '', array(
			'h2' => $bl3['title'],
		));
		?>
		<div class="container">
			<div class="row">
				<?php
				$index = 0;
				$num = 3;
				// var_dump($bl3['items']);
				foreach ($bl3['items'] as $element) : ?>
					<div class="col-12 col-l-4">
						<div class="pp-b3__block">
							<div class="pp-b3__sub">
								<?php echo $element['title']; ?>
							</div>
							<div class="pp-b3__text">
								<?php echo $element['text']; ?>
							</div>
							<hr class="pp-b3__hr <?php
																		if ($index > count($bl3['items']) - 1 - $num) {
																			echo 'pp-b3__hr2';
																		}
																		if ($index == count($bl3['items']) - 1) {
																			echo ' pp-b3__hr3';
																		}
																		?>">
						</div>
					</div>
					<?php
					$index++; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<section>
		<?php get_template_part('template-parts/h2-block', '', array(
			'h2' => $bl4['title'],
		));
		?>
		<div class="pp-b4">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-4 col-l-8">
							<div class="pp-b4-bl1">
								<div class="pp-b4-text1">
									<?php echo $bl4['subtitle'];?>
								</div>
								<div class="pp-b4-text2">
									<?php echo $bl4['text'];?>
								</div>
								<div class="pp-b4-text4">
									<?php echo $bl4['subtitle-2'];?>
								</div>
								<div class="pp-b4-text5">
									<?php echo $bl4['text-2'];?>
								</div>
								<div class="pp-b4-bl2">
									<img src="<?php echo $bl4['image']['url'];?>" alt="img" class="pp-b4-img1">	
									<div class="pp-b4-bl3">
										<div class="pp-b4-text3">
											<?php echo $bl4['list']['text1'];?>
										</div>
										<hr class="pp-b4-hr1">
									</div>
									<div class="pp-b4-bl3">
										<div class="pp-b4-text3">
											<?php echo $bl4['list']['text2'];?>
										</div>
										<hr class="pp-b4-hr2">
									</div>
									<div class="pp-b4-bl3">
										<div class="pp-b4-text3">
											<?php echo $bl4['list']['text3'];?>
										</div>
										<hr class="pp-b4-hr3">
									</div>
									<div class="pp-b4-bl3">
										<div class="pp-b4-text3">
											<?php echo $bl4['list']['text4'];?>
										</div>
										<hr class="pp-b4-hr4">
									</div>
									<div class="pp-b4-bl3">
										<div class="pp-b4-text3">
											<?php echo $bl4['list']['text5'];?>
										</div>
										<hr class="pp-b4-hr5">
									</div>
								</div>
								<div class="pp-b4-text4">
									<?php the_field('d-text-8');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pp-b5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-l-4">
						<div class="pp-b5__text7">
							<?php echo $bl5['title']?>
						</div>
					</div>	
					<div class="col-12 col-l-8">
						<div class="pp-slider__main pp-b5__slider">
							<div class="swiper pp-slider-text">
								<div class="swiper-wrapper">
									<?php 
									foreach($bl5['slider'] as $element): ?>
										<div class="swiper-slide pp-slider-text__slide">
											<div class="pp-slider-text__text">
												<?php echo $element['name']; ?>
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
									foreach($bl5['slider'] as $element): ?>
										<div class="swiper-slide">
											<div class="pp-slider__block">
												<div class="row">
													<div class="col-12 col-l-6 pp-slider__margin">
														<img src="<?php echo $element['image1']['url']?>" alt="" class="pp-slider__img">
													</div>
													<div class="col-12 col-l-6">
														<img src="<?php echo $element['image2']['url']?>" alt="" class="pp-slider__img">
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="pp-b5__text3">
							<?php echo $bl5['title-2'];?>
						</div>
						<div class="pp-b5__text4">
							<?php echo $bl5['text'];?>
						</div>
						<div class="pp-b5__text5">
							<?php echo $bl5['title-3'];?>
						</div>
						<div class="pp-b5__items">
							<div class="row">
								<?php
								$index = 0;
								$num = 2;
								// var_dump($bl3['items']);
								foreach ($bl5['items'] as $element) : ?>
									<div class="col-12 col-l-6">
										<div class="pp-b5__block">
											<div class="pp-b5__text6">
												<?php echo $element['text']; ?>
											</div>
											<hr class="pp-b5__hr <?php
																						if ($index > count($bl5['items']) - 1 - $num) {
																							echo 'pp-b3__hr2';
																						}
																						if ($index == count($bl5['items']) - 1) {
																							echo ' pp-b3__hr3';
																						}
																						?>">
										</div>
									</div>
									<?php
									$index++; ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b6">
		<div class="container">
		<div class="row">
					<div class="col-12 col-l-4">
						<div class="pp-b6__text1">
							<?php echo $bl6['title']?>
						</div>
					</div>	
					<div class="col-12 col-l-8">
					<div class="pp-b6__items">
							<div class="row">
								<?php
								$index = 0;
								$num = 2;
								// var_dump($bl3['items']);
								foreach ($bl6['items'] as $element) : ?>
									<div class="col-12">
										<div class="pp-b6__block">
											<div class="pp-b6__text2">
												<?php echo $element['text']; ?>
											</div>
											<hr class="pp-b6__hr <?php
																						if ($index > count($bl6['items']) - 1 - $num) {
																							echo 'pp-b6__hr2';
																						}
																						if ($index == count($bl6['items']) - 1) {
																							echo ' pp-b6__hr3';
																						}
																						?>">
										</div>
									</div>
									<?php
									$index++; ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
</main><!-- #main -->
<?php
get_footer();

// 1
// Logo
// Edit Duplicate Move Delete
// logoImage
// 2
// Title
// titleText
// 3
// Name
// nameText Area
// 4
// Text
// textText
// 5
// Button
// buttonText
// 6
// Image
// image