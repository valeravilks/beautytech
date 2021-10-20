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
    <div class="container produc__mb">
      <div class="row">
        <?php
        $args = array(  
          'post_type' => 'products',
          'post_status' => 'publish',
          'posts_per_page' => 50, 
          'orderby' => 'title',
          'order' => 'ASC', 
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
		
    <?php
    $categories = get_categories( [
      'taxonomy'     => 'product-categories',
      'type'         => 'products',
      'child_of'     => 0,
      'parent'       => '',
      'orderby'      => 'name',
      'order'        => 'ASC',
      'hide_empty'   => 0,
      'hierarchical' => 1,
      'exclude'      => '',
      'include'      => '',
      'number'       => 0,
      'pad_counts'   => false,
    ] );

    
      if( $categories ) :
      //  echo $categories[0]->cat_name;
      //  echo get_category_link($categories[0]->cat_ID);
      //  echo $categories[count($categories)-1]->cat_name;
      //  echo get_category_link($categories[count($categories)-1]->cat_ID);
       
       ?>
      <div class="cat-btn">
        <div class="container">
            <div class="cat-btn__box">
              <div class="cat-btn__prev">
                <a href="<?php echo get_category_link($categories[count($categories)-1]->cat_ID)?>" class="cat-btn__link">
                  < <?php echo $categories[count($categories)-1]->cat_name;?>
                </a>
              </div>
              <div class="cat-btn__next">
                <a href="<?php echo get_category_link($categories[0]->cat_ID)?>" class="cat-btn__link">
                  <?php echo $categories[0]->cat_name;?> >
                </a>
              </div>
            </div>
          </div>
         </div>
      </div>
       <?php
      endif; ?>
    



    <?php get_template_part('template-parts/company-list'); ?>
    <?php get_template_part('template-parts/contact-us-block'); ?>
	</main><!-- #main -->

<?php
get_footer();
