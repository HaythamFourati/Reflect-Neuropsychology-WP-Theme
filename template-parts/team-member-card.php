<?php
/**
 * Template part for displaying team member cards
 * 
 * Variables expected:
 * $member - array containing member data (name, title, image, bio, accent_color)
 * $index - member index for timeline display
 */

// Extract variables from args if they exist
if (isset($args)) {
    $member = $args['member'] ?? null;
    $index = $args['index'] ?? 0;
}

// Fallback if variables are not set
if (!isset($member) || !$member) {
    return;
}
?>

<div class="group relative">
    <!-- Team Card -->
    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-<?php echo $member['accent_color']; ?>-200 p-8">
        <div class="flex flex-col lg:flex-row lg:items-start gap-6">
            <!-- Image Section - Smaller and Circular -->
            <div class="flex-shrink-0 mx-auto lg:mx-0">
                <div class="relative">
                    <div class="w-86 h-86 lg:w-86 lg:h-86 rounded-2xl overflow-hidden ring-<?php echo $member['accent_color']; ?>-100">
                        <img src="<?php echo $member['image']; ?>" 
                             alt="<?php echo $member['name']; ?>, <?php echo $member['title']; ?>" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Accent Badge -->
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-<?php echo $member['accent_color']; ?>-500 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="flex-1 text-center lg:text-left">
                <!-- Header -->
                <div class="mb-6">
                    <div class="flex items-center justify-center lg:justify-start mb-3">
                        <div class="w-8 h-1 bg-<?php echo $member['accent_color']; ?>-500 rounded-full mr-3"></div>
                        <div class="w-4 h-1 bg-<?php echo $member['accent_color']; ?>-300 rounded-full"></div>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-serif text-gray-900 mb-2"><?php echo $member['name']; ?></h3>
                    <p class="text-<?php echo $member['accent_color']; ?>-600 font-semibold text-lg mb-4"><?php echo $member['title']; ?></p>
                </div>
                
                <!-- Bio Content -->
                <div class="prose prose-gray max-w-none text-left">
                    <?php foreach ($member['bio'] as $paragraph): ?>
                        <p class="text-gray-600 leading-relaxed mb-4 last:mb-0 text-sm lg:text-base"><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Subtle Background Glow -->
    <div class="absolute -inset-2 bg-gradient-to-r from-<?php echo $member['accent_color']; ?>-500/5 to-transparent rounded-2xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
