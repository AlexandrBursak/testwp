<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 4/13/16
 * Time: 3:37 AM
 */

function widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Sidebar' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'widgets_init' );

function theme_setup() {

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu' ),
    ) );

}
add_action( 'after_setup_theme', 'theme_setup' );
