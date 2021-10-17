<?php get_header(); ?>
	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/breadcrumbs'); ?>
		<?php get_template_part('template-parts/product', 'cover'); ?>
		<?php get_template_part('template-parts/product', 'menu'); ?>
		<?php get_template_part('template-parts/product', 'content-1'); ?>
		<?php get_template_part('template-parts/product/indications/indications'); ?>
		<?php get_template_part('template-parts/product/technology/technology'); ?>
		<?php get_template_part('template-parts/product', 'benefits'); ?>
		<?php get_template_part('template-parts/product', 'spec'); ?>
		<?php get_template_part('template-parts/product', 'result'); ?>
		<?php get_template_part('template-parts/product', 'testimonail'); ?>
		<?php get_template_part('template-parts/product', 'video'); ?>
		<?php get_template_part('template-parts/product', 'faq'); ?>
		<?php get_template_part('template-parts/home', 'support');?>
		<?php get_template_part('template-parts/contact-us-block'); ?>
		<?php get_template_part('template-parts/company-list'); ?>
	</main>
<?php
get_footer();
