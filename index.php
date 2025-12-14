<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 via-white to-gray-50 py-12 lg:py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Content -->
                <div class="lg:pr-8">
                    <!-- Breadcrumb Navigation -->
                    <nav class="flex mb-2" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 md:ml-2 text-sm font-medium text-gray-500">Blog</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <h1 class="text-4xl lg:text-6xl font-serif text-gray-900 mb-6 leading-tight">
                        Insights & <span class="text-primary-600">Articles</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Stay informed with the latest research, insights, and expert perspectives on neuropsychology, brain health, and cognitive wellness.
                    </p>
                    
                    <!-- Blog Stats -->
                    <div class="grid sm:grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2"><?php echo wp_count_posts()->publish; ?></div>
                            <div class="text-sm text-gray-600">Articles Published</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2"><?php echo count(get_categories()); ?></div>
                            <div class="text-sm text-gray-600">Categories</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 mb-2">Weekly</div>
                            <div class="text-sm text-gray-600">New Content</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="relative lg:pl-8">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="https://www.reflectneuro.com/wp-content/uploads/2025/01/Firefly_7e9a43b5-febf-4f32-80c1-7f10676f9978-1.jpeg" 
                             alt="Research and insights in neuropsychology" 
                             class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/20 to-transparent"></div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary-100 rounded-full opacity-60 -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-green-50 rounded-full opacity-80 -z-10"></div>
                    <div class="absolute top-1/2 -right-4 w-12 h-12 bg-purple-100 rounded-full opacity-70 -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Blog Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                            <!-- Featured Image -->
                            <div class="relative h-48 overflow-hidden">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" 
                                         alt="<?php the_title(); ?>" 
                                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                <?php else : ?>
                                    <div class="w-full h-full bg-gradient-to-br from-primary-100 to-purple-100 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Category Badge -->
                                <?php $categories = get_the_category(); ?>
                                <?php if (!empty($categories)) : ?>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Content -->
                            <div class="p-6">
                                <!-- Meta Info -->
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <?php echo get_the_date('M j, Y'); ?>
                                    <span class="mx-2">•</span>
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <?php echo reading_time(); ?> min read
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-primary-600 transition-colors duration-200">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <!-- Excerpt -->
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </p>

                                <!-- Read More -->
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-200">
                                    Read More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <!-- No Posts Message -->
                    <div class="col-span-full text-center py-16">
                        <div class="max-w-md mx-auto">
                            <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">No Posts Yet</h3>
                            <p class="text-gray-600 mb-6">We're working on creating valuable content for you. Check back soon for insightful articles on neuropsychology and brain health.</p>
                            <a href="<?php echo home_url(); ?>" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to Home
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php
            global $wp_query;
            if ($wp_query->max_num_pages > 1) :
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            ?>
                <div class="flex justify-center mt-16">
                    <nav class="flex items-center space-x-2" aria-label="Pagination">
                        <?php
                        // Previous page link
                        if ($paged > 1) :
                            $prev_link = get_pagenum_link($paged - 1);
                        ?>
                            <a href="<?php echo esc_url($prev_link); ?>" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 hover:border-gray-400 transition-all duration-200 focus:z-20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="ml-2 hidden sm:inline">Previous</span>
                            </a>
                        <?php endif; ?>

                        <?php
                        // Page numbers
                        $start_page = max(1, $paged - 2);
                        $end_page = min($wp_query->max_num_pages, $paged + 2);
                        
                        // Show first page if we're not starting from 1
                        if ($start_page > 1) :
                        ?>
                            <a href="<?php echo esc_url(get_pagenum_link(1)); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 hover:border-gray-400 transition-all duration-200 focus:z-20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                1
                            </a>
                            <?php if ($start_page > 2) : ?>
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700">...</span>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                            <?php if ($i == $paged) : ?>
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-primary-600 border border-primary-600 rounded-lg cursor-default">
                                    <?php echo $i; ?>
                                </span>
                            <?php else : ?>
                                <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 hover:border-gray-400 transition-all duration-200 focus:z-20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <?php echo $i; ?>
                                </a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php
                        // Show last page if we're not ending at the last page
                        if ($end_page < $wp_query->max_num_pages) :
                            if ($end_page < $wp_query->max_num_pages - 1) :
                        ?>
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700">...</span>
                            <?php endif; ?>
                            <a href="<?php echo esc_url(get_pagenum_link($wp_query->max_num_pages)); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 hover:border-gray-400 transition-all duration-200 focus:z-20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <?php echo $wp_query->max_num_pages; ?>
                            </a>
                        <?php endif; ?>

                        <?php
                        // Next page link
                        if ($paged < $wp_query->max_num_pages) :
                            $next_link = get_pagenum_link($paged + 1);
                        ?>
                            <a href="<?php echo esc_url($next_link); ?>" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 hover:border-gray-400 transition-all duration-200 focus:z-20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <span class="mr-2 hidden sm:inline">Next</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </nav>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Include CTA Section -->
    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<?php 
// Add reading time function
if (!function_exists('reading_time')) {
    function reading_time() {
        $content = get_post_field('post_content', get_the_ID());
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200); // Average reading speed
        return $reading_time;
    }
}

get_footer(); ?>