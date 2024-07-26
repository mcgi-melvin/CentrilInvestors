<?php
class site_custom_tax {

    private string $tax_singular;

    private string $tax_plural;

    private array $post_type;

    public function __construct( $singular, $plural, $post_type ) {

        $this->tax_singular = $singular;
        $this->tax_plural = $plural;
        $this->post_type = $post_type;

        register_taxonomy( $singular, $post_type, $this->args() );
    }

    private function labels(): array
    {
        $tax_singular = ucfirst( $this->tax_singular );
        $tax_plural = ucfirst( $this->tax_plural );
        return [
            'name'              => _x( $tax_plural, 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( $tax_singular, 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search ' . $tax_plural, 'textdomain' ),
            'all_items'         => __( 'All ' . $tax_plural, 'textdomain' ),
            'parent_item'       => __( 'Parent ' . $tax_singular, 'textdomain' ),
            'parent_item_colon' => __( 'Parent ' . $tax_singular . ':', 'textdomain' ),
            'edit_item'         => __( 'Edit ' . $tax_singular , 'textdomain' ),
            'update_item'       => __( 'Update ' . $tax_singular, 'textdomain' ),
            'add_new_item'      => __( 'Add New ' . $tax_singular , 'textdomain' ),
            'new_item_name'     => __( 'New ' . $tax_singular . ' Name', 'textdomain' ),
            'menu_name'         => __( $tax_plural, 'textdomain' ),
        ];
    }

    private function args(): array
    {
        return [
            'hierarchical'      => true,
            'labels'            => $this->labels(),
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => [ 'slug' => $this->tax_singular ],
        ];
    }
}

class site_cpt {

    private string $singular;
    private string $plural;
    private string $icon;

    private string $post_type;

    public function __construct( $singular, $plural, $icon = null ) {
        $this->singular = ucwords( $singular );
        $this->plural = ucwords( $plural );
        $this->icon = $icon;

        $this->post_type = str_replace( ' ', '-', $singular );
        register_post_type( $this->post_type, $this->args() );
    }

    private function label() {
        return array(
            'name'                  => _x( $this->singular, 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( $this->singular, 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( $this->plural, 'text_domain' ),
            'name_admin_bar'        => __( $this->plural, 'text_domain' ),
            'archives'              => __( $this->singular . ' Archives', 'text_domain' ),
            'attributes'            => __( $this->singular . ' Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent ' . $this->singular . ':', 'text_domain' ),
            'all_items'             => __( 'All ' . $this->plural, 'text_domain' ),
            'add_new_item'          => __( 'Add New ' . $this->singular, 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New ' . $this->singular, 'text_domain' ),
            'edit_item'             => __( 'Edit ' . $this->singular, 'text_domain' ),
            'update_item'           => __( 'Update ' . $this->singular, 'text_domain' ),
            'view_item'             => __( 'View ' . $this->singular, 'text_domain' ),
            'view_items'            => __( 'View ' . $this->plural, 'text_domain' ),
            'search_items'          => __( 'Search ' . $this->singular, 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into ' . $this->singular, 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this ' . $this->singular , 'text_domain' ),
            'items_list'            => __( $this->plural . ' list', 'text_domain' ),
            'items_list_navigation' => __( $this->plural . ' list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter ' . $this->plural . ' list', 'text_domain' ),
        );
    }

    private function args(): array
    {
        return array(
            'label'                 => __( $this->singular, 'text_domain' ),
            'description'           => __( $this->singular, 'text_domain' ),
            'labels'                => $this->label(),
            'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
            'show_in_rest'          => true,
            // 'taxonomies'            => [ $this->taxonomy, 'category', 'post_tag' ],
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'				=> $this->icon,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
    }
}


    function cpt(): void
    {
        new site_cpt( 'city', 'cities', 'dashicons-admin-site-alt' );
        new site_custom_tax( 'location', 'locations', ['singular' => 'city', 'plural' => 'cities', 'icon' => 'dashicons-admin-site-alt'] );
    }
    add_action( 'init', 'cpt', 0 );