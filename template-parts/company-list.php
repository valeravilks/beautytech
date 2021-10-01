<?php 
$imageList = get_field('company-list', 'option'); 
$index = 1;
?>


<div class="company-list">
  <div class="container">
    <div class="row">

    <?php if( $imageList ): ?>
      <?php foreach( $imageList as $image ): ?>
          <div class="col-6 col-l-2">
            <img 
              class="company-list__img" 
              src="<?php echo esc_url($image); ?>"
              alt="company nane" />
          </div>
          <?php if($index % 6 === 0 and count($imageList) != $index) :?>
            <div class="col-12 company-list__hr-1">
              <hr>
            </div>
          <?php endif; ?>
          <?php if($index % 2 === 0 and count($imageList) != $index) :?>
            <div class="col-12 company-list__hr-2">
              <hr>
            </div>
          <?php endif; ?>
      <?php $index++; 
      endforeach; ?>
    <?php endif; ?>

<!-- <div class="company-list">
  <div class="container">
    <div class="row">
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-12 company-list__hr-2">
        <hr>
      </div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-12 company-list__hr-2">
        <hr>
      </div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-12 company-list__hr-2">
        <hr>
      </div>
      <div class="col-12 company-list__hr-1">
        <hr>
      </div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-12 company-list__hr-2">
        <hr>
      </div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-12 company-list__hr-2">
        <hr>
      </div>
      <div class="col-6 col-l-2">Text</div>
      <div class="col-6 col-l-2">Text</div>   -->
    </div>
  </div>
</div>