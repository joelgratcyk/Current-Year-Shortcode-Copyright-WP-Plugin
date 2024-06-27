<?php
/*
Plugin Name: Current Year Shortcode
Description: Adds a shortcode [year] to display the current year.
Version: 1.0
Author: Joel Gratcyk
Author URI: https://joel.gr
*/

// Function to return current year
function current_year_shortcode() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'current_year_shortcode');
