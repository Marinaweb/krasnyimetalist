<?php
/**
 * The sidebar containing the main widget area
 *
 */



if ( is_archive() ) {
	echo '<aside id="sidebar_category" class="widget-area">';
		echo '<div class="aside_inner">';
			dynamic_sidebar( 'sidebar-2' ); 
		echo '</div>';
	echo '</aside>';
}



if ( is_single( $post ) ) { ?>
	<aside id="sidebar_single" class="widget-area">
		<div class="aside_inner">

			<section class="widget related_widget">
				<?php
				global $post;
				$related_tax = 'category';
				$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
				$t = get_the_id();
				$args = array(
					'posts_per_page' => 3, 
					'post__not_in' => array($t),
					'tax_query' => array(
						array(
							'taxonomy' => $related_tax,
							'field' => 'id',
							'include_children' => false,
							'terms' => $cats_tags_or_taxes,
							'operator' => 'IN' 
						)
					)
				);
				$custom_query = new WP_Query( $args );
				if( $custom_query->have_posts() ) : ?>

					<h2 class="widget-title">
						<?php 
							if (pll_current_language() == 'ru') {			
								echo "Похожие товары";
							} if (pll_current_language() == 'en') {
								echo "Related products";
							}
						?>
					</h2>

					<div class="related_wrap">

					<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

						<div class="thumb_item one_post" >
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="product_img">
									<div class="overlay"><span>+</span></div>
									<?php the_post_thumbnail('medium'); ?>
								</div>
							</a>
						</div><!-- .one_post -->
				
					<?php endwhile;
					echo '</div>';
					endif;
					wp_reset_postdata(); 
					?>

			 </section> <!--.related_widget -->

			<?php dynamic_sidebar( 'sidebar-3' ); ?>

		</div><!-- .aside_inner -->
	</aside>
<?php } ?>