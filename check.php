<?php

// add the below to your functions file
// then visit the page that you want to see 
// the enqueued scripts and stylesheets for

function md_inspect_styles() {
    global $wp_styles;
    echo "<h2>Enqueued CSS Stylesheets</h2><ul>";
    foreach( $wp_styles->queue as $handle ) :
        echo "<li>" . $handle . "</li>";
    endforeach;
    echo "</ul>";
}
add_action( 'wp_print_styles', 'md_inspect_styles' );

function md_inspect_scripts() {
    global $wp_scripts;
    echo "<h2>Enqueued JS Scripts</h2><ul>";
    foreach( $wp_scripts->queue as $handle ) :
        echo "<li>" . $handle . "</li>";
    endforeach;
    echo "</ul>";
}
add_action( 'wp_print_scripts', 'md_inspect_scripts' );