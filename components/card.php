<div class="card overlay overlay-dark flex items-center h-[490px] w-full relative bg-primary bg-cover bg-center bg-no-repeat cursor-pointer" style="background-image: url(<?= $image ?? "" ?>)">
    <div class="p-[30px] flex flex-col justify-center items-center w-full">
        <div class="flex flex-col justify-around gap-[40px]">
            <?php if( isset( $title ) ): ?>
                <div class="location-name">
                    <h4 class="text-white h4 heading-line line-center leading-[35px]"><?= $title ?></h4>
                </div>
            <?php endif; ?>
            <div class="location-details flex flex-col justify-around gap-[40px] max-h-0 h-auto overflow-hidden">
                <?php if( isset( $description ) ): ?>
                    <div class="description text-white font-light text-[18px]">
                        <?= wp_trim_words($description, 50) ?>
                    </div>
                <?php endif; ?>
                <?php if( isset( $button ) && is_array( $button ) ): ?>
                <div class="justify-center button-container">
                    <?= getComponent( 'button', [
                        'button' => [
                            'title' => $button['title'],
                            'url' => $button['url'],
                            'style' => $button['style'] ?? 'primary'
                        ]
                    ] ) ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>