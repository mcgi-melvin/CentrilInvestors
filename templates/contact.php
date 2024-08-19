<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section class="relative bg-cover bg-center w-full min-h-[800px] py-[100px] px-[50px] overlay overlay-dark" style="background-image: url(<?php echo get_template_directory_uri() . ('/assets/images/contact-banner.jpg')?>)">
    <div class="container max-w-[1100px] w-full">
        <div class="flex flex-col gap-[50px]">
            <div class="flex flex-col gap-[50px]">
                <h2 class="h2 text-white text-center"><?= !empty( get_field( 'banner_heading' ) ) ? get_field( 'banner_heading' ) : get_the_title() ?></h2>

                <?php if( $description = get_field( 'banner_description' ) ): ?>
                    <div class="text-white h4 !font-sans !font-normal text-center mx-auto">
                        <?= $description ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if( $contacts = get_field( 'contacts', 'option' ) ): ?>
                <div class="flex flex-col text-center">
                    <div class="container max-w-[550px] mx-auto">
                        <div class="flex flex-col gap-[30px]">
                            <?php foreach ( $contacts as $i => $contact ):
                                $url = "tel:";
                                if( is_email( $contact['value'] ) )
                                    $url = "mailto:";
                                ?>
                                <div class="flex text-center justify-center gap-[20px]">
                                    <img class="w-[30px]" src="<?= $contact['icon'] ?>" alt="Contact <?= $i + 1 ?>" />
                                    <a href="<?= $url ?><?= $contact['value'] ?>" class="h5 text-white !font-normal"><?= $contact['value'] ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-[100px] px-[30px] bg-gray-secondary">
    <div class="flex flex-col gap-[50px]">
        <div class="section-head container max-w-[1100px] w-full">
            <div class="flex flex-col gap-[40px]">
                <?php if( $heading = get_field( 'fs_heading' ) ): ?>
                    <h2 class="h4 heading-line line-center text-center"><?= $heading ?></h2>
                <?php endif; ?>
                <?php if( $description = get_field( 'fs_description' ) ): ?>
                    <div class="text-[20px] text-center">
                        <?= $description ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="section-form container max-w-[1500px]">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[100px]">
                <div class="bg-white lg:px-[70px] px-[30px] py-[50px] rounded-[10px] lg:order-1 order-2">
                    <?= getComponent('form-contact') ?>
                </div>
                <?php if( $box = get_field( 'fs_box' ) ): ?>
                <div class="lg:max-w-[700px] lg:h-[700px] lg:order-2 order-1">
                    <h3 class="h4 pb-[50px]"><?= $box['heading'] ?></h3>
                    <?php if( $box['items'] ): ?>
                    <div class="flex flex-col gap-[20px] px-[40px]">
                        <?php foreach ( $box['items'] as $item ): ?>
                            <div class="flex items-center gap-[20px]">
                                <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                <p class="text-[20px]"><?= $item['value'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?= getSection('why-choose') ?>

<div class="bg-gray-tertiary">
    <?php echo getSection( 'faq' ); ?>
</div>

<?php
echo getSection( 'testimonials' );

get_footer(); ?>
