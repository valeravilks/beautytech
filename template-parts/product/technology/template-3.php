<?php 
$field = $args['data'];
?>

<div class="t-3">
  <?php get_template_part('template-parts/h2-block', '', array(
        'h2' => $args['title'],
      ));
  ?>
  <div class="container">
    <div class="t-3__subtitle">
      <?php echo $field['title']?>
    </div>
    <div class="row">
      <div class="col-12 col-l-6">
        <img src="<?php echo $field['img']?>" alt="img" class="t-3__img"> 
      </div>
      <div class="col-12 col-l-6">
        <div class="t-3__text">
          <?php echo $field['text']?>
        </div> 
      </div>
    </div>
  </div>
</div>

1
Title
titleText
2
Text
textWysiwyg Editor
3
Image
img