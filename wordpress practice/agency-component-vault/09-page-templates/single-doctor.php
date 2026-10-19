<?php
/**
 * Vault Page Template: Individual Doctor Profile Page
 * Template Name: Single Doctor Bio
 *
 * @package AgencyComponentVault
 */

get_header();
?>

<section class="vault-doctor-profile-section">
    <div class="vault-doctor-profile-card">
        
        <!-- Left Column: Photo & Quick Booking Card -->
        <div class="vault-doc-sidebar">
            <div class="vault-doc-photo-wrap">
                <i class="bi bi-person-circle vault-doc-big-avatar"></i>
            </div>
            
            <div class="vault-doc-status-pill"><i class="bi bi-circle-fill" style="font-size: 0.6rem;"></i> Accepting New Patients</div>
            
            <div class="vault-doc-booking-box">
                <h4>Schedule with this Specialist</h4>
                <p>Same-day & weekend appointments available.</p>
                <a href="#book-slot" class="vault-btn-primary vault-btn-block"><i class="bi bi-calendar-plus-fill"></i> Book Consultation</a>
                <a href="tel:5550192834" class="vault-btn-outline vault-btn-block" style="margin-top: 0.5rem;"><i class="bi bi-telephone-fill"></i> Call Direct Line</a>
            </div>
        </div>

        <!-- Right Column: Biography, Credentials & Specializations -->
        <div class="vault-doc-main-content">
            <span class="vault-role-badge">Chief Dental Surgeon & Orthodontist</span>
            <h1 class="vault-doc-heading">Dr. Marcus Vance, DDS, FAGD</h1>
            <p class="vault-doc-rating-line">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <strong>4.9 / 5.0</strong> &bull; 340+ Verified Patient Reviews
            </p>

            <div class="vault-doc-bio-block">
                <h3>About Dr. Vance</h3>
                <p>Dr. Marcus Vance is a board-certified dental surgeon with over 16 years of clinical experience specializing in minimally invasive aesthetic dentistry, dental implantology, and full-mouth smile rehabilitation.</p>
                <p>He completed his Doctorate of Dental Surgery with top honors and completed advanced residency training in digital 3D smile mapping and painless laser surgery.</p>
            </div>

            <div class="vault-doc-highlights-grid">
                <div class="vault-highlight-item">
                    <strong><i class="bi bi-mortarboard-fill"></i> Education & Credentials</strong>
                    <span>DDS, Columbia University College of Dental Medicine</span>
                </div>
                <div class="vault-highlight-item">
                    <strong><i class="bi bi-award-fill"></i> Certifications</strong>
                    <span>Fellow of the Academy of General Dentistry (FAGD)</span>
                </div>
                <div class="vault-highlight-item">
                    <strong><i class="bi bi-translate"></i> Languages Spoken</strong>
                    <span>English, Spanish, Filipino</span>
                </div>
                <div class="vault-highlight-item">
                    <strong><i class="bi bi-shield-plus"></i> Core Specialties</strong>
                    <span>Cosmetic Veneers, Implants, Clear Aligners, Laser Surgery</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
// Reusable Reviews Partial
get_template_part( 'template-parts/testimonials-3col', null, array(
    'title' => 'Patient Reviews for Dr. Vance',
) );

// Reusable CTA Banner Partial
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Ready to Consult with Dr. Marcus Vance?',
) );

get_footer();
