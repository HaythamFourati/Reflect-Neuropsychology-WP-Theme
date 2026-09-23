<?php
/**
 * Template part for displaying the Our Team section
 *
 * @package Reflect_Neuropsychology
 */
?>

<!-- Our Team Section -->
<section id="team" class="py-24 bg-gradient-to-b from-gray-50 to-white scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full mb-4">Our Experts</span>
            <h2 class="text-3xl md:text-5xl font-serif text-gray-900 mb-6">Meet Our Team</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Dedicated professionals committed to your mental health and well-being
            </p>
        </div>
        
        <div class="space-y-16">
            <!-- Team Member 1 - Dr. Friedman -->
            <div class="group">
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-2/5 relative overflow-hidden">
                            <div class="aspect-square md:aspect-auto md:h-full">
                                <img src="https://www.reflectneuro.com/wp-content/uploads/2024/09/1527699833653.jpeg" 
                                     alt="Dr. Judith L. Friedman" 
                                     class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent md:bg-gradient-to-r"></div>
                        </div>
                        <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="w-12 h-1 bg-primary-500 rounded-full"></span>
                                <span class="w-3 h-1 bg-primary-300 rounded-full"></span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-serif text-gray-900 mb-2">Dr. Judith L. Friedman</h3>
                            <p class="text-primary-600 font-semibold text-lg mb-6">Licensed Clinical & Forensic Neuropsychologist</p>
                            <p class="text-gray-600 leading-relaxed mb-8">Dr. Friedman is a leading forensic neuropsychology expert in Southern California. With over 20+ years of experience, her work includes numerous cases of post-concussive syndrome, severe and mild traumatic brain injury (TBI), chronic pain, psychological trauma, as well as undue influence, financial elder abuse, testamentary capacity, and more.</p>
                            <div>
                                <a href="<?php echo site_url('/about-us#our-team'); ?>" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-all duration-300 shadow-lg hover:shadow-xl group/btn">
                                    Read Full Bio
                                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 - Dr. Elhelou (Reversed) -->
            <div class="group">
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <div class="flex flex-col md:flex-row-reverse">
                        <div class="md:w-2/5 relative overflow-hidden">
                            <div class="aspect-square md:aspect-auto md:h-full">
                                <img src="https://www.reflectneuro.com/wp-content/uploads/2025/09/unnamed.jpg" 
                                     alt="Dr. Shannel Elhelou" 
                                     class="w-full h-full object-cover object-top grayscale group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent md:bg-gradient-to-l"></div>
                        </div>
                        <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="w-12 h-1 bg-primary-500 rounded-full"></span>
                                <span class="w-3 h-1 bg-primary-300 rounded-full"></span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-serif text-gray-900 mb-2">Dr. Shannel Elhelou</h3>
                            <p class="text-primary-600 font-semibold text-lg mb-6">Clinical Neuropsychologist</p>
                            <p class="text-gray-600 leading-relaxed mb-8">Dr. Shannel Elhelou is a Clinical Neuropsychologist who provides comprehensive neuropsychological assessments and psychotherapy for adults and older adults. Her specialty is in evaluating memory loss, cognitive changes, and neurodegenerative diseases, as well as traumatic brain injury, stroke, brain tumors, autoimmune disorders, and ADHD.</p>
                            <div>
                                <a href="<?php echo site_url('/about-us#our-team'); ?>" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-all duration-300 shadow-lg hover:shadow-xl group/btn">
                                    Read Full Bio
                                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
