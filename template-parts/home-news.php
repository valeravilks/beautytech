<?php get_template_part('template-parts/h2-block', '', array(
			'description' => 'Blog & events',
			'h2' => "what's new?",
			// 'color' => 'white',
			// 'link' => 'https://link',
		));
?>
<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => "News and articles",
      'link' => 'https://link',
      'linkText' => 'Go to blog',
		));
?>
<div class="home-news">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-8">
          <div class="news-1" style="background-image: url(https://beautytech.com/wp-content/uploads/2021/10/article-large.jpg)">
            <div class="news-1__overlay">
              <div class="news-1__tag">
                Skin treatments
              </div>
              <div class="news-1__date">
                Feb 03, 2020
              </div>
              <div class="news-1__title">
                Ultracel q+ system
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-4 home-news__block-1">
          <div class="news-2">
            <hr class="news-2__hr">
            <div class="news-2__block">
              <div class="news-2__tag">
                Skin treatments
              </div>
              <div class="news-2__date">
                Feb 03, 2020
              </div>
            </div>
            <div class="news-2__title">
              Purus senectus pharetra
            </div>
            <div class="news-2__overlay">
              <img class="news-2__img" src="https://beautytech.com/wp-content/uploads/2021/10/article.jpg" alt="">
            </div>
          </div>
          <div class="news-2">
            <hr class="news-2__hr">
            <div class="news-2__block">
              <div class="news-2__tag">
                Skin treatments
              </div>
              <div class="news-2__date">
                Feb 03, 2020
              </div>
            </div>
            <div class="news-2__title">
              Purus senectus pharetra
            </div>
            <div class="news-2__overlay">
              <img class="news-2__img" src="https://beautytech.com/wp-content/uploads/2021/10/article.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="home-news__block-link">
        <a href="#" class="home-news__link link link-plus">Go to blog</a>
      </div>
    </div>
</div>
<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => "Events",
      'link' => get_post_type_archive_link('events'),
      'linkText' => 'See all',
		));
?>
<div class="home-events">
  <div class="container">
    <div class="row">
        <?php
        $args = array(  
          'post_type' => 'events',
          'post_status' => 'publish',
          'posts_per_page' => 6, 
          'orderby' => 'title',
          'order' => 'ASC', 
          'product-categories'  => get_queried_object()->slug
        );

        $loop = new WP_Query( $args ); ?>
          

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-12 col-l-4 home-events__event">
              <?php get_template_part('template-parts/event', 'card-1');?>
            </div>
            <?php endwhile;

          wp_reset_postdata(); 
          ?>

      </div>
      <div class="home-events__block-link">
        <a href="<?php echo get_post_type_archive_link('events')?>" class="home-events__link link link-plus">See all</a>
      </div>
  </div>
</div>