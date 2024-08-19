<?php
get_header();

global $post;
?>

<section id="blog_banner" class="relative bg-cover bg-center w-full min-h-[450px] flex items-center justify-center px-[30px] pb-[100px] overlay overlay-dark" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
    <div class="max-w-full w-full h-full">
        <h1 class="text-white h2 text-center"><?php the_title() ?></h1>
    </div>
    <div class="!absolute left-1/2 bottom-0 -translate-x-1/2 w-full flex flex-col text-center">
        <div class="container relative max-w-[1200px] max-h-[100px] rounded-t-[16px] bg-white mx-auto">
            <div class="max-w-full px-[50px] py-[35px]">
                <div class="grid md:grid-cols-3 gap-[20px]">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="26" viewBox="0 0 448 512"><path fill="#FFD43B" d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                        <p class="h6 pl-[20px]"><?= get_the_date() ?></p>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="33" viewBox="0 0 576 512"><path fill="#FFD43B" d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
                        <p class="h6 pl-[20px]"><?= get_the_category()[0]->name ?></p>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="26" viewBox="0 0 448 512"><path fill="#FFD43B" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                        <p class="h6 pl-[20px] capitalize"><?= get_the_author_meta('display_name', $post->post_author ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="single_blog">
    <div class="px-[30px]">
        <div class="container max-w-[1200px]">
            <div class="py-[100px]">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
