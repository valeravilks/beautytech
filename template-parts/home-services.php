<div class="home-s">
  <?php get_template_part('template-parts/h2-block', '', array(
        'description' => get_field('home-setting-services-subtitle', 'option'),
        'h2' => get_field('home-setting-services-title', 'option'),
        'color' => 'white',
        // 'link' => 'https://link',
      ));
  ?>
  <div class="container">
    <div class="row">
      <div class="col-12 col-l-6">
        <div class="home-s__block home-s__mob">
          <div class="home-s__block-2">
            <div class="home-s__title">
              <?php the_field('home-setting-services-block-1-title', 'option'); ?>
            </div>
            <a href="<?php the_field('home-setting-services-block-1-link', 'option'); ?>" class="home-s__link">
              <svg class="home-s__link-svg" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 45L45 1M45 1H1M45 1V45" stroke="#FEFEFE" stroke-width="2"/>
              </svg>
            </a>
          </div>
          <div class="home-s__text">
            <?php the_field('home-setting-services-block-1-text', 'option'); ?>
          </div>
          <a href="<?php the_field('home-setting-services-block-1-link', 'option'); ?>" class="home-s__link link link-plus">
            Learn more
          </a>
        </div>
      </div>
      <div class="col-12 col-l-6">
        <div class="home-s__block">
          <div class="home-s__block-2">
            <div class="home-s__title">
              <?php the_field('home-setting-services-block-2-title', 'option'); ?>
            </div>
            <a href="<?php the_field('home-setting-services-block-2-link', 'option'); ?>" class="home-s__link">
              <svg class="home-s__link-svg" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 45L45 1M45 1H1M45 1V45" stroke="#FEFEFE" stroke-width="2"/>
              </svg>
            </a>
          </div>
          <div class="home-s__text">
            <?php the_field('home-setting-services-block-2-text', 'option'); ?>
          </div>
          <a href="<?php the_field('home-setting-services-block-2-link', 'option'); ?>" class="home-s__link link link-plus">
            Learn more
          </a>
        </div>
      </div>
    </div>
  </div>
</div>