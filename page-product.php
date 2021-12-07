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
		<?php if($bl1)?>
		<section class="pp-b1">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-l-5 col-l-6">
						<img src="<?php echo $bl1['logo']['url'];?>" class="pp-b1-1">
					</div>
				</div>
				<div class="pp-b1-2">
					<div class="row pp-b1-9">
						<div class="col-12 offset-l-6 col-l-6 pp-b1-7">
							<div class="pp-b1-3">
								<?php echo $bl1['title'];?>
							</div>
							<div class="pp-b1-4">
								<?php echo $bl1['text'];?>
							</div>
							<a href="#" class="pp-b1-5 js-consultation">
								<?php echo $bl1['button'];?>
							</a>
							<img src="<?php echo $bl1['image']['url']?>" alt="img" class="pp-b1-6">
							<div class="pp-b1-8">
								<?php echo $bl1['name'];?>
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
							<?php echo $bl2['name'];?>
						</div>
						<img src="<?php echo $bl2['image']['url'];?>" class="pp-b2-2">
					</div>
					<div class="col-12 col-l-6">
						<div class="pp-b2-3">
							<?php echo $bl2['title'];?>
						</div>
						<div class="pp-b2-4">
							<?php echo $bl2['text'];?>
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