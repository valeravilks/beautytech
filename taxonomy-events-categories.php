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
    <?php get_template_part('template-parts/page-title', '', array('title' => 'Events')); ?>
    <?php get_template_part('template-parts/cat-menu', '', array(
      'taxonomy' => 'events-categories',
      'type' => 'events',
      'active' => 'cat'
      )); ?>
    <div class="container">
      <div class="row">
        <?php
        $args = array(  
          'post_type' => 'events',
          'post_status' => 'publish',
          'posts_per_page' => 50, 
          'orderby' => 'title',
          'order' => 'ASC', 
          'events-categories'  => get_queried_object()->slug
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

      

    ?>

<?php

    $categories = get_categories( [
      'taxonomy'     => 'events-categories',
      'type'         => 'events',
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

    $currentTaxanomyId = get_queried_object()->term_taxonomy_id;
    $prevBtn;
    $nextBtn;
    ?>

  
      <div class="cat-btn">
        <div class="container">
            <div class="cat-btn__box">
            <?php 
            if( $categories ) :

              $index = 1;

              foreach( $categories as $cat ) : 
                if($currentTaxanomyId == $cat->term_taxonomy_id and $index == 1 ) :?>
                  <div class="cat-btn__prev">
                    <a href="<?php echo get_post_type_archive_link('products')?>" class="cat-btn__link">
                      < All
                    </a>
                  </div>
                  <div class="cat-btn__next">
                    <a href="<?php echo get_category_link($categories[$index]->cat_ID)?>" class="cat-btn__link">
                      <?php echo $categories[$index]->cat_name;?> >
                    </a>
                  </div>
                <?php elseif($currentTaxanomyId == $cat->term_taxonomy_id and $index == count($categories)) :?>
                  <div class="cat-btn__prev">
                    <a href="<?php echo get_category_link($categories[$index - 2]->cat_ID)?>" class="cat-btn__link">
                      < <?php echo $categories[$index - 2 ]->cat_name;?>
                    </a>
                  </div>
                  <div class="cat-btn__next">
                    <a href="<?php echo get_post_type_archive_link('products')?>" class="cat-btn__link">
                      All >
                    </a>
                  </div>
                <?php elseif($currentTaxanomyId == $cat->term_taxonomy_id) :?>
                  <div class="cat-btn__prev">
                    <a href="<?php echo get_category_link($categories[$index - 2]->cat_ID)?>" class="cat-btn__link">
                      < <?php echo $categories[$index - 2 ]->cat_name;?>
                    </a>
                  </div>
                  <div class="cat-btn__next">
                    <a href="<?php echo get_category_link($categories[$index]->cat_ID)?>" class="cat-btn__link">
                      <?php echo $categories[$index]->cat_name;?> >
                    </a>
                  </div>
                <?php endif; $selected = '';

                if(get_queried_object()->term_id == $cat->term_taxonomy_id) {
                  $selected = 'selected';
                }
              $index++;
              endforeach;
            endif; ?>

              <!-- <div class="cat-btn__prev">
                <a href="<?php echo get_category_link($categories[count($categories)-1]->cat_ID)?>" class="cat-btn__link">
                  < <?php echo $categories[count($categories)-1]->cat_name;?>
                </a>
              </div>
              <div class="cat-btn__next">
                <a href="<?php echo get_category_link($categories[0]->cat_ID)?>" class="cat-btn__link">
                  <?php echo $categories[0]->cat_name;?> >
                </a>
              </div> -->
            </div>
          </div>
         </div>
      </div>
       
    <?php get_template_part('template-parts/company-list'); ?>
    <?php get_template_part('template-parts/contact-us-block'); ?>
	</main><!-- #main -->

<?php
get_footer();
