<?php 
$field = $args['data'];
?>

<div class="t5">
  <div class="t5__supp">
    <div class="t5__block1">
      <?php get_template_part('template-parts/h2-block', '', array(
            'h2' => $args['title'],
            'color' => 'white',
          ));
      ?>
      <div class="container">
        <img src="<?php echo $field['t5_block-1']['image_1']?>" alt="img" class="t5__block1-image1">
        <img src="<?php echo $field['t5_block-1']['image_2']?>" alt="img" class="t5__block1-image2">
        <div class="row">
          <div class="col-12 offset-l-6 col-l-6">
            <div class="t5__block1-subtitle">
              <?php echo $field['t5_block-1']['subtitle']?>
            </div>
            <div class="t5__block1-text">
              <?php echo $field['t5_block-1']['text']?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t5__block2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t5__block2-subtitle">
            <?php echo $field['t5_block-2']['subtitle']?>
          </div>
          <hr class="t5__block2-hr">
          <div class="t5__block2-text">
            <?php echo $field['t5_block-2']['text']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t5_block-2']['image_2']?>" alt="img" class="t5__block2-image2">
        </div>
      </div>
    </div>
  </div>
  <div class="t5__block3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-3">
          <div class="t5__block3-title">
            <?php echo $field['t5_block-3']['title_1']?>
          </div>
          <div class="t5__block3-text">
            <?php echo $field['t5_block-3']['text_1']?>
          </div>
        </div>
        <div class="col-12 col-l-6 t5__block3-sup">
          <img src="<?php echo $field['t5_block-3']['image_2']?>" alt="img" class="t5__block3-image"> 
        </div>
        <div class="col-12 col-l-3">
          <div class="t5__block3-title">
            <?php echo $field['t5_block-3']['title_2']?>
          </div>
          <div class="t5__block3-text">
            <?php echo $field['t5_block-3']['text_2']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t5__block4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t5__block4-title">
            <?php echo $field['t5_block-4']['title']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="t5__block4-text">
            <?php echo $field['t5_block-4']['text']?>
          </div>
        </div>
        <div class="col-12 col-l-4 t5__block4-mb">
          <div class="t5__block4-box">
            <img src="<?php echo $field['t5_block-4']['image_1']?>" alt="img" class="t5__block4-image-1">
            <div class="t5__block4-title-1">
              <?php echo $field['t5_block-4']['title_1']?>
            </div>
            <div class="t5__block4-text-1">
              <?php echo $field['t5_block-4']['text_1']?>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-4 t5__block4-mb">
          <div class="t5__block4-box">
            <img src="<?php echo $field['t5_block-4']['image_2']?>" alt="img" class="t5__block4-image-1">
            <div class="t5__block4-title-1">
              <?php echo $field['t5_block-4']['title_2']?>
            </div>
            <div class="t5__block4-text-1">
              <?php echo $field['t5_block-4']['text_2']?>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t5__block4-box">
            <img src="<?php echo $field['t5_block-4']['image_3']?>" alt="img" class="t5__block4-image-1">
            <div class="t5__block4-title-1">
              <?php echo $field['t5_block-4']['title_3']?>
            </div>
            <div class="t5__block4-text-1">
              <?php echo $field['t5_block-4']['text_3']?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t5__block5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6 t5__block5-mb">
          <div class="t5__block5-box">
            <div class="t5__block5-title">
              <?php echo $field['t5_block-5']['title_1']?>
            </div>
            <hr class="t5__block5-hr">
            <img src="<?php echo $field['t5_block-5']['image_1']?>" alt="img" class="t5__block5-img-2">
          </div>
        </div>
        <div class="col-12 col-l-6 t5__block5-mb">
          <div class="t5__block5-box">
            <div class="t5__block5-title">
              <?php echo $field['t5_block-5']['title_2']?>
            </div>
            <hr class="t5__block5-hr">
            <img src="<?php echo $field['t5_block-5']['image_2']?>" alt="img" class="t5__block5-img">
          </div>
        </div>
      </div>
    </div>
    <div class="t5__block5-cont">
      <div class="container">
        <div class="col-12 t5__block5-row">
          <div class="row">
            <div class="row">
              <div class="col-12 col-l-6 t5__block5-mbb">
                <div class="t5__block5-box2">
                  <div class="t5__block5-subtitle">
                    <?php echo $field['t5_block-5']['subtitle']?>
                  </div>
                  <hr class="t5__block5-hr3">
                  <div class="t5__block5-text-4">
                    <?php echo $field['t5_block-5']['text_4']?>
                  </div>
                </div>
              </div>
              <div class="col-12 col-l-6">
                <img src="<?php echo $field['t5_block-5']['image_3']?>" alt="" class="t5__block5-image3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>