<?php
/**
 * Template Name: Home
 */
get_header();

echo getSection('hero', 'home');

echo getSection('steps', 'home');

echo getSection( 'why-choose' );

echo getSection( 'content-right', 'home' );

echo getSection('testimonials');
?>

<a id="start"></a>

<?php
echo getSection( 'form', 'home' );

get_footer();
