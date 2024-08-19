<section class="relative bg-gray-tertiary pt-[150px] pb-[100px] px-[30px]">
    <div class="container max-w-[1000px] w-full">
        <div class="flex flex-col gap-[70px]">
            <div class="section-head text-center">
                <div class="flex flex-col gap-[40px]">
                    <?php if( $heading = get_field( 'contact_heading' ) ): ?>
                        <h3 class="h4 heading-line line-center"><?= $heading ?></h3>
                    <?php endif; ?>
                    <?php if( $description = get_field( 'contact_description' ) ): ?>
                        <div class="description text-[20px]">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="section-form">
                <div class="box bg-white max-w-[450px] w-full mx-auto px-[35px] py-[50px] rounded-[10px]">
                    <?= getComponent('form-buy') ?>
                </div>
            </div>
        </div>
    </div>
</section>