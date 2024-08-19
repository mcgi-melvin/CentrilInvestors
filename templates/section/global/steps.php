<?php if( $items = get_field( 'steps_items', 'option' ) ):
    $colors = ['primary', 'secondary', 'tertiary'];
    ?>
<section id="global_steps">
    <?php foreach ( $items as $i => $item ): ?>
    <div class="container max-w-full relative">
        <?php if( $i !== 0 ): ?>
        <div class="h-[50px] bg-gray-<?= $colors[$i] ?>">
            <div class="step-arrow absolute top-0 left-0 w-full h-[50px] bg-gray-<?= $colors[$i - 1] ?>"></div>
        </div>
        <?php endif; ?>
        <div class="max-w-full min-h-[500px] px-[30px] bg-gray-<?= $colors[$i] ?> flex items-center">
            <div class="container max-w-[1000px] lg:min-h-[400px] flex flex-wrap justify-between lg:gap-0 gap-[50px]">
                <div class="lg:w-[150px] lg:h-[150px] w-[100px] h-[100px] bg-white rounded-full flex items-center justify-center p-[10px]">
                    <img class="h-[70px]" src="<?= $item['icon'] ?>" alt="Step <?= $i + 1 ?>" />
                </div>
                <div class="flex flex-col gap-[45px] lg:w-[calc(100%-200px)] w-full self-center">
                    <h1 class="h4"><?= $item['heading'] ?></h1>
                    <div class="text-[20px]">
                        <?= $item['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>