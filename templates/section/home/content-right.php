<section id="home_content_right">
    <div class="flex flex-wrap">
        <div class="column-image lg:w-1/2 w-full min-h-[400px] bg-cover bg-center bg-no-repeat" style="background-image: url(<?= get_field( 'wyst_image' ) ?>)"></div>
        <div class="column-text lg:w-1/2 w-full bg-gray-secondary py-[80px] lg:px-[70px] px-[30px]">
            <div class="flex flex-col gap-[60px]">
                <div class="content-head">
                    <?php if( $heading = get_field( 'wyst_heading' ) ): ?>
                        <h3 class="h3 heading-line"><?= $heading ?></h3>
                    <?php endif; ?>
                </div>
                <?php if( $items = get_field( 'wyst_items' ) ): ?>
                    <div class="content-items flex flex-col gap-[35px]">
                        <?php foreach ( $items as $item ): ?>
                            <div class="content-item flex gap-[25px]">
                                <div class="icon">
                                    <svg class="fill-[#18C649] w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                    </svg>
                                </div>
                                <div class="content flex flex-col gap-[15px]">
                                    <h4 class="h4 leading-[25px]"><?= $item['heading'] ?></h4>
                                    <div class="description md:text-[20px] sm:text-[18px] text-[16px]">
                                        <?= $item['description'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>