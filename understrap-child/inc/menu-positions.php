<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'top' => __('Top Links', 'understrap'),
        'footer' => __('Footer Links', 'understrap'),
    )
);
