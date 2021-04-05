<?php
    /**
     * @package WordPress
     * @subpackage NavyBlue
     * @version 1.0
     * 
     */

    if(!function_exists('NavyBlue_Setup')) : 
        function NavyBlue_Setup(){
            //load_theme_texdomian();
            add_theme_support('html5', ['comment-list','comment-form','search-form','gallery','caption','style','script']);
            register_nav_menus( array(
                'primary' => __('Primary Menu', 'NavyBlue'),
                'secondary' => __('Secondary Menu', 'NavyBlue')
            ));
            add_theme_support( 'post-formats', array(
                'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
            ) );
        }
        add_action('after_setup_theme','NavyBlue_Setup');
    endif;

    function NavyBlue_Assets(){
        // Register script
        wp_register_script('jquery-3.5.1.min.js', get_template_directory_uri().'/js/jquery-3.5.1.min.js', array(), null, true);
        wp_register_script('popper-js', get_template_directory_uri().'/js/popper.js', array(), null, true);
        wp_register_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array(), null, true);

        wp_enqueue_script(array(
            'jqery-3.5.1.min.js',
            'popper-js',
            'bootstrap.js'
        ));

        // Register style
        wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), null);
        wp_register_style('style', get_template_directory_uri().'/style.css', array(), null);

        wp_enqueue_style(array(
            'bootstrap-css',
            'style-css'
        ));
    }
    add_action('init', 'NavyBlue_Assets');

    // Remove Generator
    function Remove_Generator(){
        return '';
    }
    add_filter('the_generator', 'Remove_Generator');

    // Add class to <a> tag 
    function add_menu_link_class( $atts, $item, $args ) {
        if (property_exists($args, 'link_class')) {
          $atts['class'] = $args->link_class;
        }
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

    function Slider(){
        register_sidebar(array(
            'name' => 'Right Sidebar',
            'id' => 'right_sidebar',
            'description' => 'This sidebar will be on right site.',
            'class' => 'that_sucks',
            'before_widget' => '<li id=%1$s" class="widget  %2$s">',
            'after_widget' => '</li></hr>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2> <hr>',
            'before_sidebar' => '<div class="border p-4">',
            'after_sidebar' => '</div>'
        ));
    }
    add_action('init','Slider');
    
?>