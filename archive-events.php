<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeautyTech
 */

get_header();
?>

	<main id="primary" class="site-main events-page">
    <div class="container">
			<div class="events-page__title">
				Events
			</div>
		</div> 
    <div class="events-page__top">
      <?php get_template_part('template-parts/cat-menu', '', array(
        'taxonomy' => 'events-categories',
        'type' => 'events',
        'active' => 'all'
        )); ?>
    </div> 
    <div class="container produc__mb">
      <div class="swiper js-event-list">
        <div class="swiper-wrapper">
        <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
            <div class="swiper-slide events-page__item">
              <?php get_template_part('template-parts/event', 'card-1');?>
            </div>

            <?php $index++;} } else { ?>
            <p>No events</p>
            <?php }   
            ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
		</div>


</main><!-- #main -->

<?php
get_footer();