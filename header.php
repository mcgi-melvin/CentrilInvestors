<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="h-[120px] shadow sticky top-0 bg-white z-[5]">
    <div class="flex items-stretch justify-between h-full">
        <div class="header-left">
            <div class="site-logo bg-secondary w-[250px] h-full flex items-center justify-center">
                <?php if( $logo = get_field( 'site_logo', 'option' ) ): ?>
                    <a href="<?= site_url() ?>">
                        <img class="w-full max-w-[150px] mx-auto" src="<?= $logo ?>" alt="CentrIL Investors Logo" />
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="header-right">
            <?php wp_nav_menu(['theme_location' => 'header-menu']) ?>
        </div>
    </div>
</header>