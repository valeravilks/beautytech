<?php $categoryList = get_the_terms($post->ID, 'category'); ?>

<a href="<?php the_permalink(); ?>" class="news-2 <?php echo $args['class']?>">
  <hr class="news-2__hr">
  <div class="news-2__block">
    <div class="news-2__tags">
      <?php if($categoryList) :
        foreach($categoryList as $category) :?> 
          <div class="news-2__tag">
            <?php echo $category->name; ?>
          </div>
        <?php endforeach; 
      endif; ?>
    </div>
    <div class="news-2__date">
      <?php echo get_the_date(); ?>
    </div>
  </div>
  <div class="news-2__title">
    <?php the_title(); ?>
  </div>
  <div class="news-2__overlay">
    <?php the_post_thumbnail('event-thumbnail', ['class' => 'news-2__img']); ?>
  </div>
</a>