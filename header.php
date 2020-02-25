<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="header" class="site-header">

		<div class="center header_inner clearfix">

			<div class="site-branding animated fadeInUp animated-slow">
				<?php $logo = get_field('logo_img', 'option'); ?>
				<a href="/">
					<img src="<?php echo $logo['url']; ?>" alt="Logo image" />
					<h2>
						<?php 
							if (pll_current_language() == 'ru') {			
								the_field('text_under_logo_ru', 'option');
							} if (pll_current_language() == 'en') {
								the_field('text_under_logo_ru', 'option');
							}
						?>
					</h2>
				</a>
			</div><!-- .site-branding -->

			<div class="languages  animated fadeInUp animated-slow">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!--.languages -->

			<nav id="site-navigation" class="main-navigation animated fadeInUp animated-slow">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu', 
				) );
				?>
			</nav><!-- #site-navigation -->

		 </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
