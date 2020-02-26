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


if ( is_single( $post ) ) {
	echo '<aside id="sidebar_single" class="widget-area">';
		echo '<div class="aside_inner">';
			dynamic_sidebar( 'sidebar-3' ); 
		echo '</div>';
	echo '</aside>';
} 