<?php
function podio_auth() {
    $client_id = get_field( 'podio_client_id', 'option' );
    $client_secret = get_field( 'podio_client_secret', 'option' );
    $app_id = get_field( 'podio_app_id', 'option' );
    $app_token = get_field( 'podio_app_token', 'option' );

    $client = new PodioClient($client_id, $client_secret);
    $client->authenticate_with_app($app_id, $app_token);


}

podio_auth();