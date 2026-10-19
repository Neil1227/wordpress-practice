<?php
/**
 * Template Name: Ophthalmology - Doctors Directory
 * Template Post Type: page
 *
 * Description: Dedicated page template showcasing the full medical team,
 * credentials, patient reviews, and appointment booking.
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

  <!-- 1. Dedicated Doctors Hero -->
  <header class="eye-doctors-hero" style="background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%); color: #ffffff; padding: 4.5rem 1.5rem 3.5rem 1.5rem; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
      <span style="display: inline-block; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(8px); color: #ffffff; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; padding: 0.35rem 1rem; border-radius: 50px; margin-bottom: 1rem;">
        Fellowship-Trained Specialists
      </span>
      <h1 style="font-size: clamp(2.25rem, 4.5vw, 3.25rem); font-weight: 800; line-height: 1.15; margin: 0 0 1.25rem 0;">
        <?php the_title(); ?>
      </h1>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div style="font-size: 1.15rem; color: #e0f2fe; line-height: 1.7; margin: 0 auto;">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </header>

  <!-- 2. Doctors Grid Partial -->
  <?php get_template_part( 'template-parts/our-doctors' ); ?>

  <!-- 3. Verified Patient Reviews Partial -->
  <?php get_template_part( 'template-parts/patient-reviews' ); ?>

  <!-- 4. Consultation CTA Partial -->
  <?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
