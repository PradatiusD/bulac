<?php

// Custom Function to Include
function add_child_styles() {
    echo '<link rel="stylesheet" href="'.site_url().'/wp-content/themes/BULAC-child/style.css">';
}
add_action( 'wp_head', 'add_child_styles' );

