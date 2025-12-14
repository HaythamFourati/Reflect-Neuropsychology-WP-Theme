<?php
/**
 * Template Name: Pre-Surgical Cognitive Assessment
 * Template for the Pre-Surgical Cognitive Assessment service page
 * 
 * @package Reflect_Neuropsychology
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section -->
<section class="relative py-16 lg:py-24 bg-gradient-to-br from-blue-50 via-white to-gray-50 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-teal-100 rounded-full opacity-20"></div>
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
                                <li class="text-gray-900 font-medium">Pre-Surgical Cognitive Assessment</li>
                             </ol>
                        </nav>
                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6">Pre-Surgical Cognitive Assessment</h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed mb-8">
                    <p>Comprehensive cognitive evaluations before surgical procedures to establish baseline functioning and help predict post-operative outcomes. Our assessments provide critical information for surgical planning and patient care optimization.</p>
                </div>
                
                <!-- Key Features -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Baseline cognitive functioning documentation</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Risk assessment for post-operative cognitive changes</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">Coordination with surgical teams for optimal outcomes</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2025/12/antonio-zarza-F857zTqPz6c-unsplash.jpg" 
                         alt="Pre-surgical cognitive assessment" 
                         class="w-full h-96 object-cover">
                    <!-- Overlay for better text contrast -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-teal-100 rounded-full opacity-60 -z-10"></div>
                <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-50 rounded-full opacity-80 -z-10"></div>
            </div>
        </div>
    </div>
</section>

<?php
// Customize the assessment process for pre-surgical assessments
set_query_var('assessment_process_title', 'Pre-Surgical Assessment Process');
set_query_var('assessment_process_subtitle', 'A thorough evaluation designed to support surgical planning and optimize patient outcomes');

$assessment_steps = array(
    array(
        'number' => '1',
        'color' => 'teal',
        'title' => 'Medical Record Review',
        'description' => 'Comprehensive review of medical history, imaging, and surgical plans'
    ),
    array(
        'number' => '2',
        'color' => 'blue',
        'title' => 'Cognitive Baseline Testing',
        'description' => 'Standardized neuropsychological testing to establish pre-operative cognitive functioning'
    ),
    array(
        'number' => '3',
        'color' => 'orange',
        'title' => 'Risk Assessment',
        'description' => 'Evaluation of cognitive risk factors and prediction of post-operative outcomes'
    ),
    array(
        'number' => '4',
        'color' => 'green',
        'title' => 'Surgical Team Consultation',
        'description' => 'Detailed report and consultation with surgical team for care optimization'
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
