<?php
add_filter( 'manage_subscriber_posts_columns', 'subscriber_columns' );
function subscriber_columns( $columns ): array
{
    $columns['content'] = __( 'Message' );
    $columns['email'] = __( 'Email' );
    $columns['phone'] = __( 'Phone' );
    $columns['address'] = __( 'Address', 'centrilinvestors' );
    $columns['integration'] = __( 'Integration', 'centrilinvestors' );
    return $columns;
}

add_action( 'manage_subscriber_posts_custom_column', '_subscriber_column', 10, 2);
function _subscriber_column( $column, $post_id ): void
{
    if( 'content' === $column )
        echo get_the_content( null, false, $post_id );
    if( 'email' === $column )
        echo get_field( 'email', $post_id );
    if( 'phone' === $column )
        echo get_field( 'phone', $post_id );
    if( 'address' === $column )
        echo get_field( 'address', $post_id );
    if( 'integration' === $column )
        echo get_field( 'integration', $post_id );
}

add_filter('pre_get_posts', 'wpse_81939_post_types_admin_order');
function wpse_81939_post_types_admin_order( $wp_query ): void
{
    if (is_admin()) {
        // Get the post type from the query
        $post_type = $wp_query->query['post_type'];
        if ( $post_type == 'subscriber') {
            $wp_query->set('orderby', 'date');
            $wp_query->set('order', 'DESC');
        }
    }
}