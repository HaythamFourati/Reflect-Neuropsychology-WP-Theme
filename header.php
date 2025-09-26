<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- ADHD Telehealth Notice Banner -->
    <div class="bg-green-50 border-b border-green-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <div class="text-center">
          <a href="https://adhdtestcalifornia.com/" target="_blank" rel="noopener noreferrer" class="text-green-800 hover:text-green-900 transition-colors">
            <span class="font-medium">🏠 New Service:</span> We now provide In-Home ADHD Telehealth Testing Across California
            <span class="ml-2 text-green-600">→ Learn More</span>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Sticky Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
          <!-- Logo/Brand -->
          <div class="flex items-center">
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3">
              <!-- Brain/Psychology Icon -->
              <div class="w-13 h-13 rounded-lg flex items-center justify-center">
                <img src="https://www.reflectneuro.com/wp-content/uploads/2019/10/Reflect-logo.png" alt="Dr. Judith L. Friedman" class="w-full h-full object-cover rounded-lg">
              </div>
              <div>
                <h1 class="text-xl font-serif text-gray-900">Reflect Neuropsychology</h1>
                <p class="text-sm text-gray-600">Dr. Judith L. Friedman</p>
              </div>
            </a>
          </div>
          
          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center space-x-8">
            <a href="<?php echo home_url(); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Home</a>
            
            <!-- Services Dropdown -->
            <div class="relative group">
              <button class="text-gray-700 hover:text-blue-600 transition-colors font-medium flex items-center space-x-1">
                <span>Services</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              
              <!-- Dropdown Menu -->
              <div class="absolute top-full left-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="py-2">
                  <a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                    <div class="font-medium">All Services</div>
                    <div class="text-xs text-gray-500">Complete overview of our services</div>
                  </a>
                  <a href="<?php echo home_url('/pediatric-adolescent-psychological-assessment/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                    <div class="font-medium">Adolescent & Young Adult Assessment</div>
                    <div class="text-xs text-gray-500">Ages 12-25 specialized evaluations</div>
                  </a>
                  <a href="<?php echo home_url('/forensic-neuropsychology/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                    <div class="font-medium">Forensic Assessment</div>
                    <div class="text-xs text-gray-500">Legal and court-related evaluations</div>
                  </a>
                  <a href="<?php echo home_url('/adult-neuropsychology/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                    <div class="font-medium">Adult & Geriatric Assessment</div>
                    <div class="text-xs text-gray-500">Capacity and memory evaluations</div>
                  </a>
                  <a href="<?php echo home_url('/therapy-through-the-lifespan/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                    <div class="font-medium">Therapy Through the Lifespan</div>
                    <div class="text-xs text-gray-500">Counseling and therapeutic services</div>
                  </a>
                  <a href="<?php echo home_url('/neuropsychological-cognitive-examination-bnce/'); ?>" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <div class="font-medium">BNCE</div>
                    <div class="text-xs text-gray-500">Brief cognitive examination</div>
                  </a>
                </div>
              </div>
            </div>
            
            <a href="<?php echo home_url('/about-us/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About Us</a>
            <a href="<?php echo home_url('/blog/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Blog</a>
            <a href="<?php echo home_url('/resources/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Resources</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
          </nav>
          
          <!-- CTA Phone Button -->
          <div class="flex items-center space-x-4">
            <a href="<?php echo get_practice_phone_link(); ?>" class="hidden sm:flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span class="font-semibold"><?php echo get_practice_phone(); ?></span>
            </a>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden border-t border-gray-200 py-4">
          <div class="flex flex-col space-y-4">
            <a href="<?php echo home_url(); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Home</a>
            
            <!-- Mobile Services Dropdown -->
            <div>
              <button id="mobile-services-toggle" class="text-gray-700 hover:text-blue-600 transition-colors font-medium flex items-center justify-between w-full">
                <span>Services</span>
                <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div id="mobile-services-menu" class="hidden mt-2 ml-4 space-y-2">
                <a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">All Services</a>
                <a href="<?php echo home_url('/pediatric-adolescent-psychological-assessment/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Adolescent & Young Adult</a>
                <a href="<?php echo home_url('/forensic-neuropsychology/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Forensic Assessment</a>
                <a href="<?php echo home_url('/adult-neuropsychology/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Adult & Geriatric</a>
                <a href="<?php echo home_url('/therapy-through-the-lifespan/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">Therapy Through Lifespan</a>
                <a href="<?php echo home_url('/neuropsychological-cognitive-examination-bnce/'); ?>" class="block text-sm text-gray-600 hover:text-blue-600 transition-colors py-1">BNCE</a>
              </div>
            </div>
            
            <a href="<?php echo home_url('/about-us/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About Us</a>
            <a href="<?php echo home_url('/blog/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Blog</a>
            <a href="<?php echo home_url('/resources/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Resources</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
            <a href="<?php echo get_practice_phone_link(); ?>" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors w-fit">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span class="font-semibold"><?php echo get_practice_phone(); ?></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <!-- Mobile Menu JavaScript -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileServicesToggle = document.getElementById('mobile-services-toggle');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        
        if (mobileMenuButton && mobileMenu) {
          mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
          });
        }
        
        if (mobileServicesToggle && mobileServicesMenu) {
          mobileServicesToggle.addEventListener('click', function() {
            mobileServicesMenu.classList.toggle('hidden');
            const arrow = mobileServicesToggle.querySelector('svg');
            arrow.classList.toggle('rotate-180');
          });
        }
      });
    </script>