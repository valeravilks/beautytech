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
		<div class="pp-b5 slider-bl">
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
	<section class="pp-b7 slider-bl">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b7__text7">
						<?php echo $bl7['title']?>
					</div>
				</div>	
				<div class="col-12 col-l-8">
					<div class="pp-slider__main pp-b7__slider">
						<div class="swiper pp-slider-text">
							<div class="swiper-wrapper">
								<?php 
								foreach($bl7['slider'] as $element): ?>
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
								foreach($bl7['slider'] as $element): ?>
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
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b8">
			<?php get_template_part('template-parts/h3-block', '', array(
				'h3' => $bl8['title'],
			));
			?>
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="pp-b8__text2">
						<?php echo $bl8['text']?>
					</div>
					<div class="pp-b8__text3">
						<?php echo $bl8['text-2']?>
					</div>
					<img src="<?php echo $bl8['image']['url']?>" alt="img" class="pp-b8__img">
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b9">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b9__text">
						<?php echo $bl9['title'];?>
					</div>
				</div>
				<div class="col-12 col-l-8">
					<img src="<?php echo $bl9['image']['url']?>" alt="img" class="pp-b9__img">
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b10">
		<div class="container">
			<div class="pp-b10__title">
				<?php echo $bl10['title'];?>
			</div>
			<div class="row pp-b10__block3">
				<?php
				foreach ($bl10['items'] as $element) : ?>
					<div class="col-12 col-l-4">
						<div class="pp-b10__block">
							<div class="pp-b10__text">
								<?php echo $element['text']; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="pp-b10__block2">
				<div class="row">
					<div class="col-12 col-l-6">
						<img src="<?php echo $bl10['image1']['url']?>" alt="img" class="pp-b10__img">
					</div>
					<div class="col-12 col-l-6">
						<img src="<?php echo $bl10['image2']['url']?>" alt="img" class="pp-b10__img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b11">
		<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => $bl11['title'],
		));
		?>
		<div class="pp-b11__block">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-4 col-l-8">
						<div class="pp-b11__text1">
							<?php echo $bl11['text'];?>
						</div>
						<img src="<?php echo $bl11['image']['url']?>" alt="img" class="pp-b11__img">
					</div>
					<div class="col-12 col-l-4">
						<div class="pp-b11__text2">
							<?php echo $bl11['subtitle'];?>
						</div>
					</div>
					<div class="col-12 col-l-8">
						<div class="pp-b11__text3">
							<?php echo $bl11['text-2'];?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b12">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b12__block">
						<img src="<?php echo $bl12['image-1']['url']?>" alt="" class="pp-b12__img">
						<div class="pp-b12__text1">
							<?php echo $bl12['title_1']?>
						</div>
						<div class="pp-b12__text2">
							<?php echo $bl12['text_1']?>
						</div>
					</div>
				</div>
				<div class="col-12 col-l-4">
					<div class="pp-b12__block">
						<img src="<?php echo $bl12['image-2']['url']?>" alt="" class="pp-b12__img">
						<div class="pp-b12__text1">
							<?php echo $bl12['title_2']?>
						</div>
						<div class="pp-b12__text2">
							<?php echo $bl12['text_2']?>
						</div>
					</div>
				</div>
				<div class="col-12 col-l-4">
					<div class="pp-b12__block">
						<img src="<?php echo $bl12['image-3']['url']?>" alt="" class="pp-b12__img">
						<div class="pp-b12__text1">
							<?php echo $bl12['title_3']?>
						</div>
						<div class="pp-b12__text2">
							<?php echo $bl12['text_3']?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="pp-b12__text3">
						<?php echo $bl12['subtitle'];?>
					</div>
					<div class="pp-b12__text4">
						<?php echo $bl12['text_4'];?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b13">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b13__text">
						<?php echo $bl13['title'];?>
					</div>
				</div>
				<div class="col-12 col-l-8">
					<div class="pp-b13__block">
						<div class="row">
							<?php foreach($bl13['items'] as $el) :?>
								<div class="col-12 col-l-6">
									<div class="pp-b13__bl">
										<div class="pp-b13__text2">
											<?php echo $el['text']?>
										</div>
									</div>
								</div>
								<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b14 slider-bl">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b14__text7">
						<?php echo $bl14['title']?>
					</div>
				</div>	
				<div class="col-12 col-l-8">
					<div class="pp-slider__main pp-b14__slider">
						<div class="swiper pp-slider-text">
							<div class="swiper-wrapper">
								<?php 
								foreach($bl14['items'] as $element): ?>
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
								foreach($bl14['items'] as $element): ?>
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
	<section class="pp-b15">
		<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => $bl15['title'],
		));
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="pp-b15__text1">
						<?php echo $bl15['subtitle']?>
					</div>
					<div class="pp-b15__text2">
						<?php echo $bl15['text']?>
					</div>
					<div class="pp-b15__text3">
						<?php echo $bl15['subtitle-2']?>
					</div>
					<div class="pp-b15__block">
						<?php 
						$index = 0;
							foreach($bl15['items'] as $el) :?>
								<div class="pp-b15__text4">
									<?php echo $el['text'];?>
								</div>
								<?php if(count($bl15['items']) > $index + 1) :?>
									<hr class="pp-b15__hr">
								<?php endif; $index++;?>

						<?php endforeach;?>
					</div>
					<div class="row">
						<div class="col-12 col-l-6 pp-b15__el">
							<img src="<?php echo $bl15['image_1']['url']?>" alt="image" class="pp-b15__img">
							<div class="pp-b15__text5">
								<?php echo $bl15['caption_1']?>
							</div>
							<div class="pp-b15__text6">
								<?php echo $bl15['text_1']?>
							</div>
						</div>
						<div class="col-12 col-l-6">
							<img src="<?php echo $bl15['image_2']['url']?>" alt="image" class="pp-b15__img">
							<div class="pp-b15__text5">
								<?php echo $bl15['caption_2']?>
							</div>
							<div class="pp-b15__text6">
								<?php echo $bl15['text_2']?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b16 slider-bl">
		<div class="container">
			<div class="row">
				<div class="col-12 col-l-4">
					<div class="pp-b16__text7">
						<?php echo $bl16['title']?>
					</div>
				</div>	
				<div class="col-12 col-l-8">
					<div class="pp-slider__main pp-b16__slider">
						<div class="swiper pp-slider-text">
							<div class="swiper-wrapper">
								<?php 
								foreach($bl16['items'] as $element): ?>
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
								foreach($bl16['items'] as $element): ?>
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
	<section class="pp-b17">
		<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => $bl17['title'],
		));
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 offset-l-4 col-l-8">
					<div class="pp-b17__text1">
						<?php echo $bl17['subtitle']?>
					</div>
					<div class="pp-b17__text2">
						<?php echo $bl17['text']?>
					</div>
					<div class="pp-b17__text3">
						<?php echo $bl17['subtitle-2']?>
					</div>
					<div class="pp-b17__block">
						<?php 
						$index = 0;
							foreach($bl17['items'] as $el) :?>
								<div class="pp-b17__text7">
									<?php echo $el['title'];?>
								</div>
								<div class="pp-b17__text4">
									<?php echo $el['text'];?>
								</div>
								<?php if(count($bl17['items']) > $index + 1) :?>
									<hr class="pp-b17__hr">
								<?php endif; $index++;?>

						<?php endforeach;?>
					</div>
					<div class="row">
						<div class="col-12 col-l-6 pp-b17__el">
							<img src="<?php echo $bl17['image_1']['url']?>" alt="image" class="pp-b17__img">
							<div class="pp-b17__text5">
								<?php echo $bl17['caption_1']?>
							</div>
							<div class="pp-b17__text6">
								<?php echo $bl17['text_1']?>
							</div>
						</div>
						<div class="col-12 col-l-6">
							<img src="<?php echo $bl17['image_2']['url']?>" alt="image" class="pp-b17__img">
							<div class="pp-b17__text5">
								<?php echo $bl17['caption_2']?>
							</div>
							<div class="pp-b15__text6">
								<?php echo $bl17['text_2']?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b18">
		<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => $bl18['title'],
		));
		?>
		<div class="container">
			<div class="row">
				<?php
				$index = 0;
				$num = 3;
				// var_dump($bl18['items']);
				foreach ($bl18['items'] as $element) : ?>
					<div class="col-12 col-l-4">
						<div class="pp-b18__block">
							<div class="pp-b18__sub">
								<?php echo $element['title']; ?>
							</div>
							<div class="pp-b18__text">
								<?php echo $element['text']; ?>
							</div>
							<hr class="pp-b18__hr <?php
																		if ($index > count($bl18['items']) - 1 - $num) {
																			echo 'pp-b18__hr2';
																		}
																		if ($index == count($bl18['items']) - 1) {
																			echo ' pp-b18__hr3';
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
  <section class="pp-b19">
		<?php get_template_part('template-parts/h2-block', '', array(
			'h2' => $bl19['title'],
		));
		?>
		<div class="container">
			<div class="pp-b19__block">
				<div class="pp-b19__img-list">
					<div class="swiper pp-b19__slider">
						<div class="swiper-wrapper">
							<?php $index = 1;?>
							<?php foreach($bl19['color_items'] as $el):?>
								<div class="swiper-slide">
									<img src="<?php echo $el['image']['url']?>" alt="img" class="pp-b19__img <?php if($index == 1){echo ' active';}?>">
								</div>
								<?php $index++;?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<div class="pp-b19__title">
					<?php echo $bl19['name'];?>
				</div>
				<div class="pp-b19__text"><?php echo $bl19['text'];?></div>
				<div class="pp-b19__color-list-bl">
					<div class="pp-b19__color-name">
						
					</div>
					<div class="swiper pp-b19__color-list">
						<div class="swiper-wrapper">
							<?php $index = 1;?>
							<?php foreach($bl19['color_items'] as $el):?>
								<!-- <div class="swiper-slide"> -->
									<div class="swiper-slide pp-b19__color <?php if($index == 1){echo ' active';}?>" 
											 style="border-color: <?php echo $el['color'];?>"
											 data-color-name="<?php echo $el['color_name'];?>">
											 <div class="pp-b19__color-help"
														 style="background-color: <?php echo $el['color'];?>; "
											 >
			
											 </div>
									<!-- </div> -->
								</div>
								<?php $index++;?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pp-b20">
		<?php get_template_part('template-parts/h2-block', '', array(
			'h2' => $bl20['title'],
		));
		?>
		<div class="container">
			<div class="pp-b20__bl2">
				<?php $index = 0;?>
				<?php foreach($bl20['items'] as $el):?>
					<div class="pp-b20__line">
						<div class="pp-b20__text1">
							<?php echo $el['text_1'];?>
						</div>
						<div class="pp-b20__text2"><?php echo $el['text_2'];?></div>
					</div>
					<?php if(count($bl20['items']) !== $index + 1) :?>
						<hr class="pp-b20__hr">
					<?php endif; ?>
					<?php $index++;?>
				<?php endforeach;?>
			</div>
			<div class="pp-b20__add">
				<hr class="pp-b20__hr2">
				<div class="pp-b20__btn">
					<span class="pp-b20__add2">
						See all features
					</span>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="10" cy="10" r="9.5" stroke="#64A9C6"/>
						<path d="M10 7V13" stroke="#64A9C6" stroke-linecap="round"/>
						<path d="M7 10L13 10" stroke="#64A9C6" stroke-linecap="round"/>
					</svg>
				</div>
				<hr class="pp-b20__hr2">
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