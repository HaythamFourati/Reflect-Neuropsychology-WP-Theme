<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
  wp_enqueue_script('reflect-navigation', get_theme_file_uri('/js/navigation.js'), array(), filemtime(get_theme_file_path('/js/navigation.js')), true);
  
  // Enqueue Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

// Enable excerpts for pages
function add_excerpts_to_pages() {
  add_post_type_support('page', 'excerpt');
}

add_action('after_setup_theme', 'boilerplate_add_support');
add_action('init', 'add_excerpts_to_pages');

// Theme Configuration Variables
function get_practice_phone() {
  return '(818) 324-3800';
}

function get_practice_phone_link() {
  return 'tel:+1-818-324-3800';
}

// Office relocation: the practice moves on this date. Every address on the
// site reads from the helpers below, so the switchover happens on its own.
// After the move, delete the old address and the notice bar template part.
function get_practice_move_date() {
  return '2026-10-01';
}

function practice_has_moved() {
  return current_time('Y-m-d') >= get_practice_move_date();
}

// $part: 'street' | 'locality' | 'full'. Pass true for $new to force the new
// address regardless of the date (used by the relocation notice).
function get_practice_address($part = 'full', $new = null) {
  $moved  = is_null($new) ? practice_has_moved() : (bool) $new;
  $street = $moved ? '23801 Calabasas Rd. Suite 1025' : '5016 Parkway Calabasas Suite 212';
  $locality = 'Calabasas, CA 91302';

  if ($part === 'street')   return $street;
  if ($part === 'locality') return $locality;
  return $street . ', ' . $locality;
}

// Reading Time Function
function reading_time() {
  $content = get_post_field('post_content', get_the_ID());
  $word_count = str_word_count(strip_tags($content));
  $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
  
  return $reading_time;
}

// Custom Excerpt Length
function custom_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Custom Excerpt More
function custom_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// Add Custom Image Sizes
function add_custom_image_sizes() {
  add_image_size('blog-featured', 800, 400, true);
  add_image_size('blog-thumbnail', 400, 300, true);
}
add_action('after_setup_theme', 'add_custom_image_sizes');

// Set posts per page for blog
function set_posts_per_page_for_blog($query) {
  if (!is_admin() && $query->is_main_query()) {
    if (is_home()) {
      $query->set('posts_per_page', 12);
    }
  }
}
add_action('pre_get_posts', 'set_posts_per_page_for_blog');