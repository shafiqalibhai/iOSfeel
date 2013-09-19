<?php

automatic_feed_links();

	
function removeHeadLinks() {
   	remove_action('wp_head', 'rsd_link');
   	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');
    
function footer(){
	//echo '<div data-role="footer" class="ui-bar">WP Native Look</div>';
} add_action('wp_footer', 'footer');
?>