<?php 

## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

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

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/* include custom child theme css -------------------*/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'libsstyle', get_stylesheet_directory_uri() . '/src/css/libs.min.css', array(),'1.8.0', true);
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/src/css/main.min.css', array(),'1.8.0', true);
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css', array());
}

/* include custom child theme js -------------------------*/
add_action( 'wp_enqueue_scripts', 'enqueue_script_to_child_theme', 0, 1 );
function enqueue_script_to_child_theme() {
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'libs_script', get_stylesheet_directory_uri() . '/src/js/libs.min.js', array( 'jquery' ), '1.8.0', true);
    wp_enqueue_script( 'main_script', get_stylesheet_directory_uri() . '/src/js/common.min.js', array( 'jquery' ), '1.8.0', true);
}


pll_register_string( 'menu1', 'о нас' );
pll_register_string( 'menu6', 'локации' );
pll_register_string( 'menu2', 'услуги' );
pll_register_string( 'menu3', 'портфолио' );
pll_register_string( 'menu4', 'команда' );
pll_register_string( 'menu5', 'контакты' );
pll_register_string( 'title', 'Архитектурная мастерская' );
pll_register_string( 'title-name', 'ектон' );
pll_register_string( 'button1', 'напишите нам' );
pll_register_string( 'contact_us', 'Свяжитесь с нами' );
pll_register_string( 'write_us', 'Или напишите нам' );
pll_register_string( 'adress', 'г.Киев, Чеховский переулок, дом 3, офис 3' );
pll_register_string( 'name', 'Имя' );
pll_register_string( 'phone', 'Номер телефона' );
pll_register_string( 'mess_text', 'Текст сообщения' );
pll_register_string( 'send', 'Отправить' );
pll_register_string( 'name1', 'Вакула Александр Григорьевич' );
pll_register_string( 'prof1', 'Директор, ведущий архитектор' );
pll_register_string( 'name2', 'Майстер Алексей Александрович' );
pll_register_string( 'prof2', 'Ведущий архитектор' );
pll_register_string( 'name3', 'Вакула Ирина Михайловна' );
pll_register_string( 'prof3', 'Ведущий архитектор' );
pll_register_string( 'name4', 'Бабенко Вероника Игоревна' );
pll_register_string( 'prof4', 'Архитектор' );
pll_register_string( 'name5', 'Майстер Антон Алексеевич' );
pll_register_string( 'name6', 'Ходарченко Наталия Васильевна' );
pll_register_string( 'name7', 'Ткачук Тарас Владимирович' );
pll_register_string( 'name8', 'Майстер Мария Владимировна' );
pll_register_string( 'lang', 'Ru' );
pll_register_string( 'lang', 'En' );
pll_register_string( 'lang_link', '/' );
pll_register_string( 'main1', 'Современные архитектурные решения' );
pll_register_string( 'main2', 'Высочайший профессиональный уровень' );
pll_register_string( 'main3', 'Индивидуальный креативный подход' );


function tekton_widgets_init() {
	register_sidebar( array(
	    'name'          => 'Pet contact page form',
	    'id'            => 'pet-contact-page-form',
	    'before_widget' => '',
	    'after_widget'  => '',
	    'before_title'  => '',
	    'after_title'   => '',
	) );
};
add_action( 'widgets_init', 'tekton_widgets_init' );

//add_action( 'after_setup_theme', 'remove_parent_theme_features', 10 );
// function remove_parent_theme_features() {
//     remove_theme_support( 'automatic-feed-links' );
//     remove_theme_support( 'title-tag' );
//     remove_theme_support( 'custom-logo' );
//     remove_theme_support( 'customize-selective-refresh-widgets' );
//     remove_theme_support( 'wp-block-styles' );
//     remove_theme_support( 'align-wide' );
//     remove_theme_support( 'editor-style' );
//     remove_theme_support( 'style-editor.css' );
//     remove_theme_support( 'editor-font-sizes' );
//     remove_theme_support( 'editor-color-palette' );
//     remove_theme_support( 'responsive-embeds' );
// }

?>
