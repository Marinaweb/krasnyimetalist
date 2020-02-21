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
				<?php the_content(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
