<?php
/**
 * Template Name: About
 */
get_header();

echo getSection( 'banner' );

echo getSection( 'intro', 'about' );

echo getSection( 'values', 'about' );

echo getSection( 'testimonials' );

echo getSection( 'team', 'about' );

echo getSection( 'faq' );

get_footer();
