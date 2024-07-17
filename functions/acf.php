<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page([
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Content Settings',
        'menu_title'    => 'Content',
        'parent_slug'   => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Contact Settings',
        'menu_title'    => 'Contact',
        'parent_slug'   => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Social Settings',
        'menu_title'    => 'Social',
        'parent_slug'   => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ]);

}