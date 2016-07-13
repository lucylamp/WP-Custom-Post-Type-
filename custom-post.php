<?php
//register  custom post types: Projects and Front Page Sections
//portfolio projects
function my_custom_post_project() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'project' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No projects found' ),
    'not_found_in_trash' => __( 'No projects found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
  	'labels'        => $labels,
    'description'   => 'Describes and includes images of individual projects which are included in a Portfolio of Projects page.',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,);
  register_post_type( 'project', $args ); 
}
add_action( 'init', 'my_custom_post_project' );
//front page sections
function my_custom_post_frontpage_section() {
	$labels = array(
    'name'               => _x( 'Front Page Sections', 'post type general name' ),
    'singular_name'      => _x( 'Section', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'frontpage section' ),
    'add_new_item'       => __( 'Add New Section' ),
    'edit_item'          => __( 'Edit Section' ),
    'new_item'           => __( 'New Section' ),
    'all_items'          => __( 'All Sections' ),
    'view_item'          => __( 'View Section' ),
    'search_items'       => __( 'Search Sections' ),
    'not_found'          => __( 'No Sections found' ),
    'not_found_in_trash' => __( 'No Sections found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Frontpage Sections'
  );
  $args = array(
  	'labels'        => $labels,
    'description'   => 'Individual sections comprising the front page of a one-page scrolling site.',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,);
  register_post_type( 'frontpage_section', $args ); 
}
add_action( 'init', 'my_custom_post_frontpage_section' ); ?>
