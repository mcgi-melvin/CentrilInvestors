<?php if( $items = get_field( 'alternate_column_items', 'option' ) ): ?>
<section id="global_why_choose" class="bg-gray-light py-[100px] px-[50px]">
    <div class="container max-w-[1500px]">
        <?php if( $heading = get_field( 'alternate_column_heading', 'option' ) ): ?>
        <div class="section-heading mb-[80px]">
            <h3 class="h3 heading-line line-center text-center"><?= $heading ?></h3>
        </div>
        <?php endif; ?>

        <div class="section-items flex flex-col gap-[100px]">
            <?php foreach ( $items as $i => $item ): ?>
                <div class="section-item flex flex-wrap items-center justify-between">
                    <div class="item-image w-[55%] max-w-full h-[600px]">
                        <img width="100" height="100" class="w-full h-full object-cover" src="<?= $item['image'] ?>" alt="Why Choose Us Image <?= $i ?>" />
                    </div>
                    <div class="item-info w-[40%] max-w-full flex flex-col gap-[60px]">
                        <h4 class="h3 heading-line"><?= $item['heading'] ?></h4>
                        <div class="description">
                            <?= $item['description'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif ?>