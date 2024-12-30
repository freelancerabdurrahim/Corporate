<?php


if(!function_exists('myFirstThemeSetump')){
function myFirstThemeSetump(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}


load_theme_textdomain('neogymtextdomain', get_template_directory(). '/languages');

register_nav_menus(array(
    'Top_Menu' => __('Top Menu', 'neogymtextdomain'),
));

}

add_action('after_setup_theme', 'myFirstThemeSetump');




// function neogym_services() {
// 	register_post_type('wporg_product',
// 		array(
// 			'labels'      => array(
// 				'name'          => __('Products', 'textdomain'),
// 				'singular_name' => __('Product', 'textdomain'),
// 			),
// 				'public'      => true,
// 				'has_archive' => true,
// 		)
// 	);
// }


if(!function_exists('neogym_services')){
    function neogym_services(){
        register_post_type("younus", 
            array(
            'labels' => array(
                    'name' => __('Services', 'neogymtextdomain'),
                    'singular_name' => __('Service', 'neogymtextdomain'),
            ),
            'public' => true,
            'has_archive' => true,
            ));
    }
}


add_action('init', 'neogym_services');

?>