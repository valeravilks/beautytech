<?php $categoryList = get_the_terms($post->ID, 'category'); ?>

<div class="post-card">
  <div class="post-card__title">
    <?php the_title(); ?>
  </div>
  <div class="post-card__text">
    <?php echo mb_substr(get_the_content(), 0 , 100) . '...'?>
  </div>
  <hr class="post-card__hr">
  <div class="post-card__tags">
    <?php if($categoryList) :
      foreach($categoryList as $category) :?> 
      <div class="post-card__tag">
        <?php echo $category->name; ?>
      </div>
      <?php endforeach; 
    endif; ?>
  </div>
  <?php the_post_thumbnail('event-thumbnail', ['class' => 'post-card__img']); ?>
  <div class="post-card__footer">
    <div class="post-card__date">
      <?php echo get_the_date(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="post-card__link link link-plus">Read more</a>
  </div>
</div>