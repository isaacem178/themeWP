<?php
    function theme_scripts(){
       wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
       wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
       wp_enqueue_style('style', get_stylesheet_uri() );

       wp_enqueue_script('jquery');
       wp_enqueue_script('bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2',true);
       wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);

    }

    register_nav_menus(array(
         'menu_principal' => __('Menu Principal', 'themeWP')
    ) );


    add_theme_support('post-thumbnails');

    add_image_size('destacada', 1100, 418, true);
    add_image_size('guia-toronto', 350, 210, true);
    add_image_size('consejos', 720, 380, true);

    add_action('wp_enqueue_scripts', 'theme_scripts');

    add_filter('show_admin_bar', '__return_false');


    function theme_widgets(){
        register_sidebar(array(
           'name'           => __('Sidebar Testimoniales'),
           'id'             => 'sidebar-2',
           'description'    => 'Widgets de Testimoniales',
           'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
           'after_widget'   => '</aside>',
           'before_title'   => '<h3 class="widget-title">',
           'after_title'    => '</h3>',
        ) );

        register_sidebar(array(
           'name'           => __('Imagenes Página Principal'),
           'id'             => 'front-page',
           'description'    => 'Widgets para página principal',
           'before_widget'  => '<div id="%1$s" class="widget %2$s">',
           'after_widget'   => '</div>',
           'before_title'   => '<h3 class="widget-title">',
           'after_title'    => '</h3>',
        ) );
    }

    add_action('widgets_init', 'theme_widgets');
?>