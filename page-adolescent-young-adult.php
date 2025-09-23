<?php
/**
 * Template Name: Adolescent & Young Adult Assessment
 * Template for the Adolescent & Young Adult Assessment service page
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
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-green-50 rounded-full opacity-30"></div>
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
                                <li class="text-gray-900 font-medium">Adolescent & Young Adult Assessment</li>
                             </ol>
                        </nav>
                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6">Adolescent & Young Adult Assessment</h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed mb-8">
                    <p>Comprehensive evaluation of cognitive, emotional, and behavioral development for adolescents and young adults. Our assessments help identify learning differences, ADHD, autism spectrum disorders, and other conditions that may impact academic and social functioning.</p>
                </div>
                   
            </div>
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/04/AdobeStock_128751432-1.jpg" 
                         alt="Adolescent assessment session" 
                         class="w-full h-96 object-cover">
                    <!-- Overlay for better text contrast -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-100 rounded-full opacity-60 -z-10"></div>
                <div class="absolute -top-6 -left-6 w-16 h-16 bg-green-50 rounded-full opacity-80 -z-10"></div>
            </div>
        </div>
    </div>
</section>


<?php
// Customize the assessment process for adolescent/young adult assessments
set_query_var('assessment_process_title', 'Our Assessment Process');
set_query_var('assessment_process_subtitle', 'A comprehensive, developmentally-appropriate approach designed specifically for adolescents and young adults');

$assessment_steps = array(
    array(
        'number' => '1',
        'color' => 'blue',
        'title' => 'Initial Consultation',
        'description' => 'Meet with student and family to discuss concerns, history, and goals'
    ),
    array(
        'number' => '2',
        'color' => 'green',
        'title' => 'Comprehensive Testing',
        'description' => 'Age-appropriate cognitive, academic, and emotional assessments'
    ),
    array(
        'number' => '3',
        'color' => 'purple',
        'title' => 'Analysis & Report',
        'description' => 'Detailed analysis with educational and treatment recommendations'
    ),
    array(
        'number' => '4',
        'color' => 'orange',
        'title' => 'Feedback & Planning',
        'description' => 'Results discussion and next steps for academic and personal success'
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
