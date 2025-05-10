<?php
/*
Plugin Name: Current Year Shortcode
Description: Adds a shortcode [year] to display the current year.
Version: 1.1
Author: Joel Gratcyk
Author URI: https://joel.gr
*/

/**
 * Function to return the current year.
 *
 * @return string The current year.
 */
function current_year_shortcode() {
    // Get the current year
    $year = date('Y');

    // Apply a filter to allow modification of the year
    $year = apply_filters('current_year_shortcode_year', $year);

    // Escape the output for safety
    return esc_html($year);
}
add_shortcode('year', 'current_year_shortcode');
