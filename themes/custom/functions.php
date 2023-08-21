<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
$tt_includes = array('lib/theme/theme.php', 'lib/project/project.php');

add_theme_support( 'title-tag' );

foreach ( $tt_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( 'Error locating %s for inclusion', $file ), E_USER_ERROR );
	}

	require_once $filepath;
}
unset( $file, $filepath );

function qc_page_categories() {
    $labels = array(
        'name'              => _x( 'Page Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Page Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Page Categories' ),
        'all_items'         => __( 'All Page Categories' ),
        'parent_item'       => __( 'Parent Page Category' ),
        'parent_item_colon' => __( 'Parent Page Category:' ),
        'edit_item'         => __( 'Edit Page Category' ),
        'update_item'       => __( 'Update Page Category' ),
        'add_new_item'      => __( 'Add New Page Category' ),
        'new_item_name'     => __( 'New Page Category Name' ),
        'menu_name'         => __( 'Page Categories' ),
    );
    $args = array(
        'hierarchical'      => true, // Set to false if you want non-hierarchical (like tags) instead of categories.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'page-category' ), // Customize the slug as needed.
    );
    register_taxonomy( 'page_category', 'page', $args );

    // Register Offers Post type
    $labels = array(
            'name'                  => _x( 'Offers', 'Post type general name' ),
            'singular_name'         => _x( 'Offer', 'Post type singular name' ),
            'menu_name'             => _x( 'Offers', 'Admin Menu text' ),
            'name_admin_bar'        => _x( 'Offer', 'Add New on Toolbar' ),
            'add_new'               => __( 'Add New' ),
            'add_new_item'          => __( 'Add New Offer' ),
            'new_item'              => __( 'New Offer' ),
            'edit_item'             => __( 'Edit Offer' ),
            'view_item'             => __( 'View Offer' ),
            'all_items'             => __( 'All Offers' ),
            'search_items'          => __( 'Search Offers' ),
            'parent_item_colon'     => __( 'Parent Offers:' ),
            'not_found'             => __( 'No offers found.' ),
            'not_found_in_trash'    => __( 'No offers found in Trash.' ),
            'featured_image'        => _x( 'Offer Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3' ),
            'archives'              => _x( 'Offer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4' ),
            'insert_into_item'      => _x( 'Insert into offer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this offer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4' ),
            'filter_items_list'     => _x( 'Filter offers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4' ),
            'items_list_navigation' => _x( 'Offers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4' ),
            'items_list'            => _x( 'Offers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'offer' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );
    register_post_type( 'offer', $args );

    $labels = array(
        'name'              => _x( 'Brands', 'taxonomy general name' ),
        'singular_name'     => _x( 'Brand', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Brands' ),
        'all_items'         => __( 'All Brands' ),
        'parent_item'       => __( 'Parent Brand' ),
        'parent_item_colon' => __( 'Parent Brand:' ),
        'edit_item'         => __( 'Edit Brand' ),
        'update_item'       => __( 'Update Brand' ),
        'add_new_item'      => __( 'Add New Brand' ),
        'new_item_name'     => __( 'New Brand Name' ),
        'menu_name'         => __( 'Brands' ),
    );
    $args = array(
        'hierarchical'      => false, // Set to false if you want non-hierarchical (like tags) instead of categories.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'brand' ), // Customize the slug as needed.
    );
    register_taxonomy( 'brand', 'offer', $args );

    $labels = array(
        'name'              => _x( 'Category', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Brand' ),
        'parent_item_colon' => __( 'Parent Brand:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );
    $args = array(
        'hierarchical'      => true, // Set to false if you want non-hierarchical (like tags) instead of categories.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'offer-category' ), // Customize the slug as needed.
    );
    register_taxonomy( 'offer-category', 'offer', $args );

    $labels = array(
        'name'              => _x( 'Tag', 'taxonomy general name' ),
        'singular_name'     => _x( 'Tag', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Tags' ),
        'all_items'         => __( 'All Tags' ),
        'parent_item'       => __( 'Parent Tag' ),
        'parent_item_colon' => __( 'Parent Tag:' ),
        'edit_item'         => __( 'Edit Tag' ),
        'update_item'       => __( 'Update Tag' ),
        'add_new_item'      => __( 'Add New Tag' ),
        'new_item_name'     => __( 'New Tag Name' ),
        'menu_name'         => __( 'Tags' ),
    );
    $args = array(
        'hierarchical'      => false, // Set to false if you want non-hierarchical (like tags) instead of categories.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'offer-tag' ), // Customize the slug as needed.
    );
    register_taxonomy( 'offer-tag', 'offer', $args );
}
add_action( 'init', 'qc_page_categories' );

function qc_modify_search_query($query) {
    // Check if this is the main search query and not an admin query
    if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
        // Modify the search query to include only the 'page' post type
        $query->set('post_type', 'page');
    }
}
add_action('pre_get_posts', 'qc_modify_search_query');

function qc_enqueue_custom_js_based_on_template() {
    global $post;

    $template_name = 'offers-template.php';

    // Check if the current page is using the specific template
    if (is_a($post, 'WP_Post') && $template_name === get_page_template_slug($post->ID)) {
        wp_enqueue_script('offers', get_stylesheet_directory_uri() . '/assets/js/offers.js', array('jquery'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'qc_enqueue_custom_js_based_on_template');

/*21-08-2023*/
function digital_Services_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Digital Services Sidebar', 'adcbank' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'adcbank' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
	}
add_action( 'widgets_init', 'digital_Services_widgets_init' );

   // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
            'digital-service-menu' => __( 'Digital Service Menu', 'adcbank' ),
		'advances-menu' => __( 'Advances Menu', 'adcbank' ),
		'deposit-menu' => __( 'Deposit Menu', 'adcbank' ),
    ) );