<?php if( $items = get_field( 'swb_items', 'option' ) ): ?>
<section id="global_why_sell" class="relative overlay overlay-dark bg-fixed bg-cover bg-center bg-no-repeat py-[100px] px-[30px]" style="background-image: url(<?= get_field( 'swb_background_image', 'option' ) ?>)">
    <div class="container flex flex-col gap-[80px] relative">
        <div class="flex justify-center items-center">
            <?php if( $heading = get_field( 'swb_heading', 'option' ) ): ?>
                <h3 class="text-white h3 heading-line line-center"><?= $heading ?></h3>
            <?php endif; ?>
        </div>
        <div class="container max-w-[1500px] w-full mx-auto">
            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3">
                <?php foreach ( $items as $item ): ?>
                <div class="bg-gray-tertiary rounded-[8px]">
                    <div class="flex flex-col gap-[25px] p-[40px]">
                        <div class="flex items-center gap-[20px]">
                            <svg class="w-[50px] h-[50px] fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                            </svg>
                            <h5 class="font-roboto font-semibold text-black text-[25px]"><?= $item['heading'] ?></h5>
                        </div>
                        <div class="description">
                            <?= $item['description'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>