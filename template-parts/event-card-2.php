<?php 
$categoryList = get_the_terms($post->ID, 'events-categories');
?>

<a href="<?php the_permalink(); ?>" class="event-card-2 ">
  <div class="row">
    <div class="col-12 col-l-6">
    <div class="event-card-2__header">
    <?php if($categoryList) :
      foreach($categoryList as $category) :?> 
      <div class="event-card-2__tag">
        <?php echo $category->name; ?>
      </div>
      <?php endforeach; 
    endif; ?>
      </div>
      <div class="event-card-2__title">
        <?php the_title(); ?>
      </div>
      <hr class="event-card-2__hr1">
      <div class="event-card-2__block">
        <div class="event-card-2__text-1">
          Date:
        </div>
        <div class="event-card-2__text-2">
          <?php the_field('e-date')?>
        </div>
      </div>
      <hr class="event-card-2__hr">
      <div class="event-card-2__block">
        <div class="event-card-2__text-1">
          Location:
        </div>
        <div class="event-card-2__text-2">
          <?php the_field('e-location')?>
        </div>
      </div>
      <hr class="event-card-2__hr">
      <div class="event-card-2__block">
        <div class="event-card-2__text-1">
          Stand:
        </div>
        <div class="event-card-2__text-2">
          <?php the_field('e-stand')?>
        </div>
      </div>
    </div>
    <div class="col-12 col-l-6">
      <img class="event-card-2__img" src="<?php echo get_field('e-image')['url']?>" alt="" class="event-card-2__img">
    </div>
  </div>
</a>