<?php
/**
 * Vault Component: Creative Agency / Company Team Grid
 *
 * $args options:
 * - title (string)
 * - subtitle (string)
 */

$title    = $args['title'] ?? 'The Minds Behind the Work';
$subtitle = $args['subtitle'] ?? 'Our cross-disciplinary team of engineers, designers, and strategists.';
?>

<section class="vault-team-section">
    <div class="vault-section-header">
        <span class="vault-section-tag">Our Team</span>
        <h2 class="vault-section-title"><?php echo esc_html( $title ); ?></h2>
        <p class="vault-section-sub"><?php echo esc_html( $subtitle ); ?></p>
    </div>

    <div class="vault-team-grid">
        <div class="vault-team-card">
            <div class="vault-avatar-circle"><i class="bi bi-laptop"></i></div>
            <span class="vault-role-badge">Lead Architect</span>
            <h3 class="vault-member-name">Alex Rivera</h3>
            <p class="vault-member-bio">Full-stack specialist architecting modular WordPress and modern headless web systems.</p>
        </div>

        <div class="vault-team-card">
            <div class="vault-avatar-circle"><i class="bi bi-palette-fill"></i></div>
            <span class="vault-role-badge">Design Director</span>
            <h3 class="vault-member-name">Sophia Chen</h3>
            <p class="vault-member-bio">Crafting pixel-perfect design systems, brand identities, and high-conversion UX flows.</p>
        </div>

        <div class="vault-team-card">
            <div class="vault-avatar-circle"><i class="bi bi-graph-up-arrow"></i></div>
            <span class="vault-role-badge">Growth Strategist</span>
            <h3 class="vault-member-name">Liam Vance</h3>
            <p class="vault-member-bio">Driving data-driven SEO, conversion rate optimization, and client revenue scaling.</p>
        </div>
    </div>
</section>
