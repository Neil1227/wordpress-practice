<?php
/**
 * Template Name: Ophthalmology - Cataract Surgery (Child)
 * Template Post Type: page
 *
 * Description: Child sub-page template for Laser Cataract Surgery procedure
 * featuring breadcrumbs, procedure deep-dive, FAQ accordion, surgeon sidebar, and CTA.
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<style>
  .eye-sub-hero {
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
    color: #ffffff;
    padding: 4rem 1.5rem 3.5rem 1.5rem;
  }

  .eye-sub-hero__container {
    max-width: 1100px;
    margin: 0 auto;
  }

  .eye-breadcrumbs {
    display: flex;
    gap: 0.5rem;
    font-size: 0.85rem;
    margin-bottom: 1.25rem;
    color: #bae6fd;
  }

  .eye-breadcrumbs a {
    color: #e0f2fe;
    text-decoration: none;
  }

  .eye-breadcrumbs a:hover {
    text-decoration: underline;
  }

  .eye-sub-hero__title {
    font-size: clamp(2.2rem, 4vw, 3.25rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1rem 0;
  }

  .eye-sub-hero__lead {
    font-size: 1.15rem;
    color: #e0f2fe;
    max-width: 750px;
    line-height: 1.6;
    margin: 0;
  }

  .eye-sub-content {
    padding: 5rem 1.5rem;
  }

  .eye-sub-content__container {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
  }

  .eye-sub-article h2 {
    font-size: 1.85rem;
    font-weight: 800;
    color: #0f172a;
    margin-top: 2rem;
    margin-bottom: 1rem;
  }

  .eye-sub-article p {
    font-size: 1.05rem;
    color: #475569;
    line-height: 1.75;
    margin-bottom: 1.5rem;
  }

  .eye-highlight-card {
    background: #f0f9ff;
    border: 1px solid #bae6fd;
    border-radius: 16px;
    padding: 1.75rem;
    margin: 2rem 0;
  }

  .eye-highlight-card h3 {
    color: #0369a1;
    font-size: 1.25rem;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 0.75rem;
  }

  .eye-highlight-card ul {
    margin: 0;
    padding-left: 1.25rem;
    color: #334155;
  }

  .eye-highlight-card li {
    margin-bottom: 0.5rem;
  }

  .eye-faq {
    margin-top: 3rem;
  }

  .eye-faq-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: border-color 0.2s ease;
  }

  .eye-faq-item[open] {
    border-color: #0284c7;
    background: #ffffff;
    box-shadow: 0 4px 15px rgba(2, 132, 199, 0.06);
  }

  .eye-faq-question {
    padding: 1.25rem 1.5rem;
    font-weight: 700;
    color: #0f172a;
    cursor: pointer;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.05rem;
  }

  .eye-faq-question::-webkit-details-marker {
    display: none;
  }

  .eye-faq-question::after {
    content: "+";
    font-size: 1.4rem;
    color: #0284c7;
    font-weight: 700;
  }

  .eye-faq-item[open] .eye-faq-question::after {
    content: "−";
  }

  .eye-faq-answer {
    padding: 0 1.5rem 1.5rem 1.5rem;
    color: #64748b;
    line-height: 1.6;
  }

  .eye-sub-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.04);
    position: sticky;
    top: 100px;
  }

  .eye-sub-card__title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0f172a;
    margin-top: 0;
    margin-bottom: 1rem;
  }

  .eye-sub-card__doctor-badge {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #f1f5f9;
  }

  .eye-sub-card__avatar {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: #e0f2fe;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .eye-sub-card__btn {
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

  .eye-sub-card__btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
  }

  @media (max-width: 900px) {
    .eye-sub-content__container {
      grid-template-columns: 1fr;
    }
  }
</style>

<main id="primary" class="site-main">

  <!-- Header Banner & Breadcrumbs -->
  <header class="eye-sub-hero">
    <div class="eye-sub-hero__container">
      <nav class="eye-breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span>&rsaquo;</span>
        <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a>
        <span>&rsaquo;</span>
        <span aria-current="page" style="color: #ffffff; font-weight: 600;"><?php the_title(); ?></span>
      </nav>
      <h1 class="eye-sub-hero__title"><?php the_title(); ?></h1>
      <p class="eye-sub-hero__lead">
        Restore bright, youthful vision with computer-guided femtosecond laser precision and advanced lifestyle intraocular lens (IOL) implants.
      </p>
    </div>
  </header>

  <!-- Deep Dive & Sidebar -->
  <div class="eye-sub-content">
    <div class="eye-sub-content__container">
      
      <article class="eye-sub-article">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <h2>What is Laser Cataract Surgery?</h2>
        <p>
          A cataract occurs when the natural lens inside your eye becomes cloudy over time, causing blurry vision, glare around headlights, and faded colors. Laser cataract surgery is one of the safest and most frequently performed outpatient procedures in modern medicine.
        </p>
        <p>
          At <strong>Advanced Eye Care NJ</strong>, our fellowship-trained eye surgeons utilize the LenSx® Femtosecond Laser to map your eye’s unique 3D anatomy and execute microscopic incisions with sub-millimeter precision.
        </p>

        <div class="eye-highlight-card">
          <h3>Why Choose Laser-Assisted Over Traditional Surgery?</h3>
          <ul>
            <li><strong>Unmatched Precision:</strong> Computer-guided laser creates a perfectly circular capsulotomy for optimal lens placement.</li>
            <li><strong>Astigmatism Reduction:</strong> Precise corneal arcuate incisions correct mild-to-moderate astigmatism simultaneously.</li>
            <li><strong>Gentler on Eye Tissue:</strong> Uses less acoustic ultrasonic energy, resulting in faster visual rehabilitation and less swelling.</li>
          </ul>
        </div>

        <h2>Premium Lens Options (IOLs)</h2>
        <p>
          During the procedure, your cloudy lens is removed and replaced with an artificial intraocular lens (IOL) designed to last a lifetime:
        </p>
        <p>
          • <strong>Multifocal & Trifocal Lenses:</strong> Clear distance, intermediate (computer), and near (reading) vision.<br>
          • <strong>Toric Lenses:</strong> Neutralize corneal astigmatism for razor-sharp clarity.<br>
          • <strong>Monofocal Standard Lenses:</strong> Clear distance vision, with readers for close-up tasks.
        </p>

        <div class="eye-faq">
          <h2>Frequently Asked Questions</h2>

          <details class="eye-faq-item" open>
            <summary class="eye-faq-question">Is laser cataract surgery painful?</summary>
            <div class="eye-faq-answer">
              No. Topical numbing eye drops and mild relaxation medicine are administered beforehand. Most patients only feel mild pressure and report zero discomfort during the 15-minute outpatient procedure.
            </div>
          </details>

          <details class="eye-faq-item">
            <summary class="eye-faq-question">How quickly will my vision improve?</summary>
            <div class="eye-faq-answer">
              Many patients notice a significant improvement within 24 to 48 hours following surgery. Colors appear brighter immediately, and visual clarity continues to sharpen over the following weeks.
            </div>
          </details>

          <details class="eye-faq-item">
            <summary class="eye-faq-question">Does medical insurance cover cataract surgery?</summary>
            <div class="eye-faq-answer">
              Yes. Medicare and private health insurances cover standard cataract surgery. Upgrades for laser assistance and premium multifocal/toric lenses are available through flexible payment and HSA/FSA plans.
            </div>
          </details>
        </div>
      </article>

      <!-- Sidebar Surgeon Widget -->
      <aside class="eye-sub-sidebar">
        <div class="eye-sub-card">
          <h3 class="eye-sub-card__title">Lead Cataract Surgeon</h3>
          
          <div class="eye-sub-card__doctor-badge">
            <div class="eye-sub-card__avatar">👨‍⚕️</div>
            <div>
              <strong style="color: #0f172a; font-size: 1.05rem;">Dr. Jing Jing Feng, M.D.</strong><br>
              <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Board-Certified Surgeon</span>
            </div>
          </div>

          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
            Over 10,000 laser cataract surgeries completed with top patient satisfaction ratings across New Jersey.
          </p>

          <a href="#book-appointment" class="eye-sub-card__btn">
            Schedule Cataract Evaluation
          </a>
        </div>
      </aside>

    </div>
  </div>

  <!-- Consultation CTA Partial -->
  <?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
