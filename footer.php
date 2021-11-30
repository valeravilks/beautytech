	<footer id="colophon" class="site-footer footer">
			<div class="footer__top footer-top">
				<div class="footer-top__container container">
						<div class="footer-top__title">
							<?php the_field('fm_title', 'option');?>
						</div>
						<div class="footer-top__text">
							<?php the_field('fm_text', 'option');?>
						</div>
						<a href="#" class="footer-top__link">
							<?php the_field('fm_btn', 'option');?>
						</a>
				</div>
			</div>
			<div class="footer__middle footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-12 col-l-2">
							<?php get_template_part('template-parts/logo', '', array('class' => 'footer-middle__logo'))?>
						</div>
						<div class="col-8 col-l-8 footer-middle__col">
							<nav  class="footer-middle__nav">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu-footer',
									)
								);
								?>
							</nav>
						</div>
						<div class="col-4 col-l-2 footer-middle__col-2">
							<div class="footer-middle__soc">
								<?php get_template_part('template-parts/soc-link'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom footer-bottom">
				<div class="footer-bottom__container container">
						<div class="footer-bottom__text">
							<?php the_field('f_copyright', 'option'); ?>
						</div>
						<div class="footer-bottom__text">
							<a href="<?php echo get_field('f_imprint', 'option')['url']; ?>" class="footer-bottom__link">
								<?php echo get_field('f_imprint', 'option')['title']; ?>
							</a>
						</div>
						<div class="footer-bottom__text">
							<a href="<?php echo get_field('f_privacy_policy_link', 'option')['url']; ?>" class="footer-bottom__link">
								<?php echo get_field('f_privacy_policy_link', 'option')['title']; ?>
							</a>
						</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php get_template_part('template-parts/pop-up'); ?>
<?php wp_footer(); ?>
</body>
</html>
