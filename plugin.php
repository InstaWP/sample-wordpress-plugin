<?php
/*
Plugin Name: Hello World
Description: A simple "Hello World" plugin.
Author: Your Name
Version: 1.0.1
*/

function hello_world_display() {
  echo "Hello World using a template";
}

add_action( 'wp_footer', 'hello_world_display' );

