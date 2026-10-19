<?php
/**
 * Template Name: Ophthalmology - Patient Reviews
 * Template Post Type: page
 *
 * Description: Dedicated page template for patient testimonials, star ratings,
 * video reviews, procedure feedback, and verified Google reviews.
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<style>
  .eye-reviews-hero {
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
    color: #ffffff;
    padding: clamp(3.5rem, 6vw, 5rem) 1.5rem 3.5rem 1.5rem;
    text-align: center;
  }

  .eye-reviews-hero__container {
    max-width: 850px;
    margin: 0 auto;
  }

  .eye-reviews-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(8px);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 0.35rem 1rem;
    border-radius: 50px;
    margin-bottom: 1rem;
  }

  .eye-reviews-hero__title {
    font-size: clamp(2.25rem, 4.5vw, 3.25rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1.25rem 0;
  }

  .eye-reviews-hero__lead {
    font-size: 1.15rem;
    color: #e0f2fe;
    line-height: 1.7;
    margin: 0 auto 2rem auto;
  }

  .eye-reviews-scorecard {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 1.5rem 2rem;
    border-radius: 20px;
    max-width: 650px;
    margin: 0 auto;
  }

  .eye-reviews-scorecard__score {
    font-size: 2.5rem;
    font-weight: 900;
    color: #ffffff;
    line-height: 1;
  }

  .eye-reviews-scorecard__stars {
    color: #fbbf24;
    font-size: 1.4rem;
    letter-spacing: 2px;
  }

  .eye-reviews-scorecard__text {
    font-size: 0.95rem;
    color: #e0f2fe;
    font-weight: 500;
  }

  /* Highlight Story Feature */
  .eye-featured-story {
    padding: 4.5rem 1.5rem;
    background: #ffffff;
  }

  .eye-featured-story__container {
    max-width: 1100px;
    margin: 0 auto;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: clamp(2rem, 4vw, 3.5rem);
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 3rem;
    align-items: center;
  }

  .eye-featured-story__quote {
    font-size: 1.25rem;
    line-height: 1.7;
    color: #1e293b;
    font-style: italic;
    margin-bottom: 1.5rem;
  }

  .eye-featured-story__author {
    font-weight: 700;
    color: #0369a1;
    font-size: 1.05rem;
  }

  .eye-featured-story__procedure {
    color: #64748b;
    font-size: 0.9rem;
  }

  .eye-featured-story__media {
    background: linear-gradient(135deg, #e0f2fe, #bae6fd);
    border-radius: 16px;
    height: 280px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 2rem;
  }

  .eye-featured-story__media-icon {
    font-size: 4rem;
    margin-bottom: 0.75rem;
  }

  @media (max-width: 850px) {
    .eye-featured-story__container {
      grid-template-columns: 1fr;
    }
  }
</style>

<main id="primary" class="site-main">

  <!-- 1. Hero Header & Scorecard -->
  <header class="eye-reviews-hero">
    <div class="eye-reviews-hero__container">
      <span class="eye-reviews-hero__badge">Verified Patient Feedback</span>
      <h1 class="eye-reviews-hero__title"><?php the_title(); ?></h1>
      
      <p class="eye-reviews-hero__lead">
        Hear directly from patients who have regained clear, vibrant sight through our advanced laser cataract surgery, custom LASIK, and medical eye care.
      </p>

      <div class="eye-reviews-scorecard">
        <div>
          <div class="eye-reviews-scorecard__score">4.9</div>
          <div class="eye-reviews-scorecard__stars">★★★★★</div>
        </div>
        <div style="text-align: left;">
          <strong>Over 500+ Verified 5-Star Reviews</strong><br>
          <span class="eye-reviews-scorecard__text">99.4% Patient Satisfaction across Paramus, Jersey City & Fort Lee</span>
        </div>
      </div>
    </div>
  </header>

  <!-- 2. Featured Spotlight Story -->
  <section class="eye-featured-story">
    <div class="eye-featured-story__container">
      <div>
        <div style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 1rem;">★★★★★</div>
        <p class="eye-featured-story__quote">
          "Having laser cataract surgery with Dr. Feng was the best health decision I've made in 20 years. I can drive at night without glare and read without glasses for the first time since my thirties!"
        </p>
        <div class="eye-featured-story__author">Robert M., Age 67</div>
        <div class="eye-featured-story__procedure">Laser Cataract Surgery with PanOptix Trifocal Lens</div>
      </div>
      <div class="eye-featured-story__media">
        <div class="eye-featured-story__media-icon">👁️✨</div>
        <strong style="color: #0369a1; font-size: 1.2rem;">20/20 Vision Restored</strong>
        <p style="color: #475569; margin: 0.5rem 0 0 0; font-size: 0.95rem;">Same-day outpatient recovery in New Jersey</p>
      </div>
    </div>
  </section>

  <!-- 3. Core Patient Reviews Partial -->
  <?php get_template_part( 'template-parts/patient-reviews' ); ?>

  <!-- 4. Locations Partial -->
  <?php get_template_part( 'template-parts/locations-grid' ); ?>

  <!-- 5. Appointment CTA Banner -->
  <?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
