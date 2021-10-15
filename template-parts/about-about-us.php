<?php 

get_template_part('template-parts/h2-block', '', array(
			'h2' => get_field('the_technologies_at_a_glance')['title'],
		));
?>
<div class="home-about-us">
  <div class="container">

    <div class="row home-about-us__block-2">
      <div class="col-12 col-l-6 home-about-us__text-2">
        <?php echo get_field('the_technologies_at_a_glance')['text']; ?>
      </div>
    </div>
    <div class="row home-about-us__block-3">
      <div class="col-12 col-l-6">
        <img class="home-about-us__img" src="<?php echo esc_url(get_field('the_technologies_at_a_glance')['image']['url'])?>" alt="image">
      </div>
      <?php $texts = get_field('home-setting-about-info', 'option'); 
        if($texts) :?>
        <div class="col-12 col-l-6 home-about-us__block-5">
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo get_field('the_technologies_at_a_glance')['items'][0]['name']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo get_field('the_technologies_at_a_glance')['items'][0]['value']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo get_field('the_technologies_at_a_glance')['items'][1]['name']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo get_field('the_technologies_at_a_glance')['items'][1]['value']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo get_field('the_technologies_at_a_glance')['items'][2]['name']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo get_field('the_technologies_at_a_glance')['items'][2]['value']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
          <div class="row home-about-us__block-4">
            <div class="col-12 col-l-6 home-about-us__text-3">
              <?php echo get_field('the_technologies_at_a_glance')['items'][3]['name']; ?>
            </div>
            <div class="col-12 col-l-6 home-about-us__text-4">
              <?php echo get_field('the_technologies_at_a_glance')['items'][3]['value']; ?>
            </div>
          </div>
          <hr class="home-about-us__hr">
        </div>
        <?php endif;?>
    </div>
  </div>
</div>
