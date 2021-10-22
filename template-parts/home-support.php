<?php get_template_part('template-parts/h2-block', '', array(
			'description' => '',
			'h2' => get_field('maps_title', 'option'),
			// 'color' => 'white',
			'link' => '',
		));
?>
<div class="home-support">
  <div class="container">
    <div class="row home-support__block-1">
      <?php if(have_rows('items_location', 'option')) :?>
        <?php while(have_rows('items_location', 'option')) : the_row()?>
          <?php ?>
          <div class="col-6 col-l-3 <?php if(!get_sub_field('name')) {echo "home-support__mn";}?>">
            <?php if(get_sub_field('name')):?>
              <button 
                data-coor-1="<?php the_sub_field('сoordinate_1'); ?>" 
                data-coor-2="<?php the_sub_field('сoordinate_2'); ?>" 
                class="home-support__btn js-map-set">
                <?php the_sub_field('name');?>
              </button>
            <?php endif; ?>
          </div>
        <?php endwhile;?>
      <?php endif;?>
    </div>
    <div id="map"></div>
<!-- 
  <img src="https://beautytech.com/wp-content/uploads/2021/10/Rectangle-338.jpg" alt="" class="home-support__img"> -->
  </div>
</div>