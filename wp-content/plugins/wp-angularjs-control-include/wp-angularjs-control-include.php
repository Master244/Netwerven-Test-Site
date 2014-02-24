<?php
function waci_enqueue_js () {
  global $post;
  $post_angularjs_include_value = get_post_meta($post->ID, 'wp-angularjs-include', true);
  if (in_array($post_angularjs_include_value, array('true', '1')) ) {
    wp_enqueue_script('angularjs-js', plugins_url('/library/js/angular.js', __FILE__), null, null, true/*in_footer*/);
  }
}
add_action('wp_enqueue_scripts', 'waci_enqueue_js');
?>