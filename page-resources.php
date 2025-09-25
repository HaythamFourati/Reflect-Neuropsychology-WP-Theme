<?php
/**
 * Template Name: Resources Page
 * Description: Custom template for the Resources page
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 via-white to-gray-50 py-12 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Content -->
                <div class="lg:pr-8">
                    <!-- Breadcrumb Navigation -->
                    <nav class="flex mb-2" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
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
                                    <span class="ml-1 md:ml-2 text-sm font-medium text-gray-500">Resources</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <h1 class="text-4xl lg:text-6xl font-serif text-gray-900 mb-6 leading-tight">
                        Resources & <span class="text-blue-600">Support</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Access valuable information, educational materials, and support resources to help you understand neuropsychological health and navigate your journey with confidence.
                    </p>
                    
                    <!-- Referral Form Section -->
                    <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6 mb-8">
                        <h2 class="text-2xl font-semibold text-blue-900 mb-3">Referral Form for Services</h2>
                        <p class="text-blue-800 mb-4 leading-relaxed">
                            To ensure proper payment to the referral provider, the referring physician must mail or fax <strong>(844-866-8241)</strong> this medical referral form to Dr. Friedman.
                        </p>
                        <a href="https://www.reflectneuro.com/wp-content/uploads/2021/11/Referral-form-Dr.-Friedman-2020.pdf" 
                           target="_blank" 
                           class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download Referral Form for Services PDF File
                        </a>
                    </div>
                    
                    
                </div>

                <!-- Right Column - Image -->
                <div class="relative lg:pl-8">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Educational resources and books" 
                             class="w-full h-[600px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-100 rounded-full opacity-60 -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-green-50 rounded-full opacity-80 -z-10"></div>
                    <div class="absolute top-1/2 -right-4 w-12 h-12 bg-purple-100 rounded-full opacity-70 -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Resources Section -->
    <section id="educational-resources" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-serif text-gray-900 mb-4">Educational Resources</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Learn more about neuropsychological conditions, assessment processes, and brain health with our comprehensive educational materials.
                </p>
            </div>

            <?php if (get_the_content()) : ?>
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>



    <!-- Include CTA Section -->
    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<?php get_footer(); ?>
