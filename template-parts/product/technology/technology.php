<?php 

$title = get_field('t-title');
$templateName = get_field('t-templ');

switch($templateName) {
  case 'Template 1':
    get_template_part('template-parts/product/technology/template-1', '', array(
      'title' => $title,
      'data' => get_field('t1')
    ));
    break;
  case 'Template 2':
    get_template_part('template-parts/product/technology/template-2', '', array(
      'title' => $title,
      'data' => get_field('t2')
    ));
    break;
  case 'Template 3':
    get_template_part('template-parts/product/technology/template-3', '', array(
      'title' => $title,
      'data' => get_field('t3')
    ));
    break;
  case 'Template 4':
    get_template_part('template-parts/product/technology/template-4', '', array(
      'title' => $title,
      'data' => get_field('t4')
    ));
    break;
  case 'Template 5':
    get_template_part('template-parts/product/technology/template-5', '', array(
      'title' => $title,
      'data' => get_field('t5')
    ));
    break;
  case 'Template 6':
    get_template_part('template-parts/product/technology/template-6', '', array(
      'title' => $title,
      'data' => get_field('t6')
    ));
    break;
  case 'Template 7':
    get_template_part('template-parts/product/technology/template-7', '', array(
      'title' => $title,
      'data' => get_field('t7')
    ));
    break;
  case 'Template 8':
    get_template_part('template-parts/product/technology/template-8', '', array(
      'title' => $title,
      'data' => get_field('t8')
    ));
    break;
  case 'Template 9':
    get_template_part('template-parts/product/technology/template-9', '', array(
      'title' => $title,
      'data' => get_field('t9')
    ));
    break;
  case 'Template 10':
    get_template_part('template-parts/product/technology/template-10', '', array(
      'title' => $title,
      'data' => get_field('t10')
    ));
    break;
  case 'Template 11':
    get_template_part('template-parts/product/technology/template-11', '', array(
      'title' => $title,
      'data' => get_field('t11')
    ));
    break;
  case 'Template 12':
    get_template_part('template-parts/product/technology/template-12', '', array(
      'title' => $title,
      'data' => get_field('t12')
    ));
    break;
}

?>