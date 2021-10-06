<div class="swiper home-slider">
			<div class="home-slider__nav-button">
				<div class="container">
					<div class="home-slider__prev">
						<img class="home-slider__prev-90" src="<?php echo get_template_directory_uri();?>/img/svg/icon-arrow-slider.svg" alt="">
					</div>
					<div class="home-slider__next">
						<img src="<?php echo get_template_directory_uri();?>/img/svg/icon-arrow-slider.svg" alt="">
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
      <?php if(have_rows('home-setting-slide-list', 'option')) : 
            while (have_rows('home-setting-slide-list', 'option')) : the_row();?>  
				<div class="home-slider__slide swiper-slide" style="background-image: url('<?php the_sub_field('image');?>')">
					<div class="home-slider__gradient">
						<div class="container home-slider__container">
							<div class="row g-0">
								<div class="col-12 col-l-6 home-slider__btn">
									<a href="<?php echo esc_url(get_sub_field('link')); ?>" class="home-slider__link link link-outline link-fill">
										Learn more
									</a>	
								</div>
								<div class="col-12 col-l-6 home-slider__t-o">
									<div class="home-slider__header">
                   <?php the_sub_field('title')?>
                   
									</div>
									<div class="home-slider__text">
                  <?php the_sub_field('description')?>
									</div>
								</div>
							</div>
						</div>
						<div class="home-slider__element sl__element">
              <hr class="sl__hr-1">
              <hr class="sl__hr-2">
            </div>
            <div class="home-slider__element sl__element-2">
              <div class="sl__container container">
                <div class="sl__row row">
                  <div class="col-3">
                    <div class="sl__dot sl__dot-none"></div>	
                  </div>
                  <div class="col-3">
                    <div class="sl__dot sl__dot-none"></div>	
                  </div>
                  <div class="col-3">
                    <div class="sl__dot"></div>	
                  </div>
                  <div class="col-3">
                    <div class="sl__dot"></div>	
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>
        <?php endwhile; endif; ?>
			</div>
		</div>