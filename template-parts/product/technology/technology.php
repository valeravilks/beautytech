<?php 

$title = get_field('t-title');
$templateName = get_field('t-templ');

switch($templateName) {
  case 'Template 1':
    get_template_part('template-parts/product/technology/template-1', '', array(
      'title' => $title,
      'data' => get_field('t1')
    ));
}

?>