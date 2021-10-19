<?php 
  $facebookLink = get_field('fm_facebook', 'option');
  $instagramLink = get_field('fm_instagram', 'option');
  $additionalClass = $args['class'];
?>

<div class="<?php echo $additionalClass; ?> soc-link">
  <a href="<?php echo $facebookLink; ?>" class="soc-link__link">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-facebook.svg" alt="social link facebook">
  </a>
  <a href="<?php echo $instagramLink; ?>" class="soc-link__link">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-instagram.svg" alt="social link instagram">
  </a>
</div>