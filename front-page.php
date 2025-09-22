<?php get_header(); ?>

<!-- Hero Section -->
<section id="hero" class="relative isolate overflow-hidden py-20 lg:py-28">
    <div class="absolute inset-0 -z-10">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2400&q=80" alt="Calming abstract ocean waves background" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-white/90 via-white/80 to-blue-50/90"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 text-center lg:text-left">
                <!-- <div class="inline-flex items-center justify-center lg:justify-start w-16 h-16 rounded-xl bg-blue-600/10 text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div> -->
                <h1 class="text-4xl md:text-6xl font-serif text-gray-900 mb-6">Clarity for <br> a Healthier Mind</h1>
                <p class="text-xl md:text-2xl text-gray-700/90 mb-8 max-w-2xl mx-auto lg:mx-0">Reflect Neuropsychology provides expert psychological assessments for teens and adults in Calabasas, Los Angeles, and across California with the convenience of secure Telehealth sessions.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#contact" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors">Book an Assessment</a>
                    <a href="#services" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-50 transition-colors">Learn More About Our Services</a>
                </div>
            </div>
            <div class="lg:col-span-6 relative">
                <div class="relative w-full max-w-2xl mx-auto">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/01/full-shot-happy-family-with-dog_1.jpg" alt="Happy family with dog in outdoor setting" class="rounded-2xl shadow-2xl ring-1 ring-black/5 w-full object-cover aspect-[4/3]">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/04/cropped-1-2.jpg" alt="Dr. Friedman professional headshot" class="hidden sm:block absolute -left-10 -top-8 w-42 rounded-2xl shadow-xl ring-1 ring-black/5">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/services-section'); ?>

<?php get_template_part('template-parts/meet-dr-friedman-section'); ?>

<?php get_template_part('template-parts/why-choose-section'); ?>

<?php get_template_part('template-parts/our-team-section'); ?>

<?php get_template_part('template-parts/assessments-section'); ?>

<?php get_template_part('template-parts/cta-section'); ?>

<!-- Resources / Blog Teaser Section -->
<section id="resources" class="py-20 bg-gray-50 scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Latest Resources</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Stay informed with our latest insights on  <br>  psychological assessment and mental health
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
            
            foreach($recent_posts as $post) : ?>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <?php if(has_post_thumbnail($post['ID'])) : ?>
                        <div class="aspect-w-16 aspect-h-9">
                            <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-48 object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-serif text-gray-900 mb-3">
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-blue-600 transition-colors">
                                <?php echo $post['post_title']; ?>
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4">
                            <?php echo wp_trim_words($post['post_content'], 20); ?>
                        </p>
                        <a href="<?php echo get_permalink($post['ID']); ?>" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                            Read More →
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-blue-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-blue-100 rounded-full opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-blue-50 rounded-full opacity-30"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Get In Touch</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Ready to schedule your assessment? Contact us today to begin your journey toward clarity and understanding.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-stretch">
            <!-- Contact Information -->
            <div class="flex flex-col">
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100 flex-1 flex flex-col">
                    <h3 class="text-2xl font-serif text-gray-900 mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <!-- Phone Number -->
                        <div class="flex items-center group">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 mb-1">Call Us</h4>
                                <a href="tel:+18183243800" class="text-lg text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                    +1 818-324-3800
                                </a>
                            </div>
                        </div>
                        
                        <!-- Fax Number -->
                        <div class="flex items-center group">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-gray-500 to-gray-600 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V3a1 1 0 011 1v14a1 1 0 01-1 1H8a1 1 0 01-1-1V4m0 0H5a1 1 0 00-1 1v14a1 1 0 001 1h2M9 7h6m-6 4h6m-6 4h6"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 mb-1">Fax</h4>
                                <span class="text-lg text-gray-700 font-medium">(844) 866-8241</span>
                            </div>
                        </div>
                        
                        <!-- Office Hours -->
                        <div class="flex items-center group">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 mb-1">Office Hours</h4>
                                <p class="text-gray-700">Monday - Friday: 9:00 AM - 5:00 PM</p>
                                <p class="text-sm text-gray-600">Telehealth appointments available</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="mt-auto pt-6 border-t border-gray-200">
                        <a href="tel:+18183243800" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Schedule Your Assessment Today
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Map -->
            <div class="flex flex-col">
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100 flex-1">
                    <h3 class="text-2xl font-serif text-gray-900 mb-6">Our Location</h3>
                    <div class="relative rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26412.943363861687!2d-118.65269399999998!3d34.156116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29e139e0dbf23%3A0x93266e100ee245d9!2sDr.%20J.%20Friedman%2C%20Neuropsychologist%2C%2025%2B%20yrs%20exp.%2C%20Cognitive%20%26%20Educational%20Testing%20Calabasas%2C!5e0!3m2!1sen!2stn!4v1758536641572!5m2!1sen!2stn" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
