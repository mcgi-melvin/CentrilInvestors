<section id="home_hero" class="h-[750px] border-b-[1px]">
    <div class="flex h-full">
        <div class="section-column column-left relative w-[70%] h-full flex items-center bg-cover bg-center bg-no-repeat px-[30px] py-[50px] overlay" style="background-image: url(<?= get_field( 'hero_background_image' ) ?>)">
            <div class="relative w-[1100px] max-w-full mx-auto">
                <div class="flex flex-col gap-[50px]">
                    <?php if( $heading = get_field( 'hero_heading' ) ): ?>
                        <h1 class="h1 text-white w-[550px] max-w-full">
                            <?= getColoredText( $heading, ["{" => ["class" => ["text-primary"], "end" => "}"]] ) ?>
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
        <div class="section-column column-right w-[30%] h-full">

        </div>
    </div>
</section>