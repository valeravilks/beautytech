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

	<main id="primary" class="site-main ip-page">
  <?php get_template_part('template-parts/breadcrumbs'); ?>
    <div class="ip-page_box1">
      <div class="container">
        <h1 class="ip-page__title">
          <span class="ip-page__color"><?php echo get_field('imprint_color'); ?></span><br>
          <span class="ip-page__title1"><?php echo get_field('imprint_title'); ?></span>
        </h1>
        <hr class="ip-page__hr">
        <div class="ip-page__title2">
          <?php echo get_field('imprint_intro')['title']; ?>
        </div>
        <div class="ip-page__text">
          <?php echo get_field('imprint_intro')['text']; ?>
        </div>
        <div class="ip-page__title3">
          <?php echo get_field('imprint_intro')['title_2']; ?>
        </div>
        <div class="row">
          <div class="col-6 col-l-2">
            <div class="ip-page__bl1">
              <div class="ip-page__name">
                <?php echo get_field('imprint_intro')['contact']['item_1']['name']; ?>
              </div>
              <div class="ip-page__value">
                <?php echo get_field('imprint_intro')['contact']['item_1']['value']; ?>
              </div>
              <hr class="ip-page__hr2">
            </div>
          </div>
          <div class="col-6 offset-l-1 col-l-3">
            <div class="ip-page__bl1">
              <div class="ip-page__name">
                <?php echo get_field('imprint_intro')['contact']['item_2']['name']; ?>
              </div>
              <div class="ip-page__value">
                <?php echo get_field('imprint_intro')['contact']['item_2']['value']; ?>
              </div>
              <hr class="ip-page__hr2">
            </div>
          </div>
        </div>
        <div class="row ip-page__bl2">
          <div class="col-6 col-l-2">
            <div class="ip-page__bl1">
              <div class="ip-page__name">
                <?php echo get_field('imprint_intro')['contact']['item_3']['name']; ?>
              </div>
              <div class="ip-page__value">
                <?php echo get_field('imprint_intro')['contact']['item_3']['value']; ?>
              </div>
            </div>
          </div>
          <div class="col-6 offset-l-1 col-l-3">
            <div class="ip-page__bl1">
              <div class="ip-page__name">
                <?php echo get_field('imprint_intro')['contact']['item_4']['name']; ?>
              </div>
              <div class="ip-page__value">
                <?php echo get_field('imprint_intro')['contact']['item_4']['value']; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="ip-page__bl3">
          <div class="row">
            <div class="col-12 col-l-6">
              <div class="ip-page__text4">
                <?php echo get_field('imprint_intro')['text_2']; ?>
              </div>
              <div class="ip-page__text5">
                <?php echo get_field('imprint_intro')['text_3']; ?>
              </div>
            </div>
            <div class="col-12 col-l-6">
              <div class="ip-page__text6">
                <?php echo get_field('imprint_intro')['text_4']; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="ip-page__bl4">
          <div class="ip-page__text7">
            <?php echo get_field('imprint_intro')['title_3']; ?>
          </div>
          <div class="ip-page__text8">
            <?php echo get_field('imprint_intro')['text_5']; ?>
          </div>
          <div class="ip-page__bl5">
            <div class="row">
              <?php foreach(get_field('imprint_intro')['text_items'] as $item): ?>
              <div class="col-6">
                <div class="ip-page__el">
                  <?php echo $item['item']?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if( have_rows('imprint__main') ): ?>
        <?php while( have_rows('imprint__main') ): the_row(); 
            ?>
        <div class="ip-page__flexible">
          <div class="container">
            <div class="ip-page__title5">
              <?php the_sub_field('title'); ?>
            </div>
            <hr class="ip-page__hr5">
          </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    
		<?php get_template_part('template-parts/contact-us-block'); ?>
	</main><!-- #main -->
<?php
get_footer();
