<?php
/**
 * Template Part: Services Vertical Tabs
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
  .eye-vertical-tabs {
    padding: 4.5rem 0;
    background: #f8fafc;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  .eye-vertical-tabs__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .eye-vertical-tabs__header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem auto;
  }

  .eye-vertical-tabs__subtitle {
    color: #0284c7;
    font-weight: 700;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.5rem;
  }

  .eye-vertical-tabs__title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0;
  }

  .eye-vertical-tabs__layout {
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 2.5rem;
    align-items: start;
  }

  .eye-vertical-tabs__nav {
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
  }

  .eye-vertical-tabs__btn {
    display: flex;
    align-items: center;
    gap: 1rem;
    width: 100%;
    padding: 1rem 1.25rem;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 50px;
    font-size: 1.05rem;
    font-weight: 600;
    color: #334155;
    cursor: pointer;
    text-align: left;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
  }

  .eye-vertical-tabs__btn-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #f0f9ff;
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.25s ease;
  }

  .eye-vertical-tabs__btn:hover {
    border-color: #93c5fd;
    transform: translateX(4px);
    color: #0284c7;
  }

  .eye-vertical-tabs__btn.is-active {
    background: #0284c7;
    border-color: #0284c7;
    color: #ffffff;
    box-shadow: 0 10px 20px -5px rgba(2, 132, 199, 0.4);
    transform: translateX(6px);
  }

  .eye-vertical-tabs__btn.is-active .eye-vertical-tabs__btn-icon {
    background: #ffffff;
    color: #0284c7;
  }

  .eye-vertical-tabs__panel-wrapper {
    background: #ffffff;
    border-radius: 24px;
    padding: clamp(2rem, 4vw, 3.5rem);
    border: 1px solid #e2e8f0;
    box-shadow: 0 15px 35px -10px rgba(15, 23, 42, 0.05);
    min-height: 480px;
  }

  .eye-vertical-tabs__panel {
    display: none;
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .eye-vertical-tabs__panel.is-active {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  .eye-vertical-tabs__panel-title {
    font-size: 1.85rem;
    font-weight: 800;
    color: #0369a1;
    margin-top: 0;
    margin-bottom: 1.25rem;
  }

  .eye-vertical-tabs__panel-lead {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #475569;
    margin-bottom: 2rem;
  }

  .eye-vertical-tabs__panel-subtitle {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 1rem;
  }

  .eye-vertical-tabs__list {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
  }

  .eye-vertical-tabs__list-item {
    position: relative;
    padding-left: 1.75rem;
    color: #334155;
    line-height: 1.5;
  }

  .eye-vertical-tabs__list-item::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #0284c7;
    font-weight: 800;
  }

  .eye-vertical-tabs__link-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #0284c7;
    color: #ffffff;
    font-weight: 600;
    padding: 0.75rem 1.75rem;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.2s ease;
  }

  .eye-vertical-tabs__link-btn:hover {
    background: #0369a1;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px -4px rgba(2, 132, 199, 0.4);
  }

  @media (max-width: 900px) {
    .eye-vertical-tabs__layout {
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="eye-vertical-tabs" id="services">
  <div class="eye-vertical-tabs__container">
    
    <div class="eye-vertical-tabs__header">
      <div class="eye-vertical-tabs__subtitle">Comprehensive Eye Specialties</div>
      <h2 class="eye-vertical-tabs__title">Advanced Surgical & Clinical Services</h2>
    </div>

    <div class="eye-vertical-tabs__layout">
      
      <div class="eye-vertical-tabs__nav" role="tablist">
        <button class="eye-vertical-tabs__btn is-active" data-tab="tab-cataract" role="tab" aria-selected="true">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <span>Cataract Surgery</span>
        </button>

        <button class="eye-vertical-tabs__btn" data-tab="tab-exams" role="tab" aria-selected="false">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="12" r="4"></circle><circle cx="18" cy="12" r="4"></circle><path d="M10 12h4"></path></svg>
          </div>
          <span>Eye Exams & Optical</span>
        </button>

        <button class="eye-vertical-tabs__btn" data-tab="tab-dryeye" role="tab" aria-selected="false">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
          </div>
          <span>Dry Eye Treatment</span>
        </button>

        <button class="eye-vertical-tabs__btn" data-tab="tab-contacts" role="tab" aria-selected="false">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle></svg>
          </div>
          <span>Contact Lenses</span>
        </button>

        <button class="eye-vertical-tabs__btn" data-tab="tab-lasik" role="tab" aria-selected="false">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
          </div>
          <span>LASIK & Vision Correction</span>
        </button>

        <button class="eye-vertical-tabs__btn" data-tab="tab-glaucoma" role="tab" aria-selected="false">
          <div class="eye-vertical-tabs__btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <span>Glaucoma Management</span>
        </button>
      </div>

      <div class="eye-vertical-tabs__panel-wrapper">
        
        <div class="eye-vertical-tabs__panel is-active" id="tab-cataract" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Advanced Laser Cataract Surgery</h3>
          <p class="eye-vertical-tabs__panel-lead">
            Our board-certified ophthalmologists specialize in computer-guided laser-assisted techniques and premium intraocular lens (IOL) implants, offering personalized treatment plans that restore crisp vision with enhanced safety.
          </p>
          <div class="eye-vertical-tabs__panel-subtitle">Our Advanced Cataract Services Include:</div>
          <ul class="eye-vertical-tabs__list">
            <li class="eye-vertical-tabs__list-item"><strong>LenSx® Laser-Assisted Precision:</strong> Computer-controlled precision for faster, sutureless healing.</li>
            <li class="eye-vertical-tabs__list-item"><strong>Premium Toric & Multifocal IOLs:</strong> Correct astigmatism and presbyopia to eliminate reading glasses.</li>
            <li class="eye-vertical-tabs__list-item"><strong>Minimally Invasive Outpatient Care:</strong> Gentle procedure with rapid same-day recovery.</li>
          </ul>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">
            <span>Book Cataract Consultation</span> &rarr;
          </a>
        </div>

        <div class="eye-vertical-tabs__panel" id="tab-exams" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Comprehensive Eye Exams & Optical</h3>
          <p class="eye-vertical-tabs__panel-lead">
            Thorough medical eye examinations detecting early signs of glaucoma, macular degeneration, and diabetic retinopathy, paired with a designer optical boutique.
          </p>
          <ul class="eye-vertical-tabs__list">
            <li class="eye-vertical-tabs__list-item">Digital retinal imaging and OCT scans.</li>
            <li class="eye-vertical-tabs__list-item">Full prescription check for high-definition digital lenses.</li>
          </ul>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">Schedule Eye Exam</a>
        </div>

        <div class="eye-vertical-tabs__panel" id="tab-dryeye" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Dry Eye Center of Excellence</h3>
          <p class="eye-vertical-tabs__panel-lead">
            Target the root cause of burning, itching, and redness with advanced in-office thermal pulsation therapy and personalized eye drop formulations.
          </p>
          <ul class="eye-vertical-tabs__list">
            <li class="eye-vertical-tabs__list-item">Meibomian gland imaging and tear film osmolarity evaluation.</li>
            <li class="eye-vertical-tabs__list-item">Intense Pulsed Light (IPL) and LipiFlow® therapeutic heating.</li>
          </ul>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">Find Relief Today</a>
        </div>

        <div class="eye-vertical-tabs__panel" id="tab-contacts" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Specialty Contact Lens Fittings</h3>
          <p class="eye-vertical-tabs__panel-lead">
            From daily disposables to custom scleral lenses for keratoconus and hard-to-fit eyes, we ensure all-day comfort and sharp acuity.
          </p>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">Book Lens Fitting</a>
        </div>

        <div class="eye-vertical-tabs__panel" id="tab-lasik" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Custom Bladeless LASIK & PRK</h3>
          <p class="eye-vertical-tabs__panel-lead">
            Achieve 20/20 freedom with custom wavefront-guided topography and all-laser precision.
          </p>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">Free LASIK Screening</a>
        </div>

        <div class="eye-vertical-tabs__panel" id="tab-glaucoma" role="tabpanel">
          <h3 class="eye-vertical-tabs__panel-title">Glaucoma Treatment & MIGS</h3>
          <p class="eye-vertical-tabs__panel-lead">
            Protect your optic nerve with early intervention, selective laser trabeculoplasty (SLT), and Minimally Invasive Glaucoma Surgery (MIGS).
          </p>
          <a href="#book-appointment" class="eye-vertical-tabs__link-btn">Consult a Specialist</a>
        </div>

      </div>

    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.eye-vertical-tabs__btn');
    const panels = document.querySelectorAll('.eye-vertical-tabs__panel');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const targetId = tab.getAttribute('data-tab');
        tabs.forEach(t => {
          t.classList.remove('is-active');
          t.setAttribute('aria-selected', 'false');
        });
        panels.forEach(p => p.classList.remove('is-active'));
        tab.classList.add('is-active');
        tab.setAttribute('aria-selected', 'true');
        const activePanel = document.getElementById(targetId);
        if (activePanel) {
          activePanel.classList.add('is-active');
        }
      });
    });
  });
</script>
