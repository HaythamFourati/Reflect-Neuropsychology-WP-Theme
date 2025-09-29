<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
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

// Enqueue Custom Styles for Single Posts
function enqueue_single_post_styles() {
  if (is_single()) {
    wp_add_inline_style('ourmaincss', '
      .prose {
        color: var(--color-gray-700);
        line-height: 1.75;
      }
      .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: var(--color-gray-900);
        font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 1rem;
      }
      .prose h1 { font-size: 2.25rem; }
      .prose h2 { font-size: 1.875rem; }
      .prose h3 { font-size: 1.5rem; }
      .prose h4 { font-size: 1.25rem; }
      .prose p { margin-bottom: 1.25rem; }
      .prose a {
        color: var(--color-primary);
        text-decoration: underline;
        font-weight: 500;
      }
      .prose a:hover {
        color: var(--color-primary-light);
      }
      .prose blockquote {
        border-left: 4px solid var(--color-primary);
        padding-left: 1rem;
        font-style: italic;
        color: var(--color-gray-500);
        margin: 1.5rem 0;
      }
      .prose ul, .prose ol {
        margin: 1.25rem 0;
        padding-left: 1.5rem;
      }
      .prose li {
        margin: 0.5rem 0;
      }
      .prose img {
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        margin: 2rem 0;
      }
      .prose code {
        background-color: var(--color-gray-100);
        padding: 0.125rem 0.25rem;
        border-radius: 0.25rem;
        font-size: 0.875rem;
      }
      .prose pre {
        background-color: var(--color-gray-800);
        color: var(--color-gray-50);
        padding: 1rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin: 1.5rem 0;
      }
    ');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_single_post_styles');

// Set posts per page for blog
function set_posts_per_page_for_blog($query) {
  if (!is_admin() && $query->is_main_query()) {
    if (is_home()) {
      $query->set('posts_per_page', 12);
    }
  }
}
add_action('pre_get_posts', 'set_posts_per_page_for_blog');