<?php if( $items = get_field( 'values_items' ) ): ?>
<section id="about_values" class="overlay overlay-dark bg-cover bg-center bg-fixed bg-no-repeat py-[100px] px-[30px]" style="background-image: url(<?= get_field( 'values_background_image' ) ?>)">
    <div class="container max-w-[1500px] w-full">
        <div class="flex flex-col gap-[80px]">
            <?php if( $heading = get_field( 'values_heading' ) ): ?>
                <div class="section-head text-center">
                    <h3 class="h3 heading-line line-center text-white"><?= $heading ?></h3>
                </div>
            <?php endif; ?>

            <div class="items grid lg:grid-cols-3 grid-cols-1 flex-wrap gap-[15px]">
                <?php foreach ( $items as $item ): ?>
                    <div class="item bg-white rounded p-[50px]">
                        <div class="flex flex-col gap-[20px]">
                            <h4 class="h4"><?= $item['heading'] ?></h4>
                            <div class="description xl:text-[25px] lg:text-[20px] sm:text-[18px] text-[16px]">
                                <?= $item['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>