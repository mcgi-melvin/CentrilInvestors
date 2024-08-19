<?php
function convert_kit_subscriber_add() {
    $api_key = get_field( 'api_convert_kit', 'option' );
    $response = wp_remote_get("https://api.convertkit.com/v3/forms?api_key=$api_key");
    $api_response = json_decode( wp_remote_retrieve_body( $response ), true );

    foreach ( $api_response['forms'] as $data ) {
        var_dump( $data['id'] );
    }
}