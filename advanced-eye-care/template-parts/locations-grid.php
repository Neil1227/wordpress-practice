<?php
/**
 * Template Part: Clinic Locations & Hours Grid
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$locations_title    = isset( $args['title'] ) ? $args['title'] : 'Our New Jersey Clinic & Surgery Centers';
$locations_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : 'Convenient Regional Locations';
?>
<style>
  .eye-locations {
    padding: 4.5rem 0;
    background: #ffffff;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-locations__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-locations__header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem auto;
  }

  .eye-locations__subtitle {
    color: #0284c7;
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.5rem;
  }

  .eye-locations__title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0 0 1rem 0;
  }

  .eye-locations__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
  }

  .eye-location-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2.25rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                border-color 0.35s ease;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
    position: relative;
  }

  .eye-location-card:hover {
    transform: translateY(-6px);
    border-color: #0284c7;
    box-shadow: 0 20px 35px -10px rgba(2, 132, 199, 0.15);
  }

  .eye-location-card__city {
    font-size: 1.4rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.5rem 0;
  }

  .eye-location-card__type {
    display: inline-block;
    background: #e0f2fe;
    color: #0369a1;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 0.25rem 0.65rem;
    border-radius: 50px;
    margin-bottom: 1.25rem;
  }

  .eye-location-card__info {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
    color: #475569;
    font-size: 0.95rem;
  }

  .eye-location-card__info li {
    display: flex;
    gap: 10px;
    line-height: 1.5;
  }

  .eye-location-card__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 0.85rem;
    background: #0284c7;
    color: #ffffff;
    font-weight: 700;
    font-size: 0.95rem;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.2s ease;
  }

  .eye-location-card__btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(2, 132, 199, 0.3);
  }
</style>

<section class="eye-locations" id="locations">
  <div class="eye-locations__container">
    
    <div class="eye-locations__header">
      <div class="eye-locations__subtitle"><?php echo esc_html( $locations_subtitle ); ?></div>
      <h2 class="eye-locations__title"><?php echo esc_html( $locations_title ); ?></h2>
    </div>

    <div class="eye-locations__grid">
      
      <!-- Location 1 -->
      <article class="eye-location-card">
        <div>
          <h3 class="eye-location-card__city">Paramus Clinic & Surgery</h3>
          <span class="eye-location-card__type">Main Ambulatory Surgical Center</span>
          <ul class="eye-location-card__info">
            <li><span>📍</span> <span>123 Health Ave, Suite 400<br>Paramus, NJ 07652</span></li>
            <li><span>📞</span> <span><strong>(201) 555-0199</strong></span></li>
            <li><span>⏰</span> <span>Mon – Fri: 8:00 AM – 5:00 PM<br>Sat: 9:00 AM – 1:00 PM</span></li>
          </ul>
        </div>
        <a href="#book-appointment" class="eye-location-card__btn">
          <span>Book at Paramus Office</span> &rarr;
        </a>
      </article>

      <!-- Location 2 -->
      <article class="eye-location-card">
        <div>
          <h3 class="eye-location-card__city">Jersey City Office</h3>
          <span class="eye-location-card__type">Clinical Diagnostics & Optical</span>
          <ul class="eye-location-card__info">
            <li><span>📍</span> <span>580 Grove Street, Suite 202<br>Jersey City, NJ 07310</span></li>
            <li><span>📞</span> <span><strong>(201) 555-0288</strong></span></li>
            <li><span>⏰</span> <span>Mon – Thu: 8:30 AM – 5:30 PM<br>Fri: 8:30 AM – 4:00 PM</span></li>
          </ul>
        </div>
        <a href="#book-appointment" class="eye-location-card__btn">
          <span>Book at Jersey City Office</span> &rarr;
        </a>
      </article>

      <!-- Location 3 -->
      <article class="eye-location-card">
        <div>
          <h3 class="eye-location-card__city">Fort Lee Center</h3>
          <span class="eye-location-card__type">Laser Vision & Dry Eye Spa</span>
          <ul class="eye-location-card__info">
            <li><span>📍</span> <span>2100 Linwood Ave, Suite 101<br>Fort Lee, NJ 07024</span></li>
            <li><span>📞</span> <span><strong>(201) 555-0377</strong></span></li>
            <li><span>⏰</span> <span>Tue – Sat: 9:00 AM – 5:00 PM<br>Sun & Mon: Closed</span></li>
          </ul>
        </div>
        <a href="#book-appointment" class="eye-location-card__btn">
          <span>Book at Fort Lee Office</span> &rarr;
        </a>
      </article>

    </div>
  </div>
</section>
