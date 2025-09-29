<?php
/**
 * Template part for displaying the Our Team section
 *
 * @package Reflect_Neuropsychology
 */
?>

<!-- Our Team Section -->
<section id="team" class="py-20 bg-gray-50 scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Our Team</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Meet the dedicated professionals committed<br> to your mental health and well-being
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 - Dr. Friedman -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2024/09/1527699833653.jpeg" 
                         alt="Dr. Judith L. Friedman" 
                         class="w-full h-80 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-serif text-gray-900 mb-2">Dr. Judith L. Friedman</h3>
                    <p class="text-primary-600 font-semibold mb-3">Licensed Clinical & Forensic Neuropsychologist</p>
                    <p class="text-gray-600 text-sm mb-4">Harvard & UCLA trained with 20+ years of experience in psychological assessments and forensic neuropsychology.</p>
                    <div class="mt-4">
                        <a href="<?php echo site_url('/about-us#our-team'); ?>" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-primary-700 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-primary-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Read Full Bio
                            <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 - Dr. Elhelou -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2025/09/unnamed.jpg" 
                         alt="Clinical Psychologist" 
                         class="w-full h-80 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-serif text-gray-900 mb-2">Dr. Shannel Elhelou</h3>
                    <p class="text-primary-600 font-semibold mb-3">Clinical Neuropsychologist</p>
                    <p class="text-gray-600 text-sm mb-4">Dr. Shannel Elhelou is a Clinical Neuropsychologist who provides comprehensive neuropsychological assessments and psychotherapy for adults and older adults.</p>
                    <div class="mt-4">
                        <a href="<?php echo site_url('/about-us#our-team'); ?>" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-primary-700 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-primary-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Read Full Bio
                            <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 - Dr. Goldsmith -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="https://media.licdn.com/dms/image/v2/D4D03AQEuiHLqAbC5yw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1704781473489?e=2147483647&v=beta&t=9fLj0vFQh1hbqSwgvAGl5-ouBxcyY3pTEeKoanSShcc" 
                         alt="Licensed Therapist" 
                         class="w-full h-80 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-serif text-gray-900 mb-2">Dr. Genifer Goldsmith</h3>
                    <p class="text-primary-600 font-semibold mb-3">Brain Health Specialist</p>
                    <p class="text-gray-600 text-sm mb-4">Dr. Genifer Goldsmith specializes in brain health across the lifespan, offering both in-person and telehealth appointments for comfort and convenience.  With advanced fellowship training at UCLA...</p>
                    <div class="mt-4">
                        <a href="<?php echo site_url('/about-us#our-team'); ?>" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-primary-700 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-primary-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Read Full Bio
                            <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
