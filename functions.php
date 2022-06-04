<?php  

function onePoint_files() {
    //enqueueing CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('fontAwesomeCSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

    
    //enqueing JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
    wp_enqueue_script('fontAwesome', 'https://kit.fontawesome.com/24bc428ad4.js');
}
add_action('wp_enqueue_scripts', 'onePoint_files');

/* MENUS */
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    )
);

/* REGISTRATION OF CUSTOM POST TYPES */
function onePoint_post_types() {

    // Medical Services Custom Post Type
    register_post_type('service', array(
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-plus-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
    ));

    // Testimonials Custom Post Type
    register_post_type('testimonial', array(
        'public' => true,
        'labels' => array(
            'name' => 'Testimonials',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon' => 'dashicons-smiley',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
    ));

    // Our Values Post Type
    register_post_type('values', array(
        'public' => true,
        'labels' => array(
            'name' => 'Values',
            'add_new' => 'Add New Value',
            'add_new_item' => 'Add New Value',
            'edit_item' => 'Edit Value',
            'all_items' => 'All Values',
            'singular_name' => 'Value'
        ),
        'menu_icon' => 'dashicons-thumbs-up',
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    ));

}
add_action('init', 'onePoint_post_types');

/* THEME FEATURES */
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

// Exclude node_modules from exporting All In One Migration Plugin
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'onePointTheme/node_modules'; // insert your theme name
  return $exclude_filters;
} );