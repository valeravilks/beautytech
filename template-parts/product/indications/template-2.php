<div class="product-indications">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>

  <div class="product-indications__container">
    <div class="product-indications__row">
      <?php 
        foreach($args['items'] as $item):?>
          <div class="product-indications__col-2">
            <div class="product-indications__item-2">
              <div class="product-indications__title-2">
                <?php echo $item['title']; ?>
              </div>
              <hr class="product-indications__hr-2">
              <div class="product-indications__text-2">
                <?php echo $item['text']; ?>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
    </div>
  </div>
</div>  