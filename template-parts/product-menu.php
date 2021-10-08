<div class="product-menu">
  <div class="product-menu__container">
    <div class="product-menu__box">
      <ul class="product-menu__list">
        <?php 
        if(have_rows('products-menu')) :
          while(have_rows('products-menu')) : the_row() ?>
            <li class="product-menu__item">
              <a 
                href="<?php echo esc_url('#'.get_sub_field('link-name')); ?>" 
                class="product-menu__link" 
                data-link="<?php the_sub_field('text-header'); ?>">
                <?php the_sub_field('link-name'); ?>
              </a>
            </li>
            <?php endwhile;
          endif; ?>
      </ul>
    </div>
  </div>
</div>