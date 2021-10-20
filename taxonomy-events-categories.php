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
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php get_template_part('template-parts/page-title', '', array('title' => 'Events')); ?>
    <?php get_template_part('template-parts/cat-menu', '', array(
      'taxonomy' => 'events-categories',
      'type' => 'events',
      )); ?>
      
    <div class="container produc__mb">
      <div class="row">
       <?php  $index = 1; ?>
      <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

      <?php if($index == 1) :?>
                <div class="col-12 events-page__full">
                  <?php get_template_part('template-parts/event', 'card-2');?>
                </div>
              <?php endif;?>

              <div class="col-12 col-l-4 events-page__item <?php if($index == 1){ echo 'events-page__entry'; }?>">
                <?php get_template_part('template-parts/event', 'card-1');?>
              </div>

        <?php $index++;} } else { ?>
        <p>No events</p>
        <?php }   
      ?>

      </div>
		</div>
		
<?php get_template_part('template-parts/pagination');?>

   



    


  </main><!-- #main -->
<?php get_template_part('template-parts/company-list'); ?>
<?php get_template_part('template-parts/contact-us-block'); ?>

<?php
get_footer();
