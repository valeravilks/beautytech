<div class="home-pr">
  <div class="container">
    <div class="row">
      <div class="col-12 col-l-6">
        <div class="home-pr">
          <div class="home-pr__description">
            <?php the_field('home-setting-products-subtitle', 'option')?>
          </div>  
          <h2 class="home-pr__h2">
            <?php the_field('home-setting-products-title', 'option')?>
          </h2>
          <hr class="home-pr__hr">
          <a href="<?php the_field('home-setting-products-link', 'option');?>" class="home-pr__link link link-plus">
            <?php the_field('home-setting-products-link-text', 'option');?>
          </a>
        </div>
      </div>
      <?php
      // Check value exists.
      if( have_rows('home-setting-products-list', 'option') ):

          // Loop through rows.
          while ( have_rows('home-setting-products-list', 'option') ) : the_row();

              // Case: Paragraph layout.
              if( get_row_layout() == 'card' ): 
                $productPostData = get_sub_field('card');  ?>
                <div class="col-12 col-l-6">
                  <?php get_template_part('template-parts/product', 'card-1', array('postData' => $productPostData));?>
                </div>

              
              <?php elseif( get_row_layout() == 'full-card' ): 
                $productPostData = get_sub_field('card');  ?>
                  <div class="col-12">
                    <?php get_template_part('template-parts/product', 'card-2', array(
                      'postData' => $productPostData,
                      'text-1' => get_sub_field('text-1'),
                      'text-2' => get_sub_field('text-2'),
                      'text-3' => get_sub_field('text-3'),
                      'text-4' => get_sub_field('text-4'),
                      'additional-text' => get_sub_field('additional-text'),
                      'image' => get_sub_field('image'),
                      'scale' => get_sub_field('scale'),
                      'positionx' => get_sub_field('positionx'),
                      'positiony' => get_sub_field('positiony'),
                      ));?>
                    
                  </div>
              <?php elseif( get_row_layout() == 'space' ): ?>
                <div class="col-12 space-product" style="height:<?php echo get_sub_field('space_height');?>px"></div>
              <?php elseif( get_row_layout() == 'link' ): ?>
                <div class="col-12">
                  <div class="home-pr__link-block">
                    <a href="<?php echo get_sub_field('link'); ?>" class="home-pr__link-block-2 link link-plus">
                      <?php echo get_sub_field('link-text'); ?>
                    </a>
                  </div>
                </div>
              <?php elseif( get_row_layout() == 'title-2' ): ?>
                <div class="col-12 col-l-6">
                  <div class="home-pr home-pr-right">
                    <div class="home-pr__description">
                      <?php echo get_sub_field('subtitle'); ?>
                    </div>  
                    <h2 class="home-pr__h2">
                      <?php echo get_sub_field('title'); ?>
                    </h2>
                    <hr class="home-pr__hr">
                    <a href="<?php echo get_sub_field('link'); ?>" class="home-pr__link link link-plus">
                      <?php echo get_sub_field('link-text'); ?>
                    </a>
                  </div>
                </div>
              <?php endif;

          // End loop.
          endwhile;

      // No value.
      else :
          // Do something...
      endif;    
      ?>
    </div>
  </div>
</div>