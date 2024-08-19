<section id="buyer_form" class="relative bg-secondary pt-[150px] pb-[100px] px-[30px]">
    <div class="step-arrow absolute top-0 left-0 w-full h-[50px] bg-gray-tertiary"></div>
    <div class="container max-w-[1000px] w-full">
        <div class="flex flex-col gap-[70px]">
            <div class="section-head text-center">
                <div class="flex flex-col gap-[40px]">
                    <?php if( $heading = get_field( 'buyers_form_heading', 'option' ) ): ?>
                        <h3 class="h4 text-primary heading-line line-white line-center"><?= $heading ?></h3>
                    <?php endif; ?>
                    <?php if( $description = get_field( 'buyers_form_description', 'option' ) ): ?>
                        <div class="description text-white text-[20px]">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="section-form">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-[70px]">
                    <div class="column-form lg:order-1 order-2">
                        <div class="box bg-white px-[35px] py-[50px] rounded-[10px]">
                            <?= getComponent('form-sell') ?>
                        </div>
                    </div>
                    <?php if( $content = get_field( 'buyers_form_list', 'option' ) ): ?>
                    <div class="column-text lg:order-2 order-1">
                        <div class="flex flex-col gap-[50px]">
                            <h4 class="h6 text-white"><?= $content['heading'] ?></h4>

                            <?php if( $items = $content['items'] ): ?>
                                <div class="items flex flex-col gap-[15px] pl-[30px]">
                                    <?php foreach ( $items as $item ): ?>
                                        <div class="item flex gap-[20px]">
                                            <svg class="fill-primary w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                            </svg>
                                            <span class="text-white text-[20px]"><?= $item['item'] ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>