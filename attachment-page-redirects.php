

<?php
/*
Plugin Name: Attachment page redirects
Plugin URI: 
Description: It redirects attachment pages to their parent pages. If parent page is not available the it redirects to home page.
Version: 2.0
Author: Gulshan Thakare and Sagar Gaikwad
Author URI: http://www.dmpmconcepts.com/
GitHub Plugin URI: https://github.com/DMPMConcepts/attachment-page-redirects
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

function redirect_unattached_images() {
if ( is_attachment() ) {
global $post;
if ( $post && $post->post_parent ) {
wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
exit;
} else {
wp_redirect( esc_url( home_url( '/' ) ), 301 );
exit;
}
}
}
add_action('template_redirect', 'redirect_unattached_images');