<?php if( $steps = get_field( 'steps_items' ) ): ?>
<section id="home_steps" class="py-[100px]">
    <div class="container max-w-[1500px]">
        <?php if( $heading = get_field( 'steps_heading' ) ): ?>
            <h2 class="h3 heading-line line-center text-center"><?= $heading ?></h2>
        <?php endif; ?>
        <div class="steps flex mt-[60px]">
            <?php foreach ( $steps as $i => $step ):
                $bg = "primary";
                if( $i % 2 === 0 ) $bg = "secondary";
                ?>
                <div class="step-item w-[500px] step-<?= $bg ?> py-[60px] px-[50px]">
                    <div class="item-heading flex items-center gap-[30px]">
                        <img width="70" height="70" src="<?= $step['icon'] ?>" alt="Step Icon"/>
                        <h3 class="h4"><?= $step['heading'] ?></h3>
                    </div>
                    <div class="item-description mt-[30px] h4 !font-normal">
                        <?= $step['description'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>