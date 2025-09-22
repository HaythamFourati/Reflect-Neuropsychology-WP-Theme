<?php
/**
 * Page Template
 * 
 * @package Reflect_Neuropsychology
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section -->
<section class="relative py-16 lg:py-24 bg-gradient-to-br from-blue-50 via-white to-gray-50 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-blue-100 rounded-full opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-blue-50 rounded-full opacity-30"></div>
    </div>
    
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-2 relative z-10">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium"><?php the_title(); ?></li>
            </ol>
        </nav>
        
        <!-- Page Title -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight"><?php the_title(); ?></h1>
        
        <!-- Page Excerpt/Summary -->
        <?php if (has_excerpt()) : ?>
        <div class="text-xl text-gray-600 mt-6 leading-relaxed">
            <?php the_excerpt(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>


<!-- Main Content -->
<article class="py-12 bg-white">
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-2">
        <div class="prose prose-lg prose-blue max-w-none">
            <?php the_content(); ?>
            
            <?php
            // Display page links for multi-page content
            wp_link_pages(array(
                'before' => '<div class="page-links mt-8 pt-8 border-t border-gray-200"><span class="page-links-title text-lg font-semibold text-gray-900 mr-4">Pages:</span>',
                'after' => '</div>',
                'link_before' => '<span class="inline-block px-3 py-2 mx-1 bg-blue-100 text-blue-800 rounded-lg hover:bg-blue-200 transition-colors">',
                'link_after' => '</span>',
                'pagelink' => '%',
                'separator' => '',
            ));
            ?>
        </div>
        
    </div>
</article>

<!-- Template Parts -->
<?php get_template_part('template-parts/why-choose-section'); ?>

<?php get_template_part('template-parts/cta-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
