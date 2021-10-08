<div class="product-spec">
  <?php get_template_part('template-parts/h2-block', '', array(
          'h2' => get_field('product-content-spec-title'),
        ));
  ?>

  <div class="product-spec__container">
    <div class="product-spec__row">
      <div class="product-spec__col">
        <?php if(have_rows('product-content-spec-left-column')) : 
          while(have_rows('product-content-spec-left-column')) : the_row(); ?>
          <div class="product-spec__block">
            <div class="product-spec__head">
              <?php the_sub_field('title'); ?>
            </div>
            <?php if(have_rows('items')) :
              while(have_rows('items')) : the_row(); ?>
              <div class="product-spec__line">
                <div class="product-spec__name">
                  <?php the_sub_field('name');?>
                </div>
                <div class="product-spec__value">
                  <?php the_sub_field('value');?>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="product-spec__col">
        <?php if(have_rows('product-content-spec-right-column')) : 
          while(have_rows('product-content-spec-right-column')) : the_row(); ?>
          <div class="product-spec__block">
            <div class="product-spec__head">
              <?php the_sub_field('title'); ?>
            </div>
            <?php if(have_rows('items')) :
              while(have_rows('items')) : the_row(); ?>
              <div class="product-spec__line">
                <div class="product-spec__name">
                  <?php the_sub_field('name');?>
                </div>
                <div class="product-spec__value">
                  <?php the_sub_field('value');?>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>