<?php 
if($args['color'] == 'white'){
  $descClass = 'h2-block__description-white';
  $h2Class = 'h2-block__h2-white';
  $lineClass = 'white';
  $cyrcleClass = 'white';
}

$linkText = 'learn more';

if($args['linkText']) {
  $linkText = $args['linkText'];
}
?>

<div class="h2-block">
  <div class="container">
    <?php if($args['description']) :?>
    <div class="h2-block__description <?php echo $descClass?>">
      <?php echo $args['description']?>
    </div>  
    <?php endif; ?>
    <?php if(args['h2']) :?>
    <div class="h2-block__block">
      <h2 class="h2-block__h2  <?php echo $h2Class?>">
        <?php echo $args['h2']?>
      </h2>
      <?php if($args['link']) :?>
        <a href="<?php echo $args['link']?>" class="h2-block__link link link-plus"><?php echo $linkText; ?></a>
      <?php endif; ?>
    </div> 
    <?php endif; ?>
    <hr class="h2-block__hr <?php echo $lineClass?>">
  </div>
</div>