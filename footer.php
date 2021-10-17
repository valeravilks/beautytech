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
									Mon-Fri: 10:00AM - 6:00PM
								</div>
								<hr class="f-contact__hr">
								<div class="f-contact__header">
									Phone
								</div>
								<div class="f-contact__text">
									+49 (0) 2373 395 30 21
								</div>
								<hr class="f-contact__hr">
								<div class="f-contact__header">
									Address
								</div>
								<div class="f-contact__text">
									Schwitterberg 111 58708 Menden, Germany
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
							© Beauty Tech
						</div>
						<div class="footer-bottom__text">
							Privacy Policy
						</div>
						<div class="footer-bottom__text">
							Site map
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
