<?php
/**
 * Vault Component: Direct Hotline / Emergency Call-to-Action Banner
 * Supports WordPress Customizer integration (Appearance -> Customize)
 *
 * $args options:
 * - title (string)
 * - subtitle (string)
 * - phone (string)
 */

$title    = get_theme_mod( 'cta_title', $args['title'] ?? 'Need Immediate Professional Assistance?' );
$subtitle = get_theme_mod( 'cta_subtitle', $args['subtitle'] ?? 'Our emergency line is active 24/7. Friendly specialists are standing by to help you immediately.' );
$phone    = get_theme_mod( 'cta_phone', $args['phone'] ?? '(555) 019-2834' );
$num_only = preg_replace( '/[^0-9]/', '', $phone );
?>

<section class="vault-cta-banner vault-cta-urgent">
    <h2 class="vault-cta-heading"><?php echo esc_html( $title ); ?></h2>
    <p class="vault-cta-text"><?php echo esc_html( $subtitle ); ?></p>
    
    <a href="tel:<?php echo esc_attr( $num_only ); ?>" class="vault-btn-white">
        📞 Call <?php echo esc_html( $phone ); ?> Now
    </a>
</section>
