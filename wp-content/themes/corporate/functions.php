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



// Student list


if(!function_exists('neogym_student_list')){
    function neogym_student_list(){
        register_post_type("student", 
            array(
            'labels' => array(
                    'name' => __('Students', 'neogymtextdomain'),
                    'singular_name' => __('Student', 'neogymtextdomain'),
                    'add_new_item' => __( 'Add New Student' ),
                    'not_found' => __( 'No Student found' ),
                    'not_found_in_trash' => __( 'No Student found in Trash' ),
                    'featured_image' => __( 'Student Images'),
                    'set_featured_image' => __( 'Set Student Images'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('mystudentdepartment'),
            'has_archive' => true,
            ));
    }
}


add_action('init', 'neogym_student_list');


// add texonomy


if(!function_exists('mystudentdepartment')){
    function mystudentdepartment(){

        $labels = array(
            'name'              => _x( 'Student', 'neogymtextdomain' ),
            'singular_name'     => _x( 'Student', 'neogymtextdomain' ),
            'search_items'      => __( 'Search Student' ),
            'all_items'         => __( 'All Student' ),
            'parent_item'       => __( 'Parent Student' ),
            'parent_item_colon' => __( 'Parent Student:' ),
            'edit_item'         => __( 'Edit Student' ),
            'update_item'       => __( 'Update Student' ),
            'add_new_item'      => __( 'Add New Student' ),
            'new_item_name'     => __( 'New Student Name' ),
            'menu_name'         => __( 'Student Deertment' ),
        );

        $args   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'course' ],
        );
        
        register_taxonomy('mystudentdepartment', ['student'],$args);
    }
}

add_action('init','mystudentdepartment');





// add shortcode

if(!function_exists('myword')){
    function myword(){

        add_shortcode('bestword', 'mybestword');
        function mybestword(){
            return "Allah Mohan allah mohan";
        }

        // if(!function_exists('mybestword')){
        //     function mybestword(){

        //         return "Allah Mohan";
        //     }
        // }


    }
}


add_action('init','myword');




require_once get_theme_file_path() .'/inc/codestar/codestar-framework.php';

require_once get_theme_file_path() .'/inc/codestar/samples/admin-options.php';

require_once get_theme_file_path() .'/inc/customposttype/price.php';



require_once __DIR__ . '/inc/cmb2/init.php';
// require_once __DIR__ . '/inc/cmb2/example-functions.php';

require_once __DIR__ . '/inc/cmb2/price-cmb.php';




?>