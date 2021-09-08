<?php
function firsttheme_assets()
{
    wp_enqueue_style('firsttheme-stylesheet', '/dist/asset/css/bundle.css',
        array(), '1.0.0', 'all'
    );

    wp_enqueue_script('firstheme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array(), true);
}

add_action('wp_enqueue_scripts', 'firsttheme_assets');

function firsttheme_admin_assets()
{
    wp_enqueue_style('firsttheme-admin-stylesheet', '/dist/asset/css/admin.css',
        array(), '1.0.0', 'all'
    );
}

add_action('admin_enqueue_scripts', 'firsttheme_assets');
