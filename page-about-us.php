<?php
/**
 * Template Name: About Us
 * Template for the About Us page
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
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        
        <!-- Two Column Layout -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
         
            <!-- Left Column - Text Content -->
            <div>
                <!-- Breadcrumb Navigation -->
                 <nav class="mb-8">
                     <ol class="flex items-center space-x-2 text-sm text-gray-600">
                         <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-600 transition-colors">Home</a></li>
                         <li><span class="mx-2">/</span></li>
                         <li class="text-gray-900 font-medium">About Us</li>
                     </ol>
                 </nav>

                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6">About Reflect Neuropsychology</h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed mb-8">
                    <p>Reflect Neuropsychology is a premier practice dedicated to providing comprehensive psychological assessments and therapeutic services across the lifespan. Our team of expert clinicians combines clinical excellence with compassionate care to help individuals and families understand cognitive, emotional, and behavioral functioning.</p>
                </div>
                
                
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2020/01/AdobeStock_247998340-scaled.jpeg" 
                         alt="Reflect Neuropsychology practice" 
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

<!-- Our Team Section -->
<div id="our-team"></div> 

<?php
// Team members data array
$team_members = [
    [
        'name' => 'Dr. Judith L. Friedman',
        'title' => 'Licensed Clinical & Forensic Neuropsychologist',
        'image' => 'https://www.reflectneuro.com/wp-content/uploads/2024/09/1527699833653.jpeg',
        'bio' => [
            'As the lead Neuropsychologist at Reflect Neuropsychology, Dr. Friedman is a Clinical Neuropsychologist with extensive training (McLean Hospital/Harvard University, CHLA, and UCLA), and over three decades of experience in assessing patients across the life span. Dr. Friedman\'s expertise includes traumatic brain injury, (TBI), concussions, ADHD, leaning disabilities, dementia, stroke, and complex medical-legal diagnoses.',
            'Doctor Friedman received her Master\'s degree in Education from Harvard University, and her Doctorate in Clinical Psychology from Pepperdine University. She completed her pre-doctoral externships at the UCLA Alzheimer\'s Disease Research Center, UCLA Medical Psychology Assessment Center (MPAC), and Children\'s Hospital Los Angeles (CHLA).',
            'Dr. Friedman is a leading forensic neuropsychology expert in Southern California. With over 20+ years of experience, her work includes numerous cases of post-concussive syndrome, severe and mild traumatic brain injury (TBI) in both adolescents and adults, chronic pain, psychological trauma (i.e., PTSD), as well as undue influence, financial elder abuse, testamentary capacity, probate conservatorship, and more.',
            'She has been an Expert Witness on numerous cases, has participated in depositions, and has testified in court for both the prosecution and the defense. She is voluntary clinical faculty at the UCLA Medical Psychology Assessment Center at the Semel Institute at the UCLA David Geffen School of Medicine.',
            'She has worked with top personal injury law firms in Los Angeles (e.g., Panish, Shea, and Boyle, LLP) as well as major insurance companies on workers compensation claims.'
        ],
        'accent_color' => 'blue'
    ],
    [
        'name' => 'Dr. Shannel Elhelou',
        'title' => 'Clinical Neuropsychologist',
        'image' => 'https://www.reflectneuro.com/wp-content/uploads/2025/09/unnamed.jpg',
        'bio' => [
            'Dr. Shannel Elhelou is a Clinical Neuropsychologist who provides comprehensive neuropsychological assessments and psychotherapy for adults and older adults. She trained at the UCLA Semel Institute, Canandaigua VA Medical Center, and Providence St. John\'s Pacific Neuroscience Institute. Her specialty is in evaluating memory loss, cognitive changes, and neurodegenerative diseases (e.g., Alzheimer\'s disease, Parkinson\'s disease, dementia), as well as traumatic brain injury, stroke, brain tumors, autoimmune disorders, ADHD, and surgical evaluations such as deep brain stimulation (DBS). She works closely with individuals and families to provide clarity, support, and guidance during times of uncertainty.',
            'In therapy, Dr. Elhelou utilizes Acceptance and Commitment Therapy (ACT) and a humanistic approach to help people adapt to life changes, reconnect with values, and build resilience. She believes in creating a compassionate and collaborative space where each person feels understood and empowered to enhance their well-being and quality of life.'
        ],
        'accent_color' => 'blue'
    ],
    [
        'name' => 'Dr. Genifer Goldsmith',
        'title' => 'Brain Health Specialist',
        'image' => 'https://media.licdn.com/dms/image/v2/D4D03AQEuiHLqAbC5yw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1704781473489?e=2147483647&v=beta&t=9fLj0vFQh1hbqSwgvAGl5-ouBxcyY3pTEeKoanSShcc',
        'bio' => [
            'Dr. Genifer Goldsmith specializes in brain health across the lifespan, offering both in-person and telehealth appointments for comfort and convenience. With advanced fellowship training at UCLA and residency experience at the VA Hospital, she is an expert in evaluating and supporting older adults facing memory changes, dementia, and complex medical conditions. Dr. Goldsmith conducts thorough neuropsychological assessments, including telehealth ADHD evaluations for children, teens, and adults.',
            'With her specialized expertise in neurodegenerative diseases and the aging brain, she conducts capacity evaluations and cognitive rehabilitation. She integrates evidence-based cognitive, behavioral, and supportive interventions tailored to each client\'s unique neurological and psychosocial profile. Her goal is to foster cognitive resilience, independence, and quality of life. Dr. Goldsmith is dedicated to empowering patients and caregivers with clear understanding, compassionate guidance, and strategies to help navigate the challenges of aging and cognitive change at every stage of life.'
        ],
        'accent_color' => 'blue'
    ]
];
?>

<!-- Our Team Section - Modern Card Design -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Meet Our Team</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our dedicated team of licensed professionals brings together decades of experience and specialized expertise to provide exceptional care
            </p>
        </div>
        
        <div class="space-y-8">
            <?php foreach ($team_members as $index => $member): ?>
                <?php 
                // Include the team member card template part
                get_template_part('template-parts/team-member-card', null, [
                    'member' => $member,
                    'index' => $index
                ]); 
                ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>



<!-- Our Approach Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Our Approach</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We believe in a comprehensive, individualized approach that combines scientific rigor with compassionate care
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Evidence-Based -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Evidence-Based Practice</h3>
                <p class="text-gray-600">Our assessments and interventions are grounded in the latest research and validated methodologies, ensuring accurate and reliable results.</p>
            </div>
            
            <!-- Individualized Care -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Individualized Care</h3>
                <p class="text-gray-600">Every assessment and treatment plan is tailored to the unique needs, goals, and circumstances of each individual and family.</p>
            </div>
            
            <!-- Comprehensive Support -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Comprehensive Support</h3>
                <p class="text-gray-600">From initial assessment through treatment and follow-up, we provide ongoing support to help you achieve your goals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Page Content Section -->
<?php if (get_the_content()) : ?>
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-blue max-w-none">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Template Parts -->
<?php get_template_part('template-parts/cta-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
