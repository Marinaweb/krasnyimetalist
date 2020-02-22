<?php
/**
 * The template for displaying front page
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php the_post(); ?>

			<div class="content_front_page">

				<?php 
					if (pll_current_language() == 'ru') {			
						echo do_shortcode('[rev_slider alias="home-ru"]'); 
					} if (pll_current_language() == 'en') {
						echo do_shortcode('[rev_slider alias="home-en"]'); 
					}
				?>

				<?php the_content(); ?>
			 </div><!--.content_front_page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
