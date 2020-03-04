<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 				
				$cat_bg_1 = get_field('cat_bg_1', 'option'); 
				$cat_bg_2 = get_field('cat_bg_2', 'option'); 
				$cat_bg_3 = get_field('cat_bg_3', 'option'); 
			?>	
							
			<header class="page-header archive_header <?php if ( in_category(array(17, 19))) { echo 'no_after'; } ?>" 
					style="background-image: url(
					<?php 
						if (  in_category(array(13, 15, 33, 37, 41, 53, 45, 49, 35, 39, 51, 47, 43, 55) ) ) {  echo $cat_bg_1['url']; } 
						elseif (  in_category(array(17, 19) ) ) {  echo $cat_bg_2['url']; } 
						elseif (  in_category(array(21, 24) ) ) {  echo $cat_bg_3['url']; } 
					?>
				);">

				<div class="center">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<ul class="breadcrumbs">
						<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="product_wrap center clearfix">
				<?php get_sidebar(); ?>
				<article class="single_product_content products">
					<?php the_post(); ?>
					<?php the_content(); ?>
				 </article><!--.single_product_content -->
							
			</div><!--.product_wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
