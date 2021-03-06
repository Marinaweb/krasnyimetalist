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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="header" class="site-header <?php if ( !is_front_page() ) { echo 'common_header'; } ?>">

		<div class="center header_inner clearfix">

			<div class="site-branding animated fadeInUp animated-slow">
				<?php
				  $logo = get_field('logo_img', 'option'); 
				  $logo_common = get_field('logo_img_common', 'option'); 
				?>

				<a href="<?php echo home_url(); ?>">
					<img src="<?php if ( is_front_page() ) { echo $logo['url']; } else { echo $logo_common['url']; } ?>" alt="Logo image" />
					<h2>
						<?php 
							if (pll_current_language() == 'ru') {			
								the_field('text_under_logo_ru', 'option');
							} if (pll_current_language() == 'en') {
								the_field('text_under_logo_en', 'option');
							}
						?>
					</h2>
				</a>
			</div><!-- .site-branding -->

			<div class="languages  animated fadeInUp animated-slow">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!--.languages -->

			<div class="menu_mob_icon animated fadeInUp">
				<span></span>
				<span></span>
				<span></span>
			</div>
			
			<nav id="site-navigation" class="main-navigation animated fadeInUp animated-slow">
				<i class="close">X</i>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu', 
				) );
				?>
			</nav><!-- #site-navigation -->

		 </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if ( !is_front_page() ) { echo 'common_content'; } ?>">
