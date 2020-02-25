<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php $cat_bg = get_field('product_bg', 'option'); ?>	
			<header class="page-header archive_header" style="background-image: url(<?php echo $cat_bg['url']; ?>);">
				<div class="center">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<ul class="breadcrumbs">
						<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="product_wrap center clearfix">

				<article class="single_product_content products">
					<?php the_post(); ?>
					<?php the_content(); ?>
				 </article><!--.single_product_content -->
				
				<?php get_sidebar(); ?>
				
			</div><!--.product_wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
