<?php
/**
 * Template Name: Contact Page
 * Description: Custom template for the Contact page
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 via-white to-gray-50 py-12 lg:py-24 overflow-hidden">
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
                                    <span class="ml-1 md:ml-2 text-sm font-medium text-gray-500">Contact</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <h1 class="text-4xl lg:text-6xl font-serif text-gray-900 mb-6 leading-tight">
                        Contact Us Now: <span class="text-blue-600">Questions or Feedback</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Whether you have questions about our services or need to schedule an appointment, we're here to help. Reach out to us through any of the methods below.
                    </p>
                    
                    <!-- Quick Contact Options -->
                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="relative lg:pl-8">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                             alt="Professional consultation and support" 
                             class="w-full h-[500px] object-cover">
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

    <!-- Contact Form Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div>
                    <div class="text-center lg:text-left mb-8">
                        <h2 class="text-3xl lg:text-4xl font-serif text-gray-900 mb-4">Ask a Question? Share Your Feedback</h2>
                        <p class="text-xl text-gray-600">
                            We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                        </p>
                    </div>

                    <!-- Contact Form 7 Placeholder -->
                    <div class="cf7-form-container">
                        <?php 
                        // Replace 'contact-form' with your actual CF7 form ID/name
                        echo do_shortcode('[contact-form-7 id="dedee34" title="Contact form 1"]'); 
                        ?>
                    </div>


                </div>

                <!-- Contact Information & Image -->
                <div class="space-y-8">
                    <!-- Professional Image -->
                    <div class="relative">
                        <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                            <img src="https://www.reflectneuro.com/wp-content/uploads/2024/09/1527699833653.jpeg" 
                                 alt="Dr. Judith L. Friedman - Reflect Neuropsychology" 
                                 class="w-full h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 text-white">
                                <h3 class="text-xl font-semibold mb-1">Dr. Judith L. Friedman</h3>
                                <p class="text-gray-200">Clinical Neuropsychologist</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Get in Touch</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                    <p class="text-gray-600"><?php echo get_practice_phone(); ?></p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@reflectneuro.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Location</h4>
                                    <a href="https://www.google.com/maps/place/5016+Parkway+Calabasas+UNIT+212,+Calabasas,+CA+91302"><p class="text-gray-600">5016 Parkway Calabasas UNIT 212, Calabasas, CA 91302</p> </a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Office Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 5:00 PM</p>
                                    <p class="text-sm text-gray-500">Appointments available by scheduling</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WordPress Content Section (conditional) -->
    <?php if (get_the_content()) : ?>
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-blue max-w-none">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Include CTA Section -->
    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<?php get_footer(); ?>
