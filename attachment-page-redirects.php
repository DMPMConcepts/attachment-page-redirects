

<?php
/*
Plugin Name: Attachment page redirects
Plugin URI: 
Description: It redirects attachment pages to their parent pages. If parent page is not available the it redirects to home page.
Version: 1.0
Author: Gulshan Thakare
Author URI: http://www.dmpmconcepts.com/
GitHub Plugin URI: 
*/

function redirect_unattached_images() {
if ( is_attachment() ) {
if  ( $post->post_parent == 0 ) {	

	wp_redirect( home_url( '/', 'https' ) );
}
else{
	wp_redirect(get_permalink($post->post_parent)) ;
  }
 }
}
add_action('template_redirect', 'redirect_unattached_images');