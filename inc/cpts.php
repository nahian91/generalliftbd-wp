<?php
/**
 * Register All Custom Post Types & Taxonomies for GeneralLift
 * Full Feature Set: Labels, Icons, Gutenberg Support, and Rewrites.
 */

function glt_register_all_cpt_features() {

    // 1. PRODUCTS (With Custom Category Taxonomy)
    register_post_type('product', [
        'labels' => [
            'name'                  => 'Products',
            'singular_name'         => 'Product',
            'menu_name'             => 'Products',
            'name_admin_bar'        => 'Product',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Product',
            'new_item'              => 'New Product',
            'edit_item'             => 'Edit Product',
            'view_item'             => 'View Product',
            'all_items'             => 'All Products',
            'search_items'          => 'Search Products',
            'parent_item_colon'     => 'Parent Products:',
            'not_found'             => 'No products found.',
            'not_found_in_trash'    => 'No products found in Trash.',
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-cart',
        'menu_position'      => 5,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
        'show_in_rest'       => true,
        'rewrite'            => ['slug' => 'products'],
    ]);

    register_taxonomy('product_cat', 'product', [
        'labels' => [
            'name'              => 'Product Categories',
            'singular_name'     => 'Product Category',
            'search_items'      => 'Search Categories',
            'all_items'         => 'All Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Product Category',
            'menu_name'         => 'Categories',
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'product-category'],
    ]);

    // 2. SERVICES
    register_post_type('service', [
        'labels' => [
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
            'all_items'     => 'All Services',
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-hammer',
        'supports'           => ['title'],
        'show_in_rest'       => false,
        'rewrite'            => ['slug' => 'services'],
    ]);

    // 3. TESTIMONIALS
    register_post_type('testimonial', [
        'labels' => [
            'name'          => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new_item'  => 'Add New Testimonial',
        ],
        'public'             => false,
        'show_ui'            => true,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => ['title', 'thumbnail'],
        'show_in_rest'       => false, // Allows using blocks for quotes
    ]);

    // 4. BRANDS
    register_post_type('brand', [
        'labels' => ['name' => 'Brands', 'singular_name' => 'Brand', 'add_new_item' => 'Add New Brand'],
        'public'      => true,
        'menu_icon'   => 'dashicons-tag',
        'supports'    => ['title', 'thumbnail'],
        'show_in_rest' => false,
    ]);

    // 5. CLIENTS
    register_post_type('client', [
        'labels' => ['name' => 'Clients', 'singular_name' => 'Client', 'add_new_item' => 'Add New Client'],
        'public'      => true,
        'menu_icon'   => 'dashicons-groups',
        'supports'    => ['title', 'thumbnail'],
        'show_in_rest' => true,
    ]);

    // 6. CERTIFICATES
    register_post_type('certificate', [
        'labels' => ['name' => 'Certificates', 'singular_name' => 'Certificate', 'add_new_item' => 'Add New Certificate'],
        'public'      => true,
        'menu_icon'   => 'dashicons-awards',
        'supports'    => ['title', 'thumbnail'],
        'show_in_rest' => true,
    ]);

    // 7. GALLERY
    register_post_type('gallery', [
        'labels' => ['name' => 'Gallery', 'singular_name' => 'Gallery Item', 'add_new_item' => 'Add New Gallery Item'],
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-format-gallery',
        'supports'    => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'rewrite'     => ['slug' => 'gallery'],
    ]);

    // 8. TEAMS
    register_post_type('team', [
        'labels' => [
            'name'          => 'Teams',
            'singular_name' => 'Team',
            'add_new_item'  => 'Add New Team Member',
            'all_items'     => 'All Members',
        ],
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-businessperson',
        'supports'    => ['title', 'thumbnail'],
        'show_in_rest' => false,
        'rewrite'     => ['slug' => 'team'],
    ]);

    // 9. COUNTER (Stats)
    register_post_type('counter', [
        'labels' => [
            'name'          => 'Counters',
            'singular_name' => 'Counter',
            'add_new_item'  => 'Add New Stat',
        ],
        'public'      => false,
        'show_ui'     => true,
        'menu_icon'   => 'dashicons-performance',
        'supports'    => ['title'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'glt_register_all_cpt_features');