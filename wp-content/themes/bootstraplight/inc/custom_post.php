<?php
/*
* Creating a function to create our CPT
*/
 
function home_page_settings() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Home Settings', 'Post Type General Name', 'bootstraplight' ),
        'singular_name'       => _x( 'Home Setting', 'Post Type Singular Name', 'bootstraplight' ),
        'menu_name'           => __( 'Home Settings', 'bootstraplight' ),
        'parent_item_colon'   => __( 'Home Settings', 'bootstraplight' ),
        'all_items'           => __( 'Home Settings', 'bootstraplight' ),
        'view_item'           => __( 'View Settings', 'bootstraplight' ),
        'add_new_item'        => __( 'Add New Setting', 'bootstraplight' ),
        'add_new'             => __( 'Add New', 'bootstraplight' ),
        'edit_item'           => __( 'Edit Home Settings', 'bootstraplight' ),
        'update_item'         => __( 'Update Home Settings', 'bootstraplight' ),
        'search_items'        => __( 'Search Home Settings', 'bootstraplight' ),
        'not_found'           => __( 'Not Found', 'bootstraplight' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bootstraplight' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Home Settings', 'bootstraplight' ),
        'description'         => __( 'Home Settings', 'bootstraplight' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'home', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'home_page_settings', 0 );
?>