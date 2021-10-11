<?php 
$field = $args['data'];
?>

<div class="t11">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t11__block1">
    <div class="t11__block1-box1">
      <div class="container">
        <div class="row">
          <div class="col-12 col-l-6">
            <img src="<?php echo $field['t11_block-1']['image_1']?>" alt="" class="t11__block1-img1">
          </div>
          <div class="col-12 col-l-6">
            <div class="t11__block1-bl1">
              <div class="t11__block1-title1">
                <?php echo $field['t11_block-1']['title_1']?>
              </div>
              <hr class="t11__block1-hr1">  
              <?php foreach($field['t11_block-1']['items_1'] as $item) :?>
                <div class="t11__block1-text1">
                  <?php echo $item['text']?>
                </div>
                <hr class="t11__block1-hr1">  
              <?php endforeach;?>
            </div>
            <div class="t11__block1-bl2">
              <div class="t11__block1-title1">
                <?php echo $field['t11_block-1']['title_2']?>
              </div>
              <hr class="t11__block1-hr1">  
              <?php foreach($field['t11_block-1']['items_2'] as $item) :?>
                <div class="t11__block1-text1">
                  <?php echo $item['text']?>
                </div>
                <hr class="t11__block1-hr1">  
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="t11__block1-box2">
      <div class="container">
        <div class="row">
          <?php foreach($field['t11_block-1']['items_3'] as $item) :?>
            <div class="col-4 col-l-2">
              <img src="<?php echo $item['image']?>" alt="" class="t11__block1-img2">
            </div>
          <?php endforeach;?>

        </div>
      </div>
    </div>
    <div class="t11__block1-box3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-l-6">
            <img src="<?php echo $field['t11_block-1']['image_2']?>" alt="" class="t11__block1-img3">
            <img src="<?php echo $field['t11_block-1']['image_3']?>" alt="" class="t11__block1-img4">
          </div>
          <div class="col-12 col-l-6">
            <?php 
            $int = 1;
            foreach($field['t11_block-1']['item_3'] as $item):?>
                  <div class="t11__block1-title2">
                    <span class="t11__block1-num"><?php echo $int .'. ' ?></span> <?php echo $item['title']?>
                  </div>
                  <hr class="t11__block1-hr3">
                  <div class="t11__block1-text2">
                  <?php echo $item['text']?>
                  </div>
                  <hr class="t11__block1-hr4">
            <?php $int++;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    
</div>