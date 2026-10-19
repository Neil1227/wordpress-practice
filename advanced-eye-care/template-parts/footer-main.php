<?php
/**
 * Template Part: Main Footer
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
  .eye-footer {
    background: #0f172a;
    color: #94a3b8;
    padding-top: 4.5rem;
    padding-bottom: 2rem;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    position: relative;
    overflow: hidden;
  }

  .eye-footer__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-footer__grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
    gap: 3rem;
    margin-bottom: 3.5rem;
  }

  .eye-footer__brand-title {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 800;
    margin: 0 0 0.75rem 0;
  }

  .eye-footer__tagline {
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    color: #94a3b8;
  }

  .eye-footer__phone-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #1e293b;
    border: 1px solid #334155;
    padding: 0.75rem 1.25rem;
    border-radius: 12px;
    color: #38bdf8;
    font-weight: 700;
    font-size: 1.05rem;
    text-decoration: none;
    transition: all 0.2s ease;
  }

  .eye-footer__phone-badge:hover {
    background: #0284c7;
    color: #ffffff;
    border-color: #0284c7;
  }

  .eye-footer__col-title {
    color: #ffffff;
    font-size: 1.05rem;
    font-weight: 700;
    margin: 0 0 1.25rem 0;
    position: relative;
    padding-bottom: 0.5rem;
  }

  .eye-footer__col-title::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 32px;
    height: 2px;
    background: #38bdf8;
    border-radius: 2px;
  }

  .eye-footer__list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .eye-footer__link {
    color: #94a3b8;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.2s ease, transform 0.2s ease;
    display: inline-block;
  }

  .eye-footer__link:hover {
    color: #ffffff;
    transform: translateX(4px);
  }

  .eye-footer__info-item {
    display: flex;
    gap: 12px;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 1rem;
  }

  .eye-footer__bottom {
    border-top: 1px solid #1e293b;
    padding-top: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    font-size: 0.85rem;
  }

  .eye-footer__copyright {
    color: #64748b;
    margin: 0;
  }

  .eye-footer__legal-links {
    display: flex;
    gap: 1.5rem;
  }

  .eye-footer__legal-link {
    color: #64748b;
    text-decoration: none;
  }

  .eye-footer__legal-link:hover {
    color: #94a3b8;
  }

  @media (max-width: 992px) {
    .eye-footer__grid {
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
    }
  }

  @media (max-width: 600px) {
    .eye-footer__grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<footer class="eye-footer">
  <div class="eye-footer__container">
    <div class="eye-footer__grid">
      
      <div>
        <h3 class="eye-footer__brand-title"><?php bloginfo( 'name' ); ?></h3>
        <p class="eye-footer__tagline">
          Providing compassionate, state-of-the-art ophthalmology, laser cataract surgery, and comprehensive optical care across New Jersey.
        </p>
        <a href="tel:18005553937" class="eye-footer__phone-badge">
          <span>📞</span> (800) 555-EYES
        </a>
      </div>

      <div>
        <h4 class="eye-footer__col-title">Eye Procedures</h4>
        <ul class="eye-footer__list">
          <li><a href="#cataract" class="eye-footer__link">Laser Cataract Surgery</a></li>
          <li><a href="#lasik" class="eye-footer__link">Custom LASIK & PRK</a></li>
          <li><a href="#glaucoma" class="eye-footer__link">Glaucoma Management</a></li>
          <li><a href="#dry-eye" class="eye-footer__link">Dry Eye Spa Treatments</a></li>
          <li><a href="#optical" class="eye-footer__link">Comprehensive Eye Exams</a></li>
        </ul>
      </div>

      <div>
        <h4 class="eye-footer__col-title">Patient Care</h4>
        <ul class="eye-footer__list">
          <li><a href="#doctors" class="eye-footer__link">Meet Our Surgeons</a></li>
          <li><a href="#insurance" class="eye-footer__link">Insurance & Financing</a></li>
          <li><a href="#forms" class="eye-footer__link">Patient Forms</a></li>
          <li><a href="#faq" class="eye-footer__link">Surgery FAQs</a></li>
        </ul>
      </div>

      <div>
        <h4 class="eye-footer__col-title">Office Hours</h4>
        <div class="eye-footer__info-item">
          <span>📍</span>
          <div>
            <strong>Main Clinic & Surgery Suite</strong><br>
            123 Health Ave, Suite 400<br>
            Paramus, New Jersey 07652
          </div>
        </div>
        <div class="eye-footer__info-item">
          <span>⏰</span>
          <div>
            Mon – Fri: 8:00 AM – 5:00 PM<br>
            Saturday: 9:00 AM – 1:00 PM
          </div>
        </div>
      </div>

    </div>

    <div class="eye-footer__bottom">
      <p class="eye-footer__copyright">
        &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'advanced-eye-care' ); ?>
      </p>
      <div class="eye-footer__legal-links">
        <a href="#privacy" class="eye-footer__legal-link">Privacy Policy</a>
        <a href="#hipaa" class="eye-footer__legal-link">HIPAA Compliance</a>
        <a href="#accessibility" class="eye-footer__legal-link">Accessibility</a>
      </div>
    </div>
  </div>
</footer>
