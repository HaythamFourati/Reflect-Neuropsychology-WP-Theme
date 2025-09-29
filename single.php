<?php
/**
 * Single Post Template
 * 
 * @package Reflect_Neuropsychology
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section with Featured Image -->
<section class="relative py-16 lg:py-24 bg-gradient-to-br from-primary-50 via-white to-gray-50 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-primary-100 rounded-full opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-primary-50 rounded-full opacity-30"></div>
    </div>
    
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-2 relative z-10">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="<?php echo home_url(); ?>" class="hover:text-primary-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-primary-600 transition-colors">Blog</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium"><?php the_title(); ?></li>
            </ol>
        </nav>
        
        <!-- Post Meta -->
        <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-gray-600">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <?php echo get_the_date('F j, Y'); ?>
            </div>
            
            <?php if (get_the_author()) : ?>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                By <?php the_author(); ?>
            </div>
            <?php endif; ?>
            
            <?php if (get_the_category()) : ?>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <?php the_category(', '); ?>
            </div>
            <?php endif; ?>
            
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                <?php echo reading_time(); ?> min read
            </div>
        </div>
        
        <!-- Post Title -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6"><?php the_title(); ?></h1>
    </div>
</section>

<!-- Featured Image -->
<?php if (has_post_thumbnail()) : ?>
<section class="-mt-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-2">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<article class="py-12 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-blue max-w-none">
            <?php the_content(); ?>
        </div>
        
        <!-- Post Tags -->
        <?php if (get_the_tags()) : ?>
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Tags</h3>
            <div class="flex flex-wrap gap-2">
                <?php foreach (get_the_tags() as $tag) : ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                   class="inline-block px-3 py-1 bg-primary-100 text-primary-800 text-sm font-medium rounded-full hover:bg-primary-200 transition-colors">
                    <?php echo $tag->name; ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Author Bio -->
        <?php if (get_the_author_meta('description')) : ?>
        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', array('class' => 'w-16 h-16 rounded-full')); ?>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">About <?php the_author(); ?></h3>
                    <p class="text-gray-600"><?php echo get_the_author_meta('description'); ?></p>
                </div>
            </div>

        </div>
        <?php endif; ?>


        
        <!-- Social Share -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
            <div class="flex space-x-4">
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Twitter
                </a>
                
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
                
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </div>
</article>

<!-- Related Posts -->
<?php
$related_posts = get_posts(array(
    'category__in' => wp_get_post_categories(get_the_ID()),
    'numberposts' => 3,
    'post__not_in' => array(get_the_ID()),
    'orderby' => 'rand'
));

if ($related_posts) : ?>
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-serif text-gray-900 mb-8 text-center">Related Articles</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach ($related_posts as $post) : setup_postdata($post); ?>
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <?php if (has_post_thumbnail()) : ?>
                <div class="aspect-w-16 aspect-h-9">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300')); ?>
                    </a>
                </div>
                <?php endif; ?>
                
                <div class="p-6">
                    <div class="text-sm text-gray-600 mb-2"><?php echo get_the_date('F j, Y'); ?></div>
                    <h3 class="text-lg font-serif text-gray-900 mb-3">
                        <a href="<?php the_permalink(); ?>" class="hover:text-primary-600 transition-colors">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                        Read More →
                    </a>
                </div>
            </article>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<?php get_template_part('template-parts/cta-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>