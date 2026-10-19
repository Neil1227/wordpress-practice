<?php
/**
 * Vault Component: Pricing Package / Plan Card
 *
 * $args options:
 * - plan_name (string)
 * - price (string)
 * - period (string)
 * - is_featured (bool)
 * - features (array)
 * - btn_text (string)
 * - btn_url (string)
 */

$plan_name   = $args['plan_name'] ?? 'Professional Plan';
$price       = $args['price'] ?? '$99';
$period      = $args['period'] ?? '/month';
$is_featured = $args['is_featured'] ?? false;
$features    = $args['features'] ?? array(
    'Full Clinical & Dental Consultation',
    'High-Resolution Digital Smile Scan',
    'Custom Preventative Care Plan',
    'Priority Weekend Support',
);
$btn_text    = $args['btn_text'] ?? 'Choose Plan';
$btn_url     = $args['btn_url'] ?? '#signup';
?>

<div class="vault-pricing-card <?php echo $is_featured ? 'vault-pricing-featured' : ''; ?>">
    <?php if ( $is_featured ) : ?>
        <span class="vault-badge-popular">⭐ Most Popular</span>
    <?php endif; ?>

    <h3 class="vault-plan-title"><?php echo esc_html( $plan_name ); ?></h3>
    <div class="vault-price-wrap">
        <span class="vault-price-val"><?php echo esc_html( $price ); ?></span>
        <span class="vault-price-period"><?php echo esc_html( $period ); ?></span>
    </div>

    <ul class="vault-feature-list">
        <?php foreach ( $features as $feat ) : ?>
            <li><span>✓</span> <?php echo esc_html( $feat ); ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="<?php echo esc_url( $btn_url ); ?>" class="<?php echo $is_featured ? 'vault-btn-primary' : 'vault-btn-outline'; ?> vault-btn-block">
        <?php echo esc_html( $btn_text ); ?>
    </a>
</div>
