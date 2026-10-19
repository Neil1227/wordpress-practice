<?php
/**
 * Vault Component: Medical & Clinic Hero (Dual Action Buttons + Pill Tag)
 *
 * $args options:
 * - badge (string)
 * - title (string)
 * - subtitle (string)
 * - cta_primary (string)
 * - cta_secondary (string)
 * - primary_url (string)
 * - secondary_url (string)
 */

$badge         = $args['badge'] ?? '✨ Board-Certified Specialists in 2026';
$title         = $args['title'] ?? 'Comprehensive Care for Your Health & Well-Being';
$subtitle      = $args['subtitle'] ?? 'Experience gentle, state-of-the-art treatments with compassionate doctors and zero waiting times.';
$cta_primary   = $args['cta_primary'] ?? 'Book Appointment Online';
$cta_secondary = $args['cta_secondary'] ?? 'View Treatments';
$primary_url   = $args['primary_url'] ?? '#appointment';
$secondary_url = $args['secondary_url'] ?? '#services';
?>

<section class="vault-hero-medical">
    <?php if ( $badge ) : ?>
        <div class="vault-pill-badge">
            <?php echo esc_html( $badge ); ?>
        </div>
    <?php endif; ?>

    <h1 class="vault-hero-heading">
        <?php echo esc_html( $title ); ?>
    </h1>

    <p class="vault-hero-subtext">
        <?php echo esc_html( $subtitle ); ?>
    </p>

    <div class="vault-btn-group">
        <a href="<?php echo esc_url( $primary_url ); ?>" class="vault-btn-primary">
            <?php echo esc_html( $cta_primary ); ?> &rarr;
        </a>
        <a href="<?php echo esc_url( $secondary_url ); ?>" class="vault-btn-outline">
            <?php echo esc_html( $cta_secondary ); ?>
        </a>
    </div>
</section>
