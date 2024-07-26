<?php
/**
 * Template Name: How it works
 */
get_header();

echo getSection('banner', 'how-works');

echo getSection('steps');

// Get Started Form

echo getSection( 'free-offer', 'how-works' );

echo getSection( 'why-choose' );

echo getSection( 'testimonials' );

get_footer();
