<?php
//Add ability to create menu
add_theme_support( 'menus' );

//Add ability to put featured images
add_theme_support( 'post-thumbnails' ); 

//Wordpress function to add specific menus to the theme; In this case, I only have one menu which is the primary menu.
function register_theme_menus() {
    
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
    );
}

//This makes it so that when Wordpress initializes, it calls the function to register the menu to the theme
add_action('init','register_theme_menus'); 


//Enqueue CSS; Function named different to not conflict with any future ones.
function wpbt_theme_styles() {
    
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
    wp_enqueue_style('fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );

    
}

add_action('wp_enqueue_scripts', 'wpbt_theme_styles');

//Enqueue Javascript; Function named different to not conflict with any future ones.
function wpbt_theme_js() {

    wp_enqueue_script('j_query', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', '', '', true );
    wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '', true );    
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true );
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', '', '', true );
}
    
add_action('wp_enqueue_scripts', 'wpbt_theme_js');


//Create Widgets
function create_widget($name, $id, $description) {
    register_sidebar(
        array(
        'name' => __($name),
        'id' => $id,
        'description' => ($description),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        )
    );
}

create_widget('Front Left', 'front-left', 'Displays on the left of the homepage' );
create_widget('Front Mid', 'front-mid', 'Displays on the middle of the homepage' );
create_widget('Front Right', 'front-right', 'Displays on the right of the homepage' );

create_widget('Side Bar', 'side-bar', 'Displays a sidebar on a page');
create_widget('Blog Side Bar', 'blog', 'Displays a sidebar on the blog page');


?>