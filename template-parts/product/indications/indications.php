<?php 

$title = get_field('product-content-indications-title');
$templateName = get_field('product-content-indication-content-list');

switch($templateName) {
  case 'Indication-1':
    get_template_part('template-parts/product/indications/template-1', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-1')['items']
    ));
  case 'Indication-2':
    get_template_part('template-parts/product/indications/template-2', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-2')['items']
    ));
  case 'Treatment-zones-1':
    get_template_part('template-parts/product/indications/template-3', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-3')['list'],
      'text' => get_field('product-content-indication-template-3')['text']
    ));
  case 'Treatment-zones-2':
    get_template_part('template-parts/product/indications/template-4', '', array(
      'title' => $title,
      'items' => get_field('product-content-indication-template-4')['image-list'],
      'text' => get_field('product-content-indication-template-4')['text'],
      'text-2' => get_field('product-content-indication-template-4')['text-2'],
      'text-list' => get_field('product-content-indication-template-4')['list-item'],

    ));
}


?>
