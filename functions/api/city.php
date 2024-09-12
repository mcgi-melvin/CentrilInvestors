<?php
add_action("wp_ajax_get_city_map", "_get_city_map");
add_action("wp_ajax_nopriv_get_city_map", "_get_city_map");
function _get_city_map(): void
{
    $args = [
        'post_type' => 'city',
        'posts_per_page' => -1
    ];

    $coords = [];

    /*
    $query = new WP_Query( $args );

    if( $query->have_posts() ):
        while ( $query->have_posts() ): $query->the_post();
            $json = get_field( 'geojson' );
            $data = json_decode($json);
            if( $data && property_exists($data, "coordinates") ) {
                foreach ( $data->coordinates as $coordinates ) {
                    $coords[get_the_ID()] = recursive_get_coords( $coordinates );
                }
            }
        endwhile;
        wp_reset_postdata();
    endif;
    */

    $terms = get_terms([
        'taxonomy' => 'location',
        'hide_empty' => false,
    ]);

    if( $terms ) {
        foreach( $terms as $term ) {
            $json = get_field( 'geojson', "location_{$term->term_id}" );
            $data = json_decode($json);
            if( $data && property_exists($data, "coordinates") ) {
                foreach ( $data->coordinates as $coordinates ) {
                    $data = recursive_get_coords( $coordinates );
                    if( $data && is_array( $data[0] ) && count( $data[0] ) > 2 )
                        $data = $data[0];
                    $coords[$term->term_id] = $data;
                }
            }
        }
    }

    echo json_encode( $coords );
}

//add_action("init", "_get_city_map");

function recursive_get_coords( $coordinates )
{
    $output = [];

    if( array_every( $coordinates, "is_array" ) ) {
        foreach ( $coordinates as $coordinate ) {
            $output[] = recursive_get_coords($coordinate);
        }
    } else {
        $output = [
            "lng" => $coordinates[0],
            "lat" => $coordinates[1],
        ];
    }

    return $output;
}

function array_every(array $arr, callable $predicate): bool {
    foreach ($arr as $e) {
        if (!$predicate($e)) {
            return false;
        }
    }
    return true;
}