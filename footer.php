    <footer class="bg-[#838383] sm:text-left text-center">
        <div class="flex flex-wrap items-stretch justify-between">
            <div class="footer-left relative lg:w-[80%] w-full lg:p-[50px] pt-[100px] px-[30px] pb-[50px] lg:order-1 order-2">
                <div class="flex flex-wrap flex-col gap-[50px] container max-w-[1200px] w-full">
                    <div class="flex flex-wrap justify-between gap-[50px]">
                        <div class="footer-column-item mmd:w-auto sm:w-[calc(50%-50px)] w-full">
                            <div class="flex flex-col gap-[30px]">
                                <h4 class="h6 heading-line line-small text-white">Pages</h4>
                                <?php wp_nav_menu(['theme_location' => 'footer-menu']) ?>
                            </div>
                        </div>
                        <?php if( $terms = get_terms(['taxonomy' => 'location', 'hide_empty' => false]) ): ?>
                            <div class="footer-column-item mmd:w-auto sm:w-[calc(50%-50px)] w-full">
                                <div class="flex flex-col gap-[30px]">
                                    <h4 class="h6 text-white heading-line line-small">Locations</h4>
                                    <div class="list">
                                        <ul>
                                            <?php foreach ( $terms as $term ): ?>
                                                <li>
                                                    <a href="<?= get_term_link( $term ) ?>"><?= $term->name ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if( $contacts = get_field( 'contacts', 'option' ) ): ?>
                            <div class="footer-column-item mmd:w-auto sm:w-[calc(50%-50px)] w-full">
                                <div class="flex flex-col gap-[30px]">
                                    <h4 class="h6 text-white heading-line line-small">Contact</h4>
                                    <div class="list">
                                        <ul>
                                            <?php foreach ( $contacts as $contact ):
                                                $letter = "T";
                                                $url = "tel:";
                                                if( is_email( $contact['value'] ) ) {
                                                    $letter = "E";
                                                    $url = "mailto:";
                                                }
                                                ?>
                                                <li><a href="<?= $url ?><?= $contact['value'] ?>"><?= $letter ?>: <?= $contact['value'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if( $socials = get_field( 'socials', 'option' ) ): ?>
                            <div class="footer-column-item mmd:w-auto sm:w-[calc(50%-50px)] w-full">
                                <div class="flex flex-col gap-[30px]">
                                    <h4 class="h6 text-white heading-line line-small">Social</h4>
                                    <div class="list list-social">
                                        <ul class="flex flex-row sm:justify-normal justify-center gap-[10px]">
                                            <?php foreach ( $socials as $social ): ?>
                                                <li>
                                                    <a href="<?= $social['url'] ?>" target="_blank" aria-label="<?= $social['platform']['label'] ?>"><?= getSocialIcon( $social['platform']['value'] ) ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="copyright font-roboto text-[12px] text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <?= get_bloginfo('name') ?> &copy; <?= date('Y') ?>
                            </div>
                            <div class="flex items-center gap-[5px]">
                                <span class="leading-[1px]">Built by</span><a class="text-[12px]" href="https://melvinlomibao.com" target="_blank">Melvin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-right lg:w-[20%] w-full p-[50px] bg-[#3A3A3A] flex items-center justify-center lg:order-2 order-1">
                <?php if( $logo = get_field( 'site_logo', 'option' ) ): ?>
                    <img class="w-[150px]" src="<?= $logo ?>" alt="CentrIL Investors logo">
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>