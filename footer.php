<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Left: Logo + Tagline -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-serif">Reflect Neuropsychology</h3>
                        <p class="text-sm text-gray-400">Dr. Judith L. Friedman</p>
                    </div>
                </div>
                <p class="text-gray-400 mb-4">
                    Professional psychological assessments with compassionate, evidence-based care in Calabasas and Los Angeles.
                </p>
            </div>
            
            <!-- Center: Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo home_url(); ?>" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About Dr. Friedman</a></li>
                    <li><a href="#assessments" class="text-gray-400 hover:text-white transition-colors">Assessments</a></li>
                    <li><a href="#resources" class="text-gray-400 hover:text-white transition-colors">Resources</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            
            <!-- Right: Contact Info + Phone CTA -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Information</h4>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-400">Calabasas & Los Angeles, CA</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-400">info@reflectneuropsychology.com</span>
                    </div>
                </div>
                
                <a href="<?php echo get_practice_phone_link(); ?>" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition-colors w-fit">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="font-semibold"><?php echo get_practice_phone(); ?></span>
                </a>
            </div>
        </div>
        
        <!-- Bottom: Copyright + Privacy Policy -->
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                © <?php echo date('Y'); ?> Reflect Neuropsychology. All rights reserved.
            </p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
