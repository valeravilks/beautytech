	<footer id="colophon" class="site-footer footer">
			<div class="footer__top footer-top">
				<div class="container">
					<div class="row">
						<div class="col-12 col-l-3">
							<hr class="footer-top__hr-1">
							<?php get_template_part('template-parts/logo', '', array('class' => 'footer-top__logo'))?>
							<?php get_template_part('template-parts/soc-link', '', array('class' => 'footer-top__soc')); ?>
						</div>
						<div class="col-12 col-l-4">
							<div class="footer-top__header">
								Products
							</div>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-products',
									'container_class'        => 'footer-top__menu footer-top__menu-products',
								)
							);
							?>
						</div>
						<div class="col-12 col-l-2">
							<div class="footer-top__header">
								Company
							</div>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-company',
									'container_class'        => 'footer-top__menu footer-top__menu-company',
								)
							);
							?>
						</div>
						<div class="col-12 col-l-3">
							<div class="f-contact">
								<div class="f-contact__header">
									Support service schedule
								</div>
								<div class="f-contact__text">
									<?php the_field('fm_support', 'option'); ?>
								</div>
								<hr class="f-contact__hr">
								<div class="f-contact__header">
									Phone
								</div>
								<div class="f-contact__text">
									<a href="tel:<?php the_field('fm_phone', 'option'); ?>" class="f-contact__phone">
										<?php the_field('fm_phone', 'option'); ?>
									</a>
								</div>
								<hr class="f-contact__hr">
								<div class="f-contact__header">
									Address
								</div>
								<div class="f-contact__text">
									<?php the_field('fm_address', 'option'); ?>
								</div>
							</div>
							<?php get_template_part('template-parts/soc-link', '', array('class' => 'f-contact__soc')); ?>
							<hr class="f-contact__hr-2">
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
							<a href="<?php echo get_field('f_privacy_policy_link', 'option')['url']; ?>" class="footer-bottom__link">
								<?php echo get_field('f_privacy_policy_link', 'option')['title']; ?>
							</a>
						</div>
						<div class="footer-bottom__text">
							<a href="<?php echo get_field('f_site_map', 'option')['url']; ?>" class="footer-bottom__link">
								<?php echo get_field('f_site_map', 'option')['title']; ?>
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
