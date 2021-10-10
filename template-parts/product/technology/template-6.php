<?php 
$field = $args['data'];
?>

<div class="t6">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="t6__block1">
    <div class="container">
      <div class="row">
        <div class="col-12 t6__block1-mnone">
          <div class="t6__block1-title1">
            <?php echo $field['t6_block-1']['f-1']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t6_block-1']['f-3']?>" alt="img" class="t6__block1-img1">
        </div>
        <div class="col-12 col-l-6">
          <div class="t6__block1-title1 t6__block1-dnone">
            <?php echo $field['t6_block-1']['f-1']?>
          </div>
          <hr class="t6__block1-hr1 t6__block1-dnone">
          <div class="t6__block1-text1">
            <?php echo $field['t6_block-1']['f-2']?>
          </div>
        </div>
        <div class="col-12 t6__block1-mnone">
          <div class="t6__block1-title1">
            <?php echo $field['t6_block-1']['f-4']?>
          </div>
        </div>
        <div class="col-12 col-l-6 o-2">
          <div class="t6__block1-title1 t6__block1-dnone">
            <?php echo $field['t6_block-1']['f-4']?>
          </div>
          <hr class="t6__block1-hr1 t6__block1-dnone">
          <div class="t6__block1-text1">
            <?php echo $field['t6_block-1']['f-5']?>
          </div>
        </div>
        <div class="col-12 col-l-6 o-1">
          <img src="<?php echo $field['t6_block-1']['f-6']?>" alt="img" class="t6__block1-img2">
        </div>
      </div>
      <div class="row t6__block1-sup">
        <div class="col-12 col-l-6"> 
          <img src="<?php echo $field['t6_block-1']['f-7']?>" alt="img" class="t6__block1-img3">
        </div>
        <div class="col-12 col-l-6"> 
          <img src="<?php echo $field['t6_block-1']['f-8']?>" alt="img" class="t6__block1-img3">
        </div>
      </div>
      <div class="row t6_block-bl">
        <div class="col-12 col-l-6">
          <img src="<?php echo $field['t6_block-1']['f-9']?>" alt="img" class="t6__block1-img4">
        </div>
        <div class="col-12 col-l-6">
          <hr class="t6__block1-hr2">
          <?php foreach($field['t6_block-1']['f-10'] as $item) :?>
            <div class="t6__block1-item">
              <?php echo $item['text']?>
            </div>
            <hr class="t6__block1-hr2">
          <?php endforeach?>
        </div>
      </div>

    </div>
  </div>
  <div class="t6__block2">
    <div class="t6__block2-box">
      <div class="container">
        <img src="<?php echo $field['t6_block-2']['f-1']?>" alt="img" class="t6__block2-img">
        <img src="<?php echo $field['t6_block-2']['f-2']?>" alt="img" class="t6__block2-img1">
      </div>
    </div>
    <div class="t6__block2-box1">
      <div class="container">
        <div class="t6__block2-title">
          <?php echo $field['t6_block-2']['f-3']?>
        </div>
      </div>
    </div>
    <div class="t6__block2-box2">
      <div class="container">
        <div class="row">
          <div class="col-12 t6__block1-mnone">
            <div class="t6__block1-title1">
              <?php echo $field['t6_block-2']['f-5']?>
            </div>
          </div>
          <div class="col-12 col-l-6">
            <img src="<?php echo $field['t6_block-2']['f-4']?>" alt="img" class="t6__block1-img1">
          </div>
          <div class="col-12 col-l-6">
            <div class="t6__block1-title1 t6__block1-dnone">
              <?php echo $field['t6_block-2']['f-5']?>
            </div>
            <hr class="t6__block1-hr1 t6__block1-dnone">
            <div class="t6__block1-text1">
              <?php echo $field['t6_block-2']['f-6']?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="t6__block2-box3">
      <div class="container">
        <div class="t6__block2-title2">
          <?php echo $field['t6_block-2']['f-7']?>
        </div>
        <hr class="t6__block2-hr2">
        <div class="row">
          <?php foreach( $field['t6_block-2']['f-8'] as $item) :?>
          <div class="col-12 col-l-6">
            <div class="t6__block2-text4">
              <?php echo $item['text']?>
            </div>
            <hr class="t6__block2-hr3">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="t6__block2-box32">
      <div class="container">
        <div class="t6__block2-title2">
          <?php echo $field['t6_block-2']['f-9']?>
        </div>
        <hr class="t6__block2-hr2">
        <div class="row">
          <div class="col-12 col-l-6">
            <div class="t6__block2-text3">
              <?php echo $field['t6_block-2']['f-10']?>
            </div>
          </div>
          <div class="col-12 col-l-6">
            <div class="t6__block2-text3">
              <?php echo $field['t6_block-2']['f-11']?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="t6__block2-box4">
      <div class="container">
        <div class="t6__block2-title2">
          <?php echo $field['t6_block-2']['f-12']?>
        </div>
        <hr class="t6__block2-hr2">
        <div class="row">
          <div class="col-12 col-l-6">
            <img src="<?php echo $field['t6_block-2']['f-13']?>" alt="img" class="t6__block2-img5">
            <div class="t6__block2-text3">
              <?php echo $field['t6_block-2']['f-14']?>
            </div>
          </div>
          <div class="col-12 col-l-6">
          <img src="<?php echo $field['t6_block-2']['f-15']?>" alt="img" class="t6__block2-img5">
            <div class="t6__block2-text3">
              <?php echo $field['t6_block-2']['f-16']?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="t6__block2-box5">
      <div class="container">
        <div class="t6__block2-title3">
          <?php echo $field['t6_block-2']['f-17']?>
        </div>
      </div>
    </div>
  </div>
  <div class="t6__block3">
    <div class="t6__block3-box">
      <div class="container">
        <div class="row">
          <div class="col-12 col-l-6 t6__block3-db">
            <div class="t6__block3-title">
              <?php echo $field['t6_block-3']['f-2']?>
            </div>
            <hr class="t6__block3-hr">
            <div class="t6__block3-text">
              <?php echo $field['t6_block-3']['f-3']?>
            </div>
          </div>
          <div class="col-12 col-l-6">
            <img src="<?php echo $field['t6_block-3']['f-1']?>" alt="img" class="t6__block3-img">
          </div>
          <div class="col-12 col-l-6">
            <div class="t6__block3-title t6__block3-none">
              <?php echo $field['t6_block-3']['f-2']?>
            </div>
            <hr class="t6__block3-hr t6__block3-none">
            <div class="t6__block3-text t6__block3-none">
              <?php echo $field['t6_block-3']['f-3']?>
            </div>
            <div class="t6__block3-title">
              <?php echo $field['t6_block-3']['f-4']?>
            </div>
            <hr class="t6__block3-hr">
            <div class="t6__block3-text">
              <?php echo $field['t6_block-3']['f-5']?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>