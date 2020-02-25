<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package krasnyimetalist
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<?php $cat_bg = get_field('cat_bg', 'option'); ?>	
				<header class="page-header archive_header" style="background-image: url(<?php echo $cat_bg['url']; ?>);">
					<div class="center">
						<h1 class="page-title"><?php single_cat_title(); ?></h1>
						<ul class="breadcrumbs">
							<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
						</ul>
					</div>
				</header><!-- .page-header -->

				<div class="product_wrap center clearfix">

					<?php get_sidebar(); ?>

					<div class="products">

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
						?>

							<div class="product_item">
								<a href="<?php the_permalink(); ?>">
									<div class="product_img">
										<div class="overlay"><span>+</span></div>
										<?php the_post_thumbnail('medium'); ?>
									</div>
									<h3><?php the_title(); ?></h3>
								</a>
							</div><!-- .product_item -->

						<?php endwhile; ?>

							<div class="row-pagination">
								<?php the_posts_pagination($args);?> 
							</div>

						</div><!--.products -->

						<?php else :
						get_template_part( 'template-parts/content', 'none' ); ?>

				</div><!-- .product_wrap -->

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
