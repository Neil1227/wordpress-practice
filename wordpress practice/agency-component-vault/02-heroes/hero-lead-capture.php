<?php
/**
 * Vault Component: High-Converting Lead Capture Hero (with inline form/input)
 *
 * $args options:
 * - badge (string)
 * - title (string)
 * - subtitle (string)
 * - btn_text (string)
 * - input_placeholder (string)
 */

$badge             = $args['badge'] ?? '🚀 Scale Your Business Today';
$title             = $args['title'] ?? 'Grow Your Brand With High-Performance Web Solutions';
$subtitle          = $args['subtitle'] ?? 'We craft bespoke web experiences engineered to convert visitors into loyal clients.';
$btn_text          = $args['btn_text'] ?? 'Get Free Quote';
$input_placeholder = $args['input_placeholder'] ?? 'Enter your email address...';
?>

<section class="vault-hero-lead">
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

    <form class="vault-lead-form" onsubmit="event.preventDefault(); alert('Lead captured!');">
        <input type="email" placeholder="<?php echo esc_attr( $input_placeholder ); ?>" required class="vault-lead-input" />
        <button type="submit" class="vault-btn-primary">
            <?php echo esc_html( $btn_text ); ?>
        </button>
    </form>

    <div class="vault-lead-guarantee">
        <span>🔒 100% Free Consultation &bull; Zero Obligation &bull; Instant Response</span>
    </div>
</section>
