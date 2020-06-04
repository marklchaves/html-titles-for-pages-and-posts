<?php
/**
 * HTML Titles for Pages and Posts
 *
 * @package mce\HTMLTitles
 * @since 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: HTML Titles for Pages and Posts
 * Plugin URI:  https://www.caughtmyeye.cc
 * Description: Allows custom titles with HTML for pages and posts.
 * Author:      caught my eye
 * Version:     1.0.0
 * Author URI:  https://www.caughtmyeye.cc
 * Text Domain: html-titles-for-pages-and-posts
 */

// Exit if this file is directly accessed.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * HTML Titles for Pages and Posts
 * 
 * Originally based on wpse309151_title_update().
 */
function htfpp_title_update( $title, $id = null ) {
    if ( ! is_admin() && ! is_null( $id ) ) {
        $post = get_post( $id );
        if ( $post instanceof WP_Post && ( $post->post_type == 'post' || $post->post_type == 'page' ) ) {
            $html_title = get_post_meta( $id, 'HTML_title', true );
            if( ! empty( $html_title ) ) {
				
				$allowed_html = 
				array(
					//formatting
					'strong' => array(),
					'em'     => array(),
					'b'      => array(),
					'i'      => array(),
				
					//span
					'span'     => array(
						'class' => array(),
						'style' => array()
					)
				);

				//return $html_title;
				return wp_kses( $html_title, $allowed_html);
            }
        }
    }
    return $title;
}
add_filter( 'the_title', 'htfpp_title_update', 10, 2 );

function htfpp_remove_title_filter_nav_menu( $nav_menu, $args ) {
    // we are working with menu, so remove the title filter
    remove_filter( 'the_title', 'htfpp_title_update', 10, 2 );
    return $nav_menu;
}
// this filter fires just before the nav menu item creation process
add_filter( 'pre_wp_nav_menu', 'htfpp_remove_title_filter_nav_menu', 10, 2 );

function htfpp_add_title_filter_non_menu( $items, $args ) {
    // we are done working with menu, so add the title filter back
    add_filter( 'the_title', 'htfpp_title_update', 10, 2 );
    return $items;
}
// this filter fires after nav menu item creation is done
add_filter( 'wp_nav_menu_items', 'htfpp_add_title_filter_non_menu', 10, 2 );