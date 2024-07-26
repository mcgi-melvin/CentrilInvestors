<?php
$terms = get_terms( array(
    'taxonomy'   => 'location',
    'hide_empty' => false,
) );

if( $terms ):
?>
<section id="locations" class="py-[100px] text-center">
    <div class="container max-w-[1500px]">
        <div class="flex flex-col gap-[50px]">
            <div class="section-head">
                <h3 class="h4 heading-line line-center">Our Coverage Area</h3>
            </div>

            <div class="section-list">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-3">
                    <?php foreach ( $terms as $term ): ?>
                    <div class="location-item overlay overlay-dark flex items-center h-[490px] w-[490px] relative bg-primary bg-cover bg-center bg-no-repeat cursor-pointer" style="background-image: url(<?= get_field( 'image', 'location_' . $term->term_id ) ?>)">
                        <div class="p-[30px] flex flex-col justify-center items-center w-full">
                            <div class="flex flex-col justify-around gap-[40px]">
                                <div class="location-name">
                                    <h4 class="text-white h4 heading-line line-center"><?= $term->name ?></h4>
                                </div>
                                <div class="description text-white font-light text-[18px] max-h-0 h-auto overflow-hidden">
                                    <?= wp_trim_words($term->description, 50) ?>
                                </div>
                                <div class="justify-center button-container hidden">
                                    <?= getComponent( 'button', [
                                            'button' => [
                                                'title' => 'Learn More',
                                                'url' => get_term_link( $term->term_id ),
                                                'style' => 'primary'
                                            ]
                                    ] ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>
<?php endif; ?>