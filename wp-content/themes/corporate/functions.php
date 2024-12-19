<?php


if(!function_exists('myFirstThemeSetump')){
function myFirstThemeSetump(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

}



add_action('after_setup_theme', 'myFirstThemeSetump');
?>