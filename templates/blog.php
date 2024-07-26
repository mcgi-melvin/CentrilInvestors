<?php
/**
 * Template Name: Blog
 */
get_header();

echo getSection('banner', 'blog');

echo getSection('list', 'blog');

echo getSection('why-sell');

get_footer();
