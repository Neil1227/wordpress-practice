<?php
/**
 * Vault Page Template: Dedicated "Contact & Location" Page
 * Template Name: Contact Us Page
 *
 * In WordPress: When a client creates a Page with slug "contact" (/contact),
 * WordPress will automatically load page-contact.php!
 *
 * @package AgencyComponentVault
 */

get_header();

// 1. Reusable Hero Partial
get_template_part( 'template-parts/hero-medical-clinic', null, array(
    'badge'         => 'Convenient Central Practice',
    'title'         => 'Get in Touch with Our Clinical Team',
    'subtitle'      => 'We are here to help. Reach out by phone, email, or visit our modern clinic facility.',
    'cta_primary'   => 'Call (555) 019-2834',
    'cta_secondary' => 'Get Directions',
    'primary_url'   => 'tel:5550192834',
    'secondary_url' => '#map',
) );
?>

<section class="vault-contact-section">
    <div class="vault-contact-grid">
        
        <!-- Left Column: Location Cards & Hours -->
        <div class="vault-contact-info-col">
            
            <div class="vault-info-box">
                <div class="vault-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                    <h4>Clinic Location</h4>
                    <p>123 Healthcare Blvd, Suite 400<br>Medical Arts Center, Building B<br>Free Patient Parking on Site</p>
                </div>
            </div>

            <div class="vault-info-box">
                <div class="vault-info-icon"><i class="bi bi-telephone-inbound-fill"></i></div>
                <div>
                    <h4>Direct Phone & Fax</h4>
                    <p>Main Line: <strong>(555) 019-2834</strong><br>Emergency Line: <strong>(555) 019-9999</strong><br>Fax: (555) 019-2835</p>
                </div>
            </div>

            <div class="vault-info-box">
                <div class="vault-info-icon"><i class="bi bi-clock-history"></i></div>
                <div>
                    <h4>Operating Hours</h4>
                    <p>Monday – Friday: 8:00 AM – 6:00 PM<br>Saturday: 9:00 AM – 2:00 PM<br>Sunday: Emergency On-Call Only</p>
                </div>
            </div>

        </div>

        <!-- Right Column: Quick Appointment / Message Form -->
        <div class="vault-contact-form-col">
            <h3>Send a Message or Request an Appointment</h3>
            <p>Fill out the form below and our clinic coordinator will contact you within 15 minutes.</p>

            <form class="vault-form-block" onsubmit="event.preventDefault(); alert('Message received! We will call you shortly.');">
                <div class="vault-form-row">
                    <div class="vault-form-group">
                        <label>Your Full Name *</label>
                        <input type="text" placeholder="e.g. John Doe" required class="vault-form-control" />
                    </div>
                    <div class="vault-form-group">
                        <label>Phone Number *</label>
                        <input type="tel" placeholder="e.g. (555) 123-4567" required class="vault-form-control" />
                    </div>
                </div>

                <div class="vault-form-group">
                    <label>Preferred Specialist or Treatment</label>
                    <select class="vault-form-control">
                        <option>General Dental Checkup & Cleaning</option>
                        <option>Invisalign & Clear Aligners</option>
                        <option>Laser Teeth Whitening</option>
                        <option>Consultation with Dr. Marcus Vance</option>
                        <option>Consultation with Dr. Elena Rostova</option>
                        <option>Other Medical Inquiry</option>
                    </select>
                </div>

                <div class="vault-form-group">
                    <label>Additional Notes or Questions</label>
                    <textarea rows="4" placeholder="Tell us how we can help you..." class="vault-form-control"></textarea>
                </div>

                <button type="submit" class="vault-btn-primary vault-btn-block" style="padding: 0.85rem;">
                    ✉️ Submit Appointment Request
                </button>
            </form>
        </div>

    </div>
</section>

<?php
// Reusable CTA Banner
get_template_part( 'template-parts/cta-urgent-call' );

get_footer();
