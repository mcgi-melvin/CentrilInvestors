<?php
get_header();

$term = get_queried_object();
?>

<section id="global_banner" class="relative overlay bg-cover bg-center bg-no-repeat flex items-center h-[700px] px-[30px]" style="background-image: url(<?= get_field( 'image', 'location_' . $term->term_id ) ?>)">
    <div class="container max-w-[1500px] w-full relative">
        <div class="flex flex-col gap-[50px] text-center">
            <h1 class="text-white h2"><?php single_term_title() ?></h1>
            <?php if( !empty( $term->description ) ): ?>
                <div class="text-white h4 !font-normal">
                    <?= $term->description ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
if( have_posts() ):
?>
<section id="location_city" class="bg-gray-tertiary py-[100px] px-[30px]">
    <div class="container max-w-[1500px] w-full">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[20px]">
            <?php while ( have_posts() ): the_post(); ?>
                <a class="flex items-center justify-between h6 shadow bg-white px-[30px] py-[20px]" href="<?= get_the_permalink() ?>">
                    <span>Sell Property in <?= get_the_title() ?></span>
                    <svg class="w-[20px] fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php
    wp_reset_postdata();
endif;

echo getSection( 'form', 'offer' );

echo getSection('testimonials');

get_footer(); ?>
