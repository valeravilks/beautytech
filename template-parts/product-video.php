<div class="product-video">
  <?php get_template_part('template-parts/h2-block', '', array(
          'h2' => get_field('product-video-title'),
        ));
  ?>

  <div class="product-video__container">
    <div class="video">
        <a class="video__link" data-id="<?php the_field('product-video-url')?>" href="https://youtu.be/<?php the_field('product-video-url')?>">
          <div class="video__overlay"></div>
            <picture>
                <source srcset="<?php echo get_field('product-video-url-pr')['url']?>" type="image/webp">
                <img class="video__media" src="<?php echo get_field('product-video-url-pr')['url']?>" alt="Product video">
            </picture>
        </a>
        <button class="video__button" aria-label="Play video">
            <svg  width="70" height="70" viewBox="0 0 70 70" fill="none">
              <rect class="video__button-shape" x="1" y="1" width="68" height="68" stroke="#FEFEFE" stroke-width="2"/>
              <path class="video__button-tri" d="M44 35.5L31.25 42.8612L31.25 28.1388L44 35.5Z" fill="#FEFEFE"/>
            </svg>

        </button>
    </div>
  </div>
</div>