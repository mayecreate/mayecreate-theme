<?php 

/*
==========================================================
SHORTCODE MANAGER IN VISUAL EDITOR
==========================================================
*/


function enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["shortcode_button_plugin"] =  get_template_directory_uri() . '/js/shortcode_manager.js';
    return $plugin_array;
}

add_filter("mce_external_plugins", "enqueue_plugin_scripts");

function register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "divider", "column", "column-third", "column-two-third", "column-one-third", "column-one-quarter");
    return $buttons;
}

add_filter("mce_buttons", "register_buttons_editor");