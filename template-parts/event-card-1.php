<?php 

$categoryList = get_the_terms($post->ID, 'events-categories');
?>

<a href="<?php the_permalink(); ?>" class="event-card-1 ">
  <div class="event-card-1__header">
    <?php if($categoryList) :
      foreach($categoryList as $category) :?> 
      <div class="event-card-1__tag">
        <?php echo $category->name; ?>
      </div>
      <?php endforeach; 
    endif; ?>
  </div>
  <div class="event-card-1__title">
    <?php the_title(); ?>
  </div>
  <img class="event-card-1__img" src="<?php echo get_field('e-image')['sizes']['event-thumbnail']?>" alt="" class="event-card-1__img">
  <div class="event-card-1__block">
    <div class="event-card-1__text-1">
      Date:
    </div>
    <div class="event-card-1__text-2">
      <?php the_field('e-date')?>
    </div>
  </div>
  <hr class="event-card-1__hr">
  <div class="event-card-1__block">
    <div class="event-card-1__text-1">
      Location:
    </div>
    <div class="event-card-1__text-2">
      <?php the_field('e-location')?>
    </div>
  </div>
  <hr class="event-card-1__hr">
  <div class="event-card-1__block">
    <div class="event-card-1__text-1">
      Stand:
    </div>
    <div class="event-card-1__text-2">
      <?php the_field('e-stand')?>
    </div>
  </div>
</a>