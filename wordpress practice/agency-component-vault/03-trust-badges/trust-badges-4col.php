<?php
/**
 * Vault Component: 4-Column Trust Badges / Social Proof
 *
 * $args options:
 * - b1_icon, b1_title, b1_desc
 * - b2_icon, b2_title, b2_desc
 * - b3_icon, b3_title, b3_desc
 * - b4_icon, b4_title, b4_desc
 */

$b1_icon  = $args['b1_icon'] ?? '👨‍⚕️';
$b1_title = $args['b1_title'] ?? 'Certified Specialists';
$b1_desc  = $args['b1_desc'] ?? '15+ years of verified clinical and industry excellence.';

$b2_icon  = $args['b2_icon'] ?? '⚡';
$b2_title = $args['b2_title'] ?? 'Cutting-Edge Tech';
$b2_desc  = $args['b2_desc'] ?? 'Utilizing modern digital scanners and painless tools.';

$b3_icon  = $args['b3_icon'] ?? '⭐';
$b3_title = $args['b3_title'] ?? '4.9/5 Star Rating';
$b3_desc  = $args['b3_desc'] ?? 'Trusted by over 8,500 happy clients & families.';

$b4_icon  = $args['b4_icon'] ?? '🛡️';
$b4_title = $args['b4_title'] ?? 'Guaranteed Results';
$b4_desc  = $args['b4_desc'] ?? 'Direct coverage, clear warranties, and transparent terms.';
?>

<section class="vault-trust-grid">
    <div class="vault-trust-card">
        <div class="vault-trust-icon"><?php echo esc_html( $b1_icon ); ?></div>
        <h3 class="vault-trust-title"><?php echo esc_html( $b1_title ); ?></h3>
        <p class="vault-trust-desc"><?php echo esc_html( $b1_desc ); ?></p>
    </div>

    <div class="vault-trust-card">
        <div class="vault-trust-icon"><?php echo esc_html( $b2_icon ); ?></div>
        <h3 class="vault-trust-title"><?php echo esc_html( $b2_title ); ?></h3>
        <p class="vault-trust-desc"><?php echo esc_html( $b2_desc ); ?></p>
    </div>

    <div class="vault-trust-card">
        <div class="vault-trust-icon"><?php echo esc_html( $b3_icon ); ?></div>
        <h3 class="vault-trust-title"><?php echo esc_html( $b3_title ); ?></h3>
        <p class="vault-trust-desc"><?php echo esc_html( $b3_desc ); ?></p>
    </div>

    <div class="vault-trust-card">
        <div class="vault-trust-icon"><?php echo esc_html( $b4_icon ); ?></div>
        <h3 class="vault-trust-title"><?php echo esc_html( $b4_title ); ?></h3>
        <p class="vault-trust-desc"><?php echo esc_html( $b4_desc ); ?></p>
    </div>
</section>
