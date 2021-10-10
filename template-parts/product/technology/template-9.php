<?php 
$field = $args['data'];
?>

<div class="t9">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t9__block1">
    <div class="container">
      <div class="t9__block1-row row t9__block1-rowmb">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t9_block-1']['block_1']['image']?>" alt="img" class="t9__block1-img">
        </div>
        <div class="col-12 col-l-6">
          <div class="t9__block1-sub">
            <?php echo $field['t9_block-1']['block_1']['title_1']?>
          </div>
          <hr class="t9__block1-hr3">
          <div class="t9__block1-t1">
            <?php echo $field['t9_block-1']['block_1']['text_1']?>
          </div>
          <div class="t9__block1-sub">
            <?php echo $field['t9_block-1']['block_1']['title_1']?>
          </div>
          <hr class="t9__block1-hr3">
          <div class="t9__block1-t1">
            <?php echo $field['t9_block-1']['block_1']['text_1']?>
          </div>
        </div>
      </div>
      <div class="t9__block1-row row t9__block1-rowmb">
        <div class="col-12 col-l-6 t9__block1-order1">
          <div class="t9__block1-sub">
            <?php echo $field['t9_block-1']['block_2']['title']?>
          </div>
          <hr class="t9__block1-hr2">
          <?php foreach($field['t9_block-1']['block_2']['items'] as $item) :?>
            <div class="t9__block1-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t9__block1-hr4">
          <?php endforeach;?>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t9_block-1']['block_2']['image']?>" alt="img" class="t9__block1-img">
        </div>
      </div>
      <div class="t9__block1-row row t9__block1">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t9_block-1']['block_3']['image']?>" alt="img" class="t9__block1-img">
        </div>
        <div class="col-12 col-l-6">
          <div class="t9__block1-sub">
            <?php echo $field['t9_block-1']['block_3']['title']?>
          </div>
          <hr class="t9__block1-hr4">
          <?php foreach($field['t9_block-1']['block_3']['items'] as $item) :?>
            <div class="t9__block1-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t9__block1-hr4">
          <?php endforeach;?>
        </div>
      </div>
      <div class="row t9__block1-rowmb">
        <div class="col-12 col-l-6 t9__block1-order1">
          <div class="t9__block1-sub">
            <?php echo $field['t9_block-1']['block_4']['title']?>
          </div>
          <hr class="t9__block1-hr2">
          <?php foreach($field['t9_block-1']['block_4']['items'] as $item) :?>
            <div class="t9__block1-text2">
              <?php echo $item['text']?>
            </div>
            <hr class="t9__block1-hr4">
          <?php endforeach;?>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t9_block-1']['block_4']['image']?>" alt="img" class="t9__block1-img">
        </div>
      </div>
    </div>
  </div>
  <div class="t9__block2">
    <div class="container">
      <div class="t9__block1-title">
        <?php echo $field['t9_block-2']['title']?>
      </div>
      <hr class="t9__block1-hr">
      <div class="row t9__block1-mb">
        <div class="col-12 col-l-6">
          <div class="row">
            <img src="<?php echo $field['t9_block-2']['image_1']?>" alt="img" class="t9__block1-img1">
            <img src="<?php echo $field['t9_block-2']['image_2']?>" alt="img" class="t9__block1-img2">
          </div>
        </div>
        <div class="col-12 col-l-6">
          <?php 
          $int = 1;
          foreach($field['t9_block-2']['items'] as $item): if($int < 6 ):?>
                <div class="t9__block1-title2">
                  <span class="t9__block1-num"><?php echo $int .'. ' ?></span> <?php echo $item['title']?>
                </div>
                <hr class="t9__block1-hr3">
                <div class="t9__block1-text2">
                <?php echo $item['text']?>
                </div>
                <hr class="t9__block1-hr4">
          <?php 
          endif; $int++; 
        endforeach; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-l-6">
          <?php 
          $int = 1;
          foreach($field['t9_block-2']['items'] as $item): if($int > 5 ):?>
                <div class="t9__block1-title2">
                  <span class="t9__block1-num"><?php echo $int .'. ' ?></span> <?php echo $item['title']?>
                </div>
                <hr class="t9__block1-hr3">
                <div class="t9__block1-text2">
                <?php echo $item['text']?>ss
                </div>
                <hr class="t9__block1-hr4">
          <?php 
          endif; $int++;  
          endforeach; ?>
        </div>
        <div class="col-12 col-l-6 t9__block1-or2">
          <img src="<?php echo $field['t9_block-2']['image_3']?>" alt="img" class="t9__block1-img3">
          <img src="<?php echo $field['t9_block-2']['image_4']?>" alt="img" class="t9__block1-img4">
        </div>
      </div>
    </div>
  </div>
  <div class="t9__block3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t9__block3-title">
            <?php echo $field['t9_block-3']['title']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <?php foreach($field['t9_block-3']['items'] as $item) :?>
            <div class="t9__block3-title2">
              <?php echo $item['title']; ?>
            </div>
            <hr class="t9__block3-hr4">
            <div class="t9__block3-text2">
              <?php echo $item['text']; ?>
            </div>
            <hr class="t9__block3-hr5">
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="t9__block4">
    <div class="container">
      <div class="t9__block4-title">
        <?php echo $field['t9_block-4']['title']?>
      </div>
      <hr class="t9__block4-hr">
      <div class="row g-0">
        <?php foreach($field['t9_block-4']['items'] as $item) :?>
          <div class="col-12 col-l-6 ">
            <div class="t9__block4-box">
              <div class="t9__block4-text4">
                <?php echo $item['text']?>
              </div>
              <svg class="t9__block4-svg" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 45L45 1M45 1H1M45 1V45" stroke="#ECECEC" stroke-width="2"/>
              </svg>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>