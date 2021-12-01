<div class="h2-block">
  <div class="container">
    <?php if(args['h2']) :?>
    <div class="h2-block__block">
      <h2 class="h2-block__h2  <?php echo $h2Class?>">
        <?php echo $args['h2']?>
      </h2>
    </div> 
    <?php endif; ?>
    <hr class="h2-block__hr <?php echo $lineClass?>">
  </div>
</div>