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
        'page_title'    => 'Form Settings',
        'menu_title'    => 'Form',
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

function acf_load_color_field_choices( $field ) {

    // Reset choices
    $field['choices'] = [];

    $api_key = get_field( 'api_convert_kit', 'option' );
    $response = wp_remote_get("https://api.convertkit.com/v3/sequences?api_key=$api_key");
    $api_response = json_decode( wp_remote_retrieve_body( $response ), true );

    if( !isset( $api_response['courses'] ) ) return $field;

    foreach ( $api_response['courses'] as $data ) {
        $field['choices'][$data['id']] = $data['name'];
    }

    // Return the field
    return $field;
}

add_filter('acf/load_field/name=convert_kit_sequence', 'acf_load_color_field_choices');


function my_acf_init(): void
{
    acf_update_setting('google_api_key', 'AIzaSyBo9J0OkguRIRBBwFyY3BkSbEDi2Of6OXo');
}

add_action('acf/init', 'my_acf_init');