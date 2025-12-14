<?php
/**
 * Template Name: Forensic Assessment
 * Template for the Forensic Assessment service page
 * 
 * @package Reflect_Neuropsychology
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section -->
<section class="relative py-16 lg:py-24 bg-gradient-to-br from-blue-50 via-white to-gray-50 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-purple-100 rounded-full opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-blue-50 rounded-full opacity-30"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-2 relative z-10">
        <!-- Two Column Layout -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Text Content -->
            <div>
               <!-- Breadcrumb Navigation -->
                        <nav class="mb-8">
                            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                                <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-600 transition-colors">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="hover:text-blue-600 transition-colors">Services</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li class="text-gray-900 font-medium">Forensic Assessment</li>
                             </ol>
                        </nav>
                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6">Forensic Assessment</h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed mb-8">
                    <p>Dr. Friedman is a leading forensic neuropsychology expert in Southern California. With over 20+ years of experience, we provide comprehensive evaluations for legal proceedings, personal injury cases, and disability determinations.</p>
                </div>
                
                <!-- Key Features -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Expert witness testimony and court appearances</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Personal injury and medical malpractice cases</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Disability and capacity evaluations</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2023/01/AdobeStock_317868311.jpg" 
                         alt="Forensic neuropsychological assessment" 
                         class="w-full h-96 object-cover">
                    <!-- Overlay for better text contrast -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-purple-100 rounded-full opacity-60 -z-10"></div>
                <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-50 rounded-full opacity-80 -z-10"></div>
            </div>
        </div>
    </div>
</section>

<?php
// Customize the assessment process for forensic assessments
set_query_var('assessment_process_title', 'Forensic Assessment Process');
set_query_var('assessment_process_subtitle', 'A rigorous, legally-defensible approach designed for court proceedings and legal evaluations');

$assessment_steps = array(
    array(
        'number' => '1',
        'color' => 'purple',
        'title' => 'Case Review & Consultation',
        'description' => 'Comprehensive review of legal documents, medical records, and case specifics'
    ),
    array(
        'number' => '2',
        'color' => 'blue',
        'title' => 'Forensic Evaluation',
        'description' => 'Standardized testing with legally-defensible methodology and documentation'
    ),
    array(
        'number' => '3',
        'color' => 'orange',
        'title' => 'Expert Report',
        'description' => 'Detailed forensic report meeting legal standards and court requirements'
    ),
    array(
        'number' => '4',
        'color' => 'green',
        'title' => 'Expert Testimony',
        'description' => 'Professional court testimony and deposition services as needed'
    )
);
set_query_var('assessment_steps', $assessment_steps);

get_template_part('template-parts/services-template-parts/assessment-process-section');
?>

<!-- Page Content Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-blue max-w-none">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<!-- Template Parts -->
<?php get_template_part('template-parts/why-choose-section'); ?>

<?php get_template_part('template-parts/cta-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
