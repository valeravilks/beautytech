<?php $categoryList = get_the_terms($post->ID, 'category'); ?>

<a href="<?php the_permalink(); ?>" class="news-1" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
  <div class="news-1__overlay">
    <div class="news-1__tags">
      <?php if($categoryList) :
        foreach($categoryList as $category) :?> 
          <div class="news-1__tag">
            <?php echo $category->name; ?>
          </div>
        <?php endforeach; 
      endif; ?>
    </div>
    <div class="news-1__date">
      <?php echo get_the_date(); ?>
    </div>
    <div class="news-1__title">
      <?php the_title(); ?>
    </div>
  </div>
</a>