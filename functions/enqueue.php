<?php
add_action('wp_enqueue_scripts', 'ci_enqueues');
function ci_enqueues(): void
{
    wp_dequeue_style('wp-block-style');
    wp_dequeue_style('wp-block-library');

    wp_enqueue_style('font', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Roboto:wght@400;500;700&display=swap", [], null );
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', [], null );
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', [], null );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], null );

    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true );
}
