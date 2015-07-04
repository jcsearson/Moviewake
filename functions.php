<?php

add_action( 'init', 'register_cpt_films' );
function register_cpt_films() {
$labels = array(
'name' => _x( 'Films', 'films' ),
'singular_name' => _x( 'Film', 'film' ),
'add_new' => _x( 'Add New', 'films' ),
'add_new_item' => _x( 'Add New films', 'films' ),
'edit_item' => _x( 'Edit films', 'films' ),
'new_item' => _x( 'New films', 'films' ),
'view_item' => _x( 'View films', 'films' ),
'search_items' => _x( 'Search Films', 'films' ),
'not_found' => _x( 'No films found', 'films' ),
'not_found_in_trash' => _x( 'No films found in Trash', 'films' ),
'parent_item_colon' => _x( 'Parent films:', 'films' ),
'menu_name' => _x( 'Films', 'films' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Films.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-video-alt2',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'films', $args );
}

add_action( 'init', 'register_cpt_shows' );
function register_cpt_shows() {
$labels = array(
'name' => _x( 'Shows', 'shows' ),
'singular_name' => _x( 'Show', 'show' ),
'add_new' => _x( 'Add New Show', 'add new show' ),
'add_new_item' => _x( 'Add New Shows', 'add new shows' ),
'edit_item' => _x( 'Edit Shows', 'edit shows' ),
'new_item' => _x( 'New Shows', 'new shows' ),
'view_item' => _x( 'View Shows', 'view shows' ),
'search_items' => _x( 'Search Shows', 'search shows' ),
'not_found' => _x( 'No shows found', 'no shows found' ),
'not_found_in_trash' => _x( 'No shows found in Trash', 'no shows found in trash' ),
'parent_item_colon' => _x( 'Parent Shows:', 'parent shows' ),
'menu_name' => _x( 'Shows', 'shows' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Shows.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-video-alt3',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'shows', $args );
}

// Custom Excerpt
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
?>