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

	<main id="primary" class="site-main produc">
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php get_template_part('template-parts/page-title', '', array('title' => 'Products')); ?>
    <?php get_template_part('template-parts/cat-menu', '', array(
      'taxonomy' => 'product-categories',
      'type' => 'products',
      'active' => 'all'
      )); ?>
    <div class="container">
      <div class="row">
        <?php
        $args = array(  
          'post_type' => 'products',
          'post_status' => 'publish',
          'posts_per_page' => 50, 
          'orderby' => 'title',
          'order' => 'ASC', 
          'product-categories'  => get_queried_object()->slug
        );

        $loop = new WP_Query( $args ); 
          
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-12 col-l-6">
            <?php get_template_part('template-parts/product', 'card-1', array('postData' => $productPostData));?>
          </div>
        <?php endwhile;

          wp_reset_postdata(); 
        ?>

      </div>
		</div>
		
    <?php get_template_part('template-parts/company-list'); ?>
    <?php get_template_part('template-parts/contact-us-block'); ?>
	</main><!-- #main -->

<?php
get_footer();
