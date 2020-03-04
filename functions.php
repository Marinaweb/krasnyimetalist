<?php
/**
 * krasnyimetalist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package krasnyimetalist
 */

if ( ! function_exists( 'krasnyimetalist_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function krasnyimetalist_setup() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'krasnyimetalist' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}
endif;
add_action( 'after_setup_theme', 'krasnyimetalist_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function krasnyimetalist_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'krasnyimetalist_content_width', 640 );
}
add_action( 'after_setup_theme', 'krasnyimetalist_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function krasnyimetalist_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Languages', 'krasnyimetalist' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'krasnyimetalist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Product category page', 'krasnyimetalist' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'krasnyimetalist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Single product page', 'krasnyimetalist' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'krasnyimetalist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'krasnyimetalist_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function krasnyimetalist_scripts() {
	wp_enqueue_style( 'krasnyimetalist-style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/layouts/custom.css' );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'krasnyimetalist_scripts' );




// CUSTOM SETTINGS

// ACF options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}

// Rename posts to "Продукты"
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
	$new = array(
		'name'                  => 'Продукты',
		'singular_name'         => 'Продукт',
		'add_new'               => 'Добавить продукт',
		'add_new_item'          => 'Добавить продукт',
		'edit_item'             => 'Редактировать продукт',
		'new_item'              => 'Новый продукт',
		'view_item'             => 'Просмотреть продукт',
		'search_items'          => 'Поиск продуктов',
		'not_found'             => 'Продукты не найдены.',
		'not_found_in_trash'    => 'Продукты в корзине не найдены.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все продукты',
		'archives'              => 'Архивы продуктов',
		'insert_into_item'      => 'Вставить в продукт',
		'uploaded_to_this_item' => 'Загруженные для этого продукта',
		'featured_image'        => 'Миниатюра продукт',
		'filter_items_list'     => 'Фильтровать список продуктов',
		'items_list_navigation' => 'Навигация по списку продуктов',
		'items_list'            => 'Список продуктов',
		'menu_name'             => 'Продукты',
		'name_admin_bar'        => 'Продукт', 
	);

	return (object) array_merge( (array) $labels, $new );
}

// CPT news
function news_custom_post_type (){

    $labels = array(
        'name' => 'Новости',
        'singular_name' => 'Новость',
        'add_new' => 'Добавить новость',
        'all_items' => 'Все новости',
        'add_new_item' => 'Добавить новость',
        'edit_item' => 'Редактировать новость',
        'new_item' => 'Новая новость',
        'view_item' => 'Просмотр новости',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
                'title',
				'custom-fields',
				'thumbnail',
				'editor',
				'excerpt'
            ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('news',$args); 
}
add_action('init','news_custom_post_type');



//  Add shortcode for news cpt to elementor
add_shortcode( 'news', 'news_posts', 100 );
function news_posts(){
	$args = array(
		'post_type' => 'news', 
		'orderby'   => 'date',
		'order'     => 'DESC',
		'posts_per_page' => 3
	);
	$loop = new WP_Query($args); 
	 $content = '';

	 if( $loop->have_posts() ){
	 $content .= '<div class="news_wrap clearfix">';
		while( $loop->have_posts() ){
		$loop->the_post();
			
			$content .= '<div class="news_item">';
				$content .= '<p class="time">' . get_the_date('n.m.Y') . '</p>';
				$content .= '<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
				$content .= '<div class="short_content"><p>' . get_the_excerpt() . '</p></div>';
				$content .= '<a class="more" href="' . get_the_permalink() . '">';
					if (pll_current_language() == 'ru') {			
						$content .=  'Подробнее' ;
					} if (pll_current_language() == 'en') {
						$content .=  'More' ;
					}
				$content .= '</a>';
			$content .= '</div>';
			
		}
		
	 $content .= '</div>';
	 }
 
 return $content;
}



