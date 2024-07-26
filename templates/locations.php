<?php
/**
 * Template Name: Locations
 */
get_header();

echo getSection('banner');

echo getSection('locations', 'locations');

echo getSection( 'why-sell' );

echo getSection('testimonials');

get_footer();