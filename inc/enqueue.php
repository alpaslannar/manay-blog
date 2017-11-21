<?php
/*
@package manayfashion
*/
function manayfashion_load_admin_scripts($hook) {
    if('toplevel_page_manayfashion_options' != $hook) {return;}
    wp_register_style('manayfashion_admin', get_template_directory_uri() . '/css/manayfashion-admin.css', array(), '1.0', 'all');
    wp_enqueue_style('manayfashion_admin');
}
add_action('admin_enqueue_scripts', 'manayfashion_load_admin_scripts');