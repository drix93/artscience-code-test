<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'NORR Options',
        'menu_slug' => 'norr-options',
        'redirect' => true,
    ));
}
