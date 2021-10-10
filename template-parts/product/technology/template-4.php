<?php 
$field = $args['data'];
?>

<div class="t-4">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="container">
    <div class="t-4__title">
      <?php echo $field['f-1']?>
    </div>
    <div class="row t-4__block">
      <div class="col-12 col-l-6">
        <div class="t-4__num">
          01
        </div>
        <hr class="t-4__hr">
        <div class="t-4__title-2">
          <?php echo $field['f-2']?>
        </div>
        <div class="t-4__text-2">
          <?php echo $field['f-3']?>
        </div>
        <img src="<?php echo $field['f-4']?>" alt="img" class="t-4__img">
        <div class="t-4__text-3">
        <?php echo $field['f-5']?>
        </div>
      </div>
      <div class="col-12 col-l-6">
        <div class="t-4__num">
          02
        </div>
        <hr class="t-4__hr">
        <div class="t-4__title-2">
          <?php echo $field['f-6']?>
        </div>
        <div class="t-4__text-2">
          <?php echo $field['f-7']?>
        </div>
        <img src="<?php echo $field['f-8']?>" alt="img" class="t-4__img">
      </div>
    </div>
  </div>
  <div class="t-4__block-2">
      <div class="container">
        <div class="t-4__title-3">
          <?php echo $field['f-9']?>
        </div>
        <div class="row">
          <div class="col-12 offset-l-6 col-l-6">
            <div class="t-4__text-3">
              <?php echo $field['f-10']?>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="t-4__block-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-8">
          <div class="t-4__title-4">
            <?php echo $field['f-11']?>
          </div>
        </div>
        <div class="col-12 col-l-4">
          <div class="t-4__text-4">
            <?php echo $field['f-12']?>
          </div>
        </div>
        <div class="col-12">
          <img src="<?php echo $field['f-13']?>" alt="img" class="t-4__image-2">
        </div>
      </div>
    </div>
  </div>
  <div class="t-4__block-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-l-6">
          <div class="t-4__title-4">
            <?php echo $field['f-13-1']?>
          </div>
        </div>
        <div class="col-12 col-l-6">
          <div class="t-4__text-5">
            <?php echo $field['f-13-2']?>
          </div>
        </div>
      </div>
      <div class="t-4__box">
        <div class="row">
          <div class="col-12 col-l-4">
            <div class="t-4__box-2">
              <div class="t-4__title-5">
                <?php echo $field['f-14']?>
              </div>
              <div class="t-4__text-6">
                <?php echo $field['f-15']?>
              </div>
            </div>
          </div>
          <div class="col-12 t-4__dn">
            <hr class="t-4__hr-2">
          </div>
          <div class="col-12 col-l-4">
            <div class="t-4__box-2">
              <div class="t-4__title-5">
                <?php echo $field['f-16']?>
              </div>
              <div class="t-4__text-6">
                <?php echo $field['f-17']?>
              </div>
            </div>
          </div>
          <div class="col-12 t-4__dn">
            <hr class="t-4__hr-2">
          </div>
          <div class="col-12 col-l-4">
            <div class="t-4__box-2">
              <div class="t-4__title-5">
                <?php echo $field['f-18']?>
              </div>
              <div class="t-4__text-6">
                <?php echo $field['f-19']?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="t-4__box-3">
        <img src="<?php echo $field['f-20']?>" alt="img" class="t-4__image-5">
      </div>
    </div>
  </div>
</div>