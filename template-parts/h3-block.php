<div class="h3-block">
  <div class="container">
    <?php if(args['h3']) :?>
    <div class="h3-block__block">
      <h3 class="h3-block__h3  <?php echo $h2Class?>">
        <?php echo $args['h3']?>
      </h3>
    </div> 
    <?php endif; ?>
    <hr class="h3-block__hr <?php echo $lineClass?>">
  </div>
</div>