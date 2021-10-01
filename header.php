<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyTech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'beautytech' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__container">
			<a href="<?php bloginfo('url'); ?>" class="site-header__logo logo">
				<img src="<?php the_field('logo', 'option'); ?>" srcset="<?php the_field('logo-retina', 'option'); ?> 2x" alt="logo" class="logo__img">	
			</a>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'beautytech' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<?php 
			$link = get_field('contact-page-link', 'option');
			
			if($link): ?>
			<a 
				href="<?php echo esc_url($link['url']) ?>" 
				class="link link-primary"
			>
				<?php echo esc_html($link['title'])?>
			</a>
			<a href="#" class="link link-outline">
				Link Outline
			</a>
			<a href="#" class="link link-plus">
				learn more
			</a>
			<?php endif; ?>
		</div>

	</header><!-- #masthead -->
