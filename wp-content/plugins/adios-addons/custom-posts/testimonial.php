<?php
/**
 * Testimonial custom posty type
 */

$labels = array(
	'name' => esc_html__( 'Testimonials', 'animo-addons' ),
	'singular_name' => esc_html__( 'Testimonial', 'animo-addons' ),
	'add_new' => esc_html__( 'Add New', 'animo-addons' ),
	'add_new_item' => esc_html__( 'Add New Testimonials', 'animo-addons' ),
	'edit_item' => esc_html__( 'Edit Testimonials', 'animo-addons' ),
	'new_item' => esc_html__( 'New Testimonials', 'animo-addons' ),
	'all_items' => esc_html__( 'All Testimonials', 'animo-addons' ),
	'view_item' => esc_html__( 'View Testimonials', 'animo-addons' ),
	'search_items' => esc_html__( 'Search Testimonials', 'animo-addons' ),
	'not_found' => esc_html__( 'No Testimonials found', 'animo-addons' ),
	'not_found_in_trash' => esc_html__( 'No Testimonials found in Trash', 'animo-addons' ),
	'parent_item_colon' => '',
	'menu_name' => esc_html__( 'Testimonials', 'animo-addons' )
);

 $args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 30,
	'supports'      => array( 'title', 'thumbnail', 'editor' ),
	'has_archive'   => true,
	 'rewrite' => array(
		'slug' => 'cpt-testimonial'
	)
);

register_post_type ( 'testimonial', $args);

/**
 * Testimonial category
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
register_taxonomy( 'testimonial-category', 'testimonial', $args );
