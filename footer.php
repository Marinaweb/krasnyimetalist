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

		<div class="site-info">
			<?php $logo = get_field('logo_img', 'option'); ?>
			<a href="/">
				<img src="<?php echo $logo['url']; ?>" alt="Logo image" />
				<?php 
					if (pll_current_language() == 'ru') {			
						echo '<h1>' . the_field('text_under_logo_ru', 'option') . '</h1>' ;
					} if (pll_current_language() == 'en') {
						echo '<h1>' . the_field('text_under_logo_ru', 'option') . '</h1>' ;
					}
				?>
			</a>
		</div><!-- .site-info -->

		<div class="footer_contacts">
			<div class="address">
				<i></i>
				<div class="block_text">
					<p>
						<?php 
							if (pll_current_language() == 'ru') {			
								echo '<P>' . the_field('address_ru', 'option') . '</p>' ;
							} if (pll_current_language() == 'en') {
								echo '<p>' . the_field('address_en', 'option') . '</p>' ;
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
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
