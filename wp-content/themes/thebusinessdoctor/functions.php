<?php

//Add support for post Thumbnails
add_theme_support('post-thumbnails');
//Add style and dependencies
add_action('wp_enqueue_scripts', 'prefix_load_css_files');

function prefix_load_css_files() {
    // Preloading fonts
    $fonts_dir = get_template_directory_uri(). '/fonts/';
    //Avenir
    $avenir_dir = $fonts_dir.'avenir-web/';
    wp_enqueue_style('avenir-book-css', $avenir_dir.'Avenir-Book/styles.css');
    wp_enqueue_style('avenir-next-bold-css', $avenir_dir.'AvenirNext-Bold/styles.css');
    wp_enqueue_style('avenir-next-condensed-bold-css', $avenir_dir.'AvenirNextCondensed-Bold/styles.css');

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('theme-css', get_stylesheet_uri(), array('bootstrap-css'));
    wp_enqueue_style('theme-css');
}

//Menu
if (function_exists('register_nav_menu')) {
    register_nav_menus(array('main_menu' => 'Main Menu'));
}

//add Js
function add_theme_scripts(){

    wp_enqueue_script('script', get_template_directory_uri() . '/js/jquery-3.1.1.slim.min.js');
    wp_enqueue_script('script2', get_template_directory_uri() . '/js/tether.min.js');
    wp_enqueue_script('script3', get_template_directory_uri() . '/js/bootstrap.min.js');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


//Add class in link menu
add_filter('nav_menu_link_attributes', 'class_menu_link', 10, 3);

function class_menu_link($atts, $item, $args) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

//load thme by Our Staff


add_filter('template_include', 'my_plugin_templates');

function my_plugin_templates($template) {

  if (is_category()) {
        $category = get_category(get_query_var('cat'));
        $template = get_stylesheet_directory() . '/' . $category->slug . '.php';
        if(file_exists($template)){
          return $template;
      }
    }

    if (in_category("staff") && file_exists(get_stylesheet_directory() . '/single-staff.php')) {
        $template = get_stylesheet_directory() . '/single-staff.php';

        return $template;
    }

    $template = get_stylesheet_directory() . '/single.php';


    return $template;
}

//Filter of jquery version
add_filter('wp_default_scripts', $af = static function( &$scripts) {
    if (!is_admin()) {
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array('jquery-core'), '1.12.4');
    }
}, PHP_INT_MAX);
unset($af);
