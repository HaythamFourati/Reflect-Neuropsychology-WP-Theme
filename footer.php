<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Left: Logo + Tagline -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2019/10/Reflect-logo.png" 
                         alt="Reflect Neuropsychology Logo" 
                         class="h-10 w-auto">
                    <div>
                        <h3 class="text-lg font-serif">Reflect Neuropsychology</h3>
                        <p class="text-sm text-gray-400">Dr. Judith L. Friedman</p>
                    </div>
                </div>
                <p class="text-gray-400 mb-4">
                    Professional psychological assessments with compassionate, evidence-based care in Calabasas and Los Angeles.
                </p>
                
                <!-- Professional Badge -->
                <div class="mt-4">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2022/07/download.svg" 
                         alt="Professional Certification Badge" 
                         class="h-16 w-auto opacity-80 hover:opacity-100 transition-opacity duration-300">
                </div>
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
            
            <!-- Right: Contact Info -->
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
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-gray-400">(818) 324-3800</span>
                    </div>
                </div>
                
                <!-- Medicare Accepted Badge -->
                <div class="mt-4">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2019/08/Picture2.png" 
                         alt="Medicare Accepted" 
                         class="h-14 w-auto opacity-80 hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>
        </div>
        
        <!-- Bottom: Copyright + Credits + Links -->
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-400 text-sm">
                <p>© <?php echo date('Y'); ?> <strong>Reflect Neuropsychology</strong></p>
                <p class="mt-1">[ CA License: PSY25712 ]</p>
            </div>
            
            <div class="text-center text-gray-400 text-sm mt-4 md:mt-0">
                <p>Crafted By</p>
                <a href="https://localvocalmarketing.com/" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:text-blue-300 transition-colors">
                    Local Vocal Marketing
                </a>
            </div>
            
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors uppercase tracking-wide">Privacy</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors uppercase tracking-wide">Cookies</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
