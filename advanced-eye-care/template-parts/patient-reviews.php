<?php
/**
 * Template Part: Patient Reviews / Testimonials
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reviews_title    = isset( $args['title'] ) ? $args['title'] : 'What Our Patients Are Saying';
$reviews_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : 'Real Stories & 5-Star Outcomes';
$reviews_rating   = isset( $args['rating'] ) ? $args['rating'] : '4.9 / 5.0 Rating Across 500+ Google Reviews';
?>
<style>
  .eye-reviews {
    padding: 4.5rem 0;
    background: #f8fafc;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-reviews__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-reviews__header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem auto;
  }

  .eye-reviews__subtitle {
    color: #0284c7;
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.5rem;
  }

  .eye-reviews__title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0 0 1rem 0;
  }

  .eye-reviews__rating-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    padding: 0.45rem 1.25rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    color: #334155;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  }

  .eye-reviews__stars {
    color: #f59e0b;
    font-size: 1.1rem;
    letter-spacing: 2px;
  }

  .eye-reviews__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
  }

  .eye-review-card {
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

  .eye-review-card:hover {
    transform: translateY(-6px);
    border-color: #38bdf8;
    box-shadow: 0 20px 35px -10px rgba(2, 132, 199, 0.15);
  }

  .eye-review-card__stars {
    color: #f59e0b;
    font-size: 1.15rem;
    margin-bottom: 1.25rem;
  }

  .eye-review-card__quote {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #334155;
    font-style: italic;
    margin-bottom: 1.75rem;
    flex-grow: 1;
  }

  .eye-review-card__author {
    display: flex;
    align-items: center;
    gap: 12px;
    border-top: 1px solid #f1f5f9;
    padding-top: 1.25rem;
  }

  .eye-review-card__avatar {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #e0f2fe;
    color: #0284c7;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
  }

  .eye-review-card__author-info {
    display: flex;
    flex-direction: column;
  }

  .eye-review-card__author-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: #0f172a;
  }

  .eye-review-card__procedure-tag {
    font-size: 0.8rem;
    color: #0284c7;
    font-weight: 600;
  }
</style>

<section class="eye-reviews" id="reviews">
  <div class="eye-reviews__container">
    
    <div class="eye-reviews__header">
      <div class="eye-reviews__subtitle"><?php echo esc_html( $reviews_subtitle ); ?></div>
      <h2 class="eye-reviews__title"><?php echo esc_html( $reviews_title ); ?></h2>
      <div class="eye-reviews__rating-badge">
        <span class="eye-reviews__stars">★★★★★</span>
        <span><?php echo esc_html( $reviews_rating ); ?></span>
      </div>
    </div>

    <div class="eye-reviews__grid">
      
      <!-- Review 1 -->
      <article class="eye-review-card">
        <div>
          <div class="eye-review-card__stars">★★★★★</div>
          <p class="eye-review-card__quote">
            "Dr. Feng performed my laser cataract surgery with multifocal lenses. The very next morning I was reading my morning paper without glasses! The entire staff in Paramus made me feel completely relaxed."
          </p>
        </div>
        <div class="eye-review-card__author">
          <div class="eye-review-card__avatar">MG</div>
          <div class="eye-review-card__author-info">
            <span class="eye-review-card__author-name">Margaret G. — Paramus, NJ</span>
            <span class="eye-review-card__procedure-tag">✓ Laser Cataract & Multifocal IOL</span>
          </div>
        </div>
      </article>

      <!-- Review 2 -->
      <article class="eye-review-card">
        <div>
          <div class="eye-review-card__stars">★★★★★</div>
          <p class="eye-review-card__quote">
            "I had custom LASIK with Dr. Reing. The procedure took under 15 minutes and was completely painless. I went from -6.50 blurry vision to 20/15 precision vision. Truly life-changing!"
          </p>
        </div>
        <div class="eye-review-card__author">
          <div class="eye-review-card__avatar">DT</div>
          <div class="eye-review-card__author-info">
            <span class="eye-review-card__author-name">David T. — Jersey City, NJ</span>
            <span class="eye-review-card__procedure-tag">✓ Custom Bladeless LASIK</span>
          </div>
        </div>
      </article>

      <!-- Review 3 -->
      <article class="eye-review-card">
        <div>
          <div class="eye-review-card__stars">★★★★★</div>
          <p class="eye-review-card__quote">
            "After years of suffering from severe dry eyes and burning, Dr. Rostova’s LipiFlow treatment gave me immediate, lasting relief. Outstanding diagnostic care and compassion."
          </p>
        </div>
        <div class="eye-review-card__author">
          <div class="eye-review-card__avatar">SK</div>
          <div class="eye-review-card__author-info">
            <span class="eye-review-card__author-name">Susan K. — Fort Lee, NJ</span>
            <span class="eye-review-card__procedure-tag">✓ Dry Eye Spa Therapy</span>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>
