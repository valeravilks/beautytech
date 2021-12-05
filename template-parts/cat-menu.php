<?php 

$categories = get_categories( [
	'taxonomy'     => $args['taxonomy'],
	'type'         => $args['type'],
	'child_of'     => 0,
	'parent'       => '',
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 0,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'pad_counts'   => false,
] );

$allActive = '';
$elActive = '';

if($args['active'] == 'all'){
  $allActive = 'category-menu__link-active';
  $allActiveMob = 'selected';
} 

?>
<div class="category-menu">
  <div class="container category-menu__container">
    <ul class="category-menu__list">
      <li class="category-menu__item">
        <a href="<?php echo get_post_type_archive_link($args['type'])?>" class="category-menu__link <?php echo $allActive?>">
          All
        </a>
      </li>
      <?php 
      if( $categories ) :
        foreach( $categories as $cat ) :
          $active = '';
          if(get_queried_object()->term_id == $cat->term_taxonomy_id) {
            $active = 'category-menu__link-active';
          }
        ?>
        <li class="category-menu__item">
          <a href="<?php echo get_category_link($cat->term_taxonomy_id)?>" 
             class="category-menu__link <?php echo $active?>">
            <?php echo $cat->name;?>
          </a>
        </li>
        <?php 
        endforeach;
      endif; ?>
    </ul>
    <div class="events-page__nav">
      <div class="events-page-prev"><</div>
      <div class="events-page-next">></div>
    </div>
  </div>
</div>