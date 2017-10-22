<?php

/**
* Registers the Custom Taxonomy hook.
* @since 1.0.0
* @uses add_action()
*/

add_action( 'init' ,'create_new_taxonomy');

/**
* Creates a new custom taxonomy()
* @since 1.0.0
* @uses register_taxononmy()
*/

function create_new_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels, 
		'hierarchical'               => false, // Is the taxonomy hierarchical (have descendants) like categories or not hierarchical like tags
		'public'                     => true,  // Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users.
		'show_ui'                    => true,  // Whether to generate and allow a UI for managing this taxonomy in the admin.
		'show_admin_column'          => true,  // Whether to allow automatic creation of taxonomy columns on associated post-types table.
		'show_in_nav_menus'          => true,  // Whether this taxonomy is available for selection in navigation menus.
		'show_tagcloud'              => true,  // Whether to allow the Tag Cloud widget to use this taxonomy.
	);

register_taxonomy( 'taxonomy', array( 'post' ), $args );
}
