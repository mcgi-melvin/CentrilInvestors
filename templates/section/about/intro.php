<section id="about_intro">
    <div class="flex">
        <?php if( $content = get_field( 'intro_content_left' ) ): ?>
        <div class="w-1/2 py-[100px] px-[150px]">
            <div class="flex flex-col gap-[60px]">
                <h2 class="h3 heading-line"><?= $content['heading'] ?></h2>
                <div class="description h4 !font-normal">
                    <?= $content['description'] ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if( $content = get_field( 'intro_content_right' ) ): ?>
        <div class="w-1/2 py-[100px] px-[150px] bg-gray-primary">
            <div class="flex flex-col gap-[60px]">
                <h2 class="h3 heading-line"><?= $content['heading'] ?></h2>

                <div class="items flex flex-col gap-[35px]">
                    <?php foreach ( $content['items'] as $item ): ?>
                        <div class="item flex gap-[25px]">
                            <div class="icon">
                                <svg class="fill-[#18C649] w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                </svg>
                            </div>
                            <div class="content flex flex-col gap-[15px]">
                                <h4 class="h4 leading-[25px]"><?= $item['heading'] ?></h4>
                                <div class="description">
                                    <?= $item['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>