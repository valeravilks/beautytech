<?php 

$title = get_field('product-content-indications-title');
$templateName = get_field('product-content-indication-content-list');

switch($templateName) {
  case 'Indication 1':
    get_template_part('template-parts/product/indications/template-1', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-1')['items']
    ));
  case 'Indication 2':
    get_template_part('template-parts/product/indications/template-2', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-2')['items']
    ));
  case 'Treatment zones 1':

  case 'Treatment zones 2':
}


?>
