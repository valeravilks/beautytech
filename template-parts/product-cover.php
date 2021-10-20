<?php 

$title = get_the_title();
$description = get_field('products-description');
$logoUrl = get_field('products-logo');
$imageUrl = get_field('products-image-product');
$brochureUrl = get_field('products-file');
$transformImage = '';

$desktopImageSetting = get_field('products-image-desktop-setting');
$mobileImageSetting = get_field('products-image-mobile-setting');

$expand = $mobileImageSetting['expand'];

if( $expand && in_array('Yes', $expand)) {
  $transformImage = 'transform: scale(-1, 1)';
}

$imageStyle = <<<EOT
.product-cover__image {
  width: {$desktopImageSetting['scale']}px;
  bottom: {$desktopImageSetting['bottom']}px;
  left: {$desktopImageSetting['left']}px;
}
@media (max-width: 1173.98px) {
  .product-cover__image {
    width: {$mobileImageSetting['scale']}px;
    bottom: {$mobileImageSetting['bottom']}px;
    left: initial;
    right: {$mobileImageSetting['right']}px;
    {$transformImage}
  }
}
EOT;
?>

<style><?php echo $imageStyle; ?></style>
<div class="product-cover">
  <div class="product-cover__container">
    <div class="product-cover__row">
      <div class="product-cover__col">
          <h1 class="product-cover__title">
            <?php echo esc_html($title); ?>
          </h1>
          <div class="product-cover__description">
            <?php echo esc_html($description); ?>
          </div>
          <div class="product-cover__links">
            <a href="#" class="product-cover__link product-cover__link-cons js-consultation">
              Request a consultation
            </a> 
            <a href="<?php echo esc_url($brochureUrl); ?>" class="product-cover__link product-cover__link-download">
              Download brochure 
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.39566 6.52734L6 10.1317L9.60434 6.52734L8.94141 5.86441L6.46875 8.33707V0H5.53125V8.33707L3.05859 5.86441L2.39566 6.52734ZM0 11.0625H12V12H0V11.0625Z" fill="#FEFEFE"/>
              </svg>
            </a> 
          </div>
      </div>
    </div>
    <img 
      src="<?php echo esc_url($imageUrl); ?>" 
      alt="product-cover-image" 
      class="product-cover__image"
    >
    <img src="<?php echo esc_url($logoUrl); ?>" alt="product-cover-logo" class="product-cover__logo">
  </div>
</div>