<?php
/**
 * Template Part: Our Doctors Section
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$doctors_title    = isset( $args['title'] ) ? $args['title'] : 'Meet Our Board-Certified Eye Surgeons';
$doctors_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : 'World-Class Specialists';
$doctors_intro    = isset( $args['intro'] ) ? $args['intro'] : 'Our multidisciplinary team combines fellowship-trained cataract and refractive surgeons, corneal specialists, and clinical optometrists dedicated to your sight.';
?>
<style>
  .eye-doctors {
    padding: 5rem 0;
    background: #ffffff;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-doctors__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-doctors__head {
    text-align: center;
    max-width: 750px;
    margin: 0 auto 3.5rem auto;
  }

  .eye-doctors__subtitle {
    color: #0284c7;
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.5rem;
  }

  .eye-doctors__title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0 0 1rem 0;
  }

  .eye-doctors__intro {
    font-size: 1.05rem;
    line-height: 1.6;
    color: #64748b;
  }

  .eye-doctors__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
  }

  .eye-doctor-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                border-color 0.35s ease;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
  }

  .eye-doctor-card:hover {
    transform: translateY(-8px);
    border-color: #38bdf8;
    box-shadow: 0 20px 35px -10px rgba(2, 132, 199, 0.18), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .eye-doctor-card__media {
    position: relative;
    height: 240px;
    background: linear-gradient(135deg, #e0f2fe, #bae6fd);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .eye-doctor-card__avatar {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    background: #ffffff;
    border: 4px solid #ffffff;
    box-shadow: 0 8px 25px rgba(2, 132, 199, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.5rem;
    transition: transform 0.35s ease;
  }

  .eye-doctor-card:hover .eye-doctor-card__avatar {
    transform: scale(1.08);
  }

  .eye-doctor-card__badge {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(6px);
    color: #38bdf8;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 0.35rem 0.75rem;
    border-radius: 50px;
  }

  .eye-doctor-card__body {
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .eye-doctor-card__name {
    font-size: 1.3rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.35rem 0;
  }

  .eye-doctor-card__name a {
    color: inherit;
    text-decoration: none;
  }

  .eye-doctor-card__name a:hover {
    color: #0284c7;
  }

  .eye-doctor-card__title {
    font-size: 0.9rem;
    font-weight: 600;
    color: #0284c7;
    margin-bottom: 1rem;
  }

  .eye-doctor-card__bio {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #64748b;
    margin-bottom: 1.5rem;
    flex-grow: 1;
  }

  .eye-doctor-card__specialties {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
  }

  .eye-doctor-card__tag {
    background: #f1f5f9;
    color: #475569;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 0.25rem 0.65rem;
    border-radius: 6px;
  }

  .eye-doctor-card__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 0.75rem;
    background: #0284c7;
    color: #ffffff;
    font-weight: 700;
    font-size: 0.95rem;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.25s ease;
  }

  .eye-doctor-card__btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(2, 132, 199, 0.3);
  }
</style>

<section class="eye-doctors" id="doctors">
  <div class="eye-doctors__container">
    
    <div class="eye-doctors__head">
      <div class="eye-doctors__subtitle"><?php echo esc_html( $doctors_subtitle ); ?></div>
      <h2 class="eye-doctors__title"><?php echo esc_html( $doctors_title ); ?></h2>
      <p class="eye-doctors__intro"><?php echo esc_html( $doctors_intro ); ?></p>
    </div>

    <div class="eye-doctors__grid">
      
      <!-- Doctor 1: Dr. Jing Jing Feng -->
      <article class="eye-doctor-card">
        <div class="eye-doctor-card__media">
          <div class="eye-doctor-card__avatar">👨‍⚕️</div>
          <span class="eye-doctor-card__badge">Cataract & Glaucoma</span>
        </div>
        <div class="eye-doctor-card__body">
          <h3 class="eye-doctor-card__name">
            <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-jing-jing-feng/' ) ); ?>">
              Dr. Jing Jing Feng, M.D., F.A.A.O.
            </a>
          </h3>
          <div class="eye-doctor-card__title">Ophthalmic Surgeon & Glaucoma Fellow</div>
          <p class="eye-doctor-card__bio">
            Specializing in femtosecond laser cataract surgery, premium multifocal lenses, and micro-invasive glaucoma surgery (MIGS) with over 15 years of surgical excellence.
          </p>
          <div class="eye-doctor-card__specialties">
            <span class="eye-doctor-card__tag">Laser Cataract</span>
            <span class="eye-doctor-card__tag">MIGS Shunts</span>
            <span class="eye-doctor-card__tag">Toric IOLs</span>
          </div>
          <!-- DIRECT LINK TO THE CHILD DOCTOR SUB-PAGE -->
          <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-jing-jing-feng/' ) ); ?>" class="eye-doctor-card__btn">
            <span>View Doctor Bio & Profile</span> &rarr;
          </a>
        </div>
      </article>

      <!-- Doctor 2: Dr. Charles S. Reing -->
      <article class="eye-doctor-card">
        <div class="eye-doctor-card__media">
          <div class="eye-doctor-card__avatar">👨‍⚕️</div>
          <span class="eye-doctor-card__badge">Cornea & Refractive</span>
        </div>
        <div class="eye-doctor-card__body">
          <h3 class="eye-doctor-card__name">
            <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-charles-reing/' ) ); ?>">
              Dr. Charles S. Reing, M.D., F.A.A.O.
            </a>
          </h3>
          <div class="eye-doctor-card__title">Director of Refractive Surgery</div>
          <p class="eye-doctor-card__bio">
            Pioneer in custom wavefront LASIK, PRK, and corneal transplantation. Passionate about delivering crystal-clear 20/20 lifestyle vision.
          </p>
          <div class="eye-doctor-card__specialties">
            <span class="eye-doctor-card__tag">Bladeless LASIK</span>
            <span class="eye-doctor-card__tag">Cross-linking</span>
            <span class="eye-doctor-card__tag">PRK</span>
          </div>
          <!-- DIRECT LINK TO THE CHILD DOCTOR SUB-PAGE -->
          <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-charles-reing/' ) ); ?>" class="eye-doctor-card__btn">
            <span>View Doctor Bio & Profile</span> &rarr;
          </a>
        </div>
      </article>

      <!-- Doctor 3: Dr. Elena Rostova -->
      <article class="eye-doctor-card">
        <div class="eye-doctor-card__media">
          <div class="eye-doctor-card__avatar">👩‍⚕️</div>
          <span class="eye-doctor-card__badge">Optometric Physician</span>
        </div>
        <div class="eye-doctor-card__body">
          <h3 class="eye-doctor-card__name">
            <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-elena-rostova/' ) ); ?>">
              Dr. Elena Rostova, O.D.
            </a>
          </h3>
          <div class="eye-doctor-card__title">Dry Eye & Specialty Contact Lens Director</div>
          <p class="eye-doctor-card__bio">
            Expert in diagnosing ocular surface disease, advanced LipiFlow thermal therapy, and fitting hard-to-fit custom scleral lenses for irregular corneas.
          </p>
          <div class="eye-doctor-card__specialties">
            <span class="eye-doctor-card__tag">Dry Eye Spa</span>
            <span class="eye-doctor-card__tag">Scleral Contacts</span>
            <span class="eye-doctor-card__tag">Wellness</span>
          </div>
          <!-- DIRECT LINK TO THE CHILD DOCTOR SUB-PAGE -->
          <a href="<?php echo esc_url( home_url( '/our-surgeons/dr-elena-rostova/' ) ); ?>" class="eye-doctor-card__btn">
            <span>View Doctor Bio & Profile</span> &rarr;
          </a>
        </div>
      </article>

    </div>
  </div>
</section>
