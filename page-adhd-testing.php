<?php
/**
 * Template Name: ADHD Testing
 * Template for the ADHD Testing service page
 * 
 * @package Reflect_Neuropsychology
 */

// SEO: Output meta description and structured data in wp_head
add_action('wp_head', function () {
?>
<meta name="description" content="Comprehensive ADHD testing in California — virtual telehealth assessments for teens & adults (16+). Led by Harvard & UCLA trained neuropsychologist Dr. Judith Friedman at Reflect Neuropsychology.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">

<!-- Open Graph -->
<meta property="og:title" content="ADHD Testing California — Virtual Assessment for Teens & Adults | Reflect Neuropsychology">
<meta property="og:description" content="Expert virtual ADHD assessments for teens & adults (16+). Harvard & UCLA trained clinical neuropsychologists. Accurate diagnosis from home, available across California.">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
<meta property="og:image" content="https://images.unsplash.com/photo-1663229049463-53006f83a529?q=80&w=1200&auto=format&fit=crop">
<meta property="og:site_name" content="Reflect Neuropsychology">

<!-- JSON-LD Structured Data: MedicalWebPage + FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["MedicalWebPage", "FAQPage"],
  "name": "ADHD Testing California — Virtual ADHD Assessment for Teens & Adults",
  "description": "Comprehensive virtual ADHD testing for teens and adults (16+) across California. Led by Harvard & UCLA trained clinical neuropsychologists at Reflect Neuropsychology.",
  "url": "<?php echo esc_url(get_permalink()); ?>",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is ADHD testing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ADHD testing is a comprehensive neuropsychological evaluation that uses standardized, evidence-based tools to assess attention, executive function, memory, and processing speed. It distinguishes true ADHD from other conditions with similar symptoms such as anxiety, depression, or sleep disorders."
      }
    },
    {
      "@type": "Question",
      "name": "How long does an ADHD assessment take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our comprehensive ADHD assessment typically takes 3–4 hours of virtual testing plus a separate 1-hour clinical intake interview. Results and a detailed written report are usually available within 1–2 weeks."
      }
    },
    {
      "@type": "Question",
      "name": "Can ADHD testing be done virtually?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our ADHD assessments are conducted entirely via telehealth, allowing patients anywhere in California to complete testing from the comfort of their home using a computer with a camera and stable internet connection."
      }
    },
    {
      "@type": "Question",
      "name": "Who can get tested for ADHD at Reflect Neuropsychology?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide ADHD testing for teens and adults aged 16 and older. Our evaluations are especially valuable for individuals who suspect they may have been underdiagnosed, including college students, working professionals, and women with Inattentive ADHD."
      }
    },
    {
      "@type": "Question",
      "name": "What happens after I receive my ADHD diagnosis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "After your assessment, you receive a detailed written report with your diagnosis and personalized recommendations. This may include therapy referrals, medication considerations, academic or workplace accommodations, and practical strategies for managing ADHD symptoms."
      }
    },
    {
      "@type": "Question",
      "name": "How much does ADHD testing cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer affordable, transparent pricing for our virtual ADHD assessments. Contact us for current pricing. Many patients are able to submit their detailed report to insurance for out-of-network reimbursement."
      }
    }
  ],
  "provider": {
    "@type": "MedicalOrganization",
    "name": "Reflect Neuropsychology",
    "url": "https://www.reflectneuro.com",
    "telephone": "+1-818-324-3800",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo esc_js(get_practice_address('street')); ?>",
      "addressLocality": "Calabasas",
      "addressRegion": "CA",
      "postalCode": "91302",
      "addressCountry": "US"
    }
  },
  "specialty": "Neuropsychology",
  "about": {
    "@type": "MedicalCondition",
    "name": "Attention Deficit Hyperactivity Disorder (ADHD)",
    "alternateName": "ADHD"
  }
}
</script>
<?php
}, 1);

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section -->
<section class="relative py-16 lg:py-24 bg-gradient-to-br from-blue-50 via-white to-gray-50 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 bg-orange-100 rounded-full opacity-20"></div>
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
                                <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-600 transition-colors"><?php esc_html_e('Home', 'reflect-neuro'); ?></a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="hover:text-blue-600 transition-colors"><?php esc_html_e('Services', 'reflect-neuro'); ?></a></li>
                                <li><span class="mx-2">/</span></li>
                                <li class="text-gray-900 font-medium"><?php esc_html_e('ADHD Testing', 'reflect-neuro'); ?></li>
                             </ol>
                        </nav>
                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6"><?php esc_html_e('ADHD Testing', 'reflect-neuro'); ?></h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed mb-8">
                    <p><?php esc_html_e('Comprehensive virtual ADHD assessments for teens and adults (16+), led by Dr. Judith Friedman — a clinical neuropsychologist with Harvard and UCLA training. Get an accurate diagnosis from the comfort of your home.', 'reflect-neuro'); ?></p>
                </div>
                
                <!-- Key Features -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700"><?php esc_html_e('Virtual telehealth assessments — test from home, anywhere in California', 'reflect-neuro'); ?></p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700"><?php esc_html_e('Gold-standard, evidence-based assessment tools for accurate diagnosis', 'reflect-neuro'); ?></p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-700"><?php esc_html_e('Teens & adults (16+) — personalized evaluations tailored to your needs', 'reflect-neuro'); ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1663229049463-53006f83a529?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         alt="<?php esc_attr_e('ADHD testing and assessment', 'reflect-neuro'); ?>" 
                         class="w-full h-96 object-cover">
                    <!-- Overlay for better text contrast -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-orange-100 rounded-full opacity-60 -z-10"></div>
                <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-50 rounded-full opacity-80 -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Expert ADHD Diagnosis Matters -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-6"><?php esc_html_e('Expert ADHD Diagnosis, From Your Home', 'reflect-neuro'); ?></h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p><?php esc_html_e('ADHD is a complex neurodevelopmental disorder that requires specialized expertise to diagnose accurately. As clinical neuropsychologists with advanced training in brain-behavior relationships, we are uniquely qualified to distinguish true ADHD from other conditions that may appear similar.', 'reflect-neuro'); ?></p>
                    <p><?php esc_html_e('We use only gold-standard, evidence-based assessment tools to ensure accurate and reliable results. Every evaluation is tailored to the unique needs of each individual — we don\'t believe in one-size-fits-all. Our personalized approach helps us understand your specific challenges and strengths, so we can provide clear answers and actionable guidance for your next steps.', 'reflect-neuro'); ?></p>
                    <p><?php esc_html_e('Many bright individuals, especially women, have been underdiagnosed and have struggled through life with unrecognized Inattentive ADHD. Our comprehensive virtual assessments bring expert evaluation directly to you, eliminating barriers and making professional care accessible.', 'reflect-neuro'); ?></p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-orange-50 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-gray-900 mb-2"><?php esc_html_e('Specialized Training', 'reflect-neuro'); ?></h3>
                    <p class="text-sm text-gray-600"><?php esc_html_e('Clinical neuropsychologists with specialized brain-behavior expertise', 'reflect-neuro'); ?></p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-gray-900 mb-2"><?php esc_html_e('Evidence-Based', 'reflect-neuro'); ?></h3>
                    <p class="text-sm text-gray-600"><?php esc_html_e('Gold-standard protocols following latest research and clinical guidelines', 'reflect-neuro'); ?></p>
                </div>
                <div class="bg-green-50 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-gray-900 mb-2"><?php esc_html_e('100% Virtual', 'reflect-neuro'); ?></h3>
                    <p class="text-sm text-gray-600"><?php esc_html_e('Complete your assessment from home, anywhere in California', 'reflect-neuro'); ?></p>
                </div>
                <div class="bg-purple-50 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-gray-900 mb-2"><?php esc_html_e('Teens & Adults', 'reflect-neuro'); ?></h3>
                    <p class="text-sm text-gray-600"><?php esc_html_e('Comprehensive ADHD testing for ages 16 and older', 'reflect-neuro'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Customize the assessment process for ADHD testing
set_query_var('assessment_process_title', 'How Our Virtual ADHD Assessment Works');
set_query_var('assessment_process_subtitle', 'Comprehensive evaluation conducted entirely online');

$assessment_steps = array(
    array(
        'number' => '1',
        'color' => 'orange',
        'title' => 'Free Consultation',
        'description' => 'Book your free 15-minute consultation to discuss your needs and answer any questions'
    ),
    array(
        'number' => '2',
        'color' => 'blue',
        'title' => 'Intake Session',
        'description' => 'A thorough 1-hour clinical interview to understand your history and concerns'
    ),
    array(
        'number' => '3',
        'color' => 'green',
        'title' => 'Virtual Assessment',
        'description' => 'Comprehensive 3-4 hour virtual assessment using gold-standard testing tools'
    ),
    array(
        'number' => '4',
        'color' => 'purple',
        'title' => 'Detailed Report',
        'description' => 'Receive your detailed report with diagnosis and personalized recommendations'
    )
);
set_query_var('assessment_steps', $assessment_steps);

get_template_part('template-parts/services-template-parts/assessment-process-section');
?>

<!-- Common Signs of ADHD Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Common Signs of ADHD in Teens & Adults</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">ADHD presents differently across age groups and individuals. Recognizing these patterns is the first step toward getting the support you need.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Inattentive Symptoms -->
            <div class="bg-orange-50 rounded-2xl p-8 border border-orange-100">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Inattentive Type</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">&#8226;</span>
                        Difficulty sustaining focus on tasks or conversations
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">&#8226;</span>
                        Frequently losing important items
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">&#8226;</span>
                        Trouble organizing tasks and managing time
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">&#8226;</span>
                        Often makes careless mistakes at work or school
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">&#8226;</span>
                        Avoids tasks requiring sustained mental effort
                    </li>
                </ul>
            </div>
            
            <!-- Hyperactive-Impulsive Symptoms -->
            <div class="bg-blue-50 rounded-2xl p-8 border border-blue-100">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Hyperactive-Impulsive Type</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-2 mt-1">&#8226;</span>
                        Restlessness or feeling "driven by a motor"
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-2 mt-1">&#8226;</span>
                        Difficulty waiting your turn or sitting still
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-2 mt-1">&#8226;</span>
                        Interrupting others in conversations
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-2 mt-1">&#8226;</span>
                        Making impulsive decisions without thinking
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-2 mt-1">&#8226;</span>
                        Talking excessively or at inappropriate times
                    </li>
                </ul>
            </div>
            
            <!-- Combined / Everyday Impact -->
            <div class="bg-purple-50 rounded-2xl p-8 border border-purple-100">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif text-gray-900 mb-4">Everyday Impact</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-2 mt-1">&#8226;</span>
                        Chronic underperformance despite high intelligence
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-2 mt-1">&#8226;</span>
                        Relationship difficulties and social challenges
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-2 mt-1">&#8226;</span>
                        Procrastination and missed deadlines
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-2 mt-1">&#8226;</span>
                        Emotional dysregulation and frustration
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-2 mt-1">&#8226;</span>
                        Low self-esteem from years of struggling
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Who Should Get Tested Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-6">Who Should Consider ADHD Testing?</h2>
                <p class="text-gray-600 leading-relaxed mb-8">ADHD often goes undiagnosed — particularly in women and high-achieving individuals who have developed coping strategies that mask their symptoms. If any of the following resonate with you, a professional ADHD evaluation can provide the clarity you need.</p>
                
                <div class="space-y-4">
                    <div class="flex items-start bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-4 mt-0.5 flex-shrink-0">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">College Students & Young Adults</h3>
                            <p class="text-sm text-gray-600">Struggling with focus, time management, or academic performance despite being intelligent and capable</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-0.5 flex-shrink-0">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Working Professionals</h3>
                            <p class="text-sm text-gray-600">Experiencing burnout, difficulty meeting deadlines, or trouble maintaining organization in your career</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-0.5 flex-shrink-0">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Women & Underdiagnosed Individuals</h3>
                            <p class="text-sm text-gray-600">Women are frequently underdiagnosed with Inattentive ADHD — our specialized assessments address this gap</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-4 mt-0.5 flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Parents of Teenagers (16+)</h3>
                            <p class="text-sm text-gray-600">Seeking answers for your teen's academic struggles, behavioral challenges, or difficulty with social situations</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <h3 class="text-2xl font-serif text-gray-900 mb-6">What Your ADHD Report Includes</h3>
                    <div class="space-y-5">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-sm font-bold text-orange-600">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Comprehensive Diagnostic Findings</h4>
                                <p class="text-sm text-gray-600">Clear diagnosis with supporting clinical evidence</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-sm font-bold text-blue-600">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cognitive Strengths & Weaknesses</h4>
                                <p class="text-sm text-gray-600">Detailed profile of attention, memory, executive function, and processing speed</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-sm font-bold text-green-600">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Personalized Recommendations</h4>
                                <p class="text-sm text-gray-600">Treatment options, therapy referrals, and medication considerations</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-sm font-bold text-purple-600">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Accommodations Documentation</h4>
                                <p class="text-sm text-gray-600">Supporting documentation for academic (504/IEP) or workplace accommodations</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-sm font-bold text-orange-600">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Practical Strategies</h4>
                                <p class="text-sm text-gray-600">Evidence-based coping techniques for daily life, work, and relationships</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADHD Telehealth California Reference Section -->
<section class="py-20 bg-gradient-to-br from-orange-50 via-white to-blue-50 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-10 right-10 w-40 h-40 bg-orange-100 rounded-full opacity-20"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-blue-100 rounded-full opacity-20"></div>
    </div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
            <div class="grid lg:grid-cols-5 items-stretch">
                <div class="lg:col-span-3 p-8 lg:p-12">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-orange-700 mb-6">
                        TELEHEALTH ACROSS CALIFORNIA
                    </div>
                    <h2 class="text-2xl md:text-3xl font-serif text-gray-900 mb-4">Virtual ADHD Testing — Anywhere in California</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">Through our dedicated ADHD telehealth program, we bring expert neuropsychological ADHD assessments directly to your home. No matter where you live in California — Los Angeles, San Francisco, San Diego, Sacramento, or any community in between — you can access the same gold-standard testing used in our Calabasas office.</p>
                    <p class="text-gray-600 leading-relaxed mb-6">Our virtual ADHD assessments are quick, convenient, and affordable. All you need is a computer with a camera and a stable internet connection. Every evaluation is led by Dr. Judith Friedman, a clinical neuropsychologist with Harvard and UCLA training.</p>
                    <a href="https://adhdtestcalifornia.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                        Visit ADHDTestCalifornia.com
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
                <div class="lg:col-span-2 bg-gradient-to-br from-orange-600 to-orange-700 p-8 lg:p-10 flex flex-col justify-center text-white">
                    <div class="space-y-6">
                        <div>
                            <div class="text-3xl font-bold mb-1">3-4 hrs</div>
                            <div class="text-orange-200 text-sm">Comprehensive virtual assessment</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold mb-1">16+</div>
                            <div class="text-orange-200 text-sm">Ages — teens through adults</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold mb-1">100%</div>
                            <div class="text-orange-200 text-sm">Virtual — test from home</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold mb-1">Free</div>
                            <div class="text-orange-200 text-sm">15-minute initial consultation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Frequently Asked Questions About ADHD Testing</h2>
            <p class="text-xl text-gray-600">Answers to common questions about our virtual ADHD assessment process</p>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>What is ADHD testing?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    ADHD testing is a comprehensive neuropsychological evaluation that uses standardized, evidence-based tools to assess attention, executive function, memory, and processing speed. Unlike a brief screening or questionnaire, our assessment is a thorough clinical evaluation that can distinguish true ADHD from other conditions with overlapping symptoms — such as anxiety, depression, sleep disorders, or learning disabilities.
                </div>
            </details>
            
            <!-- FAQ 2 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>How long does an ADHD assessment take?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Our comprehensive ADHD assessment typically takes 3–4 hours of virtual testing plus a separate 1-hour clinical intake interview. The intake covers your developmental history, current symptoms, and functional challenges. Results and a detailed written report are usually available within 1–2 weeks after the assessment is complete.
                </div>
            </details>
            
            <!-- FAQ 3 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>Can ADHD testing be done virtually?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Yes. Our ADHD assessments are conducted entirely via telehealth, allowing patients anywhere in California to complete testing from the comfort of their home. All you need is a computer with a webcam and a stable internet connection. Research has shown that virtual neuropsychological assessments produce results comparable to in-person testing.
                </div>
            </details>
            
            <!-- FAQ 4 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>Who can get tested for ADHD at Reflect Neuropsychology?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    We provide ADHD testing for teens and adults aged 16 and older. Our evaluations are especially valuable for college students struggling with academic performance, working professionals experiencing burnout or organizational challenges, and women who suspect they may have Inattentive ADHD that was missed in childhood.
                </div>
            </details>
            
            <!-- FAQ 5 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>What happens after I receive my ADHD diagnosis?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    After your assessment, you receive a detailed written report with your diagnosis and personalized recommendations. This may include therapy referrals, medication considerations, academic or workplace accommodations (504 plans, IEPs), and practical strategies for managing ADHD symptoms in daily life. We also schedule a feedback session to walk you through the results and answer any questions.
                </div>
            </details>
            
            <!-- FAQ 6 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>How much does ADHD testing cost?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    We offer affordable, transparent pricing for our virtual ADHD assessments. Contact us at <a href="tel:+18183243800" class="text-primary-600 hover:text-primary-700 font-medium">(818) 324-3800</a> or <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-primary-600 hover:text-primary-700 font-medium">reach out online</a> for current pricing. Many patients are able to submit their detailed report to insurance for out-of-network reimbursement. We also offer a free 15-minute consultation to discuss your needs before committing.
                </div>
            </details>

            <!-- FAQ 7 -->
            <details class="group bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                <summary class="flex items-center justify-between cursor-pointer p-6 font-semibold text-gray-900 hover:text-primary-600 transition-colors">
                    <span>How is ADHD testing different from an online screening quiz?</span>
                    <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Online screening quizzes can indicate whether ADHD symptoms are present, but they cannot provide a clinical diagnosis. A proper neuropsychological ADHD assessment involves standardized cognitive tests, a detailed clinical interview, and analysis by a trained specialist who can rule out other conditions. Our evaluations provide a definitive diagnosis and a roadmap for treatment — something a self-report questionnaire simply cannot do.
                </div>
            </details>
        </div>
    </div>
</section>

<!-- Page Content Section -->
<section class="py-16 bg-gray-50">
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
