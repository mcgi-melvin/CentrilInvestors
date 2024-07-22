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

function getSection( string $file, string $folder = "global" ): false|string
{
    $path = get_template_directory() . "/templates/section/{$folder}/$file.php";
    if( !file_exists($path) ) return false;

    ob_start();
    require $path;
    return ob_get_clean();
}

function getComponent( string $file, array $params = [] ): false|string
{
    $path = get_template_directory() . "/components/$file.php";
    if( !file_exists($path) ) return false;

    foreach ( $params as $key => $val ) $$key = $val;

    ob_start();
    require $path;
    return ob_get_clean();
}

function getColoredText( string $text, array $params = [] ): string
{
    /*
    foreach ( $params as $key => $val ) {
        $text = str_replace("{{$key}}", $val, $text);
    }
    */

    return $text;
}