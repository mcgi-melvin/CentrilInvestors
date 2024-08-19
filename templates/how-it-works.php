<?php
/**
 * Template Name: How it works
 */
get_header();

echo getSection('banner', 'how-works');

echo getSection('steps');

echo getSection( 'form', 'how-works' );

echo getSection( 'free-offer', 'how-works' );

echo getSection( 'why-choose' );

echo getSection( 'testimonials' );

get_footer();
