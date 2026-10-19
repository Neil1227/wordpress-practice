<?php
/**
 * Vault Component: Doctors & Medical Practitioners Grid
 *
 * $args options:
 * - title (string)
 * - subtitle (string)
 */

$title    = $args['title'] ?? 'Meet Our Board-Certified Specialists';
$subtitle = $args['subtitle'] ?? 'Our dedicated healthcare specialists bring decades of combined clinical expertise to every patient.';
?>

<section class="vault-team-section">
    <div class="vault-section-header">
        <span class="vault-section-tag">Clinical Team</span>
        <h2 class="vault-section-title"><?php echo esc_html( $title ); ?></h2>
        <p class="vault-section-sub"><?php echo esc_html( $subtitle ); ?></p>
    </div>

    <div class="vault-team-grid">
        <div class="vault-team-card">
            <div class="vault-avatar-circle">👨‍⚕️</div>
            <span class="vault-role-badge">Chief Medical Officer</span>
            <h3 class="vault-member-name">Dr. Marcus Vance, MD</h3>
            <p class="vault-member-bio">Specializing in preventative health, comprehensive diagnostics, and patient-first medical treatments.</p>
            <div class="vault-member-footer">
                <span class="vault-rating">⭐ 4.9 (340+ Reviews)</span>
                <a href="#appointment" class="vault-link-action">Book &rarr;</a>
            </div>
        </div>

        <div class="vault-team-card">
            <div class="vault-avatar-circle">👩‍⚕️</div>
            <span class="vault-role-badge">Lead Surgeon</span>
            <h3 class="vault-member-name">Dr. Elena Rostova, DDS</h3>
            <p class="vault-member-bio">Expert in minimally invasive cosmetic surgery, laser dentistry, and advanced digital smile design.</p>
            <div class="vault-member-footer">
                <span class="vault-rating">⭐ 5.0 (290+ Reviews)</span>
                <a href="#appointment" class="vault-link-action">Book &rarr;</a>
            </div>
        </div>

        <div class="vault-team-card">
            <div class="vault-avatar-circle">🩺</div>
            <span class="vault-role-badge">Family Specialist</span>
            <h3 class="vault-member-name">Dr. Julian Hayes, OD</h3>
            <p class="vault-member-bio">Dedicated to family vision care, eye disease prevention, and pediatric clinical health assessments.</p>
            <div class="vault-member-footer">
                <span class="vault-rating">⭐ 4.9 (420+ Reviews)</span>
                <a href="#appointment" class="vault-link-action">Book &rarr;</a>
            </div>
        </div>
    </div>
</section>
