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
  <div class="container">
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
    <select name="all" class="category-menu__select js-cat-menu-select">
      <option value="all" data-link="<?php echo get_post_type_archive_link($args['type'])?>" <?php echo $allActiveMob;?> >
        All
      </option>
      <?php 
      if( $categories ) :
        foreach( $categories as $cat ) : 
          $selected = '';
          if(get_queried_object()->term_id == $cat->term_taxonomy_id) {
            $selected = 'selected';
          }
          ?>
          <option value="opt" data-link="<?php echo get_category_link($cat->term_taxonomy_id)?>" <?php echo $selected;?> >
            <?php echo $cat->name;?>
          </option>
        <?php 
        endforeach;
      endif; ?>
    </select>
  </div>
</div>