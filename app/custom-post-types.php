<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly


// ---------------------------
//  Post Revisions
// ---------------------------

add_filter('wp_revisions_to_keep', 'pd_revisions_filter', 10, 2);

function pd_revisions_filter ($num, $post) {
  $num = 7;
  return $num;
}

// ---------------------------
//  Post Types
// ---------------------------

/**
 * Registers `show` custom post type.
 *
 * @return void
 */
function register_show_post_type()
{
    register_post_type('show', [
        'description' => __('Collection of shows.', 'textdomain'),
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-star-filled',
        'show_in_graphql' => true,
        'graphql_single_name' => 'show',
        'graphql_plural_name' => 'shows',
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'shows',
            'with_front' => false,
        ],
        'labels' => [
            'name' => _x('Shows', 'post type general name', 'textdomain'),
            'singular_name' => _x('Show', 'post type singular name', 'textdomain'),
            'menu_name' => _x('Shows', 'admin menu', 'textdomain'),
            'name_admin_bar' => _x('Show', 'add new on admin bar', 'textdomain'),
            'add_new' => _x('Add New', 'show', 'textdomain'),
            'add_new_item' => __('Add New Show', 'textdomain'),
            'new_item' => __('New Show', 'textdomain'),
            'edit_item' => __('Edit Show', 'textdomain'),
            'view_item' => __('View Show', 'textdomain'),
            'all_items' => __('All Shows', 'textdomain'),
            'search_items' => __('Search Shows', 'textdomain'),
            'parent_item_colon' => __('Parent Show:', 'textdomain'),
            'not_found' => __('No Shows found.', 'textdomain'),
            'not_found_in_trash' => __('No Shows found in Trash.', 'textdomain'),
        ],
    ]);
}
// uncomment to add shows back
add_action('init', 'register_show_post_type');
