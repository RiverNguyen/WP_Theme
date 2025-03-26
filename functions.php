<?php
function jang_theme_support () {
    // Adds dynamic title tag support
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
}

add_action("after_setup_theme", "jang_theme_support");

function jang_menus () {
    $locations = array(
        "primary" => "Desktop Primary Left Sidebar",
        "footer" => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action("init", "jang_menus");



function jang_register_styles() {
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style('jang-style', get_template_directory_uri() . "/style.css", array(), $version, "all");
    wp_enqueue_style('jang-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), "5.3.3", "all");
    wp_enqueue_style('jang-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css", array(), "6.7.2", "all");
}

add_action("wp_enqueue_scripts", "jang_register_styles");

function jang_register_scripts() {

    wp_enqueue_script('jang-main', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", "all");
    wp_enqueue_script('jang-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), "5.3.3", true);
    wp_enqueue_script('jang-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js", array(), "3.7.1", true);
    wp_enqueue_script('jang-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js", array(), "2.10.2", true);
}

add_action("wp_enqueue_scripts", "jang_register_scripts");



?>