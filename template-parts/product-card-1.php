<?php 

$postData = $args['postData'];
$postId = $postData->ID;

$title = get_field('products-text-for-card-title', $postId);
$logoUrl = get_field('products-logo-card', $postId);
$description = get_field('products-text-for-card-description', $postId);
$imageUrl = get_field('products-image-product-card', $postId);
$linkPost = get_the_permalink($postId);

$widthImage = get_field('products-image-scale', $postId) . 'px';
$positionY = get_field('products-image-position-y', $postId) . 'px';
$positionX = get_field('products-image-position-x', $postId) . 'px';
?>

<div class="home-pr-1">
  <div class="home-pr-1__block">
    <div class="home-pr-1__title">
      <?php echo $title?>
    </div>
    <img src="<?php echo $logoUrl?>" alt="logo product" class="home-pr-1__logo">
  </div>
  <img src="<?php echo $imageUrl?>" 
       alt="image product" 
       class="home-pr-1__img"
       style="width: <?php echo $widthImage; ?>; right: <?php echo $positionX; ?>; bottom: <?php echo $positionY; ?>;"
    >
  <hr class="home-pr-1__hr">
  <div class="home-pr-1__text">
    <?php echo $description; ?>
  </div>
  <a href="<?php echo $linkPost?>" class="home-pr-1__link link link-plus-2">Explore about product</a>
</div>