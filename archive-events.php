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

    <div class="container produc__mb">
      <div class="row">
       <?php  $index = 1; ?>
      <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>


              <div class="col-12 col-l-4 events-page__item <?php if($index == 1){ echo 'events-page__entry'; }?>">
                <?php get_template_part('template-parts/event', 'card-1');?>
              </div>

        <?php $index++;} } else { ?>
        <p>No events</p>
        <?php }   
      ?>

      </div>
		</div>


</main><!-- #main -->

<?php
get_footer();
