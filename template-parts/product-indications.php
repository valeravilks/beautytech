<div class="product-indications">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => get_field('product-content-indications-title'),
      ));
  ?>

  <?php 
  $templateName = get_field('product-content-indication-content-list'); // Indication 1 | Indication 2 | Treatment-zones
  ?>

  <div class="product-indications__container">
    <div class="product-indications__row">
      <?php if(have_rows('product-content-indication-template-1')) : 
          while(have_rows('product-content-indication-template-1')) : the_row(); ?>
            <div class="product-indications__col">
              <div class="product-indications__item">
                <div class="product-indications__text">
                  <?php the_sub_field('product-content-indications-1-items'); ?>1
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
    </div>
  </div>
</div>  
