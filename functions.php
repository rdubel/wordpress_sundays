<?php

function sundays_widgets_init() {
    register_sidebar( array(
        'name' => 'header',
        'id' => 'header',
        'description' => 'is a nav',
        'before_widget' => '<nav id="%1$s" class="widget %2$s">',
        'after_widget' => '</nav>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'sundays_widgets_init' );

add_theme_support('post_thumbnails');
