<div class="product-faq">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => get_field('product-faq-title'),
      ));
  ?>

  <div class="product-faq__container">
    <?php if(have_rows('product-faq-accord')) :
        while(have_rows('product-faq-accord')) : the_row(); ?>

    <div class="product-faq__block js-faq-quest">
      <div class="product-faq__question">
        <div class="product-faq__q-text">
          <?php the_sub_field('quest'); ?>
        </div>
        <div class="product-faq__plus js-faq-plus"></div>
      </div>
      <div class="product-faq__answer js-faq-ans">
        <?php the_sub_field('answer'); ?>
      </div>
    </div>

    <?php endwhile; endif; ?>
  </div>
</div>