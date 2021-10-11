<?php 
$field = $args['data'];
?>

<div class="t12">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t12__block1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t12_block-1']['image']?>" alt="img" class="t12__block1-img">
        </div>
        <div class="col-12 col-l-6">
          <div class="t12__block1-title">
            <?php echo $field['t12_block-1']['title']?>
          </div>
          <hr class="t12__block1-hr">
          <img src="<?php echo $field['t12_block-1']['image']?>" alt="img" class="t12__block1-img2">
          <div class="t12__block1-text">
            <?php echo $field['t12_block-1']['text']?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="t12__block2">
    <div class="container">
      <div class="t12__block2-title">
        <?php echo $field['t12_block-2']['title']?>
      </div>
      <hr class="t12__block2-hr">
      <div class="row">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t12_block-2']['image_1']?>" alt="img" class="t12__block2-img1">
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t12_block-2']['image_2']?>" alt="img" class="t12__block2-img2">
        </div>
      </div>
    </div>
  </div>
  <div class="t12__block3">
    <div class="container">
      <div class="t12__block3-title">
        <?php echo $field['t12_block-3']['title']?>
      </div>
      <hr class="t12__block3-hr">
      <img src="<?php echo $field['t12_block-3']['image_1']?>" alt="img" class="t12__block3-img1">
      <img src="<?php echo $field['t12_block-3']['image_2']?>" alt="img" class="t12__block3-img2">
    </div>
  </div>
  <div class="t12__block5">
    <div class="container">
      <div class="t12__block5-title">
        <?php echo $field['t12_block-5']['title']?>
      </div>
      <hr class="t12__block5-hr">
      <img src="<?php echo $field['t12_block-5']['image']?>" alt="img" class="t12__block5-img">
    </div>
  </div>
  <div class="t12__block6">
    <div class="container">
      <div class="t12__block6-title">
        <?php echo $field['t12_block-6']['title']?>
      </div>
      <hr class="t12__block6-hr">
      <img src="<?php echo $field['t12_block-6']['image_1']?>" alt="img" class="t12__block6-img1">
      <img src="<?php echo $field['t12_block-6']['image_2']?>" alt="img" class="t12__block6-img2">
      <div class="t12__block6-box">
        <img src="<?php echo $field['t12_block-6']['image_3']?>" alt="img" class="t12__block6-img3">
        <img src="<?php echo $field['t12_block-6']['image_4']?>" alt="img" class="t12__block6-img4">
      </div>
    </div>
  </div>
  <div class="t12__block7">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t12__block7-title">
            <?php echo $field['t12_block-7']['title']?>
          </div>
          <hr class="t12__block7-hr">
          <img src="<?php echo $field['t12_block-7']['image']?>" alt="img" class="t12__block7-img2">
          <?php foreach($field['t12_block-7']['items'] as $item) :?>
            <div class="t12__block7-text1">
              <?php echo $item['text']; ?>
            </div>
            <hr class="t12__block7-hr2">
          <?php endforeach; ?>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t12_block-7']['image']?>" alt="img" class="t12__block7-img">
        </div>
      </div>
    </div>
  </div>
  <div class="t12__block8">
    <div class="container">
      <div class="t12__block8-title">
        <?php echo $field['t12_block-8']['title']?>
      </div>
      <hr class="t12__block8-hr">
      <div class="row">
        <div class="col-12 col-l-4">
          <div class="t12__block8-box">
            <img src="<?php echo $field['t12_block-8']['block_1']['image']?>" alt="img" class="t12__block8-img">
            <div class="t12__block8-sub">
              <?php echo $field['t12_block-8']['block_1']['title']?>
            </div>
            <hr class="t12__block8-hr2">
            <?php foreach($field['t12_block-8']['block_1']['items'] as $item) :?>
            <div class="t12__block8-text1">
              <?php echo $item['text']; ?>
              </div>
              <hr class="t12__block8-hr2">
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t12__block8-box">
            <img src="<?php echo $field['t12_block-8']['block_2']['image']?>" alt="img" class="t12__block8-img">
            <div class="t12__block8-sub">
              <?php echo $field['t12_block-8']['block_2']['title']?>
            </div>
            <hr class="t12__block8-hr2">
            <?php foreach($field['t12_block-8']['block_2']['items'] as $item) :?>
            <div class="t12__block8-text1">
              <?php echo $item['text']; ?>
              </div>
              <hr class="t12__block8-hr2">
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t12__block8-box">
            <img src="<?php echo $field['t12_block-8']['block_3']['image']?>" alt="img" class="t12__block8-img">
            <div class="t12__block8-sub">
              <?php echo $field['t12_block-8']['block_3']['title']?>
            </div>
            <hr class="t12__block8-hr2">
            <?php foreach($field['t12_block-8']['block_3']['items'] as $item) :?>
            <div class="t12__block8-text1">
              <?php echo $item['text']; ?>
              </div>
              <hr class="t12__block8-hr2">
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>