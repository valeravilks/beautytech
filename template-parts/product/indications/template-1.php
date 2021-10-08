<div class="product-indications">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>

  <div class="product-indications__container">
    <div class="product-indications__row">
      <?php 
        foreach($args['items'] as $item):?>
          <div class="product-indications__col">
            <div class="product-indications__item">
              <div class="product-indications__text">
                <?php echo $item['item']; ?>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
    </div>
  </div>
</div>  




