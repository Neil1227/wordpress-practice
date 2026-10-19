<?php
/**
 * Vault Page Template: Dedicated "Our Doctors & Specialists" Page
 * Template Name: Doctors Directory Page
 *
 * In WordPress: When a client creates a Page with slug "doctors" (/doctors),
 * WordPress will automatically use page-doctors.php!
 *
 * @package AgencyComponentVault
 */

get_header();

// 1. Reusable Hero Partial (Customized for Doctors)
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Board-Certified Practitioners in 2026',
    'title'         => 'Meet Our Medical & Dental Specialists',
    'subtitle'      => 'Our compassionate practitioners bring over 40+ years of clinical excellence and patient-first care.',
    'cta_primary'   => 'Book Appointment with a Specialist',
    'cta_secondary' => 'Emergency Hotline',
    'primary_url'   => '#appointment',
    'secondary_url' => 'tel:5550192834',
) );

// 2. Reusable 4-Column Trust Badges
get_template_part( 'template-parts/trust-badges-4col' );

// 3. Reusable Doctors Grid Component
get_template_part( 'template-parts/team-doctors-grid', null, array(
    'title'    => 'Our Full Clinical Directory',
    'subtitle' => 'Click on any specialist to view credentials, clinical background, and available booking slots.',
) );

// 4. Reusable 5-Star Testimonials Grid
get_template_part( 'template-parts/testimonials-3col' );

// 5. Reusable Urgent Call-To-Action Banner
get_template_part( 'template-parts/cta-urgent-call' );

get_footer();
