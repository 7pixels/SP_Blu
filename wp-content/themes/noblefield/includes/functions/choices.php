<?php
if ( ! function_exists( 'sevenp_blu_font_style_choices' ) ) :
/**
 * Returns font style options
 * @return array
 */
function sevenp_blu_font_style_choices() {
	return apply_filters( 'sevenp_blu_font_style_choices', array(
		'bold'       => esc_html__( 'Bold', 'Blu' ),
		'italic'     => esc_html__( 'Italic', 'Blu' ),
		'uppercase'  => esc_html__( 'Uppercase', 'Blu' ),
		'underline'  => esc_html__( 'Underline', 'Blu' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_color_scheme_choices' ) ) :
/**
 * Returns list of color scheme used by Divi
 * @return array
 */
function sevenp_blu_color_scheme_choices() {
	return apply_filters( 'sevenp_blu_color_scheme_choices', array(
		'none'   => esc_html__( 'Default', 'Blu' ),
		'green'  => esc_html__( 'Green', 'Blu' ),
		'orange' => esc_html__( 'Orange', 'Blu' ),
		'pink'   => esc_html__( 'Pink', 'Blu' ),
		'red'    => esc_html__( 'Red', 'Blu' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_header_style_choices' ) ) :
/**
 * Returns list of header styles used by Divi
 * @return array
 */
function sevenp_blu_header_style_choices() {
	return apply_filters( 'sevenp_blu_header_style_choices', array(
		'left'       => esc_html__( 'Default', 'Blu' ),
		'centered'   => esc_html__( 'Centered', 'Blu' ),
		'split'	     => esc_html__( 'Centered Inline Logo', 'Blu' ),
		'slide'      => esc_html__( 'Slide In', 'Blu' ),
		'fullscreen' => esc_html__( 'Fullscreen', 'Blu' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_dropdown_animation_choices' ) ) :
/**
 * Returns list of dropdown animation
 * @return array
 */
function sevenp_blu_dropdown_animation_choices() {
	return apply_filters( 'sevenp_blu_dropdown_animation_choices', array(
		'fade'     => esc_html__( 'Fade', 'Blu' ),
		'expand'   => esc_html__( 'Expand', 'Blu' ),
		'slide'	   => esc_html__( 'Slide', 'Blu' ),
		'flip'	   => esc_html__( 'Flip', 'Blu' )
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_footer_column_choices' ) ) :
/**
 * Returns list of footer column choices
 * @return array
 */
function sevenp_blu_footer_column_choices() {
	return apply_filters( 'sevenp_blu_footer_column_choices', array(
		'4'			=> sprintf( esc_html__( '%1$s Columns', 'Blu' ), '4' ),
		'3' 		=> sprintf( esc_html__( '%1$s Columns', 'Blu' ), '3' ),
		'2' 		=> sprintf( esc_html__( '%1$s Columns', 'Blu' ), '2' ),
		'1'  		=> esc_html__( '1 Column', 'Blu' ),
		'_1_4__3_4' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '1/4 + 3/4' ),
		'_3_4__1_4' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '3/4 + 1/4' ),
		'_1_3__2_3' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '1/3 + 2/3' ),
		'_2_3__1_3' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '2/3 + 1/3' ),
		'_1_4__1_2' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '1/4 + 1/4 + 1/2' ),
		'_1_2__1_4' => sprintf( esc_html__( '%1$s Columns', 'Blu' ), '1/2 + 1/4 + 1/4' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_yes_no_choices' ) ) :
/**
 * Returns yes no choices
 * @return array
 */
function sevenp_blu_yes_no_choices() {
	return apply_filters( 'sevenp_blu_yes_no_choices', array(
		'yes'  => esc_html__( 'Yes', 'Blu' ),
		'no'   => esc_html__( 'No', 'Blu' )
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_left_right_choices' ) ) :
/**
 * Returns left or right choices
 * @return array
 */
function sevenp_blu_left_right_choices() {
	return apply_filters( 'sevenp_blu_left_right_choices', array(
		'right'  => esc_html__( 'Right', 'Blu' ),
		'left'   => esc_html__( 'Left', 'Blu' )
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_image_animation_choices' ) ) :
/**
 * Returns image animation choices
 * @return array
 */
function sevenp_blu_image_animation_choices() {
	return apply_filters( 'sevenp_blu_image_animation_choices', array(
		'left' 		=> esc_html__( 'Left to Right', 'Blu' ),
		'right' 	=> esc_html__( 'Right to Left', 'Blu' ),
		'top' 		=> esc_html__( 'Top to Bottom', 'Blu' ),
		'bottom' 	=> esc_html__( 'Bottom to Top', 'Blu' ),
		'fade_in'	=> esc_html__( 'Fade In', 'Blu' ),
		'off' 		=> esc_html__( 'No Animation', 'Blu' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_divider_style_choices' ) ) :
/**
 * Returns divider style choices
 * @return array
 */
function sevenp_blu_divider_style_choices() {
	return apply_filters( 'sevenp_blu_divider_style_choices', array(
		'solid'		=> esc_html__( 'Solid', 'Blu' ),
		'dotted'	=> esc_html__( 'Dotted', 'Blu' ),
		'dashed'	=> esc_html__( 'Dashed', 'Blu' ),
		'double'	=> esc_html__( 'Double', 'Blu' ),
		'groove'	=> esc_html__( 'Groove', 'Blu' ),
		'ridge'		=> esc_html__( 'Ridge', 'Blu' ),
		'inset'		=> esc_html__( 'Inset', 'Blu' ),
		'outset'	=> esc_html__( 'Outset', 'Blu' ),
	) );
}
endif;

if ( ! function_exists( 'sevenp_blu_divider_position_choices' ) ) :
/**
 * Returns divider position choices
 * @return array
 */
function sevenp_blu_divider_position_choices() {
	return apply_filters( 'sevenp_blu_divider_position_choices', array(
		'top'		=> esc_html__( 'Top', 'Blu' ),
		'center'	=> esc_html__( 'Vertically Centered', 'Blu' ),
		'bottom'	=> esc_html__( 'Bottom', 'Blu' ),
	) );
}
endif;
