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
        <div class="ip-page__flexible fl">
          <div class="container">
            <div class="ip-page__title5">
              <?php the_sub_field('title'); ?>
            </div>
            <hr class="ip-page__hr5">
            <?php if(have_rows('container')):?>
              <?php while(have_rows('container')): the_row(); ?>
                <?php if(get_row_layout() == 'title+content'): ?>
                  <div class="fl__tc">
                    <?php if(get_sub_field('title')):?>
                      <div class="fl__title">
                        <?php the_sub_field('title');?>
                      </div>
                      <hr class="fl__hr">
                      
                      <?php if(have_rows('conent')) : ?>
                        <?php while(have_rows('conent')): the_row(); ?>
                          <?php if(get_row_layout() == 'title_content') :?>
                            <div class="fl__bl2">
                              <div class="row">
                                <div class="col-12 col-l-6">
                                  <div class="fl__t2">
                                    <?php the_sub_field('title_left')?>
                                  </div>
                                  <div class="fl__tx2">
                                    <?php the_sub_field('content_left')?>
                                  </div>
                                </div>
                                <div class="col-12 col-l-6">
                                  <div class="fl__t2">
                                    <?php the_sub_field('title_right')?>
                                  </div>
                                  <div class="fl__tx2">
                                    <?php the_sub_field('content_right')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php elseif(get_row_layout() == 'content') :?>
                            <div class="fl__bl2">
                              <div class="row">
                                <div class="col-12 col-l-6">
                                  <div class="fl__tx2">
                                    <?php the_sub_field('content_left')?>
                                  </div>
                                </div>
                                <div class="col-12 col-l-6">
                                  <div class="fl__tx2">
                                    <?php the_sub_field('content_right')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php endif; ?>
                      
                      
                        <?php endwhile; ?>
                      <?php endif; ?>



                    <?php endif;?>
                  </div>
                <?php elseif(get_row_layout() == 'title+content+contact'): ?>
                  <div class="fl__tc">
                    <?php if(get_sub_field('title')):?>
                     
                        <?php $title = get_sub_field('title');?>
                        <?php $title2 = get_sub_field('title_2');?>
                     
          
                      
                      <?php if(have_rows('conent')) : ?>
                        <?php while(have_rows('conent')): the_row(); ?>
                          <?php if(get_row_layout() == 'title_content_contact') :?>
                            <div class="fl__bl2">
                              <div class="row">
                                <div class="col-12 col-l-6">
                                  <div class="fl__title">
                                    <?php echo $title;?>
                                  </div>
                                  <hr class="fl__hr">
                                  <div class="fl__tx2 fl__tx22">
                                    <?php the_sub_field('content_left')?>
                                  </div>
                                  <div class="row">
                                    <div class="col-12 col-l-4">
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[0]['name']; ?>
                                      </div>
                                      <div class="fl__tx4">
                                        <?php echo get_sub_field('contact')[0]['value']; ?>
                                      </div>
                                    </div>
                                    <div class="col-12 offset-l-2 col-l-6">
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[1]['name']; ?><?php echo get_sub_field('contact')[1]['value']; ?>
                                      </div>
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[2]['name']; ?><?php echo get_sub_field('contact')[2]['value']; ?>
                                      </div>
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[3]['name']; ?><?php echo get_sub_field('contact')[3]['value']; ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-l-6">
                                  <div class="fl__title">
                                    <?php echo $title2;?>
                                  </div>
                                  <hr class="fl__hr">
                                  <div class="fl__tx2 fl__tx22">
                                    <?php the_sub_field('content_right')?>
                                  </div>
                                  <div class="row">
                                    <div class="col-12 col-l-4">
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[0]['name']; ?>
                                      </div>
                                      <div class="fl__tx4">
                                        <?php echo get_sub_field('contact')[0]['value']; ?>
                                      </div>
                                    </div>
                                    <div class="col-12 offset-l-2 col-l-6">
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[1]['name']; ?><?php echo get_sub_field('contact')[1]['value']; ?>
                                      </div>
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[2]['name']; ?><?php echo get_sub_field('contact')[2]['value']; ?>
                                      </div>
                                      <div class="fl__tx3">
                                        <?php echo get_sub_field('contact')[3]['name']; ?><?php echo get_sub_field('contact')[3]['value']; ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      
                          <?php endif; ?>
                      
                      
                        <?php endwhile; ?>
                      <?php endif; ?>



                    <?php endif;?>
                  </div>
                
                <?php endif;?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    
		<?php get_template_part('template-parts/contact-us-block'); ?>
    <?php get_template_part('template-parts/company-list'); ?>
	</main><!-- #main -->
<?php
get_footer();
