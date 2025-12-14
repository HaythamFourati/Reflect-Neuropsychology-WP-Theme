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
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        
        <!-- 2-Column Layout: Text + Thumbnail -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Text Content -->
            <div>
                <!-- Breadcrumb Navigation -->
                <nav class="mb-8">
                   <ol class="flex items-center space-x-2 text-sm text-gray-600">
                        <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-600 transition-colors">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="text-gray-900 font-medium"><?php the_title(); ?></li>
                    </ol>
                </nav>

                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6"><?php the_title(); ?></h1>
                
                <!-- Page Excerpt/Summary -->
                <?php if (has_excerpt()) : ?>
                <div class="text-xl text-gray-600 leading-relaxed">
                    <?php the_excerpt(); ?>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Right Column - Thumbnail -->
            <div class="relative flex justify-end">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl max-w-md mx-auto lg:mx-0">
                        <?php the_post_thumbnail('large', array('class' => 'w-100 h-100 object-cover')); ?>
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent"></div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-100 rounded-full opacity-60 -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-purple-50 rounded-full opacity-80 -z-10"></div>
                <?php else : ?>
                    <!-- Fallback decorative element if no thumbnail -->
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl max-w-md mx-auto lg:mx-0">
                        <img src="https://www.reflectneuro.com/wp-content/uploads/2024/09/1527699833653.jpeg" alt="Fallback Image" class="w-100 h-100 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent"></div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-100 rounded-full opacity-60 -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-purple-50 rounded-full opacity-80 -z-10"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<!-- Main Content -->
<article class="py-12 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
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
