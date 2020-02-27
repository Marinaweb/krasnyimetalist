<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php the_post(); ?>
		<?php $cat_bg_1 = get_field('cat_bg_1', 'option'); ?>
			<header class="page-header archive_header" style="background-image: url(<?php echo $cat_bg_1['url']; ?> );">
				<div class="center">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<ul class="breadcrumbs">
						<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="content_simple_page">
				<?php the_content(); ?>
			 </div><!--.content_simple_page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
