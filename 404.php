<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BeautyTech
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<div class="container">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'beautytech' ); ?></h1>
				</div>
			</header><!-- .page-header -->

			<div class="page-content">
				

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
	<?php get_template_part('template-parts/company-list'); ?>
	<?php get_template_part('template-parts/contact-us-block'); ?>
<?php
get_footer();
