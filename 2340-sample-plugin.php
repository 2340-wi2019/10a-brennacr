<?php
/*
Plugin Name: 2340 Sample Plugin
Plugin URI: https://faculy.mccneb.edu/grosas
Description: A sample plugin for INFO 2340
Version: 1.0
Author: Guillermo J. Rosas
Author URI: https://faculy.mccneb.edu/grosas
License: GPL
*/

add_shortcode("wittyquote", "get_quote");

function get_quote($atts) {
$quotes = array (
"Yesterday was Monday",
"Today is Tuesday",
"Tomorrow is Wednesday",
"The next day is Thursday ",
"Then it will be Friday!",
);
return $quotes[array_rand($quotes)];
}