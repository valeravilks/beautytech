<?php 
$field = $args['data'];
?>

<div class="t8">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t8__block1">
    <div class="container">
      <div class="t8__block1-row row">
        <div class="col-12 t8__block1-mnone">
          <div class="t8__block1-title1">
            <?php echo $field['t8_block-1']['title']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t8_block-1']['image']?>" alt="img" class="t8__block1-img1">
        </div>
        <div class="col-12 col-l-6">
          <div class="t8__block1-title1 t8__block1-dnone">
            <?php echo $field['t8_block-1']['title']?>
          </div>
          <hr class="t8__block1-hr1 t8__block1-dnone">
          <div class="t8__block1-text1">
            <?php echo $field['t8_block-1']['text']?>
          </div>
        </div>        
      </div>
    </div>
  </div>
  <div class="t8__block2" style="background-image: url(<?php echo $field['t8_block-2']['image']?>)">
    <div class="container">
      <img src="<?php echo $field['t8_block-2']['image']?>" alt="img" class="t8__block2-img">
      <div class="t8__block2-text">
        <?php echo $field['t8_block-2']['text']?>
      </div>
    </div>
  </div>
  <div class="t8__block3">
    <div class="container">
      <div class="row">
        <?php foreach($field['t8_block-3']['items'] as $item) : ?>
        <div class="t8__block3-box">
          <img src="<?php echo $item['image']?>" alt="img" class="t8__block3-img">
          <div class="t8__block3-text">
            <?php echo $item['title']?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="t8__block4">
    <div class="container">
      <div class="t8__block4-title">
        <?php echo $field['t8_block-4']['title']?>
      </div>
      <hr class="t8__block4-hr">
      <div class="row t8__block4-mb">
        <div class="col-12 col-l-6">
          <div class="row">
            <div class="col-6">
              <img src="<?php echo $field['t8_block-4']['image_1']?>" alt="img" class="t8__block4-img1">
              <div class="t8__block4-b1">
                <div class="t8__block4-title1">
                  Interface
                </div>
                <div class="t8__block4-text1">
                  <?php echo $field['t8_block-4']['text']?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <img src="<?php echo $field['t8_block-4']['image_2']?>" alt="img" class="t8__block4-img1">
            </div>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <?php 
          $int = 1;
          foreach($field['t8_block-4']['items'] as $item): if($int < 5 ):?>
                <div class="t8__block4-title2">
                  <span class="t8__block4-num"><?php echo $int .'. ' ?></span> <?php echo $item['title']?>
                </div>
                <hr class="t8__block4-hr3">
                <div class="t8__block4-text2">
                <?php echo $item['text']?>
                </div>
                <hr class="t8__block4-hr4">
          <?php 
          endif; $int++; 
        endforeach; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-l-6">
          <?php 
          $int = 1;
          foreach($field['t8_block-4']['items'] as $item): if($int > 4 ):?>
                <div class="t8__block4-title2">
                  <span class="t8__block4-num"><?php echo $int .'. ' ?></span> <?php echo $item['title']?>
                </div>
                <hr class="t8__block4-hr3">
                <div class="t8__block4-text2">
                <?php echo $item['text']?>ss
                </div>
                <hr class="t8__block4-hr4">
          <?php 
          endif; $int++;  
          endforeach; ?>
        </div>
        <div class="col-12 col-l-6 t8__block4-or2">
          <img src="<?php echo $field['t8_block-4']['image_3']?>" alt="img" class="t8__block4-img3">
          <img src="<?php echo $field['t8_block-4']['image_4']?>" alt="img" class="t8__block4-img4">
        </div>
      </div>
    </div>
  </div>
  <div class="t8__block5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t8__block5-title">
            <?php echo $field['t8_block-5']['title']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <?php foreach($field['t8_block-5']['items'] as $item) :?>
            <div class="t8__block5-title2">
              <?php echo $item['title']; ?>
            </div>
            <hr class="t8__block5-hr4">
            <div class="t8__block5-text2">
              <?php echo $item['text']; ?>
            </div>
            <hr class="t8__block5-hr5">
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="t8__block6">
    <div class="container">
      <div class="t8__block6-title">
        <?php echo $field['t8_block-6']['title']?>
      </div>
      <hr class="t8__block6-hr">
      <div class="row g-0">
        <?php foreach($field['t8_block-6']['items'] as $item) :?>
          <div class="col-12 col-l-6 ">
            <div class="t8__block6-box">
              <div class="t8__block6-text4">
                <?php echo $item['text']?>
              </div>
              <svg class="t8__block6-svg" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 45L45 1M45 1H1M45 1V45" stroke="#ECECEC" stroke-width="2"/>
              </svg>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>