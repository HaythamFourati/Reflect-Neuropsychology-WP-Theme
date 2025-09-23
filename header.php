<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
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
            <a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Services</a>
            <a href="#about" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About Dr. Friedman</a>
            <a href="#assessments" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Assessments</a>
            <a href="#resources" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Resources</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
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
            <a href="<?php echo home_url('/neuropsychology-services/'); ?>" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Services</a>
            <a href="#about" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About Dr. Friedman</a>
            <a href="#assessments" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Assessments</a>
            <a href="#resources" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Resources</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
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
        
        if (mobileMenuButton && mobileMenu) {
          mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
          });
        }
      });
    </script>