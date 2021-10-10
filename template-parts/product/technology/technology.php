<?php 

$title = get_field('t-title');
$templateName = get_field('t-templ');

switch($templateName) {
  case 'Template 1':
    get_template_part('template-parts/product/technology/template-1', '', array(
      'title' => $title,
      'data' => get_field('t1')
    ));
  case 'Template 2':
    get_template_part('template-parts/product/technology/template-2', '', array(
      'title' => $title,
      'data' => get_field('t2')
    ));
  case 'Template 3':
    get_template_part('template-parts/product/technology/template-3', '', array(
      'title' => $title,
      'data' => get_field('t3')
    ));
  case 'Template 4':
    get_template_part('template-parts/product/technology/template-4', '', array(
      'title' => $title,
      'data' => get_field('t4')
    ));
  case 'Template 5':
    get_template_part('template-parts/product/technology/template-5', '', array(
      'title' => $title,
      'data' => get_field('t5')
    ));
  case 'Template 6':
    get_template_part('template-parts/product/technology/template-6', '', array(
      'title' => $title,
      'data' => get_field('t6')
    ));
}

?>