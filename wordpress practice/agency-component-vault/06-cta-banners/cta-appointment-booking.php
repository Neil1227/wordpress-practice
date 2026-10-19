<?php
/**
 * Vault Component: Online Booking / Consultation Scheduling CTA Banner
 *
 * $args options:
 * - title (string)
 * - subtitle (string)
 * - btn_text (string)
 * - btn_url (string)
 */

$title    = $args['title'] ?? 'Ready to Schedule Your Initial Consultation?';
$subtitle = $args['subtitle'] ?? 'Pick a date and time that suits your schedule. New clients receive a complimentary assessment.';
$btn_text = $args['btn_text'] ?? '📅 Book Online in 60 Seconds';
$btn_url  = $args['btn_url'] ?? '#appointment';
?>

<section class="vault-cta-banner vault-cta-booking">
    <div class="vault-cta-inner">
        <h2 class="vault-cta-heading"><?php echo esc_html( $title ); ?></h2>
        <p class="vault-cta-text"><?php echo esc_html( $subtitle ); ?></p>
        <a href="<?php echo esc_url( $btn_url ); ?>" class="vault-btn-white">
            <?php echo esc_html( $btn_text ); ?> &rarr;
        </a>
    </div>
</section>
