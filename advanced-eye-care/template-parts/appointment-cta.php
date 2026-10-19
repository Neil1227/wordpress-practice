<?php
/**
 * Template Part: Appointment CTA Banner
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cta_title       = isset( $args['title'] ) ? $args['title'] : 'Ready to Experience Clear, Crisp Vision?';
$cta_description = isset( $args['description'] ) ? $args['description'] : 'Schedule your comprehensive eye exam or surgical consultation with our specialists in New Jersey. Most major medical and vision insurances accepted.';
$cta_phone       = isset( $args['phone'] ) ? $args['phone'] : '(800) 555-EYES';
?>
<style>
  .eye-cta {
    padding: 5rem 0;
    background: #ffffff;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-cta__container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-cta__box {
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 60%, #0ea5e9 100%);
    border-radius: 24px;
    padding: clamp(2.5rem, 5vw, 4rem) clamp(1.5rem, 4vw, 3.5rem);
    color: #ffffff;
    box-shadow: 0 20px 40px -10px rgba(2, 132, 199, 0.35);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2.5rem;
    flex-wrap: wrap;
    position: relative;
    overflow: hidden;
  }

  .eye-cta__content {
    max-width: 580px;
    position: relative;
    z-index: 1;
  }

  .eye-cta__badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(8px);
    padding: 0.35rem 0.85rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 1rem;
  }

  .eye-cta__title {
    font-size: clamp(1.8rem, 3.5vw, 2.4rem);
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 1rem 0;
  }

  .eye-cta__desc {
    font-size: 1.05rem;
    line-height: 1.6;
    color: #e0f2fe;
    margin: 0;
  }

  .eye-cta__actions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    min-width: 260px;
    position: relative;
    z-index: 1;
  }

  .eye-cta__btn-primary {
    background: #ffffff;
    color: #0369a1;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 1rem 1.75rem;
    border-radius: 50px;
    text-align: center;
    text-decoration: none;
    transition: all 0.25s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }

  .eye-cta__btn-primary:hover {
    transform: translateY(-3px);
    background: #f8fafc;
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .eye-cta__btn-phone {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    color: #ffffff;
    font-weight: 600;
    text-decoration: none;
    font-size: 1rem;
  }

  .eye-cta__btn-phone:hover {
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .eye-cta__box {
      flex-direction: column;
      align-items: flex-start;
    }
    .eye-cta__actions {
      width: 100%;
    }
  }
</style>

<section class="eye-cta" id="book-appointment">
  <div class="eye-cta__container">
    <div class="eye-cta__box">
      
      <div class="eye-cta__content">
        <span class="eye-cta__badge">✨ Personalized Vision Care</span>
        <h2 class="eye-cta__title"><?php echo esc_html( $cta_title ); ?></h2>
        <p class="eye-cta__desc">
          <?php echo esc_html( $cta_description ); ?>
        </p>
      </div>

      <div class="eye-cta__actions">
        <a href="#appointment-form" class="eye-cta__btn-primary">
          Book Appointment Online
        </a>
        <a href="tel:18005553937" class="eye-cta__btn-phone">
          <span>📞 Or Call:</span> <strong><?php echo esc_html( $cta_phone ); ?></strong>
        </a>
      </div>

    </div>
  </div>
</section>
