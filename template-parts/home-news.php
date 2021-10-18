<?php get_template_part('template-parts/h2-block', '', array(
			'description' => get_field('hn_subtitle', 'option'),
			'h2' => get_field('hn_title', 'option'),
		));
?>
<?php get_template_part('template-parts/h3-block', '', array(
			'h3' => get_field('hn_title_2', 'option'),
      'link' => get_field('hn_link_1', 'option')['url'],
      'linkText' => get_field('hn_link_1', 'option')['title'],
		));
?>
<div class="home-news">
  <div class="container home-news__container">
    <div class="row">
      <?php 
      $posts = get_posts( array(
        'numberposts' => 3,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
      ) );
      $index = 1;
      foreach( $posts as $post ) :
        setup_postdata($post);
        $categoryList = get_the_terms($post->ID, 'category'); 
        
          if($index == 1) :?>
            <div class="col-12 col-l-8">
            <?php get_template_part('template-parts/news-1'); ?>
            </div>
          <?php endif; ?>

        <?php 
        $index++;
      endforeach;?>
      <div class="col-12 col-l-4 home-news__block-1">
      <?php $index = 1;
      foreach( $posts as $post ) :
        setup_postdata($post);
        $categoryList = get_the_terms($post->ID, 'category'); 
          if($index !== 1) :?>  
              <?php get_template_part('template-parts/news-2', '', array('class'=>'home-news__item')); ?>
          <?php endif; ?>
        <?php 
        $index++;
      endforeach;

      wp_reset_postdata(); ?>
      
      <div class="home-news__block-link">
        <a href="#" class="home-news__link link link-plus">Go to blog</a>
      </div>
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