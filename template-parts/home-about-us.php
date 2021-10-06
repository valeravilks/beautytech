<?php 

get_template_part('template-parts/h2-block', '', array(
			'description' => get_field('home-setting-about-subtitle', 'option'),
			'h2' => get_field('home-setting-about-title', 'option'),
			// 'color' => 'white',
			'link' => get_field('home-setting-about-link', 'option'),
		));
?>
<div class="home-about-us">
  <div class="container">
    <div class="row home-about-us__block-1">
      <div class="col-12 col-l-6 home-about-us__text">
        <?php the_field('home-setting-about-link-text-1', 'option')?>
      </div>
      <div class="col-12 col-l-6 home-about-us__text">
        <?php the_field('home-setting-about-link-text-2', 'option')?>
      </div>
    </div>
    <div class="row home-about-us__block-2">
      <div class="col-12 col-l-6 home-about-us__text-2">
        <?php the_field('home-setting-about-link-text-3', 'option')?>
      </div>
    </div>
    <div class="row home-about-us__block-3">
      <div class="col-12 col-l-6">
        <img class="home-about-us__img" src="<?php echo esc_url(get_field('home-setting-about-image', 'option'))?>" alt="image">
      </div>
      <?php $texts = get_field('home-setting-about-info', 'option'); 
        if($texts) :?>
        <div class="col-12 col-l-6 home-about-us__block-5">
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo $texts['subtitle-1']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo $texts['text-1']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo $texts['subtitle-2']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo $texts['text-2']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo $texts['subtitle-3']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo $texts['text-3']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo $texts['subtitle-4']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo $texts['text-4']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
        </div>
        <?php endif;?>
    </div>
    <div class="home-about-us__block-6">
      <a href="#" class="home-about-us__link link link-plus">Learn more</a>
    </div>
  </div>
</div>
