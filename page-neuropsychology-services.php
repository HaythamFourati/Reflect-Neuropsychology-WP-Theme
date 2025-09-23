<?php
/**
 * Template Name: Neuropsychology Services
 * Template for the Our Services page
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
                     <li class="text-gray-900 font-medium">Our Services</li>
                   </ol>
                </nav>
                <!-- Page Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-gray-900 leading-tight mb-6">Comprehensive Neuropsychological Services</h1>
                
                <!-- Page Description -->
                <div class="text-xl text-gray-600 leading-relaxed">
                    <p>Expert psychological assessments and evaluations across the lifespan, from childhood through senior years. Our comprehensive services help identify cognitive strengths and challenges to guide treatment and support decisions.</p>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2024/01/AdobeStock_334168757.jpg" 
                         alt="Neuropsychological Assessment Session" 
                         class="w-full h-96 object-cover">
                    <!-- Overlay for better text contrast if needed -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <!-- Decorative element -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-100 rounded-full opacity-60 -z-10"></div>
                <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-50 rounded-full opacity-80 -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content 
<article class="py-12 bg-white">
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-2">
        <div class="prose prose-lg prose-blue max-w-none">
            <?php the_content(); ?>
        </div>
    </div>
</article>
-->
<!-- Detailed Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Our Specialized Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive evaluations tailored to your specific needs and concerns
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Service 1: Comprehensive Neuropsychological Evaluations -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900">Comprehensive Neuropsychological Evaluations</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    In-depth assessments of cognitive functioning including memory, attention, executive function, language, and visual-spatial skills. These evaluations help identify cognitive strengths and weaknesses to guide treatment planning.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Memory and learning assessments</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Attention and concentration evaluation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Executive function and problem-solving</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Language and communication skills</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 2: Educational and Learning Assessments -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900">Educational & Learning Assessments</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Specialized evaluations for students of all ages to identify learning differences, ADHD, and other conditions that may impact academic performance. Essential for educational planning and accommodations.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Learning disability evaluations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">ADHD assessments</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Academic accommodation recommendations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Gifted and talented evaluations</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 3: Forensic Neuropsychological Evaluations -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900">Forensic Neuropsychological Evaluations</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Expert witness services and forensic evaluations for legal proceedings. Comprehensive assessments to determine cognitive functioning in the context of personal injury, disability, and competency cases.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Personal injury assessments</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Disability evaluations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Expert witness testimony</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-purple-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Competency evaluations</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 4: Geriatric Assessments -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900">Geriatric & Memory Assessments</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Specialized evaluations for older adults to assess cognitive changes, memory concerns, and early signs of dementia. Comprehensive assessments to distinguish normal aging from pathological conditions.
                </p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-orange-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Dementia and Alzheimer's evaluations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-orange-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Memory disorder assessments</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-orange-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Capacity and competency evaluations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-orange-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Treatment planning and recommendations</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Assessment Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Our Assessment Process</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A comprehensive, step-by-step approach to understanding your cognitive profile
            </p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-blue-600">1</span>
                </div>
                <h3 class="text-lg font-serif text-gray-900 mb-3">Initial Consultation</h3>
                <p class="text-gray-600 text-sm">Comprehensive review of your concerns, history, and goals for the evaluation</p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-green-600">2</span>
                </div>
                <h3 class="text-lg font-serif text-gray-900 mb-3">Testing Session</h3>
                <p class="text-gray-600 text-sm">Standardized cognitive tests administered in a comfortable, supportive environment</p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-purple-600">3</span>
                </div>
                <h3 class="text-lg font-serif text-gray-900 mb-3">Analysis & Report</h3>
                <p class="text-gray-600 text-sm">Thorough analysis of results with comprehensive written report of findings</p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-orange-600">4</span>
                </div>
                <h3 class="text-lg font-serif text-gray-900 mb-3">Feedback Session</h3>
                <p class="text-gray-600 text-sm">Detailed explanation of results and personalized recommendations for next steps</p>
            </div>
        </div>
    </div>
</section>

<!-- Experience Excellence Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-100 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-purple-100 rounded-full opacity-30"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-100 rounded-full opacity-25"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Why Choose Reflect Neuropsychology</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Under the expert guidance of Dr. Judith Friedman, we provide evidence-based neuropsychological assessments for children, adolescents, adults, and older adults across the San Fernando Valley, Simi Valley, and Ventura County
            </p>
        </div>
        
        <!-- Image Grid with Content -->
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <!-- Professional Environment -->
            <div class="group relative">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transition-transform duration-300 group-hover:scale-105">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/04/AdobeStock_128751432-1.jpg" 
                         alt="Modern, comfortable assessment environment" 
                         class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-xl font-serif text-white mb-2">Welcoming Environment</h3>
                        <p class="text-gray-200 text-sm">Our Calabasas office provides a comfortable, professional setting designed to put you and your family at ease</p>
                    </div>
                </div>
            </div>
            
            <!-- Expert Team -->
            <div class="group relative">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transition-transform duration-300 group-hover:scale-105">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2019/09/cropped-1.jpg" 
                         alt="Licensed neuropsychologist conducting assessment" 
                         class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-xl font-serif text-white mb-2">Dr. Judith Friedman</h3>
                        <p class="text-gray-200 text-sm">Leading forensic neuropsychology expert with over 20+ years of specialized experience in Southern California</p>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Technology -->
            <div class="group relative">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transition-transform duration-300 group-hover:scale-105">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2019/08/counseling12345-scaled.jpeg" 
                         alt="Advanced neuropsychological testing technology" 
                         class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-xl font-serif text-white mb-2">Evidence-Based Testing</h3>
                        <p class="text-gray-200 text-sm">Comprehensive assessments using scientifically validated tools for conditions including ADHD, autism, brain injury, and learning disabilities</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Statistics Row -->
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="text-3xl font-bold text-blue-600 mb-2">20+</div>
                <div class="text-gray-600 font-medium">Years Experience</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="text-3xl font-bold text-green-600 mb-2">5.0</div>
                <div class="text-gray-600 font-medium">Google Rating</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="text-3xl font-bold text-purple-600 mb-2">All Ages</div>
                <div class="text-gray-600 font-medium">Lifespan Services</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="text-3xl font-bold text-orange-600 mb-2">BNCE</div>
                <div class="text-gray-600 font-medium">Brief Cognitive Exam</div>
            </div>
        </div>
        
        <!-- Bottom Feature Row -->
        <div class="mt-16 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left - Image -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/01/Family-of-Color-1.jpg" 
                         alt="Personalized consultation session" 
                         class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                </div>
                <!-- Floating elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-blue-100 rounded-full opacity-60"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-purple-100 rounded-full opacity-70"></div>
            </div>
            
            <!-- Right - Content -->
            <div>
                <h3 class="text-2xl md:text-3xl font-serif text-gray-900 mb-6">Comprehensive Assessment & Support</h3>
                <div class="space-y-4 text-gray-600">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p>Individualized neuropsychological evaluations based on empirically-validated research of brain-based conditions</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p>Detailed reports identifying cognitive strengths and challenges to guide treatment and educational planning</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p>Therapy services available through the lifespan for continued support and intervention</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                            <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p>Forensic and medical-legal services with expert witness testimony when needed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Template Parts -->


<?php get_template_part('template-parts/cta-section'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
