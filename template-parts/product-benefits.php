<div class="product-benefits">
  <?php get_template_part('template-parts/h2-block', '', array(
          'h2' => get_field('product-content-benefits-title'),
        ));
  ?>

  <div class="product-benefits__container">
    <div class="product-benefits__row">
      <?php if(have_rows('product-content-benefits-items')) : 
          $order = 1;
          while(have_rows('product-content-benefits-items')) : the_row(); ?>
            <div class="product-benefits__col">
              <div class="product-benefits__item">
                <div class="product-benefits__circle">
                  <div class="product-benefits__number">
                    <?php the_sub_field('number'); ?>
                  </div>
                  <div class="product-benefits__order">
                    <?php echo $order; ?>
                  </div>
                </div>
                <div class="product-benefits__text">
                  <?php the_sub_field('text'); ?>
                </div>
              </div>
            </div>
          <?php 
        $order++;
        endwhile; endif; ?>
    </div>
  </div>
</div>