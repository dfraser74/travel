<?php
/**
 * Class for Travel Custom Post Type.
 *
 * @package WPAMPTheme
 */

/**
 * Class AMP_Travel_CTP
 *
 * @package WPAMPTheme
 */
class AMP_Travel_CTP {

	/**
	 * The post type slug.
	 *
	 * @var string
	 */
	const POST_TYPE_SLUG = 'adventure';

	/**
	 * AMP_Travel_CTP constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_post_type' ) );
	}

	/**
	 * Register 'adventure' post type.
	 */
	public function register_post_type() {
		$labels = array(
			'name'                  => _x( 'Adventures', 'Post type general name', 'travel' ),
			'singular_name'         => _x( 'Adventure', 'Post type singular name', 'travel' ),
			'menu_name'             => _x( 'Adventures', 'Admin Menu text', 'travel' ),
			'name_admin_bar'        => _x( 'Adventure', 'Add New on Toolbar', 'travel' ),
			'add_new'               => __( 'Add New', 'travel' ),
			'add_new_item'          => __( 'Add New Adventure', 'travel' ),
			'new_item'              => __( 'New Adventure', 'travel' ),
			'edit_item'             => __( 'Edit Adventure', 'travel' ),
			'view_item'             => __( 'View Adventure', 'travel' ),
			'all_items'             => __( 'All Adventures', 'travel' ),
			'search_items'          => __( 'Search Adventures', 'travel' ),
			'parent_item_colon'     => __( 'Parent Adventures:', 'travel' ),
			'not_found'             => __( 'No adventures found.', 'travel' ),
			'not_found_in_trash'    => __( 'No adventures found in Trash.', 'travel' ),
			'featured_image'        => _x( 'Adventure Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'travel' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type.', 'travel' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type.', 'travel' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type.', 'travel' ),
			'archives'              => _x( 'Adventure archives', 'The post type archive label used in nav menus. Default “Post Archives”.', 'travel' ),
			'insert_into_item'      => _x( 'Insert into adventure', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post).', 'travel' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this adventure', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post).', 'travel' ),
			'filter_items_list'     => _x( 'Filter adventures list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”.', 'travel' ),
			'items_list_navigation' => _x( 'Adventures list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”.', 'travel' ),
			'items_list'            => _x( 'Adventures list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”.', 'travel' ),
		);

		$args = array(
			'labels'              => $labels,
			'description'         => __( 'Adventure Custom Post Type for travel theme.', 'travel' ),
			'public'              => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-location-alt',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array(
				'title',
				'editor',
				'thumbnail',
			),
			'has_archive'         => true,
			'rewrite'             => array(
				'slug' => self::POST_TYPE_SLUG,
			),
			'query_var'           => true,
			'can_export'          => true,
		);

		register_post_type( self::POST_TYPE_SLUG, $args );
	}
}