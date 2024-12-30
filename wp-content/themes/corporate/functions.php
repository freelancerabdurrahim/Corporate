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
?>