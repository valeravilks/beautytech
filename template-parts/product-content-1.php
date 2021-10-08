<div class="product-content-1">
  <div class="product-content-1__container">
    <div class="product-content-1__row">
      <div class="product-content-1__col">
        <div class="product-content-1__title">
          <?php the_field('products-content-1-left-block-title')?>
        </div>
        <hr class="product-content-1__line product-content-1__line-full">
        <ul class="product-content-1__list">
          <?php 
            if(have_rows('products-content-1-left-block')) :
              while(have_rows('products-content-1-left-block')): the_row();?>
                <li class="product-content-1__item"><?php the_sub_field('item'); ?></li>
            <?php endwhile; endif; ?>
        </ul>
      </div>
      <div class="product-content-1__col">
        <div class="product-content-1__title">
          <?php the_field('products-content-1-right-block-title')?>
        </div>
        <hr class="product-content-1__line">
        <ul class="product-content-1__list">
          <?php 
            if(have_rows('products-content-1-right-block')) :
              while(have_rows('products-content-1-right-block')): the_row();?>
                <li class="product-content-1__item"><?php the_sub_field('item'); ?></li>
            <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>