<div class="product-video">
  <?php get_template_part('template-parts/h2-block', '', array(
          'h2' => get_field('product-video-title'),
        ));
  ?>

  <div class="product-video__container">
    <video class="product-video__video" controls width="100%">
      <source src="<?php the_field('product-video-url'); ?>"
              type="video/mp4">
      Sorry, your browser doesn't support embedded videos.
    </video>
  </div>
</div>