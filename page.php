<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php the_post(); ?>

			<h1 class="h1_title"><?php the_title(); ?></h1>

			<div class="content_simple_page">
				<?php the_content(); ?>
			 </div><!--.content_simple_page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
