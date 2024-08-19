<section id="how_works_form" class="relative bg-secondary pt-[150px] pb-[100px] px-[30px]">
    <div class="step-arrow absolute top-0 left-0 w-full h-[50px] bg-gray-tertiary"></div>
    <div class="container max-w-[1000px] w-full">
        <div class="flex flex-col gap-[30px]">
            <div class="section-head text-center">
                <div class="flex flex-col gap-[40px]">
                    <?php if( $heading = get_field( 'form_heading' ) ): ?>
                        <h3 class="h4 text-primary heading-line line-white line-center"><?= $heading ?></h3>
                    <?php endif; ?>
                    <?php if( $description = get_field( 'form_description' ) ): ?>
                        <div class="description text-white">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="section-form">
                <div class="box max-w-[450px] w-full mx-auto rounded-[10px] bg-white px-[35px] py-[45px]">
                    <?= getComponent( 'form-sell' ) ?>
                </div>
            </div>
        </div>
    </div>
</section>