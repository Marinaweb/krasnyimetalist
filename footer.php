<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krasnyimetalist
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="center footer_inner clearfix">

			<div class="site-info">
				<?php $logo = get_field('logo_img', 'option'); ?>
				<a href="/">
					<img src="<?php echo $logo['url']; ?>" alt="Logo image" />
					<h4>
						<?php 
							if (pll_current_language() == 'ru') {			
								the_field('text_under_logo_ru', 'option');
							} if (pll_current_language() == 'en') {
								the_field('text_under_logo_en', 'option');
							}
						?>
					</h4>
				</a>
			</div><!-- .site-info -->

			<div class="footer_contacts">
				<div class="footer_contacts_inner">

					<div class="address">
						<i></i>
						<div class="block_text">
							<p>
								<?php 
									if (pll_current_language() == 'ru') {			
										the_field('address_ru', 'option');
									} if (pll_current_language() == 'en') {
										the_field('address_en', 'option');
									}
								?>
							</p>
						</div>
					</div><!--	.address-->
					<div class="footer_tel">
						<i></i>
						<div class="block_text">
							<a href="tel:<?php the_field('tel1', 'option') ?>"><?php the_field('tel1', 'option') ?></a>
							<a href="tel:<?php the_field('tel2', 'option') ?>"><?php the_field('tel2', 'option') ?></a>
						</div>
					</div><!--.footer_tel -->
					<div class="footer_email">
						<i></i>
						<div class="block_text">
							<a href="mailto:<?php the_field('e-mail', 'option') ?>"><?php the_field('e-mail', 'option') ?></a>
						</div>
					</div><!-- .footer_email -->

				  </div><!--.footer_contacts_inner -->

			</div><!--.footer_contacts -->

			<div class="footer_menu">

				<nav class="main-navigation-footer">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- .main-navigation-footer -->

			</div><!--.footer_menu -->

		 </div><!--.footer_inner -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
