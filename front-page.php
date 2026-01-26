<?php get_header(); ?>

<!-- Hero Section -->
<section id="hero" class="relative isolate overflow-hidden h-[80vh] lg:h-[calc(100vh-4rem)] flex items-center justify-center">
    <div class="absolute inset-0 -z-10">
        <img src="https://images.unsplash.com/photo-1534413298607-48ba59e8a06d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170" alt="Person in field during golden hour" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/10 lg:bg-black/10"></div>
        <!-- Mobile text overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent lg:hidden"></div>
    </div>

    <div class="w-7xl relative z-10 h-full flex items-center px-4 lg:px-8">
        <!-- Text Content - Single Column -->
        <div class="max-w-7xl ml-0 lg:ml-[-100px] text-center lg:text-left">
            <!-- Logo -->
            <div class="mb-24 lg:mb-24">
                <img src="https://www.reflectneuro.com/wp-content/uploads/2025/12/Reflect-Neuro-LOGO-PNG.png" 
                     alt="Reflect Neuropsychology" 
                     class="h-16 sm:h-20 md:h-24 lg:h-28 w-auto mx-auto lg:mx-0">
            </div>
            
            <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-playfair font-bold text-white">
                <span class="text-orange-500">Unlocking</span> Minds.<br>
                Transforming <span class="text-orange-500">Lives</span>.
            </h1>
            <p class="text-base sm:text-lg mt-4 md:text-xl lg:text-2xl text-white/90 leading-tight italic font-light">
                <span class="hidden lg:inline">With individualized neuropsychological assessment across the lifespan, <br> our expert team of fellowship-trained doctors provide comprehensive <br> brain-based assessments for teens, adults, and older adults <br>  empowering clarity and growth at every stage of life.</span>
                <span class="lg:hidden">With individualized neuropsychological assessment across the lifespan, our expert team of fellowship-trained doctors provide comprehensive brain-based assessments for teens, adults, and older adults empowering clarity and growth at every stage of life.</span>
            </p>
            
            <!-- Mobile CTA Button -->
            <div class="mt-8 lg:hidden">
                <a href="<?php echo site_url('/contact/'); ?>" class="inline-block bg-white text-gray-900 px-6 py-3 rounded-full text-base font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Schedule Free Consultation
                </a>
            </div>
        </div>
        
        <!-- Desktop Button - Pinned to Bottom -->
        <div class="hidden lg:block absolute bottom-16 right-[-28px]">
            <a href="<?php echo site_url('/contact/'); ?>" class="bg-white text-gray-900 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Schedule a Free Consultation
            </a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/why-reflect-neuro-section'); ?>

<?php get_template_part('template-parts/services-section'); ?>

<?php get_template_part('template-parts/our-specialty-section'); ?>

<?php get_template_part('template-parts/meet-dr-friedman-section'); ?>

<?php get_template_part('template-parts/testimonials-section'); ?>

<?php get_template_part('template-parts/why-choose-section'); ?>

<?php get_template_part('template-parts/cta-section'); ?>

<!-- Resources / Blog Teaser Section -->
<section id="resources" class="py-20 bg-gray-50 scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-4">Latest Resources</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Stay informed with our latest insights on  <br>  psychological assessment and mental health
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
            
            foreach($recent_posts as $post) : ?>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <?php if(has_post_thumbnail($post['ID'])) : ?>
                        <div class="aspect-w-16 aspect-h-9">
                            <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-48 object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-serif text-gray-900 mb-3">
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-primary-600 transition-colors">
                                <?php echo $post['post_title']; ?>
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4">
                            <?php echo wp_trim_words($post['post_content'], 20); ?>
                        </p>
                        <a href="<?php echo get_permalink($post['ID']); ?>" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                            Read More →
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
