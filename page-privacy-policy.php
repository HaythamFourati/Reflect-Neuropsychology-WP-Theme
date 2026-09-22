<?php
/**
 * Template Name: Privacy Policy
 * Description: Privacy Policy with HIPAA-aware website communication language.
 *
 * Editor-entered page content renders first; the sections below are the
 * baseline website-communication language and are kept in the theme so they
 * cannot be lost by a content edit.
 */

get_header(); ?>

<main id="main" class="site-main">
    <section class="bg-gradient-to-br from-blue-50 via-white to-gray-50 py-12 lg:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl lg:text-5xl font-serif text-gray-900 mb-4">Privacy Policy</h1>
            <p class="text-lg text-gray-600">Last updated: <?php echo esc_html(get_the_modified_date('F j, Y')); ?></p>
        </div>
    </section>

    <section class="py-12 lg:py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php if (trim(get_the_content())) : ?>
                <div class="prose prose-lg max-w-none mb-12">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>

            <div class="prose prose-lg max-w-none">

                <div class="not-prose mb-10 rounded-xl border border-red-200 bg-red-50 p-5 text-gray-800">
                    <p class="font-semibold text-gray-900 mb-1">This website is not monitored for emergencies.</p>
                    <p>If you are experiencing a medical or mental health emergency, call
                    <a href="tel:911" class="font-semibold text-red-700 underline">911</a> or go to the nearest
                    emergency room. Do not use this website to report an urgent concern.</p>
                </div>

                <h2>Website Communication Notice</h2>
                <p>
                    This website and its contact form exist for general communication only &mdash; general
                    questions, service information, and callback requests. They are not an intake, scheduling,
                    referral, or clinical communication channel.
                </p>
                <p>
                    Please <strong>do not submit personal health information</strong> through the website form.
                    That includes symptoms, diagnoses, medical or psychiatric history, medications, insurance
                    details, referral documents, and test results. If you need to share clinical or insurance
                    information, call the office at
                    <a href="<?php echo esc_attr(get_practice_phone_link()); ?>"><?php echo esc_html(get_practice_phone()); ?></a>
                    so we can arrange an appropriate, secure method.
                </p>
                <p>
                    Email and web forms travel over the public internet and may be stored on servers we do not
                    control. They are generally not an appropriate channel for sensitive medical information,
                    and we cannot guarantee the confidentiality of anything sent to us that way.
                </p>

                <h2>What the Website Collects</h2>
                <p>
                    When you submit the contact form, we receive your name, email address, optional phone
                    number, and your selected reason for contact so that we can return your inquiry. Website
                    form submissions are not stored in a website database, and they are not sent to analytics
                    platforms, advertising networks, CRM systems, marketing lists, or third-party automation
                    services.
                </p>

                <h2>Cookies, Analytics, and Third-Party Vendors</h2>
                <p>
                    We aim to minimize third-party scripts, cookies, and tracking on this website. Any analytics
                    or third-party service is reviewed before it is added, and services that are not necessary
                    are removed. Where a vendor could come into contact with protected health information, a
                    Business Associate Agreement is required before that vendor is used.
                </p>
                <p>
                    Your browser settings can be used to block or delete cookies. Doing so does not affect your
                    ability to reach the practice by telephone.
                </p>

                <h2>Protected Health Information and Your Clinical Records</h2>
                <p>
                    Information you provide during clinical care is protected health information and is handled
                    under our clinical privacy practices and applicable law, separately from this website.
                    Nothing you send through this website becomes part of a clinical record.
                </p>

                <h2>Scope and Limitations</h2>
                <p>
                    We take reasonable steps to protect information submitted through this website, but no
                    website or email system can be described as perfectly secure. This policy does not claim
                    that the website is &ldquo;HIPAA compliant&rdquo; as a guaranteed or certified status;
                    HIPAA compliance is an ongoing practice-level obligation, not a property of a web page.
                    Independent legal and compliance review of this website, its vendors, and this policy
                    remains recommended and is periodically performed.
                </p>

                <h2>Questions</h2>
                <p>
                    For questions about this policy, call the office at
                    <a href="<?php echo esc_attr(get_practice_phone_link()); ?>"><?php echo esc_html(get_practice_phone()); ?></a>
                    or write to Reflect Neuropsychology, <?php echo esc_html(get_practice_address()); ?>.
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
