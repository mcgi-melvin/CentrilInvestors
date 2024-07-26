<?php if( $items = get_field( 'testimonials_items', 'option' ) ): ?>
    <section id="global_testimonials" class="py-[100px]">
        <div class="relative container max-w-[1500px] w-full">
            <div class="flex flex-col gap-[50px]">
                <?php if( $heading = get_field( 'testimonials_heading', 'option' ) ): ?>
                    <div class="section-head text-center">
                        <h2 class="h4 heading-line line-center"><?= $heading ?></h2>
                    </div>
                <?php endif; ?>

                <div class="container max-w-[1300px] w-full">
                    <div class="section-slider">
                        <?php foreach ( $items as $item ): ?>
                            <div class="testimonial-item p-[3px]">
                                <div class="bg-[#eee] h-[300px] p-[30px]">
                                    <div class="flex flex-col justify-between h-full">
                                        <div class="testimonial-message text-[18px]">
                                            <?= $item['message'] ?>
                                        </div>
                                        <div class="testimonial-user text-right text-[20px] font-roboto font-semibold">
                                            <?= $item['name'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(($) => {
            $('.section-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                arrows: true,
                prevArrow:`<button type='button' class='slick-prev pull-left'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg></button>`,
                nextArrow:`<button type='button' class='slick-next pull-right'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg></button>`
            });
        })
    </script>
<?php endif; ?>