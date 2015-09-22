<?php 

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'amystheme' ),
) );

function amystheme_widgets_init() {
	register_sidebar( array(
		'name' => 'Header Image Area',
		'id' => 'header_image_area',
		'before_widget' => '<div class="col-xs-12 header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>',
	));
}

add_action ('widgets_init', 'amystheme_widgets_init' );