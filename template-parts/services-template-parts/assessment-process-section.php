<?php
/**
 * Template part for displaying the Assessment Process section
 * Used across service pages
 * 
 * @package Reflect_Neuropsychology
 */

// Get custom values or use defaults
$section_title = get_query_var('assessment_process_title') ?: 'Our Assessment Process';
$section_subtitle = get_query_var('assessment_process_subtitle') ?: 'A comprehensive, step-by-step approach to understanding your cognitive profile';

// Default steps - can be overridden by passing $assessment_steps array
$default_steps = array(
    array(
        'number' => '1',
        'color' => 'blue',
        'title' => 'Initial Consultation',
        'description' => 'Comprehensive review of your concerns, history, and goals for the evaluation'
    ),
    array(
        'number' => '2',
        'color' => 'green',
        'title' => 'Testing Session',
        'description' => 'Standardized cognitive tests administered in a comfortable, supportive environment'
    ),
    array(
        'number' => '3',
        'color' => 'purple',
        'title' => 'Analysis & Report',
        'description' => 'Thorough analysis of results with comprehensive written report of findings'
    ),
    array(
        'number' => '4',
        'color' => 'orange',
        'title' => 'Feedback Session',
        'description' => 'Detailed explanation of results and personalized recommendations for next steps'
    )
);

$steps = get_query_var('assessment_steps') ?: $default_steps;
?>

<!-- Assessment Process Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4"><?php echo esc_html($section_title); ?></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php echo esc_html($section_subtitle); ?>
            </p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <?php foreach ($steps as $step) : ?>
            <!-- Step <?php echo esc_html($step['number']); ?> -->
            <div class="text-center">
                <div class="w-16 h-16 bg-<?php echo esc_attr($step['color']); ?>-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-<?php echo esc_attr($step['color']); ?>-600"><?php echo esc_html($step['number']); ?></span>
                </div>
                <h3 class="text-lg font-serif text-gray-900 mb-3"><?php echo esc_html($step['title']); ?></h3>
                <p class="text-gray-600 text-sm"><?php echo esc_html($step['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
