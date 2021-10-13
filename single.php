<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BeautyTech
 */

get_header();

?>
<?php $categoryList = get_the_terms($post->ID, 'category'); ?>
	<main id="primary" class="site-main single-post">
			
			<?php get_template_part('template-parts/breadcrumbs'); ?>
			<?php get_template_part('template-parts/page-title', '', array('title' => 'Blog')); ?>
			<?php get_template_part('template-parts/cat-menu', '', array(
      'taxonomy' => 'category',
      'type' => 'post',
      'active' => 'all'
      )); ?>

			<div class="container">
				<div class="single-post__box">
					<div class="single-post__title">
						<?php the_title();?>
					</div>
					<hr class="single-post__hr">
					<div class="single-post__meta">
						<div class="single-post__tags">
							<?php if($categoryList) :
								foreach($categoryList as $category) :?> 
								<div class="single-post__tag">
									<?php echo $category->name; ?>
								</div>
								<?php endforeach; 
							endif; ?>
						</div>
						<div class="single-post__date">
							<?php echo get_the_date(); ?>
						</div>
					</div>
					<?php the_post_thumbnail('full', ['class' => 'single-post__img'])?>
					<div class="single-post__content single-content">
						<?php the_content(); ?>
					</div>
					<div class="single-post__title">
						Latest news
					</div>
					<hr class="single-post__hr2">
					<div class="single-post__last">
						<div class="row">
							<?php 
							$posts = get_posts( array(
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
							
							foreach( $posts as $post ) :
								setup_postdata($post);?>
									<div class="col-12 col-l-4 single-post__col">

										<?php get_template_part('template-parts/post', 'card'); ?>
									</div>
							

								<?php 
								endforeach;
								wp_reset_postdata(); // сброс
							?>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/contact-us-block'); ?>
			<?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->

<?php
get_footer();
