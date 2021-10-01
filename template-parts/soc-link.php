<?php 
  $facebookLink = get_field('facebook-link', 'option');
  $instagramLink = get_field('instagtam-link', 'option');
?>

<div class="soc-link">
  <a href="<?php echo $facebookLink; ?>" class="soc-link__link">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-facebook.svg" alt="social link facebook">
  </a>
  <a href="<?php echo $instagramLink; ?>" class="soc-link__link">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-instagram.svg" alt="social link instagram">
  </a>
</div>