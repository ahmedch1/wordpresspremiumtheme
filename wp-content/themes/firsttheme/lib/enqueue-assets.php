<?php
function firsttheme_assets()
{
    wp_enqueue_style('_themename-stylesheet', '/dist/asset/css/bundle.css',
        array(), '1.0.0', 'all'
    );
    wp_enqueue_script('firstheme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', '_themename_assets');

function _themename_admin_assets()
{
    wp_enqueue_style('_themename-admin-stylesheet', '/dist/asset/css/admin.css',
        array(), '1.0.0', 'all'
    );
    wp_enqueue_script('firstheme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', '1.0.0', true);
}

add_action('admin_enqueue_scripts', '_themename_assets');
