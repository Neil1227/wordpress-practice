<?php
/**
 * Vault Component: 3-Column Big Numeric Stats Counter
 *
 * $args options:
 * - stat1_num, stat1_label
 * - stat2_num, stat2_label
 * - stat3_num, stat3_label
 */

$s1_num   = $args['stat1_num'] ?? '99.8%';
$s1_label = $args['stat1_label'] ?? 'Client Satisfaction Rate';

$s2_num   = $args['stat2_num'] ?? '15k+';
$s2_label = $args['stat2_label'] ?? 'Successful Treatments & Projects';

$s3_num   = $args['stat3_num'] ?? '24/7';
$s3_label = $args['stat3_label'] ?? 'Emergency & Direct Support';
?>

<section class="vault-stats-grid">
    <div class="vault-stat-box">
        <div class="vault-stat-number"><?php echo esc_html( $s1_num ); ?></div>
        <div class="vault-stat-label"><?php echo esc_html( $s1_label ); ?></div>
    </div>

    <div class="vault-stat-box">
        <div class="vault-stat-number"><?php echo esc_html( $s2_num ); ?></div>
        <div class="vault-stat-label"><?php echo esc_html( $s2_label ); ?></div>
    </div>

    <div class="vault-stat-box">
        <div class="vault-stat-number"><?php echo esc_html( $s3_num ); ?></div>
        <div class="vault-stat-label"><?php echo esc_html( $s3_label ); ?></div>
    </div>
</section>
