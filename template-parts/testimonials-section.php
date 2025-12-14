<?php
// Testimonials data array
$testimonials = [
    [
        'name' => 'Linda Archie.',
        'role' => 'Parent',
        'initials' => 'LA',
        'rating' => 5,
        'review' => "Dr. Judith Friedman has vast knowledge and is highly skilled in her respective field. She is kind, patient and extremely professional. I enthusiastically recommend her to my clients, friends and family."
    ],
    [
        'name' => 'Dwight Brown.',
        'role' => 'Adult Client',
        'initials' => 'DB',
        'rating' => 5,
        'review' => "I have had several clients who were patients at Reflect; all of them had positive things to say about Dr. Friedman and her wonderful staff."
    ],
    [
        'name' => 'Edi Cooke.',
        'role' => 'Parent',
        'initials' => 'EC',
        'rating' => 5,
        'review' => "Dr. Friedman is very caring and skilled clinician. Her ability to identify and explain complicated cognitive abilities is outstanding. She is a compassionate and dedicated professional."
    ],
    [
        'name' => 'David T.',
        'role' => 'Parent',
        'initials' => 'DT',
        'rating' => 5,
        'review' => "The neuropsychological evaluation was thorough and insightful. Dr. Friedman took the time to explain everything and provided practical recommendations that have helped our son succeed."
    ],
    [
        'name' => 'Jennifer L.',
        'role' => 'Adult Client',
        'initials' => 'JL',
        'rating' => 5,
        'review' => "Outstanding service from start to finish. The assessment helped identify my cognitive strengths and challenges, leading to better workplace accommodations and improved quality of life."
    ],
    [
        'name' => 'Robert H.',
        'role' => 'Family Member',
        'initials' => 'RH',
        'rating' => 5,
        'review' => "Dr. Friedman's expertise in geriatric neuropsychology was evident throughout my father's assessment. Her compassionate approach and detailed explanations were invaluable during a difficult time."
    ]
];

// Function to render star rating
function render_stars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        $stars .= '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
        </svg>';
    }
    return $stars;
}
?>

<!-- Testimonials Section -->
<section class="py-16 lg:py-24 bg-gradient-to-b from-orange-50/50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-playfair text-gray-900 mb-6">
                What Our <span class="text-primary-500">Patients</span> Say
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Real experiences from families and individuals who have benefited from our comprehensive neuropsychological assessments.
            </p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            // Display only first 3 testimonials for the main grid
            $displayed_testimonials = array_slice($testimonials, 0, 3);
            foreach ($displayed_testimonials as $testimonial): 
            ?>
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <?php echo render_stars($testimonial['rating']); ?>
                    </div>
                </div>
                <blockquote class="text-gray-700 leading-relaxed mb-6">
                    "<?php echo esc_html($testimonial['review']); ?>"
                </blockquote>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                        <span class="text-primary-600 font-semibold text-lg"><?php echo esc_html($testimonial['initials']); ?></span>
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold text-gray-900"><?php echo esc_html($testimonial['name']); ?></p>
                        <p class="text-gray-600 text-sm"><?php echo esc_html($testimonial['role']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Google Reviews CTA -->
        <div class="text-center mt-12">
            <p class="text-gray-600 mb-6">Read more reviews on Google</p>
            <a href="https://share.google/KhES3QItAFtKSy7bF" 
               target="_blank" 
               rel="noopener noreferrer"
               class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-full hover:bg-gray-200 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                View Google Reviews
            </a>
        </div>
    </div>
</section>
