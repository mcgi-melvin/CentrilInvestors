<section id="global_banner" class="relative overlay overlay-dark bg-cover bg-center bg-no-repeat flex items-center min-h-[450px] py-[70px] px-[30px]" style="background-image: url(<?= get_field( 'banner_background_image' ) ?>)">
    <div class="container max-w-[1500px] w-full relative">
        <div class="flex flex-col gap-[50px]">
            <div class="section-head text-center">
                <?php if( $heading = get_field( 'banner_heading' ) ): ?>
                    <h1 class="text-white h2"><?= $heading ?></h1>
                <?php endif; ?>
                <?php if( $description = get_field( 'banner_description' ) ): ?>
                    <div class="text-white h4 !font-normal">
                        <?= $description ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="section-form container max-w-[450px] w-full">
                <div class="box bg-white px-[35px] py-[50px] rounded-[10px]">
                    <?= getComponent('form-buy') ?>
                </div>
            </div>
        </div>
    </div>
</section>