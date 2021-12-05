<?php 

$categoryList = get_the_terms($post->ID, 'events-categories');
?>

<article class="event-card-1 ">
  <div class="event-card-1__block">
    <img src="<?php echo get_field('e-image')['sizes']['event-thumbnail']; ?>" alt="event" class="event-card-1__img">
    <div class="event-card-1__date">
      <?php $dateString = get_field('e-date');
      $date = explode(';', $dateString);
      ?>
      <div class="event-card-1__num">
        <?php echo $date[0]; ?>
      </div>
      <div class="event-card-1__mounth">
        <?php echo $date[1]; ?>
      </div>
    </div>
  </div>
  <div class="event-card-1__title">
    <?php the_title();?>
  </div>
  <hr class="event-card-1__hr">
  <div class="event-card-1__block3">
    <div class="event-card-1__block2">
      <div class="event-card-1__place">
        <?php the_field('e-location');?>
      </div>
      <div class="event-card-1__time">
        <?php the_field('e-time');?>
      </div>
    </div>
    <a href="<?php the_permalink(); ?>" class="event-card-1__link">
      <div class="event-card-1__content">
        +
      </div>
    </a>
  </div>
</article>