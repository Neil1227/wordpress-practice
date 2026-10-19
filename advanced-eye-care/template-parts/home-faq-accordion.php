<?php
/**
 * Template Part: Homepage FAQ Accordion
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
  .eye-home-faq {
    padding: 5rem 0;
    background: #ffffff;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-home-faq__container {
    max-width: 950px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-home-faq__head {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem auto;
  }

  .eye-home-faq__subtitle {
    color: #0284c7;
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.5rem;
  }

  .eye-home-faq__title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0 0 1rem 0;
  }

  .eye-home-faq__desc {
    font-size: 1.05rem;
    color: #64748b;
  }

  /* Accordion Item Styles using native <details> with smooth styling */
  .eye-faq-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    margin-bottom: 1.25rem;
    overflow: hidden;
    transition: all 0.25s ease;
  }

  .eye-faq-card[open] {
    background: #ffffff;
    border-color: #0284c7;
    box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.1);
  }

  .eye-faq-card__question {
    padding: 1.35rem 1.75rem;
    font-size: 1.1rem;
    font-weight: 700;
    color: #0f172a;
    cursor: pointer;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    user-select: none;
  }

  .eye-faq-card__question::-webkit-details-marker {
    display: none;
  }

  .eye-faq-card__icon {
    font-size: 1.25rem;
    color: #0284c7;
    transition: transform 0.3s ease;
  }

  .eye-faq-card[open] .eye-faq-card__icon {
    transform: rotate(180deg);
  }

  .eye-faq-card__answer {
    padding: 0 1.75rem 1.5rem 1.75rem;
    color: #475569;
    font-size: 1rem;
    line-height: 1.7;
    border-top: 1px solid transparent;
  }

  .eye-faq-card[open] .eye-faq-card__answer {
    border-top-color: #f1f5f9;
    padding-top: 1rem;
  }
</style>

<section class="eye-home-faq" id="faq">
  <div class="eye-home-faq__container">
    
    <div class="eye-home-faq__head">
      <div class="eye-home-faq__subtitle">Frequently Asked Questions</div>
      <h2 class="eye-home-faq__title">Common Questions About Eye Surgery & Care</h2>
      <p class="eye-home-faq__desc">
        Find answers to frequently asked questions regarding laser cataract procedures, recovery timelines, insurance coverage, and vision correction options.
      </p>
    </div>

    <div class="eye-home-faq__list">
      
      <!-- FAQ 1 -->
      <details class="eye-faq-card" open>
        <summary class="eye-faq-card__question">
          <span>How do I know if I am a candidate for laser cataract surgery?</span>
          <i class="bi bi-chevron-down eye-faq-card__icon"></i>
        </summary>
        <div class="eye-faq-card__answer">
          If cataracts are causing blurry vision, halos around night headlights, or difficulty reading even with your current glasses, you are likely a candidate. Our surgeons perform comprehensive 3D corneal topography and optical coherence tomography (OCT) during your initial consultation to determine the ideal surgical plan.
        </div>
      </details>

      <!-- FAQ 2 -->
      <details class="eye-faq-card">
        <summary class="eye-faq-card__question">
          <span>What is the difference between standard and premium multifocal lenses?</span>
          <i class="bi bi-chevron-down eye-faq-card__icon"></i>
        </summary>
        <div class="eye-faq-card__answer">
          Standard monofocal lenses provide sharp vision at one set focal point (usually distance), requiring you to wear reading glasses for close work. Premium multifocal, trifocal (like PanOptix®), and toric lenses allow you to see clearly at distance, intermediate (computer screens), and near (reading), greatly reducing or eliminating the need for glasses.
        </div>
      </details>

      <!-- FAQ 3 -->
      <details class="eye-faq-card">
        <summary class="eye-faq-card__question">
          <span>How long does recovery take after laser eye surgery?</span>
          <i class="bi bi-chevron-down eye-faq-card__icon"></i>
        </summary>
        <div class="eye-faq-card__answer">
          The procedure itself takes just 15 minutes in our accredited outpatient surgery suite. Most patients notice dramatic improvement in vision within 24 to 48 hours and can resume driving, watching TV, and light work the following day with minimal downtime.
        </div>
      </details>

      <!-- FAQ 4 -->
      <details class="eye-faq-card">
        <summary class="eye-faq-card__question">
          <span>Do you accept Medicare and private medical insurance?</span>
          <i class="bi bi-chevron-down eye-faq-card__icon"></i>
        </summary>
        <div class="eye-faq-card__answer">
          Yes. Medicare and most major private medical insurance plans (Horizon Blue Cross, Aetna, Cigna, UnitedHealthcare, Medicare Advantage) cover medical eye exams and standard cataract surgery. Flexible FSA, HSA, and CareCredit financing options are also available for premium lens upgrades.
        </div>
      </details>

      <!-- FAQ 5 -->
      <details class="eye-faq-card">
        <summary class="eye-faq-card__question">
          <span>How is chronic dry eye diagnosed and treated?</span>
          <i class="bi bi-chevron-down eye-faq-card__icon"></i>
        </summary>
        <div class="eye-faq-card__answer">
          We use high-definition Meibomian Gland Imaging to identify blocked oil glands. In-office treatments like LipiFlow® thermal pulsation and Intense Pulsed Light (IPL) clear blockages to restore natural, soothing tear film stability without relying solely on temporary artificial tears.
        </div>
      </details>

    </div>
  </div>
</section>
