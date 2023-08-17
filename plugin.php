<?php
/*
Plugin Name: My New Plugin
Description: A simple "Hello World" plugin.
Author: Your Name
Version: 1.1.0
*/

function hello_world_display() {
  echo "Hello World using a template changed by Vikas 17 aug";
}

add_action( 'wp_footer', 'hello_world_display' );

