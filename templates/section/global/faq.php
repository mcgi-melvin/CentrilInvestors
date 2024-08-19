<?php if( $items = get_field( 'faqs_items', 'option' ) ): ?>
<section id="global_faq" class="py-[100px] px-[30px]">
    <div class="container max-w-[1000px] w-full">
        <div class="flex flex-col gap-[60px]">
            <?php if( $heading = get_field( 'faqs_heading', 'option' ) ): ?>
                <div class="section-head text-center">
                    <h3 class="h4 heading-line line-center"><?= $heading ?></h3>
                </div>
            <?php endif; ?>

            <div class="faq-items flex flex-col gap-[20px]">
                <?php foreach ( $items as $i => $item ): ?>
                    <div class="faq-item item-<?= $i ?>">
                        <a href="javascript:void(0)" class="item-question bg-secondary flex items-center justify-between lg:p-[30px] py-[20px] px-[30px]" onclick="toggleFaq(<?= $i ?>)">
                            <h4 class="h5 text-white"><?= $item['question'] ?></h4>
                            <div>
                                <svg class="plus w-[30px] fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
                                <svg class="minus w-[30px] fill-primary hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            </div>
                        </a>
                        <div class="item-answer md:text-[20px] sm:text-[18px] text-[16px] p-[30px] bg-gray-secondary hidden">
                            <?= $item['answer'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<script>
function toggleFaq( index ) {
    const faq_item = jQuery(`.faq-item.item-${index}`)
    faq_item.find('.plus').toggleClass('hidden')
    faq_item.find('.minus').toggleClass('hidden')
    faq_item.find('.item-answer').fadeToggle()
}
</script>
<?php endif; ?>