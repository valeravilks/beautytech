<div class="product-indications">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => get_field('product-content-indications-title'),
      ));
  ?>

  <div class="product-indications__container">
    <div class="product-indications__row">
      <?php if(have_rows('product-content-indications-items')) : 
          while(have_rows('product-content-indications-items')) : the_row(); ?>
            <div class="product-indications__col">
              <div class="product-indications__item">
                <div class="product-indications__text">
                  <?php the_sub_field('item'); ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
    </div>
  </div>
</div>  
