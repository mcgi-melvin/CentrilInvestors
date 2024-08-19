<?php
$terms = get_terms( array(
    'taxonomy'   => 'location',
    'hide_empty' => false,
) );

if( $terms ):
?>
<section id="locations" class="py-[100px] px-[30px] text-center">
    <div class="container max-w-[1500px]">
        <div class="flex flex-col gap-[50px]">
            <div class="section-head">
                <h3 class="h4 heading-line line-center">Our Coverage Area</h3>
            </div>

            <div class="section-list">
                <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3">
                    <?php
                    foreach ( $terms as $term ) {
                        echo getComponent('card', [
                            'image' => get_field( 'image', 'location_' . $term->term_id ),
                            'title' => $term->name,
                            'description' => $term->description,
                            'button' => [
                                'title' => 'Learn More',
                                'url' => get_term_link( $term )
                            ]
                        ]);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>