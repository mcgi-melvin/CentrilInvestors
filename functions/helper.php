<?php
function json_response( $arr, $code = 400 ): void
{
    http_response_code($code);
    echo wp_json_encode( $arr );
    exit;
}