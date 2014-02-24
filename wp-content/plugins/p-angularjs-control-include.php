<?php
/**
 * Plugin Name: Angular include 
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: 0.1
 * Author: Mitchellangelo
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */

function waci_enqueue_js () {
  global $post;
  $post_angularjs_include_value = get_post_meta($post->ID, 'wp-angularjs-include', true);
  if (in_array($post_angularjs_include_value, array('true', '1')) ) {
    wp_enqueue_script('angularjs-js', plugins_url('js/angular.js', __FILE__), null, null, true/*in_footer*/);
  }
}
add_action('wp_enqueue_scripts', 'waci_enqueue_js');
?>