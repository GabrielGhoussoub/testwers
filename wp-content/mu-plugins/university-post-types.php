<?php

function university_post_types() {
 

  // Program Post Type
  register_post_type('wine', array(
    'supports' => array('title'),
    'rewrite' => array('slug' => 'wines'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Wines',
      'add_new_item' => 'Add New wine',
      'edit_item' => 'Edit Wine',
      'all_items' => 'All wines',
      'singular_name' => 'wine'
    ),
    'menu_icon' => 'dashicons-beer'
  ));

}




add_action('init', 'university_post_types');