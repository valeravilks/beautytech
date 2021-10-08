<div class="product-result">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => get_field('product-content-result-title'),
      ));
  ?>

  <div class="product-result__container">
    <div class="product-result__block">
      <div class="product-result__nav">
        <div class="product-result__prev"><</div>
        <div class="product-result__next">></div>
      </div>
      <div class="product-result__slider swiper">
        <div class="swiper-wrapper">
            <?php if(have_rows('product-content-result-list')) : 
                while (have_rows('product-content-result-list')) : the_row();?>
                <div class="product-result__slide swiper-slide">
                  <div class="product-result__box">
                    <img src="<?php the_sub_field('before'); ?>" alt="" class="product-result__image">
                    <div class="product-result__fl">
                      <hr class="product-result__hr">
                      <div class="product-result__caption">Before</div>
                      <hr class="product-result__hr">
                    </div>
                  </div>
                  <div class="product-result__box">
                    <img src="<?php the_sub_field('after'); ?>" alt="" class="product-result__image">
                    <div class="product-result__fl">
                      <hr class="product-result__hr">
                      <div class="product-result__caption">After</div>
                      <hr class="product-result__hr">
                    </div>
                  </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>