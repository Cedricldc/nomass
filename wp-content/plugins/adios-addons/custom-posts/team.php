<?php
/**
 * Team custom post type
 */
$labels = array(
	'name'               => _x( 'Team', 'Team','animo-addons' ),
	'singular_name'      => _x( 'Team', 'Team','animo-addons' ),
	'add_new'            => _x( 'Add New', 'Team','animo-addons' ),
	'add_new_item'       => esc_html__( 'Add New Team Member','animo-addons' ),
	'edit_item'          => esc_html__( 'Edit Team Memeber','animo-addons' ),
	'new_item'           => esc_html__( 'New Team Member','animo-addons' ),
	'all_items'          => esc_html__( 'All Team Memebers','animo-addons' ),
	'view_item'          => esc_html__( 'View Team','animo-addons' ),
	'search_items'       => esc_html__( 'Search Team Member','animo-addons' ),
	'not_found'          => esc_html__( 'No Member found','animo-addons' ),
	'not_found_in_trash' => esc_html__( 'No Team Member found in the Trash','animo-addons' ),
	'parent_item_colon'  => '',
	'menu_name'          => esc_html__('Team', 'animo-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail', 'editor' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-team'
	)
);
register_post_type( 'team', $args );
