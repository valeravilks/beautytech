<?php get_template_part('template-parts/h2-block', '', array(
			'h2' => get_field('home-setting-testimonials-title', 'option'),
		));
?>

<div class="home-rev">
  <div class="container">
    <div class="swiper home-rev__slider">
      <div class="swiper-wrapper">
        <?php if(have_rows('home-setting-testimonials-list', 'option')) :
            while(have_rows('home-setting-testimonials-list', 'option')) : the_row(); ?>
            <div class="swiper-slide">
              <div class="review-1">
                <div class="review-1__image">
                  <img src="<?php the_sub_field('image'); ?>" alt="review" class="review-1__img">
                </div>
                <div class="review-1__text">
                  <?php the_sub_field('text'); ?>
                </div>
                <div class="review-1__author">
                  <?php the_sub_field('author'); ?>
                </div>
              </div>
            </div>
        <?php endwhile; endif;?>
      </div>
      <div class="home-rev__nav">
        <div class="home-rev__prev">
          <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 1L2 7L8 13" stroke="#5E95BF" stroke-width="2"/>
          </svg>
        </div>
        <div class="home-rev__pagination"></div> 
        <div class="home-rev__next">
          <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 13L7 7L1 0.999999" stroke="#5E95BF" stroke-width="2"/>
          </svg>
				</div>
      </div>
    </div>
  </div>
</div>