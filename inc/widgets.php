<?php
function multipage_widets(){


    register_sidebar( array(
        'name'=>__('Main Widget', 'multipage'),
        'id'=> 'sidebar-1',
        'before_widget'=>'<div class="single-sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=> '</h4>'
    ) );

    register_sidebar( array(
        'name'=>__('Footer column 1', 'multipage'),
        'id'=> 'footer-1',
        'before_widget'=>' <div class="single-footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=> '</h4>'
    ) );

    register_sidebar( array(
        'name'=>__('Footer column 2', 'multipage'),
        'id'=> 'footer-2',
        'before_widget'=>' <div class="single-footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=> '</h4>'
    ) );

    register_sidebar( array(
        'name'=>__('Footer column 3', 'multipage'),
        'id'=> 'footer-3',
        'before_widget'=>'<div class="single-footer footer-logo">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=> '</h3>'
    ) );
}
add_action('widgets_init', 'multipage_widets' );