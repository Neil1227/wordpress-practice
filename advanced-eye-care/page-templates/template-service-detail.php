<?php
/**
 * Template Name: Ophthalmology - Service Detail (Child)
 * Template Post Type: page
 *
 * Description: Generic Child procedure template for any eye care service
 * (Cataract, LASIK, Dry Eye, Glaucoma, Contact Lenses, Eye Exams).
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<style>
  .eye-service-hero {
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
    color: #ffffff;
    padding: clamp(3rem, 5vw, 4.5rem) 1.5rem 3.5rem 1.5rem;
  }

  .eye-service-hero__container {
    max-width: 1100px;
    margin: 0 auto;
  }

  .eye-breadcrumbs {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.85rem;
    margin-bottom: 1.25rem;
    color: #bae6fd;
    flex-wrap: wrap;
  }

  .eye-breadcrumbs a {
    color: #e0f2fe;
    text-decoration: none;
  }

  .eye-breadcrumbs a:hover {
    text-decoration: underline;
  }

  .eye-service-hero__title {
    font-size: clamp(2.2rem, 4vw, 3.25rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1rem 0;
  }

  .eye-service-hero__lead {
    font-size: 1.15rem;
    color: #e0f2fe;
    max-width: 750px;
    line-height: 1.6;
    margin: 0;
  }

  /* 2-Column Content Layout */
  .eye-service-layout {
    padding: 4.5rem 1.5rem;
    background: #ffffff;
  }

  .eye-service-layout__container {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3.5rem;
    align-items: start;
  }

  .eye-service-article h2 {
    font-size: 1.8rem;
    font-weight: 800;
    color: #0f172a;
    margin-top: 2rem;
    margin-bottom: 1rem;
  }

  .eye-service-article p {
    font-size: 1.05rem;
    color: #475569;
    line-height: 1.8;
    margin-bottom: 1.5rem;
  }

  .eye-service-article ul {
    padding-left: 1.5rem;
    margin-bottom: 2rem;
    color: #334155;
  }

  .eye-service-article li {
    margin-bottom: 0.75rem;
    line-height: 1.6;
  }

  /* Key Benefits Highlight Box */
  .eye-benefit-box {
    background: #f0f9ff;
    border: 1px solid #bae6fd;
    border-radius: 18px;
    padding: 2rem;
    margin: 2.5rem 0;
  }

  .eye-benefit-box__title {
    color: #0369a1;
    font-size: 1.25rem;
    font-weight: 800;
    margin: 0 0 1rem 0;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  /* Sidebar Card */
  .eye-service-sidebar-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    position: sticky;
    top: 100px;
  }

  .eye-service-sidebar-card__title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0f172a;
    margin-top: 0;
    margin-bottom: 1rem;
  }

  .eye-service-sidebar-card__btn {
    display: block;
    width: 100%;
    text-align: center;
    background: #0284c7;
    color: #ffffff;
    padding: 0.85rem;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3);
  }

  .eye-service-sidebar-card__btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
  }

  @media (max-width: 900px) {
    .eye-service-layout__container {
      grid-template-columns: 1fr;
    }
  }
</style>

<main id="primary" class="site-main">

  <!-- Header Banner & Breadcrumbs -->
  <header class="eye-service-hero">
    <div class="eye-service-hero__container">
      <nav class="eye-breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
        <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a>
        <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
        <span aria-current="page" style="color: #ffffff; font-weight: 600;"><?php the_title(); ?></span>
      </nav>
      <h1 class="eye-service-hero__title"><?php the_title(); ?></h1>
      <p class="eye-service-hero__lead">
        Comprehensive clinical evaluation and advanced surgical treatment personalized for your eye health and vision clarity.
      </p>
    </div>
  </header>

  <!-- 2-Column Procedure Layout -->
  <div class="eye-service-layout">
    <div class="eye-service-layout__container">
      
      <!-- Article Content from Editor -->
      <article class="eye-service-article">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <!-- Highlight Benefits Box -->
        <div class="eye-benefit-box">
          <h3 class="eye-benefit-box__title">
            <i class="bi bi-shield-check"></i> Why Choose Advanced Eye Care for This Treatment
          </h3>
          <ul style="margin: 0; padding-left: 1.25rem;">
            <li>Board-certified surgeons and fellowship-trained corneal and glaucoma specialists.</li>
            <li>In-office diagnostic suite with optical coherence tomography (OCT) and corneal topography.</li>
            <li>Outpatient surgery center in Paramus with accredited same-day recovery suites.</li>
          </ul>
        </div>
      </article>

      <!-- Sidebar Fast Action Card -->
      <aside class="eye-service-sidebar">
        <div class="eye-service-sidebar-card">
          <h3 class="eye-service-sidebar-card__title">Consult a Specialist</h3>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
            Our doctors are currently accepting new patients at all 3 New Jersey locations. Most insurance plans accepted.
          </p>
          <a href="#book-appointment" class="eye-service-sidebar-card__btn">
            Book Consultation <i class="bi bi-calendar-check-fill"></i>
          </a>
          
          <div style="margin-top: 1.5rem; text-align: center;">
            <a href="tel:18005553937" style="color: #0369a1; font-weight: 600; font-size: 0.95rem;">
              <i class="bi bi-telephone-fill"></i> (800) 555-EYES
            </a>
          </div>
        </div>
      </aside>

    </div>
  </div>

  <!-- FAQ Accordion -->
  <?php get_template_part( 'template-parts/home-faq-accordion' ); ?>

  <!-- Consultation CTA Banner -->
  <?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
