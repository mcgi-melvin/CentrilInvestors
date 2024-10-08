<?php if( $steps = get_field( 'steps_items' ) ): ?>
<section id="home_steps" class="py-[100px] px-[30px]">
    <div class="container max-w-[1500px]">
        <?php if( $heading = get_field( 'steps_heading' ) ): ?>
            <h2 class="h3 heading-line line-center text-center"><?= $heading ?></h2>
        <?php endif; ?>
        <div class="steps grid md:grid-cols-3 grid-cols-1 mt-[60px]">
            <?php foreach ( $steps as $i => $step ):
                $bg = "primary";
                if( $i % 2 === 0 ) $bg = "secondary";
                ?>
                <div class="step-item step-<?= $bg ?> mmd:py-[60px] mmd:px-[50px] py-[50px] px-[30px]">
                    <div class="flex flex-col gap-[30px]">
                        <div class="item-heading flex items-center gap-[30px]">
                            <img width="70" height="70" src="<?= $step['icon'] ?>" alt="Step Icon"/>
                            <h3 class="h4"><?= $step['heading'] ?></h3>
                        </div>
                        <div class="item-description h4 !font-normal">
                            <?= $step['description'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>