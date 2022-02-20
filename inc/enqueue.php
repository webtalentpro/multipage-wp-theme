<?php

function multipage_theme_setup(){
    add_theme_support( 'title-tag');

    load_theme_textdomain('multipage', get_template_directory() . '/languages');
    register_nav_menus( array(
        'primary_menu'=>__('Primary Menu', 'multipage'),
        'secondary_menu'=>__('Secondary Menu', 'multipage'),

    ));
    add_theme_support( 'post-thumbnails', array('post', 'page', 'slider', 'service',  'teams', 'testimonial', 'portfolio_area', 'galleryes'));
    add_image_size( 'post-thumbnail', 350, 235, true );
    add_image_size( 'workflows-thumbnail', 1920, 435, true );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "wp-block-styles" ) ;
    add_theme_support( "custom-logo") ;
    add_theme_support( "custom-header") ;
    add_theme_support("custom-background") ;
    add_theme_support( "html5") ;
    add_theme_support( "align-wide") ;

}
add_action( 'after_setup_theme', 'multipage_theme_setup' );



function multipage_css_js_enqueue(){
    wp_enqueue_style('styleseet', get_stylesheet_uri(  ));
    wp_enqueue_style('Montserrat', '//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700', array(), '1.0', 'all' );
    wp_enqueue_style('poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',  array(), '1.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri(  ).'/assets/css/bootstrap.min.css',  array(), '1.0', 'all' );
    wp_enqueue_style('fontawesome', get_template_directory_uri(  ).'/assets/css/font-awesome.min.css',  array(), '1.0', 'all' );
    wp_enqueue_style('popup', get_template_directory_uri(  ).'/assets/css/magnific-popup.css',  array(), '1.0', 'all' );
    wp_enqueue_style('carousel', get_template_directory_uri(  ).'/assets/css/owl.carousel.css',  array(), '1.0', 'all' );
    wp_enqueue_style('stylesheet', get_template_directory_uri(  ).'/assets/css/style.css',  array(), '1.0', 'all' );
    wp_enqueue_style('responsive', get_template_directory_uri(  ).'/assets/css/responsive.css',  array(), '1.0', 'all' );

    // js

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper', get_template_directory_uri(  ).'/assets/js/popper.min.js', array(), '1.0', true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(  ).'/assets/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script( 'owl', get_template_directory_uri(  ).'/assets/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script( 'magnific', get_template_directory_uri(  ).'/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script( 'onepage', get_template_directory_uri(  ).'/assets/js/onepagenav.js', array(), '1.0', true);
    wp_enqueue_script( 'isotope', get_template_directory_uri(  ).'/assets/js/isotope.min.js', array(), '1.0', true);
    wp_enqueue_script( 'image', get_template_directory_uri(  ).'/assets/js/imageloaded.min.js', array(), '1.0', true);
    wp_enqueue_script( 'counterup', get_template_directory_uri(  ).'/assets/js/jquery.counterup.min.js', array(), '1.0', true);
    wp_enqueue_script( 'waypoint', get_template_directory_uri(  ).'/assets/js/waypoint.min.js', array(), '1.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri(  ).'/assets/js/main.js', array(), '1.0', true);
    
}
add_action( 'wp_enqueue_scripts', 'multipage_css_js_enqueue' );

function multipage_excertp_more($more){
    global $post;
    return '<br> <a class="box-btn" href=" '.get_permalink( $post->ID ) .'">'. 'read more '. '<i class="fa fa-angle-double-right"></i></a>';
}
add_action('excerpt_more', 'multipage_excertp_more');

function multipage_excerpt_length( $lenght){
    return 10;
}
add_action('excerpt_length', 'multipage_excerpt_length');




function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );





