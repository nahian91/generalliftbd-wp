<?php
/**
 * Register Custom Post Types for GeneralLift
 */
function glt_register_custom_post_types() {

    $cpts = [
        'product'     => ['singular' => 'Product',     'plural' => 'Products',     'icon' => 'dashicons-cart'],
        'team'        => ['singular' => 'Team Member', 'plural' => 'Teams',        'icon' => 'dashicons-groups'],
        'client'      => ['singular' => 'Client',      'plural' => 'Clients',      'icon' => 'dashicons-businessperson'],
        'brand'       => ['singular' => 'Brand',       'plural' => 'Brands',       'icon' => 'dashicons-awards'],
        'banner'      => ['singular' => 'Banner',      'plural' => 'Banners',      'icon' => 'dashicons-images-alt2'],
        'certificate' => ['singular' => 'Certificate', 'plural' => 'Certificates', 'icon' => 'dashicons-media-document'],
        'testimonial' => ['singular' => 'Testimonial', 'plural' => 'Testimonials', 'icon' => 'dashicons-testimonial'],
    ];

    foreach ($cpts as $slug => $data) {
        $labels = [
            'name'               => $data['plural'],
            'singular_name'      => $data['singular'],
            'add_new'            => 'Add New ' . $data['singular'],
            'add_new_item'       => 'Add New ' . $data['singular'],
            'edit_item'          => 'Edit ' . $data['singular'],
            'new_item'           => 'New ' . $data['singular'],
            'view_item'          => 'View ' . $data['singular'],
            'search_items'       => 'Search ' . $data['plural'],
            'not_found'          => 'No ' . strtolower($data['plural']) . ' found',
            'all_items'          => 'All ' . $data['plural'],
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => ($slug === 'product' || $slug === 'team'), // Archives only for products/team
            'show_in_rest'       => true, // Enables Gutenberg Editor
            'menu_icon'          => $data['icon'],
            'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
            'rewrite'            => ['slug' => $slug . 's'],
            'menu_position'      => 20,
        ];

        register_post_type($slug, $args);
    }
}
add_action('init', 'glt_register_custom_post_types');