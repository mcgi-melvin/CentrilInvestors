<?php
/**
 * Essential theme supports
 * */
add_action('after_setup_theme','theme_setup');
function theme_setup(): void
{
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = ['aside','image', 'gallery', 'video', 'audio', 'link', 'quote', 'status'];
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ]);

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
}

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

add_action('init', 'add_nav_menus');
function add_nav_menus(): void
{
    register_nav_menus( [
        'header-menu'  =>  'Header Menu',
        'footer-menu'   => 'Footer Menu',
    ]);
}

add_filter( 'show_admin_bar', '__return_false' );