<?php


// theme support
function m_theme_setup(){

    add_theme_support('post-thumbnails');


    register_nav_menus(array(
        'primary'=> __('primary menu')
    ));
}

add_action('after_setup_theme', 'm_theme_setup');

//widget
function m_init_widgets($id){
    register_sidebar(array(
        'name'=>'sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="sidebar-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'

    ));
}

add_action('widgets_init','m_init_widgets');


// excerpt length
function m_set_excerpt_length(){
    return 20;
}


add_filter('excerpt_length', 'm_set_excerpt_length',999);


?>