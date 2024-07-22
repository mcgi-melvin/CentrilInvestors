<?php
/**
 * Template Name: Home
 */
get_header();

echo getSection('hero', 'home');

echo getSection('steps', 'home');

echo getSection( 'why-choose' );

get_footer();
