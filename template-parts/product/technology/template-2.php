<?php 
$field = $args['data'];
?>

<div class="t-2">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="container">
    <div class="row alc">
      <div class="col-12 titl1">
        <div class="title">
          <?php echo $field['title']?>
        </div>
      </div>
      <div class="col-12 col-l-6">
        <img src="<?php echo $field['image']?>" alt="image" class="image">
      </div>
      <div class="col-12 col-l-6">
        <div class="title">
          <?php echo $field['title']?>
        </div>
        <hr class="hr">
        <div class="text">
          <?php echo $field['text']?>
        </div>
      </div>
    </div>
    <div class="swiper t-2-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="block">
            <div class="b-title">
              <?php echo $field['items']['title']?>
            </div>
            <div class="b-subtitle">
              <?php echo $field['items']['subtitle']?>
            </div>
            <hr>
            <div class="b2">
              <img src="<?php echo $field['items']['image']?>" alt="img" class="img-1">
            </div>
            <div class="bl">
              <div class="text-1">
                <?php echo $field['items']['title_2']?>
              </div>
              <div class="text-2">
                <?php echo $field['items']['text']?>
              </div>
            </div>
            <div class="title-3">
              <?php echo $field['items']['title_3']?>
            </div>
            <img src="<?php echo $field['items']['image_2']?>" alt="img" class="img-2">
            <img src="<?php echo $field['items']['image_3']?>" alt="img" class="img-2">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="block">
            <div class="b-title">
              <?php echo $field['items_2']['title']?>
            </div>
            <div class="b-subtitle">
              <?php echo $field['items_2']['subtitle']?>
            </div>
            <hr>
            <div class="b2">
              <img src="<?php echo $field['items_2']['image']?>" alt="img" class="img-1">
            </div>
            <div class="bl">
              <div class="text-1">
                <?php echo $field['items_2']['title_2']?>
              </div>
              <div class="text-2">
                <?php echo $field['items_2']['text']?>
              </div>
            </div>
            <div class="title-3">
              <?php echo $field['items_2']['title_3']?>
            </div>
            <img src="<?php echo $field['items_2']['image_2']?>" alt="img" class="img-2">
            <img src="<?php echo $field['items_2']['image_3']?>" alt="img" class="img-2">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="block">
            <div class="b-title">
              <?php echo $field['items_3']['title']?>
            </div>
            <div class="b-subtitle">
              <?php echo $field['items_3']['subtitle']?>
            </div>
            <hr>
            <div class="b2">
              <img src="<?php echo $field['items_3']['image']?>" alt="img" class="img-1">
            </div>
            <div class="bl">
              <div class="text-1">
                <?php echo $field['items_3']['title_2']?>
              </div>
              <div class="text-2">
                <?php echo $field['items_3']['text']?>
              </div>
            </div>
            <div class="title-3">
              <?php echo $field['items_3']['title_3']?>
            </div>
            <img src="<?php echo $field['items_3']['image_2']?>" alt="img" class="img-2">
            <img src="<?php echo $field['items_3']['image_3']?>" alt="img" class="img-2">
          </div>
        </div>
      </div>
    </div>
    <div class="bl-3">
      <div class="b-title">
      <?php echo $field['title_2']?>
      </div>
      <hr class="hr-2">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="row g-0">
            <div class="col-6">
              <div class="bl-n">
                <img src="<?php echo $field['image_2']?>" alt="" class="image-bl">
                <div class="text-23">
                  <?php echo $field['text_2']?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="bl-n">
                <img src="<?php echo $field['image_3']?>" alt="" class="image-bl">
                <div class="text-23">
                  <?php echo $field['text_3']?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="row g-0">
            <div class="col-6">
              <div class="bl-n">
                <img src="<?php echo $field['image_4']?>" alt="" class="image-bl">
                <div class="text-23">
                  <?php echo $field['text_4']?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="bl-n">
                <img src="<?php echo $field['image_5']?>" alt="" class="image-bl">
                <div class="text-23">
                  <?php echo $field['text_5']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>