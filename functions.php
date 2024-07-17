<?php
function _load_functions(): void
{
    $folder = get_template_directory() . "/functions";
    $files = array_diff(scandir($folder), array('.', '..'));

    foreach ( $files as $file ) {
        $path = get_template_directory() . "/functions/$file";
        if( ! file_exists($path) ) continue;
        require_once $path;
    }
}

_load_functions();

function getComponent( string $file, string $template = "global" ): false|string
{
    $path = get_template_directory() . "/components/{$template}/$file.php";
    if( !file_exists($path) ) return false;

    ob_start();
    require $path;
    return ob_get_clean();
}