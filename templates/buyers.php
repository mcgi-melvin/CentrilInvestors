<?php
/**
 * Template Name: Buyer's
 */
get_header();

echo getSection('banner', 'buyers');

echo getSection( 'intro', 'buyers' );

echo getSection( 'form', 'buyers' );

echo getSection( 'testimonials' );

get_footer();
