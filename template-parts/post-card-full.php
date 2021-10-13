<?php 
$categoryList = get_the_terms($post->ID, 'category');
?>

<div class="post-card-full">
  <div class="row">
    <div class="col-12 col-l-6">
      <?php the_post_thumbnail('full') ;?>
    </div>
    <div class="col-12 col-l-6">
      <div class="post-card-full__head">
        <div class="post-card-full__tags">
          <?php if($categoryList) :
            foreach($categoryList as $category) :?> 
            <div class="post-card-full__tag">
              <?php echo $category->name; ?>
            </div>
            <?php endforeach; 
          endif; ?>
        </div>
        <div class="post-card-full__date">
          <?php echo get_the_date();?>
        </div>
      </div>
      <div class="post-card-full__title">
        <?php echo get_the_title();?>
      </div>
      <div class="post-card-full__text">
        <?php the_content('Read More'); ?>
      </div>
    </div>
  </div>
</div>