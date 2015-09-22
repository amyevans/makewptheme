<?php 

function twentyfourteen_child_scripts() {
	wp_enqueue_script('extra js', get_stylesheet_directory_uri() . '/js/extra.js');
}

/* when WP is loading up the scripts, run this function (a hook) */
add_action( 'wp_enqueue_scripts', 'twentyfourteen_child_scripts' );

function twentyfourteen_child_widgets_init() {
	register_sidebar( array(
		'name' => 'Header Image Area',
		'id' => 'header_image_area',
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>',
	));
}

add_action ('widgets_init', 'twentyfourteen_child_widgets_init' );