<?php
/*
Plugin Name: WP Post Commentary
Plugin URI:
Description: This plugin enables you to add HTML comments to your post contents.
Author: tamy
Version: 1.0
Author URI:
*/

require_once( dirname(__FILE__)."/comment_filter.php");

add_filter( 'the_content', 'comment_filter' );
