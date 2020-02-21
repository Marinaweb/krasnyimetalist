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
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php $logo = get_field('logo_img', 'option'); ?>
			<a href="/">
				<img src="<?php echo $logo['url']; ?>" alt="Logo image" />
				<?php 
					if (pll_current_language() == 'ru') {			
						echo '<h1>' . the_field('text_under_logo_ru', 'option') . '</h1>' ;
					} if (pll_current_language() == 'en') {
						echo '<h1>' . the_field('text_under_logo_ru', 'option') . '</h1>' ;
					}
				?>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="languages">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		 </div><!--.languages -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
