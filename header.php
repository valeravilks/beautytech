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
			<?php get_template_part('template-parts/logo', '', array('class' => 'site-header__logo'))?>
			<nav id="site-navigation" class="site-header__menu main-navigation">
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
				class="site-header__contact link link-outline"
			>
				<?php echo esc_html($link['title'])?>
			</a>	
			<?php endif; ?>
			<img class="site-header__mobile-menu"src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-menu.svg" alt="icon-menu">
			<img class="site-header__mobile-contact"src="<?php echo get_template_directory_uri(); ?>/img/svg/icon-mobile-menu.svg" alt="icon-menu">
		</div>

	</header><!-- #masthead -->