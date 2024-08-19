<section id="home_hero" class="xl:h-[750px] h-auto border-b-[1px]">
    <div class="flex flex-wrap items-center h-full">
        <div class="section-column column-left relative 2xl:w-[70%] xl:w-[60%] lg:w-1/2 w-full h-full flex items-center bg-cover bg-center bg-no-repeat px-[30px] py-[100px] overlay" style="background-image: url(<?= get_field( 'hero_background_image' ) ?>)">
            <div class="relative w-[1100px] max-w-full mx-auto">
                <div class="flex flex-col xl:items-start items-center xl:text-left text-center gap-[50px]">
                    <?php if( $heading = get_field( 'hero_heading' ) ): ?>
                        <h1 class="h1 text-white w-[550px] max-w-full">
                            <?php getColoredText( $heading, ["{" => ["class" => ["text-primary"], "end" => "}"]] ) ?>
                        </h1>
                    <?php endif; ?>
                    <?php if( $buttons = get_field( 'hero_buttons' ) ): ?>
                        <div class="button-container flex flex-wrap items-center gap-2">
                            <?php
                                foreach ( $buttons as $i => $button ) {
                                    $style = "white";
                                    if( $i % 2 === 0 ) $style = "primary";
                                    $button['button']['style'] = $style;
                                    echo getComponent( 'button', $button );
                                }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="section-column column-right 2xl:w-[30%] xl:w-[40%] lg:w-1/2 w-full h-full flex items-center justify-center py-[30px] px-[30px]">
            <div class="md:max-w-[380px] w-full">
                <?= getComponent('form-sell') ?>
            </div>
        </div>
    </div>
</section>