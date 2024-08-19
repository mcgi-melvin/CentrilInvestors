<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="shadow sticky top-0 bg-white z-[5]">
    <div class="flex items-stretch justify-between h-full">
        <div class="header-left">
            <div class="site-logo bg-secondary lg:w-[250px] md:w-[200px] w-[180px] h-full flex items-center justify-center">
                <?php if( $logo = get_field( 'site_logo', 'option' ) ): ?>
                    <a href="<?= site_url() ?>">
                        <img class="w-full lg:max-w-[140px] md:max-w-[120px] max-w-[100px] mx-auto" src="<?= $logo ?>" alt="CentrIL Investors Logo" />
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="header-right desktop-menu mmd:block hidden">
            <?php wp_nav_menu(['theme_location' => 'header-menu']) ?>
        </div>
        <div class="header-right mobile-menu mmd:hidden block">
            <button class="bg-primary border-0 w-[100px] h-full flex items-center justify-center" onclick="showMenu()" aria-label="Mobile Menu">
                <svg class="bar w-[30px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
                </svg>
                <svg class="close w-[30px] fill-white hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<section id="mobile_menu" class="hidden fixed top-[100px] left-0 w-full h-[calc(100%-100px)] items-center z-10 bg-secondary">
    <div class="container text-center">
        <?php wp_nav_menu(['theme_location' => 'header-menu']) ?>
    </div>
</section>