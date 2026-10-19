<?php
/**
 * Vault Page Template: Comprehensive Clinical Treatment Guide (Single Service)
 * Template Name: Comprehensive Treatment Guide
 *
 * Inspired by leading ophthalmology and specialized healthcare practices
 * (e.g. Selective Laser Trabeculoplasty SLT Guide).
 *
 * @package AgencyComponentVault
 */

get_header();
?>

<article class="vault-treatment-guide">

    <!-- ========================================== -->
    <!-- 1. EDITORIAL HERO SECTION -->
    <!-- ========================================== -->
    <section class="vault-treatment-hero">
        <div class="vault-container">
            <div class="vault-hero-row">
                <div class="vault-hero-text-col">
                    <div class="vault-hero-meta-badge">
                        <span class="vault-pill-badge"><i class="bi bi-patch-check-fill"></i> Clinical Treatment Guide</span>
                        <span class="vault-reading-time"><i class="bi bi-clock"></i> 5 Min Read</span>
                    </div>
                    <h1 class="vault-hero-title">
                        <?php the_title(); // e.g. "Comprehensive Guide to Selective Laser Trabeculoplasty (SLT)" ?>
                    </h1>
                    <p class="vault-hero-lead">
                        Discover how modern, gentle laser technology helps lower intraocular pressure, reduces dependence on daily medication, and fits seamlessly into proactive patient care.
                    </p>
                </div>
                <div class="vault-hero-media-col">
                    <div class="vault-hero-img-wrap">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large', array( 'class' => 'vault-hero-img' ) ); ?>
                        <?php else : ?>
                            <div class="vault-hero-placeholder">
                                <i class="bi bi-eye-fill"></i>
                                <span>High-Definition Clinical Scan & Patient Care</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. FLOATING "SCHEDULE TODAY" CONVERSION BAR -->
    <!-- ========================================== -->
    <div class="vault-schedule-ribbon-wrap">
        <div class="vault-container">
            <div class="vault-schedule-ribbon">
                <div class="vault-ribbon-heading">
                    <h3>Schedule Today</h3>
                    <p>Same-day and priority consultation slots available</p>
                </div>
                <div class="vault-ribbon-actions">
                    <a href="tel:9737901300" class="vault-btn-outline-pill">
                        <i class="bi bi-telephone-fill"></i> (973) 790-1300
                    </a>
                    <a href="#appointment" class="vault-btn-primary-pill">
                        <i class="bi bi-calendar-check-fill"></i> Book Appointment <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- 3. SECTION: OVERVIEW AND SIGNIFICANCE -->
    <!-- ========================================== -->
    <section class="vault-guide-section">
        <div class="vault-container">
            <div class="vault-section-title-wrap">
                <h2>Treatment Overview & Clinical Significance</h2>
                <p>SLT targets the eye’s natural drainage system to improve fluid outflow and safely lower pressure without damaging surrounding tissue.</p>
            </div>

            <div class="vault-accordion-group">
                <details class="vault-accordion-item" open>
                    <summary class="vault-accordion-header">
                        <span><i class="bi bi-bullseye text-primary"></i> Targeted Laser Approach</span>
                        <i class="bi bi-chevron-down vault-chevron"></i>
                    </summary>
                    <div class="vault-accordion-body">
                        <p>The 532 nm Q-switched Nd:YAG laser delivers microscopic light pulses specifically absorbed by melanin-rich pigmented cells in the trabecular meshwork, stimulating natural biological drainage without burning tissue.</p>
                    </div>
                </details>

                <details class="vault-accordion-item">
                    <summary class="vault-accordion-header">
                        <span><i class="bi bi-shield-check text-primary"></i> Non-Invasive & Pain-Free Nature</span>
                        <i class="bi bi-chevron-down vault-chevron"></i>
                    </summary>
                    <div class="vault-accordion-body">
                        <p>Unlike conventional surgical procedures, SLT requires zero surgical incisions. Topical numbing drops ensure complete comfort, with 98% of patients reporting zero procedural pain.</p>
                    </div>
                </details>

                <details class="vault-accordion-item">
                    <summary class="vault-accordion-header">
                        <span><i class="bi bi-arrow-repeat text-primary"></i> Repeatability & Long-Term Safety</span>
                        <i class="bi bi-chevron-down vault-chevron"></i>
                    </summary>
                    <div class="vault-accordion-body">
                        <p>Because cellular architecture is preserved rather than scarred, the procedure can be safely repeated in subsequent years should intraocular pressure require further stabilization.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. ZIG-ZAG: PATIENT ELIGIBILITY & CONTRAINDICATIONS -->
    <!-- ========================================== -->
    <section class="vault-guide-section vault-section-alt">
        <div class="vault-container">
            <div class="vault-zigzag-row vault-reverse">
                <div class="vault-zigzag-media">
                    <div class="vault-card-media-box">
                        <i class="bi bi-people-fill vault-media-icon"></i>
                        <span>Candidates & Eligibility Criteria</span>
                    </div>
                </div>
                <div class="vault-zigzag-content">
                    <h2>Patient Eligibility & Contraindications</h2>
                    <p>Understanding whether SLT is the right first-line or complementary therapy ensures optimal outcomes and lasting vision preservation.</p>

                    <details class="vault-accordion-item" open>
                        <summary class="vault-accordion-header">
                            <span><i class="bi bi-check-circle-fill text-success"></i> Ideal Candidates for SLT</span>
                            <i class="bi bi-chevron-down vault-chevron"></i>
                        </summary>
                        <div class="vault-accordion-body">
                            <ul class="vault-checklist">
                                <li><i class="bi bi-check2"></i> Primary open-angle glaucoma or ocular hypertension</li>
                                <li><i class="bi bi-check2"></i> Patients experiencing side effects or intolerance to eye drops</li>
                                <li><i class="bi bi-check2"></i> Difficulty maintaining daily drop routines due to memory or dexterity</li>
                                <li><i class="bi bi-check2"></i> Need for added pressure reduction following prior cataract surgery</li>
                            </ul>
                        </div>
                    </details>

                    <details class="vault-accordion-item">
                        <summary class="vault-accordion-header">
                            <span><i class="bi bi-exclamation-triangle-fill text-warning"></i> Contraindications</span>
                            <i class="bi bi-chevron-down vault-chevron"></i>
                        </summary>
                        <div class="vault-accordion-body">
                            <p>SLT is generally not recommended for active uveitic/inflammatory glaucoma, congenital glaucoma, or closed-angle conditions that obstruct the laser angle.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. ZIG-ZAG: PROCEDURE DETAILS (STEP-BY-STEP) -->
    <!-- ========================================== -->
    <section class="vault-guide-section">
        <div class="vault-container">
            <div class="vault-zigzag-row">
                <div class="vault-zigzag-media">
                    <div class="vault-card-media-box">
                        <i class="bi bi-hospital-fill vault-media-icon"></i>
                        <span>10-15 Minute Outpatient In-Office Visit</span>
                    </div>
                </div>
                <div class="vault-zigzag-content">
                    <h2>SLT Procedure Details: What to Expect</h2>
                    <p>The entire visit is performed comfortably in-office, requiring less than 15 minutes of total chair time.</p>

                    <div class="vault-step-cards">
                        <div class="vault-step-card-mini">
                            <div class="vault-step-badge">1</div>
                            <div>
                                <h4>Gentle Preparation</h4>
                                <p>Specialized pressure-lowering and anesthetic eye drops are administered to ensure full comfort.</p>
                            </div>
                        </div>

                        <div class="vault-step-card-mini">
                            <div class="vault-step-badge">2</div>
                            <div>
                                <h4>Laser Application</h4>
                                <p>A precision contact lens focuses short, gentle pulses across the drainage channel in under 5 minutes.</p>
                            </div>
                        </div>

                        <div class="vault-step-card-mini">
                            <div class="vault-step-badge">3</div>
                            <div>
                                <h4>Immediate Post-Care</h4>
                                <p>A brief post-check confirms stable pressure, and you are cleared to return home or work right away.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 6. FULL-WIDTH SPLIT HIGHLIGHT SECTION -->
    <!-- ========================================== -->
    <section class="vault-highlight-split">
        <div class="vault-container-fluid">
            <div class="vault-split-row">
                <div class="vault-split-visual">
                    <div class="vault-split-img-placeholder">
                        <i class="bi bi-heart-pulse-fill"></i>
                        <span>Comprehensive Glaucoma Management</span>
                    </div>
                </div>
                <div class="vault-split-content-col">
                    <div class="vault-split-card">
                        <span class="vault-pill-badge"><i class="bi bi-award-fill"></i> Long-Term Vision Stability</span>
                        <h2>Incorporating SLT into a Personalized Care Plan</h2>
                        <p>SLT is most effective when integrated into a proactive, lifelong vision monitoring strategy tailored to your lifestyle.</p>
                        
                        <div class="vault-split-points">
                            <div class="vault-split-point">
                                <i class="bi bi-capsule"></i>
                                <div>
                                    <strong>Reduces Medication Burden</strong>
                                    <span>Helps patients minimize or eliminate multiple daily prescription drops.</span>
                                </div>
                            </div>
                            <div class="vault-split-point">
                                <i class="bi bi-graph-down-arrow"></i>
                                <div>
                                    <strong>Prevents Dangerous Pressure Spikes</strong>
                                    <span>Provides continuous, 24/7 intraocular pressure stability.</span>
                                </div>
                            </div>
                        </div>

                        <a href="#appointment" class="vault-btn-primary" style="margin-top: 1.5rem;">
                            <i class="bi bi-calendar2-week-fill"></i> Consult Our Glaucoma Specialists
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 7. FREQUENTLY ASKED QUESTIONS (FAQ) -->
    <!-- ========================================== -->
    <section class="vault-guide-section">
        <div class="vault-container">
            <div class="vault-zigzag-row vault-reverse">
                <div class="vault-zigzag-media">
                    <div class="vault-card-media-box">
                        <i class="bi bi-question-circle-fill vault-media-icon"></i>
                        <span>Frequently Asked Questions</span>
                    </div>
                </div>
                <div class="vault-zigzag-content">
                    <h2>Frequently Asked Questions</h2>
                    <p>Have questions about Selective Laser Trabeculoplasty? Here are answers to our patients’ most common inquiries.</p>

                    <div class="vault-accordion-group">
                        <details class="vault-accordion-item" open>
                            <summary class="vault-accordion-header">
                                <span>Can SLT be used as a first-line treatment?</span>
                                <i class="bi bi-chevron-down vault-chevron"></i>
                            </summary>
                            <div class="vault-accordion-body">
                                <p>Yes. Major clinical trials (such as the LiGHT Study) confirmed that SLT provides equal or superior pressure control compared to initial drop therapy, saving patients years of medication costs.</p>
                            </div>
                        </details>

                        <details class="vault-accordion-item">
                            <summary class="vault-accordion-header">
                                <span>Is SLT laser treatment painful?</span>
                                <i class="bi bi-chevron-down vault-chevron"></i>
                            </summary>
                            <div class="vault-accordion-body">
                                <p>No. Topical anesthetic eye drops completely numb the surface of the eye. Patients typically feel only slight pressure from the examination lens.</p>
                            </div>
                        </details>

                        <details class="vault-accordion-item">
                            <summary class="vault-accordion-header">
                                <span>How soon will I notice results?</span>
                                <i class="bi bi-chevron-down vault-chevron"></i>
                            </summary>
                            <div class="vault-accordion-body">
                                <p>Pressure reduction begins within days and reaches optimal stabilization over 4 to 8 weeks, monitored closely during follow-up visits.</p>
                            </div>
                        </details>

                        <details class="vault-accordion-item">
                            <summary class="vault-accordion-header">
                                <span>Is the procedure covered by health insurance?</span>
                                <i class="bi bi-chevron-down vault-chevron"></i>
                            </summary>
                            <div class="vault-accordion-body">
                                <p>Yes. SLT is a medically necessary clinical procedure approved and covered by Medicare, Medicaid, and virtually all major commercial insurance plans.</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 8. MULTI-LOCATION PRACTICE FOOTPRINT -->
    <!-- ========================================== -->
    <section class="vault-guide-section vault-section-alt">
        <div class="vault-container">
            <div class="vault-section-title-wrap">
                <span class="vault-section-tag">Convenient Care Centers</span>
                <h2>Visit One of Our Modern Eye Care Locations</h2>
                <p>Compassionate specialists and advanced diagnostic suites located across the region.</p>
            </div>

            <div class="vault-locations-grid">
                <div class="vault-location-card">
                    <h4>Wayne Clinic & Laser Suite</h4>
                    <p class="vault-loc-address"><i class="bi bi-geo-alt-fill"></i> 123 Hamburg Turnpike, Suite 201<br>Wayne, NJ 07470</p>
                    <p class="vault-loc-phone"><i class="bi bi-telephone-fill"></i> (973) 790-1300</p>
                    <a href="tel:9737901300" class="vault-loc-link">Call Wayne Desk &rarr;</a>
                </div>

                <div class="vault-location-card">
                    <h4>Randolph Medical Center</h4>
                    <p class="vault-loc-address"><i class="bi bi-geo-alt-fill"></i> 450 Route 10 East, Building B<br>Randolph, NJ 07869</p>
                    <p class="vault-loc-phone"><i class="bi bi-telephone-fill"></i> (973) 790-1300</p>
                    <a href="tel:9737901300" class="vault-loc-link">Call Randolph Desk &rarr;</a>
                </div>

                <div class="vault-location-card">
                    <h4>Paramus Surgical Pavilion</h4>
                    <p class="vault-loc-address"><i class="bi bi-geo-alt-fill"></i> 80 E. Route 4, Suite 110<br>Paramus, NJ 07652</p>
                    <p class="vault-loc-phone"><i class="bi bi-telephone-fill"></i> (201) 488-8200</p>
                    <a href="tel:2014888200" class="vault-loc-link">Call Paramus Desk &rarr;</a>
                </div>

                <div class="vault-location-card">
                    <h4>Clifton Vision Center</h4>
                    <p class="vault-loc-address"><i class="bi bi-geo-alt-fill"></i> 1033 Clifton Ave, Suite 104<br>Clifton, NJ 07013</p>
                    <p class="vault-loc-phone"><i class="bi bi-telephone-fill"></i> (973) 472-8844</p>
                    <a href="tel:9734728844" class="vault-loc-link">Call Clifton Desk &rarr;</a>
                </div>
            </div>
        </div>
    </section>

</article>

<?php
// Reusable 5-Star Testimonials
get_template_part( 'template-parts/testimonials-3col', null, array(
    'title' => 'Patient Results & Verified Experiences',
) );

// Reusable Urgent Hotline Banner
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Ready to Protect Your Vision With SLT?',
) );

get_footer();
