<div class="home-main">
  <div class="container">
    <h1 class="home-main__title">
      <?php $title = get_field('home-setting-title', 'option'); 
      if($title) :?>
        <span class="home-main__color"><?php echo $title['title-color-part']?></span>
        <span class="home-main__text"><?php echo $title['title-second-part']?></span>
      <?php endif;?>
    </h1>
    <hr class="home-main__hr">
    <a href="<?php echo esc_url(get_field('home-setting-product-link', 'option'))?>" class="home-main__link link link-primary">
      <?php the_field('home-setting-product-link-text', 'option')?>
    </a>
  </div>
</div>