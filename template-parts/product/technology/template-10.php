<?php 
$field = $args['data'];
?>

<div class="t10">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t10__block1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
            <img src="<?php echo $field['t10_block-1']['image']?>" alt="img" class="t10__block1-img1">
        </div>
        <div class="col-12 col-l-6 t10__block1-col t10__block1-order">
          <div class="t10__block1-title">
            <?php echo $field['t10_block-1']['title_1']?>
          </div>
          <hr class="t10__block1-hr">
          <div class="t10__block1-text">
            <?php echo $field['t10_block-1']['text_1']?>
          </div>
        </div>
        <div class="col-12 col-l-6 t10__block1-col">
          <div class="t10__block1-title">
            <?php echo $field['t10_block-1']['title_2']?>
          </div>
          <hr class="t10__block1-hr">
          <div class="t10__block1-text">
            <?php echo $field['t10_block-1']['text_2']?>
          </div>
        </div>
        <div class="col-12 col-l-6 t10__block1-col">
          <div class="t10__block1-title">
            <?php echo $field['t10_block-1']['title_3']?>
          </div>
          <hr class="t10__block1-hr">
          <div class="t10__block1-text">
            <?php echo $field['t10_block-1']['text_3']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t10__block2">
    <div class="container">
      <div class="t10__block2-title">
        <?php echo $field['t10_block-2']['title']?>
      </div>
      <div class="row">
        <div class="col-12 col-l-4">
          <div class="t10__block2-box">
            <div class="t10__block2-subtitle">
              <?php echo $field['t10_block-2']['text_1']?>
            </div>
            <img src="<?php echo $field['t10_block-2']['image_1']?>" alt="img" class="t10__block2-img">
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t10__block2-box">
            <div class="t10__block2-subtitle">
              <?php echo $field['t10_block-2']['text_2']?>
            </div>
            <img src="<?php echo $field['t10_block-2']['image_2']?>" alt="img" class="t10__block2-img">
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t10__block2-box">
            <div class="t10__block2-subtitle">
              <?php echo $field['t10_block-2']['text_3']?>
            </div>
            <img src="<?php echo $field['t10_block-2']['image_3']?>" alt="img" class="t10__block2-img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t10__block3">
    <div class="container">
      <div class="t10__block3-title">
        <?php echo $field['t10_block-3']['title']?>
      </div>
    </div>
  </div>
  <div class="t10__block4">
    <div class="container">
      <div class="row t10__block4-row">
        <div class="col-12 col-l-6">
          <div class="t10__block1-title">
            <?php echo $field['t10_block-4']['title']?>
          </div>
          <hr class="t10__block1-hr">
          <div class="t10__block1-text">
            <?php echo $field['t10_block-4']['text']?>
          </div>
        </div>
        <div class="col-12 offset-l-1 col-l-5">
          <img src="<?php echo $field['t10_block-4']['image']?>" alt="img" class="t10__block4-img">
        </div>
      </div>
    </div>
  </div>
  <div class="t10__block5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t10__block1-title">
            <?php echo $field['t10_block-5']['title']?>
          </div>
          <hr class="t10__block1-hr">
          <div class="t10__block1-text">
            <?php echo $field['t10_block-5']['text']?>
          </div>
          <img src="<?php echo $field['t10_block-5']['image']?>" alt="img" class="t10__block5-img">
          <div class="t10__block1-text2">
            <?php echo $field['t10_block-5']['text_2']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <?php foreach($field['t10_block-5']['items'] as $item) :?>
            <div class="t10__block5-title1 t10__block5-color">
              <?php echo $item['title']; ?>
            </div>
            <div class="t10__block5-text1">
              <?php echo $item['text']; ?>
            </div>
            <hr class="t10__block1-hr">
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>