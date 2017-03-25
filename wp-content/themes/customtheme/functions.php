<?php
//Loading in stylesheets
function enqueue_customtheme_styles() {
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
    wp_enqueue_style("customtheme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");


function customtheme_setup() {
    register_nav_menus( array(
        "primary" => __("Primary Menu", "customtheme")
        ));
}
add_action("after_setup_theme", "customtheme_setup");
?>