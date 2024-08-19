<?php
add_action("wp_ajax_form_subscriber_add", "_form_subscriber_add");
add_action("wp_ajax_nopriv_form_subscriber_add", "_form_subscriber_add");
function _form_subscriber_add(): void
{
    $fields = ['first_name', 'last_name', 'email', 'phone', 'address', 'form_source', 'integration'];

    if( !wp_verify_nonce( $_REQUEST['key'], 'form_buy'. $_REQUEST['form_id'] ) ) {
        json_response([
            'success' => false,
            'message' => 'Invalid nonce!'
        ]);
    }

    if( empty( $_REQUEST['first_name'] ) ) {
        json_response([
            'success' => false,
            'message' => 'First name is required!'
        ]);
    }

    if( empty( $_REQUEST['phone'] ) ) {
        json_response([
            'success' => false,
            'message' => 'Phone number is required!'
        ]);
    }

    if( !is_email( $_REQUEST['email'] ) ) {
        json_response([
            'success' => false,
            'message' => 'Email address is not valid!'
        ]);
    }

    $subscriber = wp_insert_post([
        'post_type'  => 'subscriber',
        'post_title' => $_REQUEST['first_name'] . " " . $_REQUEST['last_name'],
        'post_status' => 'publish',
        'post_content' => !empty( $_REQUEST['message'] ) ? $_REQUEST['message'] : ''
    ]);

    if( is_wp_error( $subscriber ) ) {
        json_response([
            'status' => false,
            'message' => $subscriber->get_error_message()
        ]);
    }

    foreach ( $fields as $field ) {
        update_field( $field, $_REQUEST[$field], $subscriber );
    }

    $fn = "integrate_{$_REQUEST['integration']}"( $subscriber );

    json_response([
        'success' => true,
        'message' => 'Thank you! Your subscription has been received!',
        'integration' => $fn
    ], 200);
}

function integrate_convert_kit( $post ): array|WP_Error
{
    $data = ['first_name', 'email'];
    $fields = ['last_name', 'phone', 'address'];
    $sequence = get_field( "convert_kit_sequence", "option" );

    $args = [
        "api_key" => get_field( 'api_convert_kit', 'option' )
    ];

    foreach ( $data as $field ) {
        $args[$field] = get_field( $field, $post );
    }

    foreach ( $fields as $field ) {
        $args['fields'][$field] = get_field( $field, $post );
    }

    return wp_remote_post("https://api.convertkit.com/v3/sequences/{$sequence['value']}/subscribe", [
        'body' => json_encode($args),
        'headers' => [
            'Content-Type' => 'application/json; charset=utf-8',
        ]
    ]);
}

function integrate_klaviyo( $post ) {
    $api_key = get_field( 'api_klaviyo', 'option' );

    $headers = [
        "Content-Type" => 'application/json',
        "Authorization" => "Klaviyo-API-Key $api_key",
        "revision" => "2024-07-15"
    ];

    $req_create = wp_remote_post("https://a.klaviyo.com/api/profiles/", [
        "headers" => $headers,
        "body" => json_encode([
            "data" => [
                "type" => "profile",
                "attributes" => [
                    "email" => get_field( 'email', $post ),
                    "first_name" => get_field( 'first_name', $post ),
                    "last_name" => get_field( 'last_name', $post ),
                    "properties" => [
                        "address" => get_field( 'address', $post ),
                        "phone_number" => get_field( 'phone', $post ),
                    ]
                ]
            ]
        ])
    ]);

    $req_create_body = json_decode( wp_remote_retrieve_body( $req_create ) );

    update_field( "integration_id", $req_create_body->data->id, $post );
    update_field( "integration", "klaviyo", $post );

    /*
    $obj = (object) [
        "type" => $req_create_body->data->type,
        "id" => $req_create_body->data->id,
        "attributes" => [
            "email" => $req_create_body->data->attributes->email,
            "phone_number" => "+1" . str_replace("-", "", $req_create_body->data->attributes->phone_number),
            "subscriptions" => [
                "email" => [
                    "marketing" => [
                        "consent" => "SUBSCRIBED"
                    ]
                ],
                "sms" => [
                    "marketing" => [
                        "consent" => "SUBSCRIBED"
                    ]
                ]
            ],
            "age_gated_date_of_birth" => date("Y-m-d", strtotime('-5 years')),
        ]
    ];

    return wp_remote_post("https://a.klaviyo.com/api/profile-subscription-bulk-create-jobs/", [
        "headers" => $headers,
        "body" => json_encode([
            "data" => [
                "type" => "profile-subscription-bulk-create-job",
                "attributes" => [
                    "custom_source" => "wp-lead-generation",
                    "profiles" => [
                        "data" => [
                            $obj
                        ]
                    ]
                ],
                "relationships" => [
                    "list" => [
                        "data" => []
                    ]
                ]
            ]
        ])
    ]);
    */

    return $req_create_body->data;
}

function integrate_podio( $post ) {

}


function integrate_direct_email( $post ) {

}