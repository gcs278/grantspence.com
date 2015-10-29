<?php
/*
* Plugin Name: Code Block Plugin
* Description: Code block
* Version: 1.0
* Author: Grant Spence
* Author URI: http://grantspence.com
*/

// Example 1 : WP Shortcode to display form on any page or post.
function form_creation(){
 return '<script src="https://gist.github.com/gcs278/e2ce3be42617045e63b0.js"></script>';
}
add_shortcode('test', 'form_creation');

?>
