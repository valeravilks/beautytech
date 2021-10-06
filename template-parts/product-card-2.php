<?php 
$postData = $args['postData'];
$postId = $postData->ID;

$title = get_field('products-text-for-card-title', $postId);
$description = get_field('products-text-for-card-description', $postId);
$logoUrl = get_field('products-logo-card', $postId);
$linkPost = get_the_permalink($postId);
?>



<div class="home-pr-2">
  <div class="home-pr-2__row row g-0">
    <div class="col-12 col-l-9">
      <div class="home-pr-2__right">
        <div class="home-pr-2__title">
          <?php echo $title; ?>
        </div>
        <img src="<?php echo $logoUrl?>" alt="" class="home-pr-2__logo"> 
        <img src="<?php echo $args['image']; ?>" 
             alt="product image" 
             class="home-pr-2__img"
             style="bottom:<?php echo $args['positiony'];?>px; left:<?php echo $args['positionx'];?>px; width: <?php echo $args['scale']; ?>px;"
        >  
        <hr class="home-pr-2__hr">
        <div class="home-pr-2__text">
          <?php echo $args['additional-text']; ?>
        </div>
        <div class="home-pr-2__desc">
          <?php echo $description; ?>
        </div>
        <div class="home-pr-2__blink">
          <a href="<?php echo $linkPost;?>" class="home-pr-2__link link link-plus-2">
            Explore about product
          </a> 
        </div>  
      </div>
    </div>
    <div class="col-12 col-l-3">
      <div class="home-pr-2__left">
        <?php echo $args['text-1']?>
      </div>
      <div class="home-pr-2__left">
        <?php echo $args['text-2']?>
      </div>
      <div class="home-pr-2__left">
        <?php echo $args['text-3']?>
      </div>
      <div class="home-pr-2__left">
        <?php echo $args['text-4']?>
      </div>
    </div>
  </div>
</div>