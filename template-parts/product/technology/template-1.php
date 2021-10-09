<?php 
$field = $args['data'];
?>

<div class="t-1">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="container">
      <div class="row mar">
        <div class="col-12 col-l-6">
          <div class="box">
            <div class="title">
              <?php echo $field['title_1']?>
            </div>
            <hr>
            <div class="text">
              <?php echo $field['text_1']?>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="box">
            <div class="title">
              <?php echo $field['title_2']?>
            </div>
            <hr>
            <div class="text">
              <?php echo $field['text_2']?>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="box">
            <div class="title">
              <?php echo $field['title_3']?>
            </div>
            <hr>
            <div class="text">
              <?php echo $field['text_3']?>
            </div>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="row">
            <div class="col-12 col-l-6">
              <div class="box-2">
                <div class="text">
                  <?php echo $field['caption_image_1']?>
                </div>
                <img src="<?php echo $field['image_1']?>" alt="" class="image">
              </div>
            </div>
            <div class="col-12 col-l-6">
              <div class="box-2">
                <div class="text">
                  <?php echo $field['caption_image_1']?>
                </div>
                <img src="<?php echo $field['image_1']?>" alt="" class="image">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="mode">
    <div class="container">
      <div class="title">
        <?php echo $field['f_title']?>
      </div>
    </div>
    <hr>
    <div class="container bl">
      <img src="<?php echo $field['f_image']?>" alt="" class="image-1">
      <img src="<?php echo $field['f_image_2']?>" alt="" class="image-2">
      <div class="text-1">
        <?php echo $field['f_text']?>
      </div>
      <div class="text-2">
        <?php echo $field['f_text_2']?>
      </div>
    </div>

  </div>

  <div class="o">
    <div class="container">
      <div class="title">
        <?php echo $field['o_title']?>
      </div>
      <div class="text">
        <?php echo $field['o_text']?>
      </div>
      <img src="<?php echo $field['o_image']?>" alt="image">
    </div>
  </div>
  <div class="v">
    <div class="container">
      <div class="title">
        <?php echo $field['v_title']?>
      </div>
      <hr class="hr">
      <div class="row alc">
        <img src="<?php echo $field['v_image_2']?>" alt="" class="image-4">
        <div class="col-12 col-l-7 m-order-1">
          <img src="<?php echo $field['v_image_d']?>" alt="img" class="image-1">
          <img src="<?php echo $field['v_image_m']?>" alt="img" class="image-2">
        </div>
        <div class="col-12 offset-l-1 col-l-4">
          <div class="text-2">
            <?php echo $field['v_text']?>
          </div>
        </div>
        <div class="col-12 col-l-6 m-order-1">
          <div class="text">
            <?php echo $field['v_text_2']?>
          </div>
        </div>
        <div class="col-12 col-l-6 m-order-1">
          <img src="<?php echo $field['v_image_3']?>" alt="img" class="image-3">
        </div>
      </div>
    </div>
  </div>
</div>