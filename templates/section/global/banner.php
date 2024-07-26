<section id="global_banner" class="relative overlay bg-cover bg-center bg-no-repeat flex items-center h-[700px]" style="background-image: url(<?= get_field( 'banner_background_image' ) ?>)">
    <div class="container max-w-[1500px] w-full relative">
        <div class="flex flex-col gap-[50px] text-center">
            <h1 class="text-white h2"><?= !empty( get_field( 'banner_heading' ) ) ? get_field( 'banner_heading' ) : get_the_title() ?></h1>
            <?php if( $description = get_field( 'banner_description' ) ): ?>
                <div class="text-white h4 !font-normal">
                    <?= $description ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>