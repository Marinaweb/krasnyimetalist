<?php
/**
 * The template for displaying all single news posts
 *
 */

get_header();
the_post();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">								
			<header class="single-news-header animated fadeInUp ">
				<div class="center">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<ul class="breadcrumbs">
						<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="single_news_content center">
				<p class="news_time animated fadeInUp"><?php echo the_date('n F Y'); ?></p>
				<?php the_content(); ?>							
			</div><!--.product_wrap -->
			
			<div class="last_news animated fadeInUp ">
				<div class="last_news_inner">
					<h3 class="last_news_title">
						<?php 
							if (pll_current_language() == 'ru') {			
								echo "Последние новости"; 
							} if (pll_current_language() == 'en') {
								echo "Last news"; 
							}
						?>
					</h3>
					<?php echo do_shortcode('[news]'); ?>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
