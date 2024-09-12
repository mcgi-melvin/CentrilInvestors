<?php
function populate_map_api_details(): void
{
    $args = [
        'post_type' => 'city',
        'meta_query' => [
            [
                [
                    'key' => 'general_address',
                    'compare' => 'EXISTS'
                ],
                [
                    'key' => 'general_address',
                    'value' => '',
                    'compare' => '!='
                ],
            ],
            [
                'key' => 'place_id',
                'value' => '',
                'compare' => '='
            ]
        ]
    ];

    $query = new WP_Query( $args );

    if( $query->have_posts() ):
        while ( $query->have_posts() ) : $query->the_post();

            $location = get_field( 'general_address' );

            $result = wp_remote_get("https://nominatim.openstreetmap.org/search.php?q={$location['address']}&polygon_geojson=1&format=json");

            if( is_wp_error( $result ) ) continue;

            $data = (array) json_decode( wp_remote_retrieve_body( $result ) );

            if( array_key_exists(0, $data) )
                $data = $data[0];

            foreach( $data as $key => $value ) {
                if( $key === 'geojson' ) {
                    update_field( $key, json_encode( $value ) );
                } elseif( $key === 'boundingbox' ) {
                    $arr = [];
                    foreach( $value as $b ) {
                        $arr[]['coordinate'] = $b;
                    }
                    update_field( $key, $arr );
                } else {
                    update_field( $key, $value );
                }
            }

        endwhile;
        wp_reset_postdata();
    endif;

    $tax = "location";

    $terms = get_terms( array(
        'taxonomy'   => $tax,
        'hide_empty' => false,
    ) );

    if( $terms ) {
        foreach ( $terms as $term ) {
            $location = get_field( 'general_address', "{$tax}_{$term->term_id}" );

            $result = wp_remote_get("https://nominatim.openstreetmap.org/search.php?q={$location['address']}&polygon_geojson=1&format=json");

            if( is_wp_error( $result ) ) continue;

            $data = (array) json_decode( wp_remote_retrieve_body( $result ) );

            if( array_key_exists(0, $data) )
                $data = $data[0];

            foreach( $data as $key => $value ) {
                if( $key === 'geojson' ) {
                    update_field( $key, json_encode( $value ), "{$tax}_{$term->term_id}" );
                } elseif( $key === 'boundingbox' ) {
                    $arr = [];
                    foreach( $value as $b ) {
                        $arr[]['coordinate'] = $b;
                    }
                    update_field( $key, $arr, "{$tax}_{$term->term_id}" );
                } else {
                    update_field( $key, $value, "{$tax}_{$term->term_id}" );
                }
            }
        }
    }
}

// add_action("init", "populate_map_api_details");