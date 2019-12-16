<?php 

## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
	// add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	if ( !is_admin() ) wp_deregister_script('jquery');
	remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
	remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
	remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
	remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
	remove_action('wp_head','wp_generator');  // скрыть версию wordpress

	remove_action('wp_head','start_post_rel_link',10,0);
	remove_action('wp_head','index_rel_link');
	remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );

	remove_action( 'wp_head', 'rest_output_link_wp_head');
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
	remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	remove_action( 'wp_head','wp_syntax_head');

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}

add_theme_support( 'post-thumbnails' );

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/* include custom child theme css -------------------*/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'libsstyle', get_stylesheet_directory_uri() . '/src/css/libs.min.css', array(),'1.8.0');
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/src/css/main.min.css', array(),'2.1.0');
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css', array());
    
}

function remove_styles () {
    wp_deregister_style ('instag-slider');
    wp_deregister_style ('contact-form-7');
}
add_action ('wp_print_styles','remove_styles',100);

/* include custom child theme js -------------------------*/
add_action( 'wp_enqueue_scripts', 'enqueue_script_to_child_theme', 0, 1 );
function enqueue_script_to_child_theme() {
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'libs_script', get_stylesheet_directory_uri() . '/src/js/libs.min.js', array( 'jquery' ), '1.9.0', true);
    wp_enqueue_script( 'main_script', get_stylesheet_directory_uri() . '/src/js/common.min.js', array( 'jquery' ), '2.1.0', true);

    wp_localize_script( 'main_script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

// function mihdan_add_async_attribute( $tag, $handle ) {
//   $handles = array(
//     'libs_script',
//     'main_script',
//   );
//    foreach( $handles as $async_script) {
//       if ( $defer_script === $handle ) {
//          return str_replace( ' src', ' async="async" src', $tag );
//       }
//    }
//    return $tag;
// }
// add_filter( 'script_loader_tag', 'mihdan_add_async_attribute', 10, 2 );

/*====languege strings======*/
pll_register_string( 'reviews', 'Отзывы' );
pll_register_string( 'btn', 'запись на прием' );
pll_register_string( 'btn-read-more', 'читать далее' );
pll_register_string( 'adress1', 'Харьковское шоссе,121' );
pll_register_string( 'adress2', 'Стретенская,4/13' );
pll_register_string( 'advantages', 'Приемущества' );
pll_register_string( 'proctology', 'Проктология' );
pll_register_string( 'oncology', 'Онкология' );
pll_register_string( 'surgery', 'Общая хирургия' );
pll_register_string( 'my_insta', 'Мой Instagram' );
pll_register_string( 'search_result', 'Результат поиска' );
pll_register_string( 'articles', 'Статьи по теме' );


function custom_widgets_init() {
	register_sidebar( array(
	    'name'          => 'Contact page form',
	    'id'            => 'contact-page-form',
	    'before_widget' => '',
	    'after_widget'  => '',
	    'before_title'  => '',
	    'after_title'   => '',
	) );
};
add_action( 'widgets_init', 'custom_widgets_init' );



function create_theme_menus() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'create_theme_menus' );

/*==== add class to each elements and links of menu items=====*/
add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	$classes[] = 'nav__item';

	return $classes;
}
function add_specific_menu_location_atts( $atts, $item, $args ) {
    if( $args->theme_location == 'top_menu' ) {
      $atts['class'] = 'nav__link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

/*=======breadcrumbs======*/
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow"><span class="icon-home"></span></a>';
    if (is_category() || is_single() || is_page()) {
        // echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        // the_category(' &bull; ');
            // if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            // }
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo pll_e('Результат поиска ');
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

function create_video_type() {
    register_post_type( 'video_gallery',
        array(
            'labels' => array(
                'name' => __( 'Video Gallery' ),
                'singular_name' => __( 'Video Gallery' )
            ),
            'description' => 'Video Gallery',
            'public' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-format-video',
            'supports' => array( 
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
                'page-attributes',
                'post-formats',
            ),
        )
    );
}
add_action( 'init', 'create_video_type', 0 );


?>
