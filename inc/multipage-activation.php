<?php
function multipage_theme_register_required_plugins(){

    $plugins = array(
        array(
            'name'=>__('Contact Form 7','multipage'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),
        array(
            'name'=>__('One Click Demo Import','multipage'),
            'slug'=> 'one-click-demo-import',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export','multipage'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),

        array(
           'name'=>__('Advanced Custom Fields: Font Awesome Field', 'multipage'),
           'slug'=> 'advanced-custom-fields-font-awesome',
           'required'=> true,
        ),

        array(
            'name'=>__('Multipage Custom Post', 'multipage'),
            'slug'=> 'multipage-custom-post',
            'source'=> get_template_directory(  ).'/plugins/multipage-custom-post.zip',
            'required'=> true,
         ),
         
        array(
            'name'=>__('Advanced Custom Fields', 'multipage'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
         ),

         array(
            'name'=>__('Advanced Custom Fields PRO', 'multipage'),
            'slug'=> 'advanced-custom-fields-pro',
            'source'=> get_template_directory(  ).'/plugins/advanced-custom-fields-pro.zip',
            'required'=> true,
         ),
    );

    $config= array(
        'id'=> 'multipage-plugin-active',
        'menu'=> 'Multipage Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'multipage_theme_register_required_plugins' );