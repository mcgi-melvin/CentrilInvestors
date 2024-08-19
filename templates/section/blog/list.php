<?php
$query = new WP_Query([
    'posts_per_page' => -1,
]);
if( $query->have_posts() ):
?>
<section id="blogs" class="py-[100px] px-[30px] text-center">
    <div class="container max-w-[1500px] w-full">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[10px]">
            <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                echo getComponent('card', [
                    'image' => get_the_post_thumbnail_url(),
                    'title' => get_the_title(),
                    'description' => wp_trim_words( get_the_excerpt(), 20 ),
                    'button' => [
                        'title' => 'Read More',
                        'url' => get_the_permalink(),
                    ]
                ]);
            }
            ?>
        </div>
    </div>
</section>
<?php
    wp_reset_postdata();
endif;
?>