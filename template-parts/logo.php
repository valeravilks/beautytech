<?php 
$urlSite = get_bloginfo('url');
$logo = get_field('logo', 'option');
$logoRetina = get_field('logo-retina', 'option');
$additionalClass = $args['class'];
?>

<a 
  href="<?php echo $urlSite; ?>" 
  class="<?php echo $additionalClass?> logo">
  <img 
    src="<?php echo $logo?>" 
    srcset="<?php echo $logoRetina?> 2x" 
    alt="logo" 
    class="logo__img"
  >	
</a>