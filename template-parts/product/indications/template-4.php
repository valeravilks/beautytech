<div class="product-indications">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>

  <div class="product-indications__container">
    <div class="product-indications__row">
        <div class="product-indications__col-3">
          <div class="product-indications__text-2">
            <?php echo $args['text'];?>
          </div>
        </div>
        <div class="product-indications__col-3">
          <div class="product-indications__row">
          <?php 
          foreach($args['items'] as $item):?>
            <div class="product-indications__col-3-2">
              <div class="product-indications__item-3">
                <img src="<?php echo $item['image'];?>" alt="image" class="product-indications__image-3">
                <div class="product-indications__text-3">
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
  </div>
  <div class="product-indications__bottom-bl">
    <div class="product-indications__container">
      <div class="product-indications__row">
        <div class="product-indications__col-3">
          <div class="product-indications__text-4-2">
            <?php echo $args['text-2']?>
          </div>
        </div>
        <div class="product-indications__col-3">
          <hr class="product-indications__hr-4">
        <?php 
          foreach($args['items'] as $item):?>
                <div class="product-indications__text-4-3">
                  <?php echo $item['text']; ?>
                </div>
                <hr class="product-indications__hr-4">
          <?php
          endforeach;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>  