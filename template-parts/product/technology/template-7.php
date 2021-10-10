<?php 
$field = $args['data'];
?>

<div class="t7">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t7__block1">
    <div class="container">
      <div class="t7__block1-row row">
        <div class="col-12 t7__block1-mnone">
          <div class="t7__block1-title1">
            <?php echo $field['t7_block-1']['title']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t7_block-1']['image']?>" alt="img" class="t7__block1-img1">
        </div>
        <div class="col-12 col-l-6">
          <div class="t7__block1-title1 t7__block1-dnone">
            <?php echo $field['t7_block-1']['title']?>
          </div>
          <hr class="t7__block1-hr1 t7__block1-dnone">
          <div class="t7__block1-text1">
            <?php echo $field['t7_block-1']['text']?>
          </div>
        </div>        
      </div>
    </div>
  </div>
  <div class="t7__block2">
    <div class="t7__block2-cont container">
      <div class="t7__block2-box1">
        <div class="t7__block2-title1">
          <?php echo $field['t7_block-2']['title_2']?>
        </div>
        <div class="t7__block2-bl">
          <img src="<?php echo $field['t7_block-2']['image']?>" alt="img" class="t7__block2-img1">
          <div class="t7__block2-text1">
            <?php echo $field['t7_block-2']['text_2']?>
          </div>
        </div>
      </div>
      <div class="t7__block2-box2">
        <div class="t7__block2-title2">
          <?php echo $field['t7_block-2']['title']?>
        </div>
        <div class="t7__block2-bl2">
          <div class="t7__block2-text2">
            <?php echo $field['t7_block-2']['text']?>
          </div>
          <img src="<?php echo $field['t7_block-2']['image_3']?>" alt="img" class="t7__block2-img2">
        </div>
      </div>
      <div class="t7__block2-box3">
        <div class="t7__block2-bl2">
          <img src="<?php echo $field['t7_block-2']['image_2']?>" alt="img" class="t7__block2-img3">
          <div class="t7__block2-cap1">
            <?php echo $field['t7_block-2']['caption']?>
          </div>
          <div class="t7__block2-cap2">
            <?php echo $field['t7_block-2']['caption_2']?>
          </div>
          <div class="t7__block2-cap3">
            <?php echo $field['t7_block-2']['caption_3']?>
          </div>
          <div class="t7__block2-cap4">
            <?php echo $field['t7_block-2']['caption_4']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t7__block3">
    <div class="container">
      <div class="t7__block3-title">
        <?php echo $field['t7_block-3']['title']?>
      </div>
      <hr class="t7__block3-hr">
      <div class="row">
        <div class="col-12 col-l-3">
          <img src="<?php echo $field['t7_block-3']['image_1']?>" alt="img" class="t7__block3-img">
          <div class="t7__block3-text">
            <?php echo $field['t7_block-3']['text_1']?>
          </div>
        </div>
        <div class="col-12 col-l-3">
          <img src="<?php echo $field['t7_block-3']['image_2']?>" alt="img" class="t7__block3-img">
          <div class="t7__block3-text">
            <?php echo $field['t7_block-3']['text_2']?>
          </div>
        </div>
        <div class="col-12 col-l-3">
          <img src="<?php echo $field['t7_block-3']['image_3']?>" alt="img" class="t7__block3-img">
          <div class="t7__block3-text">
            <?php echo $field['t7_block-3']['text_3']?>
          </div>
        </div>
        <div class="col-12 col-l-3">
          <img src="<?php echo $field['t7_block-3']['image_4']?>" alt="img" class="t7__block3-img">
          <div class="t7__block3-text">
            <?php echo $field['t7_block-3']['text_4']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t7__block4">
    <div class="container">
      <div class="t7__block4-title">
        <?php echo $field['t7_block-4']['title']?>
      </div>
      <hr class="t7__block4-hr">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t7__block4-text1">
            <?php echo $field['t7_block-4']['text_1']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="t7__block4-text2">
            <?php echo $field['t7_block-4']['text_2']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t7__block5">
    <div class="container">
      <div class="t7__block5-title">
        <?php echo $field['t7_block-5']['title']?>
      </div>
      <hr class="t7__block5-hr">
      <div class="t7__block5-row row t7__block5-rowmb">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t7_block-5']['block_1']['image']?>" alt="img" class="t7__block5-img">
        </div>
        <div class="col-12 col-l-6">
          <div class="t7__block5-sub">
            <?php echo $field['t7_block-5']['block_1']['title']?>
          </div>
          <hr class="t7__block5-hr2">
          <?php foreach($field['t7_block-5']['block_1']['items'] as $item) :?>
            <div class="t7__block5-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t7__block5-hr3">
          <?php endforeach;?>
        </div>
      </div>
      <div class="t7__block5-row row t7__block5-rowmb">
        <div class="col-12 col-l-6 t7__block5-order1">
          <div class="t7__block5-sub">
            <?php echo $field['t7_block-5']['block_2']['title']?>
          </div>
          <hr class="t7__block5-hr2">
          <?php foreach($field['t7_block-5']['block_2']['items'] as $item) :?>
            <div class="t7__block5-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t7__block5-hr3">
          <?php endforeach;?>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t7_block-5']['block_2']['image']?>" alt="img" class="t7__block5-img">
        </div>
      </div>
      <div class="t7__block5-row row t7__block5">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t7_block-5']['block_3']['image']?>" alt="img" class="t7__block5-img">
        </div>
        <div class="col-12 col-l-6">
          <div class="t7__block5-sub">
            <?php echo $field['t7_block-5']['block_3']['title']?>
          </div>
          <hr class="t7__block5-hr2">
          <?php foreach($field['t7_block-5']['block_3']['items'] as $item) :?>
            <div class="t7__block5-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t7__block5-hr3">
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</div>