<?php if( $team = get_field( 'team_items' ) ): ?>
<section id="about_team" class="bg-gray-primary py-[70px]">
    <div class="container max-w-[1300px]">
        <div class="flex flex-col gap-[60px]">
            <?php if( $heading = get_field( 'team_heading' ) ): ?>
            <div class="section-head text-center">
                <h3 class="h4 heading-line line-center"><?= $heading ?></h3>
            </div>
            <?php endif; ?>

            <div class="flex flex-col gap-[50px]">
                <div class="member-avatar flex justify-center gap-[20px]">
                    <?php foreach ( $team as $i => $member ): ?>
                        <a
                            href="javascript:void(0)"
                            class="member-item item-<?= $i ?> relative block rounded-full w-[255px] h-[255px] overflow-hidden"
                            onclick="setMemberActive(<?= $i ?>)"
                        >
                            <img class="w-full h-full object-cover" src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" />
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="member-info">
                    <?php foreach ( $team as $i => $member ): ?>
                        <div class="info-<?= $i ?> hidden box bg-white rounded-[10px] py-[50px] px-[25px]">
                            <div class="flex flex-col gap-[40px] text-center">
                                <h4 class="h4 member-name"><?= $member['name'] ?></h4>
                                <div class="member-description text-[25px]"><?= $member['description'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
let current = 0,
    total = <?= count( $team ) ?>

setMemberActive(current)

setInterval(() => {
    current = current + 1
    if( current === total )
        current = 0

    setMemberActive(current)
}, 5000)

function setMemberActive( index ) {
    const
        member_info = jQuery('.member-info'),
        member_avatar = jQuery('.member-avatar')

    member_avatar.find('.member-item').each(function () {
        jQuery(this).removeClass('active')
    })

    member_info.find('> div').each(function () {
        jQuery(this).hide()
    })

    member_avatar.find(`.item-${index}`).addClass('active')
    member_info.find(`.info-${index}`).fadeIn('slow')
}
</script>
<?php endif; ?>