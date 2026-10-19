<?php
/**
 * Template Name: Ophthalmology - Location Detail (Child)
 * Template Post Type: page
 *
 * Description: Dedicated Child page template for individual clinic locations
 * (Paramus, Jersey City, Fort Lee) with interactive maps, address, hours, and staff.
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<style>
  .eye-location-hero {
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
    color: #ffffff;
    padding: clamp(3rem, 5vw, 4.5rem) 1.5rem 3.5rem 1.5rem;
  }

  .eye-location-hero__container {
    max-width: 1100px;
    margin: 0 auto;
  }

  .eye-location-layout {
    padding: 4.5rem 1.5rem;
    background: #ffffff;
  }

  .eye-location-layout__container {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 3.5rem;
  }

  .eye-location-card-detail {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2.5rem 2rem;
  }

  .eye-location-card-detail h3 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #0f172a;
    margin-top: 0;
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .eye-location-hours-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .eye-location-hours-list li {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px dashed #cbd5e1;
    padding-bottom: 0.5rem;
    font-size: 0.95rem;
  }

  .eye-location-map-box {
    background: #e2e8f0;
    border-radius: 20px;
    height: 380px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 2rem;
    border: 2px dashed #94a3b8;
  }

  @media (max-width: 850px) {
    .eye-location-layout__container {
      grid-template-columns: 1fr;
    }
  }
</style>

<main id="primary" class="site-main">

  <header class="eye-location-hero">
    <div class="eye-location-hero__container">
      <div style="font-size: 0.85rem; color: #bae6fd; margin-bottom: 1rem;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #e0f2fe;">Home</a> &rsaquo; 
        <a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" style="color: #e0f2fe;">Locations</a> &rsaquo; 
        <span style="color: #ffffff; font-weight: 600;"><?php the_title(); ?></span>
      </div>
      <h1 style="font-size: clamp(2.2rem, 4vw, 3.25rem); font-weight: 800; margin: 0 0 1rem 0;"><?php the_title(); ?></h1>
      <p style="font-size: 1.15rem; color: #e0f2fe; max-width: 700px; margin: 0;">
        Full-service diagnostic, clinical, and surgical ophthalmology center serving our community.
      </p>
    </div>
  </header>

  <div class="eye-location-layout">
    <div class="eye-location-layout__container">
      
      <!-- Left: Location Details & Hours -->
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div style="font-size: 1.1rem; line-height: 1.8; color: #475569; margin-bottom: 2rem;">
            <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>

        <div class="eye-location-card-detail">
          <h3><i class="bi bi-clock-fill" style="color: #0284c7;"></i> Operating Hours</h3>
          <ul class="eye-location-hours-list">
            <li><span>Monday – Thursday:</span> <strong>8:00 AM – 5:00 PM</strong></li>
            <li><span>Friday:</span> <strong>8:00 AM – 4:00 PM</strong></li>
            <li><span>Saturday:</span> <strong>9:00 AM – 1:00 PM</strong></li>
            <li><span>Sunday:</span> <strong>Closed</strong></li>
          </ul>

          <h3><i class="bi bi-geo-alt-fill" style="color: #0284c7;"></i> Contact & Direct Line</h3>
          <p style="margin: 0 0 1.5rem 0; color: #475569; line-height: 1.6;">
            123 Health Ave, Suite 400, Paramus, NJ 07652<br>
            Direct: <a href="tel:18005553937" style="font-weight: 700;">(800) 555-EYES</a>
          </p>

          <a href="#book-appointment" style="display: inline-block; background: #0284c7; color: #ffffff; padding: 0.85rem 1.75rem; border-radius: 50px; font-weight: 700; text-decoration: none;">
            Book Appointment at this Office <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Right: Map / Direction Visual -->
      <div>
        <div class="eye-location-map-box">
          <i class="bi bi-map-fill" style="font-size: 3.5rem; color: #0284c7; margin-bottom: 1rem;"></i>
          <h4 style="margin: 0 0 0.5rem 0; font-size: 1.25rem; color: #0f172a;">Interactive Map & Directions</h4>
          <p style="color: #64748b; font-size: 0.95rem; margin: 0 0 1.5rem 0;">
            Conveniently accessible from Garden State Parkway & Route 17 with free patient parking.
          </p>
          <a href="https://maps.google.com" target="_blank" rel="noopener" style="background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a; padding: 0.65rem 1.25rem; border-radius: 50px; font-weight: 600; text-decoration: none;">
            Open in Google Maps <i class="bi bi-box-arrow-up-right"></i>
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- Consultation CTA Partial -->
  <?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
