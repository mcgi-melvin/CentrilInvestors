<section id="buyers_intro" class="py-[120px] px-[30px]">
    <div class="container max-w-[1200px] w-full">
        <div class="flex flex-col gap-[50px] text-center">
            <?php if( $heading = get_field( 'intro_heading' ) ): ?>
                <h2 class="h4 heading-line line-center"><?= $heading ?></h2>
            <?php endif; ?>
            <?php if( $description = get_field( 'intro_description' ) ): ?>
                <div class="description h4 !font-sans !font-normal">
                    <?= $description ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>