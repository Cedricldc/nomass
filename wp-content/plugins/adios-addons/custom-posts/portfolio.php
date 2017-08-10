<?php
/**
 * Portfolio custom posty type
 */
$labels = array(
	'name'               => _x( 'Portfolio', 'Items','animo-addons' ),
	'singular_name'      => _x( 'Portfolio', 'Item','animo-addons' ),
	'add_new'            => _x( 'Add New', 'Item','animo-addons' ),
	'add_new_item'       => esc_html__( 'Add New Item','animo-addons' ),
	'edit_item'          => esc_html__( 'Edit Item','animo-addons' ),
	'new_item'           => esc_html__( 'New Item','animo-addons' ),
	'all_items'          => esc_html__( 'All Items','animo-addons' ),
	'view_item'          => esc_html__( 'View Item','animo-addons' ),
	'search_items'       => esc_html__( 'Search Items','animo-addons' ),
	'not_found'          => esc_html__( 'No Items found','animo-addons' ),
	'not_found_in_trash' => esc_html__( 'No Items found in the Trash','animo-addons' ),
	'parent_item_colon'  => '',
	'menu_name'          => esc_html__('Portfolio', 'animo-addons')
);
$args = array(
	'labels'        => $labels,
	'description'   => esc_html__('Holds our products and product specific data', 'animo-addons'),
	'public'        => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail','editor' ),
	'has_archive'   => true,

);
register_post_type( 'portfolio', $args );

/**
 * Portflio category
 */
$labels = array(
	'name'              => _x( 'Categories', 'taxonomy general name', 'animo-addons' ),
	'singular_name'     => _x( 'Category', 'taxonomy singular name', 'animo-addons' ),
	'search_items'      => esc_html__( 'Search categories', 'animo-addons' ),
	'all_items'         => esc_html__( 'All Categories', 'animo-addons' ),
	'parent_item'       => esc_html__( 'Parent Category', 'animo-addons' ),
	'parent_item_colon' => esc_html__( 'Parent Category:', 'animo-addons' ),
	'edit_item'         => esc_html__( 'Edit Category', 'animo-addons' ),
	'update_item'       => esc_html__( 'Update Category', 'animo-addons' ),
	'add_new_item'      => esc_html__( 'Add New Category', 'animo-addons' ),
	'new_item_name'     => esc_html__( 'New Category Name', 'animo-addons' ),
	'menu_name'         => esc_html__( 'Categories' ),
);
$args = array(
	'labels' => $labels,
	'hierarchical' => true,
);
register_taxonomy( 'portfolio-category', 'portfolio', $args );
