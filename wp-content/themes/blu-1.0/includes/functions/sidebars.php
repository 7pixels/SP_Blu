<?php
function et_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar', 'Blu' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .et_pb_widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Area', 'Blu' ) . ' #1',
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Area', 'Blu' ) . ' #2',
		'id' => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Area', 'Blu' ) . ' #3',
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Area', 'Blu' ) . ' #4',
		'id' => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'et_widgets_init' );
